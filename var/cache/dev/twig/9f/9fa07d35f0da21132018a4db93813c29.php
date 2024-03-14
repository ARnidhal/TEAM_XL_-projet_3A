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

/* reclamation/pdf_template.html.twig */
class __TwigTemplate_856f04b7b87b11bd6c1901e63cde78f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf_template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réclamation ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
        }
        h1 {
            font-size: 32px;
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #f2f2f2;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            font-size: 16px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .icon {
            font-size: 20px;
            margin-right: 5px;
        }
        .icon-green {
            color: #4CAF50;
        }
        .icon-red {
            color: #f44336;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Réclamation ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79), "html", null, true);
        echo "</h1>
        <table>
            <tr>
                <th><i class=\"fas fa-id-badge icon icon-green\"></i>ID</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th><i class=\"fas fa-tags icon icon-green\"></i>nom et prénom</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 87, $this->source); })()), "nom", [], "any", false, false, false, 87), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th><i class=\"fas fa-tags icon icon-green\"></i>Catégorie</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 91, $this->source); })()), "categorie", [], "any", false, false, false, 91), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th><i class=\"fas fa-heading icon icon-green\"></i>Sujet</th>
                <td>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 95, $this->source); })()), "sujet", [], "any", false, false, false, 95), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th><i class=\"fas fa-comment-alt icon icon-green\"></i>Description</th>
                <td>";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 99, $this->source); })()), "description", [], "any", false, false, false, 99), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th><i class=\"far fa-clock icon icon-green\"></i>Date de Soumission</th>
                <td>";
        // line 103
        ((twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 103, $this->source); })()), "subdate", [], "any", false, false, false, 103)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 103, $this->source); })()), "subdate", [], "any", false, false, false, 103), "Y-m-d H:i:s"), "html", null, true))) : (print ("Non spécifiée")));
        echo "</td>
            </tr>
        </table>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/pdf_template.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  168 => 103,  161 => 99,  154 => 95,  147 => 91,  140 => 87,  133 => 83,  126 => 79,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réclamation {{ reclamation.id }}</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
        }
        h1 {
            font-size: 32px;
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #f2f2f2;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
            font-size: 16px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .icon {
            font-size: 20px;
            margin-right: 5px;
        }
        .icon-green {
            color: #4CAF50;
        }
        .icon-red {
            color: #f44336;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Réclamation {{ reclamation.id }}</h1>
        <table>
            <tr>
                <th><i class=\"fas fa-id-badge icon icon-green\"></i>ID</th>
                <td>{{ reclamation.id }}</td>
            </tr>
            <tr>
                <th><i class=\"fas fa-tags icon icon-green\"></i>nom et prénom</th>
                <td>{{ reclamation.nom }}</td>
            </tr>
            <tr>
                <th><i class=\"fas fa-tags icon icon-green\"></i>Catégorie</th>
                <td>{{ reclamation.categorie }}</td>
            </tr>
            <tr>
                <th><i class=\"fas fa-heading icon icon-green\"></i>Sujet</th>
                <td>{{ reclamation.sujet }}</td>
            </tr>
            <tr>
                <th><i class=\"fas fa-comment-alt icon icon-green\"></i>Description</th>
                <td>{{ reclamation.description }}</td>
            </tr>
            <tr>
                <th><i class=\"far fa-clock icon icon-green\"></i>Date de Soumission</th>
                <td>{{ reclamation.subdate ? reclamation.subdate|date('Y-m-d H:i:s') : 'Non spécifiée' }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
", "reclamation/pdf_template.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\reclamation\\pdf_template.html.twig");
    }
}
