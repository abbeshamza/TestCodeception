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
        $__internal_8ed28831de84a4e073191623345151af837c6decf69002f4d12c131c4990f5da = $this->env->getExtension("native_profiler");
        $__internal_8ed28831de84a4e073191623345151af837c6decf69002f4d12c131c4990f5da->enter($__internal_8ed28831de84a4e073191623345151af837c6decf69002f4d12c131c4990f5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8ed28831de84a4e073191623345151af837c6decf69002f4d12c131c4990f5da->leave($__internal_8ed28831de84a4e073191623345151af837c6decf69002f4d12c131c4990f5da_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ceb356513c7fef062b814ba43f6d583d39bfa6d6680a5c613dd64b2a5f37616c = $this->env->getExtension("native_profiler");
        $__internal_ceb356513c7fef062b814ba43f6d583d39bfa6d6680a5c613dd64b2a5f37616c->enter($__internal_ceb356513c7fef062b814ba43f6d583d39bfa6d6680a5c613dd64b2a5f37616c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ceb356513c7fef062b814ba43f6d583d39bfa6d6680a5c613dd64b2a5f37616c->leave($__internal_ceb356513c7fef062b814ba43f6d583d39bfa6d6680a5c613dd64b2a5f37616c_prof);

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
