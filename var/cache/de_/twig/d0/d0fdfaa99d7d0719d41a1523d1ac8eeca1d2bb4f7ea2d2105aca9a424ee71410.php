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

/* security/user_registration_success.html.twig */
class __TwigTemplate_7ddc88d973a6997d1aca73bcfa563037d5d602f772c04780a980bddf3e7a6e3c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/user_registration_success.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/user_registration_success.html.twig"));

        // line 3
        $context["title"] = "Inscription reussit";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/user_registration_success.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <style>
        .right-img-success {
            background-size: contain;
            background-position: center;
            width: 100%;
            height: 300px;
            background-repeat: no-repeat;
            margin: auto
        }
    </style>
        <div class=\"container\">
            <div class=\"row mt-5\">
                    <div class=\"col-md-6\">
                        <div class=\"right-img-success\" style=\"background-image: url(";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/welcohome-congrate.d5ddd5ef.png"), "html", null, true);
        echo ") \">

                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div claxx=\"blk-text\">
                            <h3>Bravo! Inscription faîte</h3>
                            <p>
                                Vous avez reçu un mail à l’adresse
                                cliquez sur le lien de confirmation qui vous
                                a été envoyé pour valider votre inscription
                            </p>
                        </div>
                    </div>
            </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/user_registration_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  71 => 7,  61 => 6,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Inscription reussit' %}


{% block body %}
    <style>
        .right-img-success {
            background-size: contain;
            background-position: center;
            width: 100%;
            height: 300px;
            background-repeat: no-repeat;
            margin: auto
        }
    </style>
        <div class=\"container\">
            <div class=\"row mt-5\">
                    <div class=\"col-md-6\">
                        <div class=\"right-img-success\" style=\"background-image: url({{asset('build/images/web/welcohome-congrate.d5ddd5ef.png')}}) \">

                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div claxx=\"blk-text\">
                            <h3>Bravo! Inscription faîte</h3>
                            <p>
                                Vous avez reçu un mail à l’adresse
                                cliquez sur le lien de confirmation qui vous
                                a été envoyé pour valider votre inscription
                            </p>
                        </div>
                    </div>
            </div>
        </div>
{% endblock %}", "security/user_registration_success.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/security/user_registration_success.html.twig");
    }
}
