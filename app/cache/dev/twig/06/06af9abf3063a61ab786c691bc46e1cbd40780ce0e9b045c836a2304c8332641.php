<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_735524e61f4c4f89396b489066d41f0879a53bfaa64f5e27b34f454ab7881288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48dfe650fd7f09105021928c2d8a6b8c11dce6277d88302b370ad642953f8ac2 = $this->env->getExtension("native_profiler");
        $__internal_48dfe650fd7f09105021928c2d8a6b8c11dce6277d88302b370ad642953f8ac2->enter($__internal_48dfe650fd7f09105021928c2d8a6b8c11dce6277d88302b370ad642953f8ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_48dfe650fd7f09105021928c2d8a6b8c11dce6277d88302b370ad642953f8ac2->leave($__internal_48dfe650fd7f09105021928c2d8a6b8c11dce6277d88302b370ad642953f8ac2_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_575230c97cd4270eff1191dd46d6a10634cef3e8458aff6bc5fb7f33e3637c20 = $this->env->getExtension("native_profiler");
        $__internal_575230c97cd4270eff1191dd46d6a10634cef3e8458aff6bc5fb7f33e3637c20->enter($__internal_575230c97cd4270eff1191dd46d6a10634cef3e8458aff6bc5fb7f33e3637c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_575230c97cd4270eff1191dd46d6a10634cef3e8458aff6bc5fb7f33e3637c20->leave($__internal_575230c97cd4270eff1191dd46d6a10634cef3e8458aff6bc5fb7f33e3637c20_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fd8a0251d4b5356aa18dbb00879ab3d0b0d5cf93ec3fe73d6cb14b71d1bb8c34 = $this->env->getExtension("native_profiler");
        $__internal_fd8a0251d4b5356aa18dbb00879ab3d0b0d5cf93ec3fe73d6cb14b71d1bb8c34->enter($__internal_fd8a0251d4b5356aa18dbb00879ab3d0b0d5cf93ec3fe73d6cb14b71d1bb8c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fd8a0251d4b5356aa18dbb00879ab3d0b0d5cf93ec3fe73d6cb14b71d1bb8c34->leave($__internal_fd8a0251d4b5356aa18dbb00879ab3d0b0d5cf93ec3fe73d6cb14b71d1bb8c34_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_348481bd841d13f8c53f1feaba970d4eec7dce63e642562f47754d52cbd4efc6 = $this->env->getExtension("native_profiler");
        $__internal_348481bd841d13f8c53f1feaba970d4eec7dce63e642562f47754d52cbd4efc6->enter($__internal_348481bd841d13f8c53f1feaba970d4eec7dce63e642562f47754d52cbd4efc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_348481bd841d13f8c53f1feaba970d4eec7dce63e642562f47754d52cbd4efc6->leave($__internal_348481bd841d13f8c53f1feaba970d4eec7dce63e642562f47754d52cbd4efc6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
