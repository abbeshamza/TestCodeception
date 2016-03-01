<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_00fb45232976d48c385dbbe317c2f3df420bdaeab1a600205defcae8f090f0f6 extends Twig_Template
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
        $__internal_292233b921cbb9ae0a5c7a0ab5e59e82ce4daa93dc4b9ed8f2e3bb4eb053869a = $this->env->getExtension("native_profiler");
        $__internal_292233b921cbb9ae0a5c7a0ab5e59e82ce4daa93dc4b9ed8f2e3bb4eb053869a->enter($__internal_292233b921cbb9ae0a5c7a0ab5e59e82ce4daa93dc4b9ed8f2e3bb4eb053869a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_292233b921cbb9ae0a5c7a0ab5e59e82ce4daa93dc4b9ed8f2e3bb4eb053869a->leave($__internal_292233b921cbb9ae0a5c7a0ab5e59e82ce4daa93dc4b9ed8f2e3bb4eb053869a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
