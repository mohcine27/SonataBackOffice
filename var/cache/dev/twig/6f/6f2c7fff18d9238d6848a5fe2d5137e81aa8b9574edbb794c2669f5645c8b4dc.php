<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_34d2fdb4cc7d917e901808632f8d718b27bfb309af48e6ad4392937d34a172fd extends Twig_Template
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
        $__internal_16f5ca32c6384129aeca2bd4b4386865aa47425806fcb5ed545a847d8b5a4cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f5ca32c6384129aeca2bd4b4386865aa47425806fcb5ed545a847d8b5a4cca->enter($__internal_16f5ca32c6384129aeca2bd4b4386865aa47425806fcb5ed545a847d8b5a4cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_31b00d54fff5e3e46e2c06b68ed14cb598a465f327ec05129d8c9daacbe52073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b00d54fff5e3e46e2c06b68ed14cb598a465f327ec05129d8c9daacbe52073->enter($__internal_31b00d54fff5e3e46e2c06b68ed14cb598a465f327ec05129d8c9daacbe52073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_16f5ca32c6384129aeca2bd4b4386865aa47425806fcb5ed545a847d8b5a4cca->leave($__internal_16f5ca32c6384129aeca2bd4b4386865aa47425806fcb5ed545a847d8b5a4cca_prof);

        
        $__internal_31b00d54fff5e3e46e2c06b68ed14cb598a465f327ec05129d8c9daacbe52073->leave($__internal_31b00d54fff5e3e46e2c06b68ed14cb598a465f327ec05129d8c9daacbe52073_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_datetime.html.twig");
    }
}
