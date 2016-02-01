<?php

/* base.html.twig */
class __TwigTemplate_aa2a2ff5354c90d7993ad3cdbe7ddf5f831f4b969119fc807f61d12c866909ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'inlinejavascripts' => array($this, 'block_inlinejavascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3099184888512d9abf0071aea66e7d62ea43009c0dc05f9d664429c73a854d17 = $this->env->getExtension("native_profiler");
        $__internal_3099184888512d9abf0071aea66e7d62ea43009c0dc05f9d664429c73a854d17->enter($__internal_3099184888512d9abf0071aea66e7d62ea43009c0dc05f9d664429c73a854d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/css/skin-red.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/css/red.css"), "html", null, true);
        echo "\"> 
        
        <!-- jQuery 1.12.0 -->
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.12.0.min.js\"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resources/js/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script>
          \$(function () {
            \$('input').iCheck({
              checkboxClass: 'icheckbox_square-red',
              radioClass: 'iradio_square-red',
              increaseArea: '20%' // optional
            });
          });
        </script>
        ";
        // line 37
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "        
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        ";
        $this->displayBlock('inlinejavascripts', $context, $blocks);
        // line 46
        echo "    </body>
</html>
";
        
        $__internal_3099184888512d9abf0071aea66e7d62ea43009c0dc05f9d664429c73a854d17->leave($__internal_3099184888512d9abf0071aea66e7d62ea43009c0dc05f9d664429c73a854d17_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dda4cf4743db71dd05e2aa153672bf423c3134796f9752fb1f7ecde6c01ca43 = $this->env->getExtension("native_profiler");
        $__internal_8dda4cf4743db71dd05e2aa153672bf423c3134796f9752fb1f7ecde6c01ca43->enter($__internal_8dda4cf4743db71dd05e2aa153672bf423c3134796f9752fb1f7ecde6c01ca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8dda4cf4743db71dd05e2aa153672bf423c3134796f9752fb1f7ecde6c01ca43->leave($__internal_8dda4cf4743db71dd05e2aa153672bf423c3134796f9752fb1f7ecde6c01ca43_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac9d3afcf84d54fc3140d3ce3c4594fa1298bf8e3a21ccaccb74f118885c5808 = $this->env->getExtension("native_profiler");
        $__internal_ac9d3afcf84d54fc3140d3ce3c4594fa1298bf8e3a21ccaccb74f118885c5808->enter($__internal_ac9d3afcf84d54fc3140d3ce3c4594fa1298bf8e3a21ccaccb74f118885c5808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac9d3afcf84d54fc3140d3ce3c4594fa1298bf8e3a21ccaccb74f118885c5808->leave($__internal_ac9d3afcf84d54fc3140d3ce3c4594fa1298bf8e3a21ccaccb74f118885c5808_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab74c940f071fdd3f6880399568bae0a18a4aa2ce547cb9a639fa2634b1336ae = $this->env->getExtension("native_profiler");
        $__internal_ab74c940f071fdd3f6880399568bae0a18a4aa2ce547cb9a639fa2634b1336ae->enter($__internal_ab74c940f071fdd3f6880399568bae0a18a4aa2ce547cb9a639fa2634b1336ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ab74c940f071fdd3f6880399568bae0a18a4aa2ce547cb9a639fa2634b1336ae->leave($__internal_ab74c940f071fdd3f6880399568bae0a18a4aa2ce547cb9a639fa2634b1336ae_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfdaa762a023d7442492b39232afee87704aa6059d0f0711dc70e57138f72754 = $this->env->getExtension("native_profiler");
        $__internal_cfdaa762a023d7442492b39232afee87704aa6059d0f0711dc70e57138f72754->enter($__internal_cfdaa762a023d7442492b39232afee87704aa6059d0f0711dc70e57138f72754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cfdaa762a023d7442492b39232afee87704aa6059d0f0711dc70e57138f72754->leave($__internal_cfdaa762a023d7442492b39232afee87704aa6059d0f0711dc70e57138f72754_prof);

    }

    // line 45
    public function block_inlinejavascripts($context, array $blocks = array())
    {
        $__internal_152501c1d04a0d248de2e532cba06f4aee9e9eb4c66b0735e1b945e31706f7f0 = $this->env->getExtension("native_profiler");
        $__internal_152501c1d04a0d248de2e532cba06f4aee9e9eb4c66b0735e1b945e31706f7f0->enter($__internal_152501c1d04a0d248de2e532cba06f4aee9e9eb4c66b0735e1b945e31706f7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inlinejavascripts"));

        
        $__internal_152501c1d04a0d248de2e532cba06f4aee9e9eb4c66b0735e1b945e31706f7f0->leave($__internal_152501c1d04a0d248de2e532cba06f4aee9e9eb4c66b0735e1b945e31706f7f0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 45,  150 => 44,  139 => 39,  128 => 37,  116 => 10,  107 => 46,  104 => 45,  102 => 44,  96 => 41,  93 => 40,  91 => 39,  88 => 38,  86 => 37,  73 => 27,  68 => 25,  60 => 20,  56 => 19,  52 => 18,  43 => 12,  38 => 10,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     */
/*         <!-- Tell the browser to be responsive to screen width -->*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     */
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*         <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}">*/
/*         <!-- Font Awesome -->*/
/*         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         <!-- Ionicons -->*/
/*         <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">*/
/*         <!-- Theme style -->*/
/*         <link rel="stylesheet" href="{{ asset('resources/css/AdminLTE.min.css')}}">*/
/*         <link rel="stylesheet" href="{{ asset('resources/css/skin-red.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('resources/css/red.css') }}"> */
/*         */
/*         <!-- jQuery 1.12.0 -->*/
/*         <script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>*/
/*         <!-- Bootstrap 3.3.5 -->*/
/*         <script src="{{ asset('resources/js/bootstrap.min.js') }}"></script>*/
/*         <!-- iCheck -->*/
/*         <script src="{{ asset('resources/js/icheck.min.js') }}"></script>*/
/*         <script>*/
/*           $(function () {*/
/*             $('input').iCheck({*/
/*               checkboxClass: 'icheckbox_square-red',*/
/*               radioClass: 'iradio_square-red',*/
/*               increaseArea: '20%' // optional*/
/*             });*/
/*           });*/
/*         </script>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         */
/*         {% block javascripts %}{% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block inlinejavascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
