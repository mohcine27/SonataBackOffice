<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_46e26d0357e7507f42338875001ff63ee938a9199b16e0549421dfedf3b48f58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fa142c40a8f421a6882279ad09294a2536e388974fc84f21ce52de3d6c10e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa142c40a8f421a6882279ad09294a2536e388974fc84f21ce52de3d6c10e66->enter($__internal_9fa142c40a8f421a6882279ad09294a2536e388974fc84f21ce52de3d6c10e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $__internal_beb8ebc735149a3caf7e0a37f2a1016f438451ba98f0a1634275b654c26bf775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb8ebc735149a3caf7e0a37f2a1016f438451ba98f0a1634275b654c26bf775->enter($__internal_beb8ebc735149a3caf7e0a37f2a1016f438451ba98f0a1634275b654c26bf775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fa142c40a8f421a6882279ad09294a2536e388974fc84f21ce52de3d6c10e66->leave($__internal_9fa142c40a8f421a6882279ad09294a2536e388974fc84f21ce52de3d6c10e66_prof);

        
        $__internal_beb8ebc735149a3caf7e0a37f2a1016f438451ba98f0a1634275b654c26bf775->leave($__internal_beb8ebc735149a3caf7e0a37f2a1016f438451ba98f0a1634275b654c26bf775_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2b0bcd1a9860cdcb02480a2ced18182c6cfaa3ab11dc94c2a73a64808ab2d711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0bcd1a9860cdcb02480a2ced18182c6cfaa3ab11dc94c2a73a64808ab2d711->enter($__internal_2b0bcd1a9860cdcb02480a2ced18182c6cfaa3ab11dc94c2a73a64808ab2d711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5b5ed91e2518d6311e310cac95bb51df00d493081cf2e35bd4d0a108bd25403b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5ed91e2518d6311e310cac95bb51df00d493081cf2e35bd4d0a108bd25403b->enter($__internal_5b5ed91e2518d6311e310cac95bb51df00d493081cf2e35bd4d0a108bd25403b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"]), "method")) {
                    // line 19
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 21
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 23
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 24
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 27
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 28
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        
        $__internal_5b5ed91e2518d6311e310cac95bb51df00d493081cf2e35bd4d0a108bd25403b->leave($__internal_5b5ed91e2518d6311e310cac95bb51df00d493081cf2e35bd4d0a108bd25403b_prof);

        
        $__internal_2b0bcd1a9860cdcb02480a2ced18182c6cfaa3ab11dc94c2a73a64808ab2d711->leave($__internal_2b0bcd1a9860cdcb02480a2ced18182c6cfaa3ab11dc94c2a73a64808ab2d711_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_b0d31a0b17b5c1b24c04c9585e5717f4421f0cabdb37330855cfae857f2440d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d31a0b17b5c1b24c04c9585e5717f4421f0cabdb37330855cfae857f2440d8->enter($__internal_b0d31a0b17b5c1b24c04c9585e5717f4421f0cabdb37330855cfae857f2440d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_f78e66da1a084da5a9b6c6c08ff32af0d775f35db2fa95f6883f081d05ff900d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78e66da1a084da5a9b6c6c08ff32af0d775f35db2fa95f6883f081d05ff900d->enter($__internal_f78e66da1a084da5a9b6c6c08ff32af0d775f35db2fa95f6883f081d05ff900d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_f78e66da1a084da5a9b6c6c08ff32af0d775f35db2fa95f6883f081d05ff900d->leave($__internal_f78e66da1a084da5a9b6c6c08ff32af0d775f35db2fa95f6883f081d05ff900d_prof);

        
        $__internal_b0d31a0b17b5c1b24c04c9585e5717f4421f0cabdb37330855cfae857f2440d8->leave($__internal_b0d31a0b17b5c1b24c04c9585e5717f4421f0cabdb37330855cfae857f2440d8_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_3856a0896ed3cc93bd6e288996a99411d3a70977a06d51cad2e5d591142f2432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3856a0896ed3cc93bd6e288996a99411d3a70977a06d51cad2e5d591142f2432->enter($__internal_3856a0896ed3cc93bd6e288996a99411d3a70977a06d51cad2e5d591142f2432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_874bb7a8113d4028e51508d155bb5f29edd88504a9b484901be2fdaea087b2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874bb7a8113d4028e51508d155bb5f29edd88504a9b484901be2fdaea087b2df->enter($__internal_874bb7a8113d4028e51508d155bb5f29edd88504a9b484901be2fdaea087b2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_874bb7a8113d4028e51508d155bb5f29edd88504a9b484901be2fdaea087b2df->leave($__internal_874bb7a8113d4028e51508d155bb5f29edd88504a9b484901be2fdaea087b2df_prof);

        
        $__internal_3856a0896ed3cc93bd6e288996a99411d3a70977a06d51cad2e5d591142f2432->leave($__internal_3856a0896ed3cc93bd6e288996a99411d3a70977a06d51cad2e5d591142f2432_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 39,  177 => 38,  167 => 35,  165 => 34,  161 => 33,  152 => 32,  141 => 29,  127 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value %}
            {%- if field_description.associationadmin.hasAccess(route_name, element) -%}
                {{ block('relation_link') }}
            {%- else -%}
                {{ block('relation_value') }}
            {%- endif -%}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% else %}
        {% for element in value %}
            {{ block('relation_value') }}{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}

{%- block relation_link -%}
    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
        {{- element|render_relation_element(field_description) -}}
    </a>
{%- endblock -%}

{%- block relation_value -%}
    {{- element|render_relation_element(field_description) -}}
{%- endblock -%}
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_one_to_many.html.twig");
    }
}
