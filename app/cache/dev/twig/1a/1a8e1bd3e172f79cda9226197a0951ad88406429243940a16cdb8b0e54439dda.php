<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0c08e4428fb82cdda6b61ae337e9c3772f48fee0e5f2f308c1d8e9795f480ce0 extends Twig_Template
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
        $__internal_99f7d7ae63f6a45d75716be5225d43f98c951e0718eba57a53ee394fc5dc3f6f = $this->env->getExtension("native_profiler");
        $__internal_99f7d7ae63f6a45d75716be5225d43f98c951e0718eba57a53ee394fc5dc3f6f->enter($__internal_99f7d7ae63f6a45d75716be5225d43f98c951e0718eba57a53ee394fc5dc3f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_99f7d7ae63f6a45d75716be5225d43f98c951e0718eba57a53ee394fc5dc3f6f->leave($__internal_99f7d7ae63f6a45d75716be5225d43f98c951e0718eba57a53ee394fc5dc3f6f_prof);

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
