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
        $__internal_d4206ca34b225929ff159997e7493ee1c9df3667d9661f636687c7d917ac5f4d = $this->env->getExtension("native_profiler");
        $__internal_d4206ca34b225929ff159997e7493ee1c9df3667d9661f636687c7d917ac5f4d->enter($__internal_d4206ca34b225929ff159997e7493ee1c9df3667d9661f636687c7d917ac5f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d4206ca34b225929ff159997e7493ee1c9df3667d9661f636687c7d917ac5f4d->leave($__internal_d4206ca34b225929ff159997e7493ee1c9df3667d9661f636687c7d917ac5f4d_prof);

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
