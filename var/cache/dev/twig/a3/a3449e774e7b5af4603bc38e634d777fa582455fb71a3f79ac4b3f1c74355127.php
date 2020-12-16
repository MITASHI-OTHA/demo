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

/* profil/profil.html.twig */
class __TwigTemplate_7559f709b910162a008d5f352483d53f95fd635c622fcfba592f654841b7affa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profil.html.twig"));

        // line 3
        $context["title"] = "profil";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profil/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container mt-5\">
    <!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer votre compte ?</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        Attention. Cette action est irréverssible !
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Confirmer</button>
        <button type=\"button\" class=\"btn btn-secondary\">Annuler</button>
      </div>
    </div>
  </div>
</div>
        <section>
                <div class=\"row\">
                ";
        // line 31
        if (((isset($context["compte"]) || array_key_exists("compte", $context) ? $context["compte"] : (function () { throw new RuntimeError('Variable "compte" does not exist.', 31, $this->source); })()) == "Habitant")) {
            // line 32
            echo "                        ";
            $context["image"] = "build/images/web/profil.jpeg";
            // line 33
            echo "                        ";
            $context["titre"] = "Mes candidatures";
            // line 34
            echo "                        ";
            $context["status"] = "Futur habitant";
            // line 35
            echo "                        ";
            $context["link"] = "candidature";
            // line 36
            echo "                        ";
            $context["subtitle"] = "Voir mes candidatures, les éditer, les accepter ou decliner";
            // line 37
            echo "                        ";
            $context["subtitle_co"] = "Visiter mon espace collaboratif auquel j’ai adheré";
            echo "  
                        ";
            // line 38
            $context["status"] = "Futur habitant";
            // line 39
            echo "                 ";
        } else {
            // line 40
            echo "                        ";
            $context["status"] = "Porteur de projet";
            // line 41
            echo "                        ";
            $context["link"] = "annonces";
            // line 42
            echo "                        ";
            $context["titre"] = "Mes annonces";
            // line 43
            echo "                        ";
            $context["subtitle"] = "Voir mes annonces, les éditer, gerer mes candidatures";
            // line 44
            echo "                        ";
            $context["image"] = "build/images/web/bash_profile.jpg";
            // line 45
            echo "                 ";
        }
        // line 46
        echo "
                    <div class=\"col-md-3\">
                            <div class=\"w-100 d-flex align-items-center justify-content-center\">
                                <div class=\"profil-picture d-flex justify-content-center align-items-center\">
                                    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 50, $this->source); })())), "html", null, true);
        echo "\">
                                    <i class=\"fas fa-pen-square\"></i>
                                </div>
                            </div>
                            
                           <div class=\"w-100 d-flex align-items-center justify-content-center\">
                                <div class=\"danger-col\">
                                        <div style=\"display: flex\">
                                        <i class=\"fas fa-radiation\"></i>
                                        <span style=\"margin: auto;\">Zone dangereuse</span>
                                        </div>
                                        <button type=\"button\" class=\"btn btn-danger\" style=\"font-size: 13px;\" data-toggle=\"modal\" data-target=\"#exampleModal\">Supprimer mon compte</button>
                                </div>
                           </div>
                            
                           
                    </div>
                    <div class=\"col-md-9\">
                        <h2> ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "username", [], "any", false, false, false, 68), "html", null, true);
        echo " </h2>
                   

                         ";
        // line 72
        echo "                       <span class=\"badge badge-primary\">";
        echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "</span>
                      
                        <div class=\"row\" style=\"margin-top: 5%\">
                                <div class=\"col-md-12\">
                                    <h5>
                                        Informations de compte
                                    </h5>
                                </div>
                                <div class=\"col-md-6 mt-10\">
                                        <div class=\"alert alert-dismissible fade show bg__secondary__light mt-3\" role=\"alert\">
                                                <p style=\"font-size: 13px\"> Editer votre fiche personnelle, et choisissez ou pas de rendre un champ visible au public </p>
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>
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
                                            <div class=\"col-md-6 form-civility\" style=\"margin-top: 10px\">
                                                <div class=\"row\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <label class=\"required\" for=\"nom\"> Nom </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Doe\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <label class=\"required\" for=\"nom\"> Prénom </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: John\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                            <div class=\"col-md-6 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Pseudo </label>
                                                                    <div class=\"input-group\">
                                                                        <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Kevin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                        <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                            <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                                <div class=\"col-md-6\">
                                                                    <label class=\"required\" for=\"nom\"> Email </label>
                                                                        <div class=\"input-group\">
                                                                            <input type=\"email\" class=\"form-control\" placeholder=\"Ex: john@gmail.com\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                            <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                                <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                                <label class=\"required\" for=\"nom\"> Télephone </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"tel\" class=\"form-control\" placeholder=\"Ex: 06 00 00 00 00\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <label class=\"required\" for=\"nom\"> Adresse </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 2 rue du Moulin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Code postal </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 72000\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
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
                                                        <div class=\"col-md-12 type-fy\">
                                                            <div class=\"form-group\">
                                                                <label class=\"required\" for=\"prenom-user\"> A propos de vous </label>
                                                                <textarea rows=\"5\" class=\"form-control\" id=\"prenom-user\" name=\"taille\" placeholder=\"\" required></textarea>
                                                            </div>
                                                         
                                                        </div>
                                                        <div class=\"col-md-12\">
                                                            <button type=\"button\" class=\"btn btn-primary\">Enregistrer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                        </div>
                    </div>
                </div>
        </secrion>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 212
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 213
        echo "    <script>
            \$(function() {
                //fa-eye-slash
                \$('.input-group-append').on('click', function() {
                    \$(this).find('svg').hasClass('fa-eye')? \$(this).attr('data-original-title', 'Rendre visible au public').find('svg').removeClass('fa-eye').addClass('fa-eye-slash'):\$(this).attr('data-original-title', 'Masquer au public').find('svg').removeClass('fa-eye-slash').addClass('fa-eye')
                   
                })
                 \$('.input-group-append').tooltip()
            })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 213,  350 => 212,  199 => 72,  193 => 68,  172 => 50,  166 => 46,  163 => 45,  160 => 44,  157 => 43,  154 => 42,  151 => 41,  148 => 40,  145 => 39,  143 => 38,  138 => 37,  135 => 36,  132 => 35,  129 => 34,  126 => 33,  123 => 32,  121 => 31,  96 => 8,  86 => 7,  73 => 5,  63 => 4,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'profil' %}
{% block stylesheets %}
 <link rel=\"stylesheet\" href=\"{{ asset('css/profile.css') }}\">
{% endblock %}
{% block body %}
    <div class=\"container mt-5\">
    <!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer votre compte ?</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        Attention. Cette action est irréverssible !
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Confirmer</button>
        <button type=\"button\" class=\"btn btn-secondary\">Annuler</button>
      </div>
    </div>
  </div>
</div>
        <section>
                <div class=\"row\">
                {% if compte =='Habitant' %}
                        {% set image = 'build/images/web/profil.jpeg' %}
                        {% set titre = 'Mes candidatures' %}
                        {% set status = 'Futur habitant' %}
                        {% set link = 'candidature' %}
                        {% set subtitle = 'Voir mes candidatures, les éditer, les accepter ou decliner' %}
                        {% set subtitle_co = 'Visiter mon espace collaboratif auquel j’ai adheré' %}  
                        {% set status = 'Futur habitant' %}
                 {% else %}
                        {% set status = 'Porteur de projet' %}
                        {% set link = 'annonces' %}
                        {% set titre = 'Mes annonces' %}
                        {% set subtitle = 'Voir mes annonces, les éditer, gerer mes candidatures' %}
                        {% set image = 'build/images/web/bash_profile.jpg' %}
                 {% endif %}

                    <div class=\"col-md-3\">
                            <div class=\"w-100 d-flex align-items-center justify-content-center\">
                                <div class=\"profil-picture d-flex justify-content-center align-items-center\">
                                    <img src=\"{{ asset(image) }}\">
                                    <i class=\"fas fa-pen-square\"></i>
                                </div>
                            </div>
                            
                           <div class=\"w-100 d-flex align-items-center justify-content-center\">
                                <div class=\"danger-col\">
                                        <div style=\"display: flex\">
                                        <i class=\"fas fa-radiation\"></i>
                                        <span style=\"margin: auto;\">Zone dangereuse</span>
                                        </div>
                                        <button type=\"button\" class=\"btn btn-danger\" style=\"font-size: 13px;\" data-toggle=\"modal\" data-target=\"#exampleModal\">Supprimer mon compte</button>
                                </div>
                           </div>
                            
                           
                    </div>
                    <div class=\"col-md-9\">
                        <h2> {{app.user.username}} </h2>
                   

                         {#  Faire une condition pour afficher le panel selon le status de l'user #}
                       <span class=\"badge badge-primary\">{{status}}</span>
                      
                        <div class=\"row\" style=\"margin-top: 5%\">
                                <div class=\"col-md-12\">
                                    <h5>
                                        Informations de compte
                                    </h5>
                                </div>
                                <div class=\"col-md-6 mt-10\">
                                        <div class=\"alert alert-dismissible fade show bg__secondary__light mt-3\" role=\"alert\">
                                                <p style=\"font-size: 13px\"> Editer votre fiche personnelle, et choisissez ou pas de rendre un champ visible au public </p>
                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                </button>
                                            </div>
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
                                            <div class=\"col-md-6 form-civility\" style=\"margin-top: 10px\">
                                                <div class=\"row\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <label class=\"required\" for=\"nom\"> Nom </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Doe\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <label class=\"required\" for=\"nom\"> Prénom </label>
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex: John\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                    <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                            <div class=\"col-md-6 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Pseudo </label>
                                                                    <div class=\"input-group\">
                                                                        <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Kevin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                        <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                            <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                                <div class=\"col-md-6\">
                                                                    <label class=\"required\" for=\"nom\"> Email </label>
                                                                        <div class=\"input-group\">
                                                                            <input type=\"email\" class=\"form-control\" placeholder=\"Ex: john@gmail.com\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                            <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                                <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                                <label class=\"required\" for=\"nom\"> Télephone </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"tel\" class=\"form-control\" placeholder=\"Ex: 06 00 00 00 00\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <label class=\"required\" for=\"nom\"> Adresse </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 2 rue du Moulin\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6 type-fy\">
                                                                <label class=\"required\" for=\"nom\"> Code postal </label>
                                                                <div class=\"input-group\">
                                                                    <input type=\"text\" class=\"form-control\" placeholder=\"Ex: 72000\" aria-label=\"Recipient's username\" aria-describedby=\"basic-addon2\">
                                                                    <div class=\"input-group-append\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Masquer au public\">
                                                                        <span class=\"input-group-text\" id=\"basic-addon2\"><i class=\"far fa-eye\"></i></span>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
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
                                                        <div class=\"col-md-12 type-fy\">
                                                            <div class=\"form-group\">
                                                                <label class=\"required\" for=\"prenom-user\"> A propos de vous </label>
                                                                <textarea rows=\"5\" class=\"form-control\" id=\"prenom-user\" name=\"taille\" placeholder=\"\" required></textarea>
                                                            </div>
                                                         
                                                        </div>
                                                        <div class=\"col-md-12\">
                                                            <button type=\"button\" class=\"btn btn-primary\">Enregistrer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                        </div>
                    </div>
                </div>
        </secrion>
    </div>
{% endblock %}
{% block javascripts %}
    <script>
            \$(function() {
                //fa-eye-slash
                \$('.input-group-append').on('click', function() {
                    \$(this).find('svg').hasClass('fa-eye')? \$(this).attr('data-original-title', 'Rendre visible au public').find('svg').removeClass('fa-eye').addClass('fa-eye-slash'):\$(this).attr('data-original-title', 'Masquer au public').find('svg').removeClass('fa-eye-slash').addClass('fa-eye')
                   
                })
                 \$('.input-group-append').tooltip()
            })
    </script>
{% endblock %}", "profil/profil.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/profil/profil.html.twig");
    }
}
