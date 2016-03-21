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
        $__internal_f209ffdea64e7f8250b12f5f8485a90e420a31efc4b5c3b848b43dfcd2f0a5c7 = $this->env->getExtension("native_profiler");
        $__internal_f209ffdea64e7f8250b12f5f8485a90e420a31efc4b5c3b848b43dfcd2f0a5c7->enter($__internal_f209ffdea64e7f8250b12f5f8485a90e420a31efc4b5c3b848b43dfcd2f0a5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_f209ffdea64e7f8250b12f5f8485a90e420a31efc4b5c3b848b43dfcd2f0a5c7->leave($__internal_f209ffdea64e7f8250b12f5f8485a90e420a31efc4b5c3b848b43dfcd2f0a5c7_prof);

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
