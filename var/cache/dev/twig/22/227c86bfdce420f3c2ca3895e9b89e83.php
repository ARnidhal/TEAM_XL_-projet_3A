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

/* reply/showdbReclamations.html.twig */
class __TwigTemplate_c400fff4c6cbc5d30b0b191032bd20de extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reply/showdbReclamations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reply/showdbReclamations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reply/showdbReclamations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

";
        // line 8
        if (twig_test_empty((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "<p class=\"text-center\">Aucune réclamation n'a été trouvée.</p>
";
        } else {
            // line 11
            echo "<main id=\"main\" class=\"main\">
    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Liste des Réclamations</h1>
    
        ";
            // line 16
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
            echo "
        <div class=\"row mb-3\">
            <div class=\"col-md-4\">
                <div class=\"input-group\">
                    ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
            echo "
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"input-group\">
                    ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-select"]]);
            echo "
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"input-group\">
                    ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "submissionDate", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Date de soumission"]]);
            echo "
                </div>
            </div>
        </div>
        <div class=\"row mb-3\">
            <div class=\"col-md-12\">
                <div class=\"input-group\">
                    <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher le sujet\" class=\"form-control cool-input\">
                    <span class=\"input-group-text search-icon\"><i class=\"fa fa-search\"></i></span>
                </div>
            </div>
        </div>
        <div class=\"d-grid\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
        ";
            // line 45
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
            echo "
    
        <!-- Bouton pour voir les statistiques -->
        <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stats");
            echo "\" class=\"btn btn-info d-block mx-auto mt-4\">Voir les Statistiques</a>
    </div>
   
  
  
      
  
      <section class=\"section\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
  
            
             
            <div class=\"card\">
              <div class=\"card-body\">
                <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_reply");
            echo "\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 30px;\"></i></a>
                <h5 class=\"card-title\">Reclamations</h5>
              
                <!-- Table with stripped rows -->
                <table class=\"table datatable\">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom et Prénom</th>
                        <th>Catégorie</th>
                        <th>Sujet</th>
                        <th>Description</th>
                        <th>Date de Soumission</th>
                        <th>Supprimer</th>
                        <th>Répondre</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 81, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 82
                echo "                    <tr>
                        <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 83), "html", null, true);
                echo "</td>
                        <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "nom", [], "any", false, false, false, 84), "html", null, true);
                echo "</td>
                        <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "categorie", [], "any", false, false, false, 85), "html", null, true);
                echo "</td>
                        <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 86), "html", null, true);
                echo "</td>
                        <td>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 87), "html", null, true);
                echo "</td>
                        <td>";
                // line 88
                ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "subdate", [], "any", false, false, false, 88)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "subdate", [], "any", false, false, false, 88), "Y-m-d H:i:s"), "html", null, true))) : (print ("Non spécifiée")));
                echo "</td>
                        <td>
                            <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_dbreclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?')\"><i class=\"fa-regular fa-trash-can fa-bounce fa-xl\" style=\"color: #ffffff;\"></i></a>
                        </td>
                        <td>
                            <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_reply", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\"><i class=\"fa-solid fa-reply-all fa-shake fa-xl\"></i></a>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                </tbody>
            </table>
        </div>
    </div>
</div>
";
        }
        // line 103
        echo "</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#searchInput').on('input', function() {
            var query = \$(this).val().toLowerCase();
            \$('.table tbody tr').each(function() {
                var row = \$(this);
                var sujet = row.find('td:eq(3)').text().toLowerCase(); // Changement de l'index de la colonne
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
        return "reply/showdbReclamations.html.twig";
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
        return array (  247 => 103,  239 => 97,  229 => 93,  223 => 90,  218 => 88,  214 => 87,  210 => 86,  206 => 85,  202 => 84,  198 => 83,  195 => 82,  191 => 81,  170 => 63,  152 => 48,  146 => 45,  128 => 30,  120 => 25,  112 => 20,  104 => 16,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Réclamations{% endblock %}

{% block body %}


{% if reclamations is empty %}
<p class=\"text-center\">Aucune réclamation n'a été trouvée.</p>
{% else %}
<main id=\"main\" class=\"main\">
    <div class=\"container\">
        <h1 class=\"text-center mb-4\">Liste des Réclamations</h1>
    
        {# Formulaire de recherche avancée #}
        {{ form_start(form) }}
        <div class=\"row mb-3\">
            <div class=\"col-md-4\">
                <div class=\"input-group\">
                    {{ form_row(form.nom, { 'attr': {'class': 'form-control', 'placeholder': 'Nom'} }) }}
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"input-group\">
                    {{ form_row(form.category, { 'attr': {'class': 'form-select'} }) }}
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"input-group\">
                    {{ form_row(form.submissionDate, { 'attr': {'class': 'form-control', 'placeholder': 'Date de soumission'} }) }}
                </div>
            </div>
        </div>
        <div class=\"row mb-3\">
            <div class=\"col-md-12\">
                <div class=\"input-group\">
                    <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher le sujet\" class=\"form-control cool-input\">
                    <span class=\"input-group-text search-icon\"><i class=\"fa fa-search\"></i></span>
                </div>
            </div>
        </div>
        <div class=\"d-grid\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
        {{ form_end(form) }}
    
        <!-- Bouton pour voir les statistiques -->
        <a href=\"{{ path('admin_stats') }}\" class=\"btn btn-info d-block mx-auto mt-4\">Voir les Statistiques</a>
    </div>
   
  
  
      
  
      <section class=\"section\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
  
            
             
            <div class=\"card\">
              <div class=\"card-body\">
                <a href=\"{{ path('add_reply')}}\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 30px;\"></i></a>
                <h5 class=\"card-title\">Reclamations</h5>
              
                <!-- Table with stripped rows -->
                <table class=\"table datatable\">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom et Prénom</th>
                        <th>Catégorie</th>
                        <th>Sujet</th>
                        <th>Description</th>
                        <th>Date de Soumission</th>
                        <th>Supprimer</th>
                        <th>Répondre</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reclamation in reclamations %}
                    <tr>
                        <td>{{ reclamation.id }}</td>
                        <td>{{ reclamation.nom }}</td>
                        <td>{{ reclamation.categorie }}</td>
                        <td>{{ reclamation.sujet }}</td>
                        <td>{{ reclamation.description }}</td>
                        <td>{{ reclamation.subdate ? reclamation.subdate|date('Y-m-d H:i:s') : 'Non spécifiée' }}</td>
                        <td>
                            <a href=\"{{ path('delete_dbreclamation', { 'id': reclamation.id }) }}\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?')\"><i class=\"fa-regular fa-trash-can fa-bounce fa-xl\" style=\"color: #ffffff;\"></i></a>
                        </td>
                        <td>
                            <a href=\"{{ path('add_reply', { 'id': reclamation.id }) }}\" class=\"btn btn-success btn-sm\"><i class=\"fa-solid fa-reply-all fa-shake fa-xl\"></i></a>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endif %}
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#searchInput').on('input', function() {
            var query = \$(this).val().toLowerCase();
            \$('.table tbody tr').each(function() {
                var row = \$(this);
                var sujet = row.find('td:eq(3)').text().toLowerCase(); // Changement de l'index de la colonne
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
", "reply/showdbReclamations.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\reply\\showdbReclamations.html.twig");
    }
}
