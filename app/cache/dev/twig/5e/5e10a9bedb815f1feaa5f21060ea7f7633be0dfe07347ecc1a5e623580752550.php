<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_b8f701bc023d9b8ed6d078e69379ce66fdaa9945e257559c622aaa0450611b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7a79cbbd744a8597048f3d2fe3c806c7af02c2355c968f3dcbe0afe380acaac = $this->env->getExtension("native_profiler");
        $__internal_f7a79cbbd744a8597048f3d2fe3c806c7af02c2355c968f3dcbe0afe380acaac->enter($__internal_f7a79cbbd744a8597048f3d2fe3c806c7af02c2355c968f3dcbe0afe380acaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7a79cbbd744a8597048f3d2fe3c806c7af02c2355c968f3dcbe0afe380acaac->leave($__internal_f7a79cbbd744a8597048f3d2fe3c806c7af02c2355c968f3dcbe0afe380acaac_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_83164d4dafad5c45f59f6663ad291a2241ec1c5be1a925c1c73401f1c51b3628 = $this->env->getExtension("native_profiler");
        $__internal_83164d4dafad5c45f59f6663ad291a2241ec1c5be1a925c1c73401f1c51b3628->enter($__internal_83164d4dafad5c45f59f6663ad291a2241ec1c5be1a925c1c73401f1c51b3628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_83164d4dafad5c45f59f6663ad291a2241ec1c5be1a925c1c73401f1c51b3628->leave($__internal_83164d4dafad5c45f59f6663ad291a2241ec1c5be1a925c1c73401f1c51b3628_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "NelmioApiDocBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <li class="resource">*/
/*         <ul class="endpoints">*/
/*             <li class="endpoint">*/
/*                 <ul class="operations">*/
/*                     {% include 'NelmioApiDocBundle::method.html.twig' %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* {% endblock content %}*/
/* */
