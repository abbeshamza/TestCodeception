<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_242c2616876f50c4131a87ebf6ae40f04967c31df591a81caeebc8b25fbc4245 extends Twig_Template
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
        $__internal_46343cc448544a7f20c027c5654490ace88e4eac18e89feb2e41573dc8eec7a2 = $this->env->getExtension("native_profiler");
        $__internal_46343cc448544a7f20c027c5654490ace88e4eac18e89feb2e41573dc8eec7a2->enter($__internal_46343cc448544a7f20c027c5654490ace88e4eac18e89feb2e41573dc8eec7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_46343cc448544a7f20c027c5654490ace88e4eac18e89feb2e41573dc8eec7a2->leave($__internal_46343cc448544a7f20c027c5654490ace88e4eac18e89feb2e41573dc8eec7a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
