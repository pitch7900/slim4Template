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

/* home.twig */
class __TwigTemplate_1f68e990c5e35f2efb3c173e428fd7c202360bbd1af45aea3c7e410c42e06387 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("main.twig", "home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "menu.twig");
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div id=\"main_page\" class=\"container-fluid row\">
    <div class=\"\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Welcome"]), "html", null, true);
        echo "</h1>
        </div>
    </div>

";
    }

    // line 16
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <footer class=\"footer py-3 background-secondary fixed-bottom\">
        <div class=\"container\">
           
                ";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Footer Welcome"]), "html", null, true);
        echo "
                
            </div>
        </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  77 => 17,  73 => 16,  64 => 9,  59 => 6,  55 => 5,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.twig\" %}
{% block menu %}{{ include('menu.twig') }}{% endblock %}


{% block content %}

    <div id=\"main_page\" class=\"container-fluid row\">
    <div class=\"\">
        <h1>{{ getText('Welcome') }}</h1>
        </div>
    </div>

{% endblock %}


{% block footer %}
    <footer class=\"footer py-3 background-secondary fixed-bottom\">
        <div class=\"container\">
           
                {{ getText('Footer Welcome') }}
                
            </div>
        </div>
    </footer>
{% endblock %}", "home.twig", "C:\\Users\\chris\\Documents\\VSCode\\slim4Template\\resources\\views\\home.twig");
    }
}
