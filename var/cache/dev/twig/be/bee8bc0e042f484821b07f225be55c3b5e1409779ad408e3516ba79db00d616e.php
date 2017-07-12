<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_0eb8ceacb38bc48251606afa961c9285af35b200e9647662c5ae47ef4c599d3e extends Twig_Template
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
        $__internal_938eeadf6ed35e0102c0228ce480faa2253b2409604cef511e16965805fe6b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938eeadf6ed35e0102c0228ce480faa2253b2409604cef511e16965805fe6b94->enter($__internal_938eeadf6ed35e0102c0228ce480faa2253b2409604cef511e16965805fe6b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:FlashMessage:render.html.twig"));

        $__internal_33934decc1a8eb466ba28f0e1f5dbb1f3ff47ee907fee124fa9778e205fd7adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33934decc1a8eb466ba28f0e1f5dbb1f3ff47ee907fee124fa9778e205fd7adf->enter($__internal_33934decc1a8eb466ba28f0e1f5dbb1f3ff47ee907fee124fa9778e205fd7adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:FlashMessage:render.html.twig"));

        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sonata\CoreBundle\Twig\Extension\FlashMessageExtension')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? ((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sonata\CoreBundle\Twig\Extension\FlashMessageExtension')->getFlashMessages($context["type"], (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\CoreBundle\Twig\Extension\StatusExtension')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
                // line 16
                echo $context["message"];
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_938eeadf6ed35e0102c0228ce480faa2253b2409604cef511e16965805fe6b94->leave($__internal_938eeadf6ed35e0102c0228ce480faa2253b2409604cef511e16965805fe6b94_prof);

        
        $__internal_33934decc1a8eb466ba28f0e1f5dbb1f3ff47ee907fee124fa9778e205fd7adf->leave($__internal_33934decc1a8eb466ba28f0e1f5dbb1f3ff47ee907fee124fa9778e205fd7adf_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  37 => 14,  32 => 13,  29 => 12,  25 => 11,);
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
{% for type in sonata_flashmessages_types() %}
    {% set domain = domain is defined ? domain : null %}
    {% for message in sonata_flashmessages_get(type, domain) %}
        <div class=\"alert alert-{{ type|sonata_status_class }} alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            {{ message|raw }}
        </div>
    {% endfor %}
{% endfor %}
", "SonataCoreBundle:FlashMessage:render.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\core-bundle\\Resources\\views\\FlashMessage\\render.html.twig");
    }
}
