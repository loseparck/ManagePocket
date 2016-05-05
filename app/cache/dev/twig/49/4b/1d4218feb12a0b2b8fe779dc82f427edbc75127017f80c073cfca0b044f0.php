<?php

/* myPocketBundle:public:editrevenu.html.twig */
class __TwigTemplate_494b1d4218feb12a0b2b8fe779dc82f427edbc75127017f80c073cfca0b044f0 extends Twig_Template
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
<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>My Pocket | Modifier Revenu</title>
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/select2/select2.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-multi-select/css/multi-select.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/css/datepicker3.css"), "html", null, true);
        echo "\"/>
        <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
    </head>
    <body class=\"page-md page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo page-header-fixed page-sidebar-fixed\">
        ";
        // line 29
        $this->env->loadTemplate("myPocketBundle:public:header.html.twig")->display($context);
        // line 30
        echo "        <div class=\"page-container\">
            ";
        // line 31
        $this->env->loadTemplate("myPocketBundle:public:menu.html.twig")->display($context);
        // line 32
        echo "            <div class=\"page-content-wrapper\">
                <div class=\"page-content\">
                    <h3 class=\"page-title\">
                        Modifier Revenu
                    </h3>
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <i class=\"fa fa-home\"></i>
                                <a>Revenu</a>
                                <i class=\"fa fa-angle-right\"></i>
                            </li>
                            <li>
                                <a>Liste des Revenus</a>
                                 <i class=\"fa fa-angle-right\"></i>
                            </li>
                            <li>
                                <a>Modifier Revenu</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"portlet box green-meadow\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-pencil\"></i>Modifier Revenu
                                    </div>
                                </div>
                                <div class=\"portlet-body form\">
                                    <form method=\"post\" class=\"form-horizontal\" action=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("my_pocket_editrevenupage");
        echo "\">
                                        <div class=\"form-body\">
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Catégorie :<span class=\"required\">* </span></label>
                                                <div class=\"col-md-2\">
                                                    <input class=\"form-control\" type=\"text\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revenu"]) ? $context["revenu"] : $this->getContext($context, "revenu")), "categorie", array()), "nom", array()), "html", null, true);
        echo "\" readonly>
                                                </div>
                                            </div>
                                            <input type=\"hidden\" name=\"idr\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revenu"]) ? $context["revenu"] : $this->getContext($context, "revenu")), "id", array()), "html", null, true);
        echo "\">
                                            <input type=\"hidden\" name=\"mois\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
        echo "\">
                                            <input type=\"hidden\" name=\"annee\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
        echo "\">
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Désignation :<span class=\"required\">* </span></label>
                                                <div class=\"col-md-3\">
                                                    <input type=\"text\" class=\"form-control\" name=\"desig\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revenu"]) ? $context["revenu"] : $this->getContext($context, "revenu")), "designation", array()), "html", null, true);
        echo "\"/>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Date :<span class=\"required\">* </span></label>
                                                <div class=\"col-md-2\">
                                                    <input class=\"form-control\" type=\"text\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revenu"]) ? $context["revenu"] : $this->getContext($context, "revenu")), "date", array()), "d-m-Y"), "html", null, true);
        echo "\" readonly />
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Montant :<span class=\"required\">* </span></label>
                                                <div class=\"col-md-2\">
                                                    <input type=\"text\" onkeypress=\"validate(event)\" class=\"form-control\" name=\"montant\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["revenu"]) ? $context["revenu"] : $this->getContext($context, "revenu")), "montant", array()), "html", null, true);
        echo "\"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-actions\">
                                            <div class=\"row\">
                                                <div class=\"col-md-offset-3 col-md-9\">
                                                    <input type=\"submit\" class=\"btn btn-info\" name=\"confedit\" value=\"Confirmer\" />
                                                    <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("my_pocket_listerevenupage");
        echo "\" class=\"btn btn-warning\">
                                                        <span>Annuler</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/pages/scripts/components-dropdowns.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/pages/scripts/components-pickers.js"), "html", null, true);
        echo "\"></script>
        <script>
            jQuery(document).ready(function () {
                Metronic.init();
                Layout.init();
                Demo.init();
                ComponentsDropdowns.init();
                ComponentsPickers.init();
                \$(\"#date\").datepicker(\"setDate\", new Date());
            });
            function validate(evt) {
                var theEvent = evt || window.event;
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
                var regex = /[0-9]|\\./;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault)
                        theEvent.preventDefault();
                }
            }
        </script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "myPocketBundle:public:editrevenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 128,  276 => 127,  272 => 126,  268 => 125,  264 => 124,  260 => 123,  256 => 122,  252 => 121,  248 => 120,  244 => 119,  240 => 118,  236 => 117,  232 => 116,  228 => 115,  224 => 114,  220 => 113,  216 => 112,  212 => 111,  208 => 110,  191 => 96,  180 => 88,  171 => 82,  162 => 76,  155 => 72,  151 => 71,  147 => 70,  141 => 67,  133 => 62,  101 => 32,  99 => 31,  96 => 30,  94 => 29,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
