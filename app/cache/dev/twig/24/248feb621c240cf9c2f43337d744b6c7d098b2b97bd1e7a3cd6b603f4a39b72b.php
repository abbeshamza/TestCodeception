<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0c4484a1716c069df4a6b6af286ce354bcd8c47b294cc45af442e26da7b6794a extends Twig_Template
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
        $__internal_1b490fe03b31a9a5dd79872a3a86f02258f78348870ddcf347ce596153aed82b = $this->env->getExtension("native_profiler");
        $__internal_1b490fe03b31a9a5dd79872a3a86f02258f78348870ddcf347ce596153aed82b->enter($__internal_1b490fe03b31a9a5dd79872a3a86f02258f78348870ddcf347ce596153aed82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1b490fe03b31a9a5dd79872a3a86f02258f78348870ddcf347ce596153aed82b->leave($__internal_1b490fe03b31a9a5dd79872a3a86f02258f78348870ddcf347ce596153aed82b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
