<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Categorie;
use AKYOS\EasyCoproBundle\Entity\Document;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Message;
use AKYOS\EasyCoproBundle\Form\EditCoproprieteType;
use AKYOS\EasyCoproBundle\Form\MessageReplyType;
use AKYOS\EasyCoproBundle\Form\MessageType;
use AKYOS\EasyCoproBundle\Form\EditLocataireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class LocataireController extends Controller
{

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
        $copropriete = $locataire->getLot()->getCopropriete();
        $request->getSession()->set('copro', $copropriete);

        $nbDocuments = $em->getRepository(Document::class)->findNbDocumentsByLotForLocataire($locataire->getLot());
        $nbMessagesTotal = $em->getRepository(Message::class)->findNbMessagesByUser($this->getUser());
        $nbMessagesNonLus = $em->getRepository(Message::class)->findUnreadMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/index.html.twig', array(
            'nbDocuments' => $nbDocuments,
            'nbMessagesTotal' => $nbMessagesTotal,
            'nbMessagesNonLus' => $nbMessagesNonLus,
            ));
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
        $form = $this->createForm(EditLocataireType::class, $locataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Vos modifications ont bien été enregistrées.');

            return $this->redirectToRoute('locataire_show');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/edit.html.twig', array(
            'form' => $form->createView(),'locataire' => $locataire
        ));
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());

        $nbMessagesTotal = $em->getRepository(Message::class)->findNbMessagesByUser($this->getUser());
        $nbDocuments = $em->getRepository(Document::class)->findNbDocumentsByLotForLocataire($locataire->getLot());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/show.html.twig', array(
            'locataire' => $locataire,
            'nbDocuments' => $nbDocuments,
            'nbMessagesTotal' => $nbMessagesTotal,
        ));
    }

    public function menuAction(){

        $em = $this->getDoctrine()->getManager();
        $nbMessages = $em->getRepository(Message::class)->findUnreadMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/menu.html.twig', array(
            'nbMessages' => $nbMessages,
        ));
    }

    public function userMenuAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/menuUser.html.twig');
    }

    public function parametersAction(){

        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/parameters.html.twig',array('locataire'=> $locataire));
    }

    public function showCoproprieteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
        $copropriete = $locataire->getLot()->getCopropriete();
        $documents = $em->getRepository(Document::class)->findDocumentsByCopropriete($copropriete);
        $nbrelocataire = $em->getRepository(Locataire::class)->findNbrLocatairesByCopropriete($copropriete);
        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/show_copropriete.html.twig', array(
            'locataire' =>$locataire,
            'documents'=>$documents,
            'copropriete'=>$copropriete,
            'nbrelocataire' =>$nbrelocataire,
        ));
    }

    public function editCoproprieteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
        $copropriete = $locataire->getLot()->getCopropriete();
        $form = $this->createForm(EditCoproprieteType::class, $copropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur la copropriété ont bien été enregistrées.');
            return $this->redirectToRoute('locataire_show_copropriete');
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/edit_copropriete.html.twig',
            ['my_form' => $form->createView(),
                'coproprieteId'=>$copropriete->getId(),
            ]);
    }

    // ACTIONS LIEES AUX DOCUMENTS
    //----------------------------

    public function showDocumentAction(Document $document)
    {
        $locMsg = $this->getDoctrine()->getManager();
        $locataire = $locMsg->getRepository(Locataire::class)->findOneByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/show_document.html.twig', array(
            'document' => $document, 'locataire' => $locataire
        ));
    }

    public function gestionDocumentsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
        $lot = $locataire->getLot();

        $categoriesCount = $em->getRepository(Categorie::class)->findCategoriesCountByLotForLocataires($lot);
        $allDocuments = $em->getRepository(Document::class)->findLotDocumentsSortedByDateForLocataires($lot);

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/gestion_documents.html.twig', array(
            'categoriesCount' => $categoriesCount,
            'documentsCount' => count($allDocuments),
            'documents' => $allDocuments,
        ));
    }

    // ACTIONS LIEES AUX MSGS
    //-----------------------

    public function replyMessageAction(Request $request, Message $message) {
        $reply = new Message();
        $form = $this->createForm(MessageReplyType::class, $reply);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sender = $this->getUser();
            //recuperer l'expéditeur du message original
            $expediteur = $message->getExpediteur();

            $reply
                ->setDateEnvoi(new \DateTime())
                ->setExpediteur($sender)
                ->setIsSupprime(false)
                ->setIsLu(false)
                ->setDestinataireCompte($expediteur->getType());

            //l'utiliser comme cible de la réponse
            $reply->setDestinataire($expediteur);
            //recuperer le titre original du message
            $titre = $message->getTitre();
            //l'utiliser comme titre de sujet avec "Re:" avant
            $reply->setTitre('Re:' . $titre);

            $em = $this->getDoctrine()->getManager();
            $em->persist($reply);
            $em->flush();
            $this->addFlash('info', 'Votre réponse a été envoyée !');
            return $this->redirectToRoute('locataire_inbox');
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/reply_message.html.twig', array(
            'formReply' => $form->createView(),
            'messageId' => $message->getId(),
        ));
    }

    public function showMessageAction(Message $message)
    {
        if ($this->getUser() == $message->getDestinataire() || $this->getUser() == $message->getExpediteur()) {
            $message->setIsLu(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            $expediteurToString= $this->get('akyos.stringify_user')->stringify($message->getExpediteur());

            return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/show_message.html.twig', array(
                'message' => $message,
                'expediteurToString' => $expediteurToString,
            ));
        } else {
            return new Response("Vous n'êtes pas autorisé à lire ce message");
        }
    }

    public function showMessageFromCorbeilleAction(Message $message)
    {
        if ($this->getUser() == $message->getDestinataire() || $this->getUser() == $message->getExpediteur()) {
            $message->setIsLu(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/show_message_from_corbeille.html.twig', array(
                'message' => $message,
            ));
        } else {
            return new Response("Vous n'êtes pas autorisé à lire ce message");
        }
    }

    public function showMessagefromEnvoyesAction(Message $message)
    {
        if ($this->getUser() == $message->getDestinataire() || $this->getUser() == $message->getExpediteur()) {
            $message->setIsLu(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            $destinataireToString= $this->get('akyos.stringify_user')->stringify($message->getDestinataire());

            return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/show_message_from_envoyes.html.twig', array(
                'message' => $message,
                'destinataireToString' => $destinataireToString,
            ));
        } else {
            return new Response("Vous n'êtes pas autorisé à lire ce message");
        }
    }

    public function deleteMessageAction(Request $request, Message $message)
    {
        $locMsg = $this->getDoctrine()->getManager();
        $locataire = $locMsg->getRepository(Locataire::class)->findOneByUser($this->getUser());
        if ($message !== null && $message->getIsSupprime() == false) {
            $em = $this->getDoctrine()->getManager();
            $em->setIsSupprime(true);
            $em->update($message);
            $em->flush();
            $this->addFlash('info', 'Le Message a été mis dans la corbeille.');
            return $this->redirectToRoute('locataire_inbox');
        }
        $this->addFlash('info', "Ce Message n'existe pas !");
        return $this->redirectToRoute('locataire_inbox');
    }

    public function revertMessageAction(Request $request, Message $message)
    {
        if ($message !== null) {
            $em = $this->getDoctrine()->getManager();
            $message->setIsSupprime(false);
            $em->flush();
            $form = $this->createForm(MessageType::class, $message);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('locataire_inbox');
        }

        return $this->redirectToRoute('locataire_inbox');
    }

    public function inboxAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $message
            ->setDateEnvoi(new \DateTime());
        $sender=$this->getUser();
        $message->setExpediteur($sender);
        $message->setisSupprime(false);
        $message->setIsLu(false);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('locataire_inbox');
        }

        $messages = $this->getDoctrine()->getManager()->getRepository(Message::class)
            ->findInboxMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/inbox.html.twig', array(
            'formSend' => $form->createView(),
            'messages' => $messages,
        ));
    }

    public function createMessageAction(Request $request) {

        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message
                ->setDateEnvoi(new \DateTime())
                ->setExpediteur($this->getUser())
                ->setisSupprime(false)
                ->setIsLu(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('locataire_inbox');
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/create_message.html.twig', array(
            'formSend' => $form->createView(),
        ));
    }

    public function messagesEnvoyesAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $message
            ->setDateEnvoi(new \DateTime());
        $sender=$this->getUser();
        $message->setExpediteur($sender);
        $message->setIsSupprime(false);
        $message->setIsLu(false);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('locataire_inbox');
        }

        $messages = $this->getDoctrine()->getManager()->getRepository(Message::class)
            ->findSendMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/messages_envoyes.html.twig', array(
            'formSend' => $form->createView(),
            'messages' => $messages,
        ));
    }

    public function corbeilleAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $message
            ->setDateEnvoi(new \DateTime());
        $sender=$this->getUser();
        $message->setExpediteur($sender);
        $message->setIsSupprime(false);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('locataire_inbox');
        }

        $messages = $this->getDoctrine()->getManager()->getRepository(Message::class)
            ->findDeletedMessagesByUser($this->getUser());

        return $this->render('@AKYOSEasyCopro/BackOffice/Locataire/corbeille.html.twig', array(
            'formSend' => $form->createView(),
            'messages' => $messages,
        ));
    }

    public function nowSupprimeAction(Message $message)
    {
        if ($message !== null) {
            $em = $this->getDoctrine()->getManager();
            $message->setIsSupprime(true);
            $message->setIsLu(true);
            $em->persist($message);
            $em->flush();
            $form = $this->createForm(MessageType::class, $message);
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('locataire_inbox');
        }

        return $this->redirectToRoute('locataire_inbox');
    }

    public function notLuAction(Message $message)
    {
        if ($message !== null) {
            $em = $this->getDoctrine()->getManager();
            $message->setIsLu(false);
            $em->flush();
            $form = $this->createForm(MessageType::class, $message);
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été envoyé !');
            return $this->redirectToRoute('locataire_inbox');
        }

        return $this->redirectToRoute('locataire_inbox');
    }

    public function deleteMessageCorbeilleAction(Request $request, Message $message)
    {
        if ($message !== null && $message->getIsSupprime() == true) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($message);
            $em->flush();
            $this->addFlash('info', 'Le message a été définitivement supprimé.');

            return $this->redirectToRoute('locataire_corbeille');
        }
        
        $this->addFlash('info', "Ce message n'existe pas !");
        return $this->redirectToRoute('locataire_corbeille');
    }

    // ACTIONS REQUETES AJAX
    //----------------------

    public function listCategorieDocumentsAction(Request $request, $categorieId) {

        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $locataire = $em->getRepository(Locataire::class)->findOneByUser($this->getUser());
            $lot = $locataire->getLot();

            if ($categorieId == 'all') {
                $documents = $em->getRepository(Document::class)->findAllDocumentsByLotForLocataires($lot);
            } else {
                $categorie = $em->getRepository(Categorie::class)->find($categorieId);
                $documents = $em->getRepository(Document::class)->findLotDocumentsByCategorieForLocataires($categorie,$lot);
            }

            $encoder = new JsonEncoder();
            $normalizer = new ObjectNormalizer();

            $serializer = new Serializer(array($normalizer), array($encoder));

            $jsonDocuments = $serializer->serialize($documents, 'json');

            return new JsonResponse(array(
                'data'=> $jsonDocuments
            ));
        }
        throw new HttpException('501', 'Invalid Call');
    }


}