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

/* @images/background.svg */
class __TwigTemplate_212f5d51354ddeec59edb95a6fb3a12dd24c3c058fa0918d95cbb770c50d5e56 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@images/background.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@images/background.svg"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 288 205\" style=\"enable-background:new 0 0 288 205;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{clip-path:url(#SVGID_2_);}
\t.st1{fill:#05E5CF;}
\t.st2{fill:#F9F9F9;}
\t.st3{font-family:'Montserrat-Bold';}
\t.st4{font-size:25px;}
</style>
<g>
\t<g>
\t\t<defs>
\t\t\t<rect id=\"SVGID_1_\" width=\"288\" height=\"288\"/>
\t\t</defs>
\t\t<clipPath id=\"SVGID_2_\">
\t\t\t<use xlink:href=\"#SVGID_1_\"  style=\"overflow:visible;\"/>
\t\t</clipPath>
\t\t<g class=\"st0\">
\t\t\t<g>
\t\t\t\t<g>
\t\t\t\t\t<path class=\"st1\" d=\"M291.6,0v82.7c-67.5-55.6-47.8,5.1-88.1,35.7C161,150.9,162,69.9,148.9,97.2
\t\t\t\t\t\tc-13.2,27.3-41.5,24.3-63.8,5.1s-37.5,20.3-52.7-1C24.1,89.6,10.5,90.4,0,93.6V0H291.6z\"/>
\t\t\t\t</g>
\t\t\t</g>
\t\t</g>
\t</g>
</g>
<text transform=\"matrix(1 0 0 1 61 53)\" class=\"st2 st3 st4\">WELCOOOM</text>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@images/background.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 288 205\" style=\"enable-background:new 0 0 288 205;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{clip-path:url(#SVGID_2_);}
\t.st1{fill:#05E5CF;}
\t.st2{fill:#F9F9F9;}
\t.st3{font-family:'Montserrat-Bold';}
\t.st4{font-size:25px;}
</style>
<g>
\t<g>
\t\t<defs>
\t\t\t<rect id=\"SVGID_1_\" width=\"288\" height=\"288\"/>
\t\t</defs>
\t\t<clipPath id=\"SVGID_2_\">
\t\t\t<use xlink:href=\"#SVGID_1_\"  style=\"overflow:visible;\"/>
\t\t</clipPath>
\t\t<g class=\"st0\">
\t\t\t<g>
\t\t\t\t<g>
\t\t\t\t\t<path class=\"st1\" d=\"M291.6,0v82.7c-67.5-55.6-47.8,5.1-88.1,35.7C161,150.9,162,69.9,148.9,97.2
\t\t\t\t\t\tc-13.2,27.3-41.5,24.3-63.8,5.1s-37.5,20.3-52.7-1C24.1,89.6,10.5,90.4,0,93.6V0H291.6z\"/>
\t\t\t\t</g>
\t\t\t</g>
\t\t</g>
\t</g>
</g>
<text transform=\"matrix(1 0 0 1 61 53)\" class=\"st2 st3 st4\">WELCOOOM</text>
</svg>
", "@images/background.svg", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/assets/images/static/background.svg");
    }
}
