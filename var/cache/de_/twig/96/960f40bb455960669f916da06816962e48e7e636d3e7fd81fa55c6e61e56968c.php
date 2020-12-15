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

/* admin/users/users_list.html.twig */
class __TwigTemplate_52318aca7870c8d99d0e41446134eb8db68c50453cd65a427cd3b20590763625 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/users_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/users_list.html.twig"));

        // line 3
        $context["title"] = "Liste des utilisateurs";
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/users/users_list.html.twig", 1);
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
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "    <div class=\"d-flex my-4\">
        <h4 class=\"flex-grow-1 font-weight-bold\">Gestion des utilisateurs</h4>
        <div class=\"flex-shrink-1\">
            <a class=\"btn btnSubmit\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_user");
        echo "\">Ajouter un utilisateur</a>
        </div>
    </div><br>

    ";
        // line 29
        if ((null != (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "        <table class=\"table table-responsive table-hover\">
            <thead>
                <tr>
                    <th class=\"align-baseline\" scope=\"col\">#</th>
                    <th class=\"align-baseline\" scope=\"col\">Pseudo</th>
                    <th class=\"align-baseline\" scope=\"col\">Prénom</th>
                    <th class=\"align-baseline\" scope=\"col\">Nom</th>
                    <th class=\"align-baseline\" scope=\"col\">Email</th>
                    <th class=\"align-baseline\" scope=\"col\">Civilité</th>
                    <th class=\"align-baseline\" scope=\"col\">Abonné(e) Newsletter</th>
                    <th class=\"align-baseline\" scope=\"col\">Rôle</th>
                    <th class=\"align-baseline\" scope=\"col\">Date d'inscription</th>
                    <th class=\"align-baseline\" scope=\"col\">Dernière connexion</th>
                    <th class=\"align-baseline\" scope=\"col\">Dernière activité</th>
                    <th class=\"align-baseline\" scope=\"col\">Connecté(e)</th>
                    <th class=\"align-baseline\" scope=\"col\" colspan=\"2\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["user"]) {
                // line 50
                echo "                    <tr>
                        <th scope=\"row\">";
                // line 51
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</th>
                        <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                        <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                        <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                        <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                        <td>";
                // line 56
                echo (((twig_get_attribute($this->env, $this->source, $context["user"], "civilite", [], "any", false, false, false, 56) != "m")) ? ("Madame") : ("Monsieur"));
                echo "</td>
                        <td>";
                // line 57
                echo (((twig_get_attribute($this->env, $this->source, $context["user"], "abonneNewsletter", [], "any", false, false, false, 57) != 0)) ? ("<span class=\"badge badgeSuccess\">Oui</span>") : ("<span class=\"badge badgeDanger\">Non</span>"));
                echo "</td>
                        <td>
                            ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "userRoles", [], "any", false, false, false, 59));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 60
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 60) == "ROLE_ADMIN")) {
                        // line 61
                        echo "                                    Administrateur
                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 62
$context["role"], "name", [], "any", false, false, false, 62) == "ROLE_PROJECT_MANAGER")) {
                        // line 63
                        echo "                                    Chef de projet
                                ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 64
$context["role"], "name", [], "any", false, false, false, 64) == "ROLE_CANDIDAT")) {
                        // line 65
                        echo "                                    Candidat au projet
                                ";
                    } else {
                        // line 67
                        echo "                                    Utilisateur
                                ";
                    }
                    // line 69
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                        </td>
                        <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "registrationDate", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 72), "d/m/Y à H: i"), [":" => "h"]), "html", null, true);
                echo " </td>
                        <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_replace_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastActivityAt", [], "any", false, false, false, 73), "d/m/Y à H: i"), [":" => "h"]), "html", null, true);
                echo " </td>
                        <td>";
                // line 74
                echo (((twig_get_attribute($this->env, $this->source, $context["user"], "isConnected", [], "any", false, false, false, 74) != 0)) ? ("<span class=\"badge badgeSuccess\">Oui</span>") : ("<span class=\"badge badgeDanger\">Non</span>"));
                echo "</td>
                        <td class=\"action\">
                            <a class=\"edit__user\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_user", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\">
                                <i class=\"fas fa-pencil-alt\"></i>
                            </a>
                        </td>
                        <td class=\"action\">
                            <a class=\"delete__user\" href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", ["user" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                echo "\">
                                <i class=\"far fa-trash-alt\"></i>
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    <script>
        \$(function() 
        {
            function confirmAction() 
            {
                \$('.edit__user').click(() => 
                {
                    return confirm('Êtes-vous certain de vouloir modifier les informations de cet utilisateur ?');
                });

                \$('.delete__user').click(() => 
                {
                    return confirm('Attention, zone dangereuse !!! Êtes-vous certain de vouloir supprimer cet utilisateur de votre base de données ?');
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
        return "admin/users/users_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 93,  261 => 92,  248 => 87,  236 => 81,  228 => 76,  223 => 74,  219 => 73,  215 => 72,  211 => 71,  208 => 70,  202 => 69,  198 => 67,  194 => 65,  192 => 64,  189 => 63,  187 => 62,  184 => 61,  181 => 60,  177 => 59,  172 => 57,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  152 => 52,  148 => 51,  145 => 50,  141 => 49,  120 => 30,  118 => 29,  111 => 25,  106 => 22,  96 => 21,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set title = 'Liste des utilisateurs' %}

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
    </style>
{% endblock %}

{% block body %}
    <div class=\"d-flex my-4\">
        <h4 class=\"flex-grow-1 font-weight-bold\">Gestion des utilisateurs</h4>
        <div class=\"flex-shrink-1\">
            <a class=\"btn btnSubmit\" href=\"{{ path('add_user') }}\">Ajouter un utilisateur</a>
        </div>
    </div><br>

    {% if null != users %}
        <table class=\"table table-responsive table-hover\">
            <thead>
                <tr>
                    <th class=\"align-baseline\" scope=\"col\">#</th>
                    <th class=\"align-baseline\" scope=\"col\">Pseudo</th>
                    <th class=\"align-baseline\" scope=\"col\">Prénom</th>
                    <th class=\"align-baseline\" scope=\"col\">Nom</th>
                    <th class=\"align-baseline\" scope=\"col\">Email</th>
                    <th class=\"align-baseline\" scope=\"col\">Civilité</th>
                    <th class=\"align-baseline\" scope=\"col\">Abonné(e) Newsletter</th>
                    <th class=\"align-baseline\" scope=\"col\">Rôle</th>
                    <th class=\"align-baseline\" scope=\"col\">Date d'inscription</th>
                    <th class=\"align-baseline\" scope=\"col\">Dernière connexion</th>
                    <th class=\"align-baseline\" scope=\"col\">Dernière activité</th>
                    <th class=\"align-baseline\" scope=\"col\">Connecté(e)</th>
                    <th class=\"align-baseline\" scope=\"col\" colspan=\"2\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for key, user in users %}
                    <tr>
                        <th scope=\"row\">{{ key + 1 }}</th>
                        <td>{{ user.username }}</td>
                        <td>{{ user.prenom }}</td>
                        <td>{{ user.nom }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.civilite != 'm' ? 'Madame' : 'Monsieur' }}</td>
                        <td>{{ user.abonneNewsletter != 0 ? '<span class=\"badge badgeSuccess\">Oui</span>' : '<span class=\"badge badgeDanger\">Non</span>' }}</td>
                        <td>
                            {% for role in user.userRoles %}
                                {% if role.name == 'ROLE_ADMIN' %}
                                    Administrateur
                                {% elseif role.name == 'ROLE_PROJECT_MANAGER' %}
                                    Chef de projet
                                {% elseif role.name == 'ROLE_CANDIDAT' %}
                                    Candidat au projet
                                {% else %}
                                    Utilisateur
                                {% endif %}
                            {% endfor %}
                        </td>
                        <td>{{ user.registrationDate | date('d/m/Y') }}</td>
                        <td>{{ user.lastLogin | date('d/m/Y à H: i') | replace({':' : 'h'}) }} </td>
                        <td>{{ user.lastActivityAt | date('d/m/Y à H: i') | replace({':' : 'h'}) }} </td>
                        <td>{{ user.isConnected != 0 ? '<span class=\"badge badgeSuccess\">Oui</span>' : '<span class=\"badge badgeDanger\">Non</span>' }}</td>
                        <td class=\"action\">
                            <a class=\"edit__user\" href=\"{{ path('update_user', { 'user' : user.id }) }}\">
                                <i class=\"fas fa-pencil-alt\"></i>
                            </a>
                        </td>
                        <td class=\"action\">
                            <a class=\"delete__user\" href=\"{{ path('delete_user', { 'user' : user.id }) }}\">
                                <i class=\"far fa-trash-alt\"></i>
                            </a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}

{% block javascripts %}
    <script>
        \$(function() 
        {
            function confirmAction() 
            {
                \$('.edit__user').click(() => 
                {
                    return confirm('Êtes-vous certain de vouloir modifier les informations de cet utilisateur ?');
                });

                \$('.delete__user').click(() => 
                {
                    return confirm('Attention, zone dangereuse !!! Êtes-vous certain de vouloir supprimer cet utilisateur de votre base de données ?');
                });
            }
            confirmAction();
        });
    </script>
{% endblock %}
", "admin/users/users_list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/admin/users/users_list.html.twig");
    }
}
