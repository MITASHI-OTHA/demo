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

/* contact_infos/contact_us_brindille.html.twig */
class __TwigTemplate_ffa44d2b0f28d7d9778dce1bb77f6841461ee714cdc6abbd6cd2591de20143d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact_infos/contact_us_brindille.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact_infos/contact_us_brindille.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "
<style>
    h2 {
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        font-weight: 500;
        font-size: 22px;
        color: #4f545c;
        letter-spacing: 0.27px;
    }

    .mailBlock {
        width: 100%;
        margin: 1em auto;
        padding: 40px 0;
        background-color: #f9f9f9;
    }

    .subjectMail {
        color: #737f8d;
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        font-size: 16px;
        line-height: 26px;
        text-align: left;
    }

    .mailhead {
        width: 75%;
        padding: 3.5em;
        margin: 0 auto;
        background-color: #fff;
    }

    .email {
        font-size: 20px;
    }

    .img {
        margin: 0 auto 2em auto;
        margin-bottom: 40px;
    }

    .centrer {
        text-align: center;
    }

    button {
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        border-radius: 5px;
        border: none;
        padding: 1em 1.2em;
        text-decoration: none;
        letter-spacing: 0.6px;
        font-size: 16px;
        line-height: 24px;
        text-align: left;
        background-color: #D9326F;
    }

    button a {
        color: #fff;
        text-decoration: none;
    }

    button:hover {
        background-color: rgb(172, 40, 89);
    }

    i {
        margin-right: 8px;
    }

    p,
    a {
        text-align: center;
    }

    p img {
        margin-right: 8px;
    }
</style>

<div class=\"mailBlock\">
    <div class=\"centrer img\">
        <img class=\"centrer\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 85, $this->source); })()), "image", [0 => "@images/logotype_lcz.svg"], "method", false, false, false, 85), "html", null, true);
        echo "\" alt=\"Logo Vintage\" width=\"160\">
    </div>
    <div class=\"mailhead\">
        <h2>Hey ";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ",</h2>

        <p class=\"subjectMail\">
            Merci, votre message a bien été transmis à notre équipe ! Nous faisons au plus vite pour traiter votre demande et
            revenir vers vous. <br><br>
            
            À très bientôt, <br><br>
            
            L’équipe Welcooom
        </p>
    </div>
</div>

";
        $___internal_6cab6ee17090b61ceb987e06569a33ab1cdfdbd42527b5cebcd9990c7859270c_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css($___internal_6cab6ee17090b61ceb987e06569a33ab1cdfdbd42527b5cebcd9990c7859270c_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact_infos/contact_us_brindille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 1,  136 => 88,  130 => 85,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply inline_css %}

<style>
    h2 {
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        font-weight: 500;
        font-size: 22px;
        color: #4f545c;
        letter-spacing: 0.27px;
    }

    .mailBlock {
        width: 100%;
        margin: 1em auto;
        padding: 40px 0;
        background-color: #f9f9f9;
    }

    .subjectMail {
        color: #737f8d;
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        font-size: 16px;
        line-height: 26px;
        text-align: left;
    }

    .mailhead {
        width: 75%;
        padding: 3.5em;
        margin: 0 auto;
        background-color: #fff;
    }

    .email {
        font-size: 20px;
    }

    .img {
        margin: 0 auto 2em auto;
        margin-bottom: 40px;
    }

    .centrer {
        text-align: center;
    }

    button {
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        border-radius: 5px;
        border: none;
        padding: 1em 1.2em;
        text-decoration: none;
        letter-spacing: 0.6px;
        font-size: 16px;
        line-height: 24px;
        text-align: left;
        background-color: #D9326F;
    }

    button a {
        color: #fff;
        text-decoration: none;
    }

    button:hover {
        background-color: rgb(172, 40, 89);
    }

    i {
        margin-right: 8px;
    }

    p,
    a {
        text-align: center;
    }

    p img {
        margin-right: 8px;
    }
</style>

<div class=\"mailBlock\">
    <div class=\"centrer img\">
        <img class=\"centrer\" src=\"{{ email.image('@images/logotype_lcz.svg') }}\" alt=\"Logo Vintage\" width=\"160\">
    </div>
    <div class=\"mailhead\">
        <h2>Hey {{ user }},</h2>

        <p class=\"subjectMail\">
            Merci, votre message a bien été transmis à notre équipe ! Nous faisons au plus vite pour traiter votre demande et
            revenir vers vous. <br><br>
            
            À très bientôt, <br><br>
            
            L’équipe Welcooom
        </p>
    </div>
</div>

{% endapply %}", "contact_infos/contact_us_brindille.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/contact_infos/contact_us_brindille.html.twig");
    }
}
