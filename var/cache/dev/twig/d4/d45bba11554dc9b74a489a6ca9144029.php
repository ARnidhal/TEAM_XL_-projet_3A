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

/* Admin/addrapport.html.twig */
class __TwigTemplate_96f2b6312987c6766b8020dce8c86bc5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/addrapport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/addrapport.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/addrapport.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Form Rapport</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Forms</li>
          <li class=\"breadcrumb-item active\">Rapport </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-6\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">General Form Elements</h5>

              <!-- General Form Elements -->
              ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

              <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Rendezvous</label>
                    <div class=\"col-sm-10\">
                      ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 33, $this->source); })()), "rendezvous", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                  </div>

              
              
                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Type</label>
                    <div class=\"col-sm-10\">
                      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                  </div>
                
                
                <div class=\"row mb-3\">
                  <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Note</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 50, $this->source); })()), "note", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 51, $this->source); })()), "note", [], "any", false, false, false, 51), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>
                
                

                

                

                

                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\"></label>
                  <div class=\"col-sm-10\">
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 66, $this->source); })()), "save", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                  </div>
                </div>

              <!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main>
  ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 82, $this->source); })()), 'form_end');
        echo "
  <!-- End #main -->


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/addrapport.html.twig";
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
        return array (  165 => 82,  146 => 66,  128 => 51,  124 => 50,  113 => 42,  101 => 33,  93 => 28,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Form Rapport</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Forms</li>
          <li class=\"breadcrumb-item active\">Rapport </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-6\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">General Form Elements</h5>

              <!-- General Form Elements -->
              {{ form_start(f,{attr:{novalidate:'novalidate'}}) }}

              <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Rendezvous</label>
                    <div class=\"col-sm-10\">
                      {{ form_widget(f.rendezvous,{'attr' :{'class':'form-control'}}) }}
                    </div>
                  </div>

              
              
                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Type</label>
                    <div class=\"col-sm-10\">
                      {{ form_widget(f.type,{'attr' :{'class':'form-control'}}) }}
                    </div>
                  </div>
                
                
                <div class=\"row mb-3\">
                  <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Note</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(f.note,{'attr' :{'class':'form-control'}}) }}
                    {{ form_errors (f.note, {'attr': {'class': 'form-danger'}}) }}
                  </div>
                </div>
                
                

                

                

                

                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\"></label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(f.save,{'attr' :{'class':'btn btn-primary'}}) }}
                  </div>
                </div>

              <!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main>
  {{ form_end(f) }}
  <!-- End #main -->


{% endblock %}", "Admin/addrapport.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\Admin\\addrapport.html.twig");
    }
}
