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
        $__internal_a1a5525ab7c80d876a26d6fa5069d92d960692539465fca9330ed10fc95e345a = $this->env->getExtension("native_profiler");
        $__internal_a1a5525ab7c80d876a26d6fa5069d92d960692539465fca9330ed10fc95e345a->enter($__internal_a1a5525ab7c80d876a26d6fa5069d92d960692539465fca9330ed10fc95e345a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a5525ab7c80d876a26d6fa5069d92d960692539465fca9330ed10fc95e345a->leave($__internal_a1a5525ab7c80d876a26d6fa5069d92d960692539465fca9330ed10fc95e345a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24bc3c761da32280a9f0804968597c182fede6a90dc62e5aafe11b7eb580cdd8 = $this->env->getExtension("native_profiler");
        $__internal_24bc3c761da32280a9f0804968597c182fede6a90dc62e5aafe11b7eb580cdd8->enter($__internal_24bc3c761da32280a9f0804968597c182fede6a90dc62e5aafe11b7eb580cdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_24bc3c761da32280a9f0804968597c182fede6a90dc62e5aafe11b7eb580cdd8->leave($__internal_24bc3c761da32280a9f0804968597c182fede6a90dc62e5aafe11b7eb580cdd8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f08fd3943b62053ff425786c6a4fc33f257199686cf2171c2839a34009ccee0 = $this->env->getExtension("native_profiler");
        $__internal_2f08fd3943b62053ff425786c6a4fc33f257199686cf2171c2839a34009ccee0->enter($__internal_2f08fd3943b62053ff425786c6a4fc33f257199686cf2171c2839a34009ccee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f08fd3943b62053ff425786c6a4fc33f257199686cf2171c2839a34009ccee0->leave($__internal_2f08fd3943b62053ff425786c6a4fc33f257199686cf2171c2839a34009ccee0_prof);

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
