<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_4e67dec20e66e52e0e67b0c3d3b333dcc52a9cd7c215b46577c0ce0048fb1162 extends Twig_Template
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
        $__internal_8889d681333a68f116b49ce8e4677ca45a8aefd51e13a01f25ce99487f2edc34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8889d681333a68f116b49ce8e4677ca45a8aefd51e13a01f25ce99487f2edc34->enter($__internal_8889d681333a68f116b49ce8e4677ca45a8aefd51e13a01f25ce99487f2edc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_fa7584e59fc88e66523874893ce58b9d7ffff4421af2139920c246abb05c22d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7584e59fc88e66523874893ce58b9d7ffff4421af2139920c246abb05c22d9->enter($__internal_fa7584e59fc88e66523874893ce58b9d7ffff4421af2139920c246abb05c22d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

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
        
        $__internal_8889d681333a68f116b49ce8e4677ca45a8aefd51e13a01f25ce99487f2edc34->leave($__internal_8889d681333a68f116b49ce8e4677ca45a8aefd51e13a01f25ce99487f2edc34_prof);

        
        $__internal_fa7584e59fc88e66523874893ce58b9d7ffff4421af2139920c246abb05c22d9->leave($__internal_fa7584e59fc88e66523874893ce58b9d7ffff4421af2139920c246abb05c22d9_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
", "EasyAdminBundle:default:field_bigint.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_bigint.html.twig");
    }
}
