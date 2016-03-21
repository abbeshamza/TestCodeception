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
        $__internal_7234f033647d724f063252fa4831a445e02cd60b8d98f7e2ad69d8528a5af5f6 = $this->env->getExtension("native_profiler");
        $__internal_7234f033647d724f063252fa4831a445e02cd60b8d98f7e2ad69d8528a5af5f6->enter($__internal_7234f033647d724f063252fa4831a445e02cd60b8d98f7e2ad69d8528a5af5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7234f033647d724f063252fa4831a445e02cd60b8d98f7e2ad69d8528a5af5f6->leave($__internal_7234f033647d724f063252fa4831a445e02cd60b8d98f7e2ad69d8528a5af5f6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_089090d8952db34650d92c018e96bea5fd4ed18cf1b59bd5c03c3853cfddabc1 = $this->env->getExtension("native_profiler");
        $__internal_089090d8952db34650d92c018e96bea5fd4ed18cf1b59bd5c03c3853cfddabc1->enter($__internal_089090d8952db34650d92c018e96bea5fd4ed18cf1b59bd5c03c3853cfddabc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_089090d8952db34650d92c018e96bea5fd4ed18cf1b59bd5c03c3853cfddabc1->leave($__internal_089090d8952db34650d92c018e96bea5fd4ed18cf1b59bd5c03c3853cfddabc1_prof);

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
