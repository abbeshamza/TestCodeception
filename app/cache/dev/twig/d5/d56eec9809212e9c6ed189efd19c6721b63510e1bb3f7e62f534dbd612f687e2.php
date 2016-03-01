<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_46eaf57f02e01bd36aa00a2e79f7991d1edbb267147ad563d79cb8f301124275 extends Twig_Template
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
        $__internal_187d9465eb12ea00ea30ca26743c79bdb0474e9f304e89e9c407cccc1a2e2d12 = $this->env->getExtension("native_profiler");
        $__internal_187d9465eb12ea00ea30ca26743c79bdb0474e9f304e89e9c407cccc1a2e2d12->enter($__internal_187d9465eb12ea00ea30ca26743c79bdb0474e9f304e89e9c407cccc1a2e2d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_187d9465eb12ea00ea30ca26743c79bdb0474e9f304e89e9c407cccc1a2e2d12->leave($__internal_187d9465eb12ea00ea30ca26743c79bdb0474e9f304e89e9c407cccc1a2e2d12_prof);

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
