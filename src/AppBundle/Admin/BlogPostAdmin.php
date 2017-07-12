<?php namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Validator\ErrorElement;

class BlogPostAdmin extends AbstractAdmin
{
	protected $parentAssociationMapping = 'category';
	public $supportsPreviewMode= true;
	
	    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
		->with('General')
			->add('title', 'text', array('label'=>'Nom blog'))
			->add('body', 'text', array('label'=>'Contenus'))
			->add('category','entity', array('class'=>'AppBundle\Entity\Category','label'=>'Catégorie(s)', 'choice_label'=>'name','multiple'=>true))
		->end();
    }
	
		//formulaire pour filtrer
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title',null, array('label'=>'Nom blog'))
						->add('category',null,array(),'entity',array(
						'class'=>'AppBundle\Entity\Category','label'=>'Catégorie(s)',						
						'choice_label'=>'name'));
    }

	//formulaire pour afficher dans une liste
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title','text', array('label'=>'Nom blog'))
					->add('body','text', array('label'=>'Contenu'))
					->add('category','entity', array('label'=>'Catégorie(s)'))
				    ->add('_action', null, array(
						'actions' => array(
						'show' => array(),
						'edit' => array(),
						'delete' => array(),
            )
        ));
		
    }
	
	protected function configureShowFields(ShowMapper $showMapper){
		
		$showMapper->add('title')
					->add('body')
					->add('category.name');
	}
	
	protected $searchResultActions = array('edit', 'show','list');
	
	
	
	
}