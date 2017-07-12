<?php namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Model\ModelManagerInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Doctrine\Common\Collections\ArrayCollection;

class UserAdmin extends AbstractAdmin
{
	public $supportsPreviewMode= true;
    protected function configureFormFields(FormMapper $formMapper)
    {        
        $subject=$this->getSubject();
		
		if($this->isCurrentRoute('create')){
			$formMapper
			->tab('General')
				->with('General')
					->add('username','text',array('label'=> 'Prenom'))
					->add('name','text',array('label'=> 'Nom'))
					->add('email','email',array('label'=> 'Email'))
					->add('plainPassword', 'password',array('label'=> 'Mot de passe'))
					// ->add('plainPassword.first', 'password',array('label'=> 'Mot de passe'))
					->add('plainPassword', 'repeated', array(
								'type' => 'password',
								'options' => array('translation_domain' => 'FOSUserBundle'),
								'first_options' => array('label' => 'form.password'),
								'second_options' => array('label' => 'form.password_confirmation'),
								'invalid_message' => 'fos_user.password.mismatch',
						))
				->end()
			->end()
			->tab('Groupe')
				->with('Groups')
					// ->add('groups',null, array('required' => false,'label'=> 'Groupes'))
								->add('groups','entity', array('class'=>'AppBundle\Entity\Group', 'choice_label'=>'name','expanded'=>true,'multiple'=>true))

				->end()
			->end()
			->tab('Management')
				->with('Management')
				    /* ->add('roles','choice',array('choices'=>$this->getParameter('security.role_hierarchy.roles'),'multiple'=>true )) */
					->add('enabled', null, array('required' => false,'label'=> 'Activé')) 					
				->end()
			->end();
		}
		if($this->isCurrentRoute('edit'))
		{
				$formMapper->add('username','text')
						->add('name','text',array('label'=> 'Nom'))
						->add('email','email',array('label'=> 'Email'))
						->add('groups','entity', array('class'=>'AppBundle\Entity\Group', 'choice_label'=>'name','expanded'=>true,'multiple'=>true))
						->add('enabled', null, array('required' => false,'label'=> 'Activé'));
		}
    }
	
	 protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name',null,array('label'=> 'Nom'))
						->add('username')
						->add('enabled',null,array('label'=> 'Activé'))
						->add('groups',null,array('label'=>'Groupes'),'entity',array(
						'class'=>'AppBundle\Entity\Group',						
						'choice_label'=>'name'));
    }
	
	//formulaire pour afficher dans une liste
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name',null,array('label'=> 'Utilisateur'))
				   ->add('username','text',array('label'=> 'Login'))
				   ->add('email',null,array('label'=> 'Email','editable'=>true))
				   ->add('groups',null,array('label'=> 'Groupes'))
				   ->add('enabled',null,array('label'=> 'Activé','editable'=>true))
				   ->add('rolesAsString','string',array('label'=> 'Rôle(s)'))
				   ->add('_action', null, array(
					'actions' => array(
						'show' => array(),
						'edit' => array(),
						'delete' => array(),
					)
        ));
		
    }
	
	protected function configureShowFields(ShowMapper $showMapper){
		
		$showMapper->add('name',null,array('label'=> 'Utilisateur'))
				   ->add('username')
				   ->add('email',null,array('label'=> 'Email','editable'=>true))
				   ->add('groups',null,array('label'=> 'Groupes'))
				   ->add('enabled',null,array('label'=> 'Activé','editable'=>true))
				   
        ;
	}
	
	public function preUpdate($user)
    {
        $this->getUserManager()->updateCanonicalFields($user);
        $this->getUserManager()->updatePassword($user);
    }

    public function setUserManager(UserManagerInterface $userManager)
        {
            $this->userManager = $userManager;
        }

    public function getUserManager()
    {
            return $this->userManager;
    }
	protected $searchResultActions = array('edit', 'show','list');
	
		
	

   
}