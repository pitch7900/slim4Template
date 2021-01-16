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

/* user/all.twig */
class __TwigTemplate_9ebdb8f50d29a00f7529dea7489304427de658344f7866a8b4471f90951f1231 extends Template
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
        $macros["macrouser"] = $this->macros["macrouser"] = $this->loadTemplate("user/macros.twig", "user/all.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("main.twig", "user/all.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "menu.twig");
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
        
   
        <div class=\"container-fluid\">
            <h1>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getText')->getCallable(), ["Users Management"]), "html", null, true);
        echo twig_call_macro($macros["macrouser"], "macro_adduser", [], 9, $context, $this->getSourceContext());
        echo "</h1>
            <div class=\"row\">
        
                
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["users"] ?? null), "getlist", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 14
            echo "                ";
            echo twig_var_dump($this->env, $context, ...[0 => $context["user"]]);
            echo "
                    ";
            // line 15
            echo twig_call_macro($macros["macrouser"], "macro_user", [twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, $context["user"], "login", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 15), twig_get_attribute($this->env, $this->source, $context["user"], "darkmode", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                
            </div>
            
        </div>
        
        <script src=\"/js/settings_users.js\" type=\"text/javascript\"></script>
    
";
    }

    // line 25
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    
";
    }

    public function getTemplateName()
    {
        return "user/all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 26,  104 => 25,  93 => 17,  85 => 15,  80 => 14,  76 => 13,  68 => 9,  62 => 5,  58 => 4,  51 => 3,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.twig\" %}
{% import \"user/macros.twig\" as macrouser %}
{% block menu %}{{ include('menu.twig') }}{% endblock %}
{% block content %}

        
   
        <div class=\"container-fluid\">
            <h1>{{ getText('Users Management') }}{{macrouser.adduser()}}</h1>
            <div class=\"row\">
        
                
                {% for user in users.getlist%}
                {{ dump(user) }}
                    {{macrouser.user(user.id,user.firstname,user.lastname,user.login,user.password,user.darkmode)}}
                {% endfor %}
                
            </div>
            
        </div>
        
        <script src=\"/js/settings_users.js\" type=\"text/javascript\"></script>
    
{% endblock %}
{% block footer %}
    
{% endblock %}", "user/all.twig", "C:\\Users\\chris\\Documents\\VSCode\\slim4Template\\resources\\views\\user\\all.twig");
    }
}
