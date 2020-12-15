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

/* espace/emoji.html */
class __TwigTemplate_972435b4097a4c6bda66dfc51fec48d420838d2d920b987752fc4a6ce3e4d28f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/emoji.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/emoji.html"));

        // line 1
        echo "
<ul id=\"emo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:-O</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:]</li> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">;]</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:D</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">;D</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">x-d</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:P</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:p</li>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:[</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:@</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:(</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:'(</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">;)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:/</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:s</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:|</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:-\$</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:-x</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">&#60;3</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">&#60;&#47;3</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:bowtie:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smile:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:laughing:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:blush:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smiley:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:relaxed:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smirk:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:heart_eyes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kissing_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kissing_closed_eyes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:flushed:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:relieved:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:satisfied:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:grin:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:wink:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:stuck_out_tongue_winking_eye:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:stuck_out_tongue_closed_eyes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:grinning:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kissing:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kissing_smiling_eyes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:stuck_out_tongue:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sleeping:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:worried:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:frowning:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:anguished:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:open_mouth:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:grimacing:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:confused:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:hushed:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:expressionless:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:unamused:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sweat_smile:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sweat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:weary:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:pensive:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:disappointed:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:confounded:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:fearful:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:cold_sweat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:persevere:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:cry:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sob:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:joy:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:astonished:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:scream:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:neckbeard:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:tired_face:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:angry:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:rage:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:triumph:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sleepy:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:yum:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:mask:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sunglasses:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:dizzy_face:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:imp:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smiling_imp:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:neutral_face:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:no_mouth:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:innocent:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:alien:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:yellow_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:blue_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:purple_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:green_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:broken_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:heartbeat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:heartpulse:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:two_hearts:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:revolving_hearts:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:cupid:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sparkling_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sparkles:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:star:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:star2:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:dizzy:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:boom:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:collision:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:anger:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:exclamation:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:question:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:grey_exclamation:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:grey_question:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:zzz:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:dash:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sweat_drops:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:notes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:musical_note:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:fire:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:hankey:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:poop:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:shit:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:+1:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:thumbsup:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:-1:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:thumbsdown:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:ok_hand:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:punch:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:facepunch:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:fist:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:v:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:wave:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:hand:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:open_hands:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:point_up:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:point_down:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:point_left:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:point_right:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:raised_hands:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:pray:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:point_up_2:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:clap:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:muscle:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:metal:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:walking:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:runner:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:running:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:couple:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:family:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:two_men_holding_hands:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:two_women_holding_hands:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:dancer:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:dancers:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:ok_woman:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:no_good:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:information_desk_person:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:raised_hand:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:bride_with_veil:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:person_with_pouting_face:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:person_frowning:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:bow:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:couplekiss:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:couple_with_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:massage:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:haircut:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:nail_care:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:boy:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:girl:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:woman:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:man:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:baby:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:older_woman:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:older_man:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:person_with_blond_hair:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:man_with_gua_pi_mao:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:man_with_turban:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:construction_worker:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:cop:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:angel:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:princess:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smiley_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smile_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:heart_eyes_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kissing_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smirk_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:scream_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:crying_cat_face:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:joy_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:pouting_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:japanese_ogre:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:japanese_goblin:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:see_no_evil:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:hear_no_evil:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:speak_no_evil:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:guardsman:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:skull:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:feet:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:lips:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kiss:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:droplet:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:ear:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:eyes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:nose:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:tongue:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:love_letter:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:bust_in_silhouette:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:busts_in_silhouette:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:speech_balloon:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:thought_balloon:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:feelsgood:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:finnadie:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:goberserk:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:godmode:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:hurtrealbad:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:rage1:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:rage2:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:rage3:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:rage4:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:suspect:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:trollface:</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "espace/emoji.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<ul id=\"emo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:-O</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:]</li> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">;]</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:D</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">;D</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">x-d</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:P</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:p</li>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:[</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:@</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:(</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:'(</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">;)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:/</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:s</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:|</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:-\$</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:-x</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">&#60;3</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">&#60;&#47;3</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:bowtie:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smile:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:laughing:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:blush:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smiley:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:relaxed:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smirk:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:heart_eyes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kissing_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kissing_closed_eyes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:flushed:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:relieved:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:satisfied:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:grin:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:wink:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:stuck_out_tongue_winking_eye:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:stuck_out_tongue_closed_eyes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:grinning:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kissing:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kissing_smiling_eyes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:stuck_out_tongue:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sleeping:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:worried:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:frowning:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:anguished:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:open_mouth:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:grimacing:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:confused:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:hushed:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:expressionless:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:unamused:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sweat_smile:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sweat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:weary:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:pensive:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:disappointed:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:confounded:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:fearful:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:cold_sweat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:persevere:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:cry:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sob:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:joy:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:astonished:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:scream:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:neckbeard:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:tired_face:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:angry:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:rage:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:triumph:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sleepy:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:yum:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:mask:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sunglasses:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:dizzy_face:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:imp:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smiling_imp:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:neutral_face:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:no_mouth:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:innocent:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:alien:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:yellow_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:blue_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:purple_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:green_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:broken_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:heartbeat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:heartpulse:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:two_hearts:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:revolving_hearts:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:cupid:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sparkling_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sparkles:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:star:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:star2:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:dizzy:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:boom:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:collision:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:anger:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:exclamation:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:question:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:grey_exclamation:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:grey_question:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:zzz:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:dash:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:sweat_drops:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:notes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:musical_note:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:fire:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:hankey:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:poop:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:shit:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:+1:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:thumbsup:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:-1:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:thumbsdown:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:ok_hand:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:punch:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:facepunch:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:fist:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:v:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:wave:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:hand:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:open_hands:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:point_up:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:point_down:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:point_left:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:point_right:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:raised_hands:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:pray:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:point_up_2:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:clap:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:muscle:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:metal:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:walking:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:runner:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:running:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:couple:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:family:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:two_men_holding_hands:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:two_women_holding_hands:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:dancer:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:dancers:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:ok_woman:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:no_good:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:information_desk_person:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:raised_hand:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:bride_with_veil:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:person_with_pouting_face:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:person_frowning:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:bow:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:couplekiss:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:couple_with_heart:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:massage:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:haircut:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:nail_care:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:boy:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:girl:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:woman:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:man:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:baby:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:older_woman:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:older_man:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:person_with_blond_hair:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:man_with_gua_pi_mao:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:man_with_turban:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:construction_worker:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:cop:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:angel:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:princess:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smiley_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smile_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:heart_eyes_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kissing_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:smirk_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:scream_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:crying_cat_face:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:joy_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:pouting_cat:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:japanese_ogre:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:japanese_goblin:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:see_no_evil:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:hear_no_evil:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:speak_no_evil:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:guardsman:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:skull:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:feet:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:lips:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:kiss:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:droplet:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:ear:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:eyes:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:nose:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:tongue:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:love_letter:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:bust_in_silhouette:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:busts_in_silhouette:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:speech_balloon:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:thought_balloon:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:feelsgood:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:finnadie:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:goberserk:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:godmode:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:hurtrealbad:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:rage1:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:rage2:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:rage3:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:rage4:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:suspect:</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-1\">:trollface:</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>", "espace/emoji.html", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/emoji.html");
    }
}
