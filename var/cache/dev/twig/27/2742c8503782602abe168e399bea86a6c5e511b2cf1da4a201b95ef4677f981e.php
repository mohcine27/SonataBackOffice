<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_0b01d5a9bfbeec3db80873d6a59d24c05fb0b8ac2bcae61bd13b04ba81caf44b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e68d78b103686cac181ae76aa6a880dbe7f62155b927d7a60ac8c879cfe053f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68d78b103686cac181ae76aa6a880dbe7f62155b927d7a60ac8c879cfe053f1->enter($__internal_e68d78b103686cac181ae76aa6a880dbe7f62155b927d7a60ac8c879cfe053f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $__internal_be8b5b260b21e3f234194ac2d43c97a842953b0a0aa25bd76dc46e5d77b0eb89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8b5b260b21e3f234194ac2d43c97a842953b0a0aa25bd76dc46e5d77b0eb89->enter($__internal_be8b5b260b21e3f234194ac2d43c97a842953b0a0aa25bd76dc46e5d77b0eb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e68d78b103686cac181ae76aa6a880dbe7f62155b927d7a60ac8c879cfe053f1->leave($__internal_e68d78b103686cac181ae76aa6a880dbe7f62155b927d7a60ac8c879cfe053f1_prof);

        
        $__internal_be8b5b260b21e3f234194ac2d43c97a842953b0a0aa25bd76dc46e5d77b0eb89->leave($__internal_be8b5b260b21e3f234194ac2d43c97a842953b0a0aa25bd76dc46e5d77b0eb89_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_efb121c6fbf73b98a2b980fcfcd8ba1f89a77ba1a3cb63d0e57d53ca034d9227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb121c6fbf73b98a2b980fcfcd8ba1f89a77ba1a3cb63d0e57d53ca034d9227->enter($__internal_efb121c6fbf73b98a2b980fcfcd8ba1f89a77ba1a3cb63d0e57d53ca034d9227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f24da6a0bb00e64e1841c36c0130e112f24b5aafd702cc919fe75d00b3b0c98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24da6a0bb00e64e1841c36c0130e112f24b5aafd702cc919fe75d00b3b0c98c->enter($__internal_f24da6a0bb00e64e1841c36c0130e112f24b5aafd702cc919fe75d00b3b0c98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            $context["timezone"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "timezone", array())) : (null));
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array()), (isset($context["timezone"]) ? $context["timezone"] : $this->getContext($context, "timezone"))), "html", null, true);
        } elseif ($this->getAttribute($this->getAttribute(        // line 20
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) {
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), null, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "timezone", array())), "html", null, true);
        } else {
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_f24da6a0bb00e64e1841c36c0130e112f24b5aafd702cc919fe75d00b3b0c98c->leave($__internal_f24da6a0bb00e64e1841c36c0130e112f24b5aafd702cc919fe75d00b3b0c98c_prof);

        
        $__internal_efb121c6fbf73b98a2b980fcfcd8ba1f89a77ba1a3cb63d0e57d53ca034d9227->leave($__internal_efb121c6fbf73b98a2b980fcfcd8ba1f89a77ba1a3cb63d0e57d53ca034d9227_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  61 => 21,  59 => 20,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {% set timezone = field_description.options.timezone is defined ? field_description.options.timezone : null %}
        {{ value|date(field_description.options.format, timezone) }}
    {%- elseif field_description.options.timezone is defined -%}
        {{ value|date(null, field_description.options.timezone) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_datetime.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_datetime.html.twig");
    }
}
