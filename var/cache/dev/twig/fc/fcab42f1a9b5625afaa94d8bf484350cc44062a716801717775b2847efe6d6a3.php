<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_b073d8d24630e2037a0942d87c6f3a5aa8637ae4a26a1d9af1da693543dc7ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33feba6854e73b10fd6f1ed9bc000e93d1203c2c128fce3e828967b4e60a5554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33feba6854e73b10fd6f1ed9bc000e93d1203c2c128fce3e828967b4e60a5554->enter($__internal_33feba6854e73b10fd6f1ed9bc000e93d1203c2c128fce3e828967b4e60a5554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $__internal_8ccc77043167a10714767fad4146327c3b7924cd839f85faa41d1f456749c4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ccc77043167a10714767fad4146327c3b7924cd839f85faa41d1f456749c4c2->enter($__internal_8ccc77043167a10714767fad4146327c3b7924cd839f85faa41d1f456749c4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33feba6854e73b10fd6f1ed9bc000e93d1203c2c128fce3e828967b4e60a5554->leave($__internal_33feba6854e73b10fd6f1ed9bc000e93d1203c2c128fce3e828967b4e60a5554_prof);

        
        $__internal_8ccc77043167a10714767fad4146327c3b7924cd839f85faa41d1f456749c4c2->leave($__internal_8ccc77043167a10714767fad4146327c3b7924cd839f85faa41d1f456749c4c2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\history.html.twig");
    }
}
