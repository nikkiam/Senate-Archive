<?php

/* features.html.twig */
class __TwigTemplate_dc7014822520ff6bd82b2750d08d5fba7fa6979372eaa5373660543d88da1178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "features.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"features\">
    ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    <ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 8
            echo "        <li>
            <i class=\"fa fa-fw fa-";
            // line 9
            echo $this->getAttribute($context["feature"], "icon", array());
            echo "\"></i>
            <h4>";
            // line 10
            echo $this->getAttribute($context["feature"], "title", array());
            echo "</h4>
            <p>";
            // line 11
            echo $this->getAttribute($context["feature"], "subtitle", array());
            echo "</p>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  54 => 11,  50 => 10,  46 => 9,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <div class="features">*/
/*     {{ content }}*/
/*     <ul>*/
/*     {% for feature in page.header.features %}*/
/*         <li>*/
/*             <i class="fa fa-fw fa-{{ feature.icon }}"></i>*/
/*             <h4>{{ feature.title }}</h4>*/
/*             <p>{{ feature.subtitle }}</p>*/
/*         </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
