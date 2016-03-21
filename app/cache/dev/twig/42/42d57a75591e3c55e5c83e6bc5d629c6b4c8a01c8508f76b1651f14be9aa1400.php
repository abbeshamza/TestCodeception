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
        $__internal_5ef6a576283d0f2b9f4d3798e58d635234530b3c53d060ff4570361fc54a3eec = $this->env->getExtension("native_profiler");
        $__internal_5ef6a576283d0f2b9f4d3798e58d635234530b3c53d060ff4570361fc54a3eec->enter($__internal_5ef6a576283d0f2b9f4d3798e58d635234530b3c53d060ff4570361fc54a3eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ef6a576283d0f2b9f4d3798e58d635234530b3c53d060ff4570361fc54a3eec->leave($__internal_5ef6a576283d0f2b9f4d3798e58d635234530b3c53d060ff4570361fc54a3eec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1b88689db09d4600ddf0186bcd75dc9d0cdfa26085ad66877f055131ef6fd52 = $this->env->getExtension("native_profiler");
        $__internal_b1b88689db09d4600ddf0186bcd75dc9d0cdfa26085ad66877f055131ef6fd52->enter($__internal_b1b88689db09d4600ddf0186bcd75dc9d0cdfa26085ad66877f055131ef6fd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b1b88689db09d4600ddf0186bcd75dc9d0cdfa26085ad66877f055131ef6fd52->leave($__internal_b1b88689db09d4600ddf0186bcd75dc9d0cdfa26085ad66877f055131ef6fd52_prof);

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
