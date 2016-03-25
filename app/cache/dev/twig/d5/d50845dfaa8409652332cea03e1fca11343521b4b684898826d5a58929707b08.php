<?php

/* TestBundle:Default:test.html.twig */
class __TwigTemplate_3806d5dd28185c468bd6c30342e45c11f5060e829dc318595ffc46024daa8c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5772885efca861ebbf30f51e6db7718932ba5c88066b4507edfe7dafbb8c93d0 = $this->env->getExtension("native_profiler");
        $__internal_5772885efca861ebbf30f51e6db7718932ba5c88066b4507edfe7dafbb8c93d0->enter($__internal_5772885efca861ebbf30f51e6db7718932ba5c88066b4507edfe7dafbb8c93d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:test.html.twig"));

        // line 1
        echo "test ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        
        $__internal_5772885efca861ebbf30f51e6db7718932ba5c88066b4507edfe7dafbb8c93d0->leave($__internal_5772885efca861ebbf30f51e6db7718932ba5c88066b4507edfe7dafbb8c93d0_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* test {{name}}*/
