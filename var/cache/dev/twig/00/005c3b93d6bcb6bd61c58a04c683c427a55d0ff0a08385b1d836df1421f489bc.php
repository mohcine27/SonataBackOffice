<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_78048b7b9e66198c78870f9fa2c01e95a6f68e92fc740b00c97157b6df276f56 extends Twig_Template
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
        $__internal_4c3ee8c691b091136461e06b8149d3deb51d395482936d0ddec8a53a23d98bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3ee8c691b091136461e06b8149d3deb51d395482936d0ddec8a53a23d98bbd->enter($__internal_4c3ee8c691b091136461e06b8149d3deb51d395482936d0ddec8a53a23d98bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_98d2cc0539038697b08b69107a79dac84d188301fa18b5fd2de21aadb98f19b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d2cc0539038697b08b69107a79dac84d188301fa18b5fd2de21aadb98f19b1->enter($__internal_98d2cc0539038697b08b69107a79dac84d188301fa18b5fd2de21aadb98f19b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4c3ee8c691b091136461e06b8149d3deb51d395482936d0ddec8a53a23d98bbd->leave($__internal_4c3ee8c691b091136461e06b8149d3deb51d395482936d0ddec8a53a23d98bbd_prof);

        
        $__internal_98d2cc0539038697b08b69107a79dac84d188301fa18b5fd2de21aadb98f19b1->leave($__internal_98d2cc0539038697b08b69107a79dac84d188301fa18b5fd2de21aadb98f19b1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
