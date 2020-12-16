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

/* projet/projet-page.html.twig */
class __TwigTemplate_607eb489a7213040c73ee6ed8946fe738f502ece45348b1e46e712550254062e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/projet-page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/projet-page.html.twig"));

        // line 3
        $context["title"] = "Page projet";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/projet-page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/projet-style.css"), "html", null, true);
        echo "\">
   <style>
    .arr {
        cursor: pointer;
    }
    .fa-chevron-circle-left {
        position: absolute;
        left: -2%;
        top: 50%;
        z-index: 1;
    }
    .fa-chevron-circle-right {
        position: absolute;
        right: 2%;
        top: 50%;
        z-index: 1;
    }
    .slick-slide {
        padding-right: 1rem
    }
   </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "                    <section>
                        <div class=\"container\" data-rel=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"group-detail\">
                                                <h3> Bascule-Pelouse </h3>
                                                <h5> Besançon </h5>
                                                <span> Ref: 849737593058 </span>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"col-p-f\">
                                                <h3> 2750€/m² </h3>
                                                <span> <i class=\"fas fa-door-open\"></i> <font>12/14</font>  logements disponibles </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"row group-list-detail\">
                                            <div class=\"col-md-6\">
                                                <ul class=\"list-unstyled list-inline first d-flex\">
                                                    <li class=\"list-inline-item facebook\">
                                                        <div>
                                                                <i class=\"fab fa-facebook-f\"></i>
                                                        </div>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <div>
                                                                <i class=\"fab fa-whatsapp\"></i>
                                                        </div>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <div>
                                                                <i class=\"fab fa-twitter\"></i>
                                                        </div>
                                                        
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class=\"col-md-5\">
                                                <ul class=\"second-list-detail d-flex m-0\">
                                                    <li class=\"ml-60\" >
                                                        <button type=\"button\" class=\"btn btn-light ml-378 addfav p-0\">
                                                            <i class=\"far fa-heart\" style=\"font-size: 35px\"></i> 
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class=\"col-md-11\">
                                     ";
        // line 85
        echo "                                        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                                            <ol class=\"carousel-indicators\">
                                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                                            </ol>
                                            <div class=\"carousel-inner\">
                                                <div class=\"carousel-item active\">
                                                    <img class=\"d-block w-100\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/K&+_NEOLIA_VUE-03.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                                                </div>
                                                <div class=\"carousel-item\">
                                                    <img class=\"d-block w-100\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/K&+_NEOLIA_VUE-05.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
                                                </div>
                                                <div class=\"carousel-item\">
                                                    <img class=\"d-block w-100\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/K&+-NEOLIA-VUE-04.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
                                                </div>
                                                <div class=\"carousel-item\">
                                                    <img class=\"d-block w-100\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/photo-sat-st-ferjeux_sm.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
                                                </div>
                                            </div>
                                            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Previous</span>
                                            </a>
                                            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Next</span>
                                            </a>
                                        </div>
                                         ";
        // line 115
        echo "                                    </div>
                                     ";
        // line 117
        echo "                                    <div class=\"col-md-11 text-center d-flex align-items-center vignettes-parent justify-content-center\">
                                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center list-inline-item\" data-item=\"0\">
                                            <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/K&+_NEOLIA_VUE-03.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center list-inline-item\" data-item=\"1\">
                                            <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/K&+_NEOLIA_VUE-05.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center list-inline-item\" data-item=\"2\">
                                            <img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/K&+-NEOLIA-VUE-04.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center list-inline-item\" data-item=\"3\">
                                            <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/photo-sat-st-ferjeux_sm.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                    </div>
                                    ";
        // line 132
        echo "                            </div>

                            <div class=\"row group-projet mt-4\">
                                <div class=\"col-md-7 col-all-detail\">
                                    <h3> Les clés de l’opération </h3>
                                    <div class=\"col-key-projet\">
                                        <h4> Le projet </h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-4 top-item\">
                                                <div class=\"item-key\">
                                                    <i class=\"fas fa-rocket icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Type de projet </h5>
                                                        <font> Promotion privée participative </font>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class=\"col-md-4 top-item mt-0\">
                                                    <div class=\"item-key\">
                                                    <i class=\"fas fa-cubes icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Typologie </h5>
                                                        <font> habitat intermédiaire </font>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 top-item\">
                                                    <div class=\"item-key\">
                                                    <i class=\"fas fa-coins icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Prix </h5>
                                                        <font> 2750€/m² </font>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class=\"col-md-4\">
                                                <div class=\"item-key\">
                                                <i class=\"fas fa-layer-group icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Montage </h5>
                                                        <font> Vente en l’état de futur achèvement.</font>
                                                    </div>
                                                </div>
                                            </div>
                                
                                            <div class=\"col-md-4\">
                                                <div class=\"item-key\">
                                                <i class=\"fas fa-chart-line icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Phase </h5>
                                                        <font> Constitution du groupe d’habitants </font>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"item-key\">
                                                <i class=\"fas fa-calendar-check icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Livraison </h5>
                                                        <font> Début 2023 </font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class=\"col-key-logement\">
                                        <h4> Les logements </h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-6 top-item\">
                                                <div class=\"item-key\">
                                                    <i class=\"fas fa-city icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5>  Nombre total de logements </h5>
                                                        <font> 14 logements </font>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 top-item\">
                                                    <div class=\"item-key\">
                                                    <i class=\"fab fa-deviantart icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Typologies </h5>
                                                        <font> du T2 au T5 </font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                        <div class=\"col-key-logement\">
                                            <h4> Le programme </h4>
                                            <p>
                                                L'opération vient d'être lancée, nous sommes encore à la phase de constitution du groupe de futurs acquéreurs, donc les ateliers de programmation et de co-conception n'ont pas encore commencé. Aucun logement n'a encore été attribué, ni plan réalisé, donc en terme de logement tout est possible, du T2 au T5 ou plus, selon ce que vous voulez. Le projet comptera entre 10 et 14 logements, en fonction de la surface voulue par chacun des ménages. Un prix est fixé à 2750 €/m2 avec parking en sous-sol inclus. Pour la programmation des espaces partagés, un jardin/potager commun a déjà été programmé. Tous les autres espaces et services partagés et les parties communes restent à définir, et seront choisis par le groupe d’habitants. Le bilan de l’opération a été fait de sorte que ces espaces soient inclus dans le prix aum2 des logements (donc inclus dans les 2750€).
                                            </p>
                                        </div>
                                    <hr>
                                    <div class=\"col-key-logement\">
                                        <h4> Les espaces partagés </h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"card-espace\">
                                                <i class=\"fas fa-american-sign-language-interpreting\"></i>  
                                                <div>
                                                        <h6> Services/biens mutualisés </h6>
                                                        <p>
                                                            oui à définir par le groupe
                                                        </p>
                                                </div>
                                                
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"card-espace\">
                                                    <i class=\"fas fa-border-style\"></i>
                                                    <div>
                                                        <h6> Espaces communs intérieurs </h6>
                                                        <p>
                                                            oui à définir par le groupe 
                                                        </p>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"card-espace\">
                                                        <i class=\"fas fa-border-none\"></i>
                                                    <div>
                                                        <h6> Espaces communs extérieurs </h6>
                                                            <p>
                                                                Jardin potager, autre possible à définir par le groupe
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"card-espace\">
                                                    <i class=\"fas fa-chess-board\"></i>
                                                    <div>
                                                        <h6> Espaces privés extérieurs </h6>
                                                        <p>
                                                            oui à définir
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 style=\"margin-top: 40px\"> Présentation du projet </h3>
                                        <div class=\"col-key-presentation\">
                                            <p>
                                                Cette opération de 10 à 14 logements s’inscrit dans le cadre d’un projet de logements plus vaste comprenant 18 logements locatifs sociaux installés face à la place de la Bascule, et de 6 maisons en accession sociale prenant place le long de la rue de la Pelouse. Les trois programmes sont réunis par un jardin en cœur d’îlot entièrement piéton et végétalisé. L’implantation du projet d’habitat participatif le protège des nuisances de la rue de la Pelouse et de la place de la Bascule.
                                            </p>
                                        </div>
                                        <div class=\"col-list-plus bg__secondary__light p-3\">
                                            <h5 style=\"color: #667D99;font-weight: 600\"> EN SAVOIR PLUS </h5>
                                            <ul>
                                                <li> <a href=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("docs/Catalog-Artistes-Festillésime41-Prog2012.pdf"), "html", null, true);
        echo "\" target=\"blank\"> maquette de présentation.pdf </a></li>
                                                <li> <a href=\"Catalog-Artistes-Festillésime41-Prog2012.pdf\" target=\"blank\"> lescityzens.com </a></li>
                                            </ul>
                                        </div>
                                        <h3 style=\"margin-top: 40px\"> Le quartier </h3>
                                        <div class=\"col-key-quartier\">
                                            <p>
                                                L’opération est située en plein cœur du quartier Saint-Ferjeux, entre la place de la Bascule et la rue de la Pelouse, sur le terrain de l’ancienne école de la Pelouse, à côté du Casino. Véritable village dans la ville entre la rue de Dole et le boulevard Kennedy, Saint-Ferjeux est un quartier apprécié de la ville qui a su conserver une forte identité culturelle, environnementale et patrimoniale.
                                                Le projet est desservi par un réseau de transport en commun performant et dispose à proximité d’équipements publics divers (culture, petite enfance, école, sport, etc.), de commerces, de services et d’un marché de plein air.
                                            </p>

                                            <div id=\"mapid\" style=\"width: 600px; height: 400px;\"></div>
                                        </div>
                                        <h3 style=\"margin-top: 40px\"> Les acteurs de l’opération </h3>
                                        <div class=\"col-key-acteur\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-4 item-actor\">
                                                            <div class=\"d-flex justify-content-center\">
                                                                <div class=\"d-flex justify-content-center align-items-center\">
                                                                    <img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/neolia.jpg"), "html", null, true);
        echo "\" class=\"w-100 img-fluid \">
                                                                </div>
                                                            </div>
                                                            <h4 class=\"mt-3\">Neolia</h4>
                                                            <h5> Maîtrise d’ouvrage </h5>
                                                            <p>
                                                                Entreprise sociale pour l’habitat, filiale d’Action Logement, Neolia est un acteur majeur du logement abordable à Besançon et y gère près de 6 000 logements. Neolia propose également des programmes de logements en accession sociale sécurisée et à prix maîtrisés. Site : http://www.neolia.fr.
                                                            </p>
                                                    </div>
                                                    <div class=\"col-md-4 item-actor\">
                                                            <div class=\"d-flex justify-content-center\">
                                                                <div class=\"d-flex justify-content-center align-items-center\">
                                                                    <img src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/logotype_lcz.svg"), "html", null, true);
        echo "\" class=\"w-100 img-fluid \">
                                                                </div>
                                                            </div>
                                                            <h4 class=\"mt-3\"> LesCityzens </h4>
                                                            <h5> Assistant à maîtrise d’ouvrage & Assistant à maîtrise d’usage </h5>
                                                            <p>
                                                                LesCityzens est un porteur de projet experimenté dans l'habitat participatif. Son rôle est de reviser les candidatures et aider des personnes dans leur démarche.
                                                            </p>
                                                    </div>
                                                    <div class=\"col-md-4 item-actor\">
                                                            <div class=\"d-flex justify-content-center\">
                                                                <div class=\"d-flex justify-content-center align-items-center\">
                                                                    <img src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/ketPlus.png"), "html", null, true);
        echo "\" class=\"w-100 img-fluid\">
                                                                </div>
                                                            </div>
                                                            <h4 class=\"mt-3\"> K & + ARCHITECTURE GLOBALE </h4>
                                                            <h5> Maitrise d’oeuvre </h5>
                                                            <p>
                                                                Spécialiste reconnue de la fabrique urbaine collaborative et en particulier de l’habitat participatif, LesCityZens est membre du Club Anru+ Les Innovateurs. LesCityZens va accompagner le groupe d’habitants de cette opération pour le compte du promoteur social Neolia. Site : https://lescityzens.fr.
                                                            </p>
                                                    </div>
                                                </div>
                                        </div>
                                        ";
        // line 347
        echo "                                        <h3 style=\"margin-top: 40px\"> Les ambitions du projet et la démarche participative </h3>
                                        <div class=\"col-key-rejoindre\">
                                            <p>
                                                Le montage du projet est de la promotion privée participative, c’est-à-dire que c’est un promoteur qui porte le projet. C’est lui qui gère le projet et qui en est responsable, qui s’occupe des aspects administratifs, juridiques, financiers, des assurances, des permis, de la logistique, de la construction, etc, et des différents intervenants (banques, notaires, bureaux d’études, entreprises de construction...). 
                                            </p>
                                            <p>
                                                C’est donc un montage très sécurisant pour le futur acquéreur. Vous interviendrez avec les autres habitants dans la programmation et la conception du projet c’est-à-dire dans le choix des espaces et services partagés et dans la conception et l'aménagement de ces espaces, des parties communes et de votre logement. Des ateliers entre les futurs habitants, l’AMO/AMU et les architectes seront organisés régulièrement pendant lesquels vous pourrez définir vos besoins et vos envies (individuellement pour votre logement et collectivement pour les parties communes et la vie de l’immeuble) et faire des retours sur les plans dessinés en fonction des demandes du groupe. C’est un projet qui se conçoit ensemble, main dans la main. Les logements pré-attribués vous seront officiellement vendus en vefa une fois le pc purgé.

                                            </p>

                                        ";
        // line 358
        echo "                                        <h6 style=\"margin-top: 40px\"> Le mot des architectes : </h6>
                                        
                                            <p>
                                                L’approche architecturale s’appuiera sur une conception bioclimatique. Nous sommes convaincus de la nécessité de s’investir dans une démarche de développement durable. Aussi, nous veillons à respecter scrupuleusement les nouvelles exigences environnementales sur lesquelles tout projet de développement doit s’appuyer. Il est pour nous primordial de formuler des propositions toujours plus performantes et en adéquation avec les attentes de la maîtrise d’ouvrage et de la maîtrise d’usage.  Pour ce faire, nous intégrons les objectifs énergétiques et environnementaux dès les premières phases de réflexion. Nous travaillons sur la compacité, l’indice de forme, les orientations de baies vitrées et les concepts de protections solaires. Nous privilégions, dans la mesure du possible, toute suggestion permettant d’emmener le projet vers un bâtiment plus durable et moins énergivore. 
                                            </p>
                                            <p>
                                                C’est donc un montage très sécurisant pour le futur acquéreur. Vous interviendrez avec les autres habitants dans la programmation et la conception du projet c’est-à-dire dans le choix des espaces et services partagés et dans la conception et l'aménagement de ces espaces, des parties communes et de votre logement. Des ateliers entre les futurs habitants, l’AMO/AMU et les architectes seront organisés régulièrement pendant lesquels vous pourrez définir vos besoins et vos envies (individuellement pour votre logement et collectivement pour les parties communes et la vie de l’immeuble) et faire des retours sur les plans dessinés en fonction des demandes du groupe. C’est un projet qui se conçoit ensemble, main dans la main. Les logements pré-attribués vous seront officiellement vendus en vefa une fois le pc purgé.
                                            </p>
                                            <p>
                                                Plusieurs éléments sont pris en compte dès les prémices du projet : <br>
                                                Le confort d’été : L’équilibre entre la masse inertielle des matériaux lourds tels que le béton armé, la brique terre cuite ou crue, les enduit à la chaux ou terre crue et l’enveloppe isolante extérieure de fibres végétales telles que les fibres de bois, laine de chanvre ou bottes de paille constitue l’équation qui permet un rafraichissement naturel. Ce principe est complété par un système de ventilation performant.
                                            </p>
                                            <p>
                                                Les apports solaires passifs : ils sont maximisés en optimisant la surface des baies vitrées selon leur orientation, en privilégiant le Sud et l’Est. Ces deux orientations sont plus propices pour bénéficier des apports énergétiques solaires en hiver et sont plus facile à protéger des rayonnements solaires en période estivale. 
                                            </p>
                                            <p>
                                                Une approche bas carbone : l’emploi de matériaux biosourcés, peu transformés et locaux est recherché afin de diminuer le bilan carbone. 
                                            </p>
                                        </div>


                                        <h3 style=\"margin-top: 40px\"> Comment rejoindre l’opération ? </h3>
                                        <div class=\"col-key-rejoindre\" >
                                            <p>
                                                La procédure de candidature est dématérialisée et se fait entièrement en ligne.
                                                Pour postuler, créez un compte, connectez-vous puis cliquez sur le bouton “candidater”. Vous serez alors redirigé vers le formulaire de candidature qui constitue le dossier à fournir. Nous vous conseillons de regarder attentivement toutes les questions avant de commencer pour savoir quelles informations et justificatifs vous seront demandés. Retrouver votre candidature en cours à n’importe quel moment dans l’espace “mes candidatures” de votre compte. Une fois votre dossier finalisé, cliquez sur le bouton “transmettre ma candidature”.
                                            </p>
                                            <p>
                                                Ce projet est réservé aux personnes sous plafond de ressources PLI. Nous traitons les candidatures dans l’ordre de réception. Les seuls critères de sélection sont la viabilité de votre dossier financier et votre éligibilité au PLI. L’affectation des logements se fait dans l’ordre de réception des candidatures à condition que votre dossier soit complet. Sinon c’est la date de réception du dossier complété qui compte.
                                            </p>
                                        </div>
                                        <a href=\"";
        // line 389
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidater");
        echo "\" class=\"btn btnSubmit btn-lg\" role=\"button\" aria-disabled=\"false\" id=\"btnCand\">Candidater</a>
                                </div>
                                    <div class=\"col-md-5\">
                                        <div>
                                            <div class=\"bloc-author p-4\" id=\"blk-author\">
                                            <div class=\"blk-author-detail text-center\">
                                                <div class=\"min-author\">
                                                    <img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/logotype_lcz.svg"), "html", null, true);
        echo "\">
                                                </div>
                                                    ";
        // line 399
        echo "                                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_ad_author");
        echo "\" class=\"btn btnPrimary btn-sm w-100 ml-l3 mr-3 mt-3\">Contacter</a>
                                                <div class=\"blk-phone\">
                                                    <div>
                                                    <button class=\"btn btnSubmitBlue btn-sm btn-author ml-l3 mr-3 mt-3 w-100\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\" data-info=\"0600000000\"> Afficher le numéro de téléphone </button>
                                                    </div>
                                                </div>
                                                <p style=\"margin-top: 1rem;font-size: 13px\">
                                                    Des questions ? Envie d'en savoir plus ? <br> Venez en discuter avec nous !
                                                </p>
                                            </div>
                                            ";
        // line 410
        echo "
                                            <div class=\"blk-event text-center\">
                                            ";
        // line 413
        echo "                                                   <div class=\"slicks\">
                                                        <div class=\"event p-4  position-relative\">
                                                            <div class=\"d-flex\">
                                                                    <div class=\"blk-calendar \">
                                                                        <i class=\"fas fa-calendar-day text-muted d-block\"></i>
                                                                        <ul class=\"mt-1\">
                                                                            <li>03-12</li>
                                                                            <li>2020</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class=\"event-detail\">
                                                                        <h6> Présentation des membres </h6>
                                                                        <p>
                                                                            3 rue du Moulin
                                                                        </p>
                                                                    </div>
                                                            </div>
                                                            <a href=\"#\" class=\"btn btnSubmitOutline btn-sm w-100\" data-toggle=\"modal\" data-target=\"#mymodal\">Participer</a>
                                                        </div>
                                                            
                                                            
                                                                <div class=\"event p-4  position-relative\">
                                                                    <div class=\"d-flex\">
                                                                            <div class=\"blk-calendar \">
                                                                                <i class=\"fas fa-calendar-day text-muted d-block\"></i>
                                                                                <ul class=\"mt-1\">
                                                                                    <li>01-12</li>
                                                                                    <li>2020</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class=\"event-detail\">
                                                                                <h6> Journée d'intergénérationnelle </h6>
                                                                                <p>
                                                                                    1 Allee Marc Siberchicot Appt 33 Bat A2 Paul Claudel
                                                                                </p>
                                                                            </div>
                                                                    </div>
                                                                        <a href=\"#\" class=\"btn btnSubmitOutline btn-sm w-100\" data-toggle=\"modal\" data-target=\"#mymodal\">Participer</a>
                                                                </div>
                                                                <div class=\"event p-4  position-relative\">
                                                                    <div class=\"d-flex\">
                                                                            <div class=\"blk-calendar \">
                                                                                <i class=\"fas fa-calendar-day text-muted d-block\"></i>
                                                                                <ul class=\"mt-1\">
                                                                                    <li>01-12</li>
                                                                                    <li>2020</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class=\"event-detail\">
                                                                                <h6> Journée d'intergénérationnelle </h6>
                                                                                <p>
                                                                                    1 Allee Marc Siberchicot Appt 33 Bat A2 Paul Claudel
                                                                                </p>
                                                                            </div>
                                                                    </div>
                                                                        <a href=\"#\" class=\"btn btnSubmitOutline btn-sm w-100\" data-toggle=\"modal\" data-target=\"#mymodal\">Participer</a>
                                                                </div>
                                                      
                                                            </div>
                                                   
                                                 
                                                        ";
        // line 475
        echo "                                                    <a href=\"";
        echo "\"  class=\"btn btnSubmitOutline w-100 mt-3\">
                                                        <i class=\"icon-simulation_vector greyturc\"></i>
                                                            <font style=\"font-size: 12px\"> Simulateur de capacité financière </font>
                                                        </a>
                                                        
                                                        <a href=\"";
        // line 480
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidater");
        echo "\"  class=\"btn btnSubmit w-100 mt-3\">
                                                            <i class=\"mr-2 fas fa-edit\"></i>
                                                        <font style=\"font-size: 12px\">Candidater</font>
                                                        </a>
                                                   </div>
                                                    
                                            </div>

                                            </div>
                                        </div>
                                        
                                    </div>  
                                </div>
                    </section>
    
    ";
        // line 496
        echo "    <div class=\"modal fade bd-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" id=\"modal-info\">
        
    </div>
    <!-- Modal -->
              <div class=\"modal fade bd-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" id=\"mymodal\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content \">
                            <div class=\"row m-0\">
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex mt-3\">
                                        <div class=\"card-event mx-3\">
                                            <div class=\"d-flex\">
                                                <div class=\"m-auto\">
                                                    <div class=\"d-grid text-center\">
                                                        <h2 class=\"mb-0\"> Mercredi   </h2>
                                                        <h1 class=\"mb-0\"> 10 </h1>
                                                        <h3 class=\"mb-0\"> Août </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"w-250 m-auto mt-10 footer-event text-center\">
                                               <h2> Reunion d’information </h2>
                                               <h3> 8h30-20h30  </h3>
                                               <p>
                                                    Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                               </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mx-3 mt-3\">
                                        <p  class=\"text-justify\" style=\"font-size: 13px\">
                                            Prochaine réunion : le 26 octobre à 18h30 Selon les recommandations actuellement en vigueur cette réunion se fera à distance via zoom. Si vous êtes intéressés, pensez bien à nous envoyer un mail à saintferjeux@lescityzens.fr. Nous vous enverrons quelques temps avant la réunion par retour de mail le lien zoom pour vous connecter.
                                        </p>
                                    </div>
                                    
                                </div>
                               
                                <div class=\"col-md-6 form-right\">
                                    <div class=\"py-15 mt-3\">
                                        <h2 style=\"font-size: 25px\"> Formulaire de participation </h2>
                                            <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\"><label for=\"nom\" class=\"required\">Votre nom</label><input type=\"text\" id=\"nom\" name=\"nom\" required=\"required\" placeholder=\"\" class=\"form-control\"></div>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\"><label for=\"nom\" class=\"required\">Votre prénom</label><input type=\"text\" id=\"nom\" name=\"nom\" required=\"required\" placeholder=\"\" class=\"form-control\"></div>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\"><label for=\"email\" class=\"required\"> Votre émail </label><input type=\"text\" id=\"email\" name=\"email\" required=\"required\" placeholder=\"\" class=\"form-control\"></div>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\"><label for=\"numero\" class=\"required\"> Votre numéro </label><input type=\"tel\" id=\"numero\" name=\"numero\" required=\"required\" placeholder=\"\" class=\"form-control\"></div>
                                                    </div>
                                                    <div class=\"col-md-12\">
                                                        <a href=\"#\" style=\"color: #006b6b !important;\"> Je souhaite modifier mes infos de contact </a>
                                                    </div>
                                                    <div class=\"col-md-12\">
                                                        <h3 class=\"answer\"> Répondez à cette question </h3>
                                                        <div class=\"form-group\"><label for=\"pers\" class=\"required\"> Avec combien de personne souhaitez-vous participer ? </label><input type=\"number\" min=\"0\" id=\"pers\" name=\"pers\" required=\"required\" placeholder=\"\" class=\"form-control\"></div>
                                                    </div>
                                                    <div class=\"col-md-12\">
                                                        <button type=\"button\" class=\"btn btn-primary\"> Envoyer </button>
                                                        <button type=\"button\" class=\"btn btn-danger\"> Annuler </button>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 569
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 570
        echo "            <script>
            \$(function () {
                const top = document.getElementById('btnCand')
                console.log('top ', top.offsetTop)
                \$('.slicks').slick({
                    arrows: true,
                    prevArrow: \"<i class='arr fas fa-chevron-circle-left' rel='slickPrev'></i>\",
                    nextArrow: \"<i class='arr fas fa-chevron-circle-right' rel='slickNext'></i>\",
                });
                \$(document).on('click','.arr', function(){
                    \$('.slicks').slick(\$(this).attr('rel'));
                })
                if(\$('section .container').data('rel') == 4) {
                   let corps =  `<div class=\"modal-dialog\">
                                <div class=\"modal-content\" style=\"padding: 34px;\">
                                    <div class='row'>
                                        <div class=\"col-md-12 success-msg animated animate__bounceIn\" style=\"display: block;\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12 __success\">
                                                    <p>Votre message a bien été envoyé.</p>
                                                </div>
                                                <div class=\"col-md-12 d-flex content-success\">
                                                    <div class=\"pr-3\">
                                                        <img src=\"/build/images/web/direct.bf20547e.png\" width=\"50px\">
                                                    </div>
                                                    <p style='font-size: 13px;text-align:justify'>
                                                        Il s’affichera dans quelques instants dans votre messagerie. Simple et rapide, elle vous
                                                        permet d’échanger avec les porteurs de projet.
                                                    </p>
                                                </div>
                                                <div class=\"col-md-12 __btn_success\">
                                                    <a style='float: right' href=\"/messagerie\" type=\"button\" class=\"btn btn-sm btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">Accéder à la
                                                            messagerie</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`
                    
                    \$('#modal-info').html(corps)
                    setTimeout(()=> {
                            \$('#modal-info').modal('show')
                             window.onpopstate = function(event) {
                                console.log(`location: \${document.location}, state: \${JSON.stringify(event.state)}`)
                            }
                    }, 1500)
                   
                }
                \$('.more-events').on('click', function() {
                    if( \$(this).hasClass('slideTog')) {
                            \$('.section-events').removeClass('slideMore')
                             \$(this).removeClass('slideTog')
                              \$('.more-events .fa-angle-up').removeClass('turn-angle')
                             return
                    }
                       \$('.section-events').addClass('slideMore')
                       \$('.more-events .fa-angle-up').addClass('turn-angle')
                       \$(this).addClass('slideTog')
                       
                })
                \$('.btn-author').on('click', function() {
                            var info = \$(this).data('info')
                          let corps = `<div class=\"modal-dialog modal-sm\">
                                <div class=\"modal-content\" style=\"padding: 34px;\">
                                    <h3 style=\"text-align: center\">\${info}'</h3>
                                </div>
                            </div>`
                            \$('#modal-info').html(corps)
                            \$('#modal-info').modal('show')
                    })

                    var mymap = L.map('mapid').setView([47.231324, 5.993184], 13);
                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        maxZoom: 18,
                        attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, ' +
                            '<a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
                            'Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1
                    }).addTo(mymap);

            var busIcon = new L.Icon({
                iconUrl: \"";
        // line 654
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/house.svg"), "html", null, true);
        echo "\",
                iconSize: [50, 50],
                id: 30
            });

            L.marker([47.231324, 5.993184], {icon: busIcon}).addTo(mymap)
            var popup = L.popup();

            \$('.list-inline-item').on('click', function() {
                let item = \$(this).data('item')
                \$('.carousel').carousel(parseInt(item))
            } )

            \$(document).on('click', '.addfav', function() {
                \$(this).find('.fa-heart').hasClass('favoris')?\$(this).find('.fa-heart').removeClass('favoris'):\$(this).find('.fa-heart').addClass('favoris')
            } )

            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent(\"You clicked the map at \" + e.latlng.toString())
                    .openOn(mymap);
            }
                \$('.event').on('mouseenter', function(\$e) {
                    \$(this).find('.slide-part').addClass('slideUp')
                } ).on('mouseleave', function(\$e) {
                    \$(this).find('.slide-part').removeClass('slideUp')
                } )
            mymap.on('click', onMapClick);

                    \$(window).scroll(function fix_element() {
                       console.log(\$(window).scrollTop())
                       let scroll = \$(window).scrollTop()
                       console.log('hauteur ', top.offsetTop)
                       if(scroll >= 932 && scroll < top.offsetTop) {
                           \$('#blk-author').addClass('fixed').removeClass('absolute')
                       } 
                       if(scroll < 932) {
                           \$('#blk-author').removeClass('fixed')
                       }
                        if(scroll >= top.offsetTop) {
                            \$('#blk-author').addClass('absolute').removeClass('fixed')
                        }
                    });
                })
            </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projet/projet-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  822 => 654,  736 => 570,  726 => 569,  645 => 496,  627 => 480,  619 => 475,  556 => 413,  552 => 410,  538 => 399,  533 => 396,  523 => 389,  490 => 358,  478 => 347,  464 => 335,  449 => 323,  434 => 311,  412 => 292,  250 => 132,  244 => 128,  238 => 125,  232 => 122,  226 => 119,  222 => 117,  219 => 115,  204 => 102,  198 => 99,  192 => 96,  186 => 93,  176 => 85,  119 => 30,  116 => 29,  106 => 28,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Page projet' %}

{% block stylesheets %}
   <link rel=\"stylesheet\" href=\"{{ asset('css/projet-style.css') }}\">
   <style>
    .arr {
        cursor: pointer;
    }
    .fa-chevron-circle-left {
        position: absolute;
        left: -2%;
        top: 50%;
        z-index: 1;
    }
    .fa-chevron-circle-right {
        position: absolute;
        right: 2%;
        top: 50%;
        z-index: 1;
    }
    .slick-slide {
        padding-right: 1rem
    }
   </style>
{% endblock %}
{% block body %}
                    <section>
                        <div class=\"container\" data-rel=\"{{id}}\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"group-detail\">
                                                <h3> Bascule-Pelouse </h3>
                                                <h5> Besançon </h5>
                                                <span> Ref: 849737593058 </span>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"col-p-f\">
                                                <h3> 2750€/m² </h3>
                                                <span> <i class=\"fas fa-door-open\"></i> <font>12/14</font>  logements disponibles </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"row group-list-detail\">
                                            <div class=\"col-md-6\">
                                                <ul class=\"list-unstyled list-inline first d-flex\">
                                                    <li class=\"list-inline-item facebook\">
                                                        <div>
                                                                <i class=\"fab fa-facebook-f\"></i>
                                                        </div>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <div>
                                                                <i class=\"fab fa-whatsapp\"></i>
                                                        </div>
                                                    </li>
                                                    <li class=\"list-inline-item\">
                                                        <div>
                                                                <i class=\"fab fa-twitter\"></i>
                                                        </div>
                                                        
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class=\"col-md-5\">
                                                <ul class=\"second-list-detail d-flex m-0\">
                                                    <li class=\"ml-60\" >
                                                        <button type=\"button\" class=\"btn btn-light ml-378 addfav p-0\">
                                                            <i class=\"far fa-heart\" style=\"font-size: 35px\"></i> 
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class=\"col-md-11\">
                                     {# __________CAROUSEL DE PHOTOS__________ #}
                                        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                                            <ol class=\"carousel-indicators\">
                                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                                            </ol>
                                            <div class=\"carousel-inner\">
                                                <div class=\"carousel-item active\">
                                                    <img class=\"d-block w-100\" src=\"{{ asset('build/images/static/K&+_NEOLIA_VUE-03.jpg') }}\" alt=\"First slide\">
                                                </div>
                                                <div class=\"carousel-item\">
                                                    <img class=\"d-block w-100\" src=\"{{ asset('build/images/static/K&+_NEOLIA_VUE-05.jpg') }}\" alt=\"Second slide\">
                                                </div>
                                                <div class=\"carousel-item\">
                                                    <img class=\"d-block w-100\" src=\"{{ asset('build/images/static/K&+-NEOLIA-VUE-04.jpg') }}\" alt=\"Third slide\">
                                                </div>
                                                <div class=\"carousel-item\">
                                                    <img class=\"d-block w-100\" src=\"{{ asset('build/images/static/photo-sat-st-ferjeux_sm.jpg') }}\" alt=\"Third slide\">
                                                </div>
                                            </div>
                                            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Previous</span>
                                            </a>
                                            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Next</span>
                                            </a>
                                        </div>
                                         {# __________FIN__________ #}
                                    </div>
                                     {# __________MINIATURE DE PHOTOS__________ #}
                                    <div class=\"col-md-11 text-center d-flex align-items-center vignettes-parent justify-content-center\">
                                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center list-inline-item\" data-item=\"0\">
                                            <img src=\"{{ asset('build/images/static/K&+_NEOLIA_VUE-03.jpg') }}\">
                                        </div>
                                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center list-inline-item\" data-item=\"1\">
                                            <img src=\"{{ asset('build/images/static/K&+_NEOLIA_VUE-05.jpg') }}\">
                                        </div>
                                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center list-inline-item\" data-item=\"2\">
                                            <img src=\"{{ asset('build/images/static/K&+-NEOLIA-VUE-04.jpg') }}\">
                                        </div>
                                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center list-inline-item\" data-item=\"3\">
                                            <img src=\"{{ asset('build/images/static/photo-sat-st-ferjeux_sm.jpg') }}\">
                                        </div>
                                    </div>
                                    {# __________FIN__________ #}
                            </div>

                            <div class=\"row group-projet mt-4\">
                                <div class=\"col-md-7 col-all-detail\">
                                    <h3> Les clés de l’opération </h3>
                                    <div class=\"col-key-projet\">
                                        <h4> Le projet </h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-4 top-item\">
                                                <div class=\"item-key\">
                                                    <i class=\"fas fa-rocket icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Type de projet </h5>
                                                        <font> Promotion privée participative </font>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class=\"col-md-4 top-item mt-0\">
                                                    <div class=\"item-key\">
                                                    <i class=\"fas fa-cubes icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Typologie </h5>
                                                        <font> habitat intermédiaire </font>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 top-item\">
                                                    <div class=\"item-key\">
                                                    <i class=\"fas fa-coins icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Prix </h5>
                                                        <font> 2750€/m² </font>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class=\"col-md-4\">
                                                <div class=\"item-key\">
                                                <i class=\"fas fa-layer-group icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Montage </h5>
                                                        <font> Vente en l’état de futur achèvement.</font>
                                                    </div>
                                                </div>
                                            </div>
                                
                                            <div class=\"col-md-4\">
                                                <div class=\"item-key\">
                                                <i class=\"fas fa-chart-line icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Phase </h5>
                                                        <font> Constitution du groupe d’habitants </font>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"item-key\">
                                                <i class=\"fas fa-calendar-check icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Livraison </h5>
                                                        <font> Début 2023 </font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class=\"col-key-logement\">
                                        <h4> Les logements </h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-6 top-item\">
                                                <div class=\"item-key\">
                                                    <i class=\"fas fa-city icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5>  Nombre total de logements </h5>
                                                        <font> 14 logements </font>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 top-item\">
                                                    <div class=\"item-key\">
                                                    <i class=\"fab fa-deviantart icon\"></i>
                                                    <div class=\"col-item\">
                                                        <h5> Typologies </h5>
                                                        <font> du T2 au T5 </font>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                        <div class=\"col-key-logement\">
                                            <h4> Le programme </h4>
                                            <p>
                                                L'opération vient d'être lancée, nous sommes encore à la phase de constitution du groupe de futurs acquéreurs, donc les ateliers de programmation et de co-conception n'ont pas encore commencé. Aucun logement n'a encore été attribué, ni plan réalisé, donc en terme de logement tout est possible, du T2 au T5 ou plus, selon ce que vous voulez. Le projet comptera entre 10 et 14 logements, en fonction de la surface voulue par chacun des ménages. Un prix est fixé à 2750 €/m2 avec parking en sous-sol inclus. Pour la programmation des espaces partagés, un jardin/potager commun a déjà été programmé. Tous les autres espaces et services partagés et les parties communes restent à définir, et seront choisis par le groupe d’habitants. Le bilan de l’opération a été fait de sorte que ces espaces soient inclus dans le prix aum2 des logements (donc inclus dans les 2750€).
                                            </p>
                                        </div>
                                    <hr>
                                    <div class=\"col-key-logement\">
                                        <h4> Les espaces partagés </h4>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <div class=\"card-espace\">
                                                <i class=\"fas fa-american-sign-language-interpreting\"></i>  
                                                <div>
                                                        <h6> Services/biens mutualisés </h6>
                                                        <p>
                                                            oui à définir par le groupe
                                                        </p>
                                                </div>
                                                
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"card-espace\">
                                                    <i class=\"fas fa-border-style\"></i>
                                                    <div>
                                                        <h6> Espaces communs intérieurs </h6>
                                                        <p>
                                                            oui à définir par le groupe 
                                                        </p>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"card-espace\">
                                                        <i class=\"fas fa-border-none\"></i>
                                                    <div>
                                                        <h6> Espaces communs extérieurs </h6>
                                                            <p>
                                                                Jardin potager, autre possible à définir par le groupe
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"card-espace\">
                                                    <i class=\"fas fa-chess-board\"></i>
                                                    <div>
                                                        <h6> Espaces privés extérieurs </h6>
                                                        <p>
                                                            oui à définir
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 style=\"margin-top: 40px\"> Présentation du projet </h3>
                                        <div class=\"col-key-presentation\">
                                            <p>
                                                Cette opération de 10 à 14 logements s’inscrit dans le cadre d’un projet de logements plus vaste comprenant 18 logements locatifs sociaux installés face à la place de la Bascule, et de 6 maisons en accession sociale prenant place le long de la rue de la Pelouse. Les trois programmes sont réunis par un jardin en cœur d’îlot entièrement piéton et végétalisé. L’implantation du projet d’habitat participatif le protège des nuisances de la rue de la Pelouse et de la place de la Bascule.
                                            </p>
                                        </div>
                                        <div class=\"col-list-plus bg__secondary__light p-3\">
                                            <h5 style=\"color: #667D99;font-weight: 600\"> EN SAVOIR PLUS </h5>
                                            <ul>
                                                <li> <a href=\"{{ asset('docs/Catalog-Artistes-Festillésime41-Prog2012.pdf') }}\" target=\"blank\"> maquette de présentation.pdf </a></li>
                                                <li> <a href=\"Catalog-Artistes-Festillésime41-Prog2012.pdf\" target=\"blank\"> lescityzens.com </a></li>
                                            </ul>
                                        </div>
                                        <h3 style=\"margin-top: 40px\"> Le quartier </h3>
                                        <div class=\"col-key-quartier\">
                                            <p>
                                                L’opération est située en plein cœur du quartier Saint-Ferjeux, entre la place de la Bascule et la rue de la Pelouse, sur le terrain de l’ancienne école de la Pelouse, à côté du Casino. Véritable village dans la ville entre la rue de Dole et le boulevard Kennedy, Saint-Ferjeux est un quartier apprécié de la ville qui a su conserver une forte identité culturelle, environnementale et patrimoniale.
                                                Le projet est desservi par un réseau de transport en commun performant et dispose à proximité d’équipements publics divers (culture, petite enfance, école, sport, etc.), de commerces, de services et d’un marché de plein air.
                                            </p>

                                            <div id=\"mapid\" style=\"width: 600px; height: 400px;\"></div>
                                        </div>
                                        <h3 style=\"margin-top: 40px\"> Les acteurs de l’opération </h3>
                                        <div class=\"col-key-acteur\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-4 item-actor\">
                                                            <div class=\"d-flex justify-content-center\">
                                                                <div class=\"d-flex justify-content-center align-items-center\">
                                                                    <img src=\"{{ asset('build/images/static/neolia.jpg') }}\" class=\"w-100 img-fluid \">
                                                                </div>
                                                            </div>
                                                            <h4 class=\"mt-3\">Neolia</h4>
                                                            <h5> Maîtrise d’ouvrage </h5>
                                                            <p>
                                                                Entreprise sociale pour l’habitat, filiale d’Action Logement, Neolia est un acteur majeur du logement abordable à Besançon et y gère près de 6 000 logements. Neolia propose également des programmes de logements en accession sociale sécurisée et à prix maîtrisés. Site : http://www.neolia.fr.
                                                            </p>
                                                    </div>
                                                    <div class=\"col-md-4 item-actor\">
                                                            <div class=\"d-flex justify-content-center\">
                                                                <div class=\"d-flex justify-content-center align-items-center\">
                                                                    <img src=\"{{ asset('build/images/static/logotype_lcz.svg') }}\" class=\"w-100 img-fluid \">
                                                                </div>
                                                            </div>
                                                            <h4 class=\"mt-3\"> LesCityzens </h4>
                                                            <h5> Assistant à maîtrise d’ouvrage & Assistant à maîtrise d’usage </h5>
                                                            <p>
                                                                LesCityzens est un porteur de projet experimenté dans l'habitat participatif. Son rôle est de reviser les candidatures et aider des personnes dans leur démarche.
                                                            </p>
                                                    </div>
                                                    <div class=\"col-md-4 item-actor\">
                                                            <div class=\"d-flex justify-content-center\">
                                                                <div class=\"d-flex justify-content-center align-items-center\">
                                                                    <img src=\"{{ asset('build/images/static/ketPlus.png') }}\" class=\"w-100 img-fluid\">
                                                                </div>
                                                            </div>
                                                            <h4 class=\"mt-3\"> K & + ARCHITECTURE GLOBALE </h4>
                                                            <h5> Maitrise d’oeuvre </h5>
                                                            <p>
                                                                Spécialiste reconnue de la fabrique urbaine collaborative et en particulier de l’habitat participatif, LesCityZens est membre du Club Anru+ Les Innovateurs. LesCityZens va accompagner le groupe d’habitants de cette opération pour le compte du promoteur social Neolia. Site : https://lescityzens.fr.
                                                            </p>
                                                    </div>
                                                </div>
                                        </div>
                                        {# Les ambitions #}
                                        <h3 style=\"margin-top: 40px\"> Les ambitions du projet et la démarche participative </h3>
                                        <div class=\"col-key-rejoindre\">
                                            <p>
                                                Le montage du projet est de la promotion privée participative, c’est-à-dire que c’est un promoteur qui porte le projet. C’est lui qui gère le projet et qui en est responsable, qui s’occupe des aspects administratifs, juridiques, financiers, des assurances, des permis, de la logistique, de la construction, etc, et des différents intervenants (banques, notaires, bureaux d’études, entreprises de construction...). 
                                            </p>
                                            <p>
                                                C’est donc un montage très sécurisant pour le futur acquéreur. Vous interviendrez avec les autres habitants dans la programmation et la conception du projet c’est-à-dire dans le choix des espaces et services partagés et dans la conception et l'aménagement de ces espaces, des parties communes et de votre logement. Des ateliers entre les futurs habitants, l’AMO/AMU et les architectes seront organisés régulièrement pendant lesquels vous pourrez définir vos besoins et vos envies (individuellement pour votre logement et collectivement pour les parties communes et la vie de l’immeuble) et faire des retours sur les plans dessinés en fonction des demandes du groupe. C’est un projet qui se conçoit ensemble, main dans la main. Les logements pré-attribués vous seront officiellement vendus en vefa une fois le pc purgé.

                                            </p>

                                        {# Le mot des architectes #}
                                        <h6 style=\"margin-top: 40px\"> Le mot des architectes : </h6>
                                        
                                            <p>
                                                L’approche architecturale s’appuiera sur une conception bioclimatique. Nous sommes convaincus de la nécessité de s’investir dans une démarche de développement durable. Aussi, nous veillons à respecter scrupuleusement les nouvelles exigences environnementales sur lesquelles tout projet de développement doit s’appuyer. Il est pour nous primordial de formuler des propositions toujours plus performantes et en adéquation avec les attentes de la maîtrise d’ouvrage et de la maîtrise d’usage.  Pour ce faire, nous intégrons les objectifs énergétiques et environnementaux dès les premières phases de réflexion. Nous travaillons sur la compacité, l’indice de forme, les orientations de baies vitrées et les concepts de protections solaires. Nous privilégions, dans la mesure du possible, toute suggestion permettant d’emmener le projet vers un bâtiment plus durable et moins énergivore. 
                                            </p>
                                            <p>
                                                C’est donc un montage très sécurisant pour le futur acquéreur. Vous interviendrez avec les autres habitants dans la programmation et la conception du projet c’est-à-dire dans le choix des espaces et services partagés et dans la conception et l'aménagement de ces espaces, des parties communes et de votre logement. Des ateliers entre les futurs habitants, l’AMO/AMU et les architectes seront organisés régulièrement pendant lesquels vous pourrez définir vos besoins et vos envies (individuellement pour votre logement et collectivement pour les parties communes et la vie de l’immeuble) et faire des retours sur les plans dessinés en fonction des demandes du groupe. C’est un projet qui se conçoit ensemble, main dans la main. Les logements pré-attribués vous seront officiellement vendus en vefa une fois le pc purgé.
                                            </p>
                                            <p>
                                                Plusieurs éléments sont pris en compte dès les prémices du projet : <br>
                                                Le confort d’été : L’équilibre entre la masse inertielle des matériaux lourds tels que le béton armé, la brique terre cuite ou crue, les enduit à la chaux ou terre crue et l’enveloppe isolante extérieure de fibres végétales telles que les fibres de bois, laine de chanvre ou bottes de paille constitue l’équation qui permet un rafraichissement naturel. Ce principe est complété par un système de ventilation performant.
                                            </p>
                                            <p>
                                                Les apports solaires passifs : ils sont maximisés en optimisant la surface des baies vitrées selon leur orientation, en privilégiant le Sud et l’Est. Ces deux orientations sont plus propices pour bénéficier des apports énergétiques solaires en hiver et sont plus facile à protéger des rayonnements solaires en période estivale. 
                                            </p>
                                            <p>
                                                Une approche bas carbone : l’emploi de matériaux biosourcés, peu transformés et locaux est recherché afin de diminuer le bilan carbone. 
                                            </p>
                                        </div>


                                        <h3 style=\"margin-top: 40px\"> Comment rejoindre l’opération ? </h3>
                                        <div class=\"col-key-rejoindre\" >
                                            <p>
                                                La procédure de candidature est dématérialisée et se fait entièrement en ligne.
                                                Pour postuler, créez un compte, connectez-vous puis cliquez sur le bouton “candidater”. Vous serez alors redirigé vers le formulaire de candidature qui constitue le dossier à fournir. Nous vous conseillons de regarder attentivement toutes les questions avant de commencer pour savoir quelles informations et justificatifs vous seront demandés. Retrouver votre candidature en cours à n’importe quel moment dans l’espace “mes candidatures” de votre compte. Une fois votre dossier finalisé, cliquez sur le bouton “transmettre ma candidature”.
                                            </p>
                                            <p>
                                                Ce projet est réservé aux personnes sous plafond de ressources PLI. Nous traitons les candidatures dans l’ordre de réception. Les seuls critères de sélection sont la viabilité de votre dossier financier et votre éligibilité au PLI. L’affectation des logements se fait dans l’ordre de réception des candidatures à condition que votre dossier soit complet. Sinon c’est la date de réception du dossier complété qui compte.
                                            </p>
                                        </div>
                                        <a href=\"{{path('candidater')}}\" class=\"btn btnSubmit btn-lg\" role=\"button\" aria-disabled=\"false\" id=\"btnCand\">Candidater</a>
                                </div>
                                    <div class=\"col-md-5\">
                                        <div>
                                            <div class=\"bloc-author p-4\" id=\"blk-author\">
                                            <div class=\"blk-author-detail text-center\">
                                                <div class=\"min-author\">
                                                    <img src=\"{{ asset('build/images/static/logotype_lcz.svg') }}\">
                                                </div>
                                                    {# <h5 class=\"mt-3 mb-0\"> LesCityZens </h5> #}
                                                <a href=\"{{path('contact_ad_author')}}\" class=\"btn btnPrimary btn-sm w-100 ml-l3 mr-3 mt-3\">Contacter</a>
                                                <div class=\"blk-phone\">
                                                    <div>
                                                    <button class=\"btn btnSubmitBlue btn-sm btn-author ml-l3 mr-3 mt-3 w-100\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\" data-info=\"0600000000\"> Afficher le numéro de téléphone </button>
                                                    </div>
                                                </div>
                                                <p style=\"margin-top: 1rem;font-size: 13px\">
                                                    Des questions ? Envie d'en savoir plus ? <br> Venez en discuter avec nous !
                                                </p>
                                            </div>
                                            {# Iteration #}

                                            <div class=\"blk-event text-center\">
                                            {# <h3 class=\"my-3\"> Événements </h3> #}
                                                   <div class=\"slicks\">
                                                        <div class=\"event p-4  position-relative\">
                                                            <div class=\"d-flex\">
                                                                    <div class=\"blk-calendar \">
                                                                        <i class=\"fas fa-calendar-day text-muted d-block\"></i>
                                                                        <ul class=\"mt-1\">
                                                                            <li>03-12</li>
                                                                            <li>2020</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class=\"event-detail\">
                                                                        <h6> Présentation des membres </h6>
                                                                        <p>
                                                                            3 rue du Moulin
                                                                        </p>
                                                                    </div>
                                                            </div>
                                                            <a href=\"#\" class=\"btn btnSubmitOutline btn-sm w-100\" data-toggle=\"modal\" data-target=\"#mymodal\">Participer</a>
                                                        </div>
                                                            
                                                            
                                                                <div class=\"event p-4  position-relative\">
                                                                    <div class=\"d-flex\">
                                                                            <div class=\"blk-calendar \">
                                                                                <i class=\"fas fa-calendar-day text-muted d-block\"></i>
                                                                                <ul class=\"mt-1\">
                                                                                    <li>01-12</li>
                                                                                    <li>2020</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class=\"event-detail\">
                                                                                <h6> Journée d'intergénérationnelle </h6>
                                                                                <p>
                                                                                    1 Allee Marc Siberchicot Appt 33 Bat A2 Paul Claudel
                                                                                </p>
                                                                            </div>
                                                                    </div>
                                                                        <a href=\"#\" class=\"btn btnSubmitOutline btn-sm w-100\" data-toggle=\"modal\" data-target=\"#mymodal\">Participer</a>
                                                                </div>
                                                                <div class=\"event p-4  position-relative\">
                                                                    <div class=\"d-flex\">
                                                                            <div class=\"blk-calendar \">
                                                                                <i class=\"fas fa-calendar-day text-muted d-block\"></i>
                                                                                <ul class=\"mt-1\">
                                                                                    <li>01-12</li>
                                                                                    <li>2020</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class=\"event-detail\">
                                                                                <h6> Journée d'intergénérationnelle </h6>
                                                                                <p>
                                                                                    1 Allee Marc Siberchicot Appt 33 Bat A2 Paul Claudel
                                                                                </p>
                                                                            </div>
                                                                    </div>
                                                                        <a href=\"#\" class=\"btn btnSubmitOutline btn-sm w-100\" data-toggle=\"modal\" data-target=\"#mymodal\">Participer</a>
                                                                </div>
                                                      
                                                            </div>
                                                   
                                                 
                                                        {# fin #}
                                                    <a href=\"{#{path('candidater')}#}\"  class=\"btn btnSubmitOutline w-100 mt-3\">
                                                        <i class=\"icon-simulation_vector greyturc\"></i>
                                                            <font style=\"font-size: 12px\"> Simulateur de capacité financière </font>
                                                        </a>
                                                        
                                                        <a href=\"{{path('candidater')}}\"  class=\"btn btnSubmit w-100 mt-3\">
                                                            <i class=\"mr-2 fas fa-edit\"></i>
                                                        <font style=\"font-size: 12px\">Candidater</font>
                                                        </a>
                                                   </div>
                                                    
                                            </div>

                                            </div>
                                        </div>
                                        
                                    </div>  
                                </div>
                    </section>
    
    {# Modal #}
    <div class=\"modal fade bd-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" id=\"modal-info\">
        
    </div>
    <!-- Modal -->
              <div class=\"modal fade bd-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" id=\"mymodal\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content \">
                            <div class=\"row m-0\">
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex mt-3\">
                                        <div class=\"card-event mx-3\">
                                            <div class=\"d-flex\">
                                                <div class=\"m-auto\">
                                                    <div class=\"d-grid text-center\">
                                                        <h2 class=\"mb-0\"> Mercredi   </h2>
                                                        <h1 class=\"mb-0\"> 10 </h1>
                                                        <h3 class=\"mb-0\"> Août </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"w-250 m-auto mt-10 footer-event text-center\">
                                               <h2> Reunion d’information </h2>
                                               <h3> 8h30-20h30  </h3>
                                               <p>
                                                    Comité de quartierRosemont Saint-Ferjeux1 avenue Ducat, Besançon
                                               </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mx-3 mt-3\">
                                        <p  class=\"text-justify\" style=\"font-size: 13px\">
                                            Prochaine réunion : le 26 octobre à 18h30 Selon les recommandations actuellement en vigueur cette réunion se fera à distance via zoom. Si vous êtes intéressés, pensez bien à nous envoyer un mail à saintferjeux@lescityzens.fr. Nous vous enverrons quelques temps avant la réunion par retour de mail le lien zoom pour vous connecter.
                                        </p>
                                    </div>
                                    
                                </div>
                               
                                <div class=\"col-md-6 form-right\">
                                    <div class=\"py-15 mt-3\">
                                        <h2 style=\"font-size: 25px\"> Formulaire de participation </h2>
                                            <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\"><label for=\"nom\" class=\"required\">Votre nom</label><input type=\"text\" id=\"nom\" name=\"nom\" required=\"required\" placeholder=\"\" class=\"form-control\"></div>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\"><label for=\"nom\" class=\"required\">Votre prénom</label><input type=\"text\" id=\"nom\" name=\"nom\" required=\"required\" placeholder=\"\" class=\"form-control\"></div>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\"><label for=\"email\" class=\"required\"> Votre émail </label><input type=\"text\" id=\"email\" name=\"email\" required=\"required\" placeholder=\"\" class=\"form-control\"></div>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\"><label for=\"numero\" class=\"required\"> Votre numéro </label><input type=\"tel\" id=\"numero\" name=\"numero\" required=\"required\" placeholder=\"\" class=\"form-control\"></div>
                                                    </div>
                                                    <div class=\"col-md-12\">
                                                        <a href=\"#\" style=\"color: #006b6b !important;\"> Je souhaite modifier mes infos de contact </a>
                                                    </div>
                                                    <div class=\"col-md-12\">
                                                        <h3 class=\"answer\"> Répondez à cette question </h3>
                                                        <div class=\"form-group\"><label for=\"pers\" class=\"required\"> Avec combien de personne souhaitez-vous participer ? </label><input type=\"number\" min=\"0\" id=\"pers\" name=\"pers\" required=\"required\" placeholder=\"\" class=\"form-control\"></div>
                                                    </div>
                                                    <div class=\"col-md-12\">
                                                        <button type=\"button\" class=\"btn btn-primary\"> Envoyer </button>
                                                        <button type=\"button\" class=\"btn btn-danger\"> Annuler </button>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {#  #}
{% endblock %}
{% block javascripts %}
            <script>
            \$(function () {
                const top = document.getElementById('btnCand')
                console.log('top ', top.offsetTop)
                \$('.slicks').slick({
                    arrows: true,
                    prevArrow: \"<i class='arr fas fa-chevron-circle-left' rel='slickPrev'></i>\",
                    nextArrow: \"<i class='arr fas fa-chevron-circle-right' rel='slickNext'></i>\",
                });
                \$(document).on('click','.arr', function(){
                    \$('.slicks').slick(\$(this).attr('rel'));
                })
                if(\$('section .container').data('rel') == 4) {
                   let corps =  `<div class=\"modal-dialog\">
                                <div class=\"modal-content\" style=\"padding: 34px;\">
                                    <div class='row'>
                                        <div class=\"col-md-12 success-msg animated animate__bounceIn\" style=\"display: block;\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12 __success\">
                                                    <p>Votre message a bien été envoyé.</p>
                                                </div>
                                                <div class=\"col-md-12 d-flex content-success\">
                                                    <div class=\"pr-3\">
                                                        <img src=\"/build/images/web/direct.bf20547e.png\" width=\"50px\">
                                                    </div>
                                                    <p style='font-size: 13px;text-align:justify'>
                                                        Il s’affichera dans quelques instants dans votre messagerie. Simple et rapide, elle vous
                                                        permet d’échanger avec les porteurs de projet.
                                                    </p>
                                                </div>
                                                <div class=\"col-md-12 __btn_success\">
                                                    <a style='float: right' href=\"/messagerie\" type=\"button\" class=\"btn btn-sm btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">Accéder à la
                                                            messagerie</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`
                    
                    \$('#modal-info').html(corps)
                    setTimeout(()=> {
                            \$('#modal-info').modal('show')
                             window.onpopstate = function(event) {
                                console.log(`location: \${document.location}, state: \${JSON.stringify(event.state)}`)
                            }
                    }, 1500)
                   
                }
                \$('.more-events').on('click', function() {
                    if( \$(this).hasClass('slideTog')) {
                            \$('.section-events').removeClass('slideMore')
                             \$(this).removeClass('slideTog')
                              \$('.more-events .fa-angle-up').removeClass('turn-angle')
                             return
                    }
                       \$('.section-events').addClass('slideMore')
                       \$('.more-events .fa-angle-up').addClass('turn-angle')
                       \$(this).addClass('slideTog')
                       
                })
                \$('.btn-author').on('click', function() {
                            var info = \$(this).data('info')
                          let corps = `<div class=\"modal-dialog modal-sm\">
                                <div class=\"modal-content\" style=\"padding: 34px;\">
                                    <h3 style=\"text-align: center\">\${info}'</h3>
                                </div>
                            </div>`
                            \$('#modal-info').html(corps)
                            \$('#modal-info').modal('show')
                    })

                    var mymap = L.map('mapid').setView([47.231324, 5.993184], 13);
                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        maxZoom: 18,
                        attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, ' +
                            '<a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
                            'Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1
                    }).addTo(mymap);

            var busIcon = new L.Icon({
                iconUrl: \"{{ asset('build/images/static/house.svg') }}\",
                iconSize: [50, 50],
                id: 30
            });

            L.marker([47.231324, 5.993184], {icon: busIcon}).addTo(mymap)
            var popup = L.popup();

            \$('.list-inline-item').on('click', function() {
                let item = \$(this).data('item')
                \$('.carousel').carousel(parseInt(item))
            } )

            \$(document).on('click', '.addfav', function() {
                \$(this).find('.fa-heart').hasClass('favoris')?\$(this).find('.fa-heart').removeClass('favoris'):\$(this).find('.fa-heart').addClass('favoris')
            } )

            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent(\"You clicked the map at \" + e.latlng.toString())
                    .openOn(mymap);
            }
                \$('.event').on('mouseenter', function(\$e) {
                    \$(this).find('.slide-part').addClass('slideUp')
                } ).on('mouseleave', function(\$e) {
                    \$(this).find('.slide-part').removeClass('slideUp')
                } )
            mymap.on('click', onMapClick);

                    \$(window).scroll(function fix_element() {
                       console.log(\$(window).scrollTop())
                       let scroll = \$(window).scrollTop()
                       console.log('hauteur ', top.offsetTop)
                       if(scroll >= 932 && scroll < top.offsetTop) {
                           \$('#blk-author').addClass('fixed').removeClass('absolute')
                       } 
                       if(scroll < 932) {
                           \$('#blk-author').removeClass('fixed')
                       }
                        if(scroll >= top.offsetTop) {
                            \$('#blk-author').addClass('absolute').removeClass('fixed')
                        }
                    });
                })
            </script>
    {% endblock %}", "projet/projet-page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/projet/projet-page.html.twig");
    }
}
