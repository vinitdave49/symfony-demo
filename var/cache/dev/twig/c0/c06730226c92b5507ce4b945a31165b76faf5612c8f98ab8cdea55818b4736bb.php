<?php

/* cloudadmin/home.html.twig */
class __TwigTemplate_355804f0a2da96cbf9ce16b6185e4202995bf18ef95d43967ad1f249dca3cd42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cloudadmin/home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'inlinejavascripts' => array($this, 'block_inlinejavascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff7d4a936acb452975a51fc1d7e1c431ed40e7520cc92206642b98d0ebcfd14e = $this->env->getExtension("native_profiler");
        $__internal_ff7d4a936acb452975a51fc1d7e1c431ed40e7520cc92206642b98d0ebcfd14e->enter($__internal_ff7d4a936acb452975a51fc1d7e1c431ed40e7520cc92206642b98d0ebcfd14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff7d4a936acb452975a51fc1d7e1c431ed40e7520cc92206642b98d0ebcfd14e->leave($__internal_ff7d4a936acb452975a51fc1d7e1c431ed40e7520cc92206642b98d0ebcfd14e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d307f96384ab52d4bde31cfacfc67c622ca24018278d15832a0b11a4a2725d02 = $this->env->getExtension("native_profiler");
        $__internal_d307f96384ab52d4bde31cfacfc67c622ca24018278d15832a0b11a4a2725d02->enter($__internal_d307f96384ab52d4bde31cfacfc67c622ca24018278d15832a0b11a4a2725d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cloud Admin - Home";
        
        $__internal_d307f96384ab52d4bde31cfacfc67c622ca24018278d15832a0b11a4a2725d02->leave($__internal_d307f96384ab52d4bde31cfacfc67c622ca24018278d15832a0b11a4a2725d02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57b2d8ee0bf6964ffaaa325016f2e8c975ed8a9c4c418f269ba0be8b3f88df93 = $this->env->getExtension("native_profiler");
        $__internal_57b2d8ee0bf6964ffaaa325016f2e8c975ed8a9c4c418f269ba0be8b3f88df93->enter($__internal_57b2d8ee0bf6964ffaaa325016f2e8c975ed8a9c4c418f269ba0be8b3f88df93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
";
        
        $__internal_57b2d8ee0bf6964ffaaa325016f2e8c975ed8a9c4c418f269ba0be8b3f88df93->leave($__internal_57b2d8ee0bf6964ffaaa325016f2e8c975ed8a9c4c418f269ba0be8b3f88df93_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f69111c660297eb7f97dac4a4ffeb44328810ba3b96cb400f38c2ba26361c161 = $this->env->getExtension("native_profiler");
        $__internal_f69111c660297eb7f97dac4a4ffeb44328810ba3b96cb400f38c2ba26361c161->enter($__internal_f69111c660297eb7f97dac4a4ffeb44328810ba3b96cb400f38c2ba26361c161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/js/app.min.js"), "html", null, true);
        echo "\"></script>
\t<script href=\"//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js\"></script>\t
";
        
        $__internal_f69111c660297eb7f97dac4a4ffeb44328810ba3b96cb400f38c2ba26361c161->leave($__internal_f69111c660297eb7f97dac4a4ffeb44328810ba3b96cb400f38c2ba26361c161_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcc5d4b4320f2938dd688779e70123cf70658f6aad426f11b36e3b2e0fb8c5dc = $this->env->getExtension("native_profiler");
        $__internal_dcc5d4b4320f2938dd688779e70123cf70658f6aad426f11b36e3b2e0fb8c5dc->enter($__internal_dcc5d4b4320f2938dd688779e70123cf70658f6aad426f11b36e3b2e0fb8c5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <body class=\"hold-transition skin-red sidebar-mini\">
    
        <div class=\"wrapper\">
    
            <!-- Main Header -->
            <header class=\"main-header\">
    
                <!-- Logo -->
                <a href=\"home\" class=\"logo\">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class=\"logo-mini\"><b>C</b>C</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class=\"logo-lg\"><b>AdminCC</b></span>
                </a>
    
                <!-- Header Navbar -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    </a>
                    <span class=\"sr-only\">Toggle navigation</span>
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-user\"></i>
                                    <span class=\"hidden-xs\">
    \t\t\t\t\t";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["loginname"]) ? $context["loginname"] : $this->getContext($context, "loginname")), "html", null, true);
        echo "
    \t\t\t\t  </span>
                                </a>
    
                                <ul class=\"dropdown-menu\">
                                    <li class=\"user-footer\">
                                        <div class=\"pull-right\">
                                            <a href=\"logout\" class=\"btn btn-default btn-flat\">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">
    
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <!-- Sidebar Menu -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"header\">Menu</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class=\"active\">
                            <a href=\"#\">
                                <i class=\"fa fa-link\"></i>
                                <span>AdminCommCloud</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-share\"></i>
                                <span>Templates</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                                <li>
                                    <a href=\"#\" id=\"workertemplate\">
                                        <i class=\"fa fa-link\"></i>
                                        <span>Worker Template</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" id=\"activityTemplate\">
                                        <i class=\"fa fa-link\"></i>
                                        <span>Activity Template</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" id=\"taskQueueTemplate\">
                                        <i class=\"fa fa-link\"></i>
                                        <span>TaskQueue Template</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-share\"></i>
                                <span>Create</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                                <li>
                                    <a href=\"#\" id=\"createProject\">
                                        <i class=\"fa fa-link\"></i>
                                        <span>Project</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
    
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                AdminCommCloud
              </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                        <li class=\"active\">AdminCommCloud</li>
                    </ol>
    
                </section>
    
                <!-- Main content -->
                <section class=\"content\">
                    <div class=\"row\">
                        <div class=\"col-md-12\" id=\"datacontainer\">
                            <!--<div class=\"center\"><img src=\"resources/images/sampleApp.JPG\" width=\"800\" height=\"451\"></div>-->
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
    
    
            <!-- Main Footer -->
            <footer class=\"main-footer\">
                <!-- To the right -->
                <div class=\"pull-right hidden-xs\">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2015 <a href=\"#\">Cognizant Technology Solutions</a>.</strong> All rights reserved.
            </footer>
    
        </div>
        <!-- ./wrapper -->
    </body>
";
        
        $__internal_dcc5d4b4320f2938dd688779e70123cf70658f6aad426f11b36e3b2e0fb8c5dc->leave($__internal_dcc5d4b4320f2938dd688779e70123cf70658f6aad426f11b36e3b2e0fb8c5dc_prof);

    }

    // line 163
    public function block_inlinejavascripts($context, array $blocks = array())
    {
        $__internal_22a39a91c23d9c5c39d2005333450367dd962c9dea53f6da4f79b414e42e3666 = $this->env->getExtension("native_profiler");
        $__internal_22a39a91c23d9c5c39d2005333450367dd962c9dea53f6da4f79b414e42e3666->enter($__internal_22a39a91c23d9c5c39d2005333450367dd962c9dea53f6da4f79b414e42e3666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inlinejavascripts"));

        // line 164
        echo "\t<script type=\"text/javascript\">
\t\$(document).ready(function(){
\t
\t\t\$('#createProject').click(function(){
\t\t\talert(\"Create Project!!!\");
\t\t});
\t\t
\t\t\$('#workertemplate').click(function(){
\t\t\talert(\"Create Worker Template!!!\");
\t\t});

\t\t\$('#activityTemplate').click(function(){
\t\t    //alert (\"Hello\");
            \$('#datacontainer').load('createactivityTemplate'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});\t\t
\t\t
\t\t\$('#taskQueueTemplate').click(function(){
\t\t\talert(\"Create TaskQueue Template!!!\");
\t\t});\t\t\t
\t});
\t</script>
";
        
        $__internal_22a39a91c23d9c5c39d2005333450367dd962c9dea53f6da4f79b414e42e3666->leave($__internal_22a39a91c23d9c5c39d2005333450367dd962c9dea53f6da4f79b414e42e3666_prof);

    }

    public function getTemplateName()
    {
        return "cloudadmin/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 164,  243 => 163,  116 => 42,  87 => 15,  81 => 14,  70 => 10,  64 => 9,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Cloud Admin - Home{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/*         */
/* {% block javascripts %}*/
/*     <script src="{{ asset('resources/js/app.min.js') }}"></script>*/
/* 	<script href="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>	*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <body class="hold-transition skin-red sidebar-mini">*/
/*     */
/*         <div class="wrapper">*/
/*     */
/*             <!-- Main Header -->*/
/*             <header class="main-header">*/
/*     */
/*                 <!-- Logo -->*/
/*                 <a href="home" class="logo">*/
/*                     <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*                     <span class="logo-mini"><b>C</b>C</span>*/
/*                     <!-- logo for regular state and mobile devices -->*/
/*                     <span class="logo-lg"><b>AdminCC</b></span>*/
/*                 </a>*/
/*     */
/*                 <!-- Header Navbar -->*/
/*                 <nav class="navbar navbar-static-top" role="navigation">*/
/*                     <!-- Sidebar toggle button-->*/
/*                     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                     </a>*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <div class="navbar-custom-menu">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="dropdown user user-menu">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <i class="fa fa-user"></i>*/
/*                                     <span class="hidden-xs">*/
/*     					{{ loginname }}*/
/*     				  </span>*/
/*                                 </a>*/
/*     */
/*                                 <ul class="dropdown-menu">*/
/*                                     <li class="user-footer">*/
/*                                         <div class="pull-right">*/
/*                                             <a href="logout" class="btn btn-default btn-flat">Sign out</a>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*             </header>*/
/*             <!-- Left side column. contains the logo and sidebar -->*/
/*             <aside class="main-sidebar">*/
/*     */
/*                 <!-- sidebar: style can be found in sidebar.less -->*/
/*                 <section class="sidebar">*/
/*                     <!-- Sidebar Menu -->*/
/*                     <ul class="sidebar-menu">*/
/*                         <li class="header">Menu</li>*/
/*                         <!-- Optionally, you can add icons to the links -->*/
/*                         <li class="active">*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-link"></i>*/
/*                                 <span>AdminCommCloud</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-share"></i>*/
/*                                 <span>Templates</span>*/
/*                                 <i class="fa fa-angle-left pull-right"></i>*/
/*                             </a>*/
/*                             <ul class="treeview-menu menu-open" style="display: none;">*/
/*                                 <li>*/
/*                                     <a href="#" id="workertemplate">*/
/*                                         <i class="fa fa-link"></i>*/
/*                                         <span>Worker Template</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" id="activityTemplate">*/
/*                                         <i class="fa fa-link"></i>*/
/*                                         <span>Activity Template</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" id="taskQueueTemplate">*/
/*                                         <i class="fa fa-link"></i>*/
/*                                         <span>TaskQueue Template</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-share"></i>*/
/*                                 <span>Create</span>*/
/*                                 <i class="fa fa-angle-left pull-right"></i>*/
/*                             </a>*/
/*                             <ul class="treeview-menu menu-open" style="display: none;">*/
/*                                 <li>*/
/*                                     <a href="#" id="createProject">*/
/*                                         <i class="fa fa-link"></i>*/
/*                                         <span>Project</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!-- /.sidebar-menu -->*/
/*                 </section>*/
/*                 <!-- /.sidebar -->*/
/*             </aside>*/
/*     */
/*             <!-- Content Wrapper. Contains page content -->*/
/*             <div class="content-wrapper">*/
/*                 <!-- Content Header (Page header) -->*/
/*                 <section class="content-header">*/
/*                     <h1>*/
/*                 AdminCommCloud*/
/*               </h1>*/
/*                     <ol class="breadcrumb">*/
/*                         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*                         <li class="active">AdminCommCloud</li>*/
/*                     </ol>*/
/*     */
/*                 </section>*/
/*     */
/*                 <!-- Main content -->*/
/*                 <section class="content">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12" id="datacontainer">*/
/*                             <!--<div class="center"><img src="resources/images/sampleApp.JPG" width="800" height="451"></div>-->*/
/*                         </div>*/
/*                     </div>*/
/*                 </section>*/
/*                 <!-- /.content -->*/
/*             </div>*/
/*             <!-- /.content-wrapper -->*/
/*     */
/*     */
/*             <!-- Main Footer -->*/
/*             <footer class="main-footer">*/
/*                 <!-- To the right -->*/
/*                 <div class="pull-right hidden-xs">*/
/*                     Anything you want*/
/*                 </div>*/
/*                 <!-- Default to the left -->*/
/*                 <strong>Copyright &copy; 2015 <a href="#">Cognizant Technology Solutions</a>.</strong> All rights reserved.*/
/*             </footer>*/
/*     */
/*         </div>*/
/*         <!-- ./wrapper -->*/
/*     </body>*/
/* {% endblock %}*/
/* */
/* {% block inlinejavascripts %}*/
/* 	<script type="text/javascript">*/
/* 	$(document).ready(function(){*/
/* 	*/
/* 		$('#createProject').click(function(){*/
/* 			alert("Create Project!!!");*/
/* 		});*/
/* 		*/
/* 		$('#workertemplate').click(function(){*/
/* 			alert("Create Worker Template!!!");*/
/* 		});*/
/* */
/* 		$('#activityTemplate').click(function(){*/
/* 		    //alert ("Hello");*/
/*             $('#datacontainer').load('createactivityTemplate'), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/* 		});		*/
/* 		*/
/* 		$('#taskQueueTemplate').click(function(){*/
/* 			alert("Create TaskQueue Template!!!");*/
/* 		});			*/
/* 	});*/
/* 	</script>*/
/* {% endblock %}*/
