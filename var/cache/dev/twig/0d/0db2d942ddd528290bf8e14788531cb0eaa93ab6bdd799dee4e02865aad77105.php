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
        $__internal_0c89c255cc70503b8e3623944e43b484bfa081b16ee5875051303daec11449b5 = $this->env->getExtension("native_profiler");
        $__internal_0c89c255cc70503b8e3623944e43b484bfa081b16ee5875051303daec11449b5->enter($__internal_0c89c255cc70503b8e3623944e43b484bfa081b16ee5875051303daec11449b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0c89c255cc70503b8e3623944e43b484bfa081b16ee5875051303daec11449b5->leave($__internal_0c89c255cc70503b8e3623944e43b484bfa081b16ee5875051303daec11449b5_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_c781efe567f2ef2398fd52de10124eb7d65f3605d7aabb0a33dfb7a07fd6bfa1 = $this->env->getExtension("native_profiler");
        $__internal_c781efe567f2ef2398fd52de10124eb7d65f3605d7aabb0a33dfb7a07fd6bfa1->enter($__internal_c781efe567f2ef2398fd52de10124eb7d65f3605d7aabb0a33dfb7a07fd6bfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c781efe567f2ef2398fd52de10124eb7d65f3605d7aabb0a33dfb7a07fd6bfa1->leave($__internal_c781efe567f2ef2398fd52de10124eb7d65f3605d7aabb0a33dfb7a07fd6bfa1_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_558a5b3feaddf26214dcabf0cc0b5bca044c6a6c7e1e690bb0f77c91ae8e20d7 = $this->env->getExtension("native_profiler");
        $__internal_558a5b3feaddf26214dcabf0cc0b5bca044c6a6c7e1e690bb0f77c91ae8e20d7->enter($__internal_558a5b3feaddf26214dcabf0cc0b5bca044c6a6c7e1e690bb0f77c91ae8e20d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_558a5b3feaddf26214dcabf0cc0b5bca044c6a6c7e1e690bb0f77c91ae8e20d7->leave($__internal_558a5b3feaddf26214dcabf0cc0b5bca044c6a6c7e1e690bb0f77c91ae8e20d7_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ac34957f1966eee5233b64c1787922119ba007f8e69818f0b2107ac8dec70bb = $this->env->getExtension("native_profiler");
        $__internal_2ac34957f1966eee5233b64c1787922119ba007f8e69818f0b2107ac8dec70bb->enter($__internal_2ac34957f1966eee5233b64c1787922119ba007f8e69818f0b2107ac8dec70bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ac34957f1966eee5233b64c1787922119ba007f8e69818f0b2107ac8dec70bb->leave($__internal_2ac34957f1966eee5233b64c1787922119ba007f8e69818f0b2107ac8dec70bb_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_96ec2f4edb162fc5c29e0e95c630e96d023f67e705bcfe1865807255e27ea6ec = $this->env->getExtension("native_profiler");
        $__internal_96ec2f4edb162fc5c29e0e95c630e96d023f67e705bcfe1865807255e27ea6ec->enter($__internal_96ec2f4edb162fc5c29e0e95c630e96d023f67e705bcfe1865807255e27ea6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96ec2f4edb162fc5c29e0e95c630e96d023f67e705bcfe1865807255e27ea6ec->leave($__internal_96ec2f4edb162fc5c29e0e95c630e96d023f67e705bcfe1865807255e27ea6ec_prof);

    }

    // line 45
    public function block_inlinejavascripts($context, array $blocks = array())
    {
        $__internal_55eb9850c56d06ee0b18e6970e76f51c6db2d8fa8e8b2d39873758bdf7293a20 = $this->env->getExtension("native_profiler");
        $__internal_55eb9850c56d06ee0b18e6970e76f51c6db2d8fa8e8b2d39873758bdf7293a20->enter($__internal_55eb9850c56d06ee0b18e6970e76f51c6db2d8fa8e8b2d39873758bdf7293a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inlinejavascripts"));

        
        $__internal_55eb9850c56d06ee0b18e6970e76f51c6db2d8fa8e8b2d39873758bdf7293a20->leave($__internal_55eb9850c56d06ee0b18e6970e76f51c6db2d8fa8e8b2d39873758bdf7293a20_prof);

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
