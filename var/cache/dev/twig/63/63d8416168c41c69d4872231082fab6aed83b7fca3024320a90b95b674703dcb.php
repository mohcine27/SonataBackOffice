<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_740316eb9c20f26cf56c315a563d2676a29ee2251a55836c6a29f82ffdd52fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab19c956727b438a9144cb96685b7cfc7069e3b48ec35448d1c913e1de3afaf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab19c956727b438a9144cb96685b7cfc7069e3b48ec35448d1c913e1de3afaf5->enter($__internal_ab19c956727b438a9144cb96685b7cfc7069e3b48ec35448d1c913e1de3afaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_dfda2f9f56bc1b6b4eda87957d05f0e75df7229d5302740c441ff69400375f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfda2f9f56bc1b6b4eda87957d05f0e75df7229d5302740c441ff69400375f37->enter($__internal_dfda2f9f56bc1b6b4eda87957d05f0e75df7229d5302740c441ff69400375f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab19c956727b438a9144cb96685b7cfc7069e3b48ec35448d1c913e1de3afaf5->leave($__internal_ab19c956727b438a9144cb96685b7cfc7069e3b48ec35448d1c913e1de3afaf5_prof);

        
        $__internal_dfda2f9f56bc1b6b4eda87957d05f0e75df7229d5302740c441ff69400375f37->leave($__internal_dfda2f9f56bc1b6b4eda87957d05f0e75df7229d5302740c441ff69400375f37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed0d5a65c818cbbb21bf05e2f03d8b6796142fa8d4cf904a537910b398e544cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0d5a65c818cbbb21bf05e2f03d8b6796142fa8d4cf904a537910b398e544cd->enter($__internal_ed0d5a65c818cbbb21bf05e2f03d8b6796142fa8d4cf904a537910b398e544cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_237bd63ecd31141678cbdb2d3824b77d611b58e52879bfb7c266349a299107e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237bd63ecd31141678cbdb2d3824b77d611b58e52879bfb7c266349a299107e9->enter($__internal_237bd63ecd31141678cbdb2d3824b77d611b58e52879bfb7c266349a299107e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_237bd63ecd31141678cbdb2d3824b77d611b58e52879bfb7c266349a299107e9->leave($__internal_237bd63ecd31141678cbdb2d3824b77d611b58e52879bfb7c266349a299107e9_prof);

        
        $__internal_ed0d5a65c818cbbb21bf05e2f03d8b6796142fa8d4cf904a537910b398e544cd->leave($__internal_ed0d5a65c818cbbb21bf05e2f03d8b6796142fa8d4cf904a537910b398e544cd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e04bff333c337366c366bb05a360f6f8344d9e25dcbc49b36db1755a432c71a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e04bff333c337366c366bb05a360f6f8344d9e25dcbc49b36db1755a432c71a->enter($__internal_8e04bff333c337366c366bb05a360f6f8344d9e25dcbc49b36db1755a432c71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5e224787a3b7e827fb5e784a2596a1ae6b2086fce66ac5ef6cc3e0fe7a9af29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e224787a3b7e827fb5e784a2596a1ae6b2086fce66ac5ef6cc3e0fe7a9af29->enter($__internal_d5e224787a3b7e827fb5e784a2596a1ae6b2086fce66ac5ef6cc3e0fe7a9af29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d5e224787a3b7e827fb5e784a2596a1ae6b2086fce66ac5ef6cc3e0fe7a9af29->leave($__internal_d5e224787a3b7e827fb5e784a2596a1ae6b2086fce66ac5ef6cc3e0fe7a9af29_prof);

        
        $__internal_8e04bff333c337366c366bb05a360f6f8344d9e25dcbc49b36db1755a432c71a->leave($__internal_8e04bff333c337366c366bb05a360f6f8344d9e25dcbc49b36db1755a432c71a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
