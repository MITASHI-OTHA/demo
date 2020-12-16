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

/* candidature/candidature.html.twig */
class __TwigTemplate_0da080cfa978442beca371b0fbfd0c9124205c9599a7f26203c342846b492bf2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/candidature.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidature/candidature.html.twig"));

        // line 2
        $context["title"] = "Mes candidatures";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "candidature/candidature.html.twig", 1);
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
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        <style>
            .caption {
                height: 200px;
                overflow: hidden;
                display: flex;
                justify-content: center;
            }
            .caption img {
                width: 100%
            }
           .card a {
                color: rgb(55, 57, 66);
                text-decoration: none
            }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "    
    <div class=\"container\">
        <section>
            <div class=\"row\">
                <div class=\"col-md-12\">
                        <h1> Mes candidatures </h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"margin-top: 40px;margin-bottom: 20px;color: #868686;\">
                        <h6> Candidatures en cours </h6>
                </div>
                <div class=\"col-md-12\"> 
                        ";
        // line 36
        echo "                        <div class=\"card\">
                                <div class=\"row\">
                                    <div class=\"col-md-3\">
                                            <div class=\"caption\">
                                                <img src=\"https://images.pexels.com/photos/212185/pexels-photo-212185.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)\">
                                            </div>
                                    </div>
                                    <div class=\"col-md-9\" style=\"position: relative\">
                                            <i class=\"fas fa-trash\"></i>
                                            <div class=\"cand-descpt\">
                                                <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\"><h3> Ecolieu du moulin de Brisé </h3></a>
                                                <ul>
                                                    <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                                    <li>2500€/m2</li>
                                                </ul>
                                                <div style=\"display: flex;margin-top: 7px;\">
                                                    <i class=\"fas fa-calendar-day\"></i>
                                                    <span> Crée le 05/08/2020 </span>
                                                </div>
                                            </div>
                                            <div class=\"col-info\">
                                                <p>
                                                Cette candidature est en cours d’édition car vous ne l’avez pas encore soumise.
Pour continuer son édition, cliquez sur modifier. 
                                                </p>
                                            </div>
                                            <div class='footer-card'>
                                                <div style=\"flex: 1;padding-top: 5px\">
                                                    <i class=\"far fa-file-pdf\" style=\"font-size: 22px\"></i>
                                                    <span style='font-size: 12px'> Télécharger </span>
                                                </div>
                                                
                                                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\"> Modifier <i class=\"fas fa-angle-right\"></i></button>
                                            </div>
                                    </div>
                                </div>
                        </div>
                        ";
        // line 74
        echo "                </div>
                <div class=\"col-md-12\" style=\"margin-top: 40px;margin-bottom: 20px;color: #868686;\">
                        <h6> Vous avez 3 candidatures soumises </h6>
                </div>
                ";
        // line 79
        echo "                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                    <div class=\"caption\">
                                        <img src=\"https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                                    </div>
                            </div>
                            <div class=\"col-md-9\" style=\"position: relative\">
                                    <i class=\"fas fa-trash\"></i>
                                    <div class=\"cand-descpt\">
                                        <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "2"]);
        echo "\"><h3> Oasis la Geriais </h3></a>
                                        <ul>
                                            <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                            <li>2500€/m2</li>
                                            <li> <i class=\"fas fa-check\"></i> Acceptée </li>
                                        </ul>
                                        <div style=\"display: flex;margin-top: 7px;\">
                                            <i class=\"fas fa-calendar-day\"></i>
                                            <span> Crée le 05/08/2020 </span>
                                        </div>
                                        
                                    </div>
                                    <div class=\"col-info accept\">
                                        <h4 class=\"text-success\">Candidature acceptée</h4>
                                        <p>
                                        Votre candidature a été acceptée.
                                        </p>
                                        <div style=\"display: flex;\">
                                            <a type=\"button\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil", ["state" => true]);
        echo "\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\">Valider ma candidature</a>

                                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"button\" aria-pressed=\"false\"> Me désister </button>
                                        </div>
                                        
                                    </div>
                                <div class='footer-card'>
                                    <div style=\"flex: 1;padding-top: 5px\">
                                        <i class=\"far fa-file-pdf\" style=\"font-size: 22px\"></i>
                                        <span style='font-size: 12px'> Télécharger </span>
                                    </div>
                                    
                                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">
                                Modifier <i class=\"fas fa-angle-right\"></i>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               ";
        // line 129
        echo "               <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                    <div class=\"caption\">
                                        <img src=\"https://images.pexels.com/photos/280229/pexels-photo-280229.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                                    </div>
                            </div>
                            <div class=\"col-md-9\" style=\"position: relative\">
                                    <i class=\"fas fa-trash\"></i>
                                    <div class=\"cand-descpt\">
                                        <a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "3"]);
        echo "\"><h3>  Tranche de vie  </h3></a>
                                        <ul>
                                            <li class=\"log\"> <i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                            <li>2500€/m2</li>
                                            <li> <i class=\"fas fa-clipboard-list\"></i> Incomplet</li>
                                        </ul>
                                        <div style=\"display: flex;margin-top: 7px;\">
                                            <i class=\"fas fa-calendar-day\"></i>
                                            <span> Crée le 05/08/2020 </span>
                                        </div>
                                        
                                    </div>
                                    <div class=\"col-info incomplet\">
                                       
                                        <p>
                                        Le porteur de projet demande de modifier les informations suivantes
                                        </p>
                                        <ul>
                                            <li>- Crédit en cours</li>
                                            <li>- Co-acquéreur</li>
                                            <li>- Revenus mensuel</li>
                                        </ul>
                                        
                                    </div>
                                <div class='footer-card d-flex mt-5'>
                                    <div class=\"d-flex\" style=\"flex: 1\">
                                        <div class=\"d-flex\">
                                            <i class=\"far fa-file-pdf m-auto\" style=\"font-size: 22px\"></i>
                                            <span class=\"m-auto pl-2 pr-3\" style='font-size: 12px'> Télécharger </span>
                                        </div>
                                        <button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\"> Me désister </button>
                                    </div>
                                    

                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">
                                    Modifier <i class=\"fas fa-angle-right\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 183
        echo "                <div class=\"col-md-12\">
                        <div class=\"card\">
                                <div class=\"row\">
                                    <div class=\"col-md-3\">
                                            <div class=\"caption\">
                                                <img src=\"https://images.pexels.com/photos/4675158/pexels-photo-4675158.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                            </div>
                                    </div>
                                    <div class=\"col-md-9\" style=\"position: relative\">
                                            <i class=\"fas fa-trash\"></i>
                                            <div class=\"cand-descpt\">
                                                <h3> Le Pre des Hauts Bois </h3>
                                                <ul>
                                                    <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                                    <li>2500€/m2</li>
                                                    <li> <i class=\"far fa-clock\"></i> En attente</li>
                                                </ul>
                                                <div style=\"display: flex;margin-top: 7px;\">
                                                    <i class=\"fas fa-calendar-day\"></i>
                                                    <span> Crée le 05/08/2020 </span>
                                                </div>
                                            </div>
                                            <div class=\"col-info\">
                                                <p style=\"margin: 0;\">
                                                Cette candidature est en attente de traitement
                                                </p>
                                            </div>
                                            <div class='footer-card'>
                                                <div style=\"flex: 1;padding-top: 5px\">
                                                    <i class=\"far fa-file-pdf\" style=\"font-size: 22px\"></i>
                                                    <span style='font-size: 12px'> Télécharger </span>
                                                </div>
                                                
                                            </div>
                                    </div>
                                </div>
                        </div>
                </div>
                ";
        // line 222
        echo "                <div class=\"col-md-12\">
                        <div class=\"card\">
                                <div class=\"row\">
                                    <div class=\"col-md-3\">
                                            <div class=\"caption\">
                                                <img src=\"https://images.pexels.com/photos/1054974/pexels-photo-1054974.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                            </div>
                                    </div>
                                    <div class=\"col-md-9\" style=\"position: relative\">
                                            <i class=\"fas fa-trash\"></i>
                                            <div class=\"cand-descpt\">
                                                <h3>  Ilot Michelet  </h3>
                                                <ul>
                                                    <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                                    <li>2500€/m2</li>
                                                    <li> <i class=\"fas fa-times-circle\" style=\"color: #DF4949\"></i> Refusée </li>
                                                </ul>
                                                <div style=\"display: flex;margin-top: 7px;\">
                                                    <i class=\"fas fa-calendar-day\"></i>
                                                    <span> Crée le 05/08/2020 </span>
                                                </div>
                                            </div>
                                            <div class=\"col-info\" style=\"background-color: rgba(255, 49, 49, 0.24)\">
                                                <p style=\"margin: 0;color:#DF4949\">
                                                Votre candidature a été refusé par le porteur de projet
                                                </p>
                                            </div>
                                            <div class='footer-card'>
                                                <div style=\"flex: 1;padding-top: 5px\">
                                                    <i class=\"far fa-file-pdf\" style=\"font-size: 22px\"></i>
                                                    <span style='font-size: 12px'> Télécharger </span>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </section>
        ";
        // line 262
        echo "        <div class=\"modal fade\" tabindex=\"-1\" id=\"deleteFavoris\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">Supprimer la candidature</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>Souhaitez-vous supprimer cette candidature ?</p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                        <button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
                                    </div>
                                    </div>
                                </div>
                        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 283
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 284
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
        return "candidature/candidature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 284,  400 => 283,  370 => 262,  329 => 222,  289 => 183,  244 => 140,  231 => 129,  208 => 108,  187 => 90,  174 => 79,  168 => 74,  138 => 46,  126 => 36,  111 => 22,  101 => 21,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set title = 'Mes candidatures' %}
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
        <style>
            .caption {
                height: 200px;
                overflow: hidden;
                display: flex;
                justify-content: center;
            }
            .caption img {
                width: 100%
            }
           .card a {
                color: rgb(55, 57, 66);
                text-decoration: none
            }
        </style>
    {% endblock %}
{% block body %}
    
    <div class=\"container\">
        <section>
            <div class=\"row\">
                <div class=\"col-md-12\">
                        <h1> Mes candidatures </h1>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"margin-top: 40px;margin-bottom: 20px;color: #868686;\">
                        <h6> Candidatures en cours </h6>
                </div>
                <div class=\"col-md-12\"> 
                        {# bouclez les candidatures enregistrées #}
                        <div class=\"card\">
                                <div class=\"row\">
                                    <div class=\"col-md-3\">
                                            <div class=\"caption\">
                                                <img src=\"https://images.pexels.com/photos/212185/pexels-photo-212185.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500)\">
                                            </div>
                                    </div>
                                    <div class=\"col-md-9\" style=\"position: relative\">
                                            <i class=\"fas fa-trash\"></i>
                                            <div class=\"cand-descpt\">
                                                <a href=\"{{ path('projet', {id: '1'} ) }}\"><h3> Ecolieu du moulin de Brisé </h3></a>
                                                <ul>
                                                    <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                                    <li>2500€/m2</li>
                                                </ul>
                                                <div style=\"display: flex;margin-top: 7px;\">
                                                    <i class=\"fas fa-calendar-day\"></i>
                                                    <span> Crée le 05/08/2020 </span>
                                                </div>
                                            </div>
                                            <div class=\"col-info\">
                                                <p>
                                                Cette candidature est en cours d’édition car vous ne l’avez pas encore soumise.
Pour continuer son édition, cliquez sur modifier. 
                                                </p>
                                            </div>
                                            <div class='footer-card'>
                                                <div style=\"flex: 1;padding-top: 5px\">
                                                    <i class=\"far fa-file-pdf\" style=\"font-size: 22px\"></i>
                                                    <span style='font-size: 12px'> Télécharger </span>
                                                </div>
                                                
                                                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\"> Modifier <i class=\"fas fa-angle-right\"></i></button>
                                            </div>
                                    </div>
                                </div>
                        </div>
                        {# fin #}
                </div>
                <div class=\"col-md-12\" style=\"margin-top: 40px;margin-bottom: 20px;color: #868686;\">
                        <h6> Vous avez 3 candidatures soumises </h6>
                </div>
                {# ici ce sont les candidatures acceptés #}
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                    <div class=\"caption\">
                                        <img src=\"https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                                    </div>
                            </div>
                            <div class=\"col-md-9\" style=\"position: relative\">
                                    <i class=\"fas fa-trash\"></i>
                                    <div class=\"cand-descpt\">
                                        <a href=\"{{ path('projet', {id: '2'} ) }}\"><h3> Oasis la Geriais </h3></a>
                                        <ul>
                                            <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                            <li>2500€/m2</li>
                                            <li> <i class=\"fas fa-check\"></i> Acceptée </li>
                                        </ul>
                                        <div style=\"display: flex;margin-top: 7px;\">
                                            <i class=\"fas fa-calendar-day\"></i>
                                            <span> Crée le 05/08/2020 </span>
                                        </div>
                                        
                                    </div>
                                    <div class=\"col-info accept\">
                                        <h4 class=\"text-success\">Candidature acceptée</h4>
                                        <p>
                                        Votre candidature a été acceptée.
                                        </p>
                                        <div style=\"display: flex;\">
                                            <a type=\"button\" href=\"{{ path('profil', {'state': true}) }}\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\">Valider ma candidature</a>

                                            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"button\" aria-pressed=\"false\"> Me désister </button>
                                        </div>
                                        
                                    </div>
                                <div class='footer-card'>
                                    <div style=\"flex: 1;padding-top: 5px\">
                                        <i class=\"far fa-file-pdf\" style=\"font-size: 22px\"></i>
                                        <span style='font-size: 12px'> Télécharger </span>
                                    </div>
                                    
                                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">
                                Modifier <i class=\"fas fa-angle-right\"></i>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               {# ici ce sont les candidatures dont il manque des informations #}
               <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                    <div class=\"caption\">
                                        <img src=\"https://images.pexels.com/photos/280229/pexels-photo-280229.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                                    </div>
                            </div>
                            <div class=\"col-md-9\" style=\"position: relative\">
                                    <i class=\"fas fa-trash\"></i>
                                    <div class=\"cand-descpt\">
                                        <a href=\"{{ path('projet', {id: '3'} ) }}\"><h3>  Tranche de vie  </h3></a>
                                        <ul>
                                            <li class=\"log\"> <i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                            <li>2500€/m2</li>
                                            <li> <i class=\"fas fa-clipboard-list\"></i> Incomplet</li>
                                        </ul>
                                        <div style=\"display: flex;margin-top: 7px;\">
                                            <i class=\"fas fa-calendar-day\"></i>
                                            <span> Crée le 05/08/2020 </span>
                                        </div>
                                        
                                    </div>
                                    <div class=\"col-info incomplet\">
                                       
                                        <p>
                                        Le porteur de projet demande de modifier les informations suivantes
                                        </p>
                                        <ul>
                                            <li>- Crédit en cours</li>
                                            <li>- Co-acquéreur</li>
                                            <li>- Revenus mensuel</li>
                                        </ul>
                                        
                                    </div>
                                <div class='footer-card d-flex mt-5'>
                                    <div class=\"d-flex\" style=\"flex: 1\">
                                        <div class=\"d-flex\">
                                            <i class=\"far fa-file-pdf m-auto\" style=\"font-size: 22px\"></i>
                                            <span class=\"m-auto pl-2 pr-3\" style='font-size: 12px'> Télécharger </span>
                                        </div>
                                        <button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\"> Me désister </button>
                                    </div>
                                    

                                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">
                                    Modifier <i class=\"fas fa-angle-right\"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {# Ici ce sont des candidature en attente de validation #}
                <div class=\"col-md-12\">
                        <div class=\"card\">
                                <div class=\"row\">
                                    <div class=\"col-md-3\">
                                            <div class=\"caption\">
                                                <img src=\"https://images.pexels.com/photos/4675158/pexels-photo-4675158.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                            </div>
                                    </div>
                                    <div class=\"col-md-9\" style=\"position: relative\">
                                            <i class=\"fas fa-trash\"></i>
                                            <div class=\"cand-descpt\">
                                                <h3> Le Pre des Hauts Bois </h3>
                                                <ul>
                                                    <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                                    <li>2500€/m2</li>
                                                    <li> <i class=\"far fa-clock\"></i> En attente</li>
                                                </ul>
                                                <div style=\"display: flex;margin-top: 7px;\">
                                                    <i class=\"fas fa-calendar-day\"></i>
                                                    <span> Crée le 05/08/2020 </span>
                                                </div>
                                            </div>
                                            <div class=\"col-info\">
                                                <p style=\"margin: 0;\">
                                                Cette candidature est en attente de traitement
                                                </p>
                                            </div>
                                            <div class='footer-card'>
                                                <div style=\"flex: 1;padding-top: 5px\">
                                                    <i class=\"far fa-file-pdf\" style=\"font-size: 22px\"></i>
                                                    <span style='font-size: 12px'> Télécharger </span>
                                                </div>
                                                
                                            </div>
                                    </div>
                                </div>
                        </div>
                </div>
                {# Ici ce sont des candidature refusé #}
                <div class=\"col-md-12\">
                        <div class=\"card\">
                                <div class=\"row\">
                                    <div class=\"col-md-3\">
                                            <div class=\"caption\">
                                                <img src=\"https://images.pexels.com/photos/1054974/pexels-photo-1054974.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                            </div>
                                    </div>
                                    <div class=\"col-md-9\" style=\"position: relative\">
                                            <i class=\"fas fa-trash\"></i>
                                            <div class=\"cand-descpt\">
                                                <h3>  Ilot Michelet  </h3>
                                                <ul>
                                                    <li class=\"log\"><i class=\"fas fa-door-open\"></i> 3/5 logements disponibles</li>
                                                    <li>2500€/m2</li>
                                                    <li> <i class=\"fas fa-times-circle\" style=\"color: #DF4949\"></i> Refusée </li>
                                                </ul>
                                                <div style=\"display: flex;margin-top: 7px;\">
                                                    <i class=\"fas fa-calendar-day\"></i>
                                                    <span> Crée le 05/08/2020 </span>
                                                </div>
                                            </div>
                                            <div class=\"col-info\" style=\"background-color: rgba(255, 49, 49, 0.24)\">
                                                <p style=\"margin: 0;color:#DF4949\">
                                                Votre candidature a été refusé par le porteur de projet
                                                </p>
                                            </div>
                                            <div class='footer-card'>
                                                <div style=\"flex: 1;padding-top: 5px\">
                                                    <i class=\"far fa-file-pdf\" style=\"font-size: 22px\"></i>
                                                    <span style='font-size: 12px'> Télécharger </span>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </section>
        {# Modal #}
        <div class=\"modal fade\" tabindex=\"-1\" id=\"deleteFavoris\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">Supprimer la candidature</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>Souhaitez-vous supprimer cette candidature ?</p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                        <button type=\"button\" class=\"btn btn-danger\">Supprimer</button>
                                    </div>
                                    </div>
                                </div>
                        </div>
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
{% endblock %}", "candidature/candidature.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/candidature/candidature.html.twig");
    }
}
