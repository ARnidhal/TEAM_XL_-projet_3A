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

/* service/tableservice.html.twig */
class __TwigTemplate_a4a00117721c6e7ef8271ecfdfc948d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/tableservice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/tableservice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/tableservice.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<main id=\"main\" class=\"main\">
  <!-- Bouton pour changer de langue -->
 


    <div class=\"pagetitle\">
      <h1>Services Table</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Service</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-12\">

          
           
          <div class=\"card\">
            <div class=\"card-body\">
              <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addformservice");
        echo "\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 30px;\"></i></a>
              <h5 class=\"card-title\">SERVICE</h5>
            
              <!-- Table with stripped rows -->
              <table class=\"table datatable\">
                <thead>
                  <tr>
                    <th>
                      <b>ID</b>
                    </th>
                    <th>NAME</th>
                    <th>PICTURE</th>
                    <th>DESCRIPTION</th>
                    <th>CATEGORY</th>
                    <th>START DATE</th>
                    <th>ACTIVE</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 52
            echo "                  <tr>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 55))), "html", null, true);
            echo "\"  style=\"width: 80px; height: 80px; \"></td>
                   
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "idcategorie", [], "any", false, false, false, 58), "nom", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "datecr", [], "any", false, false, false, 59), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>
                      <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\"";
            // line 62
            echo ((twig_get_attribute($this->env, $this->source, $context["a"], "active", [], "any", false, false, false, 62)) ? ("checked") : (""));
            echo " role=\"switch\"   data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\" disabled>
                        <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\" ></label>
                      </div>
                    </td>
                  
                    <td> <a class=\"btn btn-success\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editservice", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" ><i class=\"fa-solid fa-pen-to-square\"></i></a></td>
                    <td><a class=\"btn btn-danger\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteservice", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-trash\"></i></a></td>


                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
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
        // line 86
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
        return "service/tableservice.html.twig";
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
        return array (  193 => 86,  178 => 73,  167 => 68,  163 => 67,  153 => 62,  147 => 59,  143 => 58,  139 => 57,  134 => 55,  130 => 54,  126 => 53,  123 => 52,  119 => 51,  95 => 30,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig'%}

{% block body %}

<main id=\"main\" class=\"main\">
  <!-- Bouton pour changer de langue -->
 


    <div class=\"pagetitle\">
      <h1>Services Table</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Service</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-12\">

          
           
          <div class=\"card\">
            <div class=\"card-body\">
              <a href=\"{{ path('addformservice')}}\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 30px;\"></i></a>
              <h5 class=\"card-title\">SERVICE</h5>
            
              <!-- Table with stripped rows -->
              <table class=\"table datatable\">
                <thead>
                  <tr>
                    <th>
                      <b>ID</b>
                    </th>
                    <th>NAME</th>
                    <th>PICTURE</th>
                    <th>DESCRIPTION</th>
                    <th>CATEGORY</th>
                    <th>START DATE</th>
                    <th>ACTIVE</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                  </tr>
                </thead>
                <tbody>
                  {%for a in service %}
                  <tr>
                    <td>{{a.id}}</td>
                    <td>{{a.nom}}</td>
                    <td><img src=\"{{ asset('uploads/' ~ a.image) }}\"  style=\"width: 80px; height: 80px; \"></td>
                   
                    <td>{{a.description}}</td>
                    <td>{{a.idcategorie.nom}}</td>
                    <td>{{a.datecr|date('Y-m-d')}}</td>
                    <td>
                      <div class=\"form-check form-switch\">
                        <input class=\"form-check-input\" type=\"checkbox\"{{(a.active) ? 'checked' : ''}} role=\"switch\"   data-id=\"{{a.id}}\" disabled>
                        <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\" ></label>
                      </div>
                    </td>
                  
                    <td> <a class=\"btn btn-success\" href=\"{{path('editservice',{'id':a.id})}}\" ><i class=\"fa-solid fa-pen-to-square\"></i></a></td>
                    <td><a class=\"btn btn-danger\" href=\"{{path('deleteservice',{'id':a.id})}}\"><i class=\"fa-solid fa-trash\"></i></a></td>


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
  {% endblock %}

 ", "service/tableservice.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\service\\tableservice.html.twig");
    }
}
