<?php

/* base.html.twig */
class __TwigTemplate_caad4d0e1afe03fe799fdfa78e27bf4c34dac1b49775bf35973d750e82dcc6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_268d96f0c088c742a40095ee8c8439f3e8b9400f3e1892b27ee51c19b2ae6e53 = $this->env->getExtension("native_profiler");
        $__internal_268d96f0c088c742a40095ee8c8439f3e8b9400f3e1892b27ee51c19b2ae6e53->enter($__internal_268d96f0c088c742a40095ee8c8439f3e8b9400f3e1892b27ee51c19b2ae6e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_268d96f0c088c742a40095ee8c8439f3e8b9400f3e1892b27ee51c19b2ae6e53->leave($__internal_268d96f0c088c742a40095ee8c8439f3e8b9400f3e1892b27ee51c19b2ae6e53_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bce2534f719469e025f9ae65735f33ea8368b0f4e6a3395e5b587e419d001c1e = $this->env->getExtension("native_profiler");
        $__internal_bce2534f719469e025f9ae65735f33ea8368b0f4e6a3395e5b587e419d001c1e->enter($__internal_bce2534f719469e025f9ae65735f33ea8368b0f4e6a3395e5b587e419d001c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bce2534f719469e025f9ae65735f33ea8368b0f4e6a3395e5b587e419d001c1e->leave($__internal_bce2534f719469e025f9ae65735f33ea8368b0f4e6a3395e5b587e419d001c1e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab79e826c8b17f35f5e9c351a0366dc5d0c3af0e86ea929fcaaf6e1b4f48f95a = $this->env->getExtension("native_profiler");
        $__internal_ab79e826c8b17f35f5e9c351a0366dc5d0c3af0e86ea929fcaaf6e1b4f48f95a->enter($__internal_ab79e826c8b17f35f5e9c351a0366dc5d0c3af0e86ea929fcaaf6e1b4f48f95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ab79e826c8b17f35f5e9c351a0366dc5d0c3af0e86ea929fcaaf6e1b4f48f95a->leave($__internal_ab79e826c8b17f35f5e9c351a0366dc5d0c3af0e86ea929fcaaf6e1b4f48f95a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a0f39630f7dbec2b7050b9984effa4c3550209cc1ddff82df27eff20ab55715 = $this->env->getExtension("native_profiler");
        $__internal_8a0f39630f7dbec2b7050b9984effa4c3550209cc1ddff82df27eff20ab55715->enter($__internal_8a0f39630f7dbec2b7050b9984effa4c3550209cc1ddff82df27eff20ab55715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a0f39630f7dbec2b7050b9984effa4c3550209cc1ddff82df27eff20ab55715->leave($__internal_8a0f39630f7dbec2b7050b9984effa4c3550209cc1ddff82df27eff20ab55715_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9322de40fec8f78d14c21f23abce67113c167c3564fd7b9033acf4b9a860a12f = $this->env->getExtension("native_profiler");
        $__internal_9322de40fec8f78d14c21f23abce67113c167c3564fd7b9033acf4b9a860a12f->enter($__internal_9322de40fec8f78d14c21f23abce67113c167c3564fd7b9033acf4b9a860a12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9322de40fec8f78d14c21f23abce67113c167c3564fd7b9033acf4b9a860a12f->leave($__internal_9322de40fec8f78d14c21f23abce67113c167c3564fd7b9033acf4b9a860a12f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
