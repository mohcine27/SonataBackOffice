<?php

/* AppBundle:Registration:confirmed.html.twig */
class __TwigTemplate_c0569136a0b5043832bd18cd66c4e790f669339c107e3d1c9ccc2d9eab35f4dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32a34c43398a4ec72bdd9cd645d1616508c1a77787ecda73394df17686140654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a34c43398a4ec72bdd9cd645d1616508c1a77787ecda73394df17686140654->enter($__internal_32a34c43398a4ec72bdd9cd645d1616508c1a77787ecda73394df17686140654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:confirmed.html.twig"));

        $__internal_8a734225b60a02692392a298ecc5ac1e2b4a2a90aa3412ce27dfca97ffe835e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a734225b60a02692392a298ecc5ac1e2b4a2a90aa3412ce27dfca97ffe835e8->enter($__internal_8a734225b60a02692392a298ecc5ac1e2b4a2a90aa3412ce27dfca97ffe835e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32a34c43398a4ec72bdd9cd645d1616508c1a77787ecda73394df17686140654->leave($__internal_32a34c43398a4ec72bdd9cd645d1616508c1a77787ecda73394df17686140654_prof);

        
        $__internal_8a734225b60a02692392a298ecc5ac1e2b4a2a90aa3412ce27dfca97ffe835e8->leave($__internal_8a734225b60a02692392a298ecc5ac1e2b4a2a90aa3412ce27dfca97ffe835e8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e3acded92544396227042d05bb31308051c1c52591e179b3302014ec58559df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3acded92544396227042d05bb31308051c1c52591e179b3302014ec58559df->enter($__internal_1e3acded92544396227042d05bb31308051c1c52591e179b3302014ec58559df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7b0bf0a779f7e43b8ce9f1c70decfb0fc2fad75d360ffac620c167834aead7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b0bf0a779f7e43b8ce9f1c70decfb0fc2fad75d360ffac620c167834aead7b->enter($__internal_d7b0bf0a779f7e43b8ce9f1c70decfb0fc2fad75d360ffac620c167834aead7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
        // line 11
        echo "    </div>
";
        
        $__internal_d7b0bf0a779f7e43b8ce9f1c70decfb0fc2fad75d360ffac620c167834aead7b->leave($__internal_d7b0bf0a779f7e43b8ce9f1c70decfb0fc2fad75d360ffac620c167834aead7b_prof);

        
        $__internal_1e3acded92544396227042d05bb31308051c1c52591e179b3302014ec58559df->leave($__internal_1e3acded92544396227042d05bb31308051c1c52591e179b3302014ec58559df_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  70 => 10,  61 => 9,  58 => 8,  56 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
    <div class=\"row\">
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if app.session is not empty %}
        {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}
        {% if targetUrl is not empty %}<p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>{% endif %}
    {% endif %}
    </div>
{% endblock body %}
", "AppBundle:Registration:confirmed.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
