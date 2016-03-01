<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_25f49cf3f45571ab0b6fd109cc60d211d3ae834648cd00989a5dea763cf9f2b1 extends Twig_Template
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
        $__internal_5d6621eb803edc6f7ab8d6a35f8dce954dd187f735e63f92f4516e9917b9913a = $this->env->getExtension("native_profiler");
        $__internal_5d6621eb803edc6f7ab8d6a35f8dce954dd187f735e63f92f4516e9917b9913a->enter($__internal_5d6621eb803edc6f7ab8d6a35f8dce954dd187f735e63f92f4516e9917b9913a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5d6621eb803edc6f7ab8d6a35f8dce954dd187f735e63f92f4516e9917b9913a->leave($__internal_5d6621eb803edc6f7ab8d6a35f8dce954dd187f735e63f92f4516e9917b9913a_prof);

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
