<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_75eb3607cbb0def4b6fa53463c8496a6792252ab233455a1fa1ccecfe6c07157 extends Twig_Template
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
        $__internal_e01c5f9cc4f4184a511263162751c36f2197a772c409f0ab78b1cf3058ea96dc = $this->env->getExtension("native_profiler");
        $__internal_e01c5f9cc4f4184a511263162751c36f2197a772c409f0ab78b1cf3058ea96dc->enter($__internal_e01c5f9cc4f4184a511263162751c36f2197a772c409f0ab78b1cf3058ea96dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e01c5f9cc4f4184a511263162751c36f2197a772c409f0ab78b1cf3058ea96dc->leave($__internal_e01c5f9cc4f4184a511263162751c36f2197a772c409f0ab78b1cf3058ea96dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
