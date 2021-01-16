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

/* javascripts.twig */
class __TwigTemplate_0f2c13030f6809099e5add6dd5771677402605befa6888fdf3ededa411b00d04 extends Template
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
        echo "<script src=\"/js/flashmessages.js\"></script>
<script src=\"/js/global_functions.js\"></script>
<script src=\"/js/settings_users.js\"></script>";
    }

    public function getTemplateName()
    {
        return "javascripts.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"/js/flashmessages.js\"></script>
<script src=\"/js/global_functions.js\"></script>
<script src=\"/js/settings_users.js\"></script>", "javascripts.twig", "C:\\Users\\chris\\Documents\\VSCode\\slim4Template\\resources\\views\\javascripts.twig");
    }
}
