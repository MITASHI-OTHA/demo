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

/* ad_messages/notify_author_brindille.html.twig */
class __TwigTemplate_8cb9240f0401d5df73b59a4602daacb0956d39fd4270ca919c0510d11b34d683 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_messages/notify_author_brindille.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_messages/notify_author_brindille.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "
<style>
    h1, h2 {
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        font-weight: 500;
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
        background-color: #ffffff;
        border: 1px solid #dce0e0;
        border-radius: 5px;
        padding: 16px;
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
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 88, $this->source); })()), "image", [0 => "@images/logotype_lcz.svg"], "method", false, false, false, 88), "html", null, true);
        echo "\" alt=\"Logo welcohome\" width=\"160\">
    </div>
    <div class=\"mailhead\">
        <h1>Découvrez le message de ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "prenom", [], "any", false, false, false, 91), "html", null, true);
        echo " :</h1>

        <div class=\"subjectMail\">
            ";
        // line 94
        echo $this->extensions['App\Twig\TwigAdExtension']->lineBreakContent((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 94, $this->source); })()));
        echo "
        </div>
        <br>
        <!--div class=\"centrer\">
            <button type=\"button\">
                <a href=\"";
        // line 99
        echo "\">Vérifier l'adresse e-mail</a>
            </button>
        </div-->
    </div>
</div>

";
        $___internal_c86215e632b39b9f4b2c075c9a6ea7c75480b5bbd70f30d737d796f14f13d853_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css($___internal_c86215e632b39b9f4b2c075c9a6ea7c75480b5bbd70f30d737d796f14f13d853_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad_messages/notify_author_brindille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 1,  153 => 99,  145 => 94,  139 => 91,  133 => 88,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply inline_css %}

<style>
    h1, h2 {
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        font-weight: 500;
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
        background-color: #ffffff;
        border: 1px solid #dce0e0;
        border-radius: 5px;
        padding: 16px;
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
        <img class=\"centrer\" src=\"{{ email.image('@images/logotype_lcz.svg') }}\" alt=\"Logo welcohome\" width=\"160\">
    </div>
    <div class=\"mailhead\">
        <h1>Découvrez le message de {{ user.prenom }} :</h1>

        <div class=\"subjectMail\">
            {{ content | line_break_content }}
        </div>
        <br>
        <!--div class=\"centrer\">
            <button type=\"button\">
                <a href=\"{#{ url }#}\">Vérifier l'adresse e-mail</a>
            </button>
        </div-->
    </div>
</div>

{% endapply %}", "ad_messages/notify_author_brindille.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/ad_messages/notify_author_brindille.html.twig");
    }
}
