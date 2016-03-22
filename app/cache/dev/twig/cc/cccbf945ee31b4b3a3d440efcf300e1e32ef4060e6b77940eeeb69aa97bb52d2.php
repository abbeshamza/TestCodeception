<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8e643276b2b56d2acaee4abb194a935f36b0cd46d7c8888a297a3b6e360bd589 extends Twig_Template
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
        $__internal_e5fe00db3fe06a28ee24114226e0a4036c4a7afb242569fbc65fe1a302bc5f7b = $this->env->getExtension("native_profiler");
        $__internal_e5fe00db3fe06a28ee24114226e0a4036c4a7afb242569fbc65fe1a302bc5f7b->enter($__internal_e5fe00db3fe06a28ee24114226e0a4036c4a7afb242569fbc65fe1a302bc5f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e5fe00db3fe06a28ee24114226e0a4036c4a7afb242569fbc65fe1a302bc5f7b->leave($__internal_e5fe00db3fe06a28ee24114226e0a4036c4a7afb242569fbc65fe1a302bc5f7b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
