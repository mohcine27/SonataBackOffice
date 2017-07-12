<?php

/* SonataAdminBundle:Form:silex_form_div_layout.html.twig */
class __TwigTemplate_0d08c7a5835d2f1b1a91c17b1c384435b5a0765e8509222c453fcd1a24dea70a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc02002c4dcb6cf440ba2b1403f0eeefa45dfccf13442c3a784a6ba9f56c712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc02002c4dcb6cf440ba2b1403f0eeefa45dfccf13442c3a784a6ba9f56c712->enter($__internal_0fc02002c4dcb6cf440ba2b1403f0eeefa45dfccf13442c3a784a6ba9f56c712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:silex_form_div_layout.html.twig"));

        $__internal_6de410835c28e3e60ee35b8cbab54537fe7374af21a8b797a415f00c09c50203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de410835c28e3e60ee35b8cbab54537fe7374af21a8b797a415f00c09c50203->enter($__internal_6de410835c28e3e60ee35b8cbab54537fe7374af21a8b797a415f00c09c50203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:silex_form_div_layout.html.twig"));

        // line 2
        echo "
";
        // line 7
        echo "
";
        
        $__internal_0fc02002c4dcb6cf440ba2b1403f0eeefa45dfccf13442c3a784a6ba9f56c712->leave($__internal_0fc02002c4dcb6cf440ba2b1403f0eeefa45dfccf13442c3a784a6ba9f56c712_prof);

        
        $__internal_6de410835c28e3e60ee35b8cbab54537fe7374af21a8b797a415f00c09c50203->leave($__internal_6de410835c28e3e60ee35b8cbab54537fe7374af21a8b797a415f00c09c50203_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{#
    This file doesn't seem to be used anymore ; commenting it for now in order not to mess with user's configurations.
    TODO: Remove it and all of its references
#}

{#
{% block choice_widget %}
{% spaceless %}
    {% if expanded %}
        <ul {{ block('widget_container_attributes') }} class=\"inputs-list\">
        {% for child in form %}
            <li>
                {% set form_widget_content %}
                    {{ form_widget(child) }}
                {% endset %}
                {{ form_label(child, null, { 'in_list_checkbox' : true, 'widget' : form_widget_content } ) }}
            </li>
        {% endfor %}
        </ul>
    {% else %}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {% if empty_value is not none %}
            <option value=\"\">{{ empty_value|trans({}, translation_domain) }}</option>
        {% endif %}
        {% if preferred_choices|length > 0 %}
            {% set options = preferred_choices %}
            {{ block('choice_widget_options') }}
            {% if choices|length > 0 and separator is not none %}
                <option disabled=\"disabled\">{{ separator }}</option>
            {% endif %}
        {% endif %}
        {% set options = choices %}
        {{ block('choice_widget_options') }}
    </select>
    {% endif %}
{% endspaceless %}
{% endblock choice_widget %}

{% block form_widget_simple %}
{% spaceless %}
    {% set type = type|default('text') %}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} value=\"{{ value }}\">
{% endspaceless %}
{% endblock form_widget_simple %}

&#123;&#35; Labels &#35;&#125;

{% block form_label %}
{% spaceless %}
    {% if not compound %}
        {% set attr = attr|merge({'for': id}) %}
    {% endif %}
    {% if required %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' required'}) %}
    {% endif %}
    {% if in_list_checkbox is defined and in_list_checkbox and widget is defined %}
        <label{% for attrname,attrvalue in attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>
            {{ widget|raw }}
            <span>
                {{ label|trans({}, translation_domain) }}
            </span>
        </label>
    {% else %}
        <label{% for attrname,attrvalue in attr %} {{attrname}}=\"{{attrvalue}}\"{% endfor %}>{{ label|trans({}, translation_domain) }}</label>
    {% endif %}
{% endspaceless %}
{% endblock %}

&#123;&#35; Rows &#35;&#125;

{% block form_row %}
{% spaceless %}
    <div class=\"form-group {{ (0 < form_errors(form)|length)? 'has-error':'' }} \">
        {{ form_label(form, label|default(null)) }}
        <div class=\"col-sm-10 col-md-5\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock form_row %}

&#123;&#35; Misc &#35;&#125;

{% block form_errors %}
{% spaceless %}
    {% if errors|length > 0 %}
        {% if not form.parent  or 'repeated' in form.vars['block_prefixes'] %}
            <div class=\"form-group has-error\">
        {% endif %}
        <span class=\"help-block\">
            {% for error in errors %}
                {% if loop.first %}
                    {{ error.messageTemplate|trans(error.messageParameters, 'validators') }}
                {% endif %}
            {% endfor %}
        </span>
        {% if not form.parent  or 'repeated' in form.vars['block_prefixes'] %}
            </div>
        {% endif %}
    {% endif %}
{% endspaceless %}
{% endblock form_errors %}
#}
", "SonataAdminBundle:Form:silex_form_div_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Form\\silex_form_div_layout.html.twig");
    }
}
