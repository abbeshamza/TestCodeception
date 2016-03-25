<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e112ab07e7e0c39403c8ee4d88f8b5eba80d7f355a12d9653c7ee6299616fd4f extends Twig_Template
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
        $__internal_db4a5c9e9fd21ef2e8824ef0bd81415d45c9c2974cb231240f850dc3daa1cf6e = $this->env->getExtension("native_profiler");
        $__internal_db4a5c9e9fd21ef2e8824ef0bd81415d45c9c2974cb231240f850dc3daa1cf6e->enter($__internal_db4a5c9e9fd21ef2e8824ef0bd81415d45c9c2974cb231240f850dc3daa1cf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_db4a5c9e9fd21ef2e8824ef0bd81415d45c9c2974cb231240f850dc3daa1cf6e->leave($__internal_db4a5c9e9fd21ef2e8824ef0bd81415d45c9c2974cb231240f850dc3daa1cf6e_prof);

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
