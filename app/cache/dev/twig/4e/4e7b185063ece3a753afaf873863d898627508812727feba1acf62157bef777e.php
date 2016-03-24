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
        $__internal_bc1763457ae190a551af6d57b375ca947b7b3d98e5ac4eb193fe14d2aa04f5e3 = $this->env->getExtension("native_profiler");
        $__internal_bc1763457ae190a551af6d57b375ca947b7b3d98e5ac4eb193fe14d2aa04f5e3->enter($__internal_bc1763457ae190a551af6d57b375ca947b7b3d98e5ac4eb193fe14d2aa04f5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bc1763457ae190a551af6d57b375ca947b7b3d98e5ac4eb193fe14d2aa04f5e3->leave($__internal_bc1763457ae190a551af6d57b375ca947b7b3d98e5ac4eb193fe14d2aa04f5e3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a671f6415bb997575f482de77312f3b7a18163a91e4794b816fe7ae794198747 = $this->env->getExtension("native_profiler");
        $__internal_a671f6415bb997575f482de77312f3b7a18163a91e4794b816fe7ae794198747->enter($__internal_a671f6415bb997575f482de77312f3b7a18163a91e4794b816fe7ae794198747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a671f6415bb997575f482de77312f3b7a18163a91e4794b816fe7ae794198747->leave($__internal_a671f6415bb997575f482de77312f3b7a18163a91e4794b816fe7ae794198747_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29e056787dfbded269ed4952ee0b15a9363feb4563632ba5a64107e5a7eacbaf = $this->env->getExtension("native_profiler");
        $__internal_29e056787dfbded269ed4952ee0b15a9363feb4563632ba5a64107e5a7eacbaf->enter($__internal_29e056787dfbded269ed4952ee0b15a9363feb4563632ba5a64107e5a7eacbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_29e056787dfbded269ed4952ee0b15a9363feb4563632ba5a64107e5a7eacbaf->leave($__internal_29e056787dfbded269ed4952ee0b15a9363feb4563632ba5a64107e5a7eacbaf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7d0fc33aff834e4e45793f5d134153db5ce38a144e6f209f76bd3e293e29ffd = $this->env->getExtension("native_profiler");
        $__internal_e7d0fc33aff834e4e45793f5d134153db5ce38a144e6f209f76bd3e293e29ffd->enter($__internal_e7d0fc33aff834e4e45793f5d134153db5ce38a144e6f209f76bd3e293e29ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e7d0fc33aff834e4e45793f5d134153db5ce38a144e6f209f76bd3e293e29ffd->leave($__internal_e7d0fc33aff834e4e45793f5d134153db5ce38a144e6f209f76bd3e293e29ffd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2026fa6f702fa546507f9931e0b0fc09697b481f96722c617e2f8a44b71584e = $this->env->getExtension("native_profiler");
        $__internal_a2026fa6f702fa546507f9931e0b0fc09697b481f96722c617e2f8a44b71584e->enter($__internal_a2026fa6f702fa546507f9931e0b0fc09697b481f96722c617e2f8a44b71584e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a2026fa6f702fa546507f9931e0b0fc09697b481f96722c617e2f8a44b71584e->leave($__internal_a2026fa6f702fa546507f9931e0b0fc09697b481f96722c617e2f8a44b71584e_prof);

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
