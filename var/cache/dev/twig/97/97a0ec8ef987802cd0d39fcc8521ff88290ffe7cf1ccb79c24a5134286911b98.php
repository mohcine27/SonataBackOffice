<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig */
class __TwigTemplate_75e71e499828b6523871910ffc1c7e2be4ad9f2b9acbe7890908a1d37798bbe8 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5444136932edb3e926103ee0237c23ca5894b5899a89982c8dfadad8379ba1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5444136932edb3e926103ee0237c23ca5894b5899a89982c8dfadad8379ba1de->enter($__internal_5444136932edb3e926103ee0237c23ca5894b5899a89982c8dfadad8379ba1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig"));

        $__internal_0b97d79c8c5342a8c5cf1de0b221b543c2dc0f91769560dbf59de2c72ec165b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b97d79c8c5342a8c5cf1de0b221b543c2dc0f91769560dbf59de2c72ec165b9->enter($__internal_0b97d79c8c5342a8c5cf1de0b221b543c2dc0f91769560dbf59de2c72ec165b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5444136932edb3e926103ee0237c23ca5894b5899a89982c8dfadad8379ba1de->leave($__internal_5444136932edb3e926103ee0237c23ca5894b5899a89982c8dfadad8379ba1de_prof);

        
        $__internal_0b97d79c8c5342a8c5cf1de0b221b543c2dc0f91769560dbf59de2c72ec165b9->leave($__internal_0b97d79c8c5342a8c5cf1de0b221b543c2dc0f91769560dbf59de2c72ec165b9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9f957aa46855acebe2afdb372c09cf3c0962d95b74e55c8a15c9a4d9c38a5554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f957aa46855acebe2afdb372c09cf3c0962d95b74e55c8a15c9a4d9c38a5554->enter($__internal_9f957aa46855acebe2afdb372c09cf3c0962d95b74e55c8a15c9a4d9c38a5554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_bbc3f90f0d070f434d5a85aa97f497ef0ee97c2c03d59736026629f17f0b95dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc3f90f0d070f434d5a85aa97f497ef0ee97c2c03d59736026629f17f0b95dd->enter($__internal_bbc3f90f0d070f434d5a85aa97f497ef0ee97c2c03d59736026629f17f0b95dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_bbc3f90f0d070f434d5a85aa97f497ef0ee97c2c03d59736026629f17f0b95dd->leave($__internal_bbc3f90f0d070f434d5a85aa97f497ef0ee97c2c03d59736026629f17f0b95dd_prof);

        
        $__internal_9f957aa46855acebe2afdb372c09cf3c0962d95b74e55c8a15c9a4d9c38a5554->leave($__internal_9f957aa46855acebe2afdb372c09cf3c0962d95b74e55c8a15c9a4d9c38a5554_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  57 => 20,  55 => 19,  54 => 18,  53 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin
    and field_description.associationadmin.id(value)
    and field_description.associationadmin.hasRoute(route_name)
    and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">{{ value|render_relation_element(field_description) }}</a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_one_to_one.html.twig");
    }
}
