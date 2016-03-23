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
        $__internal_97bab6b5c7bacb37ffff743edb48b663b8d66ac539f332ef56ad03d9e649c24a = $this->env->getExtension("native_profiler");
        $__internal_97bab6b5c7bacb37ffff743edb48b663b8d66ac539f332ef56ad03d9e649c24a->enter($__internal_97bab6b5c7bacb37ffff743edb48b663b8d66ac539f332ef56ad03d9e649c24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_97bab6b5c7bacb37ffff743edb48b663b8d66ac539f332ef56ad03d9e649c24a->leave($__internal_97bab6b5c7bacb37ffff743edb48b663b8d66ac539f332ef56ad03d9e649c24a_prof);

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
