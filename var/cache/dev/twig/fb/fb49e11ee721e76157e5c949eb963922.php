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

/* post/index.html.twig */
class __TwigTemplate_2e9f8b0802c23b30f36583dd8d29ba57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "post/index.html.twig", 1);
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
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

<style>
\t.overlay:before {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    opacity: 0.9;
    background: #105f52;
}
.btn-main {
    background: #105f52;
    color: #fff;
    border-color: #105F53;
}
</style>

<section class=\"page-title bg-1\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"block text-center\">
            <span class=\"text-white\">Our blog</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Blog articles</h1>
  
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

  <section class=\"section blog-wrap\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-lg-8\">
                  <div class=\"row\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 51
            echo "\t<div class=\"col-lg-12 col-md-12 mb-5\">
\t\t<div class=\"blog-item\">
\t\t\t<div class=\"blog-thumb\">
\t\t\t\t<img src=\"images/blog/blog-1.jpg\" alt=\"\" class=\"img-fluid \">
\t\t\t</div>

\t\t\t<div class=\"blog-item-content\">
\t\t\t\t<div class=\"blog-item-meta mb-3 mt-4\">
\t\t\t\t\t<span class=\"text-color-2 text-capitalize mr-3\"><i class=\"icofont-book-mark mr-2\"></i>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "TypePost", [], "any", false, false, false, 59), "html", null, true);
            echo "</span>
\t\t\t\t\t<span class=\"text-black text-capitalize mr-3\"><i class=\"icofont-calendar mr-1\"></i>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "MakedatePost", [], "any", false, false, false, 60), "format", ["Y-m-d"], "method", false, false, false, 60), "html", null, true);
            echo "</span>
\t\t\t\t\t<span class=\"text-muted text-capitalize mr-3\"><i class=\"icofont-comment mr-2\"></i>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "NbCommentsPost", [], "any", false, false, false, 61), "html", null, true);
            echo " Comments</span>
\t\t\t\t\t<span class=\"likes-icon\" style=\"margin-left: 5px;color: rgb(99, 145, 111);\"><i class=\"fas fa-thumbs-up\"></i></span>
\t\t\t\t\t<span class=\"likes-count\" style=\"font-weight: bold; color: #007bff;\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "LikesPost", [], "any", false, false, false, 63), "html", null, true);
            echo "</span> Likes
\t\t\t\t\t<span style=\"margin-left: 5px;color: rgb(150, 105, 111);\"><i class=\"fas fa-thumbs-down\"></i></span>
\t\t\t\t\t<span style=\"font-weight: bold;color: #dc3545;\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "DislikesPost", [], "any", false, false, false, 65), "html", null, true);
            echo "</span> DisLikes
\t\t\t\t</div> 

\t\t\t\t<h2 class=\"mt-3 mb-3\"><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postsingle", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "TitlePost", [], "any", false, false, false, 68), "html", null, true);
            echo "</a></h2>

\t\t\t\t<p class=\"mb-4\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "ContenuPost", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>

\t\t\t\t<a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postsingle", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-main btn-icon btn-round-full\" >Read More <i class=\"icofont-simple-right ml-2  \"></i></a>
\t\t\t</div>
\t\t</div>
\t</div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "</div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"sidebar-wrap pl-lg-4 mt-5 mt-lg-0\">
\t\t\t\t\t<div class=\"sidebar-widget search mb-3\">
\t\t\t\t\t\t<h5>Advanced Search</h5>
\t\t\t\t\t\t<form id=\"advanced-search-form\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"keyword\" placeholder=\"Keyword\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"date\" placeholder=\"Date\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"category\">
\t\t\t\t\t\t\t\t\t<option value=\"\">None</option>
\t\t\t\t\t\t\t\t\t<option value=\"Medicine\">Medicine</option>
\t\t\t\t\t\t\t\t\t<option value=\"Equipments\">Equipments</option>
\t\t\t\t\t\t\t\t\t<option value=\"Heart\">Heart</option>
\t\t\t\t\t\t\t\t\t<option value=\"Free counselling\">Free counselling</option>
\t\t\t\t\t\t\t\t\t<option value=\"Lab test\">Lab test</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Search</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t

\t<div class=\"sidebar-widget category mb-3\">
\t\t<h5 class=\"mb-4\">Categories</h5>

\t\t<ul class=\"list-unstyled\">
\t\t  <li class=\"align-items-center\">
\t\t    <a href=\"/postmed\">Medicine</a>
\t\t    <span>(";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["nummed"]) || array_key_exists("nummed", $context) ? $context["nummed"] : (function () { throw new RuntimeError('Variable "nummed" does not exist.', 113, $this->source); })()), "html", null, true);
        echo ")</span>
\t\t  </li>
\t\t  <li class=\"align-items-center\">
\t\t    <a href=\"/postEquipments\">Equipments</a>
\t\t    <span>(";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["numequip"]) || array_key_exists("numequip", $context) ? $context["numequip"] : (function () { throw new RuntimeError('Variable "numequip" does not exist.', 117, $this->source); })()), "html", null, true);
        echo ")</span>
\t\t  </li>
\t\t  <li class=\"align-items-center\">
\t\t    <a href=\"/postHeart\">Heart</a>
\t\t    <span>(";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["numhart"]) || array_key_exists("numhart", $context) ? $context["numhart"] : (function () { throw new RuntimeError('Variable "numhart" does not exist.', 121, $this->source); })()), "html", null, true);
        echo ")</span>
\t\t  </li>
\t\t  <li class=\"align-items-center\">
\t\t    <a href=\"/postFreecounselling\">Free counselling</a>
\t\t    <span>(";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["numcouns"]) || array_key_exists("numcouns", $context) ? $context["numcouns"] : (function () { throw new RuntimeError('Variable "numcouns" does not exist.', 125, $this->source); })()), "html", null, true);
        echo ")</span>
\t\t  </li>
\t\t  <li class=\"align-items-center\">
\t\t    <a href=\"/postlab\">Lab test</a>
\t\t    <span>(";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["numlab"]) || array_key_exists("numlab", $context) ? $context["numlab"] : (function () { throw new RuntimeError('Variable "numlab" does not exist.', 129, $this->source); })()), "html", null, true);
        echo ")</span>
\t\t  </li>
\t\t</ul>
\t</div>




</div>
            </div>   
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-lg-8\">
                <nav class=\"pagination py-2 d-inline-block\">
\t\t\t\t\t\t<div class=\"col-lg-8\" >
\t\t\t\t\t\t\t<nav class=\"pagination py-2 d-inline-block\">
\t\t\t\t\t\t\t\t<div class=\"nav-links\"style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t";
        // line 147
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 147, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 147) > 1)) {
            // line 148
            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"page-numbers\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post", ["page" => 1]);
            echo "\">First</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"page-numbers\" href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 149, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 149) - 1)]), "html", null, true);
            echo "\">Prev</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 151
            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"page-numbers disabled\">First</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"page-numbers disabled\">Prev </span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 154
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 155, $this->source); })()), "pageCount", [], "any", false, false, false, 155)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 156
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 156, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 156) == $context["page"])) {
                // line 157
                echo "\t\t\t\t\t\t\t\t\t\t\t<span aria-current=\"page\" class=\"page-numbers current\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 159
                echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-numbers\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post", ["page" => $context["page"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 161
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 163
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 163, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 163) < twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 163, $this->source); })()), "pageCount", [], "any", false, false, false, 163))) {
            // line 164
            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"page-numbers\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 164, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 164) + 1)]), "html", null, true);
            echo "\">Next</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"page-numbers\" href=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 165, $this->source); })()), "pageCount", [], "any", false, false, false, 165)]), "html", null, true);
            echo "\">Last</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 167
            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"page-numbers disabled\">Next</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"page-numbers disabled\">Last</span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 170
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t



                    
                </nav>
            </div>
        </div>
    </div>
</section>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('advanced-search-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Get form inputs
            var keyword = document.getElementById('keyword').value.trim().toLowerCase();
            var date = document.getElementById('date').value.trim(); // Get the date value
            var category = document.getElementById('category').value.trim().toLowerCase();
            
            // Perform search based on form inputs
            performSearch(keyword, date, category);
        });
        
        function performSearch(keyword, date, category) {
            // Loop through each item in the table
            var items = document.querySelectorAll('.blog-item');
            items.forEach(function(item) {
                var title = item.querySelector('h2').textContent.toLowerCase();
                var dateElement = item.querySelector('.icofont-calendar').nextSibling.textContent.trim(); // Get the date value from the HTML
                var categoryElement = item.querySelector('.icofont-book-mark').nextSibling.textContent.trim().toLowerCase(); // Get the category value from the HTML
                
                // Perform search filtering
                var matchesKeyword = title.includes(keyword);
                var matchesDate = dateElement.includes(date); // Check if the date matches
                var matchesCategory = categoryElement.includes(category);
                
                // Hide or show the item based on search results
                if (matchesKeyword && matchesDate && matchesCategory) {
                    item.style.display = ''; // Show the item
                } else {
                    item.style.display = 'none'; // Hide the item
                }
            });
        }
    });
</script>
  





";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "post/index.html.twig";
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
        return array (  332 => 170,  327 => 167,  322 => 165,  317 => 164,  315 => 163,  312 => 162,  306 => 161,  298 => 159,  292 => 157,  289 => 156,  285 => 155,  282 => 154,  277 => 151,  272 => 149,  267 => 148,  265 => 147,  244 => 129,  237 => 125,  230 => 121,  223 => 117,  216 => 113,  179 => 78,  167 => 72,  162 => 70,  155 => 68,  149 => 65,  144 => 63,  139 => 61,  135 => 60,  131 => 59,  121 => 51,  117 => 50,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block body %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

<style>
\t.overlay:before {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    opacity: 0.9;
    background: #105f52;
}
.btn-main {
    background: #105f52;
    color: #fff;
    border-color: #105F53;
}
</style>

<section class=\"page-title bg-1\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"block text-center\">
            <span class=\"text-white\">Our blog</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Blog articles</h1>
  
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

  <section class=\"section blog-wrap\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-lg-8\">
                  <div class=\"row\">
                    {% for i in pagination %}
\t<div class=\"col-lg-12 col-md-12 mb-5\">
\t\t<div class=\"blog-item\">
\t\t\t<div class=\"blog-thumb\">
\t\t\t\t<img src=\"images/blog/blog-1.jpg\" alt=\"\" class=\"img-fluid \">
\t\t\t</div>

\t\t\t<div class=\"blog-item-content\">
\t\t\t\t<div class=\"blog-item-meta mb-3 mt-4\">
\t\t\t\t\t<span class=\"text-color-2 text-capitalize mr-3\"><i class=\"icofont-book-mark mr-2\"></i>{{i.TypePost}}</span>
\t\t\t\t\t<span class=\"text-black text-capitalize mr-3\"><i class=\"icofont-calendar mr-1\"></i>{{i.MakedatePost.format('Y-m-d')}}</span>
\t\t\t\t\t<span class=\"text-muted text-capitalize mr-3\"><i class=\"icofont-comment mr-2\"></i>{{i.NbCommentsPost}} Comments</span>
\t\t\t\t\t<span class=\"likes-icon\" style=\"margin-left: 5px;color: rgb(99, 145, 111);\"><i class=\"fas fa-thumbs-up\"></i></span>
\t\t\t\t\t<span class=\"likes-count\" style=\"font-weight: bold; color: #007bff;\">{{i.LikesPost}}</span> Likes
\t\t\t\t\t<span style=\"margin-left: 5px;color: rgb(150, 105, 111);\"><i class=\"fas fa-thumbs-down\"></i></span>
\t\t\t\t\t<span style=\"font-weight: bold;color: #dc3545;\">{{i.DislikesPost}}</span> DisLikes
\t\t\t\t</div> 

\t\t\t\t<h2 class=\"mt-3 mb-3\"><a href=\"{{path('postsingle',{'id':i.id})}}\">{{i.TitlePost}}</a></h2>

\t\t\t\t<p class=\"mb-4\">{{i.ContenuPost}}</p>

\t\t\t\t<a href=\"{{path('postsingle',{'id':i.id})}}\" target=\"_blank\" class=\"btn btn-main btn-icon btn-round-full\" >Read More <i class=\"icofont-simple-right ml-2  \"></i></a>
\t\t\t</div>
\t\t</div>
\t</div>

    {% endfor %}
</div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"sidebar-wrap pl-lg-4 mt-5 mt-lg-0\">
\t\t\t\t\t<div class=\"sidebar-widget search mb-3\">
\t\t\t\t\t\t<h5>Advanced Search</h5>
\t\t\t\t\t\t<form id=\"advanced-search-form\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"keyword\" placeholder=\"Keyword\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"date\" placeholder=\"Date\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"category\">
\t\t\t\t\t\t\t\t\t<option value=\"\">None</option>
\t\t\t\t\t\t\t\t\t<option value=\"Medicine\">Medicine</option>
\t\t\t\t\t\t\t\t\t<option value=\"Equipments\">Equipments</option>
\t\t\t\t\t\t\t\t\t<option value=\"Heart\">Heart</option>
\t\t\t\t\t\t\t\t\t<option value=\"Free counselling\">Free counselling</option>
\t\t\t\t\t\t\t\t\t<option value=\"Lab test\">Lab test</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Search</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t

\t<div class=\"sidebar-widget category mb-3\">
\t\t<h5 class=\"mb-4\">Categories</h5>

\t\t<ul class=\"list-unstyled\">
\t\t  <li class=\"align-items-center\">
\t\t    <a href=\"/postmed\">Medicine</a>
\t\t    <span>({{nummed}})</span>
\t\t  </li>
\t\t  <li class=\"align-items-center\">
\t\t    <a href=\"/postEquipments\">Equipments</a>
\t\t    <span>({{numequip}})</span>
\t\t  </li>
\t\t  <li class=\"align-items-center\">
\t\t    <a href=\"/postHeart\">Heart</a>
\t\t    <span>({{numhart}})</span>
\t\t  </li>
\t\t  <li class=\"align-items-center\">
\t\t    <a href=\"/postFreecounselling\">Free counselling</a>
\t\t    <span>({{numcouns}})</span>
\t\t  </li>
\t\t  <li class=\"align-items-center\">
\t\t    <a href=\"/postlab\">Lab test</a>
\t\t    <span>({{numlab}})</span>
\t\t  </li>
\t\t</ul>
\t</div>




</div>
            </div>   
        </div>

        <div class=\"row mt-5\">
            <div class=\"col-lg-8\">
                <nav class=\"pagination py-2 d-inline-block\">
\t\t\t\t\t\t<div class=\"col-lg-8\" >
\t\t\t\t\t\t\t<nav class=\"pagination py-2 d-inline-block\">
\t\t\t\t\t\t\t\t<div class=\"nav-links\"style=\"display: flex;\">
\t\t\t\t\t\t\t\t\t{% if pagination.currentPageNumber > 1 %}
\t\t\t\t\t\t\t\t\t\t<a class=\"page-numbers\" href=\"{{ path('app_post', {'page': 1}) }}\">First</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"page-numbers\" href=\"{{ path('app_post', {'page': pagination.currentPageNumber - 1}) }}\">Prev</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"page-numbers disabled\">First</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"page-numbers disabled\">Prev </span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% for page in range(1, pagination.pageCount) %}
\t\t\t\t\t\t\t\t\t\t{% if pagination.currentPageNumber == page %}
\t\t\t\t\t\t\t\t\t\t\t<span aria-current=\"page\" class=\"page-numbers current\">{{ page }}</span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-numbers\" href=\"{{ path('app_post', {'page': page}) }}\">{{ page }}</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% if pagination.currentPageNumber < pagination.pageCount %}
\t\t\t\t\t\t\t\t\t\t<a class=\"page-numbers\" href=\"{{ path('app_post', {'page': pagination.currentPageNumber + 1}) }}\">Next</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"page-numbers\" href=\"{{ path('app_post', {'page': pagination.pageCount}) }}\">Last</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"page-numbers disabled\">Next</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"page-numbers disabled\">Last</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t



                    
                </nav>
            </div>
        </div>
    </div>
</section>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('advanced-search-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Get form inputs
            var keyword = document.getElementById('keyword').value.trim().toLowerCase();
            var date = document.getElementById('date').value.trim(); // Get the date value
            var category = document.getElementById('category').value.trim().toLowerCase();
            
            // Perform search based on form inputs
            performSearch(keyword, date, category);
        });
        
        function performSearch(keyword, date, category) {
            // Loop through each item in the table
            var items = document.querySelectorAll('.blog-item');
            items.forEach(function(item) {
                var title = item.querySelector('h2').textContent.toLowerCase();
                var dateElement = item.querySelector('.icofont-calendar').nextSibling.textContent.trim(); // Get the date value from the HTML
                var categoryElement = item.querySelector('.icofont-book-mark').nextSibling.textContent.trim().toLowerCase(); // Get the category value from the HTML
                
                // Perform search filtering
                var matchesKeyword = title.includes(keyword);
                var matchesDate = dateElement.includes(date); // Check if the date matches
                var matchesCategory = categoryElement.includes(category);
                
                // Hide or show the item based on search results
                if (matchesKeyword && matchesDate && matchesCategory) {
                    item.style.display = ''; // Show the item
                } else {
                    item.style.display = 'none'; // Hide the item
                }
            });
        }
    });
</script>
  





{% endblock %}", "post/index.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\post\\index.html.twig");
    }
}
