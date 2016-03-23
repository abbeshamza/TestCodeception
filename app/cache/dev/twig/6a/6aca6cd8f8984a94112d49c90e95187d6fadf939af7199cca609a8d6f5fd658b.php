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
        $__internal_0d4298d958a08296dc39725acdfc14557738ec047d3950e588a4a38fb8243571 = $this->env->getExtension("native_profiler");
        $__internal_0d4298d958a08296dc39725acdfc14557738ec047d3950e588a4a38fb8243571->enter($__internal_0d4298d958a08296dc39725acdfc14557738ec047d3950e588a4a38fb8243571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0d4298d958a08296dc39725acdfc14557738ec047d3950e588a4a38fb8243571->leave($__internal_0d4298d958a08296dc39725acdfc14557738ec047d3950e588a4a38fb8243571_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6c38c9a675f8ea3ddc98d8fdd9e2a00ebbbdbc684ed94eae6a5fb822fc25cf2b = $this->env->getExtension("native_profiler");
        $__internal_6c38c9a675f8ea3ddc98d8fdd9e2a00ebbbdbc684ed94eae6a5fb822fc25cf2b->enter($__internal_6c38c9a675f8ea3ddc98d8fdd9e2a00ebbbdbc684ed94eae6a5fb822fc25cf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6c38c9a675f8ea3ddc98d8fdd9e2a00ebbbdbc684ed94eae6a5fb822fc25cf2b->leave($__internal_6c38c9a675f8ea3ddc98d8fdd9e2a00ebbbdbc684ed94eae6a5fb822fc25cf2b_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c79d35ffc18da5b696f66696c4a745db44974ad74675014b6262de03a6b470ab = $this->env->getExtension("native_profiler");
        $__internal_c79d35ffc18da5b696f66696c4a745db44974ad74675014b6262de03a6b470ab->enter($__internal_c79d35ffc18da5b696f66696c4a745db44974ad74675014b6262de03a6b470ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c79d35ffc18da5b696f66696c4a745db44974ad74675014b6262de03a6b470ab->leave($__internal_c79d35ffc18da5b696f66696c4a745db44974ad74675014b6262de03a6b470ab_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_77287d5a78239193e7d74bbc3d2604ea016064db8d9f230d3fc93f46506f330e = $this->env->getExtension("native_profiler");
        $__internal_77287d5a78239193e7d74bbc3d2604ea016064db8d9f230d3fc93f46506f330e->enter($__internal_77287d5a78239193e7d74bbc3d2604ea016064db8d9f230d3fc93f46506f330e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_77287d5a78239193e7d74bbc3d2604ea016064db8d9f230d3fc93f46506f330e->leave($__internal_77287d5a78239193e7d74bbc3d2604ea016064db8d9f230d3fc93f46506f330e_prof);

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
