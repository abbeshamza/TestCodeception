<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_92d2925ec1ad73cdf4a029974c03cf6329058fdc14bb24b8fafb195185f57e1f extends Twig_Template
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
        $__internal_9155562ba12df51e64d6b42265782f5df9b629040c09c78b0b0bc2ef4ef84553 = $this->env->getExtension("native_profiler");
        $__internal_9155562ba12df51e64d6b42265782f5df9b629040c09c78b0b0bc2ef4ef84553->enter($__internal_9155562ba12df51e64d6b42265782f5df9b629040c09c78b0b0bc2ef4ef84553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9155562ba12df51e64d6b42265782f5df9b629040c09c78b0b0bc2ef4ef84553->leave($__internal_9155562ba12df51e64d6b42265782f5df9b629040c09c78b0b0bc2ef4ef84553_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
