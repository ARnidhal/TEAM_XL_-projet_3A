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

/* reservationservice/chart.html.twig */
class __TwigTemplate_3982b0ba0e0a7654ed051c970e1d725e extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationservice/chart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationservice/chart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservationservice/chart.html.twig", 1);
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
        echo "
<main>
    <main>
        <div class=\"container\">
           <div></div>
           <dir></dir>
           <div></div>
           <div></div>
           <div class=\"chart-title\">RESERVATION SERVICE CHART</div>
            <div class=\"chart-container\">
                <canvas id=\"serviceChart\"></canvas>
            </div>
           
        </div>
    
        <style>
            
    
            main {
                padding: 20px;
            }
    
            .container {
                max-width: 800px;
                margin: auto;
                text-align: center;
            }
    
            .chart-title {
                margin-bottom: 20px;
                color: #333;
                font-size: 24px; /* Adjust font size as needed */
                font-weight: bold; /* Make the title bold */
            }
    
            .chart-container {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }
        </style>

    <script>
        var serviceNames = ";
        // line 48
        echo (isset($context["serviceNames"]) || array_key_exists("serviceNames", $context) ? $context["serviceNames"] : (function () { throw new RuntimeError('Variable "serviceNames" does not exist.', 48, $this->source); })());
        echo ";
        var reservationCounts = ";
        // line 49
        echo (isset($context["reservationCounts"]) || array_key_exists("reservationCounts", $context) ? $context["reservationCounts"] : (function () { throw new RuntimeError('Variable "reservationCounts" does not exist.', 49, $this->source); })());
        echo ";

        var ctx = document.getElementById('serviceChart').getContext('2d');
        var serviceChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: serviceNames,
                datasets: [{
                    label: 'Number of Reservations',
                    data: reservationCounts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: true,
                    position: 'right',
                    labels: {
                        fontColor: '#333',
                    },
                },
                title: {
                    display: false,
                },
                scale: {
                    ticks: {
                        beginAtZero: true,
                        fontColor: '#333',
                    },
                    gridLines: {
                        color: 'rgba(0, 0, 0, 0.1)',
                    },
                },
            }
        });
    </script>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservationservice/chart.html.twig";
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
        return array (  118 => 49,  114 => 48,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<main>
    <main>
        <div class=\"container\">
           <div></div>
           <dir></dir>
           <div></div>
           <div></div>
           <div class=\"chart-title\">RESERVATION SERVICE CHART</div>
            <div class=\"chart-container\">
                <canvas id=\"serviceChart\"></canvas>
            </div>
           
        </div>
    
        <style>
            
    
            main {
                padding: 20px;
            }
    
            .container {
                max-width: 800px;
                margin: auto;
                text-align: center;
            }
    
            .chart-title {
                margin-bottom: 20px;
                color: #333;
                font-size: 24px; /* Adjust font size as needed */
                font-weight: bold; /* Make the title bold */
            }
    
            .chart-container {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }
        </style>

    <script>
        var serviceNames = {{ serviceNames | raw }};
        var reservationCounts = {{ reservationCounts | raw }};

        var ctx = document.getElementById('serviceChart').getContext('2d');
        var serviceChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: serviceNames,
                datasets: [{
                    label: 'Number of Reservations',
                    data: reservationCounts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: true,
                    position: 'right',
                    labels: {
                        fontColor: '#333',
                    },
                },
                title: {
                    display: false,
                },
                scale: {
                    ticks: {
                        beginAtZero: true,
                        fontColor: '#333',
                    },
                    gridLines: {
                        color: 'rgba(0, 0, 0, 0.1)',
                    },
                },
            }
        });
    </script>
</main>
{% endblock %}
", "reservationservice/chart.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\reservationservice\\chart.html.twig");
    }
}
