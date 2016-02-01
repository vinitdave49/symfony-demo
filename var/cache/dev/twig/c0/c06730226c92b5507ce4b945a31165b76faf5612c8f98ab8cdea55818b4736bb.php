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
        $__internal_30766a170768bea862828e5466763aa8ffc85499e5c824ab4057de31c480838f = $this->env->getExtension("native_profiler");
        $__internal_30766a170768bea862828e5466763aa8ffc85499e5c824ab4057de31c480838f->enter($__internal_30766a170768bea862828e5466763aa8ffc85499e5c824ab4057de31c480838f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30766a170768bea862828e5466763aa8ffc85499e5c824ab4057de31c480838f->leave($__internal_30766a170768bea862828e5466763aa8ffc85499e5c824ab4057de31c480838f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f35c8629023d2e59df80f8e4c08f70e3a0b9f91762e40a5895b23ba2c3c000f7 = $this->env->getExtension("native_profiler");
        $__internal_f35c8629023d2e59df80f8e4c08f70e3a0b9f91762e40a5895b23ba2c3c000f7->enter($__internal_f35c8629023d2e59df80f8e4c08f70e3a0b9f91762e40a5895b23ba2c3c000f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cloud Admin - Home";
        
        $__internal_f35c8629023d2e59df80f8e4c08f70e3a0b9f91762e40a5895b23ba2c3c000f7->leave($__internal_f35c8629023d2e59df80f8e4c08f70e3a0b9f91762e40a5895b23ba2c3c000f7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26569b49ad3205dbef9bc281ebcd4784ea1c5e06d82ee2830785af80f46fd4d2 = $this->env->getExtension("native_profiler");
        $__internal_26569b49ad3205dbef9bc281ebcd4784ea1c5e06d82ee2830785af80f46fd4d2->enter($__internal_26569b49ad3205dbef9bc281ebcd4784ea1c5e06d82ee2830785af80f46fd4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
";
        
        $__internal_26569b49ad3205dbef9bc281ebcd4784ea1c5e06d82ee2830785af80f46fd4d2->leave($__internal_26569b49ad3205dbef9bc281ebcd4784ea1c5e06d82ee2830785af80f46fd4d2_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3baf271ddd8fd5abf35abb9564b675635311f11050dedc730377d33390bf6d78 = $this->env->getExtension("native_profiler");
        $__internal_3baf271ddd8fd5abf35abb9564b675635311f11050dedc730377d33390bf6d78->enter($__internal_3baf271ddd8fd5abf35abb9564b675635311f11050dedc730377d33390bf6d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/js/app.min.js"), "html", null, true);
        echo "\"></script>
\t<script href=\"//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js\"></script>
";
        
        $__internal_3baf271ddd8fd5abf35abb9564b675635311f11050dedc730377d33390bf6d78->leave($__internal_3baf271ddd8fd5abf35abb9564b675635311f11050dedc730377d33390bf6d78_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_94a7d8f654492d6603d4cfdb6aa9daa8b3d165cdffe75837ac9d72f51badd31d = $this->env->getExtension("native_profiler");
        $__internal_94a7d8f654492d6603d4cfdb6aa9daa8b3d165cdffe75837ac9d72f51badd31d->enter($__internal_94a7d8f654492d6603d4cfdb6aa9daa8b3d165cdffe75837ac9d72f51badd31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
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
        // line 43
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
                <div class=\"alert alert-info alert-block fade\" id=\"alert\">
                    <button type=\"button\" class=\"close\" aria-hidden=\"true\" id=\"alertClose\">×</button>
                    <h4><i class=\"icon fa fa-ban\"></i> Success!</h4>
                    You have successfully created!!!
                </div>
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
        
        $__internal_94a7d8f654492d6603d4cfdb6aa9daa8b3d165cdffe75837ac9d72f51badd31d->leave($__internal_94a7d8f654492d6603d4cfdb6aa9daa8b3d165cdffe75837ac9d72f51badd31d_prof);

    }

    // line 168
    public function block_inlinejavascripts($context, array $blocks = array())
    {
        $__internal_7ef63ab30c7facef43a3818955a499959ad3860948ddca262c7804a1db6f9fcb = $this->env->getExtension("native_profiler");
        $__internal_7ef63ab30c7facef43a3818955a499959ad3860948ddca262c7804a1db6f9fcb->enter($__internal_7ef63ab30c7facef43a3818955a499959ad3860948ddca262c7804a1db6f9fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inlinejavascripts"));

        // line 169
        echo "\t<script type=\"text/javascript\">
\t\$(document).ready(function(){

\t\t\$('#createProject').click(function(){
\t            \$('#datacontainer').load('createproject'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});

\t\t\$('#workertemplate').click(function(){
\t            \$('#datacontainer').load('createworkerTemplate'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});

\t\t\$('#activityTemplate').click(function(){
\t\t    //alert (\"Hello\");
            \$('#datacontainer').load('createactivityTemplate'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});

\t\t\$('#taskQueueTemplate').click(function(){
\t\t\t//alert(\"Create TaskQueue Template!!!\");
            \$('#datacontainer').load('createtaskqueueTemplate'), function( response, status, xhr ) {
                if ( status == \"error\" ) {
                    var msg = \"Sorry but there was an error: \";
                    console.log( msg + xhr.status + \" \" + xhr.statusText );
                }
            }
\t\t});
\t});
\t</script>
";
        
        $__internal_7ef63ab30c7facef43a3818955a499959ad3860948ddca262c7804a1db6f9fcb->leave($__internal_7ef63ab30c7facef43a3818955a499959ad3860948ddca262c7804a1db6f9fcb_prof);

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
        return array (  255 => 169,  249 => 168,  118 => 43,  89 => 16,  83 => 15,  73 => 11,  70 => 10,  64 => 9,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Cloud Admin - Home{% endblock %}*/
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
/* */
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
/*                     <div class="navbar-custom-menu">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="dropdown user user-menu">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <i class="fa fa-user"></i>*/
/*                                     <span class="hidden-xs">*/
/*     					{{ loginname }}*/
/*     				  </span>*/
/*                                 </a>*/
/* */
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
/* */
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
/*                         <div class="col-md-12" id="datacontainer">*/
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
/* 		$('#createProject').click(function(){*/
/* 	            $('#datacontainer').load('createproject'), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/* 		});*/
/* */
/* 		$('#workertemplate').click(function(){*/
/* 	            $('#datacontainer').load('createworkerTemplate'), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
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
/* 		});*/
/* */
/* 		$('#taskQueueTemplate').click(function(){*/
/* 			//alert("Create TaskQueue Template!!!");*/
/*             $('#datacontainer').load('createtaskqueueTemplate'), function( response, status, xhr ) {*/
/*                 if ( status == "error" ) {*/
/*                     var msg = "Sorry but there was an error: ";*/
/*                     console.log( msg + xhr.status + " " + xhr.statusText );*/
/*                 }*/
/*             }*/
/* 		});*/
/* 	});*/
/* 	</script>*/
/* {% endblock %}*/
