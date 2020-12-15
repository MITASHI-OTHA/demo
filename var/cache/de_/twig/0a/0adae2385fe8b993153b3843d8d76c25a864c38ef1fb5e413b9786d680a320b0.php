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

/* cand/allCandidatureUser.html.twig */
class __TwigTemplate_7d4c8bcc581c75b6ef29021b15a9f7e1c2a07e9b11751d42ba68944f17fad12b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cand/allCandidatureUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cand/allCandidatureUser.html.twig"));

        // line 3
        $context["title"] = "candidature";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cand/allCandidatureUser.html.twig", 1);
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
        echo "    <h3>Mes Candidatures</h3>
    <hr class=\"m-0 bg-danger w-25 p-0 float-left\">
    <br>
    <h5 class=\"border-bottom border-danger border-bottom w-25\">Vous
        avez ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " candidature</h5>
    ";
        // line 11
        if ((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 13
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["candidature"], "getVisibility", [], "method", false, false, false, 13)) {
                    // line 14
                    echo "                <div class=\"card\">
                    <div class=\"card-title mw-100 bg-secondary\"
                         style=\"min-height: 100px\">
                        ";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 17), "html", null, true);
                    echo "
                    </div>
                    <div class=\"card-body\">
                        <br>
                        ";
                    // line 21
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getCreatedAt", [], "method", false, false, false, 21), "d/m/Y"), "html", null, true);
                    echo "

                        ";
                    // line 23
                    if ((twig_get_attribute($this->env, $this->source, $context["candidature"], "getStatus", [], "method", false, false, false, 23) == 0)) {
                        // line 24
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "name", [], "any", false, false, false, 24), "_"), 0, [], "array", false, false, false, 24) == "candidature")) {
                            // line 25
                            echo "
                                <a class=\"text-black-50 text-decoration-none\"
                                   href=\"";
                            // line 27
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EditCandidature", ["candidature" => twig_get_attribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                            echo "\">
                                    editer
                                </a>
                            ";
                        } else {
                            // line 31
                            echo "                                <a class=\"text-black-50 text-decoration-none\"
                                   href=\"";
                            // line 32
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EditCandidatureLight", ["candidature" => twig_get_attribute($this->env, $this->source,                             // line 33
$context["candidature"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                            echo "\">
                                    editer
                                </a>
                            ";
                        }
                        // line 37
                        echo "                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["candidature"], "getStatus", [], "method", false, false, false, 37) == 1)) {
                        // line 38
                        echo "                            en cours de validation
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 39
$context["candidature"], "getStatus", [], "method", false, false, false, 39) == 2)) {
                        // line 40
                        echo "                            valider
                            ";
                        // line 41
                        if ((twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "name", [], "any", false, false, false, 41), "_"), 0, [], "array", false, false, false, 41) == "candidature")) {
                            // line 42
                            echo "
                                <button type=\"button\" class=\"btn
                            btn-outline-success\"
                                        id=\"ConfirmCandidature_";
                            // line 45
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 45), "html", null, true);
                            echo "\"
                                        onclick=\"confirm(";
                            // line 46
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 46), "html", null, true);
                            // line 47
                            echo ", 5, 'complete')\">
                                    confirmer ma candidature
                                </button>
                                <button type=\"button\" class=\"btn
                            btn-outline-danger\"
                                        id=\"ConfirmCandidature_";
                            // line 52
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 52), "html", null, true);
                            echo "\"
                                        onclick=\"confirm(";
                            // line 53
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 53), "html", null, true);
                            // line 54
                            echo ", 0, 'complete')\">
                                    annuler ma candidature
                                </button>

                            ";
                        } else {
                            // line 59
                            echo "
                                <button type=\"button\" class=\"btn
                            btn-outline-success\"
                                        id=\"ConfirmCandidature_";
                            // line 62
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 62), "html", null, true);
                            echo "\"
                                        onclick=\"confirm(";
                            // line 63
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 63), "html", null, true);
                            // line 64
                            echo ", 5, 'light')\">
                                    confirmer ma candidature
                                </button>
                                <button type=\"button\" class=\"btn
                            btn-outline-danger\"
                                        id=\"ConfirmCandidature_";
                            // line 69
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 69), "html", null, true);
                            echo "\"
                                        onclick=\"confirm(";
                            // line 70
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 70), "html", null, true);
                            // line 71
                            echo ", 0, 'light')\">
                                    annuler ma candidature
                                </button>

                            ";
                        }
                        // line 76
                        echo "                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["candidature"], "getStatus", [], "method", false, false, false, 76) == 3)) {
                        // line 77
                        echo "                            refuser
                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 78
$context["candidature"], "getStatus", [], "method", false, false, false, 78) == 4)) {
                        // line 79
                        echo "                            incomplet ou mal remplie
                            ";
                        // line 80
                        if ((twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "name", [], "any", false, false, false, 80), "_"), 0, [], "array", false, false, false, 80) == "candidature")) {
                            // line 81
                            echo "
                                <a class=\"text-black-50 text-decoration-none\"
                                   href=\"";
                            // line 83
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EditCandidature", ["candidature" => twig_get_attribute($this->env, $this->source, $context["candidature"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                            echo "\">
                                    editer
                                </a>
                            ";
                        } else {
                            // line 87
                            echo "                                <a class=\"text-black-50 text-decoration-none\"
                                   href=\"";
                            // line 88
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EditCandidatureLight", ["candidature" => twig_get_attribute($this->env, $this->source,                             // line 89
$context["candidature"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                            echo "\">
                                    editer
                                </a>
                            ";
                        }
                        // line 93
                        echo "                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["candidature"], "getStatus", [], "method", false, false, false, 93) == 5)) {
                        // line 94
                        echo "                            voir ma page communitaire
                        ";
                    }
                    // line 96
                    echo "                    </div>
                </div>
                <br>
            ";
                }
                // line 100
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "    ";
        } else {
            // line 102
            echo "        <p>Aucune Candidature en Brouillons</p>
    ";
        }
        // line 104
        echo "    <div class=\"btn\">
        <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("NewCandidatureLight", ["annonce" => 6]);
        // line 107
        echo "\">
            nouvelle candidature Ligth
        </a>
    </div>
    <div class=\"btn button bg-primary\">
        <a class=\"text-dark\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("NewCandidature", ["annonce" => 6]);
        // line 114
        echo "\">nouvelle candidature</a>
    </div>

    <div class=\"btn btn-outline-secondary button\">
        <a class=\"text-dark\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ManageCandidature", ["annonce" => 1]);
        // line 120
        echo "\">manager les candidature</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "    <script type=\"text/javascript\">
        function confirm(idCandidature, status, type) {
            \$.ajax(
                {
                    method: \"POST\",
                    url: \"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MesCandidatures");
        echo "\",
                    data: {
                        \"candidature\": idCandidature,
                        \"status\": status,
                        \"type\": type
                    },
                    dataType: \"json\",
                    success: (response) => {
                        alert(response);
                    },
                    errors: (response) => {
                        alert(response);
                    }
                }
            )
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cand/allCandidatureUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 130,  316 => 125,  306 => 124,  294 => 120,  292 => 118,  286 => 114,  284 => 112,  277 => 107,  275 => 105,  272 => 104,  268 => 102,  265 => 101,  259 => 100,  253 => 96,  249 => 94,  246 => 93,  239 => 89,  238 => 88,  235 => 87,  228 => 83,  224 => 81,  222 => 80,  219 => 79,  217 => 78,  214 => 77,  211 => 76,  204 => 71,  202 => 70,  198 => 69,  191 => 64,  189 => 63,  185 => 62,  180 => 59,  173 => 54,  171 => 53,  167 => 52,  160 => 47,  158 => 46,  154 => 45,  149 => 42,  147 => 41,  144 => 40,  142 => 39,  139 => 38,  136 => 37,  129 => 33,  128 => 32,  125 => 31,  118 => 27,  114 => 25,  111 => 24,  109 => 23,  104 => 21,  97 => 17,  92 => 14,  89 => 13,  84 => 12,  82 => 11,  78 => 10,  72 => 6,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'candidature' %}

{% block body %}
    <h3>Mes Candidatures</h3>
    <hr class=\"m-0 bg-danger w-25 p-0 float-left\">
    <br>
    <h5 class=\"border-bottom border-danger border-bottom w-25\">Vous
        avez {{ total }} candidature</h5>
    {% if candidatures %}
        {% for candidature in candidatures %}
            {% if candidature.getVisibility() %}
                <div class=\"card\">
                    <div class=\"card-title mw-100 bg-secondary\"
                         style=\"min-height: 100px\">
                        {{ candidature.id }}
                    </div>
                    <div class=\"card-body\">
                        <br>
                        {{ candidature.getCreatedAt() | date(\"d/m/Y\") }}

                        {% if candidature.getStatus() == 0 %}
                            {% if candidature.name |split(\"_\")[0] == \"candidature\" %}

                                <a class=\"text-black-50 text-decoration-none\"
                                   href=\"{{ path(\"EditCandidature\", {\"candidature\": candidature.id}) }}\">
                                    editer
                                </a>
                            {% else %}
                                <a class=\"text-black-50 text-decoration-none\"
                                   href=\"{{ path(\"EditCandidatureLight\",
                                       {\"candidature\": candidature.id}) }}\">
                                    editer
                                </a>
                            {% endif %}
                        {% elseif candidature.getStatus() == 1 %}
                            en cours de validation
                        {% elseif candidature.getStatus() == 2 %}
                            valider
                            {% if candidature.name |split(\"_\")[0] == \"candidature\" %}

                                <button type=\"button\" class=\"btn
                            btn-outline-success\"
                                        id=\"ConfirmCandidature_{{ candidature.getId() }}\"
                                        onclick=\"confirm({{ candidature.getId
                                            () }}, 5, 'complete')\">
                                    confirmer ma candidature
                                </button>
                                <button type=\"button\" class=\"btn
                            btn-outline-danger\"
                                        id=\"ConfirmCandidature_{{ candidature.getId() }}\"
                                        onclick=\"confirm({{ candidature.getId
                                            () }}, 0, 'complete')\">
                                    annuler ma candidature
                                </button>

                            {% else %}

                                <button type=\"button\" class=\"btn
                            btn-outline-success\"
                                        id=\"ConfirmCandidature_{{ candidature.getId() }}\"
                                        onclick=\"confirm({{ candidature.getId
                                            () }}, 5, 'light')\">
                                    confirmer ma candidature
                                </button>
                                <button type=\"button\" class=\"btn
                            btn-outline-danger\"
                                        id=\"ConfirmCandidature_{{ candidature.getId() }}\"
                                        onclick=\"confirm({{ candidature.getId
                                            () }}, 0, 'light')\">
                                    annuler ma candidature
                                </button>

                            {% endif %}
                        {% elseif candidature.getStatus() == 3 %}
                            refuser
                        {% elseif candidature.getStatus() == 4 %}
                            incomplet ou mal remplie
                            {% if candidature.name |split(\"_\")[0] == \"candidature\" %}

                                <a class=\"text-black-50 text-decoration-none\"
                                   href=\"{{ path(\"EditCandidature\", {\"candidature\": candidature.id}) }}\">
                                    editer
                                </a>
                            {% else %}
                                <a class=\"text-black-50 text-decoration-none\"
                                   href=\"{{ path(\"EditCandidatureLight\",
                                       {\"candidature\": candidature.id}) }}\">
                                    editer
                                </a>
                            {% endif %}
                        {% elseif candidature.getStatus() == 5 %}
                            voir ma page communitaire
                        {% endif %}
                    </div>
                </div>
                <br>
            {% endif %}
        {% endfor %}
    {% else %}
        <p>Aucune Candidature en Brouillons</p>
    {% endif %}
    <div class=\"btn\">
        <a href=\"{{ path('NewCandidatureLight', {
            annonce: 6,
        }) }}\">
            nouvelle candidature Ligth
        </a>
    </div>
    <div class=\"btn button bg-primary\">
        <a class=\"text-dark\" href=\"{{ path('NewCandidature', {
            annonce: 6,
        }) }}\">nouvelle candidature</a>
    </div>

    <div class=\"btn btn-outline-secondary button\">
        <a class=\"text-dark\" href=\"{{ path(\"ManageCandidature\", {
            \"annonce\": 1
        }) }}\">manager les candidature</a>
    </div>
{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\">
        function confirm(idCandidature, status, type) {
            \$.ajax(
                {
                    method: \"POST\",
                    url: \"{{ path(\"MesCandidatures\") }}\",
                    data: {
                        \"candidature\": idCandidature,
                        \"status\": status,
                        \"type\": type
                    },
                    dataType: \"json\",
                    success: (response) => {
                        alert(response);
                    },
                    errors: (response) => {
                        alert(response);
                    }
                }
            )
        }
    </script>
{% endblock %}", "cand/allCandidatureUser.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/cand/allCandidatureUser.html.twig");
    }
}
