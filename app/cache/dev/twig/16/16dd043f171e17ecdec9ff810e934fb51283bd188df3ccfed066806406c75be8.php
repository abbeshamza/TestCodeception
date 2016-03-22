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
        $__internal_566437cfc55aed98adb43e2609e4d51b0430d555bb30e5664a28a2c1f1d0147f = $this->env->getExtension("native_profiler");
        $__internal_566437cfc55aed98adb43e2609e4d51b0430d555bb30e5664a28a2c1f1d0147f->enter($__internal_566437cfc55aed98adb43e2609e4d51b0430d555bb30e5664a28a2c1f1d0147f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_566437cfc55aed98adb43e2609e4d51b0430d555bb30e5664a28a2c1f1d0147f->leave($__internal_566437cfc55aed98adb43e2609e4d51b0430d555bb30e5664a28a2c1f1d0147f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4cdeac98f435e44f081578327ecf043bc0956a68af7432fcbaf20177c37f3e3 = $this->env->getExtension("native_profiler");
        $__internal_b4cdeac98f435e44f081578327ecf043bc0956a68af7432fcbaf20177c37f3e3->enter($__internal_b4cdeac98f435e44f081578327ecf043bc0956a68af7432fcbaf20177c37f3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b4cdeac98f435e44f081578327ecf043bc0956a68af7432fcbaf20177c37f3e3->leave($__internal_b4cdeac98f435e44f081578327ecf043bc0956a68af7432fcbaf20177c37f3e3_prof);

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
