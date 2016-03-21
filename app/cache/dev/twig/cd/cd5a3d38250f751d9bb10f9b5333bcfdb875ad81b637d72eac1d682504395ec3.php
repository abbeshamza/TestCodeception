<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f8be4a8cd3389207488471c7ebe2255cd3fef312558a0225980a249cd5572f40 extends Twig_Template
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
        $__internal_9a2bc207ebc711a58893f205cee92692a5aa294d809c0953cd4533f0d3c2d852 = $this->env->getExtension("native_profiler");
        $__internal_9a2bc207ebc711a58893f205cee92692a5aa294d809c0953cd4533f0d3c2d852->enter($__internal_9a2bc207ebc711a58893f205cee92692a5aa294d809c0953cd4533f0d3c2d852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9a2bc207ebc711a58893f205cee92692a5aa294d809c0953cd4533f0d3c2d852->leave($__internal_9a2bc207ebc711a58893f205cee92692a5aa294d809c0953cd4533f0d3c2d852_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
