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

/* service/showservicebyid.html.twig */
class __TwigTemplate_81ad3a9c743ca0c0be42d35286a0f7bb extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/showservicebyid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/showservicebyid.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "service/showservicebyid.html.twig", 1);
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
<section class=\"page-title bg-1\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Service Details</span>
          <h1 class=\"text-capitalize mb-5 text-lg\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class=\"section department-single\">
    <style>
        .department-img {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('your-background-image.jpg');
            background-size: cover;
            background-position: center;
            height: 400px; /* Adjust the height as needed */
        }

        .department-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8; /* Adjust the opacity as needed */
            animation: pulse 3s infinite alternate;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            100% { transform: scale(1.05); }
        }

        .cool-contact-info {
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .cool-contact-info:hover {
            transform: translateY(-5px);
        }

        .cool-contact-info h4 {
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .cool-contact-info h3 {
            color: #cf2a54;
            font-size: 24px;
            margin-bottom: 0;
        }

        .appointment-btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #cf2a54;
            color: #ffffff;
            text-decoration: none;
            border-radius: 30px;
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .appointment-btn:hover {
            background-color: #006e70;
            transform: translateY(-3px);
        }

        .appointment-btn i {
            margin-left: 10px;
        }

\t\t
    </style>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"department-img text-center animate__animated animate__fadeIn\">
                    <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 95, $this->source); })()), "image", [], "any", false, false, false, 95))), "html", null, true);
        echo "\" class=\"img-fluid rounded shadow-lg\" alt=\"Service Image\">
                </div>
            </div>
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-lg-8\">
                <div class=\"department-content animate__animated animate__fadeInLeft\">
                    <h3 class=\"text-md mb-4\">";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 103, $this->source); })()), "nom", [], "any", false, false, false, 103), "html", null, true);
        echo "</h3>
                    <div class=\"divider mb-4\"></div>
                    <p  class=\"lead typewriter\">";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 105, $this->source); })()), "description", [], "any", false, false, false, 105), "html", null, true);
        echo "</p> <!-- Removed 'typewriter' class -->
                    <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addformreservationser");
        echo "\" class=\"appointment-btn\">
                        Make an Appointment <i class=\"icofont-simple-right\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"sidebar-contact-info cool-contact-info animate__animated animate__fadeInRight\">
                    <h4>Need Urgent Help?</h4>
                    <h3>+23-4565-65768</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const descriptionElement = document.querySelector('.typewriter');
        const descriptionText = \"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 125, $this->source); })()), "description", [], "any", false, false, false, 125), "html", null, true);
        echo "\";

        function typeWriter(text, i) {
            if (i < text.length) {
                descriptionElement.innerHTML += text.charAt(i);
                i++;
                setTimeout(function() { typeWriter(text, i); }, getRandomInt(20, 30)); // Randomize typing speed
            }
        }

        typeWriter(descriptionText, 0);
    });

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "service/showservicebyid.html.twig";
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
        return array (  206 => 125,  184 => 106,  180 => 105,  175 => 103,  164 => 95,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig'%}

{% block body %}

<section class=\"page-title bg-1\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Service Details</span>
          <h1 class=\"text-capitalize mb-5 text-lg\">{{ service.nom }}</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class=\"section department-single\">
    <style>
        .department-img {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('your-background-image.jpg');
            background-size: cover;
            background-position: center;
            height: 400px; /* Adjust the height as needed */
        }

        .department-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8; /* Adjust the opacity as needed */
            animation: pulse 3s infinite alternate;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            100% { transform: scale(1.05); }
        }

        .cool-contact-info {
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .cool-contact-info:hover {
            transform: translateY(-5px);
        }

        .cool-contact-info h4 {
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .cool-contact-info h3 {
            color: #cf2a54;
            font-size: 24px;
            margin-bottom: 0;
        }

        .appointment-btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #cf2a54;
            color: #ffffff;
            text-decoration: none;
            border-radius: 30px;
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .appointment-btn:hover {
            background-color: #006e70;
            transform: translateY(-3px);
        }

        .appointment-btn i {
            margin-left: 10px;
        }

\t\t
    </style>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"department-img text-center animate__animated animate__fadeIn\">
                    <img src=\"{{ asset('uploads/' ~ service.image) }}\" class=\"img-fluid rounded shadow-lg\" alt=\"Service Image\">
                </div>
            </div>
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-lg-8\">
                <div class=\"department-content animate__animated animate__fadeInLeft\">
                    <h3 class=\"text-md mb-4\">{{ service.nom }}</h3>
                    <div class=\"divider mb-4\"></div>
                    <p  class=\"lead typewriter\">{{ service.description }}</p> <!-- Removed 'typewriter' class -->
                    <a href=\"{{ path('addformreservationser') }}\" class=\"appointment-btn\">
                        Make an Appointment <i class=\"icofont-simple-right\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-lg-4\">
                <div class=\"sidebar-contact-info cool-contact-info animate__animated animate__fadeInRight\">
                    <h4>Need Urgent Help?</h4>
                    <h3>+23-4565-65768</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const descriptionElement = document.querySelector('.typewriter');
        const descriptionText = \"{{ service.description }}\";

        function typeWriter(text, i) {
            if (i < text.length) {
                descriptionElement.innerHTML += text.charAt(i);
                i++;
                setTimeout(function() { typeWriter(text, i); }, getRandomInt(20, 30)); // Randomize typing speed
            }
        }

        typeWriter(descriptionText, 0);
    });

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
</script>
{% endblock %}
", "service/showservicebyid.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\service\\showservicebyid.html.twig");
    }
}
