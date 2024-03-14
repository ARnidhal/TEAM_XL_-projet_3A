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

/* post/addpost.html.twig */
class __TwigTemplate_e9830686f49e04e289c2b4d9644f08c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/addpost.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/addpost.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "post/addpost.html.twig", 1);
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
<section class=\"page-title bg-1\" style=\"color: #105f52;\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\"></span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Submit a post</h1>

          <!-- <ul class=\"list-inline breadcumb-nav\">
            <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Our blog</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<div style=\"display: flex;align-items: center;justify-self: center; margin-top: 5%; margin-bottom: 4%;\">
<div class=\"col-lg-8\">
    <div class=\"post-wrap mt-5 mt-lg-0 pl-lg-5 \"   >
     <!-- <h2 class=\"mb-2 title-color\">Submit a post</h2> -->
     ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
     <div class=\"row\">
         <!-- <div class=\"col-lg-6\">
             <div class=\"form-group\">
            </div>
        </div> -->
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 37, $this->source); })()), "title_post", [], "any", false, false, false, 37), 'widget', ["type" => "textarea", "class" => "form-control", "placeholder" => "Post Title", "rows" => "4"]);
        echo "
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 38, $this->source); })()), "title_post", [], "any", false, false, false, 38), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
            </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"form-group\">
              ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 43, $this->source); })()), "phonenumber", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Phone Number"]]);
        echo "
              ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 44, $this->source); })()), "phonenumber", [], "any", false, false, false, 44), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
          </div>
      </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 49, $this->source); })()), "type_post", [], "any", false, false, false, 49), 'widget', ["attr" => ["type" => "select", "class" => "form-control"]]);
        echo "              
            </div>
        </div>
        
        
        
        
    </div>
    <div class=\"form-group-2 mb-4\">
                    
                    
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 60, $this->source); })()), "contenu_post", [], "any", false, false, false, 60), 'widget', ["type" => "textarea", "class" => "form-control", "placeholder" => "Post", "rows" => "12"]);
        echo "
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 61, $this->source); })()), "contenu_post", [], "any", false, false, false, 61), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                </div>
                <div style=\"display: none;\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 64, $this->source); })()), "id_post", [], "any", false, false, false, 64), 'widget', ["att" => ["name" => "id post", "id" => "time", "type" => "text", "class" => "form-control"]]);
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 65, $this->source); })()), "id_post", [], "any", false, false, false, 65), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
                    
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 67, $this->source); })()), "nb_comments_post", [], "any", false, false, false, 67), 'widget');
        echo "
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 68, $this->source); })()), "validation_post", [], "any", false, false, false, 68), 'widget');
        echo "
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 69, $this->source); })()), "makedate_post", [], "any", false, false, false, 69), 'widget');
        echo "
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 70, $this->source); })()), "likes_post", [], "any", false, false, false, 70), 'widget');
        echo "
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 71, $this->source); })()), "dislikes_post", [], "any", false, false, false, 71), 'widget');
        echo "
                </div>
                
                <div >
                    <button type=\"submit\" class=\"btn btn-main btn-round-full\">Submit Post <i class=\"icofont-simple-right ml-2\"></i></button>
                <!-- <i class=\"icofont-simple-right\"> -->
                    <!-- ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 77, $this->source); })()), "SUBMITPOST", [], "any", false, false, false, 77), 'widget', ["type" => "SubmitType", "class" => "btn btn-main btn-round-full ", "placeholder" => "SUBMIT POST", "label" => "SUBMIT POST "]);
        echo " -->
                    
                    <!-- </i> -->
                </div>
                ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 81, $this->source); })()), 'form_end');
        echo "
            </form>
        </div>
    </div>
</div>
<h3 class=\"mb-4\">This article will be posted when an admin validates it.</h3>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "post/addpost.html.twig";
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
        return array (  195 => 81,  188 => 77,  179 => 71,  175 => 70,  171 => 69,  167 => 68,  163 => 67,  158 => 65,  154 => 64,  148 => 61,  144 => 60,  130 => 49,  122 => 44,  118 => 43,  110 => 38,  106 => 37,  95 => 29,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base2.html.twig\" %}

{% block body %}

<section class=\"page-title bg-1\" style=\"color: #105f52;\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\"></span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Submit a post</h1>

          <!-- <ul class=\"list-inline breadcumb-nav\">
            <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">Our blog</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<div style=\"display: flex;align-items: center;justify-self: center; margin-top: 5%; margin-bottom: 4%;\">
<div class=\"col-lg-8\">
    <div class=\"post-wrap mt-5 mt-lg-0 pl-lg-5 \"   >
     <!-- <h2 class=\"mb-2 title-color\">Submit a post</h2> -->
     {{form_start(f,{attr:{novalidate:'novalidate'}})}}
     <div class=\"row\">
         <!-- <div class=\"col-lg-6\">
             <div class=\"form-group\">
            </div>
        </div> -->
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                {{form_widget(f.title_post,{'type':'textarea','class':'form-control','placeholder':'Post Title','rows':'4'})}}
                {{ form_errors(f.title_post, {'attr': {'class': 'form-danger'}}) }}
            </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"form-group\">
              {{ form_widget(f.phonenumber, {'attr': {'class': 'form-control', 'placeholder': 'Phone Number'}}) }}
              {{ form_errors(f.phonenumber, {'attr': {'class': 'form-danger'}}) }}
          </div>
      </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                {{form_widget(f.type_post,{'attr':{'type':'select','class':'form-control'}})}}              
            </div>
        </div>
        
        
        
        
    </div>
    <div class=\"form-group-2 mb-4\">
                    
                    
        {{form_widget(f.contenu_post,{'type':'textarea','class':'form-control','placeholder':'Post','rows':'12'})}}
        {{ form_errors(f.contenu_post, {'attr': {'class': 'form-danger'}}) }}
                </div>
                <div style=\"display: none;\">
                    {{form_widget(f.id_post,{'att':{ 'name':'id post' , 'id':'time', 'type':'text', 'class':'form-control'}})}}
                    {{ form_errors(f.id_post, {'attr': {'class': 'form-danger'}}) }}
                    
                    {{form_widget(f.nb_comments_post)}}
                    {{form_widget(f.validation_post)}}
                    {{form_widget(f.makedate_post)}}
                    {{form_widget(f.likes_post)}}
                    {{form_widget(f.dislikes_post)}}
                </div>
                
                <div >
                    <button type=\"submit\" class=\"btn btn-main btn-round-full\">Submit Post <i class=\"icofont-simple-right ml-2\"></i></button>
                <!-- <i class=\"icofont-simple-right\"> -->
                    <!-- {{form_widget(f.SUBMITPOST,{'type':'SubmitType','class':'btn btn-main btn-round-full ','placeholder':'SUBMIT POST','label':'SUBMIT POST '})}} -->
                    
                    <!-- </i> -->
                </div>
                {{form_end(f)}}
            </form>
        </div>
    </div>
</div>
<h3 class=\"mb-4\">This article will be posted when an admin validates it.</h3>

{% endblock %}

", "post/addpost.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\post\\addpost.html.twig");
    }
}
