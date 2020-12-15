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

/* ads/add.html.twig */
class __TwigTemplate_d9abcd3816c27d78f0373da32dc0632d909232d7a12c65602f3a0a54f41a45f3 extends \Twig\Template
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
            '_ads_actor_entry_row' => [$this, 'block__ads_actor_entry_row'],
            '_ads_actor_row' => [$this, 'block__ads_actor_row'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ads/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ads/add.html.twig"));

        // line 3
        $context["title"] = "Dépôt d'annonce";
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ads/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <style>
        h1, h2, h3, h4, h5 {
            font-weight: bolder;
        }
        h4 {
            color: #00BFA6;
        }
        legend, label:not(.form-check-label) {
            font-weight: 600;
        }
        .custom-file-label::after {
            font-weight: normal !important;
        }
        #ads_photo1, #ads_photo2, #ads_photo3 {
            display: none;
        }
        .undo a {
            color: #00BFA6;
            font-size: 1.25em !important;
            transition: ease .5s;
        }

        .undo a:hover {[Semantical Error]
            color: rgb(0, 143, 124);
        }

        label[for=\"ads_typeProjet_parent_0\"],
        label[for=\"ads_typeProjet_parent_1\"] {
            margin-top: 3px;
            margin-left: 3px;
        }
        #ads_dateLivraison {
            padding-left: 20px;
        }
        .datepicker,
        .table-condensed {
            width: 330px;
        }
        .ads__images__block label:last-child {
            margin-right: 0;
        }
        #preview__ad__images img {
           width: 200px;
        }
        #ajoutDocumentViewer {
           height: 250px;
           display: none;
        }
        .ads__images__block label {
            padding: 1.25em 1.65em;
            margin-right: 1.5em;
            color: #667d99;
            font-size: .85em;
            font-weight: 600;
            border: 1px solid #ced4da;
            cursor: pointer;
            transition: ease .5s;
        }
        .ads__images__block label:hover {
            border-color: #00BFA6;
            color: #00BFA6;
        }
        .ads__images__block label i::before {
            font-size: 48px;
        }
        .form-group {
            margin-bottom: 1.5em;
        }
        .l__height {
            margin: 2.5em 0 !important;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "<section>
    <div class=\"container\">


    
    ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_start');
        echo "

        <h4 class=\"my-4\">1. Les clés de l’opération</h4>
        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "name", [], "any", false, false, false, 90), 'row');
        echo "
        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "typeProjet", [], "any", false, false, false, 91), 'row');
        echo "
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "typologie", [], "any", false, false, false, 92), 'row');
        echo "
        <div class=\"d-flex\">
            <div class=\"col-md-6 pl-0 pr-2\">
                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "nbreLogementsTotal", [], "any", false, false, false, 95), 'row');
        echo "
            </div>
            <div class=\"col-md-6 pr-0 pl-2\">
                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "nbreLogementsDispo", [], "any", false, false, false, 98), 'row');
        echo "
            </div>
        </div>
        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "typesLogementsDispo", [], "any", false, false, false, 101), 'row');
        echo "
        <div class=\"d-flex\">
            <div class=\"col-md-4 pl-0 pr-2\">
                <label for=\"ads_prix\">Prix *</label>
                <div class=\"form-group\">
                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "prix", [], "any", false, false, false, 106), 'widget');
        echo "
                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "prix", [], "any", false, false, false, 107), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-md-8 pr-0 pl-2\">
                ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "montage", [], "any", false, false, false, 111), 'row');
        echo "
            </div>
        </div>
        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "etatAvancementProjet", [], "any", false, false, false, 114), 'row');
        echo "
        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "dateLivraison", [], "any", false, false, false, 115), 'row');
        echo "
        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "programmeGlobal", [], "any", false, false, false, 116), 'row');
        echo "
        <div class=\"d-flex\">
            <div class=\"col-md-6 pl-0 pr-2\">
                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "servicesBiensMutualises", [], "any", false, false, false, 119), 'row');
        echo "
            </div>
            <div class=\"col-md-6 pr-0 pl-2\">
                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "espacesCommunsInterieurs", [], "any", false, false, false, 122), 'row');
        echo "
            </div>
        </div>
        <div class=\"d-flex\">
            <div class=\"col-md-6 pl-0 pr-2\">
                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "espacesCommunsExterieurs", [], "any", false, false, false, 127), 'row');
        echo "
            </div>
            <div class=\"col-md-6 pr-0 pl-2\">
                ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "espacesPrivesExterieurs", [], "any", false, false, false, 130), 'row');
        echo "
            </div>
        </div>

        <h4 class=\"my-4\">2. Présentation du projet</h4>
        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "presentationProjet", [], "any", false, false, false, 135), "presentationOperation", [], "any", false, false, false, 135), 'row');
        echo "
        <div class=\"d-flex\">
            <div class=\"col-md-3 pl-0 pr-2\">
                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "presentationProjet", [], "any", false, false, false, 138), "pays", [], "any", false, false, false, 138), 'row');
        echo "
            </div>
            <div class=\"col-md-3 pr-0 pl-2 pr-2\">
                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "presentationProjet", [], "any", false, false, false, 141), "codePostal", [], "any", false, false, false, 141), 'row');
        echo "
            </div>
            <div class=\"col-md-6 pr-0 pl-2\">
                ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "presentationProjet", [], "any", false, false, false, 144), "ville", [], "any", false, false, false, 144), 'row');
        echo "
            </div>
        </div>
        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "presentationProjet", [], "any", false, false, false, 147), "adresse", [], "any", false, false, false, 147), 'row');
        echo "
        ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "presentationProjet", [], "any", false, false, false, 148), "presentationCommodites", [], "any", false, false, false, 148), 'row');
        echo "
        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "presentationProjet", [], "any", false, false, false, 149), "presentationAmbitionsProjet", [], "any", false, false, false, 149), 'row');
        echo "
        
        <!-- Ici, Intégration des images -->
        <div id=\"preview__ad__images\" class=\"d-flex align-items-center\">
            <span data-index=\"0\"></span>
            <span data-index=\"1\"></span>
            <span data-index=\"2\"></span>
        </div>
        <div class=\"d-flex mb-4 ads__images__block\">
            <label class=\"rounded text-center\" for=\"ads_photo1_file_file\">
                <i class=\"icon-camera\"></i>
                <div class=\"mt-1\">Photo n°1</div>
                <div class=\"mt-2\">
                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "photo1", [], "any", false, false, false, 162), "file", [], "any", false, false, false, 162), 'errors');
        echo "
                </div>
            </label>
            <label class=\"rounded text-center\" for=\"ads_photo2_file_file\">
                <i class=\"icon-camera\"></i>
                <div class=\"mt-1\">Photo n°2</div>
            </label>
            <label class=\"rounded text-center\" for=\"ads_photo3_file_file\">
                <i class=\"icon-camera\"></i>
                <div class=\"mt-1\">Photo n°3</div>
            </label>
        </div>
        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "photo1", [], "any", false, false, false, 174), 'row');
        echo "
        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "photo2", [], "any", false, false, false, 175), 'row');
        echo "
        ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "photo3", [], "any", false, false, false, 176), 'row');
        echo "
        <!-- Fin Intégration des images -->
        ";
        // line 178
        if ((1 > 2)) {
            // line 179
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "enSavoirPlus", [], "any", false, false, false, 179), 'row');
            echo "
            ";
            // line 180
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "ajouterLien", [], "any", false, false, false, 180), 'row');
            echo "

            <label for=\"ads_ajouterDocument_file_file\">Ajouter un document *</label><br>
            <canvas id=\"ajoutDocumentViewer\"></canvas>
            ";
            // line 184
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "ajouterDocument", [], "any", false, false, false, 184), 'row');
            echo "
        ";
        }
        // line 186
        echo "        <div class=\"l__height\"></div>
        <h4 class=\"my-4\">3. Acteurs de l’opération et contact</h4>
        <h5 class=\"my-4\">Qui sont les acteurs de cette opération ?</h5>

        <h5 class=\"my-4\">Acteur 1</h5>
        ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "acteur1", [], "any", false, false, false, 191), 'row');
        echo "

        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "actor", [], "any", false, false, false, 193), 'row');
        echo "
        <div class=\"l__height\"></div>
        <h5 class=\"my-4\">Contact du modérateur de l’annonce</h5>
        <div class=\"d-flex\">
            <div class=\"col-md-6 pl-0 pr-2\">
                <label for=\"ads_mailModerator\">Email *</label>
                <div class=\"input-group\">
                    ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "mailModerator", [], "any", false, false, false, 200), 'widget');
        echo "
                    ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "mailModerator", [], "any", false, false, false, 201), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-md-6 pr-0 pl-2\">
                <label for=\"ads_mailModerator\">Téléphone</label>
                ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "phoneModerator", [], "any", false, false, false, 206), 'row');
        echo "
            </div>
        </div>

        <h4 class=\"my-4\">4. Gestion des candidatures</h4>
        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "modalitesCandidatureDesc", [], "any", false, false, false, 211), 'row');
        echo "
        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "typeFormCandidature", [], "any", false, false, false, 212), 'row');
        echo "

    <div class=\"d-none\">
        ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), 'rest');
        echo "
    </div>
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btnSubmit my-3\">Déposer mon annonce !</button>
        </div>
    ";
        // line 220
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), 'form_end');
        echo "
</div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 225
    public function block__ads_actor_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ads_actor_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ads_actor_entry_row"));

        // line 226
        echo "    <div id=\"entry_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 226, $this->source); })()), "html", null, true);
        echo "\" class=\"d-flex\">
        <div class=\"w-100\">
            ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "name", [], "any", false, false, false, 228), 'row');
        echo "
            ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "role", [], "any", false, false, false, 229), 'row');
        echo "
            ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "description", [], "any", false, false, false, 230), 'row');
        echo "
            ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "image", [], "any", false, false, false, 231), 'row');
        echo "
        </div>
        <div class=\"flex-shrink-1\">
            <button title=\"Supprimer cet acteur\" type=\"button\" class=\"btn btn-sm ml-4 btnSubmit delete__actor\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 241
    public function block__ads_actor_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ads_actor_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_ads_actor_row"));

        // line 242
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), 'row');
        echo "
        <div class=\"form-group\">
            <button id=\"add__actor\" type=\"button\" class=\"btn btnSubmit\">Ajouter un acteur</button>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 248
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 249
        echo "    <script src=\"https://mozilla.github.io/pdf.js/build/pdf.js\"></script>
    <script>
        \$(function() 
        {
            function resetElements()
            {
                \$('.form-error-icon').text('erreur !');

                \$('#ads_photo1, #ads_photo2, #ads_photo3').parent().css('display', 'none');

                \$('#ads_typeProjet').parent().css('marginBottom', 0);
                \$('#ads_dateLivraison select').addClass('form-control-sm');
                
                \$('#ads_photo1_file_file').attr('accept', 'image/*');
                \$('#ads_photo2_file_file').attr('accept', 'image/*');
                \$('#ads_photo3_file_file').attr('accept', 'image/*');
                \$('#ads_acteur1_image_file_file').attr('accept', 'image/*');

                \$('#ads_prix').parent().addClass('input-group').prepend('<div class=\"input-group-prepend\"><div class=\"input-group-text\"><i class=\"fas fa-euro-sign\"></i></div></div>');
                \$('#ads_mailModerator').parent().addClass('input-group').prepend('<div class=\"input-group-prepend\"><div class=\"input-group-text\"><i class=\"fab fa-telegram-plane\"></i></div></div>');
                \$('#ads_phoneModerator').parent().addClass('input-group').prepend('<div class=\"input-group-prepend\"><div class=\"input-group-text\"><i class=\"fas fa-phone-alt\"></i></div></div>');

                \$('#ads_acteur1_image').parent('fieldset').css('marginBottom', 0);
                \$('#ads_acteur1_image').children('fieldset').css('marginBottom', 0);
            }
            resetElements();

            function showActeur1Image() 
            {
                \$('#ads_acteur1_image_file_file').on('input', function (e) 
                {
                    \$('.mb-4').remove();
                    let reader = new FileReader();

                    reader.onload = (e) => 
                    {
                        \$(this).parent().before('<img src=\"' + e.target.result + '\" class=\"w-25 mb-4\">');
                        \$('.vich-image').addClass('text-center');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                });
            }
            showActeur1Image();

            function showActorImages(index) 
            {
                \$('#ads_actor input[type=\"file\"]').eq(index).on('input', function (e) 
                {
                    \$('.mb-3').eq(index).remove();
                    let reader = new FileReader();

                    reader.onload = (e) => 
                    {
                        \$(this).parent().before('<img src=\"' + e.target.result + '\" class=\"w-25 mb-3\">');
                        \$('.vich-image').addClass('text-center');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                });
            }

            function isAutogrow() 
            {
                \$('.is__autogrow').on('input', function() 
                {
                    this.style.overflow = 'hidden';
                    this.style.height = 'auto';
                    this.style.height = (this.scrollHeight) + 'px'; 
                });

            }
            isAutogrow();

            function addActor() 
            {
                \$('#add__actor').click(function() 
                {
                    //Retrieving the numbers of future fields blocks to create
                    let index = \$('#ads_actor .d-flex').length;
                    //Retrieving entry prototype
                    let prototypeTemplate = \$('#ads_actor').data('prototype').replace(/__name__/g, index);
                    //Prototype template injected into the div
                    \$('#ads_actor').append(prototypeTemplate);
                    // Handle delete actor action
                    deleteActor(index);
                    \$('#ads_actor input[type=\"file\"]').attr('accept', 'image/*');
                    isAutogrow();
                    showActorImages(index);
                });
            }
            addActor();

            function deleteActor(index) 
            {
                \$('.delete__actor').click(function() 
                {
                    \$(this).closest('#entry_ads_actor_'+ index +'').remove();
                });
            }
            
            function showAdImages() 
            {
                // Loaded via <script> tag, create shortcut to access PDF.js exports.
                let pdfjsLib = window['pdfjs-dist/build/pdf'];
                // The workerSrc property shall be specified.
                pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

                \$('#ads_photo1_file_file').on('input', function(e) 
                {
                    let reader = new FileReader();
                    let index = \$('#preview__ad__images span[data-index=\"0\"]');
                    \$('#preview__ad__images').removeClass('.mb-3');

                    reader.onload = (e) => 
                    {
                        \$(index).html('<img src=\"'+ e.target.result +'\" class=\"mr-3\">');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                    \$('#preview__ad__images').addClass('mb-3');
                });

                \$('#ads_photo2_file_file').on('input', function(e) 
                {
                    let reader = new FileReader();
                    let index = \$('#preview__ad__images span[data-index=\"1\"]');
                    \$('#preview__ad__images').removeClass('.mb-3');

                    reader.onload = (e) => 
                    {
                        \$(index).html('<img src=\"'+ e.target.result +'\" class=\"mr-3\">');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                    \$('#preview__ad__images').addClass('mb-3');
                });

                \$('#ads_photo3_file_file').on('input', function(e) 
                {
                    let reader = new FileReader();
                    let index = \$('#preview__ad__images span[data-index=\"2\"]');
                    \$('#preview__ad__images').removeClass('.mb-3');

                    reader.onload = (e) => 
                    {
                        \$(index).html('<img src=\"'+ e.target.result +'\" class=\"mr-3\">');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                    \$('#preview__ad__images').addClass('mb-3');
                });
                
                \$('#ads_ajouterDocument_file_file').on('change', function(e) 
                {
                    \$('.ads_ajouterDocument_').remove();
                    \$('#ajoutDocumentViewer').fadeOut();
                    let reader = new FileReader();

                    if(e.target.files[0].type === 'image/jpeg') 
                    {
                        reader.onload = (e) =>
                        {
                            \$(this).closest('.vich-image').prepend('<img src=\"' + e.target.result + '\" width=\"240\" class=\"mb-3 ads_ajouterDocument_\">');
                        }
                        reader.readAsDataURL(e.target.files[0]);
                    } 
                    else 
                    {
                        reader.onload = function()
                        {
                            let pdfData = new Uint8Array(this.result);
                            let loadingTask = pdfjsLib.getDocument({ data: pdfData });

                            loadingTask.promise.then(function (pdf) 
                            {
                                pdf.getPage(1).then((page) => 
                                {
                                    let viewport = page.getViewport({ scale: 1 });

                                    // Prepare canvas using PDF page dimensions
                                    let canvas = \$('#ajoutDocumentViewer')[0];
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
                                        \$('#ajoutDocumentViewer').fadeIn();
                                        console.log('Page rendered');
                                    });
                                });
                            }, (reason) => { console.log(reason.error); });
                        }
                        reader.readAsArrayBuffer(e.target.files[0]);

                    }
                    
                });
            }
            showAdImages();

            function hydrateVilleField() 
            {
                \$('#ads_presentationProjet_codePostal').on('blur', function() 
                {
                    \$('.ville__dynamic').remove();
                    \$('.alert__cp__error').remove();
                    \$('#ads_presentationProjet_ville option').remove();
                    
                    if(\$(this).val() !== '') 
                    {
                        \$.ajax(
                        {
                            method: 'GET',
                            url: 'https://geo.api.gouv.fr/communes?codePostal='+ \$(this).val() +'& format=json',
                            dataType: 'json',
                            headers: { 'X-Requested-With' : 'XMLHttpRequest' },
                            success: (response) => 
                            {
                                if(response.length > 0) 
                                {
                                    \$(response).each((key, value) => 
                                    {
                                        \$('#ads_presentationProjet_ville').parent().after('<div class=\"form-check form-check-inline ville__dynamic\"><input id=\"'+ key +'\" type=\"radio\" name=\"ville\" class=\"form-check-input ville__dynamic__val\" value=\"'+ value.nom +'\"><label class=\"form-check-label\" for=\"'+ key +'\">'+ value.nom +'</label></div>');
                                    });

                                    \$('.ville__dynamic__val').click(function() 
                                    {
                                        \$('#ads_presentationProjet_ville').val(\$(this).val());
                                        \$('.ville__dynamic').remove();
                                    });
                                } 
                                else 
                                {
                                    \$('#ads_presentationProjet_codePostal').after('<div class=\"text-danger mt-2 alert__cp__error\">Aucune ville ne correspond à <strong>\"'+ \$(this).val() +'\"</strong></div>')
                                }
                                //console.log('bolok nos da patata caliente !');
                                
                            },
                        });
                    }
                    
                });
            }
            hydrateVilleField();

            function showPromoParticipativeChild() 
            {
                \$('#ads_typeProjet_child').hide();
                
                \$('#ads_typeProjet_parent_1').on('input', () => 
                {
                    \$('#ads_typeProjet_child').fadeIn();
                });

                \$('#ads_typeProjet_parent_0').on('input', () => 
                {
                    \$('#ads_typeProjet_child').fadeOut();
                });
            }
            showPromoParticipativeChild();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ads/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 249,  518 => 248,  502 => 242,  492 => 241,  473 => 231,  469 => 230,  465 => 229,  461 => 228,  455 => 226,  445 => 225,  431 => 220,  423 => 215,  417 => 212,  413 => 211,  405 => 206,  397 => 201,  393 => 200,  383 => 193,  378 => 191,  371 => 186,  366 => 184,  359 => 180,  354 => 179,  352 => 178,  347 => 176,  343 => 175,  339 => 174,  324 => 162,  308 => 149,  304 => 148,  300 => 147,  294 => 144,  288 => 141,  282 => 138,  276 => 135,  268 => 130,  262 => 127,  254 => 122,  248 => 119,  242 => 116,  238 => 115,  234 => 114,  228 => 111,  221 => 107,  217 => 106,  209 => 101,  203 => 98,  197 => 95,  191 => 92,  187 => 91,  183 => 90,  177 => 87,  170 => 82,  160 => 81,  77 => 7,  67 => 6,  56 => 1,  54 => 5,  52 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Dépôt d\\'annonce' %}

{% form_theme form _self %}
{% block stylesheets %}
    <style>
        h1, h2, h3, h4, h5 {
            font-weight: bolder;
        }
        h4 {
            color: #00BFA6;
        }
        legend, label:not(.form-check-label) {
            font-weight: 600;
        }
        .custom-file-label::after {
            font-weight: normal !important;
        }
        #ads_photo1, #ads_photo2, #ads_photo3 {
            display: none;
        }
        .undo a {
            color: #00BFA6;
            font-size: 1.25em !important;
            transition: ease .5s;
        }

        .undo a:hover {[Semantical Error]
            color: rgb(0, 143, 124);
        }

        label[for=\"ads_typeProjet_parent_0\"],
        label[for=\"ads_typeProjet_parent_1\"] {
            margin-top: 3px;
            margin-left: 3px;
        }
        #ads_dateLivraison {
            padding-left: 20px;
        }
        .datepicker,
        .table-condensed {
            width: 330px;
        }
        .ads__images__block label:last-child {
            margin-right: 0;
        }
        #preview__ad__images img {
           width: 200px;
        }
        #ajoutDocumentViewer {
           height: 250px;
           display: none;
        }
        .ads__images__block label {
            padding: 1.25em 1.65em;
            margin-right: 1.5em;
            color: #667d99;
            font-size: .85em;
            font-weight: 600;
            border: 1px solid #ced4da;
            cursor: pointer;
            transition: ease .5s;
        }
        .ads__images__block label:hover {
            border-color: #00BFA6;
            color: #00BFA6;
        }
        .ads__images__block label i::before {
            font-size: 48px;
        }
        .form-group {
            margin-bottom: 1.5em;
        }
        .l__height {
            margin: 2.5em 0 !important;
        }
    </style>

{% endblock %}
{% block body %}
<section>
    <div class=\"container\">


    
    {{ form_start(form) }}

        <h4 class=\"my-4\">1. Les clés de l’opération</h4>
        {{ form_row(form.name) }}
        {{ form_row(form.typeProjet) }}
        {{ form_row(form.typologie) }}
        <div class=\"d-flex\">
            <div class=\"col-md-6 pl-0 pr-2\">
                {{ form_row(form.nbreLogementsTotal) }}
            </div>
            <div class=\"col-md-6 pr-0 pl-2\">
                {{ form_row(form.nbreLogementsDispo) }}
            </div>
        </div>
        {{ form_row(form.typesLogementsDispo) }}
        <div class=\"d-flex\">
            <div class=\"col-md-4 pl-0 pr-2\">
                <label for=\"ads_prix\">Prix *</label>
                <div class=\"form-group\">
                    {{ form_widget(form.prix) }}
                    {{ form_errors(form.prix) }}
                </div>
            </div>
            <div class=\"col-md-8 pr-0 pl-2\">
                {{ form_row(form.montage) }}
            </div>
        </div>
        {{ form_row(form.etatAvancementProjet) }}
        {{ form_row(form.dateLivraison) }}
        {{ form_row(form.programmeGlobal) }}
        <div class=\"d-flex\">
            <div class=\"col-md-6 pl-0 pr-2\">
                {{ form_row(form.servicesBiensMutualises) }}
            </div>
            <div class=\"col-md-6 pr-0 pl-2\">
                {{ form_row(form.espacesCommunsInterieurs) }}
            </div>
        </div>
        <div class=\"d-flex\">
            <div class=\"col-md-6 pl-0 pr-2\">
                {{ form_row(form.espacesCommunsExterieurs) }}
            </div>
            <div class=\"col-md-6 pr-0 pl-2\">
                {{ form_row(form.espacesPrivesExterieurs) }}
            </div>
        </div>

        <h4 class=\"my-4\">2. Présentation du projet</h4>
        {{ form_row(form.presentationProjet.presentationOperation) }}
        <div class=\"d-flex\">
            <div class=\"col-md-3 pl-0 pr-2\">
                {{ form_row(form.presentationProjet.pays) }}
            </div>
            <div class=\"col-md-3 pr-0 pl-2 pr-2\">
                {{ form_row(form.presentationProjet.codePostal) }}
            </div>
            <div class=\"col-md-6 pr-0 pl-2\">
                {{ form_row(form.presentationProjet.ville) }}
            </div>
        </div>
        {{ form_row(form.presentationProjet.adresse) }}
        {{ form_row(form.presentationProjet.presentationCommodites) }}
        {{ form_row(form.presentationProjet.presentationAmbitionsProjet) }}
        
        <!-- Ici, Intégration des images -->
        <div id=\"preview__ad__images\" class=\"d-flex align-items-center\">
            <span data-index=\"0\"></span>
            <span data-index=\"1\"></span>
            <span data-index=\"2\"></span>
        </div>
        <div class=\"d-flex mb-4 ads__images__block\">
            <label class=\"rounded text-center\" for=\"ads_photo1_file_file\">
                <i class=\"icon-camera\"></i>
                <div class=\"mt-1\">Photo n°1</div>
                <div class=\"mt-2\">
                    {{ form_errors(form.photo1.file) }}
                </div>
            </label>
            <label class=\"rounded text-center\" for=\"ads_photo2_file_file\">
                <i class=\"icon-camera\"></i>
                <div class=\"mt-1\">Photo n°2</div>
            </label>
            <label class=\"rounded text-center\" for=\"ads_photo3_file_file\">
                <i class=\"icon-camera\"></i>
                <div class=\"mt-1\">Photo n°3</div>
            </label>
        </div>
        {{ form_row(form.photo1) }}
        {{ form_row(form.photo2) }}
        {{ form_row(form.photo3) }}
        <!-- Fin Intégration des images -->
        {% if 1 > 2 %}
            {{ form_row(form.enSavoirPlus) }}
            {{ form_row(form.ajouterLien) }}

            <label for=\"ads_ajouterDocument_file_file\">Ajouter un document *</label><br>
            <canvas id=\"ajoutDocumentViewer\"></canvas>
            {{ form_row(form.ajouterDocument) }}
        {% endif %}
        <div class=\"l__height\"></div>
        <h4 class=\"my-4\">3. Acteurs de l’opération et contact</h4>
        <h5 class=\"my-4\">Qui sont les acteurs de cette opération ?</h5>

        <h5 class=\"my-4\">Acteur 1</h5>
        {{ form_row(form.acteur1) }}

        {{ form_row(form.actor) }}
        <div class=\"l__height\"></div>
        <h5 class=\"my-4\">Contact du modérateur de l’annonce</h5>
        <div class=\"d-flex\">
            <div class=\"col-md-6 pl-0 pr-2\">
                <label for=\"ads_mailModerator\">Email *</label>
                <div class=\"input-group\">
                    {{ form_widget(form.mailModerator) }}
                    {{ form_errors(form.mailModerator) }}
                </div>
            </div>
            <div class=\"col-md-6 pr-0 pl-2\">
                <label for=\"ads_mailModerator\">Téléphone</label>
                {{ form_row(form.phoneModerator) }}
            </div>
        </div>

        <h4 class=\"my-4\">4. Gestion des candidatures</h4>
        {{ form_row(form.modalitesCandidatureDesc) }}
        {{ form_row(form.typeFormCandidature) }}

    <div class=\"d-none\">
        {{ form_rest(form) }}
    </div>
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btnSubmit my-3\">Déposer mon annonce !</button>
        </div>
    {{ form_end(form) }}
</div>
</section>
{% endblock %}

{% block _ads_actor_entry_row %}
    <div id=\"entry_{{ id }}\" class=\"d-flex\">
        <div class=\"w-100\">
            {{ form_row(form.name) }}
            {{ form_row(form.role) }}
            {{ form_row(form.description) }}
            {{ form_row(form.image) }}
        </div>
        <div class=\"flex-shrink-1\">
            <button title=\"Supprimer cet acteur\" type=\"button\" class=\"btn btn-sm ml-4 btnSubmit delete__actor\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
    </div>
{% endblock %}

    {% block _ads_actor_row %}
        {{ form_row(form) }}
        <div class=\"form-group\">
            <button id=\"add__actor\" type=\"button\" class=\"btn btnSubmit\">Ajouter un acteur</button>
        </div>
    {% endblock %}

{% block javascripts %}
    <script src=\"https://mozilla.github.io/pdf.js/build/pdf.js\"></script>
    <script>
        \$(function() 
        {
            function resetElements()
            {
                \$('.form-error-icon').text('erreur !');

                \$('#ads_photo1, #ads_photo2, #ads_photo3').parent().css('display', 'none');

                \$('#ads_typeProjet').parent().css('marginBottom', 0);
                \$('#ads_dateLivraison select').addClass('form-control-sm');
                
                \$('#ads_photo1_file_file').attr('accept', 'image/*');
                \$('#ads_photo2_file_file').attr('accept', 'image/*');
                \$('#ads_photo3_file_file').attr('accept', 'image/*');
                \$('#ads_acteur1_image_file_file').attr('accept', 'image/*');

                \$('#ads_prix').parent().addClass('input-group').prepend('<div class=\"input-group-prepend\"><div class=\"input-group-text\"><i class=\"fas fa-euro-sign\"></i></div></div>');
                \$('#ads_mailModerator').parent().addClass('input-group').prepend('<div class=\"input-group-prepend\"><div class=\"input-group-text\"><i class=\"fab fa-telegram-plane\"></i></div></div>');
                \$('#ads_phoneModerator').parent().addClass('input-group').prepend('<div class=\"input-group-prepend\"><div class=\"input-group-text\"><i class=\"fas fa-phone-alt\"></i></div></div>');

                \$('#ads_acteur1_image').parent('fieldset').css('marginBottom', 0);
                \$('#ads_acteur1_image').children('fieldset').css('marginBottom', 0);
            }
            resetElements();

            function showActeur1Image() 
            {
                \$('#ads_acteur1_image_file_file').on('input', function (e) 
                {
                    \$('.mb-4').remove();
                    let reader = new FileReader();

                    reader.onload = (e) => 
                    {
                        \$(this).parent().before('<img src=\"' + e.target.result + '\" class=\"w-25 mb-4\">');
                        \$('.vich-image').addClass('text-center');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                });
            }
            showActeur1Image();

            function showActorImages(index) 
            {
                \$('#ads_actor input[type=\"file\"]').eq(index).on('input', function (e) 
                {
                    \$('.mb-3').eq(index).remove();
                    let reader = new FileReader();

                    reader.onload = (e) => 
                    {
                        \$(this).parent().before('<img src=\"' + e.target.result + '\" class=\"w-25 mb-3\">');
                        \$('.vich-image').addClass('text-center');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                });
            }

            function isAutogrow() 
            {
                \$('.is__autogrow').on('input', function() 
                {
                    this.style.overflow = 'hidden';
                    this.style.height = 'auto';
                    this.style.height = (this.scrollHeight) + 'px'; 
                });

            }
            isAutogrow();

            function addActor() 
            {
                \$('#add__actor').click(function() 
                {
                    //Retrieving the numbers of future fields blocks to create
                    let index = \$('#ads_actor .d-flex').length;
                    //Retrieving entry prototype
                    let prototypeTemplate = \$('#ads_actor').data('prototype').replace(/__name__/g, index);
                    //Prototype template injected into the div
                    \$('#ads_actor').append(prototypeTemplate);
                    // Handle delete actor action
                    deleteActor(index);
                    \$('#ads_actor input[type=\"file\"]').attr('accept', 'image/*');
                    isAutogrow();
                    showActorImages(index);
                });
            }
            addActor();

            function deleteActor(index) 
            {
                \$('.delete__actor').click(function() 
                {
                    \$(this).closest('#entry_ads_actor_'+ index +'').remove();
                });
            }
            
            function showAdImages() 
            {
                // Loaded via <script> tag, create shortcut to access PDF.js exports.
                let pdfjsLib = window['pdfjs-dist/build/pdf'];
                // The workerSrc property shall be specified.
                pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

                \$('#ads_photo1_file_file').on('input', function(e) 
                {
                    let reader = new FileReader();
                    let index = \$('#preview__ad__images span[data-index=\"0\"]');
                    \$('#preview__ad__images').removeClass('.mb-3');

                    reader.onload = (e) => 
                    {
                        \$(index).html('<img src=\"'+ e.target.result +'\" class=\"mr-3\">');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                    \$('#preview__ad__images').addClass('mb-3');
                });

                \$('#ads_photo2_file_file').on('input', function(e) 
                {
                    let reader = new FileReader();
                    let index = \$('#preview__ad__images span[data-index=\"1\"]');
                    \$('#preview__ad__images').removeClass('.mb-3');

                    reader.onload = (e) => 
                    {
                        \$(index).html('<img src=\"'+ e.target.result +'\" class=\"mr-3\">');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                    \$('#preview__ad__images').addClass('mb-3');
                });

                \$('#ads_photo3_file_file').on('input', function(e) 
                {
                    let reader = new FileReader();
                    let index = \$('#preview__ad__images span[data-index=\"2\"]');
                    \$('#preview__ad__images').removeClass('.mb-3');

                    reader.onload = (e) => 
                    {
                        \$(index).html('<img src=\"'+ e.target.result +'\" class=\"mr-3\">');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                    \$('#preview__ad__images').addClass('mb-3');
                });
                
                \$('#ads_ajouterDocument_file_file').on('change', function(e) 
                {
                    \$('.ads_ajouterDocument_').remove();
                    \$('#ajoutDocumentViewer').fadeOut();
                    let reader = new FileReader();

                    if(e.target.files[0].type === 'image/jpeg') 
                    {
                        reader.onload = (e) =>
                        {
                            \$(this).closest('.vich-image').prepend('<img src=\"' + e.target.result + '\" width=\"240\" class=\"mb-3 ads_ajouterDocument_\">');
                        }
                        reader.readAsDataURL(e.target.files[0]);
                    } 
                    else 
                    {
                        reader.onload = function()
                        {
                            let pdfData = new Uint8Array(this.result);
                            let loadingTask = pdfjsLib.getDocument({ data: pdfData });

                            loadingTask.promise.then(function (pdf) 
                            {
                                pdf.getPage(1).then((page) => 
                                {
                                    let viewport = page.getViewport({ scale: 1 });

                                    // Prepare canvas using PDF page dimensions
                                    let canvas = \$('#ajoutDocumentViewer')[0];
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
                                        \$('#ajoutDocumentViewer').fadeIn();
                                        console.log('Page rendered');
                                    });
                                });
                            }, (reason) => { console.log(reason.error); });
                        }
                        reader.readAsArrayBuffer(e.target.files[0]);

                    }
                    
                });
            }
            showAdImages();

            function hydrateVilleField() 
            {
                \$('#ads_presentationProjet_codePostal').on('blur', function() 
                {
                    \$('.ville__dynamic').remove();
                    \$('.alert__cp__error').remove();
                    \$('#ads_presentationProjet_ville option').remove();
                    
                    if(\$(this).val() !== '') 
                    {
                        \$.ajax(
                        {
                            method: 'GET',
                            url: 'https://geo.api.gouv.fr/communes?codePostal='+ \$(this).val() +'& format=json',
                            dataType: 'json',
                            headers: { 'X-Requested-With' : 'XMLHttpRequest' },
                            success: (response) => 
                            {
                                if(response.length > 0) 
                                {
                                    \$(response).each((key, value) => 
                                    {
                                        \$('#ads_presentationProjet_ville').parent().after('<div class=\"form-check form-check-inline ville__dynamic\"><input id=\"'+ key +'\" type=\"radio\" name=\"ville\" class=\"form-check-input ville__dynamic__val\" value=\"'+ value.nom +'\"><label class=\"form-check-label\" for=\"'+ key +'\">'+ value.nom +'</label></div>');
                                    });

                                    \$('.ville__dynamic__val').click(function() 
                                    {
                                        \$('#ads_presentationProjet_ville').val(\$(this).val());
                                        \$('.ville__dynamic').remove();
                                    });
                                } 
                                else 
                                {
                                    \$('#ads_presentationProjet_codePostal').after('<div class=\"text-danger mt-2 alert__cp__error\">Aucune ville ne correspond à <strong>\"'+ \$(this).val() +'\"</strong></div>')
                                }
                                //console.log('bolok nos da patata caliente !');
                                
                            },
                        });
                    }
                    
                });
            }
            hydrateVilleField();

            function showPromoParticipativeChild() 
            {
                \$('#ads_typeProjet_child').hide();
                
                \$('#ads_typeProjet_parent_1').on('input', () => 
                {
                    \$('#ads_typeProjet_child').fadeIn();
                });

                \$('#ads_typeProjet_parent_0').on('input', () => 
                {
                    \$('#ads_typeProjet_child').fadeOut();
                });
            }
            showPromoParticipativeChild();
        });
    </script>
{% endblock %}
", "ads/add.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/ads/add.html.twig");
    }
}
