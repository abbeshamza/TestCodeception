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
        $__internal_33cae3baa8333f85c4fc31ff88472d348a5a86ff79ceadba2eb07c51b1c38962 = $this->env->getExtension("native_profiler");
        $__internal_33cae3baa8333f85c4fc31ff88472d348a5a86ff79ceadba2eb07c51b1c38962->enter($__internal_33cae3baa8333f85c4fc31ff88472d348a5a86ff79ceadba2eb07c51b1c38962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_33cae3baa8333f85c4fc31ff88472d348a5a86ff79ceadba2eb07c51b1c38962->leave($__internal_33cae3baa8333f85c4fc31ff88472d348a5a86ff79ceadba2eb07c51b1c38962_prof);

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
