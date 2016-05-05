<?php

/* myPocketBundle:public:menu.html.twig */
class __TwigTemplate_ce9a54982394572db9e2b87a543d7271cdb5247527d0ecc533f3847e7724a651 extends Twig_Template
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
        echo "<div class=\"page-sidebar-wrapper\">
    <div class=\"page-sidebar navbar-collapse collapse\">
        <ul class=\"page-sidebar-menu\" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\">
            <li class=\"start \">
                <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("my_pocket_acceuilpage");
        echo "\">
                    <i class=\"icon-home\"></i>
                    <span class=\"title\">Accueil</span>
                </a>
            </li>
            <li>
                <a href=\"javascript:;\">
                    <i class=\"icon-basket\"></i>
                    <span class=\"title\">Dépense</span>
                    <span class=\"arrow \"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li>
                        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("my_pocket_nouvelledepensepage");
        echo "\">
                            <i class=\"glyphicon glyphicon-plus\"></i>
                            Nouvelle Dépense</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("my_pocket_listedepensepage");
        echo "\">
                            <i class=\"icon-basket\"></i>
                            Liste des Dépenses</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"javascript:;\">
                    <i class=\"icon-wallet\"></i>
                    <span class=\"title\">Revenu</span>
                    <span class=\"arrow \"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("my_pocket_nouveaurevenupage");
        echo "\">
                            <i class=\"glyphicon glyphicon-plus\"></i>
                            Nouveau Revenu</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("my_pocket_listerevenupage");
        echo "\">
                            <i class=\"icon-wallet\"></i>
                            Liste des Revenus</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"javascript:;\">
                    <i class=\"icon-bar-chart\"></i>
                    <span class=\"title\">Statistique</span>
                    <span class=\"arrow \"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li>
                        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("my_pocket_chartdepensepage");
        echo "\">
                            <i class=\"icon-basket\"></i>
                            Dépense</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("my_pocket_chartrevenupage");
        echo "\">
                            <i class=\"icon-wallet\"></i>
                            Revenu</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("my_pocket_chartsoldepage");
        echo "\">
                            <i class=\"fa fa-money\"></i>
                            Solde</a>
                    </li>
                </ul>
            </li>            
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "myPocketBundle:public:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 66,  99 => 61,  91 => 56,  74 => 42,  66 => 37,  49 => 23,  41 => 18,  25 => 5,  19 => 1,);
    }
}
