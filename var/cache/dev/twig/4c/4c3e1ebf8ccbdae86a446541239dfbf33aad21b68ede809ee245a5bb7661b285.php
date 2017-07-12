<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_ce42af5ebfa2ac55e823173a1bc72827e19edc163633e010860f383f14ba8b10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7721fbcc5c82c09f0a3f86f298a8cb81eadeb65e1f526c928847a8f7eed2bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7721fbcc5c82c09f0a3f86f298a8cb81eadeb65e1f526c928847a8f7eed2bdb->enter($__internal_c7721fbcc5c82c09f0a3f86f298a8cb81eadeb65e1f526c928847a8f7eed2bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_c685555dee1b59f26fb6a03ca006cd0c26919c3b65ebd77db57dbc0444c036f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c685555dee1b59f26fb6a03ca006cd0c26919c3b65ebd77db57dbc0444c036f4->enter($__internal_c685555dee1b59f26fb6a03ca006cd0c26919c3b65ebd77db57dbc0444c036f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7721fbcc5c82c09f0a3f86f298a8cb81eadeb65e1f526c928847a8f7eed2bdb->leave($__internal_c7721fbcc5c82c09f0a3f86f298a8cb81eadeb65e1f526c928847a8f7eed2bdb_prof);

        
        $__internal_c685555dee1b59f26fb6a03ca006cd0c26919c3b65ebd77db57dbc0444c036f4->leave($__internal_c685555dee1b59f26fb6a03ca006cd0c26919c3b65ebd77db57dbc0444c036f4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit.html.twig");
    }
}
