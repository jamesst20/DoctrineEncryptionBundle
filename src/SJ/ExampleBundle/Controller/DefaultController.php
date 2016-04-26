<?php

namespace SJ\ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('SJExampleBundle:Default:index.html.twig', array('entities' => $this->getDoctrine()->getRepository('SJExampleBundle:EntityTest')->findAll()));
    }
}
