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
        $__internal_0da3061a00e41125aca2531095cfb390fc4549905a8609d89d24397452f979ec = $this->env->getExtension("native_profiler");
        $__internal_0da3061a00e41125aca2531095cfb390fc4549905a8609d89d24397452f979ec->enter($__internal_0da3061a00e41125aca2531095cfb390fc4549905a8609d89d24397452f979ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0da3061a00e41125aca2531095cfb390fc4549905a8609d89d24397452f979ec->leave($__internal_0da3061a00e41125aca2531095cfb390fc4549905a8609d89d24397452f979ec_prof);

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
