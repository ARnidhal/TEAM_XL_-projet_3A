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

/* ff.config.json */
class __TwigTemplate_d1889db9cbd0a1765d7e1bf29aaa7679 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ff.config.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ff.config.json"));

        // line 1
        echo "{
  \"name\": \"base\",
  \"configs\": [
    {
      \"name\": \"bloc\",
      \"commands\": [
        {
          \"name\": \"[FF] New Big Pack Bloc\",
          \"templates\": [\"*\"],
          \"key\": \"bigpack\",
          \"files\": [
            \"bloc\",
            \"event\",
            \"index\",
            \"model\",
            \"page\",
            \"provider\",
            \"repository\",
            \"screen\",
            \"state\"
          ]
        },
        {
          \"name\": \"[FF] New Small Pack Bloc\",
          \"templates\": [\"*\"],
          \"key\": \"smallpack\",
          \"files\": [\"bloc\", \"event\", \"index\", \"page\", \"screen\", \"state\"]
        },
        {
          \"name\": \"[FF] New Bloc\",
          \"templates\": [\"*\"],
          \"files\": [\"bloc\"]
        },
        {
          \"name\": \"[FF] New Event\",
          \"templates\": [\"*\"],
          \"files\": [\"event\"]
        },
        {
          \"name\": \"[FF] New Model\",
          \"templates\": [\"*\"],
          \"files\": [\"model\"]
        },
        {
          \"name\": \"[FF] New Page\",
          \"templates\": [\"*\"],
          \"files\": [\"page\"]
        },
        {
          \"name\": \"[FF] New Provider\",
          \"templates\": [\"*\"],
          \"files\": [\"provider\"]
        },
        {
          \"name\": \"[FF] New Repository\",
          \"templates\": [\"*\"],
          \"files\": [\"repository\"]
        },
        {
          \"name\": \"[FF] New Screen\",
          \"templates\": [\"*\"],
          \"files\": [\"screen\"]
        },
        {
          \"name\": \"[FF] New State\",
          \"templates\": [\"*\"],
          \"files\": [\"state\"]
        },
        {
          \"name\": \"[FF] New Index\",
          \"templates\": [\"*\"],
          \"files\": [\"index\"]
        },
        {
          \"name\": \"[FF] New Navigate(Navme)\",
          \"templates\": [\"navigate\"],
          \"files\": [\"navigate\"]
        }
      ]
    }
  ]
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ff.config.json";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"base\",
  \"configs\": [
    {
      \"name\": \"bloc\",
      \"commands\": [
        {
          \"name\": \"[FF] New Big Pack Bloc\",
          \"templates\": [\"*\"],
          \"key\": \"bigpack\",
          \"files\": [
            \"bloc\",
            \"event\",
            \"index\",
            \"model\",
            \"page\",
            \"provider\",
            \"repository\",
            \"screen\",
            \"state\"
          ]
        },
        {
          \"name\": \"[FF] New Small Pack Bloc\",
          \"templates\": [\"*\"],
          \"key\": \"smallpack\",
          \"files\": [\"bloc\", \"event\", \"index\", \"page\", \"screen\", \"state\"]
        },
        {
          \"name\": \"[FF] New Bloc\",
          \"templates\": [\"*\"],
          \"files\": [\"bloc\"]
        },
        {
          \"name\": \"[FF] New Event\",
          \"templates\": [\"*\"],
          \"files\": [\"event\"]
        },
        {
          \"name\": \"[FF] New Model\",
          \"templates\": [\"*\"],
          \"files\": [\"model\"]
        },
        {
          \"name\": \"[FF] New Page\",
          \"templates\": [\"*\"],
          \"files\": [\"page\"]
        },
        {
          \"name\": \"[FF] New Provider\",
          \"templates\": [\"*\"],
          \"files\": [\"provider\"]
        },
        {
          \"name\": \"[FF] New Repository\",
          \"templates\": [\"*\"],
          \"files\": [\"repository\"]
        },
        {
          \"name\": \"[FF] New Screen\",
          \"templates\": [\"*\"],
          \"files\": [\"screen\"]
        },
        {
          \"name\": \"[FF] New State\",
          \"templates\": [\"*\"],
          \"files\": [\"state\"]
        },
        {
          \"name\": \"[FF] New Index\",
          \"templates\": [\"*\"],
          \"files\": [\"index\"]
        },
        {
          \"name\": \"[FF] New Navigate(Navme)\",
          \"templates\": [\"navigate\"],
          \"files\": [\"navigate\"]
        }
      ]
    }
  ]
}
", "ff.config.json", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\ff.config.json");
    }
}
