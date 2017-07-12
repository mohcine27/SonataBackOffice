<?php

/* AppBundle:Registration:email.txt.twig */
class __TwigTemplate_a0ed82032b1e42fd572627c1c47d308bea7279eb1253c5f5a08cf727926501e5 extends Twig_Template
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
        $__internal_f0e2a22b0a7370b40e3b348a0234ac5781c06c79408a3da56a75c37ea1f09123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e2a22b0a7370b40e3b348a0234ac5781c06c79408a3da56a75c37ea1f09123->enter($__internal_f0e2a22b0a7370b40e3b348a0234ac5781c06c79408a3da56a75c37ea1f09123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:email.txt.twig"));

        $__internal_b5273182f67e29b92fce5e4e00ae6f3f8470f5e3a8926a36234ad43541a14457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5273182f67e29b92fce5e4e00ae6f3f8470f5e3a8926a36234ad43541a14457->enter($__internal_b5273182f67e29b92fce5e4e00ae6f3f8470f5e3a8926a36234ad43541a14457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f0e2a22b0a7370b40e3b348a0234ac5781c06c79408a3da56a75c37ea1f09123->leave($__internal_f0e2a22b0a7370b40e3b348a0234ac5781c06c79408a3da56a75c37ea1f09123_prof);

        
        $__internal_b5273182f67e29b92fce5e4e00ae6f3f8470f5e3a8926a36234ad43541a14457->leave($__internal_b5273182f67e29b92fce5e4e00ae6f3f8470f5e3a8926a36234ad43541a14457_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8d7b6b7bbe217fda39fa08e1f5072374e66fe7c28c84faf42aa68995f9a44b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7b6b7bbe217fda39fa08e1f5072374e66fe7c28c84faf42aa68995f9a44b3c->enter($__internal_8d7b6b7bbe217fda39fa08e1f5072374e66fe7c28c84faf42aa68995f9a44b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f617faac4368efdec68dc4a058b1589e0e8f2891013df91bf989d28a5e80e46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f617faac4368efdec68dc4a058b1589e0e8f2891013df91bf989d28a5e80e46b->enter($__internal_f617faac4368efdec68dc4a058b1589e0e8f2891013df91bf989d28a5e80e46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f617faac4368efdec68dc4a058b1589e0e8f2891013df91bf989d28a5e80e46b->leave($__internal_f617faac4368efdec68dc4a058b1589e0e8f2891013df91bf989d28a5e80e46b_prof);

        
        $__internal_8d7b6b7bbe217fda39fa08e1f5072374e66fe7c28c84faf42aa68995f9a44b3c->leave($__internal_8d7b6b7bbe217fda39fa08e1f5072374e66fe7c28c84faf42aa68995f9a44b3c_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dfdabd3d003bfaeb95071f590068607e7bb42771019442d84e89393c124088bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdabd3d003bfaeb95071f590068607e7bb42771019442d84e89393c124088bb->enter($__internal_dfdabd3d003bfaeb95071f590068607e7bb42771019442d84e89393c124088bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_23807663f7788b7ab95495df4e3355e9ddedfb1819aeb967e73401b75379dff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23807663f7788b7ab95495df4e3355e9ddedfb1819aeb967e73401b75379dff2->enter($__internal_23807663f7788b7ab95495df4e3355e9ddedfb1819aeb967e73401b75379dff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_23807663f7788b7ab95495df4e3355e9ddedfb1819aeb967e73401b75379dff2->leave($__internal_23807663f7788b7ab95495df4e3355e9ddedfb1819aeb967e73401b75379dff2_prof);

        
        $__internal_dfdabd3d003bfaeb95071f590068607e7bb42771019442d84e89393c124088bb->leave($__internal_dfdabd3d003bfaeb95071f590068607e7bb42771019442d84e89393c124088bb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_11e090d3991776ea98b7affcddfc367d2076038459b54e01bef25032c8ff0942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e090d3991776ea98b7affcddfc367d2076038459b54e01bef25032c8ff0942->enter($__internal_11e090d3991776ea98b7affcddfc367d2076038459b54e01bef25032c8ff0942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_cf02d48c784e79116829818a2538434611716711806b25ee628e654f86b519ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf02d48c784e79116829818a2538434611716711806b25ee628e654f86b519ae->enter($__internal_cf02d48c784e79116829818a2538434611716711806b25ee628e654f86b519ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cf02d48c784e79116829818a2538434611716711806b25ee628e654f86b519ae->leave($__internal_cf02d48c784e79116829818a2538434611716711806b25ee628e654f86b519ae_prof);

        
        $__internal_11e090d3991776ea98b7affcddfc367d2076038459b54e01bef25032c8ff0942->leave($__internal_11e090d3991776ea98b7affcddfc367d2076038459b54e01bef25032c8ff0942_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "AppBundle:Registration:email.txt.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
