<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_8fb19a652c2973918bc84798ae2880cf31d386192dacbe10990b93292fff7d20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_053da91cedef0ea48685114fbdd061c6b8d880d26b8a8a501079d774dade7e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053da91cedef0ea48685114fbdd061c6b8d880d26b8a8a501079d774dade7e59->enter($__internal_053da91cedef0ea48685114fbdd061c6b8d880d26b8a8a501079d774dade7e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $__internal_71f21e4164d20d381c13548021759c8f66121eeb5a06f94c745b90842358e669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f21e4164d20d381c13548021759c8f66121eeb5a06f94c745b90842358e669->enter($__internal_71f21e4164d20d381c13548021759c8f66121eeb5a06f94c745b90842358e669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_053da91cedef0ea48685114fbdd061c6b8d880d26b8a8a501079d774dade7e59->leave($__internal_053da91cedef0ea48685114fbdd061c6b8d880d26b8a8a501079d774dade7e59_prof);

        
        $__internal_71f21e4164d20d381c13548021759c8f66121eeb5a06f94c745b90842358e669->leave($__internal_71f21e4164d20d381c13548021759c8f66121eeb5a06f94c745b90842358e669_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "SonataAdminBundle:Pager:links.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Pager\\links.html.twig");
    }
}
