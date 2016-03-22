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
        $__internal_c7e6fd4f996114d303b0809438f9eac89a78d3fa019c6d4c0c68d5477ff66806 = $this->env->getExtension("native_profiler");
        $__internal_c7e6fd4f996114d303b0809438f9eac89a78d3fa019c6d4c0c68d5477ff66806->enter($__internal_c7e6fd4f996114d303b0809438f9eac89a78d3fa019c6d4c0c68d5477ff66806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7e6fd4f996114d303b0809438f9eac89a78d3fa019c6d4c0c68d5477ff66806->leave($__internal_c7e6fd4f996114d303b0809438f9eac89a78d3fa019c6d4c0c68d5477ff66806_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5c2f513268344b795b0b5b70ca0f2ba8e7c18c6fb8a1d7e25e0d7f20cef6891 = $this->env->getExtension("native_profiler");
        $__internal_b5c2f513268344b795b0b5b70ca0f2ba8e7c18c6fb8a1d7e25e0d7f20cef6891->enter($__internal_b5c2f513268344b795b0b5b70ca0f2ba8e7c18c6fb8a1d7e25e0d7f20cef6891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b5c2f513268344b795b0b5b70ca0f2ba8e7c18c6fb8a1d7e25e0d7f20cef6891->leave($__internal_b5c2f513268344b795b0b5b70ca0f2ba8e7c18c6fb8a1d7e25e0d7f20cef6891_prof);

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
