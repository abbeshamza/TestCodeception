<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ed58093abdd7c95fd3e421d1a1f237e517fafd6319dde2db5e47594467a046ae extends Twig_Template
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
        $__internal_de76f41abef1a2f29937ae65589bf4755205fda08e5ccf7db07b0de85c3cd65e = $this->env->getExtension("native_profiler");
        $__internal_de76f41abef1a2f29937ae65589bf4755205fda08e5ccf7db07b0de85c3cd65e->enter($__internal_de76f41abef1a2f29937ae65589bf4755205fda08e5ccf7db07b0de85c3cd65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_de76f41abef1a2f29937ae65589bf4755205fda08e5ccf7db07b0de85c3cd65e->leave($__internal_de76f41abef1a2f29937ae65589bf4755205fda08e5ccf7db07b0de85c3cd65e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfd09f94900ff0161577f942cc82d49c48ae56eeaa9d0a34a72077a9d6cf04aa = $this->env->getExtension("native_profiler");
        $__internal_cfd09f94900ff0161577f942cc82d49c48ae56eeaa9d0a34a72077a9d6cf04aa->enter($__internal_cfd09f94900ff0161577f942cc82d49c48ae56eeaa9d0a34a72077a9d6cf04aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cfd09f94900ff0161577f942cc82d49c48ae56eeaa9d0a34a72077a9d6cf04aa->leave($__internal_cfd09f94900ff0161577f942cc82d49c48ae56eeaa9d0a34a72077a9d6cf04aa_prof);

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
