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
        $__internal_abe82d52fd51e06efbcd000dfcdfce826bc51a634b043a75d70eb78d471ad292 = $this->env->getExtension("native_profiler");
        $__internal_abe82d52fd51e06efbcd000dfcdfce826bc51a634b043a75d70eb78d471ad292->enter($__internal_abe82d52fd51e06efbcd000dfcdfce826bc51a634b043a75d70eb78d471ad292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abe82d52fd51e06efbcd000dfcdfce826bc51a634b043a75d70eb78d471ad292->leave($__internal_abe82d52fd51e06efbcd000dfcdfce826bc51a634b043a75d70eb78d471ad292_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb7d5a50477d6bb4c9322d8b2a9112aea8eccd409cf0288bbcaa42620c4afb01 = $this->env->getExtension("native_profiler");
        $__internal_bb7d5a50477d6bb4c9322d8b2a9112aea8eccd409cf0288bbcaa42620c4afb01->enter($__internal_bb7d5a50477d6bb4c9322d8b2a9112aea8eccd409cf0288bbcaa42620c4afb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_bb7d5a50477d6bb4c9322d8b2a9112aea8eccd409cf0288bbcaa42620c4afb01->leave($__internal_bb7d5a50477d6bb4c9322d8b2a9112aea8eccd409cf0288bbcaa42620c4afb01_prof);

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
