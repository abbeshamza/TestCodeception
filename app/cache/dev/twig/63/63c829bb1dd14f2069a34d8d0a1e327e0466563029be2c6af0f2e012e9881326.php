<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2740a5d441c70509ff70c60f6c86c69e87475c2394a57bcee0af2494acb271f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_652ff8ac0594351266aeef0ffe9bf013704299d04f31d06b46d31bf33180f0a0 = $this->env->getExtension("native_profiler");
        $__internal_652ff8ac0594351266aeef0ffe9bf013704299d04f31d06b46d31bf33180f0a0->enter($__internal_652ff8ac0594351266aeef0ffe9bf013704299d04f31d06b46d31bf33180f0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_652ff8ac0594351266aeef0ffe9bf013704299d04f31d06b46d31bf33180f0a0->leave($__internal_652ff8ac0594351266aeef0ffe9bf013704299d04f31d06b46d31bf33180f0a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0481114b6663714d3d16f35a059c3a58a3d4f937abe7008ee6764d050ed64b6c = $this->env->getExtension("native_profiler");
        $__internal_0481114b6663714d3d16f35a059c3a58a3d4f937abe7008ee6764d050ed64b6c->enter($__internal_0481114b6663714d3d16f35a059c3a58a3d4f937abe7008ee6764d050ed64b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0481114b6663714d3d16f35a059c3a58a3d4f937abe7008ee6764d050ed64b6c->leave($__internal_0481114b6663714d3d16f35a059c3a58a3d4f937abe7008ee6764d050ed64b6c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc31d4949dcebb68365bfd45af62f29753fbdf3d6284ca2113b130ef9240effa = $this->env->getExtension("native_profiler");
        $__internal_cc31d4949dcebb68365bfd45af62f29753fbdf3d6284ca2113b130ef9240effa->enter($__internal_cc31d4949dcebb68365bfd45af62f29753fbdf3d6284ca2113b130ef9240effa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc31d4949dcebb68365bfd45af62f29753fbdf3d6284ca2113b130ef9240effa->leave($__internal_cc31d4949dcebb68365bfd45af62f29753fbdf3d6284ca2113b130ef9240effa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcddcd3072bf72d83bc1d137b9774d223ac6240d2fa1885d7184cbaeae1e5ed7 = $this->env->getExtension("native_profiler");
        $__internal_bcddcd3072bf72d83bc1d137b9774d223ac6240d2fa1885d7184cbaeae1e5ed7->enter($__internal_bcddcd3072bf72d83bc1d137b9774d223ac6240d2fa1885d7184cbaeae1e5ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bcddcd3072bf72d83bc1d137b9774d223ac6240d2fa1885d7184cbaeae1e5ed7->leave($__internal_bcddcd3072bf72d83bc1d137b9774d223ac6240d2fa1885d7184cbaeae1e5ed7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
