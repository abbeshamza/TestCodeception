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
        $__internal_3cee8d7ff1dfbe6122025e922879fc0b509d838751894f3e220819de4335fd3c = $this->env->getExtension("native_profiler");
        $__internal_3cee8d7ff1dfbe6122025e922879fc0b509d838751894f3e220819de4335fd3c->enter($__internal_3cee8d7ff1dfbe6122025e922879fc0b509d838751894f3e220819de4335fd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cee8d7ff1dfbe6122025e922879fc0b509d838751894f3e220819de4335fd3c->leave($__internal_3cee8d7ff1dfbe6122025e922879fc0b509d838751894f3e220819de4335fd3c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03f551667185c858a94a94f412a1bf349468658e4bcf275bd91fd663c365b352 = $this->env->getExtension("native_profiler");
        $__internal_03f551667185c858a94a94f412a1bf349468658e4bcf275bd91fd663c365b352->enter($__internal_03f551667185c858a94a94f412a1bf349468658e4bcf275bd91fd663c365b352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_03f551667185c858a94a94f412a1bf349468658e4bcf275bd91fd663c365b352->leave($__internal_03f551667185c858a94a94f412a1bf349468658e4bcf275bd91fd663c365b352_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e88326694e1e6519a4b11a5d5d8fd5e2d53df2f9fff68dea5418a436bd15bcd9 = $this->env->getExtension("native_profiler");
        $__internal_e88326694e1e6519a4b11a5d5d8fd5e2d53df2f9fff68dea5418a436bd15bcd9->enter($__internal_e88326694e1e6519a4b11a5d5d8fd5e2d53df2f9fff68dea5418a436bd15bcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e88326694e1e6519a4b11a5d5d8fd5e2d53df2f9fff68dea5418a436bd15bcd9->leave($__internal_e88326694e1e6519a4b11a5d5d8fd5e2d53df2f9fff68dea5418a436bd15bcd9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1b69f5c0eeceb410ff673d7f054809b2299ea02dee8310a035e44d47b45d8d1 = $this->env->getExtension("native_profiler");
        $__internal_e1b69f5c0eeceb410ff673d7f054809b2299ea02dee8310a035e44d47b45d8d1->enter($__internal_e1b69f5c0eeceb410ff673d7f054809b2299ea02dee8310a035e44d47b45d8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e1b69f5c0eeceb410ff673d7f054809b2299ea02dee8310a035e44d47b45d8d1->leave($__internal_e1b69f5c0eeceb410ff673d7f054809b2299ea02dee8310a035e44d47b45d8d1_prof);

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
