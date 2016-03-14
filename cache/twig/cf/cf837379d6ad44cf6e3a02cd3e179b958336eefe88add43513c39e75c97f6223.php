<?php

/* partials/base.html.twig */
class __TwigTemplate_143490cb8adaa9803d9afc42da629e4606a14761dd6ba0baddb4af1fcdb20a90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>

";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "</head>
<body id=\"top\" class=\"";
        // line 43
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 62
        echo "
        ";
        // line 63
        $this->displayBlock('showcase', $context, $blocks);
        // line 64
        echo "
        ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 82
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 82)->display($context);
        // line 83
        echo "        </div>
    </div>
    ";
        // line 85
        $this->displayBlock('bottom', $context, $blocks);
        // line 98
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 21
        echo "
        ";
        // line 22
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 24
            echo "        ";
        }
        // line 25
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 26
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 27
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 28
            echo "        ";
        }
        // line 29
        echo "    ";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 37
        echo "\t\t";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/year.js"), "method");
        // line 38
        echo "    ";
    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        // line 46
        echo "        <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"";
        // line 48
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
            </div>
            <div id=\"navbar\">
                ";
        // line 51
        $this->displayBlock('header_extra', $context, $blocks);
        // line 52
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 53
            echo "                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 53)->display($context);
            // line 54
            echo "                ";
        }
        // line 55
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 58
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        ";
    }

    // line 51
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 55
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 56
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "                ";
    }

    // line 63
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "        </section>
        ";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        // line 72
        echo "        <footer id=\"footer\">
            <div class=\"totop\">
                <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
            <p>Undergraduate Student Senate of Carnegie Mellon University</p>
        </footer>
        ";
    }

    // line 85
    public function block_bottom($context, array $blocks = array())
    {
        // line 86
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 86,  292 => 85,  282 => 72,  279 => 71,  274 => 67,  269 => 68,  267 => 67,  262 => 66,  259 => 65,  254 => 63,  250 => 57,  247 => 56,  244 => 55,  239 => 51,  232 => 58,  229 => 55,  226 => 54,  223 => 53,  220 => 52,  218 => 51,  210 => 48,  206 => 46,  203 => 45,  199 => 38,  196 => 37,  193 => 36,  190 => 35,  187 => 34,  184 => 33,  181 => 32,  177 => 29,  174 => 28,  171 => 27,  168 => 26,  165 => 25,  162 => 24,  159 => 23,  157 => 22,  154 => 21,  151 => 20,  148 => 19,  145 => 18,  142 => 17,  139 => 16,  136 => 15,  133 => 14,  125 => 39,  123 => 32,  117 => 30,  115 => 14,  110 => 12,  106 => 11,  103 => 10,  101 => 9,  93 => 8,  90 => 7,  87 => 6,  81 => 98,  79 => 85,  75 => 83,  73 => 82,  68 => 79,  66 => 71,  63 => 70,  61 => 65,  58 => 64,  56 => 63,  53 => 62,  51 => 45,  46 => 43,  43 => 42,  41 => 6,  35 => 3,  32 => 2,  30 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* <head>*/
/* */
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/* */
/*     {% block stylesheets %}*/
/*         {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}*/
/*         {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}*/
/*         {% do assets.addCss('theme://css-compiled/template.css',101) %}*/
/*         {% do assets.addCss('theme://css/custom.css',100) %}*/
/*         {% do assets.addCss('theme://css/font-awesome.min.css',100) %}*/
/*         {% do assets.addCss('theme://css/slidebars.min.css') %}*/
/* */
/*         {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie10.css') %}*/
/*         {% endif %}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie9.css') %}*/
/*             {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/* */
/*     {% block javascripts %}*/
/*         {% do assets.addJs('jquery',101) %}*/
/*         {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}*/
/*         {% do assets.addJs('theme://js/antimatter.js') %}*/
/*         {% do assets.addJs('theme://js/slidebars.min.js') %}*/
/* 		{% do assets.addJs('theme://js/year.js') %}*/
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/* */
/* {% endblock head%}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/*     <div id="sb-site">*/
/*         {% block header %}*/
/*         <header id="header">*/
/*             <div id="logo">*/
/*                 <h3><a href="{{ base_url == '' ? '/' : base_url }}">{{ config.site.title }}</a></h3>*/
/*             </div>*/
/*             <div id="navbar">*/
/*                 {% block header_extra %}{% endblock %}*/
/*                 {% if config.plugins.langswitcher.enabled %}*/
/*                 {% include 'partials/langswitcher.html.twig' %}*/
/*                 {% endif %}*/
/*                 {% block header_navigation %}*/
/*                 {% include 'partials/navigation.html.twig' %}*/
/*                 {% endblock %}*/
/*                 <span class="panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars"></span>*/
/*             </div>*/
/*         </header>*/
/*         {% endblock %}*/
/* */
/*         {% block showcase %}{% endblock %}*/
/* */
/*         {% block body %}*/
/*         <section id="body" class="{{ class }}">*/
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*         <footer id="footer">*/
/*             <div class="totop">*/
/*                 <span><a href="#" id="toTop"><i class="fa fa-arrow-up"></i></a></span>*/
/*             </div>*/
/*             <p>Undergraduate Student Senate of Carnegie Mellon University</p>*/
/*         </footer>*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="sb-slidebar sb-left sb-width-thin">*/
/*         <div id="panel">*/
/*         {% include 'partials/navigation.html.twig' %}*/
/*         </div>*/
/*     </div>*/
/*     {% block bottom %}*/
/*         {{ assets.js('bottom') }}*/
/*         <script>*/
/*         $(function () {*/
/*             $(document).ready(function() {*/
/*               $.slidebars({*/
/*                 hideControlClasses: true,*/
/*                 scrollLock: true*/
/*               });*/
/*             });*/
/*         });*/
/*         </script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
