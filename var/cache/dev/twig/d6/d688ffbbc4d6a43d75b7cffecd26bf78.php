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

/* user/adminprofile.html.twig */
class __TwigTemplate_ef2e31379ce9039b1e60b1680718361d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/adminprofile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/adminprofile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/adminprofile.html.twig", 1);
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
        <div class=\"col-xl-0\">

          <div class=\"card\">
            <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
                ";
        // line 21
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "photo", [], "any", false, false, false, 21)))) {
            // line 22
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "photo", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" alt=\"Profile\" class=\"rounded-circle\">
              <h2>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "fullname", [], "any", false, false, false, 23), "html", null, true);
            echo "</h2>
              <h3>Admin</h3>
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
            // line 36
            echo "        <p>No profile photo available</p>
    ";
        }
        // line 38
        echo "        <div class=\"col-xl-0\">

          <div class=\"card\">
            <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
              <!-- Bordered Tabs -->
              <ul class=\"nav nav-tabs nav-tabs-bordered\" role=\"tablist\">

                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\" aria-selected=\"true\" role=\"tab\">Overview</button>
                </li>

                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editadmin", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\" role=\"tab\" tabindex=\"-1\">Edit Profile</a>
                </li>
                
            
              <div class=\"tab-content pt-0\">

                <div class=\"tab-pane fade profile-overview active show\" id=\"profile-overview\" role=\"tabpanel\">
                 <br>
                 <br>
                 <br>
                  <h5 class=\"card-title\">Profile Details</h5>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label \">User Name</div>
                    <div class=\"col-lg-12 col-md-8\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "username", [], "any", false, false, false, 63), "html", null, true);
        echo "</div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label \">Full Name</div>
                    <div class=\"col-lg-12 col-md-8\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "fullname", [], "any", false, false, false, 67), "html", null, true);
        echo "</div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Email</div>
                    <div class=\"col-lg-9 col-md-8\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "email", [], "any", false, false, false, 72), "html", null, true);
        echo "</div>
                  </div>

                  <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6 label\">Phone</div>
                    <div class=\"col-lg-9 col-md-8\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "phone", [], "any", false, false, false, 77), "html", null, true);
        echo "</div>
                  </div>


                </div>

                <div class=\"tab-pane fade profile-edit pt-3\" id=\"profile-edit\" role=\"tabpanel\">

                  <!-- Profile Edit Form -->
                  <form>
                  ";
        // line 87
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "photo", [], "any", false, false, false, 87)))) {
            // line 88
            echo "                    <div class=\"row mb-3\">
                      <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "photo", [], "any", false, false, false, 91))), "html", null, true);
            echo "\" alt=\"Profile\">
                        <div class=\"pt-2\">
                          <a href=\"#\" class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\"><i class=\"bi bi-upload\"></i></a>
                          <a href=\"#\" class=\"btn btn-danger btn-sm\" title=\"Remove my profile image\"><i class=\"bi bi-trash\"></i></a>
                        </div>
                      </div>
                    </div>
";
        } else {
            // line 99
            echo "            <p>No profile photo available</p>
        ";
        }
        // line 101
        echo "    
     
                    <div class=\"row mb-3\">
                      <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Full Name</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"fullName\" type=\"text\" class=\"form-control\" id=\"fullName\" value=\"Kevin Anderson\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"about\" class=\"col-md-4 col-lg-3 col-form-label\">About</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <textarea name=\"about\" class=\"form-control\" id=\"about\" style=\"height: 100px\">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"company\" class=\"col-md-4 col-lg-3 col-form-label\">Company</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"company\" type=\"text\" class=\"form-control\" id=\"company\" value=\"Lueilwitz, Wisoky and Leuschke\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Job\" class=\"col-md-4 col-lg-3 col-form-label\">Job</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"job\" type=\"text\" class=\"form-control\" id=\"Job\" value=\"Web Designer\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Country\" class=\"col-md-4 col-lg-3 col-form-label\">Country</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"country\" type=\"text\" class=\"form-control\" id=\"Country\" value=\"USA\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\">Address</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"address\" type=\"text\" class=\"form-control\" id=\"Address\" value=\"A108 Adam Street, New York, NY 535022\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Phone\" class=\"col-md-4 col-lg-3 col-form-label\">Phone</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"phone\" type=\"text\" class=\"form-control\" id=\"Phone\" value=\"(436) 486-3538 x29071\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Email\" class=\"col-md-4 col-lg-3 col-form-label\">Email</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"Email\" value=\"k.anderson@example.com\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\">Twitter Profile</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"twitter\" type=\"text\" class=\"form-control\" id=\"Twitter\" value=\"https://twitter.com/#\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\">Facebook Profile</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"Facebook\" value=\"https://facebook.com/#\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Instagram\" class=\"col-md-4 col-lg-3 col-form-label\">Instagram Profile</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"instagram\" type=\"text\" class=\"form-control\" id=\"Instagram\" value=\"https://instagram.com/#\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Linkedin\" class=\"col-md-4 col-lg-3 col-form-label\">Linkedin Profile</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"linkedin\" type=\"text\" class=\"form-control\" id=\"Linkedin\" value=\"https://linkedin.com/#\">
                      </div>
                    </div>

                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

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
                  <form>

                    <div class=\"row mb-3\">
                      <label for=\"currentPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Current Password</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"currentPassword\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"newPassword\" class=\"col-md-4 col-lg-3 col-form-label\">New Password</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"newpassword\" type=\"password\" class=\"form-control\" id=\"newPassword\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"renewPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Re-enter New Password</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"renewpassword\" type=\"password\" class=\"form-control\" id=\"renewPassword\">
                      </div>
                    </div>

                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

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
        return "user/adminprofile.html.twig";
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
        return array (  202 => 101,  198 => 99,  187 => 91,  182 => 88,  180 => 87,  167 => 77,  159 => 72,  151 => 67,  144 => 63,  128 => 50,  114 => 38,  110 => 36,  94 => 23,  89 => 22,  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
        <div class=\"col-xl-0\">

          <div class=\"card\">
            <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
                {% if app.user is not null and app.user.photo is not null %}
              <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\" alt=\"Profile\" class=\"rounded-circle\">
              <h2>{{ app.user.fullname }}</h2>
              <h3>Admin</h3>
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
        <div class=\"col-xl-0\">

          <div class=\"card\">
            <div class=\"card-body profile-card pt-4 d-flex flex-column align-items-center\">
              <!-- Bordered Tabs -->
              <ul class=\"nav nav-tabs nav-tabs-bordered\" role=\"tablist\">

                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#profile-overview\" aria-selected=\"true\" role=\"tab\">Overview</button>
                </li>

                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" href=\"{{path('editadmin',{'id':app.user.id})}}\" role=\"tab\" tabindex=\"-1\">Edit Profile</a>
                </li>
                
            
              <div class=\"tab-content pt-0\">

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
    
     
                    <div class=\"row mb-3\">
                      <label for=\"fullName\" class=\"col-md-4 col-lg-3 col-form-label\">Full Name</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"fullName\" type=\"text\" class=\"form-control\" id=\"fullName\" value=\"Kevin Anderson\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"about\" class=\"col-md-4 col-lg-3 col-form-label\">About</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <textarea name=\"about\" class=\"form-control\" id=\"about\" style=\"height: 100px\">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"company\" class=\"col-md-4 col-lg-3 col-form-label\">Company</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"company\" type=\"text\" class=\"form-control\" id=\"company\" value=\"Lueilwitz, Wisoky and Leuschke\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Job\" class=\"col-md-4 col-lg-3 col-form-label\">Job</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"job\" type=\"text\" class=\"form-control\" id=\"Job\" value=\"Web Designer\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Country\" class=\"col-md-4 col-lg-3 col-form-label\">Country</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"country\" type=\"text\" class=\"form-control\" id=\"Country\" value=\"USA\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Address\" class=\"col-md-4 col-lg-3 col-form-label\">Address</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"address\" type=\"text\" class=\"form-control\" id=\"Address\" value=\"A108 Adam Street, New York, NY 535022\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Phone\" class=\"col-md-4 col-lg-3 col-form-label\">Phone</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"phone\" type=\"text\" class=\"form-control\" id=\"Phone\" value=\"(436) 486-3538 x29071\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Email\" class=\"col-md-4 col-lg-3 col-form-label\">Email</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"Email\" value=\"k.anderson@example.com\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Twitter\" class=\"col-md-4 col-lg-3 col-form-label\">Twitter Profile</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"twitter\" type=\"text\" class=\"form-control\" id=\"Twitter\" value=\"https://twitter.com/#\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Facebook\" class=\"col-md-4 col-lg-3 col-form-label\">Facebook Profile</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"facebook\" type=\"text\" class=\"form-control\" id=\"Facebook\" value=\"https://facebook.com/#\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Instagram\" class=\"col-md-4 col-lg-3 col-form-label\">Instagram Profile</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"instagram\" type=\"text\" class=\"form-control\" id=\"Instagram\" value=\"https://instagram.com/#\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"Linkedin\" class=\"col-md-4 col-lg-3 col-form-label\">Linkedin Profile</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"linkedin\" type=\"text\" class=\"form-control\" id=\"Linkedin\" value=\"https://linkedin.com/#\">
                      </div>
                    </div>

                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

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
                  <form>

                    <div class=\"row mb-3\">
                      <label for=\"currentPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Current Password</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"currentPassword\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"newPassword\" class=\"col-md-4 col-lg-3 col-form-label\">New Password</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"newpassword\" type=\"password\" class=\"form-control\" id=\"newPassword\">
                      </div>
                    </div>

                    <div class=\"row mb-3\">
                      <label for=\"renewPassword\" class=\"col-md-4 col-lg-3 col-form-label\">Re-enter New Password</label>
                      <div class=\"col-md-8 col-lg-9\">
                        <input name=\"renewpassword\" type=\"password\" class=\"form-control\" id=\"renewPassword\">
                      </div>
                    </div>

                    <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>


{% endblock %}
", "user/adminprofile.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\adminprofile.html.twig");
    }
}
