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

/* security/registration_brindille.html.twig */
class __TwigTemplate_72a978c17ed13f5e939a91226d99cec9fd7696b5fef675d584d0ff1b4cdd0e18 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration_brindille.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration_brindille.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "
<style>
h2 {
     font-size: 22px;
}
    h2, h3 {
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        font-weight: 500;
        color: #4f545c;
        letter-spacing: 0.27px;
        margin-bottom: 1ex
    }
    h3 {
     font-size: 19px;
     margin-bottom: 1ex
}
    .mailBlock {
        width: 100%;
        margin: 1em auto;
        padding: 40px 0;
        background-color: #f9f9f9;
        margin-top: 0;
        padding-top: 0;
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
        text-align: left;
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
        background-color: rgb(0, 215, 186);
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
    img {
        width: 100%
    }
    .centrer.img {
        position: relative
    }
    #_h1 {
        position: absolute !important;
        left: 0 !important;
        right: 0 !important;
        margin: auto;
        color: #fff;
        font-size: 2em;
    }
</style>

<div class=\"mailBlock\">
    <div class=\"centrer img\">
    ";
        // line 107
        echo " 
        <img class=\"centrer\" src=\"https://welcooom.lescityzens.fr/build/images/static/wel.619c5b34.png\" alt=\"banniere entete\" width=\"160\" title=\"banniere entete\">
    </div>
    <div class=\"mailhead\">
        <h2> Votre compte Welcohome a été créé </h2>
        <h3>Bonjour  ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "username", [], "any", false, false, false, 112), "html", null, true);
        echo ",</h3>

        <p class=\"subjectMail\">
        Félicitations ! Votre compte a été créé avec succès. 
        <br>
        Bienvenue sur Welcooom, le site qui fait matcher l’habitat participatif.
        <br>
        Une dernière action pour finaliser l’activation de votre compte, cliquez sur le lien ci-dessous pour confirmer votre adresse e-mail : 
        </p>
        <br>
        <div class=\"centrer\">
            <button type=\"button\">
                <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "\">Confirmer mon adresse e-mail</a>
            </button>
        </div>
        <br>
        <br>
        <p class=\"subjectMail\">
            À très bientôt, 
            <br>
            L’équipe Welcooome 
        </p>
    </div>
</div>

";
        $___internal_66b70eac5a58dc567d8caa4350d61e482c30f654e75a485d7f950ef68b338cd5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css($___internal_66b70eac5a58dc567d8caa4350d61e482c30f654e75a485d7f950ef68b338cd5_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/registration_brindille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 1,  174 => 124,  159 => 112,  152 => 107,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply inline_css %}

<style>
h2 {
     font-size: 22px;
}
    h2, h3 {
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        font-weight: 500;
        color: #4f545c;
        letter-spacing: 0.27px;
        margin-bottom: 1ex
    }
    h3 {
     font-size: 19px;
     margin-bottom: 1ex
}
    .mailBlock {
        width: 100%;
        margin: 1em auto;
        padding: 40px 0;
        background-color: #f9f9f9;
        margin-top: 0;
        padding-top: 0;
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
        text-align: left;
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
        background-color: rgb(0, 215, 186);
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
    img {
        width: 100%
    }
    .centrer.img {
        position: relative
    }
    #_h1 {
        position: absolute !important;
        left: 0 !important;
        right: 0 !important;
        margin: auto;
        color: #fff;
        font-size: 2em;
    }
</style>

<div class=\"mailBlock\">
    <div class=\"centrer img\">
    {# {{ email.image('@images/wel.png') }} #} 
        <img class=\"centrer\" src=\"https://welcooom.lescityzens.fr/build/images/static/wel.619c5b34.png\" alt=\"banniere entete\" width=\"160\" title=\"banniere entete\">
    </div>
    <div class=\"mailhead\">
        <h2> Votre compte Welcohome a été créé </h2>
        <h3>Bonjour  {{ user.username }},</h3>

        <p class=\"subjectMail\">
        Félicitations ! Votre compte a été créé avec succès. 
        <br>
        Bienvenue sur Welcooom, le site qui fait matcher l’habitat participatif.
        <br>
        Une dernière action pour finaliser l’activation de votre compte, cliquez sur le lien ci-dessous pour confirmer votre adresse e-mail : 
        </p>
        <br>
        <div class=\"centrer\">
            <button type=\"button\">
                <a href=\"{{ url }}\">Confirmer mon adresse e-mail</a>
            </button>
        </div>
        <br>
        <br>
        <p class=\"subjectMail\">
            À très bientôt, 
            <br>
            L’équipe Welcooome 
        </p>
    </div>
</div>

{% endapply %}", "security/registration_brindille.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/security/registration_brindille.html.twig");
    }
}
