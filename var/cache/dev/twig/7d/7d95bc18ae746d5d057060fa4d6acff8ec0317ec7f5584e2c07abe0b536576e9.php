<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig */
class __TwigTemplate_a3660a29b07644bab23e8397e9fbf86551c5a46cbf401286422654f382e83539 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09a9a1ebd9638e38665c0ddb65220c10a0bd9af495f46cd803fb40aeceaa75f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a9a1ebd9638e38665c0ddb65220c10a0bd9af495f46cd803fb40aeceaa75f1->enter($__internal_09a9a1ebd9638e38665c0ddb65220c10a0bd9af495f46cd803fb40aeceaa75f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig"));

        $__internal_fa415ebdc735b40bf72958af932341957f422526f34bc82e7cf30fc7898fe679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa415ebdc735b40bf72958af932341957f422526f34bc82e7cf30fc7898fe679->enter($__internal_fa415ebdc735b40bf72958af932341957f422526f34bc82e7cf30fc7898fe679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a9a1ebd9638e38665c0ddb65220c10a0bd9af495f46cd803fb40aeceaa75f1->leave($__internal_09a9a1ebd9638e38665c0ddb65220c10a0bd9af495f46cd803fb40aeceaa75f1_prof);

        
        $__internal_fa415ebdc735b40bf72958af932341957f422526f34bc82e7cf30fc7898fe679->leave($__internal_fa415ebdc735b40bf72958af932341957f422526f34bc82e7cf30fc7898fe679_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_30b6234fee150c4b913443665f1613413322fbe97a6e816c6ff3c50dd02ea946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b6234fee150c4b913443665f1613413322fbe97a6e816c6ff3c50dd02ea946->enter($__internal_30b6234fee150c4b913443665f1613413322fbe97a6e816c6ff3c50dd02ea946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_30757f54d1b63be1aa109269c9ecf1724fd704d9be292c7075fb3703c2eb1346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30757f54d1b63be1aa109269c9ecf1724fd704d9be292c7075fb3703c2eb1346->enter($__internal_30757f54d1b63be1aa109269c9ecf1724fd704d9be292c7075fb3703c2eb1346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
            // line 17
            echo "        ";
            if (((( !(($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array()), false)) : (false)) && $this->getAttribute(            // line 18
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array())) && $this->getAttribute($this->getAttribute(            // line 19
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 20
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
                // line 22
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 26
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 28
            echo "    ";
        }
        
        $__internal_30757f54d1b63be1aa109269c9ecf1724fd704d9be292c7075fb3703c2eb1346->leave($__internal_30757f54d1b63be1aa109269c9ecf1724fd704d9be292c7075fb3703c2eb1346_prof);

        
        $__internal_30b6234fee150c4b913443665f1613413322fbe97a6e816c6ff3c50dd02ea946->leave($__internal_30b6234fee150c4b913443665f1613413322fbe97a6e816c6ff3c50dd02ea946_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  71 => 26,  65 => 23,  60 => 22,  58 => 20,  57 => 19,  56 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% if value %}
        {% set route_name = field_description.options.route.name %}
        {% if not field_description.options.identifier|default(false) and
              field_description.hasAssociationAdmin and
              field_description.associationadmin.hasRoute(route_name) and
              field_description.associationadmin.hasAccess(route_name, value)
        %}
            <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
                {{ value|render_relation_element(field_description) }}
            </a>
        {% else %}
            {{ value|render_relation_element(field_description) }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_many_to_one.html.twig");
    }
}
