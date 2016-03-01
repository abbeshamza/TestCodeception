<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_587deda7672558ea093ab7a858432a37ae3736750579e7108854665eeb0540a3 extends Twig_Template
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
        $__internal_57f12428b3950d31eed244e757b169b89d00392814950d92c799025539e68203 = $this->env->getExtension("native_profiler");
        $__internal_57f12428b3950d31eed244e757b169b89d00392814950d92c799025539e68203->enter($__internal_57f12428b3950d31eed244e757b169b89d00392814950d92c799025539e68203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_57f12428b3950d31eed244e757b169b89d00392814950d92c799025539e68203->leave($__internal_57f12428b3950d31eed244e757b169b89d00392814950d92c799025539e68203_prof);

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
