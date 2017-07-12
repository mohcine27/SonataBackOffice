<?php
// src/AppBundle/Form/Handler/RegistrationFormHandler.php

namespace AppBundle\Form\Handler;

use FOS\UserBundle\Form\Handler\RegistrationFormHandler as BaseHandler;
use Symfony\Component\Form;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Model\UserInterface;

class RegistrationFormHandler extends BaseHandler
{
	protected $em;                       // ici c’est notre entityManager qui gère la persistance de notre objet dans notre base
	protected $form;                  // ici c’est notre formulaire qui contient notre objet à hydrater
	protected $request;           // ici c’est notre requête qui contient nos données	

	public function __constructor( Form $form, EntityManager $em, Request $request)
	{
		$this->form = $form;
		$this->em = $em;
		$this->request = $request;
		}
		
    public function process($confirmation = false){
		if($this->request->getMethod() == 'POST')                  // vous pouvez remplacer par le Méthod http GET ^^
			{
				$this->form->bind($this->request);  // on bind notre requête dans notre formulaire pour « hydrater » notre objet

				if($this->form->isValid())                                      // le formulaire est bien valide == true	
					{
						$this->onSuccess($this->form->getData());  // je vais persister l’objet ou effectuer un action sur celui-ci dans la méthode onSuccess()
						return true;
						}
			}
		return false;		
	}
	
    protected function onSuccess(UserInterface $user)
    {
        // Note: if you plan on modifying the user then do it before calling the
        // parent method as the parent method will flush the changes
	 $this->em->persist($data);                      // ici on va ajouter notre objet à la base de données
		$this->em->flush();  
        parent::onSuccess($user);

        // otherwise add your functionality here
    }
    
}