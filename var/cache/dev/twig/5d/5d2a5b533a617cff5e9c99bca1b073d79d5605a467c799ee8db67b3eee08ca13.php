<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_7ac7bfc2e9862daad72c98f1e183d396e188a2215df46f9eba891b9625a44649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a6c5c78feba5bc97fc94ccb4887bcbdb9fa836f73a33098ce8d6638759db894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6c5c78feba5bc97fc94ccb4887bcbdb9fa836f73a33098ce8d6638759db894->enter($__internal_9a6c5c78feba5bc97fc94ccb4887bcbdb9fa836f73a33098ce8d6638759db894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_ea20e067354b0bd21144860df913d059cb819615f0d85a1609069edefb1c18a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea20e067354b0bd21144860df913d059cb819615f0d85a1609069edefb1c18a0->enter($__internal_ea20e067354b0bd21144860df913d059cb819615f0d85a1609069edefb1c18a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a6c5c78feba5bc97fc94ccb4887bcbdb9fa836f73a33098ce8d6638759db894->leave($__internal_9a6c5c78feba5bc97fc94ccb4887bcbdb9fa836f73a33098ce8d6638759db894_prof);

        
        $__internal_ea20e067354b0bd21144860df913d059cb819615f0d85a1609069edefb1c18a0->leave($__internal_ea20e067354b0bd21144860df913d059cb819615f0d85a1609069edefb1c18a0_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_710e5a0bab4aa9eb9f27b399e3eab02fb952a2d833f3c892c3a7e9913a57e99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710e5a0bab4aa9eb9f27b399e3eab02fb952a2d833f3c892c3a7e9913a57e99e->enter($__internal_710e5a0bab4aa9eb9f27b399e3eab02fb952a2d833f3c892c3a7e9913a57e99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_e2a76f3d54447ffa2ad4f1bc31b7aa7ff9d3c31af6a41a04b3889a6747bde2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a76f3d54447ffa2ad4f1bc31b7aa7ff9d3c31af6a41a04b3889a6747bde2e5->enter($__internal_e2a76f3d54447ffa2ad4f1bc31b7aa7ff9d3c31af6a41a04b3889a6747bde2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_e2a76f3d54447ffa2ad4f1bc31b7aa7ff9d3c31af6a41a04b3889a6747bde2e5->leave($__internal_e2a76f3d54447ffa2ad4f1bc31b7aa7ff9d3c31af6a41a04b3889a6747bde2e5_prof);

        
        $__internal_710e5a0bab4aa9eb9f27b399e3eab02fb952a2d833f3c892c3a7e9913a57e99e->leave($__internal_710e5a0bab4aa9eb9f27b399e3eab02fb952a2d833f3c892c3a7e9913a57e99e_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_320d0688c96ee08c2b1329027caa50c557669a39538caab7d457a8db9cb7d2c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320d0688c96ee08c2b1329027caa50c557669a39538caab7d457a8db9cb7d2c3->enter($__internal_320d0688c96ee08c2b1329027caa50c557669a39538caab7d457a8db9cb7d2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_252069d16644e8dc59eb9752a65630dea9f4f1466e30be940cff47082f494ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252069d16644e8dc59eb9752a65630dea9f4f1466e30be940cff47082f494ddc->enter($__internal_252069d16644e8dc59eb9752a65630dea9f4f1466e30be940cff47082f494ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_252069d16644e8dc59eb9752a65630dea9f4f1466e30be940cff47082f494ddc->leave($__internal_252069d16644e8dc59eb9752a65630dea9f4f1466e30be940cff47082f494ddc_prof);

        
        $__internal_320d0688c96ee08c2b1329027caa50c557669a39538caab7d457a8db9cb7d2c3->leave($__internal_320d0688c96ee08c2b1329027caa50c557669a39538caab7d457a8db9cb7d2c3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  103 => 31,  97 => 29,  94 => 28,  91 => 27,  82 => 26,  72 => 23,  65 => 21,  60 => 20,  57 => 19,  48 => 18,  38 => 12,  35 => 17,  33 => 15,  31 => 14,  19 => 12,);
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

{% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.hasAccess('edit', object) %}
{% set xEditableType = field_description.type|sonata_xeditable_type %}

{% if isEditable and xEditableType %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
    {% spaceless %}
        {% if value %}
            <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
        {% else %}
            <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
        {% endif %}
    {% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_boolean.html.twig");
    }
}
