<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1d829a62d043d16fba0e3d1d77dfb0c5c3b4ff925d91aa5d916306be73de063d extends Twig_Template
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
        $__internal_52f73abb747dce34e9b9446cfd24aefb7080e29e68a96e9c63b9beb20d61bd3d = $this->env->getExtension("native_profiler");
        $__internal_52f73abb747dce34e9b9446cfd24aefb7080e29e68a96e9c63b9beb20d61bd3d->enter($__internal_52f73abb747dce34e9b9446cfd24aefb7080e29e68a96e9c63b9beb20d61bd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_52f73abb747dce34e9b9446cfd24aefb7080e29e68a96e9c63b9beb20d61bd3d->leave($__internal_52f73abb747dce34e9b9446cfd24aefb7080e29e68a96e9c63b9beb20d61bd3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
