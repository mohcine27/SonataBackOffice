<?php namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CategoryAdmin extends AbstractAdmin
{
	//formulaire pour cree/editer
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
		->with('General')
			->add('name', 'text', array('label'=>'Nom catégorie'))
			->add('blogPosts','entity', array('class'=>'AppBundle\Entity\BlogPost','multiple'=>true))
		->end();
    }
	
	//formulaire pour filtrer
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
    }

	//formulaire pour afficher dans une liste
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name','text',array('label'=>'Nom catégorie'))
					->add('blogPosts','entity', array('label'=>'Blog Post(s)'))
				   ->add('_action', null, array(
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )
        ));
		
    }
	
	protected function configureShowFields(ShowMapper $showMapper){
		
		$showMapper->add('name');
	}
	
	protected $searchResultActions = array('edit', 'show');
	
}