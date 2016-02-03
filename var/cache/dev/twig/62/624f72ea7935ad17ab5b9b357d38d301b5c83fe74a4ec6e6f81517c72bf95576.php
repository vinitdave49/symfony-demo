<?php

/* cloudadmin/admin/createactivity.html.twig */
class __TwigTemplate_2d4544447746490d86bc89aa503ba33ada598bcc9d75eb6c515415009291fd3e extends Twig_Template
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
        $__internal_d13df81427a394ca0c371e6e471a5e42f910ab7ec366366ccb2a5ebbb64c527a = $this->env->getExtension("native_profiler");
        $__internal_d13df81427a394ca0c371e6e471a5e42f910ab7ec366366ccb2a5ebbb64c527a->enter($__internal_d13df81427a394ca0c371e6e471a5e42f910ab7ec366366ccb2a5ebbb64c527a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/admin/createactivity.html.twig"));

        // line 1
        echo "<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box box-danger\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Create Activity</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <form>
                                <div class=\"form-group\">
                                    <label>Activity Name</label>
                                    <input type=\"text\" id=\"actName\" name=\"actName\" class=\"form-control\" placeholder=\"Friendly Activity Name\">
                                </div>
                                <div class=\"form-group\">
                                    <label>Availability</label>
                                    <div>
                                        <input type=\"radio\" name=\"availRadio\" id=\"availRadio\" value=\"Available\" checked=\"\">Available
                                    </div>
                                    <div>
                                        <input type=\"radio\" name=\"nonavailRadio\" id=\"nonavailRadio\" value=\"Not-Available\">Not Available
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"button\" name=\"btnSave\" class=\"btn btn-block btn-danger\">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <p><strong>Friendly Name</strong> is a descriptive name for the Activity. Examples include \"Offline\", \"Busy\" and \"Wrapping Up\".</p>
                        <p>An <strong>Availability</strong> type of 'available' means that Workers currently engaged in this Activity are eligible for Task assignment.</p>
                    </div>
                </div>
            </div>
            <div class=\"box box-danger\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Activity List</h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <div id=\"example1_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"example1_info\">
                                    <thead>
                                        <tr role=\"row\">
                                            <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Activity ID: activate to sort column descending\" style=\"width: 180px;\">Activity ID</th>
                                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Activity Name: activate to sort column ascending\" style=\"width: 223px;\">Activity Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        //Place your database query code here

                                        <tr>
                                            <td class=\"projectId\">

                                            </td>
                                            <td class=\"projectName\">

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-5\">
                                <!-- <div class=\"dataTables_info\" id=\"example1_info\" role=\"status\" aria-live=\"polite\">Showing 1 to 10 of 57 entries</div>
\t\t\t\t\t\t\t\t\t</div> -->
                                <div class=\"col-sm-7\">
                                    <div class=\"dataTables_paginate paging_simple_numbers\" id=\"example1_paginate\">
                                        <ul class=\"pagination\">
                                            <li class=\"paginate_button previous disabled\" id=\"example1_previous\">
                                                <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"0\" tabindex=\"0\">Previous</a>
                                            </li>
                                            <li class=\"paginate_button active\">
                                                <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"1\" tabindex=\"0\">1</a>
                                            </li>
                                            <li class=\"paginate_button \">
                                                <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"2\" tabindex=\"0\">2</a>
                                            </li>
                                            <li class=\"paginate_button next\" id=\"example1_next\">
                                                <a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"7\" tabindex=\"0\">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
</section>";
        
        $__internal_d13df81427a394ca0c371e6e471a5e42f910ab7ec366366ccb2a5ebbb64c527a->leave($__internal_d13df81427a394ca0c371e6e471a5e42f910ab7ec366366ccb2a5ebbb64c527a_prof);

    }

    public function getTemplateName()
    {
        return "cloudadmin/admin/createactivity.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <section class="content">*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <div class="box box-danger">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Create Activity</h3>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                     <div class="col-md-6">*/
/*                         <div class="form-group">*/
/*                             <form>*/
/*                                 <div class="form-group">*/
/*                                     <label>Activity Name</label>*/
/*                                     <input type="text" id="actName" name="actName" class="form-control" placeholder="Friendly Activity Name">*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label>Availability</label>*/
/*                                     <div>*/
/*                                         <input type="radio" name="availRadio" id="availRadio" value="Available" checked="">Available*/
/*                                     </div>*/
/*                                     <div>*/
/*                                         <input type="radio" name="nonavailRadio" id="nonavailRadio" value="Not-Available">Not Available*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <button type="button" name="btnSave" class="btn btn-block btn-danger">Save</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         <p><strong>Friendly Name</strong> is a descriptive name for the Activity. Examples include "Offline", "Busy" and "Wrapping Up".</p>*/
/*                         <p>An <strong>Availability</strong> type of 'available' means that Workers currently engaged in this Activity are eligible for Task assignment.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="box box-danger">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">Activity List</h3>*/
/*                 </div>*/
/*                 <!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">*/
/*                         <div class="row">*/
/*                             <div class="col-sm-12">*/
/*                                 <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">*/
/*                                     <thead>*/
/*                                         <tr role="row">*/
/*                                             <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Activity ID: activate to sort column descending" style="width: 180px;">Activity ID</th>*/
/*                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Activity Name: activate to sort column ascending" style="width: 223px;">Activity Name</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                         //Place your database query code here*/
/* */
/*                                         <tr>*/
/*                                             <td class="projectId">*/
/* */
/*                                             </td>*/
/*                                             <td class="projectName">*/
/* */
/*                                             </td>*/
/*                                         </tr>*/
/* */
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-5">*/
/*                                 <!-- <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>*/
/* 									</div> -->*/
/*                                 <div class="col-sm-7">*/
/*                                     <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">*/
/*                                         <ul class="pagination">*/
/*                                             <li class="paginate_button previous disabled" id="example1_previous">*/
/*                                                 <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>*/
/*                                             </li>*/
/*                                             <li class="paginate_button active">*/
/*                                                 <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>*/
/*                                             </li>*/
/*                                             <li class="paginate_button ">*/
/*                                                 <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>*/
/*                                             </li>*/
/*                                             <li class="paginate_button next" id="example1_next">*/
/*                                                 <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /.box-body -->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* </section>*/
