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
        $__internal_3c853a33769dc71493f77d86b284e47d0df12cf62999c560f569a239bdce9581 = $this->env->getExtension("native_profiler");
        $__internal_3c853a33769dc71493f77d86b284e47d0df12cf62999c560f569a239bdce9581->enter($__internal_3c853a33769dc71493f77d86b284e47d0df12cf62999c560f569a239bdce9581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3c853a33769dc71493f77d86b284e47d0df12cf62999c560f569a239bdce9581->leave($__internal_3c853a33769dc71493f77d86b284e47d0df12cf62999c560f569a239bdce9581_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9b30889fedc45863f7b5c9ab151c69d44a76b123afa40d9cd14dc309ca26071f = $this->env->getExtension("native_profiler");
        $__internal_9b30889fedc45863f7b5c9ab151c69d44a76b123afa40d9cd14dc309ca26071f->enter($__internal_9b30889fedc45863f7b5c9ab151c69d44a76b123afa40d9cd14dc309ca26071f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9b30889fedc45863f7b5c9ab151c69d44a76b123afa40d9cd14dc309ca26071f->leave($__internal_9b30889fedc45863f7b5c9ab151c69d44a76b123afa40d9cd14dc309ca26071f_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b3c49baa0771b73be9ef4856b8c782dd93aaa253975074784ebae4a713ee8864 = $this->env->getExtension("native_profiler");
        $__internal_b3c49baa0771b73be9ef4856b8c782dd93aaa253975074784ebae4a713ee8864->enter($__internal_b3c49baa0771b73be9ef4856b8c782dd93aaa253975074784ebae4a713ee8864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b3c49baa0771b73be9ef4856b8c782dd93aaa253975074784ebae4a713ee8864->leave($__internal_b3c49baa0771b73be9ef4856b8c782dd93aaa253975074784ebae4a713ee8864_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cab5a468da80a66fe6b8cfc13cd12e6b1786c2e91db6be11fab04566c4e6543e = $this->env->getExtension("native_profiler");
        $__internal_cab5a468da80a66fe6b8cfc13cd12e6b1786c2e91db6be11fab04566c4e6543e->enter($__internal_cab5a468da80a66fe6b8cfc13cd12e6b1786c2e91db6be11fab04566c4e6543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cab5a468da80a66fe6b8cfc13cd12e6b1786c2e91db6be11fab04566c4e6543e->leave($__internal_cab5a468da80a66fe6b8cfc13cd12e6b1786c2e91db6be11fab04566c4e6543e_prof);

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
