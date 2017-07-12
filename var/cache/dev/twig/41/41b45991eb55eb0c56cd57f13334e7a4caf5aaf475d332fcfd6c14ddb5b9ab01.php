<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_6abc07d9205d0092c8209563908d3d26aaaa110a40708b877cd71349ee7317a4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1614d3057aee71ed5553048413434c635fa68905b987b93925dbf14e0a0a558d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1614d3057aee71ed5553048413434c635fa68905b987b93925dbf14e0a0a558d->enter($__internal_1614d3057aee71ed5553048413434c635fa68905b987b93925dbf14e0a0a558d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $__internal_8e35f03afb1e8861c09ae954338c59141d4889fb109cc27b37dbb67060376c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e35f03afb1e8861c09ae954338c59141d4889fb109cc27b37dbb67060376c28->enter($__internal_8e35f03afb1e8861c09ae954338c59141d4889fb109cc27b37dbb67060376c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1614d3057aee71ed5553048413434c635fa68905b987b93925dbf14e0a0a558d->leave($__internal_1614d3057aee71ed5553048413434c635fa68905b987b93925dbf14e0a0a558d_prof);

        
        $__internal_8e35f03afb1e8861c09ae954338c59141d4889fb109cc27b37dbb67060376c28->leave($__internal_8e35f03afb1e8861c09ae954338c59141d4889fb109cc27b37dbb67060376c28_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_39616277a520ecce2785bd3ba74889431495a55c16e90020d01561c730f7679a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39616277a520ecce2785bd3ba74889431495a55c16e90020d01561c730f7679a->enter($__internal_39616277a520ecce2785bd3ba74889431495a55c16e90020d01561c730f7679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b50181abdbbcf669580d25b7e384e24c8bcb99d49033a13f5b6c3121500ec172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50181abdbbcf669580d25b7e384e24c8bcb99d49033a13f5b6c3121500ec172->enter($__internal_b50181abdbbcf669580d25b7e384e24c8bcb99d49033a13f5b6c3121500ec172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_b50181abdbbcf669580d25b7e384e24c8bcb99d49033a13f5b6c3121500ec172->leave($__internal_b50181abdbbcf669580d25b7e384e24c8bcb99d49033a13f5b6c3121500ec172_prof);

        
        $__internal_39616277a520ecce2785bd3ba74889431495a55c16e90020d01561c730f7679a->leave($__internal_39616277a520ecce2785bd3ba74889431495a55c16e90020d01561c730f7679a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_date.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_date.html.twig");
    }
}
