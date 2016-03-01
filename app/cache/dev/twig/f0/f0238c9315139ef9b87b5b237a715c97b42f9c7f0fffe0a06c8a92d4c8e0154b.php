<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_98254968ae86efbcd2f9c127ab0892ec7e4dbc6d9e303f2555a4a19a5d384459 extends Twig_Template
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
        $__internal_68a7a81171328bf87069ed6fcb6f301169f2eebbcdcca476db4534ffc634165e = $this->env->getExtension("native_profiler");
        $__internal_68a7a81171328bf87069ed6fcb6f301169f2eebbcdcca476db4534ffc634165e->enter($__internal_68a7a81171328bf87069ed6fcb6f301169f2eebbcdcca476db4534ffc634165e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_68a7a81171328bf87069ed6fcb6f301169f2eebbcdcca476db4534ffc634165e->leave($__internal_68a7a81171328bf87069ed6fcb6f301169f2eebbcdcca476db4534ffc634165e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
