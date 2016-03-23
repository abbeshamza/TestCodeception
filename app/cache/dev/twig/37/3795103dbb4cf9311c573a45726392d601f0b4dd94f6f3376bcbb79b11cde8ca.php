<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1394dac0215653bb02f2d4e2cca0d07dab18fc89db12e43492eda6d7926add48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e3c860396e2e51d81307c721ece1e2a0ba6a7c1129c5e4c0d64e547b98d326eb = $this->env->getExtension("native_profiler");
        $__internal_e3c860396e2e51d81307c721ece1e2a0ba6a7c1129c5e4c0d64e547b98d326eb->enter($__internal_e3c860396e2e51d81307c721ece1e2a0ba6a7c1129c5e4c0d64e547b98d326eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3c860396e2e51d81307c721ece1e2a0ba6a7c1129c5e4c0d64e547b98d326eb->leave($__internal_e3c860396e2e51d81307c721ece1e2a0ba6a7c1129c5e4c0d64e547b98d326eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cb506ec9228c44a9368e69df65c141f7341a332af471e9669acbaef77c495c4 = $this->env->getExtension("native_profiler");
        $__internal_8cb506ec9228c44a9368e69df65c141f7341a332af471e9669acbaef77c495c4->enter($__internal_8cb506ec9228c44a9368e69df65c141f7341a332af471e9669acbaef77c495c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8cb506ec9228c44a9368e69df65c141f7341a332af471e9669acbaef77c495c4->leave($__internal_8cb506ec9228c44a9368e69df65c141f7341a332af471e9669acbaef77c495c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
