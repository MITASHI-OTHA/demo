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

/* espace/base.html.twig */
class __TwigTemplate_8be1be13a89b5c057c73d223658a0c4be0cc010be8f9e115b38b113ba0c9de8a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/static/shortcut_icon.svg"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\" />
        <script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css\"/> 
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slider.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flickity.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/classic.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/classic.time.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/default.date.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick-theme.css"), "html", null, true);
        echo "\">
          <!--[if IE]>
              <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        <!-- Encore CSS -->
        ";
        // line 22
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        <!-- Google font -->
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
        
        <!-- Encore JS -->
        ";
        // line 28
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        <style>
          body 
          {
              font-family: 'Montserrat' !important, 'sans-serif';
          }
          a:hover {
            text-decoration: none
          }
          .masq {
            display: none !important;
          }
          .clone {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            background: black;
            z-index: 11;
            transition: all ease-in .8s
          }
        </style>
        <title>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "</title>
    </head>
    <body>
        ";
        // line 54
        echo "        <nav class=\"navbar navbar-expand-lg navbar-light bg-light d-flex menus\">
            <div class=\"d-flex justify-content-between w-100\">
                      <div class=\"collapse navbar-collapse justify-content-start\" id=\"navbarNav\">
                          <a class=\"navbar-brand\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" style=\"font-weight: 600;color: #54c0a7 !important\"> Welcooom Office </a>
                      </div>
                <div>
                    <ul class=\"nav justify-content-end\">
                        <li class=\"nav-item\">
                          <i class=\"ico3-home\"></i>
                            <a class=\"nav-link\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace");
        echo "\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                        <i class=\"ico2-group\"></i>
                            <a class=\"nav-link\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("groupe");
        echo "\">Le groupe</a>
                        </li>
                        <li class=\"nav-item\">
                          <i class=\"ico3-calendar\">
                            
                          </i>
                            <a class=\"nav-link\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendrier");
        echo "\"> Calendrier</a>
                        </li>
                        ";
        // line 75
        $context["link"] = "login";
        // line 76
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)) {
            // line 77
            echo "                            ";
            $context["link"] = "candidature";
            // line 78
            echo "                              ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "getTypeAccount", [], "any", false, false, false, 78) != "Habitant")) {
                // line 79
                echo "                                  ";
                $context["link"] = "annonces";
                // line 80
                echo "                              ";
            }
            // line 81
            echo "                      ";
        }
        // line 82
        echo "                 
                        <li class=\"nav-item\">
                            <i class=\"ico3-book\">
                            </i>
                            <a class=\"nav-link\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bibliotheques");
        echo "\"> Bibliothèque </a>
                        </li>
                        <li class=\"nav-item\">
                            <i class=\"ico3-forum\">
                            </i>
                            <a class=\"nav-link\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\"> Forum </a>
                        </li>
                        <li class=\"nav-item\">
                            <i class=\"icon-message_vector_Plan-de-travail-1\">
                            </i>
                            <a class=\"nav-link\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_messagerie");
        echo "\"> Messageries </a>
                        </li>
                      ";
        // line 99
        echo "                      ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99)) {
            // line 100
            echo "                      ";
            // line 101
            echo "                     
                        <li class=\"nav-item loger\" data-type=";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "getTypeAccount", [], "any", false, false, false, 102), "html", null, true);
            echo ">
                              <i class=\"icon-user\"></i>
                              <a class=\"nav-link\" href=\"#\"> ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "username", [], "any", false, false, false, 104), "html", null, true);
            echo " </a>
                          </li>
                        ";
        } else {
            // line 107
            echo "                          <li class=\"nav-item login\">
                              <i class=\"icon-user\"></i>
                              <a class=\"nav-link\" href=\"#\">Se connecter</a>
                          </li>
                        ";
        }
        // line 112
        echo "                        ";
        // line 113
        echo "                    </ul>
                </div>

            </div>
        </nav>
       ";
        // line 119
        echo "           <div class=\"screen-mobil justify-content-center align-items-center\" style=\"display: none\">
              <p class=\"text-centeres text-center\" style=\"color: #217ff6;font-size: 25px;font-weight: 600;padding-bottom: 2rem;\"> App Welcooom en construction  </p>
              <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/gsf-illustration2.svg"), "html", null, true);
        echo "\">
              <p class=\"text-centeres mt-3 mb-3 text-center\" style=\"color: #fff\"> Nous travaillons actuelement à adapter le site sur vos supports mobiles. Pour le moment consultez le site sur votre ordinateur.  </p>
          </div>

       ";
        // line 127
        echo "
        <div class=\"container position-relative\">
            ";
        // line 130
        echo "            ";
        if (((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 130, $this->source); })()) == "espace")) {
            // line 131
            echo "                <div class=\"popin-alert-group animate__animated animate__infinite\">
                      <div class=\"position-relative\">
                          <i class=\"fas fa-times position-absolute\"></i>
                          <p>
                            Felicitation! Vous faîtes desormais parti de l'espace collaboratif <b>Oasis la Geriais</b>.
                            Cliquer sur ce onglet pour visiter votre espace
                          </p>
                      </div>
                  </div>
            ";
        }
        // line 141
        echo "              

            ";
        // line 144
        echo "             <div class=\"menus-user\">
                  <ul>
                      <li><a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("me");
        echo "\"> Mon profil </a></li>
                      <li><a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\"> Se deconnecter </a></li>
                  </ul>
            </div>
            ";
        // line 150
        if (!twig_in_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 150, $this->source); })()), [0 => "login"])) {
            // line 151
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
                // line 152
                echo "                    <div class=\"app__flashes__success\">
\t\t\t\t\t\t";
                // line 153
                echo $context["alerte"];
                echo "
\t\t\t\t\t\t    <div class=\"app__flashes__close\"></div>
                <br>
\t\t\t\t\t</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "                
                ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "flashes", [0 => "errors"], "method", false, false, false, 159));
            foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
                // line 160
                echo "                    <div class=\"app__flashes__error\">
\t\t\t\t\t\t";
                // line 161
                echo $context["alerte"];
                echo "
\t\t\t\t\t\t<div class=\"app__flashes__close\"></div>
            <br>
\t\t\t\t\t</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerte'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "            
            ";
        }
        // line 168
        echo "      </div>
      ";
        // line 170
        echo "          <div class=\"pop-up-connexion \">
               ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\HomeController::loginform"));
        echo "
          </div>
        ";
        // line 174
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 175
        echo "            
        <!-- Footer -->
<footer class=\"page-footer font-small unique-color-dark\">
  <div class=\"container text-center text-md-left\">
    <div class=\"row\" style=\"padding-top: 1rem !important;\">
      <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
        <h6 style=\"color: #53c0b5;\" class=\"text-uppercase font-weight-bold\">Welcooom</h6>
        <p>
            1<sup>er</sup> site d'annonces immobilières dédié aux projets d'habitat participatif
        </p>
      </div>
      <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">

    <!-- Liens -->
    <h6 class=\"text-uppercase font-weight-bold\"> À propos </h6>
       
            <p>
                <a href=\"#!\"> Qui sommes nous ?</a>
            </p>
             <p>
                <a href=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"> Nous contacter </a>
            </p>
           
      </div>
      <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
        <!-- Liens -->
    <h6 class=\"text-uppercase font-weight-bold\" style=\"white-space: nowrap;\"> Des questions ? </h6>
        
        <p>
          <a href=\"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"> FAQ </a>
        </p>
        <p>
          <a href=\"#!\"> Aide </a>
        </p>
    </div>
      <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
        <h6 class=\"text-uppercase font-weight-bold\">Contact</h6>
          <ul class=\"list-unstyled list-inline\">
            <li class=\"list-inline-item\">
              <a class=\"btn-floating btn-sm rgba-white-slight mx-1\">
                <i class=\"fab fa-facebook-f\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a class=\"btn-floating btn-sm rgba-white-slight mx-1\">
                <i class=\"fab fa-twitter\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a class=\"btn-floating btn-sm rgba-white-slight mx-1\">
                <i class=\"fab fa-linkedin-in\"></i>
              </a>
            </li>
         
          </ul>
        <p>
          Deux fois par semaine, des projets des conseils dans votre boite mail
        </p>
        <form class=\"input-group\">
          <input type=\"text\" class=\"form-control form-control-sm h-auto\" placeholder=\"votre email\"
            aria-label=\"Your email\" aria-describedby=\"basic-addon2\">
          <div class=\"input-group-append\" style=\"overflow: hidden\">
            <button class=\"btn btnSubmit btn-sm btn-outline-white my-0 btn-abn\" type=\"button\">Abonnez-vous</button>
          </div>
        </form>
        <br>
        <p>
          Vous pouvez vous désabonner à tout moment. On n'est pas susceptibles, promis. Pour en savoir plus sur notre politique de protection des données, <a href=\"#\">cliquez-ici</a>
        </p>
      </div>
    </div>
  </div>
  <!-- Copyright -->
  <div class=\"footer-copyright text-center py-3\">
    © ";
        // line 249
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Copyright: LesCityzens
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
        <script src=\" ";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-slider.min.js "), "html", null, true);
        echo "\"></script>
        <script src=\" ";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope2.pkgd.min.js "), "html", null, true);
        echo "\"></script>
        <script src=\" ";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/flickity.pkgd.min.js "), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/picker.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 262
        $this->displayBlock('javascripts', $context, $blocks);
        // line 263
        echo "         <script>
            \$(function() {
              //
              var header = \$(\"nav.menus\")
              var clone = header.before(header.clone().addClass(\"clone masq\"))
              \$(\".clone\").slideUp()
              \$(window).scroll(function(){
                console.log(\$(this).scrollTop())
                    if(\$(this).scrollTop() > 100) {
                      \$(\".clone\").slideDown().removeClass('masq')
                    } else {
                      \$(\".clone\").slideUp().addClass('masq')
                    }
              })
              //
              setTimeout(()=>{
                \$('.popin-alert-group').addClass('tada-alert').show()
              }, 2000)
                 \$('.popin-alert-group').on('mouseenter', function() {
                     \$(this).removeClass('tada-alert')
                 }).on('mouseleave', function() {
                     \$(this).addClass('tada-alert')
                 })
          \$('.popin-alert-group svg').click(()=> {
                 \$('.popin-alert-group').hide()
          })
              //Popin mobile
                let detect = function detectMob() {
                        const toMatch = [
                            /Android/i,
                            /webOS/i,
                            /iPhone/i,
                            /iPad/i,
                            /iPod/i,
                            /BlackBerry/i,
                            /Windows Phone/i
                        ];
                    
                        return toMatch.some((toMatchItem) => {
                            return navigator.userAgent.match(toMatchItem);
                        });
                    }
                    if(detect()) {
                        \$('.screen-mobil').addClass('popin')
                        \$('body, html').css('overflow-x', 'hidden')
                    }
              //
                var type = \$('.loger').data('type')
                  if(type && type != 'Habitant') {
                        \$('.nav.justify-content-end li:nth-of-type(1),.nav.justify-content-end li:nth-of-type(3)').remove()
                         \$('.mes-candidatures').text('Mes annonces')
                  }
                \$('.login').on('click', function() {
                  \$('.pop-up-connexion')
                  .addClass('user__actions__toggle')
                })
                \$('.closed').on('click', ()=> {
                  \$('.pop-up-connexion').removeClass('user__actions__toggle')
                } )
                \$('body').on('click', function() {
                     \$('.menus-user').css('display', 'none')
                })
                 \$('.menus-user, .loger').on('click', function(\$e) {
                   \$e.stopPropagation()
                 })
                \$('.loger').on('click', ()=> {
                    \$('.menus-user').is(':hidden')?\$('.menus-user').show():\$('.menus-user').hide()
                   
                })
            })
          </script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 174
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 262
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 262,  589 => 174,  571 => 23,  488 => 263,  486 => 262,  482 => 261,  478 => 260,  474 => 259,  470 => 258,  466 => 257,  462 => 256,  458 => 255,  454 => 254,  446 => 249,  398 => 204,  386 => 195,  364 => 175,  361 => 174,  356 => 171,  353 => 170,  350 => 168,  346 => 166,  335 => 161,  332 => 160,  328 => 159,  325 => 158,  314 => 153,  311 => 152,  306 => 151,  304 => 150,  298 => 147,  294 => 146,  290 => 144,  286 => 141,  274 => 131,  271 => 130,  267 => 127,  260 => 121,  256 => 119,  249 => 113,  247 => 112,  240 => 107,  234 => 104,  229 => 102,  226 => 101,  224 => 100,  221 => 99,  216 => 96,  208 => 91,  200 => 86,  194 => 82,  191 => 81,  188 => 80,  185 => 79,  182 => 78,  179 => 77,  176 => 76,  174 => 75,  169 => 73,  160 => 67,  153 => 63,  144 => 57,  139 => 54,  133 => 50,  108 => 28,  102 => 24,  100 => 23,  96 => 22,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"shortcut icon\" href=\"{{ asset('images/static/shortcut_icon.svg') }}\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\" />
        <script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\"></script>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css\"/> 
        <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/slider.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/flickity.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/classic.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/classic.time.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/default.date.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/slick-theme.css') }}\">
          <!--[if IE]>
              <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        <!-- Encore CSS -->
        {{ encore_entry_link_tags('app') }}
        {% block stylesheets %}{% endblock %}
        <!-- Google font -->
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
        
        <!-- Encore JS -->
        {{ encore_entry_script_tags('app') }}
        <style>
          body 
          {
              font-family: 'Montserrat' !important, 'sans-serif';
          }
          a:hover {
            text-decoration: none
          }
          .masq {
            display: none !important;
          }
          .clone {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            background: black;
            z-index: 11;
            transition: all ease-in .8s
          }
        </style>
        <title>{{ title }}</title>
    </head>
    <body>
        {# Barre de navigation #}
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light d-flex menus\">
            <div class=\"d-flex justify-content-between w-100\">
                      <div class=\"collapse navbar-collapse justify-content-start\" id=\"navbarNav\">
                          <a class=\"navbar-brand\" href=\"{{path('home')}}\" style=\"font-weight: 600;color: #54c0a7 !important\"> Welcooom Office </a>
                      </div>
                <div>
                    <ul class=\"nav justify-content-end\">
                        <li class=\"nav-item\">
                          <i class=\"ico3-home\"></i>
                            <a class=\"nav-link\" href=\"{{path('espace')}}\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                        <i class=\"ico2-group\"></i>
                            <a class=\"nav-link\" href=\"{{path('groupe')}}\">Le groupe</a>
                        </li>
                        <li class=\"nav-item\">
                          <i class=\"ico3-calendar\">
                            
                          </i>
                            <a class=\"nav-link\" href=\"{{ path('calendrier') }}\"> Calendrier</a>
                        </li>
                        {% set link = 'login' %}
                        {% if app.user %}
                            {% set link = 'candidature' %}
                              {% if  app.user.getTypeAccount != 'Habitant' %}
                                  {% set link = 'annonces' %}
                              {% endif %}
                      {% endif %}
                 
                        <li class=\"nav-item\">
                            <i class=\"ico3-book\">
                            </i>
                            <a class=\"nav-link\" href=\"{{path('bibliotheques')}}\"> Bibliothèque </a>
                        </li>
                        <li class=\"nav-item\">
                            <i class=\"ico3-forum\">
                            </i>
                            <a class=\"nav-link\" href=\"{{path('forum')}}\"> Forum </a>
                        </li>
                        <li class=\"nav-item\">
                            <i class=\"icon-message_vector_Plan-de-travail-1\">
                            </i>
                            <a class=\"nav-link\" href=\"{{ path('_messagerie') }}\"> Messageries </a>
                        </li>
                      {# faire une condition pour afficher le menus de connexion #}
                      {% if  app.user %}
                      {# Ce block c'est une fois le user connecté #}
                     
                        <li class=\"nav-item loger\" data-type={{ app.user.getTypeAccount }}>
                              <i class=\"icon-user\"></i>
                              <a class=\"nav-link\" href=\"#\"> {{app.user.username}} </a>
                          </li>
                        {% else %}
                          <li class=\"nav-item login\">
                              <i class=\"icon-user\"></i>
                              <a class=\"nav-link\" href=\"#\">Se connecter</a>
                          </li>
                        {% endif %}
                        {#  #}
                    </ul>
                </div>

            </div>
        </nav>
       {# popin mobile #}
           <div class=\"screen-mobil justify-content-center align-items-center\" style=\"display: none\">
              <p class=\"text-centeres text-center\" style=\"color: #217ff6;font-size: 25px;font-weight: 600;padding-bottom: 2rem;\"> App Welcooom en construction  </p>
              <img src=\"{{ asset('build/images/static/gsf-illustration2.svg') }}\">
              <p class=\"text-centeres mt-3 mb-3 text-center\" style=\"color: #fff\"> Nous travaillons actuelement à adapter le site sur vos supports mobiles. Pour le moment consultez le site sur votre ordinateur.  </p>
          </div>

       {#  #}
{# fin #}

        <div class=\"container position-relative\">
            {# Popin alert groupe #}
            {% if link == 'espace' %}
                <div class=\"popin-alert-group animate__animated animate__infinite\">
                      <div class=\"position-relative\">
                          <i class=\"fas fa-times position-absolute\"></i>
                          <p>
                            Felicitation! Vous faîtes desormais parti de l'espace collaboratif <b>Oasis la Geriais</b>.
                            Cliquer sur ce onglet pour visiter votre espace
                          </p>
                      </div>
                  </div>
            {% endif %}
              

            {# fin #}
             <div class=\"menus-user\">
                  <ul>
                      <li><a href=\"{{path('me')}}\"> Mon profil </a></li>
                      <li><a href=\"{{path('logout')}}\"> Se deconnecter </a></li>
                  </ul>
            </div>
            {% if title not in ['login'] %}
                {% for alerte in app.flashes('success') %}
                    <div class=\"app__flashes__success\">
\t\t\t\t\t\t{{ alerte | raw }}
\t\t\t\t\t\t    <div class=\"app__flashes__close\"></div>
                <br>
\t\t\t\t\t</div>
                {% endfor %}
                
                {% for alerte in app.flashes('errors') %}
                    <div class=\"app__flashes__error\">
\t\t\t\t\t\t{{ alerte | raw }}
\t\t\t\t\t\t<div class=\"app__flashes__close\"></div>
            <br>
\t\t\t\t\t</div>
                {% endfor %}
            
            {% endif %}
      </div>
      {# block de connexion #}
          <div class=\"pop-up-connexion \">
               {{ render(controller(\"App\\\\Controller\\\\HomeController::loginform\")) }}
          </div>
        {# fin #}
          {% block body %}{% endblock %}
            
        <!-- Footer -->
<footer class=\"page-footer font-small unique-color-dark\">
  <div class=\"container text-center text-md-left\">
    <div class=\"row\" style=\"padding-top: 1rem !important;\">
      <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
        <h6 style=\"color: #53c0b5;\" class=\"text-uppercase font-weight-bold\">Welcooom</h6>
        <p>
            1<sup>er</sup> site d'annonces immobilières dédié aux projets d'habitat participatif
        </p>
      </div>
      <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">

    <!-- Liens -->
    <h6 class=\"text-uppercase font-weight-bold\"> À propos </h6>
       
            <p>
                <a href=\"#!\"> Qui sommes nous ?</a>
            </p>
             <p>
                <a href=\"{{ path('contact') }}\"> Nous contacter </a>
            </p>
           
      </div>
      <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
        <!-- Liens -->
    <h6 class=\"text-uppercase font-weight-bold\" style=\"white-space: nowrap;\"> Des questions ? </h6>
        
        <p>
          <a href=\"{{path('contact')}}\"> FAQ </a>
        </p>
        <p>
          <a href=\"#!\"> Aide </a>
        </p>
    </div>
      <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
        <h6 class=\"text-uppercase font-weight-bold\">Contact</h6>
          <ul class=\"list-unstyled list-inline\">
            <li class=\"list-inline-item\">
              <a class=\"btn-floating btn-sm rgba-white-slight mx-1\">
                <i class=\"fab fa-facebook-f\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a class=\"btn-floating btn-sm rgba-white-slight mx-1\">
                <i class=\"fab fa-twitter\"></i>
              </a>
            </li>
            <li class=\"list-inline-item\">
              <a class=\"btn-floating btn-sm rgba-white-slight mx-1\">
                <i class=\"fab fa-linkedin-in\"></i>
              </a>
            </li>
         
          </ul>
        <p>
          Deux fois par semaine, des projets des conseils dans votre boite mail
        </p>
        <form class=\"input-group\">
          <input type=\"text\" class=\"form-control form-control-sm h-auto\" placeholder=\"votre email\"
            aria-label=\"Your email\" aria-describedby=\"basic-addon2\">
          <div class=\"input-group-append\" style=\"overflow: hidden\">
            <button class=\"btn btnSubmit btn-sm btn-outline-white my-0 btn-abn\" type=\"button\">Abonnez-vous</button>
          </div>
        </form>
        <br>
        <p>
          Vous pouvez vous désabonner à tout moment. On n'est pas susceptibles, promis. Pour en savoir plus sur notre politique de protection des données, <a href=\"#\">cliquez-ici</a>
        </p>
      </div>
    </div>
  </div>
  <!-- Copyright -->
  <div class=\"footer-copyright text-center py-3\">
    © {{  'now'|date('Y') }} Copyright: LesCityzens
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
        <script src=\" {{ asset('js/bootstrap-slider.min.js ') }}\"></script>
        <script src=\" {{ asset('js/isotope2.pkgd.min.js ') }}\"></script>
        <script src=\" {{ asset('js/flickity.pkgd.min.js ') }}\"></script>
        <script src=\"{{ asset('js/picker.js') }}\"></script>
        <script src=\"{{ asset('js/picker.time.js') }}\"></script>
        <script src=\"{{ asset('js/picker.date.js') }}\"></script>
        <script src=\"{{ asset('js/wow.js') }}\"></script>
         <script src=\"{{ asset('js/slick.js') }}\"></script>
        {% block javascripts %}{% endblock %}
         <script>
            \$(function() {
              //
              var header = \$(\"nav.menus\")
              var clone = header.before(header.clone().addClass(\"clone masq\"))
              \$(\".clone\").slideUp()
              \$(window).scroll(function(){
                console.log(\$(this).scrollTop())
                    if(\$(this).scrollTop() > 100) {
                      \$(\".clone\").slideDown().removeClass('masq')
                    } else {
                      \$(\".clone\").slideUp().addClass('masq')
                    }
              })
              //
              setTimeout(()=>{
                \$('.popin-alert-group').addClass('tada-alert').show()
              }, 2000)
                 \$('.popin-alert-group').on('mouseenter', function() {
                     \$(this).removeClass('tada-alert')
                 }).on('mouseleave', function() {
                     \$(this).addClass('tada-alert')
                 })
          \$('.popin-alert-group svg').click(()=> {
                 \$('.popin-alert-group').hide()
          })
              //Popin mobile
                let detect = function detectMob() {
                        const toMatch = [
                            /Android/i,
                            /webOS/i,
                            /iPhone/i,
                            /iPad/i,
                            /iPod/i,
                            /BlackBerry/i,
                            /Windows Phone/i
                        ];
                    
                        return toMatch.some((toMatchItem) => {
                            return navigator.userAgent.match(toMatchItem);
                        });
                    }
                    if(detect()) {
                        \$('.screen-mobil').addClass('popin')
                        \$('body, html').css('overflow-x', 'hidden')
                    }
              //
                var type = \$('.loger').data('type')
                  if(type && type != 'Habitant') {
                        \$('.nav.justify-content-end li:nth-of-type(1),.nav.justify-content-end li:nth-of-type(3)').remove()
                         \$('.mes-candidatures').text('Mes annonces')
                  }
                \$('.login').on('click', function() {
                  \$('.pop-up-connexion')
                  .addClass('user__actions__toggle')
                })
                \$('.closed').on('click', ()=> {
                  \$('.pop-up-connexion').removeClass('user__actions__toggle')
                } )
                \$('body').on('click', function() {
                     \$('.menus-user').css('display', 'none')
                })
                 \$('.menus-user, .loger').on('click', function(\$e) {
                   \$e.stopPropagation()
                 })
                \$('.loger').on('click', ()=> {
                    \$('.menus-user').is(':hidden')?\$('.menus-user').show():\$('.menus-user').hide()
                   
                })
            })
          </script>
    </body>
</html>
", "espace/base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/espace/base.html.twig");
    }
}
