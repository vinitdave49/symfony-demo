<?php

/* cloudadmin/createtemplates/createactivitytemplate.html.twig */
class __TwigTemplate_8cb04646dfe5a35d90ad79e8b0cf77775a80ba3a21e01d23d017659342928bee extends Twig_Template
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
        $__internal_37abf16607d10c0299731f6e3181b5c3935d0501b5abb2ad109c48fd9b77ffcf = $this->env->getExtension("native_profiler");
        $__internal_37abf16607d10c0299731f6e3181b5c3935d0501b5abb2ad109c48fd9b77ffcf->enter($__internal_37abf16607d10c0299731f6e3181b5c3935d0501b5abb2ad109c48fd9b77ffcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/createtemplates/createactivitytemplate.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
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
    </div>
</section>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\"#btnAdd\").bind(\"click\", function() {
           // alert(\"Add Button is clicked!!!\");
            var div = \$(\"<div id='element' />\");
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
        /*\$(\"body\").on(\"click\", \".remove\", function() {
            alert(\"Remove called\");
            \$(this).closest(\"div\").remove();
        });*/
        // \$(\"#remove\").click(function(){
        //   alert(\"Remove button is clicked!!!\");
        // });
        \$(\"#alertClose\").click(function() {
            \$(this).parent().removeClass('in');
        });
    });

    function GetDynamicTextBox(value) {
        return '<input name = \"DynamicTextBox\" type=\"text\" value = \"' + value + '\" placeholder=\"Attribute Name\"/>' +
            '<input type=\"button\" id=\"remove\" value=\"Remove\" class=\"btn btn-danger btn-block btn-flat\" onClick=\"removeElement(\\'activityTemplateContainer\\', \\'element\\');\" />'
    }

    function removeElement(parentDiv, childDiv){
     if (childDiv == parentDiv) {
          alert(\"The parent div cannot be removed.\");
        }
     else if (document.getElementById(childDiv)) {
          var child = document.getElementById(childDiv);
          var parent = document.getElementById(parentDiv);
          parent.removeChild(child);
        }
     else {
          alert(\"Child div has already been removed or does not exist.\");
          return false;
         }
    }
</script>";
        
        $__internal_37abf16607d10c0299731f6e3181b5c3935d0501b5abb2ad109c48fd9b77ffcf->leave($__internal_37abf16607d10c0299731f6e3181b5c3935d0501b5abb2ad109c48fd9b77ffcf_prof);

    }

    public function getTemplateName()
    {
        return "cloudadmin/createtemplates/createactivitytemplate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="box box-danger">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Create Activity Template</h3>*/
/*                     <!--<div class="box-tools pull-right">*/
/* 								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/* 								<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/* 							</div>-->*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
/*                             <h4>Activity Template</h4>*/
/*                             <input id="btnAdd" type="button" class="btn btn-danger btn-block btn-flat" value="Add" />*/
/*                             <br />*/
/*                             <br />*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <div id="activityTemplateContainer">*/
/*                                 <!-- Fields will be added here -->*/
/*                             </div>*/
/*                             <br/>*/
/*                             <input id="btnGet" type="button" class="btn btn-danger btn-block btn-flat" value="Get Values" />*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.box-body -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*         $("#btnAdd").bind("click", function() {*/
/*            // alert("Add Button is clicked!!!");*/
/*             var div = $("<div id='element' />");*/
/*             div.html(GetDynamicTextBox(""));*/
/*             $("#activityTemplateContainer").append(div);*/
/*         });*/
/*         var i = 0;*/
/*         $("#btnGet").bind("click", function() {*/
/*             var values = [];*/
/*             $("input[name=DynamicTextBox]").each(function() {*/
/*                 values[i] = $(this).val();*/
/*                 i++;*/
/*             });*/
/*             //console.log(values);*/
/*             var str_json = JSON.stringify(values);*/
/*             //console.log("Activity Template: str_json: "+str_json);*/
/*             $.ajax({*/
/*                 url: "activity_template_action.php",*/
/*                 async: true,*/
/*                 type: "POST",*/
/*                 data: str_json,*/
/*                 success: function() {*/
/*                     //response = $(this).responseText;*/
/*                     //alert(resposne);*/
/*                     //if(response == "success"){*/
/*                     $("#alert").addClass("in alert-success");*/
/*                     //}*/
/*                 },*/
/*                 error: function() {*/
/* */
/*                 }*/
/*             })*/
/*         });*/
/*         /*$("body").on("click", ".remove", function() {*/
/*             alert("Remove called");*/
/*             $(this).closest("div").remove();*/
/*         });*//* */
/*         // $("#remove").click(function(){*/
/*         //   alert("Remove button is clicked!!!");*/
/*         // });*/
/*         $("#alertClose").click(function() {*/
/*             $(this).parent().removeClass('in');*/
/*         });*/
/*     });*/
/* */
/*     function GetDynamicTextBox(value) {*/
/*         return '<input name = "DynamicTextBox" type="text" value = "' + value + '" placeholder="Attribute Name"/>' +*/
/*             '<input type="button" id="remove" value="Remove" class="btn btn-danger btn-block btn-flat" onClick="removeElement(\'activityTemplateContainer\', \'element\');" />'*/
/*     }*/
/* */
/*     function removeElement(parentDiv, childDiv){*/
/*      if (childDiv == parentDiv) {*/
/*           alert("The parent div cannot be removed.");*/
/*         }*/
/*      else if (document.getElementById(childDiv)) {*/
/*           var child = document.getElementById(childDiv);*/
/*           var parent = document.getElementById(parentDiv);*/
/*           parent.removeChild(child);*/
/*         }*/
/*      else {*/
/*           alert("Child div has already been removed or does not exist.");*/
/*           return false;*/
/*          }*/
/*     }*/
/* </script>*/
