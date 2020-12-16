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

/* biblio/index.html.twig */
class __TwigTemplate_691a7bb9b9de453cfbcf1ead08aeacb6dca4dedb4cf9b937572c75f7ad04a0f0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biblio/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biblio/index.html.twig"));

        // line 2
        $context["title"] = "Bibliothèque";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "biblio/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 90
        echo "
    <div class=\"container\">
        <section>
            <div class=\"row\">
                <div class=\"col-md-12 mt-5\">
                        <h1> Bibliothèque </h1>

                        <h6> Filtres </h6>
                        <div class=\"alert alert-secondary alert-warning alert-dismissible fade show\" role=\"alert\">
                                 Vous pouvez choisir de fitrer les documents en fonction du type de fichier que vous recherchés (image, site web, pdf, docx...)
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        
                </div>
                <div class=\"row\" style=\"margin-top: 5px;width: 100%\">
                        <div class=\"col-md-12 list-it\">
                            <ul>
                                    <li class=\"first\">
                                        <button type=\"button\" class=\"btn btn-danger all\" onclick=\"fitrer('card-item')\">Tous les documents</button>
                                    </Li>
                                    <li>
                                        <div class=\"filter\" data-filtre=\"document\">
                                                <i class=\"fas fa-file-alt\"></i>
                                        </div>
                                    </Li>
                                    <li>
                                         <div class=\"filter\" data-filtre=\"image\">
                                            <i class=\"fas fa-image\"></i>
                                        </div>
                                    </Li>
                                    <li>
                                         <div class=\"filter\" data-filtre=\"web\">
                                            <i class=\"fas fa-globe\"></i>
                                        </div>
                                    </Li>
                                     <li>
                                         <div class=\"filter\" data-filtre=\"video\">
                                            <i class=\"fas fa-file-video\"></i>
                                        </div>
                                    </Li>
                            </ul>
                        </div>
                </div>
                <div class=\"isotop\" data-isotope='{ \"itemSelector\": \".card-item\" }'>
                            <div class=\"card-item premier image\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"https://images.pexels.com/photos/2079246/pexels-photo-2079246.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                        </div>
                                        <div>
                                            <h6> document #K8KDHJ </h6>
                                            <p> Ajouté le 20 Juillet 2020 </p>
                                            <em>250k</em>
                                            <div class=\"foot-card\">
                                                <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/image.png"), "html", null, true);
        echo "\">
                                                <span> Télecharger l'image </span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/ciyzens-folder.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                        <div>
                                            <h6> document #K8KDHJ </h6>
                                            <p> Ajouté le 20 Juillet 2020 </p>
                                            <em>250k</em>
                                            <div class=\"foot-card\">
                                                <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/zip.png"), "html", null, true);
        echo "\">
                                                <span> Télecharger le document </span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item video\">
                                <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/video.jpg"), "html", null, true);
        echo "\">
                                    </div>
                                    <div>
                                        <h6> document #K8KDHJ </h6>
                                        <p> Ajouté le 20 Juillet 2020 </p>
                                        <em>250k</em>
                                        <div class=\"foot-card\">
                                            <img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/play.png"), "html", null, true);
        echo "\">
                                            <span> Télecharger le document </span>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                       <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/zip-format.png"), "html", null, true);
        echo "\">
                                       </div>
                                       <div>
                                            <h6> document #K8KDHJ </h6>
                                            <p> Ajouté le 20 Juillet 2020 </p>
                                            <em>250k</em>
                                            <div class=\"foot-card\">
                                                <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/pdf.png"), "html", null, true);
        echo "\">
                                                <span> Télecharger le document </span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/files.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                        <div>
                                            <h6> document #K8KDHJ </h6>
                                            <p> Ajouté le 20 Juillet 2020 </p>
                                            <em>250k</em>
                                            <div class=\"foot-card\">
                                                <img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/zip.png"), "html", null, true);
        echo "\">
                                            <span> Télecharger le document </span>
                                        </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item web\">
                                <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                    <div>
                                        <h6> document #K8KDHJ </h6>
                                        <p> Ajouté le 20 Juillet 2020 </p>
                                        <em>250k</em>
                                        <div class=\"foot-card\">
                                                <img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/world-wide-web.png"), "html", null, true);
        echo "\">
                                                <span> Copier le lien </span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260\">
                                    </div>
                                    <div>
                                        <h6> document #K8KDHJ </h6>
                                        <p> Ajouté le 20 Juillet 2020 </p>
                                        <em>250k</em>
                                         <div class=\"foot-card\">
                                            <img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/image.png"), "html", null, true);
        echo "\">
                                            <span> Télecharger l'image </span>
                                        </div>
                                    </div>  
                                </div>
                                
                            </div>
                            <div class=\"card-item image\">
                                <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/279719/pexels-photo-279719.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                    <div>
                                        <h6> document #K8KDHJ </h6>
                                        <p> Ajouté le 20 Juillet 2020 </p>
                                        <em>250k</em>
                                        <div class=\"foot-card\">
                                                <img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/image.png"), "html", null, true);
        echo "\">
                                                <span> Télecharger le document </span>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                </div>
            </div>
        </section>
    </div>
    <script>
   
        \$(function () {
            //\$('.isotop').isotope({
              //  itemSelector: '.card-item',
                //layoutMode: 'fitRows'
                //});
            fitrer = (item)=> {
                     \$('.isotop').isotope({ filter: '.'+item })
                }
                \$('.card').css('cursor', 'pointer')
                \$('.filter').on('click', function() {
                    var filtre = \$(this).data('filtre')
                    fitrer(filtre)
                } )

                
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "/\"/>
        <style>
            .container .row:first-child h6 {
                margin-top: 3%
            }
            .texte {
                background: #ddd;
                padding: 10px;
            }
            ul {
                list-style: none;
                display: flex;
                padding-left: 14px;
            }
           .list-it ul li {
                display: inline;
                text-align: center
            }
             .list-it ul li  div {
                width: 38px;
                height: 38px;
                border-radius: 50%;
                background: #e0e0e0;
                display: flex
            }
            .list-it ul li:not(.first) {
                margin-left: 3em;
            }
            .list-it ul li div svg {
                margin: auto
            }
            .card {
                width: 250px;
                background: #fff;
                padding: 0;
            }
            .isotop {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                margin-top: 51px;
            }
            .isotop .card-item {
                margin-right: 3%
            }
            .caption {
                 border-radius: 5px 5px 0 0;
                 height: 159px;
                 overflow: hidden
           }
            .card {
                box-shadow: 3px -6px 6px 5px rgb(208 186 186 / 8%), 0 4px 8px 0 rgb(199 199 199 / 18%);
                margin-bottom: 1rem
            }
           
            .foot-card span {
                font-size: 12px;
            }
            .card div:last-child {
                padding: 11px;
            }
            .foot-card {
                padding-left: 0 !important;
            }
             .card em {
                font-size: 11px
             }
             .list-it ul li div:hover {
                    background: #cccaca;
                    transition: all .3s;
                    cursor: pointer
             }
             .caption img {
                 width: 100%
             }
             .foot-card img {
                 width: 15px
             }
             section h1 {
                 font-weight: 600;
                 font-size: 26px
             }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "biblio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 6,  321 => 5,  281 => 261,  261 => 244,  241 => 227,  222 => 211,  212 => 204,  200 => 195,  190 => 188,  177 => 178,  167 => 171,  155 => 162,  145 => 155,  133 => 146,  75 => 90,  72 => 5,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set title = 'Bibliothèque' %}

{% block body %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css')}}/\"/>
        <style>
            .container .row:first-child h6 {
                margin-top: 3%
            }
            .texte {
                background: #ddd;
                padding: 10px;
            }
            ul {
                list-style: none;
                display: flex;
                padding-left: 14px;
            }
           .list-it ul li {
                display: inline;
                text-align: center
            }
             .list-it ul li  div {
                width: 38px;
                height: 38px;
                border-radius: 50%;
                background: #e0e0e0;
                display: flex
            }
            .list-it ul li:not(.first) {
                margin-left: 3em;
            }
            .list-it ul li div svg {
                margin: auto
            }
            .card {
                width: 250px;
                background: #fff;
                padding: 0;
            }
            .isotop {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                margin-top: 51px;
            }
            .isotop .card-item {
                margin-right: 3%
            }
            .caption {
                 border-radius: 5px 5px 0 0;
                 height: 159px;
                 overflow: hidden
           }
            .card {
                box-shadow: 3px -6px 6px 5px rgb(208 186 186 / 8%), 0 4px 8px 0 rgb(199 199 199 / 18%);
                margin-bottom: 1rem
            }
           
            .foot-card span {
                font-size: 12px;
            }
            .card div:last-child {
                padding: 11px;
            }
            .foot-card {
                padding-left: 0 !important;
            }
             .card em {
                font-size: 11px
             }
             .list-it ul li div:hover {
                    background: #cccaca;
                    transition: all .3s;
                    cursor: pointer
             }
             .caption img {
                 width: 100%
             }
             .foot-card img {
                 width: 15px
             }
             section h1 {
                 font-weight: 600;
                 font-size: 26px
             }
        </style>
    {% endblock %}

    <div class=\"container\">
        <section>
            <div class=\"row\">
                <div class=\"col-md-12 mt-5\">
                        <h1> Bibliothèque </h1>

                        <h6> Filtres </h6>
                        <div class=\"alert alert-secondary alert-warning alert-dismissible fade show\" role=\"alert\">
                                 Vous pouvez choisir de fitrer les documents en fonction du type de fichier que vous recherchés (image, site web, pdf, docx...)
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        
                </div>
                <div class=\"row\" style=\"margin-top: 5px;width: 100%\">
                        <div class=\"col-md-12 list-it\">
                            <ul>
                                    <li class=\"first\">
                                        <button type=\"button\" class=\"btn btn-danger all\" onclick=\"fitrer('card-item')\">Tous les documents</button>
                                    </Li>
                                    <li>
                                        <div class=\"filter\" data-filtre=\"document\">
                                                <i class=\"fas fa-file-alt\"></i>
                                        </div>
                                    </Li>
                                    <li>
                                         <div class=\"filter\" data-filtre=\"image\">
                                            <i class=\"fas fa-image\"></i>
                                        </div>
                                    </Li>
                                    <li>
                                         <div class=\"filter\" data-filtre=\"web\">
                                            <i class=\"fas fa-globe\"></i>
                                        </div>
                                    </Li>
                                     <li>
                                         <div class=\"filter\" data-filtre=\"video\">
                                            <i class=\"fas fa-file-video\"></i>
                                        </div>
                                    </Li>
                            </ul>
                        </div>
                </div>
                <div class=\"isotop\" data-isotope='{ \"itemSelector\": \".card-item\" }'>
                            <div class=\"card-item premier image\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"https://images.pexels.com/photos/2079246/pexels-photo-2079246.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                        </div>
                                        <div>
                                            <h6> document #K8KDHJ </h6>
                                            <p> Ajouté le 20 Juillet 2020 </p>
                                            <em>250k</em>
                                            <div class=\"foot-card\">
                                                <img src=\"{{asset('build/images/web/image.png')}}\">
                                                <span> Télecharger l'image </span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"{{ asset('build/images/web/ciyzens-folder.jpg') }}\">
                                        </div>
                                        <div>
                                            <h6> document #K8KDHJ </h6>
                                            <p> Ajouté le 20 Juillet 2020 </p>
                                            <em>250k</em>
                                            <div class=\"foot-card\">
                                                <img src=\"{{asset('build/images/web/zip.png')}}\">
                                                <span> Télecharger le document </span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item video\">
                                <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"{{ asset('build/images/web/video.jpg') }}\">
                                    </div>
                                    <div>
                                        <h6> document #K8KDHJ </h6>
                                        <p> Ajouté le 20 Juillet 2020 </p>
                                        <em>250k</em>
                                        <div class=\"foot-card\">
                                            <img src=\"{{asset('build/images/web/play.png')}}\">
                                            <span> Télecharger le document </span>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                       <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"{{ asset('build/images/web/zip-format.png') }}\">
                                       </div>
                                       <div>
                                            <h6> document #K8KDHJ </h6>
                                            <p> Ajouté le 20 Juillet 2020 </p>
                                            <em>250k</em>
                                            <div class=\"foot-card\">
                                                <img src=\"{{asset('build/images/web/pdf.png')}}\">
                                                <span> Télecharger le document </span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"{{ asset('build/images/web/files.jpg') }}\">
                                        </div>
                                        <div>
                                            <h6> document #K8KDHJ </h6>
                                            <p> Ajouté le 20 Juillet 2020 </p>
                                            <em>250k</em>
                                            <div class=\"foot-card\">
                                                <img src=\"{{asset('build/images/web/zip.png')}}\">
                                            <span> Télecharger le document </span>
                                        </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item web\">
                                <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                    <div>
                                        <h6> document #K8KDHJ </h6>
                                        <p> Ajouté le 20 Juillet 2020 </p>
                                        <em>250k</em>
                                        <div class=\"foot-card\">
                                                <img src=\"{{asset('build/images/web/world-wide-web.png')}}\">
                                                <span> Copier le lien </span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260\">
                                    </div>
                                    <div>
                                        <h6> document #K8KDHJ </h6>
                                        <p> Ajouté le 20 Juillet 2020 </p>
                                        <em>250k</em>
                                         <div class=\"foot-card\">
                                            <img src=\"{{asset('build/images/web/image.png')}}\">
                                            <span> Télecharger l'image </span>
                                        </div>
                                    </div>  
                                </div>
                                
                            </div>
                            <div class=\"card-item image\">
                                <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/279719/pexels-photo-279719.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                    <div>
                                        <h6> document #K8KDHJ </h6>
                                        <p> Ajouté le 20 Juillet 2020 </p>
                                        <em>250k</em>
                                        <div class=\"foot-card\">
                                                <img src=\"{{asset('build/images/web/image.png')}}\">
                                                <span> Télecharger le document </span>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                </div>
            </div>
        </section>
    </div>
    <script>
   
        \$(function () {
            //\$('.isotop').isotope({
              //  itemSelector: '.card-item',
                //layoutMode: 'fitRows'
                //});
            fitrer = (item)=> {
                     \$('.isotop').isotope({ filter: '.'+item })
                }
                \$('.card').css('cursor', 'pointer')
                \$('.filter').on('click', function() {
                    var filtre = \$(this).data('filtre')
                    fitrer(filtre)
                } )

                
        })
    </script>
{% endblock %}", "biblio/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/biblio/index.html.twig");
    }
}
