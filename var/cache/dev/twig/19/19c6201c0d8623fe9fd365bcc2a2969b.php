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

/* Admin/showcomments.html.twig */
class __TwigTemplate_b87d5fb61b3bb194711e87972b339dfa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/showcomments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/showcomments.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/showcomments.html.twig", 1);
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
                  <th>
                    <b>id</b>
                  </th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Mail</th>
                  <th>Contenu</th>
                  <th>Likes</th>
                  <th>Dislikes</th>
                  <th>Submit Date</th>
                  <th>Id Post</th>
                  <th>update</th>
                  <th>del</th>
                  <!-- <th>NbComments</th> -->
                  <!-- <th>valid</th> -->
                </tr>
              </thead>
              <tbody>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabbb"]) || array_key_exists("tabbb", $context) ? $context["tabbb"] : (function () { throw new RuntimeError('Variable "tabbb" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 53
            echo "            <tr>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "IdComment", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "NameComment", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "MailComment", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ContenuComment", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "LikesComment", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "DislikesComment", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "DatecreationComment", [], "any", false, false, false, 61), "format", ["Y-m-d"], "method", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "IdPost", [], "any", false, false, false, 62), "Id", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>

                

                <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #007bff;\"  href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editcomment", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">Edit</a></td>
                <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #dc3545;\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletecomment", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Delete</a></td>
                <!-- <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #28a745;\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validpost", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">Valider</a></td> -->
                
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "          </tbody>
        </table>
        </div>
        </div>
        </section>
           

</main>
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<script src=\"";
        // line 82
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
        return "Admin/showcomments.html.twig";
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
        return array (  194 => 82,  182 => 72,  172 => 68,  168 => 67,  164 => 66,  157 => 62,  153 => 61,  149 => 60,  145 => 59,  141 => 58,  137 => 57,  133 => 56,  129 => 55,  125 => 54,  122 => 53,  118 => 52,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

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
                  <th>
                    <b>id</b>
                  </th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Mail</th>
                  <th>Contenu</th>
                  <th>Likes</th>
                  <th>Dislikes</th>
                  <th>Submit Date</th>
                  <th>Id Post</th>
                  <th>update</th>
                  <th>del</th>
                  <!-- <th>NbComments</th> -->
                  <!-- <th>valid</th> -->
                </tr>
              </thead>
              <tbody>
                {% for i in tabbb %}
            <tr>
                <td>{{i.id}}</td>
                <td>{{i.IdComment}}</td>
                <td>{{i.NameComment}}</td>
                <td>{{i.MailComment}}</td>
                <td>{{i.ContenuComment}}</td>
                <td>{{i.LikesComment}}</td>
                <td>{{i.DislikesComment}}</td>
                <td>{{i.DatecreationComment.format('Y-m-d')}}</td>
                <td>{{i.IdPost.Id}}</td>

                

                <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #007bff;\"  href=\"{{path('editcomment',{'id':i.id})}}\">Edit</a></td>
                <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #dc3545;\" href=\"{{path('deletecomment',{'id':i.id})}}\">Delete</a></td>
                <!-- <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #28a745;\" href=\"{{path('validpost',{'id':i.id})}}\">Valider</a></td> -->
                
            </tr>
            {% endfor %}
          </tbody>
        </table>
        </div>
        </div>
        </section>
           

</main>
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<script src=\"{{asset('assets/js/main.js')}}\"></script>

{% endblock %}", "Admin/showcomments.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\Admin\\showcomments.html.twig");
    }
}
