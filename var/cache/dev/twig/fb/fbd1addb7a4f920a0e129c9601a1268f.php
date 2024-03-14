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

/* user/profiledoc.html.twig */
class __TwigTemplate_281d187d5516fb64888e76d47f21d153 extends Template
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
        // line 3
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profiledoc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profiledoc.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "user/profiledoc.html.twig", 3);
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
<div class=\"pagetitle\">
      <h1>Profile</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Users</li>
          <li class=\"breadcrumb-item active\">Profile</li>
        </ol>
      </nav>
    </div>
    <section class=\"section profile\">
      <div class=\"row\">
        <div class=\"col-xl-4\">

          <div class=\"card\">
            <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
                ";
        // line 24
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "photo", [], "any", false, false, false, 24)))) {
            // line 25
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "photo", [], "any", false, false, false, 25))), "html", null, true);
            echo "\" alt=\"Profile\" class=\"rounded-circle\" style=\"width: 320px; height:320px; border-radius: 50%; \">
              <h2>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "fullname", [], "any", false, false, false, 26), "html", null, true);
            echo "</h2>
              <h3>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "roles", [], "any", false, false, false, 27), 0, [], "array", false, false, false, 27), "html", null, true);
            echo "</h3>
              <div class=\"social-links mt-2\">
                <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
          </div>

        </div>
        ";
        } else {
            // line 39
            echo "        <p>No profile photo available</p>
    ";
        }
        // line 41
        echo "        <div class=\"col-xl-8\">

          <div class=\"card\">
            <div class=\"card-body pt-3\">
              <!-- Bordered Tabs -->
              <ul class=\"nav nav-tabs nav-tabs-bordered\" role=\"tablist\">

                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\" aria-selected=\"true\" role=\"tab\">Overview</button>
                </li>

                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editdoc", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" role=\"tab\" tabindex=\"-1\">Edit Profile</a>
                </li>
                
            
              <div class=\"tab-content pt-2\">

                <div class=\"tab-pane fade profile-overview active show\" id=\"profile-overview\" role=\"tabpanel\">
                 <br>
                 <br>
                 <br>
                  <h5 class=\"card-title\">Profile Details</h5>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label \">User Name</div>
                    <div class=\"col-lg-12 col-md-8\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "username", [], "any", false, false, false, 66), "html", null, true);
        echo "</div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label \">Full Name</div>
                    <div class=\"col-lg-12 col-md-8\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "fullname", [], "any", false, false, false, 70), "html", null, true);
        echo "</div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Email</div>
                    <div class=\"col-lg-9 col-md-8\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "email", [], "any", false, false, false, 75), "html", null, true);
        echo "</div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Phone</div>
                    <div class=\"col-lg-9 col-md-8\">";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "phone", [], "any", false, false, false, 80), "html", null, true);
        echo "</div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Speciality</div>
                    <div class=\"col-lg-9 col-md-8\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "specialite", [], "any", false, false, false, 84), "html", null, true);
        echo "</div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Adress</div>
                    <div class=\"col-lg-9 col-md-8\">";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "adress", [], "any", false, false, false, 88), "html", null, true);
        echo "</div>
                  </div>
<br>
                  <label class=\"btn btn-secondary btn-sm\" title=\"Upload new profile image\">
                    <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteuser", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)]), "html", null, true);
        echo "\"><i class=\"fa-solid fa-trash-can fa-xl\"></i></a>
                    
                </label>
                </div>
                </div>

                <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\" role=\"tabpanel\">

                  <!-- Profile Edit Form -->
                  <form>
                  ";
        // line 102
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "photo", [], "any", false, false, false, 102)))) {
            // line 103
            echo "                    <div class=\"row mb-3\">
                      <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <img src=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "photo", [], "any", false, false, false, 106))), "html", null, true);
            echo "\" alt=\"Profile\">
                        <div class=\"pt-2\">
                          <a href=\"#\" class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\"><i class=\"bi bi-upload\"></i></a>
                          <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i class=\"bi bi-trash\"></i></a>
                        </div>
                      </div>
                    </div>
";
        } else {
            // line 114
            echo "            <p>No profile photo available</p>
        ";
        }
        // line 116
        echo "    
     
                  
                   

                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                
                
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/profiledoc.html.twig";
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
        return array (  226 => 116,  222 => 114,  211 => 106,  206 => 103,  204 => 102,  191 => 92,  184 => 88,  177 => 84,  170 => 80,  162 => 75,  154 => 70,  147 => 66,  131 => 53,  117 => 41,  113 => 39,  98 => 27,  94 => 26,  89 => 25,  87 => 24,  68 => 7,  58 => 6,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/user/profile.html.twig #}

{% extends 'base2.html.twig' %}


{% block body %}

<div class=\"pagetitle\">
      <h1>Profile</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Users</li>
          <li class=\"breadcrumb-item active\">Profile</li>
        </ol>
      </nav>
    </div>
    <section class=\"section profile\">
      <div class=\"row\">
        <div class=\"col-xl-4\">

          <div class=\"card\">
            <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
                {% if app.user is not null and app.user.photo is not null %}
              <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\" alt=\"Profile\" class=\"rounded-circle\" style=\"width: 320px; height:320px; border-radius: 50%; \">
              <h2>{{ app.user.fullname }}</h2>
              <h3>{{ app.user.roles[0] }}</h3>
              <div class=\"social-links mt-2\">
                <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
          </div>

        </div>
        {% else %}
        <p>No profile photo available</p>
    {% endif %}
        <div class=\"col-xl-8\">

          <div class=\"card\">
            <div class=\"card-body pt-3\">
              <!-- Bordered Tabs -->
              <ul class=\"nav nav-tabs nav-tabs-bordered\" role=\"tablist\">

                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\" aria-selected=\"true\" role=\"tab\">Overview</button>
                </li>

                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" href=\"{{path('editdoc',{'id':app.user.id})}}\" role=\"tab\" tabindex=\"-1\">Edit Profile</a>
                </li>
                
            
              <div class=\"tab-content pt-2\">

                <div class=\"tab-pane fade profile-overview active show\" id=\"profile-overview\" role=\"tabpanel\">
                 <br>
                 <br>
                 <br>
                  <h5 class=\"card-title\">Profile Details</h5>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label \">User Name</div>
                    <div class=\"col-lg-12 col-md-8\">{{ app.user.username }}</div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label \">Full Name</div>
                    <div class=\"col-lg-12 col-md-8\">{{ app.user.fullname }}</div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Email</div>
                    <div class=\"col-lg-9 col-md-8\">{{ app.user.email }}</div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Phone</div>
                    <div class=\"col-lg-9 col-md-8\">{{ app.user.phone }}</div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Speciality</div>
                    <div class=\"col-lg-9 col-md-8\">{{ app.user.specialite }}</div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Adress</div>
                    <div class=\"col-lg-9 col-md-8\">{{ app.user.adress }}</div>
                  </div>
<br>
                  <label class=\"btn btn-secondary btn-sm\" title=\"Upload new profile image\">
                    <a href=\"{{path('deleteuser',{'id':app.user.id})}}\"><i class=\"fa-solid fa-trash-can fa-xl\"></i></a>
                    
                </label>
                </div>
                </div>

                <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\" role=\"tabpanel\">

                  <!-- Profile Edit Form -->
                  <form>
                  {% if app.user is not null and app.user.photo is not null %}
                    <div class=\"row mb-3\">
                      <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\" alt=\"Profile\">
                        <div class=\"pt-2\">
                          <a href=\"#\" class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\"><i class=\"bi bi-upload\"></i></a>
                          <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i class=\"bi bi-trash\"></i></a>
                        </div>
                      </div>
                    </div>
{% else %}
            <p>No profile photo available</p>
        {% endif %}
    
     
                  
                   

                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                
                
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

{% endblock %}
", "user/profiledoc.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\profiledoc.html.twig");
    }
}
