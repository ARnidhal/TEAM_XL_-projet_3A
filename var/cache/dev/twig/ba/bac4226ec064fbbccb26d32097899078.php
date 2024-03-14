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

/* user/edituser.html.twig */
class __TwigTemplate_89ee72186106ddbc79cf38dad0d9f523 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edituser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edituser.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "user/edituser.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "<div class=\"pagetitle\">
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
        // line 22
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "photo", [], "any", false, false, false, 22)))) {
            // line 23
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "photo", [], "any", false, false, false, 23))), "html", null, true);
            echo "\" alt=\"Profile\" style=\"width: 320px; height:320px; border-radius: 50%;\">
          <h2>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "fullname", [], "any", false, false, false, 24), "html", null, true);
            echo "</h2>
          <h3>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "roles", [], "any", false, false, false, 25), 0, [], "array", false, false, false, 25), "html", null, true);
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
            // line 37
            echo "    <p>No profile photo available</p>
";
        }
        // line 39
        echo "    <div class=\"col-xl-8\">

      <div class=\"card\">
        <div class=\"card-body pt-3\">
          <!-- Bordered Tabs -->
          <ul class=\"nav nav-tabs nav-tabs-bordered\" role=\"tablist\">

            <li class=\"nav-item\" role=\"presentation\">
              <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\" role=\"tab\" tabindex=\"-1\">OverView</a>
          </li>

            <li class=\"nav-item\" role=\"presentation\">
              <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\" aria-selected=\"false\" role=\"tab\" tabindex=\"-1\">Edit Profile</button>
            </li>

        
          <div class=\"tab-content pt-2\">

          <br>
          <br>

            <div class=\"tab-pane fade profile-edit pt-3 active show\" id=\"profile-edit\" role=\"tabpanel\">

              <!-- Profile Edit Form -->
              ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"row mb-3\">
                  <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                  <div class=\"col-md-8 col-lg-9\">
                    ";
        // line 67
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "photo", [], "any", false, false, false, 67)))) {
            // line 68
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "photo", [], "any", false, false, false, 68))), "html", null, true);
            echo "\" alt=\"Profile\" style=\"width: 120px; height:120px; border-radius: 50%;\">
                    ";
        } else {
            // line 70
            echo "                          <p>No profile photo available</p>
                      ";
        }
        // line 72
        echo "                              
                        
                      
                    </div>
                  </div>
                </div>
                    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
                    ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row mb-3\">
                      <label for=\"fullName\" class=\"col-md-4 col-lg-5 col-form-label\">User Name</label>
                      <div class=\"col-md-9 col-lg-7\">
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "username", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "username", [], "any", false, false, false, 84), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"fullName\" class=\"col-md-4 col-lg-5 col-form-label\">Full Name</label>
                      <div class=\"col-md-5 col-lg-7\">
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "fullname", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "fullname", [], "any", false, false, false, 91), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"about\" class=\"col-md-4 col-lg-5 col-form-label\">Email</label>
                      <div class=\"col-md-5 col-lg-7\">
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "email", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"company\" class=\"col-md-4 col-lg-5 col-form-label\">Phone Number</label>
                      <div class=\"col-md-5 col-lg-7\">
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "phone", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "phone", [], "any", false, false, false, 106), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Job\" class=\"col-md-4 col-lg-5 col-form-label\">Password</label>
                      <div class=\"col-md-8 col-lg-7\">
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "password", [], "any", false, false, false, 113), "first", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "password", [], "any", false, false, false, 114), "first", [], "any", false, false, false, 114), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                 
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Country\" class=\"col-md-4 col-lg-5 col-form-label\">Confirm Password</label>
                      <div class=\"col-md-8 col-lg-7\">
                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "password", [], "any", false, false, false, 122), "second", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "password", [], "any", false, false, false, 123), "second", [], "any", false, false, false, 123), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"Country\" class=\"col-md-4 col-lg-5 col-form-label\">Profile Photo</label>
                      <div class=\"col-md-8 col-lg-7\">
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "photo", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                      </div>
                    </div>

                    <div class=\"text-center\">
                      
                      ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "Submit", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                    </div>
                    ";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), 'form_end');
        echo "
                    <!-- End Profile Edit Form -->

                </div>
               
                       

              
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
        return "user/edituser.html.twig";
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
        return array (  276 => 137,  271 => 135,  262 => 129,  253 => 123,  249 => 122,  238 => 114,  234 => 113,  224 => 106,  220 => 105,  210 => 98,  206 => 97,  197 => 91,  193 => 90,  184 => 84,  180 => 83,  173 => 79,  164 => 72,  160 => 70,  154 => 68,  152 => 67,  145 => 63,  126 => 47,  116 => 39,  112 => 37,  97 => 25,  93 => 24,  88 => 23,  86 => 22,  68 => 6,  58 => 5,  35 => 3,);
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
          <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\" alt=\"Profile\" style=\"width: 320px; height:320px; border-radius: 50%;\">
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
              <a class=\"nav-link\" href=\"{{path('profile')}}\" role=\"tab\" tabindex=\"-1\">OverView</a>
          </li>

            <li class=\"nav-item\" role=\"presentation\">
              <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-edit\" aria-selected=\"false\" role=\"tab\" tabindex=\"-1\">Edit Profile</button>
            </li>

        
          <div class=\"tab-content pt-2\">

          <br>
          <br>

            <div class=\"tab-pane fade profile-edit pt-3 active show\" id=\"profile-edit\" role=\"tabpanel\">

              <!-- Profile Edit Form -->
              {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
                <div class=\"row mb-3\">
                  <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                  <div class=\"col-md-8 col-lg-9\">
                    {% if app.user is not null and app.user.photo is not null %}
                    <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\" alt=\"Profile\" style=\"width: 120px; height:120px; border-radius: 50%;\">
                    {% else %}
                          <p>No profile photo available</p>
                      {% endif %}
                              
                        
                      
                    </div>
                  </div>
                </div>
                    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
                    {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
                    <div class=\"row mb-3\">
                      <label for=\"fullName\" class=\"col-md-4 col-lg-5 col-form-label\">User Name</label>
                      <div class=\"col-md-9 col-lg-7\">
                        {{ form_widget (form.username, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors (form.username, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"fullName\" class=\"col-md-4 col-lg-5 col-form-label\">Full Name</label>
                      <div class=\"col-md-5 col-lg-7\">
                        {{ form_widget (form.fullname, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors (form.fullname, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"about\" class=\"col-md-4 col-lg-5 col-form-label\">Email</label>
                      <div class=\"col-md-5 col-lg-7\">
                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors (form.email, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"company\" class=\"col-md-4 col-lg-5 col-form-label\">Phone Number</label>
                      <div class=\"col-md-5 col-lg-7\">
                        {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors (form.phone, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Job\" class=\"col-md-4 col-lg-5 col-form-label\">Password</label>
                      <div class=\"col-md-8 col-lg-7\">
                        {{ form_widget(form.password.first, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors (form.password.first, {'attr': {'class': 'form-danger'}}) }}
                 
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Country\" class=\"col-md-4 col-lg-5 col-form-label\">Confirm Password</label>
                      <div class=\"col-md-8 col-lg-7\">
                        {{ form_widget(form.password.second, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors (form.password.second, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"Country\" class=\"col-md-4 col-lg-5 col-form-label\">Profile Photo</label>
                      <div class=\"col-md-8 col-lg-7\">
                        {{ form_widget(form.photo, {'attr': {'class': 'form-control'}}) }}
                      </div>
                    </div>

                    <div class=\"text-center\">
                      
                      {{ form_widget(form.Submit, {'attr': {'class': 'btn btn-primary'}}) }}
                    </div>
                    {{ form_end(form) }}
                    <!-- End Profile Edit Form -->

                </div>
               
                       

              
            </div>
          </div>

        </div>
      </div>
    </section>

{% endblock %}
", "user/edituser.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\edituser.html.twig");
    }
}
