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
        $__internal_ca7e64015f9a6fc5e5ff2e75d11f469ce0f03123723881112a8289da566b97e9 = $this->env->getExtension("native_profiler");
        $__internal_ca7e64015f9a6fc5e5ff2e75d11f469ce0f03123723881112a8289da566b97e9->enter($__internal_ca7e64015f9a6fc5e5ff2e75d11f469ce0f03123723881112a8289da566b97e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca7e64015f9a6fc5e5ff2e75d11f469ce0f03123723881112a8289da566b97e9->leave($__internal_ca7e64015f9a6fc5e5ff2e75d11f469ce0f03123723881112a8289da566b97e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3e9cd4e31ed26c3bc400ba811de058666161d2bf34adbd486e762b1b053b471 = $this->env->getExtension("native_profiler");
        $__internal_f3e9cd4e31ed26c3bc400ba811de058666161d2bf34adbd486e762b1b053b471->enter($__internal_f3e9cd4e31ed26c3bc400ba811de058666161d2bf34adbd486e762b1b053b471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f3e9cd4e31ed26c3bc400ba811de058666161d2bf34adbd486e762b1b053b471->leave($__internal_f3e9cd4e31ed26c3bc400ba811de058666161d2bf34adbd486e762b1b053b471_prof);

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
