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
        $__internal_adac708956d31f0267face2ec20b1e0007a256c695f4791143e93dba25a7645f = $this->env->getExtension("native_profiler");
        $__internal_adac708956d31f0267face2ec20b1e0007a256c695f4791143e93dba25a7645f->enter($__internal_adac708956d31f0267face2ec20b1e0007a256c695f4791143e93dba25a7645f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_adac708956d31f0267face2ec20b1e0007a256c695f4791143e93dba25a7645f->leave($__internal_adac708956d31f0267face2ec20b1e0007a256c695f4791143e93dba25a7645f_prof);

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
