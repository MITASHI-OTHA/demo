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

/* candidater/candidater.html.twig */
class __TwigTemplate_b17a0618504d211407efc5b56e62575feb3a6c6845147ecaebecf5c6ee09e382 extends \Twig\Template
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
            '_candidature_acquereurs_entry_row' => [$this, 'block__candidature_acquereurs_entry_row'],
            '_candidature_acquereurs_row' => [$this, 'block__candidature_acquereurs_row'],
            '_candidature_credits_entry_row' => [$this, 'block__candidature_credits_entry_row'],
            '_candidature_credits_row' => [$this, 'block__candidature_credits_row'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidater/candidater.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidater/candidater.html.twig"));

        // line 2
        $context["title"] = "Candidater";
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "candidater/candidater.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <style>
    .line-steps {
    margin-top: 3em
    }
    .lines-dotted {
    position: relative;
    width: 50%;
    height: 1px;
    background-color: #ddd;
    }
    .lines-dotted ul {
    position: absolute;
    left: -3px;
    right: 0;
    list-style: none;
    top: -24px;
    margin-left: 0;
    padding-left: 0px;
    display: flex;
    flex-wrap: inherit;
    }
    .lines-dotted ul li {
    display: inline;
    cursor: pointer
    }
    .lines-dotted ul li div {
    width: 50px;
    height: 50px;
    background:#e7edf3;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #667d99;
    font-weight: 500
    }
    .actives font {
        color: #fff !important
    }
    .lines-dotted ul li:not(.first-li) {
    margin-left: 60px
    }
    section h5 {
    position: relative
    }
    section h5::after  {
        position: absolute;
        content: '';
        height: 5px;
        width: 23px;
        background-color: #02d0b5;
        bottom: -10px;
        left: 0;
    }
    .parent-slider-coulis {
        width: 500px;
        background-color: grey;
        height: 350px;
        overflow-y: hidden;
        overflow: hidden;
    }
    .slid-carousel {
        background: yellow;
        width: fit-content;
        margin: 11px;
        display: flex;
    }
    .item-child-carousel {
        width: 468px;
        margin: 11px;
        background: aqua;
        height: 300px;
    }
    .panel {
        background: #E7EDF3;
        margin-top: 27px;
        width: 50%;
        border-radius: 5px;
        font-size: .85rem;
    }
    .panel p {
    font-size: 13px;
    }
    .form-group>.form-group:first-child, .form-check-inline>.form-check:first-child {
    padding-left: 0;
    }
    .tap-pane {
    text-align: justify;
    }
    .type-fy>div {
    position: relative
    }
    .type-fy>div>svg {
        position: absolute;
        right: -20px;
        top: 40px;
        cursor: pointer
    }
    .custom-p {
    margin-bottom: 3px;
    margin-top: 11px;
    }
    .add-co-btn {
        margin-top: 1em;
        background-color: #2CF6DC !important;
        color: #026A64 !important;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
        font-size: 14px;
        padding-bottom: 10px;
    }
    .infos-autre {
        padding: 7px;
        border: 1px dotted #FF0707;
        width: 50%;
    }
    .infos-autre p {
    text-align: justify;
    font-size: 13px;
    }
    .cr-e-txt {
    padding: 5px;
    color: #993700;
    background: #FFE3D7;
    width: 50%;
    border-radius: 5px;
    }
    .cr-e-txt p {
    font-size: 13px;
    }
    .table-bordered thead th, .table-bordered thead td {
    font-family:'Montserrat-semibold';
    font-size: 12px;
    }
    .table-bordered th, .table-bordered td {
    font-size: 12px;
    }
    td input {
    padding: 0;
    margin: 0;
    width: 100%;
    border: none;
    }
    td input:focus {
    outline: none;
    }
    .lab-cgu {
    margin-top: 17px;
    padding-left: 11px;
    }
    .actives {
    background: #00d0b5 !important;
    border: 4px solid #00d0b5;
    color: #fff !important;
    }
    .ml-38 {
    margin-left: 38%
    }
    #candidature_logementDesire_type {
    display: flex;
    column-gap: 15px;
    }
    .col-form-label {
     font-size: 17px;
    }
    #candidature_acquereur_financiaryProfessionalSituation_statusEmploi {
      display: flex;
      column-gap: 19px;
    }
    .fa-question-circle {
      font-size: 13px;
    }
    label[for=candidature_acquereur_financiaryProfessionalSituation_apportPersonnel], label[for\$=financiaryProfessionalSituation_autresRevenus], label[for\$=financiaryProfessionalSituation_apportPersonnel] {
        padding-bottom: 11px;
        padding-top: calc(0.375rem + 1px);
        margin-bottom: 0;
    }
    input[id=candidature_acquereur_financiaryProfessionalSituation_autresRevenus] {
        width: 50% !important
    }
    div[id^=candidature_acquereurs_] {
        display: flex;
       column-gap: 19px;
    }
    label[for\$=financiaryProfessionalSituation_salaireMoyen], label[for\$=financiaryProfessionalSituation_avisImposition] {
        display: none
    }
    div[id^=entry_candidature_acquereurs] {
        padding-top: 15px;
        border-top: 1px dotted #ddd;
        margin-top: 11px;
    }
    .add-co {
        font-weight: 600;
    }
    .table th, .table td {
        vertical-align: middle;
    }
    .table-credit {
        display: none
    }
    .deleteCredits {
        font-size: 15px;
        cursor: pointer
    }
    .deleteCredits:active {
        transform: scale(1.3)
    }
    .enregistrer {
        margin-top: 1em;
    }
    .Credits.prototype{
        white-space: nowrap;
    }
    #addCredit:focus {
        outline: none
    }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 225
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 226
        echo "
    <section>
        <div class=\"container\">
            <h1>Candidater</h1>
            ";
        // line 231
        echo "            <div class=\"line-steps\">
                    <div class=\"lines-dotted\">
                        <ul class=\"nav\" id=\"myTab\" role=\"tablist\">
                            <li class=\"first-li nav-item\">
                                <div class=\"actives\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">
                                    1
                                </div>
                                
                            </li>
                            <li id=\"profile-tab nav-item\">
                                <div  data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"true\">
                                    2
                                </div>
                                
                            </li>
                            <li id=\"contact-tab nav-item\">
                                <div  data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"true\">
                                    3
                                </div>
                                
                            </li>
                            <li id=\"finance-tab nav-item\">
                                <div  data-toggle=\"tab\" href=\"#finance\" role=\"tab\" aria-controls=\"finance\" aria-selected=\"true\">
                                    4
                                </div>
                                
                            </li>
                            <li id=\"interet-tab nav-item\">
                                <div  data-toggle=\"tab\" href=\"#interet\" role=\"tab\" aria-controls=\"interet\" aria-selected=\"true\">
                                    5
                                </div>
                            </li>
                            <li id=\"interet-tab nav-item\">
                                <div  data-toggle=\"tab\" href=\"#cgu\" role=\"tab\" aria-controls=\"cgu\" aria-selected=\"true\">
                                    6
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
            ";
        // line 272
        echo "            <div class=\"row form-candidate\" style=\"margin-top: 5em\">
                ";
        // line 273
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), 'form_start');
        echo "
                    <div class=\"col-md-9\">
                        <div class=\"tab-content\" id=\"myTabContent\">
                            ";
        // line 277
        echo "                            <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                <h5> Consignes </h5>
                                    <p class=\"pt-4 text-justify\" style=\"font-size: 14px;\">
                                        Ce formulaire vaut dossier de candidature. Seuls les formulaires complétés intégralement et validés à la fin seront transmis au chef de projet et étudiés.
                                        
                        
                                         Les champs signalés par un astérisque (*) sont obligatoires. Ce formulaire est composé de 5 étapes. 
                                         
                                         <br>
                                         <br>
                                        Vous pouvez modifier vos informations autant de fois que vous le souhaitez, tant que le formulaire n'a pas été transmis. <br>
                                            <br>
                                        Pour soumettre votre candidature, n’oubliez pas de cliquer sur le bouton « Transmettre ma candidature ». 
                                        <br>
                                        <br>
                                        Pour toute question sur le projet, veuillez contacter le porteur de projet via la page projet ou l’onglet messagerie de votre espace personnel. <br><br>

                                        Si vous rencontrez un problème technique, vous pouvez contacter le support informatique à l’adresse contact@lescityzens.fr. 
                                    </p>
                                    <button type=\"button\" class=\"btn btn-primary\" style=\"float: right\" data-next=\"profile\">Continuer <i class=\"fas fa-arrow-right\"></i> </button>
                            </div>
                        ";
        // line 299
        echo "                            <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                                    <h5> Mon logement actuel et mon projet </h5>
                                    <div class=\"panel p-3\">
                                            Tant que le questionnaire n'a pas été intégralement complété et transmis, vous pouvez à tout moment modifier les champs renseignés. Pensez à enregistrer avant de quitter le questionnaire. 
                                    </div>
                                    
                                        <div class=\"form-group\" style=\"margin-top: 2em\">
                                            <div class=\"form-group col-md-12 pr-2 mb-0\">
                                                
                                                        ";
        // line 308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "LogementActuel", [], "any", false, false, false, 308), "types", [], "any", false, false, false, 308), 'row');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "LogementActuel", [], "any", false, false, false, 313), "statuts", [], "any", false, false, false, 313), 'row');
        echo "
                                               
                                            </div>
                                            
                                             <div class=\"col-md-4 type-fy\">
                                                ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "LogementActuel", [], "any", false, false, false, 318), "taille", [], "any", false, false, false, 318), 'row');
        echo "
                                                
                                            </div>
                                        </div>
                                        <div class=\"form-group\" >
                                            <div class=\"form-group col-md-12 pr-2 mb-0\">
                                                <fieldset class=\"form-group\">
                                                    <h6 class=\"col-form-label required\">Type de logement actuel recherché* :</h6>
                                                        ";
        // line 326
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "logementDesire", [], "any", false, false, false, 326), "type", [], "any", false, false, false, 326), 'row');
        echo "

                                                 
                                                </fieldset>
                                            </div>
                                        </div>
                                        ";
        // line 333
        echo "                                        <section>
                                            <h6> Surfaces souhaitées* </h6>
                                            <div class=\"row mt-3\">
                                                    <div class=\"col-md-4\">
                                                        ";
        // line 337
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 337, $this->source); })()), "logementDesire", [], "any", false, false, false, 337), "surface_min", [], "any", false, false, false, 337), 'row');
        echo "
                                                       
                                                    </div>
                                                    
                                                    <div class=\"col-md-4 type-fy\">
                                                        ";
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "logementDesire", [], "any", false, false, false, 342), "surface_max", [], "any", false, false, false, 342), 'row');
        echo "
                                                        
                                                    </div>
                                                </div> 
                                        </section>
                                        <section class=\"mt-3\">
                                            <h6> L’enveloppe maximum que vous êtes prêt à mettre* </h6>
                                            <div class=\"row mt-3\">
                                                    <div class=\"col-md-4\">
                                                    
                                                     ";
        // line 352
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 352, $this->source); })()), "logementDesire", [], "any", false, false, false, 352), "enveloppe_max", [], "any", false, false, false, 352), 'row');
        echo "
                                                        
                                                    </div>
                                                    
                                                   
                                                </div> 
                                        </section>
                                        <div>
                                            <button type=\"button\" class=\"btn btnSubmit\" style=\"margin-top: 1em;color: #fff\" data-prev=\"home\"> <i class=\"fas fa-arrow-left mr-1\"></i>Precedent</button>

                                            <button type=\"button\" class=\"btn ml-2 btnSubmit\" style=\"margin-top: 1em\" data-next=\"contact\">Continuer<i class=\"fas fa-arrow-right ml-1\"></i> </button>
                                             <a href=\"#\" class=\"btn btnSubmitBlue enregistrer ml-2\"> <i class=\"fas fa-save mr-1\"></i>Enregistrer </a>
                                        </div>
                                         
                                    </div>";
        // line 368
        echo "<div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
                                     <h5> Mon menage </h5>
                                    <div class=\"panel p-3\">
                                            Tant que le questionnaire n'a pas été intégralement complété et transmis, vous pouvez à tout moment modifier les champs renseignés. Pensez à enregistrer avant de quitter le questionnaire. 
                                    </div>
                                    <section>
                                        <div style=\"margin-top: 2em\">
                                                    <div class=\"col-md-12 pr-2 mb-0\">
                                                        <fieldset class=\"form-group\">
                                                                    ";
        // line 377
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 377, $this->source); })()), "acquereur", [], "any", false, false, false, 377), "gender", [], "any", false, false, false, 377), 'row');
        echo "
                                                        </fieldset>
                                                        <div class=\"row\">
                                                            <div class=\"col-md-6\">
                                                                ";
        // line 381
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 381, $this->source); })()), "acquereur", [], "any", false, false, false, 381), "lastname", [], "any", false, false, false, 381), 'row');
        echo "
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                ";
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), "acquereur", [], "any", false, false, false, 384), "firstname", [], "any", false, false, false, 384), 'row');
        echo "
                                                            </div>
                                                            <div class=\"col-md-6\">
                                                                ";
        // line 387
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 387, $this->source); })()), "acquereur", [], "any", false, false, false, 387), "date_anniversaire", [], "any", false, false, false, 387), 'row');
        echo "
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                ";
        // line 390
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "acquereur", [], "any", false, false, false, 390), "code_postal", [], "any", false, false, false, 390), 'row');
        echo "
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                ";
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), "acquereur", [], "any", false, false, false, 393), "ville", [], "any", false, false, false, 393), 'row');
        echo "
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                ";
        // line 396
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "acquereur", [], "any", false, false, false, 396), "addresse", [], "any", false, false, false, 396), 'row');
        echo "
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                    ";
        // line 399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "acquereur", [], "any", false, false, false, 399), "pays", [], "any", false, false, false, 399), 'row');
        echo "
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                ";
        // line 402
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "acquereur", [], "any", false, false, false, 402), "tel_mobile", [], "any", false, false, false, 402), 'row');
        echo "
                                                              
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                ";
        // line 406
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), "acquereur", [], "any", false, false, false, 406), "tel_fixe", [], "any", false, false, false, 406), 'row');
        echo "
                                                              
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                ";
        // line 410
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 410, $this->source); })()), "acquereur", [], "any", false, false, false, 410), "tel_professional", [], "any", false, false, false, 410), 'row');
        echo "
                                                               
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                 ";
        // line 414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 414, $this->source); })()), "acquereur", [], "any", false, false, false, 414), "email", [], "any", false, false, false, 414), 'row');
        echo "
                                                              
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    ";
        // line 420
        echo "                                                   
                                                     ";
        // line 422
        echo "                                               <div>
                                                    <button type=\"button\" class=\"btn btnSubmit\" style=\"margin-top: 1em;color: #fff\" data-prev=\"profile\"><i class=\"fas fa-arrow-left mr-1\"></i>Precedent</button>

                                                    <button type=\"button\" class=\"btn btnSubmit ml-2\" style=\"margin-top: 1em;\" data-next=\"finance\">Continuer<i class=\"fas fa-arrow-right ml-1\"></i></button>
                                                    <a href=\"#\" class=\"btn btnSubmitBlue enregistrer ml-2\"><i class=\"fas fa-save mr-1\"></i>Enregistrer </a>
                                                </div>
                                    </section>
                            </div>
                        ";
        // line 431
        echo "                        ";
        // line 432
        echo "                             <div class=\"tab-pane fade\" id=\"finance\" role=\"tabpanel\" aria-labelledby=\"finance\">
                                    <h5>Ma situation professionnelle et financière</h5>
                                    <div class=\"panel p-3\">
                                            Tant que le questionnaire n'a pas été intégralement complété et transmis, vous pouvez à tout moment modifier les champs renseignés. Pensez à enregistrer avant de quitter le questionnaire. 
                                    </div>
                                    <br>
                                            ";
        // line 438
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 438, $this->source); })()), "acquereur", [], "any", false, false, false, 438), "financiaryProfessionalSituation", [], "any", false, false, false, 438), "statusEmploi", [], "any", false, false, false, 438), 'row');
        echo "
                                                <div class=\"row\">
                                                        ";
        // line 441
        echo "                                                        <div class=\"col-md-6\">
                                                            <h6 class=\"col-form-label required\" style=\"padding-bottom: 11px\">Acquéreur- Salaire mensuel moyen * <i class=\"fas fa-question-circle\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"(total annuel net primes incluses divisé par 12\"></i></h6>
                                                            ";
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 443, $this->source); })()), "acquereur", [], "any", false, false, false, 443), "financiaryProfessionalSituation", [], "any", false, false, false, 443), "salaireMoyen", [], "any", false, false, false, 443), 'row');
        echo "
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            ";
        // line 446
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 446, $this->source); })()), "acquereur", [], "any", false, false, false, 446), "financiaryProfessionalSituation", [], "any", false, false, false, 446), "apportPersonnel", [], "any", false, false, false, 446), 'row');
        echo "
                                                        </div>
                                                </div>
                                                        ";
        // line 450
        echo "                                                        <fieldset>
                                                                <h6 class=\"col-form-label required\" style=\"padding-bottom: 11px\">Acquéreur- Revenus imposables* <i class=\"fas fa-question-circle\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"(revenu fiscal de référence tel qu’indiqué sur votre avis d’imposition après l’abattement de 10 %)*\"></i></h6>
                                                                ";
        // line 452
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "acquereur", [], "any", false, false, false, 452), "financiaryProfessionalSituation", [], "any", false, false, false, 452), "avisImposition", [], "any", false, false, false, 452), 'row');
        echo "
                                                        </fieldset>
                                                        
                                                        ";
        // line 456
        echo "                                                        
                                                            <h6 class=\"col-form-label required\" style=\"padding-bottom: 11px\">Autre revenus mensuel (facultatif) </h6>
                                                            <div class=\"panel p-3\">
                                                                    Additionnez les montants mensuels de vos autres sources de revenus 
                                                                    (prestations familiales, pensions, rentes, revenus fonciers, etc.). 
                                                                    Exemple : si vous êtes propriétaire d’un logement pour lequel vous 
                                                                    percevez un loyer de 500 € et que la CAF vous verse des aides à 
                                                                    hauteur de 150 € par mois, écrivez “650”
                                                              
                                                            </div>
                                                            <fieldset class=\"mt-3 \">
                                                                ";
        // line 467
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 467, $this->source); })()), "acquereur", [], "any", false, false, false, 467), "financiaryProfessionalSituation", [], "any", false, false, false, 467), "autresRevenus", [], "any", false, false, false, 467), 'row');
        echo "
                                                            </fieldset>
                                                            <div class=\"autre-revenu\"></div>
                                                        <br>
                                                        
                                                        ";
        // line 473
        echo "                                                        <fieldset class=\"table-credit\">
                                                            <h6 class=\"col-form-label required mt-3\" style=\"padding-bottom: 11px\"> Crédit en cours (facultatif) </h6>
                                                            <div class=\"panel p-3\">
                                                                    Indiquez pour chacun la date de début (jj/mm/aaaa), la date de fin (jj/mm/aaaa) et le montant des mensualités (en €).
                                                            </div>
                                                            <table class=\"table table-bordered  mt-5\">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope=\"col\"></th>
                                                                            <th scope=\"col\">DATE DE DEBUT (jj/mm/aaaa)</th>
                                                                            <th scope=\"col\">DATE DE FIN (jj/mm/aaaa)</th>
                                                                            <th scope=\"col\">MENSUALITE (€)</th>
                                                                            <th scope=\"col\"> Action </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                       ";
        // line 490
        echo "                                                                    </tbody>
                                                                </table> 
                                                        </fieldset>
                                                        
                                                        <br>
                                                        
                                                            
                                                            <div id=\"add_credit\"></div>
                                                            ";
        // line 499
        echo "                                                        <div class=\"mt-5\">
                                                            <button type=\"button\" class=\"btn btnSubmit\" style=\"margin-top: 1em;color: #fff\" data-prev=\"contact\"><i class=\"fas fa-arrow-left mr-1\"></i>Precedent</button>

                                                            <button type=\"button\" class=\"btn btnSubmit ml-2\" data-next=\"interet\" style='margin-top: 1em;'> Suivant <i class=\"fas fa-arrow-right ml-1\"></i></button>
                                                            <a href=\"#\" class=\"btn btnSubmitBlue enregistrer ml-2\"> <i class=\"fas fa-save mr-1\"></i> Enregistrer </a>
                                                        </div>
                                                    </div>
                            ";
        // line 507
        echo "                             <div class=\"tab-pane fade\" id=\"interet\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                                    <h5>Mon intérêt pour l’habitat participatif</h5>
                                    <div class=\"panel p-3\">
                                            Tant que le questionnaire n'a pas été intégralement complété et transmis, vous pouvez à tout moment modifier les champs renseignés. Pensez à enregistrer avant de quitter le questionnaire. 
                                    </div>
                                    <br>
                                        ";
        // line 513
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 513, $this->source); })()), "motivationParticipation", [], "any", false, false, false, 513), "motivation", [], "any", false, false, false, 513), 'row');
        echo "

                                        ";
        // line 515
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 515, $this->source); })()), "motivationParticipation", [], "any", false, false, false, 515), "vie_quartier", [], "any", false, false, false, 515), 'row');
        echo "

                                        ";
        // line 517
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 517, $this->source); })()), "motivationParticipation", [], "any", false, false, false, 517), "echange_mutualisation", [], "any", false, false, false, 517), 'row');
        echo "

                                         ";
        // line 519
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 519, $this->source); })()), "motivationParticipation", [], "any", false, false, false, 519), "connaissance_annonce", [], "any", false, false, false, 519), 'row');
        echo "
                                    <br>
                                        <div class=\"mt-5\">
                                            <button type=\"button\" class=\"btn btnSubmit\" style=\"margin-top: 1em;color: #fff\" data-prev=\"finance\"><i class=\"fas fa-arrow-left mr-1\"></i>Precedent</button>

                                            <button type=\"button\" class=\"btn btnSubmit ml-2\" data-next=\"cgu\" style='margin-top: 1em;'> Suivant <i class=\"fas fa-arrow-right ml-1\"></i></button>
                                            <a href=\"#\" class=\"btn btnSubmitBlue enregistrer ml-2\"> <i class=\"fas fa-save mr-1\"></i> Enregistrer </a>
                                        </div>
                                    </div>
                                    ";
        // line 529
        echo "                                    ";
        // line 530
        echo "                             <div class=\"tab-pane fade\" id=\"cgu\" role=\"tabpanel\" aria-labelledby=\"cgu\">
                                        <h5>Validation de ma candidature</h5>
                                    <div class=\"panel p-3\" style=\"width: auto\">
                                        <p>
                                            Attention : en cliquant sur « Transmettre ma candidature », vous validez cette dernière et ne pourrez plus revenir sur ce formulaire pour modifier vos informations. Si malgré votre vigilance vous deviez apportez des modifications ultérieures, merci de prendre contact avec l’équipe de LesCityZens via l’adresse candidatures@lescityzens.fr. 
                                        </p>
                                    </div>
                                    <br>
                                        <fieldset class=\"form-group\">
                                                
                                                 ";
        // line 540
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 540, $this->source); })()), "checks", [], "any", false, false, false, 540), 'row');
        echo "
                                        </fieldset>
                                        <div>
                                            <button type=\"button\" class=\"btn btn-danger\" style=\"margin-top: 1em;color: #fff\" data-prev=\"interet\"><i class=\"fas fa-arrow-left\"></i> Precedent</button>

                                            <button type=\"button\" class=\"btn btn-primary ml-2\" style='margin-top: 1em'> Transmettre ma candidature </button>
                                        </div>
                                    </div>
                             </div>
                        </div>   
                    </div>
                ";
        // line 551
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 551, $this->source); })()), 'form_end');
        echo "
               
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 559
    public function block__candidature_acquereurs_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_acquereurs_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_acquereurs_entry_row"));

        // line 560
        echo "                            <div id=\"entry_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 560, $this->source); })()), "html", null, true);
        echo "\" class=\"d-flex Personne mt-5 \">
                                <div class=\"row\">
                                    <div class=\"col add-co\">
                                        <p> Co Acquéreur </p>
                                    </div>
                                    <div class=\"col-md-12\">
                                            ";
        // line 566
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "gender", [], "any", false, false, false, 566), 'row', ["label" => "Civilité*"]);
        echo "
                                    </div>
                                     <div class=\"col-md-6\">
                                            ";
        // line 569
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 569, $this->source); })()), "lastname", [], "any", false, false, false, 569), 'row', ["label" => "Nom*"]);
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                            ";
        // line 572
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 572, $this->source); })()), "firstname", [], "any", false, false, false, 572), 'row', ["label" => "Prénom*"]);
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                            ";
        // line 575
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 575, $this->source); })()), "date_anniversaire", [], "any", false, false, false, 575), 'row', ["label" => "date anniversaire"]);
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                            ";
        // line 578
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 578, $this->source); })()), "code_postal", [], "any", false, false, false, 578), 'row', ["label" => "Code postal*"]);
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                            ";
        // line 581
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 581, $this->source); })()), "ville", [], "any", false, false, false, 581), 'row', ["label" => "Ville*"]);
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                            ";
        // line 584
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 584, $this->source); })()), "addresse", [], "any", false, false, false, 584), 'row', ["label" => "Addresse"]);
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                            ";
        // line 587
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 587, $this->source); })()), "pays", [], "any", false, false, false, 587), 'row', ["label" => "Pays"]);
        echo "
                                    </div>
                                   <div class=\"col-md-6\">
                                            ";
        // line 590
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "tel_mobile", [], "any", false, false, false, 590), 'row', ["label" => "Téléphone portable*"]);
        echo "
                                   </div>
                                    <div class=\"col-md-6\">
                                            ";
        // line 593
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 593, $this->source); })()), "tel_fixe", [], "any", false, false, false, 593), 'row', ["label" => "Téléphone du domicile*"]);
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                            ";
        // line 596
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 596, $this->source); })()), "tel_professional", [], "any", false, false, false, 596), 'row', ["label" => "Téléphone professionnel*"]);
        echo "
                                    </div>
                                    <div class=\"col-md-12\">
                                            ";
        // line 599
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 599, $this->source); })()), "email", [], "any", false, false, false, 599), 'row', ["label" => "E-mail"]);
        echo "
                                    </div>
                                    <div class=\"col-md-12\">
                                        ";
        // line 602
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 602, $this->source); })()), "financiaryProfessionalSituation", [], "any", false, false, false, 602), "statusEmploi", [], "any", false, false, false, 602), 'row');
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6 class=\"col-form-label required\" style=\"padding-bottom: 11px\">Acquéreur- Salaire mensuel moyen * <i class=\"fas fa-question-circle\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"(total annuel net primes incluses divisé par 12\"></i></h6>
                                        ";
        // line 606
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 606, $this->source); })()), "financiaryProfessionalSituation", [], "any", false, false, false, 606), "salaireMoyen", [], "any", false, false, false, 606), 'row');
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                        ";
        // line 609
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 609, $this->source); })()), "financiaryProfessionalSituation", [], "any", false, false, false, 609), "apportPersonnel", [], "any", false, false, false, 609), 'row');
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6 class=\"col-form-label required\" style=\"padding-bottom: 11px\">Acquéreur- Revenus imposables* <i class=\"fas fa-question-circle\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"(revenu fiscal de référence tel qu’indiqué sur votre avis d’imposition après l’abattement de 10 %)*\"></i></h6>
                                        ";
        // line 613
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 613, $this->source); })()), "financiaryProfessionalSituation", [], "any", false, false, false, 613), "avisImposition", [], "any", false, false, false, 613), 'row');
        echo "
                                    </div>
                                    <div class=\"col-md-6\">
                                        ";
        // line 616
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 616, $this->source); })()), "financiaryProfessionalSituation", [], "any", false, false, false, 616), "autresRevenus", [], "any", false, false, false, 616), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"flex-shrink-1\">
                                    <button type=\"button\" class=\"btn btn-danger deletePersonne btn-sm\"><i class=\"fas fa-times\"></i></button>
                                </div>
                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 624
    public function block__candidature_acquereurs_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_acquereurs_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_acquereurs_row"));

        // line 625
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 625, $this->source); })()), 'row');
        echo "
                            <button type=\"button\" id=\"addPersonne\" class=\"btn btnSubmit\" data-next=\"contact\"><i class=\"fas fa-plus\"></i> ajouter un acquereur</button>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 630
    public function block__candidature_credits_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_credits_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_credits_entry_row"));

        // line 631
        echo "                            <tr id=\"entry_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 631, $this->source); })()), "html", null, true);
        echo "\" class=\"Credits prototype\">
                                <th scope=\"row\"> CREDIT </th>
                                <td>
                                    ";
        // line 634
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 634, $this->source); })()), "begin", [], "any", false, false, false, 634), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 637
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 637, $this->source); })()), "end", [], "any", false, false, false, 637), 'row');
        echo "
                                </td>
                                <td>
                                    ";
        // line 640
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 640, $this->source); })()), "payementMois", [], "any", false, false, false, 640), 'row');
        echo "
                                </td>
                                <td class=\"text-center\">
                                    <i class=\"far fa-trash-alt deleteCredits\" title=\"supprimer ce credit\"></i>
                                </td>
                            </tr>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 647
    public function block__candidature_credits_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_credits_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_credits_row"));

        // line 648
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 648, $this->source); })()), 'row');
        echo "
                        <button type=\"button\" id=\"addCredit\" class=\"btnSubmitOutline\"> <i class=\"fas fa-plus\"></i>  ajouter un crédits</button>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 651
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 652
        echo "     <script>
            \$(function(){
                // rajout d'une personne a charge pour l'acquereur
                    \$('#addPersonne').click( () => {
                        let acquereur = \$(\"#candidature_acquereurs\");
                        let datepicker = \$('.js-datepicker');
                        let index = \$(\".Personne\").length;
                        let template = acquereur.data(\"prototype\").replace(/__name__/g, index);
                        //acquereur.append(template);
                        \$('.autre-revenu').prepend(template)
                        datepicker.datepicker(
                            {
                                language: 'fr',
                                autoclose: true,
                                todayHighlight: true,
                            });

                        datepicker.attr('placeholder', 'jour / mois / année');

                        delPersonne(index);
                         \$('[data-toggle=\"tooltip\"]').tooltip()
                    });
                    // suppression d'un acquereur
                    function delPersonne(index) {
                        \$(\".deletePersonne\").click(function () {
                            \$(this).closest(\"#entry_candidature_acquereurs_\" + index).remove();
                        });
                    }
                    // rajout d'un credit pour l'acquereur
            \$(\"#addCredit\").click(function() {
                let index = \$(\".table-credit tbody .Credits\").length;
                let template = \$(\"#candidature_credits\").data(\"prototype\").replace(/__name__/g, index)
                
                \$('.table-credit').css('display', 'block')
                \$('tbody').append(template)
                 \$(\"#entry_candidature_credits_\"+index).find('th[scope=\"row\"]').text(\"CREDIT \"+ parseInt(index + 1))
                \$(\"#entry_candidature_credits_\"+index).find(\".deleteCredits\").attr('data-index', index)
                \$('.js-datepicker').datepicker({
                        language: 'fr',
                        autoclose: true,
                        todayHighlight: true,
                });
                    console.log(\$(\".table-credit tbody .Credits\").length)
                \$('.js-datepicker').attr('placeholder', 'jour / mois / année');
            });

            // suppresion d'un credit pour le coacquereur
                \$(document).on(\"click\", \".deleteCredits\", function () {
                    var index = \$(this).data('index')
                    \$(this).closest(\"#entry_candidature_credits_\" + index).remove();
                    if(\$(\".table-credit tbody .Credits\").length <= 0) {
                        \$('.table-credit').css('display', 'none')
                    }
                    console.log(\$(\".table-credit tbody .Credits\").length)
                });

            //get info api
            \$(document).on(\"onfocusout\",\"#candidature_acquereur_code_postal\", function () {
                let code_postal = \$(\"#candidature_acquereur_code_postal\").val()
                \$(\".div_ville_check\").remove();

                \$.get(\"https://geo.api.gouv.fr/communes?codePostal=\" + code_postal + \"&fields=nom&format=json&geometry=centre\", function (reponse) {
                    if (reponse.length > 0) {
                        document.forms[\"candidature\"][\"candidature[acquereur][ville]\"].value = reponse[0][\"nom\"];

                        \$(reponse).each((indice, element) => {

                            \$(\"#candidature_acquereur_ville\").parent().after(
                                \"<div class=\\\"form-check div_ville_check  form-check-inline\\\">\\n\" +
                                \"  <input class=\\\"form-check-input ville_check\\\" type=\\\"radio\\\" id=\" + indice + \" value=\" + element.nom + \">\\n\" +
                                \"  <label class=\\\"form-check-label\\\" for=\" + indice + \">\" + element.nom + \"</label>\\n\" +
                                \"</div>\"
                            );

                        });

                        \$(\".ville_check\").click(function () {
                            \$(\"#candidature_acquereur_ville\").val(\$(this).val());
                            \$(\".div_ville_check\").remove();
                        });

                    } else {
                        \$(\"#candidature_acquereur_code_postal\").after(
                            \"<div class='text-danger'> aucune ville ne correspond à \" +
                            \"<strong> \\\" \"+ \$(\"#candidature_acquereur_code_postal\").val() +\" \\\"</strong>\"+
                            \"</div>\"
                        );
                    }
                });

            });


            //display input
            \$('#candidature_LogementActuel_statuts_3').on('input', function () {
                \$(\".autresStatus\").remove();
                \$(this).parent().append(
                    '<div class=\"form-check form-check-inline\">' +
                    '<input type=\"text\" class=\"form-check-input autresStatus\">' +
                    '</div>'
                );
                \$(\".autresStatus\").focus()
            });
            
            \$('#candidature_LogementActuel_statuts input[type=\"radio\"]').not(\$(\"#candidature_LogementActuel_statuts_3\")).on('input', function () {
                \$(\".autresStatus\").fadeOut();
            });
        
            //
                    \$('.form-candidate button:not(.add-co-btn)').on('click', function() {
                        let \$slid = \$(this).data()
                        if(\$slid.next) {
                            \$(\"div[aria-controls=\"+\$slid.next).click()
                        } else {
                            \$(\"div[aria-controls=\"+\$slid.prev).click()
                        }
                        
                    })
                    \$('.btn-danger').on('click', function() {
                        \$(\"div[aria-controls=\"+\$(this).data('prev')).click()
                    } )
                    \$('[data-toggle=\"tooltip\"]').tooltip()
                    \$('.date').datepicker({
                        language: 'fr'
                    })
                    \$('#myTab li>div').on('click',function() {
                        var el = \$(this)
                        \$('#myTab li>div').removeClass('actives')
                        el.addClass(\"actives\")
                        window.scroll(0, 0);
                    })
                    \$add_aq = \$('#addPersonne')
                    \$add_aq.appendTo('.autre-revenu')

                    \$add_credit = \$('#addCredit')
                    \$add_credit.appendTo('#add_credit')
                    \$('label[for=\"candidature_acquereur_financiaryProfessionalSituation_salaireMoyen\"], label[for=\"candidature_acquereur_financiaryProfessionalSituation_avisImposition\"], label[for=\"candidature_acquereur_financiaryProfessionalSituation_autresRevenus\"]').hide()
        
        })
                
       
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidater/candidater.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1009 => 652,  999 => 651,  985 => 648,  975 => 647,  958 => 640,  952 => 637,  946 => 634,  939 => 631,  929 => 630,  915 => 625,  905 => 624,  887 => 616,  881 => 613,  874 => 609,  868 => 606,  861 => 602,  855 => 599,  849 => 596,  843 => 593,  837 => 590,  831 => 587,  825 => 584,  819 => 581,  813 => 578,  807 => 575,  801 => 572,  795 => 569,  789 => 566,  779 => 560,  769 => 559,  753 => 551,  739 => 540,  727 => 530,  725 => 529,  713 => 519,  708 => 517,  703 => 515,  698 => 513,  690 => 507,  681 => 499,  671 => 490,  653 => 473,  645 => 467,  632 => 456,  626 => 452,  622 => 450,  616 => 446,  610 => 443,  606 => 441,  601 => 438,  593 => 432,  591 => 431,  581 => 422,  578 => 420,  570 => 414,  563 => 410,  556 => 406,  549 => 402,  543 => 399,  537 => 396,  531 => 393,  525 => 390,  519 => 387,  513 => 384,  507 => 381,  500 => 377,  489 => 368,  472 => 352,  459 => 342,  451 => 337,  445 => 333,  436 => 326,  425 => 318,  417 => 313,  409 => 308,  398 => 299,  375 => 277,  369 => 273,  366 => 272,  324 => 231,  318 => 226,  308 => 225,  79 => 5,  69 => 4,  58 => 1,  56 => 3,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set title = 'Candidater' %}
{% form_theme form _self %}
{% block stylesheets %}
    <style>
    .line-steps {
    margin-top: 3em
    }
    .lines-dotted {
    position: relative;
    width: 50%;
    height: 1px;
    background-color: #ddd;
    }
    .lines-dotted ul {
    position: absolute;
    left: -3px;
    right: 0;
    list-style: none;
    top: -24px;
    margin-left: 0;
    padding-left: 0px;
    display: flex;
    flex-wrap: inherit;
    }
    .lines-dotted ul li {
    display: inline;
    cursor: pointer
    }
    .lines-dotted ul li div {
    width: 50px;
    height: 50px;
    background:#e7edf3;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #667d99;
    font-weight: 500
    }
    .actives font {
        color: #fff !important
    }
    .lines-dotted ul li:not(.first-li) {
    margin-left: 60px
    }
    section h5 {
    position: relative
    }
    section h5::after  {
        position: absolute;
        content: '';
        height: 5px;
        width: 23px;
        background-color: #02d0b5;
        bottom: -10px;
        left: 0;
    }
    .parent-slider-coulis {
        width: 500px;
        background-color: grey;
        height: 350px;
        overflow-y: hidden;
        overflow: hidden;
    }
    .slid-carousel {
        background: yellow;
        width: fit-content;
        margin: 11px;
        display: flex;
    }
    .item-child-carousel {
        width: 468px;
        margin: 11px;
        background: aqua;
        height: 300px;
    }
    .panel {
        background: #E7EDF3;
        margin-top: 27px;
        width: 50%;
        border-radius: 5px;
        font-size: .85rem;
    }
    .panel p {
    font-size: 13px;
    }
    .form-group>.form-group:first-child, .form-check-inline>.form-check:first-child {
    padding-left: 0;
    }
    .tap-pane {
    text-align: justify;
    }
    .type-fy>div {
    position: relative
    }
    .type-fy>div>svg {
        position: absolute;
        right: -20px;
        top: 40px;
        cursor: pointer
    }
    .custom-p {
    margin-bottom: 3px;
    margin-top: 11px;
    }
    .add-co-btn {
        margin-top: 1em;
        background-color: #2CF6DC !important;
        color: #026A64 !important;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
        font-size: 14px;
        padding-bottom: 10px;
    }
    .infos-autre {
        padding: 7px;
        border: 1px dotted #FF0707;
        width: 50%;
    }
    .infos-autre p {
    text-align: justify;
    font-size: 13px;
    }
    .cr-e-txt {
    padding: 5px;
    color: #993700;
    background: #FFE3D7;
    width: 50%;
    border-radius: 5px;
    }
    .cr-e-txt p {
    font-size: 13px;
    }
    .table-bordered thead th, .table-bordered thead td {
    font-family:'Montserrat-semibold';
    font-size: 12px;
    }
    .table-bordered th, .table-bordered td {
    font-size: 12px;
    }
    td input {
    padding: 0;
    margin: 0;
    width: 100%;
    border: none;
    }
    td input:focus {
    outline: none;
    }
    .lab-cgu {
    margin-top: 17px;
    padding-left: 11px;
    }
    .actives {
    background: #00d0b5 !important;
    border: 4px solid #00d0b5;
    color: #fff !important;
    }
    .ml-38 {
    margin-left: 38%
    }
    #candidature_logementDesire_type {
    display: flex;
    column-gap: 15px;
    }
    .col-form-label {
     font-size: 17px;
    }
    #candidature_acquereur_financiaryProfessionalSituation_statusEmploi {
      display: flex;
      column-gap: 19px;
    }
    .fa-question-circle {
      font-size: 13px;
    }
    label[for=candidature_acquereur_financiaryProfessionalSituation_apportPersonnel], label[for\$=financiaryProfessionalSituation_autresRevenus], label[for\$=financiaryProfessionalSituation_apportPersonnel] {
        padding-bottom: 11px;
        padding-top: calc(0.375rem + 1px);
        margin-bottom: 0;
    }
    input[id=candidature_acquereur_financiaryProfessionalSituation_autresRevenus] {
        width: 50% !important
    }
    div[id^=candidature_acquereurs_] {
        display: flex;
       column-gap: 19px;
    }
    label[for\$=financiaryProfessionalSituation_salaireMoyen], label[for\$=financiaryProfessionalSituation_avisImposition] {
        display: none
    }
    div[id^=entry_candidature_acquereurs] {
        padding-top: 15px;
        border-top: 1px dotted #ddd;
        margin-top: 11px;
    }
    .add-co {
        font-weight: 600;
    }
    .table th, .table td {
        vertical-align: middle;
    }
    .table-credit {
        display: none
    }
    .deleteCredits {
        font-size: 15px;
        cursor: pointer
    }
    .deleteCredits:active {
        transform: scale(1.3)
    }
    .enregistrer {
        margin-top: 1em;
    }
    .Credits.prototype{
        white-space: nowrap;
    }
    #addCredit:focus {
        outline: none
    }
    </style>
{% endblock %}
{% block body %}

    <section>
        <div class=\"container\">
            <h1>Candidater</h1>
            {# La barre des étapes du formulaire commence ici #}
            <div class=\"line-steps\">
                    <div class=\"lines-dotted\">
                        <ul class=\"nav\" id=\"myTab\" role=\"tablist\">
                            <li class=\"first-li nav-item\">
                                <div class=\"actives\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">
                                    1
                                </div>
                                
                            </li>
                            <li id=\"profile-tab nav-item\">
                                <div  data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"true\">
                                    2
                                </div>
                                
                            </li>
                            <li id=\"contact-tab nav-item\">
                                <div  data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"true\">
                                    3
                                </div>
                                
                            </li>
                            <li id=\"finance-tab nav-item\">
                                <div  data-toggle=\"tab\" href=\"#finance\" role=\"tab\" aria-controls=\"finance\" aria-selected=\"true\">
                                    4
                                </div>
                                
                            </li>
                            <li id=\"interet-tab nav-item\">
                                <div  data-toggle=\"tab\" href=\"#interet\" role=\"tab\" aria-controls=\"interet\" aria-selected=\"true\">
                                    5
                                </div>
                            </li>
                            <li id=\"interet-tab nav-item\">
                                <div  data-toggle=\"tab\" href=\"#cgu\" role=\"tab\" aria-controls=\"cgu\" aria-selected=\"true\">
                                    6
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
            {# fin #}
            <div class=\"row form-candidate\" style=\"margin-top: 5em\">
                {{ form_start(form) }}
                    <div class=\"col-md-9\">
                        <div class=\"tab-content\" id=\"myTabContent\">
                            {# TAB1 -----CONSIGNES____________ #}
                            <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
                                <h5> Consignes </h5>
                                    <p class=\"pt-4 text-justify\" style=\"font-size: 14px;\">
                                        Ce formulaire vaut dossier de candidature. Seuls les formulaires complétés intégralement et validés à la fin seront transmis au chef de projet et étudiés.
                                        
                        
                                         Les champs signalés par un astérisque (*) sont obligatoires. Ce formulaire est composé de 5 étapes. 
                                         
                                         <br>
                                         <br>
                                        Vous pouvez modifier vos informations autant de fois que vous le souhaitez, tant que le formulaire n'a pas été transmis. <br>
                                            <br>
                                        Pour soumettre votre candidature, n’oubliez pas de cliquer sur le bouton « Transmettre ma candidature ». 
                                        <br>
                                        <br>
                                        Pour toute question sur le projet, veuillez contacter le porteur de projet via la page projet ou l’onglet messagerie de votre espace personnel. <br><br>

                                        Si vous rencontrez un problème technique, vous pouvez contacter le support informatique à l’adresse contact@lescityzens.fr. 
                                    </p>
                                    <button type=\"button\" class=\"btn btn-primary\" style=\"float: right\" data-next=\"profile\">Continuer <i class=\"fas fa-arrow-right\"></i> </button>
                            </div>
                        {# TAB2-------------------MON LOGEMENT--------------------- #}
                            <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                                    <h5> Mon logement actuel et mon projet </h5>
                                    <div class=\"panel p-3\">
                                            Tant que le questionnaire n'a pas été intégralement complété et transmis, vous pouvez à tout moment modifier les champs renseignés. Pensez à enregistrer avant de quitter le questionnaire. 
                                    </div>
                                    
                                        <div class=\"form-group\" style=\"margin-top: 2em\">
                                            <div class=\"form-group col-md-12 pr-2 mb-0\">
                                                
                                                        {{form_row(form.LogementActuel.types)}}
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                {{form_row(form.LogementActuel.statuts)}}
                                               
                                            </div>
                                            
                                             <div class=\"col-md-4 type-fy\">
                                                {{ form_row(form.LogementActuel.taille) }}
                                                
                                            </div>
                                        </div>
                                        <div class=\"form-group\" >
                                            <div class=\"form-group col-md-12 pr-2 mb-0\">
                                                <fieldset class=\"form-group\">
                                                    <h6 class=\"col-form-label required\">Type de logement actuel recherché* :</h6>
                                                        {{ form_row(form.logementDesire.type) }}

                                                 
                                                </fieldset>
                                            </div>
                                        </div>
                                        {# Surface souhaité #}
                                        <section>
                                            <h6> Surfaces souhaitées* </h6>
                                            <div class=\"row mt-3\">
                                                    <div class=\"col-md-4\">
                                                        {{ form_row(form.logementDesire.surface_min) }}
                                                       
                                                    </div>
                                                    
                                                    <div class=\"col-md-4 type-fy\">
                                                        {{ form_row(form.logementDesire.surface_max) }}
                                                        
                                                    </div>
                                                </div> 
                                        </section>
                                        <section class=\"mt-3\">
                                            <h6> L’enveloppe maximum que vous êtes prêt à mettre* </h6>
                                            <div class=\"row mt-3\">
                                                    <div class=\"col-md-4\">
                                                    
                                                     {{ form_row(form.logementDesire.enveloppe_max) }}
                                                        
                                                    </div>
                                                    
                                                   
                                                </div> 
                                        </section>
                                        <div>
                                            <button type=\"button\" class=\"btn btnSubmit\" style=\"margin-top: 1em;color: #fff\" data-prev=\"home\"> <i class=\"fas fa-arrow-left mr-1\"></i>Precedent</button>

                                            <button type=\"button\" class=\"btn ml-2 btnSubmit\" style=\"margin-top: 1em\" data-next=\"contact\">Continuer<i class=\"fas fa-arrow-right ml-1\"></i> </button>
                                             <a href=\"#\" class=\"btn btnSubmitBlue enregistrer ml-2\"> <i class=\"fas fa-save mr-1\"></i>Enregistrer </a>
                                        </div>
                                         
                                    </div>
                        {#-------- Mon ménage tab-3 ------------#}
                            <div class=\"tab-pane fade\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
                                     <h5> Mon menage </h5>
                                    <div class=\"panel p-3\">
                                            Tant que le questionnaire n'a pas été intégralement complété et transmis, vous pouvez à tout moment modifier les champs renseignés. Pensez à enregistrer avant de quitter le questionnaire. 
                                    </div>
                                    <section>
                                        <div style=\"margin-top: 2em\">
                                                    <div class=\"col-md-12 pr-2 mb-0\">
                                                        <fieldset class=\"form-group\">
                                                                    {{ form_row(form.acquereur.gender) }}
                                                        </fieldset>
                                                        <div class=\"row\">
                                                            <div class=\"col-md-6\">
                                                                {{ form_row(form.acquereur.lastname) }}
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                {{ form_row(form.acquereur.firstname) }}
                                                            </div>
                                                            <div class=\"col-md-6\">
                                                                {{ form_row(form.acquereur.date_anniversaire) }}
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                {{ form_row(form.acquereur.code_postal) }}
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                {{ form_row(form.acquereur.ville) }}
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                {{ form_row(form.acquereur.addresse) }}
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                    {{ form_row(form.acquereur.pays) }}
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                {{ form_row(form.acquereur.tel_mobile) }}
                                                              
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                {{ form_row(form.acquereur.tel_fixe) }}
                                                              
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                {{ form_row(form.acquereur.tel_professional) }}
                                                               
                                                            </div>
                                                            <div class=\"col-md-6 type-fy\">
                                                                 {{ form_row(form.acquereur.email) }}
                                                              
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    {# Co-acquereur #}
                                                   
                                                     {# situation familiale #}
                                               <div>
                                                    <button type=\"button\" class=\"btn btnSubmit\" style=\"margin-top: 1em;color: #fff\" data-prev=\"profile\"><i class=\"fas fa-arrow-left mr-1\"></i>Precedent</button>

                                                    <button type=\"button\" class=\"btn btnSubmit ml-2\" style=\"margin-top: 1em;\" data-next=\"finance\">Continuer<i class=\"fas fa-arrow-right ml-1\"></i></button>
                                                    <a href=\"#\" class=\"btn btnSubmitBlue enregistrer ml-2\"><i class=\"fas fa-save mr-1\"></i>Enregistrer </a>
                                                </div>
                                    </section>
                            </div>
                        {# fin ménage #}
                        {# ------------ FINANCE---------------- tab-4 #}
                             <div class=\"tab-pane fade\" id=\"finance\" role=\"tabpanel\" aria-labelledby=\"finance\">
                                    <h5>Ma situation professionnelle et financière</h5>
                                    <div class=\"panel p-3\">
                                            Tant que le questionnaire n'a pas été intégralement complété et transmis, vous pouvez à tout moment modifier les champs renseignés. Pensez à enregistrer avant de quitter le questionnaire. 
                                    </div>
                                    <br>
                                            {{ form_row(form.acquereur.financiaryProfessionalSituation.statusEmploi) }}
                                                <div class=\"row\">
                                                        {# ----------------------------- #}
                                                        <div class=\"col-md-6\">
                                                            <h6 class=\"col-form-label required\" style=\"padding-bottom: 11px\">Acquéreur- Salaire mensuel moyen * <i class=\"fas fa-question-circle\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"(total annuel net primes incluses divisé par 12\"></i></h6>
                                                            {{ form_row(form.acquereur.financiaryProfessionalSituation.salaireMoyen) }}
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            {{ form_row(form.acquereur.financiaryProfessionalSituation.apportPersonnel) }}
                                                        </div>
                                                </div>
                                                        {# ----------------------------- #}
                                                        <fieldset>
                                                                <h6 class=\"col-form-label required\" style=\"padding-bottom: 11px\">Acquéreur- Revenus imposables* <i class=\"fas fa-question-circle\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"(revenu fiscal de référence tel qu’indiqué sur votre avis d’imposition après l’abattement de 10 %)*\"></i></h6>
                                                                {{ form_row(form.acquereur.financiaryProfessionalSituation.avisImposition) }}
                                                        </fieldset>
                                                        
                                                        {# ----------------------------- #}
                                                        
                                                            <h6 class=\"col-form-label required\" style=\"padding-bottom: 11px\">Autre revenus mensuel (facultatif) </h6>
                                                            <div class=\"panel p-3\">
                                                                    Additionnez les montants mensuels de vos autres sources de revenus 
                                                                    (prestations familiales, pensions, rentes, revenus fonciers, etc.). 
                                                                    Exemple : si vous êtes propriétaire d’un logement pour lequel vous 
                                                                    percevez un loyer de 500 € et que la CAF vous verse des aides à 
                                                                    hauteur de 150 € par mois, écrivez “650”
                                                              
                                                            </div>
                                                            <fieldset class=\"mt-3 \">
                                                                {{ form_row(form.acquereur.financiaryProfessionalSituation.autresRevenus) }}
                                                            </fieldset>
                                                            <div class=\"autre-revenu\"></div>
                                                        <br>
                                                        
                                                        {# ----------------------------- #}
                                                        <fieldset class=\"table-credit\">
                                                            <h6 class=\"col-form-label required mt-3\" style=\"padding-bottom: 11px\"> Crédit en cours (facultatif) </h6>
                                                            <div class=\"panel p-3\">
                                                                    Indiquez pour chacun la date de début (jj/mm/aaaa), la date de fin (jj/mm/aaaa) et le montant des mensualités (en €).
                                                            </div>
                                                            <table class=\"table table-bordered  mt-5\">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope=\"col\"></th>
                                                                            <th scope=\"col\">DATE DE DEBUT (jj/mm/aaaa)</th>
                                                                            <th scope=\"col\">DATE DE FIN (jj/mm/aaaa)</th>
                                                                            <th scope=\"col\">MENSUALITE (€)</th>
                                                                            <th scope=\"col\"> Action </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                       {# espace d'ajouté d'un nouveau crédit #}
                                                                    </tbody>
                                                                </table> 
                                                        </fieldset>
                                                        
                                                        <br>
                                                        
                                                            
                                                            <div id=\"add_credit\"></div>
                                                            {# ____________________ #}
                                                        <div class=\"mt-5\">
                                                            <button type=\"button\" class=\"btn btnSubmit\" style=\"margin-top: 1em;color: #fff\" data-prev=\"contact\"><i class=\"fas fa-arrow-left mr-1\"></i>Precedent</button>

                                                            <button type=\"button\" class=\"btn btnSubmit ml-2\" data-next=\"interet\" style='margin-top: 1em;'> Suivant <i class=\"fas fa-arrow-right ml-1\"></i></button>
                                                            <a href=\"#\" class=\"btn btnSubmitBlue enregistrer ml-2\"> <i class=\"fas fa-save mr-1\"></i> Enregistrer </a>
                                                        </div>
                                                    </div>
                            {# -------------MON INTERET POUR L'HABT. --------------5 #}
                             <div class=\"tab-pane fade\" id=\"interet\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
                                    <h5>Mon intérêt pour l’habitat participatif</h5>
                                    <div class=\"panel p-3\">
                                            Tant que le questionnaire n'a pas été intégralement complété et transmis, vous pouvez à tout moment modifier les champs renseignés. Pensez à enregistrer avant de quitter le questionnaire. 
                                    </div>
                                    <br>
                                        {{ form_row(form.motivationParticipation.motivation) }}

                                        {{ form_row(form.motivationParticipation.vie_quartier) }}

                                        {{ form_row(form.motivationParticipation.echange_mutualisation) }}

                                         {{ form_row(form.motivationParticipation.connaissance_annonce) }}
                                    <br>
                                        <div class=\"mt-5\">
                                            <button type=\"button\" class=\"btn btnSubmit\" style=\"margin-top: 1em;color: #fff\" data-prev=\"finance\"><i class=\"fas fa-arrow-left mr-1\"></i>Precedent</button>

                                            <button type=\"button\" class=\"btn btnSubmit ml-2\" data-next=\"cgu\" style='margin-top: 1em;'> Suivant <i class=\"fas fa-arrow-right ml-1\"></i></button>
                                            <a href=\"#\" class=\"btn btnSubmitBlue enregistrer ml-2\"> <i class=\"fas fa-save mr-1\"></i> Enregistrer </a>
                                        </div>
                                    </div>
                                    {# fin #}
                                    {# ------------- TAB-6 CGU --------------5 #}
                             <div class=\"tab-pane fade\" id=\"cgu\" role=\"tabpanel\" aria-labelledby=\"cgu\">
                                        <h5>Validation de ma candidature</h5>
                                    <div class=\"panel p-3\" style=\"width: auto\">
                                        <p>
                                            Attention : en cliquant sur « Transmettre ma candidature », vous validez cette dernière et ne pourrez plus revenir sur ce formulaire pour modifier vos informations. Si malgré votre vigilance vous deviez apportez des modifications ultérieures, merci de prendre contact avec l’équipe de LesCityZens via l’adresse candidatures@lescityzens.fr. 
                                        </p>
                                    </div>
                                    <br>
                                        <fieldset class=\"form-group\">
                                                
                                                 {{ form_row(form.checks) }}
                                        </fieldset>
                                        <div>
                                            <button type=\"button\" class=\"btn btn-danger\" style=\"margin-top: 1em;color: #fff\" data-prev=\"interet\"><i class=\"fas fa-arrow-left\"></i> Precedent</button>

                                            <button type=\"button\" class=\"btn btn-primary ml-2\" style='margin-top: 1em'> Transmettre ma candidature </button>
                                        </div>
                                    </div>
                             </div>
                        </div>   
                    </div>
                {{ form_end(form) }}
               
            </div>
        </div>
    </section>
{% endblock %}
{#                 ajout des Acquereur            #}
         
                        {% block _candidature_acquereurs_entry_row %}
                            <div id=\"entry_{{ id }}\" class=\"d-flex Personne mt-5 \">
                                <div class=\"row\">
                                    <div class=\"col add-co\">
                                        <p> Co Acquéreur </p>
                                    </div>
                                    <div class=\"col-md-12\">
                                            {{ form_row(form.gender, {'label': 'Civilité*'}) }}
                                    </div>
                                     <div class=\"col-md-6\">
                                            {{ form_row(form.lastname, {'label': 'Nom*'}) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                            {{ form_row(form.firstname, {'label': 'Prénom*'}) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                            {{ form_row(form.date_anniversaire, {'label': 'date anniversaire'}) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                            {{ form_row(form.code_postal, {'label': 'Code postal*'}) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                            {{ form_row(form.ville, {'label': 'Ville*'}) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                            {{ form_row(form.addresse, {'label': 'Addresse'}) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                            {{ form_row(form.pays, {'label': 'Pays'}) }}
                                    </div>
                                   <div class=\"col-md-6\">
                                            {{ form_row(form.tel_mobile, {'label': 'Téléphone portable*'}) }}
                                   </div>
                                    <div class=\"col-md-6\">
                                            {{ form_row(form.tel_fixe, {'label': 'Téléphone du domicile*'}) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                            {{ form_row(form.tel_professional, {'label': 'Téléphone professionnel*'}) }}
                                    </div>
                                    <div class=\"col-md-12\">
                                            {{ form_row(form.email, {'label': 'E-mail'}) }}
                                    </div>
                                    <div class=\"col-md-12\">
                                        {{ form_row(form.financiaryProfessionalSituation.statusEmploi) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6 class=\"col-form-label required\" style=\"padding-bottom: 11px\">Acquéreur- Salaire mensuel moyen * <i class=\"fas fa-question-circle\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"(total annuel net primes incluses divisé par 12\"></i></h6>
                                        {{ form_row(form.financiaryProfessionalSituation.salaireMoyen) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                        {{ form_row(form.financiaryProfessionalSituation.apportPersonnel) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6 class=\"col-form-label required\" style=\"padding-bottom: 11px\">Acquéreur- Revenus imposables* <i class=\"fas fa-question-circle\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"(revenu fiscal de référence tel qu’indiqué sur votre avis d’imposition après l’abattement de 10 %)*\"></i></h6>
                                        {{ form_row(form.financiaryProfessionalSituation.avisImposition) }}
                                    </div>
                                    <div class=\"col-md-6\">
                                        {{ form_row(form.financiaryProfessionalSituation.autresRevenus) }}
                                    </div>
                                </div>
                                <div class=\"flex-shrink-1\">
                                    <button type=\"button\" class=\"btn btn-danger deletePersonne btn-sm\"><i class=\"fas fa-times\"></i></button>
                                </div>
                            </div>
                        {% endblock %}
                        {% block _candidature_acquereurs_row %}
                            {{ form_row(form) }}
                            <button type=\"button\" id=\"addPersonne\" class=\"btn btnSubmit\" data-next=\"contact\"><i class=\"fas fa-plus\"></i> ajouter un acquereur</button>
                        {% endblock %}
                    {#  #}
                    {#                 ajout des Crédits              #}
                        {% block _candidature_credits_entry_row %}
                            <tr id=\"entry_{{ id }}\" class=\"Credits prototype\">
                                <th scope=\"row\"> CREDIT </th>
                                <td>
                                    {{ form_row(form.begin) }}
                                </td>
                                <td>
                                    {{ form_row(form.end) }}
                                </td>
                                <td>
                                    {{ form_row(form.payementMois) }}
                                </td>
                                <td class=\"text-center\">
                                    <i class=\"far fa-trash-alt deleteCredits\" title=\"supprimer ce credit\"></i>
                                </td>
                            </tr>
                        {% endblock %}
                    {% block _candidature_credits_row %}
                        {{ form_row(form) }}
                        <button type=\"button\" id=\"addCredit\" class=\"btnSubmitOutline\"> <i class=\"fas fa-plus\"></i>  ajouter un crédits</button>
                    {% endblock %}
{% block javascripts %}
     <script>
            \$(function(){
                // rajout d'une personne a charge pour l'acquereur
                    \$('#addPersonne').click( () => {
                        let acquereur = \$(\"#candidature_acquereurs\");
                        let datepicker = \$('.js-datepicker');
                        let index = \$(\".Personne\").length;
                        let template = acquereur.data(\"prototype\").replace(/__name__/g, index);
                        //acquereur.append(template);
                        \$('.autre-revenu').prepend(template)
                        datepicker.datepicker(
                            {
                                language: 'fr',
                                autoclose: true,
                                todayHighlight: true,
                            });

                        datepicker.attr('placeholder', 'jour / mois / année');

                        delPersonne(index);
                         \$('[data-toggle=\"tooltip\"]').tooltip()
                    });
                    // suppression d'un acquereur
                    function delPersonne(index) {
                        \$(\".deletePersonne\").click(function () {
                            \$(this).closest(\"#entry_candidature_acquereurs_\" + index).remove();
                        });
                    }
                    // rajout d'un credit pour l'acquereur
            \$(\"#addCredit\").click(function() {
                let index = \$(\".table-credit tbody .Credits\").length;
                let template = \$(\"#candidature_credits\").data(\"prototype\").replace(/__name__/g, index)
                
                \$('.table-credit').css('display', 'block')
                \$('tbody').append(template)
                 \$(\"#entry_candidature_credits_\"+index).find('th[scope=\"row\"]').text(\"CREDIT \"+ parseInt(index + 1))
                \$(\"#entry_candidature_credits_\"+index).find(\".deleteCredits\").attr('data-index', index)
                \$('.js-datepicker').datepicker({
                        language: 'fr',
                        autoclose: true,
                        todayHighlight: true,
                });
                    console.log(\$(\".table-credit tbody .Credits\").length)
                \$('.js-datepicker').attr('placeholder', 'jour / mois / année');
            });

            // suppresion d'un credit pour le coacquereur
                \$(document).on(\"click\", \".deleteCredits\", function () {
                    var index = \$(this).data('index')
                    \$(this).closest(\"#entry_candidature_credits_\" + index).remove();
                    if(\$(\".table-credit tbody .Credits\").length <= 0) {
                        \$('.table-credit').css('display', 'none')
                    }
                    console.log(\$(\".table-credit tbody .Credits\").length)
                });

            //get info api
            \$(document).on(\"onfocusout\",\"#candidature_acquereur_code_postal\", function () {
                let code_postal = \$(\"#candidature_acquereur_code_postal\").val()
                \$(\".div_ville_check\").remove();

                \$.get(\"https://geo.api.gouv.fr/communes?codePostal=\" + code_postal + \"&fields=nom&format=json&geometry=centre\", function (reponse) {
                    if (reponse.length > 0) {
                        document.forms[\"candidature\"][\"candidature[acquereur][ville]\"].value = reponse[0][\"nom\"];

                        \$(reponse).each((indice, element) => {

                            \$(\"#candidature_acquereur_ville\").parent().after(
                                \"<div class=\\\"form-check div_ville_check  form-check-inline\\\">\\n\" +
                                \"  <input class=\\\"form-check-input ville_check\\\" type=\\\"radio\\\" id=\" + indice + \" value=\" + element.nom + \">\\n\" +
                                \"  <label class=\\\"form-check-label\\\" for=\" + indice + \">\" + element.nom + \"</label>\\n\" +
                                \"</div>\"
                            );

                        });

                        \$(\".ville_check\").click(function () {
                            \$(\"#candidature_acquereur_ville\").val(\$(this).val());
                            \$(\".div_ville_check\").remove();
                        });

                    } else {
                        \$(\"#candidature_acquereur_code_postal\").after(
                            \"<div class='text-danger'> aucune ville ne correspond à \" +
                            \"<strong> \\\" \"+ \$(\"#candidature_acquereur_code_postal\").val() +\" \\\"</strong>\"+
                            \"</div>\"
                        );
                    }
                });

            });


            //display input
            \$('#candidature_LogementActuel_statuts_3').on('input', function () {
                \$(\".autresStatus\").remove();
                \$(this).parent().append(
                    '<div class=\"form-check form-check-inline\">' +
                    '<input type=\"text\" class=\"form-check-input autresStatus\">' +
                    '</div>'
                );
                \$(\".autresStatus\").focus()
            });
            
            \$('#candidature_LogementActuel_statuts input[type=\"radio\"]').not(\$(\"#candidature_LogementActuel_statuts_3\")).on('input', function () {
                \$(\".autresStatus\").fadeOut();
            });
        
            //
                    \$('.form-candidate button:not(.add-co-btn)').on('click', function() {
                        let \$slid = \$(this).data()
                        if(\$slid.next) {
                            \$(\"div[aria-controls=\"+\$slid.next).click()
                        } else {
                            \$(\"div[aria-controls=\"+\$slid.prev).click()
                        }
                        
                    })
                    \$('.btn-danger').on('click', function() {
                        \$(\"div[aria-controls=\"+\$(this).data('prev')).click()
                    } )
                    \$('[data-toggle=\"tooltip\"]').tooltip()
                    \$('.date').datepicker({
                        language: 'fr'
                    })
                    \$('#myTab li>div').on('click',function() {
                        var el = \$(this)
                        \$('#myTab li>div').removeClass('actives')
                        el.addClass(\"actives\")
                        window.scroll(0, 0);
                    })
                    \$add_aq = \$('#addPersonne')
                    \$add_aq.appendTo('.autre-revenu')

                    \$add_credit = \$('#addCredit')
                    \$add_credit.appendTo('#add_credit')
                    \$('label[for=\"candidature_acquereur_financiaryProfessionalSituation_salaireMoyen\"], label[for=\"candidature_acquereur_financiaryProfessionalSituation_avisImposition\"], label[for=\"candidature_acquereur_financiaryProfessionalSituation_autresRevenus\"]').hide()
        
        })
                
       
    </script>
{% endblock %}", "candidater/candidater.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/candidater/candidater.html.twig");
    }
}
