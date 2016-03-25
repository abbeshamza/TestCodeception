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
        $__internal_36ab646f1c094a5af2ba665ef61537df6b43c8e5d1dee18e27e40f87c4a3ed5f = $this->env->getExtension("native_profiler");
        $__internal_36ab646f1c094a5af2ba665ef61537df6b43c8e5d1dee18e27e40f87c4a3ed5f->enter($__internal_36ab646f1c094a5af2ba665ef61537df6b43c8e5d1dee18e27e40f87c4a3ed5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36ab646f1c094a5af2ba665ef61537df6b43c8e5d1dee18e27e40f87c4a3ed5f->leave($__internal_36ab646f1c094a5af2ba665ef61537df6b43c8e5d1dee18e27e40f87c4a3ed5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f03c25979b3586024b8be973f648109a2ba73e59f4d59165c2a4b081338345e2 = $this->env->getExtension("native_profiler");
        $__internal_f03c25979b3586024b8be973f648109a2ba73e59f4d59165c2a4b081338345e2->enter($__internal_f03c25979b3586024b8be973f648109a2ba73e59f4d59165c2a4b081338345e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f03c25979b3586024b8be973f648109a2ba73e59f4d59165c2a4b081338345e2->leave($__internal_f03c25979b3586024b8be973f648109a2ba73e59f4d59165c2a4b081338345e2_prof);

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
