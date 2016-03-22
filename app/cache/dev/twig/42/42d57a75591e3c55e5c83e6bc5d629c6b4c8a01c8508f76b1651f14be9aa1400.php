<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_db64beab66f092a1b97670ab50bf5997de710275ab4cd00e8ecb00ce3e553301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_7462b01f4ea18ed4c074cb66800bdc5cc65c05b968f49d2b90c3cb02a3aa0014 = $this->env->getExtension("native_profiler");
        $__internal_7462b01f4ea18ed4c074cb66800bdc5cc65c05b968f49d2b90c3cb02a3aa0014->enter($__internal_7462b01f4ea18ed4c074cb66800bdc5cc65c05b968f49d2b90c3cb02a3aa0014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7462b01f4ea18ed4c074cb66800bdc5cc65c05b968f49d2b90c3cb02a3aa0014->leave($__internal_7462b01f4ea18ed4c074cb66800bdc5cc65c05b968f49d2b90c3cb02a3aa0014_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7bfdb715e9de1535c11cc063852c944e423ec05387c65b2c31f8d9fbe9698836 = $this->env->getExtension("native_profiler");
        $__internal_7bfdb715e9de1535c11cc063852c944e423ec05387c65b2c31f8d9fbe9698836->enter($__internal_7bfdb715e9de1535c11cc063852c944e423ec05387c65b2c31f8d9fbe9698836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_7bfdb715e9de1535c11cc063852c944e423ec05387c65b2c31f8d9fbe9698836->leave($__internal_7bfdb715e9de1535c11cc063852c944e423ec05387c65b2c31f8d9fbe9698836_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
