<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e9d859d7ee258799f77af025f4a18486b2cf3988430e744edd6dfa15723a1df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_db481655b64cbc0abe3de18c62f8b066de6a39ac1462db2e84322e1db69a9796 = $this->env->getExtension("native_profiler");
        $__internal_db481655b64cbc0abe3de18c62f8b066de6a39ac1462db2e84322e1db69a9796->enter($__internal_db481655b64cbc0abe3de18c62f8b066de6a39ac1462db2e84322e1db69a9796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db481655b64cbc0abe3de18c62f8b066de6a39ac1462db2e84322e1db69a9796->leave($__internal_db481655b64cbc0abe3de18c62f8b066de6a39ac1462db2e84322e1db69a9796_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7e94ab3e2f849980568402002c5c9cfe37778b310cde1cd56e102a98a4642ab = $this->env->getExtension("native_profiler");
        $__internal_b7e94ab3e2f849980568402002c5c9cfe37778b310cde1cd56e102a98a4642ab->enter($__internal_b7e94ab3e2f849980568402002c5c9cfe37778b310cde1cd56e102a98a4642ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b7e94ab3e2f849980568402002c5c9cfe37778b310cde1cd56e102a98a4642ab->leave($__internal_b7e94ab3e2f849980568402002c5c9cfe37778b310cde1cd56e102a98a4642ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
