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

/* espace/topic.html.twig */
class __TwigTemplate_2d39c3b5a4980f516c83b064a1a01ad5e7b9d096e9a4d3eaf57021e33911a294 extends \Twig\Template
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
        return "espace/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/topic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/topic.html.twig"));

        // line 2
        $context["title"] = "Le forum";
        // line 1
        $this->parent = $this->loadTemplate("espace/base.html.twig", "espace/topic.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/forum.css"), "html", null, true);
        echo "\">
        <style>
            .thumb h1 {
                font-size: 23px;
                font-weight: 600;
            }
            .line-ifo {
                background: #E7EDF3;
                color: #667D99
            }
            .line-ifo::after {
                content: \"\";
                display: block;
                position: absolute;
                top: 32px;
                width: 0;
                height: 0;
                border-bottom: 10px solid #e7edf3;
                border-right: 10px solid transparent;
                border-left: 10px solid transparent;
                transform: rotate(180deg);
            }
            .thumbs h1 {
                font-size: 18px;
            }
            .liked {
                color: var(--blue);
            }
            .like:hover {
                cursor: pointer
            }
            .commentLine:not(:last-child) {
                border-bottom: 1px solid #e8e8e8;
            }
        </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("header"));
        echo "
    <section class=\"position-relative section\">
        <div class=\"container\">
            <div class=\"row mt-4\">
                <div class=\"col-md-12 mt-3 h-title\">
                    <h1> Le forum </h1>
                </div>
                <div class=\"col-md-12 my-5\">
                        <div class=\"row\">
                            <div class=\"col thumb d-flex\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <div class=\"d-flex align-items-center\">
                                        <span style=\"font-size: 18px;font-weight: 600\"> Melka </span>
                                        <span class=\"ml-3\"> Posté le 20 novembre 2020 </span>
                                    </div>
                                    <h1 class=\"my-2\"> Amet minim mollit </h1>
                                        <p class=\"py-2\">
                                            Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.

                                            Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.
                                        </p>
                                        <div class=\"py-2\">
                                            <button type=\"button\" class=\"btn btnDanger repondre\" style=\"text-transform: inherit;\"> Répondre </button>
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class=\"col my-3\">
                        <div class=\"line-ifo w-100 p-1 pl-3 position-relative\">
                            <span> 3 réponses </span>
                        </div>
                </div>
                ";
        // line 82
        echo "                <section>
                    <div class=\"row\">
                        <div class=\"col-md-12 d-flex my-2 p-3 commentLine\">
                            <div class=\"mr-auto d-flex thumbs\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/3936894/pexels-photo-3936894.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <h1> Jacob Jones <span style=\"color: #b1b1b1\">8 nov. 2020 à 10:59</span></h1>
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    <div class=\"d-grid my-2\">
                                        <span class=\"repondre\"><i class=\"icon-message_vector_Plan-de-travail-1\"></i> Commenter</span>
                                        <span class=\"mt-2 liked like\"><i class=\"far fa-thumbs-up\"></i> Vous aimez </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 104
        echo "                            <div class=\"col-md-12 d-flex my-2 p-3 commentLine\">
                            <div class=\"mr-auto d-flex thumbs\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <h1> Jacob Jones <span style=\"color: #b1b1b1\">8 nov. 2020 à 10:59</span></h1>
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    <div class=\"d-grid my-2\">
                                        <span class=\"repondre\"><i class=\"icon-message_vector_Plan-de-travail-1\"></i> Commenter</span>
                                        <span class=\"mt-2 like\"><i class=\"far fa-thumbs-up\"></i> J'aime </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 124
        echo "                        ";
        // line 125
        echo "                        <div class=\"col-md-12 d-flex my-2 p-3 commentLine\">
                            <div class=\"mr-auto d-flex thumbs\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/3936894/pexels-photo-3936894.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <h1> Jacob Jones <span style=\"color: #b1b1b1\">8 nov. 2020 à 10:59</span></h1>
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    <div class=\"d-grid my-2\">
                                        <span class=\"repondre\"><i class=\"icon-message_vector_Plan-de-travail-1\"></i> Commenter</span>
                                         <span class=\"mt-2 like\"><i class=\"far fa-thumbs-up\"></i> J'aime </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 145
        echo "                        ";
        // line 146
        echo "                        <div class=\"col-md-12 d-flex my-2 p-3 commentLine\">
                            <div class=\"mr-auto d-flex thumbs\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <h1> Jacob Jones <span style=\"color: #b1b1b1\">8 nov. 2020 à 10:59</span></h1>
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    <div class=\"d-grid my-2\">
                                        <span class=\"repondre\"><i class=\"icon-message_vector_Plan-de-travail-1\"></i> Commenter</span>
                                         <span class=\"mt-2 like\"><i class=\"far fa-thumbs-up\"></i> J'aime </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 166
        echo "                    </div>
                </section>
                
            </div>
                <section class=\"my-4\">
                    <div class=\"row\">
                        <div class=\"col-md-12 pl-0\">
                            <div class=\"d-flex w-100\">
                                <div class=\"w-8\">
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                    </div>
                                </div>
                                <div class=\"w-70\">
                                    <form name=\"subjet\">
                                            <input type=\"file\" name=\"fichier\" style=\"display: none\">
                                            <div class=\"form-group\">
                                                <label for=\"exampleFormControlTextarea1\"> Votre réponse  </label>
                                                <textarea name=\"message\" id=\"messages\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                            </div>
                                            <div class=\"d-flex align-items-center position-relative\">
                                                    
                                                    <a type=\"submit\" class=\"btn btnSubmit\" href=\"#\">Commenter</a>
                                                    <button type=\"reset\" class=\"btn btnPrimary ml-3\" href=\"#\">Annuler</button>
                                                    <i class=\"fas fa-paperclip ml-3\" style=\"font-size: 20px;\"></i>
                                                    <i class=\"far fa-smile-beam mx-3\" style=\"font-size: 20px;\"></i>
                                                <div class=\"Divemoji m-2\">
                                                    <ul  id='emo' class=\"m-2\"></ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>
                ";
        // line 203
        echo "                <section>
                    <div class=\"row\">
                            <div class=\"col-md-12 mt-5 d-flex justify-content-center\">
                                <nav aria-label=\"...\">
                                    <ul class=\"pagination\">
                                        <li class=\"page-item disabled\">
                                        <span class=\"page-link\">Precèdent</span>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                        <li class=\"page-item active\">
                                        <span class=\"page-link\">
                                            2
                                            <span class=\"sr-only\">(current)</span>
                                        </span>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">6</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">7</a></li>
                                        <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">Suivant</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                    </div>
                </section>
                    
                    ";
        // line 233
        echo "        </div>
    </section>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 237
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 238
        echo "    <script>
        \$(function() {
            //
            \$('.repondre').on('click', ()=> {
                \$(\"html, body\").animate({ scrollTop: \$(document).height() }, 1000);
            })
            \$('button[type=\"reset\"]').on('click', ()=> {
                \$('textarea').css('height', 'auto')
            })
            // Ajouter l'icone de recherche sur l'input recherche
            \$('.blk-rch').append(\"<i class='fas fa-search position-absolute'></i>\")
                    let taille = \$('.add-subject').height()
                    \$('.add-subject').css('bottom', '-'+ taille + 'px')
            // Reduire la fenetre du formulaire d'ajout d'un sujet
                \$('.fa-minus').on('click', ()=> {
                    \$('.add-subject').toggleClass('swipDown')
                })
            // Fermer la fenetre du formulaire d'ajout d'un sujet
                \$('.add-subject .fa-times').click(()=> {
                    console.log(\$('.add-subject').height())
                    let taille = \$('.add-subject').height()
                    \$('.add-subject').css('bottom', '-'+ taille + 'px')
                    \$('textarea').val('').css('height', 'auto')
                } )
            // Agrandir la fenetre
                \$('.fa-expand').on('click', ()=> {
                    //fullexpand
                     \$('.add-subject').toggleClass('fullexpand')
                })
            // Autogrow
                \$('textarea').each(function () {
                this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
                }).on('input', function () {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
                });
                // On appelle le fichier full-emoji-list.json
                \$.post(\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/full-emoji-list.json"), "html", null, true);
        echo "\").done(response=> {
                // Ici on recupere les emoji (map) 
                     const emoji = response.ArrSmyley.map(arr=> {
                       return `<li class='m-1'>\${arr.emoji}</li>`
                   })
                // On affiche tous les emoji sur la balise avec la class Divemoji
                    \$('.Divemoji #emo').append(emoji)

               // Lorsqu'on clique sur un emoticone
                    \$(\"#emo\").on(\"click\",\"li\",function(e){
                            var els = \$(this)
                            console.log('els=> ', els[0].innerHTML)
                    // On appelle la fonction ajouter
                            Ajouter(els[0].innerHTML)
\t\t\t\t\t\t\t\t\t\t})
                }).fail(err=> console.log('erreur ', err))
                \$('.fa-paperclip').on('click', ()=> {
                    \$('input[name=\"fichier\"]').click()
                })
                 // Evenement lorsqu'on click sur un l'icon emoticone 
                \$('.fa-smile-beam').on('click', ()=> {
                    \$('.Divemoji').is(':visible')?\$('.Divemoji').hide(): \$('.Divemoji').show()
                })
                \$('body').on('click', function() {
                    \$('.Divemoji').hide()
                })
                \$('.Divemoji, .fa-smile-beam').on('click', function(e) {
                    e.stopPropagation()
                })
                // Fonction pour ajouter l'emoji sur le textara
                function Ajouter(b1)
                {
                    //Gestion des selections
                    var mess = document.getElementById('messages');
                    if (document.selection)
                    //Pour Internet Explorer
                    {
                    var str = document.selection.createRange().text;
                    mess.focus();
                    sel = document.selection.createRange();
                    sel.text = b1 + str;
                    }
                    else
                    {
                    //Pour les autres
                    var startPos = mess.selectionStart;
                    var endPos = mess.selectionEnd;
                    var chaine = mess.value;
                    var str = chaine.substring( mess.selectionStart, mess.selectionEnd );
                    mess.value = chaine.substring(0, startPos) + b1 + str
                    + chaine.substring(endPos, chaine.length);
                    }
                    mess.focus();
                }
            // Publier un nouveau sujet
            \$('form[name=\"subjet\"]').on('submit', function(e) {
                e.preventDefault()
                console.log('form=> ', \$(this).serializeArray()  )
            })
         })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace/topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 275,  354 => 238,  344 => 237,  331 => 233,  300 => 203,  262 => 166,  241 => 146,  239 => 145,  218 => 125,  216 => 124,  195 => 104,  172 => 82,  130 => 43,  120 => 42,  73 => 5,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace/base.html.twig' %}
{% set title = 'Le forum' %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{asset('css/forum.css')}}\">
        <style>
            .thumb h1 {
                font-size: 23px;
                font-weight: 600;
            }
            .line-ifo {
                background: #E7EDF3;
                color: #667D99
            }
            .line-ifo::after {
                content: \"\";
                display: block;
                position: absolute;
                top: 32px;
                width: 0;
                height: 0;
                border-bottom: 10px solid #e7edf3;
                border-right: 10px solid transparent;
                border-left: 10px solid transparent;
                transform: rotate(180deg);
            }
            .thumbs h1 {
                font-size: 18px;
            }
            .liked {
                color: var(--blue);
            }
            .like:hover {
                cursor: pointer
            }
            .commentLine:not(:last-child) {
                border-bottom: 1px solid #e8e8e8;
            }
        </style>
{% endblock %}

{% block body %}
  {{ render(path(\"header\")) }}
    <section class=\"position-relative section\">
        <div class=\"container\">
            <div class=\"row mt-4\">
                <div class=\"col-md-12 mt-3 h-title\">
                    <h1> Le forum </h1>
                </div>
                <div class=\"col-md-12 my-5\">
                        <div class=\"row\">
                            <div class=\"col thumb d-flex\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <div class=\"d-flex align-items-center\">
                                        <span style=\"font-size: 18px;font-weight: 600\"> Melka </span>
                                        <span class=\"ml-3\"> Posté le 20 novembre 2020 </span>
                                    </div>
                                    <h1 class=\"my-2\"> Amet minim mollit </h1>
                                        <p class=\"py-2\">
                                            Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.

                                            Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.
                                        </p>
                                        <div class=\"py-2\">
                                            <button type=\"button\" class=\"btn btnDanger repondre\" style=\"text-transform: inherit;\"> Répondre </button>
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class=\"col my-3\">
                        <div class=\"line-ifo w-100 p-1 pl-3 position-relative\">
                            <span> 3 réponses </span>
                        </div>
                </div>
                {# Commentaires #}
                <section>
                    <div class=\"row\">
                        <div class=\"col-md-12 d-flex my-2 p-3 commentLine\">
                            <div class=\"mr-auto d-flex thumbs\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/3936894/pexels-photo-3936894.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <h1> Jacob Jones <span style=\"color: #b1b1b1\">8 nov. 2020 à 10:59</span></h1>
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    <div class=\"d-grid my-2\">
                                        <span class=\"repondre\"><i class=\"icon-message_vector_Plan-de-travail-1\"></i> Commenter</span>
                                        <span class=\"mt-2 liked like\"><i class=\"far fa-thumbs-up\"></i> Vous aimez </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# occurences #}
                            <div class=\"col-md-12 d-flex my-2 p-3 commentLine\">
                            <div class=\"mr-auto d-flex thumbs\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <h1> Jacob Jones <span style=\"color: #b1b1b1\">8 nov. 2020 à 10:59</span></h1>
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    <div class=\"d-grid my-2\">
                                        <span class=\"repondre\"><i class=\"icon-message_vector_Plan-de-travail-1\"></i> Commenter</span>
                                        <span class=\"mt-2 like\"><i class=\"far fa-thumbs-up\"></i> J'aime </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# fin #}
                        {# occurences #}
                        <div class=\"col-md-12 d-flex my-2 p-3 commentLine\">
                            <div class=\"mr-auto d-flex thumbs\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/3936894/pexels-photo-3936894.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <h1> Jacob Jones <span style=\"color: #b1b1b1\">8 nov. 2020 à 10:59</span></h1>
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    <div class=\"d-grid my-2\">
                                        <span class=\"repondre\"><i class=\"icon-message_vector_Plan-de-travail-1\"></i> Commenter</span>
                                         <span class=\"mt-2 like\"><i class=\"far fa-thumbs-up\"></i> J'aime </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# fin #}
                        {# occurences #}
                        <div class=\"col-md-12 d-flex my-2 p-3 commentLine\">
                            <div class=\"mr-auto d-flex thumbs\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/3211476/pexels-photo-3211476.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <h1> Jacob Jones <span style=\"color: #b1b1b1\">8 nov. 2020 à 10:59</span></h1>
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    <div class=\"d-grid my-2\">
                                        <span class=\"repondre\"><i class=\"icon-message_vector_Plan-de-travail-1\"></i> Commenter</span>
                                         <span class=\"mt-2 like\"><i class=\"far fa-thumbs-up\"></i> J'aime </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {# fin #}
                    </div>
                </section>
                
            </div>
                <section class=\"my-4\">
                    <div class=\"row\">
                        <div class=\"col-md-12 pl-0\">
                            <div class=\"d-flex w-100\">
                                <div class=\"w-8\">
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                    </div>
                                </div>
                                <div class=\"w-70\">
                                    <form name=\"subjet\">
                                            <input type=\"file\" name=\"fichier\" style=\"display: none\">
                                            <div class=\"form-group\">
                                                <label for=\"exampleFormControlTextarea1\"> Votre réponse  </label>
                                                <textarea name=\"message\" id=\"messages\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                            </div>
                                            <div class=\"d-flex align-items-center position-relative\">
                                                    
                                                    <a type=\"submit\" class=\"btn btnSubmit\" href=\"#\">Commenter</a>
                                                    <button type=\"reset\" class=\"btn btnPrimary ml-3\" href=\"#\">Annuler</button>
                                                    <i class=\"fas fa-paperclip ml-3\" style=\"font-size: 20px;\"></i>
                                                    <i class=\"far fa-smile-beam mx-3\" style=\"font-size: 20px;\"></i>
                                                <div class=\"Divemoji m-2\">
                                                    <ul  id='emo' class=\"m-2\"></ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </section>
                {# Pagination #}
                <section>
                    <div class=\"row\">
                            <div class=\"col-md-12 mt-5 d-flex justify-content-center\">
                                <nav aria-label=\"...\">
                                    <ul class=\"pagination\">
                                        <li class=\"page-item disabled\">
                                        <span class=\"page-link\">Precèdent</span>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                        <li class=\"page-item active\">
                                        <span class=\"page-link\">
                                            2
                                            <span class=\"sr-only\">(current)</span>
                                        </span>
                                        </li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">6</a></li>
                                        <li class=\"page-item\"><a class=\"page-link\" href=\"#\">7</a></li>
                                        <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"#\">Suivant</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                    </div>
                </section>
                    
                    {# fin #}
        </div>
    </section>
    
{% endblock %}
{% block javascripts %}
    <script>
        \$(function() {
            //
            \$('.repondre').on('click', ()=> {
                \$(\"html, body\").animate({ scrollTop: \$(document).height() }, 1000);
            })
            \$('button[type=\"reset\"]').on('click', ()=> {
                \$('textarea').css('height', 'auto')
            })
            // Ajouter l'icone de recherche sur l'input recherche
            \$('.blk-rch').append(\"<i class='fas fa-search position-absolute'></i>\")
                    let taille = \$('.add-subject').height()
                    \$('.add-subject').css('bottom', '-'+ taille + 'px')
            // Reduire la fenetre du formulaire d'ajout d'un sujet
                \$('.fa-minus').on('click', ()=> {
                    \$('.add-subject').toggleClass('swipDown')
                })
            // Fermer la fenetre du formulaire d'ajout d'un sujet
                \$('.add-subject .fa-times').click(()=> {
                    console.log(\$('.add-subject').height())
                    let taille = \$('.add-subject').height()
                    \$('.add-subject').css('bottom', '-'+ taille + 'px')
                    \$('textarea').val('').css('height', 'auto')
                } )
            // Agrandir la fenetre
                \$('.fa-expand').on('click', ()=> {
                    //fullexpand
                     \$('.add-subject').toggleClass('fullexpand')
                })
            // Autogrow
                \$('textarea').each(function () {
                this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
                }).on('input', function () {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
                });
                // On appelle le fichier full-emoji-list.json
                \$.post(\"{{asset('./js/full-emoji-list.json')}}\").done(response=> {
                // Ici on recupere les emoji (map) 
                     const emoji = response.ArrSmyley.map(arr=> {
                       return `<li class='m-1'>\${arr.emoji}</li>`
                   })
                // On affiche tous les emoji sur la balise avec la class Divemoji
                    \$('.Divemoji #emo').append(emoji)

               // Lorsqu'on clique sur un emoticone
                    \$(\"#emo\").on(\"click\",\"li\",function(e){
                            var els = \$(this)
                            console.log('els=> ', els[0].innerHTML)
                    // On appelle la fonction ajouter
                            Ajouter(els[0].innerHTML)
\t\t\t\t\t\t\t\t\t\t})
                }).fail(err=> console.log('erreur ', err))
                \$('.fa-paperclip').on('click', ()=> {
                    \$('input[name=\"fichier\"]').click()
                })
                 // Evenement lorsqu'on click sur un l'icon emoticone 
                \$('.fa-smile-beam').on('click', ()=> {
                    \$('.Divemoji').is(':visible')?\$('.Divemoji').hide(): \$('.Divemoji').show()
                })
                \$('body').on('click', function() {
                    \$('.Divemoji').hide()
                })
                \$('.Divemoji, .fa-smile-beam').on('click', function(e) {
                    e.stopPropagation()
                })
                // Fonction pour ajouter l'emoji sur le textara
                function Ajouter(b1)
                {
                    //Gestion des selections
                    var mess = document.getElementById('messages');
                    if (document.selection)
                    //Pour Internet Explorer
                    {
                    var str = document.selection.createRange().text;
                    mess.focus();
                    sel = document.selection.createRange();
                    sel.text = b1 + str;
                    }
                    else
                    {
                    //Pour les autres
                    var startPos = mess.selectionStart;
                    var endPos = mess.selectionEnd;
                    var chaine = mess.value;
                    var str = chaine.substring( mess.selectionStart, mess.selectionEnd );
                    mess.value = chaine.substring(0, startPos) + b1 + str
                    + chaine.substring(endPos, chaine.length);
                    }
                    mess.focus();
                }
            // Publier un nouveau sujet
            \$('form[name=\"subjet\"]').on('submit', function(e) {
                e.preventDefault()
                console.log('form=> ', \$(this).serializeArray()  )
            })
         })
    </script>
{% endblock %}", "espace/topic.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/topic.html.twig");
    }
}
