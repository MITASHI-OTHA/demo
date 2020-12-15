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

/* ad_messages/partials/messages_conversations.html.twig */
class __TwigTemplate_6fafb1b6dbbf5df16ed34eab9367c695a50431ecc960ede486b670a432bf8647 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_messages/partials/messages_conversations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_messages/partials/messages_conversations.html.twig"));

        // line 1
        echo "<div class=\"d-flex mb-4\">
    <h6 class=\"flex-shrink\">
        ";
        // line 3
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 3, $this->source); })()), "author", [], "any", false, false, false, 3) == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 3, $this->source); })()), "author", [], "any", false, false, false, 3), "prenom", [], "any", false, false, false, 3)) : (twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 3, $this->source); })()), "prenom", [], "any", false, false, false, 3))), "html", null, true);
        echo "
    </h6>
    <div class=\"w-100 d-flex justify-content-end\">
        <div class=\"mr-3 text-right\">
            <p class=\"mb-1\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7)), "truncate", [0 => 25, 1 => "...", 2 => false], "method", false, false, false, 7), "html", null, true);
        echo "</p>
            <strong class=\"text-success\">
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 9, $this->source); })()), "prix", [], "any", false, false, false, 9), "EUR", array(), "fr"), "html", null, true);
        echo "
            </strong>
        </div>
        <div class=\"\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/web/ads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 13, $this->source); })()), "photo1", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"rounded\"
                width=\"85.33\">
        </div>
        <div class=\"ml-2\">
            <button style=\"color: #667d99;\" class=\"btn\">
                <i class=\"fas fa-ellipsis-v\"></i>
            </button>
        </div>
    </div>
</div>

<div style=\"font-size:12px;\" class=\"my-4 bg__danger__light\">
    <div class=\"font-weight-bolder\">Pour discuter en sécurité, restez sur la messagerie</div>

    <div class=\"text-secondary my-1\">
        Ici nous garantissons la sécurité de vos échanges alors soyez prudents lorsqu'un utilisateur vous demande votre
        email / téléphone !
    </div>

    <a href=\"\" class=\"text-danger font-weight-bolder\">
        En savoir plus
    </a>
</div>
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 38) != twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38))) {
                // line 39
                echo "        <div class=\"my-4\">
            <div class=\"text-secondary text-center mb-2 message__send__at\" style=\"font-size:12px; font-weight:500; opacity:.6;\">
                ";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sendAt", [], "any", false, false, false, 41), "medium", "medium", "", null, "gregorian", "fr"), "html", null, true);
                echo "
            </div>
            <div class=\"bg__success__light other__user__bubble\">
                ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 44), "html", null, true);
                // line 45
                echo "            </div>
        </div>
    ";
            } else {
                // line 48
                echo "        <div class=\"my-4\">
            <div class=\"text-secondary text-center mb-2 message__send__at\" style=\"font-size:12px; font-weight:500; opacity:.6;\">
                ";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sendAt", [], "any", false, false, false, 50), "medium", "medium", "", null, "gregorian", "fr"), "html", null, true);
                echo "
            </div>
            <div class=\"bg__secondary__light app__user__bubble\">
                ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 53), "html", null, true);
                // line 54
                echo "            </div>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad_messages/partials/messages_conversations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 54,  128 => 53,  122 => 50,  118 => 48,  113 => 45,  111 => 44,  105 => 41,  101 => 39,  98 => 38,  94 => 37,  66 => 13,  59 => 9,  54 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex mb-4\">
    <h6 class=\"flex-shrink\">
        {{ ad.author == app.user ? ad.author.prenom : author.prenom }}
    </h6>
    <div class=\"w-100 d-flex justify-content-end\">
        <div class=\"mr-3 text-right\">
            <p class=\"mb-1\">{{ ad.name | u.truncate(25, '...', false) }}</p>
            <strong class=\"text-success\">
                {{ ad.prix | format_currency('EUR', locale='fr') }}
            </strong>
        </div>
        <div class=\"\">
            <img src=\"{{ asset('build/images/web/ads/'~ ad.photo1.name) }}\" alt=\"{{ ad.name }}\" class=\"rounded\"
                width=\"85.33\">
        </div>
        <div class=\"ml-2\">
            <button style=\"color: #667d99;\" class=\"btn\">
                <i class=\"fas fa-ellipsis-v\"></i>
            </button>
        </div>
    </div>
</div>

<div style=\"font-size:12px;\" class=\"my-4 bg__danger__light\">
    <div class=\"font-weight-bolder\">Pour discuter en sécurité, restez sur la messagerie</div>

    <div class=\"text-secondary my-1\">
        Ici nous garantissons la sécurité de vos échanges alors soyez prudents lorsqu'un utilisateur vous demande votre
        email / téléphone !
    </div>

    <a href=\"\" class=\"text-danger font-weight-bolder\">
        En savoir plus
    </a>
</div>
{#{ dump(messages) }#}
{% for message in messages %}
    {% if message.sender != app.user %}
        <div class=\"my-4\">
            <div class=\"text-secondary text-center mb-2 message__send__at\" style=\"font-size:12px; font-weight:500; opacity:.6;\">
                {{ message.sendAt | format_datetime(locale='fr') }}
            </div>
            <div class=\"bg__success__light other__user__bubble\">
                {{ message.content }}{#| line_break_content#}
            </div>
        </div>
    {% else %}
        <div class=\"my-4\">
            <div class=\"text-secondary text-center mb-2 message__send__at\" style=\"font-size:12px; font-weight:500; opacity:.6;\">
                {{ message.sendAt | format_datetime(locale='fr') }}
            </div>
            <div class=\"bg__secondary__light app__user__bubble\">
                {{ message.content }}{#| line_break_content#}
            </div>
        </div>
    {% endif %}
{% endfor %}", "ad_messages/partials/messages_conversations.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/ad_messages/partials/messages_conversations.html.twig");
    }
}
