<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_b5b49f18338f3e83a78b4ca159c8b18d20768cf3a6eceeff352d50edc5469482 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61291fe3a565cae18f559d892f5c235334924d12c8f3b552e1251b9632f36c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61291fe3a565cae18f559d892f5c235334924d12c8f3b552e1251b9632f36c6b->enter($__internal_61291fe3a565cae18f559d892f5c235334924d12c8f3b552e1251b9632f36c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $__internal_318d93bfb5a42bfff37aa8ffacbc49d7589e293a4a441b0846b4ee4621d87667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318d93bfb5a42bfff37aa8ffacbc49d7589e293a4a441b0846b4ee4621d87667->enter($__internal_318d93bfb5a42bfff37aa8ffacbc49d7589e293a4a441b0846b4ee4621d87667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61291fe3a565cae18f559d892f5c235334924d12c8f3b552e1251b9632f36c6b->leave($__internal_61291fe3a565cae18f559d892f5c235334924d12c8f3b552e1251b9632f36c6b_prof);

        
        $__internal_318d93bfb5a42bfff37aa8ffacbc49d7589e293a4a441b0846b4ee4621d87667->leave($__internal_318d93bfb5a42bfff37aa8ffacbc49d7589e293a4a441b0846b4ee4621d87667_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c5d7be4271b50255c9a3419920f92df7d8d03a1d44394cb85ac76a1885e1d920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d7be4271b50255c9a3419920f92df7d8d03a1d44394cb85ac76a1885e1d920->enter($__internal_c5d7be4271b50255c9a3419920f92df7d8d03a1d44394cb85ac76a1885e1d920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b0567f34325dbd29ab29dc0cf8faccb102896a9b97bde74b40b9f3e19d98d276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0567f34325dbd29ab29dc0cf8faccb102896a9b97bde74b40b9f3e19d98d276->enter($__internal_b0567f34325dbd29ab29dc0cf8faccb102896a9b97bde74b40b9f3e19d98d276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_b0567f34325dbd29ab29dc0cf8faccb102896a9b97bde74b40b9f3e19d98d276->leave($__internal_b0567f34325dbd29ab29dc0cf8faccb102896a9b97bde74b40b9f3e19d98d276_prof);

        
        $__internal_c5d7be4271b50255c9a3419920f92df7d8d03a1d44394cb85ac76a1885e1d920->leave($__internal_c5d7be4271b50255c9a3419920f92df7d8d03a1d44394cb85ac76a1885e1d920_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  48 => 15,  39 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "SonataAdminBundle:CRUD:list__select.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__select.html.twig");
    }
}
