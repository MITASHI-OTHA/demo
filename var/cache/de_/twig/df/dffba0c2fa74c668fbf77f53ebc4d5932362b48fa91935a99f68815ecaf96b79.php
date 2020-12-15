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

/* @images/background-abstract.svg */
class __TwigTemplate_99e329c4fd36e7ed32d27e26b5038cc86c37306f92cc8a127b0e3aa3ebfdbd4d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@images/background-abstract.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@images/background-abstract.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"1440\" height=\"325\" viewBox=\"0 0 1440 325\"><defs><path id=\"w45va\" d=\"M0 325V0h1440v325z\"/><path id=\"w45vd\" d=\"M964.32 129.06c100.22-46.44 180.44 57.85 217.08-20.79 36.65-78.63 211.96 6.94 153.66 169.2-58.3 162.24-179.13-85.99-194.15 63.77-15.02 149.77-160.83 55.03-209.74-7.58-48.91-62.6-67.06-158.16 33.15-204.6z\"/><path id=\"w45ve\" d=\"M765-80c-5.08 23.8-15.72 48.64-31.36 67.33-15.16 18.11-37.5 33.56-60.52 38.38-26.61 5.56-54 1.8-80.12-4.2-30.45-7-72.44-3.56-102.49 15.7-28.82 18.47-47.83 43.54-70.08 69.03-32.4 37.09-73.69 69-125.5 65.2-41.08-3-75.88-28.01-99.5-60.67-14.94-20.66-25.82-44.08-33.9-68.2-30.64-91.44-16.06-121.73-16.06-121.73z\"/><path id=\"w45vf\" d=\"M1339.33 162.63c-25.2 15.37-6.62 82.16-28.67 88.6-13.22 3.88-24.34-18.84-44.07-33.7-7.75-5.84-16.82-10.47-27.87-11.8-2.22-.26-4.41-.38-6.58-.37a60.64 60.64 0 0 0-19.11 3.3c-26.72 9-46.89 33.5-50.85 38.32-1.8 2.19-4.27 5.18-6.99 8.82a136 136 0 0 0-10.23 15.74c-5.48 9.96-9.93 21.7-9.96 33.82v.25c.01 4.81.73 9.7 2.36 14.54 4.12 12.27 13.3 22.03 24.86 29.27 6.4 4 13.51 7.24 20.9 9.7 13.41 4.47 27.89 6.65 42.02 5.57 33.76-2.58 44.4-23.73 77.69-18.99 19.92 2.84 45.08 14.56 46.93 30.08 2.12 17.73-28.15 23.7-39.33 55.12-6.98 19.62-4.26 42.82 4.5 58.19 23.3 40.88 102.03 48.6 151.89 19.54 49.5-28.86 60.63-88.2 62.32-126.48.4-9.22.26-17.22-.02-23.27a167.3 167.3 0 0 0-.94-12.04c-3.94-30.67-15.56-59.03-31.33-83.93-39.93-63.06-106.48-103.9-142.24-103.91-6.07 0-11.26 1.18-15.28 3.63\"/><path id=\"w45vh\" d=\"M1044.97 239.26c-7.75 10.2-5.94 22.91-5.4 26.8.59 4.07 4.03 24.03 20.24 30.21 15.3 5.83 33.47-3.82 41.37-18.17 7.22-13.12 6.97-32.16-5.17-43.6-15.03-14.17-40.38-9.26-51.04 4.76\"/><path id=\"w45vi\" d=\"M1255.17-151.36c102.3 41.62 80.75 171.41 163.25 144.58 82.5-26.83 139.48 159.75-18.94 227.76-158.43 68.01-59.28-189.64-179.06-98.48-119.77 91.15-149.93-80.1-137.5-158.57 12.43-78.47 69.94-156.91 172.25-115.3z\"/><path id=\"w45vj\" d=\"M16.76-108.01c16.85-1.94 59.19 2.2 94.03 22.76 34.84 20.56 51.99 65.16 50.45 96.86-1.55 31.7 8.88 56.45 30.32 67.37 21.45 10.93 34.93 3.37 57.19.62 22.25-2.76 77.14 12.45 85.24 61 8.1 48.56-33.9 94.51-62.09 108.9-28.2 14.38-43.78 34.4-25.13 55.7 9.65 11.02 43.78 38.52 26.42 64.95-83.15 126.64-333.07-9.44-376.53-176.9C-142.6 41.96-74.59-97.29 16.76-108\"/><linearGradient id=\"w45vb\" x1=\"1349.28\" x2=\"319.68\" y1=\"125.11\" y2=\"140.72\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#0161cd\"/><stop offset=\"1\" stop-color=\"#0353a7\"/></linearGradient><linearGradient id=\"w45vg\" x1=\"1365.16\" x2=\"1135\" y1=\"300.99\" y2=\"196.61\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#1273eb\"/><stop offset=\"1\" stop-color=\"#2c8cf4\"/></linearGradient><clipPath id=\"w45vc\"><use xlink:href=\"#w45va\"/></clipPath></defs><g><g><g><use fill=\"url(#w45vb)\" xlink:href=\"#w45va\"/></g><g clip-path=\"url(#w45vc)\"><g><use fill=\"#0161cd\" xlink:href=\"#w45vd\"/></g><g><use fill=\"#0161cd\" xlink:href=\"#w45ve\"/></g><g><use fill=\"url(#w45vg)\" xlink:href=\"#w45vf\"/></g><g><use fill=\"#2c8cf4\" xlink:href=\"#w45vh\"/></g><g><use fill=\"#0353a7\" xlink:href=\"#w45vi\"/></g><g><use fill=\"#2c8cf4\" xlink:href=\"#w45vj\"/></g></g></g></g></svg>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@images/background-abstract.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"1440\" height=\"325\" viewBox=\"0 0 1440 325\"><defs><path id=\"w45va\" d=\"M0 325V0h1440v325z\"/><path id=\"w45vd\" d=\"M964.32 129.06c100.22-46.44 180.44 57.85 217.08-20.79 36.65-78.63 211.96 6.94 153.66 169.2-58.3 162.24-179.13-85.99-194.15 63.77-15.02 149.77-160.83 55.03-209.74-7.58-48.91-62.6-67.06-158.16 33.15-204.6z\"/><path id=\"w45ve\" d=\"M765-80c-5.08 23.8-15.72 48.64-31.36 67.33-15.16 18.11-37.5 33.56-60.52 38.38-26.61 5.56-54 1.8-80.12-4.2-30.45-7-72.44-3.56-102.49 15.7-28.82 18.47-47.83 43.54-70.08 69.03-32.4 37.09-73.69 69-125.5 65.2-41.08-3-75.88-28.01-99.5-60.67-14.94-20.66-25.82-44.08-33.9-68.2-30.64-91.44-16.06-121.73-16.06-121.73z\"/><path id=\"w45vf\" d=\"M1339.33 162.63c-25.2 15.37-6.62 82.16-28.67 88.6-13.22 3.88-24.34-18.84-44.07-33.7-7.75-5.84-16.82-10.47-27.87-11.8-2.22-.26-4.41-.38-6.58-.37a60.64 60.64 0 0 0-19.11 3.3c-26.72 9-46.89 33.5-50.85 38.32-1.8 2.19-4.27 5.18-6.99 8.82a136 136 0 0 0-10.23 15.74c-5.48 9.96-9.93 21.7-9.96 33.82v.25c.01 4.81.73 9.7 2.36 14.54 4.12 12.27 13.3 22.03 24.86 29.27 6.4 4 13.51 7.24 20.9 9.7 13.41 4.47 27.89 6.65 42.02 5.57 33.76-2.58 44.4-23.73 77.69-18.99 19.92 2.84 45.08 14.56 46.93 30.08 2.12 17.73-28.15 23.7-39.33 55.12-6.98 19.62-4.26 42.82 4.5 58.19 23.3 40.88 102.03 48.6 151.89 19.54 49.5-28.86 60.63-88.2 62.32-126.48.4-9.22.26-17.22-.02-23.27a167.3 167.3 0 0 0-.94-12.04c-3.94-30.67-15.56-59.03-31.33-83.93-39.93-63.06-106.48-103.9-142.24-103.91-6.07 0-11.26 1.18-15.28 3.63\"/><path id=\"w45vh\" d=\"M1044.97 239.26c-7.75 10.2-5.94 22.91-5.4 26.8.59 4.07 4.03 24.03 20.24 30.21 15.3 5.83 33.47-3.82 41.37-18.17 7.22-13.12 6.97-32.16-5.17-43.6-15.03-14.17-40.38-9.26-51.04 4.76\"/><path id=\"w45vi\" d=\"M1255.17-151.36c102.3 41.62 80.75 171.41 163.25 144.58 82.5-26.83 139.48 159.75-18.94 227.76-158.43 68.01-59.28-189.64-179.06-98.48-119.77 91.15-149.93-80.1-137.5-158.57 12.43-78.47 69.94-156.91 172.25-115.3z\"/><path id=\"w45vj\" d=\"M16.76-108.01c16.85-1.94 59.19 2.2 94.03 22.76 34.84 20.56 51.99 65.16 50.45 96.86-1.55 31.7 8.88 56.45 30.32 67.37 21.45 10.93 34.93 3.37 57.19.62 22.25-2.76 77.14 12.45 85.24 61 8.1 48.56-33.9 94.51-62.09 108.9-28.2 14.38-43.78 34.4-25.13 55.7 9.65 11.02 43.78 38.52 26.42 64.95-83.15 126.64-333.07-9.44-376.53-176.9C-142.6 41.96-74.59-97.29 16.76-108\"/><linearGradient id=\"w45vb\" x1=\"1349.28\" x2=\"319.68\" y1=\"125.11\" y2=\"140.72\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#0161cd\"/><stop offset=\"1\" stop-color=\"#0353a7\"/></linearGradient><linearGradient id=\"w45vg\" x1=\"1365.16\" x2=\"1135\" y1=\"300.99\" y2=\"196.61\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#1273eb\"/><stop offset=\"1\" stop-color=\"#2c8cf4\"/></linearGradient><clipPath id=\"w45vc\"><use xlink:href=\"#w45va\"/></clipPath></defs><g><g><g><use fill=\"url(#w45vb)\" xlink:href=\"#w45va\"/></g><g clip-path=\"url(#w45vc)\"><g><use fill=\"#0161cd\" xlink:href=\"#w45vd\"/></g><g><use fill=\"#0161cd\" xlink:href=\"#w45ve\"/></g><g><use fill=\"url(#w45vg)\" xlink:href=\"#w45vf\"/></g><g><use fill=\"#2c8cf4\" xlink:href=\"#w45vh\"/></g><g><use fill=\"#0353a7\" xlink:href=\"#w45vi\"/></g><g><use fill=\"#2c8cf4\" xlink:href=\"#w45vj\"/></g></g></g></g></svg>", "@images/background-abstract.svg", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/assets/images/static/background-abstract.svg");
    }
}
