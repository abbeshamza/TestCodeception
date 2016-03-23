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
        $__internal_8e8fe91959fa638bae1372a4110a207b2c4f8b87c4965d0fc8a6fa91c3546a2e = $this->env->getExtension("native_profiler");
        $__internal_8e8fe91959fa638bae1372a4110a207b2c4f8b87c4965d0fc8a6fa91c3546a2e->enter($__internal_8e8fe91959fa638bae1372a4110a207b2c4f8b87c4965d0fc8a6fa91c3546a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e8fe91959fa638bae1372a4110a207b2c4f8b87c4965d0fc8a6fa91c3546a2e->leave($__internal_8e8fe91959fa638bae1372a4110a207b2c4f8b87c4965d0fc8a6fa91c3546a2e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_532f348b3283c98a6949234bed13c6d27c6e188256899d660d9921fcc540b5f8 = $this->env->getExtension("native_profiler");
        $__internal_532f348b3283c98a6949234bed13c6d27c6e188256899d660d9921fcc540b5f8->enter($__internal_532f348b3283c98a6949234bed13c6d27c6e188256899d660d9921fcc540b5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_532f348b3283c98a6949234bed13c6d27c6e188256899d660d9921fcc540b5f8->leave($__internal_532f348b3283c98a6949234bed13c6d27c6e188256899d660d9921fcc540b5f8_prof);

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
