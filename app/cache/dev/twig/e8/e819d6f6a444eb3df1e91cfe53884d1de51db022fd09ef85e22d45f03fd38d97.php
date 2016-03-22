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
        $__internal_fe1259ff74b9f32ccd3368a74e99d0505e698625c7cbc248438b149178dde739 = $this->env->getExtension("native_profiler");
        $__internal_fe1259ff74b9f32ccd3368a74e99d0505e698625c7cbc248438b149178dde739->enter($__internal_fe1259ff74b9f32ccd3368a74e99d0505e698625c7cbc248438b149178dde739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_fe1259ff74b9f32ccd3368a74e99d0505e698625c7cbc248438b149178dde739->leave($__internal_fe1259ff74b9f32ccd3368a74e99d0505e698625c7cbc248438b149178dde739_prof);

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
