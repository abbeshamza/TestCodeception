<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8968c7bf9a4e6c3c345a1ce06514b42bea99ff3baa4013cbfb6cf3382aeafa71 extends Twig_Template
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
        $__internal_4d4d89332a3fc9a500273fbd6e177cd765cc7055f2eb4f2e259ed3c9ef86921b = $this->env->getExtension("native_profiler");
        $__internal_4d4d89332a3fc9a500273fbd6e177cd765cc7055f2eb4f2e259ed3c9ef86921b->enter($__internal_4d4d89332a3fc9a500273fbd6e177cd765cc7055f2eb4f2e259ed3c9ef86921b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4d4d89332a3fc9a500273fbd6e177cd765cc7055f2eb4f2e259ed3c9ef86921b->leave($__internal_4d4d89332a3fc9a500273fbd6e177cd765cc7055f2eb4f2e259ed3c9ef86921b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
