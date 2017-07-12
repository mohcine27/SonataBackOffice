<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_375a40cdeac1bda467d01767ef1962775f8018ec45172d92779e46e0ee723ebb extends Twig_Template
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
        $__internal_fc4a19fe1547358ea6c2d48d56dd5ec101a3bef50b4e5252c4831cb7c0923eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4a19fe1547358ea6c2d48d56dd5ec101a3bef50b4e5252c4831cb7c0923eab->enter($__internal_fc4a19fe1547358ea6c2d48d56dd5ec101a3bef50b4e5252c4831cb7c0923eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_d9f848b5027fc24683ff7d4d5b646a874e280c3306e1e01a78fbed489ad19559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f848b5027fc24683ff7d4d5b646a874e280c3306e1e01a78fbed489ad19559->enter($__internal_d9f848b5027fc24683ff7d4d5b646a874e280c3306e1e01a78fbed489ad19559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fc4a19fe1547358ea6c2d48d56dd5ec101a3bef50b4e5252c4831cb7c0923eab->leave($__internal_fc4a19fe1547358ea6c2d48d56dd5ec101a3bef50b4e5252c4831cb7c0923eab_prof);

        
        $__internal_d9f848b5027fc24683ff7d4d5b646a874e280c3306e1e01a78fbed489ad19559->leave($__internal_d9f848b5027fc24683ff7d4d5b646a874e280c3306e1e01a78fbed489ad19559_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
