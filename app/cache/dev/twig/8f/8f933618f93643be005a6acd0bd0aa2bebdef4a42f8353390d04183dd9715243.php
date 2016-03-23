<?php

/* TestBundle:Default:index.html.twig */
class __TwigTemplate_a8ad1832d6caa31c3070c0ea491ad98f9b8762c1efe4ddcb61c792fe3f934808 extends Twig_Template
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
        $__internal_da965051c369cfb5e7905cf1edbb07f8b6d4a0748b1898cf1d6dee74d1895931 = $this->env->getExtension("native_profiler");
        $__internal_da965051c369cfb5e7905cf1edbb07f8b6d4a0748b1898cf1d6dee74d1895931->enter($__internal_da965051c369cfb5e7905cf1edbb07f8b6d4a0748b1898cf1d6dee74d1895931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!

<form method=\"post\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("testform");
        echo "\">
<label> Username</label>
<input type=\"texte\" name=\"username\"> </input>

<label> Password</label>
<input type=\"password\" name=\"pwd\"> </input>
<button type=\"submit\" name=\"submit\" >submit </button>
</form>
";
        
        $__internal_da965051c369cfb5e7905cf1edbb07f8b6d4a0748b1898cf1d6dee74d1895931->leave($__internal_da965051c369cfb5e7905cf1edbb07f8b6d4a0748b1898cf1d6dee74d1895931_prof);

    }

    public function getTemplateName()
    {
        return "TestBundle:Default:index.html.twig";
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
/* Hello World!*/
/* */
/* <form method="post" action="{{ path('testform') }}">*/
/* <label> Username</label>*/
/* <input type="texte" name="username"> </input>*/
/* */
/* <label> Password</label>*/
/* <input type="password" name="pwd"> </input>*/
/* <button type="submit" name="submit" >submit </button>*/
/* </form>*/
/* */
