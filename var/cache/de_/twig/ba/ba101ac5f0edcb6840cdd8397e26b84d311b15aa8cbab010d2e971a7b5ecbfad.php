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

/* gestion/index.html.twig */
class __TwigTemplate_13e08237a5553908ab016974e55dca49b6ca9582b76e380f492d061d7aa731fa extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion/index.html.twig"));

        // line 3
        $context["title"] = "Gestion des candidatures";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "gestion/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "        <style>
            h4 {
                position: relative
            }
            h4:not(.modal-title):after {
                position: absolute;
                content: '';
                height: 5px;
                width: 31px;
                background-color: #54c0a7;
                bottom: -9px;
                left: 0;
            }
            .container section {
                margin-top: 5%
            }
            .card-item {
                border-radius: 0 0 5px 5px;
                width: 100%;
                -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
                box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
                position: relative;
            }
            
            .card-item:nth-of-type(2) {
                border-top: 3px solid rgba(255, 0, 0, 0.312)
            }
            .card-item:first-child>div:first-child  {
                position: absolute;
                top: -3px;
                left: 0;
                right: 0;
                height: 3px;
                width: 70%;
            }
            .col-md-3:first-child .card-item {
                border-top: 3px solid #E7EDF3;
            }
            .col-md-3:first-child .card-item>div:first-child {
                background-color: #667D99
            }
            .col-md-3:nth-of-type(2) .card-item {
                border-top: 3px solid rgba(18, 170, 255, 0.38)
            }
            .col-md-3:nth-of-type(2) .card-item>div:first-child {
                background-color: #3eaaf7
            }

            .col-md-3:nth-of-type(4) .card-item {
                border-top: 3px solid rgb(220 53 69 / 12%)
            }
            .col-md-3:nth-of-type(4) .card-item>div:first-child {
                background-color: #df4949;
            }

            .col-md-3:nth-of-type(3) .card-item {
                border-top: 3px solid #b6e4de
            }
            .col-md-3:nth-of-type(3) .card-item>div:first-child {
                background-color: #00BFA6
            }

            .card-item>div:nth-of-type(2) {
                padding: 16px
            }
            .card {
            border-radius: 5px;
            margin-bottom: 20px
            }
            .card div:first-child {
                padding: 11px;
            }
            .card small {
                font-size: 10px;
            }
            .card div:nth-of-type(2) {
                padding-left: 11px;
                border-top: 1px dotted #ddd;
            }
            .btn-primary-accept {
                background-color: #54c0a7;
                color: #ffffff;
            }
            .btn:hover {
                color: #fff !important
            }
            .card:hover {
                -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 2px -3px 10px 3px rgba(26,26,26,.12);
                box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 2px -3px 10px 3px rgba(26,26,26,.12);
            }
            .card ul {
                list-style: none
            }
            .card ul li {
                display: inline
            }
            .btn-primary-denied {
                color: #ffffff;
                background-color: rgb(223 73 73);
            }
            .btn-primary-accept, .btn-primary-denied, .btn-primary-incomplet, .btn-light {
                padding: 6px;
                font-size: 10px;
            }
            .btn-primary-incomplet {
                color: #ffffff;
                background-color: rgb(62 170 247);
            }
            .modal ul {
                list-style: none;
                padding-left: 0;
            }
            .modal ul li {
                display: inline-table
            }
            .modal div ul li:last-child {
                float: right
            }
            .modal .btn-secondary.btn-sm {
                border: none
            }
            .form-group label {
                font-size: 12px;
            }
            .card a {
                color: rgb(55, 57, 66);
            }
            .r-0 {
                right: 0
            } 
            .t-m-8 {
                top: -8px
            }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    <div class=\"container\">
        
        <section>
                <h4> Gestion des candidatures </h4>
                <br>
            <div class=\"row\">
            ";
        // line 148
        echo "                <div class=\"col-md-3\">
                    <div class=\"card-item\">
                            <div></div>
                        <div>
                            <h6> À traiter <span class=\"badge badge-light\">3</span> </h6>
                            <br>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                    <a href=\"#\">
                                        <h6> Annette Martin </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-accept\">Accepter</button>
                                        </li>
                                        
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#incompletModal\">À compléter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-denied\" data-toggle=\"modal\" data-target=\"#RejetetModal\">Refuser</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                    <a href=\"#\">
                                        <h6> Ralph Robert </h6>
                                        <small>
                                        candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-accept\">Accepter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#incompletModal\">À compléter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-denied\" data-toggle=\"modal\" data-target=\"#RejetetModal\">Refuser</button>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                             <div class=\"card\">
                                <div class=\"position-relative\">
                                    <a href=\"#\">
                                        <h6> Bessie Dubois </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-accept\">Accepter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#incompletModal\">À compléter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-denied\" data-toggle=\"modal\" data-target=\"#RejetetModal\">Refuser</button>
                                        </li>
                                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            ";
        // line 231
        echo "
                
                ";
        // line 234
        echo "                <div class=\"col-md-3\">
                    <div class=\"card-item\">
                            <div></div>
                        <div>
                            <h6> Acceptées <span class=\"badge badge-light\">2</span> </h6>
                            <br>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                        <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Marvin Laurent </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                
                            </div>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                        <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Kathryn Simon </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>

                ";
        // line 270
        echo "                <div class=\"col-md-3\">
                    <div class=\"card-item\">
                            <div></div>
                        <div>
                            <h6> À compléter <span class=\"badge badge-light\">3</span> </h6>
                            <br>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                     <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Marvin Roux </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                      
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#MessageModal\">Message</button>
                                        </li>
                                         
                                    </ul>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                 <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Kathryn Fournier </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-accept\">Accepter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#MessageModal\">Message</button>
                                        </li>
                                         <li>
                                            <button type=\"button\" class=\"btn btn-primary-denied btn-danger\" data-toggle=\"modal\" data-target=\"#RejetetModal\">Refuser</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                     <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> David Fontaine </h6>
                                        <small>
                                            candidaté le 18.01.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-accept\">Accepter</button>
                                        </li>
                                         <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#MessageModal\">Message</button>
                                        </li>
                                         <li>
                                            <button type=\"button\" class=\"btn btn-primary-denied btn-danger\" data-toggle=\"modal\" data-target=\"#RejetetModal\">Refuser</button>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                ";
        // line 350
        echo "                <div class=\"col-md-3\">
                    <div class=\"card-item\">
                            <div></div>
                        <div>
                            <h6> Refusées <span class=\"badge badge-light\">2</span> </h6>
                            <br>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                     <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Floyd Rousseau </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                
                            </div>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                     <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Ralph Lefevre </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
             <!-- Vertically centered modal -->
            <!-- Modal -->
                <div class=\"modal fade\" id=\"RejetetModal\" tabindex=\"-1\" aria-labelledby=\"RejetetModal\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Candidature Refusées </h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                               <p> Dîtes à l'auteur pourquoi sa candidature est invalide </p>
                               <div class=\"row\">
                                    <div class=\"col-md-12\">
                                         <div class=\"form-group\">
                                            <label for=\"exampleFormControlTextarea1\"> Donnez quelques precisions au candidat </label>
                                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"button\" class=\"btn btn-primary btn-sm\">Continuer</button>
                            </div>
                        </div>
                    </div>
                </div>

 <!-- Vertically centered modal -->
            <!-- Modal -->
                <div class=\"modal fade\" id=\"MessageModal\" tabindex=\"-1\" aria-labelledby=\"MessageModal\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\"> Candidature à completer </h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                               <p> Souhaitez-vous envoyer un message à l'auteur de la candidature ?</p>
                               <div class=\"row\">
                                    <div class=\"col-md-12\">
                                         <div class=\"form-group\">
                                            <label for=\"exampleFormControlTextarea1\"> Donnez quelques precisions au candidat </label>
                                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"button\" class=\"btn btn-primary btn-sm\">Continuer</button>
                            </div>
                        </div>
                    </div>
                </div>

              ";
        // line 446
        echo "        <!-- Vertically centered modal -->
            <!-- Modal -->
                <div class=\"modal fade\" id=\"incompletModal\" tabindex=\"-1\" aria-labelledby=\"incompletModal\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Candidature incomplète </h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                               <p>Quelles sont informations manquantes ?</p>
                               <div class=\"row\">
                                    <div class=\"col-md-6\">
                                            <ul>
                                                <li> 
                                                    Logement actuel
                                                </li>
                                                <li> 
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"logement-actuel\">
                                                        <label class=\"custom-control-label\" for=\"logement-actuel\" value=\"logement actuel\"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    <div class=\"col-md-6\">
                                            <ul>
                                                <li> 
                                                    Logement desiré
                                                </li>
                                                <li> 
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"Logement desiré\" value=\"\">
                                                        <label class=\"custom-control-label\" for=\"Logement desiré\"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    <div class=\"col-md-6\">
                                            <ul>
                                                <li> 
                                                    Acquéreur
                                                </li>
                                                <li> 
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"Acquéreur\">
                                                        <label class=\"custom-control-label\" for=\"Acquéreur\"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    <div class=\"col-md-6\">
                                            <ul>
                                                <li> 
                                                    Crédit
                                                </li>
                                                <li> 
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"Crédit\">
                                                        <label class=\"custom-control-label\" for=\"Crédit\"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    <div class=\"col-md-6\">
                                            <ul>
                                                <li> 
                                                    Motivation
                                                </li>
                                                <li> 
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"Motivation\">
                                                        <label class=\"custom-control-label\" for=\"Motivation\"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    <div class=\"col-md-12\">
                                         <div class=\"form-group\">
                                            <label for=\"exampleFormControlTextarea1\"> Donnez quelques precisions au candidat </label>
                                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"button\" class=\"btn btn-primary btn-sm\">Continuer</button>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <div class=\"modal fade\" tabindex=\"-1\" id=\"delete-candidature\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\"> Supprimer la candidature </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>Voulez-vous supprimer cette candidature ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger btn-sm delete\">Supprimer</button>
            </div>
            </div>
        </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 563
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 564
        echo "    <script>
            \$(function() {
                \$('.fa-trash-alt').on('click', function() {
                    \$('#delete-candidature').modal('show')
                    \$('.delete').on('click', ()=> {
                        \$(this).closest('.card').remove()
                        \$('#delete-candidature').modal('hide')
                    } )
                   
                } )
            })

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 564,  663 => 563,  538 => 446,  441 => 350,  360 => 270,  323 => 234,  319 => 231,  235 => 148,  227 => 141,  217 => 140,  73 => 5,  63 => 4,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Gestion des candidatures' %}
    {% block stylesheets %}
        <style>
            h4 {
                position: relative
            }
            h4:not(.modal-title):after {
                position: absolute;
                content: '';
                height: 5px;
                width: 31px;
                background-color: #54c0a7;
                bottom: -9px;
                left: 0;
            }
            .container section {
                margin-top: 5%
            }
            .card-item {
                border-radius: 0 0 5px 5px;
                width: 100%;
                -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
                box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
                position: relative;
            }
            
            .card-item:nth-of-type(2) {
                border-top: 3px solid rgba(255, 0, 0, 0.312)
            }
            .card-item:first-child>div:first-child  {
                position: absolute;
                top: -3px;
                left: 0;
                right: 0;
                height: 3px;
                width: 70%;
            }
            .col-md-3:first-child .card-item {
                border-top: 3px solid #E7EDF3;
            }
            .col-md-3:first-child .card-item>div:first-child {
                background-color: #667D99
            }
            .col-md-3:nth-of-type(2) .card-item {
                border-top: 3px solid rgba(18, 170, 255, 0.38)
            }
            .col-md-3:nth-of-type(2) .card-item>div:first-child {
                background-color: #3eaaf7
            }

            .col-md-3:nth-of-type(4) .card-item {
                border-top: 3px solid rgb(220 53 69 / 12%)
            }
            .col-md-3:nth-of-type(4) .card-item>div:first-child {
                background-color: #df4949;
            }

            .col-md-3:nth-of-type(3) .card-item {
                border-top: 3px solid #b6e4de
            }
            .col-md-3:nth-of-type(3) .card-item>div:first-child {
                background-color: #00BFA6
            }

            .card-item>div:nth-of-type(2) {
                padding: 16px
            }
            .card {
            border-radius: 5px;
            margin-bottom: 20px
            }
            .card div:first-child {
                padding: 11px;
            }
            .card small {
                font-size: 10px;
            }
            .card div:nth-of-type(2) {
                padding-left: 11px;
                border-top: 1px dotted #ddd;
            }
            .btn-primary-accept {
                background-color: #54c0a7;
                color: #ffffff;
            }
            .btn:hover {
                color: #fff !important
            }
            .card:hover {
                -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 2px -3px 10px 3px rgba(26,26,26,.12);
                box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 2px -3px 10px 3px rgba(26,26,26,.12);
            }
            .card ul {
                list-style: none
            }
            .card ul li {
                display: inline
            }
            .btn-primary-denied {
                color: #ffffff;
                background-color: rgb(223 73 73);
            }
            .btn-primary-accept, .btn-primary-denied, .btn-primary-incomplet, .btn-light {
                padding: 6px;
                font-size: 10px;
            }
            .btn-primary-incomplet {
                color: #ffffff;
                background-color: rgb(62 170 247);
            }
            .modal ul {
                list-style: none;
                padding-left: 0;
            }
            .modal ul li {
                display: inline-table
            }
            .modal div ul li:last-child {
                float: right
            }
            .modal .btn-secondary.btn-sm {
                border: none
            }
            .form-group label {
                font-size: 12px;
            }
            .card a {
                color: rgb(55, 57, 66);
            }
            .r-0 {
                right: 0
            } 
            .t-m-8 {
                top: -8px
            }
        </style>
    {% endblock %}
{% block body %}
    <div class=\"container\">
        
        <section>
                <h4> Gestion des candidatures </h4>
                <br>
            <div class=\"row\">
            {# A traiter #}
                <div class=\"col-md-3\">
                    <div class=\"card-item\">
                            <div></div>
                        <div>
                            <h6> À traiter <span class=\"badge badge-light\">3</span> </h6>
                            <br>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                    <a href=\"#\">
                                        <h6> Annette Martin </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-accept\">Accepter</button>
                                        </li>
                                        
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#incompletModal\">À compléter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-denied\" data-toggle=\"modal\" data-target=\"#RejetetModal\">Refuser</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                    <a href=\"#\">
                                        <h6> Ralph Robert </h6>
                                        <small>
                                        candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-accept\">Accepter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#incompletModal\">À compléter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-denied\" data-toggle=\"modal\" data-target=\"#RejetetModal\">Refuser</button>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                             <div class=\"card\">
                                <div class=\"position-relative\">
                                    <a href=\"#\">
                                        <h6> Bessie Dubois </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-accept\">Accepter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#incompletModal\">À compléter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-denied\" data-toggle=\"modal\" data-target=\"#RejetetModal\">Refuser</button>
                                        </li>
                                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            {# fin #}

                
                {# Accepté #}
                <div class=\"col-md-3\">
                    <div class=\"card-item\">
                            <div></div>
                        <div>
                            <h6> Acceptées <span class=\"badge badge-light\">2</span> </h6>
                            <br>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                        <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Marvin Laurent </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                
                            </div>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                        <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Kathryn Simon </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>

                {# A completer #}
                <div class=\"col-md-3\">
                    <div class=\"card-item\">
                            <div></div>
                        <div>
                            <h6> À compléter <span class=\"badge badge-light\">3</span> </h6>
                            <br>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                     <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Marvin Roux </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                      
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#MessageModal\">Message</button>
                                        </li>
                                         
                                    </ul>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                 <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Kathryn Fournier </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-accept\">Accepter</button>
                                        </li>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#MessageModal\">Message</button>
                                        </li>
                                         <li>
                                            <button type=\"button\" class=\"btn btn-primary-denied btn-danger\" data-toggle=\"modal\" data-target=\"#RejetetModal\">Refuser</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                     <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> David Fontaine </h6>
                                        <small>
                                            candidaté le 18.01.2020
                                        </small>
                                    </a>
                                </div>
                                <div>
                                    <ul>
                                        <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-accept\">Accepter</button>
                                        </li>
                                         <li>
                                            <button type=\"button\" class=\"btn btn-small btn-primary-incomplet\" data-toggle=\"modal\" data-target=\"#MessageModal\">Message</button>
                                        </li>
                                         <li>
                                            <button type=\"button\" class=\"btn btn-primary-denied btn-danger\" data-toggle=\"modal\" data-target=\"#RejetetModal\">Refuser</button>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                {# Refusé #}
                <div class=\"col-md-3\">
                    <div class=\"card-item\">
                            <div></div>
                        <div>
                            <h6> Refusées <span class=\"badge badge-light\">2</span> </h6>
                            <br>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                     <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Floyd Rousseau </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                
                            </div>
                            <div class=\"card\">
                                <div class=\"position-relative\">
                                     <i class=\"far fa-trash-alt position-absolute m-3 r-0 t-m-8\"></i>
                                    <a href=\"#\">
                                        <h6> Ralph Lefevre </h6>
                                        <small>
                                            candidaté le 22.02.2020
                                        </small>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
             <!-- Vertically centered modal -->
            <!-- Modal -->
                <div class=\"modal fade\" id=\"RejetetModal\" tabindex=\"-1\" aria-labelledby=\"RejetetModal\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Candidature Refusées </h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                               <p> Dîtes à l'auteur pourquoi sa candidature est invalide </p>
                               <div class=\"row\">
                                    <div class=\"col-md-12\">
                                         <div class=\"form-group\">
                                            <label for=\"exampleFormControlTextarea1\"> Donnez quelques precisions au candidat </label>
                                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"button\" class=\"btn btn-primary btn-sm\">Continuer</button>
                            </div>
                        </div>
                    </div>
                </div>

 <!-- Vertically centered modal -->
            <!-- Modal -->
                <div class=\"modal fade\" id=\"MessageModal\" tabindex=\"-1\" aria-labelledby=\"MessageModal\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\"> Candidature à completer </h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                               <p> Souhaitez-vous envoyer un message à l'auteur de la candidature ?</p>
                               <div class=\"row\">
                                    <div class=\"col-md-12\">
                                         <div class=\"form-group\">
                                            <label for=\"exampleFormControlTextarea1\"> Donnez quelques precisions au candidat </label>
                                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"button\" class=\"btn btn-primary btn-sm\">Continuer</button>
                            </div>
                        </div>
                    </div>
                </div>

              {# Modal #}
        <!-- Vertically centered modal -->
            <!-- Modal -->
                <div class=\"modal fade\" id=\"incompletModal\" tabindex=\"-1\" aria-labelledby=\"incompletModal\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Candidature incomplète </h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                               <p>Quelles sont informations manquantes ?</p>
                               <div class=\"row\">
                                    <div class=\"col-md-6\">
                                            <ul>
                                                <li> 
                                                    Logement actuel
                                                </li>
                                                <li> 
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"logement-actuel\">
                                                        <label class=\"custom-control-label\" for=\"logement-actuel\" value=\"logement actuel\"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    <div class=\"col-md-6\">
                                            <ul>
                                                <li> 
                                                    Logement desiré
                                                </li>
                                                <li> 
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"Logement desiré\" value=\"\">
                                                        <label class=\"custom-control-label\" for=\"Logement desiré\"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    <div class=\"col-md-6\">
                                            <ul>
                                                <li> 
                                                    Acquéreur
                                                </li>
                                                <li> 
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"Acquéreur\">
                                                        <label class=\"custom-control-label\" for=\"Acquéreur\"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    <div class=\"col-md-6\">
                                            <ul>
                                                <li> 
                                                    Crédit
                                                </li>
                                                <li> 
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"Crédit\">
                                                        <label class=\"custom-control-label\" for=\"Crédit\"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    <div class=\"col-md-6\">
                                            <ul>
                                                <li> 
                                                    Motivation
                                                </li>
                                                <li> 
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"Motivation\">
                                                        <label class=\"custom-control-label\" for=\"Motivation\"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                    </div>
                                    <div class=\"col-md-12\">
                                         <div class=\"form-group\">
                                            <label for=\"exampleFormControlTextarea1\"> Donnez quelques precisions au candidat </label>
                                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"button\" class=\"btn btn-primary btn-sm\">Continuer</button>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <div class=\"modal fade\" tabindex=\"-1\" id=\"delete-candidature\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\"> Supprimer la candidature </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>Voulez-vous supprimer cette candidature ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger btn-sm delete\">Supprimer</button>
            </div>
            </div>
        </div>
</div>
{% endblock %}

{% block javascripts %}
    <script>
            \$(function() {
                \$('.fa-trash-alt').on('click', function() {
                    \$('#delete-candidature').modal('show')
                    \$('.delete').on('click', ()=> {
                        \$(this).closest('.card').remove()
                        \$('#delete-candidature').modal('hide')
                    } )
                   
                } )
            })

    </script>
{% endblock %}", "gestion/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/gestion/index.html.twig");
    }
}
