<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main.twig */
class __TwigTemplate_939f70f4d2722aba32eb4f03f779c8de9870e930332c82fb8437022e4ccec1a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t";
        // line 4
        echo twig_include($this->env, $context, "header.twig");
        echo "
\t</head>
\t<body ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "darktheme", [], "any", false, false, false, 6)) {
            echo " data-theme=\"dark\" ";
        } else {
            echo " data-theme=\"light\" ";
        }
        echo " >
\t\t";
        // line 8
        echo "\t\t<div id=\"users-device-size\">
\t\t\t<div id=\"xs\" class=\"d-xs-block d-sm-none d-md-none d-lg-none d-xl-none\"></div>
\t\t\t<div id=\"sm\" class=\"d-xs-none d-sm-block d-md-none d-lg-none d-xl-none\"></div>
\t\t\t<div id=\"md\" class=\"d-xs-none d-sm-none d-md-block d-lg-none d-xl-none\"></div>
\t\t\t<div id=\"lg\" class=\"d-xs-none d-sm-none d-md-none d-lg-block d-xl-none\"></div>
\t\t\t<div id=\"xl\" class=\"d-xs-none d-sm-none d-md-none d-lg-none d-xl-block\"></div>
\t\t</div>
\t\t<div id=\"flashmessages\">
\t\t\t";
        // line 16
        $this->loadTemplate("templates/partials/flash.twig", "main.twig", 16)->display($context);
        // line 17
        echo "\t\t</div>
\t\t";
        // line 18
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "\t\t<main class=\"container-fluid center\" role=\"main\">
           
            ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "        </main>

        ";
        // line 24
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        echo "    </body>
\t\t";
        // line 26
        echo twig_include($this->env, $context, "javascripts.twig");
        echo "
</html>
";
    }

    // line 18
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 24
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  103 => 21,  97 => 18,  90 => 26,  87 => 25,  85 => 24,  81 => 22,  79 => 21,  75 => 19,  73 => 18,  70 => 17,  68 => 16,  58 => 8,  50 => 6,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t{{ include('header.twig') }}
\t</head>
\t<body {% if (user.darktheme) %} data-theme=\"dark\" {% else %} data-theme=\"light\" {% endif %} >
\t\t{#Small tweack to detect the screen resolution from bootstrap#}
\t\t<div id=\"users-device-size\">
\t\t\t<div id=\"xs\" class=\"d-xs-block d-sm-none d-md-none d-lg-none d-xl-none\"></div>
\t\t\t<div id=\"sm\" class=\"d-xs-none d-sm-block d-md-none d-lg-none d-xl-none\"></div>
\t\t\t<div id=\"md\" class=\"d-xs-none d-sm-none d-md-block d-lg-none d-xl-none\"></div>
\t\t\t<div id=\"lg\" class=\"d-xs-none d-sm-none d-md-none d-lg-block d-xl-none\"></div>
\t\t\t<div id=\"xl\" class=\"d-xs-none d-sm-none d-md-none d-lg-none d-xl-block\"></div>
\t\t</div>
\t\t<div id=\"flashmessages\">
\t\t\t{% include 'templates/partials/flash.twig' %}
\t\t</div>
\t\t{% block menu %}{% endblock %}
\t\t<main class=\"container-fluid center\" role=\"main\">
           
            {% block content %}{% endblock %}
        </main>

        {% block footer %}{% endblock %}
    </body>
\t\t{{ include('javascripts.twig') }}
</html>
", "main.twig", "C:\\Users\\chris\\Documents\\VSCode\\slim4Template\\resources\\views\\main.twig");
    }
}
