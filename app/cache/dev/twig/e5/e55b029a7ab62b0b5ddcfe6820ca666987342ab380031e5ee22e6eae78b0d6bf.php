<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4f859d6549170b1bf916982c5e5c16953176625b14d0cf0f30156a04e15b8875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_1e13d800093288e5f21d1c0da6eb68cc813167c7fb5663438d8feeda1ab7011f = $this->env->getExtension("native_profiler");
        $__internal_1e13d800093288e5f21d1c0da6eb68cc813167c7fb5663438d8feeda1ab7011f->enter($__internal_1e13d800093288e5f21d1c0da6eb68cc813167c7fb5663438d8feeda1ab7011f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e13d800093288e5f21d1c0da6eb68cc813167c7fb5663438d8feeda1ab7011f->leave($__internal_1e13d800093288e5f21d1c0da6eb68cc813167c7fb5663438d8feeda1ab7011f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dfa12bc60d8d08e5a7862457059b7c313af9ed6f059791cd4c11c53d9c791a9c = $this->env->getExtension("native_profiler");
        $__internal_dfa12bc60d8d08e5a7862457059b7c313af9ed6f059791cd4c11c53d9c791a9c->enter($__internal_dfa12bc60d8d08e5a7862457059b7c313af9ed6f059791cd4c11c53d9c791a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_dfa12bc60d8d08e5a7862457059b7c313af9ed6f059791cd4c11c53d9c791a9c->leave($__internal_dfa12bc60d8d08e5a7862457059b7c313af9ed6f059791cd4c11c53d9c791a9c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
