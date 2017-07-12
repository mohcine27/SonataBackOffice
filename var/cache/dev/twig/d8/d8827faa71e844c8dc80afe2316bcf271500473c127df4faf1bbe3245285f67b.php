<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_e2c8dd9157540a3e8894dab54dc3c429f77d8b6fc41ae844193c02d5e456ba57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_bb1a9b1a1fc5a7d75dc154eb3afa8580bed742969168388b55bbefd690b5e184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1a9b1a1fc5a7d75dc154eb3afa8580bed742969168388b55bbefd690b5e184->enter($__internal_bb1a9b1a1fc5a7d75dc154eb3afa8580bed742969168388b55bbefd690b5e184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $__internal_12bdf8cf64422597470714c15a14dba266f94e6c36b4138f832d3c78025d46b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bdf8cf64422597470714c15a14dba266f94e6c36b4138f832d3c78025d46b2->enter($__internal_12bdf8cf64422597470714c15a14dba266f94e6c36b4138f832d3c78025d46b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb1a9b1a1fc5a7d75dc154eb3afa8580bed742969168388b55bbefd690b5e184->leave($__internal_bb1a9b1a1fc5a7d75dc154eb3afa8580bed742969168388b55bbefd690b5e184_prof);

        
        $__internal_12bdf8cf64422597470714c15a14dba266f94e6c36b4138f832d3c78025d46b2->leave($__internal_12bdf8cf64422597470714c15a14dba266f94e6c36b4138f832d3c78025d46b2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a67df5acf3d7c0515d2c70d816c8883ff80a67fb5fd847fa899e8957ef13032d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a67df5acf3d7c0515d2c70d816c8883ff80a67fb5fd847fa899e8957ef13032d->enter($__internal_a67df5acf3d7c0515d2c70d816c8883ff80a67fb5fd847fa899e8957ef13032d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_cff3824b54b618ecb5c3b0a0c87dbdcd15c7bd6671cfad783628455c0e34e85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff3824b54b618ecb5c3b0a0c87dbdcd15c7bd6671cfad783628455c0e34e85b->enter($__internal_cff3824b54b618ecb5c3b0a0c87dbdcd15c7bd6671cfad783628455c0e34e85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_cff3824b54b618ecb5c3b0a0c87dbdcd15c7bd6671cfad783628455c0e34e85b->leave($__internal_cff3824b54b618ecb5c3b0a0c87dbdcd15c7bd6671cfad783628455c0e34e85b_prof);

        
        $__internal_a67df5acf3d7c0515d2c70d816c8883ff80a67fb5fd847fa899e8957ef13032d->leave($__internal_a67df5acf3d7c0515d2c70d816c8883ff80a67fb5fd847fa899e8957ef13032d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_datetime.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_datetime.html.twig");
    }
}
