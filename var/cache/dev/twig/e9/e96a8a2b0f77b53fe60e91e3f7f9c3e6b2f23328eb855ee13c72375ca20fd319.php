<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_c851bb8df5a4a6bb413978078b9bf8ed0a77a94cffd966e5c55e06539f2002a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 12);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c75b6b52c9d76fc31644d5bc752ed99680e4a7f69fedadfb090336610017873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c75b6b52c9d76fc31644d5bc752ed99680e4a7f69fedadfb090336610017873->enter($__internal_9c75b6b52c9d76fc31644d5bc752ed99680e4a7f69fedadfb090336610017873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $__internal_ecf6234b6004808c963810534cedd7c5190010dc99f85180dd5ab976c55ec66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf6234b6004808c963810534cedd7c5190010dc99f85180dd5ab976c55ec66d->enter($__internal_ecf6234b6004808c963810534cedd7c5190010dc99f85180dd5ab976c55ec66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c75b6b52c9d76fc31644d5bc752ed99680e4a7f69fedadfb090336610017873->leave($__internal_9c75b6b52c9d76fc31644d5bc752ed99680e4a7f69fedadfb090336610017873_prof);

        
        $__internal_ecf6234b6004808c963810534cedd7c5190010dc99f85180dd5ab976c55ec66d->leave($__internal_ecf6234b6004808c963810534cedd7c5190010dc99f85180dd5ab976c55ec66d_prof);

    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        $__internal_525e696357367d3d726d7f890ccf235b1e45178919eacce1d4db0dd1d376dbe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525e696357367d3d726d7f890ccf235b1e45178919eacce1d4db0dd1d376dbe2->enter($__internal_525e696357367d3d726d7f890ccf235b1e45178919eacce1d4db0dd1d376dbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_16aad7e6f91b298b1e6fa0b3bff252da78d9384bfb4ce04faa05fc7a7cf6fa87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16aad7e6f91b298b1e6fa0b3bff252da78d9384bfb4ce04faa05fc7a7cf6fa87->enter($__internal_16aad7e6f91b298b1e6fa0b3bff252da78d9384bfb4ce04faa05fc7a7cf6fa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_16aad7e6f91b298b1e6fa0b3bff252da78d9384bfb4ce04faa05fc7a7cf6fa87->leave($__internal_16aad7e6f91b298b1e6fa0b3bff252da78d9384bfb4ce04faa05fc7a7cf6fa87_prof);

        
        $__internal_525e696357367d3d726d7f890ccf235b1e45178919eacce1d4db0dd1d376dbe2->leave($__internal_525e696357367d3d726d7f890ccf235b1e45178919eacce1d4db0dd1d376dbe2_prof);

    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        $__internal_9066738947e6a09d17126b1d05b3e3c78815cc21c4ca6767485a829aaed119bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9066738947e6a09d17126b1d05b3e3c78815cc21c4ca6767485a829aaed119bd->enter($__internal_9066738947e6a09d17126b1d05b3e3c78815cc21c4ca6767485a829aaed119bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_4125f733c899369c64816e80db2783e8beae3f14496b132f17ae8e3530c96a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4125f733c899369c64816e80db2783e8beae3f14496b132f17ae8e3530c96a2d->enter($__internal_4125f733c899369c64816e80db2783e8beae3f14496b132f17ae8e3530c96a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 30
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 40
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_4125f733c899369c64816e80db2783e8beae3f14496b132f17ae8e3530c96a2d->leave($__internal_4125f733c899369c64816e80db2783e8beae3f14496b132f17ae8e3530c96a2d_prof);

        
        $__internal_9066738947e6a09d17126b1d05b3e3c78815cc21c4ca6767485a829aaed119bd->leave($__internal_9066738947e6a09d17126b1d05b3e3c78815cc21c4ca6767485a829aaed119bd_prof);

    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_cd82f0fba218192b82ead39868e0e60baf567b10ca6457338c27b25858c2fa2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd82f0fba218192b82ead39868e0e60baf567b10ca6457338c27b25858c2fa2c->enter($__internal_cd82f0fba218192b82ead39868e0e60baf567b10ca6457338c27b25858c2fa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_a9886b8ad2708bd9c725a6f57522cc686b26ad10d98c15968c195876e6c6fa34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9886b8ad2708bd9c725a6f57522cc686b26ad10d98c15968c195876e6c6fa34->enter($__internal_a9886b8ad2708bd9c725a6f57522cc686b26ad10d98c15968c195876e6c6fa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array())), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_a9886b8ad2708bd9c725a6f57522cc686b26ad10d98c15968c195876e6c6fa34->leave($__internal_a9886b8ad2708bd9c725a6f57522cc686b26ad10d98c15968c195876e6c6fa34_prof);

        
        $__internal_cd82f0fba218192b82ead39868e0e60baf567b10ca6457338c27b25858c2fa2c->leave($__internal_cd82f0fba218192b82ead39868e0e60baf567b10ca6457338c27b25858c2fa2c_prof);

    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_e03cbb340b3df427d0409bb9d1ea8fb3a8e218622fc1dcdf24c3e4679ebba3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03cbb340b3df427d0409bb9d1ea8fb3a8e218622fc1dcdf24c3e4679ebba3ed->enter($__internal_e03cbb340b3df427d0409bb9d1ea8fb3a8e218622fc1dcdf24c3e4679ebba3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_6234e9a058fc1129896c5e31d0146554f58f028e7b4c4511eb0815675c3dc890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6234e9a058fc1129896c5e31d0146554f58f028e7b4c4511eb0815675c3dc890->enter($__internal_6234e9a058fc1129896c5e31d0146554f58f028e7b4c4511eb0815675c3dc890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array())), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
        
        $__internal_6234e9a058fc1129896c5e31d0146554f58f028e7b4c4511eb0815675c3dc890->leave($__internal_6234e9a058fc1129896c5e31d0146554f58f028e7b4c4511eb0815675c3dc890_prof);

        
        $__internal_e03cbb340b3df427d0409bb9d1ea8fb3a8e218622fc1dcdf24c3e4679ebba3ed->leave($__internal_e03cbb340b3df427d0409bb9d1ea8fb3a8e218622fc1dcdf24c3e4679ebba3ed_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  154 => 57,  140 => 53,  138 => 52,  136 => 51,  134 => 50,  132 => 49,  128 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  115 => 40,  113 => 39,  110 => 37,  108 => 36,  105 => 34,  103 => 33,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  92 => 27,  90 => 26,  87 => 25,  85 => 24,  76 => 23,  62 => 18,  57 => 17,  54 => 16,  52 => 15,  43 => 14,  11 => 12,);
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

{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        <div{{ macros.attributes(listAttributes) }}>
            {{ block('children') }}
        </div>
    {% endif %}
{% endblock %}

{% block item %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}
        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {%- if item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
        {# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    {% endif %}
{% endblock %}

{% block linkElement %}<a href=\"{{ item.uri }}\"{{ macros.attributes(item.attributes|merge(item.linkAttributes)|merge(attributes)) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}<div{{ macros.attributes(item.attributes|merge(item.labelAttributes)|merge(attributes)) }}><h4 class=\"list-group-item-heading\">{{ block('label') }}</h4></div>{% endblock %}
", "SonataBlockBundle:Block:block_side_menu_template.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_side_menu_template.html.twig");
    }
}
