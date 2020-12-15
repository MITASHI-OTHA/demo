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

/* @Twig/Exception/error403.html.twig */
class __TwigTemplate_3e617b9049c2e4a5ca99d33383d055a0c4687cd651a02492379616c1f893b2db extends \Twig\Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error403.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error403.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 71
        $this->displayBlock('body', $context, $blocks);
        
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
        .d-flex {
            display: flex
        }
        .m-auto {
            margin: auto
        }
        .btn-sm {
            background: #4fb386;
            border: none;
            padding: 0.5rem;
            color: #fff;
            border-radius: 2px;
            margin-top: 1em;
            font-size: 15px;
        }
        .btn-sm:hover {
          background: #58a281;
          transition: ease .5s;
          cursor: pointer
        }
        .btnSubmit {
          padding: .5em 1em;
          background-color: rgb(0 191 166);
          color: #fff;
          font-weight: 600;
          font-size: 0.9em;
          letter-spacing: .7px;
          position: relative;
          cursor: pointer;
          overflow: hidden;
          z-index: 1;
          -webkit-transition: ease .5s;
          -o-transition: ease .5s;
          transition: ease .5s;
}
.btn {
    font-weight: 600 !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline: none !important;
}
.btn-primary:hover {
    border-color: #53c0b5 !important;
}
.btnSubmit:hover {
    color: #fff;
}
.btnSubmit::before {
    position: absolute;
    content: '';
    width: 0;
    height: 100%;
    left: 0;
    top: 0;
    background-color: rgb(0, 215, 186);
    z-index: -1;
    -webkit-transition: ease .5s;
    -o-transition: ease .5s;
    transition: ease .5s;
}
.btnSubmit:hover::before {
    width: 100%;
}
a {
  text-decoration: none
}
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "  <div class=\"container\">
        <section>
                <div class=\"row\">
                    <div class=\"col d-flex my-5\">
                        <img class=\"m-auto\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/error403.jpg"), "html", null, true);
        echo "\" width=\"50%\">
                    </div>
                    <div class=\"col d-flex\">
                         <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn-sm btn btn-primary btnSubmit m-auto\"> Revenir à l'accueil </a>
                    </div>
                </div>
        </section>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error403.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 79,  161 => 76,  155 => 72,  145 => 71,  67 => 2,  57 => 1,  47 => 71,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <style>
        .d-flex {
            display: flex
        }
        .m-auto {
            margin: auto
        }
        .btn-sm {
            background: #4fb386;
            border: none;
            padding: 0.5rem;
            color: #fff;
            border-radius: 2px;
            margin-top: 1em;
            font-size: 15px;
        }
        .btn-sm:hover {
          background: #58a281;
          transition: ease .5s;
          cursor: pointer
        }
        .btnSubmit {
          padding: .5em 1em;
          background-color: rgb(0 191 166);
          color: #fff;
          font-weight: 600;
          font-size: 0.9em;
          letter-spacing: .7px;
          position: relative;
          cursor: pointer;
          overflow: hidden;
          z-index: 1;
          -webkit-transition: ease .5s;
          -o-transition: ease .5s;
          transition: ease .5s;
}
.btn {
    font-weight: 600 !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline: none !important;
}
.btn-primary:hover {
    border-color: #53c0b5 !important;
}
.btnSubmit:hover {
    color: #fff;
}
.btnSubmit::before {
    position: absolute;
    content: '';
    width: 0;
    height: 100%;
    left: 0;
    top: 0;
    background-color: rgb(0, 215, 186);
    z-index: -1;
    -webkit-transition: ease .5s;
    -o-transition: ease .5s;
    transition: ease .5s;
}
.btnSubmit:hover::before {
    width: 100%;
}
a {
  text-decoration: none
}
    </style>
{% endblock %}
{% block body %}
  <div class=\"container\">
        <section>
                <div class=\"row\">
                    <div class=\"col d-flex my-5\">
                        <img class=\"m-auto\" src=\"{{ asset('build/images/static/error403.jpg') }}\" width=\"50%\">
                    </div>
                    <div class=\"col d-flex\">
                         <a href=\"{{ path('home') }}\" class=\"btn-sm btn btn-primary btnSubmit m-auto\"> Revenir à l'accueil </a>
                    </div>
                </div>
        </section>
  </div>
{% endblock %}", "@Twig/Exception/error403.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/bundles/TwigBundle/Exception/error403.html.twig");
    }
}
