<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_a41665296e8718b1cabbc6a4adeb004d3c50893d0c1fa2df1f6c08180b61e26b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d546b7b6528b296b07f75595dbcba4d66d5263fe5177fc96c6b6b79a2fd82694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d546b7b6528b296b07f75595dbcba4d66d5263fe5177fc96c6b6b79a2fd82694->enter($__internal_d546b7b6528b296b07f75595dbcba4d66d5263fe5177fc96c6b6b79a2fd82694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        $__internal_5da41499ff99185fe560e40924c709778693b33bbac6cdf2d61bc763b51fb3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da41499ff99185fe560e40924c709778693b33bbac6cdf2d61bc763b51fb3c5->enter($__internal_5da41499ff99185fe560e40924c709778693b33bbac6cdf2d61bc763b51fb3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_d546b7b6528b296b07f75595dbcba4d66d5263fe5177fc96c6b6b79a2fd82694->leave($__internal_d546b7b6528b296b07f75595dbcba4d66d5263fe5177fc96c6b6b79a2fd82694_prof);

        
        $__internal_5da41499ff99185fe560e40924c709778693b33bbac6cdf2d61bc763b51fb3c5->leave($__internal_5da41499ff99185fe560e40924c709778693b33bbac6cdf2d61bc763b51fb3c5_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_ed5675a08b9a344c5aa14ba67f4a05adb23067dd095a65ca12d9ecb91d7d7ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5675a08b9a344c5aa14ba67f4a05adb23067dd095a65ca12d9ecb91d7d7ecf->enter($__internal_ed5675a08b9a344c5aa14ba67f4a05adb23067dd095a65ca12d9ecb91d7d7ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_9017c35c508c36d529a28f1920cc8f1c8eb28644d640875e0f682748747f818f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9017c35c508c36d529a28f1920cc8f1c8eb28644d640875e0f682748747f818f->enter($__internal_9017c35c508c36d529a28f1920cc8f1c8eb28644d640875e0f682748747f818f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_9017c35c508c36d529a28f1920cc8f1c8eb28644d640875e0f682748747f818f->leave($__internal_9017c35c508c36d529a28f1920cc8f1c8eb28644d640875e0f682748747f818f_prof);

        
        $__internal_ed5675a08b9a344c5aa14ba67f4a05adb23067dd095a65ca12d9ecb91d7d7ecf->leave($__internal_ed5675a08b9a344c5aa14ba67f4a05adb23067dd095a65ca12d9ecb91d7d7ecf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\user_block.html.twig");
    }
}
