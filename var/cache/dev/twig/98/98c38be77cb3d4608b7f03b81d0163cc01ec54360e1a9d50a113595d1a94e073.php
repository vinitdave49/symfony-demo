<?php

/* cloudadmin/index.html.twig */
class __TwigTemplate_acde6bac0811e69dc50afbf9d6b71ad20768ac983f7d3188828c02a766f8e4ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cloudadmin/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e64c143b056d74764409bb1d0259b7cf9cddd635b5a022820b2eb37afdc86181 = $this->env->getExtension("native_profiler");
        $__internal_e64c143b056d74764409bb1d0259b7cf9cddd635b5a022820b2eb37afdc86181->enter($__internal_e64c143b056d74764409bb1d0259b7cf9cddd635b5a022820b2eb37afdc86181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e64c143b056d74764409bb1d0259b7cf9cddd635b5a022820b2eb37afdc86181->leave($__internal_e64c143b056d74764409bb1d0259b7cf9cddd635b5a022820b2eb37afdc86181_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e1efaac5a43114b52a03cd906617f34b1273f739908b8214db608be1a349902 = $this->env->getExtension("native_profiler");
        $__internal_1e1efaac5a43114b52a03cd906617f34b1273f739908b8214db608be1a349902->enter($__internal_1e1efaac5a43114b52a03cd906617f34b1273f739908b8214db608be1a349902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cloud Admin";
        
        $__internal_1e1efaac5a43114b52a03cd906617f34b1273f739908b8214db608be1a349902->leave($__internal_1e1efaac5a43114b52a03cd906617f34b1273f739908b8214db608be1a349902_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_17cbc369a7557828f3124f7c8da789fe9a7fa9979a3c7ef844da4a20a3f7d229 = $this->env->getExtension("native_profiler");
        $__internal_17cbc369a7557828f3124f7c8da789fe9a7fa9979a3c7ef844da4a20a3f7d229->enter($__internal_17cbc369a7557828f3124f7c8da789fe9a7fa9979a3c7ef844da4a20a3f7d229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<body class=\"hold-transition login-page\">

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"#\"><b>Cloud Admin</b></a>
        </div>
        <!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"home\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" id=\"wLoginId\" name=\"wLoginId\" class=\"form-control\" placeholder=\"LoginId\">
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" id=\"wPass\" name=\"wPass\" class=\"form-control\" placeholder=\"Password\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox icheck\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-danger btn-block btn-flat\">Sign In</button>
                        <!-- <input type=\"submit\" name=\"submit\"> -->
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
</body>
";
        
        $__internal_17cbc369a7557828f3124f7c8da789fe9a7fa9979a3c7ef844da4a20a3f7d229->leave($__internal_17cbc369a7557828f3124f7c8da789fe9a7fa9979a3c7ef844da4a20a3f7d229_prof);

    }

    public function getTemplateName()
    {
        return "cloudadmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Cloud Admin{% endblock %}*/
/* */
/* {% block body %}*/
/* <body class="hold-transition login-page">*/
/* */
/*     <div class="login-box">*/
/*         <div class="login-logo">*/
/*             <a href="#"><b>Cloud Admin</b></a>*/
/*         </div>*/
/*         <!-- /.login-logo -->*/
/*         <div class="login-box-body">*/
/*             <p class="login-box-msg">Sign in to start your session</p>*/
/*             <form action="home" method="post">*/
/*                 <div class="form-group has-feedback">*/
/*                     <input type="text" id="wLoginId" name="wLoginId" class="form-control" placeholder="LoginId">*/
/*                     <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*                 </div>*/
/*                 <div class="form-group has-feedback">*/
/*                     <input type="password" id="wPass" name="wPass" class="form-control" placeholder="Password">*/
/*                     <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-8">*/
/*                         <div class="checkbox icheck">*/
/*                             <label>*/
/*                                 <input type="checkbox"> Remember Me*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /.col -->*/
/*                     <div class="col-xs-4">*/
/*                         <button type="submit" name="submit" class="btn btn-danger btn-block btn-flat">Sign In</button>*/
/*                         <!-- <input type="submit" name="submit"> -->*/
/*                     </div>*/
/*                     <!-- /.col -->*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <!-- /.login-box-body -->*/
/*     </div>*/
/*     <!-- /.login-box -->*/
/* </body>*/
/* {% endblock %}*/
