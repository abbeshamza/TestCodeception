<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8769730b5e1e959ec4ea68fc3c56b45ec2b2e5cf4cf5326be6163b16ad4470c9 extends Twig_Template
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
        $__internal_f9832bfd1f630d2c7acd9031384e7902319d941f4752287961aa66f3b5334d68 = $this->env->getExtension("native_profiler");
        $__internal_f9832bfd1f630d2c7acd9031384e7902319d941f4752287961aa66f3b5334d68->enter($__internal_f9832bfd1f630d2c7acd9031384e7902319d941f4752287961aa66f3b5334d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f9832bfd1f630d2c7acd9031384e7902319d941f4752287961aa66f3b5334d68->leave($__internal_f9832bfd1f630d2c7acd9031384e7902319d941f4752287961aa66f3b5334d68_prof);

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
