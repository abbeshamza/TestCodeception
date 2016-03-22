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
        $__internal_b01958eb6a31d4344fcf1e335aea1386f083edbc6a54e18a411b92093a973ccc = $this->env->getExtension("native_profiler");
        $__internal_b01958eb6a31d4344fcf1e335aea1386f083edbc6a54e18a411b92093a973ccc->enter($__internal_b01958eb6a31d4344fcf1e335aea1386f083edbc6a54e18a411b92093a973ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:index.html.twig"));

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
        
        $__internal_b01958eb6a31d4344fcf1e335aea1386f083edbc6a54e18a411b92093a973ccc->leave($__internal_b01958eb6a31d4344fcf1e335aea1386f083edbc6a54e18a411b92093a973ccc_prof);

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
