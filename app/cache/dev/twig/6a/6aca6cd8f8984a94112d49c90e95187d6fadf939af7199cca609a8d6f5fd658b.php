<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_74c677f6b7aa2f352be2d2a8275522e5b9aa3ddf41c9c4adac162ef310d6accb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9844ff32e4c255176be5f22589c6d61a9bca54f25f62b1bad25f7de968063001 = $this->env->getExtension("native_profiler");
        $__internal_9844ff32e4c255176be5f22589c6d61a9bca54f25f62b1bad25f7de968063001->enter($__internal_9844ff32e4c255176be5f22589c6d61a9bca54f25f62b1bad25f7de968063001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9844ff32e4c255176be5f22589c6d61a9bca54f25f62b1bad25f7de968063001->leave($__internal_9844ff32e4c255176be5f22589c6d61a9bca54f25f62b1bad25f7de968063001_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8c97e41d46a14195cd89617e17d0cc3f1024f1dc1e629380b63e7eea925c9ea2 = $this->env->getExtension("native_profiler");
        $__internal_8c97e41d46a14195cd89617e17d0cc3f1024f1dc1e629380b63e7eea925c9ea2->enter($__internal_8c97e41d46a14195cd89617e17d0cc3f1024f1dc1e629380b63e7eea925c9ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8c97e41d46a14195cd89617e17d0cc3f1024f1dc1e629380b63e7eea925c9ea2->leave($__internal_8c97e41d46a14195cd89617e17d0cc3f1024f1dc1e629380b63e7eea925c9ea2_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1fd1ef5800e57e129e0ea6f92f5f2346ccab0222b8e82c87ccdb1a591639d011 = $this->env->getExtension("native_profiler");
        $__internal_1fd1ef5800e57e129e0ea6f92f5f2346ccab0222b8e82c87ccdb1a591639d011->enter($__internal_1fd1ef5800e57e129e0ea6f92f5f2346ccab0222b8e82c87ccdb1a591639d011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1fd1ef5800e57e129e0ea6f92f5f2346ccab0222b8e82c87ccdb1a591639d011->leave($__internal_1fd1ef5800e57e129e0ea6f92f5f2346ccab0222b8e82c87ccdb1a591639d011_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f6932ef2954849293185ab5857fdc8db638459a9ad1362e0bf68ff733dd3d59b = $this->env->getExtension("native_profiler");
        $__internal_f6932ef2954849293185ab5857fdc8db638459a9ad1362e0bf68ff733dd3d59b->enter($__internal_f6932ef2954849293185ab5857fdc8db638459a9ad1362e0bf68ff733dd3d59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f6932ef2954849293185ab5857fdc8db638459a9ad1362e0bf68ff733dd3d59b->leave($__internal_f6932ef2954849293185ab5857fdc8db638459a9ad1362e0bf68ff733dd3d59b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
