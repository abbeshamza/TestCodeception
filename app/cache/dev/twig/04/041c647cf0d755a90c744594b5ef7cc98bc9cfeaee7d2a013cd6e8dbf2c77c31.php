<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d423ce303a486c8e702a69c457abba0580aaa0803cef610385a83073fa8de607 extends Twig_Template
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
        $__internal_48b653b7e60fb4f1eefe782b14466a179d7cb0c7eac1fceac1ad2a39fe20a639 = $this->env->getExtension("native_profiler");
        $__internal_48b653b7e60fb4f1eefe782b14466a179d7cb0c7eac1fceac1ad2a39fe20a639->enter($__internal_48b653b7e60fb4f1eefe782b14466a179d7cb0c7eac1fceac1ad2a39fe20a639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_48b653b7e60fb4f1eefe782b14466a179d7cb0c7eac1fceac1ad2a39fe20a639->leave($__internal_48b653b7e60fb4f1eefe782b14466a179d7cb0c7eac1fceac1ad2a39fe20a639_prof);

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
