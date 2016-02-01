<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_730bd54c72d0f008a52430b787001293fc2ed64099dd7fc29a4fb58d1b6bad78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b983dbdd10735e177fb736036ec3b904787c578644cdf8393c148d60b9dafcc0 = $this->env->getExtension("native_profiler");
        $__internal_b983dbdd10735e177fb736036ec3b904787c578644cdf8393c148d60b9dafcc0->enter($__internal_b983dbdd10735e177fb736036ec3b904787c578644cdf8393c148d60b9dafcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b983dbdd10735e177fb736036ec3b904787c578644cdf8393c148d60b9dafcc0->leave($__internal_b983dbdd10735e177fb736036ec3b904787c578644cdf8393c148d60b9dafcc0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f33c7b91e7cbbdc98a438b1e9d6439c0a2158d44a99d52a73c0bf18c029f2eea = $this->env->getExtension("native_profiler");
        $__internal_f33c7b91e7cbbdc98a438b1e9d6439c0a2158d44a99d52a73c0bf18c029f2eea->enter($__internal_f33c7b91e7cbbdc98a438b1e9d6439c0a2158d44a99d52a73c0bf18c029f2eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f33c7b91e7cbbdc98a438b1e9d6439c0a2158d44a99d52a73c0bf18c029f2eea->leave($__internal_f33c7b91e7cbbdc98a438b1e9d6439c0a2158d44a99d52a73c0bf18c029f2eea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f6538fecf1734519cdc6e248d1b3ca1fed2d86cde89dcc2926e96abaadd065a = $this->env->getExtension("native_profiler");
        $__internal_8f6538fecf1734519cdc6e248d1b3ca1fed2d86cde89dcc2926e96abaadd065a->enter($__internal_8f6538fecf1734519cdc6e248d1b3ca1fed2d86cde89dcc2926e96abaadd065a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f6538fecf1734519cdc6e248d1b3ca1fed2d86cde89dcc2926e96abaadd065a->leave($__internal_8f6538fecf1734519cdc6e248d1b3ca1fed2d86cde89dcc2926e96abaadd065a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0e6efa44a35aff68e419195f446f4bbc8a1936678b4d903112a3aa26e778698 = $this->env->getExtension("native_profiler");
        $__internal_d0e6efa44a35aff68e419195f446f4bbc8a1936678b4d903112a3aa26e778698->enter($__internal_d0e6efa44a35aff68e419195f446f4bbc8a1936678b4d903112a3aa26e778698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d0e6efa44a35aff68e419195f446f4bbc8a1936678b4d903112a3aa26e778698->leave($__internal_d0e6efa44a35aff68e419195f446f4bbc8a1936678b4d903112a3aa26e778698_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
