<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_2f652d4d5d3331c133ab5cadaaa820763d70cc27b619b4eb03cd49b6c1b70420 extends Twig_Template
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
        $__internal_bf4de5f00e7eb102051e284a5b80806ab0d6afc1bf889b06c4dfa8431aeb0db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4de5f00e7eb102051e284a5b80806ab0d6afc1bf889b06c4dfa8431aeb0db7->enter($__internal_bf4de5f00e7eb102051e284a5b80806ab0d6afc1bf889b06c4dfa8431aeb0db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_d271075ddad680f584705871858fa83152dc569852b16b536d9c0dcd795e952e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d271075ddad680f584705871858fa83152dc569852b16b536d9c0dcd795e952e->enter($__internal_d271075ddad680f584705871858fa83152dc569852b16b536d9c0dcd795e952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_bf4de5f00e7eb102051e284a5b80806ab0d6afc1bf889b06c4dfa8431aeb0db7->leave($__internal_bf4de5f00e7eb102051e284a5b80806ab0d6afc1bf889b06c4dfa8431aeb0db7_prof);

        
        $__internal_d271075ddad680f584705871858fa83152dc569852b16b536d9c0dcd795e952e->leave($__internal_d271075ddad680f584705871858fa83152dc569852b16b536d9c0dcd795e952e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_id.html.twig");
    }
}
