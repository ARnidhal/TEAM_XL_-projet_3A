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

/* evenement/indexFront.html.twig */
class __TwigTemplate_9ac5318d94d09493b080fb11b247d113 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/indexFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/indexFront.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "evenement/indexFront.html.twig", 1);
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
        echo "    <div class=\"service\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h4 style=\"margin-top:-200px; margin-bottom:50px;\">Liste des Evenements</h4>
            </div>
            <div class=\"row\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 11
            echo "                    <div class=\"col-lg-4 col-md-6 mb-4\">
                        <div class=\"service-item\">
                            <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["evenement"], "imageEvenement", [], "any", false, false, false, 13))), "html", null, true);
            echo "\" style=\"width:360px; height:250px;\" alt=\"\">
                            <center><h2>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nomEvenement", [], "any", false, false, false, 14), "html", null, true);
            echo "</h2></center>
                            <p><strong style=\"color:#696969\"> Type:</strong> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "typeEvenement", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                            <p><strong style=\"color:#696969\">Lieu:</strong> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieuEvenement", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
                            <p><strong style=\"color:#696969\">Nbr de participants:</strong> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nbParticipants", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                            <p><strong style=\"color:#696969\">Date de début:</strong> ";
            // line 18
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateDebut", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                            <p><strong style=\"color:#696969\">Date de fin:</strong> ";
            // line 19
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 19)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "dateFin", [], "any", false, false, false, 19), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                            ";
            // line 20
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["evenement"], "sponsor", [], "any", false, false, false, 20))) {
                // line 21
                echo "                                - Sponsor : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evenement"], "sponsor", [], "any", false, false, false, 21), "nomSponsor", [], "any", false, false, false, 21), "html", null, true);
                echo "
                            ";
            } else {
                // line 23
                echo "                                - Pas de sponsor
                            ";
            }
            // line 25
            echo "
                            <br>
                            ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, $context["evenement"], "nbParticipants", [], "any", false, false, false, 27) > 0)) {
                // line 28
                echo "                                <center> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participant_new", ["idevent" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Participer</a></center>
                            ";
            }
            // line 30
            echo "                            <br>
                            ";
            // line 32
            echo "                            <div class=\"sharethis-inline-share-buttons\"></div>
                            ";
            // line 34
            echo "
                            <br>
                            <br>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                    <div class=\"col\">
                        <p class=\"text-center\">Aucun événement trouvé.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div>
        </div>
    </div>
    <br>

    <div class=\"pagination-container text-center mt-4\">
        ";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 50, $this->source); })()), "pagination_template.html.twig");
        echo "
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "evenement/indexFront.html.twig";
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
        return array (  170 => 50,  162 => 44,  153 => 40,  143 => 34,  140 => 32,  137 => 30,  131 => 28,  129 => 27,  125 => 25,  121 => 23,  115 => 21,  113 => 20,  109 => 19,  105 => 18,  101 => 17,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  81 => 11,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block body %}
    <div class=\"service\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h4 style=\"margin-top:-200px; margin-bottom:50px;\">Liste des Evenements</h4>
            </div>
            <div class=\"row\">
                {% for evenement in evenements %}
                    <div class=\"col-lg-4 col-md-6 mb-4\">
                        <div class=\"service-item\">
                            <img src=\"{{ asset('uploads/' ~ evenement.imageEvenement)}}\" style=\"width:360px; height:250px;\" alt=\"\">
                            <center><h2>{{ evenement.nomEvenement }}</h2></center>
                            <p><strong style=\"color:#696969\"> Type:</strong> {{ evenement.typeEvenement }}</p>
                            <p><strong style=\"color:#696969\">Lieu:</strong> {{ evenement.lieuEvenement }}</p>
                            <p><strong style=\"color:#696969\">Nbr de participants:</strong> {{ evenement.nbParticipants }}</p>
                            <p><strong style=\"color:#696969\">Date de début:</strong> {{ evenement.dateDebut ? evenement.dateDebut|date('Y-m-d') : '' }}</p>
                            <p><strong style=\"color:#696969\">Date de fin:</strong> {{ evenement.dateFin ? evenement.dateFin|date('Y-m-d') : '' }}</p>
                            {% if evenement.sponsor is not null %}
                                - Sponsor : {{ evenement.sponsor.nomSponsor }}
                            {% else %}
                                - Pas de sponsor
                            {% endif %}

                            <br>
                            {% if evenement.nbParticipants > 0 %}
                                <center> <a href=\"{{ path('app_participant_new',{'idevent':evenement.id}) }}\" class=\"btn btn-primary\">Participer</a></center>
                            {% endif %}
                            <br>
                            {# -------------------------- Share ------------------------------------  #}
                            <div class=\"sharethis-inline-share-buttons\"></div>
                            {# -------------------------- Share ------------------------------------  #}

                            <br>
                            <br>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col\">
                        <p class=\"text-center\">Aucun événement trouvé.</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
    <br>

    <div class=\"pagination-container text-center mt-4\">
        {{ knp_pagination_render(evenements, 'pagination_template.html.twig') }}
    </div>

{% endblock %}
", "evenement/indexFront.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\evenement\\indexFront.html.twig");
    }
}
