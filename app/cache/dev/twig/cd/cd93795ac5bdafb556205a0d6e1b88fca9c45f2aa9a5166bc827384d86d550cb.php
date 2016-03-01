<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_dfedbd925d935f4b5e855e1b02b239741b20672dab18c92a7f7acfaaecc534f3 extends Twig_Template
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
        $__internal_e374f38e10090eadaa6c75ddbde53faa20e401e13323db364d4eefd792716b2a = $this->env->getExtension("native_profiler");
        $__internal_e374f38e10090eadaa6c75ddbde53faa20e401e13323db364d4eefd792716b2a->enter($__internal_e374f38e10090eadaa6c75ddbde53faa20e401e13323db364d4eefd792716b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e374f38e10090eadaa6c75ddbde53faa20e401e13323db364d4eefd792716b2a->leave($__internal_e374f38e10090eadaa6c75ddbde53faa20e401e13323db364d4eefd792716b2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4136e27c3718d78832da2572b90a711e6e405b70c055744730d1516944c29437 = $this->env->getExtension("native_profiler");
        $__internal_4136e27c3718d78832da2572b90a711e6e405b70c055744730d1516944c29437->enter($__internal_4136e27c3718d78832da2572b90a711e6e405b70c055744730d1516944c29437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4136e27c3718d78832da2572b90a711e6e405b70c055744730d1516944c29437->leave($__internal_4136e27c3718d78832da2572b90a711e6e405b70c055744730d1516944c29437_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1732b29459ea7cb5c4ec6606fd20cc1603e1d4c3d1d6ea99f40fe2351ecd43a = $this->env->getExtension("native_profiler");
        $__internal_b1732b29459ea7cb5c4ec6606fd20cc1603e1d4c3d1d6ea99f40fe2351ecd43a->enter($__internal_b1732b29459ea7cb5c4ec6606fd20cc1603e1d4c3d1d6ea99f40fe2351ecd43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b1732b29459ea7cb5c4ec6606fd20cc1603e1d4c3d1d6ea99f40fe2351ecd43a->leave($__internal_b1732b29459ea7cb5c4ec6606fd20cc1603e1d4c3d1d6ea99f40fe2351ecd43a_prof);

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
