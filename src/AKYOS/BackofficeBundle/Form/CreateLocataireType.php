<?php

namespace AKYOS\BackofficeBundle\Form;

use AKYOS\BackofficeBundle\Entity\Lot;
use AKYOS\UserBundle\Form\CreateUserType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CreateLocataireType extends AbstractType
{
    private $container;
    private $copropriete;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->copropriete = $this->container->get('session')->get('copro');
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', CreateUserType::class)
            ->add('commentSyndic', TextType::class,array(
                'attr' => array('placeholder' => 'Note du Syndic'),
                'required' => false,
            ))
            ->add('email', EmailType::class,array('attr' => array('placeholder' => 'Email du copropriétaire')))
            ->add('nom', TextType::class,array('attr' => array('placeholder' => 'Nom du copropriétaire')))
            ->add('prenom', TextType::class,array('attr' => array('placeholder' => 'Prénom du copropriétaire')))
            ->add('telephone', TextType::class,array(
                'attr' => array('placeholder' => 'Télephone du copropriétaire')
            ))
            ->add('rib', TextType::class,array(
                'attr' => array('placeholder' => 'RIB du copropriétaire'),
                'required' => false,
            ))
            ->add('dateArrivee', DateType::class, array(
                'widget' => 'single_text',
                'label' => 'Date d\'emménagement',
            ))
            ->add('dateDepart', DateType::class, array(
                'widget' => 'single_text',
                'label' => 'Date de départ',
                'required' => false,
            ))
            ->add('actuel', CheckboxType::class, array(
                'label'    => 'En cours de location',
                'required' => false,
                'data' => true,
            ))
            ->add('copropriete', TextType::class, array(
                'label' => 'Copropriété',
                'disabled' => true,
                'data' => $this->copropriete,
                'mapped' => false,
            ))
            ->add('lot', EntityType::class, array(
                'class'=> Lot::class,
                // requête permettant de récupérer les lots non loués de la copropriété
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->where('l.copropriete = :copropriete')
                        ->andWhere('l.loueAct = false')
                        ->setParameter('copropriete', $this->copropriete);
                },
                'choice_label'=>function($lot){
                    return $lot->getIdentifiant();
                }
            ))
            ->add('submit',SubmitType::class, array(
                'label' => 'Créer le compte',
            ))
        ;

    }


    public function getBlockPrefix()
    {
        return 'akyos_BackofficeBundle_locataire';
    }

}