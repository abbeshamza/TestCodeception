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
        $__internal_812edaca159b8b75c7429d1b9058523e88c6cbc3b93cbc09512f954e9242e427 = $this->env->getExtension("native_profiler");
        $__internal_812edaca159b8b75c7429d1b9058523e88c6cbc3b93cbc09512f954e9242e427->enter($__internal_812edaca159b8b75c7429d1b9058523e88c6cbc3b93cbc09512f954e9242e427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_812edaca159b8b75c7429d1b9058523e88c6cbc3b93cbc09512f954e9242e427->leave($__internal_812edaca159b8b75c7429d1b9058523e88c6cbc3b93cbc09512f954e9242e427_prof);

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
