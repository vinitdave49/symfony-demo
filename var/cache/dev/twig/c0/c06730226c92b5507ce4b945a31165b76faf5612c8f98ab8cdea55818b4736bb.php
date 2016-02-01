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
        $__internal_a7e6b53113dd570e6a6d9ca392c9eaf853ac9f184dbcf685ed5de7e69821e467 = $this->env->getExtension("native_profiler");
        $__internal_a7e6b53113dd570e6a6d9ca392c9eaf853ac9f184dbcf685ed5de7e69821e467->enter($__internal_a7e6b53113dd570e6a6d9ca392c9eaf853ac9f184dbcf685ed5de7e69821e467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7e6b53113dd570e6a6d9ca392c9eaf853ac9f184dbcf685ed5de7e69821e467->leave($__internal_a7e6b53113dd570e6a6d9ca392c9eaf853ac9f184dbcf685ed5de7e69821e467_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea0edf39cbb46c6ecb12446458cb756c3c4beff08b567dec02ae42e818dbd23a = $this->env->getExtension("native_profiler");
        $__internal_ea0edf39cbb46c6ecb12446458cb756c3c4beff08b567dec02ae42e818dbd23a->enter($__internal_ea0edf39cbb46c6ecb12446458cb756c3c4beff08b567dec02ae42e818dbd23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cloud Admin - Home";
        
        $__internal_ea0edf39cbb46c6ecb12446458cb756c3c4beff08b567dec02ae42e818dbd23a->leave($__internal_ea0edf39cbb46c6ecb12446458cb756c3c4beff08b567dec02ae42e818dbd23a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8232cc49f1a9e9af12c1fc26b36ef32f2ecbbe29a01de1edfc60234111f997ff = $this->env->getExtension("native_profiler");
        $__internal_8232cc49f1a9e9af12c1fc26b36ef32f2ecbbe29a01de1edfc60234111f997ff->enter($__internal_8232cc49f1a9e9af12c1fc26b36ef32f2ecbbe29a01de1edfc60234111f997ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
";
        
        $__internal_8232cc49f1a9e9af12c1fc26b36ef32f2ecbbe29a01de1edfc60234111f997ff->leave($__internal_8232cc49f1a9e9af12c1fc26b36ef32f2ecbbe29a01de1edfc60234111f997ff_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80341f57ce7d1627510f202d2709bb1267a557a29bd45f73732490cbafa105c8 = $this->env->getExtension("native_profiler");
        $__internal_80341f57ce7d1627510f202d2709bb1267a557a29bd45f73732490cbafa105c8->enter($__internal_80341f57ce7d1627510f202d2709bb1267a557a29bd45f73732490cbafa105c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/js/app.min.js"), "html", null, true);
        echo "\"></script>
\t<script href=\"//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js\"></script>\t
";
        
        $__internal_80341f57ce7d1627510f202d2709bb1267a557a29bd45f73732490cbafa105c8->leave($__internal_80341f57ce7d1627510f202d2709bb1267a557a29bd45f73732490cbafa105c8_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_efdf8b4042fb84658aa845b18a20b5f74915015e176a2ae1aeb9c00760978e3a = $this->env->getExtension("native_profiler");
        $__internal_efdf8b4042fb84658aa845b18a20b5f74915015e176a2ae1aeb9c00760978e3a->enter($__internal_efdf8b4042fb84658aa845b18a20b5f74915015e176a2ae1aeb9c00760978e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_efdf8b4042fb84658aa845b18a20b5f74915015e176a2ae1aeb9c00760978e3a->leave($__internal_efdf8b4042fb84658aa845b18a20b5f74915015e176a2ae1aeb9c00760978e3a_prof);

    }

    // line 164
    public function block_inlinejavascripts($context, array $blocks = array())
    {
        $__internal_efeaa94a38a61b875d0ff90a5ea08009b92e1088605b3c0b912af6fd74109cf1 = $this->env->getExtension("native_profiler");
        $__internal_efeaa94a38a61b875d0ff90a5ea08009b92e1088605b3c0b912af6fd74109cf1->enter($__internal_efeaa94a38a61b875d0ff90a5ea08009b92e1088605b3c0b912af6fd74109cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inlinejavascripts"));

        // line 165
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
        
        $__internal_efeaa94a38a61b875d0ff90a5ea08009b92e1088605b3c0b912af6fd74109cf1->leave($__internal_efeaa94a38a61b875d0ff90a5ea08009b92e1088605b3c0b912af6fd74109cf1_prof);

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
        return array (  251 => 165,  245 => 164,  118 => 43,  89 => 16,  83 => 15,  73 => 11,  70 => 10,  64 => 9,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
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
/* */
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
