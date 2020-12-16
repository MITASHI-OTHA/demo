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

/* reset_password/get_email.html.twig */
class __TwigTemplate_0f31705ed5233f43b75c698d6fd72843beba70ba2f1db63dc8d5f71d1690871c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/get_email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/get_email.html.twig"));

        // line 3
        $context["title"] = "Récupérer l'email";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/get_email.html.twig", 1);
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
        echo "    <div class=\"d-flex flex-column align-items-center\">
        <div class=\"col-lg-4 col-md-6\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 9
            echo "                <div class=\"alert alert-info\">";
            echo $context["alerte"];
            echo "</div><br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
            <div class=\"text-center\">
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/static/logotype_lcz.svg"), "html", null, true);
        echo "\" alt=\"Logo LescityZens\" width=\"170\">
                </a>
            </div><br>
            <p class=\"lost__password__tBlock bg-light p-3 rounded\">
                Veuillez saisir votre adresse de messagerie. Un lien permettant de créer
                un nouveau mot de passe vous sera envoyé par e-mail.
            </p><br>

            <form action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lost_password_redirect");
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    <input type=\"text\" name=\"email\" value=\"\" id=\"email\" class=\"form-control mb-4\" placeholder=\"Adresse email\">
                </div>

                <div class=\"form-group text-center\">
                    <button type=\"submit\" class=\"btn btnSubmit mt-2\">
                        Générer un mot de passe
                    </button>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/get_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 22,  96 => 14,  92 => 13,  88 => 11,  79 => 9,  75 => 8,  71 => 6,  61 => 5,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Récupérer l\\'email' %}

{% block body %}
    <div class=\"d-flex flex-column align-items-center\">
        <div class=\"col-lg-4 col-md-6\">
            {% for alerte in app.flashes('success') %}
                <div class=\"alert alert-info\">{{ alerte | raw }}</div><br>
            {% endfor %}

            <div class=\"text-center\">
                <a href=\"{{ path('home') }}\">
                    <img src=\"{{ asset('images/static/logotype_lcz.svg') }}\" alt=\"Logo LescityZens\" width=\"170\">
                </a>
            </div><br>
            <p class=\"lost__password__tBlock bg-light p-3 rounded\">
                Veuillez saisir votre adresse de messagerie. Un lien permettant de créer
                un nouveau mot de passe vous sera envoyé par e-mail.
            </p><br>

            <form action=\"{{ path('lost_password_redirect') }}\" method=\"post\">
                <div class=\"form-group\">
                    <input type=\"text\" name=\"email\" value=\"\" id=\"email\" class=\"form-control mb-4\" placeholder=\"Adresse email\">
                </div>

                <div class=\"form-group text-center\">
                    <button type=\"submit\" class=\"btn btnSubmit mt-2\">
                        Générer un mot de passe
                    </button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}
", "reset_password/get_email.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/reset_password/get_email.html.twig");
    }
}
