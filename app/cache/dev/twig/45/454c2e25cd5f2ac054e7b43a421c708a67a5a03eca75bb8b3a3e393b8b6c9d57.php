<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6cbbe4873a1e692876c29ba2b7ed788e3c50adbe021a262cda97df0e1fe58994 extends Twig_Template
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
        $__internal_3f63471c41129d0d6c776f7703ee51ce76b14bcebb996d44c12fc65e59f30f1b = $this->env->getExtension("native_profiler");
        $__internal_3f63471c41129d0d6c776f7703ee51ce76b14bcebb996d44c12fc65e59f30f1b->enter($__internal_3f63471c41129d0d6c776f7703ee51ce76b14bcebb996d44c12fc65e59f30f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3f63471c41129d0d6c776f7703ee51ce76b14bcebb996d44c12fc65e59f30f1b->leave($__internal_3f63471c41129d0d6c776f7703ee51ce76b14bcebb996d44c12fc65e59f30f1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
