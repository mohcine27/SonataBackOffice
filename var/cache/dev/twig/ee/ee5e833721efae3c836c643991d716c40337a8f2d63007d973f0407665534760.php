<?php

/* SonataAdminBundle:Button:acl_button.html.twig */
class __TwigTemplate_7a4ddbc15cdb128cf40dd65a7228791ef396e7b0eb8bb20610a5edaac0c4b61f extends Twig_Template
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
        $__internal_74af6d1f75178eaec7a11db1d95263a00639902dd1a4727b8a9b04e3ea27bfbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74af6d1f75178eaec7a11db1d95263a00639902dd1a4727b8a9b04e3ea27bfbe->enter($__internal_74af6d1f75178eaec7a11db1d95263a00639902dd1a4727b8a9b04e3ea27bfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:acl_button.html.twig"));

        $__internal_6db523d023ec1f6b87a70d3c8bcbe767338dfdc687d652d72baebbf1ca27d592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db523d023ec1f6b87a70d3c8bcbe767338dfdc687d652d72baebbf1ca27d592->enter($__internal_6db523d023ec1f6b87a70d3c8bcbe767338dfdc687d652d72baebbf1ca27d592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:acl_button.html.twig"));

        // line 11
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_74af6d1f75178eaec7a11db1d95263a00639902dd1a4727b8a9b04e3ea27bfbe->leave($__internal_74af6d1f75178eaec7a11db1d95263a00639902dd1a4727b8a9b04e3ea27bfbe_prof);

        
        $__internal_6db523d023ec1f6b87a70d3c8bcbe767338dfdc687d652d72baebbf1ca27d592->leave($__internal_6db523d023ec1f6b87a70d3c8bcbe767338dfdc687d652d72baebbf1ca27d592_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:acl_button.html.twig";
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
{% if admin.isAclEnabled() and admin.canAccessObject('acl', object) and admin.hasRoute('acl') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('acl', object) }}\">
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
            {{ 'link_action_acl'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:acl_button.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Button\\acl_button.html.twig");
    }
}
