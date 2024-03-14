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

/* post/showsingle.html.twig */
class __TwigTemplate_6a8addab47105a795b038fa72759f31f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/showsingle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/showsingle.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "post/showsingle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">


<style>

\t
    /* Read mode styles */
    .read-mode #content {
        font-size: 45px;
        line-height: 1.6;
        background-color: #f9f9f9;
        padding: 20px;
    }

    .read-mode #toggle-read-mode {
        display: none; /* Hide toggle button in read mode */
    }

    /* Toggle button styles */
    .toggle-container {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: \"\";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 50%;
    }

    input:checked + .slider {
        background-color: #007bff;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #007bff;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
\t\t
    }

\t/* Adjust column widths */
    .col-lg-8 {
        width: 70%; /* Adjust as needed */
        margin: auto; /* Center the column */
    }

    .col-lg-4 {
        width: 30%; /* Adjust as needed */
        margin: auto; /* Center the column */
    }
</style>


<section class=\"page-title bg-1\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"block text-center\">
            <span class=\"text-white\">News details</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Blog Single</h1>
  
            <!-- <ul class=\"list-inline breadcumb-nav\">
              <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
              <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
              <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">News details</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=\"section blog-wrap\" id=\"content\">
\t  <div style=\"display: flex; justify-content: right; align-items: center;padding-right: 1%;\">
\t\t<h1 style=\"text-align: center; margin-right: 20px;\">
\t\t\t<i class=\"fas fa-book-reader\" style=\"font-size: 36px; color: #007bff; margin-right: 10px;\"></i>
\t\t\tRead Mode
\t\t</h1>
\t\t<div class=\"toggle-container\">
\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" id=\"toggle-read-mode\">
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t</div>
\t</div>
\t  <div class=\"container\" id=\"content\" style=\"margin-left: -7%;margin-top: -7%;\">
        <!-- <div class=\"row\"> -->
\t\t\t<div class=\"col-lg-8\">
                <div class=\"row\">
\t<div class=\"col-lg-12 mb-5\">
\t\t<div class=\"single-blog-item\" style=\"text-align: left; width: 170%;\">
\t\t\t<img src=\"images/blog/blog-1.jpg\" alt=\"\" class=\"img-fluid\">

\t\t\t<div class=\"blog-item-content\" id=\"content\">
\t\t\t\t<div class=\"blog-item-meta mb-3\">
\t\t\t\t\t<span class=\"text-color-2 text-capitalize mr-3\"><i class=\"icofont-book-mark mr-2\"></i>";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 138, $this->source); })()), "TypePost", [], "any", false, false, false, 138), "html", null, true);
        echo "</span>
\t\t\t\t\t<span class=\"text-muted text-capitalize mr-3\"><i class=\"icofont-comment mr-2\"></i>";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 139, $this->source); })()), "NbCommentsPost", [], "any", false, false, false, 139), "html", null, true);
        echo " Comments</span>
\t\t\t\t\t<span class=\"text-black text-capitalize mr-3\"><i class=\"icofont-calendar mr-2\"></i> ";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 140, $this->source); })()), "MakedatePost", [], "any", false, false, false, 140), "format", ["Y-m-d"], "method", false, false, false, 140), "html", null, true);
        echo "</span>
\t\t\t\t\t
\t\t\t\t</div> 

\t\t\t\t<h2 class=\"mb-4 text-md\"><a ></a>";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 144, $this->source); })()), "TitlePost", [], "any", false, false, false, 144), "html", null, true);
        echo "</h2>

\t\t\t\t<p class=\"lead mb-4\" id=\"content\">";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 146, $this->source); })()), "ContenuPost", [], "any", false, false, false, 146), "html", null, true);
        echo "</p>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"mt-5 clearfix\">
\t\t\t\t    <!-- <ul class=\"float-left list-inline tag-option\"> 
\t\t\t\t    \t<li class=\"list-inline-item\"><a href=\"#\">Advancher</a></li>
\t\t\t\t    \t<li class=\"list-inline-item\"><a href=\"#\">Landscape</a></li>
\t\t\t\t    \t<li class=\"list-inline-item\"><a href=\"#\">Travel</a></li>
\t\t\t\t   \t</ul>         -->

\t\t\t\t    <ul class=\"float-right list-inline\" id=\"content\">
\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t";
        // line 160
        echo "\t\t\t\t\t\t\t<form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addlikepost", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 160, $this->source); })()), "id", [], "any", false, false, false, 160)]), "html", null, true);
        echo "\" method=\"post\" style=\"padding: 0.5rem;\">
\t\t\t\t\t\t\t\t<a href=\"like.png\"></a><button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-thumbs-up\"></i> Like</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<form action=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adddislikepost", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 163, $this->source); })()), "id", [], "any", false, false, false, 163)]), "html", null, true);
        echo "\" method=\"post\"style=\"padding: 0.5rem;\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-thumbs-down\"></i> DisLike</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t        <li class=\"list-inline-item\"> Share: </li>
\t\t\t\t        <li class=\"list-inline-item\"><a href=\"https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/postsingle/";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 171, $this->source); })()), "id", [], "any", false, false, false, 171), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer\" target=\"_blank\"><i class=\"icofont-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t        <li class=\"list-inline-item\"><a href=\"https://twitter.com/intent/tweet?url=http%3A%2F%2F127.0.0.1:8000%2Fpostsingle%2F";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 172, $this->source); })()), "id", [], "any", false, false, false, 172), "html", null, true);
        echo "&text=Check%20out%20this%20awesome%20post\" target=\"_blank\" rel=\"noopener noreferrer\" target=\"_blank\"><i class=\"icofont-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t        <li class=\"list-inline-item\"><a href=\"https://pinterest.com/pin/create/button/?url=http%3A%2F%2F127.0.0.1%3A8000%2Fpostsingle%2F28&media=image_url&description=description_text\" target=\"_blank\" rel=\"noopener noreferrer\" target=\"_blank\" rel=\"noopener noreferrer\" target=\"_blank\"><i class=\"icofont-pinterest\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t        <li class=\"list-inline-item\"><a href=\"https://www.linkedin.com/sharing/share-offsite/?url=http://127.0.0.1:8000/postsingle/";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 174, $this->source); })()), "id", [], "any", false, false, false, 174), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer\" target=\"_blank\"><i class=\"icofont-linkedin\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t    </ul>
\t\t\t    </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"post-likes\" style=\"font-size: 20px;color: #555; margin-right: 20px;display: inline-block;\" id=\"content\">
\t\t<span class=\"likes-icon\" style=\"margin-left: 5px;color: rgb(99, 145, 111);\"><i class=\"fas fa-thumbs-up\"></i></span>
\t\t<span class=\"likes-count\" style=\"font-weight: bold; color: #007bff;\">";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 182, $this->source); })()), "LikesPost", [], "any", false, false, false, 182), "html", null, true);
        echo "</span> Likes
\t\t<span style=\"margin-left: 5px;color: rgb(150, 105, 111);\"><i class=\"fas fa-thumbs-down\"></i></span>
\t\t<span style=\"font-weight: bold;color: #dc3545;\">";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 184, $this->source); })()), "DislikesPost", [], "any", false, false, false, 184), "html", null, true);
        echo "</span> DisLikes
\t</div>
\t<div class=\"col-lg-12\" id=\"content\">
\t\t<div class=\"comment-area mt-4 mb-5\" id=\"content\">
\t\t\t<h4 class=\"mb-4\">";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 188, $this->source); })()), "NbCommentsPost", [], "any", false, false, false, 188), "html", null, true);
        echo " Comments on This post </h4>
\t\t\t<input style=\"width: 200px;padding: 10px;margin: 5px;border: 1px solid #ccc;border-radius: 5px;box-sizing: border-box;font-size: 16px;\" type=\"text\" id=\"searchName\" placeholder=\"Search by Name\">
\t\t\t<input style=\"width: 200px;padding: 10px;margin: 5px;border: 1px solid #ccc;border-radius: 5px;box-sizing: border-box;font-size: 16px;\" type=\"text\" id=\"searchContent\" placeholder=\"Search by Content\">
\t\t\t<input style=\"width: 200px; padding: 10px; margin: 5px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;font-size: 16px;\" type=\"date\" id=\"searchDate\" placeholder=\"Search by Date\">
\t\t\t<ul class=\"comment-tree list-unstyled\">
\t\t\t\t<li class=\"mb-5\">
\t\t\t\t\t<div class=\"comment-area-box\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 196, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 197
            echo "\t\t\t\t\t\t<!-- <div class=\"comment-thumb float-left\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"images/blog/testimonial1.jpg\" class=\"img-fluid\">
\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t<div class=\"contenucom\" id=\"content\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"comment-info\" style=\"margin-bottom: -0.5rem;\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-1\"></h5>
\t\t\t\t\t\t\t<span class=\"nam\" id=\"content\">";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "NameComment", [], "any", false, false, false, 204), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"date-comm\"id=\"content\">| ";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "DatecreationComment", [], "any", false, false, false, 205), "format", ["Y-m-d"], "method", false, false, false, 205), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <div class=\"comment-meta mt-2\">
\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icofont-reply mr-2 text-muted\"></i>Reply</a>
\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"comment-content mt-3\" style=\"margin-bottom: -1rem;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"cont\"id=\"content\">\t";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "ContenuComment", [], "any", false, false, false, 213), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div style=\"display: flex; margin-bottom: 1rem;\" >
\t\t\t\t\t\t\t";
            // line 222
            echo "\t\t\t\t\t\t\t<form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addlikecomment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 222)]), "html", null, true);
            echo "\" method=\"post\" style=\"padding: 0.5rem;\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 223
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addlikecomment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 223)]), "html", null, true);
            echo "\"  style=\"text-decoration: none;font-size: 1.5rem;color: lightgreen;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-up\"></i> <!-- Font Awesome thumbs-up icon -->
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0.5rem; color: #555;\">";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "LikesComment", [], "any", false, false, false, 225), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\ta:hover i.fas.fa-thumbs-up{
\t\t\t\t\t\t\t\t\tcolor:green;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<form action=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adddislikecomment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 234)]), "html", null, true);
            echo "\" method=\"post\" style=\"padding: 0.5rem;\">
\t\t\t\t\t\t\t\t<a   href=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adddislikecomment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 235)]), "html", null, true);
            echo "\"  style=\"text-decoration: none;font-size: 1.5rem;color:lightcoral;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-down\"></i> <!-- Font Awesome thumbs-down icon -->
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0.5rem;color: #555;\">";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "DislikesComment", [], "any", false, false, false, 237), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\ta:hover i.fas.fa-thumbs-down {
\t\t\t\t\t\t\t\t\t\t\tcolor:red;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- <li>
\t\t\t\t\t<div class=\"comment-area-box\">
\t\t\t\t\t\t<div class=\"comment-thumb float-left\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"images/blog/testimonial2.jpg\" class=\"img-fluid\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"comment-info\">
\t\t\t\t\t\t\t<h5 class=\"mb-1\">Philip W</h5>
\t\t\t\t\t\t\t<span>United Kingdom</span>
\t\t\t\t\t\t\t<span class=\"date-comm\">| Posted June 7, 2019</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"comment-meta mt-2\">
\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icofont-reply mr-2 text-muted\"></i>Reply </a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"comment-content mt-3\">
\t\t\t\t\t\t\t<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li> -->
\t\t\t</ul>
\t\t</div>
\t</div>



\t<div class=\"col-lg-12\">
\t\t<!-- Comment form -->
\t\t<div class=\"form-container\"id=\"content\">
\t\t\t<!-- Form start -->
\t\t\t
\t\t\t
\t\t\t";
        // line 287
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 287, $this->source); })()), 'form_start', ["attr" => ["class" => "comment-form", "id" => "comment-form"]]);
        echo "
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<!-- Form fields -->
\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 294, $this->source); })()), "name_comment", [], "any", false, false, false, 294), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Your Name"]]);
        echo "
\t\t\t\t\t\t";
        // line 295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 295, $this->source); })()), "name_comment", [], "any", false, false, false, 295), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 300, $this->source); })()), "mail_comment", [], "any", false, false, false, 300), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Your Email"]]);
        echo "
\t\t\t\t\t";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 301, $this->source); })()), "mail_comment", [], "any", false, false, false, 301), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t

\t\t\t</div>
\t\t\t\t\t";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 306, $this->source); })()), "contenu_comment", [], "any", false, false, false, 306), 'widget', ["attr" => ["class" => "form-control mb-4 comment-textarea", "placeholder" => "Comment", "rows" => "12"]]);
        echo "
\t\t\t\t\t";
        // line 307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 307, $this->source); })()), "contenu_comment", [], "any", false, false, false, 307), 'errors', ["attr" => ["class" => "form-danger"]]);
        echo "
\t\t\t\t
\t\t\t
\t\t\t<!-- Hidden fields -->
\t\t\t<div style=\"display: none;\">
\t\t\t\t";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 312, $this->source); })()), "likes_comment", [], "any", false, false, false, 312), 'widget');
        echo "
\t\t\t\t";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 313, $this->source); })()), "dislikes_comment", [], "any", false, false, false, 313), 'widget');
        echo "
\t\t\t\t";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 314, $this->source); })()), "datecreation_comment", [], "any", false, false, false, 314), 'widget');
        echo "
\t\t\t\t";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 315, $this->source); })()), "id_post", [], "any", false, false, false, 315), 'widget');
        echo "
\t\t\t\t";
        // line 316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 316, $this->source); })()), "id_comment", [], "any", false, false, false, 316), 'widget');
        echo "
\t\t\t</div>
\t\t\t";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 318, $this->source); })()), "captcha", [], "any", false, false, false, 318), 'widget');
        echo "
\t\t\t";
        // line 319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 319, $this->source); })()), "captcha", [], "any", false, false, false, 319), 'errors');
        echo "
\t\t\t<!-- Submit button -->
\t\t\t<!-- <button type=\"submit\" class=\"btn btn-primary\">Submit</button> -->
\t\t\t<!-- Form end -->
\t\t\t";
        // line 323
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 323, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>
\t
\t
\t<!--  -->


</div>
            </div>
              
        <!-- </div> -->
    </div>
\t
</section>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        // List of bad words to check for
        var badWords = [\"bad\", \"badword\"];

        // Event listener for form submission
        document.querySelector('.comment-form').addEventListener('submit', function(event) {
            // Prevent the form from submitting
            event.preventDefault();

            // Get the value of the comment input field
            var commentField = document.querySelector('.comment-textarea').value.toLowerCase();

            // Check if the comment includes a bad word
            for (var i = 0; i < badWords.length; i++) {
                if (commentField.includes(badWords[i].toLowerCase())) {
                    // Show an alert message if a bad word is found
                    alert('Please remove inappropriate language from your comment.');
                    return;
                }
            }

            // If no bad words are found, submit the form
            event.target.submit();
        });
    });
</script>

<script>
    // JavaScript to toggle read mode
    document.addEventListener(\"DOMContentLoaded\", function() {
        var slider = document.getElementById(\"toggle-read-mode\");
        var content = document.getElementById(\"content\");

        slider.addEventListener(\"change\", function() {
            if (this.checked) {
                content.classList.add(\"read-mode\");
            } else {
                content.classList.remove(\"read-mode\");
            }
        });
    });
</script>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function () {
        // Function to perform the search based on the specified column
        function searchColumn(columnIndex, value) {
            \$(\".contenucom\").filter(function () {
                // Get the text content of the specified column
                var cellText = \$(this).find(\".nam, .date-comm, .cont\").eq(columnIndex).text().toLowerCase();
                // Check if the text content contains the search value
                var found = cellText.indexOf(value) > -1;
                \$(this).toggle(found);
            });
        }

        // Event handlers for each input element
        \$(\"#searchName\").on(\"keyup\", function () {
            searchColumn(0, \$(this).val().toLowerCase());
        });

        \$(\"#searchDate\").on(\"keyup\", function () {
            searchColumn(1, \$(this).val().toLowerCase());
        });

        \$(\"#searchContent\").on(\"keyup\", function () {
            searchColumn(2, \$(this).val().toLowerCase());
        });
    });
</script>
\t
\t

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "post/showsingle.html.twig";
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
        return array (  505 => 323,  498 => 319,  494 => 318,  489 => 316,  485 => 315,  481 => 314,  477 => 313,  473 => 312,  465 => 307,  461 => 306,  453 => 301,  449 => 300,  441 => 295,  437 => 294,  427 => 287,  389 => 251,  369 => 237,  364 => 235,  360 => 234,  348 => 225,  343 => 223,  338 => 222,  327 => 213,  316 => 205,  312 => 204,  303 => 197,  299 => 196,  288 => 188,  281 => 184,  276 => 182,  265 => 174,  260 => 172,  256 => 171,  245 => 163,  238 => 160,  222 => 146,  217 => 144,  210 => 140,  206 => 139,  202 => 138,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}



{% block body %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">


<style>

\t
    /* Read mode styles */
    .read-mode #content {
        font-size: 45px;
        line-height: 1.6;
        background-color: #f9f9f9;
        padding: 20px;
    }

    .read-mode #toggle-read-mode {
        display: none; /* Hide toggle button in read mode */
    }

    /* Toggle button styles */
    .toggle-container {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: \"\";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 50%;
    }

    input:checked + .slider {
        background-color: #007bff;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #007bff;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
\t\t
    }

\t/* Adjust column widths */
    .col-lg-8 {
        width: 70%; /* Adjust as needed */
        margin: auto; /* Center the column */
    }

    .col-lg-4 {
        width: 30%; /* Adjust as needed */
        margin: auto; /* Center the column */
    }
</style>


<section class=\"page-title bg-1\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"block text-center\">
            <span class=\"text-white\">News details</span>
            <h1 class=\"text-capitalize mb-5 text-lg\">Blog Single</h1>
  
            <!-- <ul class=\"list-inline breadcumb-nav\">
              <li class=\"list-inline-item\"><a href=\"index.html\" class=\"text-white\">Home</a></li>
              <li class=\"list-inline-item\"><span class=\"text-white\">/</span></li>
              <li class=\"list-inline-item\"><a href=\"#\" class=\"text-white-50\">News details</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=\"section blog-wrap\" id=\"content\">
\t  <div style=\"display: flex; justify-content: right; align-items: center;padding-right: 1%;\">
\t\t<h1 style=\"text-align: center; margin-right: 20px;\">
\t\t\t<i class=\"fas fa-book-reader\" style=\"font-size: 36px; color: #007bff; margin-right: 10px;\"></i>
\t\t\tRead Mode
\t\t</h1>
\t\t<div class=\"toggle-container\">
\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" id=\"toggle-read-mode\">
\t\t\t\t<span class=\"slider round\"></span>
\t\t\t</label>
\t\t</div>
\t</div>
\t  <div class=\"container\" id=\"content\" style=\"margin-left: -7%;margin-top: -7%;\">
        <!-- <div class=\"row\"> -->
\t\t\t<div class=\"col-lg-8\">
                <div class=\"row\">
\t<div class=\"col-lg-12 mb-5\">
\t\t<div class=\"single-blog-item\" style=\"text-align: left; width: 170%;\">
\t\t\t<img src=\"images/blog/blog-1.jpg\" alt=\"\" class=\"img-fluid\">

\t\t\t<div class=\"blog-item-content\" id=\"content\">
\t\t\t\t<div class=\"blog-item-meta mb-3\">
\t\t\t\t\t<span class=\"text-color-2 text-capitalize mr-3\"><i class=\"icofont-book-mark mr-2\"></i>{{post.TypePost}}</span>
\t\t\t\t\t<span class=\"text-muted text-capitalize mr-3\"><i class=\"icofont-comment mr-2\"></i>{{post.NbCommentsPost}} Comments</span>
\t\t\t\t\t<span class=\"text-black text-capitalize mr-3\"><i class=\"icofont-calendar mr-2\"></i> {{post.MakedatePost.format('Y-m-d')}}</span>
\t\t\t\t\t
\t\t\t\t</div> 

\t\t\t\t<h2 class=\"mb-4 text-md\"><a ></a>{{post.TitlePost}}</h2>

\t\t\t\t<p class=\"lead mb-4\" id=\"content\">{{post.ContenuPost}}</p>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"mt-5 clearfix\">
\t\t\t\t    <!-- <ul class=\"float-left list-inline tag-option\"> 
\t\t\t\t    \t<li class=\"list-inline-item\"><a href=\"#\">Advancher</a></li>
\t\t\t\t    \t<li class=\"list-inline-item\"><a href=\"#\">Landscape</a></li>
\t\t\t\t    \t<li class=\"list-inline-item\"><a href=\"#\">Travel</a></li>
\t\t\t\t   \t</ul>         -->

\t\t\t\t    <ul class=\"float-right list-inline\" id=\"content\">
\t\t\t\t\t\t<div style=\"display: flex;\">
\t\t\t\t\t\t\t{# Button to add a like to the post #}
\t\t\t\t\t\t\t<form action=\"{{ path('addlikepost', {'id': post.id}) }}\" method=\"post\" style=\"padding: 0.5rem;\">
\t\t\t\t\t\t\t\t<a href=\"like.png\"></a><button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-thumbs-up\"></i> Like</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<form action=\"{{ path('adddislikepost', {'id': post.id}) }}\" method=\"post\"style=\"padding: 0.5rem;\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-thumbs-down\"></i> DisLike</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t        <li class=\"list-inline-item\"> Share: </li>
\t\t\t\t        <li class=\"list-inline-item\"><a href=\"https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/postsingle/{{post.id}}\" target=\"_blank\" rel=\"noopener noreferrer\" target=\"_blank\"><i class=\"icofont-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t        <li class=\"list-inline-item\"><a href=\"https://twitter.com/intent/tweet?url=http%3A%2F%2F127.0.0.1:8000%2Fpostsingle%2F{{post.id}}&text=Check%20out%20this%20awesome%20post\" target=\"_blank\" rel=\"noopener noreferrer\" target=\"_blank\"><i class=\"icofont-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t        <li class=\"list-inline-item\"><a href=\"https://pinterest.com/pin/create/button/?url=http%3A%2F%2F127.0.0.1%3A8000%2Fpostsingle%2F28&media=image_url&description=description_text\" target=\"_blank\" rel=\"noopener noreferrer\" target=\"_blank\" rel=\"noopener noreferrer\" target=\"_blank\"><i class=\"icofont-pinterest\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t        <li class=\"list-inline-item\"><a href=\"https://www.linkedin.com/sharing/share-offsite/?url=http://127.0.0.1:8000/postsingle/{{post.id}}\" target=\"_blank\" rel=\"noopener noreferrer\" target=\"_blank\"><i class=\"icofont-linkedin\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t    </ul>
\t\t\t    </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"post-likes\" style=\"font-size: 20px;color: #555; margin-right: 20px;display: inline-block;\" id=\"content\">
\t\t<span class=\"likes-icon\" style=\"margin-left: 5px;color: rgb(99, 145, 111);\"><i class=\"fas fa-thumbs-up\"></i></span>
\t\t<span class=\"likes-count\" style=\"font-weight: bold; color: #007bff;\">{{post.LikesPost}}</span> Likes
\t\t<span style=\"margin-left: 5px;color: rgb(150, 105, 111);\"><i class=\"fas fa-thumbs-down\"></i></span>
\t\t<span style=\"font-weight: bold;color: #dc3545;\">{{post.DislikesPost}}</span> DisLikes
\t</div>
\t<div class=\"col-lg-12\" id=\"content\">
\t\t<div class=\"comment-area mt-4 mb-5\" id=\"content\">
\t\t\t<h4 class=\"mb-4\">{{post.NbCommentsPost}} Comments on This post </h4>
\t\t\t<input style=\"width: 200px;padding: 10px;margin: 5px;border: 1px solid #ccc;border-radius: 5px;box-sizing: border-box;font-size: 16px;\" type=\"text\" id=\"searchName\" placeholder=\"Search by Name\">
\t\t\t<input style=\"width: 200px;padding: 10px;margin: 5px;border: 1px solid #ccc;border-radius: 5px;box-sizing: border-box;font-size: 16px;\" type=\"text\" id=\"searchContent\" placeholder=\"Search by Content\">
\t\t\t<input style=\"width: 200px; padding: 10px; margin: 5px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;font-size: 16px;\" type=\"date\" id=\"searchDate\" placeholder=\"Search by Date\">
\t\t\t<ul class=\"comment-tree list-unstyled\">
\t\t\t\t<li class=\"mb-5\">
\t\t\t\t\t<div class=\"comment-area-box\">
\t\t\t\t\t\t
\t\t\t\t\t\t{% for comment in comments %}
\t\t\t\t\t\t<!-- <div class=\"comment-thumb float-left\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"images/blog/testimonial1.jpg\" class=\"img-fluid\">
\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t<div class=\"contenucom\" id=\"content\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"comment-info\" style=\"margin-bottom: -0.5rem;\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-1\"></h5>
\t\t\t\t\t\t\t<span class=\"nam\" id=\"content\">{{comment.NameComment}}</span>
\t\t\t\t\t\t\t<span class=\"date-comm\"id=\"content\">| {{comment.DatecreationComment.format('Y-m-d')}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <div class=\"comment-meta mt-2\">
\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icofont-reply mr-2 text-muted\"></i>Reply</a>
\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"comment-content mt-3\" style=\"margin-bottom: -1rem;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"cont\"id=\"content\">\t{{comment.ContenuComment}}</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div style=\"display: flex; margin-bottom: 1rem;\" >
\t\t\t\t\t\t\t{# Button to add a like to the post #}
\t\t\t\t\t\t\t<form action=\"{{ path('addlikecomment', {'id': comment.id}) }}\" method=\"post\" style=\"padding: 0.5rem;\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('addlikecomment', {'id': comment.id}) }}\"  style=\"text-decoration: none;font-size: 1.5rem;color: lightgreen;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-up\"></i> <!-- Font Awesome thumbs-up icon -->
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0.5rem; color: #555;\">{{ comment.LikesComment }}</span>
\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\ta:hover i.fas.fa-thumbs-up{
\t\t\t\t\t\t\t\t\tcolor:green;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<form action=\"{{ path('adddislikecomment', {'id': comment.id}) }}\" method=\"post\" style=\"padding: 0.5rem;\">
\t\t\t\t\t\t\t\t<a   href=\"{{ path('adddislikecomment', {'id': comment.id}) }}\"  style=\"text-decoration: none;font-size: 1.5rem;color:lightcoral;\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-down\"></i> <!-- Font Awesome thumbs-down icon -->
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0.5rem;color: #555;\">{{ comment.DislikesComment }}</span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<style>
\t\t\t\t\t\t\t\t\t\ta:hover i.fas.fa-thumbs-down {
\t\t\t\t\t\t\t\t\t\t\tcolor:red;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor%}
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<!-- <li>
\t\t\t\t\t<div class=\"comment-area-box\">
\t\t\t\t\t\t<div class=\"comment-thumb float-left\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"images/blog/testimonial2.jpg\" class=\"img-fluid\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"comment-info\">
\t\t\t\t\t\t\t<h5 class=\"mb-1\">Philip W</h5>
\t\t\t\t\t\t\t<span>United Kingdom</span>
\t\t\t\t\t\t\t<span class=\"date-comm\">| Posted June 7, 2019</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"comment-meta mt-2\">
\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icofont-reply mr-2 text-muted\"></i>Reply </a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"comment-content mt-3\">
\t\t\t\t\t\t\t<p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li> -->
\t\t\t</ul>
\t\t</div>
\t</div>



\t<div class=\"col-lg-12\">
\t\t<!-- Comment form -->
\t\t<div class=\"form-container\"id=\"content\">
\t\t\t<!-- Form start -->
\t\t\t
\t\t\t
\t\t\t{{ form_start(commentForm, {'attr': {'class': 'comment-form', 'id': 'comment-form'}}) }}
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<!-- Form fields -->
\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t\t{{ form_widget(commentForm.name_comment, {'attr': {'class': 'form-control', 'placeholder': 'Your Name'}}) }}
\t\t\t\t\t\t{{ form_errors(commentForm.name_comment, {'attr': {'class': 'form-danger'}}) }}

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_widget(commentForm.mail_comment, {'attr': {'class': 'form-control', 'placeholder': 'Your Email'}}) }}
\t\t\t\t\t{{ form_errors(commentForm.mail_comment , {'attr': {'class': 'form-danger'}}) }}
\t\t\t\t</div>
\t\t\t\t

\t\t\t</div>
\t\t\t\t\t{{ form_widget(commentForm.contenu_comment, {'attr': {'class': 'form-control mb-4 comment-textarea', 'placeholder': 'Comment', 'rows': '12'}}) }}
\t\t\t\t\t{{ form_errors(commentForm.contenu_comment, {'attr': {'class': 'form-danger'}}) }}
\t\t\t\t
\t\t\t
\t\t\t<!-- Hidden fields -->
\t\t\t<div style=\"display: none;\">
\t\t\t\t{{ form_widget(commentForm.likes_comment) }}
\t\t\t\t{{ form_widget(commentForm.dislikes_comment) }}
\t\t\t\t{{ form_widget(commentForm.datecreation_comment) }}
\t\t\t\t{{ form_widget(commentForm.id_post) }}
\t\t\t\t{{ form_widget(commentForm.id_comment) }}
\t\t\t</div>
\t\t\t{{form_widget(commentForm.captcha)}}
\t\t\t{{form_errors(commentForm.captcha)}}
\t\t\t<!-- Submit button -->
\t\t\t<!-- <button type=\"submit\" class=\"btn btn-primary\">Submit</button> -->
\t\t\t<!-- Form end -->
\t\t\t{{ form_end(commentForm) }}
\t\t</div>
\t</div>
\t
\t
\t<!--  -->


</div>
            </div>
              
        <!-- </div> -->
    </div>
\t
</section>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        // List of bad words to check for
        var badWords = [\"bad\", \"badword\"];

        // Event listener for form submission
        document.querySelector('.comment-form').addEventListener('submit', function(event) {
            // Prevent the form from submitting
            event.preventDefault();

            // Get the value of the comment input field
            var commentField = document.querySelector('.comment-textarea').value.toLowerCase();

            // Check if the comment includes a bad word
            for (var i = 0; i < badWords.length; i++) {
                if (commentField.includes(badWords[i].toLowerCase())) {
                    // Show an alert message if a bad word is found
                    alert('Please remove inappropriate language from your comment.');
                    return;
                }
            }

            // If no bad words are found, submit the form
            event.target.submit();
        });
    });
</script>

<script>
    // JavaScript to toggle read mode
    document.addEventListener(\"DOMContentLoaded\", function() {
        var slider = document.getElementById(\"toggle-read-mode\");
        var content = document.getElementById(\"content\");

        slider.addEventListener(\"change\", function() {
            if (this.checked) {
                content.classList.add(\"read-mode\");
            } else {
                content.classList.remove(\"read-mode\");
            }
        });
    });
</script>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function () {
        // Function to perform the search based on the specified column
        function searchColumn(columnIndex, value) {
            \$(\".contenucom\").filter(function () {
                // Get the text content of the specified column
                var cellText = \$(this).find(\".nam, .date-comm, .cont\").eq(columnIndex).text().toLowerCase();
                // Check if the text content contains the search value
                var found = cellText.indexOf(value) > -1;
                \$(this).toggle(found);
            });
        }

        // Event handlers for each input element
        \$(\"#searchName\").on(\"keyup\", function () {
            searchColumn(0, \$(this).val().toLowerCase());
        });

        \$(\"#searchDate\").on(\"keyup\", function () {
            searchColumn(1, \$(this).val().toLowerCase());
        });

        \$(\"#searchContent\").on(\"keyup\", function () {
            searchColumn(2, \$(this).val().toLowerCase());
        });
    });
</script>
\t
\t

{% endblock %}", "post/showsingle.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\post\\showsingle.html.twig");
    }
}
