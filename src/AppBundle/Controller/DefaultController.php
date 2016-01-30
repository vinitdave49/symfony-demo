<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('cloudadmin/index.html.twig');
    }
    /**
     * @Route("logout", name="logout")
     */
    public function logoutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('cloudadmin/index.html.twig');
    }    
    /**
     * @Route("home", name="login")
     */
    public function loginAction(Request $request)
    {
        $loginname = $request->request->get("wLoginId");
        $password = $request->request->get("wPass");
        
        return $this->render('cloudadmin/home.html.twig', array('loginname' => $loginname));
    }
    /**
     * @Route("createactivityTemplate", name="createactivityTemplate")
     */
    public function createActivityTemplateAction(Request $request)
    {
        return $this->render('cloudadmin/createtemplates/createactivitytemplate.html.twig');
    }
    
}
