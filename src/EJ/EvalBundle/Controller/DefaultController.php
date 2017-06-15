<?php

namespace EJ\EvalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EJEvalBundle:Default:index.html.twig');
    }
}
