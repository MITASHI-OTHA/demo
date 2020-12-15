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

/* cand/index.html.twig */
class __TwigTemplate_6f180a4ffd4e1188749df681afb761f3069bbd73b41755cd8d2ce01e4c46c94a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cand/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cand/index.html.twig"));

        // line 3
        $context["title"] = "candidature";
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cand/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"example-wrapper\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'row');
        echo "
        <input type=\"submit\" name=\"valider\" class=\"btn btn-success mr-5\" value=\"Valider\">
        <input type=\"submit\" name=\"enregistrer\" class=\"btn btn-warning ml-5\" value=\"Enregistrer\">
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block__candidature_acquereurs_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_acquereurs_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_acquereurs_entry_row"));

        // line 19
        echo "    <div id=\"entry_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" class=\"d-flex Personne\">
        <div class=\"w-100\">
            Acquéreur
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "gender", [], "any", false, false, false, 22), 'row', ["label" => "Civilité*"]);
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "lastname", [], "any", false, false, false, 23), 'row', ["label" => "Nom*"]);
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "firstname", [], "any", false, false, false, 24), 'row', ["label" => "Prénom*"]);
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "date_anniversaire", [], "any", false, false, false, 25), 'row', ["label" => "date anniversaire"]);
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "code_postal", [], "any", false, false, false, 26), 'row', ["label" => "Code postal*"]);
        echo "
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "ville", [], "any", false, false, false, 27), 'row', ["label" => "Ville*"]);
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "addresse", [], "any", false, false, false, 28), 'row', ["label" => "Addresse"]);
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "pays", [], "any", false, false, false, 29), 'row', ["label" => "Pays"]);
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "tel_mobile", [], "any", false, false, false, 30), 'row', ["label" => "Téléphone portable*"]);
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "tel_fixe", [], "any", false, false, false, 31), 'row', ["label" => "Téléphone du domicile*"]);
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "tel_professional", [], "any", false, false, false, 32), 'row', ["label" => "Téléphone professionnel*"]);
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'row', ["label" => "E-mail"]);
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "financiaryProfessionalSituation", [], "any", false, false, false, 34), 'row', ["label" => "Situation Financière"]);
        echo "
        </div>
        <div class=\"flex-shrink-1\">
            <button type=\"button\" class=\"btn btn-danger deletePersonne btn-sm\"><i class=\"fas fa-times\"></i></button>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block__candidature_acquereurs_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_acquereurs_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_acquereurs_row"));

        // line 43
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'row');
        echo "
    <button type=\"button\" id=\"addPersonne\"> ajouter un acquereur</button>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block__candidature_credits_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_credits_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_credits_entry_row"));

        // line 50
        echo "    <div id=\"entry_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\" class=\"d-flex Credits\">
        <div class=\"w-100\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "begin", [], "any", false, false, false, 52), 'row', ["label" => "début"]);
        echo "
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "end", [], "any", false, false, false, 53), 'row', ["label" => "fin"]);
        echo "
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "payementMois", [], "any", false, false, false, 54), 'row', ["label" => "Mensualitées"]);
        echo "
        </div>
        <div class=\"flex-shrink-1\">
            <button type=\"button\" class=\"btn btn-danger deleteCredits btn-sm\"><i class=\"fas fa-times\"></i></button>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block__candidature_credits_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_credits_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_candidature_credits_row"));

        // line 63
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'row');
        echo "
    <button type=\"button\" id=\"addCredit\"> ajouter un crédits</button>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    <script>
        \$(function () {
            // rajout d'une personne a charge pour l'acquereur
            \$('#addPersonne').click( () => {
                let acquereur = \$(\"#candidature_acquereurs\");
                let datepicker = \$('.js-datepicker');
                let index = \$(\".Personne\").length;
                let template = acquereur.data(\"prototype\").replace(/__name__/g, index);

                acquereur.append(template);
                datepicker.datepicker(
                    {
                        language: 'fr',
                        autoclose: true,
                        todayHighlight: true,
                    });

                datepicker.attr('placeholder', 'jour / mois / année');

                delPersonne(index);
            });

            // suppression d'un acquereur
            function delPersonne(index) {
                \$(\".deletePersonne\").click(function () {
                    alert(index);
                    \$(this).closest(\"#entry_candidature_acquereurs_\" + index).remove();
                });
            }

            // rajout d'un credit pour l'acquereur
            \$(\"#addCredit\").click(() => {
                let index = \$(\".Credit\").length;
                let template = \$(\"#candidature_credits\").data(\"prototype\").replace(/__name__/g, index);

                \$(\"#candidature_credits\").append(template);

                \$('.js-datepicker').datepicker({
                        language: 'fr',
                        autoclose: true,
                        todayHighlight: true,
                });

                \$('.js-datepicker').attr('placeholder', 'jour / mois / année');

                delCredit(index);
            });

            // suppresion d'un credit pour le coacquereur
            function delCredit(index) {
                \$(\".deleteCredits\").click(function () {
                    \$(this).closest(\"#entry_candidature_credits_\" + index).remove();
                });
            }

            //get info api
            \$(\"#candidature_acquereur_code_postal\").focusout(function () {
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
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cand/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 68,  275 => 67,  261 => 63,  251 => 62,  234 => 54,  230 => 53,  226 => 52,  220 => 50,  210 => 49,  196 => 43,  186 => 42,  169 => 34,  165 => 33,  161 => 32,  157 => 31,  153 => 30,  149 => 29,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  114 => 19,  104 => 18,  91 => 13,  85 => 10,  81 => 9,  78 => 8,  68 => 7,  57 => 1,  55 => 5,  53 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'candidature' %}

{% form_theme form _self %}

{% block body %}
    <div class=\"example-wrapper\">
        {{ form_start(form) }}
        {{ form_row(form) }}
        <input type=\"submit\" name=\"valider\" class=\"btn btn-success mr-5\" value=\"Valider\">
        <input type=\"submit\" name=\"enregistrer\" class=\"btn btn-warning ml-5\" value=\"Enregistrer\">
        {{ form_end(form) }}
    </div>
{% endblock %}

{#                 ajout des Acquereur            #}
{% block _candidature_acquereurs_entry_row %}
    <div id=\"entry_{{ id }}\" class=\"d-flex Personne\">
        <div class=\"w-100\">
            Acquéreur
            {{ form_row(form.gender, {'label': 'Civilité*'}) }}
            {{ form_row(form.lastname, {'label': 'Nom*'}) }}
            {{ form_row(form.firstname, {'label': 'Prénom*'}) }}
            {{ form_row(form.date_anniversaire, {'label': 'date anniversaire'}) }}
            {{ form_row(form.code_postal, {'label': 'Code postal*'}) }}
            {{ form_row(form.ville, {'label': 'Ville*'}) }}
            {{ form_row(form.addresse, {'label': 'Addresse'}) }}
            {{ form_row(form.pays, {'label': 'Pays'}) }}
            {{ form_row(form.tel_mobile, {'label': 'Téléphone portable*'}) }}
            {{ form_row(form.tel_fixe, {'label': 'Téléphone du domicile*'}) }}
            {{ form_row(form.tel_professional, {'label': 'Téléphone professionnel*'}) }}
            {{ form_row(form.email, {'label': 'E-mail'}) }}
            {{ form_row(form.financiaryProfessionalSituation, {'label': 'Situation Financière'}) }}
        </div>
        <div class=\"flex-shrink-1\">
            <button type=\"button\" class=\"btn btn-danger deletePersonne btn-sm\"><i class=\"fas fa-times\"></i></button>
        </div>
    </div>
{% endblock %}

{% block _candidature_acquereurs_row %}
    {{ form_row(form) }}
    <button type=\"button\" id=\"addPersonne\"> ajouter un acquereur</button>
{% endblock %}


{#                 ajout des Crédits              #}
{% block _candidature_credits_entry_row %}
    <div id=\"entry_{{ id }}\" class=\"d-flex Credits\">
        <div class=\"w-100\">
            {{ form_row(form.begin, {'label': 'début'}) }}
            {{ form_row(form.end, {\"label\": 'fin'}) }}
            {{ form_row(form.payementMois, {\"label\" : 'Mensualitées'}) }}
        </div>
        <div class=\"flex-shrink-1\">
            <button type=\"button\" class=\"btn btn-danger deleteCredits btn-sm\"><i class=\"fas fa-times\"></i></button>
        </div>
    </div>
{% endblock %}

{% block _candidature_credits_row %}
    {{ form_row(form) }}
    <button type=\"button\" id=\"addCredit\"> ajouter un crédits</button>
{% endblock %}

{% block javascripts %}
    <script>
        \$(function () {
            // rajout d'une personne a charge pour l'acquereur
            \$('#addPersonne').click( () => {
                let acquereur = \$(\"#candidature_acquereurs\");
                let datepicker = \$('.js-datepicker');
                let index = \$(\".Personne\").length;
                let template = acquereur.data(\"prototype\").replace(/__name__/g, index);

                acquereur.append(template);
                datepicker.datepicker(
                    {
                        language: 'fr',
                        autoclose: true,
                        todayHighlight: true,
                    });

                datepicker.attr('placeholder', 'jour / mois / année');

                delPersonne(index);
            });

            // suppression d'un acquereur
            function delPersonne(index) {
                \$(\".deletePersonne\").click(function () {
                    alert(index);
                    \$(this).closest(\"#entry_candidature_acquereurs_\" + index).remove();
                });
            }

            // rajout d'un credit pour l'acquereur
            \$(\"#addCredit\").click(() => {
                let index = \$(\".Credit\").length;
                let template = \$(\"#candidature_credits\").data(\"prototype\").replace(/__name__/g, index);

                \$(\"#candidature_credits\").append(template);

                \$('.js-datepicker').datepicker({
                        language: 'fr',
                        autoclose: true,
                        todayHighlight: true,
                });

                \$('.js-datepicker').attr('placeholder', 'jour / mois / année');

                delCredit(index);
            });

            // suppresion d'un credit pour le coacquereur
            function delCredit(index) {
                \$(\".deleteCredits\").click(function () {
                    \$(this).closest(\"#entry_candidature_credits_\" + index).remove();
                });
            }

            //get info api
            \$(\"#candidature_acquereur_code_postal\").focusout(function () {
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
        })
    </script>
{% endblock %}
", "cand/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/cand/index.html.twig");
    }
}
