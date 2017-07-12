<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_e9097a23a924fa16ea977df5add43b89e242d33ff54ec2b457bd2bbe15785eef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab74ade7726ab73d9429e9e026df7731ad5ab174155d65557b46f2f507a92af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab74ade7726ab73d9429e9e026df7731ad5ab174155d65557b46f2f507a92af8->enter($__internal_ab74ade7726ab73d9429e9e026df7731ad5ab174155d65557b46f2f507a92af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        $__internal_af39faaf180fa3166006de38920680b74550cc86e6151d81e0dbeefacd0e9598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af39faaf180fa3166006de38920680b74550cc86e6151d81e0dbeefacd0e9598->enter($__internal_af39faaf180fa3166006de38920680b74550cc86e6151d81e0dbeefacd0e9598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_ab74ade7726ab73d9429e9e026df7731ad5ab174155d65557b46f2f507a92af8->leave($__internal_ab74ade7726ab73d9429e9e026df7731ad5ab174155d65557b46f2f507a92af8_prof);

        
        $__internal_af39faaf180fa3166006de38920680b74550cc86e6151d81e0dbeefacd0e9598->leave($__internal_af39faaf180fa3166006de38920680b74550cc86e6151d81e0dbeefacd0e9598_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_69c71ef83c1998d37a541ee6931e1de52ec5a3d3087279487055c5cce8db25ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c71ef83c1998d37a541ee6931e1de52ec5a3d3087279487055c5cce8db25ba->enter($__internal_69c71ef83c1998d37a541ee6931e1de52ec5a3d3087279487055c5cce8db25ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_c7460400049dda497c376c9a27c4c15bf863a92d548bb51741f77676683b318f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7460400049dda497c376c9a27c4c15bf863a92d548bb51741f77676683b318f->enter($__internal_c7460400049dda497c376c9a27c4c15bf863a92d548bb51741f77676683b318f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_c7460400049dda497c376c9a27c4c15bf863a92d548bb51741f77676683b318f->leave($__internal_c7460400049dda497c376c9a27c4c15bf863a92d548bb51741f77676683b318f_prof);

        
        $__internal_69c71ef83c1998d37a541ee6931e1de52ec5a3d3087279487055c5cce8db25ba->leave($__internal_69c71ef83c1998d37a541ee6931e1de52ec5a3d3087279487055c5cce8db25ba_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_255fb15247443ea4c95483d9e18de36599fac3562bc556446888a351f92e14e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255fb15247443ea4c95483d9e18de36599fac3562bc556446888a351f92e14e4->enter($__internal_255fb15247443ea4c95483d9e18de36599fac3562bc556446888a351f92e14e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9cbd46948bf6b528bb31f24ae1a641468f03b5e72f5c18c4c28fef912bb6c3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbd46948bf6b528bb31f24ae1a641468f03b5e72f5c18c4c28fef912bb6c3ff->enter($__internal_9cbd46948bf6b528bb31f24ae1a641468f03b5e72f5c18c4c28fef912bb6c3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_9cbd46948bf6b528bb31f24ae1a641468f03b5e72f5c18c4c28fef912bb6c3ff->leave($__internal_9cbd46948bf6b528bb31f24ae1a641468f03b5e72f5c18c4c28fef912bb6c3ff_prof);

        
        $__internal_255fb15247443ea4c95483d9e18de36599fac3562bc556446888a351f92e14e4->leave($__internal_255fb15247443ea4c95483d9e18de36599fac3562bc556446888a351f92e14e4_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_628c61212925ac4957ab2bc3f68e926bf82368c7986dd0a48a543ad190fd06d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628c61212925ac4957ab2bc3f68e926bf82368c7986dd0a48a543ad190fd06d0->enter($__internal_628c61212925ac4957ab2bc3f68e926bf82368c7986dd0a48a543ad190fd06d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_5f6915c091e0fce1c407d70dbf7d57ec6ae9847ac20834b222f7ae9da7dd70c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6915c091e0fce1c407d70dbf7d57ec6ae9847ac20834b222f7ae9da7dd70c5->enter($__internal_5f6915c091e0fce1c407d70dbf7d57ec6ae9847ac20834b222f7ae9da7dd70c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_5f6915c091e0fce1c407d70dbf7d57ec6ae9847ac20834b222f7ae9da7dd70c5->leave($__internal_5f6915c091e0fce1c407d70dbf7d57ec6ae9847ac20834b222f7ae9da7dd70c5_prof);

        
        $__internal_628c61212925ac4957ab2bc3f68e926bf82368c7986dd0a48a543ad190fd06d0->leave($__internal_628c61212925ac4957ab2bc3f68e926bf82368c7986dd0a48a543ad190fd06d0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  110 => 25,  100 => 23,  96 => 21,  90 => 19,  84 => 17,  81 => 16,  78 => 15,  69 => 14,  57 => 29,  55 => 28,  51 => 26,  49 => 25,  46 => 24,  44 => 14,  31 => 12,  28 => 11,);
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

<div id=\"sonata-ba-field-container-{{ field_element.vars.id }}\" class=\"sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}\">

    {% block label %}
        {% if inline == 'natural' %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endif %}
    {% endblock %}

    {% block field %}{{ form_widget(field_element) }}{% endblock %}

    <div class=\"sonata-ba-field-error-messages\">
        {% block errors %}{{ form_errors(field_element) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_inline_edit_field.html.twig");
    }
}
