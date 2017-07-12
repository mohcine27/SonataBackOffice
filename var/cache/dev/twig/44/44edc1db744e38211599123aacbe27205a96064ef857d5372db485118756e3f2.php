<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_64ff80cf0673db2543b34839423740988904ffffd6994689e75dbb507971c47f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb1b00cb2f7323455bae175ca65c4da3f5df5a0348e738fc628a2e2d79648555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1b00cb2f7323455bae175ca65c4da3f5df5a0348e738fc628a2e2d79648555->enter($__internal_bb1b00cb2f7323455bae175ca65c4da3f5df5a0348e738fc628a2e2d79648555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $__internal_bde9f7730d6980fa4a73e38ec54dd1a3367f1f770b7e69669a90b9e78016617b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde9f7730d6980fa4a73e38ec54dd1a3367f1f770b7e69669a90b9e78016617b->enter($__internal_bde9f7730d6980fa4a73e38ec54dd1a3367f1f770b7e69669a90b9e78016617b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb1b00cb2f7323455bae175ca65c4da3f5df5a0348e738fc628a2e2d79648555->leave($__internal_bb1b00cb2f7323455bae175ca65c4da3f5df5a0348e738fc628a2e2d79648555_prof);

        
        $__internal_bde9f7730d6980fa4a73e38ec54dd1a3367f1f770b7e69669a90b9e78016617b->leave($__internal_bde9f7730d6980fa4a73e38ec54dd1a3367f1f770b7e69669a90b9e78016617b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1588de597d8f85240d85cf6c38a35cc1e05beb74eb7b2d18bc2c6dc3fe2cebf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1588de597d8f85240d85cf6c38a35cc1e05beb74eb7b2d18bc2c6dc3fe2cebf7->enter($__internal_1588de597d8f85240d85cf6c38a35cc1e05beb74eb7b2d18bc2c6dc3fe2cebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_beb9616891df4f397575efc4e69cc5a19460604995cb4c2f66616b3c93c47d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb9616891df4f397575efc4e69cc5a19460604995cb4c2f66616b3c93c47d3b->enter($__internal_beb9616891df4f397575efc4e69cc5a19460604995cb4c2f66616b3c93c47d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_beb9616891df4f397575efc4e69cc5a19460604995cb4c2f66616b3c93c47d3b->leave($__internal_beb9616891df4f397575efc4e69cc5a19460604995cb4c2f66616b3c93c47d3b_prof);

        
        $__internal_1588de597d8f85240d85cf6c38a35cc1e05beb74eb7b2d18bc2c6dc3fe2cebf7->leave($__internal_1588de597d8f85240d85cf6c38a35cc1e05beb74eb7b2d18bc2c6dc3fe2cebf7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_time.html.twig");
    }
}
