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
        $__internal_ea03fbeafd30d9a8b7c10ad7a3673dabb603ac692668926a5807f87b18934cc2 = $this->env->getExtension("native_profiler");
        $__internal_ea03fbeafd30d9a8b7c10ad7a3673dabb603ac692668926a5807f87b18934cc2->enter($__internal_ea03fbeafd30d9a8b7c10ad7a3673dabb603ac692668926a5807f87b18934cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea03fbeafd30d9a8b7c10ad7a3673dabb603ac692668926a5807f87b18934cc2->leave($__internal_ea03fbeafd30d9a8b7c10ad7a3673dabb603ac692668926a5807f87b18934cc2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_087912837513fa9b3ab92a812ec568341e6d61c586616117d83caf9dcf1c7c0a = $this->env->getExtension("native_profiler");
        $__internal_087912837513fa9b3ab92a812ec568341e6d61c586616117d83caf9dcf1c7c0a->enter($__internal_087912837513fa9b3ab92a812ec568341e6d61c586616117d83caf9dcf1c7c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cloud Admin - Home";
        
        $__internal_087912837513fa9b3ab92a812ec568341e6d61c586616117d83caf9dcf1c7c0a->leave($__internal_087912837513fa9b3ab92a812ec568341e6d61c586616117d83caf9dcf1c7c0a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a096cc5bbb47797742d531a79cf76e849e64dbdac4c40f5c85f1ed88727e878f = $this->env->getExtension("native_profiler");
        $__internal_a096cc5bbb47797742d531a79cf76e849e64dbdac4c40f5c85f1ed88727e878f->enter($__internal_a096cc5bbb47797742d531a79cf76e849e64dbdac4c40f5c85f1ed88727e878f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
";
        
        $__internal_a096cc5bbb47797742d531a79cf76e849e64dbdac4c40f5c85f1ed88727e878f->leave($__internal_a096cc5bbb47797742d531a79cf76e849e64dbdac4c40f5c85f1ed88727e878f_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6fc62edcb635da49845ee3ae8a2aec2bb1050086619dfeee3f5cb1a2f735b93 = $this->env->getExtension("native_profiler");
        $__internal_e6fc62edcb635da49845ee3ae8a2aec2bb1050086619dfeee3f5cb1a2f735b93->enter($__internal_e6fc62edcb635da49845ee3ae8a2aec2bb1050086619dfeee3f5cb1a2f735b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/js/app.min.js"), "html", null, true);
        echo "\"></script>
\t<script href=\"//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js\"></script>
";
        
        $__internal_e6fc62edcb635da49845ee3ae8a2aec2bb1050086619dfeee3f5cb1a2f735b93->leave($__internal_e6fc62edcb635da49845ee3ae8a2aec2bb1050086619dfeee3f5cb1a2f735b93_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c3f1f7fc69584f6b4e66919ec820c892b550e431e061657805c1121f93d452b = $this->env->getExtension("native_profiler");
        $__internal_6c3f1f7fc69584f6b4e66919ec820c892b550e431e061657805c1121f93d452b->enter($__internal_6c3f1f7fc69584f6b4e66919ec820c892b550e431e061657805c1121f93d452b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6c3f1f7fc69584f6b4e66919ec820c892b550e431e061657805c1121f93d452b->leave($__internal_6c3f1f7fc69584f6b4e66919ec820c892b550e431e061657805c1121f93d452b_prof);

    }

    // line 141
    public function block_inlinejavascripts($context, array $blocks = array())
    {
        $__internal_6c38ae1b99bf54f3bb821c0b2fc5802f750f7a81f1fbb67d4b52db0ec29e4e28 = $this->env->getExtension("native_profiler");
        $__internal_6c38ae1b99bf54f3bb821c0b2fc5802f750f7a81f1fbb67d4b52db0ec29e4e28->enter($__internal_6c38ae1b99bf54f3bb821c0b2fc5802f750f7a81f1fbb67d4b52db0ec29e4e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inlinejavascripts"));

        // line 142
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
\t});
\t</script>
";
        
        $__internal_6c38ae1b99bf54f3bb821c0b2fc5802f750f7a81f1fbb67d4b52db0ec29e4e28->leave($__internal_6c38ae1b99bf54f3bb821c0b2fc5802f750f7a81f1fbb67d4b52db0ec29e4e28_prof);

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
        return array (  228 => 142,  222 => 141,  118 => 43,  89 => 16,  83 => 15,  73 => 11,  70 => 10,  64 => 9,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
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
/* 	});*/
/* 	</script>*/
/* {% endblock %}*/
