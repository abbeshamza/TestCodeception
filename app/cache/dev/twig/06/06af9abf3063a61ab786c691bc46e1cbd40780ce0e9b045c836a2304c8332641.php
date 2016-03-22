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
        $__internal_83d040c12edfac142acc9ead283546b9a40093ed37da235bca8d503e2af3b0e1 = $this->env->getExtension("native_profiler");
        $__internal_83d040c12edfac142acc9ead283546b9a40093ed37da235bca8d503e2af3b0e1->enter($__internal_83d040c12edfac142acc9ead283546b9a40093ed37da235bca8d503e2af3b0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_83d040c12edfac142acc9ead283546b9a40093ed37da235bca8d503e2af3b0e1->leave($__internal_83d040c12edfac142acc9ead283546b9a40093ed37da235bca8d503e2af3b0e1_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7d192623c0c5b2adf77800d466f92087c4421fefd2dc819279d9fd2c8c6975f7 = $this->env->getExtension("native_profiler");
        $__internal_7d192623c0c5b2adf77800d466f92087c4421fefd2dc819279d9fd2c8c6975f7->enter($__internal_7d192623c0c5b2adf77800d466f92087c4421fefd2dc819279d9fd2c8c6975f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7d192623c0c5b2adf77800d466f92087c4421fefd2dc819279d9fd2c8c6975f7->leave($__internal_7d192623c0c5b2adf77800d466f92087c4421fefd2dc819279d9fd2c8c6975f7_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_feb26c280e979a298296751a7d49b25042eded884efaf92381db8f5d8683b987 = $this->env->getExtension("native_profiler");
        $__internal_feb26c280e979a298296751a7d49b25042eded884efaf92381db8f5d8683b987->enter($__internal_feb26c280e979a298296751a7d49b25042eded884efaf92381db8f5d8683b987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_feb26c280e979a298296751a7d49b25042eded884efaf92381db8f5d8683b987->leave($__internal_feb26c280e979a298296751a7d49b25042eded884efaf92381db8f5d8683b987_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f9ab3574efe9b00022861bc000bea53722c32586da30f021cf059e04b3c6b583 = $this->env->getExtension("native_profiler");
        $__internal_f9ab3574efe9b00022861bc000bea53722c32586da30f021cf059e04b3c6b583->enter($__internal_f9ab3574efe9b00022861bc000bea53722c32586da30f021cf059e04b3c6b583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f9ab3574efe9b00022861bc000bea53722c32586da30f021cf059e04b3c6b583->leave($__internal_f9ab3574efe9b00022861bc000bea53722c32586da30f021cf059e04b3c6b583_prof);

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
