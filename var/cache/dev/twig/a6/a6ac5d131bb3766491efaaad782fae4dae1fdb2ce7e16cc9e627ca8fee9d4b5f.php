<?php

/* AppBundle:Group:new.html.twig */
class __TwigTemplate_5e37c878e4f46e8774aa496af81127f6483862e654985250e2a7f24fd6cf0d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fcf5674691bc0a8c30cb13dd4287680bea0f99a45dc443401608cb6c2f50ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcf5674691bc0a8c30cb13dd4287680bea0f99a45dc443401608cb6c2f50ab4->enter($__internal_4fcf5674691bc0a8c30cb13dd4287680bea0f99a45dc443401608cb6c2f50ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:new.html.twig"));

        $__internal_489ee36d9661d0c216b8dc1a3e2f2cbfa2f25c4ebec036d7557be6c43d3ff6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489ee36d9661d0c216b8dc1a3e2f2cbfa2f25c4ebec036d7557be6c43d3ff6fa->enter($__internal_489ee36d9661d0c216b8dc1a3e2f2cbfa2f25c4ebec036d7557be6c43d3ff6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fcf5674691bc0a8c30cb13dd4287680bea0f99a45dc443401608cb6c2f50ab4->leave($__internal_4fcf5674691bc0a8c30cb13dd4287680bea0f99a45dc443401608cb6c2f50ab4_prof);

        
        $__internal_489ee36d9661d0c216b8dc1a3e2f2cbfa2f25c4ebec036d7557be6c43d3ff6fa->leave($__internal_489ee36d9661d0c216b8dc1a3e2f2cbfa2f25c4ebec036d7557be6c43d3ff6fa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2405e7baa93fb48c115e8393f37c0546b40584bec16fbf3ee6ab77dcbb5afef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2405e7baa93fb48c115e8393f37c0546b40584bec16fbf3ee6ab77dcbb5afef0->enter($__internal_2405e7baa93fb48c115e8393f37c0546b40584bec16fbf3ee6ab77dcbb5afef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_560367fc387f2a854fa4d125ff02af29e95028f2d7fcbf23f8502ec1325730e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560367fc387f2a854fa4d125ff02af29e95028f2d7fcbf23f8502ec1325730e4->enter($__internal_560367fc387f2a854fa4d125ff02af29e95028f2d7fcbf23f8502ec1325730e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_560367fc387f2a854fa4d125ff02af29e95028f2d7fcbf23f8502ec1325730e4->leave($__internal_560367fc387f2a854fa4d125ff02af29e95028f2d7fcbf23f8502ec1325730e4_prof);

        
        $__internal_2405e7baa93fb48c115e8393f37c0546b40584bec16fbf3ee6ab77dcbb5afef0->leave($__internal_2405e7baa93fb48c115e8393f37c0546b40584bec16fbf3ee6ab77dcbb5afef0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_442c71d205164d6f844c9803d130ae0d5efd640998f5039c4561b98ebf42f544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442c71d205164d6f844c9803d130ae0d5efd640998f5039c4561b98ebf42f544->enter($__internal_442c71d205164d6f844c9803d130ae0d5efd640998f5039c4561b98ebf42f544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_60756d45ae49d97ea5800fe3e238884dbb66f236627d129d36a88433844d586d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60756d45ae49d97ea5800fe3e238884dbb66f236627d129d36a88433844d586d->enter($__internal_60756d45ae49d97ea5800fe3e238884dbb66f236627d129d36a88433844d586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "AppBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_60756d45ae49d97ea5800fe3e238884dbb66f236627d129d36a88433844d586d->leave($__internal_60756d45ae49d97ea5800fe3e238884dbb66f236627d129d36a88433844d586d_prof);

        
        $__internal_442c71d205164d6f844c9803d130ae0d5efd640998f5039c4561b98ebf42f544->leave($__internal_442c71d205164d6f844c9803d130ae0d5efd640998f5039c4561b98ebf42f544_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}
{% block fos_user_content %}
\t{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
{% endblock body %}", "AppBundle:Group:new.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
