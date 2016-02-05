<?php

namespace Cloud\TwilioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CloudTwilioBundle:Default:index.html.twig');
    }
}
