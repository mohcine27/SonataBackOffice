<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig */
class __TwigTemplate_744413b8d098dbd0a04acaca86de2de890bb0c97dbfab16fdb5f49186ee5a38a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig", 12);
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
        $__internal_dd13c0051c02973ba9e1d4657cf81d9c19c921d2651faaac08f1272128287862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd13c0051c02973ba9e1d4657cf81d9c19c921d2651faaac08f1272128287862->enter($__internal_dd13c0051c02973ba9e1d4657cf81d9c19c921d2651faaac08f1272128287862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig"));

        $__internal_d9b66cd799b985b922571b44d900dcdec39de6714b076b94fda859f280990df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b66cd799b985b922571b44d900dcdec39de6714b076b94fda859f280990df4->enter($__internal_d9b66cd799b985b922571b44d900dcdec39de6714b076b94fda859f280990df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd13c0051c02973ba9e1d4657cf81d9c19c921d2651faaac08f1272128287862->leave($__internal_dd13c0051c02973ba9e1d4657cf81d9c19c921d2651faaac08f1272128287862_prof);

        
        $__internal_d9b66cd799b985b922571b44d900dcdec39de6714b076b94fda859f280990df4->leave($__internal_d9b66cd799b985b922571b44d900dcdec39de6714b076b94fda859f280990df4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8a19b94f45a5e5fa1e8df98e919932b7a2a466f605aa5ad4acf54304ea4f5f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a19b94f45a5e5fa1e8df98e919932b7a2a466f605aa5ad4acf54304ea4f5f10->enter($__internal_8a19b94f45a5e5fa1e8df98e919932b7a2a466f605aa5ad4acf54304ea4f5f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5d3cba465c22f63946fc29bd311f11b429e3c486d1812656f45878d8b6222f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3cba465c22f63946fc29bd311f11b429e3c486d1812656f45878d8b6222f48->enter($__internal_5d3cba465c22f63946fc29bd311f11b429e3c486d1812656f45878d8b6222f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute(        // line 18
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(        // line 19
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
            // line 20
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 24
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_5d3cba465c22f63946fc29bd311f11b429e3c486d1812656f45878d8b6222f48->leave($__internal_5d3cba465c22f63946fc29bd311f11b429e3c486d1812656f45878d8b6222f48_prof);

        
        $__internal_8a19b94f45a5e5fa1e8df98e919932b7a2a466f605aa5ad4acf54304ea4f5f10->leave($__internal_8a19b94f45a5e5fa1e8df98e919932b7a2a466f605aa5ad4acf54304ea4f5f10_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  63 => 21,  58 => 20,  56 => 19,  55 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin
    and field_description.associationadmin.id(value)
    and field_description.associationadmin.hasRoute(route_name)
    and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
            {{ value|render_relation_element(field_description) }}
        </a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\show_orm_one_to_one.html.twig");
    }
}
