<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_3158288273bc61144f4a389dac032c41673f7382e1d18ebac4c0f74bdcbf9986 extends Twig_Template
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
        $__internal_08b0743627c8ebcf04b6ee2ed964c07b1ef6d0abcd18f28288e7abcaefacc1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b0743627c8ebcf04b6ee2ed964c07b1ef6d0abcd18f28288e7abcaefacc1e6->enter($__internal_08b0743627c8ebcf04b6ee2ed964c07b1ef6d0abcd18f28288e7abcaefacc1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_8846665ef3fd9d0341825e956b3c34c6abb761f3ee3accbb9a59b394819cad99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8846665ef3fd9d0341825e956b3c34c6abb761f3ee3accbb9a59b394819cad99->enter($__internal_8846665ef3fd9d0341825e956b3c34c6abb761f3ee3accbb9a59b394819cad99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_08b0743627c8ebcf04b6ee2ed964c07b1ef6d0abcd18f28288e7abcaefacc1e6->leave($__internal_08b0743627c8ebcf04b6ee2ed964c07b1ef6d0abcd18f28288e7abcaefacc1e6_prof);

        
        $__internal_8846665ef3fd9d0341825e956b3c34c6abb761f3ee3accbb9a59b394819cad99->leave($__internal_8846665ef3fd9d0341825e956b3c34c6abb761f3ee3accbb9a59b394819cad99_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_decimal.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_decimal.html.twig");
    }
}
