<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
use AppBundle\Entity\Project;

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

        $encPass = sha1($password);
        //console.log("Encoded Password: ".$encPass);

        $user = $this->getDoctrine()
                ->getRepository('AppBundle:User')
                ->findOneBy(array('loginname'=>$loginname, 'password'=>$encPass));

        if (isset($user)){
            return $this->render('cloudadmin/home.html.twig', array('loginname' => $user->getFirstname()));
        } else {
            return new Response('<h1>Invalid User Credentials!!!</h1>');
        }

    }
    /**
     * @Route("createactivityTemplate", name="createactivityTemplate")
     */
    public function createActivityTemplateAction(Request $request)
    {
        return $this->render('cloudadmin/createtemplates/createactivitytemplate.html.twig');
    }
    /**
     * @Route("createworkerTemplate", name="createworkerTemplate")
     */
    public function createWorkerTemplateAction(Request $request)
    {
        return $this->render('cloudadmin/createtemplates/createworkertemplate.html.twig');
    }
    /**
     * @Route("createtaskqueueTemplate", name="createtaskqueueTemplate")
     */
    public function createTaskQueueTemplateAction(Request $request)
    {
        return $this->render('cloudadmin/createtemplates/createtaskqueuetemplate.html.twig');
    }
    /**
     * @Route("createuser", name="createuser")
     */
    public function createuserAction(Request $request)
    {
        return $this->render('cloudadmin/admin/createuser.html.twig');
    }
    /**
     * @Route("createproject", name="createproject")
     */
    public function createprojecttemplateAction(Request $request)
    {
        return $this->render('cloudadmin/admin/createproject.html.twig');
    }
    /**
     * @Route("createprojectaction", name="createprojectaction")
     */
    public function createprojectAction(Request $request)
    {
        $projectname = json_decode(file_get_contents("php://input"));
        //include_once $this->get('kernel')->getRootDir().'/../vendor/twilio/sdk/Services/Twilio/CapabilityTaskRouter.php';
        $new_project = new Project();
        $new_project->setProjectname($projectname);
        $new_project->setWorkspaceid("aasdqwezxzc");

        $em = $this->getDoctrine()->getManager();
        $em->persist($new_project);
        $em->flush();

        return new Response('<h1>Project Created!!!'.$projectname.'</h1>');
    }
}
