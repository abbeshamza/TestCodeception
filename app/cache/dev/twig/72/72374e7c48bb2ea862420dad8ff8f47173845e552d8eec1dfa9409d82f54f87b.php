<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3b709289f596fb0643418088dd6f6e5095ac95c804ac683452311b0613b32c5e extends Twig_Template
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
        $__internal_916b2ba387ff6c56ff057ac4869f8fce26908c7fa1cc58506033d2cc65fa66e7 = $this->env->getExtension("native_profiler");
        $__internal_916b2ba387ff6c56ff057ac4869f8fce26908c7fa1cc58506033d2cc65fa66e7->enter($__internal_916b2ba387ff6c56ff057ac4869f8fce26908c7fa1cc58506033d2cc65fa66e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_916b2ba387ff6c56ff057ac4869f8fce26908c7fa1cc58506033d2cc65fa66e7->leave($__internal_916b2ba387ff6c56ff057ac4869f8fce26908c7fa1cc58506033d2cc65fa66e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
