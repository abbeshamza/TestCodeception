<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_730534ca2fb083552ca06a027977227c6dd45c5286f9cd23434446d2dcda67e6 extends Twig_Template
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
        $__internal_bd8b8e779a486fb81f353814454f9b6ff498739ddcef0922f0f69137fca651ef = $this->env->getExtension("native_profiler");
        $__internal_bd8b8e779a486fb81f353814454f9b6ff498739ddcef0922f0f69137fca651ef->enter($__internal_bd8b8e779a486fb81f353814454f9b6ff498739ddcef0922f0f69137fca651ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_bd8b8e779a486fb81f353814454f9b6ff498739ddcef0922f0f69137fca651ef->leave($__internal_bd8b8e779a486fb81f353814454f9b6ff498739ddcef0922f0f69137fca651ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
