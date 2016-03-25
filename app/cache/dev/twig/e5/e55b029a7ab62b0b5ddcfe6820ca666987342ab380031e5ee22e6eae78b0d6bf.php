<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_4f859d6549170b1bf916982c5e5c16953176625b14d0cf0f30156a04e15b8875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ab3f3c1f0578182a300f7680d7cf45ba00923244e8d1ea2712360ddef3c10590 = $this->env->getExtension("native_profiler");
        $__internal_ab3f3c1f0578182a300f7680d7cf45ba00923244e8d1ea2712360ddef3c10590->enter($__internal_ab3f3c1f0578182a300f7680d7cf45ba00923244e8d1ea2712360ddef3c10590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab3f3c1f0578182a300f7680d7cf45ba00923244e8d1ea2712360ddef3c10590->leave($__internal_ab3f3c1f0578182a300f7680d7cf45ba00923244e8d1ea2712360ddef3c10590_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e2bf6baa32613d204979e274f85960ee7c5411124fad18e54c75f00ffd402c0 = $this->env->getExtension("native_profiler");
        $__internal_4e2bf6baa32613d204979e274f85960ee7c5411124fad18e54c75f00ffd402c0->enter($__internal_4e2bf6baa32613d204979e274f85960ee7c5411124fad18e54c75f00ffd402c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4e2bf6baa32613d204979e274f85960ee7c5411124fad18e54c75f00ffd402c0->leave($__internal_4e2bf6baa32613d204979e274f85960ee7c5411124fad18e54c75f00ffd402c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
