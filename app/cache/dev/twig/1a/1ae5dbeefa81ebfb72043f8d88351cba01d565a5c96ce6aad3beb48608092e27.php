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
        $__internal_62370f807aca158c5b97a0f499df98f7f1441c1c7be512b2f58e75628dab8579 = $this->env->getExtension("native_profiler");
        $__internal_62370f807aca158c5b97a0f499df98f7f1441c1c7be512b2f58e75628dab8579->enter($__internal_62370f807aca158c5b97a0f499df98f7f1441c1c7be512b2f58e75628dab8579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62370f807aca158c5b97a0f499df98f7f1441c1c7be512b2f58e75628dab8579->leave($__internal_62370f807aca158c5b97a0f499df98f7f1441c1c7be512b2f58e75628dab8579_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7f485bc8d62766075dc1d8a327abafb579b2ce52c6aaf3889b249ebb617306d = $this->env->getExtension("native_profiler");
        $__internal_e7f485bc8d62766075dc1d8a327abafb579b2ce52c6aaf3889b249ebb617306d->enter($__internal_e7f485bc8d62766075dc1d8a327abafb579b2ce52c6aaf3889b249ebb617306d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e7f485bc8d62766075dc1d8a327abafb579b2ce52c6aaf3889b249ebb617306d->leave($__internal_e7f485bc8d62766075dc1d8a327abafb579b2ce52c6aaf3889b249ebb617306d_prof);

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
