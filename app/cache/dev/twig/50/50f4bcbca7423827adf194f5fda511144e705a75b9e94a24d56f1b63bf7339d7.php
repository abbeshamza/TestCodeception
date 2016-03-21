<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_972a4665db86e3963c5554a603ae07fd5a34f0fc483ba5ad4b3ef74b741799f8 extends Twig_Template
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
        $__internal_158225a76ed8655031c6795313c9e88da61377ae92053c478876395485c73da9 = $this->env->getExtension("native_profiler");
        $__internal_158225a76ed8655031c6795313c9e88da61377ae92053c478876395485c73da9->enter($__internal_158225a76ed8655031c6795313c9e88da61377ae92053c478876395485c73da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_158225a76ed8655031c6795313c9e88da61377ae92053c478876395485c73da9->leave($__internal_158225a76ed8655031c6795313c9e88da61377ae92053c478876395485c73da9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
