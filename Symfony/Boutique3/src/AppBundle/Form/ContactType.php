<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Validator\Constraints as Assert;

class ContactType extends AbstractType
{

     /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        -> add('nom', TextType::class)
        -> add('prenom', TextType::class)
        -> add('email', EmailType::class)
        -> add('objet', ChoiceType::class, array(
            'choices' => array(
                'Problème Technique' => '1',
                'Service client' => '2',
                'Livraison' => '3',
                'Autre' => '4',
            )
        ))
		-> add('message', TextareaType::class)
		-> add('Valider', SubmitType::class);

    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {

    }
    

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contact';
    }

}