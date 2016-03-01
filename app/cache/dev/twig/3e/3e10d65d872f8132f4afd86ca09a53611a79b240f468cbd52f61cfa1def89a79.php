<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_35d899a515eba67c7b2d3f769d44e17e365db36d03af1441a87999d562b48f1e extends Twig_Template
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
        $__internal_2716388d9a965419d9cdf288870a084a9c46a49083855f796826f0240d1207ee = $this->env->getExtension("native_profiler");
        $__internal_2716388d9a965419d9cdf288870a084a9c46a49083855f796826f0240d1207ee->enter($__internal_2716388d9a965419d9cdf288870a084a9c46a49083855f796826f0240d1207ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2716388d9a965419d9cdf288870a084a9c46a49083855f796826f0240d1207ee->leave($__internal_2716388d9a965419d9cdf288870a084a9c46a49083855f796826f0240d1207ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
