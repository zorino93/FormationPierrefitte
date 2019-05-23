<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class MembreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        -> add('nom', TextType::class, array(
				'required' => false,
			))
			-> add('prenom', TextType::class, array(
				'required' => false,
			))
			-> add('email', EmailType::class, array(
				'required' => false,
			))
			-> add('civilite', ChoiceType::class, array(
				'choices' => array(
					'Homme' => 'm',
					'Femme' => 'f'
				),
			))
			-> add('ville', TextType::class, array(
				'required' => false,
			))
			-> add('adresse', TextType::class, array(
				'required' => false,
			))
			-> add('username', TextType::class, array(
				'required' => false,
			))
			-> add('password', PasswordType::class, array(
				'required' => false,
			))
			-> add('codepostal', NumberType::class, array(
				'required' => false,
			))
			-> add('Enregistrer', SubmitType::class);

    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Membre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_membre';
    }


}
