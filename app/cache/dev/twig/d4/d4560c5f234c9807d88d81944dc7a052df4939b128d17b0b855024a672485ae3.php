<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_142f2aa16ab540a685e6e713408392b3abe0fb549ef896ade2aefbfdcf431e03 extends Twig_Template
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
        $__internal_6c25f29b07c758270143e4eabaad55f34336121b8c1eadf1c78212a5ba6f3533 = $this->env->getExtension("native_profiler");
        $__internal_6c25f29b07c758270143e4eabaad55f34336121b8c1eadf1c78212a5ba6f3533->enter($__internal_6c25f29b07c758270143e4eabaad55f34336121b8c1eadf1c78212a5ba6f3533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_6c25f29b07c758270143e4eabaad55f34336121b8c1eadf1c78212a5ba6f3533->leave($__internal_6c25f29b07c758270143e4eabaad55f34336121b8c1eadf1c78212a5ba6f3533_prof);

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
