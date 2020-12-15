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

/* security/loginform.html.twig */
class __TwigTemplate_d548dfd69eb383c6bba13f794ecac4635fabbfb1cbe12e2cf583f40e82a9d8e8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/loginform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/loginform.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "
<section>
                <i class=\"fas fa-times closed\"></i>
                  <div class=\"row\">
                      <div class=\"col-md-6 position-relative\">
                          <h5>
                            Vous disposez déjà d'un compte ? <br>
                            <br>
                            M'identifier 
                          </h5>
                        <br>
                            
                          <form name=\"login\" class=\"blk-form-login\">
                            <input placeholder=\"Adresse electronique\" aria-describedby=\"emailHelp\"  type=\"email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                            <input placeholder=\"Adresse electronique\" class=\"form-control\" type=\"password\" name=\"password\" id=\"inputPassword\" aria-describedby=\"passwordHelp\">
                            <font class=\"mt-2\"><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot");
        echo "\" style=\"color: rgb(55, 57, 66);\"> Un trou de mémoire ? Cliquez-ici </a> </font>
                            <button type=\"submit\" class=\"btn btn-primary btn-sm btnSubmit\"> Se connecter  </button>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                          </form>
                      </div>
                      <div class=\"col-md-6\">
                          <h5>
                            Vous n'avez pas encore de compte ? <br>
                            <br>
                            Inscrivez-vous 
                          </h5>
                          <p style=\"color: red;padding-top: 20px\"> Il n' y en a que pour quelques secondes !</p>
                          <ul class=\"list-item-no-account\">
                              <li>Déposez une annonce pour les porteurs de projet</li>
                              <li>Integrez des projets participatifs pour les futurs habitants</li>
                              <li>Echangez des idées, et pleins d’autres choses</li>
                          </ul>
                          <div class=\"blk-form-signup\">
                            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\"><button type=\"button\" class=\"btn btn-primary btn-sm btnSubmit\"> Je m’inscris </button></a>
                          </div>
                      </div>
                    </div>
            </section>
            ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <style>
            section .app__flashes__error {
            position: absolute
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "                <script>
                    \$(function(){
                        \$('form[name=\"login\"]').on('submit',function(\$e) {
                            \$e.preventDefault()
                            let form = \$(this).serialize()
                            console.log(form)
                            \$.ajax({
                                method: 'POST',
                                url: '/login',
                                data: form,
                                dataType: 'json'
                            }).done((e)=> {
                                    console.log('success => ', e)
                                    if(e.hasError == true) {
                                        let layout = `<div class=\"app__flashes__error\">
                                        Erreur sur vos identifiants !
                                        <div class=\"app__flashes__close\"></div>
                                    </div>`
                                    \$('form[name=\"login\"]').prepend(layout)
                                    } else if(e.success == true) {
                                        location.reload(true)
                                    }
                            }).fail(err=> {
                                console.log('erreur => ', err)
                            })
                        })
                        \$(document).on('click', '.app__flashes__close', ()=> {
                                \$('.app__flashes__error').fadeOut()
                        })
                    })
                </script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/loginform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  134 => 46,  119 => 2,  109 => 1,  99 => 46,  91 => 41,  72 => 25,  67 => 23,  62 => 21,  47 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <style>
            section .app__flashes__error {
            position: absolute
        }
    </style>
{% endblock %}

<section>
                <i class=\"fas fa-times closed\"></i>
                  <div class=\"row\">
                      <div class=\"col-md-6 position-relative\">
                          <h5>
                            Vous disposez déjà d'un compte ? <br>
                            <br>
                            M'identifier 
                          </h5>
                        <br>
                            
                          <form name=\"login\" class=\"blk-form-login\">
                            <input placeholder=\"Adresse electronique\" aria-describedby=\"emailHelp\"  type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                            <input placeholder=\"Adresse electronique\" class=\"form-control\" type=\"password\" name=\"password\" id=\"inputPassword\" aria-describedby=\"passwordHelp\">
                            <font class=\"mt-2\"><a href=\"{{path('forgot')}}\" style=\"color: rgb(55, 57, 66);\"> Un trou de mémoire ? Cliquez-ici </a> </font>
                            <button type=\"submit\" class=\"btn btn-primary btn-sm btnSubmit\"> Se connecter  </button>
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                          </form>
                      </div>
                      <div class=\"col-md-6\">
                          <h5>
                            Vous n'avez pas encore de compte ? <br>
                            <br>
                            Inscrivez-vous 
                          </h5>
                          <p style=\"color: red;padding-top: 20px\"> Il n' y en a que pour quelques secondes !</p>
                          <ul class=\"list-item-no-account\">
                              <li>Déposez une annonce pour les porteurs de projet</li>
                              <li>Integrez des projets participatifs pour les futurs habitants</li>
                              <li>Echangez des idées, et pleins d’autres choses</li>
                          </ul>
                          <div class=\"blk-form-signup\">
                            <a href=\"{{path('registration')}}\"><button type=\"button\" class=\"btn btn-primary btn-sm btnSubmit\"> Je m’inscris </button></a>
                          </div>
                      </div>
                    </div>
            </section>
            {% block javascripts %}
                <script>
                    \$(function(){
                        \$('form[name=\"login\"]').on('submit',function(\$e) {
                            \$e.preventDefault()
                            let form = \$(this).serialize()
                            console.log(form)
                            \$.ajax({
                                method: 'POST',
                                url: '/login',
                                data: form,
                                dataType: 'json'
                            }).done((e)=> {
                                    console.log('success => ', e)
                                    if(e.hasError == true) {
                                        let layout = `<div class=\"app__flashes__error\">
                                        Erreur sur vos identifiants !
                                        <div class=\"app__flashes__close\"></div>
                                    </div>`
                                    \$('form[name=\"login\"]').prepend(layout)
                                    } else if(e.success == true) {
                                        location.reload(true)
                                    }
                            }).fail(err=> {
                                console.log('erreur => ', err)
                            })
                        })
                        \$(document).on('click', '.app__flashes__close', ()=> {
                                \$('.app__flashes__error').fadeOut()
                        })
                    })
                </script>
            {% endblock %}", "security/loginform.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/security/loginform.html.twig");
    }
}
