<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_394492e7c4ae9e2a66e95f33270373d7ad5b6bfdcc23997230939e7ac18ad647 extends Twig_Template
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
        $__internal_75d0195c8b85836563c1543570cee6b1b3f81a68a54f649218d2b728e8298d73 = $this->env->getExtension("native_profiler");
        $__internal_75d0195c8b85836563c1543570cee6b1b3f81a68a54f649218d2b728e8298d73->enter($__internal_75d0195c8b85836563c1543570cee6b1b3f81a68a54f649218d2b728e8298d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_75d0195c8b85836563c1543570cee6b1b3f81a68a54f649218d2b728e8298d73->leave($__internal_75d0195c8b85836563c1543570cee6b1b3f81a68a54f649218d2b728e8298d73_prof);

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
