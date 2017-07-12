<?php

/* AppBundle:Profile:show.html.twig */
class __TwigTemplate_5d177183ed639ace6d3e7c5fa8133673fd5c0de5fc6e49c6b0ee63fd75f1152d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Profile:show.html.twig", 2);
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
        $__internal_34b220912e1261400c1f7cdba667d9182da46715547a995004fc43994c198e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b220912e1261400c1f7cdba667d9182da46715547a995004fc43994c198e45->enter($__internal_34b220912e1261400c1f7cdba667d9182da46715547a995004fc43994c198e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Profile:show.html.twig"));

        $__internal_7fa2723b4d021e5949e4a0efa43351cda6f8016786edc1972fa430cd99d63a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa2723b4d021e5949e4a0efa43351cda6f8016786edc1972fa430cd99d63a36->enter($__internal_7fa2723b4d021e5949e4a0efa43351cda6f8016786edc1972fa430cd99d63a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34b220912e1261400c1f7cdba667d9182da46715547a995004fc43994c198e45->leave($__internal_34b220912e1261400c1f7cdba667d9182da46715547a995004fc43994c198e45_prof);

        
        $__internal_7fa2723b4d021e5949e4a0efa43351cda6f8016786edc1972fa430cd99d63a36->leave($__internal_7fa2723b4d021e5949e4a0efa43351cda6f8016786edc1972fa430cd99d63a36_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_15cdbb6c51ad97a468cae437d83ff066d000b4ea4a2259712991b365f9ddb282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15cdbb6c51ad97a468cae437d83ff066d000b4ea4a2259712991b365f9ddb282->enter($__internal_15cdbb6c51ad97a468cae437d83ff066d000b4ea4a2259712991b365f9ddb282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c1e45e02a5f02531c60fc8dca93c4ede504103701c3c6593a16674e0e752f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1e45e02a5f02531c60fc8dca93c4ede504103701c3c6593a16674e0e752f86->enter($__internal_1c1e45e02a5f02531c60fc8dca93c4ede504103701c3c6593a16674e0e752f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"fos_user_user_show\">
        <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    </div>
\t";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Edit Profile</a>
\t";
        }
        // line 12
        echo "\t<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Se déconnecter</a>
\t";
        
        $__internal_1c1e45e02a5f02531c60fc8dca93c4ede504103701c3c6593a16674e0e752f86->leave($__internal_1c1e45e02a5f02531c60fc8dca93c4ede504103701c3c6593a16674e0e752f86_prof);

        
        $__internal_15cdbb6c51ad97a468cae437d83ff066d000b4ea4a2259712991b365f9ddb282->leave($__internal_15cdbb6c51ad97a468cae437d83ff066d000b4ea4a2259712991b365f9ddb282_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  67 => 10,  65 => 9,  58 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"fos_user_user_show\">
        <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
        <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
    </div>
\t{% if is_granted('ROLE_ADMIN')%}
\t\t<a href=\"{{ path('fos_user_profile_edit') }}\">Edit Profile</a>
\t{% endif %}
\t<a href=\"{{ path('fos_user_security_logout') }}\">Se déconnecter</a>
\t{# <p>{{ role}}</p> #}
{% endblock body %}", "AppBundle:Profile:show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
