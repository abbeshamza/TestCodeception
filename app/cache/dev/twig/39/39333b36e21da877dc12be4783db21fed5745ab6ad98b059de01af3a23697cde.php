<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_eb61bbcc5cb08ff6dc7c112d5a09e75fb18eaa29bd9d4039974bbeee9f0f0054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_3bd22d11c9b383e6d7f3d4d3b8b2dc3a6a0d74bd6464221808738d3b616f9858 = $this->env->getExtension("native_profiler");
        $__internal_3bd22d11c9b383e6d7f3d4d3b8b2dc3a6a0d74bd6464221808738d3b616f9858->enter($__internal_3bd22d11c9b383e6d7f3d4d3b8b2dc3a6a0d74bd6464221808738d3b616f9858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd22d11c9b383e6d7f3d4d3b8b2dc3a6a0d74bd6464221808738d3b616f9858->leave($__internal_3bd22d11c9b383e6d7f3d4d3b8b2dc3a6a0d74bd6464221808738d3b616f9858_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e63428208cfa6193d7c1355814d5a1d70d80cbec0de00521a5bf8087e05ad6d = $this->env->getExtension("native_profiler");
        $__internal_0e63428208cfa6193d7c1355814d5a1d70d80cbec0de00521a5bf8087e05ad6d->enter($__internal_0e63428208cfa6193d7c1355814d5a1d70d80cbec0de00521a5bf8087e05ad6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0e63428208cfa6193d7c1355814d5a1d70d80cbec0de00521a5bf8087e05ad6d->leave($__internal_0e63428208cfa6193d7c1355814d5a1d70d80cbec0de00521a5bf8087e05ad6d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
