<?php

/* AppBundle:Resetting:reset.html.twig */
class __TwigTemplate_0e2c27130bd33f552ad2c4a7961209cc1ff0f55f35e4c49c51d10a326fdef52c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "AppBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca0a360e0deae5917fef0fe4f472516d57f37aea99c3f8a886ff44bc756dcc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0a360e0deae5917fef0fe4f472516d57f37aea99c3f8a886ff44bc756dcc45->enter($__internal_ca0a360e0deae5917fef0fe4f472516d57f37aea99c3f8a886ff44bc756dcc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:reset.html.twig"));

        $__internal_7da5ec9a1c16fa3044a686d4d092ec33a58eb578f62385b68321b4190050f00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da5ec9a1c16fa3044a686d4d092ec33a58eb578f62385b68321b4190050f00c->enter($__internal_7da5ec9a1c16fa3044a686d4d092ec33a58eb578f62385b68321b4190050f00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca0a360e0deae5917fef0fe4f472516d57f37aea99c3f8a886ff44bc756dcc45->leave($__internal_ca0a360e0deae5917fef0fe4f472516d57f37aea99c3f8a886ff44bc756dcc45_prof);

        
        $__internal_7da5ec9a1c16fa3044a686d4d092ec33a58eb578f62385b68321b4190050f00c->leave($__internal_7da5ec9a1c16fa3044a686d4d092ec33a58eb578f62385b68321b4190050f00c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a15ab7f5fd3565ec75d0527ce1b3841dfc952bc1e5dac10a968daeda6ec358d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15ab7f5fd3565ec75d0527ce1b3841dfc952bc1e5dac10a968daeda6ec358d1->enter($__internal_a15ab7f5fd3565ec75d0527ce1b3841dfc952bc1e5dac10a968daeda6ec358d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9dc09c1fd410f5443e0c9faa68720c121cdd33fb9e3ec418b052466e640b8ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc09c1fd410f5443e0c9faa68720c121cdd33fb9e3ec418b052466e640b8ab0->enter($__internal_9dc09c1fd410f5443e0c9faa68720c121cdd33fb9e3ec418b052466e640b8ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "AppBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9dc09c1fd410f5443e0c9faa68720c121cdd33fb9e3ec418b052466e640b8ab0->leave($__internal_9dc09c1fd410f5443e0c9faa68720c121cdd33fb9e3ec418b052466e640b8ab0_prof);

        
        $__internal_a15ab7f5fd3565ec75d0527ce1b3841dfc952bc1e5dac10a968daeda6ec358d1->leave($__internal_a15ab7f5fd3565ec75d0527ce1b3841dfc952bc1e5dac10a968daeda6ec358d1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "AppBundle:Resetting:reset.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
