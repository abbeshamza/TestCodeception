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
        $__internal_8d7cea4ac4276de63dc22dafd1c197c5365fe217fa97fd58a0a07d4c50dae497 = $this->env->getExtension("native_profiler");
        $__internal_8d7cea4ac4276de63dc22dafd1c197c5365fe217fa97fd58a0a07d4c50dae497->enter($__internal_8d7cea4ac4276de63dc22dafd1c197c5365fe217fa97fd58a0a07d4c50dae497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_8d7cea4ac4276de63dc22dafd1c197c5365fe217fa97fd58a0a07d4c50dae497->leave($__internal_8d7cea4ac4276de63dc22dafd1c197c5365fe217fa97fd58a0a07d4c50dae497_prof);

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
