<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_942d1dd26a5513c2ff8a8e19f25f76170af03cc04f8b9703ce7fe278d8eef959 extends Twig_Template
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
        $__internal_d5bfb8a372b5144ce572a770f805a5ce6dbf3b7cf8a78344daf62a04498cb5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5bfb8a372b5144ce572a770f805a5ce6dbf3b7cf8a78344daf62a04498cb5a3->enter($__internal_d5bfb8a372b5144ce572a770f805a5ce6dbf3b7cf8a78344daf62a04498cb5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        $__internal_f8ecaf481a5927707ec98fbcd0761bcef0f6a3cf647474cf655b85bd44994ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ecaf481a5927707ec98fbcd0761bcef0f6a3cf647474cf655b85bd44994ed6->enter($__internal_f8ecaf481a5927707ec98fbcd0761bcef0f6a3cf647474cf655b85bd44994ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_d5bfb8a372b5144ce572a770f805a5ce6dbf3b7cf8a78344daf62a04498cb5a3->leave($__internal_d5bfb8a372b5144ce572a770f805a5ce6dbf3b7cf8a78344daf62a04498cb5a3_prof);

        
        $__internal_f8ecaf481a5927707ec98fbcd0761bcef0f6a3cf647474cf655b85bd44994ed6->leave($__internal_f8ecaf481a5927707ec98fbcd0761bcef0f6a3cf647474cf655b85bd44994ed6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.hasAccess('list') and admin.hasRoute('list') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('list') }}\">
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
            {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:list_button.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Button\\list_button.html.twig");
    }
}
