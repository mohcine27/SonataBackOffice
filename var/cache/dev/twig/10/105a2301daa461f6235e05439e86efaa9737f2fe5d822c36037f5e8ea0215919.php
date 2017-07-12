<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_4ffcc2f0a6cf1b2fee419b356caf85bef2cc3bf6e235b75b73840124ff09754f extends Twig_Template
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
        $__internal_276a528c75602d284a5feb524d6d0d809c96d4366d31d96bc318d50114db8a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276a528c75602d284a5feb524d6d0d809c96d4366d31d96bc318d50114db8a05->enter($__internal_276a528c75602d284a5feb524d6d0d809c96d4366d31d96bc318d50114db8a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_04cb377baf31a3c5ab6ef9f51251df479fc1f5b1fcacf991e49a38de433cf84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cb377baf31a3c5ab6ef9f51251df479fc1f5b1fcacf991e49a38de433cf84d->enter($__internal_04cb377baf31a3c5ab6ef9f51251df479fc1f5b1fcacf991e49a38de433cf84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_276a528c75602d284a5feb524d6d0d809c96d4366d31d96bc318d50114db8a05->leave($__internal_276a528c75602d284a5feb524d6d0d809c96d4366d31d96bc318d50114db8a05_prof);

        
        $__internal_04cb377baf31a3c5ab6ef9f51251df479fc1f5b1fcacf991e49a38de433cf84d->leave($__internal_04cb377baf31a3c5ab6ef9f51251df479fc1f5b1fcacf991e49a38de433cf84d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_string.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_string.html.twig");
    }
}
