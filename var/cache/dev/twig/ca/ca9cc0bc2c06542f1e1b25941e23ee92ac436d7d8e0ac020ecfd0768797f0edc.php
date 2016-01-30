<?php

/* cloudadmin/createtemplates/createactivitytemplate.html.twig */
class __TwigTemplate_8cb04646dfe5a35d90ad79e8b0cf77775a80ba3a21e01d23d017659342928bee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cloudadmin/createtemplates/createactivitytemplate.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'inlinejavascripts' => array($this, 'block_inlinejavascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc638e0f6b779a00de0c4bdab2179159fb6f65490d49c2acd67adb9121f2e0d6 = $this->env->getExtension("native_profiler");
        $__internal_bc638e0f6b779a00de0c4bdab2179159fb6f65490d49c2acd67adb9121f2e0d6->enter($__internal_bc638e0f6b779a00de0c4bdab2179159fb6f65490d49c2acd67adb9121f2e0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/createtemplates/createactivitytemplate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc638e0f6b779a00de0c4bdab2179159fb6f65490d49c2acd67adb9121f2e0d6->leave($__internal_bc638e0f6b779a00de0c4bdab2179159fb6f65490d49c2acd67adb9121f2e0d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_710a0f08046927286ab9cde6b7e307c9b48505090c613afd312498cda9f369ef = $this->env->getExtension("native_profiler");
        $__internal_710a0f08046927286ab9cde6b7e307c9b48505090c613afd312498cda9f369ef->enter($__internal_710a0f08046927286ab9cde6b7e307c9b48505090c613afd312498cda9f369ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cloud Admin - Create Activity Template";
        
        $__internal_710a0f08046927286ab9cde6b7e307c9b48505090c613afd312498cda9f369ef->leave($__internal_710a0f08046927286ab9cde6b7e307c9b48505090c613afd312498cda9f369ef_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4fc2f21596495d86f953d20f6281ca70fc205febc47a667392e908548eebfdb = $this->env->getExtension("native_profiler");
        $__internal_c4fc2f21596495d86f953d20f6281ca70fc205febc47a667392e908548eebfdb->enter($__internal_c4fc2f21596495d86f953d20f6281ca70fc205febc47a667392e908548eebfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
";
        
        $__internal_c4fc2f21596495d86f953d20f6281ca70fc205febc47a667392e908548eebfdb->leave($__internal_c4fc2f21596495d86f953d20f6281ca70fc205febc47a667392e908548eebfdb_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8456e9e87b224e0f598fca4a650e2d50778cfab86bfe4b9419a93fa2597b779e = $this->env->getExtension("native_profiler");
        $__internal_8456e9e87b224e0f598fca4a650e2d50778cfab86bfe4b9419a93fa2597b779e->enter($__internal_8456e9e87b224e0f598fca4a650e2d50778cfab86bfe4b9419a93fa2597b779e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "
";
        
        $__internal_8456e9e87b224e0f598fca4a650e2d50778cfab86bfe4b9419a93fa2597b779e->leave($__internal_8456e9e87b224e0f598fca4a650e2d50778cfab86bfe4b9419a93fa2597b779e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca26c52934e64cfee42278923289a14eeb3f2c4beeaa144cda55238e41fbb4a3 = $this->env->getExtension("native_profiler");
        $__internal_ca26c52934e64cfee42278923289a14eeb3f2c4beeaa144cda55238e41fbb4a3->enter($__internal_ca26c52934e64cfee42278923289a14eeb3f2c4beeaa144cda55238e41fbb4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<body>
    <div class=\"alert alert-info alert-block fade\" id=\"alert\">
        <button type=\"button\" class=\"close\" aria-hidden=\"true\" id=\"alertClose\">×</button>
        <h4><i class=\"icon fa fa-ban\"></i> Alert!</h4> Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
    </div>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"box box-danger\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Create Activity Template</h3>
                        <!--<div class=\"box-tools pull-right\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t\t\t\t</div>-->
                    </div>
                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h4>Activity Template</h4>
                                <input id=\"btnAdd\" type=\"button\" class=\"btn btn-danger btn-block btn-flat\" value=\"Add\" />
                                <br />
                                <br />
                            </div>
                            <div class=\"col-md-6\">
                                <div id=\"activityTemplateContainer\">
                                    <!-- Fields will be added here -->
                                </div>
                                <br/>
                                <input id=\"btnGet\" type=\"button\" class=\"btn btn-danger btn-block btn-flat\" value=\"Get Values\" />
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class=\"col-md-3\">
            </div>
            <div class=\"col-md-3\">
            </div>
        </div>
    </section>
</body>
";
        
        $__internal_ca26c52934e64cfee42278923289a14eeb3f2c4beeaa144cda55238e41fbb4a3->leave($__internal_ca26c52934e64cfee42278923289a14eeb3f2c4beeaa144cda55238e41fbb4a3_prof);

    }

    // line 60
    public function block_inlinejavascripts($context, array $blocks = array())
    {
        $__internal_87d01dd2ffe2df1e5a8d7bc6fb7c8f284ba04eb170c7b562f3a1c5a49bf6708a = $this->env->getExtension("native_profiler");
        $__internal_87d01dd2ffe2df1e5a8d7bc6fb7c8f284ba04eb170c7b562f3a1c5a49bf6708a->enter($__internal_87d01dd2ffe2df1e5a8d7bc6fb7c8f284ba04eb170c7b562f3a1c5a49bf6708a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inlinejavascripts"));

        // line 61
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\"#btnAdd\").bind(\"click\", function() {
                var div = \$(\"<div/>\");
                div.html(GetDynamicTextBox(\"\"));
                \$(\"#activityTemplateContainer\").append(div);
            });
            var i = 0;
            \$(\"#btnGet\").bind(\"click\", function() {
                var values = [];
                \$(\"input[name=DynamicTextBox]\").each(function() {
                    values[i] = \$(this).val();
                    i++;
                });
                //console.log(values);
                var str_json = JSON.stringify(values);
                //console.log(\"Activity Template: str_json: \"+str_json);
                \$.ajax({
                    url: \"activity_template_action.php\",
                    async: true,
                    type: \"POST\",
                    data: str_json,
                    success: function() {
                        //response = \$(this).responseText;
                        //alert(resposne);
                        //if(response == \"success\"){
                        \$(\"#alert\").addClass(\"in alert-success\");
                        //}
                    },
                    error: function() {

                    }
                })
            });
            \$(\"body\").on(\"click\", \".remove\", function() {
                \$(this).closest(\"div\").remove();
            });
            \$(\"#alertClose\").click(function() {
                \$(this).parent().removeClass('in');
            });
        });

        function GetDynamicTextBox(value) {
            return '<input name = \"DynamicTextBox\" type=\"text\" value = \"' + value + '\" placeholder=\"Attribute Name\"/>' +
                '<input type=\"button\" id=\"remove\" value=\"Remove\" class=\"btn btn-danger btn-block btn-flat\" />'
        }
    </script>
";
        
        $__internal_87d01dd2ffe2df1e5a8d7bc6fb7c8f284ba04eb170c7b562f3a1c5a49bf6708a->leave($__internal_87d01dd2ffe2df1e5a8d7bc6fb7c8f284ba04eb170c7b562f3a1c5a49bf6708a_prof);

    }

    public function getTemplateName()
    {
        return "cloudadmin/createtemplates/createactivitytemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 61,  134 => 60,  84 => 15,  78 => 14,  70 => 10,  64 => 9,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Cloud Admin - Create Activity Template{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <body>*/
/*     <div class="alert alert-info alert-block fade" id="alert">*/
/*         <button type="button" class="close" aria-hidden="true" id="alertClose">×</button>*/
/*         <h4><i class="icon fa fa-ban"></i> Alert!</h4> Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.*/
/*     </div>*/
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-md-6">*/
/*                 <div class="box box-danger">*/
/*                     <div class="box-header with-border">*/
/*                         <h3 class="box-title">Create Activity Template</h3>*/
/*                         <!--<div class="box-tools pull-right">*/
/* 								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/* 								<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/* 							</div>-->*/
/*                     </div>*/
/*                     <div class="box-body">*/
/*                         <div class="row">*/
/*                             <div class="col-md-6">*/
/*                                 <h4>Activity Template</h4>*/
/*                                 <input id="btnAdd" type="button" class="btn btn-danger btn-block btn-flat" value="Add" />*/
/*                                 <br />*/
/*                                 <br />*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <div id="activityTemplateContainer">*/
/*                                     <!-- Fields will be added here -->*/
/*                                 </div>*/
/*                                 <br/>*/
/*                                 <input id="btnGet" type="button" class="btn btn-danger btn-block btn-flat" value="Get Values" />*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /.box-body -->*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-3">*/
/*             </div>*/
/*             <div class="col-md-3">*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* </body>*/
/* {% endblock %}*/
/* */
/* {% block inlinejavascripts %}*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function() {*/
/*             $("#btnAdd").bind("click", function() {*/
/*                 var div = $("<div/>");*/
/*                 div.html(GetDynamicTextBox(""));*/
/*                 $("#activityTemplateContainer").append(div);*/
/*             });*/
/*             var i = 0;*/
/*             $("#btnGet").bind("click", function() {*/
/*                 var values = [];*/
/*                 $("input[name=DynamicTextBox]").each(function() {*/
/*                     values[i] = $(this).val();*/
/*                     i++;*/
/*                 });*/
/*                 //console.log(values);*/
/*                 var str_json = JSON.stringify(values);*/
/*                 //console.log("Activity Template: str_json: "+str_json);*/
/*                 $.ajax({*/
/*                     url: "activity_template_action.php",*/
/*                     async: true,*/
/*                     type: "POST",*/
/*                     data: str_json,*/
/*                     success: function() {*/
/*                         //response = $(this).responseText;*/
/*                         //alert(resposne);*/
/*                         //if(response == "success"){*/
/*                         $("#alert").addClass("in alert-success");*/
/*                         //}*/
/*                     },*/
/*                     error: function() {*/
/* */
/*                     }*/
/*                 })*/
/*             });*/
/*             $("body").on("click", ".remove", function() {*/
/*                 $(this).closest("div").remove();*/
/*             });*/
/*             $("#alertClose").click(function() {*/
/*                 $(this).parent().removeClass('in');*/
/*             });*/
/*         });*/
/* */
/*         function GetDynamicTextBox(value) {*/
/*             return '<input name = "DynamicTextBox" type="text" value = "' + value + '" placeholder="Attribute Name"/>' +*/
/*                 '<input type="button" id="remove" value="Remove" class="btn btn-danger btn-block btn-flat" />'*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
