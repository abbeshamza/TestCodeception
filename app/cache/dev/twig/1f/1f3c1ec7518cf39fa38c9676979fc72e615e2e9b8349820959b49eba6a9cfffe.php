<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b17dab64377f4ba43efd3ac00b11f188cdba0a81c6c47e828d8a400701809d34 extends Twig_Template
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
        $__internal_adc5381291fed6e5e2c680b85a0a081c64d22a0384d4b7edca25da23e9cdadeb = $this->env->getExtension("native_profiler");
        $__internal_adc5381291fed6e5e2c680b85a0a081c64d22a0384d4b7edca25da23e9cdadeb->enter($__internal_adc5381291fed6e5e2c680b85a0a081c64d22a0384d4b7edca25da23e9cdadeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_adc5381291fed6e5e2c680b85a0a081c64d22a0384d4b7edca25da23e9cdadeb->leave($__internal_adc5381291fed6e5e2c680b85a0a081c64d22a0384d4b7edca25da23e9cdadeb_prof);

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
