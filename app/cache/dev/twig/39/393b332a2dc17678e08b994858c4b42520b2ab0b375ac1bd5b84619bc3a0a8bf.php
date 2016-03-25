<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_7b6ae008cce393ac8103a286371a2256f1b77a6880c9e96f2b3bd20d2e55b0bd extends Twig_Template
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
        $__internal_439b24f0e85fdbf83f9df6f6e8b5267e422ac32bf8a4038ad353e738da562af9 = $this->env->getExtension("native_profiler");
        $__internal_439b24f0e85fdbf83f9df6f6e8b5267e422ac32bf8a4038ad353e738da562af9->enter($__internal_439b24f0e85fdbf83f9df6f6e8b5267e422ac32bf8a4038ad353e738da562af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_439b24f0e85fdbf83f9df6f6e8b5267e422ac32bf8a4038ad353e738da562af9->leave($__internal_439b24f0e85fdbf83f9df6f6e8b5267e422ac32bf8a4038ad353e738da562af9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
