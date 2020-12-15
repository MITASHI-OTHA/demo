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

/* contact/index.html.twig */
class __TwigTemplate_c9b517a7bf08a6a4711f6e09aed54790c57b6bf63351da2282728d10ade13782 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        // line 2
        $context["title"] = "Contactez-nous";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        .container section {
            margin-top: 5%
        }
        form {
            padding-right: 30%;
        }
        form h4 {
            font-weight: 600
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<div class=\"container\">
    <section>
        <form>
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"padding-bottom: 5%\">
                    <h4> Contactez-nous </h4>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"exampleFormControlSelect1\"> Je suis </label>
                        <select class=\"form-control\" id=\"exampleFormControlSelect1\">
                            <option>Porteur de projet</option>
                            <option>Futur habitant</option>
                            <option>Autre</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"exampleInputEmail1\">Email</label>
                            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                        </div>
                </div>
                <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"nom\">Nom</label>
                            <input type=\"email\" class=\"form-control\" id=\"nom\">
                        </div>
                </div>
                <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"nom\">Prénom</label>
                            <input type=\"text\" class=\"form-control\" id=\"prenom\">
                        </div>
                </div>
                 <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"nom\">Societé</label>
                            <input type=\"text\" class=\"form-control\" id=\"societe\">
                        </div>
                </div>
                <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"tel\">Téléphone</label>
                            <input type=\"tel\" class=\"form-control\" id=\"tel\">
                        </div>
                </div>
                <div class=\"col-md-12\">
                        <div class=\"form-group\">
                        <label for=\"exampleFormControlSelect1\"> Je vous contact pour </label>
                        <select class=\"form-control\" id=\"exampleFormControlSelect1\">
                            <option>J’ai une question... </option>
                            <option> J’ai un problème technique...  </option>
                            <option> J’ai une proposition... </option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-12\">
                        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        <p style=\"font-size: 13px;\">
                            Décrivez ici votre demande. Soyez le plus précis possible, 
                            cela facilitera une action rapide de nos équipes. Si votre 
                            demande concerne un projet en particulier, pensez à 
                            nous en communiquer la référence exacte. Si votre 
                            demande concerne un problème technique, n’hésitez 
                            pas à nous envoyer une capture d’écran ou tout autre
                            document qui pourrait faciliter la compréhension du 
                            problème par notre équipe d’assistance
                        </p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                        </div>
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                        </div>
                </div>
                <div  class=\"col-md-12\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm\">Envoyer</button>
                </div>
        </form>
        
    </section>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 17,  93 => 16,  72 => 4,  62 => 3,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set title = 'Contactez-nous' %}
{% block stylesheets %}
    <style>
        .container section {
            margin-top: 5%
        }
        form {
            padding-right: 30%;
        }
        form h4 {
            font-weight: 600
        }
    </style>
{% endblock %}
{% block body %}
<div class=\"container\">
    <section>
        <form>
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"padding-bottom: 5%\">
                    <h4> Contactez-nous </h4>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"exampleFormControlSelect1\"> Je suis </label>
                        <select class=\"form-control\" id=\"exampleFormControlSelect1\">
                            <option>Porteur de projet</option>
                            <option>Futur habitant</option>
                            <option>Autre</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"exampleInputEmail1\">Email</label>
                            <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\">
                        </div>
                </div>
                <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"nom\">Nom</label>
                            <input type=\"email\" class=\"form-control\" id=\"nom\">
                        </div>
                </div>
                <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"nom\">Prénom</label>
                            <input type=\"text\" class=\"form-control\" id=\"prenom\">
                        </div>
                </div>
                 <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"nom\">Societé</label>
                            <input type=\"text\" class=\"form-control\" id=\"societe\">
                        </div>
                </div>
                <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label for=\"tel\">Téléphone</label>
                            <input type=\"tel\" class=\"form-control\" id=\"tel\">
                        </div>
                </div>
                <div class=\"col-md-12\">
                        <div class=\"form-group\">
                        <label for=\"exampleFormControlSelect1\"> Je vous contact pour </label>
                        <select class=\"form-control\" id=\"exampleFormControlSelect1\">
                            <option>J’ai une question... </option>
                            <option> J’ai un problème technique...  </option>
                            <option> J’ai une proposition... </option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-12\">
                        <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        <p style=\"font-size: 13px;\">
                            Décrivez ici votre demande. Soyez le plus précis possible, 
                            cela facilitera une action rapide de nos équipes. Si votre 
                            demande concerne un projet en particulier, pensez à 
                            nous en communiquer la référence exacte. Si votre 
                            demande concerne un problème technique, n’hésitez 
                            pas à nous envoyer une capture d’écran ou tout autre
                            document qui pourrait faciliter la compréhension du 
                            problème par notre équipe d’assistance
                        </p>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                        </div>
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                        </div>
                </div>
                <div  class=\"col-md-12\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm\">Envoyer</button>
                </div>
        </form>
        
    </section>
    
</div>
{% endblock %}", "contact/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/contact/index.html.twig");
    }
}
