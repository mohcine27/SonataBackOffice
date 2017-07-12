<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_c38db695a50d751e2d91d16c990c29f2a8ecd0ca39a0331815ec2f434caf4a0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66b84b289663a4bbc6605eee8794a1101e89e99007778dd4f1a481e6203d9e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b84b289663a4bbc6605eee8794a1101e89e99007778dd4f1a481e6203d9e42->enter($__internal_66b84b289663a4bbc6605eee8794a1101e89e99007778dd4f1a481e6203d9e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $__internal_261f117ce3f5e1fa715a69752921793e90b03d5209c822cc554aa7ba9c25aea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261f117ce3f5e1fa715a69752921793e90b03d5209c822cc554aa7ba9c25aea4->enter($__internal_261f117ce3f5e1fa715a69752921793e90b03d5209c822cc554aa7ba9c25aea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66b84b289663a4bbc6605eee8794a1101e89e99007778dd4f1a481e6203d9e42->leave($__internal_66b84b289663a4bbc6605eee8794a1101e89e99007778dd4f1a481e6203d9e42_prof);

        
        $__internal_261f117ce3f5e1fa715a69752921793e90b03d5209c822cc554aa7ba9c25aea4->leave($__internal_261f117ce3f5e1fa715a69752921793e90b03d5209c822cc554aa7ba9c25aea4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d3d7d42c700d37f70731d6c19c5f61999e38eaa29d7f1df55a7f4b720ce64471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d7d42c700d37f70731d6c19c5f61999e38eaa29d7f1df55a7f4b720ce64471->enter($__internal_d3d7d42c700d37f70731d6c19c5f61999e38eaa29d7f1df55a7f4b720ce64471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ba909a4ce338f2853355a6e9475c3876813228f37f51f0fe50d170d139545bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba909a4ce338f2853355a6e9475c3876813228f37f51f0fe50d170d139545bb7->enter($__internal_ba909a4ce338f2853355a6e9475c3876813228f37f51f0fe50d170d139545bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ba909a4ce338f2853355a6e9475c3876813228f37f51f0fe50d170d139545bb7->leave($__internal_ba909a4ce338f2853355a6e9475c3876813228f37f51f0fe50d170d139545bb7_prof);

        
        $__internal_d3d7d42c700d37f70731d6c19c5f61999e38eaa29d7f1df55a7f4b720ce64471->leave($__internal_d3d7d42c700d37f70731d6c19c5f61999e38eaa29d7f1df55a7f4b720ce64471_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_currency.html.twig");
    }
}
