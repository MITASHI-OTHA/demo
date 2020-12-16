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

/* security/user_registration.html.twig */
class __TwigTemplate_511f7e35aba1d0ddb5db4dcad67b2968dccc5502baed324a2693c8fecd5c0607 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/user_registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/user_registration.html.twig"));

        // line 3
        $context["title"] = "Inscription";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/user_registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "     <style>
        .form-group {
            margin-bottom: 1.5em;
        }
        .right-image-sign-up {
            background-position: center;
            background-size: 100%;
            width: 70%;
            height: 100%;
            background-repeat: no-repeat;
            margin: auto;
        } 
        #registration_typeAccount .form-check:first-child, #registration_civilite .form-check:first-child {
                padding-left: 0;
        }
        .blk-form-ps {
            display: flex
        }
        .blk-form-ps .form-group {
            width: 50%
        }
        .blk-form-ps .form-group:first-child {
            padding-right: 2%;
        }
        .blk-form-ps .form-group:last-child {
            padding-left: 2%;
        }
        section .container {
            margin-top: 3% !important;
        }
        label[for=registration_cguAccepted], label[for=registration_abonneNewsletter]  {
            font-size: 12px;
        }
        label[for=registration_cguAccepted] a {
            color: rgba(18, 170, 255, 1) !important
        }
    </style>
    <div class=\"container\">
        <div class=\"row mt-5\">
                <div class=\"col-md-6\">
                    <h2 class=\"font-weight-bolder my-4\">Créer un compte</h2><br>
                    
                    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start');
        echo "
                          
                        <div class=\"row\">
                            <div class=\"form-group col-md-12 pr-2 mb-0\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "typeAccount", [], "any", false, false, false, 53), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-12 pr-2 mb-0\">
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "civilite", [], "any", false, false, false, 56), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-md-4 pr-2 mb-0\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-4 pl-2 mb-0\">
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "prenom", [], "any", false, false, false, 64), 'row');
        echo "
                            </div>
                            <div class=\"form-group col-md-4 pl-2 mb-0\">
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "username", [], "any", false, false, false, 67), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'row');
        echo "
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"confirmation\" class=\"required\">Confirmation Email</label>
                                                                    <input id=\"confirmation\" type=\"email\" class=\"form-control\" placeholder=\"confirmez le mot de passe *\" required=\"true\">
                                </div>
                            </div>

                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 blk-form-ps\">
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "password", [], "any", false, false, false, 84), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "abonneNewsletter", [], "any", false, false, false, 89), 'row');
        echo "
                            </div>
                            <div class=\"col-md-12\">
                                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "recaptchaToken", [], "any", false, false, false, 92), 'row');
        echo "
                            </div>

                        </div>
                        
                        <div class=\"d-flex\">
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "cguAccepted", [], "any", false, false, false, 98), 'row');
        echo "
                         <label for=\"registration_cguAccepted\"> En soumettant ce formulaire, j'ai lu et j’accepte les <a href=\"#\">Conditions d’utilisation</a> de Welcohome.</label> 
                        </div>
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'rest');
        echo "
                        <button class=\"btn btnSubmit my-4 w-100\">S'inscrire !</button>
                    ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "
                </div>
                <div class=\"col-md-6\">
                    <div class=\"right-image-sign-up\" style=\"background-image: url(";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/welcohome-inscription.png"), "html", null, true);
        echo ") \">
                    </div>
                </div>
            </div>
    </div>
    


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo "    <script src=\"https://www.google.com/recaptcha/api.js?render=6Le5SbMZAAAAAGTWwVvyIW1T2WqAzj41uDk1GXVt\"></script>

    <script>
        grecaptcha.ready(function()
        {
            grecaptcha.execute('6Le5SbMZAAAAAGTWwVvyIW1T2WqAzj41uDk1GXVt', { action: 'contactinfo' }).then(function(token)
            {
                document.getElementById('contact_infos_recaptchaToken').value = token;
            });
        });

        \$(function() 
        {
            function initializeElements() 
            {
                \$('#registration_password_first').parent().css('position', 'relative');
                \$('#registration_password_first').parent().append('<button type=\"button\" id=\"mdp__register__show\" class=\"btn m-0 p-0\"><i class= \"fas fa-eye\"></i></button><button type=\"button\" id=\"mdp__register__hide\" class=\"btn m-0 p-0\"><i class=\"fas fa-eye-slash\"></i></button>');

                \$('#mdp__register__show').click(function() 
                {
                    \$(this).siblings('#registration_password_first').attr('type', 'text');
                    \$(this).fadeOut();
                    \$('#mdp__register__hide').fadeIn();
                });

                \$('#mdp__register__hide').click(function() 
                {
                    \$(this).siblings('#registration_password_first').attr('type', 'password');
                    \$(this).fadeOut();
                    \$('#mdp__register__show').fadeIn();
                });

                \$('#registration_password_second').parent().css('position', 'relative');
                \$('#registration_password_second').parent().append('<button type=\"button\" id=\"mdp__register__show2\" class=\"btn m-0 p-0\"><i class= \"fas fa-eye\"></i></button><button type=\"button\" id=\"mdp__register__hide2\" class=\"btn m-0 p-0\"><i class=\"fas fa-eye-slash\"></i></button>');

                \$('#mdp__register__show2').click(function() 
                {
                    \$(this).siblings('#registration_password_second').attr('type', 'text');
                    \$(this).fadeOut();
                    \$('#mdp__register__hide2').fadeIn();
                });

                \$('#mdp__register__hide2').click(function() 
                {
                    \$(this).siblings('#registration_password_second').attr('type', 'password');
                    \$(this).fadeOut();
                    \$('#mdp__register__show2').fadeIn();
                });
            }
            initializeElements();

        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/user_registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 117,  231 => 116,  212 => 106,  206 => 103,  201 => 101,  195 => 98,  186 => 92,  180 => 89,  172 => 84,  157 => 72,  149 => 67,  143 => 64,  137 => 61,  129 => 56,  123 => 53,  116 => 49,  72 => 7,  62 => 6,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Inscription' %}


{% block body %}
     <style>
        .form-group {
            margin-bottom: 1.5em;
        }
        .right-image-sign-up {
            background-position: center;
            background-size: 100%;
            width: 70%;
            height: 100%;
            background-repeat: no-repeat;
            margin: auto;
        } 
        #registration_typeAccount .form-check:first-child, #registration_civilite .form-check:first-child {
                padding-left: 0;
        }
        .blk-form-ps {
            display: flex
        }
        .blk-form-ps .form-group {
            width: 50%
        }
        .blk-form-ps .form-group:first-child {
            padding-right: 2%;
        }
        .blk-form-ps .form-group:last-child {
            padding-left: 2%;
        }
        section .container {
            margin-top: 3% !important;
        }
        label[for=registration_cguAccepted], label[for=registration_abonneNewsletter]  {
            font-size: 12px;
        }
        label[for=registration_cguAccepted] a {
            color: rgba(18, 170, 255, 1) !important
        }
    </style>
    <div class=\"container\">
        <div class=\"row mt-5\">
                <div class=\"col-md-6\">
                    <h2 class=\"font-weight-bolder my-4\">Créer un compte</h2><br>
                    
                    {{ form_start(form) }}
                          
                        <div class=\"row\">
                            <div class=\"form-group col-md-12 pr-2 mb-0\">
                                {{ form_row(form.typeAccount) }}
                            </div>
                            <div class=\"form-group col-md-12 pr-2 mb-0\">
                                {{ form_row(form.civilite) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-md-4 pr-2 mb-0\">
                                {{ form_row(form.nom) }}
                            </div>
                            <div class=\"form-group col-md-4 pl-2 mb-0\">
                                {{ form_row(form.prenom) }}
                            </div>
                            <div class=\"form-group col-md-4 pl-2 mb-0\">
                                {{ form_row(form.username) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                {{ form_row(form.email) }}
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"confirmation\" class=\"required\">Confirmation Email</label>
                                                                    <input id=\"confirmation\" type=\"email\" class=\"form-control\" placeholder=\"confirmez le mot de passe *\" required=\"true\">
                                </div>
                            </div>

                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 blk-form-ps\">
                                {{ form_row(form.password) }}
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                {{ form_row(form.abonneNewsletter) }}
                            </div>
                            <div class=\"col-md-12\">
                                {{ form_row(form.recaptchaToken) }}
                            </div>

                        </div>
                        
                        <div class=\"d-flex\">
                        {{ form_row(form.cguAccepted) }}
                         <label for=\"registration_cguAccepted\"> En soumettant ce formulaire, j'ai lu et j’accepte les <a href=\"#\">Conditions d’utilisation</a> de Welcohome.</label> 
                        </div>
                    {{ form_rest(form) }}
                        <button class=\"btn btnSubmit my-4 w-100\">S'inscrire !</button>
                    {{ form_end(form) }}
                </div>
                <div class=\"col-md-6\">
                    <div class=\"right-image-sign-up\" style=\"background-image: url({{asset('build/images/web/welcohome-inscription.png')}}) \">
                    </div>
                </div>
            </div>
    </div>
    


{% endblock %}

{% block javascripts %}
    <script src=\"https://www.google.com/recaptcha/api.js?render=6Le5SbMZAAAAAGTWwVvyIW1T2WqAzj41uDk1GXVt\"></script>

    <script>
        grecaptcha.ready(function()
        {
            grecaptcha.execute('6Le5SbMZAAAAAGTWwVvyIW1T2WqAzj41uDk1GXVt', { action: 'contactinfo' }).then(function(token)
            {
                document.getElementById('contact_infos_recaptchaToken').value = token;
            });
        });

        \$(function() 
        {
            function initializeElements() 
            {
                \$('#registration_password_first').parent().css('position', 'relative');
                \$('#registration_password_first').parent().append('<button type=\"button\" id=\"mdp__register__show\" class=\"btn m-0 p-0\"><i class= \"fas fa-eye\"></i></button><button type=\"button\" id=\"mdp__register__hide\" class=\"btn m-0 p-0\"><i class=\"fas fa-eye-slash\"></i></button>');

                \$('#mdp__register__show').click(function() 
                {
                    \$(this).siblings('#registration_password_first').attr('type', 'text');
                    \$(this).fadeOut();
                    \$('#mdp__register__hide').fadeIn();
                });

                \$('#mdp__register__hide').click(function() 
                {
                    \$(this).siblings('#registration_password_first').attr('type', 'password');
                    \$(this).fadeOut();
                    \$('#mdp__register__show').fadeIn();
                });

                \$('#registration_password_second').parent().css('position', 'relative');
                \$('#registration_password_second').parent().append('<button type=\"button\" id=\"mdp__register__show2\" class=\"btn m-0 p-0\"><i class= \"fas fa-eye\"></i></button><button type=\"button\" id=\"mdp__register__hide2\" class=\"btn m-0 p-0\"><i class=\"fas fa-eye-slash\"></i></button>');

                \$('#mdp__register__show2').click(function() 
                {
                    \$(this).siblings('#registration_password_second').attr('type', 'text');
                    \$(this).fadeOut();
                    \$('#mdp__register__hide2').fadeIn();
                });

                \$('#mdp__register__hide2').click(function() 
                {
                    \$(this).siblings('#registration_password_second').attr('type', 'password');
                    \$(this).fadeOut();
                    \$('#mdp__register__show2').fadeIn();
                });
            }
            initializeElements();

        });

    </script>
{% endblock %}", "security/user_registration.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/security/user_registration.html.twig");
    }
}
