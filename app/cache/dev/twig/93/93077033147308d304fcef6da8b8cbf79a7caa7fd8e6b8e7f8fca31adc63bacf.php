<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0325499e1c0c0a4934def3d6fc41247d4c1a920337f150bbdc91f6b1a7b32b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_957c54fb987c9da3f181a9ba098d7b31e577a01f5a7ced65efa832d401c951ce = $this->env->getExtension("native_profiler");
        $__internal_957c54fb987c9da3f181a9ba098d7b31e577a01f5a7ced65efa832d401c951ce->enter($__internal_957c54fb987c9da3f181a9ba098d7b31e577a01f5a7ced65efa832d401c951ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_957c54fb987c9da3f181a9ba098d7b31e577a01f5a7ced65efa832d401c951ce->leave($__internal_957c54fb987c9da3f181a9ba098d7b31e577a01f5a7ced65efa832d401c951ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c57ecb6232bcdaa34019d8671103172c2d01190b7d42d9383bac50d2d6542c7b = $this->env->getExtension("native_profiler");
        $__internal_c57ecb6232bcdaa34019d8671103172c2d01190b7d42d9383bac50d2d6542c7b->enter($__internal_c57ecb6232bcdaa34019d8671103172c2d01190b7d42d9383bac50d2d6542c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c57ecb6232bcdaa34019d8671103172c2d01190b7d42d9383bac50d2d6542c7b->leave($__internal_c57ecb6232bcdaa34019d8671103172c2d01190b7d42d9383bac50d2d6542c7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
