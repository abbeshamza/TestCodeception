<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4aa06a5a1c246d453d7112c0a9338254edc1659697067e67721a0caedc424e73 extends Twig_Template
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
        $__internal_31818135723c2ba72317ebc416dcc62d41257e41078bc50f7bb6ba73b3807fed = $this->env->getExtension("native_profiler");
        $__internal_31818135723c2ba72317ebc416dcc62d41257e41078bc50f7bb6ba73b3807fed->enter($__internal_31818135723c2ba72317ebc416dcc62d41257e41078bc50f7bb6ba73b3807fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_31818135723c2ba72317ebc416dcc62d41257e41078bc50f7bb6ba73b3807fed->leave($__internal_31818135723c2ba72317ebc416dcc62d41257e41078bc50f7bb6ba73b3807fed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
