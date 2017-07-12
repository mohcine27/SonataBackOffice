<?php

/* SonataAdminBundle:CRUD:list_html.html.twig */
class __TwigTemplate_1f095227a4654a2d5bc883df506b3c9e8b95cc3571d9595a9df1d53a1b2a376a extends Twig_Template
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
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_198781155483e4c348007a061e6b9bdcd37bf7ae6c72fca8bfdba79f36b10d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_198781155483e4c348007a061e6b9bdcd37bf7ae6c72fca8bfdba79f36b10d8c->enter($__internal_198781155483e4c348007a061e6b9bdcd37bf7ae6c72fca8bfdba79f36b10d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $__internal_3b061ca959da9d074923a71fe64661a4ae96443b53733327bbf4a4aa942f1791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b061ca959da9d074923a71fe64661a4ae96443b53733327bbf4a4aa942f1791->enter($__internal_3b061ca959da9d074923a71fe64661a4ae96443b53733327bbf4a4aa942f1791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_198781155483e4c348007a061e6b9bdcd37bf7ae6c72fca8bfdba79f36b10d8c->leave($__internal_198781155483e4c348007a061e6b9bdcd37bf7ae6c72fca8bfdba79f36b10d8c_prof);

        
        $__internal_3b061ca959da9d074923a71fe64661a4ae96443b53733327bbf4a4aa942f1791->leave($__internal_3b061ca959da9d074923a71fe64661a4ae96443b53733327bbf4a4aa942f1791_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_6bcfe9afb002143595285a73cbc5875dd317db59eb76bef1e4e6ca3775fb72f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bcfe9afb002143595285a73cbc5875dd317db59eb76bef1e4e6ca3775fb72f8->enter($__internal_6bcfe9afb002143595285a73cbc5875dd317db59eb76bef1e4e6ca3775fb72f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4c1a5694e38f07d97732efdf7c64c3bbc02fe999a036e6be4e1780c0ce4c1d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1a5694e38f07d97732efdf7c64c3bbc02fe999a036e6be4e1780c0ce4c1d65->enter($__internal_4c1a5694e38f07d97732efdf7c64c3bbc02fe999a036e6be4e1780c0ce4c1d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), (isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")), (isset($context["preserve"]) ? $context["preserve"] : $this->getContext($context, "preserve")), (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                }
                // line 17
                echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_4c1a5694e38f07d97732efdf7c64c3bbc02fe999a036e6be4e1780c0ce4c1d65->leave($__internal_4c1a5694e38f07d97732efdf7c64c3bbc02fe999a036e6be4e1780c0ce4c1d65_prof);

        
        $__internal_6bcfe9afb002143595285a73cbc5875dd317db59eb76bef1e4e6ca3775fb72f8->leave($__internal_6bcfe9afb002143595285a73cbc5875dd317db59eb76bef1e4e6ca3775fb72f8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  76 => 17,  73 => 15,  71 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  54 => 7,  50 => 5,  48 => 4,  39 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_html.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_html.html.twig");
    }
}
