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

/* favoris/index.html.twig */
class __TwigTemplate_4df818e725de51223640dcf085962b68038e1f21b98dd8dc230a401d52d1d94d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favoris/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "favoris/index.html.twig"));

        // line 2
        $context["title"] = "Mes favoris";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "favoris/index.html.twig", 1);
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
        // line 36
        echo "        <div class=\"container\">
                <section>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h1> Mes favoris </h1>
                                <h6> Retrouvez vos projets sauvegardés sur tous vos appareils </h6>
                                <p> Si l’annonce n’est plus active sur le site, elle disparaîtra automatiquement de votre sélection. </p>
                            </div>
                        </div>
                        <div class=\"modal\" tabindex=\"-1\" id=\"deleteFavoris\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">Supprimer le favoris</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>Souhaitez-vous supprimer ce favoris ?</p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                        <button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <div class=\"row\" style=\"margin-top: 21px\">
                                <div class=\"col-md-12\"> 
                        ";
        // line 67
        echo "                                    <div class=\"card\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                                            <img src=\"https://images.pexels.com/photos/212185/pexels-photo-212185.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)\">
                                                        </div>
                                                </div>
                                                <div class=\"col-md-8\" style=\"position: relative\">
                                                        <i class=\"fas fa-trash\"></i>
                                                        <div class=\"cand-descpt\">
                                                            <h3> Oasis la Geriais </h3>
                                                            <ul>
                                                                <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                                                <li>2500€/m2</li>
                                                            </ul>
                                                            <div style=\"display: flex;margin-top: 7px;\">
                                                                <i class=\"fas fa-calendar-day\"></i>
                                                                <span> Sauvegardé le 05/08/2020 </span>
                                                            </div>
                                                        </div>
                                                      
                                                        <div class='footer-card'>
                                                           
                                                            
                                                          
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                            ";
        // line 97
        echo "                                    </div>
                                    <div class=\"col-md-12\"> 
                        ";
        // line 100
        echo "                                    <div class=\"card\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                        <div class=\"caption justify-content-center align-items-center\">
                                                            <img src=\"https://images.pexels.com/photos/4675158/pexels-photo-4675158.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                                        </div>
                                                </div>
                                                <div class=\"col-md-8\" style=\"position: relative\">
                                                        <i class=\"fas fa-trash\"></i>
                                                        <div class=\"cand-descpt\">
                                                            <h3> Le Pre des Hauts Bois </h3>
                                                            <ul>
                                                                <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                                                <li>2500€/m2</li>
                                                            </ul>
                                                            <div style=\"display: flex;margin-top: 7px;\">
                                                                <i class=\"fas fa-calendar-day\"></i>
                                                                <span> Sauvegardé le 05/08/2020 </span>
                                                            </div>
                                                        </div>
                                                      
                                                        <div class='footer-card'>
                                                            <div style=\"flex: 1;padding-top: 5px\">
                                                            
                                                            
                                                        </div>
                                                </div>
                                            </div>
                                    </div>
                        ";
        // line 130
        echo "                            </div>

                        </div>
                </section>
        </div>
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
        echo "         <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        <style>
            .container .row:first-child h6 {
                margin-top: 3%
            }
            .card {
                width: 70%
            }
            .fa-heart {
                font-size: 25px;
                color: #53c0b5;
            }
            .btn-outline-primary:hover {
                background-color: #b9fff8 !important;
                border-color: #4dffed !important;
                color: #40b389 !important;
            }
            .footer-card button {
                float: right
            }
            .caption {
                height: 200px;
                width: 100%;
                overflow: hidden;
            }
             .caption img {
                 width: 100%
             }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "    <script>
        \$(function(){
            \$('.fa-trash').on('click',()=> {
                \$('#deleteFavoris').modal('show')
            })
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "favoris/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 137,  240 => 136,  199 => 6,  189 => 5,  174 => 130,  143 => 100,  139 => 97,  108 => 67,  76 => 36,  73 => 5,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set title = 'Mes favoris' %}

{% block body %}
    {% block stylesheets %}
         <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
        <style>
            .container .row:first-child h6 {
                margin-top: 3%
            }
            .card {
                width: 70%
            }
            .fa-heart {
                font-size: 25px;
                color: #53c0b5;
            }
            .btn-outline-primary:hover {
                background-color: #b9fff8 !important;
                border-color: #4dffed !important;
                color: #40b389 !important;
            }
            .footer-card button {
                float: right
            }
            .caption {
                height: 200px;
                width: 100%;
                overflow: hidden;
            }
             .caption img {
                 width: 100%
             }
        </style>
    {% endblock %}
        <div class=\"container\">
                <section>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h1> Mes favoris </h1>
                                <h6> Retrouvez vos projets sauvegardés sur tous vos appareils </h6>
                                <p> Si l’annonce n’est plus active sur le site, elle disparaîtra automatiquement de votre sélection. </p>
                            </div>
                        </div>
                        <div class=\"modal\" tabindex=\"-1\" id=\"deleteFavoris\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">Supprimer le favoris</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>Souhaitez-vous supprimer ce favoris ?</p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                        <button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <div class=\"row\" style=\"margin-top: 21px\">
                                <div class=\"col-md-12\"> 
                        {# bouclez les candidatures enregistrées #}
                                    <div class=\"card\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                                            <img src=\"https://images.pexels.com/photos/212185/pexels-photo-212185.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)\">
                                                        </div>
                                                </div>
                                                <div class=\"col-md-8\" style=\"position: relative\">
                                                        <i class=\"fas fa-trash\"></i>
                                                        <div class=\"cand-descpt\">
                                                            <h3> Oasis la Geriais </h3>
                                                            <ul>
                                                                <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                                                <li>2500€/m2</li>
                                                            </ul>
                                                            <div style=\"display: flex;margin-top: 7px;\">
                                                                <i class=\"fas fa-calendar-day\"></i>
                                                                <span> Sauvegardé le 05/08/2020 </span>
                                                            </div>
                                                        </div>
                                                      
                                                        <div class='footer-card'>
                                                           
                                                            
                                                          
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                            {# fin #}
                                    </div>
                                    <div class=\"col-md-12\"> 
                        {# bouclez les candidatures enregistrées #}
                                    <div class=\"card\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                        <div class=\"caption justify-content-center align-items-center\">
                                                            <img src=\"https://images.pexels.com/photos/4675158/pexels-photo-4675158.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                                        </div>
                                                </div>
                                                <div class=\"col-md-8\" style=\"position: relative\">
                                                        <i class=\"fas fa-trash\"></i>
                                                        <div class=\"cand-descpt\">
                                                            <h3> Le Pre des Hauts Bois </h3>
                                                            <ul>
                                                                <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                                                <li>2500€/m2</li>
                                                            </ul>
                                                            <div style=\"display: flex;margin-top: 7px;\">
                                                                <i class=\"fas fa-calendar-day\"></i>
                                                                <span> Sauvegardé le 05/08/2020 </span>
                                                            </div>
                                                        </div>
                                                      
                                                        <div class='footer-card'>
                                                            <div style=\"flex: 1;padding-top: 5px\">
                                                            
                                                            
                                                        </div>
                                                </div>
                                            </div>
                                    </div>
                        {# fin #}
                            </div>

                        </div>
                </section>
        </div>
{% endblock %}
{% block javascripts %}
    <script>
        \$(function(){
            \$('.fa-trash').on('click',()=> {
                \$('#deleteFavoris').modal('show')
            })
        })
    </script>
{% endblock %}", "favoris/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/favoris/index.html.twig");
    }
}
