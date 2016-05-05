<?php

/* myPocketBundle:public:login.html.twig */
class __TwigTemplate_d48eb9bf1e7d3d9e00c88ff29d432d80134ce86650a85c776ba4ec9bc9aae82e extends Twig_Template
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
<title>My Pocket | Connexion</title>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
<meta content=\"\" name=\"description\"/>
<meta content=\"\" name=\"author\"/>
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/css/css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/pages/css/login-soft.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link id=\"style_color\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout/css/themes/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link rel=\"shortcut icon\" href=\"favicon.ico\"/>
</head>
<body class=\"page-md login\">
<div class=\"logo\">
\t<a>
\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout2/img/logo-default.png"), "html", null, true);
        echo "\" style=\"width: 370px;\"/>
\t</a>
</div>
<div class=\"menu-toggler sidebar-toggler\">
</div>
<div class=\"content\">
    ";
        // line 33
        if ((array_key_exists("error", $context) && ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) != null))) {
            echo " ";
            // line 34
            echo "            <div class=\"alert alert-danger\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span>
                ";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo " </span>
            </div>
";
        }
        // line 40
        echo "\t<form method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("my_pocket_loginpage");
        echo "\">
            <div class=\"form-group\">
                <label class=\"control-label\">Nom d'Utilisateur :</label>
                <div class=\"input-icon\">
                    <i class=\"fa fa-user\"></i>
                    <input class=\"form-control placeholder-no-fix\" name=\"email\" type=\"email\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label\">Mot de Passe :</label>
                <div class=\"input-icon\">
                    <i class=\"fa fa-lock\"></i>
                    <input class=\"form-control placeholder-no-fix\" name=\"pass\" type=\"password\"/>
                </div>
            </div>
            <div class=\"form-actions\">
                <input name=\"check\" type=\"submit\" class=\"btn blue btn-block\" value=\"Se Connecter\" />
            </div>
        </form>
</div>

<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-migrate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/backstretch/jquery.backstretch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/layout/scripts/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script>
jQuery(document).ready(function() {     
    Metronic.init();
    Layout.init(); 
    Demo.init();
       \$.backstretch([
        \"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/pages/media/bg/1.jpg"), "html", null, true);
        echo "\",
        \"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/pages/media/bg/3.jpg"), "html", null, true);
        echo "\",
        \"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/admin/pages/media/bg/4.jpg"), "html", null, true);
        echo "\"
        ], {
          fade: 1000,
          duration: 2000
    }
    );
});
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "myPocketBundle:public:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 81,  189 => 80,  185 => 79,  175 => 72,  171 => 71,  167 => 70,  163 => 69,  159 => 68,  155 => 67,  151 => 66,  147 => 65,  143 => 64,  139 => 63,  135 => 62,  131 => 61,  106 => 40,  100 => 37,  95 => 34,  92 => 33,  83 => 27,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
