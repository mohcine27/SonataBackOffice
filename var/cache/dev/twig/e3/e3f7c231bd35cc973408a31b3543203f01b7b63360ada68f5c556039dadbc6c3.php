<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_775583b1e9294ecd0024e02aa27c15279df8031ae1c1eeb8836ee42006f6497d extends Twig_Template
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
        $__internal_1d9e9733bf5a4f3074d1dc6ff1d90afe88dbb80b1793c94d4a76e03ecc46494b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9e9733bf5a4f3074d1dc6ff1d90afe88dbb80b1793c94d4a76e03ecc46494b->enter($__internal_1d9e9733bf5a4f3074d1dc6ff1d90afe88dbb80b1793c94d4a76e03ecc46494b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_a868caae90e59587e83675d3d0c374ee4f734685316d8010f922390daf777d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a868caae90e59587e83675d3d0c374ee4f734685316d8010f922390daf777d72->enter($__internal_a868caae90e59587e83675d3d0c374ee4f734685316d8010f922390daf777d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1d9e9733bf5a4f3074d1dc6ff1d90afe88dbb80b1793c94d4a76e03ecc46494b->leave($__internal_1d9e9733bf5a4f3074d1dc6ff1d90afe88dbb80b1793c94d4a76e03ecc46494b_prof);

        
        $__internal_a868caae90e59587e83675d3d0c374ee4f734685316d8010f922390daf777d72->leave($__internal_a868caae90e59587e83675d3d0c374ee4f734685316d8010f922390daf777d72_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
