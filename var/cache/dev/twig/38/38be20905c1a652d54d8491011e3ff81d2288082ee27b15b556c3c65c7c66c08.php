<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_b679a1ccb271017332880786fae4b379883f3dda3f072180f905e9d8529eb3c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9912b09dfc3c7516fe451ba14450b2b84dbde943978de9222a5f51269cd6bde8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9912b09dfc3c7516fe451ba14450b2b84dbde943978de9222a5f51269cd6bde8->enter($__internal_9912b09dfc3c7516fe451ba14450b2b84dbde943978de9222a5f51269cd6bde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_9f0b25f6e9c9217f5e2bfe466e518b4170a1d380bd2e7f6e45b354613cb79594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0b25f6e9c9217f5e2bfe466e518b4170a1d380bd2e7f6e45b354613cb79594->enter($__internal_9f0b25f6e9c9217f5e2bfe466e518b4170a1d380bd2e7f6e45b354613cb79594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9912b09dfc3c7516fe451ba14450b2b84dbde943978de9222a5f51269cd6bde8->leave($__internal_9912b09dfc3c7516fe451ba14450b2b84dbde943978de9222a5f51269cd6bde8_prof);

        
        $__internal_9f0b25f6e9c9217f5e2bfe466e518b4170a1d380bd2e7f6e45b354613cb79594->leave($__internal_9f0b25f6e9c9217f5e2bfe466e518b4170a1d380bd2e7f6e45b354613cb79594_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\Form\\filter_admin_fields.html.twig");
    }
}
