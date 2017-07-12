<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_e7d907e8297b99dcdc96e04758171027e86fda62b2af969b8a9c71913a3a2df5 extends Twig_Template
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
        $__internal_11bcd1fcf3c31074126d43a9a2479d3a7baeda4475e3fe6701dbcdc43016b051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bcd1fcf3c31074126d43a9a2479d3a7baeda4475e3fe6701dbcdc43016b051->enter($__internal_11bcd1fcf3c31074126d43a9a2479d3a7baeda4475e3fe6701dbcdc43016b051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_9fa4bcc9970fc1149403f596f7cefc0ac1f347e411636f8743ac8cf66b6cef53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa4bcc9970fc1149403f596f7cefc0ac1f347e411636f8743ac8cf66b6cef53->enter($__internal_9fa4bcc9970fc1149403f596f7cefc0ac1f347e411636f8743ac8cf66b6cef53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_11bcd1fcf3c31074126d43a9a2479d3a7baeda4475e3fe6701dbcdc43016b051->leave($__internal_11bcd1fcf3c31074126d43a9a2479d3a7baeda4475e3fe6701dbcdc43016b051_prof);

        
        $__internal_9fa4bcc9970fc1149403f596f7cefc0ac1f347e411636f8743ac8cf66b6cef53->leave($__internal_9fa4bcc9970fc1149403f596f7cefc0ac1f347e411636f8743ac8cf66b6cef53_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_datetimetz.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_datetimetz.html.twig");
    }
}
