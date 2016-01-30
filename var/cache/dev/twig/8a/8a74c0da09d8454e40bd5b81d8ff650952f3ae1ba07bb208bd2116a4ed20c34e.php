<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0a16629f25521703f316af498cf562816b115516a2e2a7746ee72f4b850de7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d13f511226d3e5d1d0074bbd329b4f056ad5b8825df195bf7b3117c9d26e0047 = $this->env->getExtension("native_profiler");
        $__internal_d13f511226d3e5d1d0074bbd329b4f056ad5b8825df195bf7b3117c9d26e0047->enter($__internal_d13f511226d3e5d1d0074bbd329b4f056ad5b8825df195bf7b3117c9d26e0047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d13f511226d3e5d1d0074bbd329b4f056ad5b8825df195bf7b3117c9d26e0047->leave($__internal_d13f511226d3e5d1d0074bbd329b4f056ad5b8825df195bf7b3117c9d26e0047_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_667011501db43aef94e1fbef957e918a5b249926b3fbf8e6a4f41dc5953dcfc6 = $this->env->getExtension("native_profiler");
        $__internal_667011501db43aef94e1fbef957e918a5b249926b3fbf8e6a4f41dc5953dcfc6->enter($__internal_667011501db43aef94e1fbef957e918a5b249926b3fbf8e6a4f41dc5953dcfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_667011501db43aef94e1fbef957e918a5b249926b3fbf8e6a4f41dc5953dcfc6->leave($__internal_667011501db43aef94e1fbef957e918a5b249926b3fbf8e6a4f41dc5953dcfc6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8df9754557381db3de15e3053d3d8de0f7a97eec046b83d11b2dbe86095fa674 = $this->env->getExtension("native_profiler");
        $__internal_8df9754557381db3de15e3053d3d8de0f7a97eec046b83d11b2dbe86095fa674->enter($__internal_8df9754557381db3de15e3053d3d8de0f7a97eec046b83d11b2dbe86095fa674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8df9754557381db3de15e3053d3d8de0f7a97eec046b83d11b2dbe86095fa674->leave($__internal_8df9754557381db3de15e3053d3d8de0f7a97eec046b83d11b2dbe86095fa674_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0898ff8e0a23f8ffe73ff14b49fe1dd44328d1ab377746428db91cdd17b68a80 = $this->env->getExtension("native_profiler");
        $__internal_0898ff8e0a23f8ffe73ff14b49fe1dd44328d1ab377746428db91cdd17b68a80->enter($__internal_0898ff8e0a23f8ffe73ff14b49fe1dd44328d1ab377746428db91cdd17b68a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0898ff8e0a23f8ffe73ff14b49fe1dd44328d1ab377746428db91cdd17b68a80->leave($__internal_0898ff8e0a23f8ffe73ff14b49fe1dd44328d1ab377746428db91cdd17b68a80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
