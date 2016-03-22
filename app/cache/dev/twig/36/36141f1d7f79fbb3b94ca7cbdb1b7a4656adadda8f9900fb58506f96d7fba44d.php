<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7156c33c7603cd2af5481bb0986508dc063f8162ffff9169f3d0ad5e8e1731a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e20b5b7b9d501d5a1be8d6d8801db7cb85a4dd885c597745c7eb1365d9c7ddc1 = $this->env->getExtension("native_profiler");
        $__internal_e20b5b7b9d501d5a1be8d6d8801db7cb85a4dd885c597745c7eb1365d9c7ddc1->enter($__internal_e20b5b7b9d501d5a1be8d6d8801db7cb85a4dd885c597745c7eb1365d9c7ddc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e20b5b7b9d501d5a1be8d6d8801db7cb85a4dd885c597745c7eb1365d9c7ddc1->leave($__internal_e20b5b7b9d501d5a1be8d6d8801db7cb85a4dd885c597745c7eb1365d9c7ddc1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8a328b69a2c96a9454706580b85913482a5998160a9d2b995e2e3d06aabba45 = $this->env->getExtension("native_profiler");
        $__internal_d8a328b69a2c96a9454706580b85913482a5998160a9d2b995e2e3d06aabba45->enter($__internal_d8a328b69a2c96a9454706580b85913482a5998160a9d2b995e2e3d06aabba45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d8a328b69a2c96a9454706580b85913482a5998160a9d2b995e2e3d06aabba45->leave($__internal_d8a328b69a2c96a9454706580b85913482a5998160a9d2b995e2e3d06aabba45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
