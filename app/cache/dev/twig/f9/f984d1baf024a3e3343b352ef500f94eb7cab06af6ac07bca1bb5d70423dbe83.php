<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_32b5e047d288c2002260a09730c68bb56435d52bb62d4c87b18c6f9864aa45d8 extends Twig_Template
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
        $__internal_85bdf690c463c8af4f025e105f48795f293d7f8892f20c077f52a797d535773b = $this->env->getExtension("native_profiler");
        $__internal_85bdf690c463c8af4f025e105f48795f293d7f8892f20c077f52a797d535773b->enter($__internal_85bdf690c463c8af4f025e105f48795f293d7f8892f20c077f52a797d535773b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_85bdf690c463c8af4f025e105f48795f293d7f8892f20c077f52a797d535773b->leave($__internal_85bdf690c463c8af4f025e105f48795f293d7f8892f20c077f52a797d535773b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
