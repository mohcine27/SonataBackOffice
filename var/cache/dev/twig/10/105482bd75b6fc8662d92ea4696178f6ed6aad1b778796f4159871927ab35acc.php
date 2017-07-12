<?php

/* SonataAdminBundle:CRUD:list__action_show.html.twig */
class __TwigTemplate_6efd36b095fb3db174c88c8afd3d83c1558e314b36e1ab18cdc969006b8d2b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f15514685251633649231c8cc7c2c2788204aa8414974f24ea4b02a99daee76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f15514685251633649231c8cc7c2c2788204aa8414974f24ea4b02a99daee76->enter($__internal_7f15514685251633649231c8cc7c2c2788204aa8414974f24ea4b02a99daee76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_show.html.twig"));

        $__internal_c79f4f0cc9510fecff4b33ce7c973d850e50ddc243b8da34fd98aa11a0d03008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79f4f0cc9510fecff4b33ce7c973d850e50ddc243b8da34fd98aa11a0d03008->enter($__internal_c79f4f0cc9510fecff4b33ce7c973d850e50ddc243b8da34fd98aa11a0d03008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_show.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default view_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_7f15514685251633649231c8cc7c2c2788204aa8414974f24ea4b02a99daee76->leave($__internal_7f15514685251633649231c8cc7c2c2788204aa8414974f24ea4b02a99daee76_prof);

        
        $__internal_c79f4f0cc9510fecff4b33ce7c973d850e50ddc243b8da34fd98aa11a0d03008->leave($__internal_c79f4f0cc9510fecff4b33ce7c973d850e50ddc243b8da34fd98aa11a0d03008_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.hasAccess('show', object) and admin.hasRoute('show') %}
    <a href=\"{{ admin.generateObjectUrl('show', object) }}\" class=\"btn btn-sm btn-default view_link\" title=\"{{ 'action_show'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
        {{ 'action_show'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "SonataAdminBundle:CRUD:list__action_show.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__action_show.html.twig");
    }
}
