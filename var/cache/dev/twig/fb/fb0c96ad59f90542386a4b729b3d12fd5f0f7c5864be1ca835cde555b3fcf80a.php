<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_b091542d87a87e32d0933e70d3da736488de6fc180edabe1f131835785ece3e2 extends Twig_Template
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
        $__internal_828b53dcf6613f05de730a5165ed215f88818614d5a09cf37e7b4b0ef95cc1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828b53dcf6613f05de730a5165ed215f88818614d5a09cf37e7b4b0ef95cc1d0->enter($__internal_828b53dcf6613f05de730a5165ed215f88818614d5a09cf37e7b4b0ef95cc1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:show_button.html.twig"));

        $__internal_48edbb5b51d446d807213c116dd2719c81c429e3c46a212f0862950d3c47ec31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48edbb5b51d446d807213c116dd2719c81c429e3c46a212f0862950d3c47ec31->enter($__internal_48edbb5b51d446d807213c116dd2719c81c429e3c46a212f0862950d3c47ec31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:show_button.html.twig"));

        // line 11
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array())) > 0)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_828b53dcf6613f05de730a5165ed215f88818614d5a09cf37e7b4b0ef95cc1d0->leave($__internal_828b53dcf6613f05de730a5165ed215f88818614d5a09cf37e7b4b0ef95cc1d0_prof);

        
        $__internal_48edbb5b51d446d807213c116dd2719c81c429e3c46a212f0862950d3c47ec31->leave($__internal_48edbb5b51d446d807213c116dd2719c81c429e3c46a212f0862950d3c47ec31_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  30 => 13,  27 => 12,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% if admin.canAccessObject('show', object) and admin.show|length > 0 and admin.hasRoute('show') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('show', object) }}\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
            {{ 'link_action_show'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:show_button.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Button\\show_button.html.twig");
    }
}
