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

/* admin/posts/posts_add_update.html.twig */
class __TwigTemplate_dddde817aadcd79c313a169aa45cc9a1df638f7e83706e513ac5ebe635c2fb19 extends \Twig\Template
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
            '_post_images_entry_row' => [$this, 'block__post_images_entry_row'],
            '_post_images_row' => [$this, 'block__post_images_row'],
            '_post_contents_entry_row' => [$this, 'block__post_contents_entry_row'],
            '_post_contents_entry_widget' => [$this, 'block__post_contents_entry_widget'],
            '_post_contents_widget' => [$this, 'block__post_contents_widget'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/posts_add_update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/posts/posts_add_update.html.twig"));

        // line 3
        $context["title"] = "Création d'un post";
        // line 30
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/posts/posts_add_update.html.twig", 1);
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
        .undo a {
            color: #00BFA6;
            font-size: 1.25em !important;
            transition: ease .5s;
        }
        .undo a:hover {
            color: rgb(0, 143, 124);
        }
        #post_images {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        #post_images .d-flex:last-child {
            margin-right: 0;
        }
        #post_images .d-flex {
            margin-right: 1em;
            width: 32%;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "
    <div class=\"my-4 undo\">
        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("posts_list");
        echo "\">
            <i class=\"fas fa-arrow-left\"></i>
        </a>
    </div>
    
    ";
        // line 40
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 40, $this->source); })()) != "update")) {
            // line 41
            echo "        <h2 class=\"text-center font-weight-bold mb-4\">Créer un post</h2>
    ";
        } else {
            // line 43
            echo "        <h2 class=\"text-center font-weight-bold mb-4\">Modifier un post</h2>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_start');
        echo "

    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'rest');
        echo "

    ";
        // line 50
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 50, $this->source); })()) != "update")) {
            // line 51
            echo "        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btnSubmit my-3 w-100\">Publier votre post !</button>
        </div>
    ";
        } else {
            // line 55
            echo "        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btnSubmit my-3 w-100\">Modifier votre post !</button>
        </div>
    ";
        }
        // line 59
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block__post_images_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_post_images_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_post_images_entry_row"));

        // line 64
        echo "    <div id=\"entry_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "\" class=\"d-flex\">
        <div class=\"w-100\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "file", [], "any", false, false, false, 66), 'row');
        echo "
        </div>
        <div class=\"flex-shrink-1\">
            <button title=\"Supprimer cette image\" type=\"button\" class=\"btn btn-sm ml-4 btnDanger delete__post__image\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block__post_images_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_post_images_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_post_images_row"));

        // line 77
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'row');
        echo "
    <div class=\"form-group mt-4\">
        <div class=\"mb-4\">
            <em class=\"font-weight-bolder text_grey\">Ici, vous pouvez ajouter une image !</em>
        </div>
        <button id=\"add__post__image\" type=\"button\" class=\"btn btnSubmit\">Ajouter une image</button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block__post_contents_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_post_contents_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_post_contents_entry_row"));

        // line 89
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block__post_contents_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_post_contents_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_post_contents_entry_widget"));

        // line 93
        echo "    <div id=\"entry_";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "\" class=\"d-flex my-4\">
        <div class=\"w-100\">
            <div class=\"form-group\">
                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "subTitle", [], "any", false, false, false, 96), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "content", [], "any", false, false, false, 99), 'widget');
        echo "
            </div>
        </div>
        <div class=\"flex-shrink-1\">
            <button title=\"Supprimer ce contenu\" type=\"button\" class=\"btn btn-sm ml-4 btnDanger delete__post__content\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block__post_contents_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_post_contents_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_post_contents_widget"));

        // line 111
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'widget');
        echo "
    <div class=\"form-group mt-4\">
        <div class=\"mb-4\">
            <em class=\"font-weight-bolder text_grey\">Ici, vous pouvez ajouter du contenu !</em>
        </div>
        <button id=\"add__post__content\" type=\"button\" class=\"btn btnSubmit\">Ajouter un contenu</button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        echo "    <script>
        \$(function () 
        {
            function showPostImages(index) 
            {
                \$('#post_images input[type=\"file\"]').eq(index).on('input', function (e) 
                {
                    \$('.mb-3').eq(index).remove();
                    let reader = new FileReader();

                    reader.onload = (e) => 
                    {
                        \$(this).parent().before('<img src=\"' + e.target.result + '\" class=\"w-100 mb-3\">');
                        \$('.vich-image').addClass('text-right');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                });
            }
            
            function addImage()
            {
                \$('#add__post__image').click(function() 
                {
                    let index = \$('#post_images .d-flex').length;
                    let template = \$('#post_images').data('prototype').replace(/__name__/g, index);

                    \$('#post_images').append(template);
                    
                    removeImage(index);
                    showPostImages(index);
                });
            }
            addImage();

            function removeImage(index)
            {
                \$('.delete__post__image').click(function() 
                {
                    \$(this).closest('#entry_post_images_'+ index).remove();
                });
            }

            function addContent()
            {
                \$('#add__post__content').click(function() 
                {
                    let index = \$('#post_contents .d-flex').length;
                    let template = \$('#post_contents').data('prototype').replace(/__name__/g, index);

                    \$('#post_contents').append(template);

                    removeContent(index);
                });
            }
            addContent();

            function removeContent(index)
            {
                \$('.delete__post__content').click(function() 
                {
                    \$(this).closest('#entry_post_contents_'+ index).remove();
                });
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/posts/posts_add_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 122,  343 => 121,  324 => 111,  314 => 110,  294 => 99,  288 => 96,  281 => 93,  271 => 92,  258 => 89,  248 => 88,  229 => 77,  219 => 76,  200 => 66,  194 => 64,  184 => 63,  171 => 59,  165 => 55,  159 => 51,  157 => 50,  152 => 48,  147 => 46,  144 => 45,  140 => 43,  136 => 41,  134 => 40,  126 => 35,  122 => 33,  112 => 32,  80 => 6,  70 => 5,  59 => 1,  57 => 30,  55 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Création d\\'un post' %}

{% block stylesheets %}
    <style>
        .undo a {
            color: #00BFA6;
            font-size: 1.25em !important;
            transition: ease .5s;
        }
        .undo a:hover {
            color: rgb(0, 143, 124);
        }
        #post_images {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        #post_images .d-flex:last-child {
            margin-right: 0;
        }
        #post_images .d-flex {
            margin-right: 1em;
            width: 32%;
        }
    </style>
{% endblock %}

{% form_theme form _self %}

{% block body %}

    <div class=\"my-4 undo\">
        <a href=\"{{ path('posts_list') }}\">
            <i class=\"fas fa-arrow-left\"></i>
        </a>
    </div>
    
    {% if action != 'update' %}
        <h2 class=\"text-center font-weight-bold mb-4\">Créer un post</h2>
    {% else %}
        <h2 class=\"text-center font-weight-bold mb-4\">Modifier un post</h2>
    {% endif %}

    {{ form_start(form) }}

    {{ form_rest(form) }}

    {% if action != 'update' %}
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btnSubmit my-3 w-100\">Publier votre post !</button>
        </div>
    {% else %}
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btnSubmit my-3 w-100\">Modifier votre post !</button>
        </div>
    {% endif %}
    {{ form_end(form) }}
{% endblock %}

{# Collection image  #}
{% block _post_images_entry_row %}
    <div id=\"entry_{{ id }}\" class=\"d-flex\">
        <div class=\"w-100\">
            {{ form_row(form.file) }}
        </div>
        <div class=\"flex-shrink-1\">
            <button title=\"Supprimer cette image\" type=\"button\" class=\"btn btn-sm ml-4 btnDanger delete__post__image\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
    </div>
{% endblock %}

{% block _post_images_row %}
    {{ form_row(form) }}
    <div class=\"form-group mt-4\">
        <div class=\"mb-4\">
            <em class=\"font-weight-bolder text_grey\">Ici, vous pouvez ajouter une image !</em>
        </div>
        <button id=\"add__post__image\" type=\"button\" class=\"btn btnSubmit\">Ajouter une image</button>
    </div>
{% endblock %}
{# Collection image  #}

{# Collection contenu  #}
{% block _post_contents_entry_row %}
    {{ form_widget(form) }}
{% endblock %}

{% block _post_contents_entry_widget %}
    <div id=\"entry_{{ id }}\" class=\"d-flex my-4\">
        <div class=\"w-100\">
            <div class=\"form-group\">
                {{ form_widget(form.subTitle) }}
            </div>
            <div class=\"form-group\">
                {{ form_widget(form.content) }}
            </div>
        </div>
        <div class=\"flex-shrink-1\">
            <button title=\"Supprimer ce contenu\" type=\"button\" class=\"btn btn-sm ml-4 btnDanger delete__post__content\">
                <i class=\"fas fa-times\"></i>
            </button>
        </div>
    </div>
{% endblock %}

{% block _post_contents_widget %}
    {{ form_widget(form) }}
    <div class=\"form-group mt-4\">
        <div class=\"mb-4\">
            <em class=\"font-weight-bolder text_grey\">Ici, vous pouvez ajouter du contenu !</em>
        </div>
        <button id=\"add__post__content\" type=\"button\" class=\"btn btnSubmit\">Ajouter un contenu</button>
    </div>
{% endblock %}
{# Collection contenu  #}

{% block javascripts %}
    <script>
        \$(function () 
        {
            function showPostImages(index) 
            {
                \$('#post_images input[type=\"file\"]').eq(index).on('input', function (e) 
                {
                    \$('.mb-3').eq(index).remove();
                    let reader = new FileReader();

                    reader.onload = (e) => 
                    {
                        \$(this).parent().before('<img src=\"' + e.target.result + '\" class=\"w-100 mb-3\">');
                        \$('.vich-image').addClass('text-right');
                    }
                    reader.readAsDataURL(e.target.files[0]);
                });
            }
            
            function addImage()
            {
                \$('#add__post__image').click(function() 
                {
                    let index = \$('#post_images .d-flex').length;
                    let template = \$('#post_images').data('prototype').replace(/__name__/g, index);

                    \$('#post_images').append(template);
                    
                    removeImage(index);
                    showPostImages(index);
                });
            }
            addImage();

            function removeImage(index)
            {
                \$('.delete__post__image').click(function() 
                {
                    \$(this).closest('#entry_post_images_'+ index).remove();
                });
            }

            function addContent()
            {
                \$('#add__post__content').click(function() 
                {
                    let index = \$('#post_contents .d-flex').length;
                    let template = \$('#post_contents').data('prototype').replace(/__name__/g, index);

                    \$('#post_contents').append(template);

                    removeContent(index);
                });
            }
            addContent();

            function removeContent(index)
            {
                \$('.delete__post__content').click(function() 
                {
                    \$(this).closest('#entry_post_contents_'+ index).remove();
                });
            }
        });
    </script>
{% endblock %}", "admin/posts/posts_add_update.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/admin/posts/posts_add_update.html.twig");
    }
}
