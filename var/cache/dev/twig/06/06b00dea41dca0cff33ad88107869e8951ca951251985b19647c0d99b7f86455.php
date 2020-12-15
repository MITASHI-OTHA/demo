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

/* espace/bibliotheque.html.twig */
class __TwigTemplate_d42e0b0c9ff73e966f9b948b065fb02678a4a0deb5bda408336daf2c7050d368 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/bibliotheque.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/bibliotheque.html.twig"));

        // line 2
        $context["title"] = "LA bibliothèque";
        // line 1
        $this->parent = $this->loadTemplate("espace/base.html.twig", "espace/bibliotheque.html.twig", 1);
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
        echo "        <style>
            .h-title h1 {
                font-size: 30px;
                font-weight: 600;
                margin: 0;
            }
            .h-title h2 {
                font-size: 20px;
                margin: 0;
                font-weight: 600;
            }
            .fa-search {
                position: absolute;
                top: 9px;
                right: 12px;
                margin: auto;
                font-size: 20px;
                color: #ddd;
            }
            .texte {
                background: #ddd;
                padding: 10px;
            }
            ul {
                list-style: none;
                display: flex;
                padding-left: 14px;
            }
           .list-it ul li {
                display: inline;
                text-align: center
            }
             .list-it ul li  div {
                width: 38px;
                height: 38px;
                border-radius: 50%;
                background: #e0e0e0;
                display: flex
            }
            .list-it ul li:not(.first) {
                margin-left: 3em;
            }
            .list-it ul li div svg {
                margin: auto
            }
            .card {
                width: 250px;
                background: #fff;
                padding: 0;
            }
            .isotop {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                margin-top: 51px;
            }
            .isotop .card-item {
                margin-right: 3%;
                margin-bottom: 15px
            }
            .caption {
                 border-radius: 5px 5px 0 0;
                 height: 159px;
                 overflow: hidden
           }
            .card {
                box-shadow: 3px -6px 6px 5px rgb(208 186 186 / 8%), 0 4px 8px 0 rgb(199 199 199 / 18%);
                margin-bottom: 1rem
            }
           
            .foot-card span {
                font-size: 12px;
            }
            .card div:last-child {
                padding: 6px;
            }
            .foot-card {
               
            }
             .card em {
                font-size: 11px
             }
             .list-it ul li div:hover {
                    background: #cccaca;
                    transition: all .3s;
                    cursor: pointer
             }
             .caption img {
                 width: 100%
             }
             .foot-card img {
                 width: 15px
             }
             .card h1 {
                 font-size: 15px
             }
             .card h6 {
                 font-size: 18px
             }
             .card p {
                 font-size: 13px
             }
             .foot-card {
                border-radius: 5px;
                color: #3a3030;
                padding-left: 0 !important;
                transition: all ease .8s
             }
             .foot-card img {
                margin-left: 11px;
             }
             .modal-content {
                 background: #fff;
             }
             .fa-download {
                 color: #676767;
                 transition: all ease .8s
             }
             .fa-download:hover {
                 color: #000;
                 cursor: pointer;
             }
        </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 129
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("header"));
        echo "
    <div class=\"container\">
        <div class=\"row my-4\">
            <div class=\"col-md-12 mt-3 h-title\">
                <h1> Bibliothèque </h1>
                <h2 class=\"mt-3\">Filtre</h2>
            </div>
            <div class=\"col-md-12 mt-3\">
                <div class=\"alert alert-warning\" role=\"alert\">
                        Vous pouvez choisir de fitrer les documents en fonction du type de fichier que vous recherchés (image, site web, pdf, docx...)
                </div>
            </div>
             <div class=\"col-md-12 mt-3\">
                    <form class=\"d-flex\">
                        <div class=\"form-group blk-rch position-relative\">
                            <input type=\"search\" class=\"form-control position-relative\" id=\"recherche\" aria-describedby=\"searchlHelp\" placeholder=\"Entrer un mot clé ou titre...\">
                        </div>
                        <div class=\"form-group ml-5\">
                            <input class=\"form-control\" id=\"categorie\" aria-describedby=\"cateorieHelp\" placeholder=\"selectionnez un type de document...\" >
                        </div>
                    </form>
             </div>

             ";
        // line 153
        echo "                    <div class=\"isotop\" data-isotope='{ \"itemSelector\": \".card-item\" }'>
                            <div class=\"card-item premier image\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"https://images.pexels.com/photos/2079246/pexels-photo-2079246.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                        </div>
                                        <div class=\"m-1\">
                                            <h1>[Type de document]</h1>
                                            <h6> document #K8KDHJ  </h6>
                                            <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                           
                                            <div class=\"foot-card\">
                                                
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/ciyzens-folder.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                        <div  class=\"m-1\">
                                            <h1>[Type de document]</h1>
                                            <h6> document #K8KDHJ  </h6>
                                            <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                           
                                            <div class=\"foot-card\">
                                                
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item video\">
                               <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/video.jpg"), "html", null, true);
        echo "\">
                                    </div>
                                    <div  class=\"m-1\">
                                        <h1>[Type de document]</h1>
                                        <h6> document #K8KDHJ  </h6>
                                        <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                       
                                        <div class=\"foot-card\">
                                           
                                            <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                       <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/zip-format.png"), "html", null, true);
        echo "\">
                                       </div>
                                       <div  class=\"m-1\">
                                            <h1>[Type de document]</h1>                                            
                                            <h6> document #K8KDHJ  </h6>
                                            <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                           
                                            <div class=\"foot-card\">
                                                
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/web/files.jpg"), "html", null, true);
        echo "\">
                                        </div>
                                        <div  class=\"m-1\">
                                            <h1>[Type de document]</h1>
                                            <h6> document #K8KDHJ  </h6>
                                            <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                           
                                            <div class=\"foot-card\">
                                               
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item web\">
                             <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                    <div  class=\"m-1\">
                                        <h1>[Type de document]</h1>
                                        <h6> document #K8KDHJ  </h6>
                                        <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                       
                                        <div class=\"foot-card\">
                                               
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260\">
                                    </div>
                                    <div  class=\"m-1\">
                                        <h1>[Type de document]</h1>
                                        <h6> document #K8KDHJ  </h6>
                                        <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                       
                                         <div class=\"foot-card\">
                                           
                                            <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                        </div>
                                    </div>  
                                </div>
                                
                            </div>
                            <div class=\"card-item image\">
                               <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/279719/pexels-photo-279719.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                    <div  class=\"m-1\">
                                        <h1>[Type de document]</h1>
                                        <h6> document #K8KDHJ  </h6>
                                        <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                       
                                        <div class=\"foot-card\">
                                               
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                </div>
             ";
        // line 295
        echo "             <div class=\"col-md-12 mt-5 d-flex justify-content-center\">
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
    </div>
    <!-- Modal -->
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"   aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered \" role=\"document\">
                <div class=\"modal-content check-categorie p-4 d-grid d-flex align-content-between flex-wrap\">
                    <form name=\"choices\">
                        <div>
                            <h2 class=\"mb-4\" style=\"font-size: 19px;\"> Selectionnez le type de document </h2>
                            <div class=\"form-check mb-2\">
                                <input name=\"communique\" class=\"form-check-input position-static\" type=\"checkbox\" id=\"communique\" value=\"Communiqué de press\" aria-label=\"...\">
                                <label class=\"form-check-label\" for=\"communique\"> Communiqué de press </label>
                            </div>
                            <div class=\"form-check  my-2\">
                                <input name=\"video\" class=\"form-check-input position-static\" type=\"checkbox\" id=\"video\" value=\"Vidéo\" aria-label=\"...\">
                                <label class=\"form-check-label\" for=\"video\"> Vidéo </label>
                            </div>
                            <div class=\"form-check  my-2\">
                                <input name=\"document\" class=\"form-check-input position-static\" type=\"checkbox\" id=\"document\" value=\"documents numériques\" aria-label=\"...\">
                                <label class=\"form-check-label\" for=\"document\"> documents numériques </label>
                            </div>
                        </div>
                        <div>
                            <button type=\"submit\" class=\"btn btn-primary btnSubmit p-8 my-2 validate\">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 350
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 351
        echo "    <script>
        \$(function(){
          \$('.blk-rch').append(\"<i class='fas fa-search'></i>\")
            fitrer = (item)=> {
                        \$('.isotop').isotope({ filter: '.'+item })
                    }
                    \$('.card').css('cursor', 'pointer')
                    \$('.filter').on('click', function() {
                        var filtre = \$(this).data('filtre')
                        fitrer(filtre)
                    } )
            \$('#categorie').on('focus', function() {
                \$('#exampleModal').modal()
            })
            \$('form').on('submit', function(\$e) {
                    \$e.preventDefault()
                     \$('#exampleModal').modal('hide')
                  let choices = \$(\"form[name='choices']\").serializeArray()
                  let choix = choices.map(choices=> {
                      return choices.value
                  })
                  let puces = ''
                  console.log('choix ', choix.join(', '))
                if(choix.length >= 1) {
                    \$('#categorie').val(choix.join(', '))
                } else {
                    \$('#categorie').val('')
                }
            })
           
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace/bibliotheque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 351,  461 => 350,  398 => 295,  327 => 226,  307 => 209,  286 => 191,  266 => 174,  243 => 153,  216 => 129,  206 => 128,  73 => 4,  63 => 3,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'espace/base.html.twig' %}
{% set title = 'LA bibliothèque' %}
    {% block stylesheets %}
        <style>
            .h-title h1 {
                font-size: 30px;
                font-weight: 600;
                margin: 0;
            }
            .h-title h2 {
                font-size: 20px;
                margin: 0;
                font-weight: 600;
            }
            .fa-search {
                position: absolute;
                top: 9px;
                right: 12px;
                margin: auto;
                font-size: 20px;
                color: #ddd;
            }
            .texte {
                background: #ddd;
                padding: 10px;
            }
            ul {
                list-style: none;
                display: flex;
                padding-left: 14px;
            }
           .list-it ul li {
                display: inline;
                text-align: center
            }
             .list-it ul li  div {
                width: 38px;
                height: 38px;
                border-radius: 50%;
                background: #e0e0e0;
                display: flex
            }
            .list-it ul li:not(.first) {
                margin-left: 3em;
            }
            .list-it ul li div svg {
                margin: auto
            }
            .card {
                width: 250px;
                background: #fff;
                padding: 0;
            }
            .isotop {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                margin-top: 51px;
            }
            .isotop .card-item {
                margin-right: 3%;
                margin-bottom: 15px
            }
            .caption {
                 border-radius: 5px 5px 0 0;
                 height: 159px;
                 overflow: hidden
           }
            .card {
                box-shadow: 3px -6px 6px 5px rgb(208 186 186 / 8%), 0 4px 8px 0 rgb(199 199 199 / 18%);
                margin-bottom: 1rem
            }
           
            .foot-card span {
                font-size: 12px;
            }
            .card div:last-child {
                padding: 6px;
            }
            .foot-card {
               
            }
             .card em {
                font-size: 11px
             }
             .list-it ul li div:hover {
                    background: #cccaca;
                    transition: all .3s;
                    cursor: pointer
             }
             .caption img {
                 width: 100%
             }
             .foot-card img {
                 width: 15px
             }
             .card h1 {
                 font-size: 15px
             }
             .card h6 {
                 font-size: 18px
             }
             .card p {
                 font-size: 13px
             }
             .foot-card {
                border-radius: 5px;
                color: #3a3030;
                padding-left: 0 !important;
                transition: all ease .8s
             }
             .foot-card img {
                margin-left: 11px;
             }
             .modal-content {
                 background: #fff;
             }
             .fa-download {
                 color: #676767;
                 transition: all ease .8s
             }
             .fa-download:hover {
                 color: #000;
                 cursor: pointer;
             }
        </style>
    {% endblock %}
{% block body %}
    {{ render(path(\"header\")) }}
    <div class=\"container\">
        <div class=\"row my-4\">
            <div class=\"col-md-12 mt-3 h-title\">
                <h1> Bibliothèque </h1>
                <h2 class=\"mt-3\">Filtre</h2>
            </div>
            <div class=\"col-md-12 mt-3\">
                <div class=\"alert alert-warning\" role=\"alert\">
                        Vous pouvez choisir de fitrer les documents en fonction du type de fichier que vous recherchés (image, site web, pdf, docx...)
                </div>
            </div>
             <div class=\"col-md-12 mt-3\">
                    <form class=\"d-flex\">
                        <div class=\"form-group blk-rch position-relative\">
                            <input type=\"search\" class=\"form-control position-relative\" id=\"recherche\" aria-describedby=\"searchlHelp\" placeholder=\"Entrer un mot clé ou titre...\">
                        </div>
                        <div class=\"form-group ml-5\">
                            <input class=\"form-control\" id=\"categorie\" aria-describedby=\"cateorieHelp\" placeholder=\"selectionnez un type de document...\" >
                        </div>
                    </form>
             </div>

             {# items biblio #}
                    <div class=\"isotop\" data-isotope='{ \"itemSelector\": \".card-item\" }'>
                            <div class=\"card-item premier image\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"https://images.pexels.com/photos/2079246/pexels-photo-2079246.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                        </div>
                                        <div class=\"m-1\">
                                            <h1>[Type de document]</h1>
                                            <h6> document #K8KDHJ  </h6>
                                            <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                           
                                            <div class=\"foot-card\">
                                                
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"{{ asset('build/images/web/ciyzens-folder.jpg') }}\">
                                        </div>
                                        <div  class=\"m-1\">
                                            <h1>[Type de document]</h1>
                                            <h6> document #K8KDHJ  </h6>
                                            <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                           
                                            <div class=\"foot-card\">
                                                
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item video\">
                               <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"{{ asset('build/images/web/video.jpg') }}\">
                                    </div>
                                    <div  class=\"m-1\">
                                        <h1>[Type de document]</h1>
                                        <h6> document #K8KDHJ  </h6>
                                        <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                       
                                        <div class=\"foot-card\">
                                           
                                            <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                       <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"{{ asset('build/images/web/zip-format.png') }}\">
                                       </div>
                                       <div  class=\"m-1\">
                                            <h1>[Type de document]</h1>                                            
                                            <h6> document #K8KDHJ  </h6>
                                            <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                           
                                            <div class=\"foot-card\">
                                                
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                        <div class=\"caption d-flex justify-content-center align-items-center\">
                                            <img src=\"{{ asset('build/images/web/files.jpg') }}\">
                                        </div>
                                        <div  class=\"m-1\">
                                            <h1>[Type de document]</h1>
                                            <h6> document #K8KDHJ  </h6>
                                            <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                           
                                            <div class=\"foot-card\">
                                               
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class=\"card-item web\">
                             <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/276724/pexels-photo-276724.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                    <div  class=\"m-1\">
                                        <h1>[Type de document]</h1>
                                        <h6> document #K8KDHJ  </h6>
                                        <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                       
                                        <div class=\"foot-card\">
                                               
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class=\"card-item document\">
                                <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260\">
                                    </div>
                                    <div  class=\"m-1\">
                                        <h1>[Type de document]</h1>
                                        <h6> document #K8KDHJ  </h6>
                                        <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                       
                                         <div class=\"foot-card\">
                                           
                                            <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                        </div>
                                    </div>  
                                </div>
                                
                            </div>
                            <div class=\"card-item image\">
                               <div class=\"card\">
                                    <div class=\"caption d-flex justify-content-center align-items-center\">
                                        <img src=\"https://images.pexels.com/photos/279719/pexels-photo-279719.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260\">
                                    </div>
                                    <div  class=\"m-1\">
                                        <h1>[Type de document]</h1>
                                        <h6> document #K8KDHJ  </h6>
                                        <p> Ajouté le 20 Juillet 2020 | <em>250k</em></p>
                                       
                                        <div class=\"foot-card\">
                                               
                                                <i class=\"fas fa-download\" title=\"Télécharger\"></i>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                </div>
             {#  #}
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
    </div>
    <!-- Modal -->
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"   aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered \" role=\"document\">
                <div class=\"modal-content check-categorie p-4 d-grid d-flex align-content-between flex-wrap\">
                    <form name=\"choices\">
                        <div>
                            <h2 class=\"mb-4\" style=\"font-size: 19px;\"> Selectionnez le type de document </h2>
                            <div class=\"form-check mb-2\">
                                <input name=\"communique\" class=\"form-check-input position-static\" type=\"checkbox\" id=\"communique\" value=\"Communiqué de press\" aria-label=\"...\">
                                <label class=\"form-check-label\" for=\"communique\"> Communiqué de press </label>
                            </div>
                            <div class=\"form-check  my-2\">
                                <input name=\"video\" class=\"form-check-input position-static\" type=\"checkbox\" id=\"video\" value=\"Vidéo\" aria-label=\"...\">
                                <label class=\"form-check-label\" for=\"video\"> Vidéo </label>
                            </div>
                            <div class=\"form-check  my-2\">
                                <input name=\"document\" class=\"form-check-input position-static\" type=\"checkbox\" id=\"document\" value=\"documents numériques\" aria-label=\"...\">
                                <label class=\"form-check-label\" for=\"document\"> documents numériques </label>
                            </div>
                        </div>
                        <div>
                            <button type=\"submit\" class=\"btn btn-primary btnSubmit p-8 my-2 validate\">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
{% endblock %}

{% block javascripts %}
    <script>
        \$(function(){
          \$('.blk-rch').append(\"<i class='fas fa-search'></i>\")
            fitrer = (item)=> {
                        \$('.isotop').isotope({ filter: '.'+item })
                    }
                    \$('.card').css('cursor', 'pointer')
                    \$('.filter').on('click', function() {
                        var filtre = \$(this).data('filtre')
                        fitrer(filtre)
                    } )
            \$('#categorie').on('focus', function() {
                \$('#exampleModal').modal()
            })
            \$('form').on('submit', function(\$e) {
                    \$e.preventDefault()
                     \$('#exampleModal').modal('hide')
                  let choices = \$(\"form[name='choices']\").serializeArray()
                  let choix = choices.map(choices=> {
                      return choices.value
                  })
                  let puces = ''
                  console.log('choix ', choix.join(', '))
                if(choix.length >= 1) {
                    \$('#categorie').val(choix.join(', '))
                } else {
                    \$('#categorie').val('')
                }
            })
           
        })
    </script>
{% endblock %}", "espace/bibliotheque.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/bibliotheque.html.twig");
    }
}
