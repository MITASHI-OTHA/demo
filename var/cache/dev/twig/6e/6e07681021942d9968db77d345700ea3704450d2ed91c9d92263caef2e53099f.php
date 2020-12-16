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

/* contact_infos/contact_us.html.twig */
class __TwigTemplate_b025b749b4fc71c9831233007e3b5e3e737e8fbf5abb2bb1fa733a7f060231ca extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact_infos/contact_us.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact_infos/contact_us.html.twig"));

        // line 3
        $context["title"] = "Nous contacter";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact_infos/contact_us.html.twig", 1);
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
        form {
            margin-top: 3em;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <h1 class=\"font-weight-bolder my-4 text-center\">
        Vous avez une question ? <br> Contactez-nous !
    </h1>
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
        <h5 class=\"font-weight-bolder my-4\">Informations personnelles</h5>
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "role", [], "any", false, false, false, 21), 'row');
        echo "
            </div>
            <div class=\"col-md-6\">
                <label for=\"contact_infos_email\">E-mail *</label>
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'row');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'row');
        echo "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), 'row');
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-7\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "societe", [], "any", false, false, false, 40), 'row');
        echo "
            </div>
            <div class=\"col-md-5\">
                <label for=\"contact_infos_telephone\">Téléphone *</label>
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "telephone", [], "any", false, false, false, 44), 'row');
        echo "
            </div>
        </div>
        
        <h5 class=\"font-weight-bolder my-4\">Votre demande concerne</h5>
        <div class=\"row\">
            <div class=\"col-md-4\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "contactReason", [], "any", false, false, false, 51), 'row');
        echo "
            </div>
            <div class=\"col-md-8\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "objet", [], "any", false, false, false, 54), 'row');
        echo "
            </div>
        </div>

        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "message", [], "any", false, false, false, 58), 'row');
        echo "

        <div class=\"form-group\">
            <label for=\"contact_infos_file_file_file\">Avez-vous un document à nous faire parvenir ?</label>
            <div class=\"my-2\">
                <canvas id=\"contact__us__file__wiewer\"></canvas>
            </div>
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "file", [], "any", false, false, false, 65), 'row');
        echo "
        </div>
        
    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'rest');
        echo "
        <button type=\"submit\" class=\"btn btnSubmit mb-4\" id=\"submit_this\">Envoyer !</button>
    ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    <script src=\"https://www.google.com/recaptcha/api.js?render=6Le5SbMZAAAAAGTWwVvyIW1T2WqAzj41uDk1GXVt\"></script>
    <script src=\"https://mozilla.github.io/pdf.js/build/pdf.js\"></script>
    
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
            function resetElements() 
            {
                \$('#contact_infos_email').parent().addClass('input-group').prepend('<div class=\"input-group-prepend\"><div class=\"input-group-text\"><i class=\"fas fa-paper-plane\"></i></div></div>');
                \$('#contact_infos_telephone').parent().addClass('input-group').prepend('<div class=\"input-group-prepend\"><div class=\"input-group-text\"><i class=\"fas fa-phone-alt\"></i></div></div>');
            }
            resetElements();

            function addFiles() 
            {
                \$('#contact_infos_file_file_file').on('change', function (e) 
                {
                    \$('.contact_us_add_file').remove();
                    \$('#contact__us__file__wiewer').fadeOut();
                    let reader = new FileReader();

                    if (e.target.files[0].type === 'image/jpeg') 
                    {
                        reader.onload = (e) => 
                        {
                            \$(this).closest('.vich-image').prepend('<img src=\"' + e.target.result + '\" width=\"240\" class=\"mb-3 contact_us_add_file\">');
                        }
                        reader.readAsDataURL(e.target.files[0]);
                    }
                    else 
                    {
                        reader.onload = function () 
                        {
                            let pdfData = new Uint8Array(this.result);
                            let loadingTask = pdfjsLib.getDocument({ data: pdfData });

                            loadingTask.promise.then(function (pdf) 
                            {
                                pdf.getPage(1).then((page) => 
                                {
                                    let viewport = page.getViewport({ scale: 1 });

                                    // Prepare canvas using PDF page dimensions
                                    let canvas = \$('#contact__us__file__wiewer')[0];
                                    let context = canvas.getContext('2d');
                                    canvas.height = viewport.height;
                                    canvas.width = viewport.width;

                                    // Render PDF page into canvas context
                                    let renderContext =
                                    {
                                        canvasContext: context,
                                        viewport: viewport
                                    };
                                    let renderTask = page.render(renderContext);
                                    renderTask.promise.then(() => 
                                    {
                                        \$('#contact__us__file__wiewer').fadeIn();
                                        console.log('Page rendered');
                                    });
                                });
                            }, (reason) => { console.log(reason.error); });
                        }
                        reader.readAsArrayBuffer(e.target.files[0]);

                    }

                });
            }
            addFiles();

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact_infos/contact_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 74,  204 => 73,  192 => 70,  187 => 68,  181 => 65,  171 => 58,  164 => 54,  158 => 51,  148 => 44,  141 => 40,  132 => 34,  126 => 31,  117 => 25,  110 => 21,  103 => 17,  98 => 14,  88 => 13,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Nous contacter' %}

{% block stylesheets %}
    <style>
        form {
            margin-top: 3em;
        }
    </style>
{% endblock %}

{% block body %}
    <h1 class=\"font-weight-bolder my-4 text-center\">
        Vous avez une question ? <br> Contactez-nous !
    </h1>
    {{ form_start(form) }}
        <h5 class=\"font-weight-bolder my-4\">Informations personnelles</h5>
        <div class=\"row\">
            <div class=\"col-md-6\">
                {{ form_row(form.role) }}
            </div>
            <div class=\"col-md-6\">
                <label for=\"contact_infos_email\">E-mail *</label>
                {{ form_row(form.email) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6\">
                {{ form_row(form.nom) }}
            </div>
            <div class=\"col-md-6\">
                {{ form_row(form.prenom) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-7\">
                {{ form_row(form.societe) }}
            </div>
            <div class=\"col-md-5\">
                <label for=\"contact_infos_telephone\">Téléphone *</label>
                {{ form_row(form.telephone) }}
            </div>
        </div>
        
        <h5 class=\"font-weight-bolder my-4\">Votre demande concerne</h5>
        <div class=\"row\">
            <div class=\"col-md-4\">
                {{ form_row(form.contactReason) }}
            </div>
            <div class=\"col-md-8\">
                {{ form_row(form.objet) }}
            </div>
        </div>

        {{ form_row(form.message) }}

        <div class=\"form-group\">
            <label for=\"contact_infos_file_file_file\">Avez-vous un document à nous faire parvenir ?</label>
            <div class=\"my-2\">
                <canvas id=\"contact__us__file__wiewer\"></canvas>
            </div>
            {{ form_row(form.file) }}
        </div>
        
    {{ form_rest(form) }}
        <button type=\"submit\" class=\"btn btnSubmit mb-4\" id=\"submit_this\">Envoyer !</button>
    {{ form_end(form) }}
{% endblock %}

{% block javascripts %}
    <script src=\"https://www.google.com/recaptcha/api.js?render=6Le5SbMZAAAAAGTWwVvyIW1T2WqAzj41uDk1GXVt\"></script>
    <script src=\"https://mozilla.github.io/pdf.js/build/pdf.js\"></script>
    
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
            function resetElements() 
            {
                \$('#contact_infos_email').parent().addClass('input-group').prepend('<div class=\"input-group-prepend\"><div class=\"input-group-text\"><i class=\"fas fa-paper-plane\"></i></div></div>');
                \$('#contact_infos_telephone').parent().addClass('input-group').prepend('<div class=\"input-group-prepend\"><div class=\"input-group-text\"><i class=\"fas fa-phone-alt\"></i></div></div>');
            }
            resetElements();

            function addFiles() 
            {
                \$('#contact_infos_file_file_file').on('change', function (e) 
                {
                    \$('.contact_us_add_file').remove();
                    \$('#contact__us__file__wiewer').fadeOut();
                    let reader = new FileReader();

                    if (e.target.files[0].type === 'image/jpeg') 
                    {
                        reader.onload = (e) => 
                        {
                            \$(this).closest('.vich-image').prepend('<img src=\"' + e.target.result + '\" width=\"240\" class=\"mb-3 contact_us_add_file\">');
                        }
                        reader.readAsDataURL(e.target.files[0]);
                    }
                    else 
                    {
                        reader.onload = function () 
                        {
                            let pdfData = new Uint8Array(this.result);
                            let loadingTask = pdfjsLib.getDocument({ data: pdfData });

                            loadingTask.promise.then(function (pdf) 
                            {
                                pdf.getPage(1).then((page) => 
                                {
                                    let viewport = page.getViewport({ scale: 1 });

                                    // Prepare canvas using PDF page dimensions
                                    let canvas = \$('#contact__us__file__wiewer')[0];
                                    let context = canvas.getContext('2d');
                                    canvas.height = viewport.height;
                                    canvas.width = viewport.width;

                                    // Render PDF page into canvas context
                                    let renderContext =
                                    {
                                        canvasContext: context,
                                        viewport: viewport
                                    };
                                    let renderTask = page.render(renderContext);
                                    renderTask.promise.then(() => 
                                    {
                                        \$('#contact__us__file__wiewer').fadeIn();
                                        console.log('Page rendered');
                                    });
                                });
                            }, (reason) => { console.log(reason.error); });
                        }
                        reader.readAsArrayBuffer(e.target.files[0]);

                    }

                });
            }
            addFiles();

        });
    </script>
{% endblock %}
", "contact_infos/contact_us.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/contact_infos/contact_us.html.twig");
    }
}
