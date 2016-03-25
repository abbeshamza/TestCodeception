<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_04ab43995249a30dc3b78e3d1e0f9523aef42d48ac2b3fd222663fd523b64b53 extends Twig_Template
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
        $__internal_a89c8b69526e669de2574d29d8981acf783dc37d6e209bf0dd4e321dc155807a = $this->env->getExtension("native_profiler");
        $__internal_a89c8b69526e669de2574d29d8981acf783dc37d6e209bf0dd4e321dc155807a->enter($__internal_a89c8b69526e669de2574d29d8981acf783dc37d6e209bf0dd4e321dc155807a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a89c8b69526e669de2574d29d8981acf783dc37d6e209bf0dd4e321dc155807a->leave($__internal_a89c8b69526e669de2574d29d8981acf783dc37d6e209bf0dd4e321dc155807a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
