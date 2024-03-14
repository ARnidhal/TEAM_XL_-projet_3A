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

/* category/tablecategorie.html.twig */
class __TwigTemplate_225ada25704fdb40b532942f93a35e4a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/tablecategorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/tablecategorie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/tablecategorie.html.twig", 1);
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
              <div class=\"appoinment-wrap mt-5 mt-lg-0 pl-lg-5\">
              
                ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "session", [], "any", false, false, false, 27), "flashBag", [], "any", false, false, false, 27), "has", ["success"], "method", false, false, false, 27)) {
            // line 28
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "session", [], "any", false, false, false, 29), "flashBag", [], "any", false, false, false, 29), "get", ["success"], "method", false, false, false, 29), 0, [], "array", false, false, false, 29), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 32
        echo "              <!-- Table with stripped rows -->
              <table class=\"table datatable\">
                
                <thead>
                  <tr>
                    <th>
                      <b>ID</b>
                    </th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>ICON</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 49
            echo "                  <tr>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 51), "html", null, true);
            echo "</td> 
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td><i class=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "icon", [], "any", false, false, false, 53), "html", null, true);
            echo "\"></i></td>
                    <td> <a class=\"btn btn-success\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcategorie", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" ><i class=\"fa-solid fa-pen-to-square\"></i></a></td>
                    <td><a class=\"btn btn-danger\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletecategorie", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-trash\"></i></a></td>


                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
 <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "category/tablecategorie.html.twig";
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
        return array (  178 => 73,  163 => 60,  152 => 55,  148 => 54,  144 => 53,  140 => 52,  136 => 51,  132 => 50,  129 => 49,  125 => 48,  107 => 32,  101 => 29,  98 => 28,  96 => 27,  89 => 23,  68 => 4,  58 => 3,  35 => 1,);
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
              <div class=\"appoinment-wrap mt-5 mt-lg-0 pl-lg-5\">
              
                {% if app.session.flashBag.has('success') %}
                <div class=\"alert alert-success\" role=\"alert\">
                    {{ app.session.flashBag.get('success')[0] }}
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
                    <th>DESCRIPTION</th>
                    <th>ICON</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                  </tr>
                </thead>
                <tbody>
                  {%for a in cat %}
                  <tr>
                    <td>{{a.id}}</td>
                    <td>{{a.nom}}</td> 
                    <td>{{a.description}}</td>
                    <td><i class=\"{{a.icon}}\"></i></td>
                    <td> <a class=\"btn btn-success\" href=\"{{path('editcategorie',{'id':a.id})}}\" ><i class=\"fa-solid fa-pen-to-square\"></i></a></td>
                    <td><a class=\"btn btn-danger\" href=\"{{path('deletecategorie',{'id':a.id})}}\"><i class=\"fa-solid fa-trash\"></i></a></td>


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
 <script src=\"{{asset('assets/js/main.js')}}\"></script>
  {% endblock %}", "category/tablecategorie.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\category\\tablecategorie.html.twig");
    }
}
