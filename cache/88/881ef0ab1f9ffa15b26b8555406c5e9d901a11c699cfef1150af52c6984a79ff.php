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

/* auth/signin.twig */
class __TwigTemplate_622e790d01422d1a2c61bb8c7defccc36fea5562c41b565c6d521526cd5a7b17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("main.twig", "auth/signin.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t<form class=\"form-signin\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getRuntime('Slim\Views\TwigRuntimeExtension')->urlFor("auth.signin.post"), "html", null, true);
        echo "\" method=\"post\">

\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
\t\t<label for=\"login\" class=\"sr-only\">Login</label>
\t\t<input
\t\ttype=\"login\" id=\"login\" name=\"login\" class=\"form-control\" placeholder=\"Login\" autocomplete=\"username\" required autofocus>


\t\t";
        // line 15
        echo "

\t\t<div class=\"input-group password-strength__input\">

\t\t\t<input id=\"password\" type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\" autocomplete=\"current-password\">
\t\t\t<button class=\"password-strength__visibility btn btn-outline-secondary\" type=\"button\">
\t\t\t\t<span class=\"password-strength__visibility-icon invisible\" data-visible=\"hidden\">
\t\t\t\t\t<i class=\"fas fa-eye-slash\"></i>
\t\t\t\t</span>
\t\t\t\t<span class=\"password-strength__visibility-icon \" data-visible=\"visible\">
\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t</span>
\t\t\t</button>
\t\t</div>
\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>

\t</form>

<script src=\"/js/settings_users.js\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "auth/signin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.twig\" %}

{% block content %}

\t<form class=\"form-signin\" action=\"{{ url_for('auth.signin.post') }}\" method=\"post\">

\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
\t\t<label for=\"login\" class=\"sr-only\">Login</label>
\t\t<input
\t\ttype=\"login\" id=\"login\" name=\"login\" class=\"form-control\" placeholder=\"Login\" autocomplete=\"username\" required autofocus>


\t\t{# <label for=\"password\" class=\"sr-only\">Password</label>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\" autocomplete=\"current-password\" required> #}


\t\t<div class=\"input-group password-strength__input\">

\t\t\t<input id=\"password\" type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\" autocomplete=\"current-password\">
\t\t\t<button class=\"password-strength__visibility btn btn-outline-secondary\" type=\"button\">
\t\t\t\t<span class=\"password-strength__visibility-icon invisible\" data-visible=\"hidden\">
\t\t\t\t\t<i class=\"fas fa-eye-slash\"></i>
\t\t\t\t</span>
\t\t\t\t<span class=\"password-strength__visibility-icon \" data-visible=\"visible\">
\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t</span>
\t\t\t</button>
\t\t</div>
\t\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>

\t</form>

<script src=\"/js/settings_users.js\" type=\"text/javascript\"></script>
{% endblock %}
", "auth/signin.twig", "C:\\Users\\chris\\Documents\\VSCode\\slim4Template\\resources\\views\\auth\\signin.twig");
    }
}
