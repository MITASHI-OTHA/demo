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

/* cand/ManageCandidature.html.twig */
class __TwigTemplate_4b8b3c2d477cb9b52522c8b299c05ef0a55fa59fa7238564de1546223ed3e2a5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cand/ManageCandidature.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cand/ManageCandidature.html.twig"));

        // line 3
        $context["title"] = "candidature";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cand/ManageCandidature.html.twig", 1);
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
        echo "    <h3>Tous les Candidatures</h3>
    ";
        // line 7
        if ((isset($context["allcandidatures"]) || array_key_exists("allcandidatures", $context) ? $context["allcandidatures"] : (function () { throw new RuntimeError('Variable "allcandidatures" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allcandidatures"]) || array_key_exists("allcandidatures", $context) ? $context["allcandidatures"] : (function () { throw new RuntimeError('Variable "allcandidatures" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
                // line 9
                echo "            <div class=\"card\">
                <p>";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getName", [], "method", false, false, false, 10), "html", null, true);
                echo "</p>
                ";
                // line 11
                if ((twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getName", [], "method", false, false, false, 11), "_"), 0, [], "array", false, false, false, 11) == "candidaturelight")) {
                    // line 12
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["candidature"], "getStatus", [], "method", false, false, false, 12) != 4)) {
                        // line 13
                        echo "                        <button type=\"button\" class=\"btn
                    btn-outline-success w-25 m-2 float-right\"
                                name=\"validate\" onclick=\"changeCandidatureStatus(2,
                        ";
                        // line 16
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 16), "html", null, true);
                        echo ", 'light')\">Valider
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-danger w-25
                        m-2 float-right\" name=\"validate\"
                                onclick=\"get_response_candidature(3, ";
                        // line 20
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 20), "html", null, true);
                        echo ", 'light')\">
                            refuser
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-info w-25
                        m-2 float-right\"
                                name=\"validate\" onclick=\"get_response_candidature(4,
                        ";
                        // line 26
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 26), "html", null, true);
                        echo ", 'light')\">
                            a revoir
                        </button>

                        <button type=\"button\" class=\"btn btn-outline-info w-25
                        m-2 float-right\" name=\"validate\">
                            <a href=\"";
                        // line 32
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GeneratePdfCandidature", ["candidature" => twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 32), "annonce" => twig_get_attribute($this->env, $this->source,                         // line 33
$context["candidature"], "getAd", [], "method", false, false, false, 33)]), "html", null, true);
                        echo "\"> voir la candidature</a>
                        </button>
                    ";
                    }
                    // line 36
                    echo "
                ";
                } else {
                    // line 38
                    echo "
                    ";
                    // line 39
                    if ((twig_get_attribute($this->env, $this->source, $context["candidature"], "getStatus", [], "method", false, false, false, 39) != 4)) {
                        // line 40
                        echo "
                        <button type=\"button\" class=\"btn btn-outline-success w-25 m-2 float-right\"
                                name=\"validate\" onclick=\"changeCandidatureStatus(2,
                        ";
                        // line 43
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 43), "html", null, true);
                        echo ", 'complet')\">
                            Valider
                        </button>

";
                        // line 52
                        echo "                        <button type=\"button\" onclick=\"get_response_candidature(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 52), "html", null, true);
                        echo ", 3, 'complet')\">refuser</button>

                        <button type=\"button\" class=\"btn btn-outline-info w-25
                        m-2 float-right\"
                                name=\"validate\" onclick=\"get_response_candidature(4,
                        ";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidature"], "getId", [], "method", false, false, false, 57), "html", null, true);
                        echo ", 'complet')\">
                            a revoir
                        </button>

                        <button type=\"button\" class=\"btn btn-outline-info w-25
                        m-2 float-right\" name=\"validate\">
                            <a href=\"";
                        // line 63
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GeneratePdfCandidature", ["annonce" => (isset($context["id_annonce"]) || array_key_exists("id_annonce", $context) ? $context["id_annonce"] : (function () { throw new RuntimeError('Variable "id_annonce" does not exist.', 63, $this->source); })()), "candidature" => twig_get_attribute($this->env, $this->source,                         // line 64
$context["candidature"], "getId", [], "method", false, false, false, 64)]), "html", null, true);
                        echo "\"> voir la candidature</a>
                        </button>
                    ";
                    }
                    // line 67
                    echo "                ";
                }
                // line 68
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        <div id=\"result\"></div>
    ";
        } else {
            // line 72
            echo "        pas de candidature pour cette annonce
    ";
        }
        // line 74
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "        <script>
            function changeCandidatureStatus(value_status, id_candidature,
                                             type) {
                \$.ajax(
                    {
                        method: \"POST\",
                        url: \"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ManageCandidature", ["annonce" =>         // line 82
(isset($context["id_annonce"]) || array_key_exists("id_annonce", $context) ? $context["id_annonce"] : (function () { throw new RuntimeError('Variable "id_annonce" does not exist.', 82, $this->source); })())]), "html", null, true);
        // line 83
        echo "\",
                        data: {
                            \"status\": value_status,
                            \"candidature\": id_candidature,
                            \"type\": type,
                        },
                        dataType: \"json\",
                        success: (response) => {
                            console.log(response)
                        }
                    }
                )
            }

            function get_response_candidature(id_candidature, status, \$type) {
                \$.ajax({
                        method: \"GET\",
                        url: \"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ReponseCandidature", ["annonce" =>         // line 101
(isset($context["id_annonce"]) || array_key_exists("id_annonce", $context) ? $context["id_annonce"] : (function () { throw new RuntimeError('Variable "id_annonce" does not exist.', 101, $this->source); })())]), "html", null, true);
        // line 102
        echo "\",
                        data: {
                            \"id_candidature\": id_candidature,
                            \"status\": status,
                            \"type\": \$type
                        },
                        success: (response) => {
                            \$(\"#result\").append(response[0]);
                        }
                    }
                )
            }

            function send_reponseCandidature(id_candidature, status, \$type) {
                \$.ajax({
                        method: \"POST\",
                        url: \"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ReponseCandidature", ["annonce" =>         // line 119
(isset($context["id_annonce"]) || array_key_exists("id_annonce", $context) ? $context["id_annonce"] : (function () { throw new RuntimeError('Variable "id_annonce" does not exist.', 119, $this->source); })())]), "html", null, true);
        // line 120
        echo "\",
                        data: {
                            \"Contents\": document.forms[\"response_message_candidature\"][\"response_message_candidature_Contents\"].value,
                            \"LogementActuel\": document.forms[\"response_message_candidature\"][\"response_message_candidature_LogementActuel\"].value,
                            \"LogementDesire\": document.forms[\"response_message_candidature\"][\"response_message_candidature_LogementDesire\"].value,
                            \"Acquereur\": document.forms[\"response_message_candidature\"][\"response_message_candidature_Acquereur\"].value,
                            \"Credits\": document.forms[\"response_message_candidature\"][\"response_message_candidature_Credits\"].value,
                            \"Motivation\": document.forms[\"response_message_candidature\"][\"response_message_candidature_Motivation\"].value,
                            \"id_candidature\": id_candidature,
                            \"status\": status,
                            \"type\": \$type
                        },
                        dataType: \"json\",
                        success: (response) => {
                        }
                    }
                )
                //     console.log(\$(\"#form\").serialize())
                return false;
            }
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cand/ManageCandidature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 120,  267 => 119,  266 => 118,  248 => 102,  246 => 101,  245 => 100,  226 => 83,  224 => 82,  223 => 81,  215 => 75,  195 => 74,  191 => 72,  187 => 70,  180 => 68,  177 => 67,  171 => 64,  170 => 63,  161 => 57,  152 => 52,  145 => 43,  140 => 40,  138 => 39,  135 => 38,  131 => 36,  125 => 33,  124 => 32,  115 => 26,  106 => 20,  99 => 16,  94 => 13,  91 => 12,  89 => 11,  85 => 10,  82 => 9,  77 => 8,  75 => 7,  72 => 6,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'candidature' %}

{% block body %}
    <h3>Tous les Candidatures</h3>
    {% if allcandidatures %}
        {% for candidature in allcandidatures %}
            <div class=\"card\">
                <p>{{ candidature.getName() }}</p>
                {% if candidature.getName()|split('_')[0] == \"candidaturelight\" %}
                    {% if candidature.getStatus() != 4 %}
                        <button type=\"button\" class=\"btn
                    btn-outline-success w-25 m-2 float-right\"
                                name=\"validate\" onclick=\"changeCandidatureStatus(2,
                        {{ candidature.getId() }}, 'light')\">Valider
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-danger w-25
                        m-2 float-right\" name=\"validate\"
                                onclick=\"get_response_candidature(3, {{ candidature.getId() }}, 'light')\">
                            refuser
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-info w-25
                        m-2 float-right\"
                                name=\"validate\" onclick=\"get_response_candidature(4,
                        {{ candidature.getId() }}, 'light')\">
                            a revoir
                        </button>

                        <button type=\"button\" class=\"btn btn-outline-info w-25
                        m-2 float-right\" name=\"validate\">
                            <a href=\"{{ path(\"GeneratePdfCandidature\", {\"candidature\": candidature.getId(),
                                \"annonce\": candidature.getAd()}) }}\"> voir la candidature</a>
                        </button>
                    {% endif %}

                {% else %}

                    {% if candidature.getStatus() != 4 %}

                        <button type=\"button\" class=\"btn btn-outline-success w-25 m-2 float-right\"
                                name=\"validate\" onclick=\"changeCandidatureStatus(2,
                        {{ candidature.getId() }}, 'complet')\">
                            Valider
                        </button>

{#                        <button type=\"button\" class=\"btn btn-outline-danger w-25#}
{#                        m-2 float-right\" name=\"validate\" onclick=\"changeCandidatureStatus(3, {{#}
{#                                candidature.getId() }}, 'complete')\">#}
{#                            refuser#}
{#                        </button>#}
                        <button type=\"button\" onclick=\"get_response_candidature({{ candidature.getId()  }}, 3, 'complet')\">refuser</button>

                        <button type=\"button\" class=\"btn btn-outline-info w-25
                        m-2 float-right\"
                                name=\"validate\" onclick=\"get_response_candidature(4,
                        {{ candidature.getId() }}, 'complet')\">
                            a revoir
                        </button>

                        <button type=\"button\" class=\"btn btn-outline-info w-25
                        m-2 float-right\" name=\"validate\">
                            <a href=\"{{ path(\"GeneratePdfCandidature\", {annonce: id_annonce,
                                candidature: candidature.getId()}) }}\"> voir la candidature</a>
                        </button>
                    {% endif %}
                {% endif %}
            </div>
        {% endfor %}
        <div id=\"result\"></div>
    {% else %}
        pas de candidature pour cette annonce
    {% endif %}
    {% block javascripts %}
        <script>
            function changeCandidatureStatus(value_status, id_candidature,
                                             type) {
                \$.ajax(
                    {
                        method: \"POST\",
                        url: \"{{ path(\"ManageCandidature\", {
                            \"annonce\" : id_annonce
                        }) }}\",
                        data: {
                            \"status\": value_status,
                            \"candidature\": id_candidature,
                            \"type\": type,
                        },
                        dataType: \"json\",
                        success: (response) => {
                            console.log(response)
                        }
                    }
                )
            }

            function get_response_candidature(id_candidature, status, \$type) {
                \$.ajax({
                        method: \"GET\",
                        url: \"{{ path(\"ReponseCandidature\", {
                            \"annonce\" : id_annonce
                        }) }}\",
                        data: {
                            \"id_candidature\": id_candidature,
                            \"status\": status,
                            \"type\": \$type
                        },
                        success: (response) => {
                            \$(\"#result\").append(response[0]);
                        }
                    }
                )
            }

            function send_reponseCandidature(id_candidature, status, \$type) {
                \$.ajax({
                        method: \"POST\",
                        url: \"{{ path(\"ReponseCandidature\", {
                            \"annonce\" : id_annonce
                        }) }}\",
                        data: {
                            \"Contents\": document.forms[\"response_message_candidature\"][\"response_message_candidature_Contents\"].value,
                            \"LogementActuel\": document.forms[\"response_message_candidature\"][\"response_message_candidature_LogementActuel\"].value,
                            \"LogementDesire\": document.forms[\"response_message_candidature\"][\"response_message_candidature_LogementDesire\"].value,
                            \"Acquereur\": document.forms[\"response_message_candidature\"][\"response_message_candidature_Acquereur\"].value,
                            \"Credits\": document.forms[\"response_message_candidature\"][\"response_message_candidature_Credits\"].value,
                            \"Motivation\": document.forms[\"response_message_candidature\"][\"response_message_candidature_Motivation\"].value,
                            \"id_candidature\": id_candidature,
                            \"status\": status,
                            \"type\": \$type
                        },
                        dataType: \"json\",
                        success: (response) => {
                        }
                    }
                )
                //     console.log(\$(\"#form\").serialize())
                return false;
            }
        </script>
    {% endblock %}
{% endblock %}
", "cand/ManageCandidature.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/cand/ManageCandidature.html.twig");
    }
}
