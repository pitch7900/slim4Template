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

/* templates/partials/flash.twig */
class __TwigTemplate_f77667fcabc2482138c663b2ddd2779f18aa431f189f030de01da2bf221b44d2 extends Template
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
        // line 10
        echo "
";
        // line 11
        $macros["macro"] = $this->macros["macro"] = $this;
        // line 12
        echo "
";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "primary"], "method", false, false, false, 13)) {
            // line 14
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "primary"], "method", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                echo "\t\t";
                echo twig_call_macro($macros["macro"], "macro_popup", ["primary", $context["message"]], 15, $context, $this->getSourceContext());
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        echo "
";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "success"], "method", false, false, false, 19)) {
            // line 20
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "success"], "method", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                echo "\t\t";
                echo twig_call_macro($macros["macro"], "macro_popup", ["success", $context["message"]], 21, $context, $this->getSourceContext());
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 24
        echo "
";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "danger"], "method", false, false, false, 25)) {
            // line 26
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "danger"], "method", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 27
                echo "\t\t";
                echo twig_call_macro($macros["macro"], "macro_popup", ["danger", $context["message"]], 27, $context, $this->getSourceContext());
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 30
        echo "
";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "warning"], "method", false, false, false, 31)) {
            // line 32
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "warning"], "method", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                echo "\t\t";
                echo twig_call_macro($macros["macro"], "macro_popup", ["warning", $context["message"]], 33, $context, $this->getSourceContext());
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 36
        echo "
";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "info"], "method", false, false, false, 37)) {
            // line 38
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "info"], "method", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 39
                echo "\t\t";
                echo twig_call_macro($macros["macro"], "macro_popup", ["info", $context["message"]], 39, $context, $this->getSourceContext());
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 42
        echo "
";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "light"], "method", false, false, false, 43)) {
            // line 44
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "light"], "method", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 45
                echo "\t\t";
                echo twig_call_macro($macros["macro"], "macro_popup", ["light", $context["message"]], 45, $context, $this->getSourceContext());
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 48
        echo "
";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "dark"], "method", false, false, false, 49)) {
            // line 50
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getMessage", [0 => "dark"], "method", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 51
                echo "\t\t";
                echo twig_call_macro($macros["macro"], "macro_popup", ["dark", $context["message"]], 51, $context, $this->getSourceContext());
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 1
    public function macro_popup($__level__ = null, $__message__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "level" => $__level__,
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "\t<div class=\" alert alert-";
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo " alert-dismissible fade show\" role=\"alert\">
\t\t<strong>";
            // line 3
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</strong>
\t\t<button type=\"button\" class=\"close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t</button>
\t</div>

";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "templates/partials/flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 3,  198 => 2,  184 => 1,  172 => 51,  167 => 50,  165 => 49,  162 => 48,  152 => 45,  147 => 44,  145 => 43,  142 => 42,  132 => 39,  127 => 38,  125 => 37,  122 => 36,  112 => 33,  107 => 32,  105 => 31,  102 => 30,  92 => 27,  87 => 26,  85 => 25,  82 => 24,  72 => 21,  67 => 20,  65 => 19,  62 => 18,  52 => 15,  47 => 14,  45 => 13,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro popup(level,message) %}
\t<div class=\" alert alert-{{level}} alert-dismissible fade show\" role=\"alert\">
\t\t<strong>{{message}}</strong>
\t\t<button type=\"button\" class=\"close\" data-bs-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t</button>
\t</div>

{% endmacro %}

{% import _self as macro %}

{% if notification.getMessage('primary') %}
\t{% for message in notification.getMessage('primary') %}
\t\t{{macro.popup('primary', message)}}
\t{% endfor %}
{% endif  %}

{% if notification.getMessage('success') %}
\t{% for message in notification.getMessage('success') %}
\t\t{{macro.popup('success',message)}}
\t{% endfor %}
{% endif  %}

{% if notification.getMessage('danger') %}
\t{% for message in notification.getMessage('danger') %}
\t\t{{macro.popup('danger',message)}}
\t{% endfor %}
{% endif  %}

{% if notification.getMessage('warning') %}
\t{% for message in notification.getMessage('warning') %}
\t\t{{macro.popup('warning',message)}}
\t{% endfor %}
{% endif  %}

{% if notification.getMessage('info') %}
\t{% for message in notification.getMessage('info') %}
\t\t{{macro.popup('info',message)}}
\t{% endfor %}
{% endif  %}

{% if notification.getMessage('light') %}
\t{% for message in notification.getMessage('light') %}
\t\t{{macro.popup('light',message)}}
\t{% endfor %}
{% endif  %}

{% if notification.getMessage('dark') %}
\t{% for message in notification.getMessage('dark') %}
\t\t{{macro.popup('dark',message)}}
\t{% endfor %}
{% endif  %}
", "templates/partials/flash.twig", "C:\\Users\\chris\\Documents\\VSCode\\slim4Template\\resources\\views\\templates\\partials\\flash.twig");
    }
}
