<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_36a9e2b185690fc7f36554f30b072d1b31a26364cc492ab8feed4e0cb060f8b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5252b5187127360f983f53bd84a45fffecd2fcf805e55e4d4d25447c1a2aba93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5252b5187127360f983f53bd84a45fffecd2fcf805e55e4d4d25447c1a2aba93->enter($__internal_5252b5187127360f983f53bd84a45fffecd2fcf805e55e4d4d25447c1a2aba93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_d46fbb6257bdd8e07fafa295726115b78e88efaa244a58276a6298211be6ec66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46fbb6257bdd8e07fafa295726115b78e88efaa244a58276a6298211be6ec66->enter($__internal_d46fbb6257bdd8e07fafa295726115b78e88efaa244a58276a6298211be6ec66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5252b5187127360f983f53bd84a45fffecd2fcf805e55e4d4d25447c1a2aba93->leave($__internal_5252b5187127360f983f53bd84a45fffecd2fcf805e55e4d4d25447c1a2aba93_prof);

        
        $__internal_d46fbb6257bdd8e07fafa295726115b78e88efaa244a58276a6298211be6ec66->leave($__internal_d46fbb6257bdd8e07fafa295726115b78e88efaa244a58276a6298211be6ec66_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_7f4dce1cc430bcfc1271e1a14179148a4739498345d9d5522117afc0d1b969a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4dce1cc430bcfc1271e1a14179148a4739498345d9d5522117afc0d1b969a5->enter($__internal_7f4dce1cc430bcfc1271e1a14179148a4739498345d9d5522117afc0d1b969a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_9b7fc9479640389e3e286cdfe3b2b8321d7e9b1040fd25cd3aeccafd0403e98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7fc9479640389e3e286cdfe3b2b8321d7e9b1040fd25cd3aeccafd0403e98b->enter($__internal_9b7fc9479640389e3e286cdfe3b2b8321d7e9b1040fd25cd3aeccafd0403e98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_9b7fc9479640389e3e286cdfe3b2b8321d7e9b1040fd25cd3aeccafd0403e98b->leave($__internal_9b7fc9479640389e3e286cdfe3b2b8321d7e9b1040fd25cd3aeccafd0403e98b_prof);

        
        $__internal_7f4dce1cc430bcfc1271e1a14179148a4739498345d9d5522117afc0d1b969a5->leave($__internal_7f4dce1cc430bcfc1271e1a14179148a4739498345d9d5522117afc0d1b969a5_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\knplabs\\knp-menu-bundle\\Resources\\views\\menu.html.twig");
    }
}
