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

/* form.html.twig */
class __TwigTemplate_4591f8fcbafe7351fc3cebf8e88aefb2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'section' => [$this, 'block_section'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "</head>
";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 183
        echo "

    ";
        // line 185
        $this->displayBlock('javascripts', $context, $blocks);
        // line 205
        echo "
       
        <body>
            ";
        // line 208
        $this->displayBlock('body', $context, $blocks);
        // line 210
        echo "    </body>
    ";
        // line 211
        $this->displayBlock('footer', $context, $blocks);
        // line 313
        echo "   
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "           <!-- Google Fonts -->
  
  

  <!-- bootstrap.min css -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Icon Font Css -->
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/icofont/icofont.min.css"), "html", null, true);
        echo "\">
  <!-- Slick Slider  CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/slick-carousel/slick/slick.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/slick-carousel/slick/slick-theme.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" />
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">  
  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/css/style2.css"), "html", null, true);
        echo "\">
  <style>
  .header-top-bar {
\tbackground: #0c4454;
\tfont-size: 14px;
\tpadding: 10px 0px;
\tbox-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
\tcolor: #fff;
  }</style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 37
        echo "
<header>
\t<div class=\"header-top-bar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<ul class=\"top-bar-info list-inline-item pl-0 mb-0\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"mailto:support@gmail.com\"><i class=\"icofont-support-faq mr-2\"></i>support@novena.com</a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"icofont-location-pin mr-2\"></i>Address Ta-134/A, New York, USA </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"text-lg-right top-right-bar mt-2 mt-lg-0\">
\t\t\t\t\t\t<a href=\"tel:+23-345-67890\" >
\t\t\t\t\t\t\t<span>Call Now : </span>
\t\t\t\t\t\t\t<span class=\"h4\">823-4565-13456</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<nav class=\"navbar navbar-expand-lg navigation\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t \t <a class=\"navbar-brand\" href=\"index.html\">
\t\t\t  \t<img src=\"../assets/images/logo4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t  </a>

\t\t  \t<button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarmain\" aria-controls=\"navbarmain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"icofont-navigation-menu\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse\" id=\"navbarmain\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"index.html\">Home</a>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
\t\t\t    <li class=\"nav-item\"><a class=\"nav-link\" href=\"service.html\">Services</a></li>

\t\t\t    <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"department.html\" id=\"dropdown02\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Department <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"department.html\">Departments</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"department-single.html\">Department Single</a></li>
\t\t\t\t\t</ul>
\t\t\t  \t</li>

\t\t\t  \t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"doctor.html\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Doctors <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"doctor.html\">Doctors</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"doctor-single.html\">Doctor Single</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"appoinment.html\">Appoinment</a></li>
\t\t\t\t\t</ul>
\t\t\t  \t</li>

\t\t\t   <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"blog-sidebar.html\">Blog with Sidebar</a></li>

\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li>
\t\t\t\t\t</ul>
\t\t\t  \t</li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
\t\t\t</ul>
\t\t
\t

                    <li class=\"nav-item dropdown\">
               ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109) != null)) {
            // line 110
            echo "                        <a class=\"nav-link dropdown-toggle\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "photo", [], "any", false, false, false, 110))), "html", null, true);
            echo "\" alt=\"Profile\" class=\"rounded-circle\" style=\"width: 60px; height: 60px; border-radius: 50%;\"><i class=\"icofont-thin-down\"></i></a>
         
          <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "username", [], "any", false, false, false, 112), "html", null, true);
            echo "</span>
        </a><!-- End Profile Iamge Icon -->

    
        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
          <li class=\"dropdown-header\">
            <h6>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "user", [], "any", false, false, false, 118), "email", [], "any", false, false, false, 118), "html", null, true);
            echo "</h6>
            <span>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "roles", [], "any", false, false, false, 119), 0, [], "array", false, false, false, 119), "html", null, true);
            echo "</span>
          </li>
          <li>
            <hr class=\"dropdown-divider\">
          </li>
        <li>
\t\t\t";
            // line 125
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "user", [], "any", false, false, false, 125), "roles", [], "any", false, false, false, 125), 0, [], "array", false, false, false, 125) == "medecin")) {
                // line 126
                echo "              <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profiledoc");
                echo "\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>

\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 132
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "roles", [], "any", false, false, false, 132), 0, [], "array", false, false, false, 132) == "user")) {
                // line 133
                echo "\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
                echo "\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>
\t\t\t";
            }
            // line 139
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "user", [], "any", false, false, false, 139), "roles", [], "any", false, false, false, 139), 0, [], "array", false, false, false, 139) == "medecin")) {
                // line 140
                echo "    <li>
        <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                // line 141
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showdocuser");
                echo "\">
            <i class=\"bi bi-people\"></i>
            <span>Display Users</span>
        </a>
    </li>
\t";
            }
            // line 147
            echo "
          <li>
            <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 149
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
              <i class=\"bi bi-box-arrow-right\"></i>
              <span>Sign Out</span>
            </a>
          </li>
    
        </ul><!-- End Profile Dropdown Items -->
      </li>
      ";
        }
        // line 158
        echo "    </div>
</div>
    </nav>
</header>
\t";
        // line 162
        $this->displayBlock('section', $context, $blocks);
        // line 181
        echo "   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 162
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 163
        echo "    <section class=\"banner\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-12 col-xl-7\">
                    <div class=\"block\">
                        <div class=\"divider mb-3\"></div>
                        <span class=\"text-uppercase text-sm letter-spacing \">Total Health care solution</span>
                        <h1 class=\"mb-3 mt-3\">Your most trusted health partner</h1>
                        
                        <p class=\"mb-4 pr-5\">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                        <div class=\"btn-container \">
                            <a href=\"appoinment.html\" target=\"_blank\" class=\"btn btn-main-2 btn-icon btn-round-full\">Make appoinment <i class=\"icofont-simple-right ml-2  \"></i></a>
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

    // line 185
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 186
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 4.3.2 -->
        <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/counterup/jquery.easing.js"), "html", null, true);
        echo "\"></script>
        <!-- Slick Slider -->
        <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/slick-carousel/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Counterup -->
        <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/shuffle/shuffle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Google Map -->
        <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/plugins/google-map/map.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap\"></script>    
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/script.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets/js/contact.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 208
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 209
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 211
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 212
        echo "    <!-- footer Start -->
<footer class=\"footer section gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 mr-auto col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"logo mb-4\">
\t\t\t\t\t\t<img src=\"../assets/images/logo4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t\t<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

\t\t\t\t\t<ul class=\"list-inline footer-socials mt-4\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.facebook.com/themefisher\"><i class=\"icofont-facebook\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://twitter.com/themefisher\"><i class=\"icofont-twitter\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.pinterest.com/themefisher/\"><i class=\"icofont-linkedin\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Department</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">Surgery </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Wome's Health</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Radiology</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Cardioc</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Medicine</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Support</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">Terms & Conditions</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Company Support </a></li>
\t\t\t\t\t\t<li><a href=\"#\">FAQuestions</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Company Licence</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget widget-contact mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Get in Touch</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<div class=\"footer-contact-block mb-4\">
\t\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"icofont-email mr-3\"></i>
\t\t\t\t\t\t\t<span class=\"h6 mb-0\">Support Available for 24/7</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">Support@email.com</a></h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"footer-contact-block\">
\t\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"icofont-support mr-3\"></i>
\t\t\t\t\t\t\t<span class=\"h6 mb-0\">Mon to Fri : 08:30 - 18:00</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">+23-456-6588</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"footer-btm py-4 mt-5\">
\t\t\t<div class=\"row align-items-center justify-content-between\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; Copyright Reserved to <span class=\"text-color\">Novena</span> by <a href=\"https://themefisher.com/\" target=\"_blank\">Themefisher</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"subscribe-form text-lg-right mt-5 mt-lg-0\">
\t\t\t\t\t\t<form action=\"#\" class=\"subscribe\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Your Email address\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main-2 btn-round-full\">Subscribe</a>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<a class=\"backtop js-scroll-trigger\" href=\"#top\">
\t\t\t\t\t\t<i class=\"icofont-long-arrow-up\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  503 => 212,  493 => 211,  483 => 209,  473 => 208,  461 => 203,  457 => 202,  451 => 199,  446 => 197,  442 => 196,  437 => 194,  432 => 192,  427 => 190,  423 => 189,  419 => 188,  413 => 186,  403 => 185,  375 => 163,  365 => 162,  354 => 181,  352 => 162,  346 => 158,  334 => 149,  330 => 147,  321 => 141,  318 => 140,  315 => 139,  305 => 133,  303 => 132,  293 => 126,  291 => 125,  282 => 119,  278 => 118,  269 => 112,  263 => 110,  261 => 109,  187 => 37,  177 => 36,  157 => 25,  150 => 21,  146 => 20,  141 => 18,  136 => 16,  129 => 11,  119 => 10,  100 => 7,  88 => 313,  86 => 211,  83 => 210,  81 => 208,  76 => 205,  74 => 185,  70 => 183,  68 => 36,  65 => 35,  62 => 10,  57 => 7,  50 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# form.html.twig #}

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
           <!-- Google Fonts -->
  
  

  <!-- bootstrap.min css -->
  <link rel=\"stylesheet\" href=\"{{asset ('../assets/plugins/bootstrap/css/bootstrap.min.css') }}\">
  <!-- Icon Font Css -->
  <link rel=\"stylesheet\" href=\"{{asset ('../assets/plugins/icofont/icofont.min.css') }}\">
  <!-- Slick Slider  CSS -->
  <link rel=\"stylesheet\" href=\"{{asset ('../assets/plugins/slick-carousel/slick/slick.css') }}\">
  <link rel=\"stylesheet\" href=\"{{asset ('../assets/plugins/slick-carousel/slick/slick-theme.css') }}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" />
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">  
  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"{{asset ('../assets/css/style2.css') }}\">
  <style>
  .header-top-bar {
\tbackground: #0c4454;
\tfont-size: 14px;
\tpadding: 10px 0px;
\tbox-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
\tcolor: #fff;
  }</style>
        {% endblock %}
</head>
{% block header %}

<header>
\t<div class=\"header-top-bar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<ul class=\"top-bar-info list-inline-item pl-0 mb-0\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"mailto:support@gmail.com\"><i class=\"icofont-support-faq mr-2\"></i>support@novena.com</a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"icofont-location-pin mr-2\"></i>Address Ta-134/A, New York, USA </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"text-lg-right top-right-bar mt-2 mt-lg-0\">
\t\t\t\t\t\t<a href=\"tel:+23-345-67890\" >
\t\t\t\t\t\t\t<span>Call Now : </span>
\t\t\t\t\t\t\t<span class=\"h4\">823-4565-13456</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<nav class=\"navbar navbar-expand-lg navigation\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t \t <a class=\"navbar-brand\" href=\"index.html\">
\t\t\t  \t<img src=\"../assets/images/logo4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t  </a>

\t\t  \t<button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarmain\" aria-controls=\"navbarmain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"icofont-navigation-menu\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse\" id=\"navbarmain\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"index.html\">Home</a>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
\t\t\t    <li class=\"nav-item\"><a class=\"nav-link\" href=\"service.html\">Services</a></li>

\t\t\t    <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"department.html\" id=\"dropdown02\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Department <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"department.html\">Departments</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"department-single.html\">Department Single</a></li>
\t\t\t\t\t</ul>
\t\t\t  \t</li>

\t\t\t  \t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"doctor.html\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Doctors <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"doctor.html\">Doctors</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"doctor-single.html\">Doctor Single</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"appoinment.html\">Appoinment</a></li>
\t\t\t\t\t</ul>
\t\t\t  \t</li>

\t\t\t   <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"blog-sidebar.html\">Blog with Sidebar</a></li>

\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li>
\t\t\t\t\t</ul>
\t\t\t  \t</li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
\t\t\t</ul>
\t\t
\t

                    <li class=\"nav-item dropdown\">
               {% if app.user !=null %}
                        <a class=\"nav-link dropdown-toggle\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\" alt=\"Profile\" class=\"rounded-circle\" style=\"width: 60px; height: 60px; border-radius: 50%;\"><i class=\"icofont-thin-down\"></i></a>
         
          <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ app.user.username }}</span>
        </a><!-- End Profile Iamge Icon -->

    
        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
          <li class=\"dropdown-header\">
            <h6>{{ app.user.email }}</h6>
            <span>{{ app.user.roles[0] }}</span>
          </li>
          <li>
            <hr class=\"dropdown-divider\">
          </li>
        <li>
\t\t\t{% if app.user.roles[0] == 'medecin' %}
              <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path ('profiledoc')}}\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>

\t\t\t{% elseif app.user.roles[0] == 'user' %}
\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path ('profile')}}\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>
\t\t\t{% endif %}
\t\t\t{% if app.user.roles[0] == 'medecin' %}
    <li>
        <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('showdocuser') }}\">
            <i class=\"bi bi-people\"></i>
            <span>Display Users</span>
        </a>
    </li>
\t{% endif %}

          <li>
            <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path ('app_logout')}}\">
              <i class=\"bi bi-box-arrow-right\"></i>
              <span>Sign Out</span>
            </a>
          </li>
    
        </ul><!-- End Profile Dropdown Items -->
      </li>
      {% endif %}
    </div>
</div>
    </nav>
</header>
\t{% block section %}
    <section class=\"banner\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-12 col-xl-7\">
                    <div class=\"block\">
                        <div class=\"divider mb-3\"></div>
                        <span class=\"text-uppercase text-sm letter-spacing \">Total Health care solution</span>
                        <h1 class=\"mb-3 mt-3\">Your most trusted health partner</h1>
                        
                        <p class=\"mb-4 pr-5\">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                        <div class=\"btn-container \">
                            <a href=\"appoinment.html\" target=\"_blank\" class=\"btn btn-main-2 btn-icon btn-round-full\">Make appoinment <i class=\"icofont-simple-right ml-2  \"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {% endblock %}   
{% endblock %}


    {% block javascripts %}
    <script src=\"{{asset ('../assets/plugins/jquery/jquery.js') }}\"></script>
        <!-- Bootstrap 4.3.2 -->
        <script src=\"{{asset ('../assets/plugins/bootstrap/js/popper.js') }}\"></script>
        <script src=\"{{asset ('../assets/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{asset ('../assets/plugins/counterup/jquery.easing.js') }}\"></script>
        <!-- Slick Slider -->
        <script src=\"{{asset ('../assets/plugins/slick-carousel/slick/slick.min.js') }}\"></script>
        <!-- Counterup -->
        <script src=\"{{asset ('../assets/plugins/counterup/jquery.waypoints.min.js') }}\"></script>
        
        <script src=\"{{asset ('../assets/plugins/shuffle/shuffle.min.js') }}\"></script>
        <script src=\"{{asset ('../assets/plugins/counterup/jquery.counterup.min.js') }}\"></script>
        <!-- Google Map -->
        <script src=\"{{asset ('../assets/plugins/google-map/map.js') }}\"></script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap\"></script>    
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"{{asset ('../assets/js/script.js') }}\"></script>
        <script src=\"{{asset ('../assets/js/contact.js') }}\"></script>
        {% endblock %}

       
        <body>
            {% block body %}
            {% endblock %}
    </body>
    {% block footer %}
    <!-- footer Start -->
<footer class=\"footer section gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 mr-auto col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"logo mb-4\">
\t\t\t\t\t\t<img src=\"../assets/images/logo4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t\t<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

\t\t\t\t\t<ul class=\"list-inline footer-socials mt-4\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.facebook.com/themefisher\"><i class=\"icofont-facebook\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://twitter.com/themefisher\"><i class=\"icofont-twitter\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.pinterest.com/themefisher/\"><i class=\"icofont-linkedin\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Department</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">Surgery </a></li>
\t\t\t\t\t\t<li><a href=\"#\">Wome's Health</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Radiology</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Cardioc</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Medicine</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Support</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">Terms & Conditions</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Company Support </a></li>
\t\t\t\t\t\t<li><a href=\"#\">FAQuestions</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Company Licence</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget widget-contact mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Get in Touch</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<div class=\"footer-contact-block mb-4\">
\t\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"icofont-email mr-3\"></i>
\t\t\t\t\t\t\t<span class=\"h6 mb-0\">Support Available for 24/7</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">Support@email.com</a></h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"footer-contact-block\">
\t\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"icofont-support mr-3\"></i>
\t\t\t\t\t\t\t<span class=\"h6 mb-0\">Mon to Fri : 08:30 - 18:00</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">+23-456-6588</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"footer-btm py-4 mt-5\">
\t\t\t<div class=\"row align-items-center justify-content-between\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; Copyright Reserved to <span class=\"text-color\">Novena</span> by <a href=\"https://themefisher.com/\" target=\"_blank\">Themefisher</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"subscribe-form text-lg-right mt-5 mt-lg-0\">
\t\t\t\t\t\t<form action=\"#\" class=\"subscribe\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Your Email address\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-main-2 btn-round-full\">Subscribe</a>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<a class=\"backtop js-scroll-trigger\" href=\"#top\">
\t\t\t\t\t\t<i class=\"icofont-long-arrow-up\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
{% endblock %}
   
</html>
", "form.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\form.html.twig");
    }
}
