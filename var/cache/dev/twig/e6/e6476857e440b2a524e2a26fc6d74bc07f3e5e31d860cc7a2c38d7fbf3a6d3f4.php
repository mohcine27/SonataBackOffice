<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_b7334957e45ef3d4e5d3c7fd7f8e68fda692d243a55731b88926e07e02a43e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_2f1789789bf3c6ef5b5ab68628e05db233186fed773299dd2066d1afe56f871c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1789789bf3c6ef5b5ab68628e05db233186fed773299dd2066d1afe56f871c->enter($__internal_2f1789789bf3c6ef5b5ab68628e05db233186fed773299dd2066d1afe56f871c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $__internal_2fde3c112536b75a6b15fb0d3877abf31682e6318bf25e8fc20138ffa49e27a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fde3c112536b75a6b15fb0d3877abf31682e6318bf25e8fc20138ffa49e27a2->enter($__internal_2fde3c112536b75a6b15fb0d3877abf31682e6318bf25e8fc20138ffa49e27a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f1789789bf3c6ef5b5ab68628e05db233186fed773299dd2066d1afe56f871c->leave($__internal_2f1789789bf3c6ef5b5ab68628e05db233186fed773299dd2066d1afe56f871c_prof);

        
        $__internal_2fde3c112536b75a6b15fb0d3877abf31682e6318bf25e8fc20138ffa49e27a2->leave($__internal_2fde3c112536b75a6b15fb0d3877abf31682e6318bf25e8fc20138ffa49e27a2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_52947186e7792f7522fcb9bec18223e68b7c198b375bf57c412a21525ba0cba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52947186e7792f7522fcb9bec18223e68b7c198b375bf57c412a21525ba0cba7->enter($__internal_52947186e7792f7522fcb9bec18223e68b7c198b375bf57c412a21525ba0cba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_abcd5392c0a9b65cd1c50e93fb36d9822729e8fdf090e4a66d60249762a78005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcd5392c0a9b65cd1c50e93fb36d9822729e8fdf090e4a66d60249762a78005->enter($__internal_abcd5392c0a9b65cd1c50e93fb36d9822729e8fdf090e4a66d60249762a78005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_abcd5392c0a9b65cd1c50e93fb36d9822729e8fdf090e4a66d60249762a78005->leave($__internal_abcd5392c0a9b65cd1c50e93fb36d9822729e8fdf090e4a66d60249762a78005_prof);

        
        $__internal_52947186e7792f7522fcb9bec18223e68b7c198b375bf57c412a21525ba0cba7->leave($__internal_52947186e7792f7522fcb9bec18223e68b7c198b375bf57c412a21525ba0cba7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_boolean.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_boolean.html.twig");
    }
}
