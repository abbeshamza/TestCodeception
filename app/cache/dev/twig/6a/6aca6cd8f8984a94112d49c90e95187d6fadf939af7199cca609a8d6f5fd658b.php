<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_74c677f6b7aa2f352be2d2a8275522e5b9aa3ddf41c9c4adac162ef310d6accb extends Twig_Template
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
        $__internal_92f5ac00dde849ec98c5d5c47df7b0789659ef50521178f9d806d361944b7599 = $this->env->getExtension("native_profiler");
        $__internal_92f5ac00dde849ec98c5d5c47df7b0789659ef50521178f9d806d361944b7599->enter($__internal_92f5ac00dde849ec98c5d5c47df7b0789659ef50521178f9d806d361944b7599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_92f5ac00dde849ec98c5d5c47df7b0789659ef50521178f9d806d361944b7599->leave($__internal_92f5ac00dde849ec98c5d5c47df7b0789659ef50521178f9d806d361944b7599_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5fa2f1ffa230b2de8a82f0ba680f9ff83bb9939d574d077300ec9b76f508f67c = $this->env->getExtension("native_profiler");
        $__internal_5fa2f1ffa230b2de8a82f0ba680f9ff83bb9939d574d077300ec9b76f508f67c->enter($__internal_5fa2f1ffa230b2de8a82f0ba680f9ff83bb9939d574d077300ec9b76f508f67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5fa2f1ffa230b2de8a82f0ba680f9ff83bb9939d574d077300ec9b76f508f67c->leave($__internal_5fa2f1ffa230b2de8a82f0ba680f9ff83bb9939d574d077300ec9b76f508f67c_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_db9cfc4833595c8a7e0cb54e408b92b908e3fed3feb8af0c9b0d9c2a5414959b = $this->env->getExtension("native_profiler");
        $__internal_db9cfc4833595c8a7e0cb54e408b92b908e3fed3feb8af0c9b0d9c2a5414959b->enter($__internal_db9cfc4833595c8a7e0cb54e408b92b908e3fed3feb8af0c9b0d9c2a5414959b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_db9cfc4833595c8a7e0cb54e408b92b908e3fed3feb8af0c9b0d9c2a5414959b->leave($__internal_db9cfc4833595c8a7e0cb54e408b92b908e3fed3feb8af0c9b0d9c2a5414959b_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_440348306f77ab591848c342963f19d60a559eac62539e4d1ce92347f12ff887 = $this->env->getExtension("native_profiler");
        $__internal_440348306f77ab591848c342963f19d60a559eac62539e4d1ce92347f12ff887->enter($__internal_440348306f77ab591848c342963f19d60a559eac62539e4d1ce92347f12ff887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_440348306f77ab591848c342963f19d60a559eac62539e4d1ce92347f12ff887->leave($__internal_440348306f77ab591848c342963f19d60a559eac62539e4d1ce92347f12ff887_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
