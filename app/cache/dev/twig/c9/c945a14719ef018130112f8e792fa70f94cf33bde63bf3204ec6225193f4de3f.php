<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6f3d59d3abd353957298d009dc0c09922e8f9794724a26c84967489d157feec1 extends Twig_Template
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
        $__internal_e71068924c4a5f47d34dd6c11bae4d0484780809e13d9d4fdc7f89b0ea439b7e = $this->env->getExtension("native_profiler");
        $__internal_e71068924c4a5f47d34dd6c11bae4d0484780809e13d9d4fdc7f89b0ea439b7e->enter($__internal_e71068924c4a5f47d34dd6c11bae4d0484780809e13d9d4fdc7f89b0ea439b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e71068924c4a5f47d34dd6c11bae4d0484780809e13d9d4fdc7f89b0ea439b7e->leave($__internal_e71068924c4a5f47d34dd6c11bae4d0484780809e13d9d4fdc7f89b0ea439b7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
