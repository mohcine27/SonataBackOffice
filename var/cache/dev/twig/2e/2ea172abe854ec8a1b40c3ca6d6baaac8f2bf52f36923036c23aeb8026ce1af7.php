<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_197df726d06c1571ba2437e072813008c63649ab0577bd0a79da468c81c5605f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a9ed3931d71d54fba70fdcf8df92605cc61b1551bf2e22aa950f3a3892d1629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a9ed3931d71d54fba70fdcf8df92605cc61b1551bf2e22aa950f3a3892d1629->enter($__internal_4a9ed3931d71d54fba70fdcf8df92605cc61b1551bf2e22aa950f3a3892d1629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $__internal_abdfb8d648f860f4cb5edd92bb516f174647013658ceb43063b8c0a45cf1b9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdfb8d648f860f4cb5edd92bb516f174647013658ceb43063b8c0a45cf1b9fe->enter($__internal_abdfb8d648f860f4cb5edd92bb516f174647013658ceb43063b8c0a45cf1b9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a9ed3931d71d54fba70fdcf8df92605cc61b1551bf2e22aa950f3a3892d1629->leave($__internal_4a9ed3931d71d54fba70fdcf8df92605cc61b1551bf2e22aa950f3a3892d1629_prof);

        
        $__internal_abdfb8d648f860f4cb5edd92bb516f174647013658ceb43063b8c0a45cf1b9fe->leave($__internal_abdfb8d648f860f4cb5edd92bb516f174647013658ceb43063b8c0a45cf1b9fe_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_df675af5116429cf046e6bb6f9d72dab287a0c3a81c0398700034e7368acd668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df675af5116429cf046e6bb6f9d72dab287a0c3a81c0398700034e7368acd668->enter($__internal_df675af5116429cf046e6bb6f9d72dab287a0c3a81c0398700034e7368acd668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_971964d97fac6806bed17ffacbb7425598202c3afe73937295d7482a01ffeb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971964d97fac6806bed17ffacbb7425598202c3afe73937295d7482a01ffeb46->enter($__internal_971964d97fac6806bed17ffacbb7425598202c3afe73937295d7482a01ffeb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_971964d97fac6806bed17ffacbb7425598202c3afe73937295d7482a01ffeb46->leave($__internal_971964d97fac6806bed17ffacbb7425598202c3afe73937295d7482a01ffeb46_prof);

        
        $__internal_df675af5116429cf046e6bb6f9d72dab287a0c3a81c0398700034e7368acd668->leave($__internal_df675af5116429cf046e6bb6f9d72dab287a0c3a81c0398700034e7368acd668_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_percent.html.twig");
    }
}
