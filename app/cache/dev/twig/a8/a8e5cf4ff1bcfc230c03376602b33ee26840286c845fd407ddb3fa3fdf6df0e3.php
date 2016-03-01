<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1e020adba405e113b64f4ed93a3d86b2bc00f858689f712df13706e606944fc9 extends Twig_Template
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
        $__internal_1e731eb5e98dc48b6b99195949d524740eaabfdfc8122e2c3c17b209f0ae4645 = $this->env->getExtension("native_profiler");
        $__internal_1e731eb5e98dc48b6b99195949d524740eaabfdfc8122e2c3c17b209f0ae4645->enter($__internal_1e731eb5e98dc48b6b99195949d524740eaabfdfc8122e2c3c17b209f0ae4645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e731eb5e98dc48b6b99195949d524740eaabfdfc8122e2c3c17b209f0ae4645->leave($__internal_1e731eb5e98dc48b6b99195949d524740eaabfdfc8122e2c3c17b209f0ae4645_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8f93a5eae0947609c84f689b66b3b8013691cd43dece848a678c4e565d548efd = $this->env->getExtension("native_profiler");
        $__internal_8f93a5eae0947609c84f689b66b3b8013691cd43dece848a678c4e565d548efd->enter($__internal_8f93a5eae0947609c84f689b66b3b8013691cd43dece848a678c4e565d548efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8f93a5eae0947609c84f689b66b3b8013691cd43dece848a678c4e565d548efd->leave($__internal_8f93a5eae0947609c84f689b66b3b8013691cd43dece848a678c4e565d548efd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_729f824dfcfd0e46ce831dd4151440538788c5c0f509043a2bcc069bef0d0372 = $this->env->getExtension("native_profiler");
        $__internal_729f824dfcfd0e46ce831dd4151440538788c5c0f509043a2bcc069bef0d0372->enter($__internal_729f824dfcfd0e46ce831dd4151440538788c5c0f509043a2bcc069bef0d0372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_729f824dfcfd0e46ce831dd4151440538788c5c0f509043a2bcc069bef0d0372->leave($__internal_729f824dfcfd0e46ce831dd4151440538788c5c0f509043a2bcc069bef0d0372_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19245b275629c9a19d350854d82aabbb70199a2d25253c14e54c705ef5e0fb0b = $this->env->getExtension("native_profiler");
        $__internal_19245b275629c9a19d350854d82aabbb70199a2d25253c14e54c705ef5e0fb0b->enter($__internal_19245b275629c9a19d350854d82aabbb70199a2d25253c14e54c705ef5e0fb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_19245b275629c9a19d350854d82aabbb70199a2d25253c14e54c705ef5e0fb0b->leave($__internal_19245b275629c9a19d350854d82aabbb70199a2d25253c14e54c705ef5e0fb0b_prof);

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
