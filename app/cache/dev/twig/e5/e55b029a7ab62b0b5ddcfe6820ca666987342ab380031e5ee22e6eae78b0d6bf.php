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
        $__internal_65908b3b9a7575bbb8c5cc294f06d9bec38249005988c2c4e43ce25d3c89801a = $this->env->getExtension("native_profiler");
        $__internal_65908b3b9a7575bbb8c5cc294f06d9bec38249005988c2c4e43ce25d3c89801a->enter($__internal_65908b3b9a7575bbb8c5cc294f06d9bec38249005988c2c4e43ce25d3c89801a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65908b3b9a7575bbb8c5cc294f06d9bec38249005988c2c4e43ce25d3c89801a->leave($__internal_65908b3b9a7575bbb8c5cc294f06d9bec38249005988c2c4e43ce25d3c89801a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bad1b30f09937be83b1e81837118a07f5805076a9f38df135352ad4ae17819f = $this->env->getExtension("native_profiler");
        $__internal_0bad1b30f09937be83b1e81837118a07f5805076a9f38df135352ad4ae17819f->enter($__internal_0bad1b30f09937be83b1e81837118a07f5805076a9f38df135352ad4ae17819f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0bad1b30f09937be83b1e81837118a07f5805076a9f38df135352ad4ae17819f->leave($__internal_0bad1b30f09937be83b1e81837118a07f5805076a9f38df135352ad4ae17819f_prof);

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
