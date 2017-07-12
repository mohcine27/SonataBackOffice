<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig */
class __TwigTemplate_d2245061f7f1dd7d017c757760082eac78b895853cdbad75e663b9c331c2398a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig", 12);
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
        $__internal_2fbbec569d5bf9b6c9d6b95fba6308af2dbc3e51685d9c0c6ebfe5a06337012b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fbbec569d5bf9b6c9d6b95fba6308af2dbc3e51685d9c0c6ebfe5a06337012b->enter($__internal_2fbbec569d5bf9b6c9d6b95fba6308af2dbc3e51685d9c0c6ebfe5a06337012b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig"));

        $__internal_19d56d494acf08d66945d4c6a41b6d9378922ee66c47f313301b23f92e3dde45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d56d494acf08d66945d4c6a41b6d9378922ee66c47f313301b23f92e3dde45->enter($__internal_19d56d494acf08d66945d4c6a41b6d9378922ee66c47f313301b23f92e3dde45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fbbec569d5bf9b6c9d6b95fba6308af2dbc3e51685d9c0c6ebfe5a06337012b->leave($__internal_2fbbec569d5bf9b6c9d6b95fba6308af2dbc3e51685d9c0c6ebfe5a06337012b_prof);

        
        $__internal_19d56d494acf08d66945d4c6a41b6d9378922ee66c47f313301b23f92e3dde45->leave($__internal_19d56d494acf08d66945d4c6a41b6d9378922ee66c47f313301b23f92e3dde45_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cc966820c75b4a418c1cad75e255e84068f421697d16b02508750451537fe1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc966820c75b4a418c1cad75e255e84068f421697d16b02508750451537fe1ed->enter($__internal_cc966820c75b4a418c1cad75e255e84068f421697d16b02508750451537fe1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_924e1cb2a497acc3c6f0edec9116d4e7ee5da89d2fdebe3718f987a28dd0f5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924e1cb2a497acc3c6f0edec9116d4e7ee5da89d2fdebe3718f987a28dd0f5fe->enter($__internal_924e1cb2a497acc3c6f0edec9116d4e7ee5da89d2fdebe3718f987a28dd0f5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(            // line 19
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 20
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"]), "method"))) {
                // line 21
                echo "            <li>
                <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                    ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                </a>
            </li>
        ";
            } else {
                // line 27
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            // line 29
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
";
        
        $__internal_924e1cb2a497acc3c6f0edec9116d4e7ee5da89d2fdebe3718f987a28dd0f5fe->leave($__internal_924e1cb2a497acc3c6f0edec9116d4e7ee5da89d2fdebe3718f987a28dd0f5fe_prof);

        
        $__internal_cc966820c75b4a418c1cad75e255e84068f421697d16b02508750451537fe1ed->leave($__internal_cc966820c75b4a418c1cad75e255e84068f421697d16b02508750451537fe1ed_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  84 => 29,  78 => 27,  71 => 23,  67 => 22,  64 => 21,  62 => 20,  61 => 19,  59 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    <ul class=\"sonata-ba-show-one-to-many\">
    {% set route_name = field_description.options.route.name %}
    {% for element in value%}
        {% if field_description.hasassociationadmin
        and field_description.associationadmin.hasRoute(route_name)
        and field_description.associationadmin.hasAccess(route_name, element) %}
            <li>
                <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
                    {{ element|render_relation_element(field_description) }}
                </a>
            </li>
        {% else %}
            <li>{{ element|render_relation_element(field_description) }}</li>
        {% endif %}
    {% endfor %}
    </ul>
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\show_orm_one_to_many.html.twig");
    }
}
