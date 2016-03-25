<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9d6a9c0eeefe661f54394fbcae051d069dc6479936da681569209b5ea1a924fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_15f6768b594a136cef82155aa24cf3237a5cf34ec8c7981b0015b2251bec990b = $this->env->getExtension("native_profiler");
        $__internal_15f6768b594a136cef82155aa24cf3237a5cf34ec8c7981b0015b2251bec990b->enter($__internal_15f6768b594a136cef82155aa24cf3237a5cf34ec8c7981b0015b2251bec990b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f6768b594a136cef82155aa24cf3237a5cf34ec8c7981b0015b2251bec990b->leave($__internal_15f6768b594a136cef82155aa24cf3237a5cf34ec8c7981b0015b2251bec990b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_459a344b0706f89a82aeed10b9f4c172d1dd5c4db058ded4aefda5e1cc87ff67 = $this->env->getExtension("native_profiler");
        $__internal_459a344b0706f89a82aeed10b9f4c172d1dd5c4db058ded4aefda5e1cc87ff67->enter($__internal_459a344b0706f89a82aeed10b9f4c172d1dd5c4db058ded4aefda5e1cc87ff67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_459a344b0706f89a82aeed10b9f4c172d1dd5c4db058ded4aefda5e1cc87ff67->leave($__internal_459a344b0706f89a82aeed10b9f4c172d1dd5c4db058ded4aefda5e1cc87ff67_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
