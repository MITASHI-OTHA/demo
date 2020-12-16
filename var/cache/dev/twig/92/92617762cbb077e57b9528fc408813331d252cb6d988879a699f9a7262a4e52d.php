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

/* messagerie/contacter.html.twig */
class __TwigTemplate_33c4f09752d069b1647ae7e075e3f0f8267bcd38b859e637587b1794424ed622 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messagerie/contacter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messagerie/contacter.html.twig"));

        // line 3
        $context["title"] = "contacter";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "messagerie/contacter.html.twig", 1);
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
    .container section {
        margin-top: 5%
    }
    .card {
            padding: 23px;
    }
 
    .__first div:nth-of-type(1) {
        position: relative;
        display: flex;
        margin-top: 6px;
    }
     .__first div:nth-of-type(1) span {
        padding-left: 8px;
        font-size: 10px;
    }
    .__first>div:nth-of-type(1):after {
        position: absolute;
        content: '';
        height: 2px;
        width: 21px;
        background-color: #a2a2a2;
        transform: rotate(34deg);
        left: -1px;
        top: 6px;
    }
    .row .card:nth-of-type(1) p {
         font-size: 10px;
         margin-top: 19px
    }
    .fa-bullhorn {
        color: #a2a2a2;
        font-size: 14px;
    }
    .card:hover {
        -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
        box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
    }
    .caption-picture {
        height: 90px;
        width: 90px;
        border-radius: 5px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .bnt-author {
        margin-top: 14px;
        display: inline-flex
    }
    .bnt-author button {
        font-size: 10px !important;
    }
    .bnt-author button:first-child {
        background: #ff000017 !important;
        color: #ff0000 !important;
        border: 1px dotted #ed1fff;
        font-family: Montserrat-semibold;
    }
    .bnt-author button:last-child {
        font-size: 10px !important;
        margin-left: 11px !important;
    }
    .success-msg>div{
        padding-top: 11px;
        padding-bottom: 31px;
    }
    .success-msg div.__success p:first-child {
        font-family: 'Montserrat-semibold';
    }
    .__success__txt {
        display: flex
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
        font-family: \"Montserrat-semibold\";
    }
    .__btn_success button {
        font-size: 12px;
    }
    .__btn_success button:last-child {
       margin-left: 23px;
    }
    .success-msg {
        display:none
    }
</style>
   <div class=\"container\">
        <section>
                <div class=\"row\">
                    <div class=\"col-md-12 success-msg animated animate__bounceIn\">
                        <div class=\"row\">
                            <div class=\"col-md-12 __success\">
                                <p>Votre message a bien été envoyé.</p>
                            </div>
                            <div class=\"col-md-12 __success__txt\">
                                <div>
                                    <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/direct.png"), "html", null, true);
        echo "\" width=\"50px\">
                                </div>
                                <p>
                                    Il s’affichera dans quelques instants dans votre messagerie. Simple et rapide, elle vous permet d’échanger avec les acheteurs et vendeurs du boncoin.
                                </p>
                            </div>
                            <div class=\"col-md-12 __btn_success\">
                                <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie");
        echo "\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">Acceder à la messagerie</button></a>
                                <button type=\"button\" class=\"btn btn-outline-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\"> Retour au projet </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5\">
                        <div class=\"card __first\">
                            <h6 style=\"margin-bottom: 0;\"> Envoyez un message à Guy Hawkins </h6>
                            <div>
                                <i class=\"fas fa-bullhorn\"></i>
                                <span>Refuse tout type de démarchage commercial</span>
                            </div>
                            <div class=\"form-group\" style=\"margin-top: 21px\">
                                <label for=\"exampleFormControlTextarea1\">Votre message</label>
                                <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"7\"></textarea>
                            </div>
                            <button type=\"button\" class=\"btn btn-primary btn-sm\"> Envoyer </button>
                            <p>
                                Me renseigner sur les finalités du traitement de mes données personnelles, les destinataires, le responsable de traitement, les durées de conservation, les coordonnées du DPO et mes droits.
                            </p>
                        </div>
                        
                    </div>
                    <div class=\"col-md-7\">
                        <div class=\"card\">
                            <div class=\"row\">
                                <div class=\"col-md-3\">
                                        <div class=\"caption-picture\" style=\"background-image: url(";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/pexels-jeffrey-reed-769772.jpg"), "html", null, true);
        echo ")\">

                                        </div>
                                </div>
                                <div style=\"display: grid;\">
                                        <h4> Guy Hawkins </h4>
                                        <span> CEO, Web Agency </span>
                                        <div class=\"bnt-author\">
                                            <button type=\"button\" class=\"btn btn-primary btn-tiny\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\" data-info=\"0600000000\"> <i class=\"fas fa-phone-alt\"></i> Afficher le numéro </button>
                                            <button type=\"button\" class=\"btn btn-light btn-tiny\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\" data-info=\"xxx@gmail.com\"> <i class=\"fas fa-at\"></i> Afficher l'émail</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    ";
        // line 164
        echo "    <div class=\"modal fade bd-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" id=\"modal-info\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\" style=\"padding: 34px;\">
                
            </div>
        </div>
    </div>
        ";
        // line 171
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 172
        echo "            <script>
                \$(function() {
                    \$('.bnt-author button').on('click', function() {
                            var info = \$(this).data('info')
                            \$('.modal-content').html('<h3 style=\"text-align: center\">'+info+'</h3>')
                            \$('#modal-info').modal('show')
                    })
                    \$('.__first button').on('click', ()=> {
                        \$('.success-msg').css('display', 'block')
                    })
                })
            </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "messagerie/contacter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 172,  262 => 171,  251 => 185,  249 => 171,  240 => 164,  219 => 145,  189 => 118,  179 => 111,  72 => 6,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'contacter' %}
    
{% block body %}
<style>
    .container section {
        margin-top: 5%
    }
    .card {
            padding: 23px;
    }
 
    .__first div:nth-of-type(1) {
        position: relative;
        display: flex;
        margin-top: 6px;
    }
     .__first div:nth-of-type(1) span {
        padding-left: 8px;
        font-size: 10px;
    }
    .__first>div:nth-of-type(1):after {
        position: absolute;
        content: '';
        height: 2px;
        width: 21px;
        background-color: #a2a2a2;
        transform: rotate(34deg);
        left: -1px;
        top: 6px;
    }
    .row .card:nth-of-type(1) p {
         font-size: 10px;
         margin-top: 19px
    }
    .fa-bullhorn {
        color: #a2a2a2;
        font-size: 14px;
    }
    .card:hover {
        -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
        box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
    }
    .caption-picture {
        height: 90px;
        width: 90px;
        border-radius: 5px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .bnt-author {
        margin-top: 14px;
        display: inline-flex
    }
    .bnt-author button {
        font-size: 10px !important;
    }
    .bnt-author button:first-child {
        background: #ff000017 !important;
        color: #ff0000 !important;
        border: 1px dotted #ed1fff;
        font-family: Montserrat-semibold;
    }
    .bnt-author button:last-child {
        font-size: 10px !important;
        margin-left: 11px !important;
    }
    .success-msg>div{
        padding-top: 11px;
        padding-bottom: 31px;
    }
    .success-msg div.__success p:first-child {
        font-family: 'Montserrat-semibold';
    }
    .__success__txt {
        display: flex
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
        font-family: \"Montserrat-semibold\";
    }
    .__btn_success button {
        font-size: 12px;
    }
    .__btn_success button:last-child {
       margin-left: 23px;
    }
    .success-msg {
        display:none
    }
</style>
   <div class=\"container\">
        <section>
                <div class=\"row\">
                    <div class=\"col-md-12 success-msg animated animate__bounceIn\">
                        <div class=\"row\">
                            <div class=\"col-md-12 __success\">
                                <p>Votre message a bien été envoyé.</p>
                            </div>
                            <div class=\"col-md-12 __success__txt\">
                                <div>
                                    <img src=\"{{ asset('build/images/web/direct.png') }}\" width=\"50px\">
                                </div>
                                <p>
                                    Il s’affichera dans quelques instants dans votre messagerie. Simple et rapide, elle vous permet d’échanger avec les acheteurs et vendeurs du boncoin.
                                </p>
                            </div>
                            <div class=\"col-md-12 __btn_success\">
                                <a href=\"{{path('messagerie')}}\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\">Acceder à la messagerie</button></a>
                                <button type=\"button\" class=\"btn btn-outline-primary\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\"> Retour au projet </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5\">
                        <div class=\"card __first\">
                            <h6 style=\"margin-bottom: 0;\"> Envoyez un message à Guy Hawkins </h6>
                            <div>
                                <i class=\"fas fa-bullhorn\"></i>
                                <span>Refuse tout type de démarchage commercial</span>
                            </div>
                            <div class=\"form-group\" style=\"margin-top: 21px\">
                                <label for=\"exampleFormControlTextarea1\">Votre message</label>
                                <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"7\"></textarea>
                            </div>
                            <button type=\"button\" class=\"btn btn-primary btn-sm\"> Envoyer </button>
                            <p>
                                Me renseigner sur les finalités du traitement de mes données personnelles, les destinataires, le responsable de traitement, les durées de conservation, les coordonnées du DPO et mes droits.
                            </p>
                        </div>
                        
                    </div>
                    <div class=\"col-md-7\">
                        <div class=\"card\">
                            <div class=\"row\">
                                <div class=\"col-md-3\">
                                        <div class=\"caption-picture\" style=\"background-image: url({{ asset('build/images/web/pexels-jeffrey-reed-769772.jpg') }})\">

                                        </div>
                                </div>
                                <div style=\"display: grid;\">
                                        <h4> Guy Hawkins </h4>
                                        <span> CEO, Web Agency </span>
                                        <div class=\"bnt-author\">
                                            <button type=\"button\" class=\"btn btn-primary btn-tiny\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\" data-info=\"0600000000\"> <i class=\"fas fa-phone-alt\"></i> Afficher le numéro </button>
                                            <button type=\"button\" class=\"btn btn-light btn-tiny\" data-toggle=\"button\" aria-pressed=\"false\" autocomplete=\"off\" data-info=\"xxx@gmail.com\"> <i class=\"fas fa-at\"></i> Afficher l'émail</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    {# Modal #}
    <div class=\"modal fade bd-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\" id=\"modal-info\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\" style=\"padding: 34px;\">
                
            </div>
        </div>
    </div>
        {% block javascripts %}
            <script>
                \$(function() {
                    \$('.bnt-author button').on('click', function() {
                            var info = \$(this).data('info')
                            \$('.modal-content').html('<h3 style=\"text-align: center\">'+info+'</h3>')
                            \$('#modal-info').modal('show')
                    })
                    \$('.__first button').on('click', ()=> {
                        \$('.success-msg').css('display', 'block')
                    })
                })
            </script>
        {% endblock %}
    
{% endblock %}", "messagerie/contacter.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/messagerie/contacter.html.twig");
    }
}
