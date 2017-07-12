<?php

/* SonataAdminBundle:CRUD:show_html.html.twig */
class __TwigTemplate_90bd3b30530c7d85c0848a4e344d96e9be1570e91b76ab26126a97db037badfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_html.html.twig", 1);
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
        $__internal_2cb8716dfc46bf66c3228b52d651e06e0bc013311c0fda1870285aa84b7faf3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb8716dfc46bf66c3228b52d651e06e0bc013311c0fda1870285aa84b7faf3e->enter($__internal_2cb8716dfc46bf66c3228b52d651e06e0bc013311c0fda1870285aa84b7faf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $__internal_5022bc9cce41f07eab32224b1209e2f0ea0fbf348108a41d1f2d78610f2797dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5022bc9cce41f07eab32224b1209e2f0ea0fbf348108a41d1f2d78610f2797dd->enter($__internal_5022bc9cce41f07eab32224b1209e2f0ea0fbf348108a41d1f2d78610f2797dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cb8716dfc46bf66c3228b52d651e06e0bc013311c0fda1870285aa84b7faf3e->leave($__internal_2cb8716dfc46bf66c3228b52d651e06e0bc013311c0fda1870285aa84b7faf3e_prof);

        
        $__internal_5022bc9cce41f07eab32224b1209e2f0ea0fbf348108a41d1f2d78610f2797dd->leave($__internal_5022bc9cce41f07eab32224b1209e2f0ea0fbf348108a41d1f2d78610f2797dd_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_1fc13a3738607fbca263fcb445511fe63229339b7fb979b7c9e9df389f14bba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc13a3738607fbca263fcb445511fe63229339b7fb979b7c9e9df389f14bba8->enter($__internal_1fc13a3738607fbca263fcb445511fe63229339b7fb979b7c9e9df389f14bba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_81c761316d1511ae4afaf95b8bf2e1b239c0f5b5a1601db214e3c845a4dcfb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c761316d1511ae4afaf95b8bf2e1b239c0f5b5a1601db214e3c845a4dcfb08->enter($__internal_81c761316d1511ae4afaf95b8bf2e1b239c0f5b5a1601db214e3c845a4dcfb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), (isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")), (isset($context["preserve"]) ? $context["preserve"] : $this->getContext($context, "preserve")), (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                }
                // line 17
                echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_81c761316d1511ae4afaf95b8bf2e1b239c0f5b5a1601db214e3c845a4dcfb08->leave($__internal_81c761316d1511ae4afaf95b8bf2e1b239c0f5b5a1601db214e3c845a4dcfb08_prof);

        
        $__internal_1fc13a3738607fbca263fcb445511fe63229339b7fb979b7c9e9df389f14bba8->leave($__internal_1fc13a3738607fbca263fcb445511fe63229339b7fb979b7c9e9df389f14bba8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  77 => 17,  74 => 15,  72 => 14,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_html.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_html.html.twig");
    }
}
