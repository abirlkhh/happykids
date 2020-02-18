<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $u = $this->container->get('security.token_storage')->getToken()->getUser();
        try
        {
            switch ($u->getRoles()[0]) {
                case "ADMIN":
                    return $this->redirect('access/admin');
                    break;
                case "PARENT":
                    return $this->redirect('access/parent');
                    break;
                case "MONITEUR":
                    return $this->redirect('access/moniteur');
                    break;
                case "ANIMATEUR":
                    return $this->redirect('access/animateur');
                case "CHEF":
                    return $this->redirect('access/chef');
                case "ENFANT":
                    return $this->redirect('access/enfant');
                    break;
            }
        }
        catch (\Throwable $e)
        {
            return $this->redirect('http://localhost/abirhed/web/app_dev.php/login');

        };

    }






    public function adminAction()
    {
        return $this->render('@User/Default/admin.html.twig');

    }


    public function parentAction()
    {
        return $this->render('@User/Default/parent.html.twig');

    }



    public function moniteurAction()
    {
        return $this->render('@User/Default/moniteur.html.twig');

    }


    public function animateurAction()
    {
        return $this->render('@User/Default/animateur.html.twig');

    }
    public function enfantAction()
    {
        return $this->render('@User/Default/enfant.html.twig');

    }
    public function chefAction()
    {
        return $this->render('@User/Default/chef.html.twig');

    }
    public function homeAction()
    {
        return $this->render('@User/Default/home.html.twig');

    }




}
