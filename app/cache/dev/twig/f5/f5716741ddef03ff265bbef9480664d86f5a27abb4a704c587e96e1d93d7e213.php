<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7e70427d8994a9c0e9d879a4bd94276ceabd6802af0206bfc866d116419b5af2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0c17b70299f6f2d83f40787e57b30ef59c78cc94b349c3f9e34f72d4d94bc60d = $this->env->getExtension("native_profiler");
        $__internal_0c17b70299f6f2d83f40787e57b30ef59c78cc94b349c3f9e34f72d4d94bc60d->enter($__internal_0c17b70299f6f2d83f40787e57b30ef59c78cc94b349c3f9e34f72d4d94bc60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c17b70299f6f2d83f40787e57b30ef59c78cc94b349c3f9e34f72d4d94bc60d->leave($__internal_0c17b70299f6f2d83f40787e57b30ef59c78cc94b349c3f9e34f72d4d94bc60d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db95e822f1cf676fffa6bc7cb396739b8398a96b2195561a0a8baeb21743919c = $this->env->getExtension("native_profiler");
        $__internal_db95e822f1cf676fffa6bc7cb396739b8398a96b2195561a0a8baeb21743919c->enter($__internal_db95e822f1cf676fffa6bc7cb396739b8398a96b2195561a0a8baeb21743919c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_db95e822f1cf676fffa6bc7cb396739b8398a96b2195561a0a8baeb21743919c->leave($__internal_db95e822f1cf676fffa6bc7cb396739b8398a96b2195561a0a8baeb21743919c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcb4d8a90544f0b5df7843ea257a21a6dd6ae24f03e9ccff16a3c4ca254393b3 = $this->env->getExtension("native_profiler");
        $__internal_dcb4d8a90544f0b5df7843ea257a21a6dd6ae24f03e9ccff16a3c4ca254393b3->enter($__internal_dcb4d8a90544f0b5df7843ea257a21a6dd6ae24f03e9ccff16a3c4ca254393b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dcb4d8a90544f0b5df7843ea257a21a6dd6ae24f03e9ccff16a3c4ca254393b3->leave($__internal_dcb4d8a90544f0b5df7843ea257a21a6dd6ae24f03e9ccff16a3c4ca254393b3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fe0074bd4ddf90e079bad1fe42beb529f3aa94c822a177d3e8412e445c08354 = $this->env->getExtension("native_profiler");
        $__internal_4fe0074bd4ddf90e079bad1fe42beb529f3aa94c822a177d3e8412e445c08354->enter($__internal_4fe0074bd4ddf90e079bad1fe42beb529f3aa94c822a177d3e8412e445c08354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4fe0074bd4ddf90e079bad1fe42beb529f3aa94c822a177d3e8412e445c08354->leave($__internal_4fe0074bd4ddf90e079bad1fe42beb529f3aa94c822a177d3e8412e445c08354_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
