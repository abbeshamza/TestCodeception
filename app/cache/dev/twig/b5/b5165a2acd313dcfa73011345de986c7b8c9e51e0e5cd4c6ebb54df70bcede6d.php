<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e2f377edd6acb372066c55052f1a7bc0614b37f6fdd66f4b34b03f9274b49301 extends Twig_Template
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
        $__internal_f76bc1f70b44e2fbb7a1171d451520ba638b8c3597ab9e818740563b82285b20 = $this->env->getExtension("native_profiler");
        $__internal_f76bc1f70b44e2fbb7a1171d451520ba638b8c3597ab9e818740563b82285b20->enter($__internal_f76bc1f70b44e2fbb7a1171d451520ba638b8c3597ab9e818740563b82285b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f76bc1f70b44e2fbb7a1171d451520ba638b8c3597ab9e818740563b82285b20->leave($__internal_f76bc1f70b44e2fbb7a1171d451520ba638b8c3597ab9e818740563b82285b20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
