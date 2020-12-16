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

/* home/index.html.twig */
class __TwigTemplate_b0442364cbec460ec92244aac57e074490d2f4771089f34b641bde1a12771040 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 2
        $context["title"] = "Accueil";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "    <style>
        a:hover {
                text-decoration: none
            }
             #ad__search__results {
            display: none;
        }
        #ad_search_etatAvancementProjet {
            padding-right: 36px;
        }
        .favoris {
            color: red !important
        }
        .fa-heart:active {
            transform: scale(1.3)
        }
        .col-main-projet .col-md-4 {
            margin-top: 30px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "   
<section>
    ";
        // line 30
        echo "     ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad_search"));
        echo "
     ";
        // line 32
        echo "
    <div class=\"container\">
        <section class=\"col-main-projet\">
            <h3>  À la une </h3>
                    <div class=\"row\">
                        ";
        // line 38
        echo "                        <div class=\"col-md-4\">
                                <div class=\"card\">
                                    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\">   
                                        <div class=\"col-min h-270\">
                                            <img class=\"w-100 img-fluid rounded\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/VillagePenfeld.png"), "html", null, true);
        echo "\">
                                        </div>
                                    </a>
                                        <div class=\"card-body\">
                                            <i class=\"far fa-heart\"></i>
                                           <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\"> 
                                                <h4> Bascule-Pelouse </h4>
                                                <h5 class=\"primary\"> 2750€/m² </h5>
                                                <ul>
                                                    <li>
                                                        <i class=\"fas fa-door-open\"></i>
                                                    </li>
                                                    <li>
                                                        12/14 logements disponibles
                                                    </li>
                                                </ul>
                                                <h6> Besançon </h6>
                                            </a>
                                        </div>
                                </div>
                             
                        </div>
                   ";
        // line 65
        echo "                        ";
        // line 66
        echo "                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "2"]);
        echo "\">   
                                        <div class=\"col-min h-270 d-flex justify-content-center align-items-center \">
                                        <img class=\"w-100 img-fluid rounded\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/unnamed.png"), "html", null, true);
        echo "\">
                                        </div>
                                    </a>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                     <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "2"]);
        echo "\">  
                                        <h4>Oasis la Geriais</h4>
                                        <h5 class=\"primary\">2000€/m2</h5>
                                        <ul>
                                                    <li>
                                                        <i class=\"fas fa-door-open\"></i>
                                                    </li>
                                                    <li>
                                                        7/20 logements disponibles
                                                    </li>
                                                </ul>
                                        <h6>75 - Paris</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                 <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "3"]);
        echo "\">  
                                    <div class=\"col-min h-270 d-flex justify-content-center align-items-center\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/unnamed-2.jpg"), "html", null, true);
        echo "\">
                                    </div>
                                </a>
                                <div class=\"card-body\">
                                    <i class=\"far fa-heart\"></i>
                                     <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "3"]);
        echo "\">  
                                        <h4> Tranche de vie </h4>
                                        <h5 class=\"primary\">3000€/m2</h5>
                                        <ul>
                                                    <li>
                                                        <i class=\"fas fa-door-open\"></i>
                                                    </li>
                                                    <li>
                                                        4/15 logements disponibles
                                                    </li>
                                                </ul>
                                        <h6>Palaiseau</h6>
                                     </a>  
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <div class=\"col-min h-270 d-flex justify-content-center align-items-center\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/LesCityZens 183 Ordener halle HD.jpg"), "html", null, true);
        echo "\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4>Port de Terre</h4>
                                    <h5 class=\"primary\">4000€/m2</h5>
                                    <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    3/30 logements disponibles
                                                </li>
                                            </ul>
                                    <h6> Bonneuil sur Marne </h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <div class=\"col-min h-270 d-flex justify-content-center align-items-center\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/JpOPresse_Habitatparticipatif2020illustration_20200612115234_20200612115255.png.jpeg"), "html", null, true);
        echo "\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4>Le Pre des Hauts Bois</h4>
                                    <h5 class=\"primary\">1000€/m2</h5>
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                24/25 logements disponibles
                                            </li>
                                        </ul>
                                    <h6>Verrières-le-Buisson</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <div class=\"col-min h-270 d-flex justify-content-center align-items-center\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/habitat-participatif-domaine-des-possibles-le-22-09-2020-pho_4940749.jpeg"), "html", null, true);
        echo "\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4> Ilot Michelet </h4>
                                    <h5 class=\"primary\">300€/m2</h5>
                                    <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    4/5 logements disponibles
                                                </li>
                                            </ul>
                                    <h6>Paris 75016</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <div class=\"col-min h-270\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/cpuig.jpg"), "html", null, true);
        echo "\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4>Corneilloux</h4>
                                    <h5 class=\"primary\">300€/m2</h5>
                                    <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    4/5 logements disponibles
                                                </li>
                                            </ul>
                                    <h6>Paris 75016</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <div class=\"col-min h-270\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/acceuil-rigtht copie2.jpg"), "html", null, true);
        echo "\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4> Coop Colette </h4>
                                    <h5 class=\"primary\">300€/m2</h5>
                                    <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    4/5 logements disponibles
                                                </li>
                                            </ul>
                                    <h6>Paris 75016</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                <div class=\"col-min h-270\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/2745854824_1.jpg"), "html", null, true);
        echo "\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4>La K-Bane</h4>
                                    <h5 class=\"primary\">300€/m2</h5>
                                    <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    4/5 logements disponibles
                                                </li>
                                            </ul>
                                    <h6>Paris 75016</h6>
                                </div>
                            </div>
                        </div>
                        ";
        // line 243
        echo "                    </div>
        </section>

                        <div class=\"slicks\">
                            <div>your content</div>
                            <div>your content</div>
                            <div>your content</div>
                        </div>
    </div>
</section>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 255
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 256
        echo "    <script>
        \$(function() {
              \$('.slicks').slick({
          
      })
            \$(document).on('click', '.fa-heart', function() {
                \$(this).hasClass('favoris')?\$(this).removeClass('favoris'):\$(this).addClass('favoris')
            } )
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 256,  403 => 255,  382 => 243,  361 => 224,  337 => 203,  313 => 182,  289 => 161,  265 => 140,  241 => 119,  219 => 100,  211 => 95,  206 => 93,  185 => 75,  177 => 70,  172 => 68,  168 => 66,  166 => 65,  146 => 47,  138 => 42,  133 => 40,  129 => 38,  122 => 32,  117 => 30,  113 => 27,  103 => 26,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set title = 'Accueil' %}
{% block stylesheets %}
    <style>
        a:hover {
                text-decoration: none
            }
             #ad__search__results {
            display: none;
        }
        #ad_search_etatAvancementProjet {
            padding-right: 36px;
        }
        .favoris {
            color: red !important
        }
        .fa-heart:active {
            transform: scale(1.3)
        }
        .col-main-projet .col-md-4 {
            margin-top: 30px;
        }
    </style>
{% endblock %}

{% block body %}
   
<section>
    {# {% le render pour afficher le formulaire de recherche #}
     {{ render(path(\"ad_search\")) }}
     {# fin #}

    <div class=\"container\">
        <section class=\"col-main-projet\">
            <h3>  À la une </h3>
                    <div class=\"row\">
                        {# ici vous mettrez la boucle pour lister les projets #}
                        <div class=\"col-md-4\">
                                <div class=\"card\">
                                    <a href=\"{{path('projet', {id: '1'})}}\">   
                                        <div class=\"col-min h-270\">
                                            <img class=\"w-100 img-fluid rounded\" src=\"{{ asset('build/images/static/VillagePenfeld.png') }}\">
                                        </div>
                                    </a>
                                        <div class=\"card-body\">
                                            <i class=\"far fa-heart\"></i>
                                           <a href=\"{{path('projet', {id: '1'})}}\"> 
                                                <h4> Bascule-Pelouse </h4>
                                                <h5 class=\"primary\"> 2750€/m² </h5>
                                                <ul>
                                                    <li>
                                                        <i class=\"fas fa-door-open\"></i>
                                                    </li>
                                                    <li>
                                                        12/14 logements disponibles
                                                    </li>
                                                </ul>
                                                <h6> Besançon </h6>
                                            </a>
                                        </div>
                                </div>
                             
                        </div>
                   {# fin de la boucle #}
                        {# A supprimer, ce sont des justes des exemples #}
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <a href=\"{{path('projet', {id: '2'})}}\">   
                                        <div class=\"col-min h-270 d-flex justify-content-center align-items-center \">
                                        <img class=\"w-100 img-fluid rounded\" src=\"{{ asset('build/images/static/unnamed.png') }}\">
                                        </div>
                                    </a>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                     <a href=\"{{path('projet', {id: '2'})}}\">  
                                        <h4>Oasis la Geriais</h4>
                                        <h5 class=\"primary\">2000€/m2</h5>
                                        <ul>
                                                    <li>
                                                        <i class=\"fas fa-door-open\"></i>
                                                    </li>
                                                    <li>
                                                        7/20 logements disponibles
                                                    </li>
                                                </ul>
                                        <h6>75 - Paris</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                 <a href=\"{{path('projet', {id: '3'})}}\">  
                                    <div class=\"col-min h-270 d-flex justify-content-center align-items-center\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"{{ asset('build/images/static/unnamed-2.jpg') }}\">
                                    </div>
                                </a>
                                <div class=\"card-body\">
                                    <i class=\"far fa-heart\"></i>
                                     <a href=\"{{path('projet', {id: '3'})}}\">  
                                        <h4> Tranche de vie </h4>
                                        <h5 class=\"primary\">3000€/m2</h5>
                                        <ul>
                                                    <li>
                                                        <i class=\"fas fa-door-open\"></i>
                                                    </li>
                                                    <li>
                                                        4/15 logements disponibles
                                                    </li>
                                                </ul>
                                        <h6>Palaiseau</h6>
                                     </a>  
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <div class=\"col-min h-270 d-flex justify-content-center align-items-center\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"{{ asset('build/images/static/LesCityZens 183 Ordener halle HD.jpg') }}\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4>Port de Terre</h4>
                                    <h5 class=\"primary\">4000€/m2</h5>
                                    <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    3/30 logements disponibles
                                                </li>
                                            </ul>
                                    <h6> Bonneuil sur Marne </h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <div class=\"col-min h-270 d-flex justify-content-center align-items-center\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"{{ asset('build/images/static/JpOPresse_Habitatparticipatif2020illustration_20200612115234_20200612115255.png.jpeg') }}\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4>Le Pre des Hauts Bois</h4>
                                    <h5 class=\"primary\">1000€/m2</h5>
                                        <ul>
                                            <li>
                                                <i class=\"fas fa-door-open\"></i>
                                            </li>
                                            <li>
                                                24/25 logements disponibles
                                            </li>
                                        </ul>
                                    <h6>Verrières-le-Buisson</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <div class=\"col-min h-270 d-flex justify-content-center align-items-center\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"{{asset('build/images/static/habitat-participatif-domaine-des-possibles-le-22-09-2020-pho_4940749.jpeg')}}\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4> Ilot Michelet </h4>
                                    <h5 class=\"primary\">300€/m2</h5>
                                    <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    4/5 logements disponibles
                                                </li>
                                            </ul>
                                    <h6>Paris 75016</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <div class=\"col-min h-270\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"{{asset('build/images/static/cpuig.jpg')}}\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4>Corneilloux</h4>
                                    <h5 class=\"primary\">300€/m2</h5>
                                    <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    4/5 logements disponibles
                                                </li>
                                            </ul>
                                    <h6>Paris 75016</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                    <div class=\"col-min h-270\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"{{ asset('build/images/static/acceuil-rigtht copie2.jpg') }}\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4> Coop Colette </h4>
                                    <h5 class=\"primary\">300€/m2</h5>
                                    <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    4/5 logements disponibles
                                                </li>
                                            </ul>
                                    <h6>Paris 75016</h6>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card\">
                                <div class=\"col-min h-270\">
                                        <img class=\"w-100 img-fluid rounded\" src=\"{{ asset('build/images/static/2745854824_1.jpg') }}\">
                                    </div>
                                <div class=\"card-body\">
                                <i class=\"far fa-heart\"></i>
                                    <h4>La K-Bane</h4>
                                    <h5 class=\"primary\">300€/m2</h5>
                                    <ul>
                                                <li>
                                                    <i class=\"fas fa-door-open\"></i>
                                                </li>
                                                <li>
                                                    4/5 logements disponibles
                                                </li>
                                            </ul>
                                    <h6>Paris 75016</h6>
                                </div>
                            </div>
                        </div>
                        {# fin exemples #}
                    </div>
        </section>

                        <div class=\"slicks\">
                            <div>your content</div>
                            <div>your content</div>
                            <div>your content</div>
                        </div>
    </div>
</section>
    
{% endblock %}
{% block javascripts %}
    <script>
        \$(function() {
              \$('.slicks').slick({
          
      })
            \$(document).on('click', '.fa-heart', function() {
                \$(this).hasClass('favoris')?\$(this).removeClass('favoris'):\$(this).addClass('favoris')
            } )
        })
    </script>
{% endblock %}", "home/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/home/index.html.twig");
    }
}
