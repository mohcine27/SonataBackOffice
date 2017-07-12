<?php namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Model\ModelManagerInterface;
use FOS\UserBundle\Model\GroupManagerInterface;
use Doctrine\Common\Collections\ArrayCollection;

class GroupAdmin extends AbstractAdmin
{
	public $supportsPreviewMode= true;
	
    protected function configureFormFields(FormMapper $formMapper)
    {        
			$container=$this->getConfigurationPool()->getContainer();
			$roles=$container->getParameter('security.role_hierarchy.roles');
			$rolesChoices=self::flattenRoles($roles);
			
      			$formMapper
				->with('General')
					->add('name','text')
					->add('roles','choice',array('choices'=>$rolesChoices,'multiple'=>true ))
					//->add('roles','choice',array('choices'=>array('ROLE_ADMIN'=>'admin')))				
				->end();			
    }
	
	 protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name',null,array('label'=> 'Nom'));
						
    }
	
	//formulaire pour afficher dans une liste
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name',null,array('label'=> 'Groupes'))
				   /* ->add('roles','choice', array('label'=>'Rôle(s)')) */
				   
				   ->add('_action', null, array(
					'actions' => array(
						'show' => array(),
						'edit' => array(),
						'delete' => array(),
					)
        ));
		
    }
	
	protected function configureShowFields(ShowMapper $showMapper){
		
		$showMapper->add('name',null,array('label'=> 'Utilisateur'));
	}
	
	protected static function flattenRoles($rolesHierarchy){
		
		$flatRoles=array();
		foreach($rolesHierarchy as $roles){
			
			if(empty($roles)){continue ;}
			
			foreach($roles as $role){
				if(!isset($flatRoles[$role])){
					$flatRoles[$role]=$role;
				}
			}
		}
		return $flatRoles;
	} 
	
	protected $searchResultActions = array('edit', 'show','list');
	
	
	

   
}