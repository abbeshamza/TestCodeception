<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_cce75dab513031b144535e5d56a7ff9814fd5cf6b12764f245680043c28f24f8 extends Twig_Template
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
        $__internal_f69175c5a1b386527b0d6803b935f81133a9f4e1073514320354926d45d89d86 = $this->env->getExtension("native_profiler");
        $__internal_f69175c5a1b386527b0d6803b935f81133a9f4e1073514320354926d45d89d86->enter($__internal_f69175c5a1b386527b0d6803b935f81133a9f4e1073514320354926d45d89d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f69175c5a1b386527b0d6803b935f81133a9f4e1073514320354926d45d89d86->leave($__internal_f69175c5a1b386527b0d6803b935f81133a9f4e1073514320354926d45d89d86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
