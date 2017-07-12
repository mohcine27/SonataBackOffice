<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bf59d7be10ccef2a39b8a119682fa628fe093233f8a3b9abd53649c7f00936a5 extends Twig_Template
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
        $__internal_a7cfa8f2075a00a4b6a2ca5d3600d1199ba3b075543836cc6a5d8e235cd557a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7cfa8f2075a00a4b6a2ca5d3600d1199ba3b075543836cc6a5d8e235cd557a7->enter($__internal_a7cfa8f2075a00a4b6a2ca5d3600d1199ba3b075543836cc6a5d8e235cd557a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d2382ed7ef5b79bee5377018f9f987f0ba4b347efc715558038f4f30a400f18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2382ed7ef5b79bee5377018f9f987f0ba4b347efc715558038f4f30a400f18b->enter($__internal_d2382ed7ef5b79bee5377018f9f987f0ba4b347efc715558038f4f30a400f18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a7cfa8f2075a00a4b6a2ca5d3600d1199ba3b075543836cc6a5d8e235cd557a7->leave($__internal_a7cfa8f2075a00a4b6a2ca5d3600d1199ba3b075543836cc6a5d8e235cd557a7_prof);

        
        $__internal_d2382ed7ef5b79bee5377018f9f987f0ba4b347efc715558038f4f30a400f18b->leave($__internal_d2382ed7ef5b79bee5377018f9f987f0ba4b347efc715558038f4f30a400f18b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
