<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_e52c84bb74fa6fd28020603b143454879b99e1cb3243cd94a4dde83091080031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adb64d95bf06a0b39d11d18545643fb5e4fe1eb8d3ca2c0f4c841dcf539bbce3 = $this->env->getExtension("native_profiler");
        $__internal_adb64d95bf06a0b39d11d18545643fb5e4fe1eb8d3ca2c0f4c841dcf539bbce3->enter($__internal_adb64d95bf06a0b39d11d18545643fb5e4fe1eb8d3ca2c0f4c841dcf539bbce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_adb64d95bf06a0b39d11d18545643fb5e4fe1eb8d3ca2c0f4c841dcf539bbce3->leave($__internal_adb64d95bf06a0b39d11d18545643fb5e4fe1eb8d3ca2c0f4c841dcf539bbce3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
