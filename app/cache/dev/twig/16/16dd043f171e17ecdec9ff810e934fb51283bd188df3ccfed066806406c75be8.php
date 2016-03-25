<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_57ae747d2271da3722d5213e7895490ab9a6fd7a7f7ba09b0a7377e3b7b2d4dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9f190dc2e3cbfac9dec9a2a381f819d3e72d88007d0c896e01b384ff888d9257 = $this->env->getExtension("native_profiler");
        $__internal_9f190dc2e3cbfac9dec9a2a381f819d3e72d88007d0c896e01b384ff888d9257->enter($__internal_9f190dc2e3cbfac9dec9a2a381f819d3e72d88007d0c896e01b384ff888d9257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f190dc2e3cbfac9dec9a2a381f819d3e72d88007d0c896e01b384ff888d9257->leave($__internal_9f190dc2e3cbfac9dec9a2a381f819d3e72d88007d0c896e01b384ff888d9257_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51d9f95f24ef69f58916a264bcabcd26a1942aed5411ec96f36aa814f5b87e38 = $this->env->getExtension("native_profiler");
        $__internal_51d9f95f24ef69f58916a264bcabcd26a1942aed5411ec96f36aa814f5b87e38->enter($__internal_51d9f95f24ef69f58916a264bcabcd26a1942aed5411ec96f36aa814f5b87e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_51d9f95f24ef69f58916a264bcabcd26a1942aed5411ec96f36aa814f5b87e38->leave($__internal_51d9f95f24ef69f58916a264bcabcd26a1942aed5411ec96f36aa814f5b87e38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
