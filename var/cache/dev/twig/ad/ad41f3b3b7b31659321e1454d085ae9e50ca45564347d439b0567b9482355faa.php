<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_b385df305463ac52e9876093b7fde1593893a1a06716d95492aa394a39dcb31f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12737371530f3f5916edf11c719c4c084676cabf75d448707e300347293ec0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12737371530f3f5916edf11c719c4c084676cabf75d448707e300347293ec0cb->enter($__internal_12737371530f3f5916edf11c719c4c084676cabf75d448707e300347293ec0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $__internal_1d39cf98d4f702f9fe348c44a2b7cbe1422b8672e20a4dc7076e84319c06cd83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d39cf98d4f702f9fe348c44a2b7cbe1422b8672e20a4dc7076e84319c06cd83->enter($__internal_1d39cf98d4f702f9fe348c44a2b7cbe1422b8672e20a4dc7076e84319c06cd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12737371530f3f5916edf11c719c4c084676cabf75d448707e300347293ec0cb->leave($__internal_12737371530f3f5916edf11c719c4c084676cabf75d448707e300347293ec0cb_prof);

        
        $__internal_1d39cf98d4f702f9fe348c44a2b7cbe1422b8672e20a4dc7076e84319c06cd83->leave($__internal_1d39cf98d4f702f9fe348c44a2b7cbe1422b8672e20a4dc7076e84319c06cd83_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1c2e6aad895bdd16fcd24211830eea744dd57ad0fb4f1f170827dfdd891aea85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2e6aad895bdd16fcd24211830eea744dd57ad0fb4f1f170827dfdd891aea85->enter($__internal_1c2e6aad895bdd16fcd24211830eea744dd57ad0fb4f1f170827dfdd891aea85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a2774244df32c39301f4a9a9734c7ea2df9f0c4d82645d58d8e85f66165ab2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2774244df32c39301f4a9a9734c7ea2df9f0c4d82645d58d8e85f66165ab2ab->enter($__internal_a2774244df32c39301f4a9a9734c7ea2df9f0c4d82645d58d8e85f66165ab2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_a2774244df32c39301f4a9a9734c7ea2df9f0c4d82645d58d8e85f66165ab2ab->leave($__internal_a2774244df32c39301f4a9a9734c7ea2df9f0c4d82645d58d8e85f66165ab2ab_prof);

        
        $__internal_1c2e6aad895bdd16fcd24211830eea744dd57ad0fb4f1f170827dfdd891aea85->leave($__internal_1c2e6aad895bdd16fcd24211830eea744dd57ad0fb4f1f170827dfdd891aea85_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_currency.html.twig");
    }
}
