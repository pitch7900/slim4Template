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

/* user/macros.twig */
class __TwigTemplate_f68991672c1a560a191ac4d7f645bb4b9fe1f73e00909513d2c74bef04a2c20e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "
";
        // line 65
        echo "
";
        // line 97
        echo "
";
    }

    // line 2
    public function macro_user($__id__ = null, $__firstname__ = null, $__lastname__ = null, $__login__ = null, $__password__ = null, $__darkmode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "firstname" => $__firstname__,
            "lastname" => $__lastname__,
            "login" => $__login__,
            "password" => $__password__,
            "darkmode" => $__darkmode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "\t";
            if ((0 !== twig_compare(($context["id"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getuserid", [], "any", false, false, false, 3)))) {
                // line 4
                echo "\t\t";
                $context["background"] = "background-secondary";
                // line 5
                echo "
\t";
            } else {
                // line 7
                echo "\t\t";
                $context["background"] = "background-elevation";
                // line 8
                echo "\t\t";
                $context["current_user_text"] = " *";
                // line 9
                echo "\t";
            }
            // line 10
            echo "\t";
            $macros["macrosuser"] = $this;
            // line 11
            echo "\t";
            echo twig_call_macro($macros["macrosuser"], "macro_modal_change_password", [($context["id"] ?? null), ($context["login"] ?? null)], 11, $context, $this->getSourceContext());
            echo "
\t<div class=\"col-sm-12 col-md-4 col-lg-3\" id=\"accordionuser";
            // line 12
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">

\t\t<div class=\"card\">
\t\t\t<div class=\"card-header ";
            // line 15
            echo twig_escape_filter($this->env, ($context["background"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t<h5 class=\"my-0 font-weight-normal\">";
            // line 16
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, ($context["firstname"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, ($context["lastname"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, ($context["current_user_text"] ?? null), "html", null, true);
            echo "
\t\t\t\t</h5>


\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h6>";
            // line 24
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Login"]), "html", null, true);
            echo ":
\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, ($context["login"] ?? null), "html", null, true);
            echo "</h6>
\t\t\t\t";
            // line 26
            if ((null === ($context["password"] ?? null))) {
                // line 27
                echo "\t\t\t\t\t<h6>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Password not set"]), "html", null, true);
                echo "</h6>
\t\t\t\t";
            }
            // line 29
            echo "

\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_changecredentials_";
            // line 31
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Change credentials"]), "html", null, true);
            echo "
\t\t\t\t</button>
\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"darkmode\" onchange=\"change_user_darkmode(";
            // line 35
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo ");\" ";
            if (($context["darkmode"] ?? null)) {
                echo " checked ";
            }
            echo ">
\t\t\t\t\t<label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Dark mode"]), "html", null, true);
            echo "</label>
\t\t\t\t</div>


\t\t\t\t";
            // line 41
            echo "\t\t\t\t";
            if ((0 !== twig_compare(($context["id"] ?? null), twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getuserid", [], "any", false, false, false, 41)))) {
                // line 42
                echo "\t\t\t\t\t<button id=\"removeuser_";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-danger\" aria-label=\"Close\" onclick=\"delete_user(";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo ");\">
\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t";
                // line 44
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Delete"]), "html", null, true);
                echo "
\t\t\t\t\t</button>
\t\t\t\t";
            }
            // line 47
            echo "

\t\t\t</div>


\t\t</div>
\t</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 57
    public function macro_adduser(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 58
            echo "\t<a href=\"/user/add.html\">
\t\t<span style=\"font-size: 24px; color: lightgrey;\">
\t\t\t<i class=\"fas fa-plus-circle\"></i>
\t\t</span>
\t</a>

";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 66
    public function macro_passwordfield($__userid__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "userid" => $__userid__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 67
            echo "\t<div class=\"form-group row\">
\t\t<label for=\"password\" class=\"col-sm-4 col-form-label\">";
            // line 68
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Password"]), "html", null, true);
            echo "</label>
\t\t<div class=\"col-sm-8\">
\t\t\t<div class=\"input-group password-strength__input\">

\t\t\t\t<input id=\"password_";
            // line 72
            echo twig_escape_filter($this->env, ($context["userid"] ?? null), "html", null, true);
            echo "\" type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"\" autocomplete=\"current-password\">
\t\t\t\t<button class=\"password-strength__visibility btn btn-secondary\" type=\"button\">
\t\t\t\t\t<span class=\"password-strength__visibility-icon invisible\" data-visible=\"hidden\">
\t\t\t\t\t\t<i class=\"fas fa-eye-slash\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"password-strength__visibility-icon \" data-visible=\"visible\">
\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"password-strength__bar-block progress mb-4\">
\t\t<div class=\"password-strength__bar progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t</div>
\t<div class=\"form-group row\">
\t\t<label for=\"confirm_password\" class=\"col-sm-4 col-form-label\">";
            // line 88
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Confirm Password"]), "html", null, true);
            echo "</label>
\t\t<div class=\"col-sm-8\">
\t\t\t<input id=\"confirm_password_";
            // line 90
            echo twig_escape_filter($this->env, ($context["userid"] ?? null), "html", null, true);
            echo "\" type=\"password\" name=\"confirm_password\" placeholder=\"\" class=\"form-control\" autocomplete=\"current-password\">
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t";
            // line 92
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Password Missmatch"]), "html", null, true);
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 98
    public function macro_modal_change_password($__id__ = null, $__login__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "login" => $__login__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 99
            echo "\t";
            $macros["macrosuser"] = $this;
            // line 100
            echo "\t<div class=\"modal fade\" id=\"modal_changecredentials_";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" role=\"dialog\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">";
            // line 104
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Set Credentials"]), "html", null, true);
            echo "</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body mx-auto\">
\t\t\t\t\t<form action=\"/user/setcredentials/";
            // line 108
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"login_";
            // line 110
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"col-sm-4 col-form-label\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Login"]), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<input id=\"login_";
            // line 112
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" type=\"text\" name=\"login\" class=\"form-control\" placeholder=\"\" value=\"";
            echo twig_escape_filter($this->env, ($context["login"] ?? null), "html", null, true);
            echo "\" autocomplete=\"username\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 115
            echo twig_call_macro($macros["macrosuser"], "macro_passwordfield", [($context["id"] ?? null)], 115, $context, $this->getSourceContext());
            echo "

\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Submit\">

\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
            // line 119
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Close"]), "html", null, true);
            echo "</button>

\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "user/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 119,  345 => 115,  337 => 112,  330 => 110,  325 => 108,  318 => 104,  310 => 100,  307 => 99,  293 => 98,  279 => 92,  274 => 90,  269 => 88,  250 => 72,  243 => 68,  240 => 67,  227 => 66,  212 => 58,  200 => 57,  184 => 47,  178 => 44,  170 => 42,  167 => 41,  160 => 36,  152 => 35,  146 => 32,  142 => 31,  138 => 29,  132 => 27,  130 => 26,  126 => 25,  122 => 24,  113 => 18,  109 => 17,  103 => 16,  99 => 15,  93 => 12,  88 => 11,  85 => 10,  82 => 9,  79 => 8,  76 => 7,  72 => 5,  69 => 4,  66 => 3,  48 => 2,  43 => 97,  40 => 65,  37 => 55,);
    }

    public function getSourceContext()
    {
        return new Source("{#Return a card for a user#}
{% macro user(id,firstname,lastname,login,password,darkmode) %}
\t{% if id != user.getuserid %}
\t\t{% set background = \"background-secondary\" %}

\t{% else %}
\t\t{% set background = \"background-elevation\" %}
\t\t{% set current_user_text = \" *\" %}
\t{% endif %}
\t{% import _self as macrosuser %}
\t{{macrosuser.modal_change_password(id,login)}}
\t<div class=\"col-sm-12 col-md-4 col-lg-3\" id=\"accordionuser{{id}}\">

\t\t<div class=\"card\">
\t\t\t<div class=\"card-header {{background}}\">
\t\t\t\t<h5 class=\"my-0 font-weight-normal\">{{id}}:{{firstname}}
\t\t\t\t\t{{lastname}}
\t\t\t\t\t{{current_user_text}}
\t\t\t\t</h5>


\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<h6>{{ getText('Login') }}:
\t\t\t\t\t{{login}}</h6>
\t\t\t\t{% if password is null %}
\t\t\t\t\t<h6>{{ getText('Password not set') }}</h6>
\t\t\t\t{% endif %}


\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_changecredentials_{{id}}\">
\t\t\t\t\t{{ getText('Change credentials') }}
\t\t\t\t</button>
\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"darkmode\" onchange=\"change_user_darkmode({{id}});\" {% if darkmode %} checked {% endif %}>
\t\t\t\t\t<label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">{{ getText('Dark mode') }}</label>
\t\t\t\t</div>


\t\t\t\t{#Can't delete yourself#}
\t\t\t\t{% if id != user.getuserid %}
\t\t\t\t\t<button id=\"removeuser_{{id}}\" type=\"button\" class=\"btn btn-danger\" aria-label=\"Close\" onclick=\"delete_user({{id}});\">
\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t{{getText('Delete')}}
\t\t\t\t\t</button>
\t\t\t\t{% endif %}


\t\t\t</div>


\t\t</div>
\t</div>
{% endmacro %}

{#adduser#}
{% macro adduser() %}
\t<a href=\"/user/add.html\">
\t\t<span style=\"font-size: 24px; color: lightgrey;\">
\t\t\t<i class=\"fas fa-plus-circle\"></i>
\t\t</span>
\t</a>

{% endmacro %}

{% macro passwordfield(userid) %}
\t<div class=\"form-group row\">
\t\t<label for=\"password\" class=\"col-sm-4 col-form-label\">{{getText('Password')}}</label>
\t\t<div class=\"col-sm-8\">
\t\t\t<div class=\"input-group password-strength__input\">

\t\t\t\t<input id=\"password_{{userid}}\" type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"\" autocomplete=\"current-password\">
\t\t\t\t<button class=\"password-strength__visibility btn btn-secondary\" type=\"button\">
\t\t\t\t\t<span class=\"password-strength__visibility-icon invisible\" data-visible=\"hidden\">
\t\t\t\t\t\t<i class=\"fas fa-eye-slash\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"password-strength__visibility-icon \" data-visible=\"visible\">
\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"password-strength__bar-block progress mb-4\">
\t\t<div class=\"password-strength__bar progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t</div>
\t<div class=\"form-group row\">
\t\t<label for=\"confirm_password\" class=\"col-sm-4 col-form-label\">{{getText('Confirm Password')}}</label>
\t\t<div class=\"col-sm-8\">
\t\t\t<input id=\"confirm_password_{{userid}}\" type=\"password\" name=\"confirm_password\" placeholder=\"\" class=\"form-control\" autocomplete=\"current-password\">
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t{{ getText('Password Missmatch') }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endmacro %}

{% macro modal_change_password(id,login) %}
\t{% import _self as macrosuser %}
\t<div class=\"modal fade\" id=\"modal_changecredentials_{{id}}\" role=\"dialog\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\">{{ getText('Set Credentials')}}</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body mx-auto\">
\t\t\t\t\t<form action=\"/user/setcredentials/{{id}}\" method=\"post\">
\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t<label for=\"login_{{id}}\" class=\"col-sm-4 col-form-label\">{{ getText('Login')}}</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<input id=\"login_{{id}}\" type=\"text\" name=\"login\" class=\"form-control\" placeholder=\"\" value=\"{{login}}\" autocomplete=\"username\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ macrosuser.passwordfield(id) }}

\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Submit\">

\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ getText('Close')}}</button>

\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
{% endmacro %}
", "user/macros.twig", "C:\\Users\\chris\\Documents\\VSCode\\slim4Template\\resources\\views\\user\\macros.twig");
    }
}
