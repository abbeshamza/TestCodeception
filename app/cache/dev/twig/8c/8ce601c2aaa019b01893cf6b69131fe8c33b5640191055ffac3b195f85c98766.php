<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_81277054530e2c54f36e3707a842ae7320dd772a66bd2f58661005ed94a6df5f extends Twig_Template
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
        $__internal_abf0d4bc7b7b1350ea132d78b7420f689b84f859d218d9d6f3d9414ae515351c = $this->env->getExtension("native_profiler");
        $__internal_abf0d4bc7b7b1350ea132d78b7420f689b84f859d218d9d6f3d9414ae515351c->enter($__internal_abf0d4bc7b7b1350ea132d78b7420f689b84f859d218d9d6f3d9414ae515351c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_abf0d4bc7b7b1350ea132d78b7420f689b84f859d218d9d6f3d9414ae515351c->leave($__internal_abf0d4bc7b7b1350ea132d78b7420f689b84f859d218d9d6f3d9414ae515351c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
