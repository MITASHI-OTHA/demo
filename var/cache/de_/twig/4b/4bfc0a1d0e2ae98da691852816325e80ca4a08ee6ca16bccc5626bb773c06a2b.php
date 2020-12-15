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

/* espace/profile.html.twig */
class __TwigTemplate_855a837a764507634fb5b44fd14df9f141207e8d38edd6395098cb294f9ddbd8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/profile.html.twig"));

        // line 2
        $context["title"] = "espace membre";
        // line 1
        $this->parent = $this->loadTemplate("espace/base.html.twig", "espace/profile.html.twig", 1);
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
        .opac {
            background: url(\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/pexels-houzlook-com-3797991.jpg"), "html", null, true);
        echo "\") center no-repeat;
            background-size: 100%;
        }
        .caption {
            height: 160px;
            width: 160px;
            top: 147px;
        }
        .caption img {
            border-radius: 5px;
        }
        .space-banner {
            background: #00000080;
            height: 236px;
        }
        section .container {
            margin-top: 2%;
        }
        .caption-info p {
            font-size: 13px;
            padding-right: 40%;
            text-align: center;
            text-align: justify;
            word-break: break-all;
        }
        .detail-member h2 {
            font-size: 25px;
        }
        .caption-members {
            width: 100%;
            overflow: hidden;
            height: 190px;
            cursor: pointer
        }
        .waveUp {
            left: 0;
            right: 0;
            top: 220px;
            bottom: 0;
            background: #0000009c;
            transition: all ease .8s
        }
        .waveAppend {
            top: 0
        }
        .waveUp svg {
            color: #fff;
            font-size: 30px
        }
        .about {
            font-size: 12px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "<section class=\"position-relative\">
        <div class=\"opac\">
            <div class=\"space-banner text-center d-flex justify-content-center align-items-center position-relative\">
                    
            </div>
        </div>
        
        <div class=\"container\">
            <div class=\"row my-5\">
                <div class=\"col-md-3 d-grid head-caption\" style=\"position: inherit\">
                        <div class=\"caption d-flex justify-content-center align-items-center position-absolute\">
                            <img src=\"https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\" class=\"w-100\">
                        </div>
                        <div class=\"d-grid caption-info mt-5\">
                            <span> <i class=\"fas fa-history\"></i> <span style=\"font-size: 14px;\"> En ligne il y a 1 heure</span> </span>
                            <p class=\"my-2\">
                                Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt
                            </p>
                        </div>
                    </div>  
                <div class=\"col-md-9\">
                        <div class=\"row detail-member\">
                            <div class=\"col-md-12 d-grid mb-3\">
                                <h1> Wade Warren </h1>
                                <a href=\"#\" class=\"badge badge-danger\"> Futur habitant </a>
                            </div>
                            <div class=\"col-md-12 my-5\">
                                <h2> Le ménage </h2>
                                <hr>
                                <p>
                                    Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Voluptate exercitation incididunt aliquip deserunt reprehenderit elit laborum. 
                                </p>
                                <br>
                                <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                        <div class=\"carousel-inner\">
                                            <div class=\"carousel-item active\">
                                            <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/302083/pexels-photo-302083.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"First slide\">
                                            </div>
                                            <div class=\"carousel-item\">
                                            <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/9746/people-mother-family-father.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Second slide\">
                                            </div>
                                            <div class=\"carousel-item\">
                                            <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/3204051/pexels-photo-3204051.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Third slide\">
                                            </div>
                                        </div>
                                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>
                            </div>
                            <div class=\"col-md-12\">
                                <h2> Les membres </h2>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2506897/pexels-photo-2506897.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                           <a href=\"#\"> 
                                            </a>
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>
                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2748242/pexels-photo-2748242.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>
                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/262391/pexels-photo-262391.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>

                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/3525908/pexels-photo-3525908.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>
                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>
                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2380794/pexels-photo-2380794.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <h2> A propos </h2>
                                <hr>
                                <div class=\"d-flex mb-5\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-phone-square-alt\" style=\"font-size: 25px;\"></i>
                                        </div>
                                        <div class=\"ml-auto d-flex align-items-center\">
                                                <span> (704) 555-0127 </span>
                                        </div>
                                </div>
                                <div class=\"d-flex mb-5\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-at\" style=\"font-size: 25px;\"></i>
                                        </div>
                                        <div class=\"ml-auto d-flex align-items-center\">
                                                <span> test@gmail.com </span>
                                        </div>
                                </div>
                                <div class=\"d-flex mb-5\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-map-marker-alt\" style=\"font-size: 25px;\"></i>
                                        </div>
                                        <div class=\"ml-auto d-flex align-items-center justify-content-center\">
                                                2 Rue Galvany
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

    // line 213
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 214
        echo "    <script>
        \$(function() {
           
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
        return "espace/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 214,  311 => 213,  151 => 61,  141 => 60,  77 => 6,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace/base.html.twig' %}
{% set title = 'espace membre' %}
{% block stylesheets %}
    <style>
        .opac {
            background: url(\"{{ asset('build/images/static/pexels-houzlook-com-3797991.jpg') }}\") center no-repeat;
            background-size: 100%;
        }
        .caption {
            height: 160px;
            width: 160px;
            top: 147px;
        }
        .caption img {
            border-radius: 5px;
        }
        .space-banner {
            background: #00000080;
            height: 236px;
        }
        section .container {
            margin-top: 2%;
        }
        .caption-info p {
            font-size: 13px;
            padding-right: 40%;
            text-align: center;
            text-align: justify;
            word-break: break-all;
        }
        .detail-member h2 {
            font-size: 25px;
        }
        .caption-members {
            width: 100%;
            overflow: hidden;
            height: 190px;
            cursor: pointer
        }
        .waveUp {
            left: 0;
            right: 0;
            top: 220px;
            bottom: 0;
            background: #0000009c;
            transition: all ease .8s
        }
        .waveAppend {
            top: 0
        }
        .waveUp svg {
            color: #fff;
            font-size: 30px
        }
        .about {
            font-size: 12px;
        }
    </style>
{% endblock %}
{% block body %}
<section class=\"position-relative\">
        <div class=\"opac\">
            <div class=\"space-banner text-center d-flex justify-content-center align-items-center position-relative\">
                    
            </div>
        </div>
        
        <div class=\"container\">
            <div class=\"row my-5\">
                <div class=\"col-md-3 d-grid head-caption\" style=\"position: inherit\">
                        <div class=\"caption d-flex justify-content-center align-items-center position-absolute\">
                            <img src=\"https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\" class=\"w-100\">
                        </div>
                        <div class=\"d-grid caption-info mt-5\">
                            <span> <i class=\"fas fa-history\"></i> <span style=\"font-size: 14px;\"> En ligne il y a 1 heure</span> </span>
                            <p class=\"my-2\">
                                Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt
                            </p>
                        </div>
                    </div>  
                <div class=\"col-md-9\">
                        <div class=\"row detail-member\">
                            <div class=\"col-md-12 d-grid mb-3\">
                                <h1> Wade Warren </h1>
                                <a href=\"#\" class=\"badge badge-danger\"> Futur habitant </a>
                            </div>
                            <div class=\"col-md-12 my-5\">
                                <h2> Le ménage </h2>
                                <hr>
                                <p>
                                    Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Voluptate exercitation incididunt aliquip deserunt reprehenderit elit laborum. 
                                </p>
                                <br>
                                <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                        <div class=\"carousel-inner\">
                                            <div class=\"carousel-item active\">
                                            <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/302083/pexels-photo-302083.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"First slide\">
                                            </div>
                                            <div class=\"carousel-item\">
                                            <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/9746/people-mother-family-father.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Second slide\">
                                            </div>
                                            <div class=\"carousel-item\">
                                            <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/3204051/pexels-photo-3204051.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Third slide\">
                                            </div>
                                        </div>
                                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>
                            </div>
                            <div class=\"col-md-12\">
                                <h2> Les membres </h2>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2506897/pexels-photo-2506897.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                           <a href=\"#\"> 
                                            </a>
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>
                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2748242/pexels-photo-2748242.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>
                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/262391/pexels-photo-262391.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>

                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/3525908/pexels-photo-3525908.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>
                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>
                                    <div class=\"col-md-4 mb-3 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2380794/pexels-photo-2380794.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"py-2 about\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <h2> A propos </h2>
                                <hr>
                                <div class=\"d-flex mb-5\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-phone-square-alt\" style=\"font-size: 25px;\"></i>
                                        </div>
                                        <div class=\"ml-auto d-flex align-items-center\">
                                                <span> (704) 555-0127 </span>
                                        </div>
                                </div>
                                <div class=\"d-flex mb-5\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-at\" style=\"font-size: 25px;\"></i>
                                        </div>
                                        <div class=\"ml-auto d-flex align-items-center\">
                                                <span> test@gmail.com </span>
                                        </div>
                                </div>
                                <div class=\"d-flex mb-5\">
                                        <div class=\"d-flex align-items-center\">
                                            <i class=\"fas fa-map-marker-alt\" style=\"font-size: 25px;\"></i>
                                        </div>
                                        <div class=\"ml-auto d-flex align-items-center justify-content-center\">
                                                2 Rue Galvany
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
        \$(function() {
           
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
{% endblock %}", "espace/profile.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/profile.html.twig");
    }
}
