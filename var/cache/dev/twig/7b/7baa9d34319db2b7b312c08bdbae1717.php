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

/* user/profile.html.twig */
class __TwigTemplate_8a93cbf32e5a945b004f92a022a90bb5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "user/profile.html.twig", 3);
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
<style>
  /* Profile Details */
.card-title {
  font-size: 1.5rem;
  margin-bottom: 20px;
}

.label {
  font-weight: bold;
  font-size: 20px;
}

.row {
  margin-bottom: 10px;
}

/* Delete Button */
.btn-secondary {
  background-color: #6c757d;
  color: #fff;
  border: none;
}

.btn-secondary:hover {
  background-color: #5a6268;
}

.fa-trash-can {
  font-size: 1.5rem;
}

/* Adjustments */
.profile-overview {
  padding: 20px;
}
</style>

<section class=\"page-title bg-1\" style=\"color: #105f52;\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Your</span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Profile</h1>

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


<div class=\"pagetitle\">
      <!-- <h1 style=\"text-align: center;\">Profile</h1> -->
      
    </div>
    <section class=\"section profile\">
      <div class=\"row\">
        <div class=\"col-xl-4\">

          <div class=\"card\" style=\"margin-left: 5%;\">
            <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
                ";
        // line 76
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "photo", [], "any", false, false, false, 76)))) {
            // line 77
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "photo", [], "any", false, false, false, 77))), "html", null, true);
            echo "\" alt=\"Profile\" style=\"width: 320px; height:320px; border-radius: 50%; \">
              <h4>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "fullname", [], "any", false, false, false, 78), "html", null, true);
            echo "</h4>
              <h5>User</h5>
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
            // line 91
            echo "        <p>No profile photo available</p>
    ";
        }
        // line 93
        echo "        <div class=\"col-xl-8\">

          <div class=\"card\" style=\"margin-right: 3%;\">
            <div class=\"card-body pt-3\">
              <!-- Bordered Tabs -->
              <ul class=\"nav nav-tabs nav-tabs-bordered\" role=\"tablist\">

                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\" aria-selected=\"true\" role=\"tab\">Overview</button>
                </li>

                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edituser", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105)]), "html", null, true);
        echo "\" role=\"tab\" tabindex=\"-1\">Edit Profile</a>
                </li>
                
            
              <div class=\"tab-content pt-2\">

                <div class=\"tab-pane fade profile-overview active show\" id=\"profile-overview\" role=\"tabpanel\">
                 <br>
                 <br>
                 <br>
                  <h5 class=\"card-title\">Profile Details</h5>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label \">User Name:</div>
                    <div class=\"col-lg-12 col-md-8\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "username", [], "any", false, false, false, 118), "html", null, true);
        echo "</div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label \">Full Name:</div>
                    <div class=\"col-lg-12 col-md-8\">";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "fullname", [], "any", false, false, false, 122), "html", null, true);
        echo "</div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Email:</div>
                    <div class=\"col-lg-9 col-md-8\">";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "email", [], "any", false, false, false, 127), "html", null, true);
        echo "</div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Phone:</div>
                    <div class=\"col-lg-9 col-md-8\">";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "phone", [], "any", false, false, false, 132), "html", null, true);
        echo "</div>
                  </div>
<br>
                  <label class=\"btn btn-secondary btn-sm\" title=\"Upload new profile image\">
                    <a href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteuser", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136)]), "html", null, true);
        echo "\"><i class=\"fa-solid fa-trash-can fa-xl\"></i></a>
                    
                </label>
                </div>

                <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\" role=\"tabpanel\">

                  <!-- Profile Edit Form -->
                  <form>
                  ";
        // line 145
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "photo", [], "any", false, false, false, 145)))) {
            // line 146
            echo "                    <div class=\"row mb-3\">
                      <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <img src=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "photo", [], "any", false, false, false, 149))), "html", null, true);
            echo "\" alt=\"Profile\">
                        <div class=\"pt-2\">
                          <a href=\"#\" class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\"><i class=\"bi bi-upload\"></i></a>
                          <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i class=\"bi bi-trash\"></i></a>
                        </div>
                      </div>
                    </div>
";
        } else {
            // line 157
            echo "            <p>No profile photo available</p>
        ";
        }
        // line 159
        echo "    
     
                   

                    
                     


                

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
        return "user/profile.html.twig";
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
        return array (  260 => 159,  256 => 157,  245 => 149,  240 => 146,  238 => 145,  226 => 136,  219 => 132,  211 => 127,  203 => 122,  196 => 118,  180 => 105,  166 => 93,  162 => 91,  146 => 78,  141 => 77,  139 => 76,  68 => 7,  58 => 6,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/user/profile.html.twig #}

{% extends 'base2.html.twig' %}


{% block body %}

<style>
  /* Profile Details */
.card-title {
  font-size: 1.5rem;
  margin-bottom: 20px;
}

.label {
  font-weight: bold;
  font-size: 20px;
}

.row {
  margin-bottom: 10px;
}

/* Delete Button */
.btn-secondary {
  background-color: #6c757d;
  color: #fff;
  border: none;
}

.btn-secondary:hover {
  background-color: #5a6268;
}

.fa-trash-can {
  font-size: 1.5rem;
}

/* Adjustments */
.profile-overview {
  padding: 20px;
}
</style>

<section class=\"page-title bg-1\" style=\"color: #105f52;\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Your</span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Profile</h1>

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


<div class=\"pagetitle\">
      <!-- <h1 style=\"text-align: center;\">Profile</h1> -->
      
    </div>
    <section class=\"section profile\">
      <div class=\"row\">
        <div class=\"col-xl-4\">

          <div class=\"card\" style=\"margin-left: 5%;\">
            <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
                {% if app.user is not null and app.user.photo is not null %}
              <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\" alt=\"Profile\" style=\"width: 320px; height:320px; border-radius: 50%; \">
              <h4>{{ app.user.fullname }}</h4>
              <h5>User</h5>
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

          <div class=\"card\" style=\"margin-right: 3%;\">
            <div class=\"card-body pt-3\">
              <!-- Bordered Tabs -->
              <ul class=\"nav nav-tabs nav-tabs-bordered\" role=\"tablist\">

                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\" aria-selected=\"true\" role=\"tab\">Overview</button>
                </li>

                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" href=\"{{path('edituser',{'id':app.user.id})}}\" role=\"tab\" tabindex=\"-1\">Edit Profile</a>
                </li>
                
            
              <div class=\"tab-content pt-2\">

                <div class=\"tab-pane fade profile-overview active show\" id=\"profile-overview\" role=\"tabpanel\">
                 <br>
                 <br>
                 <br>
                  <h5 class=\"card-title\">Profile Details</h5>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label \">User Name:</div>
                    <div class=\"col-lg-12 col-md-8\">{{ app.user.username }}</div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label \">Full Name:</div>
                    <div class=\"col-lg-12 col-md-8\">{{ app.user.fullname }}</div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Email:</div>
                    <div class=\"col-lg-9 col-md-8\">{{ app.user.email }}</div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Phone:</div>
                    <div class=\"col-lg-9 col-md-8\">{{ app.user.phone }}</div>
                  </div>
<br>
                  <label class=\"btn btn-secondary btn-sm\" title=\"Upload new profile image\">
                    <a href=\"{{path('deleteuser',{'id':app.user.id})}}\"><i class=\"fa-solid fa-trash-can fa-xl\"></i></a>
                    
                </label>
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
    
     
                   

                    
                     


                

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

{% endblock %}
", "user/profile.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\profile.html.twig");
    }
}
