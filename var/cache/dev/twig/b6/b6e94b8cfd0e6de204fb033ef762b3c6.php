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

/* Admin/rendezvouschart.html.twig */
class __TwigTemplate_373d7b7990d02933ba48cc1caf36d7f7 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/rendezvouschart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/rendezvouschart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/rendezvouschart.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Data Tables</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Tables</li>
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
        <canvas id=\"barChart\" width=\"800\" height=\"400\"></canvas>
    </div>

    <script>
        var doctorAppointments = ";
        // line 32
        echo json_encode((isset($context["doctorAppointments"]) || array_key_exists("doctorAppointments", $context) ? $context["doctorAppointments"] : (function () { throw new RuntimeError('Variable "doctorAppointments" does not exist.', 32, $this->source); })()));
        echo ";

        var labels = doctorAppointments.map(appointment => appointment.doctorName);
        var data = doctorAppointments.map(appointment => appointment.appointmentsCount);

        var barColors = data.map(count => 'rgba(255, 99, 132, \${count / Math.max(...data)})');

        var ctx = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Doctor Appointments',
                    data: data,
                    backgroundColor: barColors,
                    borderColor: barColors.map(color => color.replace(/[^,]+(?=\\))/, '1')),
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Doctors',
                        },
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Number of Appointments',
                        },
                    },
                },
            }
        });
    </script>

</div>
</div>
</section>

 

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
        return "Admin/rendezvouschart.html.twig";
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
        return array (  96 => 32,  68 => 6,  58 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/front/rendezvouschart.html.twig #}

{% extends 'base.html.twig' %}

{% block body %}

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Data Tables</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Tables</li>
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
        <canvas id=\"barChart\" width=\"800\" height=\"400\"></canvas>
    </div>

    <script>
        var doctorAppointments = {{ doctorAppointments|json_encode|raw }};

        var labels = doctorAppointments.map(appointment => appointment.doctorName);
        var data = doctorAppointments.map(appointment => appointment.appointmentsCount);

        var barColors = data.map(count => 'rgba(255, 99, 132, \${count / Math.max(...data)})');

        var ctx = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Doctor Appointments',
                    data: data,
                    backgroundColor: barColors,
                    borderColor: barColors.map(color => color.replace(/[^,]+(?=\\))/, '1')),
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Doctors',
                        },
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Number of Appointments',
                        },
                    },
                },
            }
        });
    </script>

</div>
</div>
</section>

 

</main>
{% endblock %}", "Admin/rendezvouschart.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\Admin\\rendezvouschart.html.twig");
    }
}
