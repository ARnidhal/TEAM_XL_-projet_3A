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

/* user/showdoc.html.twig */
class __TwigTemplate_cb314354e2b03fbc5b1869d56d46ce31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/showdoc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/showdoc.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "user/showdoc.html.twig", 1);
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
            <span class=\"text-white\">All Doctors</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Specalized doctors</h1>
  
            <!-- <ul class=\"list-inline breadcumb-nav\">
              <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
              <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
              <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">All Doctors</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!-- portfolio -->
  <section class=\"section doctors\">
    <div class=\"container\">
          <div class=\"row justify-content-center\">
               <div class=\"col-lg-6 text-center\">
                  <div class=\"section-title\">
                      <h2>Doctors</h2>
                      <div class=\"divider mx-auto my-4\"></div>
                      <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
                  </div>
              </div>
          </div>
  
        
  
        
          <div class=\"row shuffle-wrapper portfolio-gallery shuffle\">
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 47
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "roles", [], "any", false, false, false, 47), 0, [], "array", false, false, false, 47) == "medecin")) {
                // line 48
                echo "                    <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible\">
                        <div class=\"position-relative doctor-inner-box\">
                            <div class=\"doctor-profile\">
                                <div class=\"doctor-img\">
                                    <img src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["a"], "photo", [], "any", false, false, false, 52))), "html", null, true);
                echo "\" alt=\"doctor-image\" class=\"img-fluid w-100\">
                                </div>
                            </div>
                            <div class=\"content mt-3\">
                                <h4 class=\"mb-0\"><a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rendezvous_calendar", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "username", [], "any", false, false, false, 56), "html", null, true);
                echo "</a></h4>
                                <p>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "specialite", [], "any", false, false, false, 57), "html", null, true);
                echo "</p>
                            </div> 
                        </div>
                    </div>
                ";
            }
            // line 62
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </div>
        
       
       
    </div>
  </section>
  <!-- /portfolio -->
  


  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/showdoc.html.twig";
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
        return array (  152 => 63,  146 => 62,  138 => 57,  132 => 56,  125 => 52,  119 => 48,  116 => 47,  112 => 46,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block body %}




<section class=\"page-title bg-1\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"block text-center\">
            <span class=\"text-white\">All Doctors</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Specalized doctors</h1>
  
            <!-- <ul class=\"list-inline breadcumb-nav\">
              <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
              <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
              <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">All Doctors</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <!-- portfolio -->
  <section class=\"section doctors\">
    <div class=\"container\">
          <div class=\"row justify-content-center\">
               <div class=\"col-lg-6 text-center\">
                  <div class=\"section-title\">
                      <h2>Doctors</h2>
                      <div class=\"divider mx-auto my-4\"></div>
                      <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
                  </div>
              </div>
          </div>
  
        
  
        
          <div class=\"row shuffle-wrapper portfolio-gallery shuffle\">
            {% for a in user %}
                {% if a.roles[0] =='medecin' %}
                    <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible\">
                        <div class=\"position-relative doctor-inner-box\">
                            <div class=\"doctor-profile\">
                                <div class=\"doctor-img\">
                                    <img src=\"{{ asset('uploads/photos/' ~ a.photo) }}\" alt=\"doctor-image\" class=\"img-fluid w-100\">
                                </div>
                            </div>
                            <div class=\"content mt-3\">
                                <h4 class=\"mb-0\"><a href=\"{{path('rendezvous_calendar',{'id':a.id})}}\">{{ a.username }}</a></h4>
                                <p>{{ a.specialite }}</p>
                            </div> 
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
        
       
       
    </div>
  </section>
  <!-- /portfolio -->
  


  {% endblock %}
 ", "user/showdoc.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\showdoc.html.twig");
    }
}
