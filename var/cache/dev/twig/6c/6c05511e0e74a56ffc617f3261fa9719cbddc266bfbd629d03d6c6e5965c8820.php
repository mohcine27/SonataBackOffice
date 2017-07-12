<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_7b5c367a818e6c1e6f2de01a83de7f818dfe0dd12fcce2faa2dce3c72efffb0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_313fe03dd881cfa9e0ba8149f06161c39d1c4257cf65ea41e0fd7ef4d3d14092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313fe03dd881cfa9e0ba8149f06161c39d1c4257cf65ea41e0fd7ef4d3d14092->enter($__internal_313fe03dd881cfa9e0ba8149f06161c39d1c4257cf65ea41e0fd7ef4d3d14092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $__internal_8630e54ed2ea346f0d40663cd758c248c2931294b8296439c24f8aa90b688db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8630e54ed2ea346f0d40663cd758c248c2931294b8296439c24f8aa90b688db1->enter($__internal_8630e54ed2ea346f0d40663cd758c248c2931294b8296439c24f8aa90b688db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_313fe03dd881cfa9e0ba8149f06161c39d1c4257cf65ea41e0fd7ef4d3d14092->leave($__internal_313fe03dd881cfa9e0ba8149f06161c39d1c4257cf65ea41e0fd7ef4d3d14092_prof);

        
        $__internal_8630e54ed2ea346f0d40663cd758c248c2931294b8296439c24f8aa90b688db1->leave($__internal_8630e54ed2ea346f0d40663cd758c248c2931294b8296439c24f8aa90b688db1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
", "SonataAdminBundle:CRUD:show_compare.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_compare.html.twig");
    }
}
