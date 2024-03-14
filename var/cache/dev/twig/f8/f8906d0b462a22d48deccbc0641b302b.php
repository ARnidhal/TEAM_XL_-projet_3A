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

/* service/frontaffichageservice.html.twig */
class __TwigTemplate_9b6410ad9240c8c3c30bb18b5dfc733d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/frontaffichageservice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/frontaffichageservice.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "service/frontaffichageservice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 3
        echo "



<nav class=\"navbar navbar-expand-lg navigation\" id=\"navbar\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/pagehome\" style=\"margin-left: -20%;\">
      <img src=\"";
        // line 10
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
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calculate_imc");
        echo "\">LifeStyle</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" href=\"/evenement/front\">Events</a></li>


        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"department.html\" id=\"dropdown02\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Service Category<i class=\"icofont-thin-down\"></i></a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
              ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 31
            echo "
              <li><a class=\"dropdown-item\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showidcatservice", ["id_category" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "icon", [], "any", false, false, false, 32), "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></li>
             
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "          </ul>
        </li>
        

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
        // line 68
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68) != null)) {
            // line 69
            echo "                <div style=\"display: flex;\">

                  <a class=\"nav-link dropdown-toggle\" id=\"dropdown05\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "photo", [], "any", false, false, false, 71))), "html", null, true);
            echo "\" alt=\"Profile\" class=\"rounded-circle\" style=\"width: 60px; height: 60px; border-radius: 50%;\"></a>
                  
                  <span class=\"d-none d-md-block dropdown-toggle ps-2\" style=\"padding-top: 16%; font-size: 1.2rem; color: #333;\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "username", [], "any", false, false, false, 73), "html", null, true);
            echo "</span>
                  <i class=\"icofont-thin-down\" style=\"padding-top: 16%;\"></i>
                </div>
                </a><!-- End Profile Iamge Icon -->
 
     
         <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
           <li class=\"dropdown-header\">
             <h6>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "email", [], "any", false, false, false, 81), "html", null, true);
            echo "</h6>
             <span>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "roles", [], "any", false, false, false, 82), 0, [], "array", false, false, false, 82), "html", null, true);
            echo "</span>
           </li>
           <li>
             <hr class=\"dropdown-divider\">
           </li>
         <li>
             ";
            // line 88
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "roles", [], "any", false, false, false, 88), 0, [], "array", false, false, false, 88) == "medecin")) {
                // line 89
                echo "               <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profiledoc");
                echo "\">
                 <i class=\"bi bi-person\"></i>
                 <span>My Profile</span>
               </a>
             </li>
 
             ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 95
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "roles", [], "any", false, false, false, 95), 0, [], "array", false, false, false, 95) == "user")) {
                // line 96
                echo "             <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
                echo "\">
                 <i class=\"bi bi-person\"></i>
                 <span>My Profile</span>
               </a>
             </li>
             ";
            }
            // line 102
            echo "             ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "roles", [], "any", false, false, false, 102), 0, [], "array", false, false, false, 102) == "medecin")) {
                // line 103
                echo "     <li>
         <a class=\"dropdown-item d-flex align-items-center\" href=\"";
                // line 104
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showdocuser");
                echo "\">
             <i class=\"bi bi-people\"></i>
             <span>Display Users</span>
         </a>
     </li>
     ";
            }
            // line 110
            echo " 
           <li>
             <a class=\"dropdown-item d-flex align-items-center\" href=\"";
            // line 112
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
        // line 121
        echo "         <!-- <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li> -->
      </ul>
    </div>
  </div>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 128
        echo "
<section class=\"page-title bg-1\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"block text-center\">
            <span class=\"text-white\">ALL</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Services</h1>
  
            <!-- <ul class=\"list-inline breadcumb-nav\">
              <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
              <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
              <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">All Department</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class=\"section service-2\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 text-center\">
                <div class=\"section-title\">
                    <h2>Award winning patient care</h2>
                    <div class=\"divider mx-auto my-4\"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>
<style>
  .cool-input {
    border: 2px solid #ccc;
    border-radius: 20px;
    padding: 10px 20px;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s ease;
}

.cool-input:focus {
    border-color: dodgerblue;
    box-shadow: 0 0 5px rgba(30, 144, 255, 0.5);
}

.search-container {
    position: relative;
}

.search-icon {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #888;
}

.cool-input {
    padding-left: 30px; /* Adjust based on icon size */
}

.cool-input:focus {
    padding-left: 30px; /* Adjust based on icon size */
}

/* Style the icon font (Font Awesome used here) */
.fa {
    font-size: 18px;
}

</style>


<div class=\"search-container\">
  <input type=\"text\" id=\"searchInput\" placeholder=\"Search...\" class=\"cool-input\">
  <span class=\"search-icon\"><i class=\"fa fa-search\"></i></span>
</div>
        <div id=\"searchResults\">
            
       
        <div class=\"row\">
          
            ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["service1"]) || array_key_exists("service1", $context) ? $context["service1"] : (function () { throw new RuntimeError('Variable "service1" does not exist.', 213, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 214
            echo "            <style>
              .card {
                  transition: transform 0.5s, box-shadow 0.5s, background-color 0.5s;
                  border-radius: 15px;
                  overflow: hidden;
              }
              .card:hover {
                  transform: scale(1.05) rotate(3deg);
                  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
                  background-color: #f8f9fa; /* Change to your desired hover color */
              }
              .card-img {
                  width: 100%;
                  height: 200px;
                  object-fit: cover;
                  border-top-left-radius: 15px;
                  border-top-right-radius: 15px;
                  transition: transform 0.5s;
              }
              .card:hover .card-img {
                  transform: scale(1.1);
              }
              .card-body {
                  padding: 20px;
              }
              .card-title {
                  font-size: 18px;
                  font-weight: bold;
                  margin: 0;
                  color: #032c57; /* Initial color */
                  transition: color 0.3s; /* Add transition effect for color change */
              }
              .card:hover .card-title {
                  color: #dc1853; /* Change color on hover */
              }
              .show-more-link {
                  text-decoration: none;
                  color: #007bff; /* Change to your desired link color */
                  transition: color 0.3s;
              }
              .show-more-link:hover {
                  color: #0056b3; /* Change to your desired link hover color */
              }
          </style>
          
          <div class=\"col-lg-3 col-md-6\">
            <a href=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showidservice", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 260)]), "html", null, true);
            echo "\" class=\"card mb-5 shadow-sm\">
                <img src=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 261))), "html", null, true);
            echo "\" class=\"card-img\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 261), "html", null, true);
            echo "\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 263), "html", null, true);
            echo "</h4>
                    <p class=\"show-more-link\"><i class=\"fa-solid fa-plus-circle mr-1\"></i> Show More</p>
                    <!-- Add data-nom attribute here -->
                    <div class=\"service-nom\" data-nom=\"";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 266), "html", null, true);
            echo "\"></div>
                </div>
            </a>
        </div>
        
          
          
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "        </div>  
    </div>
  </div>
 
</section>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 284
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 285
        echo "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function() {
    \$('#searchInput').on('input', function() {
        var query = \$(this).val().toLowerCase();
        \$('.card').each(function() {
            var card = \$(this);
            var cardBody = card.find('.card-body');
            var serviceNomElement = cardBody.find('.service-nom');
            var cardImage = card.find('.card-img');
            if (serviceNomElement.length > 0) {
                var nom = serviceNomElement.data('nom').toLowerCase();
                if (nom.includes(query)) {
                    card.fadeIn(300);
                    cardBody.slideDown(300);
                    cardImage.slideDown(300);
                } else {
                    card.fadeOut(300);
                    cardBody.slideUp(300);
                    cardImage.slideUp(300);
                }
            }
        });
    }); 
});



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
        return "service/frontaffichageservice.html.twig";
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
        return array (  472 => 285,  462 => 284,  445 => 274,  431 => 266,  425 => 263,  418 => 261,  414 => 260,  366 => 214,  362 => 213,  275 => 128,  265 => 127,  250 => 121,  238 => 112,  234 => 110,  225 => 104,  222 => 103,  219 => 102,  209 => 96,  207 => 95,  197 => 89,  195 => 88,  186 => 82,  182 => 81,  171 => 73,  166 => 71,  162 => 69,  160 => 68,  125 => 35,  112 => 32,  109 => 31,  105 => 30,  95 => 23,  79 => 10,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig'%}
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


        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"department.html\" id=\"dropdown02\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Service Category<i class=\"icofont-thin-down\"></i></a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
              {%for a in cat %}

              <li><a class=\"dropdown-item\" href=\"{{path('showidcatservice',{'id_category':a.id})}}\"><i class=\"{{a.icon}}\"></i> {{a.nom}}</a></li>
             
              {% endfor %}
          </ul>
        </li>
        

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

<section class=\"page-title bg-1\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"block text-center\">
            <span class=\"text-white\">ALL</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Services</h1>
  
            <!-- <ul class=\"list-inline breadcumb-nav\">
              <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
              <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
              <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">All Department</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class=\"section service-2\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 text-center\">
                <div class=\"section-title\">
                    <h2>Award winning patient care</h2>
                    <div class=\"divider mx-auto my-4\"></div>
                    <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                </div>
            </div>
        </div>
<style>
  .cool-input {
    border: 2px solid #ccc;
    border-radius: 20px;
    padding: 10px 20px;
    font-size: 16px;
    outline: none;
    transition: border-color 0.3s ease;
}

.cool-input:focus {
    border-color: dodgerblue;
    box-shadow: 0 0 5px rgba(30, 144, 255, 0.5);
}

.search-container {
    position: relative;
}

.search-icon {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #888;
}

.cool-input {
    padding-left: 30px; /* Adjust based on icon size */
}

.cool-input:focus {
    padding-left: 30px; /* Adjust based on icon size */
}

/* Style the icon font (Font Awesome used here) */
.fa {
    font-size: 18px;
}

</style>


<div class=\"search-container\">
  <input type=\"text\" id=\"searchInput\" placeholder=\"Search...\" class=\"cool-input\">
  <span class=\"search-icon\"><i class=\"fa fa-search\"></i></span>
</div>
        <div id=\"searchResults\">
            
       
        <div class=\"row\">
          
            {% for a in service1 %}
            <style>
              .card {
                  transition: transform 0.5s, box-shadow 0.5s, background-color 0.5s;
                  border-radius: 15px;
                  overflow: hidden;
              }
              .card:hover {
                  transform: scale(1.05) rotate(3deg);
                  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
                  background-color: #f8f9fa; /* Change to your desired hover color */
              }
              .card-img {
                  width: 100%;
                  height: 200px;
                  object-fit: cover;
                  border-top-left-radius: 15px;
                  border-top-right-radius: 15px;
                  transition: transform 0.5s;
              }
              .card:hover .card-img {
                  transform: scale(1.1);
              }
              .card-body {
                  padding: 20px;
              }
              .card-title {
                  font-size: 18px;
                  font-weight: bold;
                  margin: 0;
                  color: #032c57; /* Initial color */
                  transition: color 0.3s; /* Add transition effect for color change */
              }
              .card:hover .card-title {
                  color: #dc1853; /* Change color on hover */
              }
              .show-more-link {
                  text-decoration: none;
                  color: #007bff; /* Change to your desired link color */
                  transition: color 0.3s;
              }
              .show-more-link:hover {
                  color: #0056b3; /* Change to your desired link hover color */
              }
          </style>
          
          <div class=\"col-lg-3 col-md-6\">
            <a href=\"{{ path('showidservice', {'id': a.id}) }}\" class=\"card mb-5 shadow-sm\">
                <img src=\"{{ asset('uploads/' ~ a.image) }}\" class=\"card-img\" alt=\"{{ a.nom }}\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ a.nom }}</h4>
                    <p class=\"show-more-link\"><i class=\"fa-solid fa-plus-circle mr-1\"></i> Show More</p>
                    <!-- Add data-nom attribute here -->
                    <div class=\"service-nom\" data-nom=\"{{ a.nom }}\"></div>
                </div>
            </a>
        </div>
        
          
          
            {% endfor %}
        </div>  
    </div>
  </div>
 
</section>


{% endblock %}


{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function() {
    \$('#searchInput').on('input', function() {
        var query = \$(this).val().toLowerCase();
        \$('.card').each(function() {
            var card = \$(this);
            var cardBody = card.find('.card-body');
            var serviceNomElement = cardBody.find('.service-nom');
            var cardImage = card.find('.card-img');
            if (serviceNomElement.length > 0) {
                var nom = serviceNomElement.data('nom').toLowerCase();
                if (nom.includes(query)) {
                    card.fadeIn(300);
                    cardBody.slideDown(300);
                    cardImage.slideDown(300);
                } else {
                    card.fadeOut(300);
                    cardBody.slideUp(300);
                    cardImage.slideUp(300);
                }
            }
        });
    }); 
});



  </script>

{% endblock %}
", "service/frontaffichageservice.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\service\\frontaffichageservice.html.twig");
    }
}
