<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_df28e6a86bf2e245d39a05a3e51f3326c30fe9e8bd76b1ff6e8b0753570c1f1f extends Twig_Template
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
        $__internal_c98c82c9ed5499b66f269a6235280d952f04b1bb01b9bb45aa948a2e8531c93b = $this->env->getExtension("native_profiler");
        $__internal_c98c82c9ed5499b66f269a6235280d952f04b1bb01b9bb45aa948a2e8531c93b->enter($__internal_c98c82c9ed5499b66f269a6235280d952f04b1bb01b9bb45aa948a2e8531c93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c98c82c9ed5499b66f269a6235280d952f04b1bb01b9bb45aa948a2e8531c93b->leave($__internal_c98c82c9ed5499b66f269a6235280d952f04b1bb01b9bb45aa948a2e8531c93b_prof);

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
