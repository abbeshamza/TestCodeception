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
        $__internal_2317614f2894ef6b8f8098058ccc403dc9592ef4d75185c35fe42538476d2e2f = $this->env->getExtension("native_profiler");
        $__internal_2317614f2894ef6b8f8098058ccc403dc9592ef4d75185c35fe42538476d2e2f->enter($__internal_2317614f2894ef6b8f8098058ccc403dc9592ef4d75185c35fe42538476d2e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2317614f2894ef6b8f8098058ccc403dc9592ef4d75185c35fe42538476d2e2f->leave($__internal_2317614f2894ef6b8f8098058ccc403dc9592ef4d75185c35fe42538476d2e2f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79075681a90018cf37b1f62cf4c22c66c0f133ba9234410644fe307de603596b = $this->env->getExtension("native_profiler");
        $__internal_79075681a90018cf37b1f62cf4c22c66c0f133ba9234410644fe307de603596b->enter($__internal_79075681a90018cf37b1f62cf4c22c66c0f133ba9234410644fe307de603596b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_79075681a90018cf37b1f62cf4c22c66c0f133ba9234410644fe307de603596b->leave($__internal_79075681a90018cf37b1f62cf4c22c66c0f133ba9234410644fe307de603596b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f977e5265bc9c1119bf5f7f5d006e3745f8d3d403064548061a761fe429586c = $this->env->getExtension("native_profiler");
        $__internal_6f977e5265bc9c1119bf5f7f5d006e3745f8d3d403064548061a761fe429586c->enter($__internal_6f977e5265bc9c1119bf5f7f5d006e3745f8d3d403064548061a761fe429586c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f977e5265bc9c1119bf5f7f5d006e3745f8d3d403064548061a761fe429586c->leave($__internal_6f977e5265bc9c1119bf5f7f5d006e3745f8d3d403064548061a761fe429586c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e00903cb319a7f92e27267836a8fb105b3f6fa15b66bb31bcf1d953dc09c837 = $this->env->getExtension("native_profiler");
        $__internal_1e00903cb319a7f92e27267836a8fb105b3f6fa15b66bb31bcf1d953dc09c837->enter($__internal_1e00903cb319a7f92e27267836a8fb105b3f6fa15b66bb31bcf1d953dc09c837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e00903cb319a7f92e27267836a8fb105b3f6fa15b66bb31bcf1d953dc09c837->leave($__internal_1e00903cb319a7f92e27267836a8fb105b3f6fa15b66bb31bcf1d953dc09c837_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef552a00c34525ee05f5472498a5366a84f9462e9600eb1b379f797f3121c056 = $this->env->getExtension("native_profiler");
        $__internal_ef552a00c34525ee05f5472498a5366a84f9462e9600eb1b379f797f3121c056->enter($__internal_ef552a00c34525ee05f5472498a5366a84f9462e9600eb1b379f797f3121c056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef552a00c34525ee05f5472498a5366a84f9462e9600eb1b379f797f3121c056->leave($__internal_ef552a00c34525ee05f5472498a5366a84f9462e9600eb1b379f797f3121c056_prof);

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
