<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_22b5937438b679747156e47a65fc167adc5afdc5463b6e76833921d145989ce6 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07204ff96fe42dc41c6a1c0e45ae63b5fa55dc06b2e3d473467baefccd150694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07204ff96fe42dc41c6a1c0e45ae63b5fa55dc06b2e3d473467baefccd150694->enter($__internal_07204ff96fe42dc41c6a1c0e45ae63b5fa55dc06b2e3d473467baefccd150694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $__internal_de132c2b3d8752ae5a9a44969298f10a8834ba6b29ea044bb394d976e99db152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de132c2b3d8752ae5a9a44969298f10a8834ba6b29ea044bb394d976e99db152->enter($__internal_de132c2b3d8752ae5a9a44969298f10a8834ba6b29ea044bb394d976e99db152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07204ff96fe42dc41c6a1c0e45ae63b5fa55dc06b2e3d473467baefccd150694->leave($__internal_07204ff96fe42dc41c6a1c0e45ae63b5fa55dc06b2e3d473467baefccd150694_prof);

        
        $__internal_de132c2b3d8752ae5a9a44969298f10a8834ba6b29ea044bb394d976e99db152->leave($__internal_de132c2b3d8752ae5a9a44969298f10a8834ba6b29ea044bb394d976e99db152_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f77b81a0998cb3dc99489edb9fa914a42b1ccab581643fcb10f07439f2e5e364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77b81a0998cb3dc99489edb9fa914a42b1ccab581643fcb10f07439f2e5e364->enter($__internal_f77b81a0998cb3dc99489edb9fa914a42b1ccab581643fcb10f07439f2e5e364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_795f3679f9f368d05c75e205bd12aae4c75c089391ddcc2519d1f05466e25f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795f3679f9f368d05c75e205bd12aae4c75c089391ddcc2519d1f05466e25f0c->enter($__internal_795f3679f9f368d05c75e205bd12aae4c75c089391ddcc2519d1f05466e25f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_795f3679f9f368d05c75e205bd12aae4c75c089391ddcc2519d1f05466e25f0c->leave($__internal_795f3679f9f368d05c75e205bd12aae4c75c089391ddcc2519d1f05466e25f0c_prof);

        
        $__internal_f77b81a0998cb3dc99489edb9fa914a42b1ccab581643fcb10f07439f2e5e364->leave($__internal_f77b81a0998cb3dc99489edb9fa914a42b1ccab581643fcb10f07439f2e5e364_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_integer.html.twig");
    }
}
