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
        //return $this->render('cloudadmin/home.html.twig');
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
        $projects = $this->getDoctrine()
                ->getRepository('AppBundle:Project')
                ->findAll();

        return $this->render('cloudadmin/admin/createproject.html.twig', array('projects'=>$projects));
    }
    /**
     * @Route("configureproject", name="configureproject")
     */
    public function configureprojectAction(Request $request)
    {
        $workspaceid = $request->request->get("workspaceid");
        $projectname = $request->request->get("projectname");
        $session = $this->get('session');
        $session->set('workspaceid', $workspaceid);
        //$this->getRequest()->getSession()->set('workspaceid', $workspaceid);
        return $this->render('cloudadmin/admin/configureproject.html.twig', array('projectname'=>$projectname, 'workspaceid'=>$workspaceid));
    }
    /**
     * @Route("createprojectaction", name="createprojectaction")
     */
    public function createprojectAction(Request $request)
    {
        $projectname = json_decode(file_get_contents("php://input"));
        include_once $this->get('kernel')->getRootDir().'/../vendor/twilio/sdk/Services/Twilio.php';
        $path = $this->get('kernel')->getRootDir();
        $accountSid = 'AC0f18494502dee91457252ff7b2bada6a';
        $authToken = '2f430f7691acb543889ef3a721c1c096';
        $params = array();
        $params['EventCallbackUrl'] = 'http://requestb.in/vh9reovh';
        $params['Template'] = 'FIFO';

        $taskrouterclient = new \TaskRouter_Services_Twilio($accountSid, $authToken, null);;

        $workspace = $taskrouterclient->workspaces->create($projectname, $params);
        $workspaceId = $workspace->sid;

        $new_project = new Project();
        $new_project->setProjectname($projectname);
        $new_project->setWorkspaceid($workspaceId);

        $em = $this->getDoctrine()->getManager();
        $em->persist($new_project);
        $em->flush();

        return new Response('<h1>Project Created!!!'.$projectname.' Id: '.$workspaceId.'</h1>');
    }
    /**
     * @Route("createworker", name="createworker")
     */
    public function createworkerAction(Request $request)
    {
        $textboxes = $this->getDoctrine()
            ->getRepository('AppBundle:TemplateDetails')
            ->findBy(array('attributeType'=>1));

        $checkboxes = $this->getDoctrine()
            ->getRepository('AppBundle:TemplateDetails')
            ->findBy(array('attributeType'=>2));

        return $this->render('cloudadmin/admin/createworker.html.twig', array('textboxes'=>$textboxes, 'checkboxes'=>$checkboxes));
    }
    /**
     * @Route("createactivity", name="createactivity")
     */
    public function createactivityAction(Request $request)
    {
        return $this->render('cloudadmin/admin/createactivity.html.twig');
    }
    /**
     * @Route("createworkflow", name="createworkflow")
     */
    public function createworkflowAction(Request $request)
    {
        return $this->render('cloudadmin/admin/createworkflow.html.twig');
    }
    /**
     * @Route("createtaskqueue", name="createtaskqueue")
     */
    public function createtaskqueueAction(Request $request)
    {
        return $this->render('cloudadmin/admin/createtaskqueue.html.twig');
    }
}
