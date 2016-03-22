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
        $__internal_2ce77e7bf00d80a2803fe955d9da11dcb7b250c9bead52fcac871b7dd81a77d6 = $this->env->getExtension("native_profiler");
        $__internal_2ce77e7bf00d80a2803fe955d9da11dcb7b250c9bead52fcac871b7dd81a77d6->enter($__internal_2ce77e7bf00d80a2803fe955d9da11dcb7b250c9bead52fcac871b7dd81a77d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ce77e7bf00d80a2803fe955d9da11dcb7b250c9bead52fcac871b7dd81a77d6->leave($__internal_2ce77e7bf00d80a2803fe955d9da11dcb7b250c9bead52fcac871b7dd81a77d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb78c16110f3f97a3f60f92b47a1cd2d44fdccdc1d91f5392bb5b70c5ba2546d = $this->env->getExtension("native_profiler");
        $__internal_bb78c16110f3f97a3f60f92b47a1cd2d44fdccdc1d91f5392bb5b70c5ba2546d->enter($__internal_bb78c16110f3f97a3f60f92b47a1cd2d44fdccdc1d91f5392bb5b70c5ba2546d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_bb78c16110f3f97a3f60f92b47a1cd2d44fdccdc1d91f5392bb5b70c5ba2546d->leave($__internal_bb78c16110f3f97a3f60f92b47a1cd2d44fdccdc1d91f5392bb5b70c5ba2546d_prof);

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
