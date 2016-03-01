<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d22bafcf98eeaf14e25754b16ccefd714e37e5ee0953a0619427da264b1e1383 extends Twig_Template
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
        $__internal_6d603bab4ef1ddd08044da824d93e88383c9e7b9d4a085d40e37b0e4d62299ee = $this->env->getExtension("native_profiler");
        $__internal_6d603bab4ef1ddd08044da824d93e88383c9e7b9d4a085d40e37b0e4d62299ee->enter($__internal_6d603bab4ef1ddd08044da824d93e88383c9e7b9d4a085d40e37b0e4d62299ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6d603bab4ef1ddd08044da824d93e88383c9e7b9d4a085d40e37b0e4d62299ee->leave($__internal_6d603bab4ef1ddd08044da824d93e88383c9e7b9d4a085d40e37b0e4d62299ee_prof);

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
