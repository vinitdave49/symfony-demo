<?php

/* cloudadmin/createtemplates/createworkertemplate.html.twig */
class __TwigTemplate_27a395dd02e7fd19094ea09cfc3ac95c2969eef6cfffcc2f09d363c78b46794d extends Twig_Template
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
        $__internal_6552d131f3d2d7bac08c3e7863f019e1c50295671240435bec1a50c3052e0b04 = $this->env->getExtension("native_profiler");
        $__internal_6552d131f3d2d7bac08c3e7863f019e1c50295671240435bec1a50c3052e0b04->enter($__internal_6552d131f3d2d7bac08c3e7863f019e1c50295671240435bec1a50c3052e0b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/createtemplates/createworkertemplate.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"box box-danger\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Create Worker Template</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <form>
                            <div class=\"form-group\">
                                <input type=\"text\" id=\"wLoginId\" name=\"wLoginId\" class=\"form-control\" placeholder=\"Login ID\" disabled>
                                <input type=\"text\" id=\"wFName\" name=\"wFName\" class=\"form-control\" placeholder=\"First Name\" disabled>
                                <input type=\"text\" id=\"wLName\" name=\"wLName\" class=\"form-control\" placeholder=\"Last Name\" disabled>
                                <input type=\"text\" id=\"wDisplayName\" name=\"wDisplayName\" class=\"form-control\" placeholder=\"Display Name\" disabled>
                                <input type=\"text\" id=\"wEmail\" name=\"wEmail\" class=\"form-control\" placeholder=\"Email\" disabled>
                                <input type=\"text\" id=\"wWorkspace\" name=\"wWorkspace\" class=\"form-control\" placeholder=\"Workspace\" disabled>
                                <input type=\"text\" id=\"wActivity\" name=\"wActivity\" class=\"form-control\" placeholder=\"Activity\" disabled> Create Skills
                                <br>
                                <input id=\"btnAdd\" type=\"button\" value=\"Add\" class=\"btn btn-danger btn-block btn-flat\" />
                                <br />
                                <br />
                                <div id=\"workerTemplateContainer\">
                                    <!--Textboxes will be added here -->
                                </div>
                                <br />
                                <!--<input id=\"btnGet\" type=\"button\" value=\"Get Values\" />-->
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" id=\"btnSave\" name=\"btnSave\" class=\"btn btn-block btn-danger\">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <p><strong>These are mandatory fields.</strong></p>
                    <p><strong>Please create skills as per requirement</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>
<script type=\"text/javascript\">
    \$(function() {
        \$(\"#btnAdd\").bind(\"click\", function() {
            var div = \$(\"<div id='element'/>\");
            div.html(GetDynamicTextBox(\"Add Skills Here!!!\"));
            \$(\"#workerTemplateContainer\").append(div);
        });
        var i = 0;
        var oReq = new XMLHttpRequest();
        \$(\"#btnSave\").bind(\"click\", function() {
            var values = [];
            \$(\"input[name=DynamicTextBox]\").each(function() {
                values[i] = \$(this).val();
                i++;
            });
            var str_json = JSON.stringify(values);
            \$.ajax({
                    url: \"worker_template_action.php\",
                    async: true,
                    type: \"POST\",
                    data: str_json,
                    success: function() {},
                    error: function() {}
                })
                //window.location.href =\"worker_template_action.php?wValues=\"+str_json;

        });
        // \$(\"body\").on(\"click\", \".remove\", function() {
        //     \$(this).closest(\"div\").remove();
        // });
    });

    function GetDynamicTextBox(value) {
        return '<input name = \"DynamicTextBox\" type=\"text\" value = \"' + value + '\" />&nbsp;' +
            '<input type=\"button\" value=\"Remove\" class=\"btn btn-danger btn-block btn-flat\" onClick=\"removeElement(\\'workerTemplateContainer\\', \\'element\\');\" />'
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
        
        $__internal_6552d131f3d2d7bac08c3e7863f019e1c50295671240435bec1a50c3052e0b04->leave($__internal_6552d131f3d2d7bac08c3e7863f019e1c50295671240435bec1a50c3052e0b04_prof);

    }

    public function getTemplateName()
    {
        return "cloudadmin/createtemplates/createworkertemplate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="box box-danger">*/
/*             <div class="box-header with-border">*/
/*                 <h3 class="box-title">Create Worker Template</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <div class="col-md-6">*/
/*                     <div class="form-group">*/
/*                         <form>*/
/*                             <div class="form-group">*/
/*                                 <input type="text" id="wLoginId" name="wLoginId" class="form-control" placeholder="Login ID" disabled>*/
/*                                 <input type="text" id="wFName" name="wFName" class="form-control" placeholder="First Name" disabled>*/
/*                                 <input type="text" id="wLName" name="wLName" class="form-control" placeholder="Last Name" disabled>*/
/*                                 <input type="text" id="wDisplayName" name="wDisplayName" class="form-control" placeholder="Display Name" disabled>*/
/*                                 <input type="text" id="wEmail" name="wEmail" class="form-control" placeholder="Email" disabled>*/
/*                                 <input type="text" id="wWorkspace" name="wWorkspace" class="form-control" placeholder="Workspace" disabled>*/
/*                                 <input type="text" id="wActivity" name="wActivity" class="form-control" placeholder="Activity" disabled> Create Skills*/
/*                                 <br>*/
/*                                 <input id="btnAdd" type="button" value="Add" class="btn btn-danger btn-block btn-flat" />*/
/*                                 <br />*/
/*                                 <br />*/
/*                                 <div id="workerTemplateContainer">*/
/*                                     <!--Textboxes will be added here -->*/
/*                                 </div>*/
/*                                 <br />*/
/*                                 <!--<input id="btnGet" type="button" value="Get Values" />-->*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <button type="button" id="btnSave" name="btnSave" class="btn btn-block btn-danger">Save</button>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <p><strong>These are mandatory fields.</strong></p>*/
/*                     <p><strong>Please create skills as per requirement</strong></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <script type="text/javascript">*/
/*     $(function() {*/
/*         $("#btnAdd").bind("click", function() {*/
/*             var div = $("<div id='element'/>");*/
/*             div.html(GetDynamicTextBox("Add Skills Here!!!"));*/
/*             $("#workerTemplateContainer").append(div);*/
/*         });*/
/*         var i = 0;*/
/*         var oReq = new XMLHttpRequest();*/
/*         $("#btnSave").bind("click", function() {*/
/*             var values = [];*/
/*             $("input[name=DynamicTextBox]").each(function() {*/
/*                 values[i] = $(this).val();*/
/*                 i++;*/
/*             });*/
/*             var str_json = JSON.stringify(values);*/
/*             $.ajax({*/
/*                     url: "worker_template_action.php",*/
/*                     async: true,*/
/*                     type: "POST",*/
/*                     data: str_json,*/
/*                     success: function() {},*/
/*                     error: function() {}*/
/*                 })*/
/*                 //window.location.href ="worker_template_action.php?wValues="+str_json;*/
/* */
/*         });*/
/*         // $("body").on("click", ".remove", function() {*/
/*         //     $(this).closest("div").remove();*/
/*         // });*/
/*     });*/
/* */
/*     function GetDynamicTextBox(value) {*/
/*         return '<input name = "DynamicTextBox" type="text" value = "' + value + '" />&nbsp;' +*/
/*             '<input type="button" value="Remove" class="btn btn-danger btn-block btn-flat" onClick="removeElement(\'workerTemplateContainer\', \'element\');" />'*/
/*     }*/
/* */
/*    function removeElement(parentDiv, childDiv){*/
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
