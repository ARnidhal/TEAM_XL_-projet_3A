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

/* registration/signupdoc.html.twig */
class __TwigTemplate_3715cd0cfe6dcb6ad0d5f377ae276143 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/signupdoc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/signupdoc.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "registration/signupdoc.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    

   <div  style=\"display: flex; align-items: center;justify-content: center; margin-top: 50px;\">

    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">SignUp</h5> 

              <!-- General Form Elements -->
               
                  <label for=\"inputText\" class=\"col-sm-10 col-form-label\">Username</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "username", [], "any", false, false, false, 22), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
               
                <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Fullname</label>
                <div class=\"col-sm-10\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "fullname", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "fullname", [], "any", false, false, false, 28), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                </div>
           
                
                  <label for=\"inputEmail\" class=\"col-sm-4 col-form-label\">Email</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  
                </div>
               
                  <label for=\"inputPassword\" class=\"col-sm-4 col-form-label\">Password</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "password", [], "any", false, false, false, 41), "first", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "password", [], "any", false, false, false, 42), "first", [], "any", false, false, false, 42), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                 
                </div>
                <label for=\"inputPassword\" class=\"col-sm-10 col-form-label\">Confirm Password</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "password", [], "any", false, false, false, 47), "second", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "password", [], "any", false, false, false, 48), "second", [], "any", false, false, false, 48), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                 
                </div>
              
                  <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">Number</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "phone", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "phone", [], "any", false, false, false, 55), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                </div>
                <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">specialty</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "specialite", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "specialite", [], "any", false, false, false, 60), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                </div>
                <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">Adress</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "adress", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "adress", [], "any", false, false, false, 65), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                </div>
               
                  <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">File Upload</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "photo", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                 
                </div>
              <br>
                  <div class=\"col-sm-10\" style=\" display: flex;align-items: center; justify-content: center; \">
                    
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "Submit", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                
                </div>

            </div>
          </div>
          <div class=\"\"col-12>
            <p class=\"small mb-0\">Already have an Account?<a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Log In</a></p>
        </div>
          <div class=\"\"col-12>
   
        </div>
        </div>
    ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/signupdoc.html.twig";
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
        return array (  231 => 89,  222 => 83,  212 => 76,  203 => 70,  195 => 65,  191 => 64,  184 => 60,  180 => 59,  173 => 55,  169 => 54,  160 => 48,  156 => 47,  148 => 42,  144 => 41,  135 => 35,  131 => 34,  122 => 28,  118 => 27,  110 => 22,  106 => 21,  94 => 12,  88 => 8,  78 => 7,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base2.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    

   <div  style=\"display: flex; align-items: center;justify-content: center; margin-top: 50px;\">

    {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">SignUp</h5> 

              <!-- General Form Elements -->
               
                  <label for=\"inputText\" class=\"col-sm-10 col-form-label\">Username</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget (form.username, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors (form.username, {'attr': {'class': 'form-danger'}}) }}
                  </div>
               
                <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Fullname</label>
                <div class=\"col-sm-10\">
                    {{ form_widget(form.fullname, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors (form.fullname, {'attr': {'class': 'form-danger'}}) }}
                </div>
           
                
                  <label for=\"inputEmail\" class=\"col-sm-4 col-form-label\">Email</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors (form.email, {'attr': {'class': 'form-danger'}}) }}
                  
                </div>
               
                  <label for=\"inputPassword\" class=\"col-sm-4 col-form-label\">Password</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.password.first, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors (form.password.first, {'attr': {'class': 'form-danger'}}) }}
                 
                </div>
                <label for=\"inputPassword\" class=\"col-sm-10 col-form-label\">Confirm Password</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.password.second, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors (form.password.second, {'attr': {'class': 'form-danger'}}) }}
                 
                </div>
              
                  <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">Number</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors (form.phone, {'attr': {'class': 'form-danger'}}) }}
                </div>
                <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">specialty</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.specialite, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors (form.specialite, {'attr': {'class': 'form-danger'}}) }}
                </div>
                <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">Adress</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.adress, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors (form.adress, {'attr': {'class': 'form-danger'}}) }}
                </div>
               
                  <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">File Upload</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.photo, {'attr': {'class': 'form-control'}}) }}
                 
                </div>
              <br>
                  <div class=\"col-sm-10\" style=\" display: flex;align-items: center; justify-content: center; \">
                    
                    {{ form_widget(form.Submit, {'attr': {'class': 'btn btn-primary'}}) }}
                
                </div>

            </div>
          </div>
          <div class=\"\"col-12>
            <p class=\"small mb-0\">Already have an Account?<a href=\"{{path('app_login')}}\">Log In</a></p>
        </div>
          <div class=\"\"col-12>
   
        </div>
        </div>
    {{ form_end(form) }}
{% endblock %}
 ", "registration/signupdoc.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\registration\\signupdoc.html.twig");
    }
}
