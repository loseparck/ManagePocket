<?php

/* myPocketBundle:public:nouvelledepense.html.twig */
class __TwigTemplate_a85168c2301223f92c0e437bd38b17609c0a026885021947ecdeebdaebbea7ce extends Twig_Template
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
        <title>My Pocket | Nouvelle Dépense</title>
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
                        Nouvelle Dépense
                    </h3>
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <i class=\"fa fa-home\"></i>
                                <a>Dépense</a>
                                <i class=\"fa fa-angle-right\"></i>
                            </li>
                            <li>
                                <a >Nouvelle Dépense</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"row\">
                        ";
        // line 50
        if ((array_key_exists("message", $context) && ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) != null))) {
            // line 51
            echo "                        <div class=\"col-md-12\">
                            <div class=\"Metronic-alerts alert alert-info fade in\">
                                <button class=\"close\" data-close=\"alert\"></button>
                                <strong>";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</strong>
                            </div>
                        </div>
                        ";
        }
        // line 58
        echo "                        <div class=\"col-md-12\">
                            <div class=\"portlet box red-intense\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-basket\"></i>Nouvelle Dépense
                                    </div>
                                </div>
                                <div class=\"portlet-body form\">
                                    <form method=\"post\" class=\"form-horizontal\" action=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("my_pocket_nouvelledepensepage");
        echo "\">
                                        <div class=\"form-body\">
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Catégorie :<span class=\"required\">* </span></label>
                                                <div class=\"col-md-3\">
                                                    <select name=\"categorie\" id=\"select2_sample_modal_4\" class=\"form-control select2\">
                                                        ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 73
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Désignation :<span class=\"required\">* </span></label>
                                                <div class=\"col-md-3\">
                                                    <input type=\"text\" class=\"form-control\" name=\"desig\"/>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Date :<span class=\"required\">* </span></label>
                                                <div class=\"col-md-2\">
                                                    <input class=\"form-control form-control-inline date-picker\" id=\"date\" type=\"text\" name=\"date\" data-date-format=\"dd/mm/yyyy\" />
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-md-3\">Montant :<span class=\"required\">* </span></label>
                                                <div class=\"col-md-2\">
                                                    <input type=\"text\" onkeypress=\"validate(event)\" class=\"form-control\" name=\"montant\"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"form-actions\">
                                            <div class=\"row\">
                                                <div class=\"col-md-offset-3 col-md-9\">
                                                    <input type=\"submit\" class=\"btn btn-info\" name=\"confnvdp\" value=\"Confirmer\" />
                                                    <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("my_pocket_acceuilpage");
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
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/pages/scripts/components-dropdowns.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 133
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
        return "myPocketBundle:public:nouvelledepense.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 133,  282 => 132,  278 => 131,  274 => 130,  270 => 129,  266 => 128,  262 => 127,  258 => 126,  254 => 125,  250 => 124,  246 => 123,  242 => 122,  238 => 121,  234 => 120,  230 => 119,  226 => 118,  222 => 117,  218 => 116,  214 => 115,  197 => 101,  169 => 75,  158 => 73,  154 => 72,  145 => 66,  135 => 58,  128 => 54,  123 => 51,  121 => 50,  101 => 32,  99 => 31,  96 => 30,  94 => 29,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
