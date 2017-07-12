<?php

/* SonataAdminBundle:CRUD:action_buttons.html.twig */
class __TwigTemplate_b1247fa0047b08a82a310efc06cc81983349768a21a3637790bc2b19c5ddd7fc extends Twig_Template
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
        $__internal_afebc1433b88369cfb9317a83956d24d2ea38150a2349e7daaa5ae6444f07384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afebc1433b88369cfb9317a83956d24d2ea38150a2349e7daaa5ae6444f07384->enter($__internal_afebc1433b88369cfb9317a83956d24d2ea38150a2349e7daaa5ae6444f07384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action_buttons.html.twig"));

        $__internal_223eb73f0353b79ed660a8d5983e08f542d1219daca8ae6d70d80cd78dc111ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223eb73f0353b79ed660a8d5983e08f542d1219daca8ae6d70d80cd78dc111ad->enter($__internal_223eb73f0353b79ed660a8d5983e08f542d1219daca8ae6d70d80cd78dc111ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action_buttons.html.twig"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getActionButtons", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), 1 => ((array_key_exists("object", $context)) ? (_twig_default_filter((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), null)) : (null))), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "        ";
            if ($this->getAttribute($context["item"], "template", array(), "any", true, true)) {
                // line 14
                echo "            ";
                $this->loadTemplate($this->getAttribute($context["item"], "template", array()), "SonataAdminBundle:CRUD:action_buttons.html.twig", 14)->display($context);
                // line 15
                echo "        ";
            }
            // line 16
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_afebc1433b88369cfb9317a83956d24d2ea38150a2349e7daaa5ae6444f07384->leave($__internal_afebc1433b88369cfb9317a83956d24d2ea38150a2349e7daaa5ae6444f07384_prof);

        
        $__internal_223eb73f0353b79ed660a8d5983e08f542d1219daca8ae6d70d80cd78dc111ad->leave($__internal_223eb73f0353b79ed660a8d5983e08f542d1219daca8ae6d70d80cd78dc111ad_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  51 => 15,  48 => 14,  45 => 13,  27 => 12,  25 => 11,);
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
{% spaceless %}
    {% for item in admin.getActionButtons(action, object|default(null)) %}
        {% if item.template is defined %}
            {% include item.template %}
        {% endif %}
    {% endfor %}
{% endspaceless %}
", "SonataAdminBundle:CRUD:action_buttons.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\action_buttons.html.twig");
    }
}
