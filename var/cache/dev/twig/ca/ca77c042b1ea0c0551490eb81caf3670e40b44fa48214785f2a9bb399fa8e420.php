<?php

/* EasyAdminBundle:default/includes:_actions.html.twig */
class __TwigTemplate_d125de1b4088832cd77ea395a63811c33cc3e4ace3656d413e6af96f082ee118 extends Twig_Template
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
        $__internal_7821ff8643b8cbf152bc490b7f1a93b3a7168535bdae355db31c38145201b8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7821ff8643b8cbf152bc490b7f1a93b3a7168535bdae355db31c38145201b8cc->enter($__internal_7821ff8643b8cbf152bc490b7f1a93b3a7168535bdae355db31c38145201b8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_actions.html.twig"));

        $__internal_df410519352e51349fdfb8084c534b4713113847b2f164a2d7ef1bfe1224d521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df410519352e51349fdfb8084c534b4713113847b2f164a2d7ef1bfe1224d521->enter($__internal_df410519352e51349fdfb8084c534b4713113847b2f164a2d7ef1bfe1224d521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_actions.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            if (("list" == $this->getAttribute($context["action"], "name", array()))) {
                // line 3
                echo "        ";
                $context["action_href"] = (((($this->getAttribute((isset($context["request_parameters"]) ? $context["request_parameters"] : null), "referer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request_parameters"]) ? $context["request_parameters"] : null), "referer", array()), "")) : (""))) ? (urldecode($this->getAttribute((isset($context["request_parameters"]) ? $context["request_parameters"] : $this->getContext($context, "request_parameters")), "referer", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) ? $context["request_parameters"] : $this->getContext($context, "request_parameters")), array("action" => "list")))));
                // line 4
                echo "    ";
            } elseif (("method" == $this->getAttribute($context["action"], "type", array()))) {
                // line 5
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) ? $context["request_parameters"] : $this->getContext($context, "request_parameters")), array("action" => $this->getAttribute($context["action"], "name", array()), "id" => (isset($context["item_id"]) ? $context["item_id"] : $this->getContext($context, "item_id")))));
                // line 6
                echo "    ";
            } elseif (("route" == $this->getAttribute($context["action"], "type", array()))) {
                // line 7
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["action"], "name", array()), twig_array_merge((isset($context["request_parameters"]) ? $context["request_parameters"] : $this->getContext($context, "request_parameters")), array("action" => $this->getAttribute($context["action"], "name", array()), "id" => (isset($context["item_id"]) ? $context["item_id"] : $this->getContext($context, "item_id")))));
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <a class=\"";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["action_href"]) ? $context["action_href"] : $this->getContext($context, "action_href")), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "target", array()), "html", null, true);
            echo "\">";
            // line 11
            if ($this->getAttribute($context["action"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                echo "\"></i> ";
            }
            // line 12
            if (($this->getAttribute($context["action"], "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["action"], "label", array())))) {
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["action"], "label", array()), twig_array_merge((isset($context["trans_parameters"]) ? $context["trans_parameters"] : $this->getContext($context, "trans_parameters")), array("%entity_id%" => (isset($context["item_id"]) ? $context["item_id"] : $this->getContext($context, "item_id")))), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            }
            // line 15
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7821ff8643b8cbf152bc490b7f1a93b3a7168535bdae355db31c38145201b8cc->leave($__internal_7821ff8643b8cbf152bc490b7f1a93b3a7168535bdae355db31c38145201b8cc_prof);

        
        $__internal_df410519352e51349fdfb8084c534b4713113847b2f164a2d7ef1bfe1224d521->leave($__internal_df410519352e51349fdfb8084c534b4713113847b2f164a2d7ef1bfe1224d521_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  68 => 13,  66 => 12,  60 => 11,  53 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for action in actions %}
    {% if 'list' == action.name %}
        {% set action_href = request_parameters.referer|default('') ? request_parameters.referer|easyadmin_urldecode : path('easyadmin', request_parameters|merge({ action: 'list' })) %}
    {% elseif 'method' == action.type %}
        {% set action_href = path('easyadmin', request_parameters|merge({ action: action.name, id: item_id })) %}
    {% elseif 'route' == action.type %}
        {% set action_href = path(action.name, request_parameters|merge({ action: action.name, id: item_id })) %}
    {% endif %}

    <a class=\"{{ action.css_class|default('') }}\" href=\"{{ action_href }}\" target=\"{{ action.target }}\">
        {%- if action.icon %}<i class=\"fa fa-{{ action.icon }}\"></i> {% endif -%}
        {%- if action.label is defined and not action.label is empty -%}
            {{ action.label|trans(arguments = trans_parameters|merge({ '%entity_id%': item_id }), domain = translation_domain) }}
        {%- endif -%}
    </a>
{% endfor %}
", "EasyAdminBundle:default/includes:_actions.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\includes\\_actions.html.twig");
    }
}
