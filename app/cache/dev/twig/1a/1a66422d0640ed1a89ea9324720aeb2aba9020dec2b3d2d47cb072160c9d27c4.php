<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_00772cb81a31214eba5753c90a10f6a5dfd82a92f6790c449d228419d27ba28d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_f69cf01450288ef7bf68f63307191a65cf00d2b6051b0f013f29d2cde3622fc7 = $this->env->getExtension("native_profiler");
        $__internal_f69cf01450288ef7bf68f63307191a65cf00d2b6051b0f013f29d2cde3622fc7->enter($__internal_f69cf01450288ef7bf68f63307191a65cf00d2b6051b0f013f29d2cde3622fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f69cf01450288ef7bf68f63307191a65cf00d2b6051b0f013f29d2cde3622fc7->leave($__internal_f69cf01450288ef7bf68f63307191a65cf00d2b6051b0f013f29d2cde3622fc7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e95ac48c148d592f5520ecee03d6af2ba2c2f41f10ff12c44227138b81d51785 = $this->env->getExtension("native_profiler");
        $__internal_e95ac48c148d592f5520ecee03d6af2ba2c2f41f10ff12c44227138b81d51785->enter($__internal_e95ac48c148d592f5520ecee03d6af2ba2c2f41f10ff12c44227138b81d51785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e95ac48c148d592f5520ecee03d6af2ba2c2f41f10ff12c44227138b81d51785->leave($__internal_e95ac48c148d592f5520ecee03d6af2ba2c2f41f10ff12c44227138b81d51785_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
