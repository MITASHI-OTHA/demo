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

/* ad_messages/ad_conversation.html.twig */
class __TwigTemplate_e42c84ea0a13377da13b0a16562c3d5748dcac6382219ec493dfdabacf70f7a6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_messages/ad_conversation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_messages/ad_conversation.html.twig"));

        // line 3
        $context["title"] = "Envoi des messages";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ad_messages/ad_conversation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <style>
        #messages_content, .messages_content {
            height: 43px;
            overflow: hidden;
            resize: none;
            scrollbar-width: none !important; /* Firefox */
            -ms-overflow-style: none !important;  /* IE 10+ */
        }
        #messages_content::-webkit-scrollbar, .messages_content::-webkit-scrollbar { /* Google Chrome */
            display: none;
        }
        .icon-paperclip::before {
            font-size: 24px;
        }
        #msg__pdf__viewer {
            width: 50%;
            margin: 0 auto !important;
        }   
        .styles__docMessageIcon {
            border: 1px solid #cad1d9;
            border-radius: 5px;
            color: #667d99;
            overflow: hidden;
        }   
        .styles__docMessageIcon .mr-3 {
            font-size: 32px;
            border-right: 1px solid #cad1d9;
            background-color: #e6ebef;
        }   
        .styles__docMessageIcon a, .styles__docMessageIcon a:hover {
            text-decoration: none;
            color: inherit;
        }   
        .styles__docMessageIcon p {
            font-size: 14px;
            margin-bottom: 0;
        }   
        .styles__docMessageIcon p strong {
            font-size: 12px;
        }   
        .user__list__action {
            font-weight: 500;
            color: #667d99;
            background-color: #e7edf3;
        }  
        .user__list__action:hover {
            color: #667d99;
            background-color: #e7edf3;
        }  
        .list-group li a {
            color: inherit;
            transition: ease .5s;
        }  
        .list-group li a:hover {
            text-decoration: none;
            color: inherit;
        }  
        .list-group li a.flex-shrink:hover {
            color: #00BFA6;
        }  
        .rounded-circle {
            width: 40px;
            height: 40px;
            overflow: hidden;
        }  
        .rounded-circle {
            font-size: 32px;
            color: #667d99;
        }  
        .rounded__block {
            border-radius: 5px;
            width: 80px;
            height: 124px;
            height: auto !important;
            overflow: hidden;
        }  
        .rounded__block img {
            width: 140%;
        }  
        </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 89
        echo "    <div class=\"row my-4\">
        ";
        // line 90
        $this->loadTemplate("ad_messages/partials/messages_users.html.twig", "ad_messages/ad_conversation.html.twig", 90)->display(twig_array_merge($context, ["messages" => (isset($context["list_messages"]) || array_key_exists("list_messages", $context) ? $context["list_messages"] : (function () { throw new RuntimeError('Variable "list_messages" does not exist.', 90, $this->source); })())]));
        // line 91
        echo "        
        <div class=\"col-md-8\">
            ";
        // line 93
        $this->loadTemplate("ad_messages/partials/messages_conversations.html.twig", "ad_messages/ad_conversation.html.twig", 93)->display(twig_array_merge($context, ["ad" => (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new RuntimeError('Variable "ad" does not exist.', 93, $this->source); })()), "author" => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 93, $this->source); })()), "messages" => (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 93, $this->source); })())]));
        // line 94
        echo "            
            ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_start');
        echo "
                <div class=\"d-flex align-items-center py-3 block__messages__send\">
                    <div class=\"mr-1\">
                        <label for=\"messages_imageFileMessage_file\" style=\"color:#667d99;\" class=\"btn d-flex align-items-center mb-0\">
                            <i class=\"icon-paperclip\"></i>
                        </label>
                    </div>
                    <div class=\"flex-grow-1\">
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "content", [], "any", false, false, false, 103), 'widget');
        echo "
                    </div>
                    <div class=\"ml-3\">
                        <button id=\"send__msg__btn\" class=\"btn btn-sm btnDisabled\">Envoyer</button>
                    </div>
                </div>
                <div class=\"d-none\">
                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'rest');
        echo "
                </div>
            ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'form_end');
        echo "
        
            <!-- Modal -->
            <div class=\"modal fade\" id=\"show__file__sent\" data-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\"
                aria-labelledby=\"show__file__sentLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"show__file__sentLabel\">Aperçu de votre envoi :</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div id=\"show__msg__file\" class=\"modal-body bg-light show__msg__file\">
                            <canvas id=\"msg__pdf__viewer\"></canvas>
                        </div>
                        <div class=\"modal-footer\">
                            <div class=\"flex-grow-1\">
                                <textarea name=\"\" class=\"messages_content form-control\" placeholder=\"Écrivez votre message\"></textarea>
                            </div>
                            <div class=\"ml-3 flex-shrink-1\">
                                <button id=\"send__msg__btn__file\" class=\"btn btn-sm btnSubmit\">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div><!-- col-md-9 messages block -->
    </div><!-- row block parent -->
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 146
        echo "    <script src=\"https://mozilla.github.io/pdf.js/build/pdf.js\"></script>
    <script>
        \$(function () 
        {
            function abstractActions() 
            {
                \$('.delete__message').click(function () 
                {
                    return confirm('Êtes-vous certain de vouloir supprimer cette conversation ?');
                });
            }
            abstractActions() ;

            function initializeSendAt() 
            {
                \$('.message__send__at').each((key, element) => 
                {
                    let textSubstr = \$(element).text().substring(0, \$(element).text().lastIndexOf(':'));
                    \$(element).text(textSubstr);
                });
            }
            initializeSendAt() ;

            function autogrowBoxMessage() 
            {
                \$('#send__msg__btn').prop('disabled', true);
                
                \$('#messages_content, .messages_content').on('input', function(e) 
                {
                    \$(this).attr('maxLength', 500);
                    \$(this).height(0);
                    \$(this).height(this.scrollHeight);
                    
                    if (\$(this).val().length > 60) 
                    {
                        \$('.btnDisabled').addClass('btnSubmit');
                        \$('.btnDisabled').removeClass('btnDisabled');
                        \$('#send__msg__btn').prop('disabled', false);
                    } 
                    else 
                    {
                        \$('.btnSubmit').addClass('btnDisabled');
                        \$('.btnSubmit').removeClass('btnSubmit');
                        \$('#send__msg__btn').prop('disabled', true);
                    }

                    if(\$(this).val().length > 250) 
                    {
                        \$(this).height(132);
                        \$(this).css('overflowY', 'scroll');
                    } 
                    else 
                    {
                        \$(this).css('overflowY', 'hidden');
                    }
                });
            }
            autogrowBoxMessage();

            function showFileSent() 
            {
                \$('#messages_imageFileMessage_file').on('input', function(e) 
                {
                    console.log(e.target.files[0].type);
                    \$('.styles__docMessageIcon').remove();
                    \$('.img-fluid').remove();
                    \$('#msg__pdf__viewer').fadeOut().removeClass('d-block');
                    \$('.messages_content').css('height', '43px');
                    \$('#show__file__sent').modal('show');

                    let reader = new FileReader();

                    if (e.target.files[0].type === 'image/jpeg') 
                    {
                        reader.onload = (e) => 
                        {
                            \$('#show__msg__file').append('<img src=\"' + e.target.result + '\" class=\"img-fluid\">');
                        }
                        reader.readAsDataURL(e.target.files[0]);
                    }

                    if (e.target.files[0].type === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') 
                    {
                        let docx = URL.createObjectURL(e.target.files[0]);
                        \$('#show__msg__file').append('<div class=\"d-flex align-items-center styles__docMessageIcon\"><div class=\"py-2 px-3 mr-3\"><i class=\"far fa-file-word\"></i></div> <a href=\"'+ docx +'\" download class=\"d-block\"><p class=\"py-2\">Pièce jointe : <strong class=\"text-success\">'+ e.target.files[0].name +' </strong><br> <strong>Cliquez pour ouvrir</strong></p></a> </div>');
                    }

                    if(e.target.files[0].type === 'application/pdf') 
                    {
                        reader.onload = function () 
                        {
                            let pdfData = new Uint8Array(this.result);
                            let loadingTask = pdfjsLib.getDocument({ data: pdfData });

                            loadingTask.promise.then(function (pdf) 
                            {
                                pdf.getPage(1).then((page) => 
                                {
                                    let viewport = page.getViewport({ scale: 1 });

                                    // Prepare canvas using PDF page dimensions
                                    let canvas = \$('#msg__pdf__viewer')[0];
                                    let context = canvas.getContext('2d');
                                    canvas.height = viewport.height;
                                    canvas.width = viewport.width;

                                    // Render PDF page into canvas context
                                    let renderContext =
                                    {
                                        canvasContext: context,
                                        viewport: viewport
                                    };
                                    let renderTask = page.render(renderContext);
                                    renderTask.promise.then(() => {
                                        \$('#msg__pdf__viewer').fadeIn().addClass('d-block');
                                        console.log('Page rendered');
                                    });
                                });
                            }, (reason) => { console.log(reason.error); });
                        }
                        reader.readAsArrayBuffer(e.target.files[0]);
                    }
                });
            }
            showFileSent(); 
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad_messages/ad_conversation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 146,  255 => 145,  213 => 112,  208 => 110,  198 => 103,  187 => 95,  184 => 94,  182 => 93,  178 => 91,  176 => 90,  173 => 89,  163 => 88,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'Envoi des messages' %}

{% block stylesheets %}
    <style>
        #messages_content, .messages_content {
            height: 43px;
            overflow: hidden;
            resize: none;
            scrollbar-width: none !important; /* Firefox */
            -ms-overflow-style: none !important;  /* IE 10+ */
        }
        #messages_content::-webkit-scrollbar, .messages_content::-webkit-scrollbar { /* Google Chrome */
            display: none;
        }
        .icon-paperclip::before {
            font-size: 24px;
        }
        #msg__pdf__viewer {
            width: 50%;
            margin: 0 auto !important;
        }   
        .styles__docMessageIcon {
            border: 1px solid #cad1d9;
            border-radius: 5px;
            color: #667d99;
            overflow: hidden;
        }   
        .styles__docMessageIcon .mr-3 {
            font-size: 32px;
            border-right: 1px solid #cad1d9;
            background-color: #e6ebef;
        }   
        .styles__docMessageIcon a, .styles__docMessageIcon a:hover {
            text-decoration: none;
            color: inherit;
        }   
        .styles__docMessageIcon p {
            font-size: 14px;
            margin-bottom: 0;
        }   
        .styles__docMessageIcon p strong {
            font-size: 12px;
        }   
        .user__list__action {
            font-weight: 500;
            color: #667d99;
            background-color: #e7edf3;
        }  
        .user__list__action:hover {
            color: #667d99;
            background-color: #e7edf3;
        }  
        .list-group li a {
            color: inherit;
            transition: ease .5s;
        }  
        .list-group li a:hover {
            text-decoration: none;
            color: inherit;
        }  
        .list-group li a.flex-shrink:hover {
            color: #00BFA6;
        }  
        .rounded-circle {
            width: 40px;
            height: 40px;
            overflow: hidden;
        }  
        .rounded-circle {
            font-size: 32px;
            color: #667d99;
        }  
        .rounded__block {
            border-radius: 5px;
            width: 80px;
            height: 124px;
            height: auto !important;
            overflow: hidden;
        }  
        .rounded__block img {
            width: 140%;
        }  
        </style>
{% endblock %}

{% block body %}
    <div class=\"row my-4\">
        {% include 'ad_messages/partials/messages_users.html.twig' with { 'messages' : list_messages } %}
        
        <div class=\"col-md-8\">
            {% include 'ad_messages/partials/messages_conversations.html.twig' with { 'ad' : ad, 'author' : author, 'messages' : messages } %}
            
            {{ form_start(form) }}
                <div class=\"d-flex align-items-center py-3 block__messages__send\">
                    <div class=\"mr-1\">
                        <label for=\"messages_imageFileMessage_file\" style=\"color:#667d99;\" class=\"btn d-flex align-items-center mb-0\">
                            <i class=\"icon-paperclip\"></i>
                        </label>
                    </div>
                    <div class=\"flex-grow-1\">
                        {{ form_widget(form.content) }}
                    </div>
                    <div class=\"ml-3\">
                        <button id=\"send__msg__btn\" class=\"btn btn-sm btnDisabled\">Envoyer</button>
                    </div>
                </div>
                <div class=\"d-none\">
                    {{ form_rest(form) }}
                </div>
            {{ form_end(form) }}
        
            <!-- Modal -->
            <div class=\"modal fade\" id=\"show__file__sent\" data-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\"
                aria-labelledby=\"show__file__sentLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"show__file__sentLabel\">Aperçu de votre envoi :</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div id=\"show__msg__file\" class=\"modal-body bg-light show__msg__file\">
                            <canvas id=\"msg__pdf__viewer\"></canvas>
                        </div>
                        <div class=\"modal-footer\">
                            <div class=\"flex-grow-1\">
                                <textarea name=\"\" class=\"messages_content form-control\" placeholder=\"Écrivez votre message\"></textarea>
                            </div>
                            <div class=\"ml-3 flex-shrink-1\">
                                <button id=\"send__msg__btn__file\" class=\"btn btn-sm btnSubmit\">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div><!-- col-md-9 messages block -->
    </div><!-- row block parent -->
    
{% endblock %}

{% block javascripts %}
    <script src=\"https://mozilla.github.io/pdf.js/build/pdf.js\"></script>
    <script>
        \$(function () 
        {
            function abstractActions() 
            {
                \$('.delete__message').click(function () 
                {
                    return confirm('Êtes-vous certain de vouloir supprimer cette conversation ?');
                });
            }
            abstractActions() ;

            function initializeSendAt() 
            {
                \$('.message__send__at').each((key, element) => 
                {
                    let textSubstr = \$(element).text().substring(0, \$(element).text().lastIndexOf(':'));
                    \$(element).text(textSubstr);
                });
            }
            initializeSendAt() ;

            function autogrowBoxMessage() 
            {
                \$('#send__msg__btn').prop('disabled', true);
                
                \$('#messages_content, .messages_content').on('input', function(e) 
                {
                    \$(this).attr('maxLength', 500);
                    \$(this).height(0);
                    \$(this).height(this.scrollHeight);
                    
                    if (\$(this).val().length > 60) 
                    {
                        \$('.btnDisabled').addClass('btnSubmit');
                        \$('.btnDisabled').removeClass('btnDisabled');
                        \$('#send__msg__btn').prop('disabled', false);
                    } 
                    else 
                    {
                        \$('.btnSubmit').addClass('btnDisabled');
                        \$('.btnSubmit').removeClass('btnSubmit');
                        \$('#send__msg__btn').prop('disabled', true);
                    }

                    if(\$(this).val().length > 250) 
                    {
                        \$(this).height(132);
                        \$(this).css('overflowY', 'scroll');
                    } 
                    else 
                    {
                        \$(this).css('overflowY', 'hidden');
                    }
                });
            }
            autogrowBoxMessage();

            function showFileSent() 
            {
                \$('#messages_imageFileMessage_file').on('input', function(e) 
                {
                    console.log(e.target.files[0].type);
                    \$('.styles__docMessageIcon').remove();
                    \$('.img-fluid').remove();
                    \$('#msg__pdf__viewer').fadeOut().removeClass('d-block');
                    \$('.messages_content').css('height', '43px');
                    \$('#show__file__sent').modal('show');

                    let reader = new FileReader();

                    if (e.target.files[0].type === 'image/jpeg') 
                    {
                        reader.onload = (e) => 
                        {
                            \$('#show__msg__file').append('<img src=\"' + e.target.result + '\" class=\"img-fluid\">');
                        }
                        reader.readAsDataURL(e.target.files[0]);
                    }

                    if (e.target.files[0].type === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') 
                    {
                        let docx = URL.createObjectURL(e.target.files[0]);
                        \$('#show__msg__file').append('<div class=\"d-flex align-items-center styles__docMessageIcon\"><div class=\"py-2 px-3 mr-3\"><i class=\"far fa-file-word\"></i></div> <a href=\"'+ docx +'\" download class=\"d-block\"><p class=\"py-2\">Pièce jointe : <strong class=\"text-success\">'+ e.target.files[0].name +' </strong><br> <strong>Cliquez pour ouvrir</strong></p></a> </div>');
                    }

                    if(e.target.files[0].type === 'application/pdf') 
                    {
                        reader.onload = function () 
                        {
                            let pdfData = new Uint8Array(this.result);
                            let loadingTask = pdfjsLib.getDocument({ data: pdfData });

                            loadingTask.promise.then(function (pdf) 
                            {
                                pdf.getPage(1).then((page) => 
                                {
                                    let viewport = page.getViewport({ scale: 1 });

                                    // Prepare canvas using PDF page dimensions
                                    let canvas = \$('#msg__pdf__viewer')[0];
                                    let context = canvas.getContext('2d');
                                    canvas.height = viewport.height;
                                    canvas.width = viewport.width;

                                    // Render PDF page into canvas context
                                    let renderContext =
                                    {
                                        canvasContext: context,
                                        viewport: viewport
                                    };
                                    let renderTask = page.render(renderContext);
                                    renderTask.promise.then(() => {
                                        \$('#msg__pdf__viewer').fadeIn().addClass('d-block');
                                        console.log('Page rendered');
                                    });
                                });
                            }, (reason) => { console.log(reason.error); });
                        }
                        reader.readAsArrayBuffer(e.target.files[0]);
                    }
                });
            }
            showFileSent(); 
        });
    </script>
{% endblock %}
", "ad_messages/ad_conversation.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/ad_messages/ad_conversation.html.twig");
    }
}
