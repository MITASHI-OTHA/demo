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

/* @images/tick_danger.svg */
class __TwigTemplate_c50a3849f61e5bb2f687e28070f2d4c254d2021afb9e969eb889fa13f7fa5372 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@images/tick_danger.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@images/tick_danger.svg"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<!-- Generator: Adobe Illustrator 24.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#DF4949;}
\t.st1{fill:#FFFFFF;}
</style>
<title>tick_danger</title>
<ellipse class=\"st0\" cx=\"256\" cy=\"256\" rx=\"256\" ry=\"255.8\"/>
<path class=\"st1\" d=\"M397.2,354.6L304.6,262c-3.3-3.3-3.3-8.7,0-12l92.6-92.6c3.3-3.3,3.3-8.7,0-12l-30.6-30.6
\tc-3.3-3.3-8.7-3.3-12,0L262,207.4c-3.3,3.3-8.7,3.3-12,0l-92.6-92.6c-3.3-3.3-8.7-3.3-12,0l-30.6,30.6c-3.3,3.3-3.3,8.7,0,12
\tl92.6,92.6c3.3,3.3,3.3,8.7,0,12l-92.6,92.6c-3.3,3.3-3.3,8.7,0,12l30.6,30.6c3.3,3.3,8.7,3.3,12,0l92.6-92.6c3.3-3.3,8.7-3.3,12,0
\tl92.6,92.6c3.3,3.3,8.7,3.3,12,0l30.6-30.6C400.5,363.3,400.5,357.9,397.2,354.6z\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@images/tick_danger.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<!-- Generator: Adobe Illustrator 24.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#DF4949;}
\t.st1{fill:#FFFFFF;}
</style>
<title>tick_danger</title>
<ellipse class=\"st0\" cx=\"256\" cy=\"256\" rx=\"256\" ry=\"255.8\"/>
<path class=\"st1\" d=\"M397.2,354.6L304.6,262c-3.3-3.3-3.3-8.7,0-12l92.6-92.6c3.3-3.3,3.3-8.7,0-12l-30.6-30.6
\tc-3.3-3.3-8.7-3.3-12,0L262,207.4c-3.3,3.3-8.7,3.3-12,0l-92.6-92.6c-3.3-3.3-8.7-3.3-12,0l-30.6,30.6c-3.3,3.3-3.3,8.7,0,12
\tl92.6,92.6c3.3,3.3,3.3,8.7,0,12l-92.6,92.6c-3.3,3.3-3.3,8.7,0,12l30.6,30.6c3.3,3.3,8.7,3.3,12,0l92.6-92.6c3.3-3.3,8.7-3.3,12,0
\tl92.6,92.6c3.3,3.3,8.7,3.3,12,0l30.6-30.6C400.5,363.3,400.5,357.9,397.2,354.6z\"/>
</svg>
", "@images/tick_danger.svg", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/assets/images/static/tick_danger.svg");
    }
}
