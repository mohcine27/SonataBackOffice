<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_9114c2fde91dd7b5d9950032626ee1d6c37c47709301a9b683a492c823680153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c983243424ee88bad77f43fb9e849149296e3c778cbaa7c7f029d9f8809a03b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c983243424ee88bad77f43fb9e849149296e3c778cbaa7c7f029d9f8809a03b->enter($__internal_0c983243424ee88bad77f43fb9e849149296e3c778cbaa7c7f029d9f8809a03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        $__internal_5978763807b0ed9b25177bfd86567db7e31cae03ed55de35c21b8cd3babefdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5978763807b0ed9b25177bfd86567db7e31cae03ed55de35c21b8cd3babefdd7->enter($__internal_5978763807b0ed9b25177bfd86567db7e31cae03ed55de35c21b8cd3babefdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c983243424ee88bad77f43fb9e849149296e3c778cbaa7c7f029d9f8809a03b->leave($__internal_0c983243424ee88bad77f43fb9e849149296e3c778cbaa7c7f029d9f8809a03b_prof);

        
        $__internal_5978763807b0ed9b25177bfd86567db7e31cae03ed55de35c21b8cd3babefdd7->leave($__internal_5978763807b0ed9b25177bfd86567db7e31cae03ed55de35c21b8cd3babefdd7_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_0b428efe4f67df4d24622819ce895c5f06f895a4943659910b8f67ba9463028b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b428efe4f67df4d24622819ce895c5f06f895a4943659910b8f67ba9463028b->enter($__internal_0b428efe4f67df4d24622819ce895c5f06f895a4943659910b8f67ba9463028b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_5ae6b030a62fccdfd323d623a4258e4a8b0d44fad6b86b8322b17fcb96d50a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae6b030a62fccdfd323d623a4258e4a8b0d44fad6b86b8322b17fcb96d50a7e->enter($__internal_5ae6b030a62fccdfd323d623a4258e4a8b0d44fad6b86b8322b17fcb96d50a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_5ae6b030a62fccdfd323d623a4258e4a8b0d44fad6b86b8322b17fcb96d50a7e->leave($__internal_5ae6b030a62fccdfd323d623a4258e4a8b0d44fad6b86b8322b17fcb96d50a7e_prof);

        
        $__internal_0b428efe4f67df4d24622819ce895c5f06f895a4943659910b8f67ba9463028b->leave($__internal_0b428efe4f67df4d24622819ce895c5f06f895a4943659910b8f67ba9463028b_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_beeb92ff0edf33b5b852f376562197dd197f438985e2a54323d17807c3793273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beeb92ff0edf33b5b852f376562197dd197f438985e2a54323d17807c3793273->enter($__internal_beeb92ff0edf33b5b852f376562197dd197f438985e2a54323d17807c3793273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_edc79c20c7c2a7bb46c3bb7cc68078478bcea3117e868f5a805040b29f4c2376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc79c20c7c2a7bb46c3bb7cc68078478bcea3117e868f5a805040b29f4c2376->enter($__internal_edc79c20c7c2a7bb46c3bb7cc68078478bcea3117e868f5a805040b29f4c2376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_edc79c20c7c2a7bb46c3bb7cc68078478bcea3117e868f5a805040b29f4c2376->leave($__internal_edc79c20c7c2a7bb46c3bb7cc68078478bcea3117e868f5a805040b29f4c2376_prof);

        
        $__internal_beeb92ff0edf33b5b852f376562197dd197f438985e2a54323d17807c3793273->leave($__internal_beeb92ff0edf33b5b852f376562197dd197f438985e2a54323d17807c3793273_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_208dd2aabed464169aa655e7717adcf33e8c38c9fc6733548801815ac983e2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_208dd2aabed464169aa655e7717adcf33e8c38c9fc6733548801815ac983e2d4->enter($__internal_208dd2aabed464169aa655e7717adcf33e8c38c9fc6733548801815ac983e2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_98e71c98c72d347562bff2c350dc9e80caf1664ddbaf380270b41cb889d49c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e71c98c72d347562bff2c350dc9e80caf1664ddbaf380270b41cb889d49c43->enter($__internal_98e71c98c72d347562bff2c350dc9e80caf1664ddbaf380270b41cb889d49c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_98e71c98c72d347562bff2c350dc9e80caf1664ddbaf380270b41cb889d49c43->leave($__internal_98e71c98c72d347562bff2c350dc9e80caf1664ddbaf380270b41cb889d49c43_prof);

        
        $__internal_208dd2aabed464169aa655e7717adcf33e8c38c9fc6733548801815ac983e2d4->leave($__internal_208dd2aabed464169aa655e7717adcf33e8c38c9fc6733548801815ac983e2d4_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_2ec54795f0fd69f2f9ef23d620d4fa748d0eeb2068b3095c9e20352eca31f6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec54795f0fd69f2f9ef23d620d4fa748d0eeb2068b3095c9e20352eca31f6b7->enter($__internal_2ec54795f0fd69f2f9ef23d620d4fa748d0eeb2068b3095c9e20352eca31f6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_773255798383eb9e055a60e2afd96888a7dd8d16cf1f1927f4db63fd9b166cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773255798383eb9e055a60e2afd96888a7dd8d16cf1f1927f4db63fd9b166cb3->enter($__internal_773255798383eb9e055a60e2afd96888a7dd8d16cf1f1927f4db63fd9b166cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_773255798383eb9e055a60e2afd96888a7dd8d16cf1f1927f4db63fd9b166cb3->leave($__internal_773255798383eb9e055a60e2afd96888a7dd8d16cf1f1927f4db63fd9b166cb3_prof);

        
        $__internal_2ec54795f0fd69f2f9ef23d620d4fa748d0eeb2068b3095c9e20352eca31f6b7->leave($__internal_2ec54795f0fd69f2f9ef23d620d4fa748d0eeb2068b3095c9e20352eca31f6b7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  109 => 24,  96 => 22,  87 => 21,  76 => 24,  73 => 21,  64 => 20,  54 => 15,  45 => 14,  35 => 12,  33 => 18,  21 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_acl.html.twig");
    }
}
