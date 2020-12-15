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

/* espace/index.html.twig */
class __TwigTemplate_80b69e09b4b9a9af279064d8cea1b47e07bca7e65c049ef0e70a6274d18e9ee3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/index.html.twig"));

        // line 2
        $context["title"] = "Espace collaboratif";
        // line 1
        $this->parent = $this->loadTemplate("espace/base.html.twig", "espace/index.html.twig", 1);
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
        echo "        <style>
            
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("header"));
        echo "
<section class=\"mb-5\">
        <div class=\"container\">
                    <div class=\"row mt-3 head-silder position-relative wow fadeInDown\">
                            <div class=\"col-md-3 py-3\">
                                    <div class=\"card-list d-flex align-content-between flex-wrap\">
                                        <div class=\"d-grid\">
                                            <h1> 11.02.2020 </h1>
                                            <h2> Amet minim </h2>
                                            <h3> deserunt ullamco </h3>
                                            <p>
                                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                            </p>
                                        </div>
                                        <div>
                                        <h2 class=\"foot\"> Amet minim </h2>
                                        </div>
                                    </div>
                            </div>
                            <div class=\"col-md-3 py-3\">
                                    <div class=\"card-list d-flex align-content-between flex-wrap\">
                                        <div class=\"d-grid\">
                                            <h1> 11.02.2020 </h1>
                                            <h2> Amet minim </h2>
                                            <h3> deserunt ullamco </h3>
                                            <p>
                                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                            </p>
                                        </div>
                                        <div>
                                        <h2 class=\"foot\"> Amet minim </h2>
                                        </div>
                                    </div>
                            </div>
                            <div class=\"col-md-3 py-3\">
                                    <div class=\"card-list d-flex align-content-between flex-wrap\">
                                        <div class=\"d-grid\">
                                            <h1> 11.02.2020 </h1>
                                            <h2> Amet minim </h2>
                                            <h3> deserunt ullamco </h3>
                                            <p>
                                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                            </p>
                                        </div>
                                        <div>
                                        <h2 class=\"foot\"> Amet minim </h2>
                                        </div>
                                    </div>
                            </div>
                            <div class=\"col-md-3 py-3\">
                                    <div class=\"card-list d-flex align-content-between flex-wrap\">
                                        <div class=\"d-grid\">
                                            <h1> 11.02.2020 </h1>
                                            <h2> Amet minim </h2>
                                            <h3> deserunt ullamco </h3>
                                            <p>
                                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                            </p>
                                        </div>
                                        <div>
                                        <h2 class=\"foot\"> Amet minim </h2>
                                        </div>
                                    </div>
                            </div>
                            <div class=\"parent-btn-next position-absolute d-flex justify-content-center align-items-center mr-3\">
                                    <div class=\"d-flex justify-content-center align-items-center\">
                                            <i class=\"fas fa-chevron-right\"></i>
                                    </div>
                            </div>
                    </div>
                    <div class=\"row mt-3\">
                            <div class=\"col-md-12 ml-0 pl-0\">
                                <button class=\"btn btnSubmit d-flex\"> Amet minim </button>
                            </div>
                            <div class=\"col-md-12 mt-3\">
                                <div class=\"row d-flex justify-content-center\" style=\"margin-left: 15em\">
                                    <div class=\"col-md-6 cards-content\">

                                    </div>
                                    <div class=\"col-md-6 wow section--blue wow fadeInDown\" data-wow-delay=\"1s\">
                                        <h2> Mollit quis veniam </h2>
                                        <p style=\"font-size: 12px\">
                                                Mollit quis veniam nulla eu nostrud excepteur nulla consequat nisi culpa occaecat amet. Eiusmod magna est ipsum exercitation labore ipsum eu ad irure. Deserunt Lorem sit veniam adipisicing esse. Anim elit quis aute esse deserunt consectetur consectetur duis in ullamco in pariatur sit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 mt-3\">
                                    <div class=\"row position-relative\">
                                            <div class=\"col-md-6  wow section--blue wow fadeInDown\" data-wow-delay=\"1s\">
                                                <h2> Mollit quis veniam </h2>
                                                <p style=\"font-size: 12px\">
                                                        Mollit quis veniam nulla eu nostrud excepteur nulla consequat nisi culpa occaecat amet. Eiusmod magna est ipsum exercitation labore ipsum eu ad irure. Deserunt Lorem sit veniam adipisicing esse. Anim elit quis aute esse deserunt consectetur consectetur duis in ullamco in pariatur sit. Commodo laborum enim elit ea minim fugiat. Aliqua aliqua incididunt minim deserunt et commodo id et tempor velit exercitation Lorem duis qui.
                                                </p>
                                            </div>
                                            <div class=\"col-md-4 seconds position-relative\">
                                                    <div>

                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
                    <div class=\"row mt-5 foo\">
                            <div class=\"col-md-4 wow fadeInDown\" data-wow-delay=\"1s\">
                                <div class=\"cards-footer\"></div>
                                <h2 class=\"mt-2\"> Mollit quis </h2>
                            </div>
                            <div class=\"col-md-4 wow fadeInDown\" data-wow-delay=\"2s\">
                                <div class=\"cards-footer\"></div>
                                <h2 class=\"mt-2\"> nostrud excepteur </h2>
                            </div>
                            <div class=\"col-md-4 wow fadeInDown\" data-wow-delay=\"3s\">
                                <div class=\"cards-footer\"></div>
                                <h2 class=\"mt-2\"> nostrud excepteur </h2>
                            </div>
                    </div>
            </div>
</section>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
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
        return "espace/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 132,  228 => 131,  96 => 9,  86 => 8,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace/base.html.twig' %}
{% set title = 'Espace collaboratif' %}
    {% block stylesheets %}
        <style>
            
        </style>
    {% endblock %}
{% block body %}
    {{ render(path(\"header\")) }}
<section class=\"mb-5\">
        <div class=\"container\">
                    <div class=\"row mt-3 head-silder position-relative wow fadeInDown\">
                            <div class=\"col-md-3 py-3\">
                                    <div class=\"card-list d-flex align-content-between flex-wrap\">
                                        <div class=\"d-grid\">
                                            <h1> 11.02.2020 </h1>
                                            <h2> Amet minim </h2>
                                            <h3> deserunt ullamco </h3>
                                            <p>
                                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                            </p>
                                        </div>
                                        <div>
                                        <h2 class=\"foot\"> Amet minim </h2>
                                        </div>
                                    </div>
                            </div>
                            <div class=\"col-md-3 py-3\">
                                    <div class=\"card-list d-flex align-content-between flex-wrap\">
                                        <div class=\"d-grid\">
                                            <h1> 11.02.2020 </h1>
                                            <h2> Amet minim </h2>
                                            <h3> deserunt ullamco </h3>
                                            <p>
                                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                            </p>
                                        </div>
                                        <div>
                                        <h2 class=\"foot\"> Amet minim </h2>
                                        </div>
                                    </div>
                            </div>
                            <div class=\"col-md-3 py-3\">
                                    <div class=\"card-list d-flex align-content-between flex-wrap\">
                                        <div class=\"d-grid\">
                                            <h1> 11.02.2020 </h1>
                                            <h2> Amet minim </h2>
                                            <h3> deserunt ullamco </h3>
                                            <p>
                                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                            </p>
                                        </div>
                                        <div>
                                        <h2 class=\"foot\"> Amet minim </h2>
                                        </div>
                                    </div>
                            </div>
                            <div class=\"col-md-3 py-3\">
                                    <div class=\"card-list d-flex align-content-between flex-wrap\">
                                        <div class=\"d-grid\">
                                            <h1> 11.02.2020 </h1>
                                            <h2> Amet minim </h2>
                                            <h3> deserunt ullamco </h3>
                                            <p>
                                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                                            </p>
                                        </div>
                                        <div>
                                        <h2 class=\"foot\"> Amet minim </h2>
                                        </div>
                                    </div>
                            </div>
                            <div class=\"parent-btn-next position-absolute d-flex justify-content-center align-items-center mr-3\">
                                    <div class=\"d-flex justify-content-center align-items-center\">
                                            <i class=\"fas fa-chevron-right\"></i>
                                    </div>
                            </div>
                    </div>
                    <div class=\"row mt-3\">
                            <div class=\"col-md-12 ml-0 pl-0\">
                                <button class=\"btn btnSubmit d-flex\"> Amet minim </button>
                            </div>
                            <div class=\"col-md-12 mt-3\">
                                <div class=\"row d-flex justify-content-center\" style=\"margin-left: 15em\">
                                    <div class=\"col-md-6 cards-content\">

                                    </div>
                                    <div class=\"col-md-6 wow section--blue wow fadeInDown\" data-wow-delay=\"1s\">
                                        <h2> Mollit quis veniam </h2>
                                        <p style=\"font-size: 12px\">
                                                Mollit quis veniam nulla eu nostrud excepteur nulla consequat nisi culpa occaecat amet. Eiusmod magna est ipsum exercitation labore ipsum eu ad irure. Deserunt Lorem sit veniam adipisicing esse. Anim elit quis aute esse deserunt consectetur consectetur duis in ullamco in pariatur sit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-12 mt-3\">
                                    <div class=\"row position-relative\">
                                            <div class=\"col-md-6  wow section--blue wow fadeInDown\" data-wow-delay=\"1s\">
                                                <h2> Mollit quis veniam </h2>
                                                <p style=\"font-size: 12px\">
                                                        Mollit quis veniam nulla eu nostrud excepteur nulla consequat nisi culpa occaecat amet. Eiusmod magna est ipsum exercitation labore ipsum eu ad irure. Deserunt Lorem sit veniam adipisicing esse. Anim elit quis aute esse deserunt consectetur consectetur duis in ullamco in pariatur sit. Commodo laborum enim elit ea minim fugiat. Aliqua aliqua incididunt minim deserunt et commodo id et tempor velit exercitation Lorem duis qui.
                                                </p>
                                            </div>
                                            <div class=\"col-md-4 seconds position-relative\">
                                                    <div>

                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
                    <div class=\"row mt-5 foo\">
                            <div class=\"col-md-4 wow fadeInDown\" data-wow-delay=\"1s\">
                                <div class=\"cards-footer\"></div>
                                <h2 class=\"mt-2\"> Mollit quis </h2>
                            </div>
                            <div class=\"col-md-4 wow fadeInDown\" data-wow-delay=\"2s\">
                                <div class=\"cards-footer\"></div>
                                <h2 class=\"mt-2\"> nostrud excepteur </h2>
                            </div>
                            <div class=\"col-md-4 wow fadeInDown\" data-wow-delay=\"3s\">
                                <div class=\"cards-footer\"></div>
                                <h2 class=\"mt-2\"> nostrud excepteur </h2>
                            </div>
                    </div>
            </div>
</section>
    
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
{% endblock %}", "espace/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/index.html.twig");
    }
}
