<?php

/* AppBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_cc2fb9a94b851e9ebfc5d0897cf1bb19b029759419821eeb0591053cd6b5f728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e65ee1563106803a6c2ee0c3ee5452e31eaec4a2708bf1c0d90256485c5e52be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65ee1563106803a6c2ee0c3ee5452e31eaec4a2708bf1c0d90256485c5e52be->enter($__internal_e65ee1563106803a6c2ee0c3ee5452e31eaec4a2708bf1c0d90256485c5e52be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:checkEmail.html.twig"));

        $__internal_d865884ef955bfbfba85249cfc1b95c5526a4c1f9d7d0ce1fa43c8866c12195e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d865884ef955bfbfba85249cfc1b95c5526a4c1f9d7d0ce1fa43c8866c12195e->enter($__internal_d865884ef955bfbfba85249cfc1b95c5526a4c1f9d7d0ce1fa43c8866c12195e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e65ee1563106803a6c2ee0c3ee5452e31eaec4a2708bf1c0d90256485c5e52be->leave($__internal_e65ee1563106803a6c2ee0c3ee5452e31eaec4a2708bf1c0d90256485c5e52be_prof);

        
        $__internal_d865884ef955bfbfba85249cfc1b95c5526a4c1f9d7d0ce1fa43c8866c12195e->leave($__internal_d865884ef955bfbfba85249cfc1b95c5526a4c1f9d7d0ce1fa43c8866c12195e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bbc19904699a9c5cef3a8a79c7522c5223fafba133107b58ac101a944b29216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bbc19904699a9c5cef3a8a79c7522c5223fafba133107b58ac101a944b29216->enter($__internal_4bbc19904699a9c5cef3a8a79c7522c5223fafba133107b58ac101a944b29216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58327926dedbe904fa7d7b7f579bbe22c93f49169ff0ddc7930596a00bb1c212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58327926dedbe904fa7d7b7f579bbe22c93f49169ff0ddc7930596a00bb1c212->enter($__internal_58327926dedbe904fa7d7b7f579bbe22c93f49169ff0ddc7930596a00bb1c212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_58327926dedbe904fa7d7b7f579bbe22c93f49169ff0ddc7930596a00bb1c212->leave($__internal_58327926dedbe904fa7d7b7f579bbe22c93f49169ff0ddc7930596a00bb1c212_prof);

        
        $__internal_4bbc19904699a9c5cef3a8a79c7522c5223fafba133107b58ac101a944b29216->leave($__internal_4bbc19904699a9c5cef3a8a79c7522c5223fafba133107b58ac101a944b29216_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aba3c56e1b62b754ac4b23c10e5cbf1674bd1df14d7526ee7f7237877781f77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba3c56e1b62b754ac4b23c10e5cbf1674bd1df14d7526ee7f7237877781f77d->enter($__internal_aba3c56e1b62b754ac4b23c10e5cbf1674bd1df14d7526ee7f7237877781f77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b477ca2c21b131740f88181e82ba4855a1712dc9f18b5dac82dd5fef25560957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b477ca2c21b131740f88181e82ba4855a1712dc9f18b5dac82dd5fef25560957->enter($__internal_b477ca2c21b131740f88181e82ba4855a1712dc9f18b5dac82dd5fef25560957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "\t<p>
\t";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
\t</p>
\t";
        
        $__internal_b477ca2c21b131740f88181e82ba4855a1712dc9f18b5dac82dd5fef25560957->leave($__internal_b477ca2c21b131740f88181e82ba4855a1712dc9f18b5dac82dd5fef25560957_prof);

        
        $__internal_aba3c56e1b62b754ac4b23c10e5cbf1674bd1df14d7526ee7f7237877781f77d->leave($__internal_aba3c56e1b62b754ac4b23c10e5cbf1674bd1df14d7526ee7f7237877781f77d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 6,  73 => 5,  64 => 4,  53 => 9,  50 => 4,  41 => 3,  11 => 1,);
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
\t{% block fos_user_content %}
\t<p>
\t{{ 'resetting.check_email'|trans({'%email%': email}) }}
\t</p>
\t{% endblock %}

{%endblock%}", "AppBundle:Resetting:checkEmail.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
