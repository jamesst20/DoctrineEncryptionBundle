<?php

namespace SJ\DoctrineEncryptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SJDoctrineEncryptionBundle:Default:index.html.twig');
    }
}
