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

/* user/docchart.html.twig */
class __TwigTemplate_5dfb47ac648bdf15f84a11744267b7ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/docchart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/docchart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/docchart.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<main id=\"main\" class=\"main\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <div class=\"pagetitle\">
      <h1>Doctor chart</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Charts</li>
          <li class=\"breadcrumb-item active\">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-12\">

          <div class=\"card\">
            <div class=\"card-body\">
            
              <h5 class=\"card-title\">Datatables</h5>
            

<div class=\"chart-container\">
<!-- Render the chart -->
<canvas id=\"specialtiesChart\" width=\"400\" height=\"400\"></canvas>

<script>
    var specialtyLabels = ";
        // line 32
        echo (isset($context["specialtyLabels"]) || array_key_exists("specialtyLabels", $context) ? $context["specialtyLabels"] : (function () { throw new RuntimeError('Variable "specialtyLabels" does not exist.', 32, $this->source); })());
        echo ";
    var specialtyValues = ";
        // line 33
        echo (isset($context["specialtyValues"]) || array_key_exists("specialtyValues", $context) ? $context["specialtyValues"] : (function () { throw new RuntimeError('Variable "specialtyValues" does not exist.', 33, $this->source); })());
        echo ";

    // Create a chart
    var ctx = document.getElementById('specialtiesChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: specialtyLabels,
            datasets: [{
                label: 'Specialties Distribution',
                data: specialtyValues,
                backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 2, // Increase the border width for a pseudo-3D effect
                hoverOffset: 8 
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });


    
</script>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


</main><!-- End #main -->
<style>
    .chart-container {
    width: 300px; /* Adjust the width as needed */
    height: 300px; /* Adjust the height as needed */
    margin: 0 auto; /* Center the container horizontally */
}

#specialtiesChart {
    width: 100%;
    height: 100%;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/docchart.html.twig";
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
        return array (  102 => 33,  98 => 32,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/docchart.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
<main id=\"main\" class=\"main\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <div class=\"pagetitle\">
      <h1>Doctor chart</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Charts</li>
          <li class=\"breadcrumb-item active\">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-12\">

          <div class=\"card\">
            <div class=\"card-body\">
            
              <h5 class=\"card-title\">Datatables</h5>
            

<div class=\"chart-container\">
<!-- Render the chart -->
<canvas id=\"specialtiesChart\" width=\"400\" height=\"400\"></canvas>

<script>
    var specialtyLabels = {{ specialtyLabels|raw }};
    var specialtyValues = {{ specialtyValues|raw }};

    // Create a chart
    var ctx = document.getElementById('specialtiesChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: specialtyLabels,
            datasets: [{
                label: 'Specialties Distribution',
                data: specialtyValues,
                backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 2, // Increase the border width for a pseudo-3D effect
                hoverOffset: 8 
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });


    
</script>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


</main><!-- End #main -->
<style>
    .chart-container {
    width: 300px; /* Adjust the width as needed */
    height: 300px; /* Adjust the height as needed */
    margin: 0 auto; /* Center the container horizontally */
}

#specialtiesChart {
    width: 100%;
    height: 100%;
}
</style>
{% endblock %}", "user/docchart.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\docchart.html.twig");
    }
}
