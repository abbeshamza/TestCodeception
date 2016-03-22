<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9a9453a66b1fe9652fe0ac76c5178e987757517b63759c899671269e3c507c4d extends Twig_Template
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
        $__internal_789cd870b21226f78956528d958c13e24ba4674c7124da739cd7c6e3335a4b5a = $this->env->getExtension("native_profiler");
        $__internal_789cd870b21226f78956528d958c13e24ba4674c7124da739cd7c6e3335a4b5a->enter($__internal_789cd870b21226f78956528d958c13e24ba4674c7124da739cd7c6e3335a4b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_789cd870b21226f78956528d958c13e24ba4674c7124da739cd7c6e3335a4b5a->leave($__internal_789cd870b21226f78956528d958c13e24ba4674c7124da739cd7c6e3335a4b5a_prof);

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
