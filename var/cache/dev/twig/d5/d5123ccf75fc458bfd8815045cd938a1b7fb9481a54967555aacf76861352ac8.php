<?php

/* AppBundle:Resetting:email.txt.twig */
class __TwigTemplate_4e0bc7ec5551fa1b575252b6b78616d3bbcce15c32a5b92e5b47340652a1b3c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a3bef27b661743bed3b647e531e04d5bd48dde05c7bb0125a0bfcc277d9c596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3bef27b661743bed3b647e531e04d5bd48dde05c7bb0125a0bfcc277d9c596->enter($__internal_9a3bef27b661743bed3b647e531e04d5bd48dde05c7bb0125a0bfcc277d9c596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:email.txt.twig"));

        $__internal_8201f993b4ee22b60582ce083ec7571230f20ab241393853d88b324b9b3f54e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8201f993b4ee22b60582ce083ec7571230f20ab241393853d88b324b9b3f54e6->enter($__internal_8201f993b4ee22b60582ce083ec7571230f20ab241393853d88b324b9b3f54e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9a3bef27b661743bed3b647e531e04d5bd48dde05c7bb0125a0bfcc277d9c596->leave($__internal_9a3bef27b661743bed3b647e531e04d5bd48dde05c7bb0125a0bfcc277d9c596_prof);

        
        $__internal_8201f993b4ee22b60582ce083ec7571230f20ab241393853d88b324b9b3f54e6->leave($__internal_8201f993b4ee22b60582ce083ec7571230f20ab241393853d88b324b9b3f54e6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_107b0b051a69470e32de8ba4b9775696cefcdb54bb1220e072b6b02488a62eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107b0b051a69470e32de8ba4b9775696cefcdb54bb1220e072b6b02488a62eae->enter($__internal_107b0b051a69470e32de8ba4b9775696cefcdb54bb1220e072b6b02488a62eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_726bb704047d471e521d52eb561452811e3c40b0e87343d57a03088c89180fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726bb704047d471e521d52eb561452811e3c40b0e87343d57a03088c89180fea->enter($__internal_726bb704047d471e521d52eb561452811e3c40b0e87343d57a03088c89180fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_726bb704047d471e521d52eb561452811e3c40b0e87343d57a03088c89180fea->leave($__internal_726bb704047d471e521d52eb561452811e3c40b0e87343d57a03088c89180fea_prof);

        
        $__internal_107b0b051a69470e32de8ba4b9775696cefcdb54bb1220e072b6b02488a62eae->leave($__internal_107b0b051a69470e32de8ba4b9775696cefcdb54bb1220e072b6b02488a62eae_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_db74f74caa8e14366fc741b9365a4f7cf9dcd9f9a88cc68ae747e603cf96c193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db74f74caa8e14366fc741b9365a4f7cf9dcd9f9a88cc68ae747e603cf96c193->enter($__internal_db74f74caa8e14366fc741b9365a4f7cf9dcd9f9a88cc68ae747e603cf96c193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_64651c08500363ec94cda3aa64fa6e8376bd12a9f70a1a9207306f23a7761f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64651c08500363ec94cda3aa64fa6e8376bd12a9f70a1a9207306f23a7761f8e->enter($__internal_64651c08500363ec94cda3aa64fa6e8376bd12a9f70a1a9207306f23a7761f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_64651c08500363ec94cda3aa64fa6e8376bd12a9f70a1a9207306f23a7761f8e->leave($__internal_64651c08500363ec94cda3aa64fa6e8376bd12a9f70a1a9207306f23a7761f8e_prof);

        
        $__internal_db74f74caa8e14366fc741b9365a4f7cf9dcd9f9a88cc68ae747e603cf96c193->leave($__internal_db74f74caa8e14366fc741b9365a4f7cf9dcd9f9a88cc68ae747e603cf96c193_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5e4b7082e45ad44efee6c5a8f0af25f15cd1d66334dc45305dfc9fbb2813a5ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4b7082e45ad44efee6c5a8f0af25f15cd1d66334dc45305dfc9fbb2813a5ec->enter($__internal_5e4b7082e45ad44efee6c5a8f0af25f15cd1d66334dc45305dfc9fbb2813a5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ef3e33f1e7e298d3f1dac52a398488013c19890d641ca64e888b5d6c0ccdb322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3e33f1e7e298d3f1dac52a398488013c19890d641ca64e888b5d6c0ccdb322->enter($__internal_ef3e33f1e7e298d3f1dac52a398488013c19890d641ca64e888b5d6c0ccdb322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ef3e33f1e7e298d3f1dac52a398488013c19890d641ca64e888b5d6c0ccdb322->leave($__internal_ef3e33f1e7e298d3f1dac52a398488013c19890d641ca64e888b5d6c0ccdb322_prof);

        
        $__internal_5e4b7082e45ad44efee6c5a8f0af25f15cd1d66334dc45305dfc9fbb2813a5ec->leave($__internal_5e4b7082e45ad44efee6c5a8f0af25f15cd1d66334dc45305dfc9fbb2813a5ec_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 12,  72 => 9,  63 => 7,  51 => 4,  42 => 2,  32 => 12,  30 => 7,  28 => 2,);
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
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "AppBundle:Resetting:email.txt.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
