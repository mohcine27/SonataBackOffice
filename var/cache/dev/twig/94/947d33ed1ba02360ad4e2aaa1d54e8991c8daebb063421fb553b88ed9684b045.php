<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_a24887115b75b394fc042b57faac83d653ee40539fadec23817eb23a24f4618f extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b9f32a50285ffa2d2e9fe32c4eaefeaef51e955cfbaf05073d6c2c0521f50bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9f32a50285ffa2d2e9fe32c4eaefeaef51e955cfbaf05073d6c2c0521f50bb->enter($__internal_2b9f32a50285ffa2d2e9fe32c4eaefeaef51e955cfbaf05073d6c2c0521f50bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $__internal_a02243c13a17c76c89d06eedeb1346ca24d6db18985582294910d4ac58fcfb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02243c13a17c76c89d06eedeb1346ca24d6db18985582294910d4ac58fcfb51->enter($__internal_a02243c13a17c76c89d06eedeb1346ca24d6db18985582294910d4ac58fcfb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b9f32a50285ffa2d2e9fe32c4eaefeaef51e955cfbaf05073d6c2c0521f50bb->leave($__internal_2b9f32a50285ffa2d2e9fe32c4eaefeaef51e955cfbaf05073d6c2c0521f50bb_prof);

        
        $__internal_a02243c13a17c76c89d06eedeb1346ca24d6db18985582294910d4ac58fcfb51->leave($__internal_a02243c13a17c76c89d06eedeb1346ca24d6db18985582294910d4ac58fcfb51_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6471014e86da5a3ae5523de3954ce66cd0711275ba113d0bfb151d6587e895a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6471014e86da5a3ae5523de3954ce66cd0711275ba113d0bfb151d6587e895a6->enter($__internal_6471014e86da5a3ae5523de3954ce66cd0711275ba113d0bfb151d6587e895a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f5f28ee90153a6853608ffae79b62cd702060a252cce31aed6843328ebaf905a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f28ee90153a6853608ffae79b62cd702060a252cce31aed6843328ebaf905a->enter($__internal_f5f28ee90153a6853608ffae79b62cd702060a252cce31aed6843328ebaf905a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f5f28ee90153a6853608ffae79b62cd702060a252cce31aed6843328ebaf905a->leave($__internal_f5f28ee90153a6853608ffae79b62cd702060a252cce31aed6843328ebaf905a_prof);

        
        $__internal_6471014e86da5a3ae5523de3954ce66cd0711275ba113d0bfb151d6587e895a6->leave($__internal_6471014e86da5a3ae5523de3954ce66cd0711275ba113d0bfb151d6587e895a6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_text.html.twig");
    }
}
