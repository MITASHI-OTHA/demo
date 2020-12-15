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

/* projet/projet3.html.twig */
class __TwigTemplate_687ed6b3336950d214b4ae10a1f1c53d8a6f011ba600f69489518eef855a841b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/projet3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projet/projet3.html.twig"));

        // line 3
        $context["title"] = "Page projet";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projet/projet3.html.twig", 1);
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
        echo "       <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/projet-style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <section>
        <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"group-detail\">
                                    <h3> Tranche de vie </h3>
                                    <h5> 75 - Paris </h5>
                                    <span> #1X73KOR </span>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"col-p-f\">
                                    <h3> 3000€/m2 </h3>
                                    <span> <i class=\"fas fa-door-open\"></i> <font> 7/15 </font> logements disponibles </span>
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
                        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                    <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/280229/pexels-photo-280229.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"First slide\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/2251247/pexels-photo-2251247.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Second slide\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/3209045/pexels-photo-3209045.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Third slide\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/534151/pexels-photo-534151.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Third slide\">
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
                    </div>
                    <div class=\"col-md-11 text-center d-flex align-items-center vignettes-parent justify-content-center\">
                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center\">
                            <img class=\"img-fluid\" src=\"https://images.pexels.com/photos/280229/pexels-photo-280229.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                        </div>
                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center\">
                            <img class=\"img-fluid\" src=\"https://images.pexels.com/photos/2251247/pexels-photo-2251247.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                        </div>
                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center\">
                            <img class=\"img-fluid\" src=\"https://images.pexels.com/photos/3209045/pexels-photo-3209045.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                        </div>
                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center\">
                            <img class=\"img-fluid\" src=\"https://images.pexels.com/photos/534151/pexels-photo-534151.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                        </div>
                    </div>
                </div>
             
                    <div class=\"row group-projet\">
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
                                                <font> Promotion participative </font>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4 top-item mt-0\">
                                            <div class=\"item-key\">
                                            <i class=\"fab fa-deviantart icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Typologie </h5>
                                                <font> Maisons en bande </font>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 top-item\">
                                            <div class=\"item-key\">
                                            <i class=\"fas fa-coins icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Prix </h5>
                                                <font> 3000€/m2 </font>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4\">
                                        <div class=\"item-key\">
                                        <i class=\"fas fa-layer-group icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Montage </h5>
                                                <font> Location </font>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class=\"col-md-4\">
                                        <div class=\"item-key\">
                                        <i class=\"fas fa-chart-line icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Phase </h5>
                                                <font> Constitution du groupe </font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class=\"col-key-logement\">
                                <h4> Les logements </h4>
                                <div class=\"row\">
                                    <div class=\"col-md-4 top-item\">
                                        <div class=\"item-key\">
                                            <i class=\"fas fa-city icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Logements </h5>
                                                <font> 15 </font>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 top-item\">
                                            <div class=\"item-key\">
                                            <i class=\"fab fa-deviantart icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Typologie </h5>
                                                <font> T3 </font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                                <div class=\"col-key-logement\">
                                    <h4> Le programme </h4>
                                    <p>
                                        Coopération, Démocratie, Solidarité interne / externe (solidarité de voisinage, entraide), Mixité (culturelle, sociale, intergénérationnelle...) , Développement durable, dimension environnementale , Coconception de mon habitat et cadre de vie, Un habitat plus sain, cadre de vie de qualité, Logement à moindre coût, Mutualisation (espaces, services, biens), Ouverture sur le territoire, le quartie
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
                                                    A définir avec les membres du groupe
                                                </p>
                                        </div>
                                        
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card-espace\">
                                            <i class=\"fas fa-border-style\"></i>
                                            <div>
                                                <h6> Espace commun interieur </h6>
                                                <p>
                                                    jardin,four à pain,maison commune
                                                </p>
                                            </div>
                                                
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card-espace\">
                                                <i class=\"fas fa-border-none\"></i>
                                            <div>
                                                <h6> Espaces communs exterieurs </h6>
                                                    <p>
                                                        Garage, salle de jeux, terrasse
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
                                                    Salon, cuisine
                                                </p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 style=\"margin-top: 40px\"> Présentation du projet </h3>
                                <div class=\"col-key-presentation\">
                                    <p>
                                        Engagée à la fois dans une démarche d'urbanisme durable et de valorisation des opportunités foncières sur son territoire, la Mairie d'Ambazac cherche tout naturellement à promouvoir l'habitat participatif et les initiatives solidaires. Pour passer du principe à la concrétisation, elle propose d'accueillir un projet d'habitat participatif sur une parcelle située en centre-ville
                                    </p>
                                    <p>
                                        Le terrain proposé, d'environ 2000m², est proche des services publics comme les écoles, la médiathèque ou encore les commerces.
                                    </p>
                                    <p>
                                        La valorisation d'une ancienne maison pourrait permettre de développer la mixité des fonctions en combinant logements et locaux associatifs par exemple.
                                        Pour toute information complémentaire, n'hésitez pas à nous contacter.
                                    </p>
                                </div>
                                <div class=\"col-list-plus bg__secondary__light p-3\">
                                    <ul>
                                        <li> <a href=\"#\"> wwww.siteweb.com </a></li>
                                        <li> <a href=\"#\"> wwww.autresite.com  </a> </li>
                                    </ul>
                                </div>
                                <h3 style=\"margin-top: 40px\"> Le quartier </h3>
                                <div class=\"col-key-quartier\">
                                    <p>
                                            Gare de l'Est / canal saint Martin, situé rue du Faubourg saint Martin
                                    </p>

                                    <div id=\"mapid\" style=\"width: 600px; height: 400px;\"></div>
                                </div>
                                <h3 style=\"margin-top: 40px\"> Les acteurs de l’opération </h3>
                                <div class=\"col-key-acteur\">
                                        <div class=\"row\">
                                            <div class=\"col-md-4 item-actor\">
                                                    <div class=\"d-flex justify-content-center\">
                                                        <div class=\"d-flex justify-content-center align-items-center\">
                                                            <img src=\"https://images.pexels.com/photos/2269872/pexels-photo-2269872.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100 rounded-circle\">
                                                        </div>
                                                    </div>
                                                    <h4 class=\"mt-3\"> Jeremi Payet </h4>
                                                    <h5> Home-One </h5>
                                                    <p>
                                                        Directeur d'une agence immobilière située à Paris 12ème. 
                                                        Jonathan B. a plus de 15 ans d'experience dans l'habitat participatif, ses conseils ont aidé plus de 10 000 personnes à trouver l'habitat de leur choix.
                                                    </p>
                                            </div>
                                            <div class=\"col-md-4 item-actor\">
                                                    <div class=\"d-flex justify-content-center\">
                                                        <div class=\"d-flex justify-content-center align-items-center\">
                                                            <img src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100 rounded-circle\">
                                                        </div>
                                                    </div>
                                                    <h4 class=\"mt-3\"> Lizy Cofee </h4>
                                                    <h5> RelieToi </h5>
                                                    <p>
                                                        Marie J. est un porteur de projet experimenté dans l'habitat participatif. Son rôle est de reviser les candidatures et aider des personnes dans leur démarche.
                                                    </p>
                                            </div>
                                            <div class=\"col-md-4 item-actor\">
                                                    <div class=\"d-flex justify-content-center\">
                                                        <div class=\"d-flex justify-content-center align-items-center\">
                                                            <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100 rounded-circle\">
                                                        </div>
                                                    </div>
                                                    <h4 class=\"mt-3\"> Guillaume Cushner </h4>
                                                    <h5> CityLoc </h5>
                                                    <p>
                                                        Vous n'avez jamais redigé une candidature ? Notre conseillère est là pour vous accompagner. N'hesitez pas à la contacter.
                                                    </p>
                                            </div>
                                        </div>
                                </div>
                                <h3 style=\"margin-top: 40px\"> Comment rejoindre l’opération ? </h3>
                                <div class=\"col-key-rejoindre\">
                                    <p>
                                        Adhérer à notre \"Tranche de vie\" ; être agréé à l'unanimité par les participants actuels ; après, tout dépend du statut demandé (habitant temps plein / habitant temps partiel / sympathsant-sympa), notamment pour un statut d'habitant cela va dépendre de la place disponible...
                                    </p>
                                </div>
                                <a href=\"";
        // line 326
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidater");
        echo "\" class=\"btn btnSubmit btn-lg\" role=\"button\" aria-disabled=\"false\">Candidater</a>
                        </div>
                                <div class=\"col-md-5\">
                                <div class=\"bloc-author p-4\" id=\"blk-author\">
                                    <div class=\"blk-author-detail text-center\">
                                        <div class=\"min-author\">
                                            <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                                        </div>
                                            <h5 class=\"mt-3 mb-0\"> Guillaume Cushne </h5>
                                        <a href=\"";
        // line 335
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_ad_author");
        echo "\" class=\"btn btnPrimary btn-sm w-100 ml-l3 mr-3 mt-3\">Contacter</a>
                                        <div class=\"blk-phone\">
                                            <div>
                                            <button class=\"btn btnSubmitBlue btn-sm btn-author ml-l3 mr-3 mt-3 w-100\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\" data-info=\"0600000000\"> Afficher le numéro de téléphone </button>
                                            </div>
                                        </div>
                                        ";
        // line 342
        echo "                                    </div>
                                    ";
        // line 344
        echo "                                    
                                    <div class=\"blk-event text-center\">
                                    <h3 class=\"my-3\"> Événements </h3>
                                            <section class=\"section-events\">
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
                                                                <h6> Soirée d'intégration </h6>
                                                                <p>
                                                                    bis rue Gustave Charpentier 94240 L'hay les Roses
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
                                                                    <li>10-12</li>
                                                                    <li>2020</li>
                                                                </ul>
                                                            </div>
                                                            <div class=\"event-detail\">
                                                                <h6> Visite des nouveaux locaux </h6>
                                                                <p>
                                                                    bis rue Gustave Charpentier 94240 L'hay les Roses
                                                                </p>
                                                            </div>
                                                    </div>
                                                    <a href=\"#\" class=\"btn btnSubmitOutline btn-sm w-100\" data-toggle=\"modal\" data-target=\"#mymodal\">Participer</a>
                                                </div>
                                            </section>
                                            
                                            ";
        // line 387
        echo "                                            <div class=\"d-flex justify-content-center my-4\">  
                                                <button class=\"btn btn-primary position-relative d-flex align-items-center justify-content-center more-events w-100\">
                                                    + 2 autres événements
                                                    <div class=\"rond-down position-absolute l-0 r-O b-0 d-flex align-items-center justify-content-center\" style=\"color: #999fa4;bottom: 0\">
                                                                <i class=\"fas fa-angle-up\" style=\"color: #fff;position: initial\"></i>
                                                    </div>
                                                </button>
                                            </div>
                                            ";
        // line 396
        echo "                                        
                                    </div>
                                       
                                            
                                            <a href=\"";
        // line 400
        echo "\"  class=\"btn btnSubmitOutline w-100\">
                                            <i class=\"icon-simulation_vector greyturc\"></i>
                                                <font style=\"font-size: 12px\">Simulateur de capacité financière</font>
                                            </a>
                                         
                                            <a href=\"";
        // line 405
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidater");
        echo "\"  class=\"btn btnSubmit w-100 mt-3\">
                                                <i class=\"mr-2 fas fa-edit\"></i>
                                            <font style=\"font-size: 12px\">Candidater</font>
                                            </a>
                                    
                                </div>
                                </div>
                                        
                                    </div>
                                    
                            </div>
    </section>
    
    ";
        // line 419
        echo "    <div class=\"modal fade bd-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" id=\"modal-info\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\" style=\"padding: 34px;\">
                
            </div>
        </div>
    </div>
    <!-- Modal -->
              <div class=\"modal fade bd-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" id=\"mymodal\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content \">
                            <div class=\"row m-0\">
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex h-100\">
                                        <div class=\"card-event m-auto w-80\">
                                            <div class=\"d-flex\">
                                                <div class=\"m-auto\">
                                                    <div class=\"d-grid text-center\">
                                                        <h2 class=\"mb-0\"> Jeudi   </h2>
                                                        <h1 class=\"mb-0\"> 03 </h1>
                                                        <h3 class=\"mb-0\"> Décembre </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"w-250 m-auto mt-10 footer-event text-center\">
                                               <h2> Soirée d'intégration </h2>
                                               <h3> 8h30-20h30  </h3>
                                               <p>
                                                    bis rue Gustave Charpentier 94240 L'hay les Roses
                                               </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 form-right\">
                                    <div class=\"p-20\">
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

    // line 489
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 490
        echo "            <script>
            \$(function () {
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
                            \$('.modal-content').html('<h3 style=\"text-align: center\">'+info+'</h3>')
                            \$('#modal-info').modal('show')
                    })

                    var mymap = L.map('mapid').setView([48.866667, 2.333333], 13);
                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        maxZoom: 18,
                        attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, ' +
                            '<a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
                            'Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1
                    }).addTo(mymap);

            L.marker([48.866667, 2.333333]).addTo(mymap)
            var popup = L.popup();

            \$('.sliders .list-inline-item').on('click', function() {
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
                       if(scroll >= 932 && scroll < 2945) {
                           \$('#blk-author').addClass('fixed').removeClass('absolute')
                       } 
                       if(scroll < 932) {
                           \$('#blk-author').removeClass('fixed')
                       }
                        if(scroll >=2945) {
                            \$('#blk-author').addClass('absolute')
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
        return "projet/projet3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 490,  600 => 489,  522 => 419,  506 => 405,  499 => 400,  493 => 396,  483 => 387,  439 => 344,  436 => 342,  427 => 335,  415 => 326,  96 => 9,  86 => 8,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Page projet' %}

{% block stylesheets %}
       <link rel=\"stylesheet\" href=\"{{ asset('css/projet-style.css') }}\">
{% endblock %}
{% block body %}
    <section>
        <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"group-detail\">
                                    <h3> Tranche de vie </h3>
                                    <h5> 75 - Paris </h5>
                                    <span> #1X73KOR </span>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"col-p-f\">
                                    <h3> 3000€/m2 </h3>
                                    <span> <i class=\"fas fa-door-open\"></i> <font> 7/15 </font> logements disponibles </span>
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
                        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                    <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/280229/pexels-photo-280229.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"First slide\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/2251247/pexels-photo-2251247.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Second slide\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/3209045/pexels-photo-3209045.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Third slide\">
                                </div>
                                <div class=\"carousel-item\">
                                    <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/534151/pexels-photo-534151.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Third slide\">
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
                    </div>
                    <div class=\"col-md-11 text-center d-flex align-items-center vignettes-parent justify-content-center\">
                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center\">
                            <img class=\"img-fluid\" src=\"https://images.pexels.com/photos/280229/pexels-photo-280229.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                        </div>
                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center\">
                            <img class=\"img-fluid\" src=\"https://images.pexels.com/photos/2251247/pexels-photo-2251247.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                        </div>
                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center\">
                            <img class=\"img-fluid\" src=\"https://images.pexels.com/photos/3209045/pexels-photo-3209045.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                        </div>
                        <div class=\"thumbnail-image d-flex justify-content-center align-items-center\">
                            <img class=\"img-fluid\" src=\"https://images.pexels.com/photos/534151/pexels-photo-534151.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                        </div>
                    </div>
                </div>
             
                    <div class=\"row group-projet\">
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
                                                <font> Promotion participative </font>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4 top-item mt-0\">
                                            <div class=\"item-key\">
                                            <i class=\"fab fa-deviantart icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Typologie </h5>
                                                <font> Maisons en bande </font>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 top-item\">
                                            <div class=\"item-key\">
                                            <i class=\"fas fa-coins icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Prix </h5>
                                                <font> 3000€/m2 </font>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"col-md-4\">
                                        <div class=\"item-key\">
                                        <i class=\"fas fa-layer-group icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Montage </h5>
                                                <font> Location </font>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <div class=\"col-md-4\">
                                        <div class=\"item-key\">
                                        <i class=\"fas fa-chart-line icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Phase </h5>
                                                <font> Constitution du groupe </font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class=\"col-key-logement\">
                                <h4> Les logements </h4>
                                <div class=\"row\">
                                    <div class=\"col-md-4 top-item\">
                                        <div class=\"item-key\">
                                            <i class=\"fas fa-city icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Logements </h5>
                                                <font> 15 </font>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 top-item\">
                                            <div class=\"item-key\">
                                            <i class=\"fab fa-deviantart icon\"></i>
                                            <div class=\"col-item\">
                                                <h5> Typologie </h5>
                                                <font> T3 </font>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                                <div class=\"col-key-logement\">
                                    <h4> Le programme </h4>
                                    <p>
                                        Coopération, Démocratie, Solidarité interne / externe (solidarité de voisinage, entraide), Mixité (culturelle, sociale, intergénérationnelle...) , Développement durable, dimension environnementale , Coconception de mon habitat et cadre de vie, Un habitat plus sain, cadre de vie de qualité, Logement à moindre coût, Mutualisation (espaces, services, biens), Ouverture sur le territoire, le quartie
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
                                                    A définir avec les membres du groupe
                                                </p>
                                        </div>
                                        
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card-espace\">
                                            <i class=\"fas fa-border-style\"></i>
                                            <div>
                                                <h6> Espace commun interieur </h6>
                                                <p>
                                                    jardin,four à pain,maison commune
                                                </p>
                                            </div>
                                                
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"card-espace\">
                                                <i class=\"fas fa-border-none\"></i>
                                            <div>
                                                <h6> Espaces communs exterieurs </h6>
                                                    <p>
                                                        Garage, salle de jeux, terrasse
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
                                                    Salon, cuisine
                                                </p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 style=\"margin-top: 40px\"> Présentation du projet </h3>
                                <div class=\"col-key-presentation\">
                                    <p>
                                        Engagée à la fois dans une démarche d'urbanisme durable et de valorisation des opportunités foncières sur son territoire, la Mairie d'Ambazac cherche tout naturellement à promouvoir l'habitat participatif et les initiatives solidaires. Pour passer du principe à la concrétisation, elle propose d'accueillir un projet d'habitat participatif sur une parcelle située en centre-ville
                                    </p>
                                    <p>
                                        Le terrain proposé, d'environ 2000m², est proche des services publics comme les écoles, la médiathèque ou encore les commerces.
                                    </p>
                                    <p>
                                        La valorisation d'une ancienne maison pourrait permettre de développer la mixité des fonctions en combinant logements et locaux associatifs par exemple.
                                        Pour toute information complémentaire, n'hésitez pas à nous contacter.
                                    </p>
                                </div>
                                <div class=\"col-list-plus bg__secondary__light p-3\">
                                    <ul>
                                        <li> <a href=\"#\"> wwww.siteweb.com </a></li>
                                        <li> <a href=\"#\"> wwww.autresite.com  </a> </li>
                                    </ul>
                                </div>
                                <h3 style=\"margin-top: 40px\"> Le quartier </h3>
                                <div class=\"col-key-quartier\">
                                    <p>
                                            Gare de l'Est / canal saint Martin, situé rue du Faubourg saint Martin
                                    </p>

                                    <div id=\"mapid\" style=\"width: 600px; height: 400px;\"></div>
                                </div>
                                <h3 style=\"margin-top: 40px\"> Les acteurs de l’opération </h3>
                                <div class=\"col-key-acteur\">
                                        <div class=\"row\">
                                            <div class=\"col-md-4 item-actor\">
                                                    <div class=\"d-flex justify-content-center\">
                                                        <div class=\"d-flex justify-content-center align-items-center\">
                                                            <img src=\"https://images.pexels.com/photos/2269872/pexels-photo-2269872.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100 rounded-circle\">
                                                        </div>
                                                    </div>
                                                    <h4 class=\"mt-3\"> Jeremi Payet </h4>
                                                    <h5> Home-One </h5>
                                                    <p>
                                                        Directeur d'une agence immobilière située à Paris 12ème. 
                                                        Jonathan B. a plus de 15 ans d'experience dans l'habitat participatif, ses conseils ont aidé plus de 10 000 personnes à trouver l'habitat de leur choix.
                                                    </p>
                                            </div>
                                            <div class=\"col-md-4 item-actor\">
                                                    <div class=\"d-flex justify-content-center\">
                                                        <div class=\"d-flex justify-content-center align-items-center\">
                                                            <img src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100 rounded-circle\">
                                                        </div>
                                                    </div>
                                                    <h4 class=\"mt-3\"> Lizy Cofee </h4>
                                                    <h5> RelieToi </h5>
                                                    <p>
                                                        Marie J. est un porteur de projet experimenté dans l'habitat participatif. Son rôle est de reviser les candidatures et aider des personnes dans leur démarche.
                                                    </p>
                                            </div>
                                            <div class=\"col-md-4 item-actor\">
                                                    <div class=\"d-flex justify-content-center\">
                                                        <div class=\"d-flex justify-content-center align-items-center\">
                                                            <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100 rounded-circle\">
                                                        </div>
                                                    </div>
                                                    <h4 class=\"mt-3\"> Guillaume Cushner </h4>
                                                    <h5> CityLoc </h5>
                                                    <p>
                                                        Vous n'avez jamais redigé une candidature ? Notre conseillère est là pour vous accompagner. N'hesitez pas à la contacter.
                                                    </p>
                                            </div>
                                        </div>
                                </div>
                                <h3 style=\"margin-top: 40px\"> Comment rejoindre l’opération ? </h3>
                                <div class=\"col-key-rejoindre\">
                                    <p>
                                        Adhérer à notre \"Tranche de vie\" ; être agréé à l'unanimité par les participants actuels ; après, tout dépend du statut demandé (habitant temps plein / habitant temps partiel / sympathsant-sympa), notamment pour un statut d'habitant cela va dépendre de la place disponible...
                                    </p>
                                </div>
                                <a href=\"{{path('candidater')}}\" class=\"btn btnSubmit btn-lg\" role=\"button\" aria-disabled=\"false\">Candidater</a>
                        </div>
                                <div class=\"col-md-5\">
                                <div class=\"bloc-author p-4\" id=\"blk-author\">
                                    <div class=\"blk-author-detail text-center\">
                                        <div class=\"min-author\">
                                            <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                                        </div>
                                            <h5 class=\"mt-3 mb-0\"> Guillaume Cushne </h5>
                                        <a href=\"{{path('contact_ad_author')}}\" class=\"btn btnPrimary btn-sm w-100 ml-l3 mr-3 mt-3\">Contacter</a>
                                        <div class=\"blk-phone\">
                                            <div>
                                            <button class=\"btn btnSubmitBlue btn-sm btn-author ml-l3 mr-3 mt-3 w-100\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\" data-info=\"0600000000\"> Afficher le numéro de téléphone </button>
                                            </div>
                                        </div>
                                        {# <p class='number'> +33 06 00 00 00 00 </p> #}
                                    </div>
                                    {# Iteration #}
                                    
                                    <div class=\"blk-event text-center\">
                                    <h3 class=\"my-3\"> Événements </h3>
                                            <section class=\"section-events\">
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
                                                                <h6> Soirée d'intégration </h6>
                                                                <p>
                                                                    bis rue Gustave Charpentier 94240 L'hay les Roses
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
                                                                    <li>10-12</li>
                                                                    <li>2020</li>
                                                                </ul>
                                                            </div>
                                                            <div class=\"event-detail\">
                                                                <h6> Visite des nouveaux locaux </h6>
                                                                <p>
                                                                    bis rue Gustave Charpentier 94240 L'hay les Roses
                                                                </p>
                                                            </div>
                                                    </div>
                                                    <a href=\"#\" class=\"btn btnSubmitOutline btn-sm w-100\" data-toggle=\"modal\" data-target=\"#mymodal\">Participer</a>
                                                </div>
                                            </section>
                                            
                                            {# boutton voir +++ d'evenements #}
                                            <div class=\"d-flex justify-content-center my-4\">  
                                                <button class=\"btn btn-primary position-relative d-flex align-items-center justify-content-center more-events w-100\">
                                                    + 2 autres événements
                                                    <div class=\"rond-down position-absolute l-0 r-O b-0 d-flex align-items-center justify-content-center\" style=\"color: #999fa4;bottom: 0\">
                                                                <i class=\"fas fa-angle-up\" style=\"color: #fff;position: initial\"></i>
                                                    </div>
                                                </button>
                                            </div>
                                            {# fin #}
                                        
                                    </div>
                                       
                                            
                                            <a href=\"{#{path('candidater')}#}\"  class=\"btn btnSubmitOutline w-100\">
                                            <i class=\"icon-simulation_vector greyturc\"></i>
                                                <font style=\"font-size: 12px\">Simulateur de capacité financière</font>
                                            </a>
                                         
                                            <a href=\"{{path('candidater')}}\"  class=\"btn btnSubmit w-100 mt-3\">
                                                <i class=\"mr-2 fas fa-edit\"></i>
                                            <font style=\"font-size: 12px\">Candidater</font>
                                            </a>
                                    
                                </div>
                                </div>
                                        
                                    </div>
                                    
                            </div>
    </section>
    
    {# Modal #}
    <div class=\"modal fade bd-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" id=\"modal-info\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\" style=\"padding: 34px;\">
                
            </div>
        </div>
    </div>
    <!-- Modal -->
              <div class=\"modal fade bd-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" id=\"mymodal\">
                    <div class=\"modal-dialog modal-lg\">
                        <div class=\"modal-content \">
                            <div class=\"row m-0\">
                                <div class=\"col-md-6\">
                                    <div class=\"d-flex h-100\">
                                        <div class=\"card-event m-auto w-80\">
                                            <div class=\"d-flex\">
                                                <div class=\"m-auto\">
                                                    <div class=\"d-grid text-center\">
                                                        <h2 class=\"mb-0\"> Jeudi   </h2>
                                                        <h1 class=\"mb-0\"> 03 </h1>
                                                        <h3 class=\"mb-0\"> Décembre </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"w-250 m-auto mt-10 footer-event text-center\">
                                               <h2> Soirée d'intégration </h2>
                                               <h3> 8h30-20h30  </h3>
                                               <p>
                                                    bis rue Gustave Charpentier 94240 L'hay les Roses
                                               </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 form-right\">
                                    <div class=\"p-20\">
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
                            \$('.modal-content').html('<h3 style=\"text-align: center\">'+info+'</h3>')
                            \$('#modal-info').modal('show')
                    })

                    var mymap = L.map('mapid').setView([48.866667, 2.333333], 13);
                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        maxZoom: 18,
                        attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, ' +
                            '<a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
                            'Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1
                    }).addTo(mymap);

            L.marker([48.866667, 2.333333]).addTo(mymap)
            var popup = L.popup();

            \$('.sliders .list-inline-item').on('click', function() {
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
                       if(scroll >= 932 && scroll < 2945) {
                           \$('#blk-author').addClass('fixed').removeClass('absolute')
                       } 
                       if(scroll < 932) {
                           \$('#blk-author').removeClass('fixed')
                       }
                        if(scroll >=2945) {
                            \$('#blk-author').addClass('absolute')
                        }
                    });
                })
            </script>
    {% endblock %}", "projet/projet3.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/projet/projet3.html.twig");
    }
}
