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

/* espace/calendrier.html.twig */
class __TwigTemplate_c8fa05ec44540a782e8ff2d1d54048ceeb4fa3d69157aa92099db879e9abbbf7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "espace/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/calendrier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/calendrier.html.twig"));

        // line 2
        $context["title"] = "Le calendrier";
        // line 1
        $this->parent = $this->loadTemplate("espace/base.html.twig", "espace/calendrier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <style>
            .h-title h1 {
                font-size: 30px;
                font-weight: 600;
                margin: 0;
            }
            .title-card h1 {
                font-size: 35px;
                margin: 0;
            }
            .title-card h2 {
                font-size: 84px;
                margin: 0;
                font-weight: 600;
            }
            .title-card h3 {
                font-size: 19px;
                margin: 0;
            }
            .calendar {
                border: 5px solid #00BFB4;
                border-radius: 5px;
                background-color: #E7EDF3;
                width: 300px
            }
            .js-flickity .calendar {
                 border-color: #C4C4C4;
                 background-color: #E5E5E5
            }
            .content-event h1, .event-detail h1 {
                font-size: 15px
            }
            .content-event h2 {
                font-size: 12px
            }
            .modalBody {
                background: #fff;
                border: 5px solid #00BFB4;
                border-radius: 5px;
                background-color: #E7EDF3;
            }
            .modal-dialog {
                max-width: 100%
            }
            .blk_1 {
                border-right: 3px dotted #ddd
            }
            .min-caption {
                height: 60px;
                width: 60px;
                overflow: hidden;
                border-radius: 50%
            }
            .min-caption img {
                width: 100%
            }
            .modal-dialog {
                pointer-events: initial;
            }
            .row-participants {
                overflow-y: auto;
                height: 390px;
            }
            .row-participants::-webkit-scrollbar-thumb, .row-participants::-webkit-scrollbar-thumb {
                background-color: #17e2c7;
                background-image: -webkit-linear-gradient(90deg, #f4fffe 0%, #00bfa630 25%, #53c0b5 100%, #a4f7ec85 75%, #c0ece8);
            }
            .row-participants::-webkit-scrollbar-thumb, .row-participants::-webkit-scrollbar-thumb {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.6);
                background-color: #CCCCCC;
            }
            .row-participants::-webkit-scrollbar, .row-participants::-webkit-scrollbar {
                width: 3px;
                background-color: #F5F5F5;
            }
            .row-participants a {
                color: inherit
            }
              .row-participants a:hover {
                  text-decoration: none;
                  color: #007bff;
              }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 89
        echo "
    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("header"));
        echo "

<section class=\"mb-5\">
        <div class=\"container mt-0\">
                <div class=\"row my-4\">
                    <div class=\"col-md-12 mt-3 h-title\">
                        <h1> Événements à venir </h1>
                    </div>
                    ";
        // line 101
        echo "                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-md-4\">
                        <div class=\"calendar wow fadeInDown\">
                                <div class=\"body-calendar px-3\">
                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                        <div class=\"d-grid title-card\">
                                            <h1 class=\"text-center\"> Mercredi</h1>
                                            <h2 class=\"text-center\"> 10 </h2>
                                            <h3 class=\"text-center\"> Novembre </h3>
                                        </div>
                                    </div>
                                    <div class=\"py-3\">
                                        <div class=\"text-center\">*********************************</div>
                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                <div class=\"d-grid content-event text-center\">
                                                    <h1 >[Nom d’événement]</h1>
                                                    <h2> 8h30-20h30 </h2>
                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                    </p>
                                                </div>
                                            </div>
                                        <div class=\"text-center\">*********************************</div>
                                    </div>
                                    <div class=\"event-detail pb-3\">
                                        <h1> [Type d’événement] </h1>
                                        <p style=\"font-size: 13px;\">
                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                        </p>
                                        <button type=\"button\" class=\"btn btnDanger filter w-100 launchmodal\" style=\"text-transform: inherit;\"> Je viens ? </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"calendar wow fadeInDown\">
                                <div class=\"body-calendar px-3\">
                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                        <div class=\"d-grid title-card\">
                                            <h1 class=\"text-center\"> Mercredi</h1>
                                            <h2 class=\"text-center\"> 10 </h2>
                                            <h3 class=\"text-center\"> Novembre </h3>
                                        </div>
                                    </div>
                                    <div class=\"py-3\">
                                        <div class=\"text-center\">*********************************</div>
                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                <div class=\"d-grid content-event text-center\">
                                                    <h1 >[Nom d’événement]</h1>
                                                    <h2> 8h30-20h30 </h2>
                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                    </p>
                                                </div>
                                            </div>
                                        <div class=\"text-center\">*********************************</div>
                                    </div>
                                    <div class=\"event-detail pb-3\">
                                        <h1> [Type d’événement] </h1>
                                        <p style=\"font-size: 13px;\">
                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                        </p>
                                        <button type=\"button\" class=\"btn btnDanger filter w-100 launchmodal\" style=\"text-transform: inherit;\"> Je viens ? </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"calendar wow fadeInDown\">
                                <div class=\"body-calendar px-3\">
                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                        <div class=\"d-grid title-card\">
                                            <h1 class=\"text-center\"> Mercredi</h1>
                                            <h2 class=\"text-center\"> 10 </h2>
                                            <h3 class=\"text-center\"> Novembre </h3>
                                        </div>
                                    </div>
                                    <div class=\"py-3\">
                                        <div class=\"text-center\">*********************************</div>
                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                <div class=\"d-grid content-event text-center\">
                                                    <h1 >[Nom d’événement]</h1>
                                                    <h2> 8h30-20h30 </h2>
                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                    </p>
                                                </div>
                                            </div>
                                        <div class=\"text-center\">*********************************</div>
                                    </div>
                                    <div class=\"event-detail pb-3\">
                                        <h1> [Type d’événement] </h1>
                                        <p style=\"font-size: 13px;\">
                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                        </p>
                                        <button type=\"button\" class=\"btn btnDanger filter w-100 launchmodal\" style=\"text-transform: inherit;\"> Je viens ? </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                ";
        // line 204
        echo "                    <!-- Modal -->
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog mx-4\" role=\"document\" style=\"padding-left: 15px;\">
                <div class=\"modalBody\">
                    <div class=\"row\">
                        <div class=\"col-md-4 blk_1\">
                                <div class=\"body-calendar px-3\">
                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                        <div class=\"d-grid title-card\">
                                            <h1 class=\"text-center\"> Mercredi</h1>
                                            <h2 class=\"text-center\"> 10 </h2>
                                            <h3 class=\"text-center\"> Novembre </h3>
                                        </div>
                                    </div>
                                    <div class=\"py-3\">
                                        <div class=\"text-center\">*********************************</div>
                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                <div class=\"d-grid content-event text-center\">
                                                    <h1 >[Nom d’événement]</h1>
                                                    <h2> 8h30-20h30 </h2>
                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                    </p>
                                                </div>
                                            </div>
                                        <div class=\"text-center\">*********************************</div>
                                    </div>
                                    <div class=\"event-detail pb-3\">
                                        <h1 class=\"text-center\"> [Type d’événement] </h1>
                                        <p style=\"font-size: 13px;\" class=\"text-justify\">
                                            Voluptate cillum excepteur commodo sit dolor. In quis fugiat occaecat proident. Consequat nulla minim labore non aliquip sunt adipisicing ullamco esse commodo qui irure adipisicing. Eu tempor aute incididunt laborum incididunt Lorem enim aliquip incididunt velit et incididunt incididunt occaecat. Aliqua id aliqua qui sint nulla incididunt pariatur tempor mollit. Adipisicing adipisicing cupidatat laborum dolor. Amet magna elit proident incididunt Lorem ipsum aute irure cillum ad consectetur.
                                        </p>
                                    </div>
                                </div>
                        </div>
                        <div class=\"col-md-4 blk_1 my-4\">
                            <div class=\"d-grid align-content-center flex-wrap row-participants\">
                                <h1 style=\"font-size: 20px;\"> Liste des participants </h1>
                                    <ul class=\"m-0 p-0 mt-4\">
                                        <li class=\"d-flex my-4\">
                                            <div class=\"min-caption\" class=\"d-flex justify-content-center align-items-center\">
                                                <img src=\"https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                            </div>
                                            <a href=\"#\"><h2 class=\"ml-3\" style=\"font-size: 13px\"> Savannah Nguyen </h2></a>
                                        </li>
                                        <li class=\"d-flex my-4\">
                                            <div class=\"min-caption\" class=\"d-flex justify-content-center align-items-center\">
                                                <img src=\"https://images.pexels.com/photos/2419574/pexels-photo-2419574.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\">
                                            </div>
                                            <a href=\"#\"><h2 class=\"ml-3\" style=\"font-size: 13px\"> Savannah Nguyen </h2></a>
                                        </li>
                                        <li class=\"d-flex my-4\">
                                            <div class=\"min-caption\" class=\"d-flex justify-content-center align-items-center\">
                                                <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                            </div>
                                            <a href=\"#\"><h2 class=\"ml-3\" style=\"font-size: 13px\"> Savannah Nguyen </h2></a>
                                        </li>
                                        <li class=\"d-flex my-4\">
                                            <div class=\"min-caption\" class=\"d-flex justify-content-center align-items-center\">
                                                <img src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                            </div>
                                           <a href=\"#\"> <h2 class=\"ml-3\" style=\"font-size: 13px\"> Savannah Nguyen </h2></a>
                                        </li>
                                    </ul>
                            </div>
                            <div class=\"d-flex\">
                                    <div class=\"d-grid w-100\">
                                        <div class=\"d-flex my-4\">
                                            <p class=\"m-0\">Je participe ?</p>
                                            <div class=\"form-check form-check-inline ml-4\">
                                                <input name=\"participer\" class=\"form-check-input\" type=\"radio\" id=\"inlineCheckbox1\" value=\"option1\">
                                                    <label class=\"form-check-label\" for=\"inlineCheckbox1\">Oui</label>
                                                </div>
                                                <div class=\"form-check form-check-inline\">
                                                <input name=\"participer\" class=\"form-check-input\" type=\"radio\" id=\"inlineCheckbox2\" value=\"option2\">
                                                <label class=\"form-check-label\" for=\"inlineCheckbox2\">Non</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class=\"form-group\">
                                                <textarea placeholder=\"Votre commentaire...\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                                            </div>
                                            <div>
                                                <button type=\"submit\" class=\"btn btn-primary btnSubmit w-100 p-8\"> Envoyer </button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 my-4\">
                            <div class=\"col-md-12 h-title \">
                                <h1 class=\"text-center\"> Rappel </h1>
                            </div>
                            <div class=\"col mt-4 pl-0\">
                                <p class=\"text-justify\" style=\"font-size: 13px;\">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi. Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.


                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.

                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>

                ";
        // line 315
        echo "            <!-- Evenements passés -->   
                <div class=\"row my-4\">
                    <div class=\"col-md-12 mt-3 h-title \">
                        <h1> Événements passés </h1>
                    </div>
                    <div class=\"col mt-4\">
                        <div class=\"gallery js-flickity\"
                            data-flickity-options='{ \"wrapAround\": true }' data-flickity='{ \"cellAlign\": \"left\", \"contain\": true }'>
                            <div class=\"gallery-cell\">
                                <div class=\"calendar mx-3\">
                                                <div class=\"body-calendar px-3\">
                                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                                        <div class=\"d-grid title-card\">
                                                            <h1 class=\"text-center\"> Mercredi</h1>
                                                            <h2 class=\"text-center\"> 10 </h2>
                                                            <h3 class=\"text-center\"> Novembre </h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"py-3\">
                                                        <div class=\"text-center\">*********************************</div>
                                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                                <div class=\"d-grid content-event text-center\">
                                                                    <h1 >[Nom d’événement]</h1>
                                                                    <h2> 8h30-20h30 </h2>
                                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <div class=\"text-center\">*********************************</div>
                                                    </div>
                                                    <div class=\"event-detail pb-3\">
                                                        <h1> [Type d’événement] </h1>
                                                        <p style=\"font-size: 13px;\">
                                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                                        </p>
                                                        <button type=\"button\" class=\"btn btn-secondary w-100 disabled\" style=\"text-transform: inherit;\" role=\"button\" aria-disabled=\"true\"> Je viens ? </button>
                                                    </div>
                                                </div>
                                        </div>
                        </div>
                        <div class=\"gallery-cell\">
                                <div class=\"calendar mx-3\">
                                                <div class=\"body-calendar px-3\">
                                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                                        <div class=\"d-grid title-card\">
                                                            <h1 class=\"text-center\"> Mercredi</h1>
                                                            <h2 class=\"text-center\"> 10 </h2>
                                                            <h3 class=\"text-center\"> Novembre </h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"py-3\">
                                                        <div class=\"text-center\">*********************************</div>
                                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                                <div class=\"d-grid content-event text-center\">
                                                                    <h1 >[Nom d’événement]</h1>
                                                                    <h2> 8h30-20h30 </h2>
                                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <div class=\"text-center\">*********************************</div>
                                                    </div>
                                                    <div class=\"event-detail pb-3\">
                                                        <h1> [Type d’événement] </h1>
                                                        <p style=\"font-size: 13px;\">
                                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                                        </p>
                                                    <button type=\"button\" class=\"btn btn-secondary w-100 disabled\" style=\"text-transform: inherit;\" role=\"button\" aria-disabled=\"true\"> Je viens ? </button>
                                                    </div>
                                                </div>
                                        </div>
                        </div>
                        <div class=\"gallery-cell\">
                                <div class=\"calendar mx-3\">
                                                <div class=\"body-calendar px-3\">
                                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                                        <div class=\"d-grid title-card\">
                                                            <h1 class=\"text-center\"> Mercredi</h1>
                                                            <h2 class=\"text-center\"> 10 </h2>
                                                            <h3 class=\"text-center\"> Novembre </h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"py-3\">
                                                        <div class=\"text-center\">*********************************</div>
                                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                                <div class=\"d-grid content-event text-center\">
                                                                    <h1 >[Nom d’événement]</h1>
                                                                    <h2> 8h30-20h30 </h2>
                                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <div class=\"text-center\">*********************************</div>
                                                    </div>
                                                    <div class=\"event-detail pb-3\">
                                                        <h1> [Type d’événement] </h1>
                                                        <p style=\"font-size: 13px;\">
                                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                                        </p>
                                                        <button type=\"button\" class=\"btn btn-secondary w-100 disabled\" style=\"text-transform: inherit;\" role=\"button\" aria-disabled=\"true\"> Je viens ? </button>
                                                    </div>
                                                </div>
                                        </div>
                        </div>
                        <div class=\"gallery-cell\">
                                <div class=\"calendar mx-3\">
                                                <div class=\"body-calendar px-3\">
                                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                                        <div class=\"d-grid title-card\">
                                                            <h1 class=\"text-center\"> Mercredi</h1>
                                                            <h2 class=\"text-center\"> 10 </h2>
                                                            <h3 class=\"text-center\"> Novembre </h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"py-3\">
                                                        <div class=\"text-center\">*********************************</div>
                                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                                <div class=\"d-grid content-event text-center\">
                                                                    <h1 >[Nom d’événement]</h1>
                                                                    <h2> 8h30-20h30 </h2>
                                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <div class=\"text-center\">*********************************</div>
                                                    </div>
                                                    <div class=\"event-detail pb-3\">
                                                        <h1> [Type d’événement] </h1>
                                                        <p style=\"font-size: 13px;\">
                                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                                        </p>
                                                        <button type=\"button\" class=\"btn btn-secondary w-100 disabled\" style=\"text-transform: inherit;\" role=\"button\" aria-disabled=\"true\"> Je viens ? </button>
                                                    </div>
                                                </div>
                                        </div>
                        </div>
                        <div class=\"gallery-cell\">
                            <div class=\"calendar mx-3\">
                                <div class=\"body-calendar px-3\">
                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                        <div class=\"d-grid title-card\">
                                            <h1 class=\"text-center\"> Mercredi</h1>
                                            <h2 class=\"text-center\"> 10 </h2>
                                            <h3 class=\"text-center\"> Novembre </h3>
                                        </div>
                                    </div>
                                    <div class=\"py-3\">
                                        <div class=\"text-center\">*********************************</div>
                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                <div class=\"d-grid content-event text-center\">
                                                    <h1 >[Nom d’événement]</h1>
                                                    <h2> 8h30-20h30 </h2>
                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                    </p>
                                                </div>
                                            </div>
                                        <div class=\"text-center\">*********************************</div>
                                    </div>
                                    <div class=\"event-detail pb-3\">
                                        <h1> [Type d’événement] </h1>
                                        <p style=\"font-size: 13px;\">
                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                        </p>
                                        <button type=\"button\" class=\"btn btn-secondary w-100 disabled\" style=\"text-transform: inherit;\" role=\"button\" aria-disabled=\"true\"> Je viens ? </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 495
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 496
        echo "    <script>
        \$(document).ready(function(){
            \$('.launchmodal').on('click', function() {
                \$(\"#exampleModal\").modal({
            })
            })
            wow = new WOW(
                    {
                        animateClass: 'animated',
                        callback:     function(box) {
                        
                        }
                    }
                    );
                wow.init();
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace/calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  605 => 496,  595 => 495,  406 => 315,  294 => 204,  190 => 101,  179 => 90,  176 => 89,  166 => 88,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace/base.html.twig' %}
{% set title = 'Le calendrier' %}
    {% block stylesheets %}
        <style>
            .h-title h1 {
                font-size: 30px;
                font-weight: 600;
                margin: 0;
            }
            .title-card h1 {
                font-size: 35px;
                margin: 0;
            }
            .title-card h2 {
                font-size: 84px;
                margin: 0;
                font-weight: 600;
            }
            .title-card h3 {
                font-size: 19px;
                margin: 0;
            }
            .calendar {
                border: 5px solid #00BFB4;
                border-radius: 5px;
                background-color: #E7EDF3;
                width: 300px
            }
            .js-flickity .calendar {
                 border-color: #C4C4C4;
                 background-color: #E5E5E5
            }
            .content-event h1, .event-detail h1 {
                font-size: 15px
            }
            .content-event h2 {
                font-size: 12px
            }
            .modalBody {
                background: #fff;
                border: 5px solid #00BFB4;
                border-radius: 5px;
                background-color: #E7EDF3;
            }
            .modal-dialog {
                max-width: 100%
            }
            .blk_1 {
                border-right: 3px dotted #ddd
            }
            .min-caption {
                height: 60px;
                width: 60px;
                overflow: hidden;
                border-radius: 50%
            }
            .min-caption img {
                width: 100%
            }
            .modal-dialog {
                pointer-events: initial;
            }
            .row-participants {
                overflow-y: auto;
                height: 390px;
            }
            .row-participants::-webkit-scrollbar-thumb, .row-participants::-webkit-scrollbar-thumb {
                background-color: #17e2c7;
                background-image: -webkit-linear-gradient(90deg, #f4fffe 0%, #00bfa630 25%, #53c0b5 100%, #a4f7ec85 75%, #c0ece8);
            }
            .row-participants::-webkit-scrollbar-thumb, .row-participants::-webkit-scrollbar-thumb {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.6);
                background-color: #CCCCCC;
            }
            .row-participants::-webkit-scrollbar, .row-participants::-webkit-scrollbar {
                width: 3px;
                background-color: #F5F5F5;
            }
            .row-participants a {
                color: inherit
            }
              .row-participants a:hover {
                  text-decoration: none;
                  color: #007bff;
              }
        </style>
    {% endblock %}
{% block body %}

    {{ render(path(\"header\")) }}

<section class=\"mb-5\">
        <div class=\"container mt-0\">
                <div class=\"row my-4\">
                    <div class=\"col-md-12 mt-3 h-title\">
                        <h1> Événements à venir </h1>
                    </div>
                    {# <div class=\"col\">
                        <a href=\"{{ path('addevent') }}\" class=\"btn btnSubmitBlue btn-sm btn-author mt-3\" data-toggle=\"button\" aria-pressed=\"false\"> <i class=\"fas fa-plus-square\"></i> Ajouter un Événement </a>
                    </div> #}
                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-md-4\">
                        <div class=\"calendar wow fadeInDown\">
                                <div class=\"body-calendar px-3\">
                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                        <div class=\"d-grid title-card\">
                                            <h1 class=\"text-center\"> Mercredi</h1>
                                            <h2 class=\"text-center\"> 10 </h2>
                                            <h3 class=\"text-center\"> Novembre </h3>
                                        </div>
                                    </div>
                                    <div class=\"py-3\">
                                        <div class=\"text-center\">*********************************</div>
                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                <div class=\"d-grid content-event text-center\">
                                                    <h1 >[Nom d’événement]</h1>
                                                    <h2> 8h30-20h30 </h2>
                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                    </p>
                                                </div>
                                            </div>
                                        <div class=\"text-center\">*********************************</div>
                                    </div>
                                    <div class=\"event-detail pb-3\">
                                        <h1> [Type d’événement] </h1>
                                        <p style=\"font-size: 13px;\">
                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                        </p>
                                        <button type=\"button\" class=\"btn btnDanger filter w-100 launchmodal\" style=\"text-transform: inherit;\"> Je viens ? </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"calendar wow fadeInDown\">
                                <div class=\"body-calendar px-3\">
                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                        <div class=\"d-grid title-card\">
                                            <h1 class=\"text-center\"> Mercredi</h1>
                                            <h2 class=\"text-center\"> 10 </h2>
                                            <h3 class=\"text-center\"> Novembre </h3>
                                        </div>
                                    </div>
                                    <div class=\"py-3\">
                                        <div class=\"text-center\">*********************************</div>
                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                <div class=\"d-grid content-event text-center\">
                                                    <h1 >[Nom d’événement]</h1>
                                                    <h2> 8h30-20h30 </h2>
                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                    </p>
                                                </div>
                                            </div>
                                        <div class=\"text-center\">*********************************</div>
                                    </div>
                                    <div class=\"event-detail pb-3\">
                                        <h1> [Type d’événement] </h1>
                                        <p style=\"font-size: 13px;\">
                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                        </p>
                                        <button type=\"button\" class=\"btn btnDanger filter w-100 launchmodal\" style=\"text-transform: inherit;\"> Je viens ? </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"calendar wow fadeInDown\">
                                <div class=\"body-calendar px-3\">
                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                        <div class=\"d-grid title-card\">
                                            <h1 class=\"text-center\"> Mercredi</h1>
                                            <h2 class=\"text-center\"> 10 </h2>
                                            <h3 class=\"text-center\"> Novembre </h3>
                                        </div>
                                    </div>
                                    <div class=\"py-3\">
                                        <div class=\"text-center\">*********************************</div>
                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                <div class=\"d-grid content-event text-center\">
                                                    <h1 >[Nom d’événement]</h1>
                                                    <h2> 8h30-20h30 </h2>
                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                    </p>
                                                </div>
                                            </div>
                                        <div class=\"text-center\">*********************************</div>
                                    </div>
                                    <div class=\"event-detail pb-3\">
                                        <h1> [Type d’événement] </h1>
                                        <p style=\"font-size: 13px;\">
                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                        </p>
                                        <button type=\"button\" class=\"btn btnDanger filter w-100 launchmodal\" style=\"text-transform: inherit;\"> Je viens ? </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                {#  #}
                    <!-- Modal -->
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog mx-4\" role=\"document\" style=\"padding-left: 15px;\">
                <div class=\"modalBody\">
                    <div class=\"row\">
                        <div class=\"col-md-4 blk_1\">
                                <div class=\"body-calendar px-3\">
                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                        <div class=\"d-grid title-card\">
                                            <h1 class=\"text-center\"> Mercredi</h1>
                                            <h2 class=\"text-center\"> 10 </h2>
                                            <h3 class=\"text-center\"> Novembre </h3>
                                        </div>
                                    </div>
                                    <div class=\"py-3\">
                                        <div class=\"text-center\">*********************************</div>
                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                <div class=\"d-grid content-event text-center\">
                                                    <h1 >[Nom d’événement]</h1>
                                                    <h2> 8h30-20h30 </h2>
                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                    </p>
                                                </div>
                                            </div>
                                        <div class=\"text-center\">*********************************</div>
                                    </div>
                                    <div class=\"event-detail pb-3\">
                                        <h1 class=\"text-center\"> [Type d’événement] </h1>
                                        <p style=\"font-size: 13px;\" class=\"text-justify\">
                                            Voluptate cillum excepteur commodo sit dolor. In quis fugiat occaecat proident. Consequat nulla minim labore non aliquip sunt adipisicing ullamco esse commodo qui irure adipisicing. Eu tempor aute incididunt laborum incididunt Lorem enim aliquip incididunt velit et incididunt incididunt occaecat. Aliqua id aliqua qui sint nulla incididunt pariatur tempor mollit. Adipisicing adipisicing cupidatat laborum dolor. Amet magna elit proident incididunt Lorem ipsum aute irure cillum ad consectetur.
                                        </p>
                                    </div>
                                </div>
                        </div>
                        <div class=\"col-md-4 blk_1 my-4\">
                            <div class=\"d-grid align-content-center flex-wrap row-participants\">
                                <h1 style=\"font-size: 20px;\"> Liste des participants </h1>
                                    <ul class=\"m-0 p-0 mt-4\">
                                        <li class=\"d-flex my-4\">
                                            <div class=\"min-caption\" class=\"d-flex justify-content-center align-items-center\">
                                                <img src=\"https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                            </div>
                                            <a href=\"#\"><h2 class=\"ml-3\" style=\"font-size: 13px\"> Savannah Nguyen </h2></a>
                                        </li>
                                        <li class=\"d-flex my-4\">
                                            <div class=\"min-caption\" class=\"d-flex justify-content-center align-items-center\">
                                                <img src=\"https://images.pexels.com/photos/2419574/pexels-photo-2419574.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\">
                                            </div>
                                            <a href=\"#\"><h2 class=\"ml-3\" style=\"font-size: 13px\"> Savannah Nguyen </h2></a>
                                        </li>
                                        <li class=\"d-flex my-4\">
                                            <div class=\"min-caption\" class=\"d-flex justify-content-center align-items-center\">
                                                <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                            </div>
                                            <a href=\"#\"><h2 class=\"ml-3\" style=\"font-size: 13px\"> Savannah Nguyen </h2></a>
                                        </li>
                                        <li class=\"d-flex my-4\">
                                            <div class=\"min-caption\" class=\"d-flex justify-content-center align-items-center\">
                                                <img src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                            </div>
                                           <a href=\"#\"> <h2 class=\"ml-3\" style=\"font-size: 13px\"> Savannah Nguyen </h2></a>
                                        </li>
                                    </ul>
                            </div>
                            <div class=\"d-flex\">
                                    <div class=\"d-grid w-100\">
                                        <div class=\"d-flex my-4\">
                                            <p class=\"m-0\">Je participe ?</p>
                                            <div class=\"form-check form-check-inline ml-4\">
                                                <input name=\"participer\" class=\"form-check-input\" type=\"radio\" id=\"inlineCheckbox1\" value=\"option1\">
                                                    <label class=\"form-check-label\" for=\"inlineCheckbox1\">Oui</label>
                                                </div>
                                                <div class=\"form-check form-check-inline\">
                                                <input name=\"participer\" class=\"form-check-input\" type=\"radio\" id=\"inlineCheckbox2\" value=\"option2\">
                                                <label class=\"form-check-label\" for=\"inlineCheckbox2\">Non</label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class=\"form-group\">
                                                <textarea placeholder=\"Votre commentaire...\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                                            </div>
                                            <div>
                                                <button type=\"submit\" class=\"btn btn-primary btnSubmit w-100 p-8\"> Envoyer </button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 my-4\">
                            <div class=\"col-md-12 h-title \">
                                <h1 class=\"text-center\"> Rappel </h1>
                            </div>
                            <div class=\"col mt-4 pl-0\">
                                <p class=\"text-justify\" style=\"font-size: 13px;\">
                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi. Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.


                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.

                                    Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>

                {#  #}
            <!-- Evenements passés -->   
                <div class=\"row my-4\">
                    <div class=\"col-md-12 mt-3 h-title \">
                        <h1> Événements passés </h1>
                    </div>
                    <div class=\"col mt-4\">
                        <div class=\"gallery js-flickity\"
                            data-flickity-options='{ \"wrapAround\": true }' data-flickity='{ \"cellAlign\": \"left\", \"contain\": true }'>
                            <div class=\"gallery-cell\">
                                <div class=\"calendar mx-3\">
                                                <div class=\"body-calendar px-3\">
                                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                                        <div class=\"d-grid title-card\">
                                                            <h1 class=\"text-center\"> Mercredi</h1>
                                                            <h2 class=\"text-center\"> 10 </h2>
                                                            <h3 class=\"text-center\"> Novembre </h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"py-3\">
                                                        <div class=\"text-center\">*********************************</div>
                                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                                <div class=\"d-grid content-event text-center\">
                                                                    <h1 >[Nom d’événement]</h1>
                                                                    <h2> 8h30-20h30 </h2>
                                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <div class=\"text-center\">*********************************</div>
                                                    </div>
                                                    <div class=\"event-detail pb-3\">
                                                        <h1> [Type d’événement] </h1>
                                                        <p style=\"font-size: 13px;\">
                                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                                        </p>
                                                        <button type=\"button\" class=\"btn btn-secondary w-100 disabled\" style=\"text-transform: inherit;\" role=\"button\" aria-disabled=\"true\"> Je viens ? </button>
                                                    </div>
                                                </div>
                                        </div>
                        </div>
                        <div class=\"gallery-cell\">
                                <div class=\"calendar mx-3\">
                                                <div class=\"body-calendar px-3\">
                                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                                        <div class=\"d-grid title-card\">
                                                            <h1 class=\"text-center\"> Mercredi</h1>
                                                            <h2 class=\"text-center\"> 10 </h2>
                                                            <h3 class=\"text-center\"> Novembre </h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"py-3\">
                                                        <div class=\"text-center\">*********************************</div>
                                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                                <div class=\"d-grid content-event text-center\">
                                                                    <h1 >[Nom d’événement]</h1>
                                                                    <h2> 8h30-20h30 </h2>
                                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <div class=\"text-center\">*********************************</div>
                                                    </div>
                                                    <div class=\"event-detail pb-3\">
                                                        <h1> [Type d’événement] </h1>
                                                        <p style=\"font-size: 13px;\">
                                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                                        </p>
                                                    <button type=\"button\" class=\"btn btn-secondary w-100 disabled\" style=\"text-transform: inherit;\" role=\"button\" aria-disabled=\"true\"> Je viens ? </button>
                                                    </div>
                                                </div>
                                        </div>
                        </div>
                        <div class=\"gallery-cell\">
                                <div class=\"calendar mx-3\">
                                                <div class=\"body-calendar px-3\">
                                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                                        <div class=\"d-grid title-card\">
                                                            <h1 class=\"text-center\"> Mercredi</h1>
                                                            <h2 class=\"text-center\"> 10 </h2>
                                                            <h3 class=\"text-center\"> Novembre </h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"py-3\">
                                                        <div class=\"text-center\">*********************************</div>
                                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                                <div class=\"d-grid content-event text-center\">
                                                                    <h1 >[Nom d’événement]</h1>
                                                                    <h2> 8h30-20h30 </h2>
                                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <div class=\"text-center\">*********************************</div>
                                                    </div>
                                                    <div class=\"event-detail pb-3\">
                                                        <h1> [Type d’événement] </h1>
                                                        <p style=\"font-size: 13px;\">
                                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                                        </p>
                                                        <button type=\"button\" class=\"btn btn-secondary w-100 disabled\" style=\"text-transform: inherit;\" role=\"button\" aria-disabled=\"true\"> Je viens ? </button>
                                                    </div>
                                                </div>
                                        </div>
                        </div>
                        <div class=\"gallery-cell\">
                                <div class=\"calendar mx-3\">
                                                <div class=\"body-calendar px-3\">
                                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                                        <div class=\"d-grid title-card\">
                                                            <h1 class=\"text-center\"> Mercredi</h1>
                                                            <h2 class=\"text-center\"> 10 </h2>
                                                            <h3 class=\"text-center\"> Novembre </h3>
                                                        </div>
                                                    </div>
                                                    <div class=\"py-3\">
                                                        <div class=\"text-center\">*********************************</div>
                                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                                <div class=\"d-grid content-event text-center\">
                                                                    <h1 >[Nom d’événement]</h1>
                                                                    <h2> 8h30-20h30 </h2>
                                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        <div class=\"text-center\">*********************************</div>
                                                    </div>
                                                    <div class=\"event-detail pb-3\">
                                                        <h1> [Type d’événement] </h1>
                                                        <p style=\"font-size: 13px;\">
                                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                                        </p>
                                                        <button type=\"button\" class=\"btn btn-secondary w-100 disabled\" style=\"text-transform: inherit;\" role=\"button\" aria-disabled=\"true\"> Je viens ? </button>
                                                    </div>
                                                </div>
                                        </div>
                        </div>
                        <div class=\"gallery-cell\">
                            <div class=\"calendar mx-3\">
                                <div class=\"body-calendar px-3\">
                                    <div class=\"d-flex justify-content-center align-items-center mt-4\">
                                        <div class=\"d-grid title-card\">
                                            <h1 class=\"text-center\"> Mercredi</h1>
                                            <h2 class=\"text-center\"> 10 </h2>
                                            <h3 class=\"text-center\"> Novembre </h3>
                                        </div>
                                    </div>
                                    <div class=\"py-3\">
                                        <div class=\"text-center\">*********************************</div>
                                            <div class=\"d-flex justify-content-center align-items-center\">
                                                <div class=\"d-grid content-event text-center\">
                                                    <h1 >[Nom d’événement]</h1>
                                                    <h2> 8h30-20h30 </h2>
                                                    <p class=\"text-center\" style=\"font-size: 13px;\">
                                                        Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                                    </p>
                                                </div>
                                            </div>
                                        <div class=\"text-center\">*********************************</div>
                                    </div>
                                    <div class=\"event-detail pb-3\">
                                        <h1> [Type d’événement] </h1>
                                        <p style=\"font-size: 13px;\">
                                            Texte libre <br> « à propos de l’atelier, des sujets qui seront abordés, etc. ».
                                        </p>
                                        <button type=\"button\" class=\"btn btn-secondary w-100 disabled\" style=\"text-transform: inherit;\" role=\"button\" aria-disabled=\"true\"> Je viens ? </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
    
{% endblock %}
{% block javascripts %}
    <script>
        \$(document).ready(function(){
            \$('.launchmodal').on('click', function() {
                \$(\"#exampleModal\").modal({
            })
            })
            wow = new WOW(
                    {
                        animateClass: 'animated',
                        callback:     function(box) {
                        
                        }
                    }
                    );
                wow.init();
        })
    </script>
{% endblock %}", "espace/calendrier.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/calendrier.html.twig");
    }
}
