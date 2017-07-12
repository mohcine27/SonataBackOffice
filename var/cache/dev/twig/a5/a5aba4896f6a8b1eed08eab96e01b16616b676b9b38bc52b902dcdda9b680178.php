<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_0baaa5a46e2ea445d2f01062b091e32b5004be092f8cd46f1334ba6d3a1cdf96 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0801499b46c9c2c8cbc1b1a4e1b491d9039100a10383df7b98eba11a4478a3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0801499b46c9c2c8cbc1b1a4e1b491d9039100a10383df7b98eba11a4478a3d5->enter($__internal_0801499b46c9c2c8cbc1b1a4e1b491d9039100a10383df7b98eba11a4478a3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $__internal_3a3116106ffc7845cdfe86cdd56a05328ed7e426010b7ac5538b4ad16d30abf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3116106ffc7845cdfe86cdd56a05328ed7e426010b7ac5538b4ad16d30abf6->enter($__internal_3a3116106ffc7845cdfe86cdd56a05328ed7e426010b7ac5538b4ad16d30abf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0801499b46c9c2c8cbc1b1a4e1b491d9039100a10383df7b98eba11a4478a3d5->leave($__internal_0801499b46c9c2c8cbc1b1a4e1b491d9039100a10383df7b98eba11a4478a3d5_prof);

        
        $__internal_3a3116106ffc7845cdfe86cdd56a05328ed7e426010b7ac5538b4ad16d30abf6->leave($__internal_3a3116106ffc7845cdfe86cdd56a05328ed7e426010b7ac5538b4ad16d30abf6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_75fc01c201e0076c753c6ab9e4431fc5da29a08ac374b2874fe00f5dc694737b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fc01c201e0076c753c6ab9e4431fc5da29a08ac374b2874fe00f5dc694737b->enter($__internal_75fc01c201e0076c753c6ab9e4431fc5da29a08ac374b2874fe00f5dc694737b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_af5da6b7ab1fc683c3fe52f47a07f8d30e534e56c81229fcd7be26af2fc42132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5da6b7ab1fc683c3fe52f47a07f8d30e534e56c81229fcd7be26af2fc42132->enter($__internal_af5da6b7ab1fc683c3fe52f47a07f8d30e534e56c81229fcd7be26af2fc42132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_af5da6b7ab1fc683c3fe52f47a07f8d30e534e56c81229fcd7be26af2fc42132->leave($__internal_af5da6b7ab1fc683c3fe52f47a07f8d30e534e56c81229fcd7be26af2fc42132_prof);

        
        $__internal_75fc01c201e0076c753c6ab9e4431fc5da29a08ac374b2874fe00f5dc694737b->leave($__internal_75fc01c201e0076c753c6ab9e4431fc5da29a08ac374b2874fe00f5dc694737b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "SonataAdminBundle:CRUD:list_trans.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_trans.html.twig");
    }
}
