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

/* user/user_profile.html */
class __TwigTemplate_631444ff590f7b663ac2283d41d1179cfaaab7753007f8440b0e664696175fcc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_profile.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_profile.html"));

        // line 3
        $context["title"] = "Profile de l'utilisateur";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/user_profile.html", 1);
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
        echo "
    <div class=\"my-4\">
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'rest');
        echo "
            <button type=\"submit\" class=\"btn btnSubmit\">Modifier !</button>
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "    <script>
        \$(function() 
        {
            function showCity() 
            {
                \$('#profile_userContactInfos_pays option[value=\"250\"]').attr('selected', 'selected');

                const apiUrl = 'https://geo.api.gouv.fr/communes?codePostal=';
                const format = '&format=json';
                
                \$('#profile_userContactInfos_codePostal').on('blur', function() 
                {
                    \$('#profile_userContactInfos_ville option').remove();
                    \$('.alert__cp').remove();

                    \$.ajax(
                    {
                        method: 'GET',
                        url: apiUrl + \$(this).val() + format,
                        dataType: 'json',
                        headers: { 'X-Requested-With': 'XMLHttpRequest' },
                        success: (response) =>
                        {
                            if(response.length > 0) 
                            {
                                \$(response).each(function(key, value) 
                                {
                                    \$('#profile_userContactInfos_ville').append('<option>'+ value.nom +'</option>');
                                    console.log(value.nom);
                                });
                            } 
                            else 
                            {
                                \$(this).after('<div class=\"mt-2 text-danger alert__cp\">Aucune ville ne correspond à ce code postal : <strong>\"'+ \$(this).val() +'\"</strong></div>');
                            }
                        },
                    });
                });
                
            }
            showCity();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/user_profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 17,  99 => 16,  85 => 11,  80 => 9,  76 => 8,  72 => 6,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Profile de l\\'utilisateur' %}

{% block body %}

    <div class=\"my-4\">
        {{ form_start(form) }}
        {{ form_rest(form) }}
            <button type=\"submit\" class=\"btn btnSubmit\">Modifier !</button>
        {{ form_end(form) }}
    </div>

{% endblock %}

{% block javascripts %}
    <script>
        \$(function() 
        {
            function showCity() 
            {
                \$('#profile_userContactInfos_pays option[value=\"250\"]').attr('selected', 'selected');

                const apiUrl = 'https://geo.api.gouv.fr/communes?codePostal=';
                const format = '&format=json';
                
                \$('#profile_userContactInfos_codePostal').on('blur', function() 
                {
                    \$('#profile_userContactInfos_ville option').remove();
                    \$('.alert__cp').remove();

                    \$.ajax(
                    {
                        method: 'GET',
                        url: apiUrl + \$(this).val() + format,
                        dataType: 'json',
                        headers: { 'X-Requested-With': 'XMLHttpRequest' },
                        success: (response) =>
                        {
                            if(response.length > 0) 
                            {
                                \$(response).each(function(key, value) 
                                {
                                    \$('#profile_userContactInfos_ville').append('<option>'+ value.nom +'</option>');
                                    console.log(value.nom);
                                });
                            } 
                            else 
                            {
                                \$(this).after('<div class=\"mt-2 text-danger alert__cp\">Aucune ville ne correspond à ce code postal : <strong>\"'+ \$(this).val() +'\"</strong></div>');
                            }
                        },
                    });
                });
                
            }
            showCity();
        });
    </script>
{% endblock %}
", "user/user_profile.html", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/user/user_profile.html");
    }
}
