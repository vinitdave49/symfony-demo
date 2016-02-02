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
        $__internal_e2313b6585154fce15ff9077180e9ca3996202a6e1c3cf3738bd1ad8d6420d06 = $this->env->getExtension("native_profiler");
        $__internal_e2313b6585154fce15ff9077180e9ca3996202a6e1c3cf3738bd1ad8d6420d06->enter($__internal_e2313b6585154fce15ff9077180e9ca3996202a6e1c3cf3738bd1ad8d6420d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2313b6585154fce15ff9077180e9ca3996202a6e1c3cf3738bd1ad8d6420d06->leave($__internal_e2313b6585154fce15ff9077180e9ca3996202a6e1c3cf3738bd1ad8d6420d06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a074a44159f71c7af85620a372c41a2458be42a06116acfd024a16c59ec1872 = $this->env->getExtension("native_profiler");
        $__internal_6a074a44159f71c7af85620a372c41a2458be42a06116acfd024a16c59ec1872->enter($__internal_6a074a44159f71c7af85620a372c41a2458be42a06116acfd024a16c59ec1872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cloud Admin";
        
        $__internal_6a074a44159f71c7af85620a372c41a2458be42a06116acfd024a16c59ec1872->leave($__internal_6a074a44159f71c7af85620a372c41a2458be42a06116acfd024a16c59ec1872_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb16e1ae94a26a3740e258a4ca34f7536c33be16a282c11109896fcee6fa94d3 = $this->env->getExtension("native_profiler");
        $__internal_eb16e1ae94a26a3740e258a4ca34f7536c33be16a282c11109896fcee6fa94d3->enter($__internal_eb16e1ae94a26a3740e258a4ca34f7536c33be16a282c11109896fcee6fa94d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb16e1ae94a26a3740e258a4ca34f7536c33be16a282c11109896fcee6fa94d3->leave($__internal_eb16e1ae94a26a3740e258a4ca34f7536c33be16a282c11109896fcee6fa94d3_prof);

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
