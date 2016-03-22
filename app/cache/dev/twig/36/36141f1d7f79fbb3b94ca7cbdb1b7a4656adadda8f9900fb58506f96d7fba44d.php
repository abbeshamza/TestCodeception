<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7156c33c7603cd2af5481bb0986508dc063f8162ffff9169f3d0ad5e8e1731a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_1288dc53f4b0f0da0a998855ddeb10a057a5f09712311beccf3815aaabe859fc = $this->env->getExtension("native_profiler");
        $__internal_1288dc53f4b0f0da0a998855ddeb10a057a5f09712311beccf3815aaabe859fc->enter($__internal_1288dc53f4b0f0da0a998855ddeb10a057a5f09712311beccf3815aaabe859fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1288dc53f4b0f0da0a998855ddeb10a057a5f09712311beccf3815aaabe859fc->leave($__internal_1288dc53f4b0f0da0a998855ddeb10a057a5f09712311beccf3815aaabe859fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b8823ba49185131a9799fb86e8f23b72bfdbb02d07d13b0ca794ccb179e05da = $this->env->getExtension("native_profiler");
        $__internal_8b8823ba49185131a9799fb86e8f23b72bfdbb02d07d13b0ca794ccb179e05da->enter($__internal_8b8823ba49185131a9799fb86e8f23b72bfdbb02d07d13b0ca794ccb179e05da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8b8823ba49185131a9799fb86e8f23b72bfdbb02d07d13b0ca794ccb179e05da->leave($__internal_8b8823ba49185131a9799fb86e8f23b72bfdbb02d07d13b0ca794ccb179e05da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
