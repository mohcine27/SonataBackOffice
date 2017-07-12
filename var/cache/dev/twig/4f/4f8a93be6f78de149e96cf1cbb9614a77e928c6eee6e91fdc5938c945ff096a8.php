<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2970566579d6290eed50fa8c9150c9b2582ad7c43815f5461bfc69eefaca8e27 extends Twig_Template
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
        $__internal_c39bed267f73be5829d9d5252efa8bfe48884488ddde58988005f97c1920f17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39bed267f73be5829d9d5252efa8bfe48884488ddde58988005f97c1920f17f->enter($__internal_c39bed267f73be5829d9d5252efa8bfe48884488ddde58988005f97c1920f17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9fd1d45c82118592c5d3e8c9a85ecf4e518a1cab8f2c19b81fd80d32599db1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd1d45c82118592c5d3e8c9a85ecf4e518a1cab8f2c19b81fd80d32599db1ef->enter($__internal_9fd1d45c82118592c5d3e8c9a85ecf4e518a1cab8f2c19b81fd80d32599db1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c39bed267f73be5829d9d5252efa8bfe48884488ddde58988005f97c1920f17f->leave($__internal_c39bed267f73be5829d9d5252efa8bfe48884488ddde58988005f97c1920f17f_prof);

        
        $__internal_9fd1d45c82118592c5d3e8c9a85ecf4e518a1cab8f2c19b81fd80d32599db1ef->leave($__internal_9fd1d45c82118592c5d3e8c9a85ecf4e518a1cab8f2c19b81fd80d32599db1ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
