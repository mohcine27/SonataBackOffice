<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_39dd6d1fad05bf6f7ce0722094def136064e6e2ec0afd47f5a650d642bfe6db9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_3903f23f795c3d280dd1bc4065c36aefa9eb7918850395fdb95c0267d86338c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3903f23f795c3d280dd1bc4065c36aefa9eb7918850395fdb95c0267d86338c8->enter($__internal_3903f23f795c3d280dd1bc4065c36aefa9eb7918850395fdb95c0267d86338c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $__internal_743851d93b076916eab845c4aa019f810a80196db0ca91e3d1bc9998efbee680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743851d93b076916eab845c4aa019f810a80196db0ca91e3d1bc9998efbee680->enter($__internal_743851d93b076916eab845c4aa019f810a80196db0ca91e3d1bc9998efbee680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3903f23f795c3d280dd1bc4065c36aefa9eb7918850395fdb95c0267d86338c8->leave($__internal_3903f23f795c3d280dd1bc4065c36aefa9eb7918850395fdb95c0267d86338c8_prof);

        
        $__internal_743851d93b076916eab845c4aa019f810a80196db0ca91e3d1bc9998efbee680->leave($__internal_743851d93b076916eab845c4aa019f810a80196db0ca91e3d1bc9998efbee680_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b7836bda502e44b943edafe8130445290298724bbdd4664720e7155dcdea4712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7836bda502e44b943edafe8130445290298724bbdd4664720e7155dcdea4712->enter($__internal_b7836bda502e44b943edafe8130445290298724bbdd4664720e7155dcdea4712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5172fb699cc8c8303e8a19fd164260a8352aad9c69effd0e9fe0a457559ed300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5172fb699cc8c8303e8a19fd164260a8352aad9c69effd0e9fe0a457559ed300->enter($__internal_5172fb699cc8c8303e8a19fd164260a8352aad9c69effd0e9fe0a457559ed300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_5172fb699cc8c8303e8a19fd164260a8352aad9c69effd0e9fe0a457559ed300->leave($__internal_5172fb699cc8c8303e8a19fd164260a8352aad9c69effd0e9fe0a457559ed300_prof);

        
        $__internal_b7836bda502e44b943edafe8130445290298724bbdd4664720e7155dcdea4712->leave($__internal_b7836bda502e44b943edafe8130445290298724bbdd4664720e7155dcdea4712_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_percent.html.twig");
    }
}
