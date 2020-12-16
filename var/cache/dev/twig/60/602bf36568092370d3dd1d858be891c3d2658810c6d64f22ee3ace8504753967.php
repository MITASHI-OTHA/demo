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
            overflow: hidden;
            border-radius: 7px;
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
        .caption .fa-pen-square {
            position: absolute;
            right: 10px;
            bottom: 8px;
            color: #1d1c1c;
            font-size: 21px;
            cursor: pointer
        }
        .thumbnail-image {
            margin-right: 1rem;
            margin-top: 1rem;
            margin-bottom: 1px;
            border-radius: 0 0 5px 5px;
            cursor: pointer
        }
        .thumbnail-image svg {
            font-size: 14px
        }
        .thumbnail-image>div:first-child {
            height: 100px;
            width: 166px;
            overflow: hidden;
            position: relative
        }
        .field-upload {
            border-radius: 7px;
            border: 2px dotted #ddd;
            padding: 1rem;
        }
        .tools-member {
          border-radius: 0 0 7px 7px;
          border-bottom: 2px solid #cbfdf1;
          padding-bottom: 5px;
        }
        .tools-member svg:hover {
            cursor: pointer
        }
        .carousel-item {
            height: 500px;
            overflow-y: hidden;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 130
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
                            <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/profil.jpeg"), "html", null, true);
        echo "\" class=\"w-100\">
                             <i class=\"fas fa-pen-square\"></i>
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
                                <h1>  Jonh Smith  </h1>
                                <a href=\"#\" class=\"badge badge-danger\"> Porteur de projet </a>
                            </div>
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
                                                    <input type=\"radio\" id=\"Monsieur\" name=\"civilite_user\" required=\"required\" class=\"form-check-input\" value=\"Homme\" checked=\"true\">
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
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Doe\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"John\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Prénom </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: John\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"Smith\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Pseudo </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Kevin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"J-SMITH\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Email </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Ex: john@gmail.com\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"john@gmail.com\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Télephone </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"tel\" class=\"form-control\" placeholder=\"Ex: 06 00 00 00 00\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"06 00 00 00 00\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Adresse </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 2 rue du Moulin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"2 rue du Moulin\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Code postal </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 72000\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"91000\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Pays </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: France\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"France\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                            </div>
                                </div>
                        </div>
                            <div class=\"row my-5\">
                                <div class=\"col-md-12\">
                                    <h2> Mon ménage </h2>
                                     <hr>
                                </div>
                               
                                <div class=\"col-md-12 mt-3\">
                                    <div class=\"form-group\">
                                        <label class=\"required\" for=\"prenom-user\"> À propos de vous </label>
                                        <textarea rows=\"5\" class=\"form-control\" id=\"prenom-user\" name=\"taille\" placeholder=\"\" required>Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Voluptate exercitation incididunt aliquip deserunt reprehenderit elit laborum.</textarea>
                                    </div>
                                    
                                </div>
                                <br>
                                <div class=\"col-md-12 mt-3\">
                                    <h5> Mes photos </h5>
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

                                                <div class=\"carousel-item\">
                                                <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/3890576/pexels-photo-3890576.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Third slide\">
                                                </div>

                                                <div class=\"carousel-item\">
                                                <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/6040989/pexels-photo-6040989.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Third slide\">
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
                                            <div class=\"list-min-images d-flex justify-content-center align-items-center\">
                                                    <div class=\"thumbnail-image\" data-index-caption=\"0\">
                                                        <div>
                                                            <img src=\"https://images.pexels.com/photos/302083/pexels-photo-302083.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\" >
                                                        </div>
                                                            <i class=\"fas fa-trash-alt delete-image\"></i>
                                                        
                                                    </div>
                                                    <div class=\"thumbnail-image\" data-index-caption=\"1\">
                                                        <div>
                                                            <img src=\"https://images.pexels.com/photos/9746/people-mother-family-father.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\" >
                                                        </div>
                                                        <i class=\"fas fa-trash-alt delete-image\"></i>
                                                    </div>
                                                    <div class=\"thumbnail-image\" data-index-caption=\"2\">
                                                        <div>
                                                            <img src=\"https://images.pexels.com/photos/3204051/pexels-photo-3204051.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\" >
                                                        </div>
                                                        <i class=\"fas fa-trash-alt delete-image\"></i>
                                                    </div>
                                                    <div class=\"thumbnail-image\" data-index-caption=\"3\">
                                                        <div>
                                                            <img src=\"https://images.pexels.com/photos/3890576/pexels-photo-3890576.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\" >
                                                        </div>
                                                        <i class=\"fas fa-trash-alt delete-image\"></i>
                                                    </div>
                                                    <div class=\"thumbnail-image\" data-index-caption=\"4\">
                                                        <div>
                                                            <img src=\"https://images.pexels.com/photos/6040989/pexels-photo-6040989.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\" >
                                                        </div>
                                                        <i class=\"fas fa-trash-alt delete-image\"></i>
                                                    </div>
                                            </div>
                                        
                                        <div class=\"mt-5 field-upload\">
                                            <div>
                                                <input type=\"file\"  id=\"inputGroupFile01\" aria-describedby=\"inputGroupFileAddon01\">
                                            </div>
                                            <div class=\"mt-5\">
                                                <button type=\"button\" class=\"btn btnSubmitBlue\"> <i class=\"fas fa-plus\"></i> Ajouter une image </button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <h2> Les membres </h2>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2506897/pexels-photo-2506897.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                           <a href=\"#\"> 
                                            </a>
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2748242/pexels-photo-2748242.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/262391/pexels-photo-262391.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>

                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/3525908/pexels-photo-3525908.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2380794/pexels-photo-2380794.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"mt-3 field-upload\">
                                            <div>
                                                <input type=\"file\"  id=\"inputGroupFile01\" aria-describedby=\"inputGroupFileAddon01\">
                                            </div>
                                            <div class=\"mt-5\">
                                                <button type=\"button\" class=\"btn btnSubmitBlue\"> <i class=\"fas fa-plus\"></i> Ajouter une image </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                    <div class=\"col-md-12 pl-0 mt-5\">
                                        <button type=\"button\" class=\"btn btnSubmit mt-5\"> <i class=\"fas fa-save\"></i> Enregistrer</button>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        ";
        // line 459
        echo "                <!-- Modal -->
                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression de l'image ?</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                Souhaitez-vous supprimer definitivement cette image ?
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"button\" class=\"btn btnDanger\">Oui</button>
                            </div>
                            </div>
                        </div>
                    </div>
        ";
        // line 480
        echo "</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 483
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 484
        echo "    <script>
        \$(function() {
            // Effacer une image
            \$('.delete-image').on('click', ()=> {
                \$('#exampleModal').modal()
            })
            wow = new WOW(
                    {
                        animateClass: 'animated',
                        callback:     function(box) {
                        
                        }
                    }
                    );
                wow.init();

                \$('.thumbnail-image').on('click', function() {
                let item = \$(this).data('index-caption')
                \$('.carousel').carousel(parseInt(item))
            } )
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
        return array (  596 => 484,  586 => 483,  575 => 480,  553 => 459,  234 => 142,  220 => 130,  210 => 129,  78 => 7,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
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
            overflow: hidden;
            border-radius: 7px;
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
        .caption .fa-pen-square {
            position: absolute;
            right: 10px;
            bottom: 8px;
            color: #1d1c1c;
            font-size: 21px;
            cursor: pointer
        }
        .thumbnail-image {
            margin-right: 1rem;
            margin-top: 1rem;
            margin-bottom: 1px;
            border-radius: 0 0 5px 5px;
            cursor: pointer
        }
        .thumbnail-image svg {
            font-size: 14px
        }
        .thumbnail-image>div:first-child {
            height: 100px;
            width: 166px;
            overflow: hidden;
            position: relative
        }
        .field-upload {
            border-radius: 7px;
            border: 2px dotted #ddd;
            padding: 1rem;
        }
        .tools-member {
          border-radius: 0 0 7px 7px;
          border-bottom: 2px solid #cbfdf1;
          padding-bottom: 5px;
        }
        .tools-member svg:hover {
            cursor: pointer
        }
        .carousel-item {
            height: 500px;
            overflow-y: hidden;
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
                            <img src=\"{{asset('build/images/web/profil.jpeg')}}\" class=\"w-100\">
                             <i class=\"fas fa-pen-square\"></i>
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
                                <h1>  Jonh Smith  </h1>
                                <a href=\"#\" class=\"badge badge-danger\"> Porteur de projet </a>
                            </div>
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
                                                    <input type=\"radio\" id=\"Monsieur\" name=\"civilite_user\" required=\"required\" class=\"form-check-input\" value=\"Homme\" checked=\"true\">
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
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Doe\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"John\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Prénom </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: John\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"Smith\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Pseudo </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Kevin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"J-SMITH\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Email </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"email\" class=\"form-control\" placeholder=\"Ex: john@gmail.com\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"john@gmail.com\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Télephone </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"tel\" class=\"form-control\" placeholder=\"Ex: 06 00 00 00 00\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"06 00 00 00 00\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Adresse </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 2 rue du Moulin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"2 rue du Moulin\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Code postal </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 72000\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"91000\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-4\">
                                                            <label class=\"required\" for=\"nom\"> Pays </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: France\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\" value=\"France\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                            </div>
                                </div>
                        </div>
                            <div class=\"row my-5\">
                                <div class=\"col-md-12\">
                                    <h2> Mon ménage </h2>
                                     <hr>
                                </div>
                               
                                <div class=\"col-md-12 mt-3\">
                                    <div class=\"form-group\">
                                        <label class=\"required\" for=\"prenom-user\"> À propos de vous </label>
                                        <textarea rows=\"5\" class=\"form-control\" id=\"prenom-user\" name=\"taille\" placeholder=\"\" required>Nulla Lorem mollit cupidatat irure. Laborum magna nulla duis ullamco cillum dolor. Voluptate exercitation incididunt aliquip deserunt reprehenderit elit laborum.</textarea>
                                    </div>
                                    
                                </div>
                                <br>
                                <div class=\"col-md-12 mt-3\">
                                    <h5> Mes photos </h5>
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

                                                <div class=\"carousel-item\">
                                                <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/3890576/pexels-photo-3890576.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Third slide\">
                                                </div>

                                                <div class=\"carousel-item\">
                                                <img class=\"d-block w-100\" src=\"https://images.pexels.com/photos/6040989/pexels-photo-6040989.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" alt=\"Third slide\">
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
                                            <div class=\"list-min-images d-flex justify-content-center align-items-center\">
                                                    <div class=\"thumbnail-image\" data-index-caption=\"0\">
                                                        <div>
                                                            <img src=\"https://images.pexels.com/photos/302083/pexels-photo-302083.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\" >
                                                        </div>
                                                            <i class=\"fas fa-trash-alt delete-image\"></i>
                                                        
                                                    </div>
                                                    <div class=\"thumbnail-image\" data-index-caption=\"1\">
                                                        <div>
                                                            <img src=\"https://images.pexels.com/photos/9746/people-mother-family-father.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\" >
                                                        </div>
                                                        <i class=\"fas fa-trash-alt delete-image\"></i>
                                                    </div>
                                                    <div class=\"thumbnail-image\" data-index-caption=\"2\">
                                                        <div>
                                                            <img src=\"https://images.pexels.com/photos/3204051/pexels-photo-3204051.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\" >
                                                        </div>
                                                        <i class=\"fas fa-trash-alt delete-image\"></i>
                                                    </div>
                                                    <div class=\"thumbnail-image\" data-index-caption=\"3\">
                                                        <div>
                                                            <img src=\"https://images.pexels.com/photos/3890576/pexels-photo-3890576.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\" >
                                                        </div>
                                                        <i class=\"fas fa-trash-alt delete-image\"></i>
                                                    </div>
                                                    <div class=\"thumbnail-image\" data-index-caption=\"4\">
                                                        <div>
                                                            <img src=\"https://images.pexels.com/photos/6040989/pexels-photo-6040989.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\" >
                                                        </div>
                                                        <i class=\"fas fa-trash-alt delete-image\"></i>
                                                    </div>
                                            </div>
                                        
                                        <div class=\"mt-5 field-upload\">
                                            <div>
                                                <input type=\"file\"  id=\"inputGroupFile01\" aria-describedby=\"inputGroupFileAddon01\">
                                            </div>
                                            <div class=\"mt-5\">
                                                <button type=\"button\" class=\"btn btnSubmitBlue\"> <i class=\"fas fa-plus\"></i> Ajouter une image </button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <h2> Les membres </h2>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2506897/pexels-photo-2506897.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                           <a href=\"#\"> 
                                            </a>
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2748242/pexels-photo-2748242.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/262391/pexels-photo-262391.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>

                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/3525908/pexels-photo-3525908.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4 mb-5 wow fadeInDown\">
                                        <div class=\"caption-members d-flex justify-content-center align-items-center position-relative\">
                                            <img src=\"https://images.pexels.com/photos/2380794/pexels-photo-2380794.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\" class=\"w-100\">
                                            
                                        </div>
                                        <p class=\"pt-2 about mb-0\">
                                            Do id incididunt sunt occaecat excepteur aliquip excepteur ea eiusmod. Ipsum ad voluptate proident nulla exercitation non anim. 
                                        </p>
                                        <div class=\"d-flex pl-0 mt-1 tools-member\">
                                            <div> <i class=\"far fa-edit\" title=\"Modifier\"></i> </div>
                                            <div class=\"ml-auto\"> <i class=\"fas fa-trash-alt delete-image\" title=\"Supprimer\"></i> </div>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        <div class=\"mt-3 field-upload\">
                                            <div>
                                                <input type=\"file\"  id=\"inputGroupFile01\" aria-describedby=\"inputGroupFileAddon01\">
                                            </div>
                                            <div class=\"mt-5\">
                                                <button type=\"button\" class=\"btn btnSubmitBlue\"> <i class=\"fas fa-plus\"></i> Ajouter une image </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                    <div class=\"col-md-12 pl-0 mt-5\">
                                        <button type=\"button\" class=\"btn btnSubmit mt-5\"> <i class=\"fas fa-save\"></i> Enregistrer</button>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        {# _________MODALE_______ #}
                <!-- Modal -->
                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Suppression de l'image ?</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                Souhaitez-vous supprimer definitivement cette image ?
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                <button type=\"button\" class=\"btn btnDanger\">Oui</button>
                            </div>
                            </div>
                        </div>
                    </div>
        {# ______FIN________ #}
</section>
{% endblock %}

{% block javascripts %}
    <script>
        \$(function() {
            // Effacer une image
            \$('.delete-image').on('click', ()=> {
                \$('#exampleModal').modal()
            })
            wow = new WOW(
                    {
                        animateClass: 'animated',
                        callback:     function(box) {
                        
                        }
                    }
                    );
                wow.init();

                \$('.thumbnail-image').on('click', function() {
                let item = \$(this).data('index-caption')
                \$('.carousel').carousel(parseInt(item))
            } )
        })
    </script>
{% endblock %}", "espace/mon-profile.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/mon-profile.html.twig");
    }
}
