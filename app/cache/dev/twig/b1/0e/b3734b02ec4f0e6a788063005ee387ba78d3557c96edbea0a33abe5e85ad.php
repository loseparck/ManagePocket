<?php

/* myPocketBundle:public:acceuil.html.twig */
class __TwigTemplate_b10eb3734b02ec4f0e6a788063005ee387ba78d3557c96edbea0a33abe5e85ad extends Twig_Template
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
        <title>My Pocket | Acceuil</title>
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
                        Acceuil
                    </h3>
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <i class=\"fa fa-home\"></i>
                                <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("my_pocket_acceuilpage");
        echo "\">Acceuil</a>
                            </li>
                        </ul>
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
        // line 50
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
        // line 65
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
        // line 80
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
                        <div id=\"pie_chart_3\" class=\"chart\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.stack.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.crosshair.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/flot/jquery.flot.categories.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/typeahead/handlebars.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            jQuery(document).ready(function () {
                Metronic.init();
                Layout.init();
                Demo.init();
                ChartsFlotcharts.init();
                ChartsFlotcharts.initPieCharts();
            });
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
                                    var series = 2;
                                    series = series < 2 ? 2 : series;
                                    data[0] = {
                            label: \"Dépense\",
                                    data: ";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["dp"]) ? $context["dp"] : $this->getContext($context, "dp")), "html", null, true);
        echo " ,
                                    color: \"#F60000\"
                            };
                                    data[1] = {
                            label: \"Revenu\",
                                    data: ";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["rv"]) ? $context["rv"] : $this->getContext($context, "rv")), "html", null, true);
        echo " ,
                                    color: \"#4c87b9\"
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
                                            return '<div style=\"font-size:8pt;text-align:center;padding:2px;color:black;\">' + label + '<br/>' + Math.round(series.percent) + '% => ' + series.data[0][1] + '</div>';
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
        return "myPocketBundle:public:acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 147,  273 => 142,  244 => 116,  240 => 115,  236 => 114,  232 => 113,  228 => 112,  224 => 111,  220 => 110,  216 => 109,  212 => 108,  208 => 107,  204 => 106,  200 => 105,  196 => 104,  192 => 103,  188 => 102,  184 => 101,  180 => 100,  176 => 99,  172 => 98,  168 => 97,  148 => 80,  130 => 65,  112 => 50,  96 => 37,  85 => 28,  83 => 27,  80 => 26,  78 => 25,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
