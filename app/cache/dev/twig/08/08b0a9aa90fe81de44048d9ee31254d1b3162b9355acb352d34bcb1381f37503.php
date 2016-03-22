<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_881bfd53bbca82f88768657e2abbae7fadc754976bb6a68a2bcbb7b69860b37e extends Twig_Template
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
        $__internal_be70b297cc2e3df2fa1a78a1b1056bdf8974ee2877e972822bcede486772ce47 = $this->env->getExtension("native_profiler");
        $__internal_be70b297cc2e3df2fa1a78a1b1056bdf8974ee2877e972822bcede486772ce47->enter($__internal_be70b297cc2e3df2fa1a78a1b1056bdf8974ee2877e972822bcede486772ce47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_be70b297cc2e3df2fa1a78a1b1056bdf8974ee2877e972822bcede486772ce47->leave($__internal_be70b297cc2e3df2fa1a78a1b1056bdf8974ee2877e972822bcede486772ce47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
