<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1394dac0215653bb02f2d4e2cca0d07dab18fc89db12e43492eda6d7926add48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_7d0fa5b107d6bccf1ca2fdd1e7601752fdc7ebe6d63636ce4ae4815d022d8231 = $this->env->getExtension("native_profiler");
        $__internal_7d0fa5b107d6bccf1ca2fdd1e7601752fdc7ebe6d63636ce4ae4815d022d8231->enter($__internal_7d0fa5b107d6bccf1ca2fdd1e7601752fdc7ebe6d63636ce4ae4815d022d8231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d0fa5b107d6bccf1ca2fdd1e7601752fdc7ebe6d63636ce4ae4815d022d8231->leave($__internal_7d0fa5b107d6bccf1ca2fdd1e7601752fdc7ebe6d63636ce4ae4815d022d8231_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e674d38c2e8bb5640c8b690f7ea98481bc6bf8d4b947826a881c50ddf9d2e1d = $this->env->getExtension("native_profiler");
        $__internal_1e674d38c2e8bb5640c8b690f7ea98481bc6bf8d4b947826a881c50ddf9d2e1d->enter($__internal_1e674d38c2e8bb5640c8b690f7ea98481bc6bf8d4b947826a881c50ddf9d2e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1e674d38c2e8bb5640c8b690f7ea98481bc6bf8d4b947826a881c50ddf9d2e1d->leave($__internal_1e674d38c2e8bb5640c8b690f7ea98481bc6bf8d4b947826a881c50ddf9d2e1d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
