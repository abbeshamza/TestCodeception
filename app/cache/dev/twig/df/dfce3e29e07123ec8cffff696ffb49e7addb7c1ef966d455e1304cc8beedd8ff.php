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
        $__internal_dcd796b8c8e221f5a5031c5bac40b53d6b0cb203a866d0d7c87eacccbd1a9775 = $this->env->getExtension("native_profiler");
        $__internal_dcd796b8c8e221f5a5031c5bac40b53d6b0cb203a866d0d7c87eacccbd1a9775->enter($__internal_dcd796b8c8e221f5a5031c5bac40b53d6b0cb203a866d0d7c87eacccbd1a9775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcd796b8c8e221f5a5031c5bac40b53d6b0cb203a866d0d7c87eacccbd1a9775->leave($__internal_dcd796b8c8e221f5a5031c5bac40b53d6b0cb203a866d0d7c87eacccbd1a9775_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b1401b6b6fc64e443de31ba0258118acb28379aa02f878f78a6f702cf386158 = $this->env->getExtension("native_profiler");
        $__internal_1b1401b6b6fc64e443de31ba0258118acb28379aa02f878f78a6f702cf386158->enter($__internal_1b1401b6b6fc64e443de31ba0258118acb28379aa02f878f78a6f702cf386158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1b1401b6b6fc64e443de31ba0258118acb28379aa02f878f78a6f702cf386158->leave($__internal_1b1401b6b6fc64e443de31ba0258118acb28379aa02f878f78a6f702cf386158_prof);

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
