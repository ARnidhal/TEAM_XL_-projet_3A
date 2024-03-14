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

/* service/showservicebycategory.html.twig */
class __TwigTemplate_13e820d35123c3541591d3d497930058 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/showservicebycategory.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/showservicebycategory.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "service/showservicebycategory.html.twig", 1);
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
            <span class=\"text-white\">ALL</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Services</h1>
  
            <!-- <ul class=\"list-inline breadcumb-nav\">
              <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
              <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
              <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">All Department</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class=\"section service-2\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 text-center\">
                <div class=\"section-title\">
                    <h2>Award winning patient care</h2>
                    <div class=\"divider mx-auto my-4\"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 39
            echo "            <style>
              .card {
                  transition: transform 0.5s, box-shadow 0.5s, background-color 0.5s;
                  border-radius: 15px;
                  overflow: hidden;
              }
              .card:hover {
                  transform: scale(1.05) rotate(3deg);
                  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
                  background-color: #f8f9fa; /* Change to your desired hover color */
              }
              .card-img {
                  width: 100%;
                  height: 200px;
                  object-fit: cover;
                  border-top-left-radius: 15px;
                  border-top-right-radius: 15px;
                  transition: transform 0.5s;
              }
              .card:hover .card-img {
                  transform: scale(1.1);
              }
              .card-body {
                  padding: 20px;
              }
              .card-title {
                  font-size: 18px;
                  font-weight: bold;
                  margin: 0;
                  color: #032c57; /* Initial color */
                  transition: color 0.3s; /* Add transition effect for color change */
              }
              .card:hover .card-title {
                  color: #dc1853; /* Change color on hover */
              }
              .show-more-link {
                  text-decoration: none;
                  color: #007bff; /* Change to your desired link color */
                  transition: color 0.3s;
              }
              .show-more-link:hover {
                  color: #0056b3; /* Change to your desired link hover color */
              }
          </style>
          
          <div class=\"col-lg-3 col-md-6\">
              <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showidservice", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" class=\"card mb-5 shadow-sm\">
                  <img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 86))), "html", null, true);
            echo "\" class=\"card-img\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 86), "html", null, true);
            echo "\">
                  <div class=\"card-body\">
                      <h4 class=\"card-title\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 88), "html", null, true);
            echo "</h4>
                      <p class=\"show-more-link\"><i class=\"fa-solid fa-plus-circle mr-1\"></i> Show More</p>
                  </div>
              </a>
          </div>
          
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </div>
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
        return "service/showservicebycategory.html.twig";
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
        return array (  180 => 95,  167 => 88,  160 => 86,  156 => 85,  108 => 39,  104 => 38,  68 => 4,  58 => 3,  35 => 1,);
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
            <span class=\"text-white\">ALL</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Services</h1>
  
            <!-- <ul class=\"list-inline breadcumb-nav\">
              <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
              <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
              <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">All Department</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class=\"section service-2\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 text-center\">
                <div class=\"section-title\">
                    <h2>Award winning patient care</h2>
                    <div class=\"divider mx-auto my-4\"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            {% for a in service %}
            <style>
              .card {
                  transition: transform 0.5s, box-shadow 0.5s, background-color 0.5s;
                  border-radius: 15px;
                  overflow: hidden;
              }
              .card:hover {
                  transform: scale(1.05) rotate(3deg);
                  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
                  background-color: #f8f9fa; /* Change to your desired hover color */
              }
              .card-img {
                  width: 100%;
                  height: 200px;
                  object-fit: cover;
                  border-top-left-radius: 15px;
                  border-top-right-radius: 15px;
                  transition: transform 0.5s;
              }
              .card:hover .card-img {
                  transform: scale(1.1);
              }
              .card-body {
                  padding: 20px;
              }
              .card-title {
                  font-size: 18px;
                  font-weight: bold;
                  margin: 0;
                  color: #032c57; /* Initial color */
                  transition: color 0.3s; /* Add transition effect for color change */
              }
              .card:hover .card-title {
                  color: #dc1853; /* Change color on hover */
              }
              .show-more-link {
                  text-decoration: none;
                  color: #007bff; /* Change to your desired link color */
                  transition: color 0.3s;
              }
              .show-more-link:hover {
                  color: #0056b3; /* Change to your desired link hover color */
              }
          </style>
          
          <div class=\"col-lg-3 col-md-6\">
              <a href=\"{{ path('showidservice', {'id': a.id}) }}\" class=\"card mb-5 shadow-sm\">
                  <img src=\"{{ asset('uploads/' ~ a.image) }}\" class=\"card-img\" alt=\"{{ a.nom }}\">
                  <div class=\"card-body\">
                      <h4 class=\"card-title\">{{ a.nom }}</h4>
                      <p class=\"show-more-link\"><i class=\"fa-solid fa-plus-circle mr-1\"></i> Show More</p>
                  </div>
              </a>
          </div>
          
            {% endfor %}
        </div>
    </div>
</section>




{% endblock %}", "service/showservicebycategory.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\service\\showservicebycategory.html.twig");
    }
}
