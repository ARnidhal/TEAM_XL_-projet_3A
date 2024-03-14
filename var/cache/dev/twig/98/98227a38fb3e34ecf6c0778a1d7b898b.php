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

/* reservationservice/tablereservationser.html.twig */
class __TwigTemplate_86d82f69e0f2ea2b99b8aef559edd1c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationservice/tablereservationser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationservice/tablereservationser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservationservice/tablereservationser.html.twig", 1);
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

    <div class=\"pagetitle\">
      <h1>CATEGORY'S</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-12\">

          <div class=\"card\">
            <div class=\"card-body\">
              <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addformcategory");
        echo "\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 30px;\"></i></a>
              <h5 class=\"card-title\">CATEGORY TABLE</h5>
              ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "session", [], "any", false, false, false, 25), "flashBag", [], "any", false, false, false, 25), "has", ["danger"], "method", false, false, false, 25)) {
            // line 26
            echo "              <div class=\"alert alert-danger\" role=\"alert\">
                  ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "session", [], "any", false, false, false, 27), "flashBag", [], "any", false, false, false, 27), "get", ["danger"], "method", false, false, false, 27), 0, [], "array", false, false, false, 27), "html", null, true);
            echo "
              </div>
          ";
        }
        // line 30
        echo "              <!-- Table with stripped rows -->
              <table class=\"table datatable\">
                
                <thead>
                  <tr>
                    <th>
                      <b>ID</b>
                    </th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>SERVICE</th>
                    <th>VALIDATED</th>
                    <th>DELETE</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resser"]) || array_key_exists("resser", $context) ? $context["resser"] : (function () { throw new RuntimeError('Variable "resser" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 47
            echo "                  <tr>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo "</td> 
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "idserivce", [], "any", false, false, false, 51), "nom", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                   
                    
                    <td>
                      
                      
                      <a id=\"confirmBtn\" class=\"btn btn-success\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verificationparmail", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">
                        <i class=\"fa-solid fa-circle-check\"></i>
                    </a>
                    <a id=\"rejectBtn\" class=\"btn btn-danger\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rejectreservationser", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">
                        <i class=\"fa-solid fa-ban\"></i>
                    </a>
                   
                    </td>
                    
                    
                    <td><a class=\"btn btn-danger\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletecreservationser", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-trash\"></i></a></td>

                    
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
   
  </main><!-- End #main -->
 <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
 

  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservationservice/tablereservationser.html.twig";
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
        return array (  178 => 72,  167 => 67,  157 => 60,  151 => 57,  142 => 51,  138 => 50,  134 => 49,  130 => 48,  127 => 47,  123 => 46,  105 => 30,  99 => 27,  96 => 26,  94 => 25,  89 => 23,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}

{% block body %}
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>CATEGORY'S</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-12\">

          <div class=\"card\">
            <div class=\"card-body\">
              <a href=\"{{ path('addformcategory')}}\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 30px;\"></i></a>
              <h5 class=\"card-title\">CATEGORY TABLE</h5>
              {% if app.session.flashBag.has('danger') %}
              <div class=\"alert alert-danger\" role=\"alert\">
                  {{ app.session.flashBag.get('danger')[0] }}
              </div>
          {% endif %}
              <!-- Table with stripped rows -->
              <table class=\"table datatable\">
                
                <thead>
                  <tr>
                    <th>
                      <b>ID</b>
                    </th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>SERVICE</th>
                    <th>VALIDATED</th>
                    <th>DELETE</th>
                  </tr>
                </thead>
                <tbody>
                  {%for a in resser %}
                  <tr>
                    <td>{{a.id}}</td>
                    <td>{{a.nom}}</td> 
                    <td>{{a.email}}</td>
                    <td>{{a.idserivce.nom}}</td>
                   
                    
                    <td>
                      
                      
                      <a id=\"confirmBtn\" class=\"btn btn-success\" href=\"{{path('verificationparmail',{'id':a.id})}}\">
                        <i class=\"fa-solid fa-circle-check\"></i>
                    </a>
                    <a id=\"rejectBtn\" class=\"btn btn-danger\" href=\"{{path('rejectreservationser',{'id':a.id})}}\">
                        <i class=\"fa-solid fa-ban\"></i>
                    </a>
                   
                    </td>
                    
                    
                    <td><a class=\"btn btn-danger\" href=\"{{path('deletecreservationser',{'id':a.id})}}\"><i class=\"fa-solid fa-trash\"></i></a></td>

                    
                  </tr>
                  {% endfor %}
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
   
  </main><!-- End #main -->
 <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
 

  {% endblock %}

", "reservationservice/tablereservationser.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\reservationservice\\tablereservationser.html.twig");
    }
}
