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

/* user/pdfadmin.html.twig */
class __TwigTemplate_4e2e8d5797df2567673e46d3e856ee25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pdfadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pdfadmin.html.twig"));

        // line 1
        echo "<table class=\"table datatable\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "username", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "fullname", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
            ";
            // line 18
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["a"], "roles", [], "any", false, false, false, 18)) && twig_in_filter("user", twig_get_attribute($this->env, $this->source, $context["a"], "roles", [], "any", false, false, false, 18)))) {
                // line 19
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "roles", [], "any", false, false, false, 19), 0, [], "array", false, false, false, 19), "html", null, true);
                echo "</td>
            ";
            }
            // line 21
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </tbody>
</table>

<script>
    function toggleView() {
        var pdfSection = document.getElementById('pdfSection');
        var dataTablesSection = document.querySelector('.section');

        if (pdfSection.style.display === 'none') {
            pdfSection.style.display = 'block';
            dataTablesSection.style.display = 'none';
        } else {
            pdfSection.style.display = 'none';
            dataTablesSection.style.display = 'block';
        }
    }
</script>


<style>
    /* Style for table headers */
    table.datatable th {
        background-color: #f0f0f0; /* Light gray background */
        color: #333; /* Dark text color */
        padding: 10px; /* Padding around the content */
    }

    /* Style for table body */
    table.datatable td {
        border: 1px solid #ccc; /* Border around each cell */
        padding: 10px; /* Padding around the content */
    }

    /* Style for alternate rows */
    table.datatable tr:nth-child(even) {
        background-color: #f9f9f9; /* Lighter background color for even rows */
    }

    /* Style for odd rows */
    table.datatable tr:nth-child(odd) {
        background-color: #fff; /* White background color for odd rows */
    }
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/pdfadmin.html.twig";
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
        return array (  94 => 23,  87 => 21,  81 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table datatable\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        {% for a in user %}
        <tr>
            <td>{{ a.id }}</td>
            <td>{{ a.username }}</td>
            <td>{{ a.fullname }}</td>
            <td>{{ a.email }}</td>
            {% if a.roles is not empty and 'user' in a.roles %}
            <td>{{ a.roles[0] }}</td>
            {% endif %}
        </tr>
        {% endfor %}
    </tbody>
</table>

<script>
    function toggleView() {
        var pdfSection = document.getElementById('pdfSection');
        var dataTablesSection = document.querySelector('.section');

        if (pdfSection.style.display === 'none') {
            pdfSection.style.display = 'block';
            dataTablesSection.style.display = 'none';
        } else {
            pdfSection.style.display = 'none';
            dataTablesSection.style.display = 'block';
        }
    }
</script>


<style>
    /* Style for table headers */
    table.datatable th {
        background-color: #f0f0f0; /* Light gray background */
        color: #333; /* Dark text color */
        padding: 10px; /* Padding around the content */
    }

    /* Style for table body */
    table.datatable td {
        border: 1px solid #ccc; /* Border around each cell */
        padding: 10px; /* Padding around the content */
    }

    /* Style for alternate rows */
    table.datatable tr:nth-child(even) {
        background-color: #f9f9f9; /* Lighter background color for even rows */
    }

    /* Style for odd rows */
    table.datatable tr:nth-child(odd) {
        background-color: #fff; /* White background color for odd rows */
    }
</style>", "user/pdfadmin.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\pdfadmin.html.twig");
    }
}
