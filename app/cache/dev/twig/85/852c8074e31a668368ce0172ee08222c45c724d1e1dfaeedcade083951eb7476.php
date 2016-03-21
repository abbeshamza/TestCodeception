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
        $__internal_4f4faadb67b7b135224281ebf6ae7543f8d77cd287d92c2bc874489bb198f106 = $this->env->getExtension("native_profiler");
        $__internal_4f4faadb67b7b135224281ebf6ae7543f8d77cd287d92c2bc874489bb198f106->enter($__internal_4f4faadb67b7b135224281ebf6ae7543f8d77cd287d92c2bc874489bb198f106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4f4faadb67b7b135224281ebf6ae7543f8d77cd287d92c2bc874489bb198f106->leave($__internal_4f4faadb67b7b135224281ebf6ae7543f8d77cd287d92c2bc874489bb198f106_prof);

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
