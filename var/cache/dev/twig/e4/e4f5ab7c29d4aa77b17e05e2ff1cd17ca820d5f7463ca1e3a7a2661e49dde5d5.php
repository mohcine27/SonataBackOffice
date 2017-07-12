<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_6aa82bbb7d429f61dc650f3d6bef9e7e72c09d90e9b0aead7e8dd48a813d7261 extends Twig_Template
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
        $__internal_ecd43be51ef1106e54fbb8a82d37f38fd5dc6d4b9d6821ea2f8b6d4fc153dd4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd43be51ef1106e54fbb8a82d37f38fd5dc6d4b9d6821ea2f8b6d4fc153dd4d->enter($__internal_ecd43be51ef1106e54fbb8a82d37f38fd5dc6d4b9d6821ea2f8b6d4fc153dd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_c4c8f27edee6470b0a9ae6c14e48f17d4f8049d45ec6039734fcd4c6ce6404d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c8f27edee6470b0a9ae6c14e48f17d4f8049d45ec6039734fcd4c6ce6404d0->enter($__internal_c4c8f27edee6470b0a9ae6c14e48f17d4f8049d45ec6039734fcd4c6ce6404d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_ecd43be51ef1106e54fbb8a82d37f38fd5dc6d4b9d6821ea2f8b6d4fc153dd4d->leave($__internal_ecd43be51ef1106e54fbb8a82d37f38fd5dc6d4b9d6821ea2f8b6d4fc153dd4d_prof);

        
        $__internal_c4c8f27edee6470b0a9ae6c14e48f17d4f8049d45ec6039734fcd4c6ce6404d0->leave($__internal_c4c8f27edee6470b0a9ae6c14e48f17d4f8049d45ec6039734fcd4c6ce6404d0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
", "EasyAdminBundle:default:field_date.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_date.html.twig");
    }
}
