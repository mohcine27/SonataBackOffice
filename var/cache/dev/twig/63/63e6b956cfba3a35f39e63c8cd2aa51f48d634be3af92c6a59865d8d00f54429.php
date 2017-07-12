<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_85f894b1b974efe3fc235a3a77be460e598dffcee260077d1fa0db6033fa6127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d55f112cac428bef481b0551e13a6dc71f5d954030a72ac01c3ad4c0a246810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d55f112cac428bef481b0551e13a6dc71f5d954030a72ac01c3ad4c0a246810->enter($__internal_3d55f112cac428bef481b0551e13a6dc71f5d954030a72ac01c3ad4c0a246810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        $__internal_03c8268d41ca67c29007389a00bc1556054602a27d4a0ae44d59abc017cbd39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c8268d41ca67c29007389a00bc1556054602a27d4a0ae44d59abc017cbd39e->enter($__internal_03c8268d41ca67c29007389a00bc1556054602a27d4a0ae44d59abc017cbd39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_3d55f112cac428bef481b0551e13a6dc71f5d954030a72ac01c3ad4c0a246810->leave($__internal_3d55f112cac428bef481b0551e13a6dc71f5d954030a72ac01c3ad4c0a246810_prof);

        
        $__internal_03c8268d41ca67c29007389a00bc1556054602a27d4a0ae44d59abc017cbd39e->leave($__internal_03c8268d41ca67c29007389a00bc1556054602a27d4a0ae44d59abc017cbd39e_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_40d5853bc138462e4d7ce4978b8ede70fac5d797d6c55211ac9df4a440829eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d5853bc138462e4d7ce4978b8ede70fac5d797d6c55211ac9df4a440829eeb->enter($__internal_40d5853bc138462e4d7ce4978b8ede70fac5d797d6c55211ac9df4a440829eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_9d8ec3e02b20e74b807065ac874b2c5ce35b92c6fd43367b1a34a492e82cfd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8ec3e02b20e74b807065ac874b2c5ce35b92c6fd43367b1a34a492e82cfd6b->enter($__internal_9d8ec3e02b20e74b807065ac874b2c5ce35b92c6fd43367b1a34a492e82cfd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_9d8ec3e02b20e74b807065ac874b2c5ce35b92c6fd43367b1a34a492e82cfd6b->leave($__internal_9d8ec3e02b20e74b807065ac874b2c5ce35b92c6fd43367b1a34a492e82cfd6b_prof);

        
        $__internal_40d5853bc138462e4d7ce4978b8ede70fac5d797d6c55211ac9df4a440829eeb->leave($__internal_40d5853bc138462e4d7ce4978b8ede70fac5d797d6c55211ac9df4a440829eeb_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_5279abae3240bb51cf0b3ea4a5102b28ba8eee388fad6b27925564b67716d4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5279abae3240bb51cf0b3ea4a5102b28ba8eee388fad6b27925564b67716d4cf->enter($__internal_5279abae3240bb51cf0b3ea4a5102b28ba8eee388fad6b27925564b67716d4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c02a6a7dbe079ba87eecdfef2afed6d11ace1a86e766ba1c3107cf25eab78a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02a6a7dbe079ba87eecdfef2afed6d11ace1a86e766ba1c3107cf25eab78a8a->enter($__internal_c02a6a7dbe079ba87eecdfef2afed6d11ace1a86e766ba1c3107cf25eab78a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_c02a6a7dbe079ba87eecdfef2afed6d11ace1a86e766ba1c3107cf25eab78a8a->leave($__internal_c02a6a7dbe079ba87eecdfef2afed6d11ace1a86e766ba1c3107cf25eab78a8a_prof);

        
        $__internal_5279abae3240bb51cf0b3ea4a5102b28ba8eee388fad6b27925564b67716d4cf->leave($__internal_5279abae3240bb51cf0b3ea4a5102b28ba8eee388fad6b27925564b67716d4cf_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_442e7d594a1f382759dc3527084196ffb1d2a936eaea4a0f27aa76bd61e47f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442e7d594a1f382759dc3527084196ffb1d2a936eaea4a0f27aa76bd61e47f16->enter($__internal_442e7d594a1f382759dc3527084196ffb1d2a936eaea4a0f27aa76bd61e47f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_a3f6c222983568b2f4c9d1af3e82bd99a7ad88a5f399afeea61dcead9815fb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f6c222983568b2f4c9d1af3e82bd99a7ad88a5f399afeea61dcead9815fb8e->enter($__internal_a3f6c222983568b2f4c9d1af3e82bd99a7ad88a5f399afeea61dcead9815fb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array());
        
        $__internal_a3f6c222983568b2f4c9d1af3e82bd99a7ad88a5f399afeea61dcead9815fb8e->leave($__internal_a3f6c222983568b2f4c9d1af3e82bd99a7ad88a5f399afeea61dcead9815fb8e_prof);

        
        $__internal_442e7d594a1f382759dc3527084196ffb1d2a936eaea4a0f27aa76bd61e47f16->leave($__internal_442e7d594a1f382759dc3527084196ffb1d2a936eaea4a0f27aa76bd61e47f16_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_22ea9ede4452b1b61bf2cbf93823e625289d89163b474a421f11ed9968d590d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ea9ede4452b1b61bf2cbf93823e625289d89163b474a421f11ed9968d590d1->enter($__internal_22ea9ede4452b1b61bf2cbf93823e625289d89163b474a421f11ed9968d590d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_7136a82127f3c0a557010247db0922acc6c2a67d0735e2557712de662c956316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7136a82127f3c0a557010247db0922acc6c2a67d0735e2557712de662c956316->enter($__internal_7136a82127f3c0a557010247db0922acc6c2a67d0735e2557712de662c956316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_7136a82127f3c0a557010247db0922acc6c2a67d0735e2557712de662c956316->leave($__internal_7136a82127f3c0a557010247db0922acc6c2a67d0735e2557712de662c956316_prof);

        
        $__internal_22ea9ede4452b1b61bf2cbf93823e625289d89163b474a421f11ed9968d590d1->leave($__internal_22ea9ede4452b1b61bf2cbf93823e625289d89163b474a421f11ed9968d590d1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  141 => 26,  123 => 23,  113 => 19,  107 => 17,  101 => 15,  98 => 14,  89 => 13,  75 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  56 => 23,  45 => 21,  42 => 20,  40 => 13,  32 => 12,  29 => 11,);
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

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_standard_edit_field.html.twig");
    }
}
