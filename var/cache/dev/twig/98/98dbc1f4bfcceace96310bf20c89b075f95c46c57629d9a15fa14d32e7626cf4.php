<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_acd20bccf755e82461ace93a4bc63b1a05bba221058c40ce61b1b8ca9b7a1b98 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_512d58507eb6ea00b26547750e6db37b2fd056ca6ee63a108178d11193674bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_512d58507eb6ea00b26547750e6db37b2fd056ca6ee63a108178d11193674bf5->enter($__internal_512d58507eb6ea00b26547750e6db37b2fd056ca6ee63a108178d11193674bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $__internal_77e0d1659b52b33d7972cb939ce9498ed94fa3777d47e6e1f4bc474c1c89cddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e0d1659b52b33d7972cb939ce9498ed94fa3777d47e6e1f4bc474c1c89cddb->enter($__internal_77e0d1659b52b33d7972cb939ce9498ed94fa3777d47e6e1f4bc474c1c89cddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512d58507eb6ea00b26547750e6db37b2fd056ca6ee63a108178d11193674bf5->leave($__internal_512d58507eb6ea00b26547750e6db37b2fd056ca6ee63a108178d11193674bf5_prof);

        
        $__internal_77e0d1659b52b33d7972cb939ce9498ed94fa3777d47e6e1f4bc474c1c89cddb->leave($__internal_77e0d1659b52b33d7972cb939ce9498ed94fa3777d47e6e1f4bc474c1c89cddb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a3af160f051d0c078ff3aebe8d9ea586afc64e7a6b00e55e889b81e4d99ac1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3af160f051d0c078ff3aebe8d9ea586afc64e7a6b00e55e889b81e4d99ac1d1->enter($__internal_a3af160f051d0c078ff3aebe8d9ea586afc64e7a6b00e55e889b81e4d99ac1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e9139e812280cca0329a1ac8da6263ae4415d9826d0ddfe4b5564edc78a394b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9139e812280cca0329a1ac8da6263ae4415d9826d0ddfe4b5564edc78a394b6->enter($__internal_e9139e812280cca0329a1ac8da6263ae4415d9826d0ddfe4b5564edc78a394b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e9139e812280cca0329a1ac8da6263ae4415d9826d0ddfe4b5564edc78a394b6->leave($__internal_e9139e812280cca0329a1ac8da6263ae4415d9826d0ddfe4b5564edc78a394b6_prof);

        
        $__internal_a3af160f051d0c078ff3aebe8d9ea586afc64e7a6b00e55e889b81e4d99ac1d1->leave($__internal_a3af160f051d0c078ff3aebe8d9ea586afc64e7a6b00e55e889b81e4d99ac1d1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_string.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_string.html.twig");
    }
}
