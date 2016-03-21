<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0325499e1c0c0a4934def3d6fc41247d4c1a920337f150bbdc91f6b1a7b32b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_09b707b53898af014b030f3a7bdbad8dd47a788c7ac43223adb966c88acddee9 = $this->env->getExtension("native_profiler");
        $__internal_09b707b53898af014b030f3a7bdbad8dd47a788c7ac43223adb966c88acddee9->enter($__internal_09b707b53898af014b030f3a7bdbad8dd47a788c7ac43223adb966c88acddee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09b707b53898af014b030f3a7bdbad8dd47a788c7ac43223adb966c88acddee9->leave($__internal_09b707b53898af014b030f3a7bdbad8dd47a788c7ac43223adb966c88acddee9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3baa5b0b048ab2bbde94d2f23e579c8bf92f318bf65c8d270dec259640111d4c = $this->env->getExtension("native_profiler");
        $__internal_3baa5b0b048ab2bbde94d2f23e579c8bf92f318bf65c8d270dec259640111d4c->enter($__internal_3baa5b0b048ab2bbde94d2f23e579c8bf92f318bf65c8d270dec259640111d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3baa5b0b048ab2bbde94d2f23e579c8bf92f318bf65c8d270dec259640111d4c->leave($__internal_3baa5b0b048ab2bbde94d2f23e579c8bf92f318bf65c8d270dec259640111d4c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
