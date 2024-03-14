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

/* Admin/index.html.twig */
class __TwigTemplate_a8ab1b08457221380966c31438b28944 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/index.html.twig", 1);
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
                  <th>Type</th>
                  <th>Title</th>
                  <th>Contenu</th>
                  <th>validation</th>
                  <th>Likes</th>
                  <th>Dislikes</th>
                  <th>NbComments</th>
                  <th>Submit Date</th>
                  <th>Phone Number</th>
                  <th>update</th>
                  <th>del</th>
                  <th>valid</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabb"]) || array_key_exists("tabb", $context) ? $context["tabb"] : (function () { throw new RuntimeError('Variable "tabb" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 54
            echo "            <tr>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "IDPost", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "TypePost", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "TitlePost", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ContenuPost", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>
                  ";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["i"], "ValidationPost", [], "any", false, false, false, 61) == 1)) {
                // line 62
                echo "                     <span style=\"background-color: green;color: white; padding: 2px 5px;border-radius: 3px;\">Valid</span> 
                  ";
            } else {
                // line 64
                echo "                  <span style=\"background-color: red;color: white; padding: 2px 5px;border-radius: 3px;\">Not Valid</span>
                  ";
            }
            // line 66
            echo "              </td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "LikesPost", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "DislikesPost", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "NbCommentsPost", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "MakedatePost", [], "any", false, false, false, 70), "format", ["Y-m-d"], "method", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Phonenumber", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>

                <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #007bff;\"  href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editpost", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">Edit</a></td>
                <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #dc3545;\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletepost", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">Delete</a></td>
                <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #28a745;\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validpost", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">Valider</a></td>
                
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "          </tbody>
        </table>
      
        </div>
        </div>
        </section>
        <section class=\"section\">
          <div class=\"card\">
              <div class=\"card-body pb-0\">
                  <h5 class=\"card-title\">Post Types</h5>
      
                  <div id=\"postTypeChart\" style=\"min-height: 400px;\"></div>
      
                  <script>
                      document.addEventListener(\"DOMContentLoaded\", () => {
                          const postTypes = [
                              { value: ";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["nummed"]) || array_key_exists("nummed", $context) ? $context["nummed"] : (function () { throw new RuntimeError('Variable "nummed" does not exist.', 95, $this->source); })()), "html", null, true);
        echo ", name: 'Medicine' },
                              { value: ";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["numlab"]) || array_key_exists("numlab", $context) ? $context["numlab"] : (function () { throw new RuntimeError('Variable "numlab" does not exist.', 96, $this->source); })()), "html", null, true);
        echo ", name: 'Lab Test' },
                              { value: ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["numequip"]) || array_key_exists("numequip", $context) ? $context["numequip"] : (function () { throw new RuntimeError('Variable "numequip" does not exist.', 97, $this->source); })()), "html", null, true);
        echo ", name: 'Equipments' },
                              { value: ";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["numcouns"]) || array_key_exists("numcouns", $context) ? $context["numcouns"] : (function () { throw new RuntimeError('Variable "numcouns" does not exist.', 98, $this->source); })()), "html", null, true);
        echo ", name: 'Free Counselling' },
                              { value: ";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["numhart"]) || array_key_exists("numhart", $context) ? $context["numhart"] : (function () { throw new RuntimeError('Variable "numhart" does not exist.', 99, $this->source); })()), "html", null, true);
        echo ", name: 'Heart' }
                          ];
      
                          const chart = echarts.init(document.querySelector(\"#postTypeChart\"));
                          chart.setOption({
                              tooltip: { trigger: 'item' },
                              legend: { orient: 'vertical', left: 'left' },
                              series: [{
                                  name: 'Post Types',
                                  type: 'pie',
                                  radius: ['40%', '70%'],
                                  avoidLabelOverlap: false,
                                  label: { show: false, position: 'center' },
                                  emphasis: { label: { show: true, fontSize: '18', fontWeight: 'bold' } },
                                  labelLine: { show: false },
                                  data: postTypes
                              }]
                          });
                      });
                  </script>
              </div>
          </div>
      </section>
      
           

</main>
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<script src=\"";
        // line 128
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
        return "Admin/index.html.twig";
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
        return array (  265 => 128,  233 => 99,  229 => 98,  225 => 97,  221 => 96,  217 => 95,  199 => 79,  189 => 75,  185 => 74,  181 => 73,  176 => 71,  172 => 70,  168 => 69,  164 => 68,  160 => 67,  157 => 66,  153 => 64,  149 => 62,  147 => 61,  142 => 59,  138 => 58,  134 => 57,  130 => 56,  126 => 55,  123 => 54,  119 => 53,  68 => 4,  58 => 3,  35 => 1,);
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
                  <th>Type</th>
                  <th>Title</th>
                  <th>Contenu</th>
                  <th>validation</th>
                  <th>Likes</th>
                  <th>Dislikes</th>
                  <th>NbComments</th>
                  <th>Submit Date</th>
                  <th>Phone Number</th>
                  <th>update</th>
                  <th>del</th>
                  <th>valid</th>
                </tr>
              </thead>
              <tbody>
                {% for i in tabb %}
            <tr>
                <td>{{i.id}}</td>
                <td>{{i.IDPost}}</td>
                <td>{{i.TypePost}}</td>
                <td>{{i.TitlePost}}</td>
                <td>{{i.ContenuPost}}</td>
                <td>
                  {% if i.ValidationPost == 1 %}
                     <span style=\"background-color: green;color: white; padding: 2px 5px;border-radius: 3px;\">Valid</span> 
                  {% else %}
                  <span style=\"background-color: red;color: white; padding: 2px 5px;border-radius: 3px;\">Not Valid</span>
                  {% endif %}
              </td>
                <td>{{i.LikesPost}}</td>
                <td>{{i.DislikesPost}}</td>
                <td>{{i.NbCommentsPost}}</td>
                <td>{{i.MakedatePost.format('Y-m-d')}}</td>
                <td>{{i.Phonenumber}}</td>

                <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #007bff;\"  href=\"{{path('editpost',{'id':i.id})}}\">Edit</a></td>
                <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #dc3545;\" href=\"{{path('deletepost',{'id':i.id})}}\">Delete</a></td>
                <td><a style=\"display: inline-block;padding: 6px 12px;margin: 2px;text-decoration: none;border-radius: 4px;color: #fff;background-color: #28a745;\" href=\"{{path('validpost',{'id':i.id})}}\">Valider</a></td>
                
            </tr>
            {% endfor %}
          </tbody>
        </table>
      
        </div>
        </div>
        </section>
        <section class=\"section\">
          <div class=\"card\">
              <div class=\"card-body pb-0\">
                  <h5 class=\"card-title\">Post Types</h5>
      
                  <div id=\"postTypeChart\" style=\"min-height: 400px;\"></div>
      
                  <script>
                      document.addEventListener(\"DOMContentLoaded\", () => {
                          const postTypes = [
                              { value: {{ nummed }}, name: 'Medicine' },
                              { value: {{ numlab }}, name: 'Lab Test' },
                              { value: {{ numequip }}, name: 'Equipments' },
                              { value: {{ numcouns }}, name: 'Free Counselling' },
                              { value: {{ numhart }}, name: 'Heart' }
                          ];
      
                          const chart = echarts.init(document.querySelector(\"#postTypeChart\"));
                          chart.setOption({
                              tooltip: { trigger: 'item' },
                              legend: { orient: 'vertical', left: 'left' },
                              series: [{
                                  name: 'Post Types',
                                  type: 'pie',
                                  radius: ['40%', '70%'],
                                  avoidLabelOverlap: false,
                                  label: { show: false, position: 'center' },
                                  emphasis: { label: { show: true, fontSize: '18', fontWeight: 'bold' } },
                                  labelLine: { show: false },
                                  data: postTypes
                              }]
                          });
                      });
                  </script>
              </div>
          </div>
      </section>
      
           

</main>
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<script src=\"{{asset('assets/js/main.js')}}\"></script>

{% endblock %}", "Admin/index.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\Admin\\index.html.twig");
    }
}
