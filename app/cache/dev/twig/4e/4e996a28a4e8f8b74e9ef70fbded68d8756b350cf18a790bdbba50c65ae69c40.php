<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_42668274bbf74365db798429cc710d629025867b4de04cc74ff57e354a4f609a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_43fe3546e4addf85299737f3a01b33d9c279e8c3273fe74fb2db61c7030f0f95 = $this->env->getExtension("native_profiler");
        $__internal_43fe3546e4addf85299737f3a01b33d9c279e8c3273fe74fb2db61c7030f0f95->enter($__internal_43fe3546e4addf85299737f3a01b33d9c279e8c3273fe74fb2db61c7030f0f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43fe3546e4addf85299737f3a01b33d9c279e8c3273fe74fb2db61c7030f0f95->leave($__internal_43fe3546e4addf85299737f3a01b33d9c279e8c3273fe74fb2db61c7030f0f95_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_deff0d83a31ac4c1d3a1869500ed0586e1459ddedb8fd7af05f226cd5cd1f6a0 = $this->env->getExtension("native_profiler");
        $__internal_deff0d83a31ac4c1d3a1869500ed0586e1459ddedb8fd7af05f226cd5cd1f6a0->enter($__internal_deff0d83a31ac4c1d3a1869500ed0586e1459ddedb8fd7af05f226cd5cd1f6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_deff0d83a31ac4c1d3a1869500ed0586e1459ddedb8fd7af05f226cd5cd1f6a0->leave($__internal_deff0d83a31ac4c1d3a1869500ed0586e1459ddedb8fd7af05f226cd5cd1f6a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
