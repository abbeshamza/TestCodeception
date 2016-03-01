<?php

/* base.html.twig */
class __TwigTemplate_75b9913587a6b39cd5a6b282bb182fa1276f4f7083370ec5589590c994f1f1d2 extends Twig_Template
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
        $__internal_54c2c0b2f6b37c65ef9bda3e138fb9cf1cc944cf75c5409203aa2d0e9cbb025d = $this->env->getExtension("native_profiler");
        $__internal_54c2c0b2f6b37c65ef9bda3e138fb9cf1cc944cf75c5409203aa2d0e9cbb025d->enter($__internal_54c2c0b2f6b37c65ef9bda3e138fb9cf1cc944cf75c5409203aa2d0e9cbb025d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_54c2c0b2f6b37c65ef9bda3e138fb9cf1cc944cf75c5409203aa2d0e9cbb025d->leave($__internal_54c2c0b2f6b37c65ef9bda3e138fb9cf1cc944cf75c5409203aa2d0e9cbb025d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aef441937f928a568bd3c0e11c24f2cd582e27fdfb66a3785b5c166138f8b9d6 = $this->env->getExtension("native_profiler");
        $__internal_aef441937f928a568bd3c0e11c24f2cd582e27fdfb66a3785b5c166138f8b9d6->enter($__internal_aef441937f928a568bd3c0e11c24f2cd582e27fdfb66a3785b5c166138f8b9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_aef441937f928a568bd3c0e11c24f2cd582e27fdfb66a3785b5c166138f8b9d6->leave($__internal_aef441937f928a568bd3c0e11c24f2cd582e27fdfb66a3785b5c166138f8b9d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89e585480fe9209062f236637d3b34028b5bf4462ba651c6931f21d6cee72566 = $this->env->getExtension("native_profiler");
        $__internal_89e585480fe9209062f236637d3b34028b5bf4462ba651c6931f21d6cee72566->enter($__internal_89e585480fe9209062f236637d3b34028b5bf4462ba651c6931f21d6cee72566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_89e585480fe9209062f236637d3b34028b5bf4462ba651c6931f21d6cee72566->leave($__internal_89e585480fe9209062f236637d3b34028b5bf4462ba651c6931f21d6cee72566_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_30e96505389d190d6860959df49a81939039f2d0e58b6c5d983f6d75c9f2a794 = $this->env->getExtension("native_profiler");
        $__internal_30e96505389d190d6860959df49a81939039f2d0e58b6c5d983f6d75c9f2a794->enter($__internal_30e96505389d190d6860959df49a81939039f2d0e58b6c5d983f6d75c9f2a794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30e96505389d190d6860959df49a81939039f2d0e58b6c5d983f6d75c9f2a794->leave($__internal_30e96505389d190d6860959df49a81939039f2d0e58b6c5d983f6d75c9f2a794_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ca6214f70627fc7e6bd032e10f41117c42005725efb6500ad7d1ec7c6e12743 = $this->env->getExtension("native_profiler");
        $__internal_9ca6214f70627fc7e6bd032e10f41117c42005725efb6500ad7d1ec7c6e12743->enter($__internal_9ca6214f70627fc7e6bd032e10f41117c42005725efb6500ad7d1ec7c6e12743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ca6214f70627fc7e6bd032e10f41117c42005725efb6500ad7d1ec7c6e12743->leave($__internal_9ca6214f70627fc7e6bd032e10f41117c42005725efb6500ad7d1ec7c6e12743_prof);

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
