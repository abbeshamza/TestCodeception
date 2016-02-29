<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3cc710aa78ea11b64d172cc2a3fe5935cbc34b2ba1fe7ba96b4b79f8cd1808e7 extends Twig_Template
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
        $__internal_fb5e48a33b6dce3ba4248cee1846e67adf56366410074d7c9cc01c6b5b3f8ada = $this->env->getExtension("native_profiler");
        $__internal_fb5e48a33b6dce3ba4248cee1846e67adf56366410074d7c9cc01c6b5b3f8ada->enter($__internal_fb5e48a33b6dce3ba4248cee1846e67adf56366410074d7c9cc01c6b5b3f8ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_fb5e48a33b6dce3ba4248cee1846e67adf56366410074d7c9cc01c6b5b3f8ada->leave($__internal_fb5e48a33b6dce3ba4248cee1846e67adf56366410074d7c9cc01c6b5b3f8ada_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
