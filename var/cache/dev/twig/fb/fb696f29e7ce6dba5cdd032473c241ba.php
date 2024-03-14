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

/* front/base2.html.twig */
class __TwigTemplate_78ecff9b5ea5dce02c4c8bc7aaf86e01 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "

        ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </head>
    <body>
        ";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 134
        echo "
        <!-- ";
        // line 135
        $this->displayBlock('sidebar', $context, $blocks);
        // line 139
        echo " -->
        ";
        // line 140
        $this->displayBlock('body', $context, $blocks);
        // line 143
        echo "


        ";
        // line 146
        $this->displayBlock('footer', $context, $blocks);
        // line 251
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
        <!-- Favicon -->
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/images/favicon.ico\" />
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/favicon.ico"), "html", null, true);
        echo "\" />

  <!-- bootstrap.min css -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Icon Font Css -->
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/icofont/icofont.min.css"), "html", null, true);
        echo "\">
  <!-- Slick Slider  CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/slick-carousel/slick/slick.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/slick-carousel/slick/slick-theme.css"), "html", null, true);
        echo "\">

  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/style.css"), "html", null, true);
        echo "\">

  


        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo " 
        <!-- Main jQuery -->
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/counterup/jquery.easing.js"), "html", null, true);
        echo "\"></script>
    <!-- Slick Slider -->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/slick-carousel/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Counterup -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/shuffle/shuffle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Google Map -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/google-map/map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"), "html", null, true);
        echo "\"></script>    
    
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/contact.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 57
        echo "        <!-- ======= Header ======= -->


    <header>
        <div class=\"header-top-bar\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <ul class=\"top-bar-info list-inline-item pl-0 mb-0\">
                            <li class=\"list-inline-item\"><a href=\"mailto:support@gmail.com\"><i class=\"icofont-support-faq mr-2\"></i>support@novena.com</a></li>
                            <li class=\"list-inline-item\"><i class=\"icofont-location-pin mr-2\"></i>Address Ta-134/A, New York, USA </li>
                        </ul>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"text-lg-right top-right-bar mt-2 mt-lg-0\">
                            <a href=\"tel:+23-345-67890\" >
                                <span>Call Now : </span>
                                <span class=\"h4\">823-4565-13456</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class=\"navbar navbar-expand-lg navigation\" id=\"navbar\">
            <div class=\"container\">
                  <a class=\"navbar-brand\" href=\"index.html\">
                      <img src=\"assets2/images/logo.png\" alt=\"\" class=\"img-fluid\">
                  </a>
    
                  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarmain\" aria-controls=\"navbarmain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"icofont-navigation-menu\"></span>
              </button>
          
              <div class=\"collapse navbar-collapse\" id=\"navbarmain\">
                <ul class=\"navbar-nav ml-auto\">
                  <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexfront");
        echo "\">Home</a>
                  </li>
                   <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"service.html\">Services</a></li>
    
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"department.html\" id=\"dropdown02\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Department <i class=\"icofont-thin-down\"></i></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
                            <li><a class=\"dropdown-item\" href=\"department.html\">Departments</a></li>
                            <li><a class=\"dropdown-item\" href=\"department-single.html\">Department Single</a></li>
                        </ul>
                      </li>
    
                      <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"doctor.html\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Doctors <i class=\"icofont-thin-down\"></i></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
                            <li><a class=\"dropdown-item\" href=\"doctor.html.twig\">Doctors</a></li>
                            <li><a class=\"dropdown-item\" href=\"doctor-single.html\">Doctor Single</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        echo "\">Appoinment</a></li>
                        </ul>
                      </li>
    
                   <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog <i class=\"icofont-thin-down\"></i></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
                            <li><a class=\"dropdown-item\" href=\"blog-sidebar.html\">Blog with Sidebar</a></li>
    
                            <li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li>
                            <li><a class=\"dropdown-item\" href=\"addformpost\">add Post</a></li>

                        </ul>
                      </li>
                   <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
                </ul>
              </div>
            </div>
        </nav>
    </header>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 135
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 136
        echo "           


        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 146
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 147
        echo "        
  <!-- ======= Footer ======= -->
<!-- footer Start -->
<footer class=\"footer section gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 mr-auto col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"logo mb-4\">
\t\t\t\t\t\t<img src=\"assets2/images/logo.png\" alt=\"\" class=\"img-fluid\">
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
        return "front/base2.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  415 => 147,  405 => 146,  394 => 141,  384 => 140,  371 => 136,  361 => 135,  329 => 112,  308 => 94,  269 => 57,  259 => 56,  247 => 52,  243 => 51,  238 => 49,  234 => 48,  229 => 46,  225 => 45,  220 => 43,  215 => 41,  210 => 39,  206 => 38,  202 => 37,  197 => 35,  193 => 33,  183 => 32,  167 => 24,  161 => 21,  157 => 20,  152 => 18,  147 => 16,  141 => 13,  136 => 10,  126 => 9,  107 => 5,  95 => 251,  93 => 146,  88 => 143,  86 => 140,  83 => 139,  81 => 135,  78 => 134,  76 => 56,  72 => 54,  70 => 32,  66 => 30,  64 => 9,  61 => 8,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        
        {% block stylesheets %}

        <!-- Favicon -->
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/images/favicon.ico\" />
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{asset('/images/favicon.ico')}}\" />

  <!-- bootstrap.min css -->
  <link rel=\"stylesheet\" href=\"{{asset('assets2/plugins/bootstrap/css/bootstrap.min.css')}}\">
  <!-- Icon Font Css -->
  <link rel=\"stylesheet\" href=\"{{asset('assets2/plugins/icofont/icofont.min.css')}}\">
  <!-- Slick Slider  CSS -->
  <link rel=\"stylesheet\" href=\"{{asset('assets2/plugins/slick-carousel/slick/slick.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('assets2/plugins/slick-carousel/slick/slick-theme.css')}}\">

  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"{{asset('assets2/css/style.css')}}\">

  


        {% endblock %}


        {% block javascripts %}
 
        <!-- Main jQuery -->
    <script src=\"{{asset('assets2/plugins/jquery/jquery.js')}}\"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src=\"{{asset('assets2/plugins/bootstrap/js/popper.js')}}\"></script>
    <script src=\"{{asset('assets2/plugins/bootstrap/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assets2/plugins/counterup/jquery.easing.js')}}\"></script>
    <!-- Slick Slider -->
    <script src=\"{{asset('assets2/plugins/slick-carousel/slick/slick.min.js')}}\"></script>
    <!-- Counterup -->
    <script src=\"{{asset('assets2/plugins/counterup/jquery.waypoints.min.js')}}\"></script>
    
    <script src=\"{{asset('assets2/plugins/shuffle/shuffle.min.js')}}\"></script>
    <script src=\"{{asset('assets2/plugins/counterup/jquery.counterup.min.js')}}\"></script>
    <!-- Google Map -->
    <script src=\"{{asset('assets2/plugins/google-map/map.js')}}\"></script>
    <script src=\"{{asset('assets2/https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap')}}\"></script>    
    
    <script src=\"{{asset('assets2/js/script.js')}}\"></script>
    <script src=\"{{asset('assets2/js/contact.js')}}\"></script>
        {% endblock %}
    </head>
    <body>
        {% block header %}
        <!-- ======= Header ======= -->


    <header>
        <div class=\"header-top-bar\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <ul class=\"top-bar-info list-inline-item pl-0 mb-0\">
                            <li class=\"list-inline-item\"><a href=\"mailto:support@gmail.com\"><i class=\"icofont-support-faq mr-2\"></i>support@novena.com</a></li>
                            <li class=\"list-inline-item\"><i class=\"icofont-location-pin mr-2\"></i>Address Ta-134/A, New York, USA </li>
                        </ul>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"text-lg-right top-right-bar mt-2 mt-lg-0\">
                            <a href=\"tel:+23-345-67890\" >
                                <span>Call Now : </span>
                                <span class=\"h4\">823-4565-13456</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class=\"navbar navbar-expand-lg navigation\" id=\"navbar\">
            <div class=\"container\">
                  <a class=\"navbar-brand\" href=\"index.html\">
                      <img src=\"assets2/images/logo.png\" alt=\"\" class=\"img-fluid\">
                  </a>
    
                  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarmain\" aria-controls=\"navbarmain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"icofont-navigation-menu\"></span>
              </button>
          
              <div class=\"collapse navbar-collapse\" id=\"navbarmain\">
                <ul class=\"navbar-nav ml-auto\">
                  <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('indexfront')}}\">Home</a>
                  </li>
                   <li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"service.html\">Services</a></li>
    
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"department.html\" id=\"dropdown02\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Department <i class=\"icofont-thin-down\"></i></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
                            <li><a class=\"dropdown-item\" href=\"department.html\">Departments</a></li>
                            <li><a class=\"dropdown-item\" href=\"department-single.html\">Department Single</a></li>
                        </ul>
                      </li>
    
                      <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"doctor.html\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Doctors <i class=\"icofont-thin-down\"></i></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
                            <li><a class=\"dropdown-item\" href=\"doctor.html.twig\">Doctors</a></li>
                            <li><a class=\"dropdown-item\" href=\"doctor-single.html\">Doctor Single</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('add')}}\">Appoinment</a></li>
                        </ul>
                      </li>
    
                   <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog <i class=\"icofont-thin-down\"></i></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
                            <li><a class=\"dropdown-item\" href=\"blog-sidebar.html\">Blog with Sidebar</a></li>
    
                            <li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li>
                            <li><a class=\"dropdown-item\" href=\"addformpost\">add Post</a></li>

                        </ul>
                      </li>
                   <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
                </ul>
              </div>
            </div>
        </nav>
    </header>

        {% endblock %}

        <!-- {% block sidebar %}
           


        {% endblock %} -->
        {% block body %}
        
        {% endblock %}



        {% block footer %}
        
  <!-- ======= Footer ======= -->
<!-- footer Start -->
<footer class=\"footer section gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 mr-auto col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"logo mb-4\">
\t\t\t\t\t\t<img src=\"assets2/images/logo.png\" alt=\"\" class=\"img-fluid\">
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
    </body>
</html>
", "front/base2.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\front\\base2.html.twig");
    }
}
