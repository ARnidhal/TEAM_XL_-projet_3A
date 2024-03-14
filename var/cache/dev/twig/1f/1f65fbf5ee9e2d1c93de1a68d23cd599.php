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

/* Admin/showrapport.html.twig */
class __TwigTemplate_fce156c306705a8ef9f642bf5edd8105 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/showrapport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/showrapport.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/showrapport.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Rapport  Tables</h1>
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
              

              <!-- Table with stripped rows -->
              <table class=\"table datatable\">
                <thead>
                  <tr>
                    <th>
                      <b>ID</b>
                    </th>
                   
                    <th>Rendezvous</th>
                    <th>Type</th>
                    <th>Description</th>
                    <td>delete</td>
                    <td>edit</td>
                    <td>PDF</td>
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "                  <tr>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                   <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "rendezvous", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                    
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "type", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "note", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                    
                    <td><button type=\"button\" class=\"btn btn-outline-warning\" onclick=\"window.location.href='";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleterapport", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "'\">delete</button></td>
                    <td> <button type=\"button\" class=\"btn btn-outline-info\" onclick=\"window.location.href='";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editrapport", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "'\">Edit</button></td>
                    <td><button type=\"button\" class=\"btn btn-dark\"onclick=\"window.location.href='";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdfrapport", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "'\"><i class=\"bi bi-folder\"></i></button></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <script src=\"";
        // line 68
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
        return "Admin/showrapport.html.twig";
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
        return array (  166 => 68,  152 => 56,  143 => 53,  139 => 52,  135 => 51,  130 => 49,  126 => 48,  121 => 46,  117 => 45,  114 => 44,  110 => 43,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Rapport  Tables</h1>
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
              

              <!-- Table with stripped rows -->
              <table class=\"table datatable\">
                <thead>
                  <tr>
                    <th>
                      <b>ID</b>
                    </th>
                   
                    <th>Rendezvous</th>
                    <th>Type</th>
                    <th>Description</th>
                    <td>delete</td>
                    <td>edit</td>
                    <td>PDF</td>
                  </tr>
                </thead>
                <tbody>
                    {% for i in rapport %}
                  <tr>
                    <td>{{i.id}}</td>
                   <td>{{i.rendezvous}}</td>
                    
                    <td>{{i.type}}</td>
                    <td>{{i.note}}</td>
                    
                    <td><button type=\"button\" class=\"btn btn-outline-warning\" onclick=\"window.location.href='{{ path('deleterapport',{'id':i.id} )}}'\">delete</button></td>
                    <td> <button type=\"button\" class=\"btn btn-outline-info\" onclick=\"window.location.href='{{ path('editrapport', {'id': i.id}) }}'\">Edit</button></td>
                    <td><button type=\"button\" class=\"btn btn-dark\"onclick=\"window.location.href='{{ path('pdfrapport', {'id': i.id}) }}'\"><i class=\"bi bi-folder\"></i></button></td>
                  </tr>
                  {%endfor%}
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <script src=\"{{asset('assets/js/main.js')}}\"></script>
  {% endblock %}", "Admin/showrapport.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\Admin\\showrapport.html.twig");
    }
}
