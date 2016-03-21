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
        $__internal_98019004b44a9e4a30279bfd92430f0e4add156fc1f7f90e27e3a99c240e59de = $this->env->getExtension("native_profiler");
        $__internal_98019004b44a9e4a30279bfd92430f0e4add156fc1f7f90e27e3a99c240e59de->enter($__internal_98019004b44a9e4a30279bfd92430f0e4add156fc1f7f90e27e3a99c240e59de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_98019004b44a9e4a30279bfd92430f0e4add156fc1f7f90e27e3a99c240e59de->leave($__internal_98019004b44a9e4a30279bfd92430f0e4add156fc1f7f90e27e3a99c240e59de_prof);

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
