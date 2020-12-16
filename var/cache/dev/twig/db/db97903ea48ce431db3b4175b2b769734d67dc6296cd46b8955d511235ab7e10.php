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

/* ad_search/ad_search_ads_list.html.twig */
class __TwigTemplate_1b0a0b9835fd4c2d4f23c31f5f96fde528dc07659b6cb8cabf4484883268e8f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_search/ad_search_ads_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_search/ad_search_ads_list.html.twig"));

        // line 3
        $context["title"] = "Recherche";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ad_search/ad_search_ads_list.html.twig", 1);
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
        echo "    <style>
        .blk-search {
        }
        section .container {
            margin-right: 0;
            padding-right: 0;
            margin-top: 125px;
            max-width: 100%;
            margin-left: 1%;
            margin-bottom: 0 !important
        }
        .cards {
            border-radius: 5px;
            box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
            -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
        }
        .thumbnail-item {
            height: 150px;
            border-radius: 5px 5px 0 0;
            overflow: hidden
        }
        .blk-detail-primary {
            display: grid;
            position: relative
        }
        .blk-detail-primary .fa-heart {
            position: absolute;
            right: 0;
            font-size: 18px;
        }
        .blk-detail-primary>div:first-child {
            display: flex
        }
        .footer-cards {
            padding: 10px
        }
        .footer-cards h4 {
            text-align: right;
            font-size: 15px;
            padding-top: 0.8rem;
        }
        .footer-cards>div>font {
            font-size: 13px;
        }
        .footer-cards>span {
            font-size: 12px;
            padding-right: 17px
        }
        .footer-cards div {
            font-size: 12px;
            padding-right: 13px;
            line-height: 24px;
        }
        .blk-search .col-md-4 {
            padding-bottom: 15px;
            padding-right: 0;
        }
        #mapid {
            width: 100%;
            height: 700px;
        }
        .blk-price {
            display: flex;
            padding-bottom: 17px;
            padding-top: 11px;
        }
        .blk-price div:last-child {
        margin-left: 91px;
        }
        .blk-price svg {
                font-size: 15px;
        }
        .mt-3 {
            margin-top: 0 !important
        }
        footer .container {
            margin-top: 0 !important;
        }
    
        .actives {
            color: #53c0b5
        }
        .blk-detail-primary ul {
            list-style: none;
            margin: 0;
            padding: 0;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .blk-detail-primary ul li {
            display: inline
        }
        .c-alerte {
            position: absolute;
            right: 0;
            top: 0;
            margin: 11px;
            font-size: 14px;
            display: flex
        }
        .c-alerte>span:first-child:hover {
            text-decoration: underline;
            cursor: pointer
        }
        .icons-gun-pointer:before {
        color: red;
    }
        .c-alerte .icons-gun-pointer {
            font-size: 16px;
            padding-left: 11px;
            padding-top: 1px;
        }
        .modal-title {
            text-align: center
        }
        .parent-map {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            left: 0;
            padding-left: 15px;
            padding-right: 9%;
        }
        .parent-map aside {
                position: sticky;
                top: 0px;
        }
        .col-rule-update .form-check {
            padding: 11px;
        }
        .col-rule-update {
            position: absolute;
            z-index: 999;
            width: 100%;
            display: flex
        }
        .col-rule-update>div:first-child {
            background: #fff;
            margin: auto;
            margin-top: 20px;
            padding: 11px;
            border-radius: 9px;
        }
        .btn-active {
            width: 20px;
            height: 20px;
            border: 1px solid #777;
            margin-right: 4px;
            border-radius: 3px;
            cursor: pointer
        }
        .btn-active-true {
            background: black
        }
        .cards:hover {
            cursor: pointer;
            -webkit-box-shadow: 10px -7px 13px 1px rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
            box-shadow: 10px -7px 13px 1px rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
        }
        .mapview {
            display: flex;
            padding: 10px
        }
        .mapview div:first-child {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 30px;
            width: 30px;
        }
        .mapview div:nth-of-type(2) {
            padding-left: 10px;
            display: grid
        }
         .mapview div:nth-of-type(2) p {
            padding: 0;
            margin: 0
        }
        .leaflet-popup-content {
            padding: 0;
            margin-left: 0;
            margin-top: 0;
            margin-bottom: 0;
        }
        .leaflet-popup {
            bottom: 7px !important;
            left: -141px !important;
            width: 280px;
        }
        .ml-11 {
            margin-left: 11px
        }
        .blk-price svg {
            cursor: pointer
        }
        .favoris {
            color: red
        }
        .cards .fa-heart:active {
            transform: scale(1.3);
            cursor: pointer;
            transition: all .3s
        }
        .date-l .form-group {
            margin: auto;
            margin-left: 0;
            margin-top: -3px;
        }
        .email-c .form-group {
            margin-top: -3px;
        }
        .modal #ad_search_etatAvancementProjet {
            border-radius: 5px !important;
        }
        a {
            text-decoration: none !important
        }
        .page-item.active .page-link {
            background-color: #54c0a7;
            border-color: #54c0a7;
        }
        .page-link {
            color: #54c0a7;
        }
        .footer-cards a {
            color: rgb(55, 57, 66);
            font-size: 12px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 236
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 237
        echo "
<section>
 ";
        // line 240
        echo "     ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad_search"));
        echo "

   ";
        // line 243
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h3>1250 projets trouvés </h3>
                    </div>
                    <div class=\"col-md-12 blk-price\">
                        <div>
                            <font> Afficher les prix par </font>
                            <i class=\"fas fa-arrow-circle-up\" data-option='{ \"sortBy\": \"number\", \"sortAscending\": true }'></i>
                            <i class=\"fas fa-arrow-circle-down ml-11\"  data-option='{ \"sortBy\": \"number\", \"sortAscending\": false }'></i>
                        </div>
                        <div>
                            <font> Afficher les dates par </font>
                            <i class=\"fas fa-arrow-circle-up\"  data-option='{ \"sortBy\": \"date\", \"sortAscending\": true }'></i>
                            <i class=\"fas fa-arrow-circle-down ml-11 actives\" data-option='{ \"sortBy\": \"date\", \"sortAscending\": false }'></i>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class=\"row blk-search\">
            <div class=\"col-md-7\">
                <div class=\"row blk-item\" data-isotope='{ \"itemSelector\": \".card-item\" }'>
                 ";
        // line 270
        echo "                    <div class=\"col-md-4 card-item\">
                        <div class=\"cards\" data-ref=\"1\" data-name=\"projet1\"  data-dates=\"2020-01-01\" data-price=\"1500\">
                            <a href=\"";
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "2"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                    <img class=\"img-fluild w-100\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/VillagePenfeld.png"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                    <div class=\"blk-detail-primary\">
                                        <a href=\"";
        // line 279
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "2"]);
        echo "\">
                                            <span> Oasis la Geriais </span>
                                            <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    4/25 logements disponible
                                                </li>
                                            </ul>
                                        </a>
                                        <i class=\"far fa-heart\"></i>
                                        <a href=\"";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "2"]);
        echo "\">
                                            <div> 
                                                <i class=\"fas fa-map-marker-alt\"></i>
                                                <font> 75 - Paris </font>
                                            </div>
                                        </a>
                                    </div>
                                
                                <h4> 2000€/m2 </h4>
                            </div>
                        </div>
                    </div>
                 ";
        // line 303
        echo "   
                    <div class=\"col-md-4 card-item\">
                        <div class=\"cards\" data-ref=\"2\" data-name=\"projet2\" data-dates=\"2020-02-01\" data-price=\"3000\">
                            <a href=\"";
        // line 306
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/unnamed.5839bf5b.png"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                    <div class=\"blk-detail-primary\">
                                        <span> Habitat participatif auvergne </span>
                                            <a href=\"";
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                                <ul>
                                                    <li>
                                                        <i class=\"fas fa-door-open\"></i>
                                                    </li>
                                                    <li>
                                                        14/20 logements disponible
                                                    </li>
                                                </ul>
                                            </a>
                                        <i class=\"far fa-heart\"></i>
                                        <a href=\"";
        // line 325
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                            <div> 
                                                <i class=\"fas fa-map-marker-alt\"></i>
                                                <font> Clermont ferrand, Auvergne </font>
                                            </div>
                                        </a>
                                    </div>
                                <h4> 3000€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        ";
        // line 338
        echo "                        <div class=\"cards\" data-ref=\"3\" data-name=\"projet3\" data-dates=\"2020-03-01\" data-price=\"500\">
                            <a href=\"";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                    <img class=\"img-fluild w-100\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/unnamed-2.a4c8bc21.jpg"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> ecocentre du berry </span>
                                    <a href=\"";
        // line 347
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                3/15 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"";
        // line 358
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <div> 
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                            <font> Aubervillier </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 500€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        ";
        // line 371
        echo "                        <div class=\"cards\" data-ref=\"4\" data-name=\"projet5\" data-dates=\"2020-04-01\" data-price=\"2500\">
                            <a href=\"";
        // line 372
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/LesCityZens 183 Ordener halle HD.a964546d.jpg"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> Habiter Ecologique en Touraine </span>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"";
        // line 381
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                1/30 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <div> 
                                       <i class=\"fas fa-map-marker-alt\"></i>
                                       <font> 91000, Evry </font>
                                    </div>
                                </div>
                                <h4> 2500€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        ";
        // line 402
        echo "                        <div class=\"cards\" data-ref=\"5\" data-name=\"projet5\" data-dates=\"2020-04-01\" data-price=\"150\">
                            <a href=\"";
        // line 403
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/JpOPresse_Habitatparticipatif2020illustration_20200612115234_20200612115255.png.7b0199e0.jpeg"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> Projet Charmilles </span>
                                    <a href=\"";
        // line 411
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                10/25 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"";
        // line 422
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> 70 mail des Charmilles, 10000</font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 150€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        ";
        // line 435
        echo "                        <div class=\"cards\" data-ref=\"6\" data-name=\"projet6\" data-dates=\"2020-05-01\" data-price=\"800\">
                            <a href=\"";
        // line 436
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                    <img class=\"img-fluild w-100\" src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/habitat-participatif-domaine-des-possibles-le-22-09-2020-pho_4940749.0d585c4d.jpeg"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> La Viorne </span>
                                        <a href=\"";
        // line 444
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                            <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    8/15 logements disponible
                                                </li>
                                            </ul>
                                        </a>

                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"";
        // line 456
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font>La Viorne 80 rue Jean Mermoz </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 800€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        ";
        // line 469
        echo "                        <div class=\"cards\" data-ref=\"7\" data-name=\"projet7\" data-dates=\"2020-05-01\" data-price=\"5000\">
                            <a href=\"";
        // line 470
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/cpuig.1608285c.jpg"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> LE PECH DES POSSIBLES </span>
                                    <a href=\"";
        // line 478
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                14/15 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"";
        // line 489
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> Champ des Coutieux </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 5000€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        ";
        // line 502
        echo "                        <div class=\"cards\" data-ref=\"8\" data-name=\"projet8\" data-dates=\"2020-06-01\" data-price=\"900\">
                            <a href=\"";
        // line 503
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/acceuil-rigtht copie2.a5ea1dac.jpg"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> Projet d'habitat participatif à Aurillac </span>
                                    <a href=\"";
        // line 511
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                6/25 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"";
        // line 522
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> Aurillac, Auvergne </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 900€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        ";
        // line 535
        echo "                        <div class=\"cards\" data-ref=\"9\" data-name=\"projet9\" data-dates=\"2020-07-01\" data-price=\"300\">
                            <a href=\"";
        // line 536
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/habitat_participatif.jpg"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> ClêmenCité </span>
                                    <a href=\"";
        // line 544
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                25/28 logements disponible
                                            </li>
                                        </ul>
                                    </a>

                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"";
        // line 556
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> 10 bd Berthelot, Montpellier </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 300€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        ";
        // line 569
        echo "                        <div class=\"cards\" data-ref=\"10\" data-name=\"projet10\" data-dates=\"2020-08-01\" data-price=\"2300\">
                            <a href=\"";
        // line 570
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/20190912 Jardin.jpg"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> eco-hameau de la clairière </span>
                                    <a href=\"";
        // line 578
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                4/5 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"";
        // line 589
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> Martine et Lucien Raude </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 2300€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        ";
        // line 602
        echo "                        <div class=\"cards\" data-ref=\"11\" data-name=\"projet11\" data-dates=\"2020-09-01\" data-price=\"15000\">
                            <a href=\"";
        // line 603
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                    <img class=\"img-fluild w-100\" src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/illust-participatif.jpg"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> Coop'Là Marseille </span>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"";
        // line 612
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                4/15 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <a href=\"";
        // line 622
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> 10 rue Levât, Marseille </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 15000€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        ";
        // line 635
        echo "                        <div class=\"cards\"  data-ref=\"12\" data-name=\"projet12\" data-dates=\"2020-10-01\" data-price=\"4000\">
                            <a href=\"";
        // line 636
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/2745854824_1.jpg"), "html", null, true);
        echo "\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> coTOITnous </span>
                                    <a href=\"";
        // line 644
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                4/15 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"";
        // line 655
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> Périurbain, ANCY SUR MOSELLE </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 4000€/m2 </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                        <div class=\"col-md-12 mt-5\">
                            <nav aria-label=\"...\" class=\"d-flex justify-content-center\">
                                <ul class=\"pagination\">
                                    <li class=\"page-item disabled\">
                                        <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\"> Precédent </a>
                                    </li>
                                    <li class=\"page-item active\">
                                        <a class=\"page-link\" href=\"#\">1 <span class=\"sr-only\">(current)</span></a>
                                    </li>
                                    <li class=\"page-item\" aria-current=\"page\">
                                        <a class=\"page-link\" href=\"#\">2 </a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">3</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">3</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">4</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">5</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">6</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">7</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">8</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">10</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">...</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\"> 20 </a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\"> Suivant </a>
                                    </li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5\" style=\"padding: 0;\">
                <div class=\"parent-map\">
                    <aside>
                            ";
        // line 722
        echo "                            ";
        // line 729
        echo "                            <div id=\"mapid\"></div>
                    </aside>
                </div>
                    
            </div>
        </div>
    </div>
    ";
        // line 737
        echo "    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h6 class=\"modal-title\" id=\"exampleModalLabel\">Je souhaite  etre informer des nouveaux projets correspond aux critères suivants</h6>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\" id=\"m-bo\">
                    <form>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 750
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 750, $this->source); })()), "typeProjet", [], "any", false, false, false, 750), 'row');
        echo "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 753
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 753, $this->source); })()), "etatAvancementProjet", [], "any", false, false, false, 753), 'row');
        echo "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 756
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 756, $this->source); })()), "ville", [], "any", false, false, false, 756), 'row');
        echo "
                            </div>
                            <div class=\"col-md-6 email-c\">
                                <div class=\"form-group\">
                                    <label for=\"email-alert\" class=\"col-form-label\">Email:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"email-alert\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 765
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 765, $this->source); })()), "typologie", [], "any", false, false, false, 765), 'row');
        echo "
                            </div>
                            <div class=\"col-md-6 date-l\">
                                <div class=\"form-group\">
                                    <label for=\"prix-alert\" class=\"col-form-label\">Prix:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"prix-alert\">
                                </div>
                            </div>
                             <div class=\"col-md-6 d-flex \">
                                ";
        // line 774
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 774, $this->source); })()), "dateLivraison", [], "any", false, false, false, 774), 'row');
        echo "
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\"> Confirmation </button>
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 787
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 788
        echo "                    <script>
                        \$(function() {
                        // cloner le range des prix
                        

                        // filtrer par date et par prix
                        \$grid = \$('.blk-item').isotope({
                                itemSelector: '.card-item',
                                getSortData: {
                                    date: function (elem) {
                                        return Date.parse(\$(elem).find('.cards').data('dates'));
                                    },
                                    number: function(e) {
                                        return parseInt(\$(e).find('.cards').data('price'));
                                    }
                                }
                                
                            });
                        // Initialise les projets par date du plus recent au plus ancien
                        \$grid.isotope({sortBy: 'date', sortAscending: false});
                        // Filtrage au click
                        \$(document).on('click','.blk-price svg',function() {
                            var option = \$(this).data('option')
                            \$('.blk-price svg').each(function(){
                                \$(this).removeClass('actives')
                            } )
                            \$(this).addClass('actives')
                            \$grid.isotope({sortBy: option.sortBy, sortAscending: option.sortAscending});
                        } )
                        //favoris
                        \$(document).on('click','.cards .fa-heart', function() {
                            \$(this).hasClass('favoris')?\$(this).removeClass('favoris'):\$(this).addClass('favoris')
                        } )
                        
                        //var span = '<div class=\"c-alerte\" data-toggle=\"modal\" data-target=\"#exampleModal\" data-whatever=\"@getbootstrap\"><span>Créer une alerte </span> <span class=\"icons-gun-pointer\"></span></div>'
                        \$('.btn-active').on('click', function() {
                            \$(this).hasClass('btn-active-true')?\$(this).removeClass('btn-active-true'):\$(this).addClass('btn-active-true')
                        })
                        //\$('.col-recherche').append(span)

                        mymap = L.map('mapid').setView([48.675214092786625, 2.3062942773911344], 10);
                        mapLink = '<a href=\"http://openstreetmap.org\">OpenStreetMap</a>';
                        L.tileLayer(
                            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; ' + mapLink + ' Contributors',
                           // maxZoom: 5,
                            }).addTo(mymap);
                        
                        mymap.on('dragend', function(\$e) {
                            // Effet de deplacement sur la carte
                            console.log(\$e.target._lastCenter)
                            console.log(\$e.sourceTarget._newPos)
                            
                            //this.bindPopup(chagedPos.toString()).openPopup();
                        } )
                    // Ce tableau recupere la latitude et longitude de chaque projet passé en boucle
                    var planes = [
                        {
                        name: 'coTOITnous ',
                        latLng: [48.75322472753265, 2.294669101221989],
                        adress: '2972 Westheimer Rd. Santa Ana',
                        caption: '";
        // line 849
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/2745854824_1.468bfc57.jpg"), "html", null, true);
        echo "',
                        link: 'projet/1',
                        id: '12'
                        },
                         {
                        name: ' Coop Là Marseille ',
                        latLng: [48.675214092786625, 2.3062942773911344],
                        adress: '2972 Westheimer Rd. Santa Ana',
                        caption: '";
        // line 857
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/illust-participatif.462bbd1f.jpg"), "html", null, true);
        echo "',
                        link: 'projet/1',
                        id: '11'
                        },
                        {
                        name: 'Eco-hameau de la clairière',
                        latLng: [48.69546756825417, 2.297305812252981],
                        adress: '8502 Preston Rd. Inglewood, Maine 98380',
                        caption: '";
        // line 865
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/20190912 Jardin.82ccccba.jpg"), "html", null, true);
        echo "',
                        link: 'projet/1',
                        id: '10'
                        },
                        {
                        name: 'ClêmenCité',
                        latLng: [48.70132055882535, 2.4028735735524442],
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: '";
        // line 873
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/habitat_participatif.dd92b82a.jpg"), "html", null, true);
        echo "',
                        link: 'projet/1',
                        id: '9'
                        },
                        {
                        name: ' Projet d\\'habitat participatif à Aurillac ',
                        latLng: [48.72613123907671, 2.4260080524913796],
                        adress: '8502 Preston Rd. Inglewood, Maine 98380',
                        caption: '";
        // line 881
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/acceuil-rigtht copie2.a5ea1dac.jpg"), "html", null, true);
        echo "',
                        link: 'projet/1',
                        id: '8'
                        },
                        {
                        name: 'LE PECH DES POSSIBLES',
                        latLng: [48.74313947809788, 48.74313947809788],
                        adress: '4140 Parker Rd. Allentown, New Mexico 31134',
                        caption: '";
        // line 889
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/cpuig.1608285c.jpg"), "html", null, true);
        echo "',
                        link: 'projet/1',
                        id: '7'
                        },
                        {
                        name: 'La Viorne',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: '";
        // line 896
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/habitat-participatif-domaine-des-possibles-le-22-09-2020-pho_4940749.0d585c4d.jpeg"), "html", null, true);
        echo "',
                        link: 'projet/1',
                        latLng: [48.73692016772619, 2.4333790195621274],
                        id: '6'
                        },
                        {
                        name: 'Projet Charmilles',
                        adress: '2118 Thornridge Cir. Syracuse',
                        caption: '";
        // line 904
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/JpOPresse_Habitatparticipatif2020illustration_20200612115234_20200612115255.png.7b0199e0.jpeg"), "html", null, true);
        echo "',
                        link: 'projet/1',
                        latLng: [48.77077397210531, 2.399113599974556],
                        id: '5'
                        },
                        {
                        name: 'Habiter Ecologique en Touraine ',
                        adress: '2972 Westheimer Rd. Santa Ana',
                        caption: '";
        // line 912
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/LesCityZens 183 Ordener halle HD.a964546d.jpg"), "html", null, true);
        echo "',
                        link: 'projet/1',
                        latLng: [48.68854923633389, 2.3023143808306212],
                        id: '4'
                        },
                        {
                        name: 'Ecocentre du berry',
                        adress: '6391 Elgin St. Celina',
                        caption: '";
        // line 920
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/unnamed-2.a4c8bc21.jpg"), "html", null, true);
        echo "',
                        link: 'projet/1',
                        latLng: [48.64505375584351, 2.401516199443252],
                        id: '3'
                        },
                        {
                        name: ' Habitat participatif auvergne ',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: '";
        // line 928
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/unnamed.5839bf5b.png"), "html", null, true);
        echo "',
                        latLng: [48.58806870535286, 2.205404017813102],
                        link: 'projet/1',
                        id: '2'
                        },
                        {
                        name: 'Oasis la Geriais',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: '";
        // line 936
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/VillagePenfeld.png"), "html", null, true);
        echo "',
                        latLng: [48.674347443907784, 2.262562710487517],
                        link: 'projet/1',
                        id: '1'
                        },
                        {
                        name: 'Minim cupidatat',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: 'https://images.pexels.com/photos/323776/pexels-photo-323776.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                        latLng: [48.65446351833874, 2.2140945227810382],
                        link: 'projet/1',
                        id: '13'
                        },
                        {
                        name: 'Minim cupidatat',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: 'https://images.pexels.com/photos/323776/pexels-photo-323776.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                        latLng: [48.627845113869625, 2.2798987899213508],
                        link: 'projet/1',
                        id: '14'
                        },
                        {
                        name: 'Minim cupidatat',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: 'https://images.pexels.com/photos/323776/pexels-photo-323776.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                        latLng: [48.723139190362666, 48.723139190362666],
                        link: 'projet/1',
                        id: '15'
                        },
                    ];
                   
                        var busIcon = new L.Icon({
                        iconUrl: \"";
        // line 968
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/house.svg"), "html", null, true);
        echo "\",
                        // shadowUrl: 'images/leaflet/marker-shadow.png',
                        iconSize: [50, 50],
                        id: 30
                    });
                        tab = []
                        for (var i = 0; i < planes.length; i++) {
                            var names = planes[i].name
                            var url = planes[i].link
                            names = new L.marker(planes[i].latLng , {id: planes[i].id, name: planes[i].name, icon: busIcon}).addTo(mymap)
                            .bindPopup(`<a href=/\${url}><div class='mapview'> <div style='background-image: url(\${planes[i].caption})'></div> <div><strong>\${planes[i].name} </strong><p> \${planes[i].adress} </p></div> </div></a>`)
                            tab.push(names)
                        }
                        newLayerGroup = L.layerGroup(tab);
                        
                     var popup = L.popup();

                     newLayerGroup.addTo(mymap);
                     //newLayerGroup.addLayer(markers);
                     console.log('newLayerGroup ', newLayerGroup)
                    
                    //console.log('layer ', newLayerGroup)
                    function onMapClick(e) {
                        var clickPositionMarker = L.marker([e.latlng.lat, e.latlng.lng]);
                        console.log('clickPositionMarker ', clickPositionMarker)
                        popup
                            .setLatLng(e.latlng)
                            .setContent(\"You clicked the map at \" + e.latlng.toString())
                            .openOn(mymap);
                    }
                    // Le survole sur un projet appel cette fonction avec la reference en paramètre
                    \$('.cards').on('mouseenter', function() {
                        ref = \$(this).data('ref')
                        markerOver(parseInt(ref))
                    })
                    .on('mouseleave', function() {
                            for(i in tab) {
                            var layer = tab[i]
                            layer.valueOf()._icon.style.filter = 'inherit';
                        }
                    } )
                    markerOver = (ref)=> {
                        for(i in tab) {
                            var layer = tab[i]
                            layer.valueOf()._icon.style.filter = 'inherit';
                            if (parseInt(layer.options.id) ==  ref) {
                                    layer.valueOf()._icon.style.filter = 'hue-rotate(180deg)';
                                } 
                        }
                            newLayerGroup.eachLayer((layer) => {
                            })
                    }

                    // Le click sur un marker
                    \$('.leaflet-marker-icon').on('click', function(e) {
                            
                        });
                    //mymap.on('click', onMapClick);
                    
                })
            </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad_search/ad_search_ads_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1280 => 968,  1245 => 936,  1234 => 928,  1223 => 920,  1212 => 912,  1201 => 904,  1190 => 896,  1180 => 889,  1169 => 881,  1158 => 873,  1147 => 865,  1136 => 857,  1125 => 849,  1062 => 788,  1052 => 787,  1029 => 774,  1017 => 765,  1005 => 756,  999 => 753,  993 => 750,  978 => 737,  969 => 729,  967 => 722,  898 => 655,  884 => 644,  875 => 638,  870 => 636,  867 => 635,  852 => 622,  839 => 612,  829 => 605,  824 => 603,  821 => 602,  806 => 589,  792 => 578,  783 => 572,  778 => 570,  775 => 569,  760 => 556,  745 => 544,  736 => 538,  731 => 536,  728 => 535,  713 => 522,  699 => 511,  690 => 505,  685 => 503,  682 => 502,  667 => 489,  653 => 478,  644 => 472,  639 => 470,  636 => 469,  621 => 456,  606 => 444,  597 => 438,  592 => 436,  589 => 435,  574 => 422,  560 => 411,  551 => 405,  546 => 403,  543 => 402,  520 => 381,  510 => 374,  505 => 372,  502 => 371,  487 => 358,  473 => 347,  464 => 341,  459 => 339,  456 => 338,  441 => 325,  427 => 314,  418 => 308,  413 => 306,  408 => 303,  393 => 291,  378 => 279,  370 => 274,  365 => 272,  361 => 270,  333 => 243,  327 => 240,  323 => 237,  313 => 236,  73 => 5,  63 => 4,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Recherche' %}
{% block stylesheets %}
    <style>
        .blk-search {
        }
        section .container {
            margin-right: 0;
            padding-right: 0;
            margin-top: 125px;
            max-width: 100%;
            margin-left: 1%;
            margin-bottom: 0 !important
        }
        .cards {
            border-radius: 5px;
            box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
            -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
        }
        .thumbnail-item {
            height: 150px;
            border-radius: 5px 5px 0 0;
            overflow: hidden
        }
        .blk-detail-primary {
            display: grid;
            position: relative
        }
        .blk-detail-primary .fa-heart {
            position: absolute;
            right: 0;
            font-size: 18px;
        }
        .blk-detail-primary>div:first-child {
            display: flex
        }
        .footer-cards {
            padding: 10px
        }
        .footer-cards h4 {
            text-align: right;
            font-size: 15px;
            padding-top: 0.8rem;
        }
        .footer-cards>div>font {
            font-size: 13px;
        }
        .footer-cards>span {
            font-size: 12px;
            padding-right: 17px
        }
        .footer-cards div {
            font-size: 12px;
            padding-right: 13px;
            line-height: 24px;
        }
        .blk-search .col-md-4 {
            padding-bottom: 15px;
            padding-right: 0;
        }
        #mapid {
            width: 100%;
            height: 700px;
        }
        .blk-price {
            display: flex;
            padding-bottom: 17px;
            padding-top: 11px;
        }
        .blk-price div:last-child {
        margin-left: 91px;
        }
        .blk-price svg {
                font-size: 15px;
        }
        .mt-3 {
            margin-top: 0 !important
        }
        footer .container {
            margin-top: 0 !important;
        }
    
        .actives {
            color: #53c0b5
        }
        .blk-detail-primary ul {
            list-style: none;
            margin: 0;
            padding: 0;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .blk-detail-primary ul li {
            display: inline
        }
        .c-alerte {
            position: absolute;
            right: 0;
            top: 0;
            margin: 11px;
            font-size: 14px;
            display: flex
        }
        .c-alerte>span:first-child:hover {
            text-decoration: underline;
            cursor: pointer
        }
        .icons-gun-pointer:before {
        color: red;
    }
        .c-alerte .icons-gun-pointer {
            font-size: 16px;
            padding-left: 11px;
            padding-top: 1px;
        }
        .modal-title {
            text-align: center
        }
        .parent-map {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            left: 0;
            padding-left: 15px;
            padding-right: 9%;
        }
        .parent-map aside {
                position: sticky;
                top: 0px;
        }
        .col-rule-update .form-check {
            padding: 11px;
        }
        .col-rule-update {
            position: absolute;
            z-index: 999;
            width: 100%;
            display: flex
        }
        .col-rule-update>div:first-child {
            background: #fff;
            margin: auto;
            margin-top: 20px;
            padding: 11px;
            border-radius: 9px;
        }
        .btn-active {
            width: 20px;
            height: 20px;
            border: 1px solid #777;
            margin-right: 4px;
            border-radius: 3px;
            cursor: pointer
        }
        .btn-active-true {
            background: black
        }
        .cards:hover {
            cursor: pointer;
            -webkit-box-shadow: 10px -7px 13px 1px rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
            box-shadow: 10px -7px 13px 1px rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
        }
        .mapview {
            display: flex;
            padding: 10px
        }
        .mapview div:first-child {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 30px;
            width: 30px;
        }
        .mapview div:nth-of-type(2) {
            padding-left: 10px;
            display: grid
        }
         .mapview div:nth-of-type(2) p {
            padding: 0;
            margin: 0
        }
        .leaflet-popup-content {
            padding: 0;
            margin-left: 0;
            margin-top: 0;
            margin-bottom: 0;
        }
        .leaflet-popup {
            bottom: 7px !important;
            left: -141px !important;
            width: 280px;
        }
        .ml-11 {
            margin-left: 11px
        }
        .blk-price svg {
            cursor: pointer
        }
        .favoris {
            color: red
        }
        .cards .fa-heart:active {
            transform: scale(1.3);
            cursor: pointer;
            transition: all .3s
        }
        .date-l .form-group {
            margin: auto;
            margin-left: 0;
            margin-top: -3px;
        }
        .email-c .form-group {
            margin-top: -3px;
        }
        .modal #ad_search_etatAvancementProjet {
            border-radius: 5px !important;
        }
        a {
            text-decoration: none !important
        }
        .page-item.active .page-link {
            background-color: #54c0a7;
            border-color: #54c0a7;
        }
        .page-link {
            color: #54c0a7;
        }
        .footer-cards a {
            color: rgb(55, 57, 66);
            font-size: 12px;
        }
    </style>
{% endblock %}
{% block body %}

<section>
 {# {% le render pour afficher le formulaire de recherche #}
     {{ render(path(\"ad_search\")) }}

   {# --- #}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <h3>1250 projets trouvés </h3>
                    </div>
                    <div class=\"col-md-12 blk-price\">
                        <div>
                            <font> Afficher les prix par </font>
                            <i class=\"fas fa-arrow-circle-up\" data-option='{ \"sortBy\": \"number\", \"sortAscending\": true }'></i>
                            <i class=\"fas fa-arrow-circle-down ml-11\"  data-option='{ \"sortBy\": \"number\", \"sortAscending\": false }'></i>
                        </div>
                        <div>
                            <font> Afficher les dates par </font>
                            <i class=\"fas fa-arrow-circle-up\"  data-option='{ \"sortBy\": \"date\", \"sortAscending\": true }'></i>
                            <i class=\"fas fa-arrow-circle-down ml-11 actives\" data-option='{ \"sortBy\": \"date\", \"sortAscending\": false }'></i>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class=\"row blk-search\">
            <div class=\"col-md-7\">
                <div class=\"row blk-item\" data-isotope='{ \"itemSelector\": \".card-item\" }'>
                 {# Le block Card doit etre dans la boucle Twig #}
                    <div class=\"col-md-4 card-item\">
                        <div class=\"cards\" data-ref=\"1\" data-name=\"projet1\"  data-dates=\"2020-01-01\" data-price=\"1500\">
                            <a href=\"{{ path('projet', {id: '2'} ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                    <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/VillagePenfeld.png') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                    <div class=\"blk-detail-primary\">
                                        <a href=\"{{ path('projet', {id: '2'} ) }}\">
                                            <span> Oasis la Geriais </span>
                                            <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    4/25 logements disponible
                                                </li>
                                            </ul>
                                        </a>
                                        <i class=\"far fa-heart\"></i>
                                        <a href=\"{{ path('projet', {id: '2'} ) }}\">
                                            <div> 
                                                <i class=\"fas fa-map-marker-alt\"></i>
                                                <font> 75 - Paris </font>
                                            </div>
                                        </a>
                                    </div>
                                
                                <h4> 2000€/m2 </h4>
                            </div>
                        </div>
                    </div>
                 {# fin de la boucle #}   
                    <div class=\"col-md-4 card-item\">
                        <div class=\"cards\" data-ref=\"2\" data-name=\"projet2\" data-dates=\"2020-02-01\" data-price=\"3000\">
                            <a href=\"{{ path('projet', { id: '1' } ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/unnamed.5839bf5b.png') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                    <div class=\"blk-detail-primary\">
                                        <span> Habitat participatif auvergne </span>
                                            <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                                <ul>
                                                    <li>
                                                        <i class=\"fas fa-door-open\"></i>
                                                    </li>
                                                    <li>
                                                        14/20 logements disponible
                                                    </li>
                                                </ul>
                                            </a>
                                        <i class=\"far fa-heart\"></i>
                                        <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                            <div> 
                                                <i class=\"fas fa-map-marker-alt\"></i>
                                                <font> Clermont ferrand, Auvergne </font>
                                            </div>
                                        </a>
                                    </div>
                                <h4> 3000€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        {# iteration #}
                        <div class=\"cards\" data-ref=\"3\" data-name=\"projet3\" data-dates=\"2020-03-01\" data-price=\"500\">
                            <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                    <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/unnamed-2.a4c8bc21.jpg') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> ecocentre du berry </span>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                3/15 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <div> 
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                            <font> Aubervillier </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 500€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        {# iteration #}
                        <div class=\"cards\" data-ref=\"4\" data-name=\"projet5\" data-dates=\"2020-04-01\" data-price=\"2500\">
                            <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/LesCityZens 183 Ordener halle HD.a964546d.jpg') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> Habiter Ecologique en Touraine </span>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                1/30 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <div> 
                                       <i class=\"fas fa-map-marker-alt\"></i>
                                       <font> 91000, Evry </font>
                                    </div>
                                </div>
                                <h4> 2500€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        {# iteration #}
                        <div class=\"cards\" data-ref=\"5\" data-name=\"projet5\" data-dates=\"2020-04-01\" data-price=\"150\">
                            <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/JpOPresse_Habitatparticipatif2020illustration_20200612115234_20200612115255.png.7b0199e0.jpeg') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> Projet Charmilles </span>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                10/25 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> 70 mail des Charmilles, 10000</font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 150€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        {# iteration #}
                        <div class=\"cards\" data-ref=\"6\" data-name=\"projet6\" data-dates=\"2020-05-01\" data-price=\"800\">
                            <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                    <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/habitat-participatif-domaine-des-possibles-le-22-09-2020-pho_4940749.0d585c4d.jpeg') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> La Viorne </span>
                                        <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                            <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    8/15 logements disponible
                                                </li>
                                            </ul>
                                        </a>

                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font>La Viorne 80 rue Jean Mermoz </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 800€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        {# iteration #}
                        <div class=\"cards\" data-ref=\"7\" data-name=\"projet7\" data-dates=\"2020-05-01\" data-price=\"5000\">
                            <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/cpuig.1608285c.jpg') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> LE PECH DES POSSIBLES </span>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                14/15 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> Champ des Coutieux </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 5000€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        {# iteration #}
                        <div class=\"cards\" data-ref=\"8\" data-name=\"projet8\" data-dates=\"2020-06-01\" data-price=\"900\">
                            <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/acceuil-rigtht copie2.a5ea1dac.jpg') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> Projet d'habitat participatif à Aurillac </span>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                6/25 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> Aurillac, Auvergne </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 900€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        {# iteration #}
                        <div class=\"cards\" data-ref=\"9\" data-name=\"projet9\" data-dates=\"2020-07-01\" data-price=\"300\">
                            <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/habitat_participatif.jpg') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> ClêmenCité </span>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                25/28 logements disponible
                                            </li>
                                        </ul>
                                    </a>

                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> 10 bd Berthelot, Montpellier </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 300€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        {# iteration #}
                        <div class=\"cards\" data-ref=\"10\" data-name=\"projet10\" data-dates=\"2020-08-01\" data-price=\"2300\">
                            <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/20190912 Jardin.jpg') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> eco-hameau de la clairière </span>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                4/5 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> Martine et Lucien Raude </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 2300€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        {# iteration #}
                        <div class=\"cards\" data-ref=\"11\" data-name=\"projet11\" data-dates=\"2020-09-01\" data-price=\"15000\">
                            <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                    <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/illust-participatif.jpg') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> Coop'Là Marseille </span>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                4/15 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> 10 rue Levât, Marseille </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 15000€/m2 </h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 card-item\">
                        {# iteration #}
                        <div class=\"cards\"  data-ref=\"12\" data-name=\"projet12\" data-dates=\"2020-10-01\" data-price=\"4000\">
                            <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                <div class=\"thumbnail-item d-flex justify-content-center align-items-center\">
                                        <img class=\"img-fluild w-100\" src=\"{{ asset('build/images/static/2745854824_1.jpg') }}\">
                                </div>
                            </a>
                            <div class=\"footer-cards\">
                                <div class=\"blk-detail-primary\">
                                    <span> coTOITnous </span>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                4/15 logements disponible
                                            </li>
                                        </ul>
                                    </a>
                                    <i class=\"far fa-heart\"></i>
                                    <a href=\"{{ path('projet', {id: '1'} ) }}\">
                                        <div> 
                                        <i class=\"fas fa-map-marker-alt\"></i>
                                        <font> Périurbain, ANCY SUR MOSELLE </font>
                                        </div>
                                    </a>
                                </div>
                                <h4> 4000€/m2 </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                        <div class=\"col-md-12 mt-5\">
                            <nav aria-label=\"...\" class=\"d-flex justify-content-center\">
                                <ul class=\"pagination\">
                                    <li class=\"page-item disabled\">
                                        <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\"> Precédent </a>
                                    </li>
                                    <li class=\"page-item active\">
                                        <a class=\"page-link\" href=\"#\">1 <span class=\"sr-only\">(current)</span></a>
                                    </li>
                                    <li class=\"page-item\" aria-current=\"page\">
                                        <a class=\"page-link\" href=\"#\">2 </a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">3</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">3</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">4</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">5</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">6</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">7</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">8</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">10</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">...</a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\"> 20 </a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\"> Suivant </a>
                                    </li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5\" style=\"padding: 0;\">
                <div class=\"parent-map\">
                    <aside>
                            {# barre d'activation #}
                            {# <div class=\"col-rule-update\">
                                <div class=\"form-check form-check-inline\">
                                    <div class=\"btn-active\">
                                    </div>
                                    <label class=\"form-check-label\" for=\"inlineCheckbox1\">Actualiser la recherche quand je deplace la carte</label>
                                </div>
                            </div> #}
                            <div id=\"mapid\"></div>
                    </aside>
                </div>
                    
            </div>
        </div>
    </div>
    {# fenetre Modale #}
    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h6 class=\"modal-title\" id=\"exampleModalLabel\">Je souhaite  etre informer des nouveaux projets correspond aux critères suivants</h6>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\" id=\"m-bo\">
                    <form>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                {{ form_row(form.typeProjet) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(form.etatAvancementProjet) }}
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(form.ville) }}
                            </div>
                            <div class=\"col-md-6 email-c\">
                                <div class=\"form-group\">
                                    <label for=\"email-alert\" class=\"col-form-label\">Email:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"email-alert\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                {{ form_row(form.typologie) }}
                            </div>
                            <div class=\"col-md-6 date-l\">
                                <div class=\"form-group\">
                                    <label for=\"prix-alert\" class=\"col-form-label\">Prix:</label>
                                    <input type=\"text\" class=\"form-control\" id=\"prix-alert\">
                                </div>
                            </div>
                             <div class=\"col-md-6 d-flex \">
                                {{ form_row(form.dateLivraison) }}
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\"> Confirmation </button>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
{% block javascripts %}
                    <script>
                        \$(function() {
                        // cloner le range des prix
                        

                        // filtrer par date et par prix
                        \$grid = \$('.blk-item').isotope({
                                itemSelector: '.card-item',
                                getSortData: {
                                    date: function (elem) {
                                        return Date.parse(\$(elem).find('.cards').data('dates'));
                                    },
                                    number: function(e) {
                                        return parseInt(\$(e).find('.cards').data('price'));
                                    }
                                }
                                
                            });
                        // Initialise les projets par date du plus recent au plus ancien
                        \$grid.isotope({sortBy: 'date', sortAscending: false});
                        // Filtrage au click
                        \$(document).on('click','.blk-price svg',function() {
                            var option = \$(this).data('option')
                            \$('.blk-price svg').each(function(){
                                \$(this).removeClass('actives')
                            } )
                            \$(this).addClass('actives')
                            \$grid.isotope({sortBy: option.sortBy, sortAscending: option.sortAscending});
                        } )
                        //favoris
                        \$(document).on('click','.cards .fa-heart', function() {
                            \$(this).hasClass('favoris')?\$(this).removeClass('favoris'):\$(this).addClass('favoris')
                        } )
                        
                        //var span = '<div class=\"c-alerte\" data-toggle=\"modal\" data-target=\"#exampleModal\" data-whatever=\"@getbootstrap\"><span>Créer une alerte </span> <span class=\"icons-gun-pointer\"></span></div>'
                        \$('.btn-active').on('click', function() {
                            \$(this).hasClass('btn-active-true')?\$(this).removeClass('btn-active-true'):\$(this).addClass('btn-active-true')
                        })
                        //\$('.col-recherche').append(span)

                        mymap = L.map('mapid').setView([48.675214092786625, 2.3062942773911344], 10);
                        mapLink = '<a href=\"http://openstreetmap.org\">OpenStreetMap</a>';
                        L.tileLayer(
                            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; ' + mapLink + ' Contributors',
                           // maxZoom: 5,
                            }).addTo(mymap);
                        
                        mymap.on('dragend', function(\$e) {
                            // Effet de deplacement sur la carte
                            console.log(\$e.target._lastCenter)
                            console.log(\$e.sourceTarget._newPos)
                            
                            //this.bindPopup(chagedPos.toString()).openPopup();
                        } )
                    // Ce tableau recupere la latitude et longitude de chaque projet passé en boucle
                    var planes = [
                        {
                        name: 'coTOITnous ',
                        latLng: [48.75322472753265, 2.294669101221989],
                        adress: '2972 Westheimer Rd. Santa Ana',
                        caption: '{{ asset(\"build/images/static/2745854824_1.468bfc57.jpg\") }}',
                        link: 'projet/1',
                        id: '12'
                        },
                         {
                        name: ' Coop Là Marseille ',
                        latLng: [48.675214092786625, 2.3062942773911344],
                        adress: '2972 Westheimer Rd. Santa Ana',
                        caption: '{{ asset(\"build/images/static/illust-participatif.462bbd1f.jpg\") }}',
                        link: 'projet/1',
                        id: '11'
                        },
                        {
                        name: 'Eco-hameau de la clairière',
                        latLng: [48.69546756825417, 2.297305812252981],
                        adress: '8502 Preston Rd. Inglewood, Maine 98380',
                        caption: '{{ asset(\"build/images/static/20190912 Jardin.82ccccba.jpg\") }}',
                        link: 'projet/1',
                        id: '10'
                        },
                        {
                        name: 'ClêmenCité',
                        latLng: [48.70132055882535, 2.4028735735524442],
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: '{{ asset(\"build/images/static/habitat_participatif.dd92b82a.jpg\") }}',
                        link: 'projet/1',
                        id: '9'
                        },
                        {
                        name: ' Projet d\\'habitat participatif à Aurillac ',
                        latLng: [48.72613123907671, 2.4260080524913796],
                        adress: '8502 Preston Rd. Inglewood, Maine 98380',
                        caption: '{{ asset(\"build/images/static/acceuil-rigtht copie2.a5ea1dac.jpg\") }}',
                        link: 'projet/1',
                        id: '8'
                        },
                        {
                        name: 'LE PECH DES POSSIBLES',
                        latLng: [48.74313947809788, 48.74313947809788],
                        adress: '4140 Parker Rd. Allentown, New Mexico 31134',
                        caption: '{{ asset(\"build/images/static/cpuig.1608285c.jpg\") }}',
                        link: 'projet/1',
                        id: '7'
                        },
                        {
                        name: 'La Viorne',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: '{{ asset(\"build/images/static/habitat-participatif-domaine-des-possibles-le-22-09-2020-pho_4940749.0d585c4d.jpeg\") }}',
                        link: 'projet/1',
                        latLng: [48.73692016772619, 2.4333790195621274],
                        id: '6'
                        },
                        {
                        name: 'Projet Charmilles',
                        adress: '2118 Thornridge Cir. Syracuse',
                        caption: '{{ asset(\"build/images/static/JpOPresse_Habitatparticipatif2020illustration_20200612115234_20200612115255.png.7b0199e0.jpeg\") }}',
                        link: 'projet/1',
                        latLng: [48.77077397210531, 2.399113599974556],
                        id: '5'
                        },
                        {
                        name: 'Habiter Ecologique en Touraine ',
                        adress: '2972 Westheimer Rd. Santa Ana',
                        caption: '{{ asset(\"build/images/static/LesCityZens 183 Ordener halle HD.a964546d.jpg\") }}',
                        link: 'projet/1',
                        latLng: [48.68854923633389, 2.3023143808306212],
                        id: '4'
                        },
                        {
                        name: 'Ecocentre du berry',
                        adress: '6391 Elgin St. Celina',
                        caption: '{{ asset(\"build/images/static/unnamed-2.a4c8bc21.jpg\") }}',
                        link: 'projet/1',
                        latLng: [48.64505375584351, 2.401516199443252],
                        id: '3'
                        },
                        {
                        name: ' Habitat participatif auvergne ',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: '{{ asset(\"build/images/static/unnamed.5839bf5b.png\") }}',
                        latLng: [48.58806870535286, 2.205404017813102],
                        link: 'projet/1',
                        id: '2'
                        },
                        {
                        name: 'Oasis la Geriais',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: '{{ asset(\"build/images/static/VillagePenfeld.png\") }}',
                        latLng: [48.674347443907784, 2.262562710487517],
                        link: 'projet/1',
                        id: '1'
                        },
                        {
                        name: 'Minim cupidatat',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: 'https://images.pexels.com/photos/323776/pexels-photo-323776.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                        latLng: [48.65446351833874, 2.2140945227810382],
                        link: 'projet/1',
                        id: '13'
                        },
                        {
                        name: 'Minim cupidatat',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: 'https://images.pexels.com/photos/323776/pexels-photo-323776.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                        latLng: [48.627845113869625, 2.2798987899213508],
                        link: 'projet/1',
                        id: '14'
                        },
                        {
                        name: 'Minim cupidatat',
                        adress: '3517 W. Gray St. Utica, Pennsylvania 57867',
                        caption: 'https://images.pexels.com/photos/323776/pexels-photo-323776.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                        latLng: [48.723139190362666, 48.723139190362666],
                        link: 'projet/1',
                        id: '15'
                        },
                    ];
                   
                        var busIcon = new L.Icon({
                        iconUrl: \"{{ asset('build/images/static/house.svg') }}\",
                        // shadowUrl: 'images/leaflet/marker-shadow.png',
                        iconSize: [50, 50],
                        id: 30
                    });
                        tab = []
                        for (var i = 0; i < planes.length; i++) {
                            var names = planes[i].name
                            var url = planes[i].link
                            names = new L.marker(planes[i].latLng , {id: planes[i].id, name: planes[i].name, icon: busIcon}).addTo(mymap)
                            .bindPopup(`<a href=/\${url}><div class='mapview'> <div style='background-image: url(\${planes[i].caption})'></div> <div><strong>\${planes[i].name} </strong><p> \${planes[i].adress} </p></div> </div></a>`)
                            tab.push(names)
                        }
                        newLayerGroup = L.layerGroup(tab);
                        
                     var popup = L.popup();

                     newLayerGroup.addTo(mymap);
                     //newLayerGroup.addLayer(markers);
                     console.log('newLayerGroup ', newLayerGroup)
                    
                    //console.log('layer ', newLayerGroup)
                    function onMapClick(e) {
                        var clickPositionMarker = L.marker([e.latlng.lat, e.latlng.lng]);
                        console.log('clickPositionMarker ', clickPositionMarker)
                        popup
                            .setLatLng(e.latlng)
                            .setContent(\"You clicked the map at \" + e.latlng.toString())
                            .openOn(mymap);
                    }
                    // Le survole sur un projet appel cette fonction avec la reference en paramètre
                    \$('.cards').on('mouseenter', function() {
                        ref = \$(this).data('ref')
                        markerOver(parseInt(ref))
                    })
                    .on('mouseleave', function() {
                            for(i in tab) {
                            var layer = tab[i]
                            layer.valueOf()._icon.style.filter = 'inherit';
                        }
                    } )
                    markerOver = (ref)=> {
                        for(i in tab) {
                            var layer = tab[i]
                            layer.valueOf()._icon.style.filter = 'inherit';
                            if (parseInt(layer.options.id) ==  ref) {
                                    layer.valueOf()._icon.style.filter = 'hue-rotate(180deg)';
                                } 
                        }
                            newLayerGroup.eachLayer((layer) => {
                            })
                    }

                    // Le click sur un marker
                    \$('.leaflet-marker-icon').on('click', function(e) {
                            
                        });
                    //mymap.on('click', onMapClick);
                    
                })
            </script>
        {% endblock %}
", "ad_search/ad_search_ads_list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/ad_search/ad_search_ads_list.html.twig");
    }
}
