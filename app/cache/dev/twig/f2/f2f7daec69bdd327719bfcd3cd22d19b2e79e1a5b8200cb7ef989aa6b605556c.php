<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_49a6e1fdd641824028b63461a9766554d322e804c8896ec036fd1ae79a92b860 extends Twig_Template
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
        $__internal_f73b7eed0742f06962963990875c1b2a93076bf9e23ab09920f6c8ceb8adfefe = $this->env->getExtension("native_profiler");
        $__internal_f73b7eed0742f06962963990875c1b2a93076bf9e23ab09920f6c8ceb8adfefe->enter($__internal_f73b7eed0742f06962963990875c1b2a93076bf9e23ab09920f6c8ceb8adfefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f73b7eed0742f06962963990875c1b2a93076bf9e23ab09920f6c8ceb8adfefe->leave($__internal_f73b7eed0742f06962963990875c1b2a93076bf9e23ab09920f6c8ceb8adfefe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
