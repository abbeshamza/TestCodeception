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
        $__internal_015faf1a09ddc79c35408aafb59ed33764c55d1b75cf75be8d0340e02a518957 = $this->env->getExtension("native_profiler");
        $__internal_015faf1a09ddc79c35408aafb59ed33764c55d1b75cf75be8d0340e02a518957->enter($__internal_015faf1a09ddc79c35408aafb59ed33764c55d1b75cf75be8d0340e02a518957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_015faf1a09ddc79c35408aafb59ed33764c55d1b75cf75be8d0340e02a518957->leave($__internal_015faf1a09ddc79c35408aafb59ed33764c55d1b75cf75be8d0340e02a518957_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11be867c39279e810f2dc83e3c7a2ba3fed4a97447474d4e205712464d275e30 = $this->env->getExtension("native_profiler");
        $__internal_11be867c39279e810f2dc83e3c7a2ba3fed4a97447474d4e205712464d275e30->enter($__internal_11be867c39279e810f2dc83e3c7a2ba3fed4a97447474d4e205712464d275e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_11be867c39279e810f2dc83e3c7a2ba3fed4a97447474d4e205712464d275e30->leave($__internal_11be867c39279e810f2dc83e3c7a2ba3fed4a97447474d4e205712464d275e30_prof);

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
