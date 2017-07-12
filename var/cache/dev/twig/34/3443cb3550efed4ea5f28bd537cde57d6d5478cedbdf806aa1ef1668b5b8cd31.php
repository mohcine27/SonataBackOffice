<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_7bfa0e478fea1869cff5f62a0b03b815985446ac1bee1e9d37b3ad903b0180b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce6ce96e43b6b64651edf7567eda894daea9bd86798c65b21dc83a03a45e12fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6ce96e43b6b64651edf7567eda894daea9bd86798c65b21dc83a03a45e12fd->enter($__internal_ce6ce96e43b6b64651edf7567eda894daea9bd86798c65b21dc83a03a45e12fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_5af1ddc1ef87a6f2de9f03f4eca6070b7748c0a393d84890d89519db69530190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af1ddc1ef87a6f2de9f03f4eca6070b7748c0a393d84890d89519db69530190->enter($__internal_5af1ddc1ef87a6f2de9f03f4eca6070b7748c0a393d84890d89519db69530190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce6ce96e43b6b64651edf7567eda894daea9bd86798c65b21dc83a03a45e12fd->leave($__internal_ce6ce96e43b6b64651edf7567eda894daea9bd86798c65b21dc83a03a45e12fd_prof);

        
        $__internal_5af1ddc1ef87a6f2de9f03f4eca6070b7748c0a393d84890d89519db69530190->leave($__internal_5af1ddc1ef87a6f2de9f03f4eca6070b7748c0a393d84890d89519db69530190_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_inner_row.html.twig");
    }
}
