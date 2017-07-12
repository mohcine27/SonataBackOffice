<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_93cb232823dde93c33149c4b38d27508b611cbfbba534748ca54b3701daffef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64491d0375fbade8407435e540f7584d93a4813d818ba801b73f4a1d4d5c477c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64491d0375fbade8407435e540f7584d93a4813d818ba801b73f4a1d4d5c477c->enter($__internal_64491d0375fbade8407435e540f7584d93a4813d818ba801b73f4a1d4d5c477c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_43edc33426c39a460fb5f8ec949e9ec1c5e0828e2347b7227c008c02dfccb80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43edc33426c39a460fb5f8ec949e9ec1c5e0828e2347b7227c008c02dfccb80e->enter($__internal_43edc33426c39a460fb5f8ec949e9ec1c5e0828e2347b7227c008c02dfccb80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64491d0375fbade8407435e540f7584d93a4813d818ba801b73f4a1d4d5c477c->leave($__internal_64491d0375fbade8407435e540f7584d93a4813d818ba801b73f4a1d4d5c477c_prof);

        
        $__internal_43edc33426c39a460fb5f8ec949e9ec1c5e0828e2347b7227c008c02dfccb80e->leave($__internal_43edc33426c39a460fb5f8ec949e9ec1c5e0828e2347b7227c008c02dfccb80e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8ef1210591dc6686313d8561af085399d04d92a83b96886b47a91bb62744bea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef1210591dc6686313d8561af085399d04d92a83b96886b47a91bb62744bea9->enter($__internal_8ef1210591dc6686313d8561af085399d04d92a83b96886b47a91bb62744bea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b38379c8559b806c43cd55e35e6fa8a05e483f583c216f95035782494979efe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38379c8559b806c43cd55e35e6fa8a05e483f583c216f95035782494979efe3->enter($__internal_b38379c8559b806c43cd55e35e6fa8a05e483f583c216f95035782494979efe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_b38379c8559b806c43cd55e35e6fa8a05e483f583c216f95035782494979efe3->leave($__internal_b38379c8559b806c43cd55e35e6fa8a05e483f583c216f95035782494979efe3_prof);

        
        $__internal_8ef1210591dc6686313d8561af085399d04d92a83b96886b47a91bb62744bea9->leave($__internal_8ef1210591dc6686313d8561af085399d04d92a83b96886b47a91bb62744bea9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:list__action.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__action.html.twig");
    }
}
