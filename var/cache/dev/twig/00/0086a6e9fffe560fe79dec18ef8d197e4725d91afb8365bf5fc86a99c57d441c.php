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

/* headers/index.html.twig */
class __TwigTemplate_9e0d669fbb5d7e2e5910b068bbe852147dc056fe322807fa3f56619064764a82 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headers/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "headers/index.html.twig"));

        // line 1
        echo "<style>
        .opac {
            background: url(\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/pexels-expect-best-323780.jpg"), "html", null, true);
        echo "\") center no-repeat;
            background-size: 100%;
        }
</style>
<section class=\"opac\">
    <div class=\"space-banner text-center d-flex justify-content-center align-items-center\">
            <h2 class=\"wow fadeInDown\">
                Bienvenus dans l’espace collaboratif de [ TITRE DE PROJET ]
            </h2>
    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "headers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
        .opac {
            background: url(\"{{ asset('build/images/static/pexels-expect-best-323780.jpg') }}\") center no-repeat;
            background-size: 100%;
        }
</style>
<section class=\"opac\">
    <div class=\"space-banner text-center d-flex justify-content-center align-items-center\">
            <h2 class=\"wow fadeInDown\">
                Bienvenus dans l’espace collaboratif de [ TITRE DE PROJET ]
            </h2>
    </div>
</section>", "headers/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/headers/index.html.twig");
    }
}
