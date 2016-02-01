<?php

/* cloudadmin/admin/createproject.html.twig */
class __TwigTemplate_2ddf64ccdaca4616395e340fba854d77a7dd1dae0772b334e2472e7e2b43ee03 extends Twig_Template
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
        $__internal_a219bc61917af8c4c22c290493f5baf8f2124a0591147fd99a7632a4f8a18296 = $this->env->getExtension("native_profiler");
        $__internal_a219bc61917af8c4c22c290493f5baf8f2124a0591147fd99a7632a4f8a18296->enter($__internal_a219bc61917af8c4c22c290493f5baf8f2124a0591147fd99a7632a4f8a18296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cloudadmin/admin/createproject.html.twig"));

        // line 1
        echo "<section class=\"content\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t<div class=\"box box-danger\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h3 class=\"box-title\">Create Project</h3>
\t\t\t\t\t<div class=\"box-tools pull-right\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"projectName\" name=\"projectName\">
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t  <button type=\"button\" id=\"btnsubmit\" class=\"btn btn-block btn-danger\">Create Project</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t  </div>
\t\t\t\t\t  <!-- /input-group -->
\t\t\t\t\t </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"box box-danger\">
\t\t\t\t<div class=\"box-header\">
\t\t\t\t\t<h3 class=\"box-title\">Project List</h3>
\t\t\t\t</div>
\t\t\t\t<!-- /.box-header -->
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<div id=\"example1_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
\t\t\t\t\t\t<div class=\"row\">
 \t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<table id=\"example1\" class=\"table table-bordered table-striped dataTable\" role=\"grid\" aria-describedby=\"example1_info\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr role=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Project ID: activate to sort column descending\" style=\"width: 180px;\">Project ID</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Project Name: activate to sort column ascending\" style=\"width: 223px;\">Project Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"sorting\" tabindex=\"0\" aria-controls=\"example1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Project Workspace: activate to sort column ascending\" style=\"width: 223px;\">Project Workspace</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<!-- Enter the code to display the prject table details -->
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t\t<!-- <div class=\"dataTables_info\" id=\"example1_info\" role=\"status\" aria-live=\"polite\">Showing 1 to 10 of 57 entries</div>
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<div class=\"dataTables_paginate paging_simple_numbers\" id=\"example1_paginate\">
\t\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t<li class=\"paginate_button previous disabled\" id=\"example1_previous\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"0\" tabindex=\"0\">Previous</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"paginate_button active\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"1\" tabindex=\"0\">1</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"paginate_button \">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"2\" tabindex=\"0\">2</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"paginate_button next\" id=\"example1_next\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" aria-controls=\"example1\" data-dt-idx=\"7\" tabindex=\"0\">Next</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- /.box-body -->
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<script>
    \$(function() {
        var i = 0;
        \$(\"#btnsubmit\").bind(\"click\", function() {
            var data = \$(\"#projectName\").val();
            var str_json = JSON.stringify(data);
            \$.ajax({
                url: \"createprojectaction\",
                async: true,
                type: \"POST\",
                data: str_json,
                dataType: \"text\",
                success: function(resultData) {
                    \$(\"#alert\").addClass(\"in alert-success\");
                    alert(resultData);
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
    \$(document).ready(function() {
        //var table = \$(\"#example1\").DataTable();
        \$(\"#example1 tbody\").on('click', 'tr', function() {
            //var data = table.row(this).data();
            var data = \$(this).find('td.projectSpace').html();
            alert(\"You clicked on row: Project ID: \" + data);
            //window.open(\"configureProject.php\", \"PopupWindow\", \"width=600,height=600,scrollbars=yes,resizable=no\");

            var form = document.createElement(\"form\");
            form.setAttribute(\"method\", \"post\");
            form.setAttribute(\"action\", \"configureProject.php\");
            form.setAttribute(\"target\", \"Configure Project\");
            var param = {
                'workspaceid': data
            };
            for (var i in param) {
                if (param.hasOwnProperty(i)) {
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = i;
                    input.value = param[i];
                    form.appendChild(input);
                }
            }
            document.body.appendChild(form);
            //note I am using a post.htm page since I did not want to make double request to the page
            //it might have some Page_Load call which might screw things up.
            window.open(\"post.htm\", \"Configure Project\", \"width=730,height=345,left=600,top=600,resizable=yes,scrollbars=yes\");
            form.submit();
            document.body.removeChild(form);
        });
    });
</script>";
        
        $__internal_a219bc61917af8c4c22c290493f5baf8f2124a0591147fd99a7632a4f8a18296->leave($__internal_a219bc61917af8c4c22c290493f5baf8f2124a0591147fd99a7632a4f8a18296_prof);

    }

    public function getTemplateName()
    {
        return "cloudadmin/admin/createproject.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <section class="content">*/
/* 	<div class="row">*/
/* 		<div class="col-xs-12">*/
/* 			<div class="box box-danger">*/
/* 				<div class="box-header">*/
/* 					<h3 class="box-title">Create Project</h3>*/
/* 					<div class="box-tools pull-right">*/
/* 						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="box-body">*/
/* 					<div class="col-md-6">*/
/* 						<div class="input-group input-group-sm">*/
/* 						<input type="text" class="form-control" id="projectName" name="projectName">*/
/* 							<span class="input-group-btn">*/
/* 							  <button type="button" id="btnsubmit" class="btn btn-block btn-danger">Create Project</button>*/
/* 							</span>*/
/* 					  </div>*/
/* 					  <!-- /input-group -->*/
/* 					 </div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="box box-danger">*/
/* 				<div class="box-header">*/
/* 					<h3 class="box-title">Project List</h3>*/
/* 				</div>*/
/* 				<!-- /.box-header -->*/
/* 				<div class="box-body">*/
/* 					<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">*/
/* 						<div class="row">*/
/*  						</div>*/
/* 						<div class="row">*/
/* 							<div class="col-sm-12">*/
/* 								<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">*/
/* 									<thead>*/
/* 										<tr role="row">*/
/* 											<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Project ID: activate to sort column descending" style="width: 180px;">Project ID</th>*/
/* 											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Project Name: activate to sort column ascending" style="width: 223px;">Project Name</th>*/
/* 											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Project Workspace: activate to sort column ascending" style="width: 223px;">Project Workspace</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody>*/
/* 										<!-- Enter the code to display the prject table details -->*/
/* 									</tbody>*/
/* 								</table>*/
/* 							</div>*/
/* 						</div>*/
/* 					<div class="row">*/
/* 						<div class="col-sm-5">*/
/* 							<!-- <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>*/
/* 							</div> -->*/
/* 							<div class="col-sm-7">*/
/* 								<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">*/
/* 									<ul class="pagination">*/
/* 										<li class="paginate_button previous disabled" id="example1_previous">*/
/* 											<a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>*/
/* 										</li>*/
/* 										<li class="paginate_button active">*/
/* 											<a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>*/
/* 										</li>*/
/* 										<li class="paginate_button ">*/
/* 											<a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>*/
/* 										</li>*/
/* 										<li class="paginate_button next" id="example1_next">*/
/* 											<a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			<!-- /.box-body -->*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <script>*/
/*     $(function() {*/
/*         var i = 0;*/
/*         $("#btnsubmit").bind("click", function() {*/
/*             var data = $("#projectName").val();*/
/*             var str_json = JSON.stringify(data);*/
/*             $.ajax({*/
/*                 url: "createprojectaction",*/
/*                 async: true,*/
/*                 type: "POST",*/
/*                 data: str_json,*/
/*                 dataType: "text",*/
/*                 success: function(resultData) {*/
/*                     $("#alert").addClass("in alert-success");*/
/*                     alert(resultData);*/
/*                 },*/
/*                 error: function() {*/
/* */
/*                 }*/
/*             })*/
/*         });*/
/*         $("body").on("click", ".remove", function() {*/
/*             $(this).closest("div").remove();*/
/*         });*/
/*         $("#alertClose").click(function() {*/
/*             $(this).parent().removeClass('in');*/
/*         });*/
/*     });*/
/*     $(document).ready(function() {*/
/*         //var table = $("#example1").DataTable();*/
/*         $("#example1 tbody").on('click', 'tr', function() {*/
/*             //var data = table.row(this).data();*/
/*             var data = $(this).find('td.projectSpace').html();*/
/*             alert("You clicked on row: Project ID: " + data);*/
/*             //window.open("configureProject.php", "PopupWindow", "width=600,height=600,scrollbars=yes,resizable=no");*/
/* */
/*             var form = document.createElement("form");*/
/*             form.setAttribute("method", "post");*/
/*             form.setAttribute("action", "configureProject.php");*/
/*             form.setAttribute("target", "Configure Project");*/
/*             var param = {*/
/*                 'workspaceid': data*/
/*             };*/
/*             for (var i in param) {*/
/*                 if (param.hasOwnProperty(i)) {*/
/*                     var input = document.createElement('input');*/
/*                     input.type = 'hidden';*/
/*                     input.name = i;*/
/*                     input.value = param[i];*/
/*                     form.appendChild(input);*/
/*                 }*/
/*             }*/
/*             document.body.appendChild(form);*/
/*             //note I am using a post.htm page since I did not want to make double request to the page*/
/*             //it might have some Page_Load call which might screw things up.*/
/*             window.open("post.htm", "Configure Project", "width=730,height=345,left=600,top=600,resizable=yes,scrollbars=yes");*/
/*             form.submit();*/
/*             document.body.removeChild(form);*/
/*         });*/
/*     });*/
/* </script>*/
