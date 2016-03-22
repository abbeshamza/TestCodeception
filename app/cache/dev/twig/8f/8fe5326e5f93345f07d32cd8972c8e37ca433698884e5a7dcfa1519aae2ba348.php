<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5167d2fc761e761f72c5c7c77bbd8853c9488b6a4c85b078f2f815f9d9d4f2e6 extends Twig_Template
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
        $__internal_5ec9c1c39053107fbb8a8d51e6f79f3672d83ec02d6379a814a32a4d077c109b = $this->env->getExtension("native_profiler");
        $__internal_5ec9c1c39053107fbb8a8d51e6f79f3672d83ec02d6379a814a32a4d077c109b->enter($__internal_5ec9c1c39053107fbb8a8d51e6f79f3672d83ec02d6379a814a32a4d077c109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5ec9c1c39053107fbb8a8d51e6f79f3672d83ec02d6379a814a32a4d077c109b->leave($__internal_5ec9c1c39053107fbb8a8d51e6f79f3672d83ec02d6379a814a32a4d077c109b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
