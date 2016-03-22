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
        $__internal_2be341b1b7cbf8c5d22e1dcec6708788fb50c0d6f54be3d645b1db4703db89da = $this->env->getExtension("native_profiler");
        $__internal_2be341b1b7cbf8c5d22e1dcec6708788fb50c0d6f54be3d645b1db4703db89da->enter($__internal_2be341b1b7cbf8c5d22e1dcec6708788fb50c0d6f54be3d645b1db4703db89da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be341b1b7cbf8c5d22e1dcec6708788fb50c0d6f54be3d645b1db4703db89da->leave($__internal_2be341b1b7cbf8c5d22e1dcec6708788fb50c0d6f54be3d645b1db4703db89da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07268b1ef3a0a1154275916aba44b827c7501213bc8a7bc0b7babc5b07cbd837 = $this->env->getExtension("native_profiler");
        $__internal_07268b1ef3a0a1154275916aba44b827c7501213bc8a7bc0b7babc5b07cbd837->enter($__internal_07268b1ef3a0a1154275916aba44b827c7501213bc8a7bc0b7babc5b07cbd837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_07268b1ef3a0a1154275916aba44b827c7501213bc8a7bc0b7babc5b07cbd837->leave($__internal_07268b1ef3a0a1154275916aba44b827c7501213bc8a7bc0b7babc5b07cbd837_prof);

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
