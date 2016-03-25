<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_db1ed06d38e8d6761e4a21da1969c2eab617ff512c6b3d64a52af869f8a9ac64 extends Twig_Template
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
        $__internal_0f636b210b43b59f30a577b9e608a95a5ec35d4eafb7a56e844c7d61e6b62175 = $this->env->getExtension("native_profiler");
        $__internal_0f636b210b43b59f30a577b9e608a95a5ec35d4eafb7a56e844c7d61e6b62175->enter($__internal_0f636b210b43b59f30a577b9e608a95a5ec35d4eafb7a56e844c7d61e6b62175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0f636b210b43b59f30a577b9e608a95a5ec35d4eafb7a56e844c7d61e6b62175->leave($__internal_0f636b210b43b59f30a577b9e608a95a5ec35d4eafb7a56e844c7d61e6b62175_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
