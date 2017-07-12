<?php

/* SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig */
class __TwigTemplate_7aba49910abb42b9e2eb609cb5c85ee7dc023353800b7f93ccec383d816b7ea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_443766c911213df22a75551bc6745c6962704d4a8a90da300e72340f798cafab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443766c911213df22a75551bc6745c6962704d4a8a90da300e72340f798cafab->enter($__internal_443766c911213df22a75551bc6745c6962704d4a8a90da300e72340f798cafab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig"));

        $__internal_9ea06c582ce51ab06b2057650faf0ab1e1b7010d4a9d9734676173f959c9d382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea06c582ce51ab06b2057650faf0ab1e1b7010d4a9d9734676173f959c9d382->enter($__internal_9ea06c582ce51ab06b2057650faf0ab1e1b7010d4a9d9734676173f959c9d382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        ";
            // line 24
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "_action", array(), "array"));
            echo "
    </td>
";
        }
        
        $__internal_443766c911213df22a75551bc6745c6962704d4a8a90da300e72340f798cafab->leave($__internal_443766c911213df22a75551bc6745c6962704d4a8a90da300e72340f798cafab_prof);

        
        $__internal_9ea06c582ce51ab06b2057650faf0ab1e1b7010d4a9d9734676173f959c9d382->leave($__internal_9ea06c582ce51ab06b2057650faf0ab1e1b7010d4a9d9734676173f959c9d382_prof);

    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
        $__internal_b300a47698e2ce7e3ff640c26002254feca837bf4498692d396c6d7830f91b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b300a47698e2ce7e3ff640c26002254feca837bf4498692d396c6d7830f91b90->enter($__internal_b300a47698e2ce7e3ff640c26002254feca837bf4498692d396c6d7830f91b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        $__internal_53c901224092636249483f0a15ae2ffa65a996de00ee52460866a9d81af0898b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c901224092636249483f0a15ae2ffa65a996de00ee52460866a9d81af0898b->enter($__internal_53c901224092636249483f0a15ae2ffa65a996de00ee52460866a9d81af0898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        
        $__internal_53c901224092636249483f0a15ae2ffa65a996de00ee52460866a9d81af0898b->leave($__internal_53c901224092636249483f0a15ae2ffa65a996de00ee52460866a9d81af0898b_prof);

        
        $__internal_b300a47698e2ce7e3ff640c26002254feca837bf4498692d396c6d7830f91b90->leave($__internal_b300a47698e2ce7e3ff640c26002254feca837bf4498692d396c6d7830f91b90_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  62 => 24,  57 => 23,  55 => 22,  51 => 20,  49 => 19,  43 => 18,  40 => 17,  34 => 14,  31 => 13,  29 => 12,  26 => 11,);
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

{% if admin.list.has('batch') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        {{ object|render_list_element(admin.list['batch']) }}
    </td>
{% endif %}

<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"{{ admin.list.elements|length - (admin.list.has('_action') + admin.list.has('batch')) }}\" objectId=\"{{ admin.id(object) }}\">
    {% block row %}{% endblock %}
</td>

{% if admin.list.has('_action') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"{{ admin.id(object) }}\">
        {{ object|render_list_element(admin.list['_action']) }}
    </td>
{% endif %}
", "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_list_flat_inner_row.html.twig");
    }
}
