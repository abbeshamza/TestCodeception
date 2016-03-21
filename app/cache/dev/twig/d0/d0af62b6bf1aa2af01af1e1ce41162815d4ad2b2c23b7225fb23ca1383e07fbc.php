<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a8ab3e805d3573d7a29c2704d5672e85a9d259855c3ca8d5e64764bd4c36a5c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de7028ba5f60b823df373f99725af801c862e29d25145ecb97b3fde843c4d96f = $this->env->getExtension("native_profiler");
        $__internal_de7028ba5f60b823df373f99725af801c862e29d25145ecb97b3fde843c4d96f->enter($__internal_de7028ba5f60b823df373f99725af801c862e29d25145ecb97b3fde843c4d96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de7028ba5f60b823df373f99725af801c862e29d25145ecb97b3fde843c4d96f->leave($__internal_de7028ba5f60b823df373f99725af801c862e29d25145ecb97b3fde843c4d96f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e32367712e817651a5ae7622e6c8c889b55be4a2fb831b5555f0bef8d5911576 = $this->env->getExtension("native_profiler");
        $__internal_e32367712e817651a5ae7622e6c8c889b55be4a2fb831b5555f0bef8d5911576->enter($__internal_e32367712e817651a5ae7622e6c8c889b55be4a2fb831b5555f0bef8d5911576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e32367712e817651a5ae7622e6c8c889b55be4a2fb831b5555f0bef8d5911576->leave($__internal_e32367712e817651a5ae7622e6c8c889b55be4a2fb831b5555f0bef8d5911576_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f65cbf634fe67241cfc402864cb1d7609f9e0d318f5b3ef4f3d6baec20278ff3 = $this->env->getExtension("native_profiler");
        $__internal_f65cbf634fe67241cfc402864cb1d7609f9e0d318f5b3ef4f3d6baec20278ff3->enter($__internal_f65cbf634fe67241cfc402864cb1d7609f9e0d318f5b3ef4f3d6baec20278ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f65cbf634fe67241cfc402864cb1d7609f9e0d318f5b3ef4f3d6baec20278ff3->leave($__internal_f65cbf634fe67241cfc402864cb1d7609f9e0d318f5b3ef4f3d6baec20278ff3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bb87a038ded41f54501c894849e867a49be37e9fd94b69373141f8425531370 = $this->env->getExtension("native_profiler");
        $__internal_2bb87a038ded41f54501c894849e867a49be37e9fd94b69373141f8425531370->enter($__internal_2bb87a038ded41f54501c894849e867a49be37e9fd94b69373141f8425531370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2bb87a038ded41f54501c894849e867a49be37e9fd94b69373141f8425531370->leave($__internal_2bb87a038ded41f54501c894849e867a49be37e9fd94b69373141f8425531370_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
