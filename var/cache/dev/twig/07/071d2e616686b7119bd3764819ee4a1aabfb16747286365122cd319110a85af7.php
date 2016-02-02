<?php

/* cloudadmin/admin/createworker.html.twig */
class __TwigTemplate_52c9a1468bc27b00203442718900885550873d5075334590ee5005a83b2ce714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65b400c1151c5dde5058f2909adfd6563fc304a623e4bb43e6fb04c4d45cf4b7 = $this->env->getExtension("native_profiler");
        $__internal_65b400c1151c5dde5058f2909adfd6563fc304a623e4bb43e6fb04c4d45cf4b7->enter($__internal_65b400c1151c5dde5058f2909adfd6563fc304a623e4bb43e6fb04c4d45cf4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/admin/createworker.html.twig"));

        // line 1
        echo "<!-- Main content -->
<section class=\"content\">
    <div class=\"row\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Create Worker</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"form-group\">
                    <form action=\"create_worker_action.php\" method=\"post\">
                        <div class=\"col-md-6\">
                            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["textboxes"]) ? $context["textboxes"] : $this->getContext($context, "textboxes")));
        foreach ($context['_seq'] as $context["_key"] => $context["textbox"]) {
            // line 13
            echo "                                <label>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["textbox"], "attributeName", array()), "html", null, true);
            echo "</label>
                                ";
            // line 14
            if (($this->getAttribute($context["textbox"], "attributeName", array()) == "wWorkspace")) {
                // line 15
                echo "                                    <input type=\"text\" class=\"form-control\" id='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["textbox"], "attributeName", array()), "html", null, true);
                echo "' value='";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "workspaceid"), "method"), "html", null, true);
                echo "' disabled >
                                ";
            } else {
                // line 17
                echo "                                    <input type=\"text\" class=\"form-control\" id='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["textbox"], "attributeName", array()), "html", null, true);
                echo "'>
                                ";
            }
            // line 19
            echo "                            <br> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textbox'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                            <button type=\"submit\" name=\"submit\" class=\"btn btn-block btn-danger\">Create</button>
                        </div>
                        <div class=\"col-md-6\">
                            <label>Skills</label>

                            <div class=\"checkbox\">
                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["checkboxes"]) ? $context["checkboxes"] : $this->getContext($context, "checkboxes")));
        foreach ($context['_seq'] as $context["_key"] => $context["checkbox"]) {
            // line 27
            echo "                                <label>
                                    <input type=\"checkbox\" id='";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["checkbox"], "attributeName", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["checkbox"], "attributeName", array()), "html", null, true);
            echo "</label>
                                <br> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checkbox'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box-primary -->
        </div>
    </div>
</section>
<!-- /.content -->";
        
        $__internal_65b400c1151c5dde5058f2909adfd6563fc304a623e4bb43e6fb04c4d45cf4b7->leave($__internal_65b400c1151c5dde5058f2909adfd6563fc304a623e4bb43e6fb04c4d45cf4b7_prof);

    }

    public function getTemplateName()
    {
        return "cloudadmin/admin/createworker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  81 => 28,  78 => 27,  74 => 26,  66 => 20,  60 => 19,  54 => 17,  46 => 15,  44 => 14,  39 => 13,  35 => 12,  22 => 1,);
    }
}
/* <!-- Main content -->*/
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="box box-danger">*/
/*             <div class="box-header">*/
/*                 <h3 class="box-title">Create Worker</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <div class="form-group">*/
/*                     <form action="create_worker_action.php" method="post">*/
/*                         <div class="col-md-6">*/
/*                             {% for textbox in textboxes %}*/
/*                                 <label>{{ textbox.attributeName }}</label>*/
/*                                 {% if textbox.attributeName == "wWorkspace" %}*/
/*                                     <input type="text" class="form-control" id='{{ textbox.attributeName }}' value='{{ app.session.get('workspaceid') }}' disabled >*/
/*                                 {% else %}*/
/*                                     <input type="text" class="form-control" id='{{ textbox.attributeName }}'>*/
/*                                 {% endif %}*/
/*                             <br> {% endfor %}*/
/*                             <button type="submit" name="submit" class="btn btn-block btn-danger">Create</button>*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <label>Skills</label>*/
/* */
/*                             <div class="checkbox">*/
/*                                 {% for checkbox in checkboxes %}*/
/*                                 <label>*/
/*                                     <input type="checkbox" id='{{ checkbox.attributeName }}'>{{ checkbox.attributeName }}</label>*/
/*                                 <br> {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*                 <!-- /.box-body -->*/
/*             </div>*/
/*             <!-- /.box-primary -->*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <!-- /.content -->*/
