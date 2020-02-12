<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function connectAction()
    {
        return $this->render('@Home/Login/login.html.twig');
    }
    public function indexAction()
    {
        return $this->render('@Home/Default/index.html.twig');
    }
}
