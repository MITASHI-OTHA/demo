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

/* ad_messages/partials/messages_users.html.twig */
class __TwigTemplate_80d38528d5d413991f2d7d0bd95f5e66bd3fbd9393a9d0f49081a5f28c367a1a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_messages/partials/messages_users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_messages/partials/messages_users.html.twig"));

        // line 1
        echo "<div class=\"col-md-4\">
    ";
        // line 3
        echo "    <ul class=\"list-group\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "ads", [], "any", false, false, false, 5), "author", [], "any", false, false, false, 5) == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5))) {
                // line 6
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "get", [0 => "author"], "method", false, false, false, 6), "id", [], "any", false, false, false, 6))) ? ("user__list__action") : (""));
                echo " list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad_conversation", ["author" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "ad" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "ads", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)]), "html", null, true);
                echo "\"
                    class=\"w-100 d-flex\">
                        <div class=\"rounded-circle d-flex justify-content-center align-items-center\">
                            ";
                // line 10
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 10), "userContactInfos", [], "any", false, false, false, 10), "avatar", [], "any", false, false, false, 10) != "default_avatar")) {
                    // line 11
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/web/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 11), "userContactInfos", [], "any", false, false, false, 11), "avatar", [], "any", false, false, false, 11))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "ads", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), "html", null, true);
                    echo "\" width=\"50\">
                            ";
                } else {
                    // line 13
                    echo "                                <i class=\"fas fa-user\"></i>
                            ";
                }
                // line 15
                echo "                        </div>
                        <div class=\"ml-3\">
                            ";
                // line 17
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 17), "prenom", [], "any", false, false, false, 17)), "html", null, true);
                echo "
                            <div style=\"font-size: 12px;\" class=\"text-muted\">
                                ";
                // line 19
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sendAt", [], "any", false, false, false, 19), "d/m/y"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 19)), "truncate", [0 => 15, 1 => "...", 2 => false], "method", false, false, false, 19), "html", null, true);
                echo "
                            </div>
                        </div>
                    </a>
                    <a title=\"Supprimer la conversation\" style=\"font-size: 20px;\" class=\"flex-shrink ml-2 delete__message\" href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages_delete", ["messageDel" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\">
                        <i class=\"far fa-trash-alt\"></i>
                    </a>
                </li>
            ";
            } else {
                // line 28
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "ads", [], "any", false, false, false, 28), "author", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", [0 => "author"], "method", false, false, false, 28), "id", [], "any", false, false, false, 28))) ? ("user__list__action") : (""));
                echo " list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ad_conversation", ["author" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "ads", [], "any", false, false, false, 29), "author", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "ad" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "ads", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\"
                    class=\"w-100 d-flex\">
                        <div class=\"rounded__block\">
                            <img src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/web/ads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "ads", [], "any", false, false, false, 32), "photo1", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "ads", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
                echo "\">
                        </div>
                        <div class=\"ml-3\">
                            ";
                // line 35
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "ads", [], "any", false, false, false, 35), "author", [], "any", false, false, false, 35), "prenom", [], "any", false, false, false, 35)), "html", null, true);
                echo "
                            <div style=\"font-size: 14px;\" class=\"text-dark\">
                                ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "ads", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37)), "truncate", [0 => 15, 1 => "...", 2 => false], "method", false, false, false, 37), "html", null, true);
                echo "
                            </div>
                            <div style=\"font-size: 11px;\" class=\"text-muted\">
                                ";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sendAt", [], "any", false, false, false, 40), "d/m/y"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 40)), "truncate", [0 => 10, 1 => "...", 2 => false], "method", false, false, false, 40), "html", null, true);
                echo "
                            </div>
                        </div>
                    </a>
                    <a title=\"Supprimer la conversation\" style=\"font-size: 20px;\" class=\"flex-shrink ml-2 delete__message\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages_delete", ["messageDel" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">
                        <i class=\"far fa-trash-alt\"></i>
                    </a>
                </li>
            ";
            }
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad_messages/partials/messages_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 50,  154 => 49,  146 => 44,  137 => 40,  131 => 37,  126 => 35,  118 => 32,  112 => 29,  107 => 28,  99 => 23,  90 => 19,  85 => 17,  81 => 15,  77 => 13,  69 => 11,  67 => 10,  61 => 7,  56 => 6,  53 => 5,  49 => 4,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-4\">
    {#{ dump(app.request.get('author').id) }#}
    <ul class=\"list-group\">
        {% for message in messages %}
            {% if message.ads.author == app.user %}
                <li class=\"{{ message.sender.id == app.request.get('author').id ? 'user__list__action' : ''}} list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    <a href=\"{{ path('ad_conversation', {'author' : message.sender.id, 'ad' : message.ads.id}) }}\"
                    class=\"w-100 d-flex\">
                        <div class=\"rounded-circle d-flex justify-content-center align-items-center\">
                            {% if message.sender.userContactInfos.avatar != 'default_avatar' %}
                                <img src=\"{{ asset('build/images/web/avatars/'~ message.sender.userContactInfos.avatar) }}\" alt=\"{{ message.ads.name }}\" width=\"50\">
                            {% else %}
                                <i class=\"fas fa-user\"></i>
                            {% endif %}
                        </div>
                        <div class=\"ml-3\">
                            {{ message.sender.prenom | capitalize }}
                            <div style=\"font-size: 12px;\" class=\"text-muted\">
                                {{ message.sendAt | date('d/m/y') }} - {{ message.content | u.truncate(15, '...', false) }}
                            </div>
                        </div>
                    </a>
                    <a title=\"Supprimer la conversation\" style=\"font-size: 20px;\" class=\"flex-shrink ml-2 delete__message\" href=\"{{ path('messages_delete', { 'messageDel' : message.id }) }}\">
                        <i class=\"far fa-trash-alt\"></i>
                    </a>
                </li>
            {% else %}
                <li class=\"{{ message.ads.author.id == app.request.get('author').id ? 'user__list__action' : ''}} list-group-item list-group-item-action d-flex justify-content-between align-items-center\">
                    <a href=\"{{ path('ad_conversation', {'author' : message.ads.author.id, 'ad' : message.ads.id}) }}\"
                    class=\"w-100 d-flex\">
                        <div class=\"rounded__block\">
                            <img src=\"{{ asset('build/images/web/ads/'~ message.ads.photo1.name) }}\" alt=\"{{ message.ads.name }}\">
                        </div>
                        <div class=\"ml-3\">
                            {{ message.ads.author.prenom | capitalize }}
                            <div style=\"font-size: 14px;\" class=\"text-dark\">
                                {{ message.ads.name | u.truncate(15, '...', false) }}
                            </div>
                            <div style=\"font-size: 11px;\" class=\"text-muted\">
                                {{ message.sendAt | date('d/m/y') }} - {{ message.content | u.truncate(10, '...', false) }}
                            </div>
                        </div>
                    </a>
                    <a title=\"Supprimer la conversation\" style=\"font-size: 20px;\" class=\"flex-shrink ml-2 delete__message\" href=\"{{ path('messages_delete', { 'messageDel' : message.id }) }}\">
                        <i class=\"far fa-trash-alt\"></i>
                    </a>
                </li>
            {% endif %}
        {% endfor %}
    </ul>
</div>", "ad_messages/partials/messages_users.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/ad_messages/partials/messages_users.html.twig");
    }
}
