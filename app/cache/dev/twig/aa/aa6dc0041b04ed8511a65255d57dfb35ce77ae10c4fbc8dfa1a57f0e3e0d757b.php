<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_15b6e21094c7405fd9154dda126e2a2e3453bb38398333465efbaebf24345c3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8d24cd5567946cce89ff4b7370ae8c8aaa26898ab650fa86579e9f3c2e7dd486 = $this->env->getExtension("native_profiler");
        $__internal_8d24cd5567946cce89ff4b7370ae8c8aaa26898ab650fa86579e9f3c2e7dd486->enter($__internal_8d24cd5567946cce89ff4b7370ae8c8aaa26898ab650fa86579e9f3c2e7dd486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d24cd5567946cce89ff4b7370ae8c8aaa26898ab650fa86579e9f3c2e7dd486->leave($__internal_8d24cd5567946cce89ff4b7370ae8c8aaa26898ab650fa86579e9f3c2e7dd486_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8d9f48507a616c4fe21d89aa4a034c7fd6dc08861c91d06a1602c130f0d4d76 = $this->env->getExtension("native_profiler");
        $__internal_d8d9f48507a616c4fe21d89aa4a034c7fd6dc08861c91d06a1602c130f0d4d76->enter($__internal_d8d9f48507a616c4fe21d89aa4a034c7fd6dc08861c91d06a1602c130f0d4d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d8d9f48507a616c4fe21d89aa4a034c7fd6dc08861c91d06a1602c130f0d4d76->leave($__internal_d8d9f48507a616c4fe21d89aa4a034c7fd6dc08861c91d06a1602c130f0d4d76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
