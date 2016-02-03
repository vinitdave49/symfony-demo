<?php

/* cloudadmin/admin/createtaskqueue.html.twig */
class __TwigTemplate_1ae30c68fa7db8ca1fc4aea35322999d346bf3e7ffaa393ce28c1405f23f22cb extends Twig_Template
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
        $__internal_b641f6fa32924fa74e803e7927a04cf5720819a4b4502a54dd4496bd6774f3ad = $this->env->getExtension("native_profiler");
        $__internal_b641f6fa32924fa74e803e7927a04cf5720819a4b4502a54dd4496bd6774f3ad->enter($__internal_b641f6fa32924fa74e803e7927a04cf5720819a4b4502a54dd4496bd6774f3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/admin/createtaskqueue.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"box box-danger\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Create TaskQueue</h3>
            </div>
            <div class=\"box-body\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <form>
                            <div class=\"form-group\">
                                <label>Workflow Name</label>
                                <input type=\"text\" id=\"tqName\" name=\"tqName\" class=\"form-control\" placeholder=\"Friendly Task Queue Name\">
                            </div>
                            <div class=\"form-group\">
                                <label>Reservation Activity</label>
                                <select id=\"reservationActivity\" class=\"form-control\">
                                    <option value=\"WA81cd6c807dc20b2d1e829d226f2ac692\">Busy</option>
                                    <option value=\"WAb7f02f442ef2784e2644305b36c632e8\" selected=\"selected\">Reserved</option>
                                    <option value=\"WA7b56deb0d7cd97a69b663e4a62532ac7\">Offline</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label>Assignment Activity</label>
                                <select id=\"assignmentActivity\" class=\"form-control\">
                                    <option value=\"WA81cd6c807dc20b2d1e829d226f2ac692\" selected=\"selected\">Busy</option>
                                    <option value=\"WAb7f02f442ef2784e2644305b36c632e8\">Reserved</option>
                                    <option value=\"WA7b56deb0d7cd97a69b663e4a62532ac7\">Offline</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label>Max. Reserved Workers</label>
                                <input type=\"text\" id=\"maxreservWorkers\" name=\"maxreservWorkers\" class=\"form-control\" placeholder=\"Max. Reserved Workers\">
                            </div>
                            <div class=\"form-group\">
                                <label>Target Workers</label>
                                <input type=\"text\" id=\"targetWorkers\" name=\"targetWorkers\" class=\"form-control\" placeholder=\"languages HAS 'ru' AND name IN ['Jimmy', 'Bob', 'Alice']\">
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" name=\"btnSave\" class=\"btn btn-block btn-danger\">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <p><strong>Friendly Name</strong> is a descriptive name for the TaskQueue. Examples include \"USA Technical Support\" and \"Inside Sales\".</p>
                    <p><strong>Reservation Activity</strong> is the Activity that a Worker is transitioned to when they are reserved to perform a Task.</p>
                    <p><strong>Assignment Activity</strong> is the Activity that a Worker is transitioned to when they accept a reservation.</p>
                    <p><strong>Max Reserved Workers</strong> lets you specify the maximum number of workers to reserve for a task. The default is 1.</p>
                    <p>
                        <strong>Target Workers</strong> is an SQL-like expression that matches available Workers to this TaskQueue. Example:
                        <pre>languages HAS \"ru\" AND name IN [\"Jimmy\", \"Bob\", \"Alice\"]</pre>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>";
        
        $__internal_b641f6fa32924fa74e803e7927a04cf5720819a4b4502a54dd4496bd6774f3ad->leave($__internal_b641f6fa32924fa74e803e7927a04cf5720819a4b4502a54dd4496bd6774f3ad_prof);

    }

    public function getTemplateName()
    {
        return "cloudadmin/admin/createtaskqueue.html.twig";
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
/*                 <h3 class="box-title">Create TaskQueue</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 <div class="col-md-6">*/
/*                     <div class="form-group">*/
/*                         <form>*/
/*                             <div class="form-group">*/
/*                                 <label>Workflow Name</label>*/
/*                                 <input type="text" id="tqName" name="tqName" class="form-control" placeholder="Friendly Task Queue Name">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label>Reservation Activity</label>*/
/*                                 <select id="reservationActivity" class="form-control">*/
/*                                     <option value="WA81cd6c807dc20b2d1e829d226f2ac692">Busy</option>*/
/*                                     <option value="WAb7f02f442ef2784e2644305b36c632e8" selected="selected">Reserved</option>*/
/*                                     <option value="WA7b56deb0d7cd97a69b663e4a62532ac7">Offline</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label>Assignment Activity</label>*/
/*                                 <select id="assignmentActivity" class="form-control">*/
/*                                     <option value="WA81cd6c807dc20b2d1e829d226f2ac692" selected="selected">Busy</option>*/
/*                                     <option value="WAb7f02f442ef2784e2644305b36c632e8">Reserved</option>*/
/*                                     <option value="WA7b56deb0d7cd97a69b663e4a62532ac7">Offline</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label>Max. Reserved Workers</label>*/
/*                                 <input type="text" id="maxreservWorkers" name="maxreservWorkers" class="form-control" placeholder="Max. Reserved Workers">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label>Target Workers</label>*/
/*                                 <input type="text" id="targetWorkers" name="targetWorkers" class="form-control" placeholder="languages HAS 'ru' AND name IN ['Jimmy', 'Bob', 'Alice']">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <button type="button" name="btnSave" class="btn btn-block btn-danger">Save</button>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <p><strong>Friendly Name</strong> is a descriptive name for the TaskQueue. Examples include "USA Technical Support" and "Inside Sales".</p>*/
/*                     <p><strong>Reservation Activity</strong> is the Activity that a Worker is transitioned to when they are reserved to perform a Task.</p>*/
/*                     <p><strong>Assignment Activity</strong> is the Activity that a Worker is transitioned to when they accept a reservation.</p>*/
/*                     <p><strong>Max Reserved Workers</strong> lets you specify the maximum number of workers to reserve for a task. The default is 1.</p>*/
/*                     <p>*/
/*                         <strong>Target Workers</strong> is an SQL-like expression that matches available Workers to this TaskQueue. Example:*/
/*                         <pre>languages HAS "ru" AND name IN ["Jimmy", "Bob", "Alice"]</pre>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
