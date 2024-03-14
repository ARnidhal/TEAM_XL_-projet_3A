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

/* imc/CalculIMC.html.twig */
class __TwigTemplate_3f45e2792aa2f8c5c6eed97d7fbc0823 extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imc/CalculIMC.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imc/CalculIMC.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "imc/CalculIMC.html.twig", 1);
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
<section class=\"page-title bg-1\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Book your </span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Service</h1>

        
        </div>
      </div>
    </div>
  </div>
</section>


<style>
  .appointment-wrap {
  background-color: #f9f9f9;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-label {
  font-weight: bold;
}

.form-control {
  border: 1px solid #ccc;
  border-radius: 5px;
}

.btn-primary {
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  color: #fff;
}

.btn-primary:hover {
  background-color: #0056b3;
}

</style>
<section class=\"appointment section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"mt-3\">
          <div class=\"feature-icon mb-3\">
            <i class=\"icofont-support text-lg\"></i>
          </div>
          <span class=\"h3\">Call for an Emergency Service!</span>
          <h2 class=\"text-color mt-3\">+84 789 1256 </h2>
        </div>
      </div>

      <div class=\"col-lg-8\">
        <div class=\"appointment-wrap mt-5 mt-lg-0 pl-lg-5\">
          <h2 class=\"mb-2 title-color\">LIFESTYLE SERVICE</h2>
          <p class=\"mb-4\">These services can encompass a wide array of offerings, including but not limited to wellness programs, personal coaching, fitness training, nutrition counseling, stress management, beauty treatments, leisure activities, travel planning, and concierge services. </p>
          ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 69, $this->source); })()), 'form_start', ["attr" => ["class" => "appointment-form"]]);
        echo "
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"form-group\">
                  ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 73, $this->source); })()), "poids", [], "any", false, false, false, 73), 'label', ["attr" => ["class" => "form-label"], "label" => "Poids (en kg)"]);
        echo "
                  ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 74, $this->source); })()), "poids", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre poids"]]);
        echo "
                  ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 75, $this->source); })()), "poids", [], "any", false, false, false, 75), 'errors');
        echo "
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"form-group\">
                  ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 80, $this->source); })()), "taille", [], "any", false, false, false, 80), 'label', ["attr" => ["class" => "form-label"], "label" => "Taille (en m)"]);
        echo "
                  ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 81, $this->source); })()), "taille", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre taille"]]);
        echo "
                  ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 82, $this->source); })()), "taille", [], "any", false, false, false, 82), 'errors');
        echo "
                </div>
              </div>
            </div>
           
          ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
        </div>
      </div>
    </div>
  </div>
</section>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "imc/CalculIMC.html.twig";
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
        return array (  174 => 87,  166 => 82,  162 => 81,  158 => 80,  150 => 75,  146 => 74,  142 => 73,  135 => 69,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig'%}

{%block body%}

<section class=\"page-title bg-1\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Book your </span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Service</h1>

        
        </div>
      </div>
    </div>
  </div>
</section>


<style>
  .appointment-wrap {
  background-color: #f9f9f9;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-label {
  font-weight: bold;
}

.form-control {
  border: 1px solid #ccc;
  border-radius: 5px;
}

.btn-primary {
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  color: #fff;
}

.btn-primary:hover {
  background-color: #0056b3;
}

</style>
<section class=\"appointment section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"mt-3\">
          <div class=\"feature-icon mb-3\">
            <i class=\"icofont-support text-lg\"></i>
          </div>
          <span class=\"h3\">Call for an Emergency Service!</span>
          <h2 class=\"text-color mt-3\">+84 789 1256 </h2>
        </div>
      </div>

      <div class=\"col-lg-8\">
        <div class=\"appointment-wrap mt-5 mt-lg-0 pl-lg-5\">
          <h2 class=\"mb-2 title-color\">LIFESTYLE SERVICE</h2>
          <p class=\"mb-4\">These services can encompass a wide array of offerings, including but not limited to wellness programs, personal coaching, fitness training, nutrition counseling, stress management, beauty treatments, leisure activities, travel planning, and concierge services. </p>
          {{ form_start(f, {'attr': {'class': 'appointment-form'}}) }}
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <div class=\"form-group\">
                  {{ form_label(f.poids, 'Poids (en kg)', {'attr': {'class': 'form-label'}}) }}
                  {{ form_widget(f.poids, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre poids'}}) }}
                  {{ form_errors(f.poids) }}
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"form-group\">
                  {{ form_label(f.taille, 'Taille (en m)', {'attr': {'class': 'form-label'}}) }}
                  {{ form_widget(f.taille, {'attr': {'class': 'form-control', 'placeholder': 'Entrez votre taille'}}) }}
                  {{ form_errors(f.taille) }}
                </div>
              </div>
            </div>
           
          {{ form_end(f) }}
        </div>
      </div>
    </div>
  </div>
</section>



{% endblock %}", "imc/CalculIMC.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\imc\\CalculIMC.html.twig");
    }
}
