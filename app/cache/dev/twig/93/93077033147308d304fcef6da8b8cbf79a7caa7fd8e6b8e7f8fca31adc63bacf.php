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
        $__internal_6bb8a6716d0306c0d5b75a7e11a5176b64bd4b6acfa2b7408208a9e6bf719e0c = $this->env->getExtension("native_profiler");
        $__internal_6bb8a6716d0306c0d5b75a7e11a5176b64bd4b6acfa2b7408208a9e6bf719e0c->enter($__internal_6bb8a6716d0306c0d5b75a7e11a5176b64bd4b6acfa2b7408208a9e6bf719e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bb8a6716d0306c0d5b75a7e11a5176b64bd4b6acfa2b7408208a9e6bf719e0c->leave($__internal_6bb8a6716d0306c0d5b75a7e11a5176b64bd4b6acfa2b7408208a9e6bf719e0c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d012f14f4c5157a485389b5698de7acbc458f24286754305281a8c44e4ae3036 = $this->env->getExtension("native_profiler");
        $__internal_d012f14f4c5157a485389b5698de7acbc458f24286754305281a8c44e4ae3036->enter($__internal_d012f14f4c5157a485389b5698de7acbc458f24286754305281a8c44e4ae3036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d012f14f4c5157a485389b5698de7acbc458f24286754305281a8c44e4ae3036->leave($__internal_d012f14f4c5157a485389b5698de7acbc458f24286754305281a8c44e4ae3036_prof);

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
