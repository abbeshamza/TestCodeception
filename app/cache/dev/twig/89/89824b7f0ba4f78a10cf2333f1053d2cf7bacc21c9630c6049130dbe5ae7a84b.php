<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1608a7f7ac5b07773377bf1b361381ee94f37ef1bbe77a962054070f0949e1e0 extends Twig_Template
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
        $__internal_165d292f4d2f68ad1a0e15edbe9dc890f962e7871f086ab03610c7bba94fdecd = $this->env->getExtension("native_profiler");
        $__internal_165d292f4d2f68ad1a0e15edbe9dc890f962e7871f086ab03610c7bba94fdecd->enter($__internal_165d292f4d2f68ad1a0e15edbe9dc890f962e7871f086ab03610c7bba94fdecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_165d292f4d2f68ad1a0e15edbe9dc890f962e7871f086ab03610c7bba94fdecd->leave($__internal_165d292f4d2f68ad1a0e15edbe9dc890f962e7871f086ab03610c7bba94fdecd_prof);

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
