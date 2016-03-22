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
        $__internal_42fae72315478d234b1b32b11d86b1bfaa398c577d5a557d2e7971ed120650b7 = $this->env->getExtension("native_profiler");
        $__internal_42fae72315478d234b1b32b11d86b1bfaa398c577d5a557d2e7971ed120650b7->enter($__internal_42fae72315478d234b1b32b11d86b1bfaa398c577d5a557d2e7971ed120650b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42fae72315478d234b1b32b11d86b1bfaa398c577d5a557d2e7971ed120650b7->leave($__internal_42fae72315478d234b1b32b11d86b1bfaa398c577d5a557d2e7971ed120650b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20ed7a4fe72dabdc86d1891ff0bf689d5d9d7c06e3eb27dbf58f1be48f86efe1 = $this->env->getExtension("native_profiler");
        $__internal_20ed7a4fe72dabdc86d1891ff0bf689d5d9d7c06e3eb27dbf58f1be48f86efe1->enter($__internal_20ed7a4fe72dabdc86d1891ff0bf689d5d9d7c06e3eb27dbf58f1be48f86efe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_20ed7a4fe72dabdc86d1891ff0bf689d5d9d7c06e3eb27dbf58f1be48f86efe1->leave($__internal_20ed7a4fe72dabdc86d1891ff0bf689d5d9d7c06e3eb27dbf58f1be48f86efe1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c552b07a6a34e41a1b209d79176f7bcba54ba8fc4c28551f267aec207f31fb9d = $this->env->getExtension("native_profiler");
        $__internal_c552b07a6a34e41a1b209d79176f7bcba54ba8fc4c28551f267aec207f31fb9d->enter($__internal_c552b07a6a34e41a1b209d79176f7bcba54ba8fc4c28551f267aec207f31fb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c552b07a6a34e41a1b209d79176f7bcba54ba8fc4c28551f267aec207f31fb9d->leave($__internal_c552b07a6a34e41a1b209d79176f7bcba54ba8fc4c28551f267aec207f31fb9d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c022f33cd788e316e2b7d547bfa149a69ab745ccd0548eb9097625a7d4cf50c = $this->env->getExtension("native_profiler");
        $__internal_9c022f33cd788e316e2b7d547bfa149a69ab745ccd0548eb9097625a7d4cf50c->enter($__internal_9c022f33cd788e316e2b7d547bfa149a69ab745ccd0548eb9097625a7d4cf50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9c022f33cd788e316e2b7d547bfa149a69ab745ccd0548eb9097625a7d4cf50c->leave($__internal_9c022f33cd788e316e2b7d547bfa149a69ab745ccd0548eb9097625a7d4cf50c_prof);

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
