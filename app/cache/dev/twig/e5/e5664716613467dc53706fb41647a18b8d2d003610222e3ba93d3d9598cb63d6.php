<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_314e4fd2170bdffd7fc9a96d110142f17526c95126fe9686d237ba9d422af772 extends Twig_Template
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
        $__internal_e728380648aa2edf028e427c60f80604a2e7eed6945341bd213f1c373d549901 = $this->env->getExtension("native_profiler");
        $__internal_e728380648aa2edf028e427c60f80604a2e7eed6945341bd213f1c373d549901->enter($__internal_e728380648aa2edf028e427c60f80604a2e7eed6945341bd213f1c373d549901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e728380648aa2edf028e427c60f80604a2e7eed6945341bd213f1c373d549901->leave($__internal_e728380648aa2edf028e427c60f80604a2e7eed6945341bd213f1c373d549901_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
