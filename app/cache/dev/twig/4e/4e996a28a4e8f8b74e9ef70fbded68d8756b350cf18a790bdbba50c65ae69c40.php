<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_42668274bbf74365db798429cc710d629025867b4de04cc74ff57e354a4f609a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f58eb12c8a81a626cce0692e2484255c77df2bf4fd9b661271d09d00f725a67 = $this->env->getExtension("native_profiler");
        $__internal_4f58eb12c8a81a626cce0692e2484255c77df2bf4fd9b661271d09d00f725a67->enter($__internal_4f58eb12c8a81a626cce0692e2484255c77df2bf4fd9b661271d09d00f725a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f58eb12c8a81a626cce0692e2484255c77df2bf4fd9b661271d09d00f725a67->leave($__internal_4f58eb12c8a81a626cce0692e2484255c77df2bf4fd9b661271d09d00f725a67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_952af50bb6babf2fa0dd32c6ec8acf19f6d62d3cbbcdf98748c518ca4e4d5e39 = $this->env->getExtension("native_profiler");
        $__internal_952af50bb6babf2fa0dd32c6ec8acf19f6d62d3cbbcdf98748c518ca4e4d5e39->enter($__internal_952af50bb6babf2fa0dd32c6ec8acf19f6d62d3cbbcdf98748c518ca4e4d5e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_952af50bb6babf2fa0dd32c6ec8acf19f6d62d3cbbcdf98748c518ca4e4d5e39->leave($__internal_952af50bb6babf2fa0dd32c6ec8acf19f6d62d3cbbcdf98748c518ca4e4d5e39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
