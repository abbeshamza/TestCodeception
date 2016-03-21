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
        $__internal_e2183ebaf5f6be0199fadd91b400a980b0d7a514534832b7e16e111007a9a7f6 = $this->env->getExtension("native_profiler");
        $__internal_e2183ebaf5f6be0199fadd91b400a980b0d7a514534832b7e16e111007a9a7f6->enter($__internal_e2183ebaf5f6be0199fadd91b400a980b0d7a514534832b7e16e111007a9a7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2183ebaf5f6be0199fadd91b400a980b0d7a514534832b7e16e111007a9a7f6->leave($__internal_e2183ebaf5f6be0199fadd91b400a980b0d7a514534832b7e16e111007a9a7f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdd254a201ef28d2dd98cbc9338336d4d7dd30e70e53cbda9bb17e1347e693b3 = $this->env->getExtension("native_profiler");
        $__internal_fdd254a201ef28d2dd98cbc9338336d4d7dd30e70e53cbda9bb17e1347e693b3->enter($__internal_fdd254a201ef28d2dd98cbc9338336d4d7dd30e70e53cbda9bb17e1347e693b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fdd254a201ef28d2dd98cbc9338336d4d7dd30e70e53cbda9bb17e1347e693b3->leave($__internal_fdd254a201ef28d2dd98cbc9338336d4d7dd30e70e53cbda9bb17e1347e693b3_prof);

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
