<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_2e1ca3243af32a7bb5af706ba93f83e1567c7a20fa1488c3b4decce676f32d45 extends Twig_Template
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
        $__internal_388c72d84cf70b336208a85355b4cba1d6bed3ba4d1e9a963913484b3c91b0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388c72d84cf70b336208a85355b4cba1d6bed3ba4d1e9a963913484b3c91b0ed->enter($__internal_388c72d84cf70b336208a85355b4cba1d6bed3ba4d1e9a963913484b3c91b0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_83c22b146c16595b9812b397beccfd2d69ca4cf74725d649b1a73dfbae4cf344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c22b146c16595b9812b397beccfd2d69ca4cf74725d649b1a73dfbae4cf344->enter($__internal_83c22b146c16595b9812b397beccfd2d69ca4cf74725d649b1a73dfbae4cf344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_388c72d84cf70b336208a85355b4cba1d6bed3ba4d1e9a963913484b3c91b0ed->leave($__internal_388c72d84cf70b336208a85355b4cba1d6bed3ba4d1e9a963913484b3c91b0ed_prof);

        
        $__internal_83c22b146c16595b9812b397beccfd2d69ca4cf74725d649b1a73dfbae4cf344->leave($__internal_83c22b146c16595b9812b397beccfd2d69ca4cf74725d649b1a73dfbae4cf344_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_email.html.twig");
    }
}
