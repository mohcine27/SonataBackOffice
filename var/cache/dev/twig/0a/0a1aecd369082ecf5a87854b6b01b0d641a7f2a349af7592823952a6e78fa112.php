<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_cd20095b9e261428c5afdacc0bbb73070f75f846fd6fa0a6dac7521e5f9586a9 extends Twig_Template
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
        $__internal_b5bf540dbb8a8ac5b3977bc6e34ab418f65447702e99ba6320822483c3cd8813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5bf540dbb8a8ac5b3977bc6e34ab418f65447702e99ba6320822483c3cd8813->enter($__internal_b5bf540dbb8a8ac5b3977bc6e34ab418f65447702e99ba6320822483c3cd8813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_4501fcb00e48f0f37aee8cdd492b013ee416f42e42aac8fff1ceb27084991bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4501fcb00e48f0f37aee8cdd492b013ee416f42e42aac8fff1ceb27084991bd0->enter($__internal_4501fcb00e48f0f37aee8cdd492b013ee416f42e42aac8fff1ceb27084991bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_b5bf540dbb8a8ac5b3977bc6e34ab418f65447702e99ba6320822483c3cd8813->leave($__internal_b5bf540dbb8a8ac5b3977bc6e34ab418f65447702e99ba6320822483c3cd8813_prof);

        
        $__internal_4501fcb00e48f0f37aee8cdd492b013ee416f42e42aac8fff1ceb27084991bd0->leave($__internal_4501fcb00e48f0f37aee8cdd492b013ee416f42e42aac8fff1ceb27084991bd0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
", "EasyAdminBundle:default:field_float.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_float.html.twig");
    }
}
