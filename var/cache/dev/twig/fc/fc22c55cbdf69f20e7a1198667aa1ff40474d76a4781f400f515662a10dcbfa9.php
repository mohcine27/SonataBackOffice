<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_a59214888662c3e9beecbe9d5cc4044dacad39a312860bba42acf4207712e3c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53f14af6bb06d6e1664e233b596f07b526ea5b55dfd13111bd1b00a88f401885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f14af6bb06d6e1664e233b596f07b526ea5b55dfd13111bd1b00a88f401885->enter($__internal_53f14af6bb06d6e1664e233b596f07b526ea5b55dfd13111bd1b00a88f401885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $__internal_97f97c7cb29984e2a276c34a038a2f1db5af0d64de88831c223a1e21cb9369df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f97c7cb29984e2a276c34a038a2f1db5af0d64de88831c223a1e21cb9369df->enter($__internal_97f97c7cb29984e2a276c34a038a2f1db5af0d64de88831c223a1e21cb9369df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f14af6bb06d6e1664e233b596f07b526ea5b55dfd13111bd1b00a88f401885->leave($__internal_53f14af6bb06d6e1664e233b596f07b526ea5b55dfd13111bd1b00a88f401885_prof);

        
        $__internal_97f97c7cb29984e2a276c34a038a2f1db5af0d64de88831c223a1e21cb9369df->leave($__internal_97f97c7cb29984e2a276c34a038a2f1db5af0d64de88831c223a1e21cb9369df_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\acl.html.twig");
    }
}
