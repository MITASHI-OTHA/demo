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

/* espace/addevenement.html.twig */
class __TwigTemplate_175fbad1356fae5983502a490c8da1ae698f5bf745d3282fbb94854132d1d69e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/addevenement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/addevenement.html.twig"));

        // line 2
        $context["title"] = "Espace collaboratif";
        // line 1
        $this->parent = $this->loadTemplate("espace/base.html.twig", "espace/addevenement.html.twig", 1);
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
        echo "        <style>
            .h-title h1 {
                font-size: 30px;
                font-weight: 600;
                margin: 0;
            }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("header"));
        echo "
    <div class=\"container\">
            <div class=\"row my-4\">
                <div class=\"col-md-12 h-title\">
                    <h1>
                        Ajouter un évément
                    </h1>
                </div>
                <div class=\"col-md-12 my-4\">
                    <form>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"exampleInputEmail1\"> Titre de l'évément </label>
                                    <input type=\"text\" class=\"form-control\" id=\"InputTitre\" aria-describedby=\"TitrelHelp\" placeholder=\"Exemple: Journée d'intégration\">
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\"> Choissir la date </label>
                                    <div>
                                        <input type='text' class=\"form-control datepicker\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\"> Choissir l'heure  de début </label>
                                    <div>
                                        <input type='text' class=\"form-control timepicker\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\"> Choissir la date de fin</label>
                                    <div>
                                        <input type='text' class=\"form-control datepicker\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\"> Choissir le lieu </label>
                                    <div>
                                        <input type='text' class=\"form-control\" placeholder=\"exemple Paris\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"exampleFormControlTextarea1\">Description</label>
                                    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                </div>
                            </div>
                            <div class=\"col\">
                                    <button type=\"submit\" class=\"btn btn-primary btnSubmit p-8\"> Publier <i class=\"fas fa-paper-plane\"></i> </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    <script type=\"text/javascript\">
         \$(function () {
             \$('.datepicker').pickadate({
                monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mail', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
                monthsShort: ['Jan', 'Fev', 'Mas', 'Avr', 'Mai', 'Jun', 'Jui', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
                weekdaysFull: ['Dimanche', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Lundi'],
                weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
                today: 'Aujourd\\'hui',
                clear: 'Effacer',
                close: 'Fermer',
                format: 'dd mmmm yyyy',
                editable: true,
                min: new Date()
             })
            \$('.timepicker').pickatime({
                clear: 'Effacer',
                format: 'H:i',
                formatLabel: undefined,
                formatSubmit: undefined,
                hiddenPrefix: undefined,
                hiddenSuffix: '_submit',
                editable: true,
                // Methode lorsque la fenetre se ferme
                onClose: function(e) {
                    console.log('Closed now ', e)
                },
                // Methode lorsque l'utilisateur a choisir l'heure
                onRender: function(e) {
                    console.log('render now ', e)
                }
            })
         });
      </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace/addevenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 80,  176 => 79,  100 => 13,  90 => 12,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace/base.html.twig' %}
{% set title = 'Espace collaboratif' %}
    {% block stylesheets %}
        <style>
            .h-title h1 {
                font-size: 30px;
                font-weight: 600;
                margin: 0;
            }
        </style>
    {% endblock %}
{% block body %}
{{ render(path(\"header\")) }}
    <div class=\"container\">
            <div class=\"row my-4\">
                <div class=\"col-md-12 h-title\">
                    <h1>
                        Ajouter un évément
                    </h1>
                </div>
                <div class=\"col-md-12 my-4\">
                    <form>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"exampleInputEmail1\"> Titre de l'évément </label>
                                    <input type=\"text\" class=\"form-control\" id=\"InputTitre\" aria-describedby=\"TitrelHelp\" placeholder=\"Exemple: Journée d'intégration\">
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\"> Choissir la date </label>
                                    <div>
                                        <input type='text' class=\"form-control datepicker\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\"> Choissir l'heure  de début </label>
                                    <div>
                                        <input type='text' class=\"form-control timepicker\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\"> Choissir la date de fin</label>
                                    <div>
                                        <input type='text' class=\"form-control datepicker\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"form-group\">
                                <label for=\"exampleInputEmail1\"> Choissir le lieu </label>
                                    <div>
                                        <input type='text' class=\"form-control\" placeholder=\"exemple Paris\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"exampleFormControlTextarea1\">Description</label>
                                    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                </div>
                            </div>
                            <div class=\"col\">
                                    <button type=\"submit\" class=\"btn btn-primary btnSubmit p-8\"> Publier <i class=\"fas fa-paper-plane\"></i> </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
    </div>

{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\">
         \$(function () {
             \$('.datepicker').pickadate({
                monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mail', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
                monthsShort: ['Jan', 'Fev', 'Mas', 'Avr', 'Mai', 'Jun', 'Jui', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
                weekdaysFull: ['Dimanche', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Lundi'],
                weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
                today: 'Aujourd\\'hui',
                clear: 'Effacer',
                close: 'Fermer',
                format: 'dd mmmm yyyy',
                editable: true,
                min: new Date()
             })
            \$('.timepicker').pickatime({
                clear: 'Effacer',
                format: 'H:i',
                formatLabel: undefined,
                formatSubmit: undefined,
                hiddenPrefix: undefined,
                hiddenSuffix: '_submit',
                editable: true,
                // Methode lorsque la fenetre se ferme
                onClose: function(e) {
                    console.log('Closed now ', e)
                },
                // Methode lorsque l'utilisateur a choisir l'heure
                onRender: function(e) {
                    console.log('render now ', e)
                }
            })
         });
      </script>
{% endblock %}", "espace/addevenement.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/addevenement.html.twig");
    }
}
