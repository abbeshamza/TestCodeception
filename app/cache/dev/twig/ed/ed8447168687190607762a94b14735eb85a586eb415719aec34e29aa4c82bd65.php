<?php

/* TestBundle:Default:index.html.twig */
class __TwigTemplate_9b16620bf2aef2f310fb788a74abc0b09a447e6eb57e2c4e50a79729ca7e8fe3 extends Twig_Template
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
        $__internal_0ae56fc67a8319747dd6ee1d7ada3fc0b493938e912f5790f6a2179c5ec40d8d = $this->env->getExtension("native_profiler");
        $__internal_0ae56fc67a8319747dd6ee1d7ada3fc0b493938e912f5790f6a2179c5ec40d8d->enter($__internal_0ae56fc67a8319747dd6ee1d7ada3fc0b493938e912f5790f6a2179c5ec40d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TestBundle:Default:index.html.twig"));

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
        
        $__internal_0ae56fc67a8319747dd6ee1d7ada3fc0b493938e912f5790f6a2179c5ec40d8d->leave($__internal_0ae56fc67a8319747dd6ee1d7ada3fc0b493938e912f5790f6a2179c5ec40d8d_prof);

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
