<?php

namespace EpopeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EpopeeBundle:Default:index.html.twig');
    }

    public function autoAction($auto)
    {
        return $this->render('EpopeeBundle:Auto:k'.$auto.'.html.twig', array('auto'=>$auto));
    }
}
