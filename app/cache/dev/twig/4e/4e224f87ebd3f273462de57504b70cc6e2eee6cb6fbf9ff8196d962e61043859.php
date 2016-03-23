<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5586d1cc5cd823d6c8fb66dcd24f64c1d809193e42516f64c242feca558032fa extends Twig_Template
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
        $__internal_d489d5aa4d101f2dd63bbcb4feb21afbd627ef633fb82a2abee1391e27b1a694 = $this->env->getExtension("native_profiler");
        $__internal_d489d5aa4d101f2dd63bbcb4feb21afbd627ef633fb82a2abee1391e27b1a694->enter($__internal_d489d5aa4d101f2dd63bbcb4feb21afbd627ef633fb82a2abee1391e27b1a694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d489d5aa4d101f2dd63bbcb4feb21afbd627ef633fb82a2abee1391e27b1a694->leave($__internal_d489d5aa4d101f2dd63bbcb4feb21afbd627ef633fb82a2abee1391e27b1a694_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
