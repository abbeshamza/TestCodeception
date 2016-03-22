<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_72b5f2cb654ece2010c2242c15147ca0873e278fa8a3d35b832da2fb325c2c0b extends Twig_Template
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
        $__internal_6d154f6dc98ecb39e16ecfbfbe9c28523c36cb9182aebaac534cb44d52e494fc = $this->env->getExtension("native_profiler");
        $__internal_6d154f6dc98ecb39e16ecfbfbe9c28523c36cb9182aebaac534cb44d52e494fc->enter($__internal_6d154f6dc98ecb39e16ecfbfbe9c28523c36cb9182aebaac534cb44d52e494fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6d154f6dc98ecb39e16ecfbfbe9c28523c36cb9182aebaac534cb44d52e494fc->leave($__internal_6d154f6dc98ecb39e16ecfbfbe9c28523c36cb9182aebaac534cb44d52e494fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
