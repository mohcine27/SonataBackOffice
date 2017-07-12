<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_f568c22405134ed2faf6b5df2318ba16cfc5ef0354900e0e96a3c1a73f2b34bc extends Twig_Template
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
        $__internal_234700f4e8e21875baaa011851c09a5db8c38045f562fd658a83d82d02406b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234700f4e8e21875baaa011851c09a5db8c38045f562fd658a83d82d02406b53->enter($__internal_234700f4e8e21875baaa011851c09a5db8c38045f562fd658a83d82d02406b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_6300463f5df5c77190b6f07de04ab50dcf66f0b37b6cb472e0af6512432362fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6300463f5df5c77190b6f07de04ab50dcf66f0b37b6cb472e0af6512432362fc->enter($__internal_6300463f5df5c77190b6f07de04ab50dcf66f0b37b6cb472e0af6512432362fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_234700f4e8e21875baaa011851c09a5db8c38045f562fd658a83d82d02406b53->leave($__internal_234700f4e8e21875baaa011851c09a5db8c38045f562fd658a83d82d02406b53_prof);

        
        $__internal_6300463f5df5c77190b6f07de04ab50dcf66f0b37b6cb472e0af6512432362fc->leave($__internal_6300463f5df5c77190b6f07de04ab50dcf66f0b37b6cb472e0af6512432362fc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_smallint.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_smallint.html.twig");
    }
}
