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

/* menu.twig */
class __TwigTemplate_df632f1a75cbf6078fe7cd3cf7698a1f3a622cd7c6da63d85dd489272dde20d5 extends Template
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
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg background-secondary\">
    <div class=\"container-fluid\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-brand\" href=\"#\"><i class=\"far fa-user\"></i></a>
            <a class=\"navbar-brand\" href=\"/auth/signout\"><i class=\"fas fa-sign-out-alt\"></i></a>
        </div>
             <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item\">
                    <a link=\"/user/all.html\" id=\"recent\" class=\"nav-link \" href=\"/user/all.html\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Users Management"]), "html", null, true);
        echo "</a>
                </li>

               

                <li class=\"nav-item dropdown\" >
                    <a id=\"menu2\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Menu 2"]), "html", null, true);
        echo "<span class=\"caret\"></span></a>

                    <div class=\"dropdown-menu\" aria-labelledby=\"settings\">
                        <a class=\"dropdown-item\"  link=\"SubMenu 1\"   class=\"dropdown-item\" href=\"#\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["SubMenu 1"]), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\"  link=\"SubMenu 2\"   class=\"dropdown-item\" href=\"#\">";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["SubMenu 2"]), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\"  link=\"SubMenu 3\"   class=\"dropdown-item\" href=\"#\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["SubMenu 3"]), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\"  link=\"SubMenu 4\"   class=\"dropdown-item\" href=\"#\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["SubMenu 4"]), "html", null, true);
        echo "</a>
                       
                    </div> <!-- ./dropdown-menu-->

                </li> <!-- ./settings nav-item dropdown-->

            </ul>

                <form class=\"d-flex\" method=\"post\" action=\"/search/display/\">
                    <input name=\"searchstring\" class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Search"]), "html", null, true);
        echo "\" aria-label=\"Search\" id=\"search\">
                </form>

        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  62 => 21,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg background-secondary\">
    <div class=\"container-fluid\">
        <div class=\"navbar-brand\">
            <a class=\"navbar-brand\" href=\"#\"><i class=\"far fa-user\"></i></a>
            <a class=\"navbar-brand\" href=\"/auth/signout\"><i class=\"fas fa-sign-out-alt\"></i></a>
        </div>
             <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item\">
                    <a link=\"/user/all.html\" id=\"recent\" class=\"nav-link \" href=\"/user/all.html\">{{ getText('Users Management') }}</a>
                </li>

               

                <li class=\"nav-item dropdown\" >
                    <a id=\"menu2\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">{{ getText('Menu 2') }}<span class=\"caret\"></span></a>

                    <div class=\"dropdown-menu\" aria-labelledby=\"settings\">
                        <a class=\"dropdown-item\"  link=\"SubMenu 1\"   class=\"dropdown-item\" href=\"#\">{{ getText('SubMenu 1') }}</a>
                        <a class=\"dropdown-item\"  link=\"SubMenu 2\"   class=\"dropdown-item\" href=\"#\">{{ getText('SubMenu 2') }}</a>
                        <a class=\"dropdown-item\"  link=\"SubMenu 3\"   class=\"dropdown-item\" href=\"#\">{{ getText('SubMenu 3') }}</a>
                        <a class=\"dropdown-item\"  link=\"SubMenu 4\"   class=\"dropdown-item\" href=\"#\">{{ getText('SubMenu 4') }}</a>
                       
                    </div> <!-- ./dropdown-menu-->

                </li> <!-- ./settings nav-item dropdown-->

            </ul>

                <form class=\"d-flex\" method=\"post\" action=\"/search/display/\">
                    <input name=\"searchstring\" class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"{{ getText('Search') }}\" aria-label=\"Search\" id=\"search\">
                </form>

        </div>
    </div>
</nav>", "menu.twig", "C:\\Users\\chris\\Documents\\VSCode\\slim4Template\\resources\\views\\menu.twig");
    }
}
