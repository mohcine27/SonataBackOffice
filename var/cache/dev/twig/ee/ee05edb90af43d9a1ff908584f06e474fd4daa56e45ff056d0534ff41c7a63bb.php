<?php

/* SonataAdminBundle:CRUD:base_list_flat_field.html.twig */
class __TwigTemplate_1b0f8cf5efe95020330a37d5a8b0de02413c8e8456f3969e7c1002de3a7fc0b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8db3e48fcba9e9adf5d5893c2af96de060f15f03501fe70074a8c29d8755b3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db3e48fcba9e9adf5d5893c2af96de060f15f03501fe70074a8c29d8755b3a3->enter($__internal_8db3e48fcba9e9adf5d5893c2af96de060f15f03501fe70074a8c29d8755b3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_field.html.twig"));

        $__internal_a1630a9db1748efb18f5ab94c7cdeaf04214557276c153cb3ac434792276929e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1630a9db1748efb18f5ab94c7cdeaf04214557276c153cb3ac434792276929e->enter($__internal_a1630a9db1748efb18f5ab94c7cdeaf04214557276c153cb3ac434792276929e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_field.html.twig"));

        // line 11
        echo "
<span class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute(        // line 14
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute(        // line 15
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute(        // line 16
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute(        // line 17
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array())), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</span>
";
        
        $__internal_8db3e48fcba9e9adf5d5893c2af96de060f15f03501fe70074a8c29d8755b3a3->leave($__internal_8db3e48fcba9e9adf5d5893c2af96de060f15f03501fe70074a8c29d8755b3a3_prof);

        
        $__internal_a1630a9db1748efb18f5ab94c7cdeaf04214557276c153cb3ac434792276929e->leave($__internal_a1630a9db1748efb18f5ab94c7cdeaf04214557276c153cb3ac434792276929e_prof);

    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        $__internal_cd76c00ecf8b039a8fd02a17a1803b2d14e68d3e1c68eb08fbf324c3789a2202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd76c00ecf8b039a8fd02a17a1803b2d14e68d3e1c68eb08fbf324c3789a2202->enter($__internal_cd76c00ecf8b039a8fd02a17a1803b2d14e68d3e1c68eb08fbf324c3789a2202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1cdd6402973d79cf20156f0bc0ca7448cec39abc9cfc421a1f9f9ad700de0182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdd6402973d79cf20156f0bc0ca7448cec39abc9cfc421a1f9f9ad700de0182->enter($__internal_1cdd6402973d79cf20156f0bc0ca7448cec39abc9cfc421a1f9f9ad700de0182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        
        $__internal_1cdd6402973d79cf20156f0bc0ca7448cec39abc9cfc421a1f9f9ad700de0182->leave($__internal_1cdd6402973d79cf20156f0bc0ca7448cec39abc9cfc421a1f9f9ad700de0182_prof);

        
        $__internal_cd76c00ecf8b039a8fd02a17a1803b2d14e68d3e1c68eb08fbf324c3789a2202->leave($__internal_cd76c00ecf8b039a8fd02a17a1803b2d14e68d3e1c68eb08fbf324c3789a2202_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  57 => 25,  51 => 23,  47 => 21,  45 => 20,  41 => 19,  39 => 17,  38 => 16,  37 => 15,  36 => 14,  35 => 13,  29 => 12,  26 => 11,);
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

<span class=\"sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}\" objectId=\"{{ admin.id(object) }}\">
    {% if
            field_description.options.identifier is defined
        and field_description.options.route is defined
        and admin.hasAccess(field_description.options.route.name, object)
        and admin.hasRoute(field_description.options.route.name)
    %}
        <a href=\"{{ admin.generateObjectUrl(field_description.options.route.name, object, field_description.options.route.parameters) }}\">
            {%- block field %}{{ value }}{% endblock -%}
        </a>
    {% else %}
        {{ block('field') }}
    {% endif %}
</span>
", "SonataAdminBundle:CRUD:base_list_flat_field.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_list_flat_field.html.twig");
    }
}
