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

/* espace/forum.html.twig */
class __TwigTemplate_39f2678d68ab0a81fc729b28ea35ba758e31050cf4f35c251ae9977654440d53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/forum.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/forum.html.twig"));

        // line 2
        $context["title"] = "Le forum";
        // line 1
        $this->parent = $this->loadTemplate("espace/base.html.twig", "espace/forum.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/forum.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("header"));
        echo "
    <section class=\"position-relative section\">
        <div class=\"container\">
            <div class=\"row mt-4\">
                <div class=\"col-md-12 mt-3 h-title\">
                    <h1> Le forum </h1>
                </div>
                <div class=\"col-md-12 mt-4\">
                        <div class=\"row\">
                            <div class=\"col-md-2 mt-3\">
                                <button type=\"submit\" class=\"btn btn-primary btnSubmit addSubject\" style=\"white-space: nowrap;\"> Ajouter un sujet </button>
                            </div>
                            <div class=\"col-md-2 mt-3\">
                                <div class=\"btn-group w-100\">
                                    <button type=\"button\" class=\"btn btnPrimary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Trier par
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"#\">plus récent</a>
                                        <a class=\"dropdown-item\" href=\"#\">plus ancien</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col mt-3\">
                                <div class=\"form-group blk-rch position-relative w-100\">
                                    <input type=\"search\" class=\"form-control position-relative\" id=\"recherche\" aria-describedby=\"searchlHelp\" placeholder=\"Entrer un mot clé ou titre...\">
                                </div>
                            </div>
                        </div>
                </div>
                ";
        // line 38
        echo "                ";
        if ((isset($context["exist"]) || array_key_exists("exist", $context) ? $context["exist"] : (function () { throw new RuntimeError('Variable "exist" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "                    <div class=\"col-md-12\">
                        <div class=\"alert alert-dark d-flex align-items-center p-2 my-5\" role=\"alert\">
                            
                                Résultats 1 - 50 sur un total d'environ 5 930
                        </div>
                    </div>
                    <div class=\"col-md-12 d-flex my-3 p-3\">
                        <div class=\"mr-auto d-flex thumb\">
                            <div>
                                <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                    <img class=\"w-100\" src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                </div>
                            </div>
                            <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic");
            echo "\"><h1> Amet minim mollit </h1></a>
                                <a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic");
            echo "\">
                                    <p>
                                        Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                    </p>
                                </a>
                                <div>
                                    <span>Melka | Dernière réponse : Chris, le 20 novembre 2020 à 18:03</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"corner d-grid\">
                            <div class=\"d-flex justify-content-center align-items-center\">
                                2
                            </div>
                            <span>Réponses</span>
                        </div>
                    </div>
                    ";
            // line 72
            echo "                        <div class=\"col-md-12 d-flex my-3 p-3 colored\">
                            <div class=\"mr-auto d-flex thumb\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/3936894/pexels-photo-3936894.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic");
            echo "\"><h1> Amet minim mollit </h1></a>
                                    <a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic");
            echo "\">
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    </a>
                                    <div>
                                        <span>Melka | Dernière réponse : Chris, le 20 novembre 2020 à 18:03</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"corner d-grid\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    2
                                </div>
                                <span>Réponses</span>
                            </div>
                        </div>
                        <div class=\"col-md-12 d-flex my-3 p-3\">
                            <div class=\"mr-auto d-flex thumb\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic");
            echo "\"><h1> Amet minim mollit </h1></a>
                                    <a href=\"";
            // line 107
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic");
            echo "\">
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    </a>
                                    <div>
                                        <span>Melka | Dernière réponse : Chris, le 20 novembre 2020 à 18:03</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"corner d-grid\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    2
                                </div>
                                <span>Réponses</span>
                            </div>
                        </div>
                        <div class=\"col-md-12 d-flex my-3 p-3 colored\">
                            <div class=\"mr-auto d-flex thumb\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <a href=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic");
            echo "\"><h1> Amet minim mollit </h1></a>
                                    <a href=\"";
            // line 133
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic");
            echo "\">
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    </a>
                                    <div>
                                        <span>Melka | Dernière réponse : Chris, le 20 novembre 2020 à 18:03</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"corner d-grid\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    2
                                </div>
                                <span>Réponses</span>
                            </div>
                        </div>
                    <div class=\"col-md-12 d-flex my-3 p-3\">
                        <div class=\"mr-auto d-flex thumb\">
                            <div>
                                <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                    <img class=\"w-100\" src=\"https://images.pexels.com/photos/2419574/pexels-photo-2419574.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\">
                                </div>
                            </div>
                            <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                <a href=\"";
            // line 158
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic");
            echo "\"><h1> Amet minim mollit </h1></a>
                                <a href=\"";
            // line 159
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic");
            echo "\">
                                    <p>
                                        Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                    </p>
                                </a>
                                <div>
                                    <span>Melka | Dernière réponse : Chris, le 20 novembre 2020 à 18:03</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"corner d-grid\">
                            <div class=\"d-flex justify-content-center align-items-center\">
                                2
                            </div>
                            <span>Réponses</span>
                        </div>
                    </div>
                    ";
            // line 177
            echo "
                    ";
            // line 179
            echo "                    <div class=\"col-md-12 mt-5 d-flex justify-content-center\">
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
                    ";
            // line 204
            echo "                ";
        } else {
            // line 205
            echo "                ";
            // line 206
            echo "                <div class=\"col-md-12 mt-4\">
                        <div>
                            <h1 class=\"mb-5 text-center\" style=\"font-size: 25px\">Il n’existe aucun sujet pour le moment.</h1>
                        </div>
                        <div class=\"d-grid justify-content-center align-items-center\">
                                    <img src=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/forum.png"), "html", null, true);
            echo "\" width=\"500px\">
                                    <button type=\"submit\" class=\"btn btnDanger filter my-5 w-100 addSubject\" style=\"white-space: nowrap;margin: auto\"> Ajouter un sujet <i class=\"fas fa-plus\"></i> </button>
                        </div>
                </div>
                ";
        }
        // line 216
        echo "            </div>
        </div>
        ";
        // line 219
        echo "        <div class=\"row add-subject position-absolute\">
                <div class=\"col-md-12 d-flex align-items-end flex-column items-action px-5 pt-2\">
                        <ul>
                            <li class=\"mx-2\" title=\"Réduire\"><i class=\"fas fa-minus\"></i></li>
                            <li class=\"mx-2\" title=\"Agrandir\"><i class=\"fas fa-expand\"></i></li>
                            <li class=\"mx-2\" title=\"Fermer\"><i class=\"fas fa-times\"></i></li>
                        </ul>
                </div>
                <div class=\"col-md-12 px-5 pb-5\">
                    <div class=\"d-flex justify-content-center w-100\">
                        <div class=\"w-8\">
                            <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                <img class=\"w-100\" src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                            </div>
                        </div>
                        <div class=\"w-70\">
                            <form name=\"subjet\">
                                <input type=\"file\" name=\"fichier\" style=\"display: none\">
                                <div class=\"form-group\">
                                    <label for=\"exampleFormControlTextarea1\"> Titre du sujet </label>
                                    <textarea name=\"message\" id=\"messages\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                </div>
                                <div class=\"d-flex align-items-center position-relative\">
                                    <a type=\"submit\" class=\"btn btn-primary btnSubmit\" href=\"";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum", ["exist" => true]);
        echo "\">PUBLIER</a>
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
        ";
        // line 255
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 257
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 258
        echo "    <script>
        \$(function() {
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
            // Click sur bouton ajouter un nouveau sujet
            \$('.addSubject').on('click', ()=> {
                     \$('.add-subject').css('bottom', '0')
                    \$(\"html, body\").animate({ scrollTop: \$(document).height() }, 1000);
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
        // line 293
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
        return "espace/forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 293,  417 => 258,  407 => 257,  396 => 255,  381 => 242,  356 => 219,  352 => 216,  344 => 211,  337 => 206,  335 => 205,  332 => 204,  306 => 179,  303 => 177,  283 => 159,  279 => 158,  251 => 133,  247 => 132,  219 => 107,  215 => 106,  187 => 81,  183 => 80,  173 => 72,  153 => 54,  149 => 53,  133 => 39,  130 => 38,  96 => 7,  86 => 6,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace/base.html.twig' %}
{% set title = 'Le forum' %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/forum.css')}}\">
    {% endblock %}
{% block body %}
    {{ render(path(\"header\")) }}
    <section class=\"position-relative section\">
        <div class=\"container\">
            <div class=\"row mt-4\">
                <div class=\"col-md-12 mt-3 h-title\">
                    <h1> Le forum </h1>
                </div>
                <div class=\"col-md-12 mt-4\">
                        <div class=\"row\">
                            <div class=\"col-md-2 mt-3\">
                                <button type=\"submit\" class=\"btn btn-primary btnSubmit addSubject\" style=\"white-space: nowrap;\"> Ajouter un sujet </button>
                            </div>
                            <div class=\"col-md-2 mt-3\">
                                <div class=\"btn-group w-100\">
                                    <button type=\"button\" class=\"btn btnPrimary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Trier par
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"#\">plus récent</a>
                                        <a class=\"dropdown-item\" href=\"#\">plus ancien</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col mt-3\">
                                <div class=\"form-group blk-rch position-relative w-100\">
                                    <input type=\"search\" class=\"form-control position-relative\" id=\"recherche\" aria-describedby=\"searchlHelp\" placeholder=\"Entrer un mot clé ou titre...\">
                                </div>
                            </div>
                        </div>
                </div>
                {# Il faut que la variable exist soit à true pour afficher tous les sujets qui ont été crée #}
                {% if exist %}
                    <div class=\"col-md-12\">
                        <div class=\"alert alert-dark d-flex align-items-center p-2 my-5\" role=\"alert\">
                            
                                Résultats 1 - 50 sur un total d'environ 5 930
                        </div>
                    </div>
                    <div class=\"col-md-12 d-flex my-3 p-3\">
                        <div class=\"mr-auto d-flex thumb\">
                            <div>
                                <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                    <img class=\"w-100\" src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                </div>
                            </div>
                            <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                <a href=\"{{ path('topic') }}\"><h1> Amet minim mollit </h1></a>
                                <a href=\"{{ path('topic') }}\">
                                    <p>
                                        Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                    </p>
                                </a>
                                <div>
                                    <span>Melka | Dernière réponse : Chris, le 20 novembre 2020 à 18:03</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"corner d-grid\">
                            <div class=\"d-flex justify-content-center align-items-center\">
                                2
                            </div>
                            <span>Réponses</span>
                        </div>
                    </div>
                    {# Occurences #}
                        <div class=\"col-md-12 d-flex my-3 p-3 colored\">
                            <div class=\"mr-auto d-flex thumb\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/3936894/pexels-photo-3936894.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <a href=\"{{ path('topic') }}\"><h1> Amet minim mollit </h1></a>
                                    <a href=\"{{ path('topic') }}\">
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    </a>
                                    <div>
                                        <span>Melka | Dernière réponse : Chris, le 20 novembre 2020 à 18:03</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"corner d-grid\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    2
                                </div>
                                <span>Réponses</span>
                            </div>
                        </div>
                        <div class=\"col-md-12 d-flex my-3 p-3\">
                            <div class=\"mr-auto d-flex thumb\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/5042302/pexels-photo-5042302.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <a href=\"{{ path('topic') }}\"><h1> Amet minim mollit </h1></a>
                                    <a href=\"{{ path('topic') }}\">
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    </a>
                                    <div>
                                        <span>Melka | Dernière réponse : Chris, le 20 novembre 2020 à 18:03</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"corner d-grid\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    2
                                </div>
                                <span>Réponses</span>
                            </div>
                        </div>
                        <div class=\"col-md-12 d-flex my-3 p-3 colored\">
                            <div class=\"mr-auto d-flex thumb\">
                                <div>
                                    <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                        <img class=\"w-100\" src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                    </div>
                                </div>
                                <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                    <a href=\"{{ path('topic') }}\"><h1> Amet minim mollit </h1></a>
                                    <a href=\"{{ path('topic') }}\">
                                        <p>
                                            Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                        </p>
                                    </a>
                                    <div>
                                        <span>Melka | Dernière réponse : Chris, le 20 novembre 2020 à 18:03</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"corner d-grid\">
                                <div class=\"d-flex justify-content-center align-items-center\">
                                    2
                                </div>
                                <span>Réponses</span>
                            </div>
                        </div>
                    <div class=\"col-md-12 d-flex my-3 p-3\">
                        <div class=\"mr-auto d-flex thumb\">
                            <div>
                                <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                    <img class=\"w-100\" src=\"https://images.pexels.com/photos/2419574/pexels-photo-2419574.jpeg?auto=compress&cs=tinysrgb&h=650&w=940\">
                                </div>
                            </div>
                            <div class=\"d-grid ml-2 mr-2 thumb-content\">
                                <a href=\"{{ path('topic') }}\"><h1> Amet minim mollit </h1></a>
                                <a href=\"{{ path('topic') }}\">
                                    <p>
                                        Anim magna nisi elit sit quis irure reprehenderit voluptate voluptate irure occaecat ullamco nostrud. Sit voluptate ea culpa ullamco qui proident eiusmod adipisicing officia. Do nulla ullamco eu culpa laboris.
                                    </p>
                                </a>
                                <div>
                                    <span>Melka | Dernière réponse : Chris, le 20 novembre 2020 à 18:03</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"corner d-grid\">
                            <div class=\"d-flex justify-content-center align-items-center\">
                                2
                            </div>
                            <span>Réponses</span>
                        </div>
                    </div>
                    {#  #}

                    {# Pagination #}
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
                    {# fin #}
                {% else %}
                {# Sinon on affiche le texte que aucun sujet n'existe encore #}
                <div class=\"col-md-12 mt-4\">
                        <div>
                            <h1 class=\"mb-5 text-center\" style=\"font-size: 25px\">Il n’existe aucun sujet pour le moment.</h1>
                        </div>
                        <div class=\"d-grid justify-content-center align-items-center\">
                                    <img src=\"{{ asset('build/images/static/forum.png') }}\" width=\"500px\">
                                    <button type=\"submit\" class=\"btn btnDanger filter my-5 w-100 addSubject\" style=\"white-space: nowrap;margin: auto\"> Ajouter un sujet <i class=\"fas fa-plus\"></i> </button>
                        </div>
                </div>
                {% endif %}
            </div>
        </div>
        {# Le bloc du formulaire d'ajout d'un sujet #}
        <div class=\"row add-subject position-absolute\">
                <div class=\"col-md-12 d-flex align-items-end flex-column items-action px-5 pt-2\">
                        <ul>
                            <li class=\"mx-2\" title=\"Réduire\"><i class=\"fas fa-minus\"></i></li>
                            <li class=\"mx-2\" title=\"Agrandir\"><i class=\"fas fa-expand\"></i></li>
                            <li class=\"mx-2\" title=\"Fermer\"><i class=\"fas fa-times\"></i></li>
                        </ul>
                </div>
                <div class=\"col-md-12 px-5 pb-5\">
                    <div class=\"d-flex justify-content-center w-100\">
                        <div class=\"w-8\">
                            <div class=\"d-flex justify-content-center align-items-center thumbnail\">
                                <img class=\"w-100\" src=\"https://images.pexels.com/photos/654690/pexels-photo-654690.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                            </div>
                        </div>
                        <div class=\"w-70\">
                            <form name=\"subjet\">
                                <input type=\"file\" name=\"fichier\" style=\"display: none\">
                                <div class=\"form-group\">
                                    <label for=\"exampleFormControlTextarea1\"> Titre du sujet </label>
                                    <textarea name=\"message\" id=\"messages\" class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"5\"></textarea>
                                </div>
                                <div class=\"d-flex align-items-center position-relative\">
                                    <a type=\"submit\" class=\"btn btn-primary btnSubmit\" href=\"{{ path('forum', {'exist': true}) }}\">PUBLIER</a>
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
        {# fin #}
    </section>
{% endblock %}
{% block javascripts %}
    <script>
        \$(function() {
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
            // Click sur bouton ajouter un nouveau sujet
            \$('.addSubject').on('click', ()=> {
                     \$('.add-subject').css('bottom', '0')
                    \$(\"html, body\").animate({ scrollTop: \$(document).height() }, 1000);
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
{% endblock %}", "espace/forum.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/forum.html.twig");
    }
}
