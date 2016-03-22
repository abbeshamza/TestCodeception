<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a8ab3e805d3573d7a29c2704d5672e85a9d259855c3ca8d5e64764bd4c36a5c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_bbfbf4656fd92d7e009403e211a032d8176e7eb9d915e860b74379192f957fb0 = $this->env->getExtension("native_profiler");
        $__internal_bbfbf4656fd92d7e009403e211a032d8176e7eb9d915e860b74379192f957fb0->enter($__internal_bbfbf4656fd92d7e009403e211a032d8176e7eb9d915e860b74379192f957fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbfbf4656fd92d7e009403e211a032d8176e7eb9d915e860b74379192f957fb0->leave($__internal_bbfbf4656fd92d7e009403e211a032d8176e7eb9d915e860b74379192f957fb0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_232a03fc01a5491138eb0f265614a3d62a7259d26bf0dddbc6c3267061c7d564 = $this->env->getExtension("native_profiler");
        $__internal_232a03fc01a5491138eb0f265614a3d62a7259d26bf0dddbc6c3267061c7d564->enter($__internal_232a03fc01a5491138eb0f265614a3d62a7259d26bf0dddbc6c3267061c7d564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_232a03fc01a5491138eb0f265614a3d62a7259d26bf0dddbc6c3267061c7d564->leave($__internal_232a03fc01a5491138eb0f265614a3d62a7259d26bf0dddbc6c3267061c7d564_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae4e13fcc02bb93419805d39ad43fdc32d4d0b9cc41f62e41bd58d30c162dea8 = $this->env->getExtension("native_profiler");
        $__internal_ae4e13fcc02bb93419805d39ad43fdc32d4d0b9cc41f62e41bd58d30c162dea8->enter($__internal_ae4e13fcc02bb93419805d39ad43fdc32d4d0b9cc41f62e41bd58d30c162dea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ae4e13fcc02bb93419805d39ad43fdc32d4d0b9cc41f62e41bd58d30c162dea8->leave($__internal_ae4e13fcc02bb93419805d39ad43fdc32d4d0b9cc41f62e41bd58d30c162dea8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad89c7de99e171a281c714e17ba3c258a3dd47d0ec62d4377e00746ff1f8261e = $this->env->getExtension("native_profiler");
        $__internal_ad89c7de99e171a281c714e17ba3c258a3dd47d0ec62d4377e00746ff1f8261e->enter($__internal_ad89c7de99e171a281c714e17ba3c258a3dd47d0ec62d4377e00746ff1f8261e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ad89c7de99e171a281c714e17ba3c258a3dd47d0ec62d4377e00746ff1f8261e->leave($__internal_ad89c7de99e171a281c714e17ba3c258a3dd47d0ec62d4377e00746ff1f8261e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
