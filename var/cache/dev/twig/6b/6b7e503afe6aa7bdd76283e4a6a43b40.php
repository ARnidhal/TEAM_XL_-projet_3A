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

/* evenement/PdfEvenement.html.twig */
class __TwigTemplate_3ba996f2a5e7ef454bcfc3fdb7897266 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/PdfEvenement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/PdfEvenement.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Liste des événements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: right;
            padding: 10px;
        }

        .logo {
            text-align: center;
            margin-top: 20px;
        }

        .logo img {
            width: 100px;
            height: 100px;
        }

        .title {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        Date et heure actuelles : ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo "
    </div>

    <div class=\"logo\">
        <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/logo4.png"), "html", null, true);
        echo "\" alt=\"Logo\">
    </div>

    <div class=\"title\">
        LISTE DES ÉVÉNEMENTS
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Lieu</th>
                    <th>Nom du Sponsor</th>
                    <th>Date de Début</th>
                    <th>Date de Fin</th>
                    <th>Nombre de Participants</th>
                </tr>  
            </thead>
            <tbody>
                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 79
            echo "                    <tr>                                        
                        <td><img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["evenement"], "imageEvenement", [], "any", false, false, false, 80))), "html", null, true);
            echo "\" style=\"width:150px; height:150px;\" alt=\"\"></td>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "typeEvenement", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nomEvenement", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                        <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieuEvenement", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "Sponsor", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                        <td>";
            // line 85
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 85)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 85), "Y-m-d H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 86
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 86)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 86), "Y-m-d H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nbParticipants", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            </tbody>
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
        return "evenement/PdfEvenement.html.twig";
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
        return array (  172 => 90,  163 => 87,  159 => 86,  155 => 85,  151 => 84,  147 => 83,  143 => 82,  139 => 81,  135 => 80,  132 => 79,  128 => 78,  103 => 56,  96 => 52,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Liste des événements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: right;
            padding: 10px;
        }

        .logo {
            text-align: center;
            margin-top: 20px;
        }

        .logo img {
            width: 100px;
            height: 100px;
        }

        .title {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        Date et heure actuelles : {{ \"now\"|date('Y-m-d H:i') }}
    </div>

    <div class=\"logo\">
        <img src=\"{{ asset('uploads/logo4.png') }}\" alt=\"Logo\">
    </div>

    <div class=\"title\">
        LISTE DES ÉVÉNEMENTS
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Lieu</th>
                    <th>Nom du Sponsor</th>
                    <th>Date de Début</th>
                    <th>Date de Fin</th>
                    <th>Nombre de Participants</th>
                </tr>  
            </thead>
            <tbody>
                {% for evenement in evenements %}
                    <tr>                                        
                        <td><img src=\"{{ asset('uploads/' ~ evenement.imageEvenement) }}\" style=\"width:150px; height:150px;\" alt=\"\"></td>
                        <td>{{ evenement.typeEvenement }}</td>
                        <td>{{ evenement.nomEvenement }}</td>
                        <td>{{ evenement.lieuEvenement }}</td>
                        <td>{{ evenement.Sponsor }}</td>
                        <td>{{ evenement.dateDebut ? evenement.dateDebut|date('Y-m-d H:i') : '' }}</td>
                        <td>{{ evenement.dateFin ? evenement.dateFin|date('Y-m-d H:i') : '' }}</td>
                        <td>{{ evenement.nbParticipants }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</body>
</html>
", "evenement/PdfEvenement.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\evenement\\PdfEvenement.html.twig");
    }
}
