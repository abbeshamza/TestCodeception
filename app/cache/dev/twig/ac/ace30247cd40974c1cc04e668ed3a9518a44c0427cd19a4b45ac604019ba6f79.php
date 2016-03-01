<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_13001c55b9a98c2e77ab3cdac96665d9f050277188143ec181f8b689ed3815c7 extends Twig_Template
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
        $__internal_4f02c84cc0aa0342a782013282bd4968f87291530e2dd7751802079fe89e3b05 = $this->env->getExtension("native_profiler");
        $__internal_4f02c84cc0aa0342a782013282bd4968f87291530e2dd7751802079fe89e3b05->enter($__internal_4f02c84cc0aa0342a782013282bd4968f87291530e2dd7751802079fe89e3b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4f02c84cc0aa0342a782013282bd4968f87291530e2dd7751802079fe89e3b05->leave($__internal_4f02c84cc0aa0342a782013282bd4968f87291530e2dd7751802079fe89e3b05_prof);

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
