<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_06973b4f55e90a7ca33ea864e5db2154f07cd529c70785b61237ed58b5f5bf0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae1ba3b45e7fcd60c14b28da78d742aeab5ddf3b2978e683aa8194c440e956db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1ba3b45e7fcd60c14b28da78d742aeab5ddf3b2978e683aa8194c440e956db->enter($__internal_ae1ba3b45e7fcd60c14b28da78d742aeab5ddf3b2978e683aa8194c440e956db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_04183968f16d38c47dc685a89e8a12af0126fb6989e68140bd4d1ebad7e698a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04183968f16d38c47dc685a89e8a12af0126fb6989e68140bd4d1ebad7e698a1->enter($__internal_04183968f16d38c47dc685a89e8a12af0126fb6989e68140bd4d1ebad7e698a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae1ba3b45e7fcd60c14b28da78d742aeab5ddf3b2978e683aa8194c440e956db->leave($__internal_ae1ba3b45e7fcd60c14b28da78d742aeab5ddf3b2978e683aa8194c440e956db_prof);

        
        $__internal_04183968f16d38c47dc685a89e8a12af0126fb6989e68140bd4d1ebad7e698a1->leave($__internal_04183968f16d38c47dc685a89e8a12af0126fb6989e68140bd4d1ebad7e698a1_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2f2658f7c681bf270a0dbbb7d60862d86900c3409ff5f59b60a5271890d31e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2658f7c681bf270a0dbbb7d60862d86900c3409ff5f59b60a5271890d31e14->enter($__internal_2f2658f7c681bf270a0dbbb7d60862d86900c3409ff5f59b60a5271890d31e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_c55a1e20208c651a5ecdecca3a82820f1aa62c7819ddcfa2b4a52ea8fcf112cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55a1e20208c651a5ecdecca3a82820f1aa62c7819ddcfa2b4a52ea8fcf112cb->enter($__internal_c55a1e20208c651a5ecdecca3a82820f1aa62c7819ddcfa2b4a52ea8fcf112cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_c55a1e20208c651a5ecdecca3a82820f1aa62c7819ddcfa2b4a52ea8fcf112cb->leave($__internal_c55a1e20208c651a5ecdecca3a82820f1aa62c7819ddcfa2b4a52ea8fcf112cb_prof);

        
        $__internal_2f2658f7c681bf270a0dbbb7d60862d86900c3409ff5f59b60a5271890d31e14->leave($__internal_2f2658f7c681bf270a0dbbb7d60862d86900c3409ff5f59b60a5271890d31e14_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  53 => 33,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>
        {%- verbatim -%}
{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}
        {%- endverbatim -%}
    </pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>
{%- verbatim -%}
{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}
{%- endverbatim -%}
    </pre>
{% endblock %}
", "SonataBlockBundle:Block:block_template.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_template.html.twig");
    }
}
