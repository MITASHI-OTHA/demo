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

/* reset_password/lost_email_brindille.html.twig */
class __TwigTemplate_806dba14e6ef2f5eefd9a6801433086a385c5ad1030e81cc26d4652502ba3577 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/lost_email_brindille.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/lost_email_brindille.html.twig"));

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
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        font-size: 16px;
        line-height: 26px;
        color: #737f8d;
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
    <div class=\"mailhead\">
        <div class=\"centrer img\">
            <img class=\"centrer\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 89, $this->source); })()), "image", [0 => "@images/logotype_lcz.svg"], "method", false, false, false, 89), "html", null, true);
        echo "\" alt=\"Logo welcohome\" width=\"140\">
        </div>
        <h2>Bonjour ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "prenom", [], "any", false, false, false, 91), "html", null, true);
        echo " !</h2>

        <p class=\"subjectMail\">
            Vous venez de faire une demande de changement du mot de passe :
        </p>
        ";
        // line 96
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "civilite", [], "any", false, false, false, 96) == "m") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "userContactInfos", [], "any", false, false, false, 96), "avatar", [], "any", false, false, false, 96) == "default_avatar"))) {
            // line 97
            echo "            <p class=\"email\">
                <img src=\"";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 98, $this->source); })()), "image", [0 => "@images/male.svg"], "method", false, false, false, 98), "html", null, true);
            echo "\" alt=\"icon man\" width=\"48\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 98, $this->source); })()), "to", [], "any", false, false, false, 98), 0, [], "array", false, false, false, 98), "address", [], "any", false, false, false, 98), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 101
        echo "
        ";
        // line 102
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "civilite", [], "any", false, false, false, 102) == "f") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "userContactInfos", [], "any", false, false, false, 102), "avatar", [], "any", false, false, false, 102) == "default_avatar"))) {
            // line 103
            echo "            <p class=\"email\">
                <img src=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 104, $this->source); })()), "image", [0 => "@images/female.svg"], "method", false, false, false, 104), "html", null, true);
            echo "\" alt=\"icon woman\" width=\"48\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 104, $this->source); })()), "to", [], "any", false, false, false, 104), 0, [], "array", false, false, false, 104), "address", [], "any", false, false, false, 104), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 107
        echo "
        ";
        // line 108
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "userContactInfos", [], "any", false, false, false, 108), "avatar", [], "any", false, false, false, 108) != "default_avatar")) {
            // line 109
            echo "            <p class=\"email\">
                <img class=\"cropMailAvatar\" src=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 110, $this->source); })()), "image", [0 => ("@avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "userContactInfos", [], "any", false, false, false, 110), "avatar", [], "any", false, false, false, 110))], "method", false, false, false, 110), "html", null, true);
            echo "\"
                    alt=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "prenom", [], "any", false, false, false, 111), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 111, $this->source); })()), "to", [], "any", false, false, false, 111), 0, [], "array", false, false, false, 111), "address", [], "any", false, false, false, 111), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 114
        echo "        
        <div class=\"centrer\">
            <button type=\"button\">
                <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "\">Veuillez cliquer sur ce lien pour pouvoir modifier votre mot de passe</a>
            </button>
        </div>
    </div>

</div>

";
        $___internal_08d8d23a215574c7411083bca7197de5de041172a457d886c6edd89537bbeb45_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css($___internal_08d8d23a215574c7411083bca7197de5de041172a457d886c6edd89537bbeb45_);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/lost_email_brindille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 1,  201 => 117,  196 => 114,  188 => 111,  184 => 110,  181 => 109,  179 => 108,  176 => 107,  168 => 104,  165 => 103,  163 => 102,  160 => 101,  152 => 98,  149 => 97,  147 => 96,  139 => 91,  134 => 89,  45 => 2,  43 => 1,);
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
        font-family: Whitney, Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
        font-size: 16px;
        line-height: 26px;
        color: #737f8d;
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
    <div class=\"mailhead\">
        <div class=\"centrer img\">
            <img class=\"centrer\" src=\"{{ email.image('@images/logotype_lcz.svg') }}\" alt=\"Logo welcohome\" width=\"140\">
        </div>
        <h2>Bonjour {{ user.prenom }} !</h2>

        <p class=\"subjectMail\">
            Vous venez de faire une demande de changement du mot de passe :
        </p>
        {% if user.civilite == 'm' and user.userContactInfos.avatar == 'default_avatar' %}
            <p class=\"email\">
                <img src=\"{{ email.image('@images/male.svg') }}\" alt=\"icon man\" width=\"48\">{{ email.to[0].address }}
            </p>
        {% endif %}

        {% if user.civilite == 'f' and user.userContactInfos.avatar == 'default_avatar' %}
            <p class=\"email\">
                <img src=\"{{ email.image('@images/female.svg') }}\" alt=\"icon woman\" width=\"48\">{{ email.to[0].address }}
            </p>
        {% endif %}

        {% if user.userContactInfos.avatar != 'default_avatar' %}
            <p class=\"email\">
                <img class=\"cropMailAvatar\" src=\"{{ email.image('@avatars/' ~ user.userContactInfos.avatar) }}\"
                    alt=\"{{ user.prenom }}\">{{ email.to[0].address }}
            </p>
        {% endif %}
        
        <div class=\"centrer\">
            <button type=\"button\">
                <a href=\"{{ url }}\">Veuillez cliquer sur ce lien pour pouvoir modifier votre mot de passe</a>
            </button>
        </div>
    </div>

</div>

{% endapply %}", "reset_password/lost_email_brindille.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/reset_password/lost_email_brindille.html.twig");
    }
}
