<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_e51ad8a065599a4f6d248f763c088c87a9c5fec59a6ee2c9b962bfa73f6aff6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b45c1f25a8663fa8fb4f28bb8ab792b9a32eeb6d69c4b6e813519da793ff979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b45c1f25a8663fa8fb4f28bb8ab792b9a32eeb6d69c4b6e813519da793ff979->enter($__internal_6b45c1f25a8663fa8fb4f28bb8ab792b9a32eeb6d69c4b6e813519da793ff979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_8c7a231d3efae7083826e69fdc01ecf1d580caf17f12be8482ba77b62af169c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7a231d3efae7083826e69fdc01ecf1d580caf17f12be8482ba77b62af169c1->enter($__internal_8c7a231d3efae7083826e69fdc01ecf1d580caf17f12be8482ba77b62af169c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b45c1f25a8663fa8fb4f28bb8ab792b9a32eeb6d69c4b6e813519da793ff979->leave($__internal_6b45c1f25a8663fa8fb4f28bb8ab792b9a32eeb6d69c4b6e813519da793ff979_prof);

        
        $__internal_8c7a231d3efae7083826e69fdc01ecf1d580caf17f12be8482ba77b62af169c1->leave($__internal_8c7a231d3efae7083826e69fdc01ecf1d580caf17f12be8482ba77b62af169c1_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_8938e45b73c1e43c2a60cb395557c81376c28e09e899ebe64db9cd57c5c62bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8938e45b73c1e43c2a60cb395557c81376c28e09e899ebe64db9cd57c5c62bd6->enter($__internal_8938e45b73c1e43c2a60cb395557c81376c28e09e899ebe64db9cd57c5c62bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_b6dbb6799f73ee99ab4835ec08b89d6e2de902780ab8df9a249bf35a9f004219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dbb6799f73ee99ab4835ec08b89d6e2de902780ab8df9a249bf35a9f004219->enter($__internal_b6dbb6799f73ee99ab4835ec08b89d6e2de902780ab8df9a249bf35a9f004219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_b6dbb6799f73ee99ab4835ec08b89d6e2de902780ab8df9a249bf35a9f004219->leave($__internal_b6dbb6799f73ee99ab4835ec08b89d6e2de902780ab8df9a249bf35a9f004219_prof);

        
        $__internal_8938e45b73c1e43c2a60cb395557c81376c28e09e899ebe64db9cd57c5c62bd6->leave($__internal_8938e45b73c1e43c2a60cb395557c81376c28e09e899ebe64db9cd57c5c62bd6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_show_compare.html.twig");
    }
}
