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
        $__internal_003f6e86538f85da01ebd2323177b725d3a2f1a7bfc868e86420aea83408e605 = $this->env->getExtension("native_profiler");
        $__internal_003f6e86538f85da01ebd2323177b725d3a2f1a7bfc868e86420aea83408e605->enter($__internal_003f6e86538f85da01ebd2323177b725d3a2f1a7bfc868e86420aea83408e605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_003f6e86538f85da01ebd2323177b725d3a2f1a7bfc868e86420aea83408e605->leave($__internal_003f6e86538f85da01ebd2323177b725d3a2f1a7bfc868e86420aea83408e605_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5382f0307750dbfb88164e1c42fe49614c826232486981a08ca1a7d6911113d7 = $this->env->getExtension("native_profiler");
        $__internal_5382f0307750dbfb88164e1c42fe49614c826232486981a08ca1a7d6911113d7->enter($__internal_5382f0307750dbfb88164e1c42fe49614c826232486981a08ca1a7d6911113d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5382f0307750dbfb88164e1c42fe49614c826232486981a08ca1a7d6911113d7->leave($__internal_5382f0307750dbfb88164e1c42fe49614c826232486981a08ca1a7d6911113d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_787b8bf3a900d65ee28396a58fdf576bf199f9544b2a86eb70752a6a984f6d1b = $this->env->getExtension("native_profiler");
        $__internal_787b8bf3a900d65ee28396a58fdf576bf199f9544b2a86eb70752a6a984f6d1b->enter($__internal_787b8bf3a900d65ee28396a58fdf576bf199f9544b2a86eb70752a6a984f6d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_787b8bf3a900d65ee28396a58fdf576bf199f9544b2a86eb70752a6a984f6d1b->leave($__internal_787b8bf3a900d65ee28396a58fdf576bf199f9544b2a86eb70752a6a984f6d1b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_32e60a0cb9e2f6d1ce19cba6d8f41a3d2c45bf200598032d391c23eed259aa73 = $this->env->getExtension("native_profiler");
        $__internal_32e60a0cb9e2f6d1ce19cba6d8f41a3d2c45bf200598032d391c23eed259aa73->enter($__internal_32e60a0cb9e2f6d1ce19cba6d8f41a3d2c45bf200598032d391c23eed259aa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_32e60a0cb9e2f6d1ce19cba6d8f41a3d2c45bf200598032d391c23eed259aa73->leave($__internal_32e60a0cb9e2f6d1ce19cba6d8f41a3d2c45bf200598032d391c23eed259aa73_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_751e96a1574483a098ab94c957b2d669e22b80cd8e41459944e386825b2e40c5 = $this->env->getExtension("native_profiler");
        $__internal_751e96a1574483a098ab94c957b2d669e22b80cd8e41459944e386825b2e40c5->enter($__internal_751e96a1574483a098ab94c957b2d669e22b80cd8e41459944e386825b2e40c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_751e96a1574483a098ab94c957b2d669e22b80cd8e41459944e386825b2e40c5->leave($__internal_751e96a1574483a098ab94c957b2d669e22b80cd8e41459944e386825b2e40c5_prof);

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
