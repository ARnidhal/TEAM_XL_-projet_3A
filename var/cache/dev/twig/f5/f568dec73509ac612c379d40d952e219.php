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

/* user/chatbotuser.html.twig */
class __TwigTemplate_9336b2b7a43cd7490622d2a45d24f6cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/chatbotuser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/chatbotuser.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "user/chatbotuser.html.twig", 1);
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
    <title>Chatbot</title>
    <style>
     .chatbot {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px; /* Added padding to the body */
            display: flex;
            justify-content: center; /* Center the content horizontally */
            align-items: center; /* Center the content vertically */
            height: 100vh; /* Make the body take up the full height of the viewport */
        }
    
    .containerchat {
        max-width: 600px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-left:auto; /* Adjust the left margin as needed */
        margin-right: auto;
    }
    
    .chat {
    overflow-y: scroll;
    max-height: 500px; /* Increase the max-height value to make it bigger */
    margin-bottom: 20px;
    padding: 10px;
    background-color: #f9f9f9;
    border-radius: 20px;
   
}
    
    .message {
        margin-bottom: 10px;
        padding: 8px 12px;
        border-radius: 5px;
        display: inline-block;
        max-width: 70%;
    }
    
    .user-message {
        background-color: #d6eaf8;
        align-self: flex-end;
        text-align: right;
    }
    
    .bot-message {
        background-color: #f0f0f0;
        align-self: flex-start;
        text-align: left;
    }
    
    .response p {
        margin: 0;
    }
    
    .input-container {
        display: flex;
        margin-top: 10px; /* Added margin to separate from the chat container */
    }
    
    .input-container input[type=\"text\"] {
        flex: 1;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }
    
    .input-container button {
        padding: 8px 16px;
        margin-left: 10px;
        border-radius: 5px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
    
    .input-container button:hover {
        background-color: #0056b3;
    }
    </style>

<div class=\"chatbot\">
    <div class=\"containerchat\">
    
        <h1>ChatVST</h1>
        <div class=\"chat\">
            ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chat_history"]) || array_key_exists("chat_history", $context) ? $context["chat_history"] : (function () { throw new RuntimeError('Variable "chat_history" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["turn"]) {
            // line 94
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["turn"], "role", [], "any", false, false, false, 94) == "user")) {
                // line 95
                echo "                    <div class=\"message user-message\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turn"], "message", [], "any", false, false, false, 95), "html", null, true);
                echo "</div>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 96
$context["turn"], "role", [], "any", false, false, false, 96) == "bot")) {
                // line 97
                echo "                    <div class=\"message bot-message\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turn"], "message", [], "any", false, false, false, 97), "html", null, true);
                echo "</div>
                ";
            }
            // line 99
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['turn'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        </div>
        <form action=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chatbotuser");
        echo "\" method=\"post\" id=\"chatForm\">
            <div class=\"input-container\">
                <input type=\"text\" id=\"text\" name=\"text\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Type your message...\">
                <button type=\"submit\" form=\"chatForm\">Send</button>
            </div>
        </form>
    </div>
</div>
<script>
   



    document.addEventListener('DOMContentLoaded', function() {
     const lastBotMessage = document.querySelector('.bot-message:last-child'); // Select the last bot message
 
     if (lastBotMessage) {
         const text = lastBotMessage.textContent;
         lastBotMessage.textContent = ''; // Clear the content of the last bot message
         typeWriter(text, lastBotMessage, 0); // Call the typewriter function for the last bot message
     }
 });
 
 function typeWriter(text, element, i) {
     if (i < text.length) {
         element.textContent += text.charAt(i); // Append the next character to the message
         i++;
         setTimeout(function() { 
             typeWriter(text, element, i); 
             // Scroll to the bottom of the chat container
             const chatContainer = document.querySelector('.chat');
             chatContainer.scrollTop = chatContainer.scrollHeight;
         }, getRandomInt(20, 30)); // Randomize typing speed
     }
 }
 
 function getRandomInt(min, max) {
     return Math.floor(Math.random() * (max - min + 1)) + min;
 }
 
 
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
        return "user/chatbotuser.html.twig";
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
        return array (  194 => 103,  189 => 101,  186 => 100,  180 => 99,  174 => 97,  172 => 96,  167 => 95,  164 => 94,  160 => 93,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block body %}

    <title>Chatbot</title>
    <style>
     .chatbot {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px; /* Added padding to the body */
            display: flex;
            justify-content: center; /* Center the content horizontally */
            align-items: center; /* Center the content vertically */
            height: 100vh; /* Make the body take up the full height of the viewport */
        }
    
    .containerchat {
        max-width: 600px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-left:auto; /* Adjust the left margin as needed */
        margin-right: auto;
    }
    
    .chat {
    overflow-y: scroll;
    max-height: 500px; /* Increase the max-height value to make it bigger */
    margin-bottom: 20px;
    padding: 10px;
    background-color: #f9f9f9;
    border-radius: 20px;
   
}
    
    .message {
        margin-bottom: 10px;
        padding: 8px 12px;
        border-radius: 5px;
        display: inline-block;
        max-width: 70%;
    }
    
    .user-message {
        background-color: #d6eaf8;
        align-self: flex-end;
        text-align: right;
    }
    
    .bot-message {
        background-color: #f0f0f0;
        align-self: flex-start;
        text-align: left;
    }
    
    .response p {
        margin: 0;
    }
    
    .input-container {
        display: flex;
        margin-top: 10px; /* Added margin to separate from the chat container */
    }
    
    .input-container input[type=\"text\"] {
        flex: 1;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }
    
    .input-container button {
        padding: 8px 16px;
        margin-left: 10px;
        border-radius: 5px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
    
    .input-container button:hover {
        background-color: #0056b3;
    }
    </style>

<div class=\"chatbot\">
    <div class=\"containerchat\">
    
        <h1>ChatVST</h1>
        <div class=\"chat\">
            {% for turn in chat_history %}
                {% if turn.role == 'user' %}
                    <div class=\"message user-message\">{{ turn.message }}</div>
                {% elseif turn.role == 'bot' %}
                    <div class=\"message bot-message\">{{ turn.message }}</div>
                {% endif %}
            {% endfor %}
        </div>
        <form action=\"{{ path('chatbotuser') }}\" method=\"post\" id=\"chatForm\">
            <div class=\"input-container\">
                <input type=\"text\" id=\"text\" name=\"text\" value=\"{{ question }}\" placeholder=\"Type your message...\">
                <button type=\"submit\" form=\"chatForm\">Send</button>
            </div>
        </form>
    </div>
</div>
<script>
   



    document.addEventListener('DOMContentLoaded', function() {
     const lastBotMessage = document.querySelector('.bot-message:last-child'); // Select the last bot message
 
     if (lastBotMessage) {
         const text = lastBotMessage.textContent;
         lastBotMessage.textContent = ''; // Clear the content of the last bot message
         typeWriter(text, lastBotMessage, 0); // Call the typewriter function for the last bot message
     }
 });
 
 function typeWriter(text, element, i) {
     if (i < text.length) {
         element.textContent += text.charAt(i); // Append the next character to the message
         i++;
         setTimeout(function() { 
             typeWriter(text, element, i); 
             // Scroll to the bottom of the chat container
             const chatContainer = document.querySelector('.chat');
             chatContainer.scrollTop = chatContainer.scrollHeight;
         }, getRandomInt(20, 30)); // Randomize typing speed
     }
 }
 
 function getRandomInt(min, max) {
     return Math.floor(Math.random() * (max - min + 1)) + min;
 }
 
 
 </script>

{% endblock %}
", "user/chatbotuser.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\user\\chatbotuser.html.twig");
    }
}
