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

/* admin/users/user_crud.html.twig */
class __TwigTemplate_44302583601d74a4eab9a0a148a97941edf03e0903c2bd9b954c03cb3d7dc4f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/user_crud.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/user_crud.html.twig"));

        // line 3
        $context["title"] = "Inscription";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/user_crud.html.twig", 1);
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
        echo "    <style>
        .undo a {
            color: #00BFA6;
            font-size: 1.25em !important;
            transition: ease .5s;
        }
        .undo a:hover {
            color: rgb(0, 143, 124);
        }
        #user_abonneNewsletter label, #user_userRoles label {
            margin-top: 3px;
            margin-left: 3px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "
    <div class=\"my-4 undo\">
        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_list");
        echo "\">
            <i class=\"fas fa-arrow-left\"></i>
        </a>
    </div>

    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
        ";
        // line 31
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 31, $this->source); })()) != "update")) {
            // line 32
            echo "            <h2 class=\"text-center font-weight-bold\">Inscription</h2>
        ";
        } else {
            // line 34
            echo "            <h2 class=\"text-center font-weight-bold\">Modifier les infos de l'utilisateur</h2>
        ";
        }
        // line 36
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "civilite", [], "any", false, false, false, 37), 'row');
        echo "
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'row');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prenom", [], "any", false, false, false, 39), 'row');
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "username", [], "any", false, false, false, 40), 'row');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'row');
        echo "

        ";
        // line 43
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 43, $this->source); })()) != "update")) {
            // line 44
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), 'row');
            echo "
            ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "abonneNewsletter", [], "any", false, false, false, 45), 'row');
            echo "

            <div class=\"d-flex\">
                ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "cguAccepted", [], "any", false, false, false, 48), 'row');
            echo "
                <label for=\"registration_cguAccepted\">* En soumettant ce formulaire, j'ai lu et j’accepte les <a href=\"#\">Conditions d’utilisation</a> de Welcoom.</label>
            </div>
        ";
        }
        // line 52
        echo "        
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'rest');
        echo "

        ";
        // line 55
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 55, $this->source); })()) != "update")) {
            // line 56
            echo "            <button class=\"btn btnSubmit\">S'inscrire !</button>
        ";
        } else {
            // line 58
            echo "            <button class=\"btn btnSubmit\">Modifier !</button>
        ";
        }
        // line 60
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
    <br>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"avatarModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"avatarModalTitle\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title title\" id=\"avatarModalTitle\">Téléverser et recadrer ma photo</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body avatar__cropper__modal\">
                    <img src=\"\" id=\"avatar__cropper__js\" alt=\"\">
                </div>
                <div class=\"modal-footer\">
                    <div class=\"col text-center\">
                        <button id=\"crop__save__js\" type=\"button\" class=\"btn btnSubmit px-3\">
                            Recadrer et enregistrer !
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    <script>
        \$(function() 
        {
            \$('label[for=\"user_userRoles_0_name\"]').text('Rôle');
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/users/user_crud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 91,  235 => 90,  195 => 60,  191 => 58,  187 => 56,  185 => 55,  180 => 53,  177 => 52,  170 => 48,  164 => 45,  159 => 44,  157 => 43,  152 => 41,  148 => 40,  144 => 39,  140 => 38,  136 => 37,  133 => 36,  129 => 34,  125 => 32,  123 => 31,  119 => 30,  111 => 25,  107 => 23,  97 => 22,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Inscription' %}

{% block stylesheets %}
    <style>
        .undo a {
            color: #00BFA6;
            font-size: 1.25em !important;
            transition: ease .5s;
        }
        .undo a:hover {
            color: rgb(0, 143, 124);
        }
        #user_abonneNewsletter label, #user_userRoles label {
            margin-top: 3px;
            margin-left: 3px;
        }
    </style>
{% endblock %}

{% block body %}

    <div class=\"my-4 undo\">
        <a href=\"{{ path('users_list') }}\">
            <i class=\"fas fa-arrow-left\"></i>
        </a>
    </div>

    {{ form_start(form) }}
        {% if action != 'update' %}
            <h2 class=\"text-center font-weight-bold\">Inscription</h2>
        {% else %}
            <h2 class=\"text-center font-weight-bold\">Modifier les infos de l'utilisateur</h2>
        {% endif %}

        {{ form_row(form.civilite) }}
        {{ form_row(form.nom) }}
        {{ form_row(form.prenom) }}
        {{ form_row(form.username) }}
        {{ form_row(form.email) }}

        {% if action != 'update' %}
            {{ form_row(form.password) }}
            {{ form_row(form.abonneNewsletter) }}

            <div class=\"d-flex\">
                {{ form_row(form.cguAccepted) }}
                <label for=\"registration_cguAccepted\">* En soumettant ce formulaire, j'ai lu et j’accepte les <a href=\"#\">Conditions d’utilisation</a> de Welcoom.</label>
            </div>
        {% endif %}
        
        {{ form_rest(form) }}

        {% if action != 'update' %}
            <button class=\"btn btnSubmit\">S'inscrire !</button>
        {% else %}
            <button class=\"btn btnSubmit\">Modifier !</button>
        {% endif %}
    {{ form_end(form) }}
    <br>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"avatarModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"avatarModalTitle\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title title\" id=\"avatarModalTitle\">Téléverser et recadrer ma photo</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body avatar__cropper__modal\">
                    <img src=\"\" id=\"avatar__cropper__js\" alt=\"\">
                </div>
                <div class=\"modal-footer\">
                    <div class=\"col text-center\">
                        <button id=\"crop__save__js\" type=\"button\" class=\"btn btnSubmit px-3\">
                            Recadrer et enregistrer !
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    <script>
        \$(function() 
        {
            \$('label[for=\"user_userRoles_0_name\"]').text('Rôle');
        });
    </script>
{% endblock %}", "admin/users/user_crud.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/admin/users/user_crud.html.twig");
    }
}
