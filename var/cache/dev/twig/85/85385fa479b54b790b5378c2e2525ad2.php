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

/* Admin/pdfrapport.html.twig */
class __TwigTemplate_fdcd72b5afca3a8833d9c8fb8904dafb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/pdfrapport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/pdfrapport.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Votre Page</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    text-align: center;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.page-content {
    width: 100%; /* Utiliser toute la largeur de l'écran */
    height: 100%; /* Utiliser toute la hauteur de l'écran */
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #009688;
}

b {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

h2 {
    color: #009688;
}

h3 {
    color: #009688;
}
.logo {
            position: absolute;
            top: 10px;
            right: 10px;
            max-width: 100px; /* Ajustez la largeur maximale selon vos besoins */
            height: auto; /* Pour conserver les proportions de l'image */
        }
    </style>
</head>
<body>
    <div class=\"page-content\">
        <h1>VOTRE RAPPORT MEDICAL</h1>
        <b>SOUS LE NOM : ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 58, $this->source); })()), "rendezvous", [], "any", false, false, false, 58), "html", null, true);
        echo "</b>
        <b>TYPE DE RAPPORT : ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59), "html", null, true);
        echo "</b>
        <b>DESCRIPTION : ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 60, $this->source); })()), "note", [], "any", false, false, false, 60), "html", null, true);
        echo "</b>
        <h3>A BIENTOT !</h3>
        <h3>VISITA</h3>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/pdfrapport.html.twig";
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
        return array (  110 => 60,  106 => 59,  102 => 58,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Votre Page</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    text-align: center;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.page-content {
    width: 100%; /* Utiliser toute la largeur de l'écran */
    height: 100%; /* Utiliser toute la hauteur de l'écran */
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #009688;
}

b {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

h2 {
    color: #009688;
}

h3 {
    color: #009688;
}
.logo {
            position: absolute;
            top: 10px;
            right: 10px;
            max-width: 100px; /* Ajustez la largeur maximale selon vos besoins */
            height: auto; /* Pour conserver les proportions de l'image */
        }
    </style>
</head>
<body>
    <div class=\"page-content\">
        <h1>VOTRE RAPPORT MEDICAL</h1>
        <b>SOUS LE NOM : {{r.rendezvous}}</b>
        <b>TYPE DE RAPPORT : {{r.type}}</b>
        <b>DESCRIPTION : {{r.note}}</b>
        <h3>A BIENTOT !</h3>
        <h3>VISITA</h3>
    </div>
</body>
</html>", "Admin/pdfrapport.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\Admin\\pdfrapport.html.twig");
    }
}
