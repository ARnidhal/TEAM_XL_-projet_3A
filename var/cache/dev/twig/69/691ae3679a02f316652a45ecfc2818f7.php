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

/* user/editdoc.html.twig */
class __TwigTemplate_cf2c753bc73fcba80fa30f9b7c61e372 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editdoc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editdoc.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "user/editdoc.html.twig", 3);
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
        // line 23
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "photo", [], "any", false, false, false, 23)))) {
            // line 24
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "photo", [], "any", false, false, false, 24))), "html", null, true);
            echo "\" alt=\"Profile\" class=\"rounded-circle\">
              <h2>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "fullname", [], "any", false, false, false, 25), "html", null, true);
            echo "</h2>
              <h3>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "roles", [], "any", false, false, false, 26), 0, [], "array", false, false, false, 26), "html", null, true);
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
            // line 38
            echo "        <p>No profile photo available</p>
    ";
        }
        // line 40
        echo "        <div class=\"col-xl-8\">

          <div class=\"card\">
            <div class=\"card-body pt-3\">
              <!-- Bordered Tabs -->
              <ul class=\"nav nav-tabs nav-tabs-bordered\" role=\"tablist\">

                <li class=\"nav-item\" role=\"presentation\">
                  <a class=\"nav-link\" href=\"";
        // line 48
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
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row mb-3\">
                      <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                      <div class=\"col-md-8 col-lg-9\">
                        ";
        // line 68
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "photo", [], "any", false, false, false, 68)))) {
            // line 69
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "photo", [], "any", false, false, false, 69))), "html", null, true);
            echo "\"  alt=\"Profile\" style=\"width: 120px; height:120px; border-radius: 50%;\">
                        ";
        } else {
            // line 71
            echo "                              <p>No profile photo available</p>
                          ";
        }
        // line 73
        echo "                      
                                
                          
                        </div>
                      </div>
                    </div>
                  
                    <div class=\"row mb-3\">
                      <label for=\"fullName\" class=\"col-md-4 col-lg-5 col-form-label\">User Name</label>
                      <div class=\"col-md-8 col-lg-9\">
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
                      <div class=\"col-md-8 col-lg-9\">
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
                      <div class=\"col-md-8 col-lg-9\">
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
                      <div class=\"col-md-8 col-lg-9\">
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
                        <label for=\"company\" class=\"col-md-4 col-lg-5 col-form-label\">Speciality</label>
                        <div class=\"col-md-8 col-lg-9\">
                          ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "specialite", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                          ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "specialite", [], "any", false, false, false, 113), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"company\" class=\"col-md-4 col-lg-5 col-form-label\">Adress</label>
                        <div class=\"col-md-8 col-lg-9\">
                          ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "adress", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                          ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "adress", [], "any", false, false, false, 120), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                        </div>
                      </div>
                    <div class=\"row mb-3\">
                      <label for=\"Job\" class=\"col-md-4 col-lg-5 col-form-label\">Password</label>
                      <div class=\"col-md-8 col-lg-9\">
                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "password", [], "any", false, false, false, 126), "first", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "password", [], "any", false, false, false, 127), "first", [], "any", false, false, false, 127), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                 
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Country\" class=\"col-md-4 col-lg-5 col-form-label\">Confirm Password</label>
                      <div class=\"col-md-8 col-lg-9\">
                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "password", [], "any", false, false, false, 135), "second", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "password", [], "any", false, false, false, 136), "second", [], "any", false, false, false, 136), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Country\" class=\"col-md-4 col-lg-5 col-form-label\">Upload photo</label>
                      <div class=\"col-md-8 col-lg-9\">
                        ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "photo", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                       
                      </div>
                    </div>

                   

                    

                   

                    

                   


                    <div class=\"text-center\">
                      
                      ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "Submit", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                    </div>
                    ";
        // line 163
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), 'form_end');
        echo "
                    <!-- End Profile Edit Form -->

                </div>
                <div class=\"tab-pane fade pt-3\" id=\"profile-settings\" role=\"tabpanel\">

                  <!-- Settings Form -->
                  <form>

                    <div class=\"row mb-3\">
                      <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Email Notifications</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"changesMade\" checked=\"\">
                          <label class=\"form-check-label\" for=\"changesMade\">
                            Changes made to your account
                          </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"newProducts\" checked=\"\">
                          <label class=\"form-check-label\" for=\"newProducts\">
                            Information on new products and services
                          </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"proOffers\">
                          <label class=\"form-check-label\" for=\"proOffers\">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"securityNotify\" checked=\"\" disabled=\"\">
                          <label class=\"form-check-label\" for=\"securityNotify\">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class=\"tab-pane fade pt-3\" id=\"profile-change-password\" role=\"tabpanel\">
                  <!-- Change Password Form -->
                  

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
        return "user/editdoc.html.twig";
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
        return array (  311 => 163,  306 => 161,  285 => 143,  275 => 136,  271 => 135,  260 => 127,  256 => 126,  247 => 120,  243 => 119,  234 => 113,  230 => 112,  221 => 106,  217 => 105,  207 => 98,  203 => 97,  194 => 91,  190 => 90,  181 => 84,  177 => 83,  165 => 73,  161 => 71,  155 => 69,  153 => 68,  146 => 64,  127 => 48,  117 => 40,  113 => 38,  98 => 26,  94 => 25,  89 => 24,  87 => 23,  68 => 6,  58 => 5,  35 => 3,);
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
              <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\" alt=\"Profile\" class=\"rounded-circle\">
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
                        <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\"  alt=\"Profile\" style=\"width: 120px; height:120px; border-radius: 50%;\">
                        {% else %}
                              <p>No profile photo available</p>
                          {% endif %}
                      
                                
                          
                        </div>
                      </div>
                    </div>
                  
                    <div class=\"row mb-3\">
                      <label for=\"fullName\" class=\"col-md-4 col-lg-5 col-form-label\">User Name</label>
                      <div class=\"col-md-8 col-lg-9\">
                        {{ form_widget (form.username, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors (form.username, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"fullName\" class=\"col-md-4 col-lg-5 col-form-label\">Full Name</label>
                      <div class=\"col-md-8 col-lg-9\">
                        {{ form_widget (form.fullname, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors (form.fullname, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"about\" class=\"col-md-4 col-lg-5 col-form-label\">Email</label>
                      <div class=\"col-md-8 col-lg-9\">
                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors (form.email, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"company\" class=\"col-md-4 col-lg-5 col-form-label\">Phone Number</label>
                      <div class=\"col-md-8 col-lg-9\">
                        {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors (form.phone, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                        <label for=\"company\" class=\"col-md-4 col-lg-5 col-form-label\">Speciality</label>
                        <div class=\"col-md-8 col-lg-9\">
                          {{ form_widget(form.specialite, {'attr': {'class': 'form-control'}}) }}
                          {{ form_errors (form.specialite, {'attr': {'class': 'form-danger'}}) }}
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"company\" class=\"col-md-4 col-lg-5 col-form-label\">Adress</label>
                        <div class=\"col-md-8 col-lg-9\">
                          {{ form_widget(form.adress, {'attr': {'class': 'form-control'}}) }}
                          {{ form_errors (form.adress, {'attr': {'class': 'form-danger'}}) }}
                        </div>
                      </div>
                    <div class=\"row mb-3\">
                      <label for=\"Job\" class=\"col-md-4 col-lg-5 col-form-label\">Password</label>
                      <div class=\"col-md-8 col-lg-9\">
                        {{ form_widget(form.password.first, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors (form.password.first, {'attr': {'class': 'form-danger'}}) }}
                 
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Country\" class=\"col-md-4 col-lg-5 col-form-label\">Confirm Password</label>
                      <div class=\"col-md-8 col-lg-9\">
                        {{ form_widget(form.password.second, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors (form.password.second, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Country\" class=\"col-md-4 col-lg-5 col-form-label\">Upload photo</label>
                      <div class=\"col-md-8 col-lg-9\">
                        {{ form_widget(form.photo, {'attr': {'class': 'form-control'}}) }}
                       
                      </div>
                    </div>

                   

                    

                   

                    

                   


                    <div class=\"text-center\">
                      
                      {{ form_widget(form.Submit, {'attr': {'class': 'btn btn-primary'}}) }}
                    </div>
                    {{ form_end(form) }}
                    <!-- End Profile Edit Form -->

                </div>
                <div class=\"tab-pane fade pt-3\" id=\"profile-settings\" role=\"tabpanel\">

                  <!-- Settings Form -->
                  <form>

                    <div class=\"row mb-3\">
                      <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Email Notifications</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"changesMade\" checked=\"\">
                          <label class=\"form-check-label\" for=\"changesMade\">
                            Changes made to your account
                          </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"newProducts\" checked=\"\">
                          <label class=\"form-check-label\" for=\"newProducts\">
                            Information on new products and services
                          </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"proOffers\">
                          <label class=\"form-check-label\" for=\"proOffers\">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class=\"form-check\">
                          <input class=\"form-check-input\" type=\"checkbox\" id=\"securityNotify\" checked=\"\" disabled=\"\">
                          <label class=\"form-check-label\" for=\"securityNotify\">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class=\"tab-pane fade pt-3\" id=\"profile-change-password\" role=\"tabpanel\">
                  <!-- Change Password Form -->
                  

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

{% endblock %}
", "user/editdoc.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\editdoc.html.twig");
    }
}
