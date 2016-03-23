<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6dac4f62722ab666a5d32832e8900bb3a95baeeff258c03aae253bc1da586f9a extends Twig_Template
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
        $__internal_41fab782a333dcd5abdffbd1ff4f6e22d752fc67667cbf6a595e105dd6d512e7 = $this->env->getExtension("native_profiler");
        $__internal_41fab782a333dcd5abdffbd1ff4f6e22d752fc67667cbf6a595e105dd6d512e7->enter($__internal_41fab782a333dcd5abdffbd1ff4f6e22d752fc67667cbf6a595e105dd6d512e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_41fab782a333dcd5abdffbd1ff4f6e22d752fc67667cbf6a595e105dd6d512e7->leave($__internal_41fab782a333dcd5abdffbd1ff4f6e22d752fc67667cbf6a595e105dd6d512e7_prof);

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
