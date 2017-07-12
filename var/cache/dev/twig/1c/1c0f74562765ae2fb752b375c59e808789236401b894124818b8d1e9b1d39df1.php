<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_92f7ec07afbc883517f1e39e286db1e7e6e8629d65423c311915da52c879c678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3edb153087dd4e4d21b7a68b33983627e8a6073137ebd9f70a3f6a7253c9cca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edb153087dd4e4d21b7a68b33983627e8a6073137ebd9f70a3f6a7253c9cca1->enter($__internal_3edb153087dd4e4d21b7a68b33983627e8a6073137ebd9f70a3f6a7253c9cca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7e51aad99cb8f3859f13b6f024e3420eccbe36a505d3ec8d16cd4112bebbf7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e51aad99cb8f3859f13b6f024e3420eccbe36a505d3ec8d16cd4112bebbf7f5->enter($__internal_7e51aad99cb8f3859f13b6f024e3420eccbe36a505d3ec8d16cd4112bebbf7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3edb153087dd4e4d21b7a68b33983627e8a6073137ebd9f70a3f6a7253c9cca1->leave($__internal_3edb153087dd4e4d21b7a68b33983627e8a6073137ebd9f70a3f6a7253c9cca1_prof);

        
        $__internal_7e51aad99cb8f3859f13b6f024e3420eccbe36a505d3ec8d16cd4112bebbf7f5->leave($__internal_7e51aad99cb8f3859f13b6f024e3420eccbe36a505d3ec8d16cd4112bebbf7f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47bb54ebdf697b9e915ab52a4c18a7555049bd06d041b2aed633f6a7abb80118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bb54ebdf697b9e915ab52a4c18a7555049bd06d041b2aed633f6a7abb80118->enter($__internal_47bb54ebdf697b9e915ab52a4c18a7555049bd06d041b2aed633f6a7abb80118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f992d43d8aab8c9d7e07ac8e340274ec64a6d1defacfef223288c3aaeef8a82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f992d43d8aab8c9d7e07ac8e340274ec64a6d1defacfef223288c3aaeef8a82c->enter($__internal_f992d43d8aab8c9d7e07ac8e340274ec64a6d1defacfef223288c3aaeef8a82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f992d43d8aab8c9d7e07ac8e340274ec64a6d1defacfef223288c3aaeef8a82c->leave($__internal_f992d43d8aab8c9d7e07ac8e340274ec64a6d1defacfef223288c3aaeef8a82c_prof);

        
        $__internal_47bb54ebdf697b9e915ab52a4c18a7555049bd06d041b2aed633f6a7abb80118->leave($__internal_47bb54ebdf697b9e915ab52a4c18a7555049bd06d041b2aed633f6a7abb80118_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
