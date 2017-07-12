<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_6e0b037e79a4ead8810bea5ac91de5f8e0ad657af12a104002dc96f3098da440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2edc1afb7d7c3e487aceaae92205722dafaa2e47f098773d852956b8350aa31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edc1afb7d7c3e487aceaae92205722dafaa2e47f098773d852956b8350aa31b->enter($__internal_2edc1afb7d7c3e487aceaae92205722dafaa2e47f098773d852956b8350aa31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_c97e6aa9c5cff3b96d8191a10c1e5e697f73739791b8974396eba094cf11f3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97e6aa9c5cff3b96d8191a10c1e5e697f73739791b8974396eba094cf11f3ac->enter($__internal_c97e6aa9c5cff3b96d8191a10c1e5e697f73739791b8974396eba094cf11f3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_93264f4b691dce70e4d02ab7a1596599328a0b798043a60a5a9f726fe029b215"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
(isset($context["__internal_93264f4b691dce70e4d02ab7a1596599328a0b798043a60a5a9f726fe029b215"]) ? $context["__internal_93264f4b691dce70e4d02ab7a1596599328a0b798043a60a5a9f726fe029b215"] : $this->getContext($context, "__internal_93264f4b691dce70e4d02ab7a1596599328a0b798043a60a5a9f726fe029b215"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
(isset($context["__internal_93264f4b691dce70e4d02ab7a1596599328a0b798043a60a5a9f726fe029b215"]) ? $context["__internal_93264f4b691dce70e4d02ab7a1596599328a0b798043a60a5a9f726fe029b215"] : $this->getContext($context, "__internal_93264f4b691dce70e4d02ab7a1596599328a0b798043a60a5a9f726fe029b215"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2edc1afb7d7c3e487aceaae92205722dafaa2e47f098773d852956b8350aa31b->leave($__internal_2edc1afb7d7c3e487aceaae92205722dafaa2e47f098773d852956b8350aa31b_prof);

        
        $__internal_c97e6aa9c5cff3b96d8191a10c1e5e697f73739791b8974396eba094cf11f3ac->leave($__internal_c97e6aa9c5cff3b96d8191a10c1e5e697f73739791b8974396eba094cf11f3ac_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d0cd32351aef96f329547e5f5c96dc52073bac4bab906ebbda2953d67c6fd0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0cd32351aef96f329547e5f5c96dc52073bac4bab906ebbda2953d67c6fd0ff->enter($__internal_d0cd32351aef96f329547e5f5c96dc52073bac4bab906ebbda2953d67c6fd0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_11ca3de73d79c05ffa5759dd7378e2f63ec350553ebe4867ecce6d0d3fb581d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ca3de73d79c05ffa5759dd7378e2f63ec350553ebe4867ecce6d0d3fb581d3->enter($__internal_11ca3de73d79c05ffa5759dd7378e2f63ec350553ebe4867ecce6d0d3fb581d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_11ca3de73d79c05ffa5759dd7378e2f63ec350553ebe4867ecce6d0d3fb581d3->leave($__internal_11ca3de73d79c05ffa5759dd7378e2f63ec350553ebe4867ecce6d0d3fb581d3_prof);

        
        $__internal_d0cd32351aef96f329547e5f5c96dc52073bac4bab906ebbda2953d67c6fd0ff->leave($__internal_d0cd32351aef96f329547e5f5c96dc52073bac4bab906ebbda2953d67c6fd0ff_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_22acba0f46db7f4106a5eea217d12ca83ba634c3ea9924335dd02d39cfac0d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22acba0f46db7f4106a5eea217d12ca83ba634c3ea9924335dd02d39cfac0d3b->enter($__internal_22acba0f46db7f4106a5eea217d12ca83ba634c3ea9924335dd02d39cfac0d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_661c5df98dbd9af23bd22662953b07207ddef48ef57798b855d316587ecfe470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661c5df98dbd9af23bd22662953b07207ddef48ef57798b855d316587ecfe470->enter($__internal_661c5df98dbd9af23bd22662953b07207ddef48ef57798b855d316587ecfe470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_661c5df98dbd9af23bd22662953b07207ddef48ef57798b855d316587ecfe470->leave($__internal_661c5df98dbd9af23bd22662953b07207ddef48ef57798b855d316587ecfe470_prof);

        
        $__internal_22acba0f46db7f4106a5eea217d12ca83ba634c3ea9924335dd02d39cfac0d3b->leave($__internal_22acba0f46db7f4106a5eea217d12ca83ba634c3ea9924335dd02d39cfac0d3b_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_491706df1cb5d4fa531a46e6cf05e286da67f4b9243e76fadbe81af941d59068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491706df1cb5d4fa531a46e6cf05e286da67f4b9243e76fadbe81af941d59068->enter($__internal_491706df1cb5d4fa531a46e6cf05e286da67f4b9243e76fadbe81af941d59068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_c977fc883f42b669fcb638de5adbbe6f200d79b837336e248ae0e04b31d218ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c977fc883f42b669fcb638de5adbbe6f200d79b837336e248ae0e04b31d218ae->enter($__internal_c977fc883f42b669fcb638de5adbbe6f200d79b837336e248ae0e04b31d218ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 4
(isset($context["__internal_93264f4b691dce70e4d02ab7a1596599328a0b798043a60a5a9f726fe029b215"]) ? $context["__internal_93264f4b691dce70e4d02ab7a1596599328a0b798043a60a5a9f726fe029b215"] : $this->getContext($context, "__internal_93264f4b691dce70e4d02ab7a1596599328a0b798043a60a5a9f726fe029b215")))) : (        // line 15
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c977fc883f42b669fcb638de5adbbe6f200d79b837336e248ae0e04b31d218ae->leave($__internal_c977fc883f42b669fcb638de5adbbe6f200d79b837336e248ae0e04b31d218ae_prof);

        
        $__internal_491706df1cb5d4fa531a46e6cf05e286da67f4b9243e76fadbe81af941d59068->leave($__internal_491706df1cb5d4fa531a46e6cf05e286da67f4b9243e76fadbe81af941d59068_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_331e36b0576c904e417e5d0fce31eeaead720a4e8492b0ee71822a613f0aa924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331e36b0576c904e417e5d0fce31eeaead720a4e8492b0ee71822a613f0aa924->enter($__internal_331e36b0576c904e417e5d0fce31eeaead720a4e8492b0ee71822a613f0aa924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6ca0e85dfbd14f14f8aa1bfcc9de146f49ef4e8a9b48f9ef54b3bd0f31e9184a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca0e85dfbd14f14f8aa1bfcc9de146f49ef4e8a9b48f9ef54b3bd0f31e9184a->enter($__internal_6ca0e85dfbd14f14f8aa1bfcc9de146f49ef4e8a9b48f9ef54b3bd0f31e9184a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_6ca0e85dfbd14f14f8aa1bfcc9de146f49ef4e8a9b48f9ef54b3bd0f31e9184a->leave($__internal_6ca0e85dfbd14f14f8aa1bfcc9de146f49ef4e8a9b48f9ef54b3bd0f31e9184a_prof);

        
        $__internal_331e36b0576c904e417e5d0fce31eeaead720a4e8492b0ee71822a613f0aa924->leave($__internal_331e36b0576c904e417e5d0fce31eeaead720a4e8492b0ee71822a613f0aa924_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_71aaacc0e1499a4b71aa57b09fdf33790fb7e35879deaf921c1ae6a5bfa6b133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71aaacc0e1499a4b71aa57b09fdf33790fb7e35879deaf921c1ae6a5bfa6b133->enter($__internal_71aaacc0e1499a4b71aa57b09fdf33790fb7e35879deaf921c1ae6a5bfa6b133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_dd04f84c60ba1b6d16abd6d634aeea9dcc293ae7ef1770d9401c316c3a9858ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd04f84c60ba1b6d16abd6d634aeea9dcc293ae7ef1770d9401c316c3a9858ab->enter($__internal_dd04f84c60ba1b6d16abd6d634aeea9dcc293ae7ef1770d9401c316c3a9858ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_dd04f84c60ba1b6d16abd6d634aeea9dcc293ae7ef1770d9401c316c3a9858ab->leave($__internal_dd04f84c60ba1b6d16abd6d634aeea9dcc293ae7ef1770d9401c316c3a9858ab_prof);

        
        $__internal_71aaacc0e1499a4b71aa57b09fdf33790fb7e35879deaf921c1ae6a5bfa6b133->leave($__internal_71aaacc0e1499a4b71aa57b09fdf33790fb7e35879deaf921c1ae6a5bfa6b133_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_d89a46141bc917b187746738eebe71f00d0218940d06e252d79779279eef4d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89a46141bc917b187746738eebe71f00d0218940d06e252d79779279eef4d5c->enter($__internal_d89a46141bc917b187746738eebe71f00d0218940d06e252d79779279eef4d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_35e90800ae283a68ae024726ae741cb617de562655b635d271b0ebbe4e1922c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e90800ae283a68ae024726ae741cb617de562655b635d271b0ebbe4e1922c4->enter($__internal_35e90800ae283a68ae024726ae741cb617de562655b635d271b0ebbe4e1922c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_35e90800ae283a68ae024726ae741cb617de562655b635d271b0ebbe4e1922c4->leave($__internal_35e90800ae283a68ae024726ae741cb617de562655b635d271b0ebbe4e1922c4_prof);

        
        $__internal_d89a46141bc917b187746738eebe71f00d0218940d06e252d79779279eef4d5c->leave($__internal_d89a46141bc917b187746738eebe71f00d0218940d06e252d79779279eef4d5c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:new.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\new.html.twig");
    }
}
