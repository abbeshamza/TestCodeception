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
        $__internal_f41b1af4396c67086ae7304676547c2b950e6b9bf19976ae79a0cdcdce325dec = $this->env->getExtension("native_profiler");
        $__internal_f41b1af4396c67086ae7304676547c2b950e6b9bf19976ae79a0cdcdce325dec->enter($__internal_f41b1af4396c67086ae7304676547c2b950e6b9bf19976ae79a0cdcdce325dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f41b1af4396c67086ae7304676547c2b950e6b9bf19976ae79a0cdcdce325dec->leave($__internal_f41b1af4396c67086ae7304676547c2b950e6b9bf19976ae79a0cdcdce325dec_prof);

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