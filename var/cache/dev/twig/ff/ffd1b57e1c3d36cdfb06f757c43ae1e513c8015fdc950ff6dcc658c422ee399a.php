<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_de087fd2f839e42c05b617b469cbeed52121afaccc38a6be3692ee3f4b235c8d extends Twig_Template
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
        $__internal_f861c2085f641d469e9532eabd170242a3dea8b15387beb7377a0651ac6106c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f861c2085f641d469e9532eabd170242a3dea8b15387beb7377a0651ac6106c5->enter($__internal_f861c2085f641d469e9532eabd170242a3dea8b15387beb7377a0651ac6106c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_03a0e54eac3c84567022de83ed3efbc5a85fe289e07e2277acd33c26f3137860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a0e54eac3c84567022de83ed3efbc5a85fe289e07e2277acd33c26f3137860->enter($__internal_03a0e54eac3c84567022de83ed3efbc5a85fe289e07e2277acd33c26f3137860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f861c2085f641d469e9532eabd170242a3dea8b15387beb7377a0651ac6106c5->leave($__internal_f861c2085f641d469e9532eabd170242a3dea8b15387beb7377a0651ac6106c5_prof);

        
        $__internal_03a0e54eac3c84567022de83ed3efbc5a85fe289e07e2277acd33c26f3137860->leave($__internal_03a0e54eac3c84567022de83ed3efbc5a85fe289e07e2277acd33c26f3137860_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
