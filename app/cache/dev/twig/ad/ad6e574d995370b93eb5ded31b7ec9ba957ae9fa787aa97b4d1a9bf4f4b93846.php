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
        $__internal_6e44827d7d9d342b8c981a93e3edaf7ceed61b8fb7fad2b9ab0fd824a1c47dd7 = $this->env->getExtension("native_profiler");
        $__internal_6e44827d7d9d342b8c981a93e3edaf7ceed61b8fb7fad2b9ab0fd824a1c47dd7->enter($__internal_6e44827d7d9d342b8c981a93e3edaf7ceed61b8fb7fad2b9ab0fd824a1c47dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6e44827d7d9d342b8c981a93e3edaf7ceed61b8fb7fad2b9ab0fd824a1c47dd7->leave($__internal_6e44827d7d9d342b8c981a93e3edaf7ceed61b8fb7fad2b9ab0fd824a1c47dd7_prof);

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
