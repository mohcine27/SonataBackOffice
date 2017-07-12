<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_c97c1930acc98273d4badbc51b6aa7187e1a2d4cbc19c321e112a1d1b7a39bd0 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3809f986dad5a780b4a9e064202dfd701c6a6f341c73e591da5a528661a50f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3809f986dad5a780b4a9e064202dfd701c6a6f341c73e591da5a528661a50f17->enter($__internal_3809f986dad5a780b4a9e064202dfd701c6a6f341c73e591da5a528661a50f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $__internal_fa69d5747fbaaef306f6a26b188bfea1344b715f592ea340de2a6afad4df63e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa69d5747fbaaef306f6a26b188bfea1344b715f592ea340de2a6afad4df63e1->enter($__internal_fa69d5747fbaaef306f6a26b188bfea1344b715f592ea340de2a6afad4df63e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3809f986dad5a780b4a9e064202dfd701c6a6f341c73e591da5a528661a50f17->leave($__internal_3809f986dad5a780b4a9e064202dfd701c6a6f341c73e591da5a528661a50f17_prof);

        
        $__internal_fa69d5747fbaaef306f6a26b188bfea1344b715f592ea340de2a6afad4df63e1->leave($__internal_fa69d5747fbaaef306f6a26b188bfea1344b715f592ea340de2a6afad4df63e1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b0a32615859b031dcde32818bc9abcae5d083b7a58f8c01312d32fa6ed050565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a32615859b031dcde32818bc9abcae5d083b7a58f8c01312d32fa6ed050565->enter($__internal_b0a32615859b031dcde32818bc9abcae5d083b7a58f8c01312d32fa6ed050565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_009a2c2332a32227fe71c79d201fc4b7baf003197ac47b0c8220841998799e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009a2c2332a32227fe71c79d201fc4b7baf003197ac47b0c8220841998799e5a->enter($__internal_009a2c2332a32227fe71c79d201fc4b7baf003197ac47b0c8220841998799e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
                echo "
            ";
                // line 28
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
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
            // line 30
            echo "    ";
        }
        
        $__internal_009a2c2332a32227fe71c79d201fc4b7baf003197ac47b0c8220841998799e5a->leave($__internal_009a2c2332a32227fe71c79d201fc4b7baf003197ac47b0c8220841998799e5a_prof);

        
        $__internal_b0a32615859b031dcde32818bc9abcae5d083b7a58f8c01312d32fa6ed050565->leave($__internal_b0a32615859b031dcde32818bc9abcae5d083b7a58f8c01312d32fa6ed050565_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_3561789f913e3d6951726ef5c7efaef512b667170cf3f48e38ad3a43efab82b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3561789f913e3d6951726ef5c7efaef512b667170cf3f48e38ad3a43efab82b2->enter($__internal_3561789f913e3d6951726ef5c7efaef512b667170cf3f48e38ad3a43efab82b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_d5df80d2a06a570916f59533183e79a5874f2203505a2210f8e4a9ba87bfbc7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5df80d2a06a570916f59533183e79a5874f2203505a2210f8e4a9ba87bfbc7b->enter($__internal_d5df80d2a06a570916f59533183e79a5874f2203505a2210f8e4a9ba87bfbc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        // line 36
        echo "</a>";
        
        $__internal_d5df80d2a06a570916f59533183e79a5874f2203505a2210f8e4a9ba87bfbc7b->leave($__internal_d5df80d2a06a570916f59533183e79a5874f2203505a2210f8e4a9ba87bfbc7b_prof);

        
        $__internal_3561789f913e3d6951726ef5c7efaef512b667170cf3f48e38ad3a43efab82b2->leave($__internal_3561789f913e3d6951726ef5c7efaef512b667170cf3f48e38ad3a43efab82b2_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_bae64540d20eb7f63c42f4e28cb8931f774836ba223aa065a93bef7123f95a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae64540d20eb7f63c42f4e28cb8931f774836ba223aa065a93bef7123f95a44->enter($__internal_bae64540d20eb7f63c42f4e28cb8931f774836ba223aa065a93bef7123f95a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_37043d9bd0464ed588bda2d4da6b42aed975189886d19a026b472837ffde30ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37043d9bd0464ed588bda2d4da6b42aed975189886d19a026b472837ffde30ea->enter($__internal_37043d9bd0464ed588bda2d4da6b42aed975189886d19a026b472837ffde30ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_37043d9bd0464ed588bda2d4da6b42aed975189886d19a026b472837ffde30ea->leave($__internal_37043d9bd0464ed588bda2d4da6b42aed975189886d19a026b472837ffde30ea_prof);

        
        $__internal_bae64540d20eb7f63c42f4e28cb8931f774836ba223aa065a93bef7123f95a44->leave($__internal_bae64540d20eb7f63c42f4e28cb8931f774836ba223aa065a93bef7123f95a44_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 40,  180 => 39,  170 => 36,  168 => 35,  164 => 34,  155 => 33,  144 => 30,  130 => 29,  126 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
        {% for element in value%}
            {{ block('relation_value') }}
            {% if not loop.last %}, {% endif %}
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
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_many_to_many.html.twig");
    }
}
