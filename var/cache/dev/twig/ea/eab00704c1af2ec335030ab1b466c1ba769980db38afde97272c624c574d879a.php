<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_4f115329ca0b55dc659505a8ded63b56199b00d73b5a9d4cadfd037b364c9069 extends Twig_Template
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
        $__internal_2f49a7b98492eab57690a5b889fbd69015b19e961de5f848f798a23f28d3693e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f49a7b98492eab57690a5b889fbd69015b19e961de5f848f798a23f28d3693e->enter($__internal_2f49a7b98492eab57690a5b889fbd69015b19e961de5f848f798a23f28d3693e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_c70b8c5dbb4de61df79733333264943f4f0afa68c5305d7a85b237ce50acad2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70b8c5dbb4de61df79733333264943f4f0afa68c5305d7a85b237ce50acad2e->enter($__internal_c70b8c5dbb4de61df79733333264943f4f0afa68c5305d7a85b237ce50acad2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_2f49a7b98492eab57690a5b889fbd69015b19e961de5f848f798a23f28d3693e->leave($__internal_2f49a7b98492eab57690a5b889fbd69015b19e961de5f848f798a23f28d3693e_prof);

        
        $__internal_c70b8c5dbb4de61df79733333264943f4f0afa68c5305d7a85b237ce50acad2e->leave($__internal_c70b8c5dbb4de61df79733333264943f4f0afa68c5305d7a85b237ce50acad2e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_integer.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_integer.html.twig");
    }
}
