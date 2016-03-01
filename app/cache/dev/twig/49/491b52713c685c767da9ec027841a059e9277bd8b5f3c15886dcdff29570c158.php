<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b130b27f6f0ebc474160f4be6d7a0fc5b1f3aec829c25b53f7f6f0ae00b00b0f extends Twig_Template
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
        $__internal_2002f66773e2b8b64449a535a23d461d399be561e5348322758214a1be5d92c8 = $this->env->getExtension("native_profiler");
        $__internal_2002f66773e2b8b64449a535a23d461d399be561e5348322758214a1be5d92c8->enter($__internal_2002f66773e2b8b64449a535a23d461d399be561e5348322758214a1be5d92c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2002f66773e2b8b64449a535a23d461d399be561e5348322758214a1be5d92c8->leave($__internal_2002f66773e2b8b64449a535a23d461d399be561e5348322758214a1be5d92c8_prof);

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
