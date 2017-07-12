<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig */
class __TwigTemplate_c228afc8b5510e0c4dbebef8ff6bca87add1e58bd6811c1c39c7c9bfbc9626fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig", 12);
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
        $__internal_d920dc41bee317e6b905d0ac935c2c1a9c20114e0b4c188615a2bbfd849255de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d920dc41bee317e6b905d0ac935c2c1a9c20114e0b4c188615a2bbfd849255de->enter($__internal_d920dc41bee317e6b905d0ac935c2c1a9c20114e0b4c188615a2bbfd849255de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig"));

        $__internal_107e7947dbe258c3f8910eb93b1df4a65a8057bc3fcbd391e1fef45dcf0b17ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107e7947dbe258c3f8910eb93b1df4a65a8057bc3fcbd391e1fef45dcf0b17ee->enter($__internal_107e7947dbe258c3f8910eb93b1df4a65a8057bc3fcbd391e1fef45dcf0b17ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d920dc41bee317e6b905d0ac935c2c1a9c20114e0b4c188615a2bbfd849255de->leave($__internal_d920dc41bee317e6b905d0ac935c2c1a9c20114e0b4c188615a2bbfd849255de_prof);

        
        $__internal_107e7947dbe258c3f8910eb93b1df4a65a8057bc3fcbd391e1fef45dcf0b17ee->leave($__internal_107e7947dbe258c3f8910eb93b1df4a65a8057bc3fcbd391e1fef45dcf0b17ee_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0eb9a3a3bf5178c6db341d19f0d501db54c635880161ac084978b8f77a2b8b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb9a3a3bf5178c6db341d19f0d501db54c635880161ac084978b8f77a2b8b73->enter($__internal_0eb9a3a3bf5178c6db341d19f0d501db54c635880161ac084978b8f77a2b8b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_59aaf4448af8f132c38ce9a5efc6793c6efec00cdcd1f5cbc886b3c84e5c80f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59aaf4448af8f132c38ce9a5efc6793c6efec00cdcd1f5cbc886b3c84e5c80f5->enter($__internal_59aaf4448af8f132c38ce9a5efc6793c6efec00cdcd1f5cbc886b3c84e5c80f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
            // line 17
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(            // line 18
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 19
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
                // line 20
                echo "            <a href=\"";
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
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 26
            echo "    ";
        }
        
        $__internal_59aaf4448af8f132c38ce9a5efc6793c6efec00cdcd1f5cbc886b3c84e5c80f5->leave($__internal_59aaf4448af8f132c38ce9a5efc6793c6efec00cdcd1f5cbc886b3c84e5c80f5_prof);

        
        $__internal_0eb9a3a3bf5178c6db341d19f0d501db54c635880161ac084978b8f77a2b8b73->leave($__internal_0eb9a3a3bf5178c6db341d19f0d501db54c635880161ac084978b8f77a2b8b73_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  71 => 24,  65 => 21,  60 => 20,  58 => 19,  57 => 18,  55 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% if value %}
        {% set route_name = field_description.options.route.name %}
        {% if field_description.hasAssociationAdmin
        and field_description.associationadmin.hasRoute(route_name)
        and field_description.associationadmin.hasAccess(route_name, value) %}
            <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
                {{ value|render_relation_element(field_description) }}
            </a>
        {% else %}
            {{ value|render_relation_element(field_description) }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\show_orm_many_to_one.html.twig");
    }
}
