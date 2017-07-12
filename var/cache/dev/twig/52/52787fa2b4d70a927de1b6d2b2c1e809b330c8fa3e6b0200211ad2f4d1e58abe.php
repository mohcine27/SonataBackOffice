<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_e0c15f108bac4aa2b75d6165e7000959a95b5a048dfa20ecbf7d1da6fc041a21 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b32ddce5cda8c7aa07a1230892d25b21d572f1e92a47edb62197d174be6fb87e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32ddce5cda8c7aa07a1230892d25b21d572f1e92a47edb62197d174be6fb87e->enter($__internal_b32ddce5cda8c7aa07a1230892d25b21d572f1e92a47edb62197d174be6fb87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $__internal_8b2255cf9961283811d7f08f5b87f75cb4ccd7d855e269514398a50c3f30270f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2255cf9961283811d7f08f5b87f75cb4ccd7d855e269514398a50c3f30270f->enter($__internal_8b2255cf9961283811d7f08f5b87f75cb4ccd7d855e269514398a50c3f30270f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b32ddce5cda8c7aa07a1230892d25b21d572f1e92a47edb62197d174be6fb87e->leave($__internal_b32ddce5cda8c7aa07a1230892d25b21d572f1e92a47edb62197d174be6fb87e_prof);

        
        $__internal_8b2255cf9961283811d7f08f5b87f75cb4ccd7d855e269514398a50c3f30270f->leave($__internal_8b2255cf9961283811d7f08f5b87f75cb4ccd7d855e269514398a50c3f30270f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_daac1a31d2e3408fbad512bd66aced230be62f1a4bd25ff48cafdbfb66110111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daac1a31d2e3408fbad512bd66aced230be62f1a4bd25ff48cafdbfb66110111->enter($__internal_daac1a31d2e3408fbad512bd66aced230be62f1a4bd25ff48cafdbfb66110111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a675250ad46b8bf02424887ddc774a57b65f429acc0ec8aa4d213e4272e817e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a675250ad46b8bf02424887ddc774a57b65f429acc0ec8aa4d213e4272e817e8->enter($__internal_a675250ad46b8bf02424887ddc774a57b65f429acc0ec8aa4d213e4272e817e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_a675250ad46b8bf02424887ddc774a57b65f429acc0ec8aa4d213e4272e817e8->leave($__internal_a675250ad46b8bf02424887ddc774a57b65f429acc0ec8aa4d213e4272e817e8_prof);

        
        $__internal_daac1a31d2e3408fbad512bd66aced230be62f1a4bd25ff48cafdbfb66110111->leave($__internal_daac1a31d2e3408fbad512bd66aced230be62f1a4bd25ff48cafdbfb66110111_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_time.html.twig");
    }
}
