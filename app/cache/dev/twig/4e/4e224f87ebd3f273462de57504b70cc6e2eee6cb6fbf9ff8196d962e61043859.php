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
        $__internal_f3b3dd8c6f9787a0781b8e1315af531153d8d55c610a8795bbffe85ecace06fb = $this->env->getExtension("native_profiler");
        $__internal_f3b3dd8c6f9787a0781b8e1315af531153d8d55c610a8795bbffe85ecace06fb->enter($__internal_f3b3dd8c6f9787a0781b8e1315af531153d8d55c610a8795bbffe85ecace06fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f3b3dd8c6f9787a0781b8e1315af531153d8d55c610a8795bbffe85ecace06fb->leave($__internal_f3b3dd8c6f9787a0781b8e1315af531153d8d55c610a8795bbffe85ecace06fb_prof);

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
