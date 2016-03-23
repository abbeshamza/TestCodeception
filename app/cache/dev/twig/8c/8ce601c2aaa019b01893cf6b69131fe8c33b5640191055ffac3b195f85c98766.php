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
        $__internal_98bc549f6b7e116c745c1148130a5e478315ac847fb8e33492ec3d56b8901724 = $this->env->getExtension("native_profiler");
        $__internal_98bc549f6b7e116c745c1148130a5e478315ac847fb8e33492ec3d56b8901724->enter($__internal_98bc549f6b7e116c745c1148130a5e478315ac847fb8e33492ec3d56b8901724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_98bc549f6b7e116c745c1148130a5e478315ac847fb8e33492ec3d56b8901724->leave($__internal_98bc549f6b7e116c745c1148130a5e478315ac847fb8e33492ec3d56b8901724_prof);

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
