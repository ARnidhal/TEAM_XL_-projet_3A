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

/* reply/showReplies.html.twig */
class __TwigTemplate_dcaa3ce6d9531b5897a9aeb9e1142b51 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reply/showReplies.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reply/showReplies.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reply/showReplies.html.twig", 1);
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

        echo "Liste des Réponses";
        
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
        echo "<main id=\"main\" class=\"main\">
    <!-- Bouton pour changer de langue -->
   
  
  
      <
  
      <section class=\"section\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
  
            
             
            <div class=\"card\">
              <div class=\"card-body\">
                <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_reply");
        echo "\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 30px;\"></i></a>
                <h5 class=\"card-title\">Replies</h5>
           
                <!-- Table with stripped rows -->
                <table class=\"table datatable\">
                  <thead>
                <tr>
                    <th>ID</th>
                    <th>Date de Réponse</th>
                    <th>Contenu</th>
                    <th>Catégorie</th> 
                    <th>Réclamation</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["replies"]) || array_key_exists("replies", $context) ? $context["replies"] : (function () { throw new RuntimeError('Variable "replies" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 39
            echo "                    <tr>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "repdate", [], "any", false, false, false, 41), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "content", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reply"], "reclamation", [], "any", false, false, false, 43), "categorie", [], "any", false, false, false, 43), "html", null, true);
            echo "</td> <!-- Afficher la catégorie de la réclamation -->
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reply"], "reclamation", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_reply", ["id" => twig_get_attribute($this->env, $this->source, $context["reply"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\" title=\"Modifier\"><i class=\"fas fa-edit fa-shake\"></i></a></td>
                           <td> <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_reply", ["id" => twig_get_attribute($this->env, $this->source, $context["reply"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\" title=\"Supprimer\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réponse ?')\"><i class=\"fas fa-trash fa-bounce\"></i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>

        <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_reply");
        echo "\" class=\"btn btn-primary d-block mx-auto mt-4\">Ajouter une réponse</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reply/showReplies.html.twig";
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
        return array (  172 => 54,  167 => 51,  157 => 47,  153 => 46,  148 => 44,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  129 => 39,  125 => 38,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Réponses{% endblock %}

{% block body %}
<main id=\"main\" class=\"main\">
    <!-- Bouton pour changer de langue -->
   
  
  
      <
  
      <section class=\"section\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
  
            
             
            <div class=\"card\">
              <div class=\"card-body\">
                <a href=\"{{ path('add_reply')}}\"><i class=\"ri-arrow-left-circle-fill\" style=\"font-size: 30px;\"></i></a>
                <h5 class=\"card-title\">Replies</h5>
           
                <!-- Table with stripped rows -->
                <table class=\"table datatable\">
                  <thead>
                <tr>
                    <th>ID</th>
                    <th>Date de Réponse</th>
                    <th>Contenu</th>
                    <th>Catégorie</th> 
                    <th>Réclamation</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                {% for reply in replies %}
                    <tr>
                        <td>{{ reply.id }}</td>
                        <td>{{ reply.repdate|date('Y-m-d H:i:s') }}</td>
                        <td>{{ reply.content }}</td>
                        <td>{{ reply.reclamation.categorie }}</td> <!-- Afficher la catégorie de la réclamation -->
                        <td>{{ reply.reclamation.id }}</td>
                        <td>
                            <a href=\"{{ path('edit_reply', {'id': reply.id}) }}\" class=\"btn btn-sm btn-primary\" title=\"Modifier\"><i class=\"fas fa-edit fa-shake\"></i></a></td>
                           <td> <a href=\"{{ path('delete_reply', {'id': reply.id}) }}\" class=\"btn btn-sm btn-danger\" title=\"Supprimer\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réponse ?')\"><i class=\"fas fa-trash fa-bounce\"></i></a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('add_reply') }}\" class=\"btn btn-primary d-block mx-auto mt-4\">Ajouter une réponse</a>
    </div>
{% endblock %}
", "reply/showReplies.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\reply\\showReplies.html.twig");
    }
}
