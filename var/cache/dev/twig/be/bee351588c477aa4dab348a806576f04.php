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

/* service/formservice.html.twig */
class __TwigTemplate_c5be7d4eede5c1de114e3b15b84996ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/formservice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/formservice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "service/formservice.html.twig", 1);
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
          <h1>FORM SERVICE'S</h1>
          <nav>
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
              <li class=\"breadcrumb-item\">Forms</li>
              <li class=\"breadcrumb-item active\">SERVICE</li>
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
        echo "\"><i class=\"ri-arrow-right-circle-fill\" style=\"font-size: 30px;\"></i></a>

                  <h5 class=\"card-title\">ADD SERVICE</h5>
    
                  <!-- General Form Elements -->
                  ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row mb-3\">
                      <label for=\"inputText\" class=\"col-sm-2 col-form-label\"><i class=\"fa-solid fa-pen\"></i>NAME</label>
                      <div class=\"col-sm-10\">
                       ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                       ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                  
                  
                    <div class=\"row mb-3\">
                      <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\"><i class=\"fa-solid fa-image\"> </i>PICTURE</label>
                      <div class=\"col-sm-10\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 50, $this->source); })()), "image", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                       
    
                      </div>
                    </div>
                    <div class=\"row mb-3 \">
                      <label  class=\"col-sm-2 \"><i class=\"fa-solid fa-calendar-days\"></i>DATE START</label>
                     
                      <div class=\"col-sm-10 \" >
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 59, $this->source); })()), "date_cr", [], "any", false, false, false, 59), 'widget', ["label_attr" => ["class" => "form-control"]]);
        echo "
                        
            
                      </div>
                    </div>
                   
                    <div class=\"row mb-3\">
                      <label  class=\"col-sm-2 col-form-label\"></i>DESCRIPTION</label>
                      <div class=\"col-sm-10\">
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                    
    
                   
    
                    <div class=\"row mb-3\">
                      <label class=\"col-sm-2 col-form-label\"><i class=\"fa-solid fa-list\"></i>CATEGORY</label>
                      <div class=\"col-sm-10\">
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 79, $this->source); })()), "id_categorie", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 80, $this->source); })()), "id_categorie", [], "any", false, false, false, 80), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                    <label for=\"inputText\" class=\"col-sm-2 col-form-label\"><i class=\"fa-regular fa-eye-slash\"></i>ETAT</label>
                    
                    <div class=\"form-check form-switch mb-3  \">
                     
                      ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 87, $this->source); })()), "active", [], "any", false, false, false, 87), 'row', ["label_attr" => ["class" => "checkbox-switch"]]);
        // line 91
        echo "
                       
                     
                    </div>
                   
                    
                    <div class=\"row mb-10\">
                      <label class=\"col-sm-10 col-form-label\"></label>
                      <div class=\"col-sm-10\">
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 100, $this->source); })()), "save", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                      </div>
                    </div>
    
                 ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 104, $this->source); })()), 'form_end');
        echo "
    
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
        return "service/formservice.html.twig";
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
        return array (  206 => 104,  199 => 100,  188 => 91,  186 => 87,  176 => 80,  172 => 79,  159 => 69,  155 => 68,  143 => 59,  131 => 50,  127 => 49,  116 => 41,  112 => 40,  105 => 36,  97 => 31,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}

{% block body %}




<body>

 

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
          <h1>FORM SERVICE'S</h1>
          <nav>
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
              <li class=\"breadcrumb-item\">Forms</li>
              <li class=\"breadcrumb-item active\">SERVICE</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class=\"section\">
          <div class=\"row\">
            <div class=\"col-lg-9\">
    
              <div class=\"card\">
                <div class=\"card-body\">
                    <a href=\"{{ path('showdbservice', {'page': 'back'}) }}\"><i class=\"ri-arrow-right-circle-fill\" style=\"font-size: 30px;\"></i></a>

                  <h5 class=\"card-title\">ADD SERVICE</h5>
    
                  <!-- General Form Elements -->
                  {{ form_start(f,{attr:{novalidate:'novalidate'}}) }}
                    <div class=\"row mb-3\">
                      <label for=\"inputText\" class=\"col-sm-2 col-form-label\"><i class=\"fa-solid fa-pen\"></i>NAME</label>
                      <div class=\"col-sm-10\">
                       {{ form_widget(f.nom,{'attr':{'class':'form-control'}}) }}
                       {{ form_errors (f.nom, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                  
                  
                    <div class=\"row mb-3\">
                      <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\"><i class=\"fa-solid fa-image\"> </i>PICTURE</label>
                      <div class=\"col-sm-10\">
                        {{ form_widget(f.image,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors (f.image, {'attr': {'class': 'form-danger'}}) }}
                       
    
                      </div>
                    </div>
                    <div class=\"row mb-3 \">
                      <label  class=\"col-sm-2 \"><i class=\"fa-solid fa-calendar-days\"></i>DATE START</label>
                     
                      <div class=\"col-sm-10 \" >
                        {{ form_widget(f.date_cr,  {'label_attr': {'class': 'form-control'}}) }}
                        
            
                      </div>
                    </div>
                   
                    <div class=\"row mb-3\">
                      <label  class=\"col-sm-2 col-form-label\"></i>DESCRIPTION</label>
                      <div class=\"col-sm-10\">
                        {{ form_widget(f.description,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors (f.description, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    
    
                   
    
                    <div class=\"row mb-3\">
                      <label class=\"col-sm-2 col-form-label\"><i class=\"fa-solid fa-list\"></i>CATEGORY</label>
                      <div class=\"col-sm-10\">
                        {{ form_widget(f.id_categorie,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors (f.id_categorie, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    <label for=\"inputText\" class=\"col-sm-2 col-form-label\"><i class=\"fa-regular fa-eye-slash\"></i>ETAT</label>
                    
                    <div class=\"form-check form-switch mb-3  \">
                     
                      {{ form_row(f.active, {
                        label_attr: {
                            class: 'checkbox-switch'
                        }
                    }) }}
                       
                     
                    </div>
                   
                    
                    <div class=\"row mb-10\">
                      <label class=\"col-sm-10 col-form-label\"></label>
                      <div class=\"col-sm-10\">
                        {{ form_widget(f.save,{'attr':{'class':'btn btn-primary'}}) }}
                      </div>
                    </div>
    
                 {{form_end(f)}}
    
                </div>
              </div>
    
            </div>
    
           
          </div>
        </section>
    
      </main><!-- End #main -->

  

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  

</body>


  {% endblock %}", "service/formservice.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\service\\formservice.html.twig");
    }
}
