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
        $__internal_3749dd08ce425d9ff30c573a48ef1aab6d942e1004e2fb7b09291c23e97aae7c = $this->env->getExtension("native_profiler");
        $__internal_3749dd08ce425d9ff30c573a48ef1aab6d942e1004e2fb7b09291c23e97aae7c->enter($__internal_3749dd08ce425d9ff30c573a48ef1aab6d942e1004e2fb7b09291c23e97aae7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3749dd08ce425d9ff30c573a48ef1aab6d942e1004e2fb7b09291c23e97aae7c->leave($__internal_3749dd08ce425d9ff30c573a48ef1aab6d942e1004e2fb7b09291c23e97aae7c_prof);

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
