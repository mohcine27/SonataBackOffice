<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_75ea8b5b3a87971613202f508adb0189c0a75ac28f4dab51d17145a031c2848e extends Twig_Template
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
        $__internal_15cc9ac86f2b015ea82454abdd7d8aed59c31b9dc5ceea1aa94e5fa3cac443db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15cc9ac86f2b015ea82454abdd7d8aed59c31b9dc5ceea1aa94e5fa3cac443db->enter($__internal_15cc9ac86f2b015ea82454abdd7d8aed59c31b9dc5ceea1aa94e5fa3cac443db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_2a324bfc180cde9bd47166ed72a8069a3c8dce229c44f6d4b22849ad570b4c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a324bfc180cde9bd47166ed72a8069a3c8dce229c44f6d4b22849ad570b4c6b->enter($__internal_2a324bfc180cde9bd47166ed72a8069a3c8dce229c44f6d4b22849ad570b4c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_15cc9ac86f2b015ea82454abdd7d8aed59c31b9dc5ceea1aa94e5fa3cac443db->leave($__internal_15cc9ac86f2b015ea82454abdd7d8aed59c31b9dc5ceea1aa94e5fa3cac443db_prof);

        
        $__internal_2a324bfc180cde9bd47166ed72a8069a3c8dce229c44f6d4b22849ad570b4c6b->leave($__internal_2a324bfc180cde9bd47166ed72a8069a3c8dce229c44f6d4b22849ad570b4c6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
