<?php 

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class AdminController extends BaseAdminController
{
	
	
    // public function indexAction(Request $request)
    // {
        
       // return parent::indexAction($request);
    // }
	
	
    public function createNewUserEntity()
    {
        return $this->get('fos_user.user_manager')->createUser();
    }

    public function prePersistUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
	
	public function preUpdateUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
	/****************************************///
	public function createNewGroupEntity()
	{
		return $this->container->get('fos_user.group_manager')->createGroup('');
	}

	public function prePersistGroupEntity(Group $group)
	{
		return $this->container->get('fos_user.group_manager')->updateGroup($group, false);
	}

	public function preUpdateGroupEntity(Group $group)
	{
		return $this->container->get('fos_user.group_manager')->updateGroup($group, false);
	}
}