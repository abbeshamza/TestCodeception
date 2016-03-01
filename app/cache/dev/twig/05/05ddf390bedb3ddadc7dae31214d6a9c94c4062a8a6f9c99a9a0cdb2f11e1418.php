<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_86e8f76b758268a4a078a7f0e48645ddb2b00d028717101612c54969a4c2c610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c1a8fe7c403207e989da048a1bf8d735759e8d96eab85d10dee2fb8a5ab98896 = $this->env->getExtension("native_profiler");
        $__internal_c1a8fe7c403207e989da048a1bf8d735759e8d96eab85d10dee2fb8a5ab98896->enter($__internal_c1a8fe7c403207e989da048a1bf8d735759e8d96eab85d10dee2fb8a5ab98896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a8fe7c403207e989da048a1bf8d735759e8d96eab85d10dee2fb8a5ab98896->leave($__internal_c1a8fe7c403207e989da048a1bf8d735759e8d96eab85d10dee2fb8a5ab98896_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c910dfdc7fddaeeabdfde2ee1ce6817332e5bd59c22c50f101bd7d1f05b8d4c3 = $this->env->getExtension("native_profiler");
        $__internal_c910dfdc7fddaeeabdfde2ee1ce6817332e5bd59c22c50f101bd7d1f05b8d4c3->enter($__internal_c910dfdc7fddaeeabdfde2ee1ce6817332e5bd59c22c50f101bd7d1f05b8d4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c910dfdc7fddaeeabdfde2ee1ce6817332e5bd59c22c50f101bd7d1f05b8d4c3->leave($__internal_c910dfdc7fddaeeabdfde2ee1ce6817332e5bd59c22c50f101bd7d1f05b8d4c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4436b5809615aa541ba3fbc835a5a9e176d148fa8a7138285798dfcc830cb709 = $this->env->getExtension("native_profiler");
        $__internal_4436b5809615aa541ba3fbc835a5a9e176d148fa8a7138285798dfcc830cb709->enter($__internal_4436b5809615aa541ba3fbc835a5a9e176d148fa8a7138285798dfcc830cb709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4436b5809615aa541ba3fbc835a5a9e176d148fa8a7138285798dfcc830cb709->leave($__internal_4436b5809615aa541ba3fbc835a5a9e176d148fa8a7138285798dfcc830cb709_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_24fa57314f4e8eee4a13d65eb4d5ca9cc3ba75d37529debf55f155ae3a6b12c2 = $this->env->getExtension("native_profiler");
        $__internal_24fa57314f4e8eee4a13d65eb4d5ca9cc3ba75d37529debf55f155ae3a6b12c2->enter($__internal_24fa57314f4e8eee4a13d65eb4d5ca9cc3ba75d37529debf55f155ae3a6b12c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_24fa57314f4e8eee4a13d65eb4d5ca9cc3ba75d37529debf55f155ae3a6b12c2->leave($__internal_24fa57314f4e8eee4a13d65eb4d5ca9cc3ba75d37529debf55f155ae3a6b12c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
