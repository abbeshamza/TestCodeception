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
        $__internal_70f47aaa6f0b7e58716ebcaf42ae40b3c18f61c46290a0333fe73a585f3ac172 = $this->env->getExtension("native_profiler");
        $__internal_70f47aaa6f0b7e58716ebcaf42ae40b3c18f61c46290a0333fe73a585f3ac172->enter($__internal_70f47aaa6f0b7e58716ebcaf42ae40b3c18f61c46290a0333fe73a585f3ac172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70f47aaa6f0b7e58716ebcaf42ae40b3c18f61c46290a0333fe73a585f3ac172->leave($__internal_70f47aaa6f0b7e58716ebcaf42ae40b3c18f61c46290a0333fe73a585f3ac172_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87b6f08418398ee59dd7ed6bb2bc45c9d961f9669055259dd2883b44dc65dc39 = $this->env->getExtension("native_profiler");
        $__internal_87b6f08418398ee59dd7ed6bb2bc45c9d961f9669055259dd2883b44dc65dc39->enter($__internal_87b6f08418398ee59dd7ed6bb2bc45c9d961f9669055259dd2883b44dc65dc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_87b6f08418398ee59dd7ed6bb2bc45c9d961f9669055259dd2883b44dc65dc39->leave($__internal_87b6f08418398ee59dd7ed6bb2bc45c9d961f9669055259dd2883b44dc65dc39_prof);

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
