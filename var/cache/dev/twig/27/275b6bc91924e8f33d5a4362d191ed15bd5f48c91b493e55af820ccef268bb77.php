<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_2aec93ddf6b873ccfd51c0c940e3f54e1d40e08e57f5ffe1dc95293a22b0b073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", 12);
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
        $__internal_f4e42f2a3e6c1f7fe72d065430cfd451d9705c6756199871dc0510fa3e068c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e42f2a3e6c1f7fe72d065430cfd451d9705c6756199871dc0510fa3e068c2f->enter($__internal_f4e42f2a3e6c1f7fe72d065430cfd451d9705c6756199871dc0510fa3e068c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig"));

        $__internal_68d4020891a39d39b58b6ba6fd5663bb10672976de2cb3df82b77c7e35a76dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d4020891a39d39b58b6ba6fd5663bb10672976de2cb3df82b77c7e35a76dd9->enter($__internal_68d4020891a39d39b58b6ba6fd5663bb10672976de2cb3df82b77c7e35a76dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4e42f2a3e6c1f7fe72d065430cfd451d9705c6756199871dc0510fa3e068c2f->leave($__internal_f4e42f2a3e6c1f7fe72d065430cfd451d9705c6756199871dc0510fa3e068c2f_prof);

        
        $__internal_68d4020891a39d39b58b6ba6fd5663bb10672976de2cb3df82b77c7e35a76dd9->leave($__internal_68d4020891a39d39b58b6ba6fd5663bb10672976de2cb3df82b77c7e35a76dd9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f1ed30a7969a2b70c6ae689e43316e7e3c1c71e456667b80639b02e0ceac6da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ed30a7969a2b70c6ae689e43316e7e3c1c71e456667b80639b02e0ceac6da3->enter($__internal_f1ed30a7969a2b70c6ae689e43316e7e3c1c71e456667b80639b02e0ceac6da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3567c12d2e5573ac72ab658e2d30aec2ef39ab49345781b625e6ba392f156d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3567c12d2e5573ac72ab658e2d30aec2ef39ab49345781b625e6ba392f156d43->enter($__internal_3567c12d2e5573ac72ab658e2d30aec2ef39ab49345781b625e6ba392f156d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "            <li>
                ";
            // line 19
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(            // line 20
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 21
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"]), "method"))) {
                // line 22
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                        ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 26
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                ";
            }
            // line 28
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
";
        
        $__internal_3567c12d2e5573ac72ab658e2d30aec2ef39ab49345781b625e6ba392f156d43->leave($__internal_3567c12d2e5573ac72ab658e2d30aec2ef39ab49345781b625e6ba392f156d43_prof);

        
        $__internal_f1ed30a7969a2b70c6ae689e43316e7e3c1c71e456667b80639b02e0ceac6da3->leave($__internal_f1ed30a7969a2b70c6ae689e43316e7e3c1c71e456667b80639b02e0ceac6da3_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  83 => 28,  77 => 26,  71 => 23,  66 => 22,  64 => 21,  63 => 20,  62 => 19,  59 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    <ul class=\"sonata-ba-show-many-to-many\">
    {% set route_name = field_description.options.route.name %}
        {% for element in value %}
            <li>
                {% if field_description.hasassociationadmin
                and field_description.associationadmin.hasRoute(route_name)
                and field_description.associationadmin.hasAccess(route_name, element) %}
                    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
                        {{ element|render_relation_element(field_description) }}
                    </a>
                {% else %}
                    {{ element|render_relation_element(field_description) }}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\show_orm_many_to_many.html.twig");
    }
}
