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
        $__internal_6ab93a1fd9f70216f1f36b89af7af9110cff5194fdf9404ba7dce5133b1694f2 = $this->env->getExtension("native_profiler");
        $__internal_6ab93a1fd9f70216f1f36b89af7af9110cff5194fdf9404ba7dce5133b1694f2->enter($__internal_6ab93a1fd9f70216f1f36b89af7af9110cff5194fdf9404ba7dce5133b1694f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ab93a1fd9f70216f1f36b89af7af9110cff5194fdf9404ba7dce5133b1694f2->leave($__internal_6ab93a1fd9f70216f1f36b89af7af9110cff5194fdf9404ba7dce5133b1694f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6012db41de13213a9ac4d6b4e14ed8daf7be599fa276a98c40efd9590e9cd347 = $this->env->getExtension("native_profiler");
        $__internal_6012db41de13213a9ac4d6b4e14ed8daf7be599fa276a98c40efd9590e9cd347->enter($__internal_6012db41de13213a9ac4d6b4e14ed8daf7be599fa276a98c40efd9590e9cd347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6012db41de13213a9ac4d6b4e14ed8daf7be599fa276a98c40efd9590e9cd347->leave($__internal_6012db41de13213a9ac4d6b4e14ed8daf7be599fa276a98c40efd9590e9cd347_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bac635362c8f70ec7cb1e71f765f26bd082d07d8f3f898310fda695fdf3a7fb1 = $this->env->getExtension("native_profiler");
        $__internal_bac635362c8f70ec7cb1e71f765f26bd082d07d8f3f898310fda695fdf3a7fb1->enter($__internal_bac635362c8f70ec7cb1e71f765f26bd082d07d8f3f898310fda695fdf3a7fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bac635362c8f70ec7cb1e71f765f26bd082d07d8f3f898310fda695fdf3a7fb1->leave($__internal_bac635362c8f70ec7cb1e71f765f26bd082d07d8f3f898310fda695fdf3a7fb1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_800621981102096fbbbd4fa99a3dcf962247d521a3b574804cdf75f9bedf3a4a = $this->env->getExtension("native_profiler");
        $__internal_800621981102096fbbbd4fa99a3dcf962247d521a3b574804cdf75f9bedf3a4a->enter($__internal_800621981102096fbbbd4fa99a3dcf962247d521a3b574804cdf75f9bedf3a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_800621981102096fbbbd4fa99a3dcf962247d521a3b574804cdf75f9bedf3a4a->leave($__internal_800621981102096fbbbd4fa99a3dcf962247d521a3b574804cdf75f9bedf3a4a_prof);

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
