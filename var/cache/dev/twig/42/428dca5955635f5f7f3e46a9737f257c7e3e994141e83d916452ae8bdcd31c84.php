<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8a83800138fbfa39de9b86b8edbfed9dc9e7c36e5db792b04d5ab6713e60130a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26777f30aa558a6ea5120793e7341e7f95be2f2f2d1644e53f5bdc5927eff7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26777f30aa558a6ea5120793e7341e7f95be2f2f2d1644e53f5bdc5927eff7a6->enter($__internal_26777f30aa558a6ea5120793e7341e7f95be2f2f2d1644e53f5bdc5927eff7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1ade72216367c9066e00db1078f5931e2685e4e10621d51058841520680870dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ade72216367c9066e00db1078f5931e2685e4e10621d51058841520680870dd->enter($__internal_1ade72216367c9066e00db1078f5931e2685e4e10621d51058841520680870dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26777f30aa558a6ea5120793e7341e7f95be2f2f2d1644e53f5bdc5927eff7a6->leave($__internal_26777f30aa558a6ea5120793e7341e7f95be2f2f2d1644e53f5bdc5927eff7a6_prof);

        
        $__internal_1ade72216367c9066e00db1078f5931e2685e4e10621d51058841520680870dd->leave($__internal_1ade72216367c9066e00db1078f5931e2685e4e10621d51058841520680870dd_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_63fb7ee2bd5e7f30bfafca105f31ffbd034d91fbfd33877be83112f6e9c361a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fb7ee2bd5e7f30bfafca105f31ffbd034d91fbfd33877be83112f6e9c361a3->enter($__internal_63fb7ee2bd5e7f30bfafca105f31ffbd034d91fbfd33877be83112f6e9c361a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_09eebe49c327339142c69968bfca8d5f2380039dd8426eff030fb0e87f15b8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09eebe49c327339142c69968bfca8d5f2380039dd8426eff030fb0e87f15b8b5->enter($__internal_09eebe49c327339142c69968bfca8d5f2380039dd8426eff030fb0e87f15b8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_09eebe49c327339142c69968bfca8d5f2380039dd8426eff030fb0e87f15b8b5->leave($__internal_09eebe49c327339142c69968bfca8d5f2380039dd8426eff030fb0e87f15b8b5_prof);

        
        $__internal_63fb7ee2bd5e7f30bfafca105f31ffbd034d91fbfd33877be83112f6e9c361a3->leave($__internal_63fb7ee2bd5e7f30bfafca105f31ffbd034d91fbfd33877be83112f6e9c361a3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_587634a299d6b4631e06a9915449b9e870d26c6deae9b187cca05dbe29b298e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587634a299d6b4631e06a9915449b9e870d26c6deae9b187cca05dbe29b298e2->enter($__internal_587634a299d6b4631e06a9915449b9e870d26c6deae9b187cca05dbe29b298e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01103f6544b3d2db0bebdbc5ceedc543cdeb984d818ec71e61a88f6859e18441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01103f6544b3d2db0bebdbc5ceedc543cdeb984d818ec71e61a88f6859e18441->enter($__internal_01103f6544b3d2db0bebdbc5ceedc543cdeb984d818ec71e61a88f6859e18441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_01103f6544b3d2db0bebdbc5ceedc543cdeb984d818ec71e61a88f6859e18441->leave($__internal_01103f6544b3d2db0bebdbc5ceedc543cdeb984d818ec71e61a88f6859e18441_prof);

        
        $__internal_587634a299d6b4631e06a9915449b9e870d26c6deae9b187cca05dbe29b298e2->leave($__internal_587634a299d6b4631e06a9915449b9e870d26c6deae9b187cca05dbe29b298e2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
