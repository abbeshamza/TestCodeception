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
        $__internal_b73aa27a153d42f29ec3b1243eeac1426780f8905575094c994b0edbd6827160 = $this->env->getExtension("native_profiler");
        $__internal_b73aa27a153d42f29ec3b1243eeac1426780f8905575094c994b0edbd6827160->enter($__internal_b73aa27a153d42f29ec3b1243eeac1426780f8905575094c994b0edbd6827160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b73aa27a153d42f29ec3b1243eeac1426780f8905575094c994b0edbd6827160->leave($__internal_b73aa27a153d42f29ec3b1243eeac1426780f8905575094c994b0edbd6827160_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8882feedf9eb2d09c3c1fe205af2fe39215ff0a092453af217cfff9be93abcab = $this->env->getExtension("native_profiler");
        $__internal_8882feedf9eb2d09c3c1fe205af2fe39215ff0a092453af217cfff9be93abcab->enter($__internal_8882feedf9eb2d09c3c1fe205af2fe39215ff0a092453af217cfff9be93abcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8882feedf9eb2d09c3c1fe205af2fe39215ff0a092453af217cfff9be93abcab->leave($__internal_8882feedf9eb2d09c3c1fe205af2fe39215ff0a092453af217cfff9be93abcab_prof);

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
