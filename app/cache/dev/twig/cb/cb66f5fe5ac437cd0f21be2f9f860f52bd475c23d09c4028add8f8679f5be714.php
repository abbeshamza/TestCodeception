<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0114b420a370ab98bae8ee8d001147d85eb91f805e8038eb5ffb226ddcf0256a extends Twig_Template
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
        $__internal_4590bdcd79f6b8af94b30508869dd7d2f137f47ad397cb1ece955ad4d5a203a3 = $this->env->getExtension("native_profiler");
        $__internal_4590bdcd79f6b8af94b30508869dd7d2f137f47ad397cb1ece955ad4d5a203a3->enter($__internal_4590bdcd79f6b8af94b30508869dd7d2f137f47ad397cb1ece955ad4d5a203a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4590bdcd79f6b8af94b30508869dd7d2f137f47ad397cb1ece955ad4d5a203a3->leave($__internal_4590bdcd79f6b8af94b30508869dd7d2f137f47ad397cb1ece955ad4d5a203a3_prof);

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
