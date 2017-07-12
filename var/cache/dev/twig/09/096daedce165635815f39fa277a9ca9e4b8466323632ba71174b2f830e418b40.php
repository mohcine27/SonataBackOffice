<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2aefb76ac874560a05e40d9484de799cce114f9ff0968180913fe81fc0b6d38c extends Twig_Template
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
        $__internal_277140ae21b118f22636ff86f76954a24043e705a5ffbf4f07724ca6dfc1c46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277140ae21b118f22636ff86f76954a24043e705a5ffbf4f07724ca6dfc1c46d->enter($__internal_277140ae21b118f22636ff86f76954a24043e705a5ffbf4f07724ca6dfc1c46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ee426cf40f570d6549a9b273a379735f5513d86b064d41c2a2243682aa92b73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee426cf40f570d6549a9b273a379735f5513d86b064d41c2a2243682aa92b73d->enter($__internal_ee426cf40f570d6549a9b273a379735f5513d86b064d41c2a2243682aa92b73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_277140ae21b118f22636ff86f76954a24043e705a5ffbf4f07724ca6dfc1c46d->leave($__internal_277140ae21b118f22636ff86f76954a24043e705a5ffbf4f07724ca6dfc1c46d_prof);

        
        $__internal_ee426cf40f570d6549a9b273a379735f5513d86b064d41c2a2243682aa92b73d->leave($__internal_ee426cf40f570d6549a9b273a379735f5513d86b064d41c2a2243682aa92b73d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
