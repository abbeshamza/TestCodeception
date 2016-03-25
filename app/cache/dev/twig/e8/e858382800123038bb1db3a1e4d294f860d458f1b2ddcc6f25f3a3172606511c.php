<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_363498e512ac9a1aa037b1cdfd9360ce2696a8e653e4c36fa38f1ce3568b3584 extends Twig_Template
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
        $__internal_eaf740a1fb15de3cef256db3ee0e72a03199cdc887619d87dc7ae34bad708aa5 = $this->env->getExtension("native_profiler");
        $__internal_eaf740a1fb15de3cef256db3ee0e72a03199cdc887619d87dc7ae34bad708aa5->enter($__internal_eaf740a1fb15de3cef256db3ee0e72a03199cdc887619d87dc7ae34bad708aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_eaf740a1fb15de3cef256db3ee0e72a03199cdc887619d87dc7ae34bad708aa5->leave($__internal_eaf740a1fb15de3cef256db3ee0e72a03199cdc887619d87dc7ae34bad708aa5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
