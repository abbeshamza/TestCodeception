<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7e4512a6424b9b2a9f7e66929f5d1fca1e181024fe0f77ddb2d221a28350479b extends Twig_Template
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
        $__internal_bcbef4572e7651f3c7175b001261d6916509fcf5706045551174fc61d6380a96 = $this->env->getExtension("native_profiler");
        $__internal_bcbef4572e7651f3c7175b001261d6916509fcf5706045551174fc61d6380a96->enter($__internal_bcbef4572e7651f3c7175b001261d6916509fcf5706045551174fc61d6380a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bcbef4572e7651f3c7175b001261d6916509fcf5706045551174fc61d6380a96->leave($__internal_bcbef4572e7651f3c7175b001261d6916509fcf5706045551174fc61d6380a96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
