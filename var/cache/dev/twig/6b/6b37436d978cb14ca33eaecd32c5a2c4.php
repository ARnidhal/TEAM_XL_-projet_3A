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

/* front/indexfront.html.twig */
class __TwigTemplate_0884b25c077d83c980b58329409fe6f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/indexfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/indexfront.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "front/indexfront.html.twig", 1);
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
        echo "<!-- Slider Start -->
<section class=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-12 col-xl-7\">
\t\t\t\t<div class=\"block\">
\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t<span class=\"text-uppercase text-sm letter-spacing \">Total Health care solution</span>
\t\t\t\t\t<h1 class=\"mb-3 mt-3\">Your most trusted health partner</h1>
\t\t\t\t\t
\t\t\t\t\t<p class=\"mb-4 pr-5\">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
\t\t\t\t\t<div class=\"btn-container \">
\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        echo "\" target=\"_blank\" class=\"btn btn-main-2 btn-icon btn-round-full\">Make appoinment <i class=\"icofont-simple-right ml-2  \"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"features\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"feature-block d-lg-flex\">
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-surgeon-alt\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>24 Hours Service</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">Online Appoinment</h4>
\t\t\t\t\t\t<p class=\"mb-4\">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        echo "\" class=\"btn btn-main btn-round-full\">Make a appoinment</a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-ui-clock\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Timing schedule</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">Working Hours</h4>
\t\t\t\t\t\t<ul class=\"w-hours list-unstyled\">
\t\t                    <li class=\"d-flex justify-content-between\">Sun - Wed : <span>8:00 - 17:00</span></li>
\t\t                    <li class=\"d-flex justify-content-between\">Thu - Fri : <span>9:00 - 17:00</span></li>
\t\t                    <li class=\"d-flex justify-content-between\">Sat - sun : <span>10:00 - 17:00</span></li>
\t\t                </ul>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-support\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Emegency Cases</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">1-800-700-6200</h4>
\t\t\t\t\t\t<p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<section class=\"section about\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"about-img\">
\t\t\t\t\t<img src=\"assets2/images/about/img-1.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t<img src=\"assets2/images/about/img-2.jpg\" alt=\"\" class=\"img-fluid mt-4\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"about-img mt-4 mt-lg-0\">
\t\t\t\t\t<img src=\"assets2/images/about/img-3.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"about-content pl-4 mt-4 mt-lg-0\">
\t\t\t\t\t<h2 class=\"title-color\">Personal care <br>& healthy living</h2>
\t\t\t\t\t<p class=\"mt-4 mb-5\">We provide best leading medicle service Nulla perferendis veniam deleniti ipsum officia dolores repellat laudantium obcaecati neque.</p>

\t\t\t\t\t<a href=\"service.html\" class=\"btn btn-main-2 btn-round-full btn-icon\">Services<i class=\"icofont-simple-right ml-3\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"cta-section \">
\t<div class=\"container\">
\t\t<div class=\"cta position-relative\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-doctor\"></i>
\t\t\t\t\t\t<span class=\"h3\">58</span>k
\t\t\t\t\t\t<p>Happy People</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-flag\"></i>
\t\t\t\t\t\t<span class=\"h3\">700</span>+
\t\t\t\t\t\t<p>Surgery Comepleted</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-badge\"></i>
\t\t\t\t\t\t<span class=\"h3\">40</span>+
\t\t\t\t\t\t<p>Expert Doctors</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-globe\"></i>
\t\t\t\t\t\t<span class=\"h3\">20</span>
\t\t\t\t\t\t<p>Worldwide Branch</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section service gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Award winning patient care</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-laboratory text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Laboratory services</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-heart-beat-alt text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Heart Disease</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-tooth text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Dental Care</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-crutch text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Body Surgery</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-brain-alt text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Neurology Sargery</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-dna-alt-1 text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Gynecology</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"section testimonial-2 gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>We served over 5000+ Patients</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-12 testimonial-wrap-2\">
\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>

\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"assets2/images/team/test-thumb1.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info \">
\t\t\t\t\t\t<h4>Amazing service!</h4>
\t\t\t\t\t\t<span>John Partho</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"assets2/images/team/test-thumb2.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Expert doctors!</h4>
\t\t\t\t\t\t<span>Mullar Sarth</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"assets2/images/team/test-thumb3.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Good Support!</h4>
\t\t\t\t\t\t<span>Kolis Mullar</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"assets2/images/team/test-thumb4.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Nice Environment!</h4>
\t\t\t\t\t\t<span>Partho Sarothi</span>
\t\t\t\t\t\t<p class=\"mt-4\">
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"assets2/images/team/test-thumb1.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Modern Service!</h4>
\t\t\t\t\t\t<span>Kolis Mullar</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section clients\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Partners who support us</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row clients-logo\">
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/1.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/2.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/3.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/5.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/6.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/3.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/5.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/6.png\" alt=\"\" class=\"img-fluid\">
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
        return "front/indexfront.html.twig";
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
        return array (  104 => 34,  82 => 15,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig'%}
{%block body %}
<!-- Slider Start -->
<section class=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-12 col-xl-7\">
\t\t\t\t<div class=\"block\">
\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t<span class=\"text-uppercase text-sm letter-spacing \">Total Health care solution</span>
\t\t\t\t\t<h1 class=\"mb-3 mt-3\">Your most trusted health partner</h1>
\t\t\t\t\t
\t\t\t\t\t<p class=\"mb-4 pr-5\">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
\t\t\t\t\t<div class=\"btn-container \">
\t\t\t\t\t\t<a href=\"{{ path('add')}}\" target=\"_blank\" class=\"btn btn-main-2 btn-icon btn-round-full\">Make appoinment <i class=\"icofont-simple-right ml-2  \"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"features\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"feature-block d-lg-flex\">
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-surgeon-alt\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>24 Hours Service</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">Online Appoinment</h4>
\t\t\t\t\t\t<p class=\"mb-4\">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
\t\t\t\t\t\t<a href=\"{{ path('add')}}\" class=\"btn btn-main btn-round-full\">Make a appoinment</a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-ui-clock\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Timing schedule</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">Working Hours</h4>
\t\t\t\t\t\t<ul class=\"w-hours list-unstyled\">
\t\t                    <li class=\"d-flex justify-content-between\">Sun - Wed : <span>8:00 - 17:00</span></li>
\t\t                    <li class=\"d-flex justify-content-between\">Thu - Fri : <span>9:00 - 17:00</span></li>
\t\t                    <li class=\"d-flex justify-content-between\">Sat - sun : <span>10:00 - 17:00</span></li>
\t\t                </ul>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-support\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Emegency Cases</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">1-800-700-6200</h4>
\t\t\t\t\t\t<p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<section class=\"section about\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"about-img\">
\t\t\t\t\t<img src=\"assets2/images/about/img-1.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t<img src=\"assets2/images/about/img-2.jpg\" alt=\"\" class=\"img-fluid mt-4\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-sm-6\">
\t\t\t\t<div class=\"about-img mt-4 mt-lg-0\">
\t\t\t\t\t<img src=\"assets2/images/about/img-3.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"about-content pl-4 mt-4 mt-lg-0\">
\t\t\t\t\t<h2 class=\"title-color\">Personal care <br>& healthy living</h2>
\t\t\t\t\t<p class=\"mt-4 mb-5\">We provide best leading medicle service Nulla perferendis veniam deleniti ipsum officia dolores repellat laudantium obcaecati neque.</p>

\t\t\t\t\t<a href=\"service.html\" class=\"btn btn-main-2 btn-round-full btn-icon\">Services<i class=\"icofont-simple-right ml-3\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"cta-section \">
\t<div class=\"container\">
\t\t<div class=\"cta position-relative\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-doctor\"></i>
\t\t\t\t\t\t<span class=\"h3\">58</span>k
\t\t\t\t\t\t<p>Happy People</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-flag\"></i>
\t\t\t\t\t\t<span class=\"h3\">700</span>+
\t\t\t\t\t\t<p>Surgery Comepleted</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-badge\"></i>
\t\t\t\t\t\t<span class=\"h3\">40</span>+
\t\t\t\t\t\t<p>Expert Doctors</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-globe\"></i>
\t\t\t\t\t\t<span class=\"h3\">20</span>
\t\t\t\t\t\t<p>Worldwide Branch</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section service gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Award winning patient care</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-laboratory text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Laboratory services</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-heart-beat-alt text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Heart Disease</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-tooth text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Dental Care</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-crutch text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Body Surgery</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-brain-alt text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Neurology Sargery</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-dna-alt-1 text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Gynecology</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"section testimonial-2 gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>We served over 5000+ Patients</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-12 testimonial-wrap-2\">
\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>

\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"assets2/images/team/test-thumb1.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info \">
\t\t\t\t\t\t<h4>Amazing service!</h4>
\t\t\t\t\t\t<span>John Partho</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"assets2/images/team/test-thumb2.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Expert doctors!</h4>
\t\t\t\t\t\t<span>Mullar Sarth</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"assets2/images/team/test-thumb3.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Good Support!</h4>
\t\t\t\t\t\t<span>Kolis Mullar</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"assets2/images/team/test-thumb4.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Nice Environment!</h4>
\t\t\t\t\t\t<span>Partho Sarothi</span>
\t\t\t\t\t\t<p class=\"mt-4\">
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"assets2/images/team/test-thumb1.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Modern Service!</h4>
\t\t\t\t\t\t<span>Kolis Mullar</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section clients\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Partners who support us</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row clients-logo\">
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/1.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/2.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/3.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/5.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/6.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/3.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/5.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"assets2/images/about/6.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{%endblock%}", "front/indexfront.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\front\\indexfront.html.twig");
    }
}
