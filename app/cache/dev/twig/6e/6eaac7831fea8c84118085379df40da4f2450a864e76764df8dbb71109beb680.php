<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_95d9baaea910503726e5c757bf0f25efdf592fbeaefd7af5ba63f6fe0a0bb971 extends Twig_Template
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
        $__internal_739624ca58730a484624947265b32fadf4c8d3308b9bb97a7c8552476455d916 = $this->env->getExtension("native_profiler");
        $__internal_739624ca58730a484624947265b32fadf4c8d3308b9bb97a7c8552476455d916->enter($__internal_739624ca58730a484624947265b32fadf4c8d3308b9bb97a7c8552476455d916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_739624ca58730a484624947265b32fadf4c8d3308b9bb97a7c8552476455d916->leave($__internal_739624ca58730a484624947265b32fadf4c8d3308b9bb97a7c8552476455d916_prof);

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
