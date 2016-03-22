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
        $__internal_d7eb1fe002fffad17cdb5a45ca029bed046075b48bcf10a9eb71f9740fcde978 = $this->env->getExtension("native_profiler");
        $__internal_d7eb1fe002fffad17cdb5a45ca029bed046075b48bcf10a9eb71f9740fcde978->enter($__internal_d7eb1fe002fffad17cdb5a45ca029bed046075b48bcf10a9eb71f9740fcde978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d7eb1fe002fffad17cdb5a45ca029bed046075b48bcf10a9eb71f9740fcde978->leave($__internal_d7eb1fe002fffad17cdb5a45ca029bed046075b48bcf10a9eb71f9740fcde978_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_73a0f854b05246b951b10bffe75d8a113fb288d438d6a19c28fcfb740cda0e92 = $this->env->getExtension("native_profiler");
        $__internal_73a0f854b05246b951b10bffe75d8a113fb288d438d6a19c28fcfb740cda0e92->enter($__internal_73a0f854b05246b951b10bffe75d8a113fb288d438d6a19c28fcfb740cda0e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_73a0f854b05246b951b10bffe75d8a113fb288d438d6a19c28fcfb740cda0e92->leave($__internal_73a0f854b05246b951b10bffe75d8a113fb288d438d6a19c28fcfb740cda0e92_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2563844e797d1386c05f1983f948f9682413d2c77077fae5f295a2c4d0ad6440 = $this->env->getExtension("native_profiler");
        $__internal_2563844e797d1386c05f1983f948f9682413d2c77077fae5f295a2c4d0ad6440->enter($__internal_2563844e797d1386c05f1983f948f9682413d2c77077fae5f295a2c4d0ad6440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2563844e797d1386c05f1983f948f9682413d2c77077fae5f295a2c4d0ad6440->leave($__internal_2563844e797d1386c05f1983f948f9682413d2c77077fae5f295a2c4d0ad6440_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c77e8639b8af8382ecc3a59cf3d1096b8e20653755845cd1963a06c255912899 = $this->env->getExtension("native_profiler");
        $__internal_c77e8639b8af8382ecc3a59cf3d1096b8e20653755845cd1963a06c255912899->enter($__internal_c77e8639b8af8382ecc3a59cf3d1096b8e20653755845cd1963a06c255912899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c77e8639b8af8382ecc3a59cf3d1096b8e20653755845cd1963a06c255912899->leave($__internal_c77e8639b8af8382ecc3a59cf3d1096b8e20653755845cd1963a06c255912899_prof);

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
