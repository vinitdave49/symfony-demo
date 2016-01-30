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
        $__internal_b1592786351695d3eb4d3fcfe61e99011fa90578ca18588060486f45d57d29ad = $this->env->getExtension("native_profiler");
        $__internal_b1592786351695d3eb4d3fcfe61e99011fa90578ca18588060486f45d57d29ad->enter($__internal_b1592786351695d3eb4d3fcfe61e99011fa90578ca18588060486f45d57d29ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1592786351695d3eb4d3fcfe61e99011fa90578ca18588060486f45d57d29ad->leave($__internal_b1592786351695d3eb4d3fcfe61e99011fa90578ca18588060486f45d57d29ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f4dfb9faa9f5a6401ebc0b7824503738f509abe77930eac5add11f59e9fc490c = $this->env->getExtension("native_profiler");
        $__internal_f4dfb9faa9f5a6401ebc0b7824503738f509abe77930eac5add11f59e9fc490c->enter($__internal_f4dfb9faa9f5a6401ebc0b7824503738f509abe77930eac5add11f59e9fc490c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f4dfb9faa9f5a6401ebc0b7824503738f509abe77930eac5add11f59e9fc490c->leave($__internal_f4dfb9faa9f5a6401ebc0b7824503738f509abe77930eac5add11f59e9fc490c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d4a87630f496cc8c38408ae91fc337ec4c3cb1689aef468364ea14a30d99404 = $this->env->getExtension("native_profiler");
        $__internal_5d4a87630f496cc8c38408ae91fc337ec4c3cb1689aef468364ea14a30d99404->enter($__internal_5d4a87630f496cc8c38408ae91fc337ec4c3cb1689aef468364ea14a30d99404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d4a87630f496cc8c38408ae91fc337ec4c3cb1689aef468364ea14a30d99404->leave($__internal_5d4a87630f496cc8c38408ae91fc337ec4c3cb1689aef468364ea14a30d99404_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09b2a9f20a0a15e6aa6c513a0eaa5913fe1ede14b3dac5ca75c31d4905c7add2 = $this->env->getExtension("native_profiler");
        $__internal_09b2a9f20a0a15e6aa6c513a0eaa5913fe1ede14b3dac5ca75c31d4905c7add2->enter($__internal_09b2a9f20a0a15e6aa6c513a0eaa5913fe1ede14b3dac5ca75c31d4905c7add2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09b2a9f20a0a15e6aa6c513a0eaa5913fe1ede14b3dac5ca75c31d4905c7add2->leave($__internal_09b2a9f20a0a15e6aa6c513a0eaa5913fe1ede14b3dac5ca75c31d4905c7add2_prof);

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
