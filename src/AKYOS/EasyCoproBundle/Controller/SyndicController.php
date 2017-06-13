<?php

namespace AKYOS\EasyCoproBundle\Controller;

use AKYOS\EasyCoproBundle\Entity\Copropriete;
use AKYOS\EasyCoproBundle\Entity\Lot;
use AKYOS\EasyCoproBundle\Form\CoproprieteType;
use AKYOS\EasyCoproBundle\Entity\Artisan;
use AKYOS\EasyCoproBundle\Entity\Coproprietaire;
use AKYOS\EasyCoproBundle\Entity\Locataire;
use AKYOS\EasyCoproBundle\Entity\Syndic;
use AKYOS\EasyCoproBundle\Form\CreateArtisanType;
use AKYOS\EasyCoproBundle\Form\CreateCoproprietaireType;
use AKYOS\EasyCoproBundle\Form\CreateCoproprieteType;
use AKYOS\EasyCoproBundle\Form\CreateLocataireType;
use AKYOS\EasyCoproBundle\Form\CreateLotType;
use AKYOS\EasyCoproBundle\Form\CreateSyndicType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SyndicController extends Controller
{

    // ACTIONS LIEES AU COMPTE SYNDIC ACTUEL
    //--------------------------------------

    public function indexAction()
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/index.html.twig');
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $form = $this->createForm(CreateSyndicType::class, $syndic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le compte ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_show', array('id' => $syndic->getId()));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show.html.twig', array(
            'syndic' => $syndic
        ));
    }


    // ACTIONS LIEES AUX COPROPRIETAIRES
    //----------------------------------

    public function createCoproprietaireAction(Request $request)
    {
        $coproprietaire = new Coproprietaire();

        $form = $this->createForm(CreateCoproprietaireType::class, $coproprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coproprietaire->getUser()->setType('COPRO');
            $coproprietaire->getUser()->addRole('ROLE_COPRO');
            $em = $this->getDoctrine()->getManager();
            $em->persist($coproprietaire);
            $em->flush();

            $confirmService = $this->get('akyos.confirm_registration');
            $confirmService->confirm($coproprietaire->getUser());

            $request->getSession()->getFlashBag()->add('info', 'Le nouveau compte a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_coproprietaire',
                array('id' => $coproprietaire->getId()));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_coproprietaire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editCoproprietaireAction(Request $request, Coproprietaire $coproprietaire)
    {
        $form = $this->createForm(CreateCoproprietaireType::class, $coproprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le compte ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_show_coproprietaire', array(
                'id' => $coproprietaire->getId(),
            ));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_artisan.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showCoproprietaireAction(Coproprietaire $coproprietaire)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_coproprietaire.html.twig', array(
            'coproprietaire' => $coproprietaire,
        ));
    }

    public function listCoproprietairesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $coproprietaires = $em->getRepository(Coproprietaire::class)
            ->findCoproprietairesBySyndic($syndic);

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_coproprietaires.html.twig', array(
            'coproprietaires' => $coproprietaires,
        ));
    }

    public function deleteCoproprietaireAction(Request $request, Coproprietaire $coproprietaire)
    {
        if ($coproprietaire !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($coproprietaire);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte a bien été supprimé.');

            return $this->redirectToRoute('syndic_list_coproprietaires');
        }
        $request->getSession()->getFlashBag()->add('info', 'Le compte que vous souhaitez supprimer n\'existe pas !');

        return $this->redirectToRoute('syndic_list_coproprietaires');
    }


    // ACTIONS LIEES AUX LOCATAIRES
    //-----------------------------

    public function createLocataireAction(Request $request)
    {
        $locataire = new Locataire();

        $form = $this->createForm(CreateLocataireType::class, $locataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $locataire->getUser()->setEnabled(true)->setType('LOC');
            $locataire->getUser()->addRole('ROLE_LOC');
            $em = $this->getDoctrine()->getManager();
            $em->persist($locataire);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le nouveau compte a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_locataire',
                array('id' => $locataire->getId()));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_locataire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editLocataireAction(Request $request, Locataire $locataire)
    {
        $form = $this->createForm(CreateLocataireType::class, $locataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le compte ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_show_locataire', array(
                'id' => $locataire->getId(),
            ));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_locataire.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showLocataireAction(Locataire $locataire)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_locataire.html.twig', array(
            'locataire' => $locataire,
        ));
    }

    public function listLocatairesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $locataires = $em->getRepository(Locataire::class)
            ->findLocatairesBySyndic($syndic);

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_locataires.html.twig', array(
            'locataires' => $locataires,
        ));
    }

    public function deleteLocataireAction(Request $request, Locataire $locataire)
    {
        if ($locataire !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($locataire);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte a bien été supprimé.');

            return $this->redirectToRoute('syndic_list_locataires');
        }
        $request->getSession()->getFlashBag()->add('info', 'Le compte que vous souhaitez supprimer n\'existe pas !');

        return $this->redirectToRoute('syndic_list_locataires');
    }


    // ACTIONS LIEES AUX ARTISANS
    //---------------------------

    public function createArtisanAction(Request $request)
    {
        $artisan = new Artisan();

        $form = $this->createForm(CreateArtisanType::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $artisan->getUser()->setEnabled(true)->setType('ARTISAN');
            $artisan->getUser()->addRole('ROLE_ARTISAN');
            $em = $this->getDoctrine()->getManager();
            $em->persist($artisan);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le nouveau compte a été créé avec succès.');

            return $this->redirectToRoute('syndic_show_artisan',
                array('id' => $artisan->getId()));
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_artisan.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editArtisanAction(Request $request, Artisan $artisan)
    {
        $form = $this->createForm(CreateArtisanType::class, $artisan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le compte ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_show_artisan', array(
                'id' => $artisan->getId(),
            ));
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_artisan.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function showArtisanAction(Artisan $artisan)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_artisan.html.twig', array(
            'artisan' => $artisan,
        ));
    }

    public function listArtisansAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $artisans = $syndic->getArtisans();

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_artisans.html.twig', array(
            'artisans' => $artisans,
        ));
    }

    public function deleteArtisanAction(Request $request, Artisan $artisan)
    {
        if ($artisan !== null) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($artisan);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', 'Le compte a bien été supprimé.');

            return $this->redirectToRoute('syndic_list_artisans');
        }
        $request->getSession()->getFlashBag()->add('info', 'Le compte que vous souhaitez supprimer n\'existe pas !');

        return $this->redirectToRoute('syndic_list_artisans');
    }


    // ACTIONS LIEES AUX COPROPRIETES
    //-------------------------------

    public function createCoproprieteAction(Request $request)
    {
        $copro = new Copropriete();
        $form = $this->createForm(CreateCoproprieteType::class, $copro);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($copro);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'La copropriété a été créé avec succès.');
            return $this->redirectToRoute('syndic_list_coproprietes');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_copropriete.html.twig',
            ['my_form' => $form->createView()]);
    }

    public function editCoproprieteAction(Request $request, Copropriete $copropriete)
    {
        $form = $this->createForm(CreateCoproprieteType::class, $copropriete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur la copropriété ont bien été enregistrées.');
            return $this->redirectToRoute('syndic_list_coproprietes');
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_copropriete.html.twig',
            ['my_form' => $form->createView()]);
    }

    public function showCoproprieteAction(Copropriete $copropriete)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_copropriete.html.twig',
            ['copropriete' => $copropriete]);
    }

    public function listCoproprietesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());

        $coproprietes = $syndic->getCoproprietes();

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_coproprietes.html.twig', array(
            'coproprietes' => $coproprietes,
        ));
    }

    public function deleteCoproprieteAction(Request $request, Copropriete $copropriete)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($copropriete);
        $em->flush();
        $request->getSession()->getFlashBag()->add('info', 'La copropriété a bien été supprimée.');

        return $this->redirectToRoute('syndic_list_coproprietes');
    }


    // ACTIONS LIEES AUX LOTS
    //-----------------------

    public function createLotAction(Request $request)
    {
        $lot = new Lot();
        $form = $this->createForm(CreateLotType::class, $lot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lot);
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Le lot a été crée avec succès.');
            return $this->redirectToRoute('syndic_list_lots');
        }
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/create_lot.html.twig',
            ['form' => $form->createView()]);
    }

    public function editLotAction(Request $request, Lot $lot)
    {
        $form = $this->createForm(CreateLotType::class, $lot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()->getFlashBag()->add('info', 'Les modifications sur le lot ont bien été enregistrées.');

            return $this->redirectToRoute('syndic_list_lots');
        }

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/edit_lot.html.twig',
            ['my_form' => $form->createView()]);
    }

    public function showLotAction(Lot $lot)
    {
        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/show_lot.html.twig',
            ['lot' => $lot]);
    }

    public function listLotsAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        //TODO : à modifier (sélection par liste déroulante ?)
        $syndic = $em->getRepository(Syndic::class)->findOneByUser($this->getUser());
        $copropriete = $em->getRepository(Copropriete::class)->find($id);
        $lots = $copropriete->getLots();
        $coproprietes = $em->getRepository(Copropriete::class)->findAll();

        return $this->render('@AKYOSEasyCopro/BackOffice/Syndic/list_lots.html.twig',
            ['lots' => $lots, 'coproprietes' => $coproprietes]);
    }

    public function deleteLotAction(Request $request, Lot $lot)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($lot);
        $em->flush();
        $request->getSession()->getFlashBag()->add('info', 'Le lot a bien été supprimé.');

        return $this->redirectToRoute('syndic_list_lots');
    }

}