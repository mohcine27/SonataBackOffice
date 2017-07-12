<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_34efc1ca00e0d915d62c3f8d77bff4d17b4439d3b231c181531ee0f3cb1ed321 extends Twig_Template
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
        $__internal_4af025352a19258ea48cf204580d902598d1f223df7be16d2f30a77eec0e98f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af025352a19258ea48cf204580d902598d1f223df7be16d2f30a77eec0e98f4->enter($__internal_4af025352a19258ea48cf204580d902598d1f223df7be16d2f30a77eec0e98f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a280befd4c6cefb7a1dfee296363827fa79855533bd3276af8752abdb251bd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a280befd4c6cefb7a1dfee296363827fa79855533bd3276af8752abdb251bd48->enter($__internal_a280befd4c6cefb7a1dfee296363827fa79855533bd3276af8752abdb251bd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_4af025352a19258ea48cf204580d902598d1f223df7be16d2f30a77eec0e98f4->leave($__internal_4af025352a19258ea48cf204580d902598d1f223df7be16d2f30a77eec0e98f4_prof);

        
        $__internal_a280befd4c6cefb7a1dfee296363827fa79855533bd3276af8752abdb251bd48->leave($__internal_a280befd4c6cefb7a1dfee296363827fa79855533bd3276af8752abdb251bd48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
