<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_db829dc628a6562f615de6526d7d9773857f6c9dc23e4091fc254819d2883c19 extends Twig_Template
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
        $__internal_b9a91e1644b104db6903548d9da623aaebe214ecfd65a95a2f0eb8cdeb7b7c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a91e1644b104db6903548d9da623aaebe214ecfd65a95a2f0eb8cdeb7b7c2b->enter($__internal_b9a91e1644b104db6903548d9da623aaebe214ecfd65a95a2f0eb8cdeb7b7c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:history_button.html.twig"));

        $__internal_78a13b6285091d4e557c4a4aa6c335d4ac4a80bc18e73b81cc941094fc3d444e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a13b6285091d4e557c4a4aa6c335d4ac4a80bc18e73b81cc941094fc3d444e->enter($__internal_78a13b6285091d4e557c4a4aa6c335d4ac4a80bc18e73b81cc941094fc3d444e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:history_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "history"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_b9a91e1644b104db6903548d9da623aaebe214ecfd65a95a2f0eb8cdeb7b7c2b->leave($__internal_b9a91e1644b104db6903548d9da623aaebe214ecfd65a95a2f0eb8cdeb7b7c2b_prof);

        
        $__internal_78a13b6285091d4e557c4a4aa6c335d4ac4a80bc18e73b81cc941094fc3d444e->leave($__internal_78a13b6285091d4e557c4a4aa6c335d4ac4a80bc18e73b81cc941094fc3d444e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
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

{% if admin.canAccessObject('history', object) and admin.hasRoute('history') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('history', object) }}\">
            <i class=\"fa fa-archive\" aria-hidden=\"true\"></i>
            {{ 'link_action_history'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:history_button.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Button\\history_button.html.twig");
    }
}
