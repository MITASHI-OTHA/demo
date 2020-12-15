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

/* ad_search/ad_search.html.twig */
class __TwigTemplate_becbe26427d3f95c7dc329190b280dfa0922c5e484adbc994c9e1039107399ac extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_search/ad_search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ad_search/ad_search.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 329
        echo "         <div class=\"banner\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/static/welcoom-banner.jpg"), "html", null, true);
        echo " )\">
                <div class=\"child-banner\">
                        ";
        // line 331
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), 'form_start', ["action" => "/ad/search/ads-list"]);
        echo "
                            <div class=\"col-recherche d-flex\">
                                <div class=\"filter-price\">
                                        <h6 class=\"font-weight-bolder\">Prix</h6>
                                    <div class=\"my-3\">
                                        <span class=\"mr-4\">
                                            Min. <b>
                                                <span id=\"min__price__show\">0</span> €</b>
                                        </span>
                                        <span>
                                            Max. <b>
                                                <span id=\"max__price__show\">15 000</pan> €</b>
                                        </span>
                                    </div>
                                    <div>
                                            <input class=\"slid_price filter-p\" type=\"text\" name=\"prix\" value=\"\" data-slider-min=\"0\" data-slider-max=\"15000\" data-slider-step=\"5\" data-slider-value=\"[0,15000]\">
                                            <input type=\"hidden\" name=\"min_price\" value=\"\">
                                            <input type=\"hidden\" name=\"max_price\" value=\"\">
                                    </div>
                                        <div>
                                            <ul>
                                                    <li> Effacer </li>
                                                    <li class=\"flt-right\"> Valider </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"filter-typologie position-absolute hidden\">
                                        <div>
                                            ";
        // line 359
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 359, $this->source); })()), "typologie", [], "any", false, false, false, 359), 'row');
        echo "
                                        </div>
                                        <div class=\"position: relative\">
                                            <ul class=\"position-absolute\">
                                                <li> Effacer </li>
                                                <li class=\"flt-right\"> Valider </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"filter-phase position-absolute hidden\">
                                            <div>
                                                 ";
        // line 370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "etatAvancementProjet", [], "any", false, false, false, 370), 'row');
        echo "
                                            </div>
                                            <div class=\"position: relative\">
                                                <ul class=\"position-absolute\">
                                                    <li> Effacer </li>
                                                    <li class=\"flt-right\"> Valider </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <section>
                                            <div class=\"row\">
                                                <div class=\"col-md-12 pl-30\">
                                                    <h5> Je cherche : </h5>
                                                </div>
                                            </div>
                                            <div class=\"row m-0\">
                                                    <div class=\"col-md-5 pr-0 pl-0\">
                                                        <div class=\"d-flex pro-type\">
                                                            ";
        // line 388
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 388, $this->source); })()), "typeProjet", [], "any", false, false, false, 388), 'row');
        echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-5 pro-city\">
                                                            ";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 392, $this->source); })()), "ville", [], "any", false, false, false, 392), 'row');
        echo "
                                                    </div>
                                                     <div class=\"col p-0 pr-0\" style=\"width: 247px\">
                                                            <div class=\"col-submit mt-29\">
                                                                <button type=\"submit\" class=\"btn btn-primary btnSubmit w-100 p-8\">Rechercher</button>
                                                            </div>
                                                    </div>
                                            </div>
                                            <div class=\"blk-filter d-flex\">
                                                    <div class=\"blk-parent-btn-filter pl-30\" style=\"position relative\">
                                                        <div class=\"form-group\">
                                                           <button type=\"button\" class=\"btn btn-sm btn-prix\"> Prix </button> 
                                                        </div>
                                                    </div>
                                                        <div class=\"ml-3\">
                                                            <div class=\"form-group\">
                                                                <button type=\"button\" class=\"btn btn-sm btn-typologie w-100\"> Typologie </button>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class=\"ml-3 col-d-l\">
                                                            <div class=\"form-group\">
                                                                <button type=\"button\" class=\"btn btn-sm btn-phase w-100\"> Phase </button>
                                                            </div>
                                                        </div>
                                                        <div class=\"ml-3 col-d-l\">
                                                                    ";
        // line 418
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()), "dateLivraison", [], "any", false, false, false, 418), 'row');
        echo "
                                                        </div>
                                            </div>
                                    </section>
                                    <div class=\"blk-filter-advanced d-flex m-auto\">
                                            <button type=\"button\" class=\"btn btnDanger filter\" style=\"text-transform: inherit;\"> Filtre avancé </button>
                                        </div>
                            </div>
                        ";
        // line 426
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 426, $this->source); })()), 'form_end');
        echo "
                    </div>
        </div>
";
        // line 430
        echo "   
    ";
        // line 431
        if ((null != (isset($context["ads"]) || array_key_exists("ads", $context) ? $context["ads"] : (function () { throw new RuntimeError('Variable "ads" does not exist.', 431, $this->source); })()))) {
            // line 432
            echo "  
    ";
        }
        // line 434
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <style>
        .form__ad__search .form-group {
            margin-bottom: 0;
        }
        #ad_search_etatAvancementProjet {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .slider-horizontal .tooltip {
            display: none
        }
        .slider-handle {
            width: 24px;
            height: 24px;
            margin-top: calc(-12px - 2px);
            border: 1px solid #cad1d9;
        }
        .price-show {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }
        .price-show li {
            display: inline
        }
        .price-show li:last-child {
            margin-left: 21px;
        }
        .slider-horizontal {
            width: calc(100% - 25px) !important;
            height: 4px !important;
            margin-left: 10px;
        }
        .slider-track {
            height: 4px !important;
        }
        .slider-selection {
            background-color: #00BFA6;
            background-image: none;
            box-shadow: none;
        }
        b {
            color: #00BFA6;
        }
        .col-recherche section {
            position: relative;
            overflow: hidden;
            margin-bottom: 21px;
        }
        form[name=ad_search] {
            display: flex
        }
        .blk-filter-advanced {
            left: 0;
            right: 0;
            bottom: -17px;
            position: absolute
        }
        .blk-filter-advanced button {
            margin: auto;
            padding-left: 40px;
            padding-right: 40px;
        }
        .blk-filter {
            display: flex;
        }
        #ad_search_dateLivraison_year {
            font-weight: 600;
        }
        .blk-filter button {
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .blk-filter #ad_search_dateLivraison_year {
            background: transparent !important;
            color: #000 !important;
            font-size: 14px;
            height: 39px;
        }
        #ad_search_dateLivraison_day, #ad_search_dateLivraison_month {
            display: none
        }

       .filter-price {
            padding: 20px;
            padding-left: 10px;
            padding-bottom: 5px;
            width: 50%;
       }
       .slider-horizontal {
           margin-left: 0;
       }
       .tooltip {
           top: -40px !important;
       }
       .tooltip-inner {
            padding-left: 10px;
            padding-right: 10px;
            text-align: left;
            width: max-content;
       }
       .tooltip-arrow {
            position: absolute;
            opacity: 1;
            z-index: 99999;
            top: 27px;
            width: 10px;
            height: 10px;
            border-top: 10px solid #0a0a0a;
            border-right: 10px solid transparent;
            border-left: 10px solid transparent;
            left: 19px
       }
       .tooltip {
           top: -35px;
       }
       .appear {
             opacity: 1;
       }
       .col-recherche>div:first-child {
                position: absolute;
                z-index: 99;
                background: #fff;
                border-radius: 5px;
                box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
                -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
                top: 171px;
                display: none
            }
       .col-recherche>div>div:first-child {
            display: grid;
            padding: 11px;
       }
       .col-recherche>div>div:first-child>ul, .col-recherche>div:first-child>div:last-child ul, .cloned ul {
           list-style: none;
           padding-left: 0;
           margin-bottom: 0;
       }
       .col-recherche>div:first-child>div:last-child ul , .cloned ul {
           padding: 10px;
       }
       .col-recherche>div:first-child>div:last-child ul li, .cloned ul li {
           cursor: pointer;
           font-family: \"Montserrat-semibold\";
           font-size: 14px;
       }
   
       .col-recherche>div>div:first-child>ul li, .col-recherche>div:first-child>div:last-child ul li, .cloned ul li  {
           display: inline
       }
       .col-recherche>div>div:first-child>ul:last-child li, .cloned ul li {
               color: #b9b9b9;
               font-size: 14px;
       }
       .col-recherche>div>div:first-child>ul li, .cloned ul li {
           font-size: 15px
       }

       .col-recherche>div:first-child>div:last-child{
           border-top: 1px solid #f5f5f5;
       }
       .col-recherche>div>div:first-child>ul li font {
           color: #56c8c1
       }
       .cloned ul li {
           color: #1c1f1f
       }
       #slider {
           width: 400px;
       }
       
       .slider.slider-horizontal .slider-selection {
            position: absolute;
            border: none;
       }
     
       #text-max {
           margin-left: 30px
       }
       .flt-right {
           float: right;
           color: #67c0b5;
       }
       .slider-handle {
           z-index: 1;
           opacity: 1
       }
       .btn-prix, .btn-typologie, .btn-phase {
            padding-top: 5px;
            background: transparent;
            padding-bottom: 3px;
            line-height: 28px;
            width: max-content;
            border: 1px solid #d8d8d8;
            white-space: nowrap;
       }
     
        .blk-parent-btn-filter .form-group {
            display:grid
        }
        .blk-parent-btn-filter label {
            padding-top: 5px;
            padding-bottom: 0;
            margin-bottom: 6px;
        }
        .blk-filter button, #ad_search_dateLivraison_year {
            border-radius: 90px !important;
            transition: ease .5s;
            font-weight: 500 !important
        }
        .blk-filter button:hover, #ad_search_dateLivraison_year:hover {
             background-color: #e7edf3;
             color: #667d99 !important;
        }
        .btn-date {
            padding-top: 8px;
            padding-bottom: 6px;
            line-height: 20px;
        }
        .btn-date {
                width: max-content;
        }
        .col-d-l {
            margin: 0;
            padding-left: 0;
        }
       
         #ad_search_typeProjet {
              padding-right: 31px;
         }
         .filter-price>div:nth-of-type(2){
             padding-left: 10px;
             padding-bottom: 21px;
         }
         .blk-filter>div:nth-of-type(2) {
             padding-left: 0 !important;
         }
         .col-submit button {
            font-size: 12px;
         }
         .pro-type>.form-group, .pro-city>.form-group {
             width: 100%
         }
        .cloned {
            position: absolute;
            background: rgb(255, 255, 255);
            width: 70%;
            box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
            top: 220px;
            right: -113px;
            border-radius: 5px;
        }
        #ad_search_dateLivraison_year {
            color: #1d0c0c;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding-right: 31px;
            position: relative
        }
        #ad_search_dateLivraison {
            position: relative
        }
        .pl {
            padding-left: 0
        }
        .pr {
            padding-right: 0
        }
        .hidden {
            display: none
        }
        .filter-typologie, .filter-phase {
            z-index: 99;
            background: #fff;
            box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
            padding-top: .8rem;
            border-radius: 5px;
            padding: 2.4rem;
            padding-top: 0.6rem;;
            top: 176px;
            padding-left: 13px;
            padding-right: 4.5rem;
        }
         .filter-typologie {
             left: 103px;
         }
         .filter-phase {
             left: 229px;
         }
        .filter-typologie ul, .filter-phase ul {
            left: 0;
            right: 0;
            bottom: 0;
            margin: 0;
            list-style: none;
            padding: 8px;
            border-top: 1px solid #ddd;
        }
        .filter-typologie ul li, .filter-phase ul li {
            display: inline-flex;
            cursor: pointer;
            font-size: 13px
        }
        .filter-typologie ul li:last-child, .filter-phase ul li:last-child {
            font-weight: 600;
            color: #53c0b5;
        }
        .col-submit .btnSubmit {
            padding-left: 1.4rem;
            padding-right: 1.4rem;
        }
        #ad_search_typologie .form-check, #ad_search_etatAvancementProjet .form-check {
            line-height: 35px;
        }
         #ad_search_typologie .form-check input, #ad_search_etatAvancementProjet input {
            margin-top: 12px;
        }
        .blk-filter button {
            overflow: hidden
        }
        .form-group legend {
            font-weight: 600;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 434
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 435
        echo "            <script>
            \$(function() {
                    \$(\"body\").on(\"click\", function () {
                            \$(\".filter-price, .cloned, .filter-phase, .filter-typologie\").hide()
                    })

                        clone = \$('.filter-price').clone()
                        clone.addClass('cloned')
                        clone.find('.slid_price').removeClass('filter-p')
                        clone.appendTo('.modal-body')
                        \$('.slid_price')
                        .on('slide', function(ev){
                            var min = ev.value[0]
                            var max  = ev.value[1]
                            clone.find(\"#min__price__show\").text(formatNombre(min) +\" €\")
                            clone.find(\"#max__price__show\").text(formatNombre(max) + \" €\")
                        })
                        .on(\"slideStop\", function(ev) {
                            // valeurs des prix min et max que le user a selectionné
                            \$min = ev.value[0]
                            \$max  = ev.value[1]
                            var format = formatvalue(\$min, \$max)
                            \$('#prix-alert').val(format.minimun +' '+ format.max)
                        })
                        
                        \$('.cloned, #prix-alert').on('click', (\$e)=> {
                            \$e.stopPropagation()
                            \$(\".cloned\").show()
                        } )
                        clone.on('click', 'ul li:last-child', function() {
                            \$(\".filter-price, .cloned\").hide()
                        } )

                        //Afficher le prix sur le bouton
                            \$(\".filter-price .flt-right\").on(\"click\",()=> {
                            var min = \$('input[name=\"min_price\"]').val();
                            var max = \$('input[name=\"max_price\"]').val();
                            var format = formatvalue(min, max)
                            \$(\".btn-prix\").html(format.minimun +' '+ format.max);
                            \$(\".filter-price\").hide(100)
                        } )
                        // Afficher la typologie sur le bouton
                        \$('input[name=\"ad_search[typologie]\"]').on('change', function(){
                             typologie = \$(this).val()
                        })
                        \$(\".filter-typologie .flt-right\").on('click', function() {
                            \$('.btn-typologie').text(typologie)
                            \$(\"div[class^=filter-]\").hide(100)
                        })
                        \$(\".filter-typologie li:first-child\").on('click', function() {
                            typologie = \"Typologie\"
                            \$('input[name=\"ad_search[typologie]\"]').prop('checked', false)
                        })
                        // Afficher la phase sur le bouton
                        \$('input[name=\"ad_search[etatAvancementProjet]\"]').on('change', function(){
                             phase = \$(this).val()
                        })
                        \$(\".filter-phase .flt-right\").on('click', function() {
                            \$('.btn-phase').text(phase)
                            \$(\"div[class^=filter-]\").hide(100)
                        })
                        \$(\".filter-phase li:first-child\").on('click', function() {
                            phase = \"Phase\"
                            \$('input[name=\"ad_search[etatAvancementProjet]\"]').prop('checked', false)
                        })

                        formatvalue = (min, max)=> {
                            let maximun = max == 15000?\"et plus\":max+\" €\"
                            if(max == 15000) {
                                min = min + \" €\"
                                } else {
                                min = min + \" € - \"
                            }
                            return {
                                minimun: min,
                                max: maximun
                            }
                        }
                        //fin
                    \$('.btn-date').on('click', function(\$e) {
                        \$e.preventDefault()
                    } )
                    \$('.btn-typologie, .filter-typologie').on('click', function(\$i) {
                        \$i.stopPropagation()
                        \$(\"div[class^=filter-]\").hide()
                        \$('.filter-typologie').show()
                    })
                    \$('.btn-phase, .filter-phase').on('click', function(\$e) {
                        \$e.stopPropagation()
                        \$(\"div[class^=filter-]\").hide()
                        \$('.filter-phase').show()
                    })
                    \$(\".btn-prix, .col-recherche>.filter-price\").on(\"click\", function(\$e) {
                        \$e.stopPropagation()
                        \$(\"div[class^=filter-]\").hide()
                        \$(\".filter-price\").show()
                    } )
                      
                    \$('#ad_search_typeProjet').parent().css(\"position\", \"relative\")
                    .append(\"<i class='fas fa-angle-down' style='position: absolute;font-size:19px;top: 28%;color: #5d5d5d;'></i>\")

                   \$('#ad_search_dateLivraison, .modal #ad_search_dateLivraison').append(\"<i class='fas fa-angle-down' style='position: absolute;font-size:19px;top: 10px;color: #5d5d5d;right: 7px;'></i>\")

                    \$('#ad_search_typeProjet').next().css({'right': '9px', 'top': '59%'})
                    \$(\".filter\").on(\"click\", ()=> {
                           \$(\".col-recherche\").toggleClass(\"swipped\")
                           \$('.blk-filter-advanced').attr('data-color', 'white')
                    })
                    
                        \$('.slid_price').slider()

                            \$('.filter-p').on('change', function() 
                            {
                                let minPrice = \$(this).attr('value').substring(0, \$(this).attr('value').indexOf(','));
                                let maxPrice = \$(this).attr('value').substring(\$(this).attr('value').indexOf(',') + 1);

                                \$('#min__price__show').text(formatNombre(minPrice));
                                \$('#max__price__show').text(formatNombre(maxPrice));
                                \$('input[name=\"min_price\"]').val(minPrice);
                                \$('input[name=\"max_price\"]').val(maxPrice);
                            });
                    // Rafraichir
                    \$('.filter-price ul li:first-child').on('click', ()=> {
                        \$('.slid_price').slider('refresh', { useCurrentValue: false });
                        \$('input[name=\"min_price\"]').val(\"0\");
                        \$('input[name=\"max_price\"]').val(\"15000\");
                        \$('#min__price__show').text('0');
                        \$('#max__price__show').text('15000');
                        \$('#btn-prix').html('Prix')
                        clone.find(\"#min__price__show\").text(\"0\")
                        clone.find(\"#max__price__show\").text(\"15000\")
                        \$('#prix-alert').val('')
                    })
                    
                        function formatNombre(nombre) 
                        {
                            var chaine = String(parseFloat(nombre)), // convertit en chaine
                                newChaine = '', // nouvelle chaine vide
                                longueur = chaine.length, // longueur du nombre
                                b = 0, // espacement
                                i = 0, // boucle
                                point = -1; // position virgule
                            virgule = '00'; // initialise la virgule à vide

                            // récupère sa position (-1 = inexistante)
                            point = chaine.indexOf('.', 0);

                            // si un point existe
                            if (point != -1) 
                            {
                                virgule = chaine.substr(point + 1, longueur); // stock nombre après le point
                                chaine = chaine.substr(0, point); // supprime ceux après
                                longueur -= (longueur - point); // recalcule la longueur
                            }

                            // permet de savoir quand faire l'espacement
                            if (longueur % 3 != 0) 
                            {
                                b = 3 - longueur % 3;
                            }

                            // boucle la nouvelle chaine
                            for (i = 0; i < longueur; i++) 
                            {
                                // si atteint 3 nombre
                                if (b == 3) 
                                {
                                    newChaine += ' '; // espacement
                                    b = 0; // reset
                                }

                                b++;  // incrémente nombre
                                newChaine += chaine[i]; // attribut le nombre à la new chaine
                            }

                            //newChaine += ',' + virgule; // rajoute la virgule et le nombre allant après

                            // retourne le résultat
                            return (newChaine);
                        }
                    })
            </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad_search/ad_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 435,  540 => 434,  205 => 3,  195 => 2,  184 => 434,  180 => 432,  178 => 431,  175 => 430,  169 => 426,  158 => 418,  129 => 392,  122 => 388,  101 => 370,  87 => 359,  56 => 331,  50 => 329,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block stylesheets %}
    <style>
        .form__ad__search .form-group {
            margin-bottom: 0;
        }
        #ad_search_etatAvancementProjet {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .slider-horizontal .tooltip {
            display: none
        }
        .slider-handle {
            width: 24px;
            height: 24px;
            margin-top: calc(-12px - 2px);
            border: 1px solid #cad1d9;
        }
        .price-show {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }
        .price-show li {
            display: inline
        }
        .price-show li:last-child {
            margin-left: 21px;
        }
        .slider-horizontal {
            width: calc(100% - 25px) !important;
            height: 4px !important;
            margin-left: 10px;
        }
        .slider-track {
            height: 4px !important;
        }
        .slider-selection {
            background-color: #00BFA6;
            background-image: none;
            box-shadow: none;
        }
        b {
            color: #00BFA6;
        }
        .col-recherche section {
            position: relative;
            overflow: hidden;
            margin-bottom: 21px;
        }
        form[name=ad_search] {
            display: flex
        }
        .blk-filter-advanced {
            left: 0;
            right: 0;
            bottom: -17px;
            position: absolute
        }
        .blk-filter-advanced button {
            margin: auto;
            padding-left: 40px;
            padding-right: 40px;
        }
        .blk-filter {
            display: flex;
        }
        #ad_search_dateLivraison_year {
            font-weight: 600;
        }
        .blk-filter button {
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .blk-filter #ad_search_dateLivraison_year {
            background: transparent !important;
            color: #000 !important;
            font-size: 14px;
            height: 39px;
        }
        #ad_search_dateLivraison_day, #ad_search_dateLivraison_month {
            display: none
        }

       .filter-price {
            padding: 20px;
            padding-left: 10px;
            padding-bottom: 5px;
            width: 50%;
       }
       .slider-horizontal {
           margin-left: 0;
       }
       .tooltip {
           top: -40px !important;
       }
       .tooltip-inner {
            padding-left: 10px;
            padding-right: 10px;
            text-align: left;
            width: max-content;
       }
       .tooltip-arrow {
            position: absolute;
            opacity: 1;
            z-index: 99999;
            top: 27px;
            width: 10px;
            height: 10px;
            border-top: 10px solid #0a0a0a;
            border-right: 10px solid transparent;
            border-left: 10px solid transparent;
            left: 19px
       }
       .tooltip {
           top: -35px;
       }
       .appear {
             opacity: 1;
       }
       .col-recherche>div:first-child {
                position: absolute;
                z-index: 99;
                background: #fff;
                border-radius: 5px;
                box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
                -webkit-box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
                top: 171px;
                display: none
            }
       .col-recherche>div>div:first-child {
            display: grid;
            padding: 11px;
       }
       .col-recherche>div>div:first-child>ul, .col-recherche>div:first-child>div:last-child ul, .cloned ul {
           list-style: none;
           padding-left: 0;
           margin-bottom: 0;
       }
       .col-recherche>div:first-child>div:last-child ul , .cloned ul {
           padding: 10px;
       }
       .col-recherche>div:first-child>div:last-child ul li, .cloned ul li {
           cursor: pointer;
           font-family: \"Montserrat-semibold\";
           font-size: 14px;
       }
   
       .col-recherche>div>div:first-child>ul li, .col-recherche>div:first-child>div:last-child ul li, .cloned ul li  {
           display: inline
       }
       .col-recherche>div>div:first-child>ul:last-child li, .cloned ul li {
               color: #b9b9b9;
               font-size: 14px;
       }
       .col-recherche>div>div:first-child>ul li, .cloned ul li {
           font-size: 15px
       }

       .col-recherche>div:first-child>div:last-child{
           border-top: 1px solid #f5f5f5;
       }
       .col-recherche>div>div:first-child>ul li font {
           color: #56c8c1
       }
       .cloned ul li {
           color: #1c1f1f
       }
       #slider {
           width: 400px;
       }
       
       .slider.slider-horizontal .slider-selection {
            position: absolute;
            border: none;
       }
     
       #text-max {
           margin-left: 30px
       }
       .flt-right {
           float: right;
           color: #67c0b5;
       }
       .slider-handle {
           z-index: 1;
           opacity: 1
       }
       .btn-prix, .btn-typologie, .btn-phase {
            padding-top: 5px;
            background: transparent;
            padding-bottom: 3px;
            line-height: 28px;
            width: max-content;
            border: 1px solid #d8d8d8;
            white-space: nowrap;
       }
     
        .blk-parent-btn-filter .form-group {
            display:grid
        }
        .blk-parent-btn-filter label {
            padding-top: 5px;
            padding-bottom: 0;
            margin-bottom: 6px;
        }
        .blk-filter button, #ad_search_dateLivraison_year {
            border-radius: 90px !important;
            transition: ease .5s;
            font-weight: 500 !important
        }
        .blk-filter button:hover, #ad_search_dateLivraison_year:hover {
             background-color: #e7edf3;
             color: #667d99 !important;
        }
        .btn-date {
            padding-top: 8px;
            padding-bottom: 6px;
            line-height: 20px;
        }
        .btn-date {
                width: max-content;
        }
        .col-d-l {
            margin: 0;
            padding-left: 0;
        }
       
         #ad_search_typeProjet {
              padding-right: 31px;
         }
         .filter-price>div:nth-of-type(2){
             padding-left: 10px;
             padding-bottom: 21px;
         }
         .blk-filter>div:nth-of-type(2) {
             padding-left: 0 !important;
         }
         .col-submit button {
            font-size: 12px;
         }
         .pro-type>.form-group, .pro-city>.form-group {
             width: 100%
         }
        .cloned {
            position: absolute;
            background: rgb(255, 255, 255);
            width: 70%;
            box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
            top: 220px;
            right: -113px;
            border-radius: 5px;
        }
        #ad_search_dateLivraison_year {
            color: #1d0c0c;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding-right: 31px;
            position: relative
        }
        #ad_search_dateLivraison {
            position: relative
        }
        .pl {
            padding-left: 0
        }
        .pr {
            padding-right: 0
        }
        .hidden {
            display: none
        }
        .filter-typologie, .filter-phase {
            z-index: 99;
            background: #fff;
            box-shadow: 0 -1px 4px 0 rgba(26,26,26,.08), 0 4px 8px 0 rgba(26,26,26,.12);
            padding-top: .8rem;
            border-radius: 5px;
            padding: 2.4rem;
            padding-top: 0.6rem;;
            top: 176px;
            padding-left: 13px;
            padding-right: 4.5rem;
        }
         .filter-typologie {
             left: 103px;
         }
         .filter-phase {
             left: 229px;
         }
        .filter-typologie ul, .filter-phase ul {
            left: 0;
            right: 0;
            bottom: 0;
            margin: 0;
            list-style: none;
            padding: 8px;
            border-top: 1px solid #ddd;
        }
        .filter-typologie ul li, .filter-phase ul li {
            display: inline-flex;
            cursor: pointer;
            font-size: 13px
        }
        .filter-typologie ul li:last-child, .filter-phase ul li:last-child {
            font-weight: 600;
            color: #53c0b5;
        }
        .col-submit .btnSubmit {
            padding-left: 1.4rem;
            padding-right: 1.4rem;
        }
        #ad_search_typologie .form-check, #ad_search_etatAvancementProjet .form-check {
            line-height: 35px;
        }
         #ad_search_typologie .form-check input, #ad_search_etatAvancementProjet input {
            margin-top: 12px;
        }
        .blk-filter button {
            overflow: hidden
        }
        .form-group legend {
            font-weight: 600;
        }
    </style>
{% endblock %}
         <div class=\"banner\" style=\"background-image: url({{ asset('build/images/static/welcoom-banner.jpg') }} )\">
                <div class=\"child-banner\">
                        {{ form_start(form, {action: '/ad/search/ads-list'} ) }}
                            <div class=\"col-recherche d-flex\">
                                <div class=\"filter-price\">
                                        <h6 class=\"font-weight-bolder\">Prix</h6>
                                    <div class=\"my-3\">
                                        <span class=\"mr-4\">
                                            Min. <b>
                                                <span id=\"min__price__show\">0</span> €</b>
                                        </span>
                                        <span>
                                            Max. <b>
                                                <span id=\"max__price__show\">15 000</pan> €</b>
                                        </span>
                                    </div>
                                    <div>
                                            <input class=\"slid_price filter-p\" type=\"text\" name=\"prix\" value=\"\" data-slider-min=\"0\" data-slider-max=\"15000\" data-slider-step=\"5\" data-slider-value=\"[0,15000]\">
                                            <input type=\"hidden\" name=\"min_price\" value=\"\">
                                            <input type=\"hidden\" name=\"max_price\" value=\"\">
                                    </div>
                                        <div>
                                            <ul>
                                                    <li> Effacer </li>
                                                    <li class=\"flt-right\"> Valider </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"filter-typologie position-absolute hidden\">
                                        <div>
                                            {{ form_row(form.typologie) }}
                                        </div>
                                        <div class=\"position: relative\">
                                            <ul class=\"position-absolute\">
                                                <li> Effacer </li>
                                                <li class=\"flt-right\"> Valider </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"filter-phase position-absolute hidden\">
                                            <div>
                                                 {{ form_row(form.etatAvancementProjet) }}
                                            </div>
                                            <div class=\"position: relative\">
                                                <ul class=\"position-absolute\">
                                                    <li> Effacer </li>
                                                    <li class=\"flt-right\"> Valider </li>
                                                </ul>
                                            </div>
                                    </div>
                                    <section>
                                            <div class=\"row\">
                                                <div class=\"col-md-12 pl-30\">
                                                    <h5> Je cherche : </h5>
                                                </div>
                                            </div>
                                            <div class=\"row m-0\">
                                                    <div class=\"col-md-5 pr-0 pl-0\">
                                                        <div class=\"d-flex pro-type\">
                                                            {{ form_row(form.typeProjet) }}
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-5 pro-city\">
                                                            {{ form_row(form.ville) }}
                                                    </div>
                                                     <div class=\"col p-0 pr-0\" style=\"width: 247px\">
                                                            <div class=\"col-submit mt-29\">
                                                                <button type=\"submit\" class=\"btn btn-primary btnSubmit w-100 p-8\">Rechercher</button>
                                                            </div>
                                                    </div>
                                            </div>
                                            <div class=\"blk-filter d-flex\">
                                                    <div class=\"blk-parent-btn-filter pl-30\" style=\"position relative\">
                                                        <div class=\"form-group\">
                                                           <button type=\"button\" class=\"btn btn-sm btn-prix\"> Prix </button> 
                                                        </div>
                                                    </div>
                                                        <div class=\"ml-3\">
                                                            <div class=\"form-group\">
                                                                <button type=\"button\" class=\"btn btn-sm btn-typologie w-100\"> Typologie </button>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class=\"ml-3 col-d-l\">
                                                            <div class=\"form-group\">
                                                                <button type=\"button\" class=\"btn btn-sm btn-phase w-100\"> Phase </button>
                                                            </div>
                                                        </div>
                                                        <div class=\"ml-3 col-d-l\">
                                                                    {{ form_row(form.dateLivraison) }}
                                                        </div>
                                            </div>
                                    </section>
                                    <div class=\"blk-filter-advanced d-flex m-auto\">
                                            <button type=\"button\" class=\"btn btnDanger filter\" style=\"text-transform: inherit;\"> Filtre avancé </button>
                                        </div>
                            </div>
                        {{ form_end(form) }}
                    </div>
        </div>
{# fin #}
   
    {% if null != ads %}
  
    {% endif %}
    {% block javascripts %}
            <script>
            \$(function() {
                    \$(\"body\").on(\"click\", function () {
                            \$(\".filter-price, .cloned, .filter-phase, .filter-typologie\").hide()
                    })

                        clone = \$('.filter-price').clone()
                        clone.addClass('cloned')
                        clone.find('.slid_price').removeClass('filter-p')
                        clone.appendTo('.modal-body')
                        \$('.slid_price')
                        .on('slide', function(ev){
                            var min = ev.value[0]
                            var max  = ev.value[1]
                            clone.find(\"#min__price__show\").text(formatNombre(min) +\" €\")
                            clone.find(\"#max__price__show\").text(formatNombre(max) + \" €\")
                        })
                        .on(\"slideStop\", function(ev) {
                            // valeurs des prix min et max que le user a selectionné
                            \$min = ev.value[0]
                            \$max  = ev.value[1]
                            var format = formatvalue(\$min, \$max)
                            \$('#prix-alert').val(format.minimun +' '+ format.max)
                        })
                        
                        \$('.cloned, #prix-alert').on('click', (\$e)=> {
                            \$e.stopPropagation()
                            \$(\".cloned\").show()
                        } )
                        clone.on('click', 'ul li:last-child', function() {
                            \$(\".filter-price, .cloned\").hide()
                        } )

                        //Afficher le prix sur le bouton
                            \$(\".filter-price .flt-right\").on(\"click\",()=> {
                            var min = \$('input[name=\"min_price\"]').val();
                            var max = \$('input[name=\"max_price\"]').val();
                            var format = formatvalue(min, max)
                            \$(\".btn-prix\").html(format.minimun +' '+ format.max);
                            \$(\".filter-price\").hide(100)
                        } )
                        // Afficher la typologie sur le bouton
                        \$('input[name=\"ad_search[typologie]\"]').on('change', function(){
                             typologie = \$(this).val()
                        })
                        \$(\".filter-typologie .flt-right\").on('click', function() {
                            \$('.btn-typologie').text(typologie)
                            \$(\"div[class^=filter-]\").hide(100)
                        })
                        \$(\".filter-typologie li:first-child\").on('click', function() {
                            typologie = \"Typologie\"
                            \$('input[name=\"ad_search[typologie]\"]').prop('checked', false)
                        })
                        // Afficher la phase sur le bouton
                        \$('input[name=\"ad_search[etatAvancementProjet]\"]').on('change', function(){
                             phase = \$(this).val()
                        })
                        \$(\".filter-phase .flt-right\").on('click', function() {
                            \$('.btn-phase').text(phase)
                            \$(\"div[class^=filter-]\").hide(100)
                        })
                        \$(\".filter-phase li:first-child\").on('click', function() {
                            phase = \"Phase\"
                            \$('input[name=\"ad_search[etatAvancementProjet]\"]').prop('checked', false)
                        })

                        formatvalue = (min, max)=> {
                            let maximun = max == 15000?\"et plus\":max+\" €\"
                            if(max == 15000) {
                                min = min + \" €\"
                                } else {
                                min = min + \" € - \"
                            }
                            return {
                                minimun: min,
                                max: maximun
                            }
                        }
                        //fin
                    \$('.btn-date').on('click', function(\$e) {
                        \$e.preventDefault()
                    } )
                    \$('.btn-typologie, .filter-typologie').on('click', function(\$i) {
                        \$i.stopPropagation()
                        \$(\"div[class^=filter-]\").hide()
                        \$('.filter-typologie').show()
                    })
                    \$('.btn-phase, .filter-phase').on('click', function(\$e) {
                        \$e.stopPropagation()
                        \$(\"div[class^=filter-]\").hide()
                        \$('.filter-phase').show()
                    })
                    \$(\".btn-prix, .col-recherche>.filter-price\").on(\"click\", function(\$e) {
                        \$e.stopPropagation()
                        \$(\"div[class^=filter-]\").hide()
                        \$(\".filter-price\").show()
                    } )
                      
                    \$('#ad_search_typeProjet').parent().css(\"position\", \"relative\")
                    .append(\"<i class='fas fa-angle-down' style='position: absolute;font-size:19px;top: 28%;color: #5d5d5d;'></i>\")

                   \$('#ad_search_dateLivraison, .modal #ad_search_dateLivraison').append(\"<i class='fas fa-angle-down' style='position: absolute;font-size:19px;top: 10px;color: #5d5d5d;right: 7px;'></i>\")

                    \$('#ad_search_typeProjet').next().css({'right': '9px', 'top': '59%'})
                    \$(\".filter\").on(\"click\", ()=> {
                           \$(\".col-recherche\").toggleClass(\"swipped\")
                           \$('.blk-filter-advanced').attr('data-color', 'white')
                    })
                    
                        \$('.slid_price').slider()

                            \$('.filter-p').on('change', function() 
                            {
                                let minPrice = \$(this).attr('value').substring(0, \$(this).attr('value').indexOf(','));
                                let maxPrice = \$(this).attr('value').substring(\$(this).attr('value').indexOf(',') + 1);

                                \$('#min__price__show').text(formatNombre(minPrice));
                                \$('#max__price__show').text(formatNombre(maxPrice));
                                \$('input[name=\"min_price\"]').val(minPrice);
                                \$('input[name=\"max_price\"]').val(maxPrice);
                            });
                    // Rafraichir
                    \$('.filter-price ul li:first-child').on('click', ()=> {
                        \$('.slid_price').slider('refresh', { useCurrentValue: false });
                        \$('input[name=\"min_price\"]').val(\"0\");
                        \$('input[name=\"max_price\"]').val(\"15000\");
                        \$('#min__price__show').text('0');
                        \$('#max__price__show').text('15000');
                        \$('#btn-prix').html('Prix')
                        clone.find(\"#min__price__show\").text(\"0\")
                        clone.find(\"#max__price__show\").text(\"15000\")
                        \$('#prix-alert').val('')
                    })
                    
                        function formatNombre(nombre) 
                        {
                            var chaine = String(parseFloat(nombre)), // convertit en chaine
                                newChaine = '', // nouvelle chaine vide
                                longueur = chaine.length, // longueur du nombre
                                b = 0, // espacement
                                i = 0, // boucle
                                point = -1; // position virgule
                            virgule = '00'; // initialise la virgule à vide

                            // récupère sa position (-1 = inexistante)
                            point = chaine.indexOf('.', 0);

                            // si un point existe
                            if (point != -1) 
                            {
                                virgule = chaine.substr(point + 1, longueur); // stock nombre après le point
                                chaine = chaine.substr(0, point); // supprime ceux après
                                longueur -= (longueur - point); // recalcule la longueur
                            }

                            // permet de savoir quand faire l'espacement
                            if (longueur % 3 != 0) 
                            {
                                b = 3 - longueur % 3;
                            }

                            // boucle la nouvelle chaine
                            for (i = 0; i < longueur; i++) 
                            {
                                // si atteint 3 nombre
                                if (b == 3) 
                                {
                                    newChaine += ' '; // espacement
                                    b = 0; // reset
                                }

                                b++;  // incrémente nombre
                                newChaine += chaine[i]; // attribut le nombre à la new chaine
                            }

                            //newChaine += ',' + virgule; // rajoute la virgule et le nombre allant après

                            // retourne le résultat
                            return (newChaine);
                        }
                    })
            </script>
    {% endblock %}", "ad_search/ad_search.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/welcoom/templates/ad_search/ad_search.html.twig");
    }
}
