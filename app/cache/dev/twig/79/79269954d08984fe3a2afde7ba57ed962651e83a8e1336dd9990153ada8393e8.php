<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0fb7cf500842501bbe3cccf49bbcdee35416b1a0dd25414823a6ad917f1c781e extends Twig_Template
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
        $__internal_db225dbb2e38fefadb0e05785e0c7f0e6641f9a76fe7a586913157c912ba253f = $this->env->getExtension("native_profiler");
        $__internal_db225dbb2e38fefadb0e05785e0c7f0e6641f9a76fe7a586913157c912ba253f->enter($__internal_db225dbb2e38fefadb0e05785e0c7f0e6641f9a76fe7a586913157c912ba253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_db225dbb2e38fefadb0e05785e0c7f0e6641f9a76fe7a586913157c912ba253f->leave($__internal_db225dbb2e38fefadb0e05785e0c7f0e6641f9a76fe7a586913157c912ba253f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
