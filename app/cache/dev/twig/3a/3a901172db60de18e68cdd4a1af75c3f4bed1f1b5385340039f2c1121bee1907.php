<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_4286dcc635fc590b5c3de47d02f2538ae17c9a3c3dd43c2c25a9e0a17ecda9ef extends Twig_Template
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
        $__internal_40d21ee44c1ecb3f03286dd1f30fbc08f5ce93b08716596750d8e2ba195b26bf = $this->env->getExtension("native_profiler");
        $__internal_40d21ee44c1ecb3f03286dd1f30fbc08f5ce93b08716596750d8e2ba195b26bf->enter($__internal_40d21ee44c1ecb3f03286dd1f30fbc08f5ce93b08716596750d8e2ba195b26bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_40d21ee44c1ecb3f03286dd1f30fbc08f5ce93b08716596750d8e2ba195b26bf->leave($__internal_40d21ee44c1ecb3f03286dd1f30fbc08f5ce93b08716596750d8e2ba195b26bf_prof);

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
