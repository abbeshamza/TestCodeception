<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a86c28406d4760f8907d5d6a9a98c5581291e3cce69967c08e09ab5162e6d1ac extends Twig_Template
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
        $__internal_1458559bdf59ed7f90b095181d68dff03867be22d630206cbf095c474e8bcb0c = $this->env->getExtension("native_profiler");
        $__internal_1458559bdf59ed7f90b095181d68dff03867be22d630206cbf095c474e8bcb0c->enter($__internal_1458559bdf59ed7f90b095181d68dff03867be22d630206cbf095c474e8bcb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1458559bdf59ed7f90b095181d68dff03867be22d630206cbf095c474e8bcb0c->leave($__internal_1458559bdf59ed7f90b095181d68dff03867be22d630206cbf095c474e8bcb0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
