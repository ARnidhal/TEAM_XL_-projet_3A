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

/* reservationservice/formreservationser.html.twig */
class __TwigTemplate_40a371d041ae0a42ebe25f3c99f27ae8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationservice/formreservationser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationservice/formreservationser.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "reservationservice/formreservationser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section class=\"page-title bg-1\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Book your </span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Service</h1>

          <!-- <ul class=\"list-inline breadcumb-nav\">
            <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class=\"appoinment section\">
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
            <div class=\"appoinment-wrap mt-5 mt-lg-0 pl-lg-5\">
                <h2 class=\"mb-2 title-color\">Service</h2>
                <style>
                  .flash-message {
                    padding: 10px 20px;
                    border-radius: 5px;
                    background-color: #4CAF50;
                    color: white;
                    margin-bottom: 20px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    font-family: Arial, sans-serif;
                    animation: bounceFadeInOut 2s ease-in-out; /* Add animation */
                  }
                
                  /* Keyframes for bounce fade in and out effect */
                  @keyframes bounceFadeInOut {
                    0% {
                      opacity: 0;
                      transform: scale(0.5) translateY(-20px);
                    }
                    25% {
                      opacity: 1;
                      transform: scale(1.1) translateY(0);
                    }
                    50% {
                      opacity: 1;
                      transform: scale(0.9) translateY(0);
                    }
                    75% {
                      opacity: 1;
                      transform: scale(1.1) translateY(0);
                    }
                    100% {
                      opacity: 0;
                      transform: scale(0.5) translateY(-20px);
                    }
                  }
                </style>
               ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "session", [], "any", false, false, false, 75), "flashBag", [], "any", false, false, false, 75), "has", ["success"], "method", false, false, false, 75)) {
            // line 76
            echo "               <div class=\"flash-message\">
                   ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "session", [], "any", false, false, false, 77), "flashBag", [], "any", false, false, false, 77), "get", ["success"], "method", false, false, false, 77), 0, [], "array", false, false, false, 77), "html", null, true);
            echo "
               </div>
           ";
        }
        // line 80
        echo "           
               

                ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 83, $this->source); })()), 'form_start', ["attr" => ["class" => "cool-form"]]);
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label for=\"name\" class=\"cool-label\">Name</label>
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 88, $this->source); })()), "nom", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control cool-input", "placeholder" => "Enter your name"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label for=\"email\" class=\"cool-label\">Email</label>
                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 95, $this->source); })()), "email", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control cool-input", "placeholder" => "Enter your email"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label for=\"service\" class=\"cool-label\">Service</label>
                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 102, $this->source); })()), "idserivce", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control cool-select"]]);
        echo "
                        </div>
                    </div>

                   
                </div>
                ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 108, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>

     ";
        // line 114
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 114, $this->source); })()), 'form_end');
        echo "
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
        return "reservationservice/formreservationser.html.twig";
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
        return array (  204 => 114,  195 => 108,  186 => 102,  176 => 95,  166 => 88,  158 => 83,  153 => 80,  147 => 77,  144 => 76,  142 => 75,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig'%}
{% block body %}
<section class=\"page-title bg-1\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Book your </span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Service</h1>

          <!-- <ul class=\"list-inline breadcumb-nav\">
            <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Book your Seat</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class=\"appoinment section\">
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
            <div class=\"appoinment-wrap mt-5 mt-lg-0 pl-lg-5\">
                <h2 class=\"mb-2 title-color\">Service</h2>
                <style>
                  .flash-message {
                    padding: 10px 20px;
                    border-radius: 5px;
                    background-color: #4CAF50;
                    color: white;
                    margin-bottom: 20px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    font-family: Arial, sans-serif;
                    animation: bounceFadeInOut 2s ease-in-out; /* Add animation */
                  }
                
                  /* Keyframes for bounce fade in and out effect */
                  @keyframes bounceFadeInOut {
                    0% {
                      opacity: 0;
                      transform: scale(0.5) translateY(-20px);
                    }
                    25% {
                      opacity: 1;
                      transform: scale(1.1) translateY(0);
                    }
                    50% {
                      opacity: 1;
                      transform: scale(0.9) translateY(0);
                    }
                    75% {
                      opacity: 1;
                      transform: scale(1.1) translateY(0);
                    }
                    100% {
                      opacity: 0;
                      transform: scale(0.5) translateY(-20px);
                    }
                  }
                </style>
               {% if app.session.flashBag.has('success') %}
               <div class=\"flash-message\">
                   {{ app.session.flashBag.get('success')[0] }}
               </div>
           {% endif %}
           
               

                {{ form_start(f, {'attr': {'class': 'cool-form'}}) }}
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label for=\"name\" class=\"cool-label\">Name</label>
                            {{ form_widget(f.nom,{'attr':{'class':'form-control cool-input', 'placeholder': 'Enter your name'}}) }}
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label for=\"email\" class=\"cool-label\">Email</label>
                            {{ form_widget(f.email,{'attr':{'class':'form-control cool-input', 'placeholder': 'Enter your email'}}) }}
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label for=\"service\" class=\"cool-label\">Service</label>
                            {{ form_widget(f.idserivce, {'attr': {'class': 'form-control cool-select'}}) }}
                        </div>
                    </div>

                   
                </div>
                {{form_end(f)}}
            </div>
        </div>
    </div>
</div>

     {{form_end(f)}}
</section>



{% endblock %}", "reservationservice/formreservationser.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\reservationservice\\formreservationser.html.twig");
    }
}
