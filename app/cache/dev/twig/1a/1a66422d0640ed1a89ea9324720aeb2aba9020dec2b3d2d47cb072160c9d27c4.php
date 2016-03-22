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
        $__internal_5a912d67ccdf5191046fe223cbbcf693fb5299686b48c0d6bbe5c2773312dce4 = $this->env->getExtension("native_profiler");
        $__internal_5a912d67ccdf5191046fe223cbbcf693fb5299686b48c0d6bbe5c2773312dce4->enter($__internal_5a912d67ccdf5191046fe223cbbcf693fb5299686b48c0d6bbe5c2773312dce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a912d67ccdf5191046fe223cbbcf693fb5299686b48c0d6bbe5c2773312dce4->leave($__internal_5a912d67ccdf5191046fe223cbbcf693fb5299686b48c0d6bbe5c2773312dce4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0abc42652724704f10168a689b5cfcb299f212d524d2a88001c2cad48a19f3a = $this->env->getExtension("native_profiler");
        $__internal_d0abc42652724704f10168a689b5cfcb299f212d524d2a88001c2cad48a19f3a->enter($__internal_d0abc42652724704f10168a689b5cfcb299f212d524d2a88001c2cad48a19f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_d0abc42652724704f10168a689b5cfcb299f212d524d2a88001c2cad48a19f3a->leave($__internal_d0abc42652724704f10168a689b5cfcb299f212d524d2a88001c2cad48a19f3a_prof);

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
