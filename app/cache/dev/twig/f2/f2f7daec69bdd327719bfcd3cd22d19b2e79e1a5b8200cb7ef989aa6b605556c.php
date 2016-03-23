<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_49a6e1fdd641824028b63461a9766554d322e804c8896ec036fd1ae79a92b860 extends Twig_Template
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
        $__internal_dda0a9eac4fbf3c45d200926da512bf89154fc4aee6dcf1b41dbe2daf82326c4 = $this->env->getExtension("native_profiler");
        $__internal_dda0a9eac4fbf3c45d200926da512bf89154fc4aee6dcf1b41dbe2daf82326c4->enter($__internal_dda0a9eac4fbf3c45d200926da512bf89154fc4aee6dcf1b41dbe2daf82326c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dda0a9eac4fbf3c45d200926da512bf89154fc4aee6dcf1b41dbe2daf82326c4->leave($__internal_dda0a9eac4fbf3c45d200926da512bf89154fc4aee6dcf1b41dbe2daf82326c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
