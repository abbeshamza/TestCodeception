<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b112388ef119b2df7b0e441761b7468f77dedcddaa437dc8d80519785bba2f2d extends Twig_Template
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
        $__internal_5309d7a18b97308f25a03a7a9b3952aa91d537fd70f9481af173695d23f87bd3 = $this->env->getExtension("native_profiler");
        $__internal_5309d7a18b97308f25a03a7a9b3952aa91d537fd70f9481af173695d23f87bd3->enter($__internal_5309d7a18b97308f25a03a7a9b3952aa91d537fd70f9481af173695d23f87bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_5309d7a18b97308f25a03a7a9b3952aa91d537fd70f9481af173695d23f87bd3->leave($__internal_5309d7a18b97308f25a03a7a9b3952aa91d537fd70f9481af173695d23f87bd3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */