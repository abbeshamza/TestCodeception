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
        $__internal_c2247a46b65a1b8d825c49600f4b415f80ec0124a2cb5159cf757b647db24857 = $this->env->getExtension("native_profiler");
        $__internal_c2247a46b65a1b8d825c49600f4b415f80ec0124a2cb5159cf757b647db24857->enter($__internal_c2247a46b65a1b8d825c49600f4b415f80ec0124a2cb5159cf757b647db24857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c2247a46b65a1b8d825c49600f4b415f80ec0124a2cb5159cf757b647db24857->leave($__internal_c2247a46b65a1b8d825c49600f4b415f80ec0124a2cb5159cf757b647db24857_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1173b43ed175d51fc07f18f778562763e72cd827115915c3f9c308ccebde7d65 = $this->env->getExtension("native_profiler");
        $__internal_1173b43ed175d51fc07f18f778562763e72cd827115915c3f9c308ccebde7d65->enter($__internal_1173b43ed175d51fc07f18f778562763e72cd827115915c3f9c308ccebde7d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1173b43ed175d51fc07f18f778562763e72cd827115915c3f9c308ccebde7d65->leave($__internal_1173b43ed175d51fc07f18f778562763e72cd827115915c3f9c308ccebde7d65_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67805541cfd359bd3ba142a2c9774d33978cb219088233415ca869101d821c78 = $this->env->getExtension("native_profiler");
        $__internal_67805541cfd359bd3ba142a2c9774d33978cb219088233415ca869101d821c78->enter($__internal_67805541cfd359bd3ba142a2c9774d33978cb219088233415ca869101d821c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_67805541cfd359bd3ba142a2c9774d33978cb219088233415ca869101d821c78->leave($__internal_67805541cfd359bd3ba142a2c9774d33978cb219088233415ca869101d821c78_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_798294b9ec8fb564edbef168006ba97fd810b7e01481b2879980e8162e00d5d8 = $this->env->getExtension("native_profiler");
        $__internal_798294b9ec8fb564edbef168006ba97fd810b7e01481b2879980e8162e00d5d8->enter($__internal_798294b9ec8fb564edbef168006ba97fd810b7e01481b2879980e8162e00d5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_798294b9ec8fb564edbef168006ba97fd810b7e01481b2879980e8162e00d5d8->leave($__internal_798294b9ec8fb564edbef168006ba97fd810b7e01481b2879980e8162e00d5d8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f787d40bb1517d6173b78d77ca10a7ae891dc060582af868bc48fa2e1737aaf4 = $this->env->getExtension("native_profiler");
        $__internal_f787d40bb1517d6173b78d77ca10a7ae891dc060582af868bc48fa2e1737aaf4->enter($__internal_f787d40bb1517d6173b78d77ca10a7ae891dc060582af868bc48fa2e1737aaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f787d40bb1517d6173b78d77ca10a7ae891dc060582af868bc48fa2e1737aaf4->leave($__internal_f787d40bb1517d6173b78d77ca10a7ae891dc060582af868bc48fa2e1737aaf4_prof);

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
