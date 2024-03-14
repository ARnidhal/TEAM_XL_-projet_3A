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

/* reclamation/showReclamations.html.twig */
class __TwigTemplate_5dd9441c8b7b4e0b336d480a0bb93c8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/showReclamations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/showReclamations.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "reclamation/showReclamations.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Réclamations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<style>
  /* Custom style for the search container */
.search-container {
  position: relative;
  width: 100%;
}

/* Style for the search input */
.cool-input {
  padding-right: 30px; /* Space for the search icon */
}

/* Style for the search icon */
.search-icon {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}

/* Additional style for the select dropdown */
.custom-select {
  height: calc(2.25rem + 2px);
}

</style>

<section class=\"page-title bg-1\" style=\"margin-bottom:5%;\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"block text-center\">
            <span class=\"text-white\">your</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Reaclamations</h1>
  
            <!-- <ul class=\"list-inline breadcumb-nav\">
              <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
              <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
              <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Our blog</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class=\"container\">
    <h1 class=\"text-center mb-4\">Liste des Réclamations</h1>

    ";
        // line 60
        echo "    <div class=\"appoinment-wrap mt-5 mt-lg-0 pl-lg-5\">
        ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "session", [], "any", false, false, false, 61), "flashBag", [], "any", false, false, false, 61), "has", ["warning"], "method", false, false, false, 61)) {
            // line 62
            echo "            <div class=\"alert alert-warning\" role=\"alert\">
                ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "session", [], "any", false, false, false, 63), "flashBag", [], "any", false, false, false, 63), "get", ["warning"], "method", false, false, false, 63), 0, [], "array", false, false, false, 63), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 66
        echo "    </div>

    ";
        // line 69
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_start');
        echo "
    <div class=\"row mb-3\">
      <div class=\"col-md-6\">
        <div class=\"search-container\" style=\"margin-top: 5.5%;\">
          <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher le sujet\" class=\"form-control cool-input\">
          <span class=\"search-icon\"><i class=\"fa fa-search\"></i></span>
        </div>
      </div>
      <div class=\"col-md-6\">
        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "category", [], "any", false, false, false, 78), 'row', ["attr" => ["class" => "form-select"]]);
        echo "
      </div>
    </div>
    <div class=\"row mb-3\">
      <div class=\"col-md-6\">
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "submissionDate", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Date de soumission"]]);
        echo "
      </div>
      <div class=\"col-md-6\">
        ";
        // line 87
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "nom", [], "any", false, false, false, 87), 'row', ["label" => "Nom et Prénom", "attr" => ["placeholder" => "Entrez votre nom et prénom"]]);
        echo "
      </div>
    </div>
    <div class=\"d-grid\">
      <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
    </div>
   
    ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        echo "

    ";
        // line 97
        echo "    ";
        if (twig_test_empty((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 97, $this->source); })()))) {
            // line 98
            echo "      <p class=\"text-center mt-4\">Aucune réclamation n'a été trouvée.</p>
    ";
        } else {
            // line 100
            echo "      <div class=\"table-responsive mt-4\">
        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>ID</th>
              <th>Catégorie</th>
              <th>Sujet</th>
              <th>Description</th>
              <th>Nom et Prénom</th> ";
            // line 109
            echo "              <th>Date de Soumission</th>
              <th>Editer</th>
              <th>Supprimer</th>
              <th>Réponse</th>
              <th>Générer PDF</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 118
                echo "              <tr>
                <td>";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 119), "html", null, true);
                echo "</td>
                <td>";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "categorie", [], "any", false, false, false, 120), "html", null, true);
                echo "</td>
                <td>";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 121), "html", null, true);
                echo "</td>
                <td>";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 122), "html", null, true);
                echo "</td>
                <td>";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 123), "html", null, true);
                echo "</td> ";
                // line 124
                echo "                <td>";
                ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "subdate", [], "any", false, false, false, 124)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "subdate", [], "any", false, false, false, 124), "Y-m-d H:i:s"), "html", null, true))) : (print ("Non spécifiée")));
                echo "</td>
                <td>
                  <a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 126)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pen-to-square fa-beat-fade fa-xl\"></i></a>
                </td>
                <td>
                  <a href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?')\"><i class=\"fa-regular fa-trash-can fa-bounce fa-xl\" style=\"color: #ffffff;\"></i></a>
                </td>
                <td>
                  <a href=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_dbreplies", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 132)]), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\"><i class=\"fa-solid fa-magnifying-glass fa-shake fa-xl\" style=\"color: #fcfcfc;\"></i></a>
                </td>
                <td>
                  <a href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 135)]), "html", null, true);
                echo "\" class=\"btn btn-info btn-sm\">PDF</a>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "          </tbody>
        </table>
      </div>
    ";
        }
        // line 143
        echo "
    ";
        // line 145
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test");
        echo "\" class=\"btn btn-info d-block mx-auto mt-4\">Voir les Statistiques</a>

    <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_reclamation");
        echo "\" class=\"btn btn-primary d-block mx-auto mt-4\" style=\"margin-bottom: 5%;\">Ajouter une Réclamation</a>
  </div>
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('#searchInput').on('input', function() {
                var query = \$(this).val().toLowerCase();
                \$('.table tbody tr').each(function() {
                    var row = \$(this);
                    var sujet = row.find('td:eq(2)').text().toLowerCase();
                    if (sujet.includes(query)) {
                        row.fadeIn(300);
                    } else {
                        row.fadeOut(300);
                    }
                });
            }); 
        });
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
        return "reclamation/showReclamations.html.twig";
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
        return array (  304 => 147,  298 => 145,  295 => 143,  289 => 139,  279 => 135,  273 => 132,  267 => 129,  261 => 126,  255 => 124,  252 => 123,  248 => 122,  244 => 121,  240 => 120,  236 => 119,  233 => 118,  229 => 117,  219 => 109,  209 => 100,  205 => 98,  202 => 97,  197 => 94,  186 => 87,  180 => 83,  172 => 78,  159 => 69,  155 => 66,  149 => 63,  146 => 62,  144 => 61,  141 => 60,  88 => 8,  78 => 7,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# Ajouter ce code dans votre template Twig #}

{% extends 'base2.html.twig' %}

{% block title %}Liste des Réclamations{% endblock %}

{% block body %}
<style>
  /* Custom style for the search container */
.search-container {
  position: relative;
  width: 100%;
}

/* Style for the search input */
.cool-input {
  padding-right: 30px; /* Space for the search icon */
}

/* Style for the search icon */
.search-icon {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}

/* Additional style for the select dropdown */
.custom-select {
  height: calc(2.25rem + 2px);
}

</style>

<section class=\"page-title bg-1\" style=\"margin-bottom:5%;\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"block text-center\">
            <span class=\"text-white\">your</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Reaclamations</h1>
  
            <!-- <ul class=\"list-inline breadcumb-nav\">
              <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
              <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
              <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Our blog</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class=\"container\">
    <h1 class=\"text-center mb-4\">Liste des Réclamations</h1>

    {# Afficher les messages flash de type 'warning' #}
    <div class=\"appoinment-wrap mt-5 mt-lg-0 pl-lg-5\">
        {% if app.session.flashBag.has('warning') %}
            <div class=\"alert alert-warning\" role=\"alert\">
                {{ app.session.flashBag.get('warning')[0] }}
            </div>
        {% endif %}
    </div>

    {# Formulaire de recherche avancée #}
    {{ form_start(form) }}
    <div class=\"row mb-3\">
      <div class=\"col-md-6\">
        <div class=\"search-container\" style=\"margin-top: 5.5%;\">
          <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher le sujet\" class=\"form-control cool-input\">
          <span class=\"search-icon\"><i class=\"fa fa-search\"></i></span>
        </div>
      </div>
      <div class=\"col-md-6\">
        {{ form_row(form.category, { 'attr': {'class': 'form-select'} }) }}
      </div>
    </div>
    <div class=\"row mb-3\">
      <div class=\"col-md-6\">
        {{ form_row(form.submissionDate, { 'attr': {'class': 'form-control', 'placeholder': 'Date de soumission'} }) }}
      </div>
      <div class=\"col-md-6\">
        {# Ajouter le champ Nom et Prénom #}
        {{ form_row(form.nom, { 'label': 'Nom et Prénom', 'attr': {'placeholder': 'Entrez votre nom et prénom'} }) }}
      </div>
    </div>
    <div class=\"d-grid\">
      <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
    </div>
   
    {{ form_end(form) }}

    {# Affichage des réclamations de l'utilisateur #}
    {% if reclamations is empty %}
      <p class=\"text-center mt-4\">Aucune réclamation n'a été trouvée.</p>
    {% else %}
      <div class=\"table-responsive mt-4\">
        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>ID</th>
              <th>Catégorie</th>
              <th>Sujet</th>
              <th>Description</th>
              <th>Nom et Prénom</th> {# Ajout de la colonne Nom et Prénom #}
              <th>Date de Soumission</th>
              <th>Editer</th>
              <th>Supprimer</th>
              <th>Réponse</th>
              <th>Générer PDF</th>
            </tr>
          </thead>
          <tbody>
            {% for reclamation in reclamations %}
              <tr>
                <td>{{ reclamation.id }}</td>
                <td>{{ reclamation.categorie }}</td>
                <td>{{ reclamation.sujet }}</td>
                <td>{{ reclamation.description }}</td>
                <td>{{ reclamation.nom }}</td> {# Affichage du nom de l'utilisateur #}
                <td>{{ reclamation.subdate ? reclamation.subdate|date('Y-m-d H:i:s') : 'Non spécifiée' }}</td>
                <td>
                  <a href=\"{{ path('edit_reclamation', { 'id': reclamation.id }) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pen-to-square fa-beat-fade fa-xl\"></i></a>
                </td>
                <td>
                  <a href=\"{{ path('delete_reclamation', { 'id': reclamation.id }) }}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?')\"><i class=\"fa-regular fa-trash-can fa-bounce fa-xl\" style=\"color: #ffffff;\"></i></a>
                </td>
                <td>
                  <a href=\"{{ path('show_dbreplies', { 'id': reclamation.id }) }}\" class=\"btn btn-success btn-sm\"><i class=\"fa-solid fa-magnifying-glass fa-shake fa-xl\" style=\"color: #fcfcfc;\"></i></a>
                </td>
                <td>
                  <a href=\"{{ path('generate_pdf', { 'id': reclamation.id }) }}\" class=\"btn btn-info btn-sm\">PDF</a>
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    {% endif %}

    {# Bouton pour afficher les statistiques #}
    <a href=\"{{ path('test') }}\" class=\"btn btn-info d-block mx-auto mt-4\">Voir les Statistiques</a>

    <a href=\"{{ path('add_reclamation') }}\" class=\"btn btn-primary d-block mx-auto mt-4\" style=\"margin-bottom: 5%;\">Ajouter une Réclamation</a>
  </div>
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('#searchInput').on('input', function() {
                var query = \$(this).val().toLowerCase();
                \$('.table tbody tr').each(function() {
                    var row = \$(this);
                    var sujet = row.find('td:eq(2)').text().toLowerCase();
                    if (sujet.includes(query)) {
                        row.fadeIn(300);
                    } else {
                        row.fadeOut(300);
                    }
                });
            }); 
        });
    </script>
{% endblock %}
", "reclamation/showReclamations.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\reclamation\\showReclamations.html.twig");
    }
}
