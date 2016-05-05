<?php

/* myPocketBundle:public:statistiquesolde.html.twig */
class __TwigTemplate_7d58cd01a7cec5967700644e5cbe9c2f429825a3da00af53da66400b8ee9d81d extends Twig_Template
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
        <title>My Pocket | Statistique Solde</title>
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
                        Statistique Solde
                    </h3>
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <i class=\"fa fa-home\"></i>
                                <a>Statistique</a>
                                <i class=\"fa fa-angle-right\"></i>
                            </li>
                             <li>
                                <a>Solde</a>
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
        echo $this->env->getExtension('routing')->getPath("my_pocket_chartsoldepage");
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
                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-light red-soft\" href=\"javascript:;\">
                                    <div class=\"visual\">
                                        <i class=\"icon-basket\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\">
                                            ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["dp"]) ? $context["dp"] : $this->getContext($context, "dp")), "html", null, true);
        echo "
                                        </div>
                                        <div class=\"desc\">
                                            Dépense
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
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
                            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                <a class=\"dashboard-stat dashboard-stat-light green-meadow\" href=\"javascript:;\">
                                    <div class=\"visual\">
                                        <i class=\"icon-wallet\"></i>
                                    </div>
                                    <div class=\"details\">
                                        <div class=\"number\">
                                            ";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["rv"]) ? $context["rv"] : $this->getContext($context, "rv")), "html", null, true);
        echo "
                                        </div>
                                        <div class=\"desc\">
                                            Revenu
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
                                        <span class=\"caption-subject bold uppercase font-red-haze\"> Statistique Solde Mois : ";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
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
                                    <div id=\"chart_2\" class=\"chart\">
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
                                        <span class=\"caption-subject bold uppercase font-red-haze\"> Statistique Dépense de l'année : ";
        // line 147
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
                                        <div id=\"chart_5\" class=\"chart\" style=\"height: 400px;\">
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
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.stack.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.crosshair.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/typeahead/handlebars.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/pie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/radar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/light.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/patterns.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amcharts/themes/chalk.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/ammap/ammap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/ammap/maps/js/worldLow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/amcharts/amstockcharts/amstock.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            jQuery(document).ready(function () {
                Metronic.init();
                Layout.init();
                Demo.init();
                initChartSample5();
                ChartsFlotcharts.init();
                ChartsFlotcharts.initCharts();
            });
            var initChartSample5 = function() {
\t\t        var chart = AmCharts.makeChart(\"chart_5\", {
\t\t            \"theme\": \"light\",
\t\t            \"type\": \"serial\",
\t\t            \"startDuration\": 2,

\t\t            \"fontFamily\": 'Open Sans',
\t\t            \"color\":    '#888',
\t\t            \"dataProvider\": [
                                {
\t\t                \"Mois\": \"Janvier\",
\t\t                \"Montant\":";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 0, array(), "array"), "html", null, true);
        echo ",
\t\t                \"color\": \"#FF0F00\"
\t\t            }, {
\t\t                \"Mois\": \"Février\",
\t\t                \"Montant\": ";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 1, array(), "array"), "html", null, true);
        echo ",
\t\t                \"color\": \"#FF6600\"
\t\t            },{
\t\t                \"Mois\": \"Mars\",
\t\t                \"Montant\": ";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 2, array(), "array"), "html", null, true);
        echo ",
\t\t                \"color\": \"#F8FF01\"
\t\t            }, {
\t\t                \"Mois\": \"Avril\",
\t\t                \"Montant\": ";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 3, array(), "array"), "html", null, true);
        echo ",
\t\t                \"color\": \"#04D215\"
\t\t            }, {
\t\t                \"Mois\": \"Mai\",
\t\t                \"Montant\": ";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 4, array(), "array"), "html", null, true);
        echo ",
\t\t                \"color\": \"#0D8ECF\"
\t\t            }, {
\t\t                \"Mois\": \"Juin\",
\t\t                \"Montant\": ";
        // line 238
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 5, array(), "array"), "html", null, true);
        echo ",
\t\t                \"color\": \"#0D52D1\"
\t\t            }, {
\t\t                \"Mois\": \"Juillet\",
\t\t                \"Montant\": ";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 6, array(), "array"), "html", null, true);
        echo ",
\t\t                \"color\": \"#2A0CD0\"
\t\t            }, {
\t\t                \"Mois\": \"Aout\",
\t\t                \"Montant\": ";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 7, array(), "array"), "html", null, true);
        echo ",
\t\t                \"color\": \"#8A0CCF\"
\t\t            },
\t\t             {
\t\t                \"Mois\": \"Septembre\",
\t\t                \"Montant\": ";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 8, array(), "array"), "html", null, true);
        echo ",
\t\t                \"color\": \"#DDDDDD\"
\t\t            }, {
\t\t                \"Mois\": \"Octobre\",
\t\t                \"Montant\": ";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 9, array(), "array"), "html", null, true);
        echo ",
\t\t                \"color\": \"#999999\"
\t\t            }, {
\t\t                \"Mois\": \"Novembre\",
\t\t                \"Montant\": ";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 10, array(), "array"), "html", null, true);
        echo ",
\t\t                \"color\": \"#333333\"
\t\t            }, {
\t\t                \"Mois\": \"Décembre\",
\t\t                \"Montant\": ";
        // line 263
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smr"]) ? $context["smr"] : $this->getContext($context, "smr")), 11, array(), "array"), "html", null, true);
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
                   initCharts: function() {

            if (!jQuery.plot) {
                return;
            }

            function chart2() {
                if (\$('#chart_2').size() != 1) {
                    return;
                }
                var solde = [
                    [1, ";
        // line 331
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 0, array(), "array"), "html", null, true);
        echo "],
                    [2, ";
        // line 332
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 1, array(), "array"), "html", null, true);
        echo "],
                    [3, ";
        // line 333
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 2, array(), "array"), "html", null, true);
        echo "],
                    [4, ";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 3, array(), "array"), "html", null, true);
        echo "],
                    [5, ";
        // line 335
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 4, array(), "array"), "html", null, true);
        echo "],
                    [6, ";
        // line 336
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 5, array(), "array"), "html", null, true);
        echo "],
                    [7, ";
        // line 337
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 6, array(), "array"), "html", null, true);
        echo "],
                    [8, ";
        // line 338
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 7, array(), "array"), "html", null, true);
        echo "],
                    [9, ";
        // line 339
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 8, array(), "array"), "html", null, true);
        echo "],
                    [10, ";
        // line 340
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 9, array(), "array"), "html", null, true);
        echo "],
                    [11, ";
        // line 341
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 10, array(), "array"), "html", null, true);
        echo "],
                    [12, ";
        // line 342
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 11, array(), "array"), "html", null, true);
        echo "],
                    [13, ";
        // line 343
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 12, array(), "array"), "html", null, true);
        echo "],
                    [14, ";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 13, array(), "array"), "html", null, true);
        echo "],
                    [15, ";
        // line 345
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 14, array(), "array"), "html", null, true);
        echo "],
                    [16, ";
        // line 346
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 15, array(), "array"), "html", null, true);
        echo "],
                    [17, ";
        // line 347
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 16, array(), "array"), "html", null, true);
        echo "],
                    [18, ";
        // line 348
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 17, array(), "array"), "html", null, true);
        echo "],
                    [19, ";
        // line 349
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 18, array(), "array"), "html", null, true);
        echo "],
                    [20, ";
        // line 350
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 19, array(), "array"), "html", null, true);
        echo "],
                    [21, ";
        // line 351
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 20, array(), "array"), "html", null, true);
        echo "],
                    [22, ";
        // line 352
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 21, array(), "array"), "html", null, true);
        echo "],
                    [23, ";
        // line 353
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 22, array(), "array"), "html", null, true);
        echo "],
                    [24, ";
        // line 354
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 23, array(), "array"), "html", null, true);
        echo "],
                    [25, ";
        // line 355
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 24, array(), "array"), "html", null, true);
        echo "],
                    [26, ";
        // line 356
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 25, array(), "array"), "html", null, true);
        echo "],
                    [27, ";
        // line 357
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 26, array(), "array"), "html", null, true);
        echo "],
                    [28, ";
        // line 358
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 27, array(), "array"), "html", null, true);
        echo "],
                    [29, ";
        // line 359
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 28, array(), "array"), "html", null, true);
        echo "],
                    [30, ";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 29, array(), "array"), "html", null, true);
        echo "],
                    [31, ";
        // line 361
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")), 30, array(), "array"), "html", null, true);
        echo "]
                ];

                var plot = \$.plot(\$(\"#chart_2\"), [{
                    data: solde,
                    label: \"Solde\",
                    lines: {
                        lineWidth: 1,
                    },
                    shadowSize: 0
                }], {
                    series: {
                        lines: {
                            show: true,
                            lineWidth: 2,
                            fill: true,
                            fillColor: {
                                colors: [{
                                    opacity: 0.05
                                }, {
                                    opacity: 0.01
                                }]
                            }
                        },
                        points: {
                            show: true,
                            radius: 3,
                            lineWidth: 1
                        },
                        shadowSize: 2
                    },
                    grid: {
                        hoverable: true,
                        clickable: true,
                        tickColor: \"#eee\",
                        borderColor: \"#eee\",
                        borderWidth: 1
                    },
                    colors: [\"#37b7f3\"],
                    xaxis: {
                        ticks: 11,
                        tickDecimals: 0,
                        tickColor: \"#eee\",
                    },
                    yaxis: {
                        ticks: 11,
                        tickDecimals: 0,
                        tickColor: \"#eee\",
                    }
                });


                function showTooltip(x, y, contents) {
                    \$('<div id=\"tooltip\">' + contents + '</div>').css({
                        position: 'absolute',
                        display: 'none',
                        top: y + 5,
                        left: x + 15,
                        border: '1px solid #333',
                        padding: '4px',
                        color: '#fff',
                        'border-radius': '3px',
                        'background-color': '#333',
                        opacity: 0.80
                    }).appendTo(\"body\").fadeIn(200);
                }

                var previousPoint = null;
                \$(\"#chart_2\").bind(\"plothover\", function(event, pos, item) {
                    \$(\"#x\").text(pos.x);
                    \$(\"#y\").text(pos.y);

                    if (item) {
                        if (previousPoint != item.dataIndex) {
                            previousPoint = item.dataIndex;

                            \$(\"#tooltip\").remove();
                            var x = item.datapoint[0],
                                y = item.datapoint[1];

                            showTooltip(item.pageX, item.pageY, item.series.label + \" du \" + x+\"-";
        // line 441
        echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
        echo "\" + \" = \" + y);
                        }
                    } else {
                        \$(\"#tooltip\").remove();
                        previousPoint = null;
                    }
                });
            }
            chart2();

        }
                    };
                    }();
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "myPocketBundle:public:statistiquesolde.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  750 => 441,  667 => 361,  663 => 360,  659 => 359,  655 => 358,  651 => 357,  647 => 356,  643 => 355,  639 => 354,  635 => 353,  631 => 352,  627 => 351,  623 => 350,  619 => 349,  615 => 348,  611 => 347,  607 => 346,  603 => 345,  599 => 344,  595 => 343,  591 => 342,  587 => 341,  583 => 340,  579 => 339,  575 => 338,  571 => 337,  567 => 336,  563 => 335,  559 => 334,  555 => 333,  551 => 332,  547 => 331,  476 => 263,  469 => 259,  462 => 255,  455 => 251,  447 => 246,  440 => 242,  433 => 238,  426 => 234,  419 => 230,  412 => 226,  405 => 222,  398 => 218,  374 => 197,  370 => 196,  366 => 195,  362 => 194,  358 => 193,  354 => 192,  350 => 191,  346 => 190,  342 => 189,  338 => 188,  334 => 187,  330 => 186,  326 => 185,  322 => 184,  318 => 183,  314 => 182,  310 => 181,  306 => 180,  302 => 179,  298 => 178,  294 => 177,  290 => 176,  286 => 175,  282 => 174,  278 => 173,  274 => 172,  270 => 171,  266 => 170,  262 => 169,  258 => 168,  234 => 147,  209 => 125,  190 => 109,  172 => 94,  154 => 79,  129 => 61,  124 => 59,  120 => 58,  114 => 55,  85 => 28,  83 => 27,  80 => 26,  78 => 25,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
