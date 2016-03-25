<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1ddd18dd18be981cf3f458854d7223d0924d78dcfd89e339153d68ae482b31cf extends Twig_Template
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
        $__internal_3450ce9a0693e48833fd99f3eb0c09f1cbe056ead61da60d4d7653a69c7e2b56 = $this->env->getExtension("native_profiler");
        $__internal_3450ce9a0693e48833fd99f3eb0c09f1cbe056ead61da60d4d7653a69c7e2b56->enter($__internal_3450ce9a0693e48833fd99f3eb0c09f1cbe056ead61da60d4d7653a69c7e2b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_3450ce9a0693e48833fd99f3eb0c09f1cbe056ead61da60d4d7653a69c7e2b56->leave($__internal_3450ce9a0693e48833fd99f3eb0c09f1cbe056ead61da60d4d7653a69c7e2b56_prof);

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
