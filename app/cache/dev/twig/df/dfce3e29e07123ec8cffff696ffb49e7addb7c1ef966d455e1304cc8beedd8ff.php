<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0b096bb1fd346036963efac1c3bf6cf883716766c10da0151a353cdb527abb3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_074e4b8326e586b5132611a05e9180f68b1a7457f73765cb3ede151ab5383643 = $this->env->getExtension("native_profiler");
        $__internal_074e4b8326e586b5132611a05e9180f68b1a7457f73765cb3ede151ab5383643->enter($__internal_074e4b8326e586b5132611a05e9180f68b1a7457f73765cb3ede151ab5383643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_074e4b8326e586b5132611a05e9180f68b1a7457f73765cb3ede151ab5383643->leave($__internal_074e4b8326e586b5132611a05e9180f68b1a7457f73765cb3ede151ab5383643_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ef0db17ed2a1dfe8ef40d0dc2be8d5087744739faf6e2f179e88d9897b89cc6 = $this->env->getExtension("native_profiler");
        $__internal_3ef0db17ed2a1dfe8ef40d0dc2be8d5087744739faf6e2f179e88d9897b89cc6->enter($__internal_3ef0db17ed2a1dfe8ef40d0dc2be8d5087744739faf6e2f179e88d9897b89cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3ef0db17ed2a1dfe8ef40d0dc2be8d5087744739faf6e2f179e88d9897b89cc6->leave($__internal_3ef0db17ed2a1dfe8ef40d0dc2be8d5087744739faf6e2f179e88d9897b89cc6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
