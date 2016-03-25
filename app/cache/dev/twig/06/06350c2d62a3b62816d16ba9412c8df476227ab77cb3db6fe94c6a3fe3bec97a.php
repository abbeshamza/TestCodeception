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
        $__internal_ff6cd8418d57830c77a84c4da0982a87a96bb1c0a901f4d398d5a97259693411 = $this->env->getExtension("native_profiler");
        $__internal_ff6cd8418d57830c77a84c4da0982a87a96bb1c0a901f4d398d5a97259693411->enter($__internal_ff6cd8418d57830c77a84c4da0982a87a96bb1c0a901f4d398d5a97259693411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff6cd8418d57830c77a84c4da0982a87a96bb1c0a901f4d398d5a97259693411->leave($__internal_ff6cd8418d57830c77a84c4da0982a87a96bb1c0a901f4d398d5a97259693411_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29b215dfab9457b663cd891008866b6673b97b157f69a6bb01ba852743b9167d = $this->env->getExtension("native_profiler");
        $__internal_29b215dfab9457b663cd891008866b6673b97b157f69a6bb01ba852743b9167d->enter($__internal_29b215dfab9457b663cd891008866b6673b97b157f69a6bb01ba852743b9167d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_29b215dfab9457b663cd891008866b6673b97b157f69a6bb01ba852743b9167d->leave($__internal_29b215dfab9457b663cd891008866b6673b97b157f69a6bb01ba852743b9167d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6a122d9404b621452f3846199ab77ae6008c15e6f81f3ea4c6c9a6c38678bcf = $this->env->getExtension("native_profiler");
        $__internal_f6a122d9404b621452f3846199ab77ae6008c15e6f81f3ea4c6c9a6c38678bcf->enter($__internal_f6a122d9404b621452f3846199ab77ae6008c15e6f81f3ea4c6c9a6c38678bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6a122d9404b621452f3846199ab77ae6008c15e6f81f3ea4c6c9a6c38678bcf->leave($__internal_f6a122d9404b621452f3846199ab77ae6008c15e6f81f3ea4c6c9a6c38678bcf_prof);

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
