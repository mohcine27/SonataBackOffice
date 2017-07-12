<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_c67c6519be93de29e6d4e8006ed55a3a35cb42449a01f0c984bb7afe6c894839 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29e0ed633bfbd8e36e7d7ede6b425ca5b7e07b95a663633965989c18e5635e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e0ed633bfbd8e36e7d7ede6b425ca5b7e07b95a663633965989c18e5635e9f->enter($__internal_29e0ed633bfbd8e36e7d7ede6b425ca5b7e07b95a663633965989c18e5635e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_28cc4f0cb48a0e95e2d8c9b76f4e37cb72ecf5fe8222658506b28a5422df81bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28cc4f0cb48a0e95e2d8c9b76f4e37cb72ecf5fe8222658506b28a5422df81bc->enter($__internal_28cc4f0cb48a0e95e2d8c9b76f4e37cb72ecf5fe8222658506b28a5422df81bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e0ed633bfbd8e36e7d7ede6b425ca5b7e07b95a663633965989c18e5635e9f->leave($__internal_29e0ed633bfbd8e36e7d7ede6b425ca5b7e07b95a663633965989c18e5635e9f_prof);

        
        $__internal_28cc4f0cb48a0e95e2d8c9b76f4e37cb72ecf5fe8222658506b28a5422df81bc->leave($__internal_28cc4f0cb48a0e95e2d8c9b76f4e37cb72ecf5fe8222658506b28a5422df81bc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}
", "SonataAdminBundle:CRUD:list_string.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_string.html.twig");
    }
}
