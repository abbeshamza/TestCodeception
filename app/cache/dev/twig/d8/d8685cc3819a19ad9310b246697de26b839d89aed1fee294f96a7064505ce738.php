<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_84e27cebf17e274f8d2a201208975a1bd7c9048163aae8b4ccef30c6f3166b1c extends Twig_Template
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
        $__internal_2909dc004b1b6ab60846e6c87932124b48e0f6dd73094eb7caa907e25de1a204 = $this->env->getExtension("native_profiler");
        $__internal_2909dc004b1b6ab60846e6c87932124b48e0f6dd73094eb7caa907e25de1a204->enter($__internal_2909dc004b1b6ab60846e6c87932124b48e0f6dd73094eb7caa907e25de1a204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2909dc004b1b6ab60846e6c87932124b48e0f6dd73094eb7caa907e25de1a204->leave($__internal_2909dc004b1b6ab60846e6c87932124b48e0f6dd73094eb7caa907e25de1a204_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
