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
        $__internal_b46f5dfab03fac4cb8ea989bebffcab766b336730ecdaf71fe132bb19ad9d758 = $this->env->getExtension("native_profiler");
        $__internal_b46f5dfab03fac4cb8ea989bebffcab766b336730ecdaf71fe132bb19ad9d758->enter($__internal_b46f5dfab03fac4cb8ea989bebffcab766b336730ecdaf71fe132bb19ad9d758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b46f5dfab03fac4cb8ea989bebffcab766b336730ecdaf71fe132bb19ad9d758->leave($__internal_b46f5dfab03fac4cb8ea989bebffcab766b336730ecdaf71fe132bb19ad9d758_prof);

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
