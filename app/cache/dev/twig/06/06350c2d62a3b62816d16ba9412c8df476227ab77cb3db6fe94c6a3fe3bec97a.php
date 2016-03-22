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
        $__internal_419fa8044265e6ff6e451ffb6b2bd29506bb7881cf25bab9a3e8786d3a050c85 = $this->env->getExtension("native_profiler");
        $__internal_419fa8044265e6ff6e451ffb6b2bd29506bb7881cf25bab9a3e8786d3a050c85->enter($__internal_419fa8044265e6ff6e451ffb6b2bd29506bb7881cf25bab9a3e8786d3a050c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_419fa8044265e6ff6e451ffb6b2bd29506bb7881cf25bab9a3e8786d3a050c85->leave($__internal_419fa8044265e6ff6e451ffb6b2bd29506bb7881cf25bab9a3e8786d3a050c85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33ee05290b4fc42d3ffe03ec106ae3331de622be4a5a844b7e1b7d07ba2786db = $this->env->getExtension("native_profiler");
        $__internal_33ee05290b4fc42d3ffe03ec106ae3331de622be4a5a844b7e1b7d07ba2786db->enter($__internal_33ee05290b4fc42d3ffe03ec106ae3331de622be4a5a844b7e1b7d07ba2786db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_33ee05290b4fc42d3ffe03ec106ae3331de622be4a5a844b7e1b7d07ba2786db->leave($__internal_33ee05290b4fc42d3ffe03ec106ae3331de622be4a5a844b7e1b7d07ba2786db_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_75efc77eb612e975201e8780ecc17b3e80604d9a393f78425d48fbe1c781e50f = $this->env->getExtension("native_profiler");
        $__internal_75efc77eb612e975201e8780ecc17b3e80604d9a393f78425d48fbe1c781e50f->enter($__internal_75efc77eb612e975201e8780ecc17b3e80604d9a393f78425d48fbe1c781e50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_75efc77eb612e975201e8780ecc17b3e80604d9a393f78425d48fbe1c781e50f->leave($__internal_75efc77eb612e975201e8780ecc17b3e80604d9a393f78425d48fbe1c781e50f_prof);

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
