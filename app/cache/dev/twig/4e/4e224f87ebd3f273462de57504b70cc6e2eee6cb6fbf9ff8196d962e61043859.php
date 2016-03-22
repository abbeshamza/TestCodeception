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
        $__internal_4c0f3639710e70e8e8e6516f3913c84fb531ee9c573447d5f351c459e123e1c3 = $this->env->getExtension("native_profiler");
        $__internal_4c0f3639710e70e8e8e6516f3913c84fb531ee9c573447d5f351c459e123e1c3->enter($__internal_4c0f3639710e70e8e8e6516f3913c84fb531ee9c573447d5f351c459e123e1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4c0f3639710e70e8e8e6516f3913c84fb531ee9c573447d5f351c459e123e1c3->leave($__internal_4c0f3639710e70e8e8e6516f3913c84fb531ee9c573447d5f351c459e123e1c3_prof);

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
