<?php

/* AppBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_48f11ce99e6ced5701b2a0bfd02dc67ba9fe6a3f936ede58e7fa18af6fc9b7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_b1ee01adbee164301fa78c4b10808e7c70ee13553993d5b3c0dbca4d577d1d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ee01adbee164301fa78c4b10808e7c70ee13553993d5b3c0dbca4d577d1d73->enter($__internal_b1ee01adbee164301fa78c4b10808e7c70ee13553993d5b3c0dbca4d577d1d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $__internal_a843476f6c63fc3de98e5af39fa93e51f000a569372ebe005eb265347fbeca3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a843476f6c63fc3de98e5af39fa93e51f000a569372ebe005eb265347fbeca3c->enter($__internal_a843476f6c63fc3de98e5af39fa93e51f000a569372ebe005eb265347fbeca3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ee01adbee164301fa78c4b10808e7c70ee13553993d5b3c0dbca4d577d1d73->leave($__internal_b1ee01adbee164301fa78c4b10808e7c70ee13553993d5b3c0dbca4d577d1d73_prof);

        
        $__internal_a843476f6c63fc3de98e5af39fa93e51f000a569372ebe005eb265347fbeca3c->leave($__internal_a843476f6c63fc3de98e5af39fa93e51f000a569372ebe005eb265347fbeca3c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7772b5fcffd83de92c4b43e43a861ce7a2601816090183355ba2f4ffebb5a169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7772b5fcffd83de92c4b43e43a861ce7a2601816090183355ba2f4ffebb5a169->enter($__internal_7772b5fcffd83de92c4b43e43a861ce7a2601816090183355ba2f4ffebb5a169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5427d7b71575c02f2aeab898f6ec06bbd538bbff19b2aed27e43121e33155fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5427d7b71575c02f2aeab898f6ec06bbd538bbff19b2aed27e43121e33155fb7->enter($__internal_5427d7b71575c02f2aeab898f6ec06bbd538bbff19b2aed27e43121e33155fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_5427d7b71575c02f2aeab898f6ec06bbd538bbff19b2aed27e43121e33155fb7->leave($__internal_5427d7b71575c02f2aeab898f6ec06bbd538bbff19b2aed27e43121e33155fb7_prof);

        
        $__internal_7772b5fcffd83de92c4b43e43a861ce7a2601816090183355ba2f4ffebb5a169->leave($__internal_7772b5fcffd83de92c4b43e43a861ce7a2601816090183355ba2f4ffebb5a169_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ddfef13befb4da42e519dd006dc3df8a1583377355e9c454ca991f097a348c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfef13befb4da42e519dd006dc3df8a1583377355e9c454ca991f097a348c3b->enter($__internal_ddfef13befb4da42e519dd006dc3df8a1583377355e9c454ca991f097a348c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5c9471b8be3421470da02cd11aa31628ffffd5d052ba6f9ba3e24110ed853c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9471b8be3421470da02cd11aa31628ffffd5d052ba6f9ba3e24110ed853c3e->enter($__internal_5c9471b8be3421470da02cd11aa31628ffffd5d052ba6f9ba3e24110ed853c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "\t<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
\t";
        
        $__internal_5c9471b8be3421470da02cd11aa31628ffffd5d052ba6f9ba3e24110ed853c3e->leave($__internal_5c9471b8be3421470da02cd11aa31628ffffd5d052ba6f9ba3e24110ed853c3e_prof);

        
        $__internal_ddfef13befb4da42e519dd006dc3df8a1583377355e9c454ca991f097a348c3b->leave($__internal_ddfef13befb4da42e519dd006dc3df8a1583377355e9c454ca991f097a348c3b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 6,  50 => 5,  41 => 4,  11 => 1,);
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
\t<p>{{ 'resetting.password_already_requested'|trans }}</p>
\t{% endblock fos_user_content %}
{%endblock%}
", "AppBundle:Resetting:passwordAlreadyRequested.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
