<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_463b2827bf456ecf352ee3c77dfd3bd94ccbdbcf9d54be41f1f1435479f533c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fab9058db1278ecce5aeb28d7233bdbfd3900da6f017c473d374eacc7e6e79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fab9058db1278ecce5aeb28d7233bdbfd3900da6f017c473d374eacc7e6e79b->enter($__internal_4fab9058db1278ecce5aeb28d7233bdbfd3900da6f017c473d374eacc7e6e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7efd75ddedb70028c403cc11267e0d4dc32e00446da4310bf45db62a02a73896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efd75ddedb70028c403cc11267e0d4dc32e00446da4310bf45db62a02a73896->enter($__internal_7efd75ddedb70028c403cc11267e0d4dc32e00446da4310bf45db62a02a73896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fab9058db1278ecce5aeb28d7233bdbfd3900da6f017c473d374eacc7e6e79b->leave($__internal_4fab9058db1278ecce5aeb28d7233bdbfd3900da6f017c473d374eacc7e6e79b_prof);

        
        $__internal_7efd75ddedb70028c403cc11267e0d4dc32e00446da4310bf45db62a02a73896->leave($__internal_7efd75ddedb70028c403cc11267e0d4dc32e00446da4310bf45db62a02a73896_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_289fba720d9358ab515586b9746a420985ef0b1cbd246ceb0542e5e63a9786ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289fba720d9358ab515586b9746a420985ef0b1cbd246ceb0542e5e63a9786ac->enter($__internal_289fba720d9358ab515586b9746a420985ef0b1cbd246ceb0542e5e63a9786ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5bfdcf91bcbcafec93208e83c238fed2403f441a245ce6ee6c04b9b0bde3e0ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfdcf91bcbcafec93208e83c238fed2403f441a245ce6ee6c04b9b0bde3e0ae->enter($__internal_5bfdcf91bcbcafec93208e83c238fed2403f441a245ce6ee6c04b9b0bde3e0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5bfdcf91bcbcafec93208e83c238fed2403f441a245ce6ee6c04b9b0bde3e0ae->leave($__internal_5bfdcf91bcbcafec93208e83c238fed2403f441a245ce6ee6c04b9b0bde3e0ae_prof);

        
        $__internal_289fba720d9358ab515586b9746a420985ef0b1cbd246ceb0542e5e63a9786ac->leave($__internal_289fba720d9358ab515586b9746a420985ef0b1cbd246ceb0542e5e63a9786ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_636b1d02e2501851b1ad4be2091578f1af8e53e04a4521a9a4f8372963d45c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636b1d02e2501851b1ad4be2091578f1af8e53e04a4521a9a4f8372963d45c88->enter($__internal_636b1d02e2501851b1ad4be2091578f1af8e53e04a4521a9a4f8372963d45c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_78c993fad0944ef9a5fddfbed1749f5e79d4e1552feded2529d4a667c6be5fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c993fad0944ef9a5fddfbed1749f5e79d4e1552feded2529d4a667c6be5fc9->enter($__internal_78c993fad0944ef9a5fddfbed1749f5e79d4e1552feded2529d4a667c6be5fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_78c993fad0944ef9a5fddfbed1749f5e79d4e1552feded2529d4a667c6be5fc9->leave($__internal_78c993fad0944ef9a5fddfbed1749f5e79d4e1552feded2529d4a667c6be5fc9_prof);

        
        $__internal_636b1d02e2501851b1ad4be2091578f1af8e53e04a4521a9a4f8372963d45c88->leave($__internal_636b1d02e2501851b1ad4be2091578f1af8e53e04a4521a9a4f8372963d45c88_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b842fe2eddea1500062a5e16963d4c28d322e35710592e34e82d1da3b49fc4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b842fe2eddea1500062a5e16963d4c28d322e35710592e34e82d1da3b49fc4bf->enter($__internal_b842fe2eddea1500062a5e16963d4c28d322e35710592e34e82d1da3b49fc4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f9d05530b51a4fb46078ef58219a43468af10bc1857d85539c492e25d0400a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9d05530b51a4fb46078ef58219a43468af10bc1857d85539c492e25d0400a7->enter($__internal_4f9d05530b51a4fb46078ef58219a43468af10bc1857d85539c492e25d0400a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f9d05530b51a4fb46078ef58219a43468af10bc1857d85539c492e25d0400a7->leave($__internal_4f9d05530b51a4fb46078ef58219a43468af10bc1857d85539c492e25d0400a7_prof);

        
        $__internal_b842fe2eddea1500062a5e16963d4c28d322e35710592e34e82d1da3b49fc4bf->leave($__internal_b842fe2eddea1500062a5e16963d4c28d322e35710592e34e82d1da3b49fc4bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
