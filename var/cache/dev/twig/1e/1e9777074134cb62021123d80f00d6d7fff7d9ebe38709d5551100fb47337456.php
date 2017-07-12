<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_e4544fffa79d349b65dadf90104f7d23fe53fee02e8c00262c8a5e1db91d6199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3df5493a281b4dba5d717efc1735d2288e8678009864749062093b24e1d7d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3df5493a281b4dba5d717efc1735d2288e8678009864749062093b24e1d7d42->enter($__internal_d3df5493a281b4dba5d717efc1735d2288e8678009864749062093b24e1d7d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $__internal_2de6a3f9e2cb6a8f637c42f3aa8dfa17e3db643fc7f6576f737694644ea02422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de6a3f9e2cb6a8f637c42f3aa8dfa17e3db643fc7f6576f737694644ea02422->enter($__internal_2de6a3f9e2cb6a8f637c42f3aa8dfa17e3db643fc7f6576f737694644ea02422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3df5493a281b4dba5d717efc1735d2288e8678009864749062093b24e1d7d42->leave($__internal_d3df5493a281b4dba5d717efc1735d2288e8678009864749062093b24e1d7d42_prof);

        
        $__internal_2de6a3f9e2cb6a8f637c42f3aa8dfa17e3db643fc7f6576f737694644ea02422->leave($__internal_2de6a3f9e2cb6a8f637c42f3aa8dfa17e3db643fc7f6576f737694644ea02422_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1dd455aaf8b6d5ffe4e9c8f2ea4262bd453f78645f6e2fa41ec9513d5a4db91b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd455aaf8b6d5ffe4e9c8f2ea4262bd453f78645f6e2fa41ec9513d5a4db91b->enter($__internal_1dd455aaf8b6d5ffe4e9c8f2ea4262bd453f78645f6e2fa41ec9513d5a4db91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9066a6fe4c48b45aced95a95ad30cb4b16a45e180d46f947c0765ee183cb96c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9066a6fe4c48b45aced95a95ad30cb4b16a45e180d46f947c0765ee183cb96c1->enter($__internal_9066a6fe4c48b45aced95a95ad30cb4b16a45e180d46f947c0765ee183cb96c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_9066a6fe4c48b45aced95a95ad30cb4b16a45e180d46f947c0765ee183cb96c1->leave($__internal_9066a6fe4c48b45aced95a95ad30cb4b16a45e180d46f947c0765ee183cb96c1_prof);

        
        $__internal_1dd455aaf8b6d5ffe4e9c8f2ea4262bd453f78645f6e2fa41ec9513d5a4db91b->leave($__internal_1dd455aaf8b6d5ffe4e9c8f2ea4262bd453f78645f6e2fa41ec9513d5a4db91b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_array.html.twig");
    }
}
