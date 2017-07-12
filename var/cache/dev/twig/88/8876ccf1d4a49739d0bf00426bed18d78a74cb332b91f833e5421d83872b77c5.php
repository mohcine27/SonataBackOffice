<?php

/* SonataAdminBundle:CRUD:list__action_delete.html.twig */
class __TwigTemplate_1fa129d422ed27ee661c83945c97338a61af10e0e6549dc7513f31d5eb90510b extends Twig_Template
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
        $__internal_0179da7fe32bd9eee467ff987d2fa0b3dced44f58d9ab0336213794eb1fcd108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0179da7fe32bd9eee467ff987d2fa0b3dced44f58d9ab0336213794eb1fcd108->enter($__internal_0179da7fe32bd9eee467ff987d2fa0b3dced44f58d9ab0336213794eb1fcd108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_delete.html.twig"));

        $__internal_f7f77198e2d70a5bc1d90660ac69b5ad26620863af76164113d6a40e955cf467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f77198e2d70a5bc1d90660ac69b5ad26620863af76164113d6a40e955cf467->enter($__internal_f7f77198e2d70a5bc1d90660ac69b5ad26620863af76164113d6a40e955cf467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_delete.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "delete"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default delete_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_0179da7fe32bd9eee467ff987d2fa0b3dced44f58d9ab0336213794eb1fcd108->leave($__internal_0179da7fe32bd9eee467ff987d2fa0b3dced44f58d9ab0336213794eb1fcd108_prof);

        
        $__internal_f7f77198e2d70a5bc1d90660ac69b5ad26620863af76164113d6a40e955cf467->leave($__internal_f7f77198e2d70a5bc1d90660ac69b5ad26620863af76164113d6a40e955cf467_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_delete.html.twig";
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

{% if admin.hasAccess('delete', object) and admin.hasRoute('delete') %}
    <a href=\"{{ admin.generateObjectUrl('delete', object) }}\" class=\"btn btn-sm btn-default delete_link\" title=\"{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'action_delete'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "SonataAdminBundle:CRUD:list__action_delete.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__action_delete.html.twig");
    }
}
