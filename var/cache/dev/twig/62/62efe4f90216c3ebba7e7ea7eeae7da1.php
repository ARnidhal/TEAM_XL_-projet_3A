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

/* user/pagehome.html.twig */
class __TwigTemplate_a6d77fa094f7822b91eb46f13a58f178 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pagehome.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pagehome.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "user/pagehome.html.twig", 1);
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
<style>
\t.banner .block h1 {
    font-size: 60px;
    line-height: 1.2;
    letter-spacing: -1.2px;
    text-transform: capitalize;
    color: #fff;
}

.feature-item .feature-icon i {
    font-size: 50px;
    color: #06785d;
}
.btn-main {
    background: #06785d;
    color: #fff;
    border-color: #06785d;

\t.btn-main-2:hover {
    background: #06785d;
    color: #fff;
    border-color: #06785d;
}
}
.btn-main-2:hover {
    background: #06785d;
    color: #fff;
    border-color: #06785d;
}
.cta:before {
    position: absolute;
    content: \"\";
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    background: #06785d;
}
.title-color {
    color: #06785d;
}

.section-title h2 {
    color: #06785d;
}
</style>

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
\t\t\t\t\t
\t\t\t\t\t<div class=\"btn-container \">
\t\t\t\t\t\t<a href=\"/add\" target=\"_blank\" class=\"btn btn-main-2 btn-icon btn-round-full\">Make appoinment <i class=\"icofont-simple-right ml-2  \"></i></a>
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
\t\t\t\t\t\t<p class=\"mb-4\" style=\"color: #c1c35c;\">Get your appointment now</p>
\t\t\t\t\t\t<a href=\"/add\" class=\"btn btn-main btn-round-full\">Make a appoinment</a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-ui-clock\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Timing schedule</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">Working Hours</h4>
\t\t\t\t\t\t<ul class=\"w-hours list-unstyled\" style=\"color: #c1c35c;\">
    <li class=\"d-flex justify-content-between\">Sun - Wed : <span>8:00 - 17:00</span></li>
    <li class=\"d-flex justify-content-between\">Thu - Fri : <span>9:00 - 17:00</span></li>
    <li class=\"d-flex justify-content-between\">Sat - Sun : <span>10:00 - 17:00</span></li>
</ul>

\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-support\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Emegency Cases</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">+216 25 555 555</h4>
\t\t\t\t\t\t<p class=\"mb-4\" style=\"color: #c1c35c;\">In emergencies, you can always call us!</p>

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
\t\t\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../assets2/images/about/img-6.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
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
\t\t\t\t\t<p class=\"mt-4 mb-5\">We provide best leading medicle services </p>

\t\t\t\t\t<a href=\"/tableservice/front\" class=\"btn btn-main-2 btn-round-full btn-icon\">Services<i class=\"icofont-simple-right ml-3\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"cta-section\">
<script>
document.addEventListener('DOMContentLoaded', function () {
    const counterStats = document.querySelectorAll('.counter-stat');

    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5,
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    counterStats.forEach(stat => {
        observer.observe(stat);
    });
});
</script>

    <div class=\"container\">
        <div class=\"cta position-relative\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"counter-stat text-center\">
                        <i class=\"icofont-doctor\"></i>
                        <span class=\"h3\">58</span>k
                        <p>Happy People</p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"counter-stat text-center\">
                        <i class=\"icofont-doctor\"></i>
                        <span class=\"h3\">700</span>k
                        <p>Surgeries Completed</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"counter-stat text-center\">
                        <i class=\"icofont-doctor\"></i>
                        <span class=\"h3\">40</span>k
                        <p>Expert Doctors</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"counter-stat text-center\">
                        <i class=\"icofont-doctor\"></i>
                        <span class=\"h3\">20</span>k
                        <p>Worldwide Branches</p>
                    </div>
                </div>
                <!-- Repeat the same structure for other counter-stats -->
            </div>
        </div>
    </div>
</section>

<section class=\"section service gray-bg\">
\t<div class=\"container\">
\t\t

<h2 class=\"title-color\" style=\"text-align: center; margin-top: 0;\">Specialities </h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-laboratory text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Laboratory services</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Lab services: Precise analyses for medical diagnoses and research insights.</p>
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
\t\t\t\t\t\t<p class=\"mb-4\">Heart disease: Affects heart, managed with lifestyle changes, meds, and, if needed, surgery. Early detection crucial.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-brain-alt text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Neurology Sargery</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Neurology Surgery: Specialized procedures for treating neurological conditions.</p>
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
\t\t\t\t\t\t<p class=\"mb-4\">Dental Care: Oral health maintenance and treatments for a healthy smile.</p>
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
\t\t\t\t\t\t<p class=\"mb-4\">Body Surgery: Cosmetic procedures for enhancing physical appearance.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t\t
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-dna-alt-1 text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Gynecology</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">
Gynecology: Women's reproductive health care and wellness services.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"section testimonial-2 gray-bg\">
    <div class=\"section-title text-center\">
\t\t\t\t\t<h2>Reviews</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t

\t<div class=\"container mt-4\"> <!-- Adjust the margin top value as needed -->
        <div id=\"testimonialCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <div class=\"testimonial-block style-2 gray-bg\">
                    <i class=\"icofont-quote-right\"></i>

                    <div class=\"testimonial-thumb\">
                        <img src=\"assets2/images/team/test-thumb1.jpg\" alt=\"\" class=\"img-fluid\">
                    </div>

                    <div class=\"client-info \">
                        <h4 class=\"text-black\">Amazing service!</h4>
                        <span class=\"text-muted\">Mehdi Fgaier</span>
                        <p class=\"mb-4 text-black\">
                            The service provided was absolutely outstanding, surpassing all expectations.
                            Every aspect was handled with precision and excellence, making the entire experience truly exceptional.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Repeat the structure for other testimonials with appropriate changes -->
            <div class=\"carousel-item\">
                <!-- Second testimonial -->
                <div class=\"testimonial-block style-2 gray-bg\">
                    <div class=\"testimonial-thumb\">
                        <img src=\"assets2/images/team/test-thumb2.jpg\" alt=\"\" class=\"img-fluid\">
                    </div>

                    <div class=\"client-info\">
                        <h4 class=\"text-black\">Expert doctors!</h4>
                        <span class=\"text-muted\">Nedim Khalfaalh</span>
                        <p class=\"mb-4 text-black\">
                            Highly skilled medical professionals!
                        </p>
                    </div>
                    <i class=\"icofont-quote-right\"></i>
                </div>
            </div>

            <!-- Third testimonial -->
            <div class=\"carousel-item\">
                <div class=\"testimonial-block style-2 gray-bg\">
                    <div class=\"testimonial-thumb\">
                        <img src=\"assets2/images/team/test-thumb3.jpg\" alt=\"\" class=\"img-fluid\">
                    </div>

                    <div class=\"client-info\">
                        <h4 class=\"text-black\">Good Support!</h4>
                        <span class=\"text-muted\">Ela Ben Dkhil</span>
                        <p class=\"mb-4 text-black\">
                            The customer support provided was exceptional, demonstrating efficiency and responsiveness.
                            It significantly enhanced the overall experience, ensuring any queries or concerns were promptly addressed with a high level of professionalism and care.
                        </p>
                    </div>
                    <i class=\"icofont-quote-right\"></i>
                </div>
            </div>

            <!-- Fourth testimonial -->
            <div class=\"carousel-item\">
                <div class=\"testimonial-block style-2 gray-bg\">
                    <div class=\"testimonial-thumb\">
                        <img src=\"assets2/images/team/test-thumb4.jpg\" alt=\"\" class=\"img-fluid\">
                    </div>

                    <div class=\"client-info\">
                        <h4 class=\"text-black\">Nice Environment!</h4>
                        <span class=\"text-muted\">Manar Nasfi</span>
                        <p class=\"mt-4 text-black\">
                            The environment was not only aesthetically pleasing but also created a warm and inviting atmosphere.
                            It contributed significantly to a positive and comfortable experience, making the overall visit enjoyable and stress-free.
                        </p>
                    </div>
                    <i class=\"icofont-quote-right\"></i>
                </div>
            </div>
        </div>

        <!-- Add navigation arrows -->
        <a class=\"carousel-control-prev\" href=\"#testimonialCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#testimonialCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>

</section>
<section class=\"section clients\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Partners who support us</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t
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
        return "user/pagehome.html.twig";
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
        return array (  187 => 121,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig'%}

{%block body %}

<style>
\t.banner .block h1 {
    font-size: 60px;
    line-height: 1.2;
    letter-spacing: -1.2px;
    text-transform: capitalize;
    color: #fff;
}

.feature-item .feature-icon i {
    font-size: 50px;
    color: #06785d;
}
.btn-main {
    background: #06785d;
    color: #fff;
    border-color: #06785d;

\t.btn-main-2:hover {
    background: #06785d;
    color: #fff;
    border-color: #06785d;
}
}
.btn-main-2:hover {
    background: #06785d;
    color: #fff;
    border-color: #06785d;
}
.cta:before {
    position: absolute;
    content: \"\";
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    background: #06785d;
}
.title-color {
    color: #06785d;
}

.section-title h2 {
    color: #06785d;
}
</style>

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
\t\t\t\t\t
\t\t\t\t\t<div class=\"btn-container \">
\t\t\t\t\t\t<a href=\"/add\" target=\"_blank\" class=\"btn btn-main-2 btn-icon btn-round-full\">Make appoinment <i class=\"icofont-simple-right ml-2  \"></i></a>
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
\t\t\t\t\t\t<p class=\"mb-4\" style=\"color: #c1c35c;\">Get your appointment now</p>
\t\t\t\t\t\t<a href=\"/add\" class=\"btn btn-main btn-round-full\">Make a appoinment</a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-ui-clock\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Timing schedule</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">Working Hours</h4>
\t\t\t\t\t\t<ul class=\"w-hours list-unstyled\" style=\"color: #c1c35c;\">
    <li class=\"d-flex justify-content-between\">Sun - Wed : <span>8:00 - 17:00</span></li>
    <li class=\"d-flex justify-content-between\">Thu - Fri : <span>9:00 - 17:00</span></li>
    <li class=\"d-flex justify-content-between\">Sat - Sun : <span>10:00 - 17:00</span></li>
</ul>

\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-support\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Emegency Cases</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">+216 25 555 555</h4>
\t\t\t\t\t\t<p class=\"mb-4\" style=\"color: #c1c35c;\">In emergencies, you can always call us!</p>

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
\t\t\t\t\t<img src=\"{{asset ('../assets2/images/about/img-6.jpg') }}\" alt=\"\" class=\"img-fluid\">
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
\t\t\t\t\t<p class=\"mt-4 mb-5\">We provide best leading medicle services </p>

\t\t\t\t\t<a href=\"/tableservice/front\" class=\"btn btn-main-2 btn-round-full btn-icon\">Services<i class=\"icofont-simple-right ml-3\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"cta-section\">
<script>
document.addEventListener('DOMContentLoaded', function () {
    const counterStats = document.querySelectorAll('.counter-stat');

    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5,
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    counterStats.forEach(stat => {
        observer.observe(stat);
    });
});
</script>

    <div class=\"container\">
        <div class=\"cta position-relative\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"counter-stat text-center\">
                        <i class=\"icofont-doctor\"></i>
                        <span class=\"h3\">58</span>k
                        <p>Happy People</p>
                    </div>
                </div>

                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"counter-stat text-center\">
                        <i class=\"icofont-doctor\"></i>
                        <span class=\"h3\">700</span>k
                        <p>Surgeries Completed</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"counter-stat text-center\">
                        <i class=\"icofont-doctor\"></i>
                        <span class=\"h3\">40</span>k
                        <p>Expert Doctors</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"counter-stat text-center\">
                        <i class=\"icofont-doctor\"></i>
                        <span class=\"h3\">20</span>k
                        <p>Worldwide Branches</p>
                    </div>
                </div>
                <!-- Repeat the same structure for other counter-stats -->
            </div>
        </div>
    </div>
</section>

<section class=\"section service gray-bg\">
\t<div class=\"container\">
\t\t

<h2 class=\"title-color\" style=\"text-align: center; margin-top: 0;\">Specialities </h2>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-laboratory text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Laboratory services</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Lab services: Precise analyses for medical diagnoses and research insights.</p>
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
\t\t\t\t\t\t<p class=\"mb-4\">Heart disease: Affects heart, managed with lifestyle changes, meds, and, if needed, surgery. Early detection crucial.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-brain-alt text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Neurology Sargery</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Neurology Surgery: Specialized procedures for treating neurological conditions.</p>
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
\t\t\t\t\t\t<p class=\"mb-4\">Dental Care: Oral health maintenance and treatments for a healthy smile.</p>
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
\t\t\t\t\t\t<p class=\"mb-4\">Body Surgery: Cosmetic procedures for enhancing physical appearance.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t\t
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-dna-alt-1 text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Gynecology</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">
Gynecology: Women's reproductive health care and wellness services.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<section class=\"section testimonial-2 gray-bg\">
    <div class=\"section-title text-center\">
\t\t\t\t\t<h2>Reviews</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t

\t<div class=\"container mt-4\"> <!-- Adjust the margin top value as needed -->
        <div id=\"testimonialCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <div class=\"testimonial-block style-2 gray-bg\">
                    <i class=\"icofont-quote-right\"></i>

                    <div class=\"testimonial-thumb\">
                        <img src=\"assets2/images/team/test-thumb1.jpg\" alt=\"\" class=\"img-fluid\">
                    </div>

                    <div class=\"client-info \">
                        <h4 class=\"text-black\">Amazing service!</h4>
                        <span class=\"text-muted\">Mehdi Fgaier</span>
                        <p class=\"mb-4 text-black\">
                            The service provided was absolutely outstanding, surpassing all expectations.
                            Every aspect was handled with precision and excellence, making the entire experience truly exceptional.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Repeat the structure for other testimonials with appropriate changes -->
            <div class=\"carousel-item\">
                <!-- Second testimonial -->
                <div class=\"testimonial-block style-2 gray-bg\">
                    <div class=\"testimonial-thumb\">
                        <img src=\"assets2/images/team/test-thumb2.jpg\" alt=\"\" class=\"img-fluid\">
                    </div>

                    <div class=\"client-info\">
                        <h4 class=\"text-black\">Expert doctors!</h4>
                        <span class=\"text-muted\">Nedim Khalfaalh</span>
                        <p class=\"mb-4 text-black\">
                            Highly skilled medical professionals!
                        </p>
                    </div>
                    <i class=\"icofont-quote-right\"></i>
                </div>
            </div>

            <!-- Third testimonial -->
            <div class=\"carousel-item\">
                <div class=\"testimonial-block style-2 gray-bg\">
                    <div class=\"testimonial-thumb\">
                        <img src=\"assets2/images/team/test-thumb3.jpg\" alt=\"\" class=\"img-fluid\">
                    </div>

                    <div class=\"client-info\">
                        <h4 class=\"text-black\">Good Support!</h4>
                        <span class=\"text-muted\">Ela Ben Dkhil</span>
                        <p class=\"mb-4 text-black\">
                            The customer support provided was exceptional, demonstrating efficiency and responsiveness.
                            It significantly enhanced the overall experience, ensuring any queries or concerns were promptly addressed with a high level of professionalism and care.
                        </p>
                    </div>
                    <i class=\"icofont-quote-right\"></i>
                </div>
            </div>

            <!-- Fourth testimonial -->
            <div class=\"carousel-item\">
                <div class=\"testimonial-block style-2 gray-bg\">
                    <div class=\"testimonial-thumb\">
                        <img src=\"assets2/images/team/test-thumb4.jpg\" alt=\"\" class=\"img-fluid\">
                    </div>

                    <div class=\"client-info\">
                        <h4 class=\"text-black\">Nice Environment!</h4>
                        <span class=\"text-muted\">Manar Nasfi</span>
                        <p class=\"mt-4 text-black\">
                            The environment was not only aesthetically pleasing but also created a warm and inviting atmosphere.
                            It contributed significantly to a positive and comfortable experience, making the overall visit enjoyable and stress-free.
                        </p>
                    </div>
                    <i class=\"icofont-quote-right\"></i>
                </div>
            </div>
        </div>

        <!-- Add navigation arrows -->
        <a class=\"carousel-control-prev\" href=\"#testimonialCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#testimonialCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>

</section>
<section class=\"section clients\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Partners who support us</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t
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

{% endblock %}", "user/pagehome.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\pagehome.html.twig");
    }
}
