<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1e020adba405e113b64f4ed93a3d86b2bc00f858689f712df13706e606944fc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3be65e638464f45ef637ec05b85494dec85ea70f13b4fb9b2e4c161fdc009860 = $this->env->getExtension("native_profiler");
        $__internal_3be65e638464f45ef637ec05b85494dec85ea70f13b4fb9b2e4c161fdc009860->enter($__internal_3be65e638464f45ef637ec05b85494dec85ea70f13b4fb9b2e4c161fdc009860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3be65e638464f45ef637ec05b85494dec85ea70f13b4fb9b2e4c161fdc009860->leave($__internal_3be65e638464f45ef637ec05b85494dec85ea70f13b4fb9b2e4c161fdc009860_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1fb5ebcb281c9b89690a7b0abf05191ebb87b92807b4605c96eb698895aa72fc = $this->env->getExtension("native_profiler");
        $__internal_1fb5ebcb281c9b89690a7b0abf05191ebb87b92807b4605c96eb698895aa72fc->enter($__internal_1fb5ebcb281c9b89690a7b0abf05191ebb87b92807b4605c96eb698895aa72fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1fb5ebcb281c9b89690a7b0abf05191ebb87b92807b4605c96eb698895aa72fc->leave($__internal_1fb5ebcb281c9b89690a7b0abf05191ebb87b92807b4605c96eb698895aa72fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4cbf0983372c92a1a9706346af2884951e1e28dc8873ef663e73f00a506493ef = $this->env->getExtension("native_profiler");
        $__internal_4cbf0983372c92a1a9706346af2884951e1e28dc8873ef663e73f00a506493ef->enter($__internal_4cbf0983372c92a1a9706346af2884951e1e28dc8873ef663e73f00a506493ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4cbf0983372c92a1a9706346af2884951e1e28dc8873ef663e73f00a506493ef->leave($__internal_4cbf0983372c92a1a9706346af2884951e1e28dc8873ef663e73f00a506493ef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93e447ab653c6408183db7d23b2a813a0f10cbd83e009b2dd6fbb36385fbf0c7 = $this->env->getExtension("native_profiler");
        $__internal_93e447ab653c6408183db7d23b2a813a0f10cbd83e009b2dd6fbb36385fbf0c7->enter($__internal_93e447ab653c6408183db7d23b2a813a0f10cbd83e009b2dd6fbb36385fbf0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_93e447ab653c6408183db7d23b2a813a0f10cbd83e009b2dd6fbb36385fbf0c7->leave($__internal_93e447ab653c6408183db7d23b2a813a0f10cbd83e009b2dd6fbb36385fbf0c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
