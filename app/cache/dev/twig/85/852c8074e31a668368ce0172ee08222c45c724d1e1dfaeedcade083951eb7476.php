<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d448aca1cdcb3b86fe6c2954dd62338c72f4f666c0862ea08912ea0d25d868fd extends Twig_Template
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
        $__internal_260d912e3522e5a544a5b997d9546b57b126d3becee6ac1d7aeea0943d329383 = $this->env->getExtension("native_profiler");
        $__internal_260d912e3522e5a544a5b997d9546b57b126d3becee6ac1d7aeea0943d329383->enter($__internal_260d912e3522e5a544a5b997d9546b57b126d3becee6ac1d7aeea0943d329383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_260d912e3522e5a544a5b997d9546b57b126d3becee6ac1d7aeea0943d329383->leave($__internal_260d912e3522e5a544a5b997d9546b57b126d3becee6ac1d7aeea0943d329383_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
