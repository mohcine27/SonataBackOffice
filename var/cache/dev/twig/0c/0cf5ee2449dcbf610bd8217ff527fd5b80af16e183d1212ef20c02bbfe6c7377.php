<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fd0cd4e7999744493552c37699f9134f043acd7ddb9aada18e7bc22966f4316f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2eaef73c127302410cd63471c67425f52185aa434710a42c6ca0fa2c794d562e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eaef73c127302410cd63471c67425f52185aa434710a42c6ca0fa2c794d562e->enter($__internal_2eaef73c127302410cd63471c67425f52185aa434710a42c6ca0fa2c794d562e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_72ff239471adc28499db8c667b96b71284a09a9a44253a695c08fb10b7c0c906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ff239471adc28499db8c667b96b71284a09a9a44253a695c08fb10b7c0c906->enter($__internal_72ff239471adc28499db8c667b96b71284a09a9a44253a695c08fb10b7c0c906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eaef73c127302410cd63471c67425f52185aa434710a42c6ca0fa2c794d562e->leave($__internal_2eaef73c127302410cd63471c67425f52185aa434710a42c6ca0fa2c794d562e_prof);

        
        $__internal_72ff239471adc28499db8c667b96b71284a09a9a44253a695c08fb10b7c0c906->leave($__internal_72ff239471adc28499db8c667b96b71284a09a9a44253a695c08fb10b7c0c906_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d1f973287cea3c80dacf0b77b2c8374c1525b74b0125e2b82e0554699e6865c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1f973287cea3c80dacf0b77b2c8374c1525b74b0125e2b82e0554699e6865c->enter($__internal_9d1f973287cea3c80dacf0b77b2c8374c1525b74b0125e2b82e0554699e6865c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_79103b6c7afa9b2a52eddb9ee8c95cf9ebbe9ccf7c0f1fb4d5290f0b5d439960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79103b6c7afa9b2a52eddb9ee8c95cf9ebbe9ccf7c0f1fb4d5290f0b5d439960->enter($__internal_79103b6c7afa9b2a52eddb9ee8c95cf9ebbe9ccf7c0f1fb4d5290f0b5d439960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_79103b6c7afa9b2a52eddb9ee8c95cf9ebbe9ccf7c0f1fb4d5290f0b5d439960->leave($__internal_79103b6c7afa9b2a52eddb9ee8c95cf9ebbe9ccf7c0f1fb4d5290f0b5d439960_prof);

        
        $__internal_9d1f973287cea3c80dacf0b77b2c8374c1525b74b0125e2b82e0554699e6865c->leave($__internal_9d1f973287cea3c80dacf0b77b2c8374c1525b74b0125e2b82e0554699e6865c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f617fce2a7b0c8cf9e61e3166900c8a7f7cad1fc58acf075e1f361619d46b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f617fce2a7b0c8cf9e61e3166900c8a7f7cad1fc58acf075e1f361619d46b5b->enter($__internal_3f617fce2a7b0c8cf9e61e3166900c8a7f7cad1fc58acf075e1f361619d46b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e580cb68b5bc66e0ab755355de7f6694794b7a0036a1fc0daca920687d1b73a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e580cb68b5bc66e0ab755355de7f6694794b7a0036a1fc0daca920687d1b73a3->enter($__internal_e580cb68b5bc66e0ab755355de7f6694794b7a0036a1fc0daca920687d1b73a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e580cb68b5bc66e0ab755355de7f6694794b7a0036a1fc0daca920687d1b73a3->leave($__internal_e580cb68b5bc66e0ab755355de7f6694794b7a0036a1fc0daca920687d1b73a3_prof);

        
        $__internal_3f617fce2a7b0c8cf9e61e3166900c8a7f7cad1fc58acf075e1f361619d46b5b->leave($__internal_3f617fce2a7b0c8cf9e61e3166900c8a7f7cad1fc58acf075e1f361619d46b5b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50ad2ee1b3d45a60ee81c3f76523ce69842ba5b7fe773131337604b859c59d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ad2ee1b3d45a60ee81c3f76523ce69842ba5b7fe773131337604b859c59d3f->enter($__internal_50ad2ee1b3d45a60ee81c3f76523ce69842ba5b7fe773131337604b859c59d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cdb42f8fd1fea7195482edac121bf099088aaaadabd5bb99fdb25fff099d3cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb42f8fd1fea7195482edac121bf099088aaaadabd5bb99fdb25fff099d3cf9->enter($__internal_cdb42f8fd1fea7195482edac121bf099088aaaadabd5bb99fdb25fff099d3cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cdb42f8fd1fea7195482edac121bf099088aaaadabd5bb99fdb25fff099d3cf9->leave($__internal_cdb42f8fd1fea7195482edac121bf099088aaaadabd5bb99fdb25fff099d3cf9_prof);

        
        $__internal_50ad2ee1b3d45a60ee81c3f76523ce69842ba5b7fe773131337604b859c59d3f->leave($__internal_50ad2ee1b3d45a60ee81c3f76523ce69842ba5b7fe773131337604b859c59d3f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
