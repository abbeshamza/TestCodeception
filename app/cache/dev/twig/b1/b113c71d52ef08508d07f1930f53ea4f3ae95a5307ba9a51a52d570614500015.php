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
        $__internal_186d986dfb9d30b25e4b6719d19049410a4a2f4f9bfd7f6feca18dbbc40299c2 = $this->env->getExtension("native_profiler");
        $__internal_186d986dfb9d30b25e4b6719d19049410a4a2f4f9bfd7f6feca18dbbc40299c2->enter($__internal_186d986dfb9d30b25e4b6719d19049410a4a2f4f9bfd7f6feca18dbbc40299c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_186d986dfb9d30b25e4b6719d19049410a4a2f4f9bfd7f6feca18dbbc40299c2->leave($__internal_186d986dfb9d30b25e4b6719d19049410a4a2f4f9bfd7f6feca18dbbc40299c2_prof);

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
