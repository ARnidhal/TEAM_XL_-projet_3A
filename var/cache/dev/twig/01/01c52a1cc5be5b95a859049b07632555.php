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

/* reservationservice/verificationparmail.html.twig */
class __TwigTemplate_a353637c76acb4127a3a84e491fa4789 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationservice/verificationparmail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationservice/verificationparmail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservationservice/verificationparmail.html.twig", 1);
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



<body>

 

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
          <h1>Form Elements</h1>
          <nav>
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
              <li class=\"breadcrumb-item\">Forms</li>
              <li class=\"breadcrumb-item active\">Elements</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class=\"section\">
          <div class=\"row\">
            <div class=\"col-lg-9\">
    
              <div class=\"card\">
                <div class=\"card-body\">
                    <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showdbreservationser");
        echo "\"><i class=\"ri-arrow-right-circle-fill\" style=\"font-size: 40px;\"></i></a>

                    
                    <h1 class=\"card-title\" style=\"text-align: center; font-size: 36px;\">VALIDATION RESERVATION</h1>


    
                  <!-- General Form Elements -->
                  ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "



                  <div class=\"text-center\">
                    <div class=\"text-center\">
                      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 45, $this->source); })()), "save", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "btn btn-success", "style" => "font-size: 20px;"], "label" => "VERFIER"]);
        echo "
                  </div>
                  
                

                    <div class=\"row mb-3\">
                      <label for=\"inputText\" class=\"col-sm-2 col-form-label\"></label>
                      <div class=\"col-sm-10\">
                       ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "style" => "display: none;"]]);
        echo "
                       ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                  
                    
                   
                    <div class=\"row mb-3\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\"></label>
                      <div class=\"col-sm-10\">
                        
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "style" => "display: none;"]]);
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                    
    
                   
    
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\"></label>
                        <div class=\"col-sm-10\">
                          ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 75, $this->source); })()), "idserivce", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "style" => "display: none;"]]);
        echo "
                        
                        </div>
                      </div>
                    
                   
    
                   
                   
    
                 ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 85, $this->source); })()), 'form_end');
        echo "<!-- End General Form Elements -->
    
                </div>
              </div>
    
            </div>
    
           
          </div>
        </section>
    
      </main><!-- End #main -->

  

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  

</body>


  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reservationservice/verificationparmail.html.twig";
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
        return array (  175 => 85,  162 => 75,  149 => 65,  145 => 64,  132 => 54,  128 => 53,  117 => 45,  108 => 39,  97 => 31,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}

{% block body %}




<body>

 

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
          <h1>Form Elements</h1>
          <nav>
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
              <li class=\"breadcrumb-item\">Forms</li>
              <li class=\"breadcrumb-item active\">Elements</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class=\"section\">
          <div class=\"row\">
            <div class=\"col-lg-9\">
    
              <div class=\"card\">
                <div class=\"card-body\">
                    <a href=\"{{ path('showdbreservationser')}}\"><i class=\"ri-arrow-right-circle-fill\" style=\"font-size: 40px;\"></i></a>

                    
                    <h1 class=\"card-title\" style=\"text-align: center; font-size: 36px;\">VALIDATION RESERVATION</h1>


    
                  <!-- General Form Elements -->
                  {{ form_start(x,{attr:{novalidate:'novalidate'}}) }}



                  <div class=\"text-center\">
                    <div class=\"text-center\">
                      {{ form_widget(x.save, {'attr': {'class': 'btn btn-success', 'style': 'font-size: 20px;'}, 'label': 'VERFIER'|raw }) }}
                  </div>
                  
                

                    <div class=\"row mb-3\">
                      <label for=\"inputText\" class=\"col-sm-2 col-form-label\"></label>
                      <div class=\"col-sm-10\">
                       {{ form_widget(x.nom,{'attr':{'class':'form-control', 'style': 'display: none;' }}) }}
                       {{ form_errors (x.nom, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                  
                    
                   
                    <div class=\"row mb-3\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\"></label>
                      <div class=\"col-sm-10\">
                        
                        {{ form_widget(x.email, {'attr': {'class': 'form-control', 'style': 'display: none;' }}) }}
                        {{ form_errors (x.email, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    
    
                   
    
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\"></label>
                        <div class=\"col-sm-10\">
                          {{ form_widget(x.idserivce, {'attr': {'class': 'form-control' , 'style': 'display: none;'}}) }}
                        
                        </div>
                      </div>
                    
                   
    
                   
                   
    
                 {{form_end(x)}}<!-- End General Form Elements -->
    
                </div>
              </div>
    
            </div>
    
           
          </div>
        </section>
    
      </main><!-- End #main -->

  

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  

</body>


  {% endblock %}", "reservationservice/verificationparmail.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\reservationservice\\verificationparmail.html.twig");
    }
}
