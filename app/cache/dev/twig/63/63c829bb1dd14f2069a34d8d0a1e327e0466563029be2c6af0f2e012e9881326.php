<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2740a5d441c70509ff70c60f6c86c69e87475c2394a57bcee0af2494acb271f7 extends Twig_Template
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
        $__internal_01f5ec9cc7764fe9276e2148abb89747baded58675da4022d2a7ca81a79b697d = $this->env->getExtension("native_profiler");
        $__internal_01f5ec9cc7764fe9276e2148abb89747baded58675da4022d2a7ca81a79b697d->enter($__internal_01f5ec9cc7764fe9276e2148abb89747baded58675da4022d2a7ca81a79b697d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01f5ec9cc7764fe9276e2148abb89747baded58675da4022d2a7ca81a79b697d->leave($__internal_01f5ec9cc7764fe9276e2148abb89747baded58675da4022d2a7ca81a79b697d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c628f625cf26b0001337eb11874edb51de032a43069fd9e34784ab4da7c84a7d = $this->env->getExtension("native_profiler");
        $__internal_c628f625cf26b0001337eb11874edb51de032a43069fd9e34784ab4da7c84a7d->enter($__internal_c628f625cf26b0001337eb11874edb51de032a43069fd9e34784ab4da7c84a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c628f625cf26b0001337eb11874edb51de032a43069fd9e34784ab4da7c84a7d->leave($__internal_c628f625cf26b0001337eb11874edb51de032a43069fd9e34784ab4da7c84a7d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_805352336ea42832b6093eabdec002149b1a1b263187828e2d3ab2487673b247 = $this->env->getExtension("native_profiler");
        $__internal_805352336ea42832b6093eabdec002149b1a1b263187828e2d3ab2487673b247->enter($__internal_805352336ea42832b6093eabdec002149b1a1b263187828e2d3ab2487673b247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_805352336ea42832b6093eabdec002149b1a1b263187828e2d3ab2487673b247->leave($__internal_805352336ea42832b6093eabdec002149b1a1b263187828e2d3ab2487673b247_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b8daf73498ce204c5138a688fdb77074a3d4273545d59325010e70a923a68d3 = $this->env->getExtension("native_profiler");
        $__internal_7b8daf73498ce204c5138a688fdb77074a3d4273545d59325010e70a923a68d3->enter($__internal_7b8daf73498ce204c5138a688fdb77074a3d4273545d59325010e70a923a68d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7b8daf73498ce204c5138a688fdb77074a3d4273545d59325010e70a923a68d3->leave($__internal_7b8daf73498ce204c5138a688fdb77074a3d4273545d59325010e70a923a68d3_prof);

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
