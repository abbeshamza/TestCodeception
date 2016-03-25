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
        $__internal_43bedc1e77af277d25527e79a9efa21e9222b67bed438d7b0edaa0ed4e3cdaef = $this->env->getExtension("native_profiler");
        $__internal_43bedc1e77af277d25527e79a9efa21e9222b67bed438d7b0edaa0ed4e3cdaef->enter($__internal_43bedc1e77af277d25527e79a9efa21e9222b67bed438d7b0edaa0ed4e3cdaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_43bedc1e77af277d25527e79a9efa21e9222b67bed438d7b0edaa0ed4e3cdaef->leave($__internal_43bedc1e77af277d25527e79a9efa21e9222b67bed438d7b0edaa0ed4e3cdaef_prof);

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
