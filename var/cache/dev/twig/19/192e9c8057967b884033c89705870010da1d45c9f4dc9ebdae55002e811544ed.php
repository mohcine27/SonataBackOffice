<?php

/* EasyAdminBundle:default:field_toggle.html.twig */
class __TwigTemplate_cc1b6a803cad62e67b3608835abffb92dea8c86575819cfa516ce8e98ee2351f extends Twig_Template
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
        $__internal_47d1f5197faae1890ddec531053f97b4d81a391aa69f41ec6180669ff535a339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d1f5197faae1890ddec531053f97b4d81a391aa69f41ec6180669ff535a339->enter($__internal_47d1f5197faae1890ddec531053f97b4d81a391aa69f41ec6180669ff535a339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_toggle.html.twig"));

        $__internal_ef6377f49b0f2d25cff76e4ee92f2899d5833f5e8b83b9d200a82c90e6a87da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6377f49b0f2d25cff76e4ee92f2899d5833f5e8b83b9d200a82c90e6a87da1->enter($__internal_ef6377f49b0f2d25cff76e4ee92f2899d5833f5e8b83b9d200a82c90e6a87da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 4
            echo "    ";
            if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
                // line 5
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <input type=\"checkbox\" ";
            echo ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) ? ("checked") : (""));
            echo "
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_47d1f5197faae1890ddec531053f97b4d81a391aa69f41ec6180669ff535a339->leave($__internal_47d1f5197faae1890ddec531053f97b4d81a391aa69f41ec6180669ff535a339_prof);

        
        $__internal_ef6377f49b0f2d25cff76e4ee92f2899d5833f5e8b83b9d200a82c90e6a87da1->leave($__internal_ef6377f49b0f2d25cff76e4ee92f2899d5833f5e8b83b9d200a82c90e6a87da1_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 10,  39 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
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

{% if view == 'show' %}
    {% if value == true %}
        <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
    {% else %}
        <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
    {% endif %}
{% else %}
    <input type=\"checkbox\" {{ value == true ? 'checked' : '' }}
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"{{ 'label.true'|trans }}\" data-off=\"{{ 'label.false'|trans }}\">
{% endif %}
", "EasyAdminBundle:default:field_toggle.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_toggle.html.twig");
    }
}
