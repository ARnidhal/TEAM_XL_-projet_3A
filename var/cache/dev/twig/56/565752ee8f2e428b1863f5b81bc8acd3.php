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

/* user/showdbuser.html.twig */
class __TwigTemplate_3bd3e7773fecbb9ea5965a3757ea17bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/showdbuser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/showdbuser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/showdbuser.html.twig", 1);
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
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    
                    <th>Role</th>
                 
                    <th>Photo</th>
                    <th>Delete</th>
                    <th>Switch</th>
                    <th>Block</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 45
            echo "                  <tr>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "username", [], "any", false, false, false, 47), "html", null, true);
            echo "</td> 
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "fullname", [], "any", false, false, false, 48), "html", null, true);
            echo "</td> 
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                  
    ";
            // line 51
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["a"], "roles", [], "any", false, false, false, 51)) && twig_in_filter("user", twig_get_attribute($this->env, $this->source, $context["a"], "roles", [], "any", false, false, false, 51)))) {
                // line 52
                echo "    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "roles", [], "any", false, false, false, 52), 0, [], "array", false, false, false, 52), "html", null, true);
                echo "</td>
    
    ";
            }
            // line 55
            echo "

  ";
            // line 57
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["a"], "photo", [], "any", false, false, false, 57))) {
                // line 58
                echo "<td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, $context["a"], "photo", [], "any", false, false, false, 58))), "html", null, true);
                echo "\"  style=\"width: 80px; height: 80px; \"></td>
";
            } else {
                // line 60
                echo "No Photo
";
            }
            // line 62
            echo "    <td>
      <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteuserad", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\"><i class=\"fa-solid fa-trash-can \"></i></a>
    </td>  

    <td>
      ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "roles", [], "any", false, false, false, 67), 0, [], "array", false, false, false, 67) == "admin")) {
                // line 68
                echo "          <a class=\"btn btn-warning\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("switchroleutoser", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                echo "\">to User
              <!--<i class=\"fa-solid fa-repeat fa-spin fa-flip-both\" style=\"color: fffafa;\"></i> -->
          </a>
      ";
            } else {
                // line 72
                echo "          <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("switchroleadmin", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\">to Admin
              <!--<i class=\"fa-solid fa-repeat fa-spin fa-flip-both\" style=\"color: fffafa;\"></i> -->
          </a>
      ";
            }
            // line 76
            echo "  </td>
                    ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, $context["a"], "token", [], "any", false, false, false, 77) == 1)) {
                // line 78
                echo "                    <td> <a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("block_user", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\" ><i class=\"fa-solid fa-ban fa-beat\"></i></a></td>
                    ";
            } else {
                // line 80
                echo "                    <td> <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unblock_user", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\" ><i class=\"fa-solid fa-ban fa-beat\"></i></a></td>
                    ";
            }
            // line 82
            echo "                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
          
        </div>
      </div>
    </section>
    <section class=\"section\" id=\"pdfSection\" style=\"display: none;\">
      <h2>Liste des Profils</h2>
      <iframe id=\"pdfFrame\" src=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdfadmin");
        echo "\" width=\"100%\" height=\"600px\"></iframe>
  </section>
    <button id=\"toggleButton\" onclick=\"toggleView()\" class=\"btn btn-secondary\"><i class=\"fa-solid fa-file-pdf fa-xl\"></i></button>

  </main><!-- End #main -->
 <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
 <script>
  function toggleView() {
      var pdfSection = document.getElementById('pdfSection');
      var dataTablesSection = document.querySelector('.section');

      if (pdfSection.style.display === 'none') {
          pdfSection.style.display = 'block';
          dataTablesSection.style.display = 'none';
      } else {
          pdfSection.style.display = 'none';
          dataTablesSection.style.display = 'block';
      }
  }
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
        return "user/showdbuser.html.twig";
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
        return array (  225 => 96,  211 => 84,  204 => 82,  198 => 80,  192 => 78,  190 => 77,  187 => 76,  179 => 72,  171 => 68,  169 => 67,  162 => 63,  159 => 62,  155 => 60,  149 => 58,  147 => 57,  143 => 55,  136 => 52,  134 => 51,  129 => 49,  125 => 48,  121 => 47,  117 => 46,  114 => 45,  110 => 44,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    
                    <th>Role</th>
                 
                    <th>Photo</th>
                    <th>Delete</th>
                    <th>Switch</th>
                    <th>Block</th>
                  </tr>
                </thead>
                <tbody>
                  {%for a in user %}
                  <tr>
                    <td>{{a.id}}</td>
                    <td>{{a.username}}</td> 
                    <td>{{a.fullname}}</td> 
                    <td>{{a.email}}</td>
                  
    {% if a.roles is not empty and 'user'  in a.roles %}
    <td>{{a.roles[0]}}</td>
    
    {% endif %}


  {% if a.photo is not empty %}
<td><img src=\"{{ asset('uploads/photos/' ~ a.photo) }}\"  style=\"width: 80px; height: 80px; \"></td>
{% else %}
No Photo
{% endif %}
    <td>
      <a href=\"{{ path('deleteuserad', {'id': a.id}) }}\" class=\"btn btn-secondary\"><i class=\"fa-solid fa-trash-can \"></i></a>
    </td>  

    <td>
      {% if a.roles[0] == 'admin' %}
          <a class=\"btn btn-warning\" href=\"{{ path('switchroleutoser', {'id': a.id}) }}\">to User
              <!--<i class=\"fa-solid fa-repeat fa-spin fa-flip-both\" style=\"color: fffafa;\"></i> -->
          </a>
      {% else %}
          <a class=\"btn btn-primary\" href=\"{{ path('switchroleadmin', {'id': a.id}) }}\">to Admin
              <!--<i class=\"fa-solid fa-repeat fa-spin fa-flip-both\" style=\"color: fffafa;\"></i> -->
          </a>
      {% endif %}
  </td>
                    {% if a.token == 1 %}
                    <td> <a class=\"btn btn-danger\" href=\"{{ path('block_user', {'id': a.id}) }}\" ><i class=\"fa-solid fa-ban fa-beat\"></i></a></td>
                    {% else %}
                    <td> <a class=\"btn btn-success\" href=\"{{ path('unblock_user', {'id': a.id}) }}\" ><i class=\"fa-solid fa-ban fa-beat\"></i></a></td>
                    {% endif %}
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
    <section class=\"section\" id=\"pdfSection\" style=\"display: none;\">
      <h2>Liste des Profils</h2>
      <iframe id=\"pdfFrame\" src=\"{{ path('pdfadmin') }}\" width=\"100%\" height=\"600px\"></iframe>
  </section>
    <button id=\"toggleButton\" onclick=\"toggleView()\" class=\"btn btn-secondary\"><i class=\"fa-solid fa-file-pdf fa-xl\"></i></button>

  </main><!-- End #main -->
 <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
 <script>
  function toggleView() {
      var pdfSection = document.getElementById('pdfSection');
      var dataTablesSection = document.querySelector('.section');

      if (pdfSection.style.display === 'none') {
          pdfSection.style.display = 'block';
          dataTablesSection.style.display = 'none';
      } else {
          pdfSection.style.display = 'none';
          dataTablesSection.style.display = 'block';
      }
  }
</script>
 
  {% endblock %}", "user/showdbuser.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\showdbuser.html.twig");
    }
}
