<?php

/* TestBundle:Default:test.html.twig */
class __TwigTemplate_74914670bfa1d56c10945d31a4378a916bea166fd3e2c677803c065a2443f18b extends Twig_Template
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
        $__internal_9922b210b4358e6bfbab786e9a8efead020cbfdbe63499e1c1bacdc9a29cedce = $this->env->getExtension("native_profiler");
        $__internal_9922b210b4358e6bfbab786e9a8efead020cbfdbe63499e1c1bacdc9a29cedce->enter($__internal_9922b210b4358e6bfbab786e9a8efead020cbfdbe63499e1c1bacdc9a29cedce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:test.html.twig"));

        // line 1
        echo "test ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        
        $__internal_9922b210b4358e6bfbab786e9a8efead020cbfdbe63499e1c1bacdc9a29cedce->leave($__internal_9922b210b4358e6bfbab786e9a8efead020cbfdbe63499e1c1bacdc9a29cedce_prof);

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
