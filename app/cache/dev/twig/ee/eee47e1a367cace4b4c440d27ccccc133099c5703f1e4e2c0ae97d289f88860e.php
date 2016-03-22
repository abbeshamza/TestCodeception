<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_487b24d11d6ddec5b3e88312e2e87c2fb20db79415ed2012fada91e80dca5d34 extends Twig_Template
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
        $__internal_ca56df99b87f1a0f7330178fdcfe886608a83efaced7b9c057bd8fd725162c62 = $this->env->getExtension("native_profiler");
        $__internal_ca56df99b87f1a0f7330178fdcfe886608a83efaced7b9c057bd8fd725162c62->enter($__internal_ca56df99b87f1a0f7330178fdcfe886608a83efaced7b9c057bd8fd725162c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ca56df99b87f1a0f7330178fdcfe886608a83efaced7b9c057bd8fd725162c62->leave($__internal_ca56df99b87f1a0f7330178fdcfe886608a83efaced7b9c057bd8fd725162c62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
