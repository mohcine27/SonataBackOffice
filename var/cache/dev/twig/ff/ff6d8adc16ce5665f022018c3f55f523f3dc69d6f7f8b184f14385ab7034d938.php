<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_2583dd8970a14ea64b48e554338cc9bfd6dc2e1af34cb6c0ebefafa90e241e99 extends Twig_Template
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
        $__internal_6f3c6cf2096a22a1bcfbb40233bb0aef1b275bc55e6517b1769963aee1d8cc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3c6cf2096a22a1bcfbb40233bb0aef1b275bc55e6517b1769963aee1d8cc4c->enter($__internal_6f3c6cf2096a22a1bcfbb40233bb0aef1b275bc55e6517b1769963aee1d8cc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_107a14267d4fbdf63d400dd6cb5e812b0c2c551a5af4f0e2dbc9c151f620c00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107a14267d4fbdf63d400dd6cb5e812b0c2c551a5af4f0e2dbc9c151f620c00a->enter($__internal_107a14267d4fbdf63d400dd6cb5e812b0c2c551a5af4f0e2dbc9c151f620c00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_6f3c6cf2096a22a1bcfbb40233bb0aef1b275bc55e6517b1769963aee1d8cc4c->leave($__internal_6f3c6cf2096a22a1bcfbb40233bb0aef1b275bc55e6517b1769963aee1d8cc4c_prof);

        
        $__internal_107a14267d4fbdf63d400dd6cb5e812b0c2c551a5af4f0e2dbc9c151f620c00a->leave($__internal_107a14267d4fbdf63d400dd6cb5e812b0c2c551a5af4f0e2dbc9c151f620c00a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_boolean.html.twig");
    }
}
