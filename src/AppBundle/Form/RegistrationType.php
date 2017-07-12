<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',TextType::class,
				array('label'=>'Nom',
						'attr'=>array('class'=>'col-sm-2 control-label')	
						))
				->add('roles','choice',array(
						'choices' => array('Administrateur'=> 'ROLE_ADMIN','Utilisateur' => 'ROLE_CLIENT',),
						'multiple' => true,
						'expanded' => true,
						'required' => true,
						'choices_as_values'=>true,	
						))
				->add('groups',EntityType::class,array(
					'class'=> 'AppBundle:Group',
					'choice_label' =>'name',
					'multiple'=> true,
					// 'expanded'=> true
					));
				
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}