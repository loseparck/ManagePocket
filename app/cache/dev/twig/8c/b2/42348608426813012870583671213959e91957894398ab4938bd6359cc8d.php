<?php

/* myPocketBundle:public:listedepense.html.twig */
class __TwigTemplate_8cb242348608426813012870583671213959e91957894398ab4938bd6359cc8d extends Twig_Template
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
        <title>My Pocket | Liste des Dépenses</title>
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"), "html", null, true);
        echo "\"/>
        <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
    </head>
    <body class=\"page-md page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo page-header-fixed page-sidebar-fixed\">
        ";
        // line 32
        $this->env->loadTemplate("myPocketBundle:public:header.html.twig")->display($context);
        // line 33
        echo "        <div class=\"page-container\">
            ";
        // line 34
        $this->env->loadTemplate("myPocketBundle:public:menu.html.twig")->display($context);
        // line 35
        echo "            <div class=\"page-content-wrapper\">
                <div class=\"page-content\">
                    <h3 class=\"page-title\">
                        Liste des Dépenses
                    </h3>
                    <div class=\"page-bar\">
                        <ul class=\"page-breadcrumb\">
                            <li>
                                <i class=\"fa fa-home\"></i>
                                <a>Dépense</a>
                                <i class=\"fa fa-angle-right\"></i>
                            </li>
                            <li>
                                <a >Liste des Dépenses</a>
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
        // line 62
        echo $this->env->getExtension('routing')->getPath("my_pocket_listedepensepage");
        echo "\">
                                        <div class=\"col-md-1\"><input type=\"submit\" class=\"btn btn-info\" style=\"margin-top: 9px;width: 32px;background-image: url('/app/symfony/web/assets/admin/layout2/img/left.png')!important;background-repeat: no-repeat;background-position: center;\" value=\" \" name=\"pred\" ></div>
                                        <div class=\"col-md-4\">
                                            <input type=\"hidden\" name=\"annee\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
        echo "\"/>
                                            <input type=\"hidden\" name=\"mois\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
        echo "\"/>
                                        </div>  
                                        <div class=\"col-md-1\" style=\"text-align:center;height:50px;background-image: url('";
        // line 68
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
                            <div class=\"portlet box blue-madison\">
                                <div class=\"portlet-title\">
                                    <div class=\"caption\">
                                        <i class=\"icon-basket\"></i>Liste des Dépenses
                                    </div>
                                </div>
                                <div class=\"portlet-body\">
                                    
                                    <table class=\"table table-striped table-bordered table-hover\" id=\"sample_1\">
                                        <thead>
                                            <tr>
                                                <th>Désignation</th>
                                                <th>Date</th>
                                                <th>Catégorie</th>
                                                <th>Montant</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["depenses"]) ? $context["depenses"] : $this->getContext($context, "depenses")));
        foreach ($context['_seq'] as $context["_key"] => $context["depense"]) {
            // line 99
            echo "                                                <tr>
                                                    <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["depense"], "designation", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["depense"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["depense"], "categorie", array()), "nom", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["depense"], "montant", array()), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <button class=\"btn btn-danger\" data-toggle=\"modal\" onclick=\"document.getElementById('idr').value=";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["depense"], "id", array()), "html", null, true);
            echo "\" href=\"#responsive\"><i class=\"icon-trash\"></i></button>
                                                        <form method=\"post\" style=\"display:inline;\" action=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("my_pocket_listedepensepage");
            echo "\">
                                                            <input type=\"hidden\" name=\"idr\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["depense"], "id", array()), "html", null, true);
            echo "\" >
                                                            <input type=\"hidden\" name=\"mois\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
            echo "\" >
                                                            <input type=\"hidden\" name=\"annee\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
            echo "\" >
                                                            <input type=\"submit\" name=\"edit\" value=\" \" class=\"btn btn-success\" style=\"background-image: url('/app/symfony/web/assets/admin/layout2/img/edit.png')!important;background-repeat: no-repeat;background-repeat: no-repeat;background-position: center;width: 48px;\">
                                                        </form>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['depense'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" id=\"msg\" value=\"liste des dépenses du mois ";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
        echo "\">
                    <div id=\"responsive\" class=\"modal fade\" tabindex=\"-1\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <form method=\"post\" action=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("my_pocket_listedepensepage");
        echo "\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                aria-hidden=\"true\"></button>
                                        <h4 class=\"modal-title\">Supprimer Dépense</h4>
                                        <input type=\"hidden\" name=\"idr\" id=\"idr\">
                                        <input type=\"hidden\" name=\"annee\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")), "html", null, true);
        echo "\"/>
                                        <input type=\"hidden\" name=\"mois\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
        echo "\"/>
                                    </div>
                                    <div class=\"modal-body\">
                                        <center>
                                                Êtes-vous sur de supprimé cette dépense?\t
                                        </center>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <input type=\"submit\" class=\"btn btn-success\" value=\"Confirmer\" name=\"confdel\">
                                        <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/scripts/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/pages/scripts/table-advanced.js"), "html", null, true);
        echo "\"></script>
        <script>
            jQuery(document).ready(function () {
                Metronic.init();
                Layout.init();
                Demo.init();
                TableAdvanced.init();
            });
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "myPocketBundle:public:listedepense.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 171,  377 => 170,  373 => 169,  369 => 168,  365 => 167,  361 => 166,  357 => 165,  353 => 164,  349 => 163,  345 => 162,  341 => 161,  337 => 160,  333 => 159,  329 => 158,  325 => 157,  321 => 156,  317 => 155,  313 => 154,  309 => 153,  305 => 152,  301 => 151,  297 => 150,  276 => 132,  272 => 131,  263 => 125,  254 => 121,  246 => 115,  234 => 109,  230 => 108,  226 => 107,  222 => 106,  218 => 105,  213 => 103,  209 => 102,  205 => 101,  201 => 100,  198 => 99,  194 => 98,  157 => 68,  152 => 66,  148 => 65,  142 => 62,  113 => 35,  111 => 34,  108 => 33,  106 => 32,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
