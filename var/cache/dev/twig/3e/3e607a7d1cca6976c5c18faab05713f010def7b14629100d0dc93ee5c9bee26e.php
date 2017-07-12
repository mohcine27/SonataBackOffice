<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_4584d63f0bac0c0a546f204c734f23fe4c79fec653be7359655b04bb4b759811 extends Twig_Template
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
        $__internal_0f1b6ea34ed7d7f00dbe33643fcedb8565399386f2ed889dba447746acd0bb32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1b6ea34ed7d7f00dbe33643fcedb8565399386f2ed889dba447746acd0bb32->enter($__internal_0f1b6ea34ed7d7f00dbe33643fcedb8565399386f2ed889dba447746acd0bb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_343f46acb7d6ef251a2db69e187a09ec6aadacaea0e2d359610e4cf0b52fdc90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343f46acb7d6ef251a2db69e187a09ec6aadacaea0e2d359610e4cf0b52fdc90->enter($__internal_343f46acb7d6ef251a2db69e187a09ec6aadacaea0e2d359610e4cf0b52fdc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_0f1b6ea34ed7d7f00dbe33643fcedb8565399386f2ed889dba447746acd0bb32->leave($__internal_0f1b6ea34ed7d7f00dbe33643fcedb8565399386f2ed889dba447746acd0bb32_prof);

        
        $__internal_343f46acb7d6ef251a2db69e187a09ec6aadacaea0e2d359610e4cf0b52fdc90->leave($__internal_343f46acb7d6ef251a2db69e187a09ec6aadacaea0e2d359610e4cf0b52fdc90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
