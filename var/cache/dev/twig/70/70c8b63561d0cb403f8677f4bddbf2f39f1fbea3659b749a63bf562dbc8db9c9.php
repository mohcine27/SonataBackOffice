<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_4afd185617d7f959afa5d9cb5456f1bd1c26e740fee335f0c7bb49ca031e5c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2012a022f903577f2ce25dad6d418be34a973e489b111d6cf6566d40a537cf48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2012a022f903577f2ce25dad6d418be34a973e489b111d6cf6566d40a537cf48->enter($__internal_2012a022f903577f2ce25dad6d418be34a973e489b111d6cf6566d40a537cf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        $__internal_4ffeb7641a657359a6f9b89d02b0af204d3bf1cc7e7f9ea4fce02bd53b2dacd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffeb7641a657359a6f9b89d02b0af204d3bf1cc7e7f9ea4fce02bd53b2dacd4->enter($__internal_4ffeb7641a657359a6f9b89d02b0af204d3bf1cc7e7f9ea4fce02bd53b2dacd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_2012a022f903577f2ce25dad6d418be34a973e489b111d6cf6566d40a537cf48->leave($__internal_2012a022f903577f2ce25dad6d418be34a973e489b111d6cf6566d40a537cf48_prof);

        
        $__internal_4ffeb7641a657359a6f9b89d02b0af204d3bf1cc7e7f9ea4fce02bd53b2dacd4->leave($__internal_4ffeb7641a657359a6f9b89d02b0af204d3bf1cc7e7f9ea4fce02bd53b2dacd4_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_ea808aa9cc900318d9460bbbcf24b349dff3dfb32d8d8cca78a7173f69fdd120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea808aa9cc900318d9460bbbcf24b349dff3dfb32d8d8cca78a7173f69fdd120->enter($__internal_ea808aa9cc900318d9460bbbcf24b349dff3dfb32d8d8cca78a7173f69fdd120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_9854b32dbb41c0d4ed228d0c87ad8c3423e6b26523cdc92b8d913e50544f4a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9854b32dbb41c0d4ed228d0c87ad8c3423e6b26523cdc92b8d913e50544f4a8f->enter($__internal_9854b32dbb41c0d4ed228d0c87ad8c3423e6b26523cdc92b8d913e50544f4a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_9854b32dbb41c0d4ed228d0c87ad8c3423e6b26523cdc92b8d913e50544f4a8f->leave($__internal_9854b32dbb41c0d4ed228d0c87ad8c3423e6b26523cdc92b8d913e50544f4a8f_prof);

        
        $__internal_ea808aa9cc900318d9460bbbcf24b349dff3dfb32d8d8cca78a7173f69fdd120->leave($__internal_ea808aa9cc900318d9460bbbcf24b349dff3dfb32d8d8cca78a7173f69fdd120_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_a570d7181a944f52a625f5cf2efc6e7d65faf18a863acd53450bacb7d12ce81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a570d7181a944f52a625f5cf2efc6e7d65faf18a863acd53450bacb7d12ce81a->enter($__internal_a570d7181a944f52a625f5cf2efc6e7d65faf18a863acd53450bacb7d12ce81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a0af711ef581edfd761fdd168db5de61ad618b201a4b0d5178e2203a5ff206ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0af711ef581edfd761fdd168db5de61ad618b201a4b0d5178e2203a5ff206ea->enter($__internal_a0af711ef581edfd761fdd168db5de61ad618b201a4b0d5178e2203a5ff206ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_a0af711ef581edfd761fdd168db5de61ad618b201a4b0d5178e2203a5ff206ea->leave($__internal_a0af711ef581edfd761fdd168db5de61ad618b201a4b0d5178e2203a5ff206ea_prof);

        
        $__internal_a570d7181a944f52a625f5cf2efc6e7d65faf18a863acd53450bacb7d12ce81a->leave($__internal_a570d7181a944f52a625f5cf2efc6e7d65faf18a863acd53450bacb7d12ce81a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  57 => 14,  45 => 25,  43 => 24,  37 => 23,  34 => 22,  32 => 14,  27 => 11,);
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


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_filter_field.html.twig");
    }
}
