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

/* user/add.twig */
class __TwigTemplate_2f410c84a7736c800e48afc74632cf1c91fc368893a213af1e319031712bf97c extends Template
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
        // line 2
        $macros["macrosuser"] = $this->macros["macrosuser"] = $this->loadTemplate("user/macros.twig", "user/add.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("main.twig", "user/add.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        echo twig_include($this->env, $context, "menu.twig");
        echo "
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
\t\t<div class=\"container\">
\t\t\t<h1>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Create a new user"]), "html", null, true);
        echo "</h1>

\t\t\t<form id=\"newuser\" action=\"/user/add\" id=\"formuploadcert\" enctype=\"multipart/form-data\" method=\"post\">
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"firstname\" class=\"col-sm-4 col-form-label\">";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Firstname"]), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input id=\"firstname\" type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"\" value=\"\" autocomplete=\"username\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"lastname\" class=\"col-sm-4 col-form-label\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Lastname"]), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input id=\"lastname\" type=\"text\" name=\"lastname\" class=\"form-control\" placeholder=\"\" value=\"\" autocomplete=\"username\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"login_new\" class=\"col-sm-4 col-form-label\">";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Login"]), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input id=\"login_new\" type=\"text\" name=\"login\" class=\"form-control\" placeholder=\"\" value=\"\" autocomplete=\"username\">
\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Login already used"]), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 33
        echo twig_call_macro($macros["macrosuser"], "macro_passwordfield", [0], 33, $context, $this->getSourceContext());
        echo "


\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Submit"]), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</form>

\t\t</div>
\t\t<script src=\"/js/settings_users.js\" type=\"text/javascript\"></script>

";
    }

    // line 48
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "user/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  117 => 38,  109 => 33,  102 => 29,  95 => 25,  86 => 19,  77 => 13,  70 => 9,  66 => 7,  62 => 6,  55 => 4,  51 => 3,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.twig\" %}
{% import \"user/macros.twig\" as macrosuser %}
{% block menu %}
\t{{ include('menu.twig') }}
{% endblock %}
{% block content %}

\t\t<div class=\"container\">
\t\t\t<h1>{{getText('Create a new user')}}</h1>

\t\t\t<form id=\"newuser\" action=\"/user/add\" id=\"formuploadcert\" enctype=\"multipart/form-data\" method=\"post\">
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"firstname\" class=\"col-sm-4 col-form-label\">{{getText('Firstname')}}</label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input id=\"firstname\" type=\"text\" name=\"firstname\" class=\"form-control\" placeholder=\"\" value=\"\" autocomplete=\"username\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"lastname\" class=\"col-sm-4 col-form-label\">{{getText('Lastname')}}</label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input id=\"lastname\" type=\"text\" name=\"lastname\" class=\"form-control\" placeholder=\"\" value=\"\" autocomplete=\"username\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label for=\"login_new\" class=\"col-sm-4 col-form-label\">{{getText('Login')}}</label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input id=\"login_new\" type=\"text\" name=\"login\" class=\"form-control\" placeholder=\"\" value=\"\" autocomplete=\"username\">
\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t{{ getText('Login already used') }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{{ macrosuser.passwordfield(0) }}


\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"{{getText('Submit')}}\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</form>

\t\t</div>
\t\t<script src=\"/js/settings_users.js\" type=\"text/javascript\"></script>

{% endblock %}
{% block footer %}{% endblock %}
", "user/add.twig", "C:\\Users\\chris\\Documents\\VSCode\\slim4Template\\resources\\views\\user\\add.twig");
    }
}
