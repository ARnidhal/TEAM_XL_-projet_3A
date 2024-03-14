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

/* front/add.html.twig */
class __TwigTemplate_09c08995a40f67ef8b86abeb16628729 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/add.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "front/add.html.twig", 1);
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
        echo "

\t


<section class=\"page-title bg-1\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Book your Seat</span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Appoinment</h1>

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
              <h2 class=\"text-color mt-3\">+25 555 555 </h2>
          </div>
      </div>

      <div class=\"col-lg-8\">
           <div class=\"appoinment-wrap mt-5 mt-lg-0 pl-lg-5\">
            <h2 class=\"mb-2 title-color\">Book an appoinment</h2>
            
               ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 45, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
              
                <div class=\"row mb-3\">
                  <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Full Name</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 50, $this->source); })()), "fullname", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                     ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 51, $this->source); })()), "fullname", [], "any", false, false, false, 51), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail\" class=\"col-sm-2 col-form-label\">Email</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                     ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputphone\" class=\"col-sm-2 col-form-label\">Phone Number</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 64, $this->source); })()), "tel", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                     ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 65, $this->source); })()), "tel", [], "any", false, false, false, 65), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>
                
                
                <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Date</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 73, $this->source); })()), "date", [], "any", false, false, false, 73), 'widget', ["label_attr" => ["class" => "font-weight-bold"]]);
        echo "
                     ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 74, $this->source); })()), "date", [], "any", false, false, false, 74), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputtime\" class=\"col-sm-2 col-form-label\">Time</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 80, $this->source); })()), "time", [], "any", false, false, false, 80), 'widget', ["label_attr" => ["class" => "font-weight-bold"]]);
        echo "
                     ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 81, $this->source); })()), "time", [], "any", false, false, false, 81), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>

                
                <div class=\"row mb-3\">
                  <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Note</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 89, $this->source); })()), "note", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                     ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 90, $this->source); })()), "note", [], "any", false, false, false, 90), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                  </div>
                </div>
                
                

                

                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-2 col-form-label\">Medecin</label>
                    <div class=\"col-sm-10\">
                      ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 101, $this->source); })()), "medecin", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                  </div>

                

                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\"></label>
                  <div class=\"col-sm-10\">
                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 110, $this->source); })()), "save", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
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
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 126, $this->source); })()), 'form_end');
        echo "
            </div>
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
        return "front/add.html.twig";
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
        return array (  238 => 126,  219 => 110,  207 => 101,  193 => 90,  189 => 89,  178 => 81,  174 => 80,  165 => 74,  161 => 73,  150 => 65,  146 => 64,  137 => 58,  133 => 57,  124 => 51,  120 => 50,  112 => 45,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block body %}


\t


<section class=\"page-title bg-1\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">Book your Seat</span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Appoinment</h1>

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
              <h2 class=\"text-color mt-3\">+25 555 555 </h2>
          </div>
      </div>

      <div class=\"col-lg-8\">
           <div class=\"appoinment-wrap mt-5 mt-lg-0 pl-lg-5\">
            <h2 class=\"mb-2 title-color\">Book an appoinment</h2>
            
               {{ form_start(f, {'attr': {'novalidate': 'novalidate'}}) }}
              
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
                    {{ form_widget(f.date, {'label_attr': {'class': 'font-weight-bold'}})}}
                     {{ form_errors (f.date, {'attr': {'class': 'form-danger'}}) }}
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputtime\" class=\"col-sm-2 col-form-label\">Time</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(f.time, {'label_attr': {'class': 'font-weight-bold'}})}}
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
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

{%endblock%}", "front/add.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\front\\add.html.twig");
    }
}
