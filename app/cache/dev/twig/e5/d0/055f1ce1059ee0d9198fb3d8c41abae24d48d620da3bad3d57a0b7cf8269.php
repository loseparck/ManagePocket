<?php

/* myPocketBundle:public:header.html.twig */
class __TwigTemplate_e5d0055f1ce1059ee0d9198fb3d8c41abae24d48d620da3bad3d57a0b7cf8269 extends Twig_Template
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
        echo "<div class=\"page-header md-shadow-z-1-i navbar navbar-fixed-top\">
    <div class=\"page-header-inner\">
        <div class=\"page-logo\">
            <a>
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/img/logo-default.png"), "html", null, true);
        echo "\" style=\"width: 145px;margin-top: 5px;margin-left: -12px;\" alt=\"logo\" class=\"logo-default\"/>
            </a>
            <div class=\"menu-toggler sidebar-toggler\">
            </div>
        </div>
        <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        </a>
        <div class=\"page-top\">
            <div class=\"top-menu\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"dropdown dropdown-extended dropdown-notification\" id=\"header_notification_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <i class=\"icon-basket\"></i>
                            <span class=\"badge badge-default\">
                                ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["cd"]) ? $context["cd"] : $this->getContext($context, "cd")), "html", null, true);
        echo " </span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3>Mois : ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-arrow-right\"></i><span class=\"bold\"> ";
        echo twig_escape_filter($this->env, (isset($context["cd"]) ? $context["cd"] : $this->getContext($context, "cd")), "html", null, true);
        echo " Dépenses</span></h3>
                                <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("my_pocket_listedepensepage");
        echo "\">Tous afficher</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <i class=\"icon-wallet\"></i>
                            <span class=\"badge badge-default\">
                                ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["cr"]) ? $context["cr"] : $this->getContext($context, "cr")), "html", null, true);
        echo " </span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3>Mois : ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-arrow-right\"></i><span class=\"bold\"> ";
        echo twig_escape_filter($this->env, (isset($context["cr"]) ? $context["cr"] : $this->getContext($context, "cr")), "html", null, true);
        echo " Revenus</span></h3>
                                <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("my_pocket_listerevenupage");
        echo "\">Tous afficher</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown dropdown-user\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <img alt=\"\" class=\"img-circle\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/img/user.png"), "html", null, true);
        echo "\"/>
                            <span class=\"username username-hide-on-mobile\">
                                ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " </span>
                            <i class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-default\">
                            <li>
                                <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("my_pocket_deconnexionpage");
        echo "\">
                                    <i class=\"icon-power\"></i> Déconnexion </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "myPocketBundle:public:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 50,  93 => 45,  88 => 43,  79 => 37,  73 => 36,  66 => 32,  55 => 24,  49 => 23,  42 => 19,  25 => 5,  19 => 1,);
    }
}
