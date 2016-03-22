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
        $__internal_0c694b0f614d1b065a22385f2671b1b4ecf90932769a0c8d220c8698ed34e6f5 = $this->env->getExtension("native_profiler");
        $__internal_0c694b0f614d1b065a22385f2671b1b4ecf90932769a0c8d220c8698ed34e6f5->enter($__internal_0c694b0f614d1b065a22385f2671b1b4ecf90932769a0c8d220c8698ed34e6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c694b0f614d1b065a22385f2671b1b4ecf90932769a0c8d220c8698ed34e6f5->leave($__internal_0c694b0f614d1b065a22385f2671b1b4ecf90932769a0c8d220c8698ed34e6f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ff6095f60419bb6140826654502127d92ca2906138cb79f9b7f0c3479a2184b = $this->env->getExtension("native_profiler");
        $__internal_4ff6095f60419bb6140826654502127d92ca2906138cb79f9b7f0c3479a2184b->enter($__internal_4ff6095f60419bb6140826654502127d92ca2906138cb79f9b7f0c3479a2184b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4ff6095f60419bb6140826654502127d92ca2906138cb79f9b7f0c3479a2184b->leave($__internal_4ff6095f60419bb6140826654502127d92ca2906138cb79f9b7f0c3479a2184b_prof);

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
