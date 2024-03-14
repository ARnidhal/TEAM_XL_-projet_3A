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

/* imc/resultat.html.twig */
class __TwigTemplate_0bf71bddbf8eb8f226efb8bdec8322be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imc/resultat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "imc/resultat.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "imc/resultat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Résultat de l'IMC";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "<style>
    /* CSS code to change color of <th> element to black */
    th {
        color: black;
    }
    td {
        color: black;
    }

  .card {
      transition: transform 0.5s, box-shadow 0.5s, background-color 0.5s;
      border-radius: 15px;
      overflow: hidden;
  }
  .card:hover {
      transform: scale(1.05) rotate(3deg);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
      background-color: #f8f9fa; /* Change to your desired hover color */
  }
  .card-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      transition: transform 0.5s;
  }
  .card:hover .card-img {
      transform: scale(1.1);
  }
  .card-body {
      padding: 20px;
  }
  .card-title {
      font-size: 18px;
      font-weight: bold;
      margin: 0;
      color: #032c57; /* Initial color */
      transition: color 0.3s; /* Add transition effect for color change */
  }
  .card:hover .card-title {
      color: #dc1853; /* Change color on hover */
  }
  .show-more-link {
      text-decoration: none;
      color: #007bff; /* Change to your desired link color */
      transition: color 0.3s;
  }
  .show-more-link:hover {
      color: #0056b3; /* Change to your desired link hover color */
  }
  .card:hover {
    transform: scale(1.1); /* Augmentez la valeur de l'échelle pour un zoom plus important */
    transition: transform 0.5s; /* Ajoutez une transition pour une animation fluide */
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
    background-color: #f8f9fa; /* Changez en votre couleur de survol souhaitée */
}
.card-img {
    width: 100%;
    height: 200px; /* Changez cette valeur selon vos besoins */
    object-fit: cover;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    transition: transform 0.5s;
}

</style>



    <h1 class=\"text-center mb-4\">Résultat de l'IMC</h1>
    <div class=\"row justify-content-center\">
            ";
        // line 78
        if (((isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 78, $this->source); })()) < 18.5)) {
            // line 79
            echo "            <div class=\"col-md-6\">
                <div class=\"card bg-danger text-white\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Votre IMC est : ";
            // line 82
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 82, $this->source); })()), 3, ".", ""), "html", null, true);
            echo "</p>
                        <p>Poids idéal: ";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["idealWeight"]) || array_key_exists("idealWeight", $context) ? $context["idealWeight"] : (function () { throw new RuntimeError('Variable "idealWeight" does not exist.', 83, $this->source); })()), "html", null, true);
            echo "</p>
                        <p class=\"card-text\">Votre poids idéal se situe entre : ";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["idealWeightMin"]) || array_key_exists("idealWeightMin", $context) ? $context["idealWeightMin"] : (function () { throw new RuntimeError('Variable "idealWeightMin" does not exist.', 84, $this->source); })()), "html", null, true);
            echo " kg et ";
            echo twig_escape_filter($this->env, (isset($context["idealWeightMax"]) || array_key_exists("idealWeightMax", $context) ? $context["idealWeightMax"] : (function () { throw new RuntimeError('Variable "idealWeightMax" does not exist.', 84, $this->source); })()), "html", null, true);
            echo " kg</p>
                        <p class=\"card-text\">Vous êtes en insuffisance pondérale</p>
                       
                    </div>
                </div>
              </div>
           
    
              
        </div>
        <div class=\"container py-5 h-100\" style=\"color: aqua;\" >
          <div class=\"row d-flex justify-content-center align-items-center h-100\"style=\"color: aqua;\" >
            <div class=\"col-md-12 col-xl-10\" style=\"color: aqua;\">
      
              <div class=\"card mask-custom\" style=\"color: aqua;\">
                <div class=\"card-body p-4 text-white\" style=\"color: aqua;\">
      
                  <div class=\"text-center pt-3 pb-2\" style=\"color: aqua;\">
                    <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\"
                      alt=\"Check\" width=\"60\">
                    <h2 class=\"my-4\"  style=\"color: black;\">Task List</h2>
                  </div>
      
                  <table class=\"table text-white mb-0\" >
                    <thead>
                      <tr>
                        <th scope=\"col\">CHEK</th>
                        <th scope=\"col\">Task</th>
                        <th scope=\"col\">Priority</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class=\"fw-normal\">
                        <th>
                          <label for=\"alice-checkbox\">
                              <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                              alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                          </label>
                          <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                         
                      </th>
                      
                        <td class=\"align-middle\">
                          <span><span style=\"color: rgb(175, 12, 12);\"><strong>Consultation médicale :</strong></span>Assurez-vous qu'elle consulte régulièrement un professionnel de la santé pour un suivi médical approprié et pour évaluer les causes sous-jacentes de son faible poids.</span>
                        </td>
                        <td class=\"align-middle\">
                          <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                        </td>

                      </tr>
                      <tr class=\"fw-normal\">
                        <th>
                          <label for=\"alice-checkbox\">
                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                            alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                        </label>
                        <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                        </th>
                        <td class=\"align-middle\"><span style=\"color: green;\"><strong>Entraînement en force : </strong></span>Encouragez-la à pratiquer des exercices de renforcement musculaire pour développer sa masse musculaire et améliorer sa force. Cela peut inclure des exercices avec des poids libres, des bandes de résistance ou des exercices au poids du corps.</td>
                        <td class=\"align-middle\">
                          <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                        </td>
                       
                      </tr>
                      <tr class=\"fw-normal\">
                        <th>
                          <label for=\"alice-checkbox\">
                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                            alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                        </label>
                        <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                        </th>
                        <td class=\"align-middle\"><span style=\"color: rgb(218, 215, 27);\"><strong>Suivi de la progression : </strong></span>Aidez-la à suivre sa progression en termes de gain de poids, de force musculaire et de bien-être général. Cela peut l'aider à rester motivée et à ajuster ses efforts si nécessaire.</td>
                        <td class=\"align-middle\">
                          <h6 class=\"mb-0\"><span class=\"badge bg-warning\">Middle priority</span></h6>
                        </td>
                       
                      </tr>
                     
                      <tr class=\"fw-normal\">
                        <th>
                          <label for=\"alice-checkbox\">
                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                            alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                        </label>
                        <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                        </th>
                        <td class=\" align-middle\"><span style=\"color: rgb(175, 12, 12);\"><strong>Planification de repas nutritifs :</strong></span> Aidez-la à élaborer des plans de repas riches en calories et en nutriments pour favoriser une prise de poids saine. Encouragez l'inclusion d'aliments riches en protéines, en matières grasses saines et en glucides complexes.</td>
                        <td class=\" align-middle\">
                          <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                        </td>
                       
                      </tr>


                      <tr class=\"fw-normal\">
                        <th>
                          <label for=\"alice-checkbox\">
                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                            alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                        </label>
                        <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                        </th>
                        <td class=\" align-middle\"><span style=\"color: rgb(175, 12, 12);\"><strong>Suivi médical régulier : </strong></span> Assurez-vous qu'elle continue de consulter régulièrement un professionnel de la santé pour surveiller sa santé et son poids, et pour ajuster son plan de prise de poids si nécessaire.</td>
                        <td class=\" align-middle\">
                          <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                        </td>
                       
                      </tr>

                    </tbody>
                  </table>
      
      
                </div>
              </div>
             
            </div>
          </div>
        </div>
        


        
    


     
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7 text-center\">
                    <div class=\"section-title\">
                        <h2>Let Us Endeavor to Optimize Your Well-being !</h2>
                        <div class=\"divider mx-auto my-4\"></div>
                        <p>\"These tasks can help maintain a healthy body weight and promote better overall health. It's always important to adapt these suggestions according to the individual's needs and preferences.\"</p>
                    </div>
                </div>
            </div>


            <div class=\"row\">
              <div class=\"col-lg-3 col-md-6\">
                <div class=\"card mb-4\">
                  <div class=\"card-body\">
                    <p>Vidéo sur l'alimentation équilibrée :</p>
                    <li><img src=\"";
            // line 229
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
      
                    <div class=\"content\">
                      <h4 class=\"mt-4 mb-2 title-color\">choulder exercice</h4>
                      <p class=\"mb-4\">choulder exercice</p>
                    </div>
                  </div>
                </div>
              </div>  
            
              <div class=\"col-lg-3 col-md-6\">
                <div class=\"card mb-4\">
                  <div class=\"card-body\">
                    <p>Vidéo sur l'alimentation équilibrée :</p>
                    <li><img src=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
      
                    <div class=\"content\">
                      <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                      <p class=\"mb-4\">kkkk</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6\">
                <div class=\"card mb-4\">
                  <div class=\"card-body\">
                    <p>Vidéo sur l'alimentation équilibrée :</p>
                    <li><img src=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
      
                    <div class=\"content\">
                      <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                      <p class=\"mb-4\">kkkk</p>
                    </div>
                  </div>
                </div>
              </div>
                               
              <div class=\"col-lg-3 col-md-10\">
                <div class=\"card mb-4\">
                  <div class=\"card-body\">
                    <p>Vidéo sur l'alimentation équilibrée :</p>
                    <li><img src=\"";
            // line 270
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
      
                    <div class=\"content\">
                      <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                      <p class=\"mb-4\">kkkk</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            


            <section>

              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-lg-12\">
                    <div class=\"feature-block d-lg-flex\">
                      
                      <div class=\"feature-item mb-5 mb-lg-0\">
                        <div class=\"feature-icon mb-4\">
                          <i class=\"icofont-support\"></i>
                        </div>
                        <div class=\"card mb-4\">
                          <div class=\"card-body\">
                            <p>Vidéo sur l'alimentation équilibrée :</p>
                            <video width=\"320\" height=\"240\" controls>
                              <source src=\"";
            // line 298
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/healthy_food_video.mp4"), "html", null, true);
            echo "\" type=\"video/mp4\">
                            </video>
                            <div class=\"content\">
                      </div>
                    </div>
                  </div>
                </div>

                    
                      <div class=\"feature-item mb-5 mb-lg-0\">
                        <div class=\"feature-icon mb-4\">
                          <i class=\"icofont-support\"></i>
                        </div>
                        <div class=\"card mb-4\">
                          <div class=\"card-body\">
                            <p>Vidéo sur l'alimentation équilibrée :</p>
                            <video width=\"320\" height=\"240\" controls>
                              <source src=\"";
            // line 315
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/healthy_food_video.mp4"), "html", null, true);
            echo "\" type=\"video/mp4\">
                            </video>
                            <div class=\"content\">
                      </div>
                    </div>
                  </div>
                </div>
             </section>

            
        </div>
          


        ";
        } elseif (((        // line 329
(isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 329, $this->source); })()) >= 18.5) && ((isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 329, $this->source); })()) < 25))) {
            // line 330
            echo "        <div class=\"col-md-6\">
            <div class=\"card bg-success text-white\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Votre IMC est : ";
            // line 333
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 333, $this->source); })()), 3, ".", ""), "html", null, true);
            echo "</p>
                    <p>Poids idéal: ";
            // line 334
            echo twig_escape_filter($this->env, (isset($context["idealWeight"]) || array_key_exists("idealWeight", $context) ? $context["idealWeight"] : (function () { throw new RuntimeError('Variable "idealWeight" does not exist.', 334, $this->source); })()), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">Votre poids idéal se situe entre : ";
            // line 335
            echo twig_escape_filter($this->env, (isset($context["idealWeightMin"]) || array_key_exists("idealWeightMin", $context) ? $context["idealWeightMin"] : (function () { throw new RuntimeError('Variable "idealWeightMin" does not exist.', 335, $this->source); })()), "html", null, true);
            echo " kg et ";
            echo twig_escape_filter($this->env, (isset($context["idealWeightMax"]) || array_key_exists("idealWeightMax", $context) ? $context["idealWeightMax"] : (function () { throw new RuntimeError('Variable "idealWeightMax" does not exist.', 335, $this->source); })()), "html", null, true);
            echo " kg</p>
                    <p class=\"card-text\">Votre poids est normal</p>
                    
                </div>
            </div>
          </div>
       

         
    </div>
        
            <div class=\"container py-5 h-100\" style=\"color: aqua;\" >
              <div class=\"row d-flex justify-content-center align-items-center h-100\"style=\"color: aqua;\" >
                <div class=\"col-md-12 col-xl-10\" style=\"color: aqua;\">
          
                  <div class=\"card mask-custom\" style=\"color: aqua;\">
                    <div class=\"card-body p-4 text-white\" style=\"color: aqua;\">
          
                      <div class=\"text-center pt-3 pb-2\" style=\"color: aqua;\">
                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\"
                          alt=\"Check\" width=\"60\">
                        <h2 class=\"my-4\"  style=\"color: black;\">Task List</h2>
                      </div>
          
                      <table class=\"table text-white mb-0\" >
                        <thead>
                          <tr>
                            <th scope=\"col\">CHEK</th>
                            <th scope=\"col\">Task</th>
                            <th scope=\"col\">Priority</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class=\"fw-normal\">
                            <th>
                              <label for=\"alice-checkbox\">
                                  <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                                  alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                              </label>
                              <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                             
                          </th>
                          
                            <td class=\"align-middle\">
                              <span><span style=\"color: rgb(175, 12, 12);\"><strong>Planification de repas sains : </strong></span>Aidez-la à élaborer des menus équilibrés comprenant une variété d'aliments nutritifs tels que des fruits, des légumes, des protéines maigres et des grains entiers.</span>
                            </td>
                            <td class=\"align-middle\">
                              <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                            </td>

                          </tr>
                          <tr class=\"fw-normal\">
                            <th>
                              <label for=\"alice-checkbox\">
                                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                                alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                            </label>
                            <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                            </th>
                            <td class=\"align-middle\"><span style=\"color: green;\"><strong>Éducation sur la nutrition :</strong></span> Fournissez des informations sur les principes de base de la nutrition, y compris la taille des portions, la lecture des étiquettes nutritionnelles et la reconnaissance des aliments sains.</td>
                            <td class=\"align-middle\">
                              <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                            </td>
                           
                          </tr>
                          <tr class=\"fw-normal\">
                            <th>
                              <label for=\"alice-checkbox\">
                                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                                alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                            </label>
                            <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                            </th>
                            <td class=\"align-middle\"><span style=\"color: rgb(218, 215, 27);\"><strong>Éviter les régimes restrictifs :</strong></span> Mettez en garde contre les régimes draconiens qui pourraient compromettre la santé à long terme</td>
                            <td class=\"align-middle\">
                              <h6 class=\"mb-0\"><span class=\"badge bg-warning\">Middle priority</span></h6>
                            </td>
                           
                          </tr>
                         
                          <tr class=\"fw-normal\">
                            <th>
                              <label for=\"alice-checkbox\">
                                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                                alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                            </label>
                            <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                            </th>
                            <td class=\" align-middle\"><span style=\"color: green;\"><strong>Pratique de la gestion du stress :</strong></span>Encouragez des techniques de gestion du stress telles que la méditation, la respiration profonde, le yoga ou la relaxation musculaire progressive.</td>
                            <td class=\" align-middle\">
                              <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                            </td>
                           
                          </tr>
                        </tbody>
                      </table>
          
          
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            


            
        


         
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-7 text-center\">
                        <div class=\"section-title\">
                            <h2>Let Us Endeavor to Optimize Your Well-being !</h2>
                            <div class=\"divider mx-auto my-4\"></div>
                            <p>\"These tasks can help maintain a healthy body weight and promote better overall health. It's always important to adapt these suggestions according to the individual's needs and preferences.\"</p>
                        </div>
                    </div>
                </div>


                <div class=\"row\">
                  <div class=\"col-lg-3 col-md-6\">
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p>Vidéo sur l'alimentation équilibrée :</p>
                        <li><img src=\"";
            // line 464
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
          
                        <div class=\"content\">
                          <h4 class=\"mt-4 mb-2 title-color\">choulder exercice</h4>
                          <p class=\"mb-4\">choulder exercice</p>
                        </div>
                      </div>
                    </div>
                  </div>  
                
                  <div class=\"col-lg-3 col-md-6\">
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p>Vidéo sur l'alimentation équilibrée :</p>
                        <li><img src=\"";
            // line 478
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
          
                        <div class=\"content\">
                          <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                          <p class=\"mb-4\">kkkk</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-md-6\">
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p>Vidéo sur l'alimentation équilibrée :</p>
                        <li><img src=\"";
            // line 491
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
          
                        <div class=\"content\">
                          <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                          <p class=\"mb-4\">kkkk</p>
                        </div>
                      </div>
                    </div>
                  </div>
                                   
                  <div class=\"col-lg-3 col-md-10\">
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p>Vidéo sur l'alimentation équilibrée :</p>
                        <li><img src=\"";
            // line 505
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
          
                        <div class=\"content\">
                          <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                          <p class=\"mb-4\">kkkk</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                


                <section>

                  <div class=\"container\">
                    <div class=\"row\">
                      <div class=\"col-lg-12\">
                        <div class=\"feature-block d-lg-flex\">
                          
                          <div class=\"feature-item mb-5 mb-lg-0\">
                            <div class=\"feature-icon mb-4\">
                              <i class=\"icofont-support\"></i>
                            </div>
                            <div class=\"card mb-4\">
                              <div class=\"card-body\">
                                <p>Vidéo sur l'alimentation équilibrée :</p>
                                <video width=\"320\" height=\"240\" controls>
                                  <source src=\"";
            // line 533
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/healthy_food_video.mp4"), "html", null, true);
            echo "\" type=\"video/mp4\">
                                </video>
                                <div class=\"content\">
                          </div>
                        </div>
                      </div>
                    </div>
  
                        
                          <div class=\"feature-item mb-5 mb-lg-0\">
                            <div class=\"feature-icon mb-4\">
                              <i class=\"icofont-support\"></i>
                            </div>
                            <div class=\"card mb-4\">
                              <div class=\"card-body\">
                                <p>Vidéo sur l'alimentation équilibrée :</p>
                                <video width=\"320\" height=\"240\" controls>
                                  <source src=\"";
            // line 550
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/healthy_food_video.mp4"), "html", null, true);
            echo "\" type=\"video/mp4\">
                                </video>
                                <div class=\"content\">
                          </div>
                        </div>
                      </div>
                    </div>
                 </section>

                
            </div>
      
        
        
           
        ";
        } elseif (((        // line 565
(isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 565, $this->source); })()) >= 25) && ((isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 565, $this->source); })()) < 30))) {
            // line 566
            echo "        <div class=\"col-md-6\">
            <div class=\"card bg-warning text-dark\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Votre IMC est : ";
            // line 569
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 569, $this->source); })()), 3, ".", ""), "html", null, true);
            echo "</p>
                    <p>Poids idéal: ";
            // line 570
            echo twig_escape_filter($this->env, (isset($context["idealWeight"]) || array_key_exists("idealWeight", $context) ? $context["idealWeight"] : (function () { throw new RuntimeError('Variable "idealWeight" does not exist.', 570, $this->source); })()), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">Votre poids idéal se situe entre : ";
            // line 571
            echo twig_escape_filter($this->env, (isset($context["idealWeightMin"]) || array_key_exists("idealWeightMin", $context) ? $context["idealWeightMin"] : (function () { throw new RuntimeError('Variable "idealWeightMin" does not exist.', 571, $this->source); })()), "html", null, true);
            echo " kg et ";
            echo twig_escape_filter($this->env, (isset($context["idealWeightMax"]) || array_key_exists("idealWeightMax", $context) ? $context["idealWeightMax"] : (function () { throw new RuntimeError('Variable "idealWeightMax" does not exist.', 571, $this->source); })()), "html", null, true);
            echo " kg</p>
                    <p class=\"card-text\">Vous êtes en surpoids</p>
                    
                </div>
            </div>
          </div>
       
       </div>
       <div class=\"container py-5 h-100\" style=\"color: aqua;\" >
        <div class=\"row d-flex justify-content-center align-items-center h-100\"style=\"color: aqua;\" >
          <div class=\"col-md-12 col-xl-10\" style=\"color: aqua;\">
    
            <div class=\"card mask-custom\" style=\"color: aqua;\">
              <div class=\"card-body p-4 text-white\" style=\"color: aqua;\">
    
                <div class=\"text-center pt-3 pb-2\" style=\"color: aqua;\">
                  <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\"
                    alt=\"Check\" width=\"60\">
                  <h2 class=\"my-4\"  style=\"color: black;\">Task List</h2>
                </div>
    
                <table class=\"table text-white mb-0\" >
                  <thead>
                    <tr>
                      <th scope=\"col\">CHEK</th>
                      <th scope=\"col\">Task</th>
                      <th scope=\"col\">Priority</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class=\"fw-normal\">
                      <th>
                        <label for=\"alice-checkbox\">
                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                            alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                        </label>
                        <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                       
                    </th>
                    
                      <td class=\"align-middle\">
                        <span><span style=\"color: rgb(175, 12, 12);\"><strong>Planification de repas sains : </strong></span>Aidez-la à élaborer des menus équilibrés comprenant une variété d'aliments nutritifs tels que des fruits, des légumes, des protéines maigres et des grains entiers.</span>
                      </td>
                      <td class=\"align-middle\">
                        <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                      </td>

                    </tr>
                    <tr class=\"fw-normal\">
                      <th>
                        <label for=\"alice-checkbox\">
                          <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                          alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                      </label>
                      <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                      </th>
                      <td class=\"align-middle\"><span style=\"color: green;\"><strong>Éducation sur la nutrition :</strong></span> Fournissez des informations sur les principes de base de la nutrition, y compris la taille des portions, la lecture des étiquettes nutritionnelles et la reconnaissance des aliments sains.</td>
                      <td class=\"align-middle\">
                        <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                      </td>
                     
                    </tr>
                    <tr class=\"fw-normal\">
                      <th>
                        <label for=\"alice-checkbox\">
                          <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                          alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                      </label>
                      <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                      </th>
                      <td class=\"align-middle\"><span style=\"color: rgb(218, 215, 27);\"><strong>Éviter les régimes restrictifs :</strong></span> Mettez en garde contre les régimes draconiens qui pourraient compromettre la santé à long terme</td>
                      <td class=\"align-middle\">
                        <h6 class=\"mb-0\"><span class=\"badge bg-warning\">Middle priority</span></h6>
                      </td>
                     
                    </tr>
                   
                    <tr class=\"fw-normal\">
                      <th>
                        <label for=\"alice-checkbox\">
                          <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                          alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                      </label>
                      <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                      </th>
                      <td class=\" align-middle\"><span style=\"color: green;\"><strong>Pratique de la gestion du stress :</strong></span>Encouragez des techniques de gestion du stress telles que la méditation, la respiration profonde, le yoga ou la relaxation musculaire progressive.</td>
                      <td class=\" align-middle\">
                        <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                      </td>
                     
                    </tr>
                  </tbody>
                </table>
    
    
              </div>
            </div>
           
          </div>
        </div>
      </div>
      


      
  


   
      <div class=\"container\">
          <div class=\"row justify-content-center\">
              <div class=\"col-lg-7 text-center\">
                  <div class=\"section-title\">
                      <h2>Let Us Endeavor to Optimize Your Well-being !</h2>
                      <div class=\"divider mx-auto my-4\"></div>
                      <p>\"These tasks can help maintain a healthy body weight and promote better overall health. It's always important to adapt these suggestions according to the individual's needs and preferences.\"</p>
                  </div>
              </div>
          </div>


          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"card mb-4\">
                <div class=\"card-body\">
                  <p>Vidéo sur l'alimentation équilibrée :</p>
                  <li><img src=\"";
            // line 697
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
    
                  <div class=\"content\">
                    <h4 class=\"mt-4 mb-2 title-color\">choulder exercice</h4>
                    <p class=\"mb-4\">choulder exercice</p>
                  </div>
                </div>
              </div>
            </div>  
          
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"card mb-4\">
                <div class=\"card-body\">
                  <p>Vidéo sur l'alimentation équilibrée :</p>
                  <li><img src=\"";
            // line 711
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
    
                  <div class=\"content\">
                    <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                    <p class=\"mb-4\">kkkk</p>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"card mb-4\">
                <div class=\"card-body\">
                  <p>Vidéo sur l'alimentation équilibrée :</p>
                  <li><img src=\"";
            // line 724
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
    
                  <div class=\"content\">
                    <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                    <p class=\"mb-4\">kkkk</p>
                  </div>
                </div>
              </div>
            </div>
                             
            <div class=\"col-lg-3 col-md-10\">
              <div class=\"card mb-4\">
                <div class=\"card-body\">
                  <p>Vidéo sur l'alimentation équilibrée :</p>
                  <li><img src=\"";
            // line 738
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/images/logo.png"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
    
                  <div class=\"content\">
                    <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                    <p class=\"mb-4\">kkkk</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          


          <section>

            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-lg-12\">
                  <div class=\"feature-block d-lg-flex\">
                    
                    <div class=\"feature-item mb-5 mb-lg-0\">
                      <div class=\"feature-icon mb-4\">
                        <i class=\"icofont-support\"></i>
                      </div>
                      <div class=\"card mb-4\">
                        <div class=\"card-body\">
                          <p>Vidéo sur l'alimentation équilibrée :</p>
                          <video width=\"320\" height=\"240\" controls>
                            <source src=\"";
            // line 766
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/healthy_food_video.mp4"), "html", null, true);
            echo "\" type=\"video/mp4\">
                          </video>
                          <div class=\"content\">
                    </div>
                  </div>
                </div>
              </div>

                  
                    <div class=\"feature-item mb-5 mb-lg-0\">
                      <div class=\"feature-icon mb-4\">
                        <i class=\"icofont-support\"></i>
                      </div>
                      <div class=\"card mb-4\">
                        <div class=\"card-body\">
                          <p>Vidéo sur l'alimentation équilibrée :</p>
                          <video width=\"320\" height=\"240\" controls>
                            <source src=\"";
            // line 783
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/healthy_food_video.mp4"), "html", null, true);
            echo "\" type=\"video/mp4\">
                          </video>
                          <div class=\"content\">
                    </div>
                  </div>
                </div>
              </div>
           </section>

          
      </div>
           
        ";
        } else {
            // line 796
            echo "        <div class=\"col-md-6\">
          <div class=\"card bg-danger text-white\">
            <div class=\"card-body\">
              <p class=\"card-text\">Votre IMC est : ";
            // line 799
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["imc"]) || array_key_exists("imc", $context) ? $context["imc"] : (function () { throw new RuntimeError('Variable "imc" does not exist.', 799, $this->source); })()), 3, ".", ""), "html", null, true);
            echo "</p>
              <p>Poids idéal: ";
            // line 800
            echo twig_escape_filter($this->env, (isset($context["idealWeight"]) || array_key_exists("idealWeight", $context) ? $context["idealWeight"] : (function () { throw new RuntimeError('Variable "idealWeight" does not exist.', 800, $this->source); })()), "html", null, true);
            echo "</p>
              <p class=\"card-text\">Votre poids idéal se situe entre : ";
            // line 801
            echo twig_escape_filter($this->env, (isset($context["idealWeightMin"]) || array_key_exists("idealWeightMin", $context) ? $context["idealWeightMin"] : (function () { throw new RuntimeError('Variable "idealWeightMin" does not exist.', 801, $this->source); })()), "html", null, true);
            echo " kg et ";
            echo twig_escape_filter($this->env, (isset($context["idealWeightMax"]) || array_key_exists("idealWeightMax", $context) ? $context["idealWeightMax"] : (function () { throw new RuntimeError('Variable "idealWeightMax" does not exist.', 801, $this->source); })()), "html", null, true);
            echo " kg</p>
              <p class=\"card-text\">Vous êtes en obésité</p>
              
          </div>
          </div>
        </div>
     
     </div>
     <div class=\"container py-5 h-100\" style=\"color: aqua;\" >
      <div class=\"row d-flex justify-content-center align-items-center h-100\"style=\"color: aqua;\" >
        <div class=\"col-md-12 col-xl-10\" style=\"color: aqua;\">
  
          <div class=\"card mask-custom\" style=\"color: aqua;\">
            <div class=\"card-body p-4 text-white\" style=\"color: aqua;\">
  
              <div class=\"text-center pt-3 pb-2\" style=\"color: aqua;\">
                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\"
                  alt=\"Check\" width=\"60\">
                <h2 class=\"my-4\"  style=\"color: black;\">Task List</h2>
              </div>
  
              <table class=\"table text-white mb-0\" >
                <thead>
                  <tr>
                    <th scope=\"col\">CHEK</th>
                    <th scope=\"col\">Task</th>
                    <th scope=\"col\">Priority</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class=\"fw-normal\">
                    <th>
                      <label for=\"alice-checkbox\">
                          <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                          alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                      </label>
                      <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                     
                  </th>
                  
                    <td class=\"align-middle\">
                      <span><span style=\"color: rgb(175, 12, 12);\"><strong>Consultation médicale : </strong></span> Assurez-vous qu'elle consulte régulièrement un professionnel de la santé pour un suivi médical approprié et des conseils sur la gestion de son poids.</span>
                    </td>
                    <td class=\"align-middle\">
                      <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                    </td>

                  </tr>
                  <tr class=\"fw-normal\">
                    <th>
                      <label for=\"alice-checkbox\">
                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                        alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                    </label>
                    <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                    </th>
                    <td class=\"align-middle\"><span style=\"color: rgb(175, 12, 12);\"><strong>Plan de repas équilibrés :</strong></span>Aidez-la à élaborer des plans de repas équilibrés et nutritifs qui favorisent la perte de poids de manière saine et durable. Encouragez la consommation d'aliments riches en fibres, en protéines maigres et en légumes, et limitez les aliments transformés et riches en calories vides.</td>
                    <td class=\"align-middle\">
                      <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                    </td>
                   
                  </tr>
                  <tr class=\"fw-normal\">
                    <th>
                      <label for=\"alice-checkbox\">
                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                        alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                    </label>
                    <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                    </th>
                    <td class=\"align-middle\"><span style=\"color: rgb(218, 215, 27);\"><strong>Éviter les régimes restrictifs :</strong></span> Mettez en garde contre les régimes draconiens qui pourraient compromettre la santé à long terme</td>
                    <td class=\"align-middle\">
                      <h6 class=\"mb-0\"><span class=\"badge bg-warning\">Middle priority</span></h6>
                    </td>
                   
                  </tr>
                 
                  <tr class=\"fw-normal\">
                    <th>
                      <label for=\"alice-checkbox\">
                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                        alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                    </label>
                    <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                    </th>
                    <td class=\" align-middle\"><span style=\"color: green;\"><strong>Pratique de la gestion du stress :</strong></span>Encouragez des techniques de gestion du stress telles que la méditation, la respiration profonde, le yoga ou la relaxation musculaire progressive.</td>
                    <td class=\" align-middle\">
                      <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                    </td>
                   
                  </tr>
                </tbody>
              </table>
  
  
            </div>
          </div>
         
        </div>
      </div>
    </div>
    


    



 
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 text-center\">
                <div class=\"section-title\">
                    <h2>Let Us Endeavor to Optimize Your Well-being !</h2>
                    <div class=\"divider mx-auto my-4\"></div>
                    <p>\"These tasks can help maintain a healthy body weight and promote better overall health. It's always important to adapt these suggestions according to the individual's needs and preferences.\"</p>
                </div>
            </div>
        </div>


        <div class=\"row\">
        
        
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"card mb-4\">
              <div class=\"card-body\">
               
                <li><img src=\"";
            // line 929
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/imgimc/ob5.jpg"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\" class=\"img-fluid\" width=\"200\" height=\"200\"> </li>
  
              
              </div>
            </div>
          </div>
        

         
                           
          <div class=\"col-lg-3 col-md-10\">
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                   
                    <li>
                        <img class=\"card-img\" src=\"";
            // line 944
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/imgimc/ob1.jpg"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\">
                    </li>
        
                   
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-10\">
          <div class=\"card mb-4\">
              <div class=\"card-body\">
                 
                  <li>
                      <img class=\"card-img\" src=\"";
            // line 956
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/imgimc/ob2.jpg"), "html", null, true);
            echo "\" alt=\"Alimentation équilibrée\">
                  </li>
      
              </div>
          </div>
      </div>
        
        


        <section>

          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <div class=\"feature-block d-lg-flex\">
                  
                  <div class=\"feature-item mb-5 mb-lg-0\">
                   
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p> obesity the little thing : </p>
                        <video width=\"320\" height=\"240\" controls>
                          <source src=\"";
            // line 979
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/v2.mp4"), "html", null, true);
            echo "\" type=\"video/mp4\">
                        </video>
                        <div class=\"content\">
                  </div>
                </div>
              </div>
            </div>

                
                  <div class=\"feature-item mb-5 mb-lg-0\">
                   
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p> A healthy Diet ,a Healthier World :</p>
                        <video width=\"320\" height=\"240\" controls>
                          <source src=\"";
            // line 994
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/v1.mp4"), "html", null, true);
            echo "\" type=\"video/mp4\">
                        </video>
                        <div class=\"content\">
                  </div>
                </div>
              </div>
            </div>
         </section>

        
    </div>
        ";
        }
        // line 1006
        echo "   
    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "imc/resultat.html.twig";
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
        return array (  1214 => 1006,  1199 => 994,  1181 => 979,  1155 => 956,  1140 => 944,  1122 => 929,  989 => 801,  985 => 800,  981 => 799,  976 => 796,  960 => 783,  940 => 766,  909 => 738,  892 => 724,  876 => 711,  859 => 697,  728 => 571,  724 => 570,  720 => 569,  715 => 566,  713 => 565,  695 => 550,  675 => 533,  644 => 505,  627 => 491,  611 => 478,  594 => 464,  460 => 335,  456 => 334,  452 => 333,  447 => 330,  445 => 329,  428 => 315,  408 => 298,  377 => 270,  360 => 256,  344 => 243,  327 => 229,  177 => 84,  173 => 83,  169 => 82,  164 => 79,  162 => 78,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Résultat de l'IMC{% endblock %}

{% block body %}
<style>
    /* CSS code to change color of <th> element to black */
    th {
        color: black;
    }
    td {
        color: black;
    }

  .card {
      transition: transform 0.5s, box-shadow 0.5s, background-color 0.5s;
      border-radius: 15px;
      overflow: hidden;
  }
  .card:hover {
      transform: scale(1.05) rotate(3deg);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
      background-color: #f8f9fa; /* Change to your desired hover color */
  }
  .card-img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      transition: transform 0.5s;
  }
  .card:hover .card-img {
      transform: scale(1.1);
  }
  .card-body {
      padding: 20px;
  }
  .card-title {
      font-size: 18px;
      font-weight: bold;
      margin: 0;
      color: #032c57; /* Initial color */
      transition: color 0.3s; /* Add transition effect for color change */
  }
  .card:hover .card-title {
      color: #dc1853; /* Change color on hover */
  }
  .show-more-link {
      text-decoration: none;
      color: #007bff; /* Change to your desired link color */
      transition: color 0.3s;
  }
  .show-more-link:hover {
      color: #0056b3; /* Change to your desired link hover color */
  }
  .card:hover {
    transform: scale(1.1); /* Augmentez la valeur de l'échelle pour un zoom plus important */
    transition: transform 0.5s; /* Ajoutez une transition pour une animation fluide */
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
    background-color: #f8f9fa; /* Changez en votre couleur de survol souhaitée */
}
.card-img {
    width: 100%;
    height: 200px; /* Changez cette valeur selon vos besoins */
    object-fit: cover;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    transition: transform 0.5s;
}

</style>



    <h1 class=\"text-center mb-4\">Résultat de l'IMC</h1>
    <div class=\"row justify-content-center\">
            {% if imc < 18.5 %}
            <div class=\"col-md-6\">
                <div class=\"card bg-danger text-white\">
                    <div class=\"card-body\">
                        <p class=\"card-text\">Votre IMC est : {{ imc|number_format(3, '.', '') }}</p>
                        <p>Poids idéal: {{ idealWeight }}</p>
                        <p class=\"card-text\">Votre poids idéal se situe entre : {{ idealWeightMin }} kg et {{ idealWeightMax }} kg</p>
                        <p class=\"card-text\">Vous êtes en insuffisance pondérale</p>
                       
                    </div>
                </div>
              </div>
           
    
              
        </div>
        <div class=\"container py-5 h-100\" style=\"color: aqua;\" >
          <div class=\"row d-flex justify-content-center align-items-center h-100\"style=\"color: aqua;\" >
            <div class=\"col-md-12 col-xl-10\" style=\"color: aqua;\">
      
              <div class=\"card mask-custom\" style=\"color: aqua;\">
                <div class=\"card-body p-4 text-white\" style=\"color: aqua;\">
      
                  <div class=\"text-center pt-3 pb-2\" style=\"color: aqua;\">
                    <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\"
                      alt=\"Check\" width=\"60\">
                    <h2 class=\"my-4\"  style=\"color: black;\">Task List</h2>
                  </div>
      
                  <table class=\"table text-white mb-0\" >
                    <thead>
                      <tr>
                        <th scope=\"col\">CHEK</th>
                        <th scope=\"col\">Task</th>
                        <th scope=\"col\">Priority</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class=\"fw-normal\">
                        <th>
                          <label for=\"alice-checkbox\">
                              <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                              alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                          </label>
                          <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                         
                      </th>
                      
                        <td class=\"align-middle\">
                          <span><span style=\"color: rgb(175, 12, 12);\"><strong>Consultation médicale :</strong></span>Assurez-vous qu'elle consulte régulièrement un professionnel de la santé pour un suivi médical approprié et pour évaluer les causes sous-jacentes de son faible poids.</span>
                        </td>
                        <td class=\"align-middle\">
                          <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                        </td>

                      </tr>
                      <tr class=\"fw-normal\">
                        <th>
                          <label for=\"alice-checkbox\">
                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                            alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                        </label>
                        <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                        </th>
                        <td class=\"align-middle\"><span style=\"color: green;\"><strong>Entraînement en force : </strong></span>Encouragez-la à pratiquer des exercices de renforcement musculaire pour développer sa masse musculaire et améliorer sa force. Cela peut inclure des exercices avec des poids libres, des bandes de résistance ou des exercices au poids du corps.</td>
                        <td class=\"align-middle\">
                          <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                        </td>
                       
                      </tr>
                      <tr class=\"fw-normal\">
                        <th>
                          <label for=\"alice-checkbox\">
                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                            alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                        </label>
                        <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                        </th>
                        <td class=\"align-middle\"><span style=\"color: rgb(218, 215, 27);\"><strong>Suivi de la progression : </strong></span>Aidez-la à suivre sa progression en termes de gain de poids, de force musculaire et de bien-être général. Cela peut l'aider à rester motivée et à ajuster ses efforts si nécessaire.</td>
                        <td class=\"align-middle\">
                          <h6 class=\"mb-0\"><span class=\"badge bg-warning\">Middle priority</span></h6>
                        </td>
                       
                      </tr>
                     
                      <tr class=\"fw-normal\">
                        <th>
                          <label for=\"alice-checkbox\">
                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                            alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                        </label>
                        <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                        </th>
                        <td class=\" align-middle\"><span style=\"color: rgb(175, 12, 12);\"><strong>Planification de repas nutritifs :</strong></span> Aidez-la à élaborer des plans de repas riches en calories et en nutriments pour favoriser une prise de poids saine. Encouragez l'inclusion d'aliments riches en protéines, en matières grasses saines et en glucides complexes.</td>
                        <td class=\" align-middle\">
                          <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                        </td>
                       
                      </tr>


                      <tr class=\"fw-normal\">
                        <th>
                          <label for=\"alice-checkbox\">
                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                            alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                        </label>
                        <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                        </th>
                        <td class=\" align-middle\"><span style=\"color: rgb(175, 12, 12);\"><strong>Suivi médical régulier : </strong></span> Assurez-vous qu'elle continue de consulter régulièrement un professionnel de la santé pour surveiller sa santé et son poids, et pour ajuster son plan de prise de poids si nécessaire.</td>
                        <td class=\" align-middle\">
                          <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                        </td>
                       
                      </tr>

                    </tbody>
                  </table>
      
      
                </div>
              </div>
             
            </div>
          </div>
        </div>
        


        
    


     
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-7 text-center\">
                    <div class=\"section-title\">
                        <h2>Let Us Endeavor to Optimize Your Well-being !</h2>
                        <div class=\"divider mx-auto my-4\"></div>
                        <p>\"These tasks can help maintain a healthy body weight and promote better overall health. It's always important to adapt these suggestions according to the individual's needs and preferences.\"</p>
                    </div>
                </div>
            </div>


            <div class=\"row\">
              <div class=\"col-lg-3 col-md-6\">
                <div class=\"card mb-4\">
                  <div class=\"card-body\">
                    <p>Vidéo sur l'alimentation équilibrée :</p>
                    <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
      
                    <div class=\"content\">
                      <h4 class=\"mt-4 mb-2 title-color\">choulder exercice</h4>
                      <p class=\"mb-4\">choulder exercice</p>
                    </div>
                  </div>
                </div>
              </div>  
            
              <div class=\"col-lg-3 col-md-6\">
                <div class=\"card mb-4\">
                  <div class=\"card-body\">
                    <p>Vidéo sur l'alimentation équilibrée :</p>
                    <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
      
                    <div class=\"content\">
                      <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                      <p class=\"mb-4\">kkkk</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-3 col-md-6\">
                <div class=\"card mb-4\">
                  <div class=\"card-body\">
                    <p>Vidéo sur l'alimentation équilibrée :</p>
                    <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
      
                    <div class=\"content\">
                      <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                      <p class=\"mb-4\">kkkk</p>
                    </div>
                  </div>
                </div>
              </div>
                               
              <div class=\"col-lg-3 col-md-10\">
                <div class=\"card mb-4\">
                  <div class=\"card-body\">
                    <p>Vidéo sur l'alimentation équilibrée :</p>
                    <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
      
                    <div class=\"content\">
                      <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                      <p class=\"mb-4\">kkkk</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            


            <section>

              <div class=\"container\">
                <div class=\"row\">
                  <div class=\"col-lg-12\">
                    <div class=\"feature-block d-lg-flex\">
                      
                      <div class=\"feature-item mb-5 mb-lg-0\">
                        <div class=\"feature-icon mb-4\">
                          <i class=\"icofont-support\"></i>
                        </div>
                        <div class=\"card mb-4\">
                          <div class=\"card-body\">
                            <p>Vidéo sur l'alimentation équilibrée :</p>
                            <video width=\"320\" height=\"240\" controls>
                              <source src=\"{{ asset('videos/healthy_food_video.mp4') }}\" type=\"video/mp4\">
                            </video>
                            <div class=\"content\">
                      </div>
                    </div>
                  </div>
                </div>

                    
                      <div class=\"feature-item mb-5 mb-lg-0\">
                        <div class=\"feature-icon mb-4\">
                          <i class=\"icofont-support\"></i>
                        </div>
                        <div class=\"card mb-4\">
                          <div class=\"card-body\">
                            <p>Vidéo sur l'alimentation équilibrée :</p>
                            <video width=\"320\" height=\"240\" controls>
                              <source src=\"{{ asset('videos/healthy_food_video.mp4') }}\" type=\"video/mp4\">
                            </video>
                            <div class=\"content\">
                      </div>
                    </div>
                  </div>
                </div>
             </section>

            
        </div>
          


        {% elseif imc >= 18.5 and imc < 25 %}
        <div class=\"col-md-6\">
            <div class=\"card bg-success text-white\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Votre IMC est : {{ imc|number_format(3, '.', '') }}</p>
                    <p>Poids idéal: {{ idealWeight }}</p>
                    <p class=\"card-text\">Votre poids idéal se situe entre : {{ idealWeightMin }} kg et {{ idealWeightMax }} kg</p>
                    <p class=\"card-text\">Votre poids est normal</p>
                    
                </div>
            </div>
          </div>
       

         
    </div>
        
            <div class=\"container py-5 h-100\" style=\"color: aqua;\" >
              <div class=\"row d-flex justify-content-center align-items-center h-100\"style=\"color: aqua;\" >
                <div class=\"col-md-12 col-xl-10\" style=\"color: aqua;\">
          
                  <div class=\"card mask-custom\" style=\"color: aqua;\">
                    <div class=\"card-body p-4 text-white\" style=\"color: aqua;\">
          
                      <div class=\"text-center pt-3 pb-2\" style=\"color: aqua;\">
                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\"
                          alt=\"Check\" width=\"60\">
                        <h2 class=\"my-4\"  style=\"color: black;\">Task List</h2>
                      </div>
          
                      <table class=\"table text-white mb-0\" >
                        <thead>
                          <tr>
                            <th scope=\"col\">CHEK</th>
                            <th scope=\"col\">Task</th>
                            <th scope=\"col\">Priority</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class=\"fw-normal\">
                            <th>
                              <label for=\"alice-checkbox\">
                                  <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                                  alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                              </label>
                              <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                             
                          </th>
                          
                            <td class=\"align-middle\">
                              <span><span style=\"color: rgb(175, 12, 12);\"><strong>Planification de repas sains : </strong></span>Aidez-la à élaborer des menus équilibrés comprenant une variété d'aliments nutritifs tels que des fruits, des légumes, des protéines maigres et des grains entiers.</span>
                            </td>
                            <td class=\"align-middle\">
                              <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                            </td>

                          </tr>
                          <tr class=\"fw-normal\">
                            <th>
                              <label for=\"alice-checkbox\">
                                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                                alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                            </label>
                            <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                            </th>
                            <td class=\"align-middle\"><span style=\"color: green;\"><strong>Éducation sur la nutrition :</strong></span> Fournissez des informations sur les principes de base de la nutrition, y compris la taille des portions, la lecture des étiquettes nutritionnelles et la reconnaissance des aliments sains.</td>
                            <td class=\"align-middle\">
                              <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                            </td>
                           
                          </tr>
                          <tr class=\"fw-normal\">
                            <th>
                              <label for=\"alice-checkbox\">
                                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                                alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                            </label>
                            <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                            </th>
                            <td class=\"align-middle\"><span style=\"color: rgb(218, 215, 27);\"><strong>Éviter les régimes restrictifs :</strong></span> Mettez en garde contre les régimes draconiens qui pourraient compromettre la santé à long terme</td>
                            <td class=\"align-middle\">
                              <h6 class=\"mb-0\"><span class=\"badge bg-warning\">Middle priority</span></h6>
                            </td>
                           
                          </tr>
                         
                          <tr class=\"fw-normal\">
                            <th>
                              <label for=\"alice-checkbox\">
                                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                                alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                            </label>
                            <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                            </th>
                            <td class=\" align-middle\"><span style=\"color: green;\"><strong>Pratique de la gestion du stress :</strong></span>Encouragez des techniques de gestion du stress telles que la méditation, la respiration profonde, le yoga ou la relaxation musculaire progressive.</td>
                            <td class=\" align-middle\">
                              <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                            </td>
                           
                          </tr>
                        </tbody>
                      </table>
          
          
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            


            
        


         
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-7 text-center\">
                        <div class=\"section-title\">
                            <h2>Let Us Endeavor to Optimize Your Well-being !</h2>
                            <div class=\"divider mx-auto my-4\"></div>
                            <p>\"These tasks can help maintain a healthy body weight and promote better overall health. It's always important to adapt these suggestions according to the individual's needs and preferences.\"</p>
                        </div>
                    </div>
                </div>


                <div class=\"row\">
                  <div class=\"col-lg-3 col-md-6\">
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p>Vidéo sur l'alimentation équilibrée :</p>
                        <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
          
                        <div class=\"content\">
                          <h4 class=\"mt-4 mb-2 title-color\">choulder exercice</h4>
                          <p class=\"mb-4\">choulder exercice</p>
                        </div>
                      </div>
                    </div>
                  </div>  
                
                  <div class=\"col-lg-3 col-md-6\">
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p>Vidéo sur l'alimentation équilibrée :</p>
                        <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
          
                        <div class=\"content\">
                          <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                          <p class=\"mb-4\">kkkk</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-md-6\">
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p>Vidéo sur l'alimentation équilibrée :</p>
                        <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
          
                        <div class=\"content\">
                          <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                          <p class=\"mb-4\">kkkk</p>
                        </div>
                      </div>
                    </div>
                  </div>
                                   
                  <div class=\"col-lg-3 col-md-10\">
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p>Vidéo sur l'alimentation équilibrée :</p>
                        <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
          
                        <div class=\"content\">
                          <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                          <p class=\"mb-4\">kkkk</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                


                <section>

                  <div class=\"container\">
                    <div class=\"row\">
                      <div class=\"col-lg-12\">
                        <div class=\"feature-block d-lg-flex\">
                          
                          <div class=\"feature-item mb-5 mb-lg-0\">
                            <div class=\"feature-icon mb-4\">
                              <i class=\"icofont-support\"></i>
                            </div>
                            <div class=\"card mb-4\">
                              <div class=\"card-body\">
                                <p>Vidéo sur l'alimentation équilibrée :</p>
                                <video width=\"320\" height=\"240\" controls>
                                  <source src=\"{{ asset('videos/healthy_food_video.mp4') }}\" type=\"video/mp4\">
                                </video>
                                <div class=\"content\">
                          </div>
                        </div>
                      </div>
                    </div>
  
                        
                          <div class=\"feature-item mb-5 mb-lg-0\">
                            <div class=\"feature-icon mb-4\">
                              <i class=\"icofont-support\"></i>
                            </div>
                            <div class=\"card mb-4\">
                              <div class=\"card-body\">
                                <p>Vidéo sur l'alimentation équilibrée :</p>
                                <video width=\"320\" height=\"240\" controls>
                                  <source src=\"{{ asset('videos/healthy_food_video.mp4') }}\" type=\"video/mp4\">
                                </video>
                                <div class=\"content\">
                          </div>
                        </div>
                      </div>
                    </div>
                 </section>

                
            </div>
      
        
        
           
        {% elseif imc >= 25 and imc < 30 %}
        <div class=\"col-md-6\">
            <div class=\"card bg-warning text-dark\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Votre IMC est : {{ imc|number_format(3, '.', '') }}</p>
                    <p>Poids idéal: {{ idealWeight }}</p>
                    <p class=\"card-text\">Votre poids idéal se situe entre : {{ idealWeightMin }} kg et {{ idealWeightMax }} kg</p>
                    <p class=\"card-text\">Vous êtes en surpoids</p>
                    
                </div>
            </div>
          </div>
       
       </div>
       <div class=\"container py-5 h-100\" style=\"color: aqua;\" >
        <div class=\"row d-flex justify-content-center align-items-center h-100\"style=\"color: aqua;\" >
          <div class=\"col-md-12 col-xl-10\" style=\"color: aqua;\">
    
            <div class=\"card mask-custom\" style=\"color: aqua;\">
              <div class=\"card-body p-4 text-white\" style=\"color: aqua;\">
    
                <div class=\"text-center pt-3 pb-2\" style=\"color: aqua;\">
                  <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\"
                    alt=\"Check\" width=\"60\">
                  <h2 class=\"my-4\"  style=\"color: black;\">Task List</h2>
                </div>
    
                <table class=\"table text-white mb-0\" >
                  <thead>
                    <tr>
                      <th scope=\"col\">CHEK</th>
                      <th scope=\"col\">Task</th>
                      <th scope=\"col\">Priority</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class=\"fw-normal\">
                      <th>
                        <label for=\"alice-checkbox\">
                            <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                            alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                        </label>
                        <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                       
                    </th>
                    
                      <td class=\"align-middle\">
                        <span><span style=\"color: rgb(175, 12, 12);\"><strong>Planification de repas sains : </strong></span>Aidez-la à élaborer des menus équilibrés comprenant une variété d'aliments nutritifs tels que des fruits, des légumes, des protéines maigres et des grains entiers.</span>
                      </td>
                      <td class=\"align-middle\">
                        <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                      </td>

                    </tr>
                    <tr class=\"fw-normal\">
                      <th>
                        <label for=\"alice-checkbox\">
                          <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                          alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                      </label>
                      <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                      </th>
                      <td class=\"align-middle\"><span style=\"color: green;\"><strong>Éducation sur la nutrition :</strong></span> Fournissez des informations sur les principes de base de la nutrition, y compris la taille des portions, la lecture des étiquettes nutritionnelles et la reconnaissance des aliments sains.</td>
                      <td class=\"align-middle\">
                        <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                      </td>
                     
                    </tr>
                    <tr class=\"fw-normal\">
                      <th>
                        <label for=\"alice-checkbox\">
                          <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                          alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                      </label>
                      <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                      </th>
                      <td class=\"align-middle\"><span style=\"color: rgb(218, 215, 27);\"><strong>Éviter les régimes restrictifs :</strong></span> Mettez en garde contre les régimes draconiens qui pourraient compromettre la santé à long terme</td>
                      <td class=\"align-middle\">
                        <h6 class=\"mb-0\"><span class=\"badge bg-warning\">Middle priority</span></h6>
                      </td>
                     
                    </tr>
                   
                    <tr class=\"fw-normal\">
                      <th>
                        <label for=\"alice-checkbox\">
                          <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                          alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                      </label>
                      <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                      </th>
                      <td class=\" align-middle\"><span style=\"color: green;\"><strong>Pratique de la gestion du stress :</strong></span>Encouragez des techniques de gestion du stress telles que la méditation, la respiration profonde, le yoga ou la relaxation musculaire progressive.</td>
                      <td class=\" align-middle\">
                        <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                      </td>
                     
                    </tr>
                  </tbody>
                </table>
    
    
              </div>
            </div>
           
          </div>
        </div>
      </div>
      


      
  


   
      <div class=\"container\">
          <div class=\"row justify-content-center\">
              <div class=\"col-lg-7 text-center\">
                  <div class=\"section-title\">
                      <h2>Let Us Endeavor to Optimize Your Well-being !</h2>
                      <div class=\"divider mx-auto my-4\"></div>
                      <p>\"These tasks can help maintain a healthy body weight and promote better overall health. It's always important to adapt these suggestions according to the individual's needs and preferences.\"</p>
                  </div>
              </div>
          </div>


          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"card mb-4\">
                <div class=\"card-body\">
                  <p>Vidéo sur l'alimentation équilibrée :</p>
                  <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
    
                  <div class=\"content\">
                    <h4 class=\"mt-4 mb-2 title-color\">choulder exercice</h4>
                    <p class=\"mb-4\">choulder exercice</p>
                  </div>
                </div>
              </div>
            </div>  
          
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"card mb-4\">
                <div class=\"card-body\">
                  <p>Vidéo sur l'alimentation équilibrée :</p>
                  <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
    
                  <div class=\"content\">
                    <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                    <p class=\"mb-4\">kkkk</p>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"card mb-4\">
                <div class=\"card-body\">
                  <p>Vidéo sur l'alimentation équilibrée :</p>
                  <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
    
                  <div class=\"content\">
                    <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                    <p class=\"mb-4\">kkkk</p>
                  </div>
                </div>
              </div>
            </div>
                             
            <div class=\"col-lg-3 col-md-10\">
              <div class=\"card mb-4\">
                <div class=\"card-body\">
                  <p>Vidéo sur l'alimentation équilibrée :</p>
                  <li><img src=\"{{ asset('assets2/images/logo.png') }}\" alt=\"Alimentation équilibrée\"> Manger des repas équilibrés et nutritifs</li>
    
                  <div class=\"content\">
                    <h4 class=\"mt-4 mb-2 title-color\">vvv</h4>
                    <p class=\"mb-4\">kkkk</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          


          <section>

            <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-lg-12\">
                  <div class=\"feature-block d-lg-flex\">
                    
                    <div class=\"feature-item mb-5 mb-lg-0\">
                      <div class=\"feature-icon mb-4\">
                        <i class=\"icofont-support\"></i>
                      </div>
                      <div class=\"card mb-4\">
                        <div class=\"card-body\">
                          <p>Vidéo sur l'alimentation équilibrée :</p>
                          <video width=\"320\" height=\"240\" controls>
                            <source src=\"{{ asset('videos/healthy_food_video.mp4') }}\" type=\"video/mp4\">
                          </video>
                          <div class=\"content\">
                    </div>
                  </div>
                </div>
              </div>

                  
                    <div class=\"feature-item mb-5 mb-lg-0\">
                      <div class=\"feature-icon mb-4\">
                        <i class=\"icofont-support\"></i>
                      </div>
                      <div class=\"card mb-4\">
                        <div class=\"card-body\">
                          <p>Vidéo sur l'alimentation équilibrée :</p>
                          <video width=\"320\" height=\"240\" controls>
                            <source src=\"{{ asset('videos/healthy_food_video.mp4') }}\" type=\"video/mp4\">
                          </video>
                          <div class=\"content\">
                    </div>
                  </div>
                </div>
              </div>
           </section>

          
      </div>
           
        {% else %}
        <div class=\"col-md-6\">
          <div class=\"card bg-danger text-white\">
            <div class=\"card-body\">
              <p class=\"card-text\">Votre IMC est : {{ imc|number_format(3, '.', '') }}</p>
              <p>Poids idéal: {{ idealWeight }}</p>
              <p class=\"card-text\">Votre poids idéal se situe entre : {{ idealWeightMin }} kg et {{ idealWeightMax }} kg</p>
              <p class=\"card-text\">Vous êtes en obésité</p>
              
          </div>
          </div>
        </div>
     
     </div>
     <div class=\"container py-5 h-100\" style=\"color: aqua;\" >
      <div class=\"row d-flex justify-content-center align-items-center h-100\"style=\"color: aqua;\" >
        <div class=\"col-md-12 col-xl-10\" style=\"color: aqua;\">
  
          <div class=\"card mask-custom\" style=\"color: aqua;\">
            <div class=\"card-body p-4 text-white\" style=\"color: aqua;\">
  
              <div class=\"text-center pt-3 pb-2\" style=\"color: aqua;\">
                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\"
                  alt=\"Check\" width=\"60\">
                <h2 class=\"my-4\"  style=\"color: black;\">Task List</h2>
              </div>
  
              <table class=\"table text-white mb-0\" >
                <thead>
                  <tr>
                    <th scope=\"col\">CHEK</th>
                    <th scope=\"col\">Task</th>
                    <th scope=\"col\">Priority</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class=\"fw-normal\">
                    <th>
                      <label for=\"alice-checkbox\">
                          <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                          alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                      </label>
                      <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                     
                  </th>
                  
                    <td class=\"align-middle\">
                      <span><span style=\"color: rgb(175, 12, 12);\"><strong>Consultation médicale : </strong></span> Assurez-vous qu'elle consulte régulièrement un professionnel de la santé pour un suivi médical approprié et des conseils sur la gestion de son poids.</span>
                    </td>
                    <td class=\"align-middle\">
                      <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                    </td>

                  </tr>
                  <tr class=\"fw-normal\">
                    <th>
                      <label for=\"alice-checkbox\">
                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                        alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                    </label>
                    <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                    </th>
                    <td class=\"align-middle\"><span style=\"color: rgb(175, 12, 12);\"><strong>Plan de repas équilibrés :</strong></span>Aidez-la à élaborer des plans de repas équilibrés et nutritifs qui favorisent la perte de poids de manière saine et durable. Encouragez la consommation d'aliments riches en fibres, en protéines maigres et en légumes, et limitez les aliments transformés et riches en calories vides.</td>
                    <td class=\"align-middle\">
                      <h6 class=\"mb-0\"><span class=\"badge bg-danger\">High priority</span></h6>
                    </td>
                   
                  </tr>
                  <tr class=\"fw-normal\">
                    <th>
                      <label for=\"alice-checkbox\">
                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                        alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                    </label>
                    <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                    </th>
                    <td class=\"align-middle\"><span style=\"color: rgb(218, 215, 27);\"><strong>Éviter les régimes restrictifs :</strong></span> Mettez en garde contre les régimes draconiens qui pourraient compromettre la santé à long terme</td>
                    <td class=\"align-middle\">
                      <h6 class=\"mb-0\"><span class=\"badge bg-warning\">Middle priority</span></h6>
                    </td>
                   
                  </tr>
                 
                  <tr class=\"fw-normal\">
                    <th>
                      <label for=\"alice-checkbox\">
                        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp\" alt=\"checkbox\"
                        alt=\"avatar 1\" style=\"width: 45px; height: auto;\">
                    </label>
                    <input type=\"checkbox\" id=\"alice-checkbox\" style=\"display: none;\">
                    </th>
                    <td class=\" align-middle\"><span style=\"color: green;\"><strong>Pratique de la gestion du stress :</strong></span>Encouragez des techniques de gestion du stress telles que la méditation, la respiration profonde, le yoga ou la relaxation musculaire progressive.</td>
                    <td class=\" align-middle\">
                      <h6 class=\"mb-0\"><span class=\"badge bg-success\">Low priority</span></h6>
                    </td>
                   
                  </tr>
                </tbody>
              </table>
  
  
            </div>
          </div>
         
        </div>
      </div>
    </div>
    


    



 
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7 text-center\">
                <div class=\"section-title\">
                    <h2>Let Us Endeavor to Optimize Your Well-being !</h2>
                    <div class=\"divider mx-auto my-4\"></div>
                    <p>\"These tasks can help maintain a healthy body weight and promote better overall health. It's always important to adapt these suggestions according to the individual's needs and preferences.\"</p>
                </div>
            </div>
        </div>


        <div class=\"row\">
        
        
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"card mb-4\">
              <div class=\"card-body\">
               
                <li><img src=\"{{ asset('assets2/imgimc/ob5.jpg' ) }}\" alt=\"Alimentation équilibrée\" class=\"img-fluid\" width=\"200\" height=\"200\"> </li>
  
              
              </div>
            </div>
          </div>
        

         
                           
          <div class=\"col-lg-3 col-md-10\">
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                   
                    <li>
                        <img class=\"card-img\" src=\"{{ asset('assets2/imgimc/ob1.jpg') }}\" alt=\"Alimentation équilibrée\">
                    </li>
        
                   
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-10\">
          <div class=\"card mb-4\">
              <div class=\"card-body\">
                 
                  <li>
                      <img class=\"card-img\" src=\"{{ asset('assets2/imgimc/ob2.jpg') }}\" alt=\"Alimentation équilibrée\">
                  </li>
      
              </div>
          </div>
      </div>
        
        


        <section>

          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <div class=\"feature-block d-lg-flex\">
                  
                  <div class=\"feature-item mb-5 mb-lg-0\">
                   
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p> obesity the little thing : </p>
                        <video width=\"320\" height=\"240\" controls>
                          <source src=\"{{ asset('videos/v2.mp4') }}\" type=\"video/mp4\">
                        </video>
                        <div class=\"content\">
                  </div>
                </div>
              </div>
            </div>

                
                  <div class=\"feature-item mb-5 mb-lg-0\">
                   
                    <div class=\"card mb-4\">
                      <div class=\"card-body\">
                        <p> A healthy Diet ,a Healthier World :</p>
                        <video width=\"320\" height=\"240\" controls>
                          <source src=\"{{ asset('videos/v1.mp4') }}\" type=\"video/mp4\">
                        </video>
                        <div class=\"content\">
                  </div>
                </div>
              </div>
            </div>
         </section>

        
    </div>
        {% endif %}
   
    

{% endblock %}
", "imc/resultat.html.twig", "C:\\Users\\rayen\\Documents\\GitHub\\pi3\\TEAM_XL_projetPI_3A54\\templates\\imc\\resultat.html.twig");
    }
}
