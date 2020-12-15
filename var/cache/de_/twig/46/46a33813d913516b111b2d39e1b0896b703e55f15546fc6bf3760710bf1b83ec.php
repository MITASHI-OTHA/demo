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

/* ad_messages/contact_ad_author.html.twig */
class __TwigTemplate_2fbe058c4e14ffb737924dd964cc27885da771ffab41caea3943f9d72df320c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_messages/contact_ad_author.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_messages/contact_ad_author.html.twig"));

        // line 3
        $context["title"] = "contacter le porteur de projet";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ad_messages/contact_ad_author.html.twig", 1);
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
        .container section {
            margin-top: 5%;
        }

        .card {
            padding: 23px;
            transition: ease .5s;
        }

        .__first div:nth-of-type(1) label {
            font-weight: 500;
        }

        .__first .mb-4 {
            padding-left: 8px;
            font-size: 14px;
            font-weight: 500;
            color: #667d99a8;
            padding: 0;
        }
        .__first .mb-4 i {
            font-size: 20px;
        }
        
        .row .card:nth-of-type(1) p {
            font-size: 11px;
            color: #667d99;
        }

        .fa-bullhorn {
            color: #a2a2a2;
            font-size: 14px;
        }

        .card:hover {
            -webkit-box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, .01), 0 4px 8px 0 rgba(26, 26, 26, .12);
            box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, .01), 0 4px 8px 0 rgba(26, 26, 26, .12);
        }

        .caption-picture {
            height: 90px;
            width: 90px;
            border-radius: 5px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .success-msg>div {
            padding-top: 11px;
            padding-bottom: 31px;
        }

        .success-msg div.__success p:first-child {
            font-weight: 500;
            font-family: 'montserrat-semibold';
        }

        .__success__txt p {
            padding-left: 41px;
            font-size: 13px;
            padding-right: 480px;
            text-align: justify;
        }

        .__btn_success {
            display: inline-flex;
            margin-top: 31px;
            font-weight: 500;
        }

        .__btn_success button {
            font-size: 12px;
        }

        .__btn_success button:last-child {
            margin-left: 23px;
        }

        .success-msg {
            display: none
        }

        #messages_imageFileMessage_file {
            display: none
        }
        .content-success p {
            text-align: justify;
            font-size: 13px;
        }
        .__success p {
            font-weight: 500
        }
        button[data-name=email] {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .button[data-name=email]::before {
            background-color: #ff6565 !important
        }
        .detail h3 {
            font-size: 22px;
            color: #49494a;
        }
        .detail>div span {
            font-size: 12px;
            padding-left: 10px;
        }
        .detail>div svg {
            font-size: 15px;
            color: #0a0a0a;
        }
        .detail>div span {
            padding-right: 10px;
        }
        .sem-b {
            font-family: 'montserrat-semibold';
        }
        .fs-20 {
            font-size: 20px;
        }
        .pre-projet h3 {
            font-size: 20px
        }
        .mt-32 {
            margin-top: 32px
        }
        .pre-projet p {
        font-size: 13px;
        margin-top: 10px;
        text-align: justify;
        }
        .ml-21 {
            margin-left: 21px !important
        }
        .mt-10 {
            margin-top: 10px
        }
        .badge-primary {
            background-color: #54c0a7;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 152
        echo "    <div class=\"container\">
        <section>
            <div class=\"row\">
                <div class=\"col-md-12 success-msg animated animate__bounceIn\">
                    <div class=\"row w-50\">
                        <div class=\"col-md-12 __success\">
                            <p>Votre message a bien été envoyé.</p>
                        </div>
                        <div class=\"col-md-12 d-flex content-success\">
                            <div class=\"pr-3\">
                                <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/direct.png"), "html", null, true);
        echo "\" width=\"50px\">
                            </div>
                            <p>
                                Il s’affichera dans quelques instants dans votre messagerie. Simple et rapide, elle vous
                                permet d’échanger avec les acheteurs et vendeurs du boncoin.
                            </p>
                        </div>
                        <div class=\"col-md-12 __btn_success\">
                            <a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"
                                    data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">Acceder à la
                                    messagerie</button></a>
                            <button type=\"button\" class=\"btn btn-outline-primary\" data-toggle=\"button\" aria-pressed=\"false\"
                                autocomplete=\"off\"> Retour au projet </button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-7\">
                    <div class=\"card __first\">
                        <h5 class=\"mb-0 font-weight-bold pb-3\"> Envoyez un message à LesCityZens </h5>
                        ";
        // line 185
        echo "
                        ";
        // line 186
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "content", [], "any", false, false, false, 187), 'row');
        echo "
                        ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), 'rest');
        echo "
                            <div class=\"form-group\">
                                <button id=\"send__author__msg\" type=\"submit\" class=\"btn btnDisabled btn-sm w-100 mt-2\">
                                    <i class=\"fas fa-paper-plane mr-1\"></i>
                                    Envoyer
                                </button>
                            </div>
                        ";
        // line 195
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), 'form_end');
        echo "
                        <p class=\"mt-3 mb-0\">
                            Me renseigner sur les finalités du traitement de mes données personnelles, les destinataires, le
                            responsable de traitement, les durées de conservation, les coordonnées du DPO et mes droits.
                        </p>
                    </div>

                </div>
                <div class=\"col-md-5\">
                    <div class=\"card\">
                        <div class=\"\">
                            <div class=\"d-flex\">
                                <div style=\"width: 75px; height:75px; overflow:hidden;background: #f9f9f9;\" class=\"rounded-circle mb-3 d-flex\">
                                <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/logotype_lcz.svg"), "html", null, true);
        echo "\" alt=\"nom de l'auteur\" class=\"w-100\">
                                </div>
                                <div class=\"d-grid ml-21\">
                                    <h4 class=\"fs-20 m-auto\"> LesCityZens </h4>
                                    <span class=\"badge badge-pill badge-primary mt-10\">Porteur de projet</span>
                                </div>
                                
                            </div>
                            
                            <hr class=\"w-100\">
                            <div class=\"detail\">
                                <h3 class=\"text-left\"> Projet #A80O208 </h3>
                                <div class=\"d-grid mt-8\">
                                    <div>
                                        <i class=\"fas fa-coins\"></i> <span class=\"sem-b\"> 1000€/m2 </span>
                                    </div>
                                    <div class=\"text-left\">
                                        <i class=\"fas fa-door-open\"></i> <span> 2/5 logements disponibles </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card mt-32 pre-projet\">
                            <h3>Présentation du projet</h3>
                            <p>
                                Projet d’habitat participatif réalisé à Besançon, cette opération de 10 à 14 logements s’inscrit dans le cadre d’un projet de logements plus vaste comprenant 18 logements locatifs sociaux installés face à la place de la Bascule, et de 6 maisons en accession sociale prenant place le long de la rue de la Pelouse. Les trois programmes sont réunis par un jardin en cœur d’îlot entièrement piéton et végétalisé. L’implantation du projet d’habitat participatif le protège des nuisances de la rue de la Pelouse et de la place de la Bascule. 
                            </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    ";
        // line 242
        echo "    <div class=\"modal fade bd-example-modal-md\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myMediumModalLabel\"
        aria-hidden=\"true\" id=\"modal-info\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content p-4 text-center text-success\"></div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 251
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 252
        echo "    <script>
        \$(function () 
        {
         
            \$('#messages_imageFileMessage_file').parent().parent().parent().hide();

            \$('.bnt-author button').click(function() 
            {
                \$('.modal-content').text(\$(this).data('info')).css(
                {
                    fontSize : '20px',
                    fontWeight : '500',
                });

                \$('#modal-info').modal('show');
            })

            

            function sendAuthorMsg() 
            {
                \$('#send__author__msg').prop('disabled', true);
                
                \$('#messages_content').on('input', function()
                {
                    if(\$(this).val().trim() !== '' && \$(this).val().length >= 60) 
                    {
                        \$('#send__author__msg').prop('disabled', false);
                        \$('#send__author__msg').removeClass('btnDisabled').addClass('btnSubmit');
                    } 
                    else 
                    {
                        \$('#send__author__msg').prop('disabled', true);
                        \$('#send__author__msg').addClass('btnDisabled').removeClass('btnSubmit');
                    }
                });
                
                \$('#messages_content').on('focus', function()
                {
                    if(\$(this).val().trim() !== '' && \$(this).val().length >= 60) 
                    {
                        \$('#send__author__msg').prop('disabled', false);
                        \$('#send__author__msg').removeClass('btnDisabled').addClass('btnSubmit');
                    } 
                    else 
                    {
                        \$('#send__author__msg').prop('disabled', true);
                        \$('#send__author__msg').addClass('btnDisabled').removeClass('btnSubmit');
                    }
                });

                \$('#messages_content').on('blur', function()
                {
                    \$('.text-success').remove();
                    \$('#send__author__msg').prop('disabled', true);
                    \$('#send__author__msg').addClass('btnDisabled').removeClass('btnSubmit');
                    if(\$(this).val().trim() === '') 
                    {
                        \$(this).after('<div style=\"font-size:12px; fontweight:500\" class=\"text-success mt-2\">Veuillez rédiger un message.</div>')
                    } else if
                    (\$(this).val().trim() !== '' && \$(this).val().length < 60) 
                    {
                        \$(this).after('<div style=\"font-size:12px; fontweight:500\" class=\"text-success mt-2\">Le message est trop court. Veuillez saisir au moins 60 caractères.</div>')
                    } else {
                        \$('#send__author__msg').prop('disabled', false);
                        \$('#send__author__msg').removeClass('btnDisabled').addClass('btnSubmit');
                        \$('#send__author__msg').on('click', ()=> {
                            console.log('soumis')
                            //\$('.success-msg').css('display', 'block')
                            \$('#send__author__msg').prop('disabled', true);
                            \$('#messages_content').val('')
                            \$('#send__author__msg').addClass('btnDisabled').removeClass('btnSubmit');
                            location.href = \"/projet/4\"
                            //history.back()
                        })
                    }

                    
                });
            }
            sendAuthorMsg();

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad_messages/contact_ad_author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 252,  363 => 251,  346 => 242,  310 => 208,  294 => 195,  284 => 188,  280 => 187,  276 => 186,  273 => 185,  259 => 170,  248 => 162,  236 => 152,  226 => 151,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'contacter le porteur de projet' %}

{% block stylesheets %}
    <style>
        .container section {
            margin-top: 5%;
        }

        .card {
            padding: 23px;
            transition: ease .5s;
        }

        .__first div:nth-of-type(1) label {
            font-weight: 500;
        }

        .__first .mb-4 {
            padding-left: 8px;
            font-size: 14px;
            font-weight: 500;
            color: #667d99a8;
            padding: 0;
        }
        .__first .mb-4 i {
            font-size: 20px;
        }
        
        .row .card:nth-of-type(1) p {
            font-size: 11px;
            color: #667d99;
        }

        .fa-bullhorn {
            color: #a2a2a2;
            font-size: 14px;
        }

        .card:hover {
            -webkit-box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, .01), 0 4px 8px 0 rgba(26, 26, 26, .12);
            box-shadow: 0 -1px 4px 0 rgba(26, 26, 26, .01), 0 4px 8px 0 rgba(26, 26, 26, .12);
        }

        .caption-picture {
            height: 90px;
            width: 90px;
            border-radius: 5px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .success-msg>div {
            padding-top: 11px;
            padding-bottom: 31px;
        }

        .success-msg div.__success p:first-child {
            font-weight: 500;
            font-family: 'montserrat-semibold';
        }

        .__success__txt p {
            padding-left: 41px;
            font-size: 13px;
            padding-right: 480px;
            text-align: justify;
        }

        .__btn_success {
            display: inline-flex;
            margin-top: 31px;
            font-weight: 500;
        }

        .__btn_success button {
            font-size: 12px;
        }

        .__btn_success button:last-child {
            margin-left: 23px;
        }

        .success-msg {
            display: none
        }

        #messages_imageFileMessage_file {
            display: none
        }
        .content-success p {
            text-align: justify;
            font-size: 13px;
        }
        .__success p {
            font-weight: 500
        }
        button[data-name=email] {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .button[data-name=email]::before {
            background-color: #ff6565 !important
        }
        .detail h3 {
            font-size: 22px;
            color: #49494a;
        }
        .detail>div span {
            font-size: 12px;
            padding-left: 10px;
        }
        .detail>div svg {
            font-size: 15px;
            color: #0a0a0a;
        }
        .detail>div span {
            padding-right: 10px;
        }
        .sem-b {
            font-family: 'montserrat-semibold';
        }
        .fs-20 {
            font-size: 20px;
        }
        .pre-projet h3 {
            font-size: 20px
        }
        .mt-32 {
            margin-top: 32px
        }
        .pre-projet p {
        font-size: 13px;
        margin-top: 10px;
        text-align: justify;
        }
        .ml-21 {
            margin-left: 21px !important
        }
        .mt-10 {
            margin-top: 10px
        }
        .badge-primary {
            background-color: #54c0a7;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <section>
            <div class=\"row\">
                <div class=\"col-md-12 success-msg animated animate__bounceIn\">
                    <div class=\"row w-50\">
                        <div class=\"col-md-12 __success\">
                            <p>Votre message a bien été envoyé.</p>
                        </div>
                        <div class=\"col-md-12 d-flex content-success\">
                            <div class=\"pr-3\">
                                <img src=\"{{ asset('build/images/web/direct.png') }}\" width=\"50px\">
                            </div>
                            <p>
                                Il s’affichera dans quelques instants dans votre messagerie. Simple et rapide, elle vous
                                permet d’échanger avec les acheteurs et vendeurs du boncoin.
                            </p>
                        </div>
                        <div class=\"col-md-12 __btn_success\">
                            <a href=\"{{path('messagerie')}}\"><button type=\"button\" class=\"btn btn-primary\"
                                    data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">Acceder à la
                                    messagerie</button></a>
                            <button type=\"button\" class=\"btn btn-outline-primary\" data-toggle=\"button\" aria-pressed=\"false\"
                                autocomplete=\"off\"> Retour au projet </button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-7\">
                    <div class=\"card __first\">
                        <h5 class=\"mb-0 font-weight-bold pb-3\"> Envoyez un message à LesCityZens </h5>
                        {# <div class=\"d-flex align-items-center mt-2 mb-4\">
                            <i class=\"iconm-megaphone_muted mr-2\"></i>
                            Refuse tout type de démarchage commercial
                        </div> #}

                        {{ form_start(form) }}
                            {{ form_row(form.content) }}
                        {{ form_rest(form) }}
                            <div class=\"form-group\">
                                <button id=\"send__author__msg\" type=\"submit\" class=\"btn btnDisabled btn-sm w-100 mt-2\">
                                    <i class=\"fas fa-paper-plane mr-1\"></i>
                                    Envoyer
                                </button>
                            </div>
                        {{ form_end(form) }}
                        <p class=\"mt-3 mb-0\">
                            Me renseigner sur les finalités du traitement de mes données personnelles, les destinataires, le
                            responsable de traitement, les durées de conservation, les coordonnées du DPO et mes droits.
                        </p>
                    </div>

                </div>
                <div class=\"col-md-5\">
                    <div class=\"card\">
                        <div class=\"\">
                            <div class=\"d-flex\">
                                <div style=\"width: 75px; height:75px; overflow:hidden;background: #f9f9f9;\" class=\"rounded-circle mb-3 d-flex\">
                                <img src=\"{{ asset('build/images/static/logotype_lcz.svg') }}\" alt=\"nom de l'auteur\" class=\"w-100\">
                                </div>
                                <div class=\"d-grid ml-21\">
                                    <h4 class=\"fs-20 m-auto\"> LesCityZens </h4>
                                    <span class=\"badge badge-pill badge-primary mt-10\">Porteur de projet</span>
                                </div>
                                
                            </div>
                            
                            <hr class=\"w-100\">
                            <div class=\"detail\">
                                <h3 class=\"text-left\"> Projet #A80O208 </h3>
                                <div class=\"d-grid mt-8\">
                                    <div>
                                        <i class=\"fas fa-coins\"></i> <span class=\"sem-b\"> 1000€/m2 </span>
                                    </div>
                                    <div class=\"text-left\">
                                        <i class=\"fas fa-door-open\"></i> <span> 2/5 logements disponibles </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card mt-32 pre-projet\">
                            <h3>Présentation du projet</h3>
                            <p>
                                Projet d’habitat participatif réalisé à Besançon, cette opération de 10 à 14 logements s’inscrit dans le cadre d’un projet de logements plus vaste comprenant 18 logements locatifs sociaux installés face à la place de la Bascule, et de 6 maisons en accession sociale prenant place le long de la rue de la Pelouse. Les trois programmes sont réunis par un jardin en cœur d’îlot entièrement piéton et végétalisé. L’implantation du projet d’habitat participatif le protège des nuisances de la rue de la Pelouse et de la place de la Bascule. 
                            </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {# Modal #}
    <div class=\"modal fade bd-example-modal-md\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myMediumModalLabel\"
        aria-hidden=\"true\" id=\"modal-info\">
        <div class=\"modal-dialog modal-md\">
            <div class=\"modal-content p-4 text-center text-success\"></div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    <script>
        \$(function () 
        {
         
            \$('#messages_imageFileMessage_file').parent().parent().parent().hide();

            \$('.bnt-author button').click(function() 
            {
                \$('.modal-content').text(\$(this).data('info')).css(
                {
                    fontSize : '20px',
                    fontWeight : '500',
                });

                \$('#modal-info').modal('show');
            })

            

            function sendAuthorMsg() 
            {
                \$('#send__author__msg').prop('disabled', true);
                
                \$('#messages_content').on('input', function()
                {
                    if(\$(this).val().trim() !== '' && \$(this).val().length >= 60) 
                    {
                        \$('#send__author__msg').prop('disabled', false);
                        \$('#send__author__msg').removeClass('btnDisabled').addClass('btnSubmit');
                    } 
                    else 
                    {
                        \$('#send__author__msg').prop('disabled', true);
                        \$('#send__author__msg').addClass('btnDisabled').removeClass('btnSubmit');
                    }
                });
                
                \$('#messages_content').on('focus', function()
                {
                    if(\$(this).val().trim() !== '' && \$(this).val().length >= 60) 
                    {
                        \$('#send__author__msg').prop('disabled', false);
                        \$('#send__author__msg').removeClass('btnDisabled').addClass('btnSubmit');
                    } 
                    else 
                    {
                        \$('#send__author__msg').prop('disabled', true);
                        \$('#send__author__msg').addClass('btnDisabled').removeClass('btnSubmit');
                    }
                });

                \$('#messages_content').on('blur', function()
                {
                    \$('.text-success').remove();
                    \$('#send__author__msg').prop('disabled', true);
                    \$('#send__author__msg').addClass('btnDisabled').removeClass('btnSubmit');
                    if(\$(this).val().trim() === '') 
                    {
                        \$(this).after('<div style=\"font-size:12px; fontweight:500\" class=\"text-success mt-2\">Veuillez rédiger un message.</div>')
                    } else if
                    (\$(this).val().trim() !== '' && \$(this).val().length < 60) 
                    {
                        \$(this).after('<div style=\"font-size:12px; fontweight:500\" class=\"text-success mt-2\">Le message est trop court. Veuillez saisir au moins 60 caractères.</div>')
                    } else {
                        \$('#send__author__msg').prop('disabled', false);
                        \$('#send__author__msg').removeClass('btnDisabled').addClass('btnSubmit');
                        \$('#send__author__msg').on('click', ()=> {
                            console.log('soumis')
                            //\$('.success-msg').css('display', 'block')
                            \$('#send__author__msg').prop('disabled', true);
                            \$('#messages_content').val('')
                            \$('#send__author__msg').addClass('btnDisabled').removeClass('btnSubmit');
                            location.href = \"/projet/4\"
                            //history.back()
                        })
                    }

                    
                });
            }
            sendAuthorMsg();

        });
    </script>
{% endblock %}", "ad_messages/contact_ad_author.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/ad_messages/contact_ad_author.html.twig");
    }
}
