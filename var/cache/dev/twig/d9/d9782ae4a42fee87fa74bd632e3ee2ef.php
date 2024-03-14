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

/* category/formcategorie.html.twig */
class __TwigTemplate_c3ab4c06e69c271988d7985e473e5cd1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/formcategorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/formcategorie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/formcategorie.html.twig", 1);
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
          <h1>Form Category's</h1>
          <nav>
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
              <li class=\"breadcrumb-item\">Forms</li>
              <li class=\"breadcrumb-item active\">Category</li>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showdbcategory");
        echo "\"><i class=\"ri-arrow-right-circle-fill\" style=\"font-size: 30px;\"></i></a>
                  <h5 class=\"card-title\">ADD CATEGORY</h5>
    
                  <!-- General Form Elements -->
                  ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row mb-3\">
                      <label for=\"inputText\" class=\"col-sm-2 col-form-label\">NAME</label>
                      <div class=\"col-sm-10\">
                       ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                       ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                  
                    
                   
                    <div class=\"row mb-3\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">DESCRIPTION</label>
                      <div class=\"col-sm-10\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                      </div>
                    </div>
                    
    
                   
    
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\">ICON</label>
                        <div class=\"col-sm-10\">
                         ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 60, $this->source); })()), "icon", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                         ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 61, $this->source); })()), "icon", [], "any", false, false, false, 61), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                        </div>
                      </div>
                    
                   
    
                   
                    <div class=\"row mb-3\">
                      <label class=\"col-sm-2 col-form-label\"></label>
                      <div class=\"col-sm-10\">
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 71, $this->source); })()), "save", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                      </div>
                    </div>
    
                 ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 75, $this->source); })()), 'form_end');
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
        return "category/formcategorie.html.twig";
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
        return array (  168 => 75,  161 => 71,  148 => 61,  144 => 60,  131 => 50,  127 => 49,  115 => 40,  111 => 39,  104 => 35,  97 => 31,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'%}

{% block body %}




<body>

 

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
          <h1>Form Category's</h1>
          <nav>
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
              <li class=\"breadcrumb-item\">Forms</li>
              <li class=\"breadcrumb-item active\">Category</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class=\"section\">
          <div class=\"row\">
            <div class=\"col-lg-9\">
    
              <div class=\"card\">
                <div class=\"card-body\">
                    <a href=\"{{ path('showdbcategory')}}\"><i class=\"ri-arrow-right-circle-fill\" style=\"font-size: 30px;\"></i></a>
                  <h5 class=\"card-title\">ADD CATEGORY</h5>
    
                  <!-- General Form Elements -->
                  {{ form_start(f,{attr:{novalidate:'novalidate'}}) }}
                    <div class=\"row mb-3\">
                      <label for=\"inputText\" class=\"col-sm-2 col-form-label\">NAME</label>
                      <div class=\"col-sm-10\">
                       {{ form_widget(f.nom,{'attr':{'class':'form-control'}}) }}
                       {{ form_errors (f.nom, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                  
                    
                   
                    <div class=\"row mb-3\">
                      <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">DESCRIPTION</label>
                      <div class=\"col-sm-10\">
                        {{ form_widget(f.description,{'attr':{'class':'form-control'}}) }}
                        {{ form_errors (f.description, {'attr': {'class': 'form-danger'}}) }}
                      </div>
                    </div>
                    
    
                   
    
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\">ICON</label>
                        <div class=\"col-sm-10\">
                         {{ form_widget(f.icon,{'attr':{'class':'form-control'}}) }}
                         {{ form_errors (f.icon, {'attr': {'class': 'form-danger'}}) }}
                        </div>
                      </div>
                    
                   
    
                   
                    <div class=\"row mb-3\">
                      <label class=\"col-sm-2 col-form-label\"></label>
                      <div class=\"col-sm-10\">
                        {{ form_widget(f.save,{'attr':{'class':'btn btn-primary'}}) }}
                      </div>
                    </div>
    
                 {{form_end(f)}}<!-- End General Form Elements -->
    
                </div>
              </div>
    
            </div>
    
           
          </div>
        </section>
    
      </main><!-- End #main -->

  

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  

</body>


  {% endblock %}", "category/formcategorie.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\category\\formcategorie.html.twig");
    }
}
