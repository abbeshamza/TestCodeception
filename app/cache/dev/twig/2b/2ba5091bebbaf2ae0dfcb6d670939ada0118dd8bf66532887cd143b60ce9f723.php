<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_41ef857ca3d0a47b30488989bc31e70b61d720383db61e5205809d63cb270b50 extends Twig_Template
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
        $__internal_ba6aa6ecc6e25bf7aff0420a14182ef4b1af795d36596b0c0706e1828cb15e05 = $this->env->getExtension("native_profiler");
        $__internal_ba6aa6ecc6e25bf7aff0420a14182ef4b1af795d36596b0c0706e1828cb15e05->enter($__internal_ba6aa6ecc6e25bf7aff0420a14182ef4b1af795d36596b0c0706e1828cb15e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_ba6aa6ecc6e25bf7aff0420a14182ef4b1af795d36596b0c0706e1828cb15e05->leave($__internal_ba6aa6ecc6e25bf7aff0420a14182ef4b1af795d36596b0c0706e1828cb15e05_prof);

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
