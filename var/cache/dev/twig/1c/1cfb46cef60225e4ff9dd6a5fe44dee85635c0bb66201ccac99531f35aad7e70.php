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

/* security/login.html.twig */
class __TwigTemplate_2a0c62f3e13b7740406a9ddd88d891e5bfd83a50037822d3f73562b1a530e38d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 2
        $context["title"] = "Connexion";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        .app__flashes__success {
            position: relative;
            width: 100%;
            top: 0;
            margin: 0 0 1.5em 0;
        }
        .app__flashes__error {
            position: relative;
            width: 100%;
            top: 0;
            margin: 0 0 1.5em 0;
        }
        .btnSubmitOutline {
            padding: 0.375rem 0.75rem;
        }
        a {
           color: rgb(55, 57, 66);
        }
    </style>
    <section class=\"mt-5 mb-5\">
        <div class=\"row justify-content-md-center\">
                <div class=\"col-lg-5 col-md-7\">
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 30
            echo "                        <div class=\"app__flashes__success\">
                            ";
            // line 31
            echo $context["alerte"];
            echo "
                            <div class=\"app__flashes__close\"></div>
                        </div><br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            
                    ";
        // line 36
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "                        <div class=\"app__flashes__error\">
                            <strong>Désolé ";
            // line 38
            (((null != (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 38, $this->source); })()))) ? (print (twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 38, $this->source); })()), "html", null, true))) : (print ("")));
            echo " !</strong> <br>
                            Erreur sur les identifiants
                            <div class=\"app__flashes__close\"></div>
                        </div>
                    ";
        }
        // line 43
        echo "                    <div class=\"text-center\">
                        <h2 style=\"font-weight: bold;color: #54c0a7\">WELCOOOM</h2>
                        ";
        // line 48
        echo "                    </div><br>
                    <h4 class=\"text-center title\">Connexion</h4>
                    <hr class=\"mt-4 mb-4\">
            
                    <form name=\"login\" action=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
            
                        <div class=\"form-group\">
                            <label for=\"username\">Adresse email</label>
                            <input type=\"email\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                        </div>
            
                        <div class=\"form-group\">
                            <label for=\"password\">Mot de passe</label>
                            <div class=\"position-relative\">
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\">
                                <button type=\"button\" class=\"btn m-0 p-0\" id=\"mdp__login__show\">
                                    <i class=\"fas fa-eye\"></i>
                                </button>
                                <button type=\"button\" class=\"btn m-0 p-0\" id=\"mdp__login__hide\">
                                    <i class=\"fas fa-eye-slash\"></i>
                                </button>
                            </div>
                        </div>
            
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                        <div class=\"text-right mb-3\">
                            <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_email");
        echo "\">Vous avez oublié votre mot de passe ?</a>
                        </div>
            
                        <div class=\"form-group\">
                            <button id=\"user__login__btn\" type=\"submit\" class=\"btn btnSubmit col-12 mt-2\">Se connecter</button>
                        </div>
                    </form>
            
                    <h6 class=\"text-center font-weight-bolder mt-4\">Tu n’as pas encore de compte Welcooom ?<br><br>
                        <a class=\"btn w-100 btnSubmitOutline\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\">Inscris-toi</a>
                    </h6>
            
                    <div class=\"text-center mt-4\">
                        <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Retour vers Welcooom</a>
                    </div>
                </div>
            </div>
    </section>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "    <script>
        \$(function() 
        {
            function showHideMdp() 
            {
                \$('#mdp__login__show').click(function() 
                {
                    \$(this).siblings('#inputPassword').attr('type', 'text');
                    \$(this).fadeOut();
                    \$('#mdp__login__hide').fadeIn();
                });

                \$('#mdp__login__hide').click(function() 
                {
                    \$(this).siblings('#inputPassword').attr('type', 'password');
                    \$(this).fadeOut();
                    \$('#mdp__login__show').fadeIn();
                });
            }
            showHideMdp();

            function login() 
            {
                \$('#user__login__btn').click(function(event) 
                {
                    event.preventDefault();

                    \$.ajax(
                    {
                        method: 'POST',
                        url: \"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\",
                        data: \$('form[name=\"login\"]').serialize(),
                        dataType: 'json',
                        headers: { 'X-Requested-With': 'XMLHttpRequest' },
                        success: (response) => 
                        {
                            
                            if(response.hasError !== true) 
                            {
                                window.location.href = \"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\";
                            } 
                            else 
                            {
                                \$('form[name=\"login\"]').before('<div class=\"app__flashes__error\"><strong> Désolé '+ response.full_name +' !</strong><br>Erreur sur les identifiants<div class=\"app__flashes__close\"></div></div>');

                                \$('.app__flashes__success').click(() => 
                                {
                                    \$('.app__flashes__success').remove();
                                });
                
                                \$('.app__flashes__error').click(() => 
                                {
                                    \$('.app__flashes__error').remove();
                                });
                                
                                setTimeout(() => 
                                {
                                    \$('.app__flashes__success').hide('slow');
                                    \$('.app__flashes__error').hide('slow');
                                }, 10000);
                            }
                        },
                    });
                });
            }
            //login();

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 136,  250 => 127,  218 => 97,  208 => 96,  191 => 88,  184 => 84,  172 => 75,  166 => 72,  147 => 56,  140 => 52,  134 => 48,  130 => 43,  122 => 38,  119 => 37,  117 => 36,  114 => 35,  104 => 31,  101 => 30,  97 => 29,  72 => 6,  62 => 5,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set title = 'Connexion' %}


{% block body %}
<style>
        .app__flashes__success {
            position: relative;
            width: 100%;
            top: 0;
            margin: 0 0 1.5em 0;
        }
        .app__flashes__error {
            position: relative;
            width: 100%;
            top: 0;
            margin: 0 0 1.5em 0;
        }
        .btnSubmitOutline {
            padding: 0.375rem 0.75rem;
        }
        a {
           color: rgb(55, 57, 66);
        }
    </style>
    <section class=\"mt-5 mb-5\">
        <div class=\"row justify-content-md-center\">
                <div class=\"col-lg-5 col-md-7\">
                    {% for alerte in app.flashes('success') %}
                        <div class=\"app__flashes__success\">
                            {{ alerte | raw }}
                            <div class=\"app__flashes__close\"></div>
                        </div><br>
                    {% endfor %}
            
                    {% if hasError %}
                        <div class=\"app__flashes__error\">
                            <strong>Désolé {{ null != full_name ? full_name : '' }} !</strong> <br>
                            Erreur sur les identifiants
                            <div class=\"app__flashes__close\"></div>
                        </div>
                    {% endif %}
                    <div class=\"text-center\">
                        <h2 style=\"font-weight: bold;color: #54c0a7\">WELCOOOM</h2>
                        {# <a href=\"{{ path('home') }}\">
                            <img src=\"{{ asset('build/images/static/logotype_welcoom.svg') }}\" alt=\"Logo Welcoom\" width=\"150\">
                        </a> #}
                    </div><br>
                    <h4 class=\"text-center title\">Connexion</h4>
                    <hr class=\"mt-4 mb-4\">
            
                    <form name=\"login\" action=\"{{ path('login') }}\" method=\"post\">
            
                        <div class=\"form-group\">
                            <label for=\"username\">Adresse email</label>
                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                        </div>
            
                        <div class=\"form-group\">
                            <label for=\"password\">Mot de passe</label>
                            <div class=\"position-relative\">
                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\">
                                <button type=\"button\" class=\"btn m-0 p-0\" id=\"mdp__login__show\">
                                    <i class=\"fas fa-eye\"></i>
                                </button>
                                <button type=\"button\" class=\"btn m-0 p-0\" id=\"mdp__login__hide\">
                                    <i class=\"fas fa-eye-slash\"></i>
                                </button>
                            </div>
                        </div>
            
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                        <div class=\"text-right mb-3\">
                            <a href=\"{{ path('get_email') }}\">Vous avez oublié votre mot de passe ?</a>
                        </div>
            
                        <div class=\"form-group\">
                            <button id=\"user__login__btn\" type=\"submit\" class=\"btn btnSubmit col-12 mt-2\">Se connecter</button>
                        </div>
                    </form>
            
                    <h6 class=\"text-center font-weight-bolder mt-4\">Tu n’as pas encore de compte Welcooom ?<br><br>
                        <a class=\"btn w-100 btnSubmitOutline\" href=\"{{ path('registration') }}\">Inscris-toi</a>
                    </h6>
            
                    <div class=\"text-center mt-4\">
                        <a href=\"{{ path('home') }}\">Retour vers Welcooom</a>
                    </div>
                </div>
            </div>
    </section>
    
{% endblock %}

{% block javascripts %}
    <script>
        \$(function() 
        {
            function showHideMdp() 
            {
                \$('#mdp__login__show').click(function() 
                {
                    \$(this).siblings('#inputPassword').attr('type', 'text');
                    \$(this).fadeOut();
                    \$('#mdp__login__hide').fadeIn();
                });

                \$('#mdp__login__hide').click(function() 
                {
                    \$(this).siblings('#inputPassword').attr('type', 'password');
                    \$(this).fadeOut();
                    \$('#mdp__login__show').fadeIn();
                });
            }
            showHideMdp();

            function login() 
            {
                \$('#user__login__btn').click(function(event) 
                {
                    event.preventDefault();

                    \$.ajax(
                    {
                        method: 'POST',
                        url: \"{{ path('login') }}\",
                        data: \$('form[name=\"login\"]').serialize(),
                        dataType: 'json',
                        headers: { 'X-Requested-With': 'XMLHttpRequest' },
                        success: (response) => 
                        {
                            
                            if(response.hasError !== true) 
                            {
                                window.location.href = \"{{ path('home') }}\";
                            } 
                            else 
                            {
                                \$('form[name=\"login\"]').before('<div class=\"app__flashes__error\"><strong> Désolé '+ response.full_name +' !</strong><br>Erreur sur les identifiants<div class=\"app__flashes__close\"></div></div>');

                                \$('.app__flashes__success').click(() => 
                                {
                                    \$('.app__flashes__success').remove();
                                });
                
                                \$('.app__flashes__error').click(() => 
                                {
                                    \$('.app__flashes__error').remove();
                                });
                                
                                setTimeout(() => 
                                {
                                    \$('.app__flashes__success').hide('slow');
                                    \$('.app__flashes__error').hide('slow');
                                }, 10000);
                            }
                        },
                    });
                });
            }
            //login();

        });
    </script>
{% endblock %}
", "security/login.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/security/login.html.twig");
    }
}
