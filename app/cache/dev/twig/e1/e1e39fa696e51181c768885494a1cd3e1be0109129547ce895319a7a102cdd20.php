<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_590fad2881cc1f2993e834e49507f952649365f4cbb8b8e807ea300dc5142336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36cbe8076d81dc9d2f6b8172032c0cf8c7e9368e2d96f7a0a33bf47a0b9b05bb = $this->env->getExtension("native_profiler");
        $__internal_36cbe8076d81dc9d2f6b8172032c0cf8c7e9368e2d96f7a0a33bf47a0b9b05bb->enter($__internal_36cbe8076d81dc9d2f6b8172032c0cf8c7e9368e2d96f7a0a33bf47a0b9b05bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_36cbe8076d81dc9d2f6b8172032c0cf8c7e9368e2d96f7a0a33bf47a0b9b05bb->leave($__internal_36cbe8076d81dc9d2f6b8172032c0cf8c7e9368e2d96f7a0a33bf47a0b9b05bb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b0ab86f1eba108c08567e12e597d9d0ab78b4fe91a81ce7f269bf3381f49ac4 = $this->env->getExtension("native_profiler");
        $__internal_5b0ab86f1eba108c08567e12e597d9d0ab78b4fe91a81ce7f269bf3381f49ac4->enter($__internal_5b0ab86f1eba108c08567e12e597d9d0ab78b4fe91a81ce7f269bf3381f49ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5b0ab86f1eba108c08567e12e597d9d0ab78b4fe91a81ce7f269bf3381f49ac4->leave($__internal_5b0ab86f1eba108c08567e12e597d9d0ab78b4fe91a81ce7f269bf3381f49ac4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
