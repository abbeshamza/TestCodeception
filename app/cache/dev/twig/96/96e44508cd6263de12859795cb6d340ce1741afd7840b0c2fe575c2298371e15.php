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
        $__internal_a1a4a565f5b9b6ca1510120e6b766a65a6accd137736ecc9a0b38186cd8b41fc = $this->env->getExtension("native_profiler");
        $__internal_a1a4a565f5b9b6ca1510120e6b766a65a6accd137736ecc9a0b38186cd8b41fc->enter($__internal_a1a4a565f5b9b6ca1510120e6b766a65a6accd137736ecc9a0b38186cd8b41fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a1a4a565f5b9b6ca1510120e6b766a65a6accd137736ecc9a0b38186cd8b41fc->leave($__internal_a1a4a565f5b9b6ca1510120e6b766a65a6accd137736ecc9a0b38186cd8b41fc_prof);

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
