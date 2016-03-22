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
        $__internal_0750b6bffc5d0a07368c27943572287360d86adad47209d588c6c77b902d07ed = $this->env->getExtension("native_profiler");
        $__internal_0750b6bffc5d0a07368c27943572287360d86adad47209d588c6c77b902d07ed->enter($__internal_0750b6bffc5d0a07368c27943572287360d86adad47209d588c6c77b902d07ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0750b6bffc5d0a07368c27943572287360d86adad47209d588c6c77b902d07ed->leave($__internal_0750b6bffc5d0a07368c27943572287360d86adad47209d588c6c77b902d07ed_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_89104dd94cadf1c05faef277b875f0146a4bca57bbea8300f6f8576d5b4fcd31 = $this->env->getExtension("native_profiler");
        $__internal_89104dd94cadf1c05faef277b875f0146a4bca57bbea8300f6f8576d5b4fcd31->enter($__internal_89104dd94cadf1c05faef277b875f0146a4bca57bbea8300f6f8576d5b4fcd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_89104dd94cadf1c05faef277b875f0146a4bca57bbea8300f6f8576d5b4fcd31->leave($__internal_89104dd94cadf1c05faef277b875f0146a4bca57bbea8300f6f8576d5b4fcd31_prof);

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
