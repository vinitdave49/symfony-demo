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
        $__internal_c2b26042229271c95616c83603426c0b7a3ad0ec88df6e188d9be7222f552987 = $this->env->getExtension("native_profiler");
        $__internal_c2b26042229271c95616c83603426c0b7a3ad0ec88df6e188d9be7222f552987->enter($__internal_c2b26042229271c95616c83603426c0b7a3ad0ec88df6e188d9be7222f552987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2b26042229271c95616c83603426c0b7a3ad0ec88df6e188d9be7222f552987->leave($__internal_c2b26042229271c95616c83603426c0b7a3ad0ec88df6e188d9be7222f552987_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d2ab07fa12dbd981e7f2c3a97b19c8cef8ab282e9169e2586ea17c5cc30f00f = $this->env->getExtension("native_profiler");
        $__internal_8d2ab07fa12dbd981e7f2c3a97b19c8cef8ab282e9169e2586ea17c5cc30f00f->enter($__internal_8d2ab07fa12dbd981e7f2c3a97b19c8cef8ab282e9169e2586ea17c5cc30f00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8d2ab07fa12dbd981e7f2c3a97b19c8cef8ab282e9169e2586ea17c5cc30f00f->leave($__internal_8d2ab07fa12dbd981e7f2c3a97b19c8cef8ab282e9169e2586ea17c5cc30f00f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3600edb749ae0211a474a9697f58e3413751e1b81b8ca097874d61aec2de72cd = $this->env->getExtension("native_profiler");
        $__internal_3600edb749ae0211a474a9697f58e3413751e1b81b8ca097874d61aec2de72cd->enter($__internal_3600edb749ae0211a474a9697f58e3413751e1b81b8ca097874d61aec2de72cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3600edb749ae0211a474a9697f58e3413751e1b81b8ca097874d61aec2de72cd->leave($__internal_3600edb749ae0211a474a9697f58e3413751e1b81b8ca097874d61aec2de72cd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cd181d22bc080325364fb79bb639de6e04a656be25d4b3c40b8fe7129d242c4 = $this->env->getExtension("native_profiler");
        $__internal_1cd181d22bc080325364fb79bb639de6e04a656be25d4b3c40b8fe7129d242c4->enter($__internal_1cd181d22bc080325364fb79bb639de6e04a656be25d4b3c40b8fe7129d242c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1cd181d22bc080325364fb79bb639de6e04a656be25d4b3c40b8fe7129d242c4->leave($__internal_1cd181d22bc080325364fb79bb639de6e04a656be25d4b3c40b8fe7129d242c4_prof);

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
