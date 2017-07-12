<?php

/* SonataAdminBundle:CRUD:base_list_inner_row.html.twig */
class __TwigTemplate_82379420615695d5e30fbdc22b10a0615f38c8649679d4fbf4b52ca62f5db0d1 extends Twig_Template
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
        $__internal_0a3ac57783eb17576516d7552f35b445703f13f04fc2e67ea6e1de3466e89a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3ac57783eb17576516d7552f35b445703f13f04fc2e67ea6e1de3466e89a54->enter($__internal_0a3ac57783eb17576516d7552f35b445703f13f04fc2e67ea6e1de3466e89a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_inner_row.html.twig"));

        $__internal_8d6f1bcf45928fcd2186d9a18d061a1b01e0d835da4a8fec2ef84bc22607ae92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6f1bcf45928fcd2186d9a18d061a1b01e0d835da4a8fec2ef84bc22607ae92->enter($__internal_8d6f1bcf45928fcd2186d9a18d061a1b01e0d835da4a8fec2ef84bc22607ae92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_inner_row.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 13
            echo "    ";
            if ((($this->getAttribute($context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 14
                echo "        ";
                // line 15
                echo "    ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 16
                echo "        ";
                // line 17
                echo "    ";
            } else {
                // line 18
                echo "        ";
                echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $context["field_description"]);
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0a3ac57783eb17576516d7552f35b445703f13f04fc2e67ea6e1de3466e89a54->leave($__internal_0a3ac57783eb17576516d7552f35b445703f13f04fc2e67ea6e1de3466e89a54_prof);

        
        $__internal_8d6f1bcf45928fcd2186d9a18d061a1b01e0d835da4a8fec2ef84bc22607ae92->leave($__internal_8d6f1bcf45928fcd2186d9a18d061a1b01e0d835da4a8fec2ef84bc22607ae92_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 17,  40 => 16,  37 => 15,  35 => 14,  32 => 13,  28 => 12,  25 => 11,);
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

{% for field_description in admin.list.elements %}
    {% if field_description.name == '_action' and app.request.isXmlHttpRequest %}
        {# Action buttons disabled in ajax view! #}
    {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
        {# Disable fields with 'ajax_hidden' option set to true #}
    {% else %}
        {{ object|render_list_element(field_description) }}
    {% endif %}
{% endfor %}
", "SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_list_inner_row.html.twig");
    }
}
