<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_3763a14d7e789bb277f00536f168336b9615fc88f72fc5c47cd7043a2bbb22b7 extends Twig_Template
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
        $__internal_2a47b1d1269b2d2ed48f0665c91a8487efef60b9217d2e95f7205fac022a13a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a47b1d1269b2d2ed48f0665c91a8487efef60b9217d2e95f7205fac022a13a3->enter($__internal_2a47b1d1269b2d2ed48f0665c91a8487efef60b9217d2e95f7205fac022a13a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_27884f917c2d542bbf0558c657816fd5a457564243de2448b7fb482b2f65eb52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27884f917c2d542bbf0558c657816fd5a457564243de2448b7fb482b2f65eb52->enter($__internal_27884f917c2d542bbf0558c657816fd5a457564243de2448b7fb482b2f65eb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_2a47b1d1269b2d2ed48f0665c91a8487efef60b9217d2e95f7205fac022a13a3->leave($__internal_2a47b1d1269b2d2ed48f0665c91a8487efef60b9217d2e95f7205fac022a13a3_prof);

        
        $__internal_27884f917c2d542bbf0558c657816fd5a457564243de2448b7fb482b2f65eb52->leave($__internal_27884f917c2d542bbf0558c657816fd5a457564243de2448b7fb482b2f65eb52_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
