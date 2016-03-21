<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b01e08973fad672b60157ad1e3c1140d9d7e3ba3c0f532b98687e77ec7354498 extends Twig_Template
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
        $__internal_06cf927e5313152c6c1966ce611f7262e1b0a50da14beaafa1d7387ad7858699 = $this->env->getExtension("native_profiler");
        $__internal_06cf927e5313152c6c1966ce611f7262e1b0a50da14beaafa1d7387ad7858699->enter($__internal_06cf927e5313152c6c1966ce611f7262e1b0a50da14beaafa1d7387ad7858699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_06cf927e5313152c6c1966ce611f7262e1b0a50da14beaafa1d7387ad7858699->leave($__internal_06cf927e5313152c6c1966ce611f7262e1b0a50da14beaafa1d7387ad7858699_prof);

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
