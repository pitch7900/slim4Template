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

/* header.twig */
class __TwigTemplate_cb1d9414b554d0bf337bc63a466ffd7b107ed24f2d5536a5e46afc766fa5d06e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<meta name=\"msapplication-TileColor\" content=\"#da532c\">
<meta name=\"theme-color\" content=\"#ffffff\">
<title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 14
        echo "<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>

";
        // line 17
        echo "<link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>


";
        // line 22
        echo "<script src=\"https://unpkg.com/@popperjs/core@2\"></script>

";
        // line 25
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW\" crossorigin=\"anonymous\"></script>


";
        // line 30
        echo "<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.1/css/all.css\">


<!-- Custom Dark Theme styles for this template -->
<link href=\"/css/themes/colors.css\" rel=\"stylesheet\">
<link href=\"/css/themes/dark.css\" rel=\"stylesheet\">
<link href=\"/css/themes/light.css\" rel=\"stylesheet\">
<link href=\"/css/theme.css\" rel=\"stylesheet\">
";
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "SlimTemplates";
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 11,  75 => 30,  69 => 25,  65 => 22,  59 => 17,  55 => 14,  50 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<meta name=\"msapplication-TileColor\" content=\"#da532c\">
<meta name=\"theme-color\" content=\"#ffffff\">
<title>{% block title %}SlimTemplates{% endblock %}</title>

{#JQUERY#}
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>

{#JQUERY UI#}
<link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>


{#POPPERS for BOOTSTRAP#}
<script src=\"https://unpkg.com/@popperjs/core@2\"></script>

{#BOOTSTRAP#}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW\" crossorigin=\"anonymous\"></script>


{#FONTAWESOME#}
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.1/css/all.css\">


<!-- Custom Dark Theme styles for this template -->
<link href=\"/css/themes/colors.css\" rel=\"stylesheet\">
<link href=\"/css/themes/dark.css\" rel=\"stylesheet\">
<link href=\"/css/themes/light.css\" rel=\"stylesheet\">
<link href=\"/css/theme.css\" rel=\"stylesheet\">
", "header.twig", "C:\\Users\\chris\\Documents\\VSCode\\slim4Template\\resources\\views\\header.twig");
    }
}
