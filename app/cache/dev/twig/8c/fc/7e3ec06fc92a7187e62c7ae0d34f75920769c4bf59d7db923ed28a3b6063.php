<?php

/* myPocketBundle:public:statistiquerevenu.html.twig */
class __TwigTemplate_8cfc7e3ec06fc92a7187e62c7ae0d34f75920769c4bf59d7db923ed28a3b6063 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\"/>
        <title>My Pocket | Statistique Revenu</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
        <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\">
        <meta content=\"\" name=\"description\"/>
        <meta content=\"\" name=\"author\"/>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/pages/css/css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/css/components-md.css"), "html", null, true);
        echo "\" id=\"style_components\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/css/plugins-md.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link id=\"style_color\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/css/themes/grey.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
    </head>
    <body class=\"page-md page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo page-header-fixed page-sidebar-fixed\">
        ";
        // line 25
        $this->env->loadTemplate("myPocketBundle:public:header.html.twig")->display($context);
        // line 26
        echo "        <div class=\"page-container\">
            ";
        // line 27
        $this->env->loadTemplate("myPocketBundle:public:menu.html.twig")->display($context);
        // line 28
        echo "            <div class=\"page-content-wrapper\">
                <div class=\"page-content\">
                    <h3 class=\"page-title\">
                        Statistique Revenu
                    </h3>
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <i class=\"fa fa-home\"></i>
                                <a>Statistique</a>
                                <i class=\"fa fa-angle-right\"></i>
                            </li>
                             <li>
                                <a>Revenu</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"portlet box blue-madison\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-calendar\"></i>Date
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <div class=\"clearfix\">
                                    <form method=\"post\" action=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("my_pocket_chartrevenupage");
        echo "\">
                                        <div class=\"col-md-1\"><input type=\"submit\" class=\"btn btn-info\" style=\"margin-top: 9px;width: 32px;background-image: url('/app/symfony/web/assets/admin/layout2/img/left.png')!important;background-repeat: no-repeat;background-position: center;\" value=\" \" name=\"pred\" ></div>
                                        <div class=\"col-md-4\">
                                            <input type=\"hidden\" name=\"annee\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
        echo "\"/>
                                            <input type=\"hidden\" name=\"mois\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
        echo "\"/>
                                        </div>  
                                        <div class=\"col-md-1\" style=\"text-align:center;height:50px;background-image: url('";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/img/calendar.png"), "html", null, true);
        echo "');background-repeat: no-repeat;\"><span>";
        echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
        echo "</span><br/><span style=\"color:#578ebe\">";
        echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-md-5\"></div>
                                    <div class=\"col-md-1\"><input type=\"submit\" class=\"btn btn-info\" style=\"margin-top: 9px;width: 32px;background-image: url('/app/symfony/web/assets/admin/layout2/img/right.png')!important;background-repeat: no-repeat;background-position: center;\" value=\" \" name=\"suiv\"></div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-light green-meadow\" href=\"javascript:;\">
                                    <div class=\"visual\">
                                        <i class=\"icon-wallet\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\">
                                            ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["rv"]) ? $context["rv"] : $this->getContext($context, "rv")), "html", null, true);
        echo "
                                        </div>
                                        <div class=\"desc\">
                                            Revenu
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-light blue-soft\" href=\"javascript:;\">
                                    <div class=\"visual\">
                                        <i class=\"fa fa-money\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\">
                                            ";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["s"]) ? $context["s"] : $this->getContext($context, "s")), "html", null, true);
        echo "
                                        </div>
                                        <div class=\"desc\">
                                            Solde
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"portlet light\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-bar-chart font-red-haze\"></i>
                                        <span class=\"caption-subject bold uppercase font-red-haze\"> Statistique Revenu : Catégorie</span>
                                    </div>
                                    <div class=\"tools\">
                                        <a href=\"javascript:;\" class=\"collapse\">
                                        </a>
                                        <a href=\"javascript:;\" class=\"fullscreen\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <div id=\"pie_chart_3\" class=\"chart\" style=\"height: 600px;\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"portlet light\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-bar-chart font-red-haze\"></i>
                                        <span class=\"caption-subject bold uppercase font-red-haze\"> Statistique Revenu de l'année : ";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"tools\">
                                        <a href=\"javascript:;\" class=\"collapse\">
                                        </a>
                                        <a href=\"javascript:;\" class=\"fullscreen\">
                                        </a>
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    <div class=\"row\">
                                        <div id=\"chart_5\" class=\"chart\" style=\"height: 600px;\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.stack.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.crosshair.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/typeahead/handlebars.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/radar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/light.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/patterns.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/chalk.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/ammap/ammap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/ammap/maps/js/worldLow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amstockcharts/amstock.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            jQuery(document).ready(function () {
                Metronic.init();
                Layout.init();
                Demo.init();
                initChartSample5();
                ChartsFlotcharts.init();
                ChartsFlotcharts.initPieCharts();
            });
            var initChartSample5 = function() {
\t\t        var chart = AmCharts.makeChart(\"chart_5\", {
\t\t            \"theme\": \"light\",
\t\t            \"type\": \"serial\",
\t\t            \"startDuration\": 2,

\t\t            \"fontFamily\": 'Open Sans',
\t\t            
\t\t            \"color\":    '#888',
                            ";
        // line 201
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 0, array(), "array"), 1, array(), "array") == null)) {
            $context["j"] = 0;
        }
        // line 202
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 0, array(), "array"), 1, array(), "array") == null)) {
            $context["j"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 0, array(), "array"), 1, array(), "array");
        }
        // line 203
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 1, array(), "array"), 1, array(), "array") == null)) {
            $context["f"] = 0;
        }
        // line 204
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 1, array(), "array"), 1, array(), "array") == null)) {
            $context["f"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 1, array(), "array"), 1, array(), "array");
        }
        // line 205
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 2, array(), "array"), 1, array(), "array") == null)) {
            $context["m"] = 0;
        }
        // line 206
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 2, array(), "array"), 1, array(), "array") == null)) {
            $context["m"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 2, array(), "array"), 1, array(), "array");
        }
        // line 207
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 3, array(), "array"), 1, array(), "array") == null)) {
            $context["a"] = 0;
        }
        // line 208
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 3, array(), "array"), 1, array(), "array") == null)) {
            $context["a"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 3, array(), "array"), 1, array(), "array");
        }
        // line 209
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 4, array(), "array"), 1, array(), "array") == null)) {
            $context["ma"] = 0;
        }
        // line 210
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 4, array(), "array"), 1, array(), "array") == null)) {
            $context["ma"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 4, array(), "array"), 1, array(), "array");
        }
        // line 211
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 5, array(), "array"), 1, array(), "array") == null)) {
            $context["ju"] = 0;
        }
        // line 212
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 5, array(), "array"), 1, array(), "array") == null)) {
            $context["ju"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 5, array(), "array"), 1, array(), "array");
        }
        // line 213
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 6, array(), "array"), 1, array(), "array") == null)) {
            $context["ji"] = 0;
        }
        // line 214
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 6, array(), "array"), 1, array(), "array") == null)) {
            $context["ji"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 6, array(), "array"), 1, array(), "array");
        }
        // line 215
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 7, array(), "array"), 1, array(), "array") == null)) {
            $context["ao"] = 0;
        }
        // line 216
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 7, array(), "array"), 1, array(), "array") == null)) {
            $context["ao"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 7, array(), "array"), 1, array(), "array");
        }
        // line 217
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 8, array(), "array"), 1, array(), "array") == null)) {
            $context["sp"] = 0;
        }
        // line 218
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 8, array(), "array"), 1, array(), "array") == null)) {
            $context["sp"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 8, array(), "array"), 1, array(), "array");
        }
        // line 219
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 9, array(), "array"), 1, array(), "array") == null)) {
            $context["o"] = 0;
        }
        // line 220
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 9, array(), "array"), 1, array(), "array") == null)) {
            $context["o"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 9, array(), "array"), 1, array(), "array");
        }
        // line 221
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 10, array(), "array"), 1, array(), "array") == null)) {
            $context["n"] = 0;
        }
        // line 222
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 10, array(), "array"), 1, array(), "array") == null)) {
            $context["n"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 10, array(), "array"), 1, array(), "array");
        }
        // line 223
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 11, array(), "array"), 1, array(), "array") == null)) {
            $context["d"] = 0;
        }
        // line 224
        echo "                            ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 11, array(), "array"), 1, array(), "array") == null)) {
            $context["d"] = $this->getAttribute($this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 11, array(), "array"), 1, array(), "array");
        }
        // line 225
        echo "\t\t            \"dataProvider\": [
                                {
\t\t                \"Mois\": \"Janvier\",
\t\t                \"Montant\":";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["j"]) ? $context["j"] : $this->getContext($context, "j")), "html", null, true);
        echo ",
\t\t                \"color\": \"#FF0F00\"
\t\t            }, {
\t\t                \"Mois\": \"Février\",
\t\t                \"Montant\": ";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "html", null, true);
        echo ",
\t\t                \"color\": \"#FF6600\"
\t\t            },{
\t\t                \"Mois\": \"Mars\",
\t\t                \"Montant\": ";
        // line 236
        echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
        echo ",
\t\t                \"color\": \"#F8FF01\"
\t\t            }, {
\t\t                \"Mois\": \"Avril\",
\t\t                \"Montant\": ";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
        echo ",
\t\t                \"color\": \"#04D215\"
\t\t            }, {
\t\t                \"Mois\": \"Mai\",
\t\t                \"Montant\": ";
        // line 244
        echo twig_escape_filter($this->env, (isset($context["ma"]) ? $context["ma"] : $this->getContext($context, "ma")), "html", null, true);
        echo ",
\t\t                \"color\": \"#0D8ECF\"
\t\t            }, {
\t\t                \"Mois\": \"Juin\",
\t\t                \"Montant\": ";
        // line 248
        echo twig_escape_filter($this->env, (isset($context["ju"]) ? $context["ju"] : $this->getContext($context, "ju")), "html", null, true);
        echo ",
\t\t                \"color\": \"#0D52D1\"
\t\t            }, {
\t\t                \"Mois\": \"Juillet\",
\t\t                \"Montant\": ";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["ji"]) ? $context["ji"] : $this->getContext($context, "ji")), "html", null, true);
        echo ",
\t\t                \"color\": \"#2A0CD0\"
\t\t            }, {
\t\t                \"Mois\": \"Aout\",
\t\t                \"Montant\": ";
        // line 256
        echo twig_escape_filter($this->env, (isset($context["ao"]) ? $context["ao"] : $this->getContext($context, "ao")), "html", null, true);
        echo ",
\t\t                \"color\": \"#8A0CCF\"
\t\t            },
\t\t             {
\t\t                \"Mois\": \"Septembre\",
\t\t                \"Montant\": ";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["sp"]) ? $context["sp"] : $this->getContext($context, "sp")), "html", null, true);
        echo ",
\t\t                \"color\": \"#DDDDDD\"
\t\t            }, {
\t\t                \"Mois\": \"Octobre\",
\t\t                \"Montant\": ";
        // line 265
        echo twig_escape_filter($this->env, (isset($context["o"]) ? $context["o"] : $this->getContext($context, "o")), "html", null, true);
        echo ",
\t\t                \"color\": \"#999999\"
\t\t            }, {
\t\t                \"Mois\": \"Novembre\",
\t\t                \"Montant\": ";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "html", null, true);
        echo ",
\t\t                \"color\": \"#333333\"
\t\t            }, {
\t\t                \"Mois\": \"Décembre\",
\t\t                \"Montant\": ";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "html", null, true);
        echo ",
\t\t                \"color\": \"#000000\"
\t\t            }
\t\t            
\t\t            ],
\t\t            \"valueAxes\": [{
\t\t                \"position\": \"left\",
\t\t                \"axisAlpha\": 0,
\t\t                \"gridAlpha\": 0
\t\t            }],
\t\t            \"graphs\": [{
\t\t                \"balloonText\": \"[[category]]: <b>[[value]]</b>\",
\t\t                \"colorField\": \"color\",
\t\t                \"fillAlphas\": 0.85,
\t\t                \"lineAlpha\": 0.1,
\t\t                \"type\": \"column\",
\t\t                \"topRadius\": 1,
\t\t                \"valueField\": \"Montant\"
\t\t            }],
\t\t            \"depth3D\": 40,
\t\t            \"angle\": 30,
\t\t            \"chartCursor\": {
\t\t                \"categoryBalloonEnabled\": false,
\t\t                \"cursorAlpha\": 0,
\t\t                \"zoomable\": false
\t\t            },
\t\t            \"categoryField\": \"Mois\",
\t\t            \"categoryAxis\": {
\t\t                \"gridPosition\": \"start\",
\t\t                \"axisAlpha\": 0,
\t\t                \"gridAlpha\": 0

\t\t            },
\t\t            \"exportConfig\": {
\t\t                \"menuTop\": \"20px\",
\t\t                \"menuRight\": \"20px\",
\t\t                \"menuItems\": [{
\t\t                    \"icon\": '/lib/3/images/export.png',
\t\t                    \"format\": 'png'
\t\t                }]
\t\t            }
\t\t        }, 0);

\t\t        \$('#chart_5').closest('.portlet').find('.fullscreen').click(function() {
\t\t            chart.invalidateSize();
\t\t        });
\t\t    }
                    
            var ChartsFlotcharts = function() {
                    return {
                    //main function to initiate the module

                    init: function() {

                    Metronic.addResizeHandler(function() {
                        Charts.initPieCharts();
                        });
                    },
                    initPieCharts: function() {

                            var data = [];
                                    var series = 19;
                                    series = series < 19 ? 19 : series;
                                    data[0] = {
                            label: \"Maison\",
                                    data: ";
        // line 338
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 0, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#2d2d2d\"
                            };
                                    data[1] = {
                            label: \"Eléctricité\",
                                    data: ";
        // line 343
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 1, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#fbe700\"
                            };
                            data[2] = {
                            label: \"Eau\",
                                    data: ";
        // line 348
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 2, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#0090ff\"
                            };
                                    data[3] = {
                            label: \"Santé\",
                                    data: ";
        // line 353
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 3, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#bd0707\"
                            };
                            data[4] = {
                            label: \"Café\",
                                    data: ";
        // line 358
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 4, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#4b2f00\"
                            };
                                    data[5] = {
                            label: \"Nourriture\",
                                    data: ";
        // line 363
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 5, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#808080\"
                            };
                            data[6] = {
                            label: \"Shopping\",
                                    data: ";
        // line 368
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 6, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#5900fb\"
                            };
                                    data[7] = {
                            label: \"Habillement\",
                                    data: ";
        // line 373
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 7, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#00c0ff\"
                            };
                            data[8] = {
                            label: \"Banque\",
                                    data: ";
        // line 378
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 8, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#c3b367\"
                            };
                                    data[9] = {
                            label: \"Salaire\",
                                    data: ";
        // line 383
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 9, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#009434\"
                            };
                            data[10] = {
                            label: \"Education\",
                                    data: ";
        // line 388
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 10, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#00c800\"
                            };
                                    data[11] = {
                            label: \"Voiture\",
                                    data: ";
        // line 393
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 11, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#003955\"
                            };
                            data[12] = {
                            label: \"Transport\",
                                    data: ";
        // line 398
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 12, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#ffae00\"
                            };
                                    data[13] = {
                            label: \"Cadeaux\",
                                    data: ";
        // line 403
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 13, array(), "array"), "html", null, true);
        echo ",
                                    color: \"#ea5900\"
                            };
                            data[14] = {
                            label: \"Equipements\",
                                    data: ";
        // line 408
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 14, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#320101\"
                            };
                                    data[15] = {
                            label: \"Loisirs\",
                                    data: ";
        // line 413
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 15, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#109f9a\"
                            };
                            data[16] = {
                            label: \"Animaux\",
                                    data: ";
        // line 418
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 16, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#ae9d08\"
                            };
                                    data[17] = {
                            label: \"Taxes\",
                                    data: ";
        // line 423
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 17, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#f10505\"
                            };
                            data[18] = {
                            label: \"Autres\",
                                    data: ";
        // line 428
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cm"]) ? $context["cm"] : $this->getContext($context, "cm")), 18, array(), "array"), "html", null, true);
        echo ",
                                    color:\"#8f3e02\"
                            };
                            
                        if (\$('#pie_chart_3').size() !== 0) {
                            \$.plot(\$(\"#pie_chart_3\"), data, {
                            series: {
                            pie: {
                            show: true,
                                    radius: 1,
                                    label: {
                                    show: true,
                                            radius: 3 / 4,
                                            formatter: function(label, series) {
                                            return '<div style=\"font-size:8pt;text-align:center;padding:2px;color:white;\">' + label + '<br/>' + Math.round(series.percent) + '% => ' + series.data[0][1] + '</div>';
                                            },
                                            background: {
                                            opacity: 0.5
                                            }
                                    }
                            }
                            },
                                    legend: {
                                    show: false
                                    }
                            });
                            }

                            }
                    };
                    }();
        </script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "myPocketBundle:public:statistiquerevenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  789 => 428,  781 => 423,  773 => 418,  765 => 413,  757 => 408,  749 => 403,  741 => 398,  733 => 393,  725 => 388,  717 => 383,  709 => 378,  701 => 373,  693 => 368,  685 => 363,  677 => 358,  669 => 353,  661 => 348,  653 => 343,  645 => 338,  577 => 273,  570 => 269,  563 => 265,  556 => 261,  548 => 256,  541 => 252,  534 => 248,  527 => 244,  520 => 240,  513 => 236,  506 => 232,  499 => 228,  494 => 225,  489 => 224,  484 => 223,  479 => 222,  474 => 221,  469 => 220,  464 => 219,  459 => 218,  454 => 217,  449 => 216,  444 => 215,  439 => 214,  434 => 213,  429 => 212,  424 => 211,  419 => 210,  414 => 209,  409 => 208,  404 => 207,  399 => 206,  394 => 205,  389 => 204,  384 => 203,  379 => 202,  375 => 201,  353 => 182,  349 => 181,  345 => 180,  341 => 179,  337 => 178,  333 => 177,  329 => 176,  325 => 175,  321 => 174,  317 => 173,  313 => 172,  309 => 171,  305 => 170,  301 => 169,  297 => 168,  293 => 167,  289 => 166,  285 => 165,  281 => 164,  277 => 163,  273 => 162,  269 => 161,  265 => 160,  261 => 159,  257 => 158,  253 => 157,  249 => 156,  245 => 155,  241 => 154,  237 => 153,  213 => 132,  172 => 94,  154 => 79,  129 => 61,  124 => 59,  120 => 58,  114 => 55,  85 => 28,  83 => 27,  80 => 26,  78 => 25,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
