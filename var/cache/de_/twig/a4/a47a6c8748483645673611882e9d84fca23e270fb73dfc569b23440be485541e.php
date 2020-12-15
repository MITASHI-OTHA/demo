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

/* annonces/index.html.twig */
class __TwigTemplate_5cca54a9ce32707ac7f6ab17d9c2681afe00b695cd00355cb78bce3d5ff19e82 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonces/index.html.twig"));

        // line 3
        $context["title"] = "profil";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonces/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    h1 {
        position: relative;
        font-weight: 600;
        font-size: 30px;
    }
    h1:not(.modal-title):after {
        position: absolute;
        content: '';
        height: 5px;
        width: 46px;
        background-color: #54c0a7;
        bottom: -4px;
        left: 0;
    }
    .container section:first-child {
        margin-top: 5%
    }
    .card {
        width: 100%;
        padding: 11px;
        padding-bottom: 51px;
    }
    .card-caption {
        border-radius: 5px;
        overflow: hidden
    }
    .col-detail-annonce {
        position: relative
    }
    .col-detail-annonce .fa-trash {
        position: absolute;
        right: 0;
        top: 0;
        margin-right: 34px;
        color: #828282;
    }
    .adresse {
        margin-top: 16px;
        font-size: 13px;
    }
    .col-detail-annonce ul {
        list-style: none
    }
    .col-detail-annonce ul li {
        display: inline
    }
    .col-detail-annonce ul li:nth-of-type(2) {
        margin-left: 7px
    }
    .col-detail-annonce ul li:nth-of-type(3)  {
        margin-left: 7px
    }
    .col-detail-annonce ul>li>img {
        width: 20px
    }
    .card ul li:nth-of-type(2) {
    font-size: initial;
    }
    .card button {
        position: absolute;
        bottom: 0;
        right: 0;
        margin: 29px;
    }
    .card:hover {
        cursor: default
    }
   
    .modal-header {
        border-bottom: none
    }
    .modal-footer {
            border-top: none;
    }
    h3 {
        font-size: 20px;
    }
    .subtitle {
        font-size: 16px;
    }
    .p-b-20 {
        padding-bottom: 20px
    }
    .btn-light.disabled, .btn-light:disabled{
            color: #e4e4e4 !important
    }
    .ml-30 {
        margin-left: 30px !important;
        color: #424242;
        font-size: 22px;
        cursor: pointer;
    }
    .mt-3 {
        margin-top: 3px !important
    }
    .part-edit {
        position: relative;
        overflow: hidden;
        cursor: pointer;
        margin-top: -2px !important;
    }
    .part-edit:after {
        content: 'Modifier';
        position: absolute;
        width: 70px;
        background: #E7EDF3;
        height: 20px;
        font-size: 13px;
        margin: auto;
        top: 18%;
        padding-left: 6px;
        border-radius: 0 13px 13px 0;
        overflow: hidden;
        left: 19px;
        transition: width ease .15s
    }
    .card-caption {
        height: 159.5px;
    }
    .card a {
                color: rgb(55, 57, 66);
                text-decoration: none
            }
</style>
        <div class=\"container\">
            <section>
                <h1> Mes annonces </h1>
                <br>
                <h3 class=\"subtitle p-b-20\" style=\"color: #54c0a7\"> Active(s) </h3>
                <div class=\"card\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div>
                                <div class=\"card-caption\">
                                    <img class=\"w-100 img-fluid rounded\" src=\"https://images.pexels.com/photos/212185/pexels-photo-212185.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')\">
                                </div>
                            </div>
                            
                        </div>
                        <div class=\"col-md-9 col-detail-annonce\"  style=\"padding-bottom: 32px\">
                                <div style=\"display: flex\">
                                    <div style=\"display: grid\">
                                        <a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projet", ["id" => "1"]);
        echo "\"><h3> Ecolieu du moulin de Brisé </h3></a>
                                        <span> publié le 15 Juillet 2020 </span>
                                    </div>
                                    
                                        <span class=\"m-auto ml-30 part-edit\"> <i class=\"fas fa-pen-square\"></i> </span>
                                    
                                    
                                </div>
                                <i class=\"fas fa-trash\"></i>
                                <div>
                                    <p class=\"adresse\">
                                        4517 Washington Ave. Manchester, Kentucky 39495
                                    </p>

                                    <ul> 
                                        <li>
                                            <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/bill.png"), "html", null, true);
        echo "\">
                                            <span> 13 en attente </span>
                                        </li>
                                        <li>
                                            <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/49353.png"), "html", null, true);
        echo "\">
                                            <span> 2 candidatures acceptées </span>
                                        </li>
                                         
                                        <li>
                                            <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/rejected.png"), "html", null, true);
        echo "\" >
                                            <span> 15 candidatures refusées </span>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                       <a class=\"mt-1\" href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion-des-candidatures");
        echo "\"> <button type=\"button\" class=\"btn btn-primary\">Gérer les candidatures</button> </a>
                    </div>
                </div>
                <br>
                <h3 class=\"subtitle p-b-20\" style=\"color: var(--gray)\"> En cours de création </h3>
                <div class=\"card mt-20\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <div class=\"card-caption\">
                                    <img class=\"w-100 img-fluid rounded\" src=\"https://images.pexels.com/photos/3255245/pexels-photo-3255245.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                                </div>
                            </div>
                            <div class=\"col-md-9 col-detail-annonce\">
                                    <div style=\"display: flex\">
                                        <div style=\"display: grid\">
                                            <h3> eco-hameau de la clairière </h3>
                                            <span> publié le 15 Juillet 2020 </span>
                                        </div>
                                        <span class=\"m-auto ml-30 part-edit\"> <i class=\"fas fa-pen-square\"></i> </span>
                                      
                                    </div>
                                    <i class=\"fas fa-trash\"></i>
                                    <div>
                                        <p class=\"adresse\">
                                            Mortagne au Perche
                                        </p>

                                    </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-light disabled\">Gérer les candidatures</button>
                        </div>
                    </div>
                    <br>
                ";
        // line 214
        echo "                <div>
                        <h3 class=\"subtitle p-b-20 mt-20\" style=\"color: #ff6161\"> Refusées </h3>
                    <div class=\"card denied mt-20\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <div class=\"card-caption\">
                                    <img class=\"w-100 img-fluid rounded\" src=\"https://images.pexels.com/photos/2103826/pexels-photo-2103826.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                </div>
                            </div>
                            <div class=\"col-md-9 col-detail-annonce\">
                                    <div style=\"display: flex\">
                                        <div style=\"display: grid\">
                                            <h3> Habitat coopératif autour de Tarare </h3>
                                            <span> publié le 15 Juillet 2020 </span>
                                        </div>
                                        <span style=\"margin: auto;margin-left: 30px;margin-top: 4px;\"> </span>
                                    </div>
                                    <i class=\"fas fa-trash\"></i>
                                    <div>
                                        <p class=\"adresse\">
                                            Rhône-Alpes
                                        </p>

                                    </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-light disabled\">Gérer les candidatures</button>
                        </div>
                    </div>
                </div>
                <br>
                ";
        // line 245
        echo "                <div>
                </section>
            </div>
            <!-- Modal -->
<div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Voulez-vous supprimer cette annonce ?</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
     
      <div class=\"modal-footer\">
       <button type=\"button\" class=\"btn btn-danger\">supprimer</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
      </div>
    </div>
  </div>
</div>

        </div>
        <script>
        \$(function() {
            \$('.fa-trash').css('cursor', 'pointer')

            \$('.fa-trash').on('click',()=> {
                \$('#exampleModalCenter').modal('show')
            } )
            \$('.part-edit').on('mouseenter', function() {
                \$(this).css('overflow', 'visible')
                \$('.part-edit::after').css({'width': '70px'})
            }).on('mouseleave', function() {
                \$(this).css('overflow', 'hidden')
                \$('.part-edit::after').css('width', '0px')
            } )
        })
            
        </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annonces/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 245,  295 => 214,  259 => 180,  250 => 174,  242 => 169,  235 => 165,  216 => 149,  71 => 6,  61 => 5,  50 => 1,  48 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set title = 'profil' %}

{% block body %}
<style>
    h1 {
        position: relative;
        font-weight: 600;
        font-size: 30px;
    }
    h1:not(.modal-title):after {
        position: absolute;
        content: '';
        height: 5px;
        width: 46px;
        background-color: #54c0a7;
        bottom: -4px;
        left: 0;
    }
    .container section:first-child {
        margin-top: 5%
    }
    .card {
        width: 100%;
        padding: 11px;
        padding-bottom: 51px;
    }
    .card-caption {
        border-radius: 5px;
        overflow: hidden
    }
    .col-detail-annonce {
        position: relative
    }
    .col-detail-annonce .fa-trash {
        position: absolute;
        right: 0;
        top: 0;
        margin-right: 34px;
        color: #828282;
    }
    .adresse {
        margin-top: 16px;
        font-size: 13px;
    }
    .col-detail-annonce ul {
        list-style: none
    }
    .col-detail-annonce ul li {
        display: inline
    }
    .col-detail-annonce ul li:nth-of-type(2) {
        margin-left: 7px
    }
    .col-detail-annonce ul li:nth-of-type(3)  {
        margin-left: 7px
    }
    .col-detail-annonce ul>li>img {
        width: 20px
    }
    .card ul li:nth-of-type(2) {
    font-size: initial;
    }
    .card button {
        position: absolute;
        bottom: 0;
        right: 0;
        margin: 29px;
    }
    .card:hover {
        cursor: default
    }
   
    .modal-header {
        border-bottom: none
    }
    .modal-footer {
            border-top: none;
    }
    h3 {
        font-size: 20px;
    }
    .subtitle {
        font-size: 16px;
    }
    .p-b-20 {
        padding-bottom: 20px
    }
    .btn-light.disabled, .btn-light:disabled{
            color: #e4e4e4 !important
    }
    .ml-30 {
        margin-left: 30px !important;
        color: #424242;
        font-size: 22px;
        cursor: pointer;
    }
    .mt-3 {
        margin-top: 3px !important
    }
    .part-edit {
        position: relative;
        overflow: hidden;
        cursor: pointer;
        margin-top: -2px !important;
    }
    .part-edit:after {
        content: 'Modifier';
        position: absolute;
        width: 70px;
        background: #E7EDF3;
        height: 20px;
        font-size: 13px;
        margin: auto;
        top: 18%;
        padding-left: 6px;
        border-radius: 0 13px 13px 0;
        overflow: hidden;
        left: 19px;
        transition: width ease .15s
    }
    .card-caption {
        height: 159.5px;
    }
    .card a {
                color: rgb(55, 57, 66);
                text-decoration: none
            }
</style>
        <div class=\"container\">
            <section>
                <h1> Mes annonces </h1>
                <br>
                <h3 class=\"subtitle p-b-20\" style=\"color: #54c0a7\"> Active(s) </h3>
                <div class=\"card\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div>
                                <div class=\"card-caption\">
                                    <img class=\"w-100 img-fluid rounded\" src=\"https://images.pexels.com/photos/212185/pexels-photo-212185.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')\">
                                </div>
                            </div>
                            
                        </div>
                        <div class=\"col-md-9 col-detail-annonce\"  style=\"padding-bottom: 32px\">
                                <div style=\"display: flex\">
                                    <div style=\"display: grid\">
                                        <a href=\"{{ path('projet', {id: '1'} ) }}\"><h3> Ecolieu du moulin de Brisé </h3></a>
                                        <span> publié le 15 Juillet 2020 </span>
                                    </div>
                                    
                                        <span class=\"m-auto ml-30 part-edit\"> <i class=\"fas fa-pen-square\"></i> </span>
                                    
                                    
                                </div>
                                <i class=\"fas fa-trash\"></i>
                                <div>
                                    <p class=\"adresse\">
                                        4517 Washington Ave. Manchester, Kentucky 39495
                                    </p>

                                    <ul> 
                                        <li>
                                            <img src=\"{{ asset('build/images/static/bill.png') }}\">
                                            <span> 13 en attente </span>
                                        </li>
                                        <li>
                                            <img src=\"{{ asset('build/images/static/49353.png') }}\">
                                            <span> 2 candidatures acceptées </span>
                                        </li>
                                         
                                        <li>
                                            <img src=\"{{ asset('build/images/static/rejected.png') }}\" >
                                            <span> 15 candidatures refusées </span>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                       <a class=\"mt-1\" href=\"{{path('gestion-des-candidatures')}}\"> <button type=\"button\" class=\"btn btn-primary\">Gérer les candidatures</button> </a>
                    </div>
                </div>
                <br>
                <h3 class=\"subtitle p-b-20\" style=\"color: var(--gray)\"> En cours de création </h3>
                <div class=\"card mt-20\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <div class=\"card-caption\">
                                    <img class=\"w-100 img-fluid rounded\" src=\"https://images.pexels.com/photos/3255245/pexels-photo-3255245.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\">
                                </div>
                            </div>
                            <div class=\"col-md-9 col-detail-annonce\">
                                    <div style=\"display: flex\">
                                        <div style=\"display: grid\">
                                            <h3> eco-hameau de la clairière </h3>
                                            <span> publié le 15 Juillet 2020 </span>
                                        </div>
                                        <span class=\"m-auto ml-30 part-edit\"> <i class=\"fas fa-pen-square\"></i> </span>
                                      
                                    </div>
                                    <i class=\"fas fa-trash\"></i>
                                    <div>
                                        <p class=\"adresse\">
                                            Mortagne au Perche
                                        </p>

                                    </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-light disabled\">Gérer les candidatures</button>
                        </div>
                    </div>
                    <br>
                {# Annonces refusés ou incomplete; faire une condition;faire une boucle des projets refusé #}
                <div>
                        <h3 class=\"subtitle p-b-20 mt-20\" style=\"color: #ff6161\"> Refusées </h3>
                    <div class=\"card denied mt-20\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <div class=\"card-caption\">
                                    <img class=\"w-100 img-fluid rounded\" src=\"https://images.pexels.com/photos/2103826/pexels-photo-2103826.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\">
                                </div>
                            </div>
                            <div class=\"col-md-9 col-detail-annonce\">
                                    <div style=\"display: flex\">
                                        <div style=\"display: grid\">
                                            <h3> Habitat coopératif autour de Tarare </h3>
                                            <span> publié le 15 Juillet 2020 </span>
                                        </div>
                                        <span style=\"margin: auto;margin-left: 30px;margin-top: 4px;\"> </span>
                                    </div>
                                    <i class=\"fas fa-trash\"></i>
                                    <div>
                                        <p class=\"adresse\">
                                            Rhône-Alpes
                                        </p>

                                    </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-light disabled\">Gérer les candidatures</button>
                        </div>
                    </div>
                </div>
                <br>
                {# Annonces en cours d'examen; faire une condition;faire une boucle des projets en cours #}
                <div>
                </section>
            </div>
            <!-- Modal -->
<div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Voulez-vous supprimer cette annonce ?</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
     
      <div class=\"modal-footer\">
       <button type=\"button\" class=\"btn btn-danger\">supprimer</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
      </div>
    </div>
  </div>
</div>

        </div>
        <script>
        \$(function() {
            \$('.fa-trash').css('cursor', 'pointer')

            \$('.fa-trash').on('click',()=> {
                \$('#exampleModalCenter').modal('show')
            } )
            \$('.part-edit').on('mouseenter', function() {
                \$(this).css('overflow', 'visible')
                \$('.part-edit::after').css({'width': '70px'})
            }).on('mouseleave', function() {
                \$(this).css('overflow', 'hidden')
                \$('.part-edit::after').css('width', '0px')
            } )
        })
            
        </script>
{% endblock %}", "annonces/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/annonces/index.html.twig");
    }
}
