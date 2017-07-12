<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_b2c3dc854f637409eddcc653e71ab4d9781fac3ebde7eafee1ebe608c4847191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d46f283e542abf831b960a4ca333d583a1a3a0eb7016e3a9d172f8c64ae91791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46f283e542abf831b960a4ca333d583a1a3a0eb7016e3a9d172f8c64ae91791->enter($__internal_d46f283e542abf831b960a4ca333d583a1a3a0eb7016e3a9d172f8c64ae91791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        $__internal_e79d13359cfca6cc68ec2d0f21d840484cffca40a8c203d348b49cab47c256bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79d13359cfca6cc68ec2d0f21d840484cffca40a8c203d348b49cab47c256bc->enter($__internal_e79d13359cfca6cc68ec2d0f21d840484cffca40a8c203d348b49cab47c256bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_d46f283e542abf831b960a4ca333d583a1a3a0eb7016e3a9d172f8c64ae91791->leave($__internal_d46f283e542abf831b960a4ca333d583a1a3a0eb7016e3a9d172f8c64ae91791_prof);

        
        $__internal_e79d13359cfca6cc68ec2d0f21d840484cffca40a8c203d348b49cab47c256bc->leave($__internal_e79d13359cfca6cc68ec2d0f21d840484cffca40a8c203d348b49cab47c256bc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_19d01685376b69970d16a1401640e901d0b0a14f1bd5376e612c79e1e1089c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d01685376b69970d16a1401640e901d0b0a14f1bd5376e612c79e1e1089c47->enter($__internal_19d01685376b69970d16a1401640e901d0b0a14f1bd5376e612c79e1e1089c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6639829ffe789794a17cb1e40ad3558ea448c343ff54fa8542ea9c11e336551d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6639829ffe789794a17cb1e40ad3558ea448c343ff54fa8542ea9c11e336551d->enter($__internal_6639829ffe789794a17cb1e40ad3558ea448c343ff54fa8542ea9c11e336551d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_6639829ffe789794a17cb1e40ad3558ea448c343ff54fa8542ea9c11e336551d->leave($__internal_6639829ffe789794a17cb1e40ad3558ea448c343ff54fa8542ea9c11e336551d_prof);

        
        $__internal_19d01685376b69970d16a1401640e901d0b0a14f1bd5376e612c79e1e1089c47->leave($__internal_19d01685376b69970d16a1401640e901d0b0a14f1bd5376e612c79e1e1089c47_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_241ecb5c53b0ae9b89ee441662f30a8fda6dcba984815ed388686547a311d1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241ecb5c53b0ae9b89ee441662f30a8fda6dcba984815ed388686547a311d1bc->enter($__internal_241ecb5c53b0ae9b89ee441662f30a8fda6dcba984815ed388686547a311d1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_ab1202c50460aa318021123565b0ef59db9d77a6b84e1d72330a62add1e45f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1202c50460aa318021123565b0ef59db9d77a6b84e1d72330a62add1e45f27->enter($__internal_ab1202c50460aa318021123565b0ef59db9d77a6b84e1d72330a62add1e45f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_ab1202c50460aa318021123565b0ef59db9d77a6b84e1d72330a62add1e45f27->leave($__internal_ab1202c50460aa318021123565b0ef59db9d77a6b84e1d72330a62add1e45f27_prof);

        
        $__internal_241ecb5c53b0ae9b89ee441662f30a8fda6dcba984815ed388686547a311d1bc->leave($__internal_241ecb5c53b0ae9b89ee441662f30a8fda6dcba984815ed388686547a311d1bc_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_1eba0102e62d9b0ca4db7e9797071d9ac83c29f38bb64fc27576f067dfa42788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eba0102e62d9b0ca4db7e9797071d9ac83c29f38bb64fc27576f067dfa42788->enter($__internal_1eba0102e62d9b0ca4db7e9797071d9ac83c29f38bb64fc27576f067dfa42788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_d33bc577cbe17841cf52388a2414fc5660bdc1f5817cea0ca6876296b05d920a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33bc577cbe17841cf52388a2414fc5660bdc1f5817cea0ca6876296b05d920a->enter($__internal_d33bc577cbe17841cf52388a2414fc5660bdc1f5817cea0ca6876296b05d920a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_d33bc577cbe17841cf52388a2414fc5660bdc1f5817cea0ca6876296b05d920a->leave($__internal_d33bc577cbe17841cf52388a2414fc5660bdc1f5817cea0ca6876296b05d920a_prof);

        
        $__internal_1eba0102e62d9b0ca4db7e9797071d9ac83c29f38bb64fc27576f067dfa42788->leave($__internal_1eba0102e62d9b0ca4db7e9797071d9ac83c29f38bb64fc27576f067dfa42788_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 21,  99 => 19,  93 => 17,  90 => 16,  81 => 15,  63 => 14,  49 => 26,  47 => 25,  43 => 23,  40 => 15,  38 => 14,  32 => 13,  28 => 11,);
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
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_boolean.html.twig");
    }
}
