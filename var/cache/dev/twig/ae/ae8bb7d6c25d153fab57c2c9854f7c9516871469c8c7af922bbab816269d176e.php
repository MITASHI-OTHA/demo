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

/* espace/groupe.html.twig */
class __TwigTemplate_d176324defcd93b57b5f542b2a1d935a73fe26efbcd305c9320ffbd036796466 extends \Twig\Template
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
        return "espace/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/groupe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/groupe.html.twig"));

        // line 2
        $context["title"] = "Le groupe";
        // line 1
        $this->parent = $this->loadTemplate("espace/base.html.twig", "espace/groupe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style>
        .img-thumbnail {
            height: 200px;
            overflow: hidden
        }
        .img-thumbnail img {
            width: 100%
        }
        .head-content-card h1 {
            font-size: 17px
        }
        .head-content-card a {
            font-size: 13px;
            color: var(--blue);
        }
        .head-content-card p {
            font-size: 13px;
        }
        .card-member {
            border-bottom: 3px solid red;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
            -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
        }
        .col-md-3 {
            margin-top: 30px
        }
        a:hover {
            text-decoration: none
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("header"));
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 mt-3\">
                <h2> Le groupe </h2>
            </div>
        </div>
        <div class=\"row mt-3\">
                <div class=\"col-md-3  wow fadeInDown\">
                    <div class=\"card-member px-0\">
                        <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                            <img src=\"https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                        </div>
                        <div class=\"d-flex align-content-between flex-wrap px-3\">
                                <div class=\"head-content-card\">
                                        <h1 class=\"mt-2\"> François DUBOIS </h1>
                                        <p class=\"mt-2\">
                                            Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                        </p>
                                </div>
                                <div class=\"foot-content-card mb-2\">
                                    <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre");
        echo "\">
                                        Voir le profil
                                    </a>
                                </div>
                        </div>
                    </div>
                    
                </div>
                ";
        // line 68
        echo "                    <div class=\"col-md-3  wow fadeInDown\">
                        <div class=\"card-member px-0\">
                            <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                <img src=\"https://images.pexels.com/photos/3525908/pexels-photo-3525908.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\">
                            </div>
                            <div class=\"d-flex align-content-between flex-wrap px-3\">
                                    <div class=\"head-content-card\">
                                            <h1 class=\"mt-2\"> Marc BOYER </h1>
                                            <p class=\"mt-2\">
                                                Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                            </p>
                                    </div>
                                    <div class=\"foot-content-card mb-2\">
                                        <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre");
        echo "\">
                                            Voir le profil
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>

                        <div class=\"col-md-3  wow fadeInDown\">
                            <div class=\"card-member px-0\">
                                <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                    <img src=\"https://images.pexels.com/photos/2419574/pexels-photo-2419574.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\">
                                </div>
                                <div class=\"d-flex align-content-between flex-wrap px-3\">
                                        <div class=\"head-content-card\">
                                                <h1 class=\"mt-2\"> Marie CURIE </h1>
                                                <p class=\"mt-2\">
                                                    Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                                </p>
                                        </div>
                                        <div class=\"foot-content-card mb-2\">
                                            <a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre");
        echo "\">
                                                Voir le profil
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-3  wow fadeInDown\">
                            <div class=\"card-member px-0\">
                                <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                    <img src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                </div>
                                <div class=\"d-flex align-content-between flex-wrap px-3\">
                                        <div class=\"head-content-card\">
                                                <h1 class=\"mt-2\"> Jeanne DARC </h1>
                                                <p class=\"mt-2\">
                                                    Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                                </p>
                                        </div>
                                        <div class=\"foot-content-card mb-2\">
                                            <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre");
        echo "\">
                                                Voir le profil
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                ";
        // line 131
        echo "
                ";
        // line 133
        echo "                    <div class=\"col-md-3 wow fadeInDown\">
                    <div class=\"card-member px-0\">
                        <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                            <img src=\"https://images.pexels.com/photos/3936894/pexels-photo-3936894.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\">
                        </div>
                        <div class=\"d-flex align-content-between flex-wrap px-3\">
                                <div class=\"head-content-card\">
                                        <h1 class=\"mt-2\"> ELODIE BEDEL </h1>
                                        <p class=\"mt-2\">
                                            Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                        </p>
                                </div>
                                <div class=\"foot-content-card mb-2\">
                                    <a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre");
        echo "\">
                                        Voir le profil
                                    </a>
                                </div>
                        </div>
                    </div>
                    
                </div>
                ";
        // line 155
        echo "                    <div class=\"col-md-3 wow fadeInDown\">
                        <div class=\"card-member px-0\">
                            <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                            </div>
                            <div class=\"d-flex align-content-between flex-wrap px-3\">
                                    <div class=\"head-content-card\">
                                            <h1 class=\"mt-2\"> Jéremie CHUN </h1>
                                            <p class=\"mt-2\">
                                                Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                            </p>
                                    </div>
                                    <div class=\"foot-content-card mb-2\">
                                        <a href=\"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre");
        echo "\">
                                            Voir le profil
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>

                        <div class=\"col-md-3 wow fadeInDown\">
                            <div class=\"card-member px-0\">
                                <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                    <img src=\"https://images.pexels.com/photos/4687219/pexels-photo-4687219.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                </div>
                                <div class=\"d-flex align-content-between flex-wrap px-3\">
                                        <div class=\"head-content-card\">
                                                <h1 class=\"mt-2\"> Marie DO </h1>
                                                <p class=\"mt-2\">
                                                    Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                                </p>
                                        </div>
                                        <div class=\"foot-content-card mb-2\">
                                           <a href=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre");
        echo "\">
                                                Voir le profil
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-3 wow fadeInDown\">
                            <div class=\"card-member px-0\">
                                <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                    <img src=\"https://images.pexels.com/photos/2380794/pexels-photo-2380794.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\">
                                </div>
                                <div class=\"d-flex align-content-between flex-wrap px-3\">
                                        <div class=\"head-content-card\">
                                                <h1 class=\"mt-2\"> Fontaine GAILLAR </h1>
                                                <p class=\"mt-2\">
                                                    Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                                </p>
                                        </div>
                                        <div class=\"foot-content-card mb-2\">
                                            <a href=\"";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre");
        echo "\">
                                                Voir le profil
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                ";
        // line 218
        echo "                <div class=\"col-md-12 mt-5 d-flex justify-content-center\">
                    <nav aria-label=\"...\">
                        <ul class=\"pagination\">
                            <li class=\"page-item disabled\">
                            <span class=\"page-link\">Precèdent</span>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item active\">
                            <span class=\"page-link\">
                                2
                                <span class=\"sr-only\">(current)</span>
                            </span>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">6</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">7</a></li>
                            <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">Suivant</a>
                            </li>
                        </ul>
                    </nav>

                </div>
                ";
        // line 244
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 247
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 248
        echo "    <script>
      
            \$(function() {
                wow = new WOW(
                    {
                        animateClass: 'animated',
                        callback:     function(box) {
                        
                        }
                    }
                    );
                wow.init();
            })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace/groupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 248,  374 => 247,  362 => 244,  335 => 218,  325 => 210,  301 => 189,  277 => 168,  262 => 155,  251 => 146,  236 => 133,  233 => 131,  223 => 123,  199 => 102,  175 => 81,  160 => 68,  149 => 59,  125 => 38,  115 => 37,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace/base.html.twig' %}
{% set title = 'Le groupe' %}
{% block stylesheets %}
    <style>
        .img-thumbnail {
            height: 200px;
            overflow: hidden
        }
        .img-thumbnail img {
            width: 100%
        }
        .head-content-card h1 {
            font-size: 17px
        }
        .head-content-card a {
            font-size: 13px;
            color: var(--blue);
        }
        .head-content-card p {
            font-size: 13px;
        }
        .card-member {
            border-bottom: 3px solid red;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
            -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
        }
        .col-md-3 {
            margin-top: 30px
        }
        a:hover {
            text-decoration: none
        }
    </style>
{% endblock %}
{% block body %}
{{ render(path(\"header\")) }}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 mt-3\">
                <h2> Le groupe </h2>
            </div>
        </div>
        <div class=\"row mt-3\">
                <div class=\"col-md-3  wow fadeInDown\">
                    <div class=\"card-member px-0\">
                        <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                            <img src=\"https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                        </div>
                        <div class=\"d-flex align-content-between flex-wrap px-3\">
                                <div class=\"head-content-card\">
                                        <h1 class=\"mt-2\"> François DUBOIS </h1>
                                        <p class=\"mt-2\">
                                            Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                        </p>
                                </div>
                                <div class=\"foot-content-card mb-2\">
                                    <a href=\"{{ path('membre') }}\">
                                        Voir le profil
                                    </a>
                                </div>
                        </div>
                    </div>
                    
                </div>
                {# Itération #}
                    <div class=\"col-md-3  wow fadeInDown\">
                        <div class=\"card-member px-0\">
                            <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                <img src=\"https://images.pexels.com/photos/3525908/pexels-photo-3525908.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\">
                            </div>
                            <div class=\"d-flex align-content-between flex-wrap px-3\">
                                    <div class=\"head-content-card\">
                                            <h1 class=\"mt-2\"> Marc BOYER </h1>
                                            <p class=\"mt-2\">
                                                Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                            </p>
                                    </div>
                                    <div class=\"foot-content-card mb-2\">
                                        <a href=\"{{ path('membre') }}\">
                                            Voir le profil
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>

                        <div class=\"col-md-3  wow fadeInDown\">
                            <div class=\"card-member px-0\">
                                <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                    <img src=\"https://images.pexels.com/photos/2419574/pexels-photo-2419574.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\">
                                </div>
                                <div class=\"d-flex align-content-between flex-wrap px-3\">
                                        <div class=\"head-content-card\">
                                                <h1 class=\"mt-2\"> Marie CURIE </h1>
                                                <p class=\"mt-2\">
                                                    Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                                </p>
                                        </div>
                                        <div class=\"foot-content-card mb-2\">
                                            <a href=\"{{ path('membre') }}\">
                                                Voir le profil
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-3  wow fadeInDown\">
                            <div class=\"card-member px-0\">
                                <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                    <img src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                </div>
                                <div class=\"d-flex align-content-between flex-wrap px-3\">
                                        <div class=\"head-content-card\">
                                                <h1 class=\"mt-2\"> Jeanne DARC </h1>
                                                <p class=\"mt-2\">
                                                    Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                                </p>
                                        </div>
                                        <div class=\"foot-content-card mb-2\">
                                            <a href=\"{{ path('membre') }}\">
                                                Voir le profil
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                {# fin #}

                {# itérations (2ème ligne) #}
                    <div class=\"col-md-3 wow fadeInDown\">
                    <div class=\"card-member px-0\">
                        <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                            <img src=\"https://images.pexels.com/photos/3936894/pexels-photo-3936894.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\">
                        </div>
                        <div class=\"d-flex align-content-between flex-wrap px-3\">
                                <div class=\"head-content-card\">
                                        <h1 class=\"mt-2\"> ELODIE BEDEL </h1>
                                        <p class=\"mt-2\">
                                            Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                        </p>
                                </div>
                                <div class=\"foot-content-card mb-2\">
                                    <a href=\"{{ path('membre') }}\">
                                        Voir le profil
                                    </a>
                                </div>
                        </div>
                    </div>
                    
                </div>
                {# Itération #}
                    <div class=\"col-md-3 wow fadeInDown\">
                        <div class=\"card-member px-0\">
                            <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                <img src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                            </div>
                            <div class=\"d-flex align-content-between flex-wrap px-3\">
                                    <div class=\"head-content-card\">
                                            <h1 class=\"mt-2\"> Jéremie CHUN </h1>
                                            <p class=\"mt-2\">
                                                Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                            </p>
                                    </div>
                                    <div class=\"foot-content-card mb-2\">
                                        <a href=\"{{ path('membre') }}\">
                                            Voir le profil
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </div>

                        <div class=\"col-md-3 wow fadeInDown\">
                            <div class=\"card-member px-0\">
                                <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                    <img src=\"https://images.pexels.com/photos/4687219/pexels-photo-4687219.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                </div>
                                <div class=\"d-flex align-content-between flex-wrap px-3\">
                                        <div class=\"head-content-card\">
                                                <h1 class=\"mt-2\"> Marie DO </h1>
                                                <p class=\"mt-2\">
                                                    Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                                </p>
                                        </div>
                                        <div class=\"foot-content-card mb-2\">
                                           <a href=\"{{ path('membre') }}\">
                                                Voir le profil
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-3 wow fadeInDown\">
                            <div class=\"card-member px-0\">
                                <div class=\"img-thumbnail d-flex justify-content-center align-items-center p-0\">
                                    <img src=\"https://images.pexels.com/photos/2380794/pexels-photo-2380794.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\">
                                </div>
                                <div class=\"d-flex align-content-between flex-wrap px-3\">
                                        <div class=\"head-content-card\">
                                                <h1 class=\"mt-2\"> Fontaine GAILLAR </h1>
                                                <p class=\"mt-2\">
                                                    Est aliqua ipsum consectetur do ex do. Consequat adipisicing nostrud eiusmod ipsum dolore sit fugiat. Magna est sint veniam fugiat labore Lorem enim ex id qui.
                                                </p>
                                        </div>
                                        <div class=\"foot-content-card mb-2\">
                                            <a href=\"{{ path('membre') }}\">
                                                Voir le profil
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                {# fin #}
                <div class=\"col-md-12 mt-5 d-flex justify-content-center\">
                    <nav aria-label=\"...\">
                        <ul class=\"pagination\">
                            <li class=\"page-item disabled\">
                            <span class=\"page-link\">Precèdent</span>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item active\">
                            <span class=\"page-link\">
                                2
                                <span class=\"sr-only\">(current)</span>
                            </span>
                            </li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">6</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">7</a></li>
                            <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\">Suivant</a>
                            </li>
                        </ul>
                    </nav>

                </div>
                {#  #}
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script>
      
            \$(function() {
                wow = new WOW(
                    {
                        animateClass: 'animated',
                        callback:     function(box) {
                        
                        }
                    }
                    );
                wow.init();
            })
    </script>
{% endblock %}", "espace/groupe.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/groupe.html.twig");
    }
}
