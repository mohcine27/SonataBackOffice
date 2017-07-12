<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1cc86811008869c7f5632ca40848f0de310a7e46f7dca6deb95761d98957f6be extends Twig_Template
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
        $__internal_e6532cfd4516e8a07131378feaf7ba32aee9fdae308e3f835458df9b1ec835c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6532cfd4516e8a07131378feaf7ba32aee9fdae308e3f835458df9b1ec835c7->enter($__internal_e6532cfd4516e8a07131378feaf7ba32aee9fdae308e3f835458df9b1ec835c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_85b77a9df978208c14c538dd56aa85c93559ed2334805139524f075d8eff1fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b77a9df978208c14c538dd56aa85c93559ed2334805139524f075d8eff1fae->enter($__internal_85b77a9df978208c14c538dd56aa85c93559ed2334805139524f075d8eff1fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e6532cfd4516e8a07131378feaf7ba32aee9fdae308e3f835458df9b1ec835c7->leave($__internal_e6532cfd4516e8a07131378feaf7ba32aee9fdae308e3f835458df9b1ec835c7_prof);

        
        $__internal_85b77a9df978208c14c538dd56aa85c93559ed2334805139524f075d8eff1fae->leave($__internal_85b77a9df978208c14c538dd56aa85c93559ed2334805139524f075d8eff1fae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
