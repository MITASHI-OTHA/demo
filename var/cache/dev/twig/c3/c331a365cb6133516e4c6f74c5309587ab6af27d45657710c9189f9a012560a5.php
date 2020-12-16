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

/* form-recherche.html.twig */
class __TwigTemplate_0c79e6635f5583faf27a627b72302a6a180a68d91ad6c5679da60054a2b65b78 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form-recherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form-recherche.html.twig"));

        // line 1
        echo " 
 <div class=\"banner\" style=\"background-image: url(";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/welcoom-banner.jpg"), "html", null, true);
        echo " )\">
                <div class=\"child-banner\">
                        <form>
                            <div class=\"col-recherche\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\" style=\"padding-left: 30px\">
                                        <h5> Resultat de recherche pour: </h5>
                                    </div>
                                </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\" style=\"padding-left: 30px;\">
                                                <div style=\"display: flex\">
                                                    <div class=\"form-group\" style=\"width: 50%;position: relative;\">
                                                        <label for=\"typologie\">Typologie</label>
                                                        ";
        // line 17
        echo "                                                        <i class=\"fas fa-angle-down\"></i>
                                                            <select class=\"form-control\" name=\"typologie\" placeholder=\"typologie\">
                                                            <optgroup>
                                                                <option value-\"Recrutement\">Autopromotion</option>
                                                                <option value-\"Projet en cours\">promotion immobilière</option>
                                                                <option value-\"Projet en chantier\">accession sociale</option>
                                                                <option value-\"Projet en chantier\">LLS participatif</option>
                                                            </optgroup>
                                                            </select>
                                                    </div>
                                                    <div class=\"form-group\" style=\"width: 50%;\">
                                                        <label for=\"typologie\">Phase</label>
                                                        <div class=\"div-input\">
                                                            <i class=\"fas fa-angle-down\"></i>
                                                            <select class=\"form-control\" name=\"phase\" placeholder=\"Phase\">
                                                                <optgroup>
                                                                    <option value-\"Recrutement\">Recrutement</option>
                                                                    <option value-\"Projet en cours\">Projet en cours</option>
                                                                    <option value-\"Projet en chantier\">Projet en chantier</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class=\"col-md-4\" style=\"padding-left: 0;\">
                                            <div class=\"form-group\">
                                                <label for=\"typologie\">Localisation</label>
                                                <div class=\"div-input\">
                                                <i class=\"fas fa-map-marker-alt\"></i>
                                                    <input type=\"text\" class=\"form-control\" id=\"localisation\" placeholder=\"localisation\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-2\" style=\"padding: 0\">
                                            <div class=\"form-group col-submit\" style=\"margin-top: 29.5px;\">
                                                <button type=\"button\" class=\"btn btn-primary\" style=\"padding-right: 0px;
    padding-left: 0;\"><font>Rechercher</font></button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
        </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "form-recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 
 <div class=\"banner\" style=\"background-image: url({{ asset('build/images/static/welcoom-banner.jpg') }} )\">
                <div class=\"child-banner\">
                        <form>
                            <div class=\"col-recherche\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\" style=\"padding-left: 30px\">
                                        <h5> Resultat de recherche pour: </h5>
                                    </div>
                                </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\" style=\"padding-left: 30px;\">
                                                <div style=\"display: flex\">
                                                    <div class=\"form-group\" style=\"width: 50%;position: relative;\">
                                                        <label for=\"typologie\">Typologie</label>
                                                        {# <input type=\"text\" class=\"form-control\" id=\"typologie\" placeholder=\"Type de logement recherché\"> #}
                                                        <i class=\"fas fa-angle-down\"></i>
                                                            <select class=\"form-control\" name=\"typologie\" placeholder=\"typologie\">
                                                            <optgroup>
                                                                <option value-\"Recrutement\">Autopromotion</option>
                                                                <option value-\"Projet en cours\">promotion immobilière</option>
                                                                <option value-\"Projet en chantier\">accession sociale</option>
                                                                <option value-\"Projet en chantier\">LLS participatif</option>
                                                            </optgroup>
                                                            </select>
                                                    </div>
                                                    <div class=\"form-group\" style=\"width: 50%;\">
                                                        <label for=\"typologie\">Phase</label>
                                                        <div class=\"div-input\">
                                                            <i class=\"fas fa-angle-down\"></i>
                                                            <select class=\"form-control\" name=\"phase\" placeholder=\"Phase\">
                                                                <optgroup>
                                                                    <option value-\"Recrutement\">Recrutement</option>
                                                                    <option value-\"Projet en cours\">Projet en cours</option>
                                                                    <option value-\"Projet en chantier\">Projet en chantier</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class=\"col-md-4\" style=\"padding-left: 0;\">
                                            <div class=\"form-group\">
                                                <label for=\"typologie\">Localisation</label>
                                                <div class=\"div-input\">
                                                <i class=\"fas fa-map-marker-alt\"></i>
                                                    <input type=\"text\" class=\"form-control\" id=\"localisation\" placeholder=\"localisation\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-2\" style=\"padding: 0\">
                                            <div class=\"form-group col-submit\" style=\"margin-top: 29.5px;\">
                                                <button type=\"button\" class=\"btn btn-primary\" style=\"padding-right: 0px;
    padding-left: 0;\"><font>Rechercher</font></button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
        </div>", "form-recherche.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/form-recherche.html.twig");
    }
}
