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

/* user/editadmin.html.twig */
class __TwigTemplate_e8fe07a079ca16fbba5c5bd87224397d extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/editadmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/editadmin.html.twig", 3);
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
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Data Tables</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <div  style=\"display: flex; align-items: center;justify-content: center; margin-top: 50px;\">

    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Edit Profile</h5> 

              <!-- General Form Elements -->
              <div class=\"row mb-3\">
                <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                <div class=\"col-md-8 col-lg-9\">
                  ";
        // line 32
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "photo", [], "any", false, false, false, 32)))) {
            // line 33
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "photo", [], "any", false, false, false, 33))), "html", null, true);
            echo "\"  alt=\"Profile\" style=\"width: 120px; height:120px; border-radius: 50%;\">
        ";
        } else {
            // line 35
            echo "              <p>No profile photo available</p>
          ";
        }
        // line 37
        echo "      
                  <div class=\"pt-2\">
            
                    <label  class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\" >
                      <i class=\"bi bi-upload\"></i>
                      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "photo", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control", "style" => "display: none;"]]);
        echo "
                  </label>
                 
                  <br>

                 <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Username</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "username", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "username", [], "any", false, false, false, 50), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
               
                <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Fullname</label>
                <div class=\"col-sm-10\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "fullname", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "fullname", [], "any", false, false, false, 56), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                </div>
        
           
                
                  <label for=\"inputEmail\" class=\"col-sm-4 col-form-label\">Email</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  
                </div>
               
                   <label for=\"inputPassword\" class=\"col-sm-4 col-form-label\">Password</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "password", [], "any", false, false, false, 70), "first", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "password", [], "any", false, false, false, 71), "first", [], "any", false, false, false, 71), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                 
                </div>
                <label for=\"inputPassword\" class=\"col-sm-10 col-form-label\">Confirm Password</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "password", [], "any", false, false, false, 76), "second", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "password", [], "any", false, false, false, 77), "second", [], "any", false, false, false, 77), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                 
                </div>
              
                  <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">Number</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "phone", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "phone", [], "any", false, false, false, 84), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                </div>
               
                
              <br>
                  <div class=\"col-sm-10\">
                    
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "Submit", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                
                </div>

            </div>
          </div>

        </div>
    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
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
        return "user/editadmin.html.twig";
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
        return array (  235 => 99,  224 => 91,  214 => 84,  210 => 83,  201 => 77,  197 => 76,  189 => 71,  185 => 70,  176 => 64,  172 => 63,  162 => 56,  158 => 55,  150 => 50,  146 => 49,  136 => 42,  129 => 37,  125 => 35,  119 => 33,  117 => 32,  105 => 23,  88 => 8,  78 => 7,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# form_template.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Data Tables</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <div  style=\"display: flex; align-items: center;justify-content: center; margin-top: 50px;\">

    {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Edit Profile</h5> 

              <!-- General Form Elements -->
              <div class=\"row mb-3\">
                <label for=\"profileImage\" class=\"col-md-4 col-lg-3 col-form-label\">Profile Image</label>
                <div class=\"col-md-8 col-lg-9\">
                  {% if app.user is not null and app.user.photo is not null %}
        <img src=\"{{ asset('uploads/photos/' ~ app.user.photo) }}\"  alt=\"Profile\" style=\"width: 120px; height:120px; border-radius: 50%;\">
        {% else %}
              <p>No profile photo available</p>
          {% endif %}
      
                  <div class=\"pt-2\">
            
                    <label  class=\"btn btn-primary btn-sm\" title=\"Upload new profile image\" >
                      <i class=\"bi bi-upload\"></i>
                      {{ form_widget(form.photo, {'attr': {'class': 'form-control', 'style': 'display: none;'}}) }}
                  </label>
                 
                  <br>

                 <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Username</label>
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
               
                
              <br>
                  <div class=\"col-sm-10\">
                    
                    {{ form_widget(form.Submit, {'attr': {'class': 'btn btn-primary'}}) }}
                
                </div>

            </div>
          </div>

        </div>
    {{ form_end(form) }}
{% endblock %}
 ", "user/editadmin.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\editadmin.html.twig");
    }
}
