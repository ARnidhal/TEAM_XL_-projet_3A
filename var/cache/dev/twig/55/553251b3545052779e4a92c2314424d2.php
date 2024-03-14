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

/* evenement/index.html.twig */
class __TwigTemplate_0e254ec99551ebe93ad907576db5f048 extends Template
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
        // line 4
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/index.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
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

            
            <!-- Table with stripped rows -->
            <table class=\"table datatable\">
              <thead>
                <tr>

                    <th>Id</th>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Lieu</th>
                    <th>Sponsor</th>
                    <th>DateDebut</th>
                    <th>DateFin</th>
                    <th>Participants</th>
                    <th>show</th>
                    <th>edit</th>
                    <th>Localisation</th>
                    <th>QR code</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 55
            echo "                <tr>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["evenement"], "imageEvenement", [], "any", false, false, false, 57))), "html", null, true);
            echo "\" style=\"width:150px; height:150px;\" alt=\"\"></td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "typeEvenement", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nomEvenement", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieuEvenement", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "Sponsor", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 62), "Y-m-d H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 63
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 63)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 63), "Y-m-d H:i"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nbParticipants", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-eye\"></i></a></td>
                    <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><i class=\"fa-solid fa-pen-to-square\"></i></a></td>
                    <td><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_map", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-location-arrow\"></i></a></td>
                    <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qr_codes", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">qr code</a></td>
                    
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "                <tr>
                    <td colspan=\"9\">no records found</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            
          </tbody>
        </table>
        <div class=\"mt-4\">
            <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_new");
        echo "\" class=\"btn btn-primary px-3 py-1\">Create new</a> 
            <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generator_service3");
        echo "\" class=\"btn btn-primary px-3 py-1\">PDF</a>
            <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_indexstat");
        echo "\" class=\"btn btn-primary px-3 py-1\">stat</a>
        </div>
      
        </div>
        </div>
        </section>
        
      
           

</main>
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<script src=\"";
        // line 95
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
        return "evenement/index.html.twig";
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
        return array (  221 => 95,  205 => 82,  201 => 81,  197 => 80,  191 => 76,  182 => 72,  173 => 68,  169 => 67,  165 => 66,  161 => 65,  157 => 64,  153 => 63,  149 => 62,  145 => 61,  141 => 60,  137 => 59,  133 => 58,  129 => 57,  125 => 56,  122 => 55,  117 => 54,  68 => 7,  58 => 6,  35 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("


{% extends \"base.html.twig\" %}

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

            
            <!-- Table with stripped rows -->
            <table class=\"table datatable\">
              <thead>
                <tr>

                    <th>Id</th>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Lieu</th>
                    <th>Sponsor</th>
                    <th>DateDebut</th>
                    <th>DateFin</th>
                    <th>Participants</th>
                    <th>show</th>
                    <th>edit</th>
                    <th>Localisation</th>
                    <th>QR code</th>
                </tr>
              </thead>
              <tbody>
                {% for evenement in evenements %}
                <tr>
                    <td>{{ evenement.id }}</td>
                    <td><img src=\"{{ asset('uploads/' ~ evenement.imageEvenement) }}\" style=\"width:150px; height:150px;\" alt=\"\"></td>
                    <td>{{ evenement.typeEvenement }}</td>
                    <td>{{ evenement.nomEvenement }}</td>
                    <td>{{ evenement.lieuEvenement }}</td>
                    <td>{{ evenement.Sponsor }}</td>
                    <td>{{ evenement.dateDebut ? evenement.dateDebut|date('Y-m-d H:i') : '' }}</td>
                    <td>{{ evenement.dateFin ? evenement.dateFin|date('Y-m-d H:i') : '' }}</td>
                    <td>{{ evenement.nbParticipants }}</td>
                    <td><a href=\"{{ path('app_evenement_show', {'id': evenement.id}) }}\"><i class=\"fa-solid fa-eye\"></i></a></td>
                    <td><a href=\"{{ path('app_evenement_edit', {'id': evenement.id}) }}\"><i class=\"fa-solid fa-pen-to-square\"></i></a></td>
                    <td><a href=\"{{ path('app_evenement_map', {'id': evenement.id}) }}\" class=\"btn btn-info rounded-pill m-2\" ><i class=\"fas fa-location-arrow\"></i></a></td>
                    <td><a href=\"{{ path('app_qr_codes', {'id': evenement.id}) }}\">qr code</a></td>
                    
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"9\">no records found</td>
                </tr>
                {% endfor %}
            
          </tbody>
        </table>
        <div class=\"mt-4\">
            <a href=\"{{ path('app_evenement_new') }}\" class=\"btn btn-primary px-3 py-1\">Create new</a> 
            <a href=\"{{ path('generator_service3') }}\" class=\"btn btn-primary px-3 py-1\">PDF</a>
            <a href=\"{{ path('app_evenement_indexstat') }}\" class=\"btn btn-primary px-3 py-1\">stat</a>
        </div>
      
        </div>
        </div>
        </section>
        
      
           

</main>
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<script src=\"{{asset('assets/js/main.js')}}\"></script>

{% endblock %}
", "evenement/index.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\evenement\\index.html.twig");
    }
}
