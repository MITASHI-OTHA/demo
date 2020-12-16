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

/* base.html.twig */
class __TwigTemplate_304907fbb7f299b9b1463ac6f14351a8d63a3a5409fb7b00fe3dd46871da3b5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slider.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick-theme.css"), "html", null, true);
        echo "\">
        <!-- Encore CSS -->
        ";
        // line 14
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <!-- Google font -->
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
        
        <!-- Encore JS -->
        ";
        // line 20
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        <style>
          body 
          {
              font-family: 'Montserrat' !important, 'sans-serif';
          }
        </style>
        <title>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</title>
    </head>
    <body>
        ";
        // line 31
        echo "        <nav class=\"navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center align-items-center\">
            <div class=\"d-flex justify-content-between w-100\">
                      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                          <a class=\"navbar-brand\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" style=\"font-weight: 600;color: #54c0a7 !important\"> Welcooom </a>

                          <ul class=\"navbar-nav\">
                              <li class=\"nav-item active\">
                                  <a class=\"nav-link\" href=\"#\"><i class=\"icon-search_vector\"></i> <span style=\"font-size: 14px;\"> Rechercher </span> <span class=\"sr-only\">(current)</span> </a>
                              </li>
                              <li class=\"nav-item\">
                                  <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_add");
        echo "\" class=\"btn btnSubmit d-flex\" style=\"color: #fff !important;white-space: pre;\"> <i class=\"far fa-plus-square\" style=\"font-size: 22px; margin-right: 1rem;color: #fff !important\"></i> <font> Déposer une annonce</font></a>
                              </li>
                             
                          </ul>
                      </div>
                <div>
                    <ul class=\"nav justify-content-end\">
                        <li class=\"nav-item\">
                          <i class=\"icon-heart\"></i>
                            <a class=\"nav-link\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris");
        echo "\">Favoris</a>
                        </li>
                        <li class=\"nav-item\">
                        <i class=\"icon-message_vector_Plan-de-travail-1\"></i>
                            <a class=\"nav-link\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messagerie");
        echo "\">Messages</a>
                        </li>
                        <li class=\"nav-item\">
                          <i class=\"icon-simulation_vector\">
                            
                          </i>
                            <a class=\"nav-link\" href=\"#\">simulateur</a>
                        </li>
                        ";
        // line 62
        $context["link"] = "login";
        // line 63
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "                            ";
            $context["link"] = "candidature";
            // line 65
            echo "                              ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "getTypeAccount", [], "any", false, false, false, 65) != "Habitant")) {
                // line 66
                echo "                                  ";
                $context["link"] = "annonces";
                // line 67
                echo "                              ";
            }
            // line 68
            echo "                      ";
        }
        // line 69
        echo "                      ";
        // line 70
        echo "                       ";
        $context["routes"] = [0 => "Mes candidatures", 1 => "lien", 2 => "icon-candidate_vector"];
        // line 71
        echo "                      ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "attributes", [], "any", false, false, false, 71), "get", [0 => "_route_params"], "method", false, false, false, 71) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "attributes", [], "any", false, false, false, 71), "get", [0 => "_route"], "method", false, false, false, 71) == "profil"))) {
            // line 72
            echo "                            ";
            if ((false != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "attributes", [], "any", false, false, false, 72), "get", [0 => "_route_params"], "method", false, false, false, 72), "state", [], "array", false, false, false, 72))) {
                // line 73
                echo "                                  ";
                $context["routes"] = [0 => "Mon groupe", 1 => "espace", 2 => "ico2-group"];
                // line 74
                echo "                                   ";
                $context["link"] = twig_get_attribute($this->env, $this->source, (isset($context["routes"]) || array_key_exists("routes", $context) ? $context["routes"] : (function () { throw new RuntimeError('Variable "routes" does not exist.', 74, $this->source); })()), 1, [], "array", false, false, false, 74);
                // line 75
                echo "                            ";
            }
            // line 76
            echo "                      ";
        }
        // line 77
        echo "                      ";
        // line 78
        echo "
                      ";
        // line 80
        echo "                          ";
        // line 85
        echo "
                      ";
        // line 87
        echo "                      <li class=\"nav-item\">
                            <i class=\"";
        // line 88
        echo "icon-candidate_vector";
        echo "\">
                            </i>
                            <a class=\"nav-link mes-candidatures\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature");
        echo "\">Mes candidatures</a>
                        </li>
                      
                        <li class=\"nav-item\">
                            <i class=\"ico2-group\">
                            </i>
                            <a class=\"nav-link mes-candidatures\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace");
        echo "\">Office</a>
                        </li>
                        ";
        // line 99
        echo "
                      ";
        // line 101
        echo "                      ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101)) {
            // line 102
            echo "                      ";
            // line 103
            echo "                     
                        <li class=\"nav-item loger\" data-type=";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "getTypeAccount", [], "any", false, false, false, 104), "html", null, true);
            echo ">
                              <i class=\"icon-user\"></i>
                              <a class=\"nav-link\" href=\"#\"> ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "username", [], "any", false, false, false, 106), "html", null, true);
            echo " </a>
                          </li>
                        ";
        } else {
            // line 109
            echo "                          <li class=\"nav-item login\">
                              <i class=\"icon-user\"></i>
                              <a class=\"nav-link\" href=\"#\">Se connecter</a>
                          </li>
                        ";
        }
        // line 114
        echo "                        ";
        // line 115
        echo "                    </ul>
                </div>

            </div>
        </nav>
       ";
        // line 121
        echo "           <div class=\"screen-mobil justify-content-center align-items-center\" style=\"display: none\">
              <p class=\"text-centeres text-center\" style=\"color: #217ff6;font-size: 25px;font-weight: 600;padding-bottom: 2rem;\"> App Welcooom en construction  </p>
              <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/gsf-illustration2.svg"), "html", null, true);
        echo "\">
              <p class=\"text-centeres mt-3 mb-3 text-center\" style=\"color: #fff\"> Nous travaillons actuelement à adapter le site sur vos supports mobiles. Pour le moment consultez le site sur votre ordinateur.  </p>
          </div>

       ";
        // line 129
        echo "
        <div class=\"container position-relative\">
            ";
        // line 132
        echo "            ";
        if (((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 132, $this->source); })()) == "espace")) {
            // line 133
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
        // line 143
        echo "              

            ";
        // line 146
        echo "             <div class=\"menus-user\">
                  <ul>
                      <li><a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
        echo "\"> Mon profil </a></li>
                      <li><a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\"> Se deconnecter </a></li>
                  </ul>
            </div>
            ";
        // line 152
        if (!twig_in_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 152, $this->source); })()), [0 => "login"])) {
            // line 153
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 153));
            foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
                // line 154
                echo "                    <div class=\"app__flashes__success\">
\t\t\t\t\t\t";
                // line 155
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
            // line 160
            echo "                
                ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "flashes", [0 => "errors"], "method", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
                // line 162
                echo "                    <div class=\"app__flashes__error\">
\t\t\t\t\t\t";
                // line 163
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
            // line 168
            echo "            
            ";
        }
        // line 170
        echo "      </div>
      ";
        // line 172
        echo "          <div class=\"pop-up-connexion \">
            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loginform"));
        echo "
          </div>
        ";
        // line 176
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 177
        echo "            
        <!-- Footer -->
<footer class=\"page-footer font-small unique-color-dark\">
  <div class=\"container text-center text-md-left mt-5\">
    <div class=\"row mt-3\" style=\"padding-top: 1rem !important;\">
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
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"> Nous contacter </a>
            </p>
           
      </div>
      <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
        <!-- Liens -->
    <h6 class=\"text-uppercase font-weight-bold\" style=\"white-space: nowrap;\"> Des questions ? </h6>
        
        <p>
          <a href=\"";
        // line 206
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
        // line 251
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Copyright: LesCityzens
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
        <script src=\" ";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-slider.min.js "), "html", null, true);
        echo "\"></script>
        <script src=\" ";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope2.pkgd.min.js "), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 259
        $this->displayBlock('javascripts', $context, $blocks);
        // line 260
        echo "         <script>
            \$(function() {
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

    // line 15
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

    // line 176
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

    // line 259
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
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 259,  560 => 176,  542 => 15,  471 => 260,  469 => 259,  465 => 258,  461 => 257,  457 => 256,  449 => 251,  401 => 206,  389 => 197,  367 => 177,  364 => 176,  359 => 173,  356 => 172,  353 => 170,  349 => 168,  338 => 163,  335 => 162,  331 => 161,  328 => 160,  317 => 155,  314 => 154,  309 => 153,  307 => 152,  301 => 149,  297 => 148,  293 => 146,  289 => 143,  277 => 133,  274 => 132,  270 => 129,  263 => 123,  259 => 121,  252 => 115,  250 => 114,  243 => 109,  237 => 106,  232 => 104,  229 => 103,  227 => 102,  224 => 101,  221 => 99,  216 => 96,  207 => 90,  202 => 88,  199 => 87,  196 => 85,  194 => 80,  191 => 78,  189 => 77,  186 => 76,  183 => 75,  180 => 74,  177 => 73,  174 => 72,  171 => 71,  168 => 70,  166 => 69,  163 => 68,  160 => 67,  157 => 66,  154 => 65,  151 => 64,  148 => 63,  146 => 62,  135 => 54,  128 => 50,  116 => 41,  106 => 34,  101 => 31,  95 => 27,  85 => 20,  79 => 16,  77 => 15,  73 => 14,  68 => 12,  64 => 11,  60 => 10,  53 => 6,  46 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('css/slider.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/slick-theme.css') }}\">
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
        </style>
        <title>{{ title }}</title>
    </head>
    <body>
        {# Barre de navigation #}
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center align-items-center\">
            <div class=\"d-flex justify-content-between w-100\">
                      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                          <a class=\"navbar-brand\" href=\"{{path('home')}}\" style=\"font-weight: 600;color: #54c0a7 !important\"> Welcooom </a>

                          <ul class=\"navbar-nav\">
                              <li class=\"nav-item active\">
                                  <a class=\"nav-link\" href=\"#\"><i class=\"icon-search_vector\"></i> <span style=\"font-size: 14px;\"> Rechercher </span> <span class=\"sr-only\">(current)</span> </a>
                              </li>
                              <li class=\"nav-item\">
                                  <a href=\"{{ path('ads_add') }}\" class=\"btn btnSubmit d-flex\" style=\"color: #fff !important;white-space: pre;\"> <i class=\"far fa-plus-square\" style=\"font-size: 22px; margin-right: 1rem;color: #fff !important\"></i> <font> Déposer une annonce</font></a>
                              </li>
                             
                          </ul>
                      </div>
                <div>
                    <ul class=\"nav justify-content-end\">
                        <li class=\"nav-item\">
                          <i class=\"icon-heart\"></i>
                            <a class=\"nav-link\" href=\"{{path('favoris')}}\">Favoris</a>
                        </li>
                        <li class=\"nav-item\">
                        <i class=\"icon-message_vector_Plan-de-travail-1\"></i>
                            <a class=\"nav-link\" href=\"{{path('messagerie')}}\">Messages</a>
                        </li>
                        <li class=\"nav-item\">
                          <i class=\"icon-simulation_vector\">
                            
                          </i>
                            <a class=\"nav-link\" href=\"#\">simulateur</a>
                        </li>
                        {% set link = 'login' %}
                        {% if app.user %}
                            {% set link = 'candidature' %}
                              {% if  app.user.getTypeAccount != 'Habitant' %}
                                  {% set link = 'annonces' %}
                              {% endif %}
                      {% endif %}
                      {# 1. Cette condition c'est pour afficher l'onglet des candidatures/Welcoom office une fois integré dans un projet #}
                       {% set routes = [\"Mes candidatures\", 'lien', \"icon-candidate_vector\"] %}
                      {% if app.request.attributes.get('_route_params') and app.request.attributes.get('_route')== 'profil' %}
                            {% if false != app.request.attributes.get('_route_params')[\"state\"] %}
                                  {% set routes = [\"Mon groupe\", 'espace', \"ico2-group\"] %}
                                   {% set link = routes[1] %}
                            {% endif %}
                      {% endif %}
                      {# fin #}

                      {# 2. Ceci s'applique à la condition au dessus ===> Decommenter ceci une fois en prod #}
                          {# <li class=\"nav-item\">
                            <i class=\"{{routes[2]}}\">
                            </i>
                            <a class=\"nav-link mes-candidatures\" href=\"{{path(link)}}\">{{routes[0]}}</a>
                        </li> #}

                      {# supprimer ceci une fois en prod (ceci est pour la démo) #}
                      <li class=\"nav-item\">
                            <i class=\"{{'icon-candidate_vector'}}\">
                            </i>
                            <a class=\"nav-link mes-candidatures\" href=\"{{path('candidature')}}\">Mes candidatures</a>
                        </li>
                      
                        <li class=\"nav-item\">
                            <i class=\"ico2-group\">
                            </i>
                            <a class=\"nav-link mes-candidatures\" href=\"{{path('espace')}}\">Office</a>
                        </li>
                        {# fin #}

                      {# Condition pour afficher le menus de connexion #}
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
                        {# fin #}
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
            {# Popin alert groupe (alerte espace colabo. qui s'affiche une fois intégré dans un projet) #}
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
                      <li><a href=\"{{path('profil')}}\"> Mon profil </a></li>
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
            {{ render(path(\"loginform\")) }}
          </div>
        {# fin #}
          {% block body %}{% endblock %}
            
        <!-- Footer -->
<footer class=\"page-footer font-small unique-color-dark\">
  <div class=\"container text-center text-md-left mt-5\">
    <div class=\"row mt-3\" style=\"padding-top: 1rem !important;\">
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
        <script src=\"{{ asset('js/slick.js') }}\"></script>
        {% block javascripts %}{% endblock %}
         <script>
            \$(function() {
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
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/base.html.twig");
    }
}
