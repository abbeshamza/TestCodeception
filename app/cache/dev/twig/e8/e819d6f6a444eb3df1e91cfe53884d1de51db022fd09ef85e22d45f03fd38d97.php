<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8968c7bf9a4e6c3c345a1ce06514b42bea99ff3baa4013cbfb6cf3382aeafa71 extends Twig_Template
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
        $__internal_b966ef2d7b4cb1a947497fd5d6cfc1a80f517e8b496cf831347c19f6facb9401 = $this->env->getExtension("native_profiler");
        $__internal_b966ef2d7b4cb1a947497fd5d6cfc1a80f517e8b496cf831347c19f6facb9401->enter($__internal_b966ef2d7b4cb1a947497fd5d6cfc1a80f517e8b496cf831347c19f6facb9401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b966ef2d7b4cb1a947497fd5d6cfc1a80f517e8b496cf831347c19f6facb9401->leave($__internal_b966ef2d7b4cb1a947497fd5d6cfc1a80f517e8b496cf831347c19f6facb9401_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
