<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_94bd32eec78792f5acfc427f778e801de9faa81f894107685d7b2242a9b7a0ff extends Twig_Template
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
        $__internal_706cd3c2c29eac98b4a2ad0d427a53b85262fc8721d12ac0fb91c293c0568bae = $this->env->getExtension("native_profiler");
        $__internal_706cd3c2c29eac98b4a2ad0d427a53b85262fc8721d12ac0fb91c293c0568bae->enter($__internal_706cd3c2c29eac98b4a2ad0d427a53b85262fc8721d12ac0fb91c293c0568bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_706cd3c2c29eac98b4a2ad0d427a53b85262fc8721d12ac0fb91c293c0568bae->leave($__internal_706cd3c2c29eac98b4a2ad0d427a53b85262fc8721d12ac0fb91c293c0568bae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
