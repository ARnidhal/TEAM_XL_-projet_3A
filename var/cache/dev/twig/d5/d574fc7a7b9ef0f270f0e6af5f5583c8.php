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

/* evenement/stat.html.twig */
class __TwigTemplate_50f19faf41b060b50dc9bffbd40b78c5 extends Template
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
        // line 37
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/stat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/stat.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "evenement/stat.html.twig", 37);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "<main id=\"main\" class=\"main\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
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
            

<div class=\"chart-container\">        
  <canvas id=\"myChart\"></canvas>


<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ";
        // line 74
        echo (isset($context["nomEvenement"]) || array_key_exists("nomEvenement", $context) ? $context["nomEvenement"] : (function () { throw new RuntimeError('Variable "nomEvenement" does not exist.', 74, $this->source); })());
        echo ",
      datasets: [{
        label: 'Nombre de participants par évènement',
        data: ";
        // line 77
        echo (isset($context["evcount"]) || array_key_exists("evcount", $context) ? $context["evcount"] : (function () { throw new RuntimeError('Variable "evcount" does not exist.', 77, $this->source); })());
        echo ",
        borderWidth: 1,
        backgroundColor: ";
        // line 79
        echo (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 79, $this->source); })());
        echo "
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "evenement/stat.html.twig";
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
        return array (  116 => 79,  111 => 77,  105 => 74,  68 => 39,  58 => 38,  35 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% block title %}STATISTIQUE{% endblock %}

 {% block stylesheets %} 
 
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" >
 
{% endblock %}
       
            {% block body %}
<div class=\"container\">
            <h1>STATISTIQUE</h1>
            <canvas id=\"categories\" width=\"400\" height=\"400\"></canvas>
</div>          
            
            {% endblock %}
   

{% block javascripts %}
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>          
            
            <script>
            let categories=document.querySelector(\"#categories\");
            let categGraph = new Chart(categories,{
                type: \"pie\",
                data: {
                    labels: [\"cat1\", \"cat2\", \"cat3\"]
                    datasets: [{
                        label: \"Répartition des types\",
                        data: [2,5,3],
                        backgroundColor:[\"red\", \"green\", \"blue\"]
                }]
                }
            })
            </script>
            {% endblock %}#}

{% extends 'back.html.twig' %}
    {% block body %}
<main id=\"main\" class=\"main\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
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
            

<div class=\"chart-container\">        
  <canvas id=\"myChart\"></canvas>


<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: {{ nomEvenement | raw}},
      datasets: [{
        label: 'Nombre de participants par évènement',
        data: {{evcount | raw}},
        borderWidth: 1,
        backgroundColor: {{color | raw}}
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
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
{% endblock %}











{#<!DOCTYPE html>
<html>
<body>

<h1>My Web Page</h1>
<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
<div id=\"piechart\"></div>
<script type=\"text/javascript\">
// Load google charts
google.charts.load('current', {'packages'🙁'corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Friends', 2],
  ['Eat', 2],
  
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id=\"piechart\"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</body>
<html>
 #}", "evenement/stat.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\evenement\\stat.html.twig");
    }
}
