<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_57ae747d2271da3722d5213e7895490ab9a6fd7a7f7ba09b0a7377e3b7b2d4dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_056340787374fca132016ab57bec9af7e7a4504d8a210e2a38322de68238dc5c = $this->env->getExtension("native_profiler");
        $__internal_056340787374fca132016ab57bec9af7e7a4504d8a210e2a38322de68238dc5c->enter($__internal_056340787374fca132016ab57bec9af7e7a4504d8a210e2a38322de68238dc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_056340787374fca132016ab57bec9af7e7a4504d8a210e2a38322de68238dc5c->leave($__internal_056340787374fca132016ab57bec9af7e7a4504d8a210e2a38322de68238dc5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_047b977865eb3481f104e353c86706d5f033989cf1e90e8130263b0ab9eb586d = $this->env->getExtension("native_profiler");
        $__internal_047b977865eb3481f104e353c86706d5f033989cf1e90e8130263b0ab9eb586d->enter($__internal_047b977865eb3481f104e353c86706d5f033989cf1e90e8130263b0ab9eb586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_047b977865eb3481f104e353c86706d5f033989cf1e90e8130263b0ab9eb586d->leave($__internal_047b977865eb3481f104e353c86706d5f033989cf1e90e8130263b0ab9eb586d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
