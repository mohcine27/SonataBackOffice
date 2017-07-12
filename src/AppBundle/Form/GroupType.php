<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class GroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',TextType::class,
				array('label'=>'Nom',
						'attr'=>array('class'=>'col-sm-2 control-label')	
						));
				->add('roles','choice',array(
						'choices' => array('Administrateur'=> 'ROLE_ADMIN','Utilisateur' => 'ROLE_CLIENT',),
						'multiple' => true,
						'expanded' => true,
						'required' => true,
						'choices_as_values'=>true,	
						));
				
    }

    public function getParent()
    {
        return 'fos_user_group';
    }

    public function getName()
    {
        return 'app_group_registration';
    }
}