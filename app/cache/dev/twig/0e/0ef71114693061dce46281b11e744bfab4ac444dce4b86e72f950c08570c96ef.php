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
        $__internal_d8a60da65d8b4f63231ab7d4fc930b7f09179e7088445d85ae8d06da4d4e77f1 = $this->env->getExtension("native_profiler");
        $__internal_d8a60da65d8b4f63231ab7d4fc930b7f09179e7088445d85ae8d06da4d4e77f1->enter($__internal_d8a60da65d8b4f63231ab7d4fc930b7f09179e7088445d85ae8d06da4d4e77f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_d8a60da65d8b4f63231ab7d4fc930b7f09179e7088445d85ae8d06da4d4e77f1->leave($__internal_d8a60da65d8b4f63231ab7d4fc930b7f09179e7088445d85ae8d06da4d4e77f1_prof);

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
