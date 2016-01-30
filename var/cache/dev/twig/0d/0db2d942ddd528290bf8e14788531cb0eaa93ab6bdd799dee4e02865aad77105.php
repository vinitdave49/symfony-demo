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
        $__internal_70954b39b376f890ed2f1c3b551771c7fa75f701e97da9456e780dd4c5ccc34d = $this->env->getExtension("native_profiler");
        $__internal_70954b39b376f890ed2f1c3b551771c7fa75f701e97da9456e780dd4c5ccc34d->enter($__internal_70954b39b376f890ed2f1c3b551771c7fa75f701e97da9456e780dd4c5ccc34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_70954b39b376f890ed2f1c3b551771c7fa75f701e97da9456e780dd4c5ccc34d->leave($__internal_70954b39b376f890ed2f1c3b551771c7fa75f701e97da9456e780dd4c5ccc34d_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_4611c4ab087910e3ad4708b6c931391ac2ce01145fd4b2da08ebc4ee0a872668 = $this->env->getExtension("native_profiler");
        $__internal_4611c4ab087910e3ad4708b6c931391ac2ce01145fd4b2da08ebc4ee0a872668->enter($__internal_4611c4ab087910e3ad4708b6c931391ac2ce01145fd4b2da08ebc4ee0a872668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4611c4ab087910e3ad4708b6c931391ac2ce01145fd4b2da08ebc4ee0a872668->leave($__internal_4611c4ab087910e3ad4708b6c931391ac2ce01145fd4b2da08ebc4ee0a872668_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0dd3633e777fe4c2bae6c2416b1691d0b6e7a85ba2d7d6d29c6007b32c5a4a88 = $this->env->getExtension("native_profiler");
        $__internal_0dd3633e777fe4c2bae6c2416b1691d0b6e7a85ba2d7d6d29c6007b32c5a4a88->enter($__internal_0dd3633e777fe4c2bae6c2416b1691d0b6e7a85ba2d7d6d29c6007b32c5a4a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0dd3633e777fe4c2bae6c2416b1691d0b6e7a85ba2d7d6d29c6007b32c5a4a88->leave($__internal_0dd3633e777fe4c2bae6c2416b1691d0b6e7a85ba2d7d6d29c6007b32c5a4a88_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dcde027d4d7553cc7f74198cd25f11a5d32f53cce1ceb3c28ff704cd42485e64 = $this->env->getExtension("native_profiler");
        $__internal_dcde027d4d7553cc7f74198cd25f11a5d32f53cce1ceb3c28ff704cd42485e64->enter($__internal_dcde027d4d7553cc7f74198cd25f11a5d32f53cce1ceb3c28ff704cd42485e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dcde027d4d7553cc7f74198cd25f11a5d32f53cce1ceb3c28ff704cd42485e64->leave($__internal_dcde027d4d7553cc7f74198cd25f11a5d32f53cce1ceb3c28ff704cd42485e64_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cad0df5a9b44b6ffbd752650404bd84790cb7cb314b54c815807660b454f047 = $this->env->getExtension("native_profiler");
        $__internal_0cad0df5a9b44b6ffbd752650404bd84790cb7cb314b54c815807660b454f047->enter($__internal_0cad0df5a9b44b6ffbd752650404bd84790cb7cb314b54c815807660b454f047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0cad0df5a9b44b6ffbd752650404bd84790cb7cb314b54c815807660b454f047->leave($__internal_0cad0df5a9b44b6ffbd752650404bd84790cb7cb314b54c815807660b454f047_prof);

    }

    // line 45
    public function block_inlinejavascripts($context, array $blocks = array())
    {
        $__internal_e6696e086cf9818e468fb555a7f5b1d0be23d23925cfe439ad728b6160ca974f = $this->env->getExtension("native_profiler");
        $__internal_e6696e086cf9818e468fb555a7f5b1d0be23d23925cfe439ad728b6160ca974f->enter($__internal_e6696e086cf9818e468fb555a7f5b1d0be23d23925cfe439ad728b6160ca974f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inlinejavascripts"));

        
        $__internal_e6696e086cf9818e468fb555a7f5b1d0be23d23925cfe439ad728b6160ca974f->leave($__internal_e6696e086cf9818e468fb555a7f5b1d0be23d23925cfe439ad728b6160ca974f_prof);

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
