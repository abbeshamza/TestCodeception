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
        $__internal_c14b1bdcc0541f293b0b662b1b1f9afe31e7a80d92a9eea453fabb45da8d1fe2 = $this->env->getExtension("native_profiler");
        $__internal_c14b1bdcc0541f293b0b662b1b1f9afe31e7a80d92a9eea453fabb45da8d1fe2->enter($__internal_c14b1bdcc0541f293b0b662b1b1f9afe31e7a80d92a9eea453fabb45da8d1fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c14b1bdcc0541f293b0b662b1b1f9afe31e7a80d92a9eea453fabb45da8d1fe2->leave($__internal_c14b1bdcc0541f293b0b662b1b1f9afe31e7a80d92a9eea453fabb45da8d1fe2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed1bbb066b75d172000d94074b5e1c00cf7bb008c6159451b38d4bfebba676f2 = $this->env->getExtension("native_profiler");
        $__internal_ed1bbb066b75d172000d94074b5e1c00cf7bb008c6159451b38d4bfebba676f2->enter($__internal_ed1bbb066b75d172000d94074b5e1c00cf7bb008c6159451b38d4bfebba676f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ed1bbb066b75d172000d94074b5e1c00cf7bb008c6159451b38d4bfebba676f2->leave($__internal_ed1bbb066b75d172000d94074b5e1c00cf7bb008c6159451b38d4bfebba676f2_prof);

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
