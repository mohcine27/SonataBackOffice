<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_5e8bb1b11251f9fde484d11b35f23a13d998bb67f2df4434bbc8129d6540252d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3476dc07ad961e62f80af036e4f617954717c39c7ac9a77b23608430fa8e0ed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3476dc07ad961e62f80af036e4f617954717c39c7ac9a77b23608430fa8e0ed9->enter($__internal_3476dc07ad961e62f80af036e4f617954717c39c7ac9a77b23608430fa8e0ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_84f3ba6fa5db27261bfd1f9a122fcfe3418592e29cd961bbca15b9d7a4e03d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f3ba6fa5db27261bfd1f9a122fcfe3418592e29cd961bbca15b9d7a4e03d14->enter($__internal_84f3ba6fa5db27261bfd1f9a122fcfe3418592e29cd961bbca15b9d7a4e03d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3476dc07ad961e62f80af036e4f617954717c39c7ac9a77b23608430fa8e0ed9->leave($__internal_3476dc07ad961e62f80af036e4f617954717c39c7ac9a77b23608430fa8e0ed9_prof);

        
        $__internal_84f3ba6fa5db27261bfd1f9a122fcfe3418592e29cd961bbca15b9d7a4e03d14->leave($__internal_84f3ba6fa5db27261bfd1f9a122fcfe3418592e29cd961bbca15b9d7a4e03d14_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_5a56729d05d1fc5e4351f835fd7e7615a2fbdb409b509dcd2ee580fe26d8dd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a56729d05d1fc5e4351f835fd7e7615a2fbdb409b509dcd2ee580fe26d8dd27->enter($__internal_5a56729d05d1fc5e4351f835fd7e7615a2fbdb409b509dcd2ee580fe26d8dd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_b67416c35c769e3d3fb41ac87a754af6107e78e005d4f39067516f6babefaf3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67416c35c769e3d3fb41ac87a754af6107e78e005d4f39067516f6babefaf3f->enter($__internal_b67416c35c769e3d3fb41ac87a754af6107e78e005d4f39067516f6babefaf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_b67416c35c769e3d3fb41ac87a754af6107e78e005d4f39067516f6babefaf3f->leave($__internal_b67416c35c769e3d3fb41ac87a754af6107e78e005d4f39067516f6babefaf3f_prof);

        
        $__internal_5a56729d05d1fc5e4351f835fd7e7615a2fbdb409b509dcd2ee580fe26d8dd27->leave($__internal_5a56729d05d1fc5e4351f835fd7e7615a2fbdb409b509dcd2ee580fe26d8dd27_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4bd732675c8ac17c9e1650e436fd11f4a01228ae78438ae9b14f553ff32e527d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd732675c8ac17c9e1650e436fd11f4a01228ae78438ae9b14f553ff32e527d->enter($__internal_4bd732675c8ac17c9e1650e436fd11f4a01228ae78438ae9b14f553ff32e527d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_f4b66896605b5cb28e634a3bbe142b2f2b03ed3898220766dcc0ba8d7d5af531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b66896605b5cb28e634a3bbe142b2f2b03ed3898220766dcc0ba8d7d5af531->enter($__internal_f4b66896605b5cb28e634a3bbe142b2f2b03ed3898220766dcc0ba8d7d5af531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_f4b66896605b5cb28e634a3bbe142b2f2b03ed3898220766dcc0ba8d7d5af531->leave($__internal_f4b66896605b5cb28e634a3bbe142b2f2b03ed3898220766dcc0ba8d7d5af531_prof);

        
        $__internal_4bd732675c8ac17c9e1650e436fd11f4a01228ae78438ae9b14f553ff32e527d->leave($__internal_4bd732675c8ac17c9e1650e436fd11f4a01228ae78438ae9b14f553ff32e527d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a0d2e05b156b112281978cbb7eca25feacec3ea2b09bece3ea37054fd4ff58e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d2e05b156b112281978cbb7eca25feacec3ea2b09bece3ea37054fd4ff58e9->enter($__internal_a0d2e05b156b112281978cbb7eca25feacec3ea2b09bece3ea37054fd4ff58e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b5fddbcb3138f10e4d67a0a5d2e22b7ebff577a45fe76bacd870c5f5416201dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fddbcb3138f10e4d67a0a5d2e22b7ebff577a45fe76bacd870c5f5416201dd->enter($__internal_b5fddbcb3138f10e4d67a0a5d2e22b7ebff577a45fe76bacd870c5f5416201dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_b5fddbcb3138f10e4d67a0a5d2e22b7ebff577a45fe76bacd870c5f5416201dd->leave($__internal_b5fddbcb3138f10e4d67a0a5d2e22b7ebff577a45fe76bacd870c5f5416201dd_prof);

        
        $__internal_a0d2e05b156b112281978cbb7eca25feacec3ea2b09bece3ea37054fd4ff58e9->leave($__internal_a0d2e05b156b112281978cbb7eca25feacec3ea2b09bece3ea37054fd4ff58e9_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\exception.html.twig");
    }
}
