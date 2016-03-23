<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_c842ef0efc8ab0adfa092fd878a796d3e26530b8a51abbfcc6c2018b8bf73ca7 extends Twig_Template
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
        $__internal_27161646d6339a824f8a2133b6258f03a43773119b96ec68aa4fb90b89c584d1 = $this->env->getExtension("native_profiler");
        $__internal_27161646d6339a824f8a2133b6258f03a43773119b96ec68aa4fb90b89c584d1->enter($__internal_27161646d6339a824f8a2133b6258f03a43773119b96ec68aa4fb90b89c584d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_27161646d6339a824f8a2133b6258f03a43773119b96ec68aa4fb90b89c584d1->leave($__internal_27161646d6339a824f8a2133b6258f03a43773119b96ec68aa4fb90b89c584d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
