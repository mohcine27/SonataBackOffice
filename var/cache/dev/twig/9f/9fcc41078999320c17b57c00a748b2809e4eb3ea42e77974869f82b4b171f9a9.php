<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_8706dde97cd9957f6710f148637d39ee4b411f85b3f20a1d0c86cb20a782d7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
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
        $__internal_375b2ac1985841eb951f99a0fee6c8b72cee4541c133110099ea0a8f21b53620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375b2ac1985841eb951f99a0fee6c8b72cee4541c133110099ea0a8f21b53620->enter($__internal_375b2ac1985841eb951f99a0fee6c8b72cee4541c133110099ea0a8f21b53620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $__internal_56a33281d600b017ba2b9b49b6e68706b068003baaf552ec8f43d8e2d283952e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a33281d600b017ba2b9b49b6e68706b068003baaf552ec8f43d8e2d283952e->enter($__internal_56a33281d600b017ba2b9b49b6e68706b068003baaf552ec8f43d8e2d283952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_375b2ac1985841eb951f99a0fee6c8b72cee4541c133110099ea0a8f21b53620->leave($__internal_375b2ac1985841eb951f99a0fee6c8b72cee4541c133110099ea0a8f21b53620_prof);

        
        $__internal_56a33281d600b017ba2b9b49b6e68706b068003baaf552ec8f43d8e2d283952e->leave($__internal_56a33281d600b017ba2b9b49b6e68706b068003baaf552ec8f43d8e2d283952e_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_b4de0333d72f8c3f90ab5efc6017026ad062d7fd9700f25d606ce098e83fb3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4de0333d72f8c3f90ab5efc6017026ad062d7fd9700f25d606ce098e83fb3ed->enter($__internal_b4de0333d72f8c3f90ab5efc6017026ad062d7fd9700f25d606ce098e83fb3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_715ed801ab426b448f3ca45b9dc75c55700a70513bb0ecb6950930c9d972d8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715ed801ab426b448f3ca45b9dc75c55700a70513bb0ecb6950930c9d972d8a7->enter($__internal_715ed801ab426b448f3ca45b9dc75c55700a70513bb0ecb6950930c9d972d8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_715ed801ab426b448f3ca45b9dc75c55700a70513bb0ecb6950930c9d972d8a7->leave($__internal_715ed801ab426b448f3ca45b9dc75c55700a70513bb0ecb6950930c9d972d8a7_prof);

        
        $__internal_b4de0333d72f8c3f90ab5efc6017026ad062d7fd9700f25d606ce098e83fb3ed->leave($__internal_b4de0333d72f8c3f90ab5efc6017026ad062d7fd9700f25d606ce098e83fb3ed_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  40 => 13,  11 => 11,);
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

{% block field%}
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_trans.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_trans.html.twig");
    }
}
