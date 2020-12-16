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

/* admin/posts/posts_list.html.twig */
class __TwigTemplate_1efd5bcbdb5240069e16b2be66300f2d0a74bb8258d70d47401c2121a185d899 extends \Twig\Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/posts_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/posts_list.html.twig"));

        // line 3
        $context["title"] = "Liste des posts";
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/posts/posts_list.html.twig", 1);
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
        echo "<style>
    table {
        font-size: 0.85em;
    }

    .action a {
        color: inherit;
        font-size: 1em !important;
        transition: ease .5s;
    }

    .action:hover a {
        color: #00BFA6;
    }
    h1 {
        font-size: 1.65em;
        color: #667d99;
    }
    .stamp__no__results {
        color: #407bff;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "    <div class=\"d-flex my-4\">
        <h4 class=\"flex-grow-1 font-weight-bold\">Gestion des posts</h4>
        <div class=\"flex-shrink-1\">
            <a class=\"btn btnSubmit\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("posts_add");
        echo "\">Ajouter un post</a>
        </div>
    </div><br>

    ";
        // line 38
        if ((null != (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "        <table class=\"table table-responsive table-hover\">
            <thead>
                <tr>
                    <th class=\"align-baseline\" scope=\"col\">#</th>
                    <th class=\"align-baseline\" scope=\"col\">Titre</th>
                    <th class=\"align-baseline\" scope=\"col\">Chapeau</th>
                    <th class=\"align-baseline\" scope=\"col\">Contenu</th>
                    <th class=\"align-baseline\" scope=\"col\">Catégorie</th>
                    <th class=\"align-baseline\" scope=\"col\">Slug</th>
                    <th class=\"align-baseline\" scope=\"col\">Crée le</th>
                    <th class=\"align-baseline\" scope=\"col\">Mis à jour le</th>
                    <th class=\"align-baseline\" scope=\"col\" colspan=\"2\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["post"]) {
                // line 55
                echo "                <tr>
                    <th scope=\"row\">";
                // line 56
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</th>
                    <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 57)), "truncate", [0 => 50, 1 => "...", 2 => false], "method", false, false, false, 57), "html", null, true);
                echo "</td>
                    <td>";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["post"], "chapeau", [], "any", false, false, false, 58)), "truncate", [0 => 45, 1 => "...", 2 => false], "method", false, false, false, 58);
                echo "</td>
                    <td>
                        ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "contents", [], "any", false, false, false, 60));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                    // line 61
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 61)) {
                        // line 62
                        echo "                                ";
                        echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["content"], "subTitle", [], "any", false, false, false, 62)), "truncate", [0 => 50, 1 => "...", 2 => false], "method", false, false, false, 62);
                        echo "
                            ";
                    }
                    // line 64
                    echo "                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "
                    </td>
                    <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67)), "html", null, true);
                echo "</td>
                    <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                    <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 69), "d/m/Y à H: i"), [":" => "h"]), "html", null, true);
                echo " </td>
                    <td>";
                // line 70
                (((null != twig_get_attribute($this->env, $this->source, $context["post"], "updatedAt", [], "any", false, false, false, 70))) ? (print (twig_escape_filter($this->env, twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "updatedAt", [], "any", false, false, false, 70), "d/m/Y à H: i"), [":" => "h"]), "html", null, true))) : (print ("Aucune mis à jour effectuée")));
                echo " </td>
                    <td class=\"action\">
                        <a class=\"edit__post\" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("posts_update", ["post" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\">
                            <i class=\"fas fa-pencil-alt\"></i>
                        </a>
                    </td>
                    <td class=\"action\">
                        <a class=\"delete__post\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("posts_delete", ["post" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                echo "\">
                            <i class=\"far fa-trash-alt\"></i>
                        </a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 86
            echo "        <div class=\"d-flex flex-column align-items-center justify-content-center\">
            <h1 class=\"font-weight-bolder m-0\">Désolé ! Il n'existe aucun post pour l'instant... <span class=\"stamp__no__results\">Veuillez en ajouter !</span> </h1>
            <div class=\"w-50\">
                <img src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/no_results.svg"), "html", null, true);
            echo "\" alt=\"no result\" class=\"img-fluid\">
            </div>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "    <script>
        \$(function () 
        {
            function confirmAction() 
            {
                \$('.edit__post').click(() => 
                {
                    return confirm('Êtes-vous certain de vouloir modifier les informations de cet post ?');
                });

                \$('.delete__post').click(() => 
                {
                    return confirm('Attention, zone dangereuse !!! Êtes-vous certain de vouloir supprimer cet post de votre base de données ?');
                });
            }
            confirmAction();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/posts/posts_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 96,  272 => 95,  257 => 89,  252 => 86,  247 => 83,  235 => 77,  227 => 72,  222 => 70,  218 => 69,  214 => 68,  210 => 67,  206 => 65,  192 => 64,  186 => 62,  183 => 61,  166 => 60,  161 => 58,  157 => 57,  153 => 56,  150 => 55,  146 => 54,  129 => 39,  127 => 38,  120 => 34,  115 => 31,  105 => 30,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set title = 'Liste des posts' %}

{% block stylesheets %}
<style>
    table {
        font-size: 0.85em;
    }

    .action a {
        color: inherit;
        font-size: 1em !important;
        transition: ease .5s;
    }

    .action:hover a {
        color: #00BFA6;
    }
    h1 {
        font-size: 1.65em;
        color: #667d99;
    }
    .stamp__no__results {
        color: #407bff;
    }
</style>
{% endblock %}

{% block body %}
    <div class=\"d-flex my-4\">
        <h4 class=\"flex-grow-1 font-weight-bold\">Gestion des posts</h4>
        <div class=\"flex-shrink-1\">
            <a class=\"btn btnSubmit\" href=\"{{ path('posts_add') }}\">Ajouter un post</a>
        </div>
    </div><br>

    {% if null != posts %}
        <table class=\"table table-responsive table-hover\">
            <thead>
                <tr>
                    <th class=\"align-baseline\" scope=\"col\">#</th>
                    <th class=\"align-baseline\" scope=\"col\">Titre</th>
                    <th class=\"align-baseline\" scope=\"col\">Chapeau</th>
                    <th class=\"align-baseline\" scope=\"col\">Contenu</th>
                    <th class=\"align-baseline\" scope=\"col\">Catégorie</th>
                    <th class=\"align-baseline\" scope=\"col\">Slug</th>
                    <th class=\"align-baseline\" scope=\"col\">Crée le</th>
                    <th class=\"align-baseline\" scope=\"col\">Mis à jour le</th>
                    <th class=\"align-baseline\" scope=\"col\" colspan=\"2\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for key, post in posts %}
                <tr>
                    <th scope=\"row\">{{ key + 1 }}</th>
                    <td>{{ post.name | u.truncate(50, '...', false) }}</td>
                    <td>{{ post.chapeau | u.truncate(45, '...', false) | raw }}</td>
                    <td>
                        {% for content in post.contents %}
                            {% if loop.first %}
                                {{ content.subTitle | u.truncate(50, '...', false) | raw }}
                            {% endif %}
                        {% endfor %}

                    </td>
                    <td>{{ post.category.name | capitalize }}</td>
                    <td>{{ post.slug }}</td>
                    <td>{{ post.createdAt | date('d/m/Y à H: i') | replace({':' : 'h'}) }} </td>
                    <td>{{ null != post.updatedAt ? post.updatedAt | date('d/m/Y à H: i') | replace({':' : 'h'}) : 'Aucune mis à jour effectuée' }} </td>
                    <td class=\"action\">
                        <a class=\"edit__post\" href=\"{{ path('posts_update', { 'post' : post.id }) }}\">
                            <i class=\"fas fa-pencil-alt\"></i>
                        </a>
                    </td>
                    <td class=\"action\">
                        <a class=\"delete__post\" href=\"{{ path('posts_delete', { 'post' : post.id }) }}\">
                            <i class=\"far fa-trash-alt\"></i>
                        </a>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"d-flex flex-column align-items-center justify-content-center\">
            <h1 class=\"font-weight-bolder m-0\">Désolé ! Il n'existe aucun post pour l'instant... <span class=\"stamp__no__results\">Veuillez en ajouter !</span> </h1>
            <div class=\"w-50\">
                <img src=\"{{ asset('build/images/static/no_results.svg') }}\" alt=\"no result\" class=\"img-fluid\">
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block javascripts %}
    <script>
        \$(function () 
        {
            function confirmAction() 
            {
                \$('.edit__post').click(() => 
                {
                    return confirm('Êtes-vous certain de vouloir modifier les informations de cet post ?');
                });

                \$('.delete__post').click(() => 
                {
                    return confirm('Attention, zone dangereuse !!! Êtes-vous certain de vouloir supprimer cet post de votre base de données ?');
                });
            }
            confirmAction();
        });
    </script>
{% endblock %}", "admin/posts/posts_list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/admin/posts/posts_list.html.twig");
    }
}
