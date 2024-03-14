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

/* front/doctor.html.twig */
class __TwigTemplate_5cfedd7c3d81db9c3b4e7a722afab263 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/doctor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/doctor.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "front/doctor.html.twig", 1);
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
          <span class=\"text-white\">All Doctors</span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Specalized doctors</h1>

          <!-- <ul class=\"list-inline breadcumb-nav\">
            <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">All Doctors</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<!-- portfolio -->
<section class=\"section doctors\">
  <div class=\"container\">
  \t  <div class=\"row justify-content-center\">
             <div class=\"col-lg-6 text-center\">
                <div class=\"section-title\">
                    <h2>Doctors</h2>
                    <div class=\"divider mx-auto my-4\"></div>
                    <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
                </div>
            </div>
        </div>

      <div class=\"col-12 text-center  mb-5\">
\t        <div class=\"btn-group btn-group-toggle \" data-toggle=\"buttons\">
\t          <label class=\"btn active \">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"all\" checked=\"checked\" />All Department
\t          </label>
\t          <label class=\"btn \">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat1\" />Cardiology
\t          </label>
\t          <label class=\"btn\">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat2\" />Dental
\t          </label>
\t          <label class=\"btn\">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat3\" />Neurology
\t          </label>
\t          <label class=\"btn\">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat4\" />Medicine
\t          </label>
\t           <label class=\"btn\">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat5\" />Pediatric
\t          </label>
\t          <label class=\"btn\">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat6\" />Traumatology
\t          </label>
\t        </div>
      </div>

    <div class=\"row shuffle-wrapper portfolio-gallery\">
      \t<div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat1&quot;,&quot;cat2&quot;]\">
\t      \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t               <div class=\"doctor-img\">
\t               \t\t<img src=\"assets2/images/team/1.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t               </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Thomas Henry</a></h4>
                \t<p>Cardiology</p>
                </div> 
\t      \t</div>
      \t</div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat2&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"assets2/images/team/2.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Harrision Samuel</a></h4>
                \t<p>Radiology</p>
                </div> 
\t      \t</div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat3&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"assets2/images/team/3.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Alexandar James</a></h4>
                \t<p>Dental</p>
                </div> 
\t      \t</div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat3&quot;,&quot;cat4&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"assets2/images/team/4.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Edward john</a></h4>
                \t<p>Pediatry</p>
                </div> 
\t      \t</div>
      </div>

      \t<div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat5&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"assets2/images/team/1.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Thomas Henry</a></h4>
                \t<p>Neurology</p>
                </div> 
\t      \t</div>
      \t</div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat6&quot;]\">
       \t\t <div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/3.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Henry samuel</a></h4>
                \t<p>Palmology</p>
                </div> 
\t      \t</div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat4&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/1.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Thomas alexandar</a></h4>
                \t<p>Cardiology</p>
                </div> 
\t        </div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat5&quot;,&quot;cat6&quot;,&quot;cat1&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/3.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t             </div>
\t             </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">HarissonThomas </a></h4>
                \t<p>Traumatology</p>
                </div> 
\t      \t</div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item illustration\" data-groups=\"[&quot;cat2&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/4.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Jonas Thomson</a></h4>
                \t<p>Cardiology</p>
                </div> 
\t      \t</div>
        </div>

         <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat5&quot;,&quot;cat6&quot;,&quot;cat1&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/3.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Henry Forth</a></h4>
                \t<p>hematology</p>
                </div> 
\t      \t</div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item illustration\" data-groups=\"[&quot;cat2&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/4.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t             </div>
\t             </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Thomas Henry</a></h4>
                \t<p>Dental</p>
                </div> 
\t      \t</div>
        </div>
    </div>
  </div>
</section>
<!-- /portfolio -->
<section class=\"section cta-page\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"cta-content\">
\t\t\t\t\t<div class=\"divider mb-4\"></div>
\t\t\t\t\t<h2 class=\"mb-5 text-lg\">We are pleased to offer you the <span class=\"title-color\">chance to have the healthy</span></h2>
\t\t\t\t\t<a href=\"appoinment.html\" class=\"btn btn-main-2 btn-round-full\">Get appoinment<i class=\"icofont-simple-right  ml-2\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return "front/doctor.html.twig";
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
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig'%}

{%block body %}

<section class=\"page-title bg-1\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"block text-center\">
          <span class=\"text-white\">All Doctors</span>
          <h1 class=\"text-capitalize mb-5 text-lg\">Specalized doctors</h1>

          <!-- <ul class=\"list-inline breadcumb-nav\">
            <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
            <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
            <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">All Doctors</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<!-- portfolio -->
<section class=\"section doctors\">
  <div class=\"container\">
  \t  <div class=\"row justify-content-center\">
             <div class=\"col-lg-6 text-center\">
                <div class=\"section-title\">
                    <h2>Doctors</h2>
                    <div class=\"divider mx-auto my-4\"></div>
                    <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
                </div>
            </div>
        </div>

      <div class=\"col-12 text-center  mb-5\">
\t        <div class=\"btn-group btn-group-toggle \" data-toggle=\"buttons\">
\t          <label class=\"btn active \">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"all\" checked=\"checked\" />All Department
\t          </label>
\t          <label class=\"btn \">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat1\" />Cardiology
\t          </label>
\t          <label class=\"btn\">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat2\" />Dental
\t          </label>
\t          <label class=\"btn\">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat3\" />Neurology
\t          </label>
\t          <label class=\"btn\">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat4\" />Medicine
\t          </label>
\t           <label class=\"btn\">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat5\" />Pediatric
\t          </label>
\t          <label class=\"btn\">
\t            <input type=\"radio\" name=\"shuffle-filter\" value=\"cat6\" />Traumatology
\t          </label>
\t        </div>
      </div>

    <div class=\"row shuffle-wrapper portfolio-gallery\">
      \t<div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat1&quot;,&quot;cat2&quot;]\">
\t      \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t               <div class=\"doctor-img\">
\t               \t\t<img src=\"assets2/images/team/1.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t               </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Thomas Henry</a></h4>
                \t<p>Cardiology</p>
                </div> 
\t      \t</div>
      \t</div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat2&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"assets2/images/team/2.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Harrision Samuel</a></h4>
                \t<p>Radiology</p>
                </div> 
\t      \t</div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat3&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"assets2/images/team/3.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Alexandar James</a></h4>
                \t<p>Dental</p>
                </div> 
\t      \t</div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat3&quot;,&quot;cat4&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"assets2/images/team/4.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Edward john</a></h4>
                \t<p>Pediatry</p>
                </div> 
\t      \t</div>
      </div>

      \t<div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat5&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"assets2/images/team/1.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Thomas Henry</a></h4>
                \t<p>Neurology</p>
                </div> 
\t      \t</div>
      \t</div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat6&quot;]\">
       \t\t <div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/3.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Henry samuel</a></h4>
                \t<p>Palmology</p>
                </div> 
\t      \t</div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat4&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/1.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Thomas alexandar</a></h4>
                \t<p>Cardiology</p>
                </div> 
\t        </div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat5&quot;,&quot;cat6&quot;,&quot;cat1&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/3.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t             </div>
\t             </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">HarissonThomas </a></h4>
                \t<p>Traumatology</p>
                </div> 
\t      \t</div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item illustration\" data-groups=\"[&quot;cat2&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/4.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Jonas Thomson</a></h4>
                \t<p>Cardiology</p>
                </div> 
\t      \t</div>
        </div>

         <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item\" data-groups=\"[&quot;cat5&quot;,&quot;cat6&quot;,&quot;cat1&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/3.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t            </div>
\t            </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Henry Forth</a></h4>
                \t<p>hematology</p>
                </div> 
\t      \t</div>
      </div>

      <div class=\"col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item illustration\" data-groups=\"[&quot;cat2&quot;]\">
        \t<div class=\"position-relative doctor-inner-box\">
\t\t        <div class=\"doctor-profile\">
\t\t        \t<div class=\"doctor-img\">
\t\t               <img src=\"images/team/4.jpg\" alt=\"doctor-image\" class=\"img-fluid w-100\">
\t\t             </div>
\t             </div>
                <div class=\"content mt-3\">
                \t<h4 class=\"mb-0\"><a href=\"doctor-single.html\">Thomas Henry</a></h4>
                \t<p>Dental</p>
                </div> 
\t      \t</div>
        </div>
    </div>
  </div>
</section>
<!-- /portfolio -->
<section class=\"section cta-page\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"cta-content\">
\t\t\t\t\t<div class=\"divider mb-4\"></div>
\t\t\t\t\t<h2 class=\"mb-5 text-lg\">We are pleased to offer you the <span class=\"title-color\">chance to have the healthy</span></h2>
\t\t\t\t\t<a href=\"appoinment.html\" class=\"btn btn-main-2 btn-round-full\">Get appoinment<i class=\"icofont-simple-right  ml-2\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>



{% endblock %}", "front/doctor.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\front\\doctor.html.twig");
    }
}
