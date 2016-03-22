<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_2427f99c26f37a7390cc4e2bab89463be4dbef14fa4d1ae5073678a26df9658f extends Twig_Template
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
        $__internal_248e2137f7161cee1aa9dad79c6a8e77e8c82bd5ad0f4b774fbe1df137c7132e = $this->env->getExtension("native_profiler");
        $__internal_248e2137f7161cee1aa9dad79c6a8e77e8c82bd5ad0f4b774fbe1df137c7132e->enter($__internal_248e2137f7161cee1aa9dad79c6a8e77e8c82bd5ad0f4b774fbe1df137c7132e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_248e2137f7161cee1aa9dad79c6a8e77e8c82bd5ad0f4b774fbe1df137c7132e->leave($__internal_248e2137f7161cee1aa9dad79c6a8e77e8c82bd5ad0f4b774fbe1df137c7132e_prof);

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
