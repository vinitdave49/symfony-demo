<?php

/* cloudadmin/admin/createworkflow.html.twig */
class __TwigTemplate_f79f98333a8d88951d240e9801e30534e5a6512640a8e550b861c1f4bc2874fd extends Twig_Template
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
        $__internal_e0406d3b1f0c6780f160f07736eefbb96fce6e8533e620666bc80548ab1a5430 = $this->env->getExtension("native_profiler");
        $__internal_e0406d3b1f0c6780f160f07736eefbb96fce6e8533e620666bc80548ab1a5430->enter($__internal_e0406d3b1f0c6780f160f07736eefbb96fce6e8533e620666bc80548ab1a5430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/admin/createworkflow.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"box box-danger\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Create Workflow</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <form>
                            <div class=\"form-group\">
                                <label>Workflow Name</label>
                                <input type=\"text\" id=\"wfName\" name=\"wfName\" class=\"form-control\" placeholder=\"Friendly Workflow Name\">
                            </div>
                            <div class=\"form-group\">
                                <label>Assignment Callback URL</label>
                                <input type=\"text\" id=\"asgncbURL\" name=\"asgncbURL\" class=\"form-control\" placeholder=\"http://example.com/assignment.php\">
                            </div>
                            <div class=\"form-group\">
                                <label>Fallback Assignment Callback URL</label>
                                <input type=\"text\" id=\"fbasgncbURL\" name=\"fbasgncbURL\" class=\"form-control\" placeholder=\"http://example.com/assignment.php\">
                            </div>
                            <div class=\"form-group\">
                                <label>Task Reservation Timeout</label>
                                <input type=\"text\" id=\"trTimeout\" name=\"trTimeout\" class=\"form-control\" placeholder=\"10\">
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <p><strong>Friendly Name</strong> is a descriptive name for the Workflow. Examples include \"Incoming Phone Calls\" and \"Web-to-Lead Submissions\".</p>
                    <p><strong>Assignment Callback URL</strong> is the HTTP endpoint that TaskRouter uses to notify your application of a reservation. See the assignment instructions documentation for more information.</p>
                    <p><strong>Task Reservation Timeout</strong> specifies how long TaskRouter will wait for a Worker in seconds to accept a reservation before assigning the Task to the next eligible Worker.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Routing Configuration</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"col-md-6\" id=\"parentRoutingConfig\">
                    <div class=\"row\" id=\"childRoutingConfig1\">
                        <div class=\"form-group\">
                            <label>Filter Name</label>
                            <input type=\"text\" id=\"filterName1\" name=\"filterName\" class=\"form-control\" placeholder=\"Friendly Name of the routing strategy\">
                        </div>
                        <div class=\"form-group\">
                            <label>Expression</label>
                            <input type=\"textarea\" id=\"filterExp1\" name=\"filterExp\" class=\"form-control\" placeholder=\"required_language = 'ru'\">
                        </div>
                        <div class=\"form-group\">
                            <label>Target Task Queue</label>
                            <select id=\"targetTQ1\" class=\"form-control\">
                                <option value=\"1\" selected=\"selected\">TaskQueue1</option>
                                <option value=\"2\">TaskQueue2</option>
                                <option value=\"3\">TaskQueue3</option>
                            </select>
                        </div>
                        <div class=\"row\">
                            <div style=\"margin-left:90px\">
                                <div class=\"form-group\">
                                    <label>Target Worker Expression</label>
                                    <input type=\"textarea\" id=\"targetWorkerExp1\" name=\"targetWorkerExp\" class=\"form-control\" placeholder=\"task.language IN worker.languages\">
                                </div>
                                <div class=\"form-group\">
                                    <label>Priority</label>
                                    <input type=\"text\" id=\"tqPriority1\" name=\"tqPriority\" class=\"form-control\" placeholder=\"10\">
                                </div>
                                <div class=\"form-group\">
                                    <label>Timeout</label>
                                    <input type=\"text\" id=\"tqTimeout1\" name=\"tqTimeout\" class=\"form-control\" placeholder=\"100\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <p><strong>Routing Configuration</strong> specifies how Tasks added to this Workflow should be routed into TaskQueues.</p>
                    <p><strong>Expression</strong> is an SQL-like expression that matches Tasks and directs them to the most appropriate TaskQueue. Tasks are routed according to the first rule that matches. Example:<code>required_language = \"ru\"</code></p>
                    <p><strong>Target Workers Expression</strong> is an SQL-like expression that specifies the subset of Workers in the Target TaskQueue that are allowed to take a given task. Example:<code>task.language IN worker.languages</code></p>
                    <p><strong>Priority</strong> defines the relative priority level that a Task will be given within the target TaskQueue.</p>
                    <p><strong>Timeout</strong> specifies the duration (in seconds) that the Task can wait in the target TaskQueue before moving into the next target TaskQueue.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <a href=\"#\" id=\"addRoutConfig\"><i class=\"fa fa-plus\"></i> Add Filter</a>
            <div class=\"form-group\">
                <label>Default Task Queue</label>
                <select id=\"deftaskQueue\" class=\"form-control\">
                    <option value=\"1\" selected=\"selected\">TaskQueue1</option>
                    <option value=\"2\">TaskQueue2</option>
                    <option value=\"3\">TaskQueue3</option>
                </select>
            </div>
            <div class=\"form-group\">
                <button type=\"button\" name=\"btnSave\" class=\"btn btn-block btn-danger\">Save</button>
            </div>
        </div>
    </div>
</section>
<script>
    \$(document).ready(function() {
        \$(\"#addRoutConfig\").click(function() {
            // The below works, please do not delete in any circumstance.
            //\$(\"#childRoutingConfig\").clone().appendTo(\"#parentRoutingConfig\");
            var regex = /^(.*)(\\d)+\$/i;
            var cloneIndex = \$(\"#childRoutingConfig1\").length + 1;
            var newDivRow = \$(\"#childRoutingConfig1\").clone();
            newDivRow.appendTo(\"#parentRoutingConfig\").attr(\"id\", \"childRoutingConfig\" + cloneIndex).find(\"*\").each(function() {
                var id = this.id || \"\";
                if (id != \"\") {
                    //alert(\"Element ID: \"+id+\" cloneIndex: \"+cloneIndex);
                    var match = id.match(regex) || [];
                    this.id = match[1] + (cloneIndex);
                }
            })
            cloneIndex++;
        });
    });
</script>
";
        
        $__internal_e0406d3b1f0c6780f160f07736eefbb96fce6e8533e620666bc80548ab1a5430->leave($__internal_e0406d3b1f0c6780f160f07736eefbb96fce6e8533e620666bc80548ab1a5430_prof);

    }

    public function getTemplateName()
    {
        return "cloudadmin/admin/createworkflow.html.twig";
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
/*                 <h3 class="box-title">Create Workflow</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <div class="col-md-6">*/
/*                     <div class="form-group">*/
/*                         <form>*/
/*                             <div class="form-group">*/
/*                                 <label>Workflow Name</label>*/
/*                                 <input type="text" id="wfName" name="wfName" class="form-control" placeholder="Friendly Workflow Name">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label>Assignment Callback URL</label>*/
/*                                 <input type="text" id="asgncbURL" name="asgncbURL" class="form-control" placeholder="http://example.com/assignment.php">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label>Fallback Assignment Callback URL</label>*/
/*                                 <input type="text" id="fbasgncbURL" name="fbasgncbURL" class="form-control" placeholder="http://example.com/assignment.php">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label>Task Reservation Timeout</label>*/
/*                                 <input type="text" id="trTimeout" name="trTimeout" class="form-control" placeholder="10">*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <p><strong>Friendly Name</strong> is a descriptive name for the Workflow. Examples include "Incoming Phone Calls" and "Web-to-Lead Submissions".</p>*/
/*                     <p><strong>Assignment Callback URL</strong> is the HTTP endpoint that TaskRouter uses to notify your application of a reservation. See the assignment instructions documentation for more information.</p>*/
/*                     <p><strong>Task Reservation Timeout</strong> specifies how long TaskRouter will wait for a Worker in seconds to accept a reservation before assigning the Task to the next eligible Worker.</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="box">*/
/*             <div class="box-header with-border">*/
/*                 <h3 class="box-title">Routing Configuration</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <div class="col-md-6" id="parentRoutingConfig">*/
/*                     <div class="row" id="childRoutingConfig1">*/
/*                         <div class="form-group">*/
/*                             <label>Filter Name</label>*/
/*                             <input type="text" id="filterName1" name="filterName" class="form-control" placeholder="Friendly Name of the routing strategy">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Expression</label>*/
/*                             <input type="textarea" id="filterExp1" name="filterExp" class="form-control" placeholder="required_language = 'ru'">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Target Task Queue</label>*/
/*                             <select id="targetTQ1" class="form-control">*/
/*                                 <option value="1" selected="selected">TaskQueue1</option>*/
/*                                 <option value="2">TaskQueue2</option>*/
/*                                 <option value="3">TaskQueue3</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div style="margin-left:90px">*/
/*                                 <div class="form-group">*/
/*                                     <label>Target Worker Expression</label>*/
/*                                     <input type="textarea" id="targetWorkerExp1" name="targetWorkerExp" class="form-control" placeholder="task.language IN worker.languages">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label>Priority</label>*/
/*                                     <input type="text" id="tqPriority1" name="tqPriority" class="form-control" placeholder="10">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label>Timeout</label>*/
/*                                     <input type="text" id="tqTimeout1" name="tqTimeout" class="form-control" placeholder="100">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <p><strong>Routing Configuration</strong> specifies how Tasks added to this Workflow should be routed into TaskQueues.</p>*/
/*                     <p><strong>Expression</strong> is an SQL-like expression that matches Tasks and directs them to the most appropriate TaskQueue. Tasks are routed according to the first rule that matches. Example:<code>required_language = "ru"</code></p>*/
/*                     <p><strong>Target Workers Expression</strong> is an SQL-like expression that specifies the subset of Workers in the Target TaskQueue that are allowed to take a given task. Example:<code>task.language IN worker.languages</code></p>*/
/*                     <p><strong>Priority</strong> defines the relative priority level that a Task will be given within the target TaskQueue.</p>*/
/*                     <p><strong>Timeout</strong> specifies the duration (in seconds) that the Task can wait in the target TaskQueue before moving into the next target TaskQueue.</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <a href="#" id="addRoutConfig"><i class="fa fa-plus"></i> Add Filter</a>*/
/*             <div class="form-group">*/
/*                 <label>Default Task Queue</label>*/
/*                 <select id="deftaskQueue" class="form-control">*/
/*                     <option value="1" selected="selected">TaskQueue1</option>*/
/*                     <option value="2">TaskQueue2</option>*/
/*                     <option value="3">TaskQueue3</option>*/
/*                 </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <button type="button" name="btnSave" class="btn btn-block btn-danger">Save</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <script>*/
/*     $(document).ready(function() {*/
/*         $("#addRoutConfig").click(function() {*/
/*             // The below works, please do not delete in any circumstance.*/
/*             //$("#childRoutingConfig").clone().appendTo("#parentRoutingConfig");*/
/*             var regex = /^(.*)(\d)+$/i;*/
/*             var cloneIndex = $("#childRoutingConfig1").length + 1;*/
/*             var newDivRow = $("#childRoutingConfig1").clone();*/
/*             newDivRow.appendTo("#parentRoutingConfig").attr("id", "childRoutingConfig" + cloneIndex).find("*").each(function() {*/
/*                 var id = this.id || "";*/
/*                 if (id != "") {*/
/*                     //alert("Element ID: "+id+" cloneIndex: "+cloneIndex);*/
/*                     var match = id.match(regex) || [];*/
/*                     this.id = match[1] + (cloneIndex);*/
/*                 }*/
/*             })*/
/*             cloneIndex++;*/
/*         });*/
/*     });*/
/* </script>*/
/* */
