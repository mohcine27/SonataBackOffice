<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_ae22e8ea3252d0bc777acdf75d05789d487dc06e0e0e8aadf8385b9051aefab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7f48477f8e325f46529e11443b8f519453fa3c83336ad14334aa46999e1521f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f48477f8e325f46529e11443b8f519453fa3c83336ad14334aa46999e1521f->enter($__internal_a7f48477f8e325f46529e11443b8f519453fa3c83336ad14334aa46999e1521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        $__internal_bd77680cc7582aa131be6ba6699e547b9d6e76a32042dd11254549a7df10ae58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd77680cc7582aa131be6ba6699e547b9d6e76a32042dd11254549a7df10ae58->enter($__internal_bd77680cc7582aa131be6ba6699e547b9d6e76a32042dd11254549a7df10ae58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_a7f48477f8e325f46529e11443b8f519453fa3c83336ad14334aa46999e1521f->leave($__internal_a7f48477f8e325f46529e11443b8f519453fa3c83336ad14334aa46999e1521f_prof);

        
        $__internal_bd77680cc7582aa131be6ba6699e547b9d6e76a32042dd11254549a7df10ae58->leave($__internal_bd77680cc7582aa131be6ba6699e547b9d6e76a32042dd11254549a7df10ae58_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{{ revision.timestamp|date }}
", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\history_revision_timestamp.html.twig");
    }
}
