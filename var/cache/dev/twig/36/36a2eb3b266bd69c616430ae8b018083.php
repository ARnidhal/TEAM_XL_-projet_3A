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

/* base2.html.twig */
class __TwigTemplate_adebd8b87d440f8c68093737a3f9e17b extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
        // line 92
        echo "

        ";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "    </head>
    <body>
        ";
        // line 124
        $this->displayBlock('header', $context, $blocks);
        // line 153
        echo "

        ";
        // line 155
        $this->displayBlock('navbar', $context, $blocks);
        // line 271
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 274
        echo "


        ";
        // line 277
        $this->displayBlock('footer', $context, $blocks);
        // line 365
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
        echo " <!-- Favicon -->
        <!-- <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"> -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"), "html", null, true);
        echo "\">
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/favicon.ico"), "html", null, true);
        echo "\" />
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("aseets2/images/favicon.ico"), "html", null, true);
        echo "\" />

  <!-- <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" /> -->
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"), "html", null, true);
        echo "\" />

  <!-- bootstrap.min css -->
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Icon Font Css -->
  <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/icofont/icofont.min.css"), "html", null, true);
        echo "\">
  <!-- Slick Slider  CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/slick-carousel/slick/slick.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/slick-carousel/slick/slick-theme.css"), "html", null, true);
        echo "\">

  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/style.css"), "html", null, true);
        echo "\">

  
<style>
  .overlay:before {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    opacity: 0.9;
    background: #105f52;
}
\t.banner .block h1 {
    font-size: 60px;
    line-height: 1.2;
    letter-spacing: -1.2px;
    text-transform: capitalize;
    color: #fff;
}

.feature-item .feature-icon i {
    font-size: 50px;
    color: #06785d;
}
.btn-main {
    background: #06785d;
    color: #fff;
    border-color: #06785d;

\t.btn-main-2:hover {
    background: #06785d;
    color: #fff;
    border-color: #06785d;
}
}
.btn-main-2:hover {
    background: #06785d;
    color: #fff;
    border-color: #06785d;
}
.cta:before {
    position: absolute;
    content: \"\";
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    background: #06785d;
}
.title-color {
    color: #06785d;
}

.section-title h2 {
    color: #06785d;
}
</style>


        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo " 
        <!-- Main jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/counterup/jquery.easing.js"), "html", null, true);
        echo "\"></script>
    <!-- Slick Slider -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/slick-carousel/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Counterup -->
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/shuffle/shuffle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Google Map -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/plugins/google-map/map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"), "html", null, true);
        echo "\"></script>    
    
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/contact.js"), "html", null, true);
        echo "\"></script>
    
<!-- Bootstrap JS and Popper.js -->
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 124
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 125
        echo "        <!-- ======= Header ======= -->


    <header>
        <div class=\"header-top-bar\" style=\"background-color: #105f52;\">
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
       
    </header>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 155
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 156
        echo "
<nav class=\"navbar navbar-expand-lg navigation\" id=\"navbar\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/pagehome\" style=\"margin-left: -20%;\">
      <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo4.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\" width=\"200\" height=\"200\">
  </a>
  

        <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarmain\" aria-controls=\"navbarmain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"icofont-navigation-menu\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarmain\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"/pagehome\">Home</a>
        </li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calculate_imc");
        echo "\">LifeStyle</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/evenement/front\">Events</a></li>


         <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showdbservice", ["page" => "front"]);
        echo "\">Services</a></li>

        

            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"doctor.html\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Doctors <i class=\"icofont-thin-down\"></i></a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
                  <li><a class=\"dropdown-item\" href=\"/showdoc\">Doctors</a></li>
                  <li><a class=\"dropdown-item\" href=\"/add\">Appoinment</a></li>
              </ul>
            </li>

            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog <i class=\"icofont-thin-down\"></i></a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
                    <li><a class=\"dropdown-item\" href=\"/post\">Blog</a></li>

                    <!-- <li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li> -->
                    <li><a class=\"dropdown-item\" href=\"/addformpost\">Add Post</a></li>

                </ul>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Reclamation <i class=\"icofont-thin-down\"></i></a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
                    <li><a class=\"dropdown-item\" href=\"/showReclamations\">Show Reclamation</a></li>

                    <!-- <li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li> -->
                    <li><a class=\"dropdown-item\" href=\"/addReclamation\">Add Reclamation</a></li>
                    

                </ul>
              </li>
              <li class=\"nav-item dropdown\" style=\"margin-top: -4%; padding-left: 30%;\">
                ";
        // line 211
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "user", [], "any", false, false, false, 211) != null)) {
            // line 212
            echo "                <div style=\"display: flex;\">

                  <a class=\"nav-link dropdown-toggle\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <img src=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214), "photo", [], "any", false, false, false, 214))), "html", null, true);
            echo "\" alt=\"Profile\" class=\"rounded-circle\" style=\"width: 60px; height: 60px; border-radius: 50%;\"></a>
                  
                  <span class=\"d-none d-md-block dropdown-toggle ps-2\" style=\"padding-top: 16%; font-size: 1.2rem; color: #333;\">";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 216, $this->source); })()), "user", [], "any", false, false, false, 216), "username", [], "any", false, false, false, 216), "html", null, true);
            echo "</span>
                  <i class=\"icofont-thin-down\" style=\"padding-top: 16%;\"></i>
                </div>
                </a><!-- End Profile Iamge Icon -->
 
     
         <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
           <li class=\"dropdown-header\">
             <h6>";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "user", [], "any", false, false, false, 224), "email", [], "any", false, false, false, 224), "html", null, true);
            echo "</h6>
             <span>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 225, $this->source); })()), "user", [], "any", false, false, false, 225), "roles", [], "any", false, false, false, 225), 0, [], "array", false, false, false, 225), "html", null, true);
            echo "</span>
           </li>
           <li>
             <hr class=\"dropdown-divider\">
           </li>
         <li>
             ";
            // line 231
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "user", [], "any", false, false, false, 231), "roles", [], "any", false, false, false, 231), 0, [], "array", false, false, false, 231) == "medecin")) {
                // line 232
                echo "               <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profiledoc");
                echo "\">
                 <i class=\"bi bi-person\"></i>
                 <span>My Profile</span>
               </a>
             </li>
 
             ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 238
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "user", [], "any", false, false, false, 238), "roles", [], "any", false, false, false, 238), 0, [], "array", false, false, false, 238) == "user")) {
                // line 239
                echo "             <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
                echo "\">
                 <i class=\"bi bi-person\"></i>
                 <span>My Profile</span>
               </a>
             </li>
             ";
            }
            // line 245
            echo "             ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 245, $this->source); })()), "user", [], "any", false, false, false, 245), "roles", [], "any", false, false, false, 245), 0, [], "array", false, false, false, 245) == "medecin")) {
                // line 246
                echo "     <li>
         <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                // line 247
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showdocuser");
                echo "\">
             <i class=\"bi bi-people\"></i>
             <span>Display Users</span>
         </a>
     </li>
     ";
            }
            // line 253
            echo " 
           <li>
            <li><a class=\"dropdown-item\" href=\"/chatbotuser\">Chat Bot</a></li>
             <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 256
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
        // line 265
        echo "         <!-- <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li> -->
      </ul>
    </div>
  </div>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 271
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 272
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 277
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 278
        echo "        
 <!-- ======= Footer ======= -->
<!-- footer Start -->
<footer class=\"footer section gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 mr-auto col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"logo mb-4\">
\t\t\t\t\t\t<img src=\"assets2/images/logo4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t\t<p>TOTAL HEALTH CARE SOLUTION</p>

\t\t\t\t\t<ul class=\"list-inline footer-socials mt-4\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.facebook.com/themefisher\"><i class=\"icofont-facebook\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://twitter.com/themefisher\"><i class=\"icofont-twitter\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.pinterest.com/themefisher/\"><i class=\"icofont-linkedin\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

            <div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">LEARN</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">HEALTHY-LIFESTYLE</a></li>
\t\t\t\t\t\t<li><a href=\"#\">GYM</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Support</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">APPOINTEMENTS</a></li>
\t\t\t\t\t\t<li><a href=\"#\">SERVICES</a></li>
\t\t\t\t\t\t<li><a href=\"#\">BLOGS </a></li>
\t\t\t\t\t\t<li><a href=\"#\">RECLAMATION</a></li>
\t\t\t\t\t\t<li><a href=\"#\">EVENTS</a></li>
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
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">visita@email.com</a></h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"footer-contact-block\">
\t\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"icofont-support mr-3\"></i>
\t\t\t\t\t\t\t<span class=\"h6 mb-0\">Mon to Fri : 08:30 - 18:00</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">+216 25 255 255</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t

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
        return "base2.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  595 => 278,  585 => 277,  574 => 272,  564 => 271,  549 => 265,  537 => 256,  532 => 253,  523 => 247,  520 => 246,  517 => 245,  507 => 239,  505 => 238,  495 => 232,  493 => 231,  484 => 225,  480 => 224,  469 => 216,  464 => 214,  460 => 212,  458 => 211,  421 => 177,  414 => 173,  398 => 160,  392 => 156,  382 => 155,  345 => 125,  335 => 124,  318 => 115,  314 => 114,  309 => 112,  305 => 111,  300 => 109,  296 => 108,  291 => 106,  286 => 104,  281 => 102,  277 => 101,  273 => 100,  268 => 98,  263 => 95,  253 => 94,  179 => 28,  173 => 25,  169 => 24,  164 => 22,  159 => 20,  153 => 17,  147 => 14,  143 => 13,  139 => 12,  135 => 10,  125 => 9,  106 => 5,  94 => 365,  92 => 277,  87 => 274,  84 => 271,  82 => 155,  78 => 153,  76 => 124,  72 => 122,  70 => 94,  66 => 92,  64 => 9,  61 => 8,  56 => 5,  50 => 1,);
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
        <!-- <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"> -->
        <link rel=\"stylesheet\" href=\"{{asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')}}\">
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{asset('assets2/images/favicon.ico')}}\" />
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{asset('aseets2/images/favicon.ico')}}\" />

  <!-- <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\" /> -->
  <link rel=\"stylesheet\" href=\"{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css')}}\" />

  <!-- bootstrap.min css -->
  <link rel=\"stylesheet\" href=\"{{asset('assets2/plugins/bootstrap/css/bootstrap.min.css')}}\">
  <!-- Icon Font Css -->
  <link rel=\"stylesheet\" href=\"{{asset('assets2/plugins/icofont/icofont.min.css')}}\">
  <!-- Slick Slider  CSS -->
  <link rel=\"stylesheet\" href=\"{{asset('assets2/plugins/slick-carousel/slick/slick.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('assets2/plugins/slick-carousel/slick/slick-theme.css')}}\">

  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"{{asset('assets2/css/style.css')}}\">

  
<style>
  .overlay:before {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    opacity: 0.9;
    background: #105f52;
}
\t.banner .block h1 {
    font-size: 60px;
    line-height: 1.2;
    letter-spacing: -1.2px;
    text-transform: capitalize;
    color: #fff;
}

.feature-item .feature-icon i {
    font-size: 50px;
    color: #06785d;
}
.btn-main {
    background: #06785d;
    color: #fff;
    border-color: #06785d;

\t.btn-main-2:hover {
    background: #06785d;
    color: #fff;
    border-color: #06785d;
}
}
.btn-main-2:hover {
    background: #06785d;
    color: #fff;
    border-color: #06785d;
}
.cta:before {
    position: absolute;
    content: \"\";
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    background: #06785d;
}
.title-color {
    color: #06785d;
}

.section-title h2 {
    color: #06785d;
}
</style>


        {% endblock %}


        {% block javascripts %}
 
        <!-- Main jQuery -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
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
    
<!-- Bootstrap JS and Popper.js -->
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        {% endblock %}
    </head>
    <body>
        {% block header %}
        <!-- ======= Header ======= -->


    <header>
        <div class=\"header-top-bar\" style=\"background-color: #105f52;\">
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
       
    </header>

        {% endblock %}


        {% block navbar %}

<nav class=\"navbar navbar-expand-lg navigation\" id=\"navbar\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/pagehome\" style=\"margin-left: -20%;\">
      <img src=\"{{asset('assets2/images/logo4.png')}}\" alt=\"\" class=\"img-fluid\" width=\"200\" height=\"200\">
  </a>
  

        <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarmain\" aria-controls=\"navbarmain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"icofont-navigation-menu\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarmain\">
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"/pagehome\">Home</a>
        </li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('calculate_imc')}}\">LifeStyle</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/evenement/front\">Events</a></li>


         <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('showdbservice', {'page': 'front'}) }}\">Services</a></li>

        

            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"doctor.html\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Doctors <i class=\"icofont-thin-down\"></i></a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
                  <li><a class=\"dropdown-item\" href=\"/showdoc\">Doctors</a></li>
                  <li><a class=\"dropdown-item\" href=\"/add\">Appoinment</a></li>
              </ul>
            </li>

            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog <i class=\"icofont-thin-down\"></i></a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
                    <li><a class=\"dropdown-item\" href=\"/post\">Blog</a></li>

                    <!-- <li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li> -->
                    <li><a class=\"dropdown-item\" href=\"/addformpost\">Add Post</a></li>

                </ul>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Reclamation <i class=\"icofont-thin-down\"></i></a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
                    <li><a class=\"dropdown-item\" href=\"/showReclamations\">Show Reclamation</a></li>

                    <!-- <li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li> -->
                    <li><a class=\"dropdown-item\" href=\"/addReclamation\">Add Reclamation</a></li>
                    

                </ul>
              </li>
              <li class=\"nav-item dropdown\" style=\"margin-top: -4%; padding-left: 30%;\">
                {% if app.user !=null %}
                <div style=\"display: flex;\">

                  <a class=\"nav-link dropdown-toggle\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\" alt=\"Profile\" class=\"rounded-circle\" style=\"width: 60px; height: 60px; border-radius: 50%;\"></a>
                  
                  <span class=\"d-none d-md-block dropdown-toggle ps-2\" style=\"padding-top: 16%; font-size: 1.2rem; color: #333;\">{{ app.user.username }}</span>
                  <i class=\"icofont-thin-down\" style=\"padding-top: 16%;\"></i>
                </div>
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
             {% if app.user.roles[0] == 'medecin' %}
               <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path ('profiledoc')}}\">
                 <i class=\"bi bi-person\"></i>
                 <span>My Profile</span>
               </a>
             </li>
 
             {% elseif app.user.roles[0] == 'user' %}
             <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path ('profile')}}\">
                 <i class=\"bi bi-person\"></i>
                 <span>My Profile</span>
               </a>
             </li>
             {% endif %}
             {% if app.user.roles[0] == 'medecin' %}
     <li>
         <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('showdocuser') }}\">
             <i class=\"bi bi-people\"></i>
             <span>Display Users</span>
         </a>
     </li>
     {% endif %}
 
           <li>
            <li><a class=\"dropdown-item\" href=\"/chatbotuser\">Chat Bot</a></li>
             <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path ('app_logout')}}\">
               <i class=\"bi bi-box-arrow-right\"></i>
               <span>Sign Out</span>
             </a>
           </li>
     
         </ul><!-- End Profile Dropdown Items -->
       </li>
       {% endif %}
         <!-- <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li> -->
      </ul>
    </div>
  </div>
</nav>
{% endblock %}
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
\t\t\t\t\t\t<img src=\"assets2/images/logo4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t\t<p>TOTAL HEALTH CARE SOLUTION</p>

\t\t\t\t\t<ul class=\"list-inline footer-socials mt-4\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.facebook.com/themefisher\"><i class=\"icofont-facebook\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://twitter.com/themefisher\"><i class=\"icofont-twitter\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"https://www.pinterest.com/themefisher/\"><i class=\"icofont-linkedin\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

            <div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">LEARN</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">HEALTHY-LIFESTYLE</a></li>
\t\t\t\t\t\t<li><a href=\"#\">GYM</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Support</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#\">APPOINTEMENTS</a></li>
\t\t\t\t\t\t<li><a href=\"#\">SERVICES</a></li>
\t\t\t\t\t\t<li><a href=\"#\">BLOGS </a></li>
\t\t\t\t\t\t<li><a href=\"#\">RECLAMATION</a></li>
\t\t\t\t\t\t<li><a href=\"#\">EVENTS</a></li>
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
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">visita@email.com</a></h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"footer-contact-block\">
\t\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"icofont-support mr-3\"></i>
\t\t\t\t\t\t\t<span class=\"h6 mb-0\">Mon to Fri : 08:30 - 18:00</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">+216 25 255 255</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t

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
", "base2.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\base2.html.twig");
    }
}
