<?php

/* cloudadmin/admin/configureproject.html.twig */
class __TwigTemplate_dc963710fed432c1c2575690ea7fc53ed0beb07dcd9fe289c0c09c0e2478c918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cloudadmin/admin/configureproject.html.twig", 1);
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
        $__internal_bd1b3b683af4566a6d0ef867b4821e9a5d29b05885ae55a5dcb74ca390a94f8d = $this->env->getExtension("native_profiler");
        $__internal_bd1b3b683af4566a6d0ef867b4821e9a5d29b05885ae55a5dcb74ca390a94f8d->enter($__internal_bd1b3b683af4566a6d0ef867b4821e9a5d29b05885ae55a5dcb74ca390a94f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/admin/configureproject.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd1b3b683af4566a6d0ef867b4821e9a5d29b05885ae55a5dcb74ca390a94f8d->leave($__internal_bd1b3b683af4566a6d0ef867b4821e9a5d29b05885ae55a5dcb74ca390a94f8d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f7b6b681627a28420fcc0b4900b6267d59cb77ba6f3bf76f880d44a82d3d963 = $this->env->getExtension("native_profiler");
        $__internal_6f7b6b681627a28420fcc0b4900b6267d59cb77ba6f3bf76f880d44a82d3d963->enter($__internal_6f7b6b681627a28420fcc0b4900b6267d59cb77ba6f3bf76f880d44a82d3d963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Configure Project";
        
        $__internal_6f7b6b681627a28420fcc0b4900b6267d59cb77ba6f3bf76f880d44a82d3d963->leave($__internal_6f7b6b681627a28420fcc0b4900b6267d59cb77ba6f3bf76f880d44a82d3d963_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1138af76d7dbf93b250046a5ebfdbcc157f768c69503b7cd2bbedc4209432a82 = $this->env->getExtension("native_profiler");
        $__internal_1138af76d7dbf93b250046a5ebfdbcc157f768c69503b7cd2bbedc4209432a82->enter($__internal_1138af76d7dbf93b250046a5ebfdbcc157f768c69503b7cd2bbedc4209432a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
";
        
        $__internal_1138af76d7dbf93b250046a5ebfdbcc157f768c69503b7cd2bbedc4209432a82->leave($__internal_1138af76d7dbf93b250046a5ebfdbcc157f768c69503b7cd2bbedc4209432a82_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bff365839221b78c80669b030ac9b16e1e0da5d5c470b26f5158cb21a5305fd0 = $this->env->getExtension("native_profiler");
        $__internal_bff365839221b78c80669b030ac9b16e1e0da5d5c470b26f5158cb21a5305fd0->enter($__internal_bff365839221b78c80669b030ac9b16e1e0da5d5c470b26f5158cb21a5305fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/js/app.min.js"), "html", null, true);
        echo "\"></script>
\t<script href=\"//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js\"></script>
";
        
        $__internal_bff365839221b78c80669b030ac9b16e1e0da5d5c470b26f5158cb21a5305fd0->leave($__internal_bff365839221b78c80669b030ac9b16e1e0da5d5c470b26f5158cb21a5305fd0_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_77debeab2f5aad6237f0c159701b4222360c297a9c35494ea1f3f82c7ee6315e = $this->env->getExtension("native_profiler");
        $__internal_77debeab2f5aad6237f0c159701b4222360c297a9c35494ea1f3f82c7ee6315e->enter($__internal_77debeab2f5aad6237f0c159701b4222360c297a9c35494ea1f3f82c7ee6315e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <span>Create/Edit</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu menu-open\" style=\"display: none;\">
                                <li>
                                    <a href=\"#\" id=\"taskqueue\">
                                        <i class=\"fa fa-link\"></i>
                                        <span>TaskQueue</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" id=\"worker\">
                                        <i class=\"fa fa-link\"></i>
                                        <span>Worker</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" id=\"workflow\">
                                        <i class=\"fa fa-link\"></i>
                                        <span>Workflow</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" id=\"activity\">
                                        <i class=\"fa fa-link\"></i>
                                        <span>Activity</span>
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
                ";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["projectname"]) ? $context["projectname"] : $this->getContext($context, "projectname")), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["workspaceid"]) ? $context["workspaceid"] : $this->getContext($context, "workspaceid")), "html", null, true);
        echo "
              </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                        <li class=\"active\">AdminCommCloud</li>
                    </ol>

                </section>
                <div class=\"alert alert-info alert-block fade\" id=\"alert\">
                    <button type=\"button\" class=\"close\" aria-hidden=\"true\" id=\"alertClose\">×</button>
                    <h4><i class=\"icon fa fa-ban\"></i> Success!</h4>
                    You have successfully created!!!
                </div>
                <!-- Main content -->
                <section class=\"content\">
                    <div class=\"row\">
                        <div class=\"col-md-12\" id=\"createcontainer\">
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
        
        $__internal_77debeab2f5aad6237f0c159701b4222360c297a9c35494ea1f3f82c7ee6315e->leave($__internal_77debeab2f5aad6237f0c159701b4222360c297a9c35494ea1f3f82c7ee6315e_prof);

    }

    // line 165
    public function block_inlinejavascripts($context, array $blocks = array())
    {
        $__internal_1bd65c8ac26fef71537aab98c32f3d490e6ae49d77c60358c89983ace0813a89 = $this->env->getExtension("native_profiler");
        $__internal_1bd65c8ac26fef71537aab98c32f3d490e6ae49d77c60358c89983ace0813a89->enter($__internal_1bd65c8ac26fef71537aab98c32f3d490e6ae49d77c60358c89983ace0813a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inlinejavascripts"));

        // line 166
        echo "\t<script type=\"text/javascript\">
\t\$(document).ready(function(){

\t\t\$('#worker').click(function(){
\t            \$('#createcontainer').load('createworker'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});

\t\t\$('#activity').click(function(){
\t\t    //alert (\"Hello\");
            \$('#createcontainer').load('createactivity'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});

\t\t\$('#taskqueue').click(function(){
\t\t\t//alert(\"Create TaskQueue Template!!!\");
            \$('#createcontainer').load('createtaskqueue'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});

\t\t\$('#workflow').click(function(){
\t            \$('#createcontainer').load('createworkflow'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});

\t\t\$('#workertemplate').click(function(){
\t            \$('#createcontainer').load('createworkerTemplate'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});

\t\t\$('#activityTemplate').click(function(){
\t\t    //alert (\"Hello\");
            \$('#createcontainer').load('createactivityTemplate'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});

\t\t\$('#taskQueueTemplate').click(function(){
\t\t\t//alert(\"Create TaskQueue Template!!!\");
            \$('#createcontainer').load('createtaskqueueTemplate'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});

\t});
\t</script>
";
        
        $__internal_1bd65c8ac26fef71537aab98c32f3d490e6ae49d77c60358c89983ace0813a89->leave($__internal_1bd65c8ac26fef71537aab98c32f3d490e6ae49d77c60358c89983ace0813a89_prof);

    }

    public function getTemplateName()
    {
        return "cloudadmin/admin/configureproject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 166,  249 => 165,  200 => 124,  89 => 15,  83 => 14,  73 => 11,  70 => 10,  64 => 9,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Configure Project{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <script src="{{ asset('resources/js/app.min.js') }}"></script>*/
/* 	<script href="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <body class="hold-transition skin-red sidebar-mini">*/
/* */
/*         <div class="wrapper">*/
/* */
/*             <!-- Main Header -->*/
/*             <header class="main-header">*/
/* */
/*                 <!-- Logo -->*/
/*                 <a href="home" class="logo">*/
/*                     <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*                     <span class="logo-mini"><b>C</b>C</span>*/
/*                     <!-- logo for regular state and mobile devices -->*/
/*                     <span class="logo-lg"><b>AdminCC</b></span>*/
/*                 </a>*/
/* */
/*                 <!-- Header Navbar -->*/
/*                 <nav class="navbar navbar-static-top" role="navigation">*/
/*                     <!-- Sidebar toggle button-->*/
/*                     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                     </a>*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                 </nav>*/
/*             </header>*/
/*             <!-- Left side column. contains the logo and sidebar -->*/
/*             <aside class="main-sidebar">*/
/* */
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
/*                                 <span>Create/Edit</span>*/
/*                                 <i class="fa fa-angle-left pull-right"></i>*/
/*                             </a>*/
/*                             <ul class="treeview-menu menu-open" style="display: none;">*/
/*                                 <li>*/
/*                                     <a href="#" id="taskqueue">*/
/*                                         <i class="fa fa-link"></i>*/
/*                                         <span>TaskQueue</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" id="worker">*/
/*                                         <i class="fa fa-link"></i>*/
/*                                         <span>Worker</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" id="workflow">*/
/*                                         <i class="fa fa-link"></i>*/
/*                                         <span>Workflow</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#" id="activity">*/
/*                                         <i class="fa fa-link"></i>*/
/*                                         <span>Activity</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!-- /.sidebar-menu -->*/
/*                 </section>*/
/*                 <!-- /.sidebar -->*/
/*             </aside>*/
/* */
/*             <!-- Content Wrapper. Contains page content -->*/
/*             <div class="content-wrapper">*/
/*                 <!-- Content Header (Page header) -->*/
/*                 <section class="content-header">*/
/*                     <h1>*/
/*                 {{ projectname }}: {{ workspaceid }}*/
/*               </h1>*/
/*                     <ol class="breadcrumb">*/
/*                         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*                         <li class="active">AdminCommCloud</li>*/
/*                     </ol>*/
/* */
/*                 </section>*/
/*                 <div class="alert alert-info alert-block fade" id="alert">*/
/*                     <button type="button" class="close" aria-hidden="true" id="alertClose">×</button>*/
/*                     <h4><i class="icon fa fa-ban"></i> Success!</h4>*/
/*                     You have successfully created!!!*/
/*                 </div>*/
/*                 <!-- Main content -->*/
/*                 <section class="content">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12" id="createcontainer">*/
/*                             <!--<div class="center"><img src="resources/images/sampleApp.JPG" width="800" height="451"></div>-->*/
/*                         </div>*/
/*                     </div>*/
/*                 </section>*/
/*                 <!-- /.content -->*/
/*             </div>*/
/*             <!-- /.content-wrapper -->*/
/* */
/* */
/*             <!-- Main Footer -->*/
/*             <footer class="main-footer">*/
/*                 <!-- To the right -->*/
/*                 <div class="pull-right hidden-xs">*/
/*                     Anything you want*/
/*                 </div>*/
/*                 <!-- Default to the left -->*/
/*                 <strong>Copyright &copy; 2015 <a href="#">Cognizant Technology Solutions</a>.</strong> All rights reserved.*/
/*             </footer>*/
/* */
/*         </div>*/
/*         <!-- ./wrapper -->*/
/*     </body>*/
/* {% endblock %}*/
/* */
/* {% block inlinejavascripts %}*/
/* 	<script type="text/javascript">*/
/* 	$(document).ready(function(){*/
/* */
/* 		$('#worker').click(function(){*/
/* 	            $('#createcontainer').load('createworker'), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/* 		});*/
/* */
/* 		$('#activity').click(function(){*/
/* 		    //alert ("Hello");*/
/*             $('#createcontainer').load('createactivity'), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/* 		});*/
/* */
/* 		$('#taskqueue').click(function(){*/
/* 			//alert("Create TaskQueue Template!!!");*/
/*             $('#createcontainer').load('createtaskqueue'), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/* 		});*/
/* */
/* 		$('#workflow').click(function(){*/
/* 	            $('#createcontainer').load('createworkflow'), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/* 		});*/
/* */
/* 		$('#workertemplate').click(function(){*/
/* 	            $('#createcontainer').load('createworkerTemplate'), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/* 		});*/
/* */
/* 		$('#activityTemplate').click(function(){*/
/* 		    //alert ("Hello");*/
/*             $('#createcontainer').load('createactivityTemplate'), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/* 		});*/
/* */
/* 		$('#taskQueueTemplate').click(function(){*/
/* 			//alert("Create TaskQueue Template!!!");*/
/*             $('#createcontainer').load('createtaskqueueTemplate'), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/* 		});*/
/* */
/* 	});*/
/* 	</script>*/
/* {% endblock %}*/
