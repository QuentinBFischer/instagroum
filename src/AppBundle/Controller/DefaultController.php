<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function navAction($route)
    {
        return $this->render('navbar.html.twig', array(
            'navigation' => array(
                'home'      => array('href' => '/', 'caption' => 'Home'),
                'admin'       => array('href' => '/admin', 'caption' => 'Admin'),
                'login'    => array('href' => '/login', 'caption' => 'Login'),
                'logout'    => array('href' => '/logout', 'caption' => 'Logout'),
            ),
            'route' => $route
        ));
    }

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
