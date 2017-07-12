<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_69be69ca9fdccfffa1c72daf24b16a303eedbda476b556429d6e7ebc1720c449 extends Twig_Template
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
        $__internal_b11200200ee6777be1b3ef43d1ff43d300fc9cd0ab353ebeedec3c90d4f2b08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11200200ee6777be1b3ef43d1ff43d300fc9cd0ab353ebeedec3c90d4f2b08f->enter($__internal_b11200200ee6777be1b3ef43d1ff43d300fc9cd0ab353ebeedec3c90d4f2b08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_9b016eff0524dbee6bd275046678dddc3682b3bd06b4e742688acb98aff6d06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b016eff0524dbee6bd275046678dddc3682b3bd06b4e742688acb98aff6d06b->enter($__internal_9b016eff0524dbee6bd275046678dddc3682b3bd06b4e742688acb98aff6d06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_b11200200ee6777be1b3ef43d1ff43d300fc9cd0ab353ebeedec3c90d4f2b08f->leave($__internal_b11200200ee6777be1b3ef43d1ff43d300fc9cd0ab353ebeedec3c90d4f2b08f_prof);

        
        $__internal_9b016eff0524dbee6bd275046678dddc3682b3bd06b4e742688acb98aff6d06b->leave($__internal_9b016eff0524dbee6bd275046678dddc3682b3bd06b4e742688acb98aff6d06b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "EasyAdminBundle:default:field_guid.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_guid.html.twig");
    }
}
