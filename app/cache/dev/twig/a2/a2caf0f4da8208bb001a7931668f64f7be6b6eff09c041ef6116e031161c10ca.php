<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e9a5f0d7f2cb4233d7b2481f9a2b7279454141db8f99a484516acde4d7cdf1c9 extends Twig_Template
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
        $__internal_7da792f16b6f9a85971ca0d45f934924c57c34e9a187791a7769e6256474be31 = $this->env->getExtension("native_profiler");
        $__internal_7da792f16b6f9a85971ca0d45f934924c57c34e9a187791a7769e6256474be31->enter($__internal_7da792f16b6f9a85971ca0d45f934924c57c34e9a187791a7769e6256474be31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7da792f16b6f9a85971ca0d45f934924c57c34e9a187791a7769e6256474be31->leave($__internal_7da792f16b6f9a85971ca0d45f934924c57c34e9a187791a7769e6256474be31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
