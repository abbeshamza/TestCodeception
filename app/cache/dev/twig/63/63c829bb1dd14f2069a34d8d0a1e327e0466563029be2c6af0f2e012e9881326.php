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
        $__internal_31ab4d2836b1b5a45f5952b05eab51d9aea29da6337ceedccc82107044a8910a = $this->env->getExtension("native_profiler");
        $__internal_31ab4d2836b1b5a45f5952b05eab51d9aea29da6337ceedccc82107044a8910a->enter($__internal_31ab4d2836b1b5a45f5952b05eab51d9aea29da6337ceedccc82107044a8910a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31ab4d2836b1b5a45f5952b05eab51d9aea29da6337ceedccc82107044a8910a->leave($__internal_31ab4d2836b1b5a45f5952b05eab51d9aea29da6337ceedccc82107044a8910a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba63feb4c5eac16ee9f05bccaecff88c689eaf44b50778285c20b7a2427693ec = $this->env->getExtension("native_profiler");
        $__internal_ba63feb4c5eac16ee9f05bccaecff88c689eaf44b50778285c20b7a2427693ec->enter($__internal_ba63feb4c5eac16ee9f05bccaecff88c689eaf44b50778285c20b7a2427693ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ba63feb4c5eac16ee9f05bccaecff88c689eaf44b50778285c20b7a2427693ec->leave($__internal_ba63feb4c5eac16ee9f05bccaecff88c689eaf44b50778285c20b7a2427693ec_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_333d0b857044b9246624766164b9cfec8437728f0b6b365f97a4bda5b7128b2c = $this->env->getExtension("native_profiler");
        $__internal_333d0b857044b9246624766164b9cfec8437728f0b6b365f97a4bda5b7128b2c->enter($__internal_333d0b857044b9246624766164b9cfec8437728f0b6b365f97a4bda5b7128b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_333d0b857044b9246624766164b9cfec8437728f0b6b365f97a4bda5b7128b2c->leave($__internal_333d0b857044b9246624766164b9cfec8437728f0b6b365f97a4bda5b7128b2c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_47a07eba068e9376614493958fcdeb710f356912858ae07cf299dcc0a16739a9 = $this->env->getExtension("native_profiler");
        $__internal_47a07eba068e9376614493958fcdeb710f356912858ae07cf299dcc0a16739a9->enter($__internal_47a07eba068e9376614493958fcdeb710f356912858ae07cf299dcc0a16739a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_47a07eba068e9376614493958fcdeb710f356912858ae07cf299dcc0a16739a9->leave($__internal_47a07eba068e9376614493958fcdeb710f356912858ae07cf299dcc0a16739a9_prof);

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
