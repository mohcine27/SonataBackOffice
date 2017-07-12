<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_55f1b06938b9a699cbf97a5c39caf90d70d5c95ebadca9850eed00bb6764a688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4c0fdcccdf32c448e2562b59ce23287eb2bbb7d0da06f2a176e401a22a4ee76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c0fdcccdf32c448e2562b59ce23287eb2bbb7d0da06f2a176e401a22a4ee76->enter($__internal_d4c0fdcccdf32c448e2562b59ce23287eb2bbb7d0da06f2a176e401a22a4ee76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $__internal_8779b5c391aacf75a661a3857b554945acec3d3c417032b29ffaae65cbe47bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8779b5c391aacf75a661a3857b554945acec3d3c417032b29ffaae65cbe47bef->enter($__internal_8779b5c391aacf75a661a3857b554945acec3d3c417032b29ffaae65cbe47bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4c0fdcccdf32c448e2562b59ce23287eb2bbb7d0da06f2a176e401a22a4ee76->leave($__internal_d4c0fdcccdf32c448e2562b59ce23287eb2bbb7d0da06f2a176e401a22a4ee76_prof);

        
        $__internal_8779b5c391aacf75a661a3857b554945acec3d3c417032b29ffaae65cbe47bef->leave($__internal_8779b5c391aacf75a661a3857b554945acec3d3c417032b29ffaae65cbe47bef_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "SonataAdminBundle:CRUD:show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show.html.twig");
    }
}
