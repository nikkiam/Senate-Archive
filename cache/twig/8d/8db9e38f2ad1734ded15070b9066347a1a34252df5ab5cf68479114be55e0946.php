<?php

/* calendar.html.twig */
class __TwigTemplate_1e425ee7b54a7c05063224ab69505ffc31ab484300c45c126da747a2b34f1bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "calendar.html.twig", 1);
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
        echo "\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

<div id=\"GCoptions\"></div>

<!-- Google Calendar iframe paste below, add name=\"calendar\" -->
<iframe name=\"calendar\" src=\"https://calendar.google.com/calendar/embed?title=Student%20Senate%20GBMs%20and%20Events&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=4eoefqf7go262jidm62lk32qdk%40group.calendar.google.com&amp;color=%23B1365F&amp;src=ntu38bqifqcec3jlo3deiepag8%40group.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FNew_York\" style=\"border: 0; height:600px; width:800px;\" frameborder=\"0\" scrolling=\"no\"></iframe>



";
    }

    public function getTemplateName()
    {
        return "calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	{{ page.content }}*/
/* */
/* <div id="GCoptions"></div>*/
/* */
/* <!-- Google Calendar iframe paste below, add name="calendar" -->*/
/* <iframe name="calendar" src="https://calendar.google.com/calendar/embed?title=Student%20Senate%20GBMs%20and%20Events&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=4eoefqf7go262jidm62lk32qdk%40group.calendar.google.com&amp;color=%23B1365F&amp;src=ntu38bqifqcec3jlo3deiepag8%40group.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FNew_York" style="border: 0; height:600px; width:800px;" frameborder="0" scrolling="no"></iframe>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
