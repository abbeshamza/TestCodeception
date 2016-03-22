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
        $__internal_623fe5086b0e36680112eff2db2b51eafea64c2561b94b71b4bb41ea23ef8379 = $this->env->getExtension("native_profiler");
        $__internal_623fe5086b0e36680112eff2db2b51eafea64c2561b94b71b4bb41ea23ef8379->enter($__internal_623fe5086b0e36680112eff2db2b51eafea64c2561b94b71b4bb41ea23ef8379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_623fe5086b0e36680112eff2db2b51eafea64c2561b94b71b4bb41ea23ef8379->leave($__internal_623fe5086b0e36680112eff2db2b51eafea64c2561b94b71b4bb41ea23ef8379_prof);

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
