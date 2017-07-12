<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_b261869d50ef5b29c42024ac0989fcc163ab16dd786f589da65b1c47b95a86a3 extends Twig_Template
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
        $__internal_b9a328df5392bdf9960c253747c3e47d5fd17e4f9b6a226830ebc7a10bd2045e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a328df5392bdf9960c253747c3e47d5fd17e4f9b6a226830ebc7a10bd2045e->enter($__internal_b9a328df5392bdf9960c253747c3e47d5fd17e4f9b6a226830ebc7a10bd2045e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        $__internal_0f68b3b568b02cd644d603f0785b1e2e2680a5cd1a906178b328de80c243d183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f68b3b568b02cd644d603f0785b1e2e2680a5cd1a906178b328de80c243d183->enter($__internal_0f68b3b568b02cd644d603f0785b1e2e2680a5cd1a906178b328de80c243d183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_b9a328df5392bdf9960c253747c3e47d5fd17e4f9b6a226830ebc7a10bd2045e->leave($__internal_b9a328df5392bdf9960c253747c3e47d5fd17e4f9b6a226830ebc7a10bd2045e_prof);

        
        $__internal_0f68b3b568b02cd644d603f0785b1e2e2680a5cd1a906178b328de80c243d183->leave($__internal_0f68b3b568b02cd644d603f0785b1e2e2680a5cd1a906178b328de80c243d183_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
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

{% if admin.canAccessObject('edit', object) and admin.hasRoute('edit') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:edit_button.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Button\\edit_button.html.twig");
    }
}
