<?php

/* AppBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_cbc72f1b467ff9c4f3a0f6400a85bd18efb6b47d7c9484187424d60daa46f616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_42f62d1defb4bf701562fa07de06a2bd4af328aa002261731b481ddc25218fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f62d1defb4bf701562fa07de06a2bd4af328aa002261731b481ddc25218fac->enter($__internal_42f62d1defb4bf701562fa07de06a2bd4af328aa002261731b481ddc25218fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:checkEmail.html.twig"));

        $__internal_de5bd633a897b2a633e211406337f45e91aa1b77728eab9b053a7dd5b015bc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5bd633a897b2a633e211406337f45e91aa1b77728eab9b053a7dd5b015bc5f->enter($__internal_de5bd633a897b2a633e211406337f45e91aa1b77728eab9b053a7dd5b015bc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f62d1defb4bf701562fa07de06a2bd4af328aa002261731b481ddc25218fac->leave($__internal_42f62d1defb4bf701562fa07de06a2bd4af328aa002261731b481ddc25218fac_prof);

        
        $__internal_de5bd633a897b2a633e211406337f45e91aa1b77728eab9b053a7dd5b015bc5f->leave($__internal_de5bd633a897b2a633e211406337f45e91aa1b77728eab9b053a7dd5b015bc5f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b64c7cf290c615eb83d4e9e5f6a84a3966eb9c7ea576561377646e095ca6cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b64c7cf290c615eb83d4e9e5f6a84a3966eb9c7ea576561377646e095ca6cd1->enter($__internal_9b64c7cf290c615eb83d4e9e5f6a84a3966eb9c7ea576561377646e095ca6cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_174f0e78f18ebc6bd2428d950974c704262125f11a031ffc83cb7b889c5652d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174f0e78f18ebc6bd2428d950974c704262125f11a031ffc83cb7b889c5652d3->enter($__internal_174f0e78f18ebc6bd2428d950974c704262125f11a031ffc83cb7b889c5652d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_174f0e78f18ebc6bd2428d950974c704262125f11a031ffc83cb7b889c5652d3->leave($__internal_174f0e78f18ebc6bd2428d950974c704262125f11a031ffc83cb7b889c5652d3_prof);

        
        $__internal_9b64c7cf290c615eb83d4e9e5f6a84a3966eb9c7ea576561377646e095ca6cd1->leave($__internal_9b64c7cf290c615eb83d4e9e5f6a84a3966eb9c7ea576561377646e095ca6cd1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock body %}
", "AppBundle:Registration:checkEmail.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
