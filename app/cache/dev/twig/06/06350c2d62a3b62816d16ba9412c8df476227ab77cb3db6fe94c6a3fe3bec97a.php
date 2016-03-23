<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_737e1925a735e32b0551e10e5000904c14271db6ffcee24cf186039b49e4d7be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_578d05cc6be81475444c97484f6370e0ff342e1f483700dc10337a365e132ae6 = $this->env->getExtension("native_profiler");
        $__internal_578d05cc6be81475444c97484f6370e0ff342e1f483700dc10337a365e132ae6->enter($__internal_578d05cc6be81475444c97484f6370e0ff342e1f483700dc10337a365e132ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_578d05cc6be81475444c97484f6370e0ff342e1f483700dc10337a365e132ae6->leave($__internal_578d05cc6be81475444c97484f6370e0ff342e1f483700dc10337a365e132ae6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd587d688d252d050f4c289b4715aef4065ad8dcfebfe04be34c96daf2c4dfe9 = $this->env->getExtension("native_profiler");
        $__internal_dd587d688d252d050f4c289b4715aef4065ad8dcfebfe04be34c96daf2c4dfe9->enter($__internal_dd587d688d252d050f4c289b4715aef4065ad8dcfebfe04be34c96daf2c4dfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dd587d688d252d050f4c289b4715aef4065ad8dcfebfe04be34c96daf2c4dfe9->leave($__internal_dd587d688d252d050f4c289b4715aef4065ad8dcfebfe04be34c96daf2c4dfe9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f863e3f6f46cce2e73a057ec069cc177d70f2801860b9add2b1760760748585 = $this->env->getExtension("native_profiler");
        $__internal_0f863e3f6f46cce2e73a057ec069cc177d70f2801860b9add2b1760760748585->enter($__internal_0f863e3f6f46cce2e73a057ec069cc177d70f2801860b9add2b1760760748585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0f863e3f6f46cce2e73a057ec069cc177d70f2801860b9add2b1760760748585->leave($__internal_0f863e3f6f46cce2e73a057ec069cc177d70f2801860b9add2b1760760748585_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
