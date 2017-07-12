<?php

/* SonataAdminBundle:CRUD:list__action_edit.html.twig */
class __TwigTemplate_d1b69bad6e630d2b1f49d89d5e9bed2304ee56408e89d00fce361a8dbec3b3b7 extends Twig_Template
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
        $__internal_01fcc6fda073bb19420ba64e031899927da79f6dbc54e383e6c0ab9f555d9aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fcc6fda073bb19420ba64e031899927da79f6dbc54e383e6c0ab9f555d9aa8->enter($__internal_01fcc6fda073bb19420ba64e031899927da79f6dbc54e383e6c0ab9f555d9aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_edit.html.twig"));

        $__internal_da04a0a364898dc4325a437f8728b4b098b1f73275afb5bc8e41d3162da77876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da04a0a364898dc4325a437f8728b4b098b1f73275afb5bc8e41d3162da77876->enter($__internal_da04a0a364898dc4325a437f8728b4b098b1f73275afb5bc8e41d3162da77876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_edit.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default edit_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_01fcc6fda073bb19420ba64e031899927da79f6dbc54e383e6c0ab9f555d9aa8->leave($__internal_01fcc6fda073bb19420ba64e031899927da79f6dbc54e383e6c0ab9f555d9aa8_prof);

        
        $__internal_da04a0a364898dc4325a437f8728b4b098b1f73275afb5bc8e41d3162da77876->leave($__internal_da04a0a364898dc4325a437f8728b4b098b1f73275afb5bc8e41d3162da77876_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_edit.html.twig";
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

{% if admin.hasAccess('edit', object) and admin.hasRoute('edit') %}
    <a href=\"{{ admin.generateObjectUrl('edit', object) }}\" class=\"btn btn-sm btn-default edit_link\" title=\"{{ 'action_edit'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
        {{ 'action_edit'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "SonataAdminBundle:CRUD:list__action_edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__action_edit.html.twig");
    }
}
