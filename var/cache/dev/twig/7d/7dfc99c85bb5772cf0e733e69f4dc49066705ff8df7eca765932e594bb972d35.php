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
        $__internal_4e0df2754e39e8c8209733b314eef4b917e9b78634b09fcb57a4abaf00881a81 = $this->env->getExtension("native_profiler");
        $__internal_4e0df2754e39e8c8209733b314eef4b917e9b78634b09fcb57a4abaf00881a81->enter($__internal_4e0df2754e39e8c8209733b314eef4b917e9b78634b09fcb57a4abaf00881a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/admin/configureproject.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e0df2754e39e8c8209733b314eef4b917e9b78634b09fcb57a4abaf00881a81->leave($__internal_4e0df2754e39e8c8209733b314eef4b917e9b78634b09fcb57a4abaf00881a81_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1db6668299360d685b2a776005380dc646f5c3ed0da7f80d26227631d4654cf9 = $this->env->getExtension("native_profiler");
        $__internal_1db6668299360d685b2a776005380dc646f5c3ed0da7f80d26227631d4654cf9->enter($__internal_1db6668299360d685b2a776005380dc646f5c3ed0da7f80d26227631d4654cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Configure Project";
        
        $__internal_1db6668299360d685b2a776005380dc646f5c3ed0da7f80d26227631d4654cf9->leave($__internal_1db6668299360d685b2a776005380dc646f5c3ed0da7f80d26227631d4654cf9_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_403929b22a6eeeb2abb633d932dc0781f4bd1bc69376c69026efcf8d0ccd1ff3 = $this->env->getExtension("native_profiler");
        $__internal_403929b22a6eeeb2abb633d932dc0781f4bd1bc69376c69026efcf8d0ccd1ff3->enter($__internal_403929b22a6eeeb2abb633d932dc0781f4bd1bc69376c69026efcf8d0ccd1ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
";
        
        $__internal_403929b22a6eeeb2abb633d932dc0781f4bd1bc69376c69026efcf8d0ccd1ff3->leave($__internal_403929b22a6eeeb2abb633d932dc0781f4bd1bc69376c69026efcf8d0ccd1ff3_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f9083800eecbeb69297c4d086df07b77c1753a48cd76b5c886fbc51558a463f = $this->env->getExtension("native_profiler");
        $__internal_1f9083800eecbeb69297c4d086df07b77c1753a48cd76b5c886fbc51558a463f->enter($__internal_1f9083800eecbeb69297c4d086df07b77c1753a48cd76b5c886fbc51558a463f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/js/app.min.js"), "html", null, true);
        echo "\"></script>
\t<script href=\"//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js\"></script>
";
        
        $__internal_1f9083800eecbeb69297c4d086df07b77c1753a48cd76b5c886fbc51558a463f->leave($__internal_1f9083800eecbeb69297c4d086df07b77c1753a48cd76b5c886fbc51558a463f_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe661b9355db2a1fc96df1606927466c11b010e3905fae462b67f47c043af48e = $this->env->getExtension("native_profiler");
        $__internal_fe661b9355db2a1fc96df1606927466c11b010e3905fae462b67f47c043af48e->enter($__internal_fe661b9355db2a1fc96df1606927466c11b010e3905fae462b67f47c043af48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 97
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
        
        $__internal_fe661b9355db2a1fc96df1606927466c11b010e3905fae462b67f47c043af48e->leave($__internal_fe661b9355db2a1fc96df1606927466c11b010e3905fae462b67f47c043af48e_prof);

    }

    // line 138
    public function block_inlinejavascripts($context, array $blocks = array())
    {
        $__internal_a9702bb67d3e536cee5694ef395942f9e74ab925e73a1ffee7c39b33d537ebee = $this->env->getExtension("native_profiler");
        $__internal_a9702bb67d3e536cee5694ef395942f9e74ab925e73a1ffee7c39b33d537ebee->enter($__internal_a9702bb67d3e536cee5694ef395942f9e74ab925e73a1ffee7c39b33d537ebee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inlinejavascripts"));

        // line 139
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
\t});
\t</script>
";
        
        $__internal_a9702bb67d3e536cee5694ef395942f9e74ab925e73a1ffee7c39b33d537ebee->leave($__internal_a9702bb67d3e536cee5694ef395942f9e74ab925e73a1ffee7c39b33d537ebee_prof);

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
        return array (  228 => 139,  222 => 138,  173 => 97,  89 => 15,  83 => 14,  73 => 11,  70 => 10,  64 => 9,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
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
/* 	});*/
/* 	</script>*/
/* {% endblock %}*/
