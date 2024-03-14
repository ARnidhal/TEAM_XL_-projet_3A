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

/* Admin/addRV.html.twig */
class __TwigTemplate_099ddf398e57c27bfc40eaeddde2aa4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/addRV.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/addRV.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/addRV.html.twig", 1);
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
      <h1>Form Appointements</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Forms</li>
          <li class=\"breadcrumb-item active\">Appointements </li>
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
                  <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Full Name</label>
                  <div class=\"col-sm-10\">
                  ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 33, $this->source); })()), "fullname", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 34, $this->source); })()), "fullname", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail\" class=\"col-sm-2 col-form-label\">Email</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputphone\" class=\"col-sm-2 col-form-label\">Phone Number</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 47, $this->source); })()), "tel", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 48, $this->source); })()), "tel", [], "any", false, false, false, 48), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>
                
                
                <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Date</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 56, $this->source); })()), "date", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 57, $this->source); })()), "date", [], "any", false, false, false, 57), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputtime\" class=\"col-sm-2 col-form-label\">Time</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 63, $this->source); })()), "time", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 64, $this->source); })()), "time", [], "any", false, false, false, 64), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>

                

                
                <div class=\"row mb-3\">
                  <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Note</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 74, $this->source); })()), "note", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 75, $this->source); })()), "note", [], "any", false, false, false, 75), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>
                
                

                

                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Medecin</label>
                    <div class=\"col-sm-10\">
                      ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 86, $this->source); })()), "medecin", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                  </div>

                

                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\"></label>
                  <div class=\"col-sm-10\">
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 95, $this->source); })()), "save", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
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
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 111, $this->source); })()), 'form_end');
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
        return "Admin/addRV.html.twig";
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
        return array (  221 => 111,  202 => 95,  190 => 86,  176 => 75,  172 => 74,  159 => 64,  155 => 63,  146 => 57,  142 => 56,  131 => 48,  127 => 47,  118 => 41,  114 => 40,  105 => 34,  101 => 33,  93 => 28,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Form Appointements</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Forms</li>
          <li class=\"breadcrumb-item active\">Appointements </li>
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
                  <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Full Name</label>
                  <div class=\"col-sm-10\">
                  {{ form_widget(f.fullname,{'attr' :{'class':'form-control'}}) }}
                    {{ form_errors (f.fullname, {'attr': {'class': 'form-danger'}}) }}
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail\" class=\"col-sm-2 col-form-label\">Email</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(f.email,{'attr' :{'class':'form-control'}}) }}
                    {{ form_errors (f.email, {'attr': {'class': 'form-danger'}}) }}
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputphone\" class=\"col-sm-2 col-form-label\">Phone Number</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(f.tel,{'attr' :{'class':'form-control'}}) }}
                    {{ form_errors (f.tel, {'attr': {'class': 'form-danger'}}) }}
                  </div>
                </div>
                
                
                <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Date</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(f.date,{'attr' :{'class':'form-control'}}) }}
                    {{ form_errors (f.date, {'attr': {'class': 'form-danger'}}) }}
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputtime\" class=\"col-sm-2 col-form-label\">Time</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(f.time,{'attr' :{'class':'form-control'}}) }}
                    {{ form_errors (f.time, {'attr': {'class': 'form-danger'}}) }}
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
                    <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Medecin</label>
                    <div class=\"col-sm-10\">
                      {{ form_widget(f.medecin,{'attr' :{'class':'form-control'}}) }}
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


{% endblock %}", "Admin/addRV.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\Admin\\addRV.html.twig");
    }
}
