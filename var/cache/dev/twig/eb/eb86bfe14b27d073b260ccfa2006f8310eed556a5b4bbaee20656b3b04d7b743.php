<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_a031ec94a74878b47ec87a2f4f47839043920ff52d345236dd4cf76a0ed8f0bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
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
        $__internal_8c4e08746746cad0f21b80093f63ea17c812be9115b30e7258c37e504f596a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4e08746746cad0f21b80093f63ea17c812be9115b30e7258c37e504f596a9d->enter($__internal_8c4e08746746cad0f21b80093f63ea17c812be9115b30e7258c37e504f596a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $__internal_e64b81c344b4866eca0e1702addb1f304a2e684a5ef4a1df94ed6a148ea01611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64b81c344b4866eca0e1702addb1f304a2e684a5ef4a1df94ed6a148ea01611->enter($__internal_e64b81c344b4866eca0e1702addb1f304a2e684a5ef4a1df94ed6a148ea01611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c4e08746746cad0f21b80093f63ea17c812be9115b30e7258c37e504f596a9d->leave($__internal_8c4e08746746cad0f21b80093f63ea17c812be9115b30e7258c37e504f596a9d_prof);

        
        $__internal_e64b81c344b4866eca0e1702addb1f304a2e684a5ef4a1df94ed6a148ea01611->leave($__internal_e64b81c344b4866eca0e1702addb1f304a2e684a5ef4a1df94ed6a148ea01611_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_65490cf3f92d6a0cafa7c99b7a3e238a691f0a7a0a3a728e32a64938d7c406bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65490cf3f92d6a0cafa7c99b7a3e238a691f0a7a0a3a728e32a64938d7c406bc->enter($__internal_65490cf3f92d6a0cafa7c99b7a3e238a691f0a7a0a3a728e32a64938d7c406bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e1fe9649028bf6837b9bd5fc573634e255c3e585a82a9684c6d1113ae646acc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fe9649028bf6837b9bd5fc573634e255c3e585a82a9684c6d1113ae646acc7->enter($__internal_e1fe9649028bf6837b9bd5fc573634e255c3e585a82a9684c6d1113ae646acc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_e1fe9649028bf6837b9bd5fc573634e255c3e585a82a9684c6d1113ae646acc7->leave($__internal_e1fe9649028bf6837b9bd5fc573634e255c3e585a82a9684c6d1113ae646acc7_prof);

        
        $__internal_65490cf3f92d6a0cafa7c99b7a3e238a691f0a7a0a3a728e32a64938d7c406bc->leave($__internal_65490cf3f92d6a0cafa7c99b7a3e238a691f0a7a0a3a728e32a64938d7c406bc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_date.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_date.html.twig");
    }
}
