<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_ecd26c80147a0163d5efe2fede6c94436a01bfe4cf30104a70f2a0eb54c74189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ed575c23b1f408260538c94a86e965dcecf6bca2d6aa2fc033680e9d7897f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed575c23b1f408260538c94a86e965dcecf6bca2d6aa2fc033680e9d7897f8d->enter($__internal_5ed575c23b1f408260538c94a86e965dcecf6bca2d6aa2fc033680e9d7897f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $__internal_f8458aa4f9e3950f5be57443eab9f8440baa11ee22f0be86b7b7b39f983f150b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8458aa4f9e3950f5be57443eab9f8440baa11ee22f0be86b7b7b39f983f150b->enter($__internal_f8458aa4f9e3950f5be57443eab9f8440baa11ee22f0be86b7b7b39f983f150b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ed575c23b1f408260538c94a86e965dcecf6bca2d6aa2fc033680e9d7897f8d->leave($__internal_5ed575c23b1f408260538c94a86e965dcecf6bca2d6aa2fc033680e9d7897f8d_prof);

        
        $__internal_f8458aa4f9e3950f5be57443eab9f8440baa11ee22f0be86b7b7b39f983f150b->leave($__internal_f8458aa4f9e3950f5be57443eab9f8440baa11ee22f0be86b7b7b39f983f150b_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_f68b41b384a56440f9cd82d90e9adc823b4066b80aea1b73c264560bce3a8981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68b41b384a56440f9cd82d90e9adc823b4066b80aea1b73c264560bce3a8981->enter($__internal_f68b41b384a56440f9cd82d90e9adc823b4066b80aea1b73c264560bce3a8981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_efc395f1075dee300c03e8d8947daeb430f44f417f729a82e17c0451656f0794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc395f1075dee300c03e8d8947daeb430f44f417f729a82e17c0451656f0794->enter($__internal_efc395f1075dee300c03e8d8947daeb430f44f417f729a82e17c0451656f0794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_efc395f1075dee300c03e8d8947daeb430f44f417f729a82e17c0451656f0794->leave($__internal_efc395f1075dee300c03e8d8947daeb430f44f417f729a82e17c0451656f0794_prof);

        
        $__internal_f68b41b384a56440f9cd82d90e9adc823b4066b80aea1b73c264560bce3a8981->leave($__internal_f68b41b384a56440f9cd82d90e9adc823b4066b80aea1b73c264560bce3a8981_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_email.html.twig");
    }
}
