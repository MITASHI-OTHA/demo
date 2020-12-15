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

/* espace/mon-profile.html.twig */
class __TwigTemplate_27051e3044770e8f562486d30695f888d3af83bc3b343dac70bb99b87bb26e8e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/mon-profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/mon-profile.html.twig"));

        // line 2
        $context["title"] = "espace membre";
        // line 1
        $this->parent = $this->loadTemplate("espace/base.html.twig", "espace/mon-profile.html.twig", 1);
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
        echo "   
    <style>
        .opac {
            background: url(\"";
        // line 7
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
        .form-civility label {
            font-size: 12px;
        }
        input::placeholder {
            font-size: 12px
        }
        .form-civility .col-md-4 {
            padding-bottom: 20px;
            padding-bottom: 20px;
            padding-left: 0;
            padding-right: 30px;
        }
        .form-check-inline>.form-check:first-child {
            padding-left: 0px;
        }
        .btn-caption {
            right: 0;
            bottom: 21px;
            background-color: transparent;
            color: #fff;
            border-color: #fff;
        }
        .btn-caption::before {
            background-color: #efefef40;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 87
        echo "<section class=\"position-relative\">
        <div class=\"opac\">
            <div class=\"space-banner text-center d-flex justify-content-center align-items-center position-relative\">

                    <a href=\"\" class=\"btn-caption btn btnSubmitOutline btn-sm ml-l3 mr-3 mt-3 position-absolute\"> <i class=\"fas fa-camera\"></i> Modifier la photo de couverture</a>
            </div>
        </div>
        
        <div class=\"container\">
            <div class=\"row my-5\">
                <div class=\"col-md-3 d-grid head-caption\" style=\"position: inherit\">
                        <div class=\"caption d-flex justify-content-center align-items-center position-absolute\">
                            <img src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\" class=\"w-100\">
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
                                <h1>  Jeanne DARC  </h1>
                                <a href=\"#\" class=\"badge badge-danger\"> Porteur de projet </a>
                            </div>
                            <div class=\"col\">
                                     <div class=\"row\" style=\"margin-top: 5%\">
                                <div class=\"col-md-12\">
                                    <h2>
                                        Informations de compte
                                    </h2>
                                    <hr>
                                </div>
                              
                                <div class=\"col-md-12 col-cvivlite\" style=\"margin-top: 3%\">
                                        <h6> Civilité </h6>
                                            <div id=\"\" class=\"form-check-inline\">
                                                <div class=\"form-check\">
                                                    <input type=\"radio\" id=\"Monsieur\" name=\"civilite_user\" required=\"required\" class=\"form-check-input\" value=\"Homme\">
                                                    <label class=\"form-check-label required\" for=\"Monsieur\">Monsieur</label>
                                                </div>
                                                <div class=\"form-check\">
                                                    <input type=\"radio\" id=\"Mme\" name=\"civilite_user\" required=\"required\" class=\"form-check-input\" value=\"femme\">
                                                    <label class=\"form-check-label required\" for=\"Mme\"> Madame </label>
                                                </div>
                                                <div class=\"form-check\">
                                                    <input type=\"radio\" id=\"autre\" name=\"civilite_user\" required=\"required\" class=\"form-check-input\" value=\"autre\">
                                                    <label class=\"form-check-label required\" for=\"autre\">Autre </label>
                                                </div>
                                                 <div class=\"form-check\">
                                                    <input type=\"radio\" id=\"nope-response\" name=\"civilite_user\" required=\"required\" class=\"form-check-input\" value=\"nope-response\">
                                                    <label class=\"form-check-label required\" for=\"nope-response\"> Ne souhaite pas répondre</label>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 form-civility\" style=\"margin-top: 10px\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Nom </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Doe\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Prénom </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: John\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Pseudo </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Kevin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Email </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Ex: john@gmail.com\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Télephone </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"tel\" class=\"form-control\" placeholder=\"Ex: 06 00 00 00 00\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Adresse </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 2 rue du Moulin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Code postal </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 72000\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Pays </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: France\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-12 type-fy pl-0\">
                                                            <div class=\"form-group\">
                                                                <label class=\"required\" for=\"prenom-user\"> A propos de vous </label>
                                                                <textarea rows=\"5\" class=\"form-control\" id=\"prenom-user\" name=\"taille\" placeholder=\"\" required></textarea>
                                                            </div>
                                                         
                                                        </div>
                                                        <div class=\"col-md-12 pl-0\">
                                                            <button type=\"button\" class=\"btn btnSubmit\">Enregistrer</button>
                                                        </div>
                                                    </div>
                                            </div>
                                </div>
                        </div>
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
                        
                        </div>
                </div>
            </div>
        </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 333
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 334
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
        return "espace/mon-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 334,  431 => 333,  177 => 87,  167 => 86,  78 => 7,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
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
        .form-civility label {
            font-size: 12px;
        }
        input::placeholder {
            font-size: 12px
        }
        .form-civility .col-md-4 {
            padding-bottom: 20px;
            padding-bottom: 20px;
            padding-left: 0;
            padding-right: 30px;
        }
        .form-check-inline>.form-check:first-child {
            padding-left: 0px;
        }
        .btn-caption {
            right: 0;
            bottom: 21px;
            background-color: transparent;
            color: #fff;
            border-color: #fff;
        }
        .btn-caption::before {
            background-color: #efefef40;
        }
    </style>
{% endblock %}
{% block body %}
<section class=\"position-relative\">
        <div class=\"opac\">
            <div class=\"space-banner text-center d-flex justify-content-center align-items-center position-relative\">

                    <a href=\"\" class=\"btn-caption btn btnSubmitOutline btn-sm ml-l3 mr-3 mt-3 position-absolute\"> <i class=\"fas fa-camera\"></i> Modifier la photo de couverture</a>
            </div>
        </div>
        
        <div class=\"container\">
            <div class=\"row my-5\">
                <div class=\"col-md-3 d-grid head-caption\" style=\"position: inherit\">
                        <div class=\"caption d-flex justify-content-center align-items-center position-absolute\">
                            <img src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\" class=\"w-100\">
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
                                <h1>  Jeanne DARC  </h1>
                                <a href=\"#\" class=\"badge badge-danger\"> Porteur de projet </a>
                            </div>
                            <div class=\"col\">
                                     <div class=\"row\" style=\"margin-top: 5%\">
                                <div class=\"col-md-12\">
                                    <h2>
                                        Informations de compte
                                    </h2>
                                    <hr>
                                </div>
                              
                                <div class=\"col-md-12 col-cvivlite\" style=\"margin-top: 3%\">
                                        <h6> Civilité </h6>
                                            <div id=\"\" class=\"form-check-inline\">
                                                <div class=\"form-check\">
                                                    <input type=\"radio\" id=\"Monsieur\" name=\"civilite_user\" required=\"required\" class=\"form-check-input\" value=\"Homme\">
                                                    <label class=\"form-check-label required\" for=\"Monsieur\">Monsieur</label>
                                                </div>
                                                <div class=\"form-check\">
                                                    <input type=\"radio\" id=\"Mme\" name=\"civilite_user\" required=\"required\" class=\"form-check-input\" value=\"femme\">
                                                    <label class=\"form-check-label required\" for=\"Mme\"> Madame </label>
                                                </div>
                                                <div class=\"form-check\">
                                                    <input type=\"radio\" id=\"autre\" name=\"civilite_user\" required=\"required\" class=\"form-check-input\" value=\"autre\">
                                                    <label class=\"form-check-label required\" for=\"autre\">Autre </label>
                                                </div>
                                                 <div class=\"form-check\">
                                                    <input type=\"radio\" id=\"nope-response\" name=\"civilite_user\" required=\"required\" class=\"form-check-input\" value=\"nope-response\">
                                                    <label class=\"form-check-label required\" for=\"nope-response\"> Ne souhaite pas répondre</label>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 form-civility\" style=\"margin-top: 10px\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Nom </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Doe\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Prénom </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: John\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Pseudo </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Kevin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Email </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Ex: john@gmail.com\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Télephone </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"tel\" class=\"form-control\" placeholder=\"Ex: 06 00 00 00 00\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Adresse </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 2 rue du Moulin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Code postal </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 72000\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Pays </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: France\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-12 type-fy pl-0\">
                                                            <div class=\"form-group\">
                                                                <label class=\"required\" for=\"prenom-user\"> A propos de vous </label>
                                                                <textarea rows=\"5\" class=\"form-control\" id=\"prenom-user\" name=\"taille\" placeholder=\"\" required></textarea>
                                                            </div>
                                                         
                                                        </div>
                                                        <div class=\"col-md-12 pl-0\">
                                                            <button type=\"button\" class=\"btn btnSubmit\">Enregistrer</button>
                                                        </div>
                                                    </div>
                                            </div>
                                </div>
                        </div>
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
{% endblock %}", "espace/mon-profile.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/mon-profile.html.twig");
    }
}
