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

/* forgot/forgot.html.twig */
class __TwigTemplate_2618e066c7f81e623e186e04ea8235df751dc763e9218f49baed57996f31f2e0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forgot/forgot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forgot/forgot.html.twig"));

        // line 3
        $context["title"] = "mot de passe perdu ?";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "forgot/forgot.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    section {
        margin-top: 10%
    }
    .text-password-retrieve {
        display: none
    }
    .visibled {
        display: block
    }
</style>
<div class=\"container\">
    <section>
        <div class=\"row\">
                <div class=\"col-md-6\">
                        
                        <div class=\"text-password-retrieve visibled\">
                            <h2>  Mot de passe oublié ? </h2>
                            <p>
                                Vous avez oublié votre mot de passe ? Ne vous inquiétez pas cela nous arrive aussi ;) 
                                Nous allons vous envoyer la marche à suivre par e-mail.
                            </p>
                        </div>
                       <div class=\"text-password-retrieve\">
                            <h2>  C’est dans la boite ! </h2>
                            <p>
                                Un e-mail contenant le lien de validation pour réinitialiser votre mot de passe vient de vous être envoyé. Veuillez cliquer sur ce lien pour finaliser la réinitialisation de votre mot de passe
                            </p>
                       </div>

                        <form>
                            <div class=\"form-group\">
                                <label for=\"user-email\">Email*</label>
                                <input type=\"email\" class=\"form-control\" id=\"user-email\" placeholder=\"Votre email\" style=\"width: 50%\">
                                <br>
                                <a href=\"#\" class=\"btn btn-primary btn-tiny bnt-renitialize\" role=\"button\" aria-pressed=\"true\">Réinitialiser mon mot de passe</a>
                            </div>
                        </form>
                </div>
                <div class=\"col-md-6\">
                    <div style=\"display: flex\">
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/cityzens-forgot-page.png"), "html", null, true);
        echo "\" style=\"margin: auto;width: 479px\">
                    </div>
                </div>
        </div>
    </section>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "        <script>
            //window.addEventListener
                    \$(function() {
                        \$('.bnt-renitialize').on('click', function(\$e) {
                            \$e.preventDefault()
                            \$(\".text-password-retrieve\").each(function() {
                                console.log(\$(this).hasClass('visibled'))
                                \$(this).hasClass('visibled')?\$(this).removeClass('visibled'):\$(this).addClass('visibled')
                            })
                        } )
                    })
            </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "forgot/forgot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 57,  134 => 56,  115 => 47,  72 => 6,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'mot de passe perdu ?' %}

{% block body %}
<style>
    section {
        margin-top: 10%
    }
    .text-password-retrieve {
        display: none
    }
    .visibled {
        display: block
    }
</style>
<div class=\"container\">
    <section>
        <div class=\"row\">
                <div class=\"col-md-6\">
                        
                        <div class=\"text-password-retrieve visibled\">
                            <h2>  Mot de passe oublié ? </h2>
                            <p>
                                Vous avez oublié votre mot de passe ? Ne vous inquiétez pas cela nous arrive aussi ;) 
                                Nous allons vous envoyer la marche à suivre par e-mail.
                            </p>
                        </div>
                       <div class=\"text-password-retrieve\">
                            <h2>  C’est dans la boite ! </h2>
                            <p>
                                Un e-mail contenant le lien de validation pour réinitialiser votre mot de passe vient de vous être envoyé. Veuillez cliquer sur ce lien pour finaliser la réinitialisation de votre mot de passe
                            </p>
                       </div>

                        <form>
                            <div class=\"form-group\">
                                <label for=\"user-email\">Email*</label>
                                <input type=\"email\" class=\"form-control\" id=\"user-email\" placeholder=\"Votre email\" style=\"width: 50%\">
                                <br>
                                <a href=\"#\" class=\"btn btn-primary btn-tiny bnt-renitialize\" role=\"button\" aria-pressed=\"true\">Réinitialiser mon mot de passe</a>
                            </div>
                        </form>
                </div>
                <div class=\"col-md-6\">
                    <div style=\"display: flex\">
                        <img src=\"{{ asset('build/images/web/cityzens-forgot-page.png') }}\" style=\"margin: auto;width: 479px\">
                    </div>
                </div>
        </div>
    </section>


</div>
{% endblock %}
    {% block javascripts %}
        <script>
            //window.addEventListener
                    \$(function() {
                        \$('.bnt-renitialize').on('click', function(\$e) {
                            \$e.preventDefault()
                            \$(\".text-password-retrieve\").each(function() {
                                console.log(\$(this).hasClass('visibled'))
                                \$(this).hasClass('visibled')?\$(this).removeClass('visibled'):\$(this).addClass('visibled')
                            })
                        } )
                    })
            </script>
    {% endblock %}
", "forgot/forgot.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/forgot/forgot.html.twig");
    }
}
