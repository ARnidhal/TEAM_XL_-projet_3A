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

/* service/editservice.html.twig */
class __TwigTemplate_50453b97bdc0024931c3e40aca8b5f85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/editservice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/editservice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/editservice.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showdbservice", ["page" => "back"]);
        echo "\"><i class=\"ri-arrow-up-circle-fill\" style=\"font-size: 30px;\"></i></a>
                  <h5 class=\"card-title\">General Form Elements</h5>
    
                  <!-- General Form Elements -->
                  ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row mb-3\">
                      <label for=\"inputText\" class=\"col-sm-2 col-form-label\">NAME</label>
                      <div class=\"col-sm-10\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                       ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                       
                      </div>
                    </div>
                  
                    <div class=\"row mb-3\">
                      <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">IMAGE</label>
                      <div class=\"col-sm-10\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 48, $this->source); })()), "image", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label  class=\"col-sm-2 col-form-label\">Date Creation</label>
                     
                      <div class=\"col-sm-10\">
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 56, $this->source); })()), "date_cr", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 57, $this->source); })()), "date_cr", [], "any", false, false, false, 57), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                       
                      </div>
                    </div>
                   
                    <div class=\"row mb-3\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Description</label>
                      <div class=\"col-sm-10\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                    
    
                    
    
                    <div class=\"row mb-3\">
                      <label class=\"col-sm-2 col-form-label\">Select</label>
                      <div class=\"col-sm-10\">
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 76, $this->source); })()), "id_categorie", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 77, $this->source); })()), "id_categorie", [], "any", false, false, false, 77), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
    
                       <div class=\"form-check form-switch mb-3  \">
                     
                      ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 83, $this->source); })()), "active", [], "any", false, false, false, 83), 'row', ["label_attr" => ["class" => "checkbox-switch"]]);
        // line 87
        echo "
                       
                     
                    </div>
                   
                    <div class=\"row mb-3\">
                      <label class=\"col-sm-2 col-form-label\"></label>
                      <div class=\"col-sm-10\">
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 95, $this->source); })()), "save", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                        
                      </div>
                    </div>
    
                 ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 100, $this->source); })()), 'form_end');
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
        return "service/editservice.html.twig";
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
        return array (  205 => 100,  197 => 95,  187 => 87,  185 => 83,  176 => 77,  172 => 76,  159 => 66,  155 => 65,  144 => 57,  140 => 56,  130 => 49,  126 => 48,  115 => 40,  111 => 39,  104 => 35,  97 => 31,  68 => 4,  58 => 3,  35 => 1,);
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
                    <a href=\"{{  path('showdbservice', {'page': 'back'})}}\"><i class=\"ri-arrow-up-circle-fill\" style=\"font-size: 30px;\"></i></a>
                  <h5 class=\"card-title\">General Form Elements</h5>
    
                  <!-- General Form Elements -->
                  {{ form_start(x,{attr:{novalidate:'novalidate'}}) }}
                    <div class=\"row mb-3\">
                      <label for=\"inputText\" class=\"col-sm-2 col-form-label\">NAME</label>
                      <div class=\"col-sm-10\">
                        {{ form_errors (x.nom, {'attr': {'class': 'form-danger'}}) }}
                       {{ form_widget(x.nom,{'attr':{'class':'form-control'}}) }}
                       
                      </div>
                    </div>
                  
                    <div class=\"row mb-3\">
                      <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">IMAGE</label>
                      <div class=\"col-sm-10\">
                        {{ form_widget(x.image,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors (x.image, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label  class=\"col-sm-2 col-form-label\">Date Creation</label>
                     
                      <div class=\"col-sm-10\">
                        {{ form_widget(x.date_cr,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors (x.date_cr, {'attr': {'class': 'form-danger'}}) }}
                       
                      </div>
                    </div>
                   
                    <div class=\"row mb-3\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Description</label>
                      <div class=\"col-sm-10\">
                        {{ form_widget(x.description,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors (x.description, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    
    
                    
    
                    <div class=\"row mb-3\">
                      <label class=\"col-sm-2 col-form-label\">Select</label>
                      <div class=\"col-sm-10\">
                        {{ form_widget(x.id_categorie,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors (x.id_categorie, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
    
                       <div class=\"form-check form-switch mb-3  \">
                     
                      {{ form_row(x.active, {
                        label_attr: {
                            class: 'checkbox-switch'
                        }
                    }) }}
                       
                     
                    </div>
                   
                    <div class=\"row mb-3\">
                      <label class=\"col-sm-2 col-form-label\"></label>
                      <div class=\"col-sm-10\">
                        {{ form_widget(x.save,{'attr':{'class':'btn btn-primary'}}) }}
                        
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


  {% endblock %}", "service/editservice.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\service\\editservice.html.twig");
    }
}
