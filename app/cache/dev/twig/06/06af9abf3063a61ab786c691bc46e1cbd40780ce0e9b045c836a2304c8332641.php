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
        $__internal_5b35862aa8b02e167d03c4194bb631a36d200095686b2831025ee6cc9f8c2c11 = $this->env->getExtension("native_profiler");
        $__internal_5b35862aa8b02e167d03c4194bb631a36d200095686b2831025ee6cc9f8c2c11->enter($__internal_5b35862aa8b02e167d03c4194bb631a36d200095686b2831025ee6cc9f8c2c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5b35862aa8b02e167d03c4194bb631a36d200095686b2831025ee6cc9f8c2c11->leave($__internal_5b35862aa8b02e167d03c4194bb631a36d200095686b2831025ee6cc9f8c2c11_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4927ef43d15812f4e7ecdddd27fb4a5b37db5facef5df51b51d9067ba5f794d0 = $this->env->getExtension("native_profiler");
        $__internal_4927ef43d15812f4e7ecdddd27fb4a5b37db5facef5df51b51d9067ba5f794d0->enter($__internal_4927ef43d15812f4e7ecdddd27fb4a5b37db5facef5df51b51d9067ba5f794d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4927ef43d15812f4e7ecdddd27fb4a5b37db5facef5df51b51d9067ba5f794d0->leave($__internal_4927ef43d15812f4e7ecdddd27fb4a5b37db5facef5df51b51d9067ba5f794d0_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0786bf61727cbf76f9a0f81a421cd562d460f43190e0e9981d1893af521e3819 = $this->env->getExtension("native_profiler");
        $__internal_0786bf61727cbf76f9a0f81a421cd562d460f43190e0e9981d1893af521e3819->enter($__internal_0786bf61727cbf76f9a0f81a421cd562d460f43190e0e9981d1893af521e3819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0786bf61727cbf76f9a0f81a421cd562d460f43190e0e9981d1893af521e3819->leave($__internal_0786bf61727cbf76f9a0f81a421cd562d460f43190e0e9981d1893af521e3819_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3c325e1d9a86542d004bca5bc11742c55d15afe7407d494404eacad8b5f3cfe1 = $this->env->getExtension("native_profiler");
        $__internal_3c325e1d9a86542d004bca5bc11742c55d15afe7407d494404eacad8b5f3cfe1->enter($__internal_3c325e1d9a86542d004bca5bc11742c55d15afe7407d494404eacad8b5f3cfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3c325e1d9a86542d004bca5bc11742c55d15afe7407d494404eacad8b5f3cfe1->leave($__internal_3c325e1d9a86542d004bca5bc11742c55d15afe7407d494404eacad8b5f3cfe1_prof);

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
