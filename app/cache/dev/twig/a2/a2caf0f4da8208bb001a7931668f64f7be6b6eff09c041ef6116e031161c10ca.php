<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e9a5f0d7f2cb4233d7b2481f9a2b7279454141db8f99a484516acde4d7cdf1c9 extends Twig_Template
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
        $__internal_aefbef01553323a8de48fd23add7e8bbc165b81f2d5bf44aa7993964f4e1b22a = $this->env->getExtension("native_profiler");
        $__internal_aefbef01553323a8de48fd23add7e8bbc165b81f2d5bf44aa7993964f4e1b22a->enter($__internal_aefbef01553323a8de48fd23add7e8bbc165b81f2d5bf44aa7993964f4e1b22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_aefbef01553323a8de48fd23add7e8bbc165b81f2d5bf44aa7993964f4e1b22a->leave($__internal_aefbef01553323a8de48fd23add7e8bbc165b81f2d5bf44aa7993964f4e1b22a_prof);

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
