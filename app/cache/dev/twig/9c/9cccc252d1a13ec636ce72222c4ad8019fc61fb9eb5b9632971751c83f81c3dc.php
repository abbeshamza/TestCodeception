<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d79356eb5a32da29355484327e83cfdc386db33cdde61ee9b17f0604dd130148 extends Twig_Template
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
        $__internal_a74093476e4e00bd1da4dd9e5a0b702c6fbedbbd19d856ebd6ba817d09878dca = $this->env->getExtension("native_profiler");
        $__internal_a74093476e4e00bd1da4dd9e5a0b702c6fbedbbd19d856ebd6ba817d09878dca->enter($__internal_a74093476e4e00bd1da4dd9e5a0b702c6fbedbbd19d856ebd6ba817d09878dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a74093476e4e00bd1da4dd9e5a0b702c6fbedbbd19d856ebd6ba817d09878dca->leave($__internal_a74093476e4e00bd1da4dd9e5a0b702c6fbedbbd19d856ebd6ba817d09878dca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
