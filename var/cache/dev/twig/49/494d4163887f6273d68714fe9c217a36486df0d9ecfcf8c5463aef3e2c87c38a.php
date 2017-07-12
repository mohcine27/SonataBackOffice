<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_64802d38354befe92110f48e9bdab84f8e7a33581178a5d57fbb765be15eeef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_692590e1b2759a896277fb46085af06736c6a43e6ca79c70c5ad3bb5e39524e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692590e1b2759a896277fb46085af06736c6a43e6ca79c70c5ad3bb5e39524e6->enter($__internal_692590e1b2759a896277fb46085af06736c6a43e6ca79c70c5ad3bb5e39524e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_4dfbc880e985561e44f929e0b89aec17b7f41e1e3be42b166c1d021a4650333f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfbc880e985561e44f929e0b89aec17b7f41e1e3be42b166c1d021a4650333f->enter($__internal_4dfbc880e985561e44f929e0b89aec17b7f41e1e3be42b166c1d021a4650333f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_692590e1b2759a896277fb46085af06736c6a43e6ca79c70c5ad3bb5e39524e6->leave($__internal_692590e1b2759a896277fb46085af06736c6a43e6ca79c70c5ad3bb5e39524e6_prof);

        
        $__internal_4dfbc880e985561e44f929e0b89aec17b7f41e1e3be42b166c1d021a4650333f->leave($__internal_4dfbc880e985561e44f929e0b89aec17b7f41e1e3be42b166c1d021a4650333f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Pager\\results.html.twig");
    }
}
