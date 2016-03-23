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
        $__internal_dbf2d8cb725fbc06406b768dc743848b3dddfd91db4d46a21fe878352e9a4f27 = $this->env->getExtension("native_profiler");
        $__internal_dbf2d8cb725fbc06406b768dc743848b3dddfd91db4d46a21fe878352e9a4f27->enter($__internal_dbf2d8cb725fbc06406b768dc743848b3dddfd91db4d46a21fe878352e9a4f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf2d8cb725fbc06406b768dc743848b3dddfd91db4d46a21fe878352e9a4f27->leave($__internal_dbf2d8cb725fbc06406b768dc743848b3dddfd91db4d46a21fe878352e9a4f27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c7577fe9779dc8548670b2d366038b0f6c8e08d135151c230d231db2dedf3624 = $this->env->getExtension("native_profiler");
        $__internal_c7577fe9779dc8548670b2d366038b0f6c8e08d135151c230d231db2dedf3624->enter($__internal_c7577fe9779dc8548670b2d366038b0f6c8e08d135151c230d231db2dedf3624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7577fe9779dc8548670b2d366038b0f6c8e08d135151c230d231db2dedf3624->leave($__internal_c7577fe9779dc8548670b2d366038b0f6c8e08d135151c230d231db2dedf3624_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcd6d1711cbb90f29e578bebe75572953ad5abc4f312de337dd2d90769ef8742 = $this->env->getExtension("native_profiler");
        $__internal_dcd6d1711cbb90f29e578bebe75572953ad5abc4f312de337dd2d90769ef8742->enter($__internal_dcd6d1711cbb90f29e578bebe75572953ad5abc4f312de337dd2d90769ef8742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dcd6d1711cbb90f29e578bebe75572953ad5abc4f312de337dd2d90769ef8742->leave($__internal_dcd6d1711cbb90f29e578bebe75572953ad5abc4f312de337dd2d90769ef8742_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1aefe998e8623a709235b7f1a1fc4c8cc7be872fd26676f4fd318c1db91ee0f1 = $this->env->getExtension("native_profiler");
        $__internal_1aefe998e8623a709235b7f1a1fc4c8cc7be872fd26676f4fd318c1db91ee0f1->enter($__internal_1aefe998e8623a709235b7f1a1fc4c8cc7be872fd26676f4fd318c1db91ee0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1aefe998e8623a709235b7f1a1fc4c8cc7be872fd26676f4fd318c1db91ee0f1->leave($__internal_1aefe998e8623a709235b7f1a1fc4c8cc7be872fd26676f4fd318c1db91ee0f1_prof);

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
