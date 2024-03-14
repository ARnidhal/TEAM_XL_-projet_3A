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

/* Admin/show.html.twig */
class __TwigTemplate_a526c928856a0e1251d09139167b8e2c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/show.html.twig", 1);
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
      <h1>Appointements  Tables</h1>
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
                   
                    <th>Medecin</th>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th data-type=\"date\" data-format=\"YYYY/DD/MM\">Start Date</th>
                    <th>Time</th>
                    <th>Note</th>
                    <th>Etat</th>
                    <td>delete</td>
                    <td>edit</td>
                    <td>Approve RV </td>
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rendezvous"]) || array_key_exists("rendezvous", $context) ? $context["rendezvous"] : (function () { throw new RuntimeError('Variable "rendezvous" does not exist.', 50, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 51
            echo "                  <tr>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                   
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medecinsname"]) || array_key_exists("medecinsname", $context) ? $context["medecinsname"] : (function () { throw new RuntimeError('Variable "medecinsname" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 54), [], "array", false, false, false, 54), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "email", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "fullname", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "tel", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "date", [], "any", false, false, false, 58), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "time", [], "any", false, false, false, 59), " H:i:s"), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "note", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "etat", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td><button type=\"button\" class=\"btn btn-outline-warning\" onclick=\"window.location.href='";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteRV", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "'\">delete</button></td>
                    <td> <button type=\"button\" class=\"btn btn-outline-info\" onclick=\"window.location.href='";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editrv", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "'\">Edit</button></td>
                    <td><button type=\"button\" class=\"btn btn-success\" onclick=\"window.location.href='";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirmerRV", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "'\"><i class=\"bi bi-check-circle\"></i></button></td>
                  </tr>
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        // line 80
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
        return "Admin/show.html.twig";
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
        return array (  214 => 80,  199 => 67,  182 => 64,  178 => 63,  174 => 62,  170 => 61,  166 => 60,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  142 => 54,  137 => 52,  134 => 51,  117 => 50,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Appointements  Tables</h1>
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
                   
                    <th>Medecin</th>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th data-type=\"date\" data-format=\"YYYY/DD/MM\">Start Date</th>
                    <th>Time</th>
                    <th>Note</th>
                    <th>Etat</th>
                    <td>delete</td>
                    <td>edit</td>
                    <td>Approve RV </td>
                  </tr>
                </thead>
                <tbody>
                    {% for i in rendezvous %}
                  <tr>
                    <td>{{i.id}}</td>
                   
                    <td>{{medecinsname[loop.index0]}}</td>
                    <td>{{i.email}}</td>
                    <td>{{i.fullname}}</td>
                    <td>{{i.tel}}</td>
                    <td>{{i.date |date('Y-m-d') }}</td>
                    <td>{{i.time|date(' H:i:s')}}</td>
                    <td>{{i.note}}</td>
                    <td>{{i.etat}}</td>
                    <td><button type=\"button\" class=\"btn btn-outline-warning\" onclick=\"window.location.href='{{ path('deleteRV',{'id':i.id} )}}'\">delete</button></td>
                    <td> <button type=\"button\" class=\"btn btn-outline-info\" onclick=\"window.location.href='{{ path('editrv', {'id': i.id}) }}'\">Edit</button></td>
                    <td><button type=\"button\" class=\"btn btn-success\" onclick=\"window.location.href='{{ path('confirmerRV', {'id': i.id}) }}'\"><i class=\"bi bi-check-circle\"></i></button></td>
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
  
  {% endblock %}", "Admin/show.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\Admin\\show.html.twig");
    }
}
