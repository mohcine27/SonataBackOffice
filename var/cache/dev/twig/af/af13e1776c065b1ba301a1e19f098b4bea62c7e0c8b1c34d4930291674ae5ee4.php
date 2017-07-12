<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_6fcad951afde68c8aace5d61e3503efd562dbab7e580a8c30f4c93623314aca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_386a8b68b58734359deea5e8affe1613a9e613ef1a106be4bc0064f6d971bf5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386a8b68b58734359deea5e8affe1613a9e613ef1a106be4bc0064f6d971bf5b->enter($__internal_386a8b68b58734359deea5e8affe1613a9e613ef1a106be4bc0064f6d971bf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_26a8a3209a571fe89bddff22248795876babcd2435868bcc03bab0678f7171e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a8a3209a571fe89bddff22248795876babcd2435868bcc03bab0678f7171e8->enter($__internal_26a8a3209a571fe89bddff22248795876babcd2435868bcc03bab0678f7171e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_386a8b68b58734359deea5e8affe1613a9e613ef1a106be4bc0064f6d971bf5b->leave($__internal_386a8b68b58734359deea5e8affe1613a9e613ef1a106be4bc0064f6d971bf5b_prof);

        
        $__internal_26a8a3209a571fe89bddff22248795876babcd2435868bcc03bab0678f7171e8->leave($__internal_26a8a3209a571fe89bddff22248795876babcd2435868bcc03bab0678f7171e8_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_37558a8ca467df0ae6235943e5631110242f66e53ebdeda559d5af5b8e5348d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37558a8ca467df0ae6235943e5631110242f66e53ebdeda559d5af5b8e5348d3->enter($__internal_37558a8ca467df0ae6235943e5631110242f66e53ebdeda559d5af5b8e5348d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_adcf84ead9b908b79ac5a622d0da155c9d6e17552e564f7597252c300130da64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adcf84ead9b908b79ac5a622d0da155c9d6e17552e564f7597252c300130da64->enter($__internal_adcf84ead9b908b79ac5a622d0da155c9d6e17552e564f7597252c300130da64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_adcf84ead9b908b79ac5a622d0da155c9d6e17552e564f7597252c300130da64->leave($__internal_adcf84ead9b908b79ac5a622d0da155c9d6e17552e564f7597252c300130da64_prof);

        
        $__internal_37558a8ca467df0ae6235943e5631110242f66e53ebdeda559d5af5b8e5348d3->leave($__internal_37558a8ca467df0ae6235943e5631110242f66e53ebdeda559d5af5b8e5348d3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e59a3bc7997952a494972e1d79e016badcf66837321b446d829298c4554da086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59a3bc7997952a494972e1d79e016badcf66837321b446d829298c4554da086->enter($__internal_e59a3bc7997952a494972e1d79e016badcf66837321b446d829298c4554da086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_33a602565d15d63541ca22cdcd6c1b4799992e7e4332887e0f33fff0dae8866a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a602565d15d63541ca22cdcd6c1b4799992e7e4332887e0f33fff0dae8866a->enter($__internal_33a602565d15d63541ca22cdcd6c1b4799992e7e4332887e0f33fff0dae8866a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if ((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse"))) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_33a602565d15d63541ca22cdcd6c1b4799992e7e4332887e0f33fff0dae8866a->leave($__internal_33a602565d15d63541ca22cdcd6c1b4799992e7e4332887e0f33fff0dae8866a_prof);

        
        $__internal_e59a3bc7997952a494972e1d79e016badcf66837321b446d829298c4554da086->leave($__internal_e59a3bc7997952a494972e1d79e016badcf66837321b446d829298c4554da086_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_0bf23d09e7a77fc56c4946ff90fe6cd5b7ec6bf53bbf12600cd44e4b7922e462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf23d09e7a77fc56c4946ff90fe6cd5b7ec6bf53bbf12600cd44e4b7922e462->enter($__internal_0bf23d09e7a77fc56c4946ff90fe6cd5b7ec6bf53bbf12600cd44e4b7922e462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_be0944b7f177d3fde0fdf9fd4e59ce690701a0fb7f067035e625e27e4971444e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0944b7f177d3fde0fdf9fd4e59ce690701a0fb7f067035e625e27e4971444e->enter($__internal_be0944b7f177d3fde0fdf9fd4e59ce690701a0fb7f067035e625e27e4971444e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_be0944b7f177d3fde0fdf9fd4e59ce690701a0fb7f067035e625e27e4971444e->leave($__internal_be0944b7f177d3fde0fdf9fd4e59ce690701a0fb7f067035e625e27e4971444e_prof);

        
        $__internal_0bf23d09e7a77fc56c4946ff90fe6cd5b7ec6bf53bbf12600cd44e4b7922e462->leave($__internal_0bf23d09e7a77fc56c4946ff90fe6cd5b7ec6bf53bbf12600cd44e4b7922e462_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_e4cee3415fd216f9f7ddcbff6043b19fe11717db4bd51086e3dab184b8baae23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4cee3415fd216f9f7ddcbff6043b19fe11717db4bd51086e3dab184b8baae23->enter($__internal_e4cee3415fd216f9f7ddcbff6043b19fe11717db4bd51086e3dab184b8baae23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_4c82f8a893e61ee04bff90e813cbb61040e733b65554db9f66034ba971fff0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c82f8a893e61ee04bff90e813cbb61040e733b65554db9f66034ba971fff0ce->enter($__internal_4c82f8a893e61ee04bff90e813cbb61040e733b65554db9f66034ba971fff0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_4c82f8a893e61ee04bff90e813cbb61040e733b65554db9f66034ba971fff0ce->leave($__internal_4c82f8a893e61ee04bff90e813cbb61040e733b65554db9f66034ba971fff0ce_prof);

        
        $__internal_e4cee3415fd216f9f7ddcbff6043b19fe11717db4bd51086e3dab184b8baae23->leave($__internal_e4cee3415fd216f9f7ddcbff6043b19fe11717db4bd51086e3dab184b8baae23_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 37,  170 => 36,  167 => 35,  164 => 34,  155 => 33,  145 => 24,  138 => 23,  129 => 22,  118 => 29,  112 => 27,  108 => 25,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  74 => 14,  56 => 12,  46 => 33,  42 => 31,  40 => 14,  32 => 12,  29 => 11,);
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

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_show_field.html.twig");
    }
}
