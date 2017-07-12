<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_533dfc6357920884f52639c03241e5a7e2a7a6da9cef0978efae2dc9548145a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec43e8ea1acc8f9218292493d567bfa0c21f69cec686cc4719032c92f28213af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec43e8ea1acc8f9218292493d567bfa0c21f69cec686cc4719032c92f28213af->enter($__internal_ec43e8ea1acc8f9218292493d567bfa0c21f69cec686cc4719032c92f28213af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $__internal_e55533e5e4821b0c7f9f1b8b99048a05ab8d9d8ead9ae0f134709fe460e317db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55533e5e4821b0c7f9f1b8b99048a05ab8d9d8ead9ae0f134709fe460e317db->enter($__internal_e55533e5e4821b0c7f9f1b8b99048a05ab8d9d8ead9ae0f134709fe460e317db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec43e8ea1acc8f9218292493d567bfa0c21f69cec686cc4719032c92f28213af->leave($__internal_ec43e8ea1acc8f9218292493d567bfa0c21f69cec686cc4719032c92f28213af_prof);

        
        $__internal_e55533e5e4821b0c7f9f1b8b99048a05ab8d9d8ead9ae0f134709fe460e317db->leave($__internal_e55533e5e4821b0c7f9f1b8b99048a05ab8d9d8ead9ae0f134709fe460e317db_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b76b5313a158e727053fe9c20126fcd03aeecc9b4bc93501bdeea5446c0877e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76b5313a158e727053fe9c20126fcd03aeecc9b4bc93501bdeea5446c0877e3->enter($__internal_b76b5313a158e727053fe9c20126fcd03aeecc9b4bc93501bdeea5446c0877e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_d9b9061a482c36233c06ff95006ef6253df47b6af2dcfd71dbd560560cf4708b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b9061a482c36233c06ff95006ef6253df47b6af2dcfd71dbd560560cf4708b->enter($__internal_d9b9061a482c36233c06ff95006ef6253df47b6af2dcfd71dbd560560cf4708b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_d9b9061a482c36233c06ff95006ef6253df47b6af2dcfd71dbd560560cf4708b->leave($__internal_d9b9061a482c36233c06ff95006ef6253df47b6af2dcfd71dbd560560cf4708b_prof);

        
        $__internal_b76b5313a158e727053fe9c20126fcd03aeecc9b4bc93501bdeea5446c0877e3->leave($__internal_b76b5313a158e727053fe9c20126fcd03aeecc9b4bc93501bdeea5446c0877e3_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_e50a23a6090f0d62bfed2247e3cc4788fc9d3c53639749fdc1e02532ba4ac077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50a23a6090f0d62bfed2247e3cc4788fc9d3c53639749fdc1e02532ba4ac077->enter($__internal_e50a23a6090f0d62bfed2247e3cc4788fc9d3c53639749fdc1e02532ba4ac077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_63e93587baad854a9342232cfdd7767efdc355f49a5e13376e401c1c751c6390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e93587baad854a9342232cfdd7767efdc355f49a5e13376e401c1c751c6390->enter($__internal_63e93587baad854a9342232cfdd7767efdc355f49a5e13376e401c1c751c6390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_63e93587baad854a9342232cfdd7767efdc355f49a5e13376e401c1c751c6390->leave($__internal_63e93587baad854a9342232cfdd7767efdc355f49a5e13376e401c1c751c6390_prof);

        
        $__internal_e50a23a6090f0d62bfed2247e3cc4788fc9d3c53639749fdc1e02532ba4ac077->leave($__internal_e50a23a6090f0d62bfed2247e3cc4788fc9d3c53639749fdc1e02532ba4ac077_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_0993bca98caef099807061bd165a7ac640c6bf8825ca35dde3fa6aa6b5f35a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0993bca98caef099807061bd165a7ac640c6bf8825ca35dde3fa6aa6b5f35a81->enter($__internal_0993bca98caef099807061bd165a7ac640c6bf8825ca35dde3fa6aa6b5f35a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_2d4e0b033fee82a75f3f87a63b775d9b104e4e39d3942381e8261ddf27663ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4e0b033fee82a75f3f87a63b775d9b104e4e39d3942381e8261ddf27663ed3->enter($__internal_2d4e0b033fee82a75f3f87a63b775d9b104e4e39d3942381e8261ddf27663ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_2d4e0b033fee82a75f3f87a63b775d9b104e4e39d3942381e8261ddf27663ed3->leave($__internal_2d4e0b033fee82a75f3f87a63b775d9b104e4e39d3942381e8261ddf27663ed3_prof);

        
        $__internal_0993bca98caef099807061bd165a7ac640c6bf8825ca35dde3fa6aa6b5f35a81->leave($__internal_0993bca98caef099807061bd165a7ac640c6bf8825ca35dde3fa6aa6b5f35a81_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_b66316bbb2f95b09b70ecb8031f077cb8a3169e2295751d432742b732b44745e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66316bbb2f95b09b70ecb8031f077cb8a3169e2295751d432742b732b44745e->enter($__internal_b66316bbb2f95b09b70ecb8031f077cb8a3169e2295751d432742b732b44745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_a608e048bde81e576da005230b84b84a6bfbc3d6d74720f7ecb189031bb7f241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a608e048bde81e576da005230b84b84a6bfbc3d6d74720f7ecb189031bb7f241->enter($__internal_a608e048bde81e576da005230b84b84a6bfbc3d6d74720f7ecb189031bb7f241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_a608e048bde81e576da005230b84b84a6bfbc3d6d74720f7ecb189031bb7f241->leave($__internal_a608e048bde81e576da005230b84b84a6bfbc3d6d74720f7ecb189031bb7f241_prof);

        
        $__internal_b66316bbb2f95b09b70ecb8031f077cb8a3169e2295751d432742b732b44745e->leave($__internal_b66316bbb2f95b09b70ecb8031f077cb8a3169e2295751d432742b732b44745e_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_9eeacd4ed0545c74c9177b8f7ee699dfc23ac7a63ec70f43b5b3e75be9b7fa14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eeacd4ed0545c74c9177b8f7ee699dfc23ac7a63ec70f43b5b3e75be9b7fa14->enter($__internal_9eeacd4ed0545c74c9177b8f7ee699dfc23ac7a63ec70f43b5b3e75be9b7fa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f327d7df59275c6a064ce3e35dbafe1765e460e7c02c9c2761cc5013a3542e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f327d7df59275c6a064ce3e35dbafe1765e460e7c02c9c2761cc5013a3542e2b->enter($__internal_f327d7df59275c6a064ce3e35dbafe1765e460e7c02c9c2761cc5013a3542e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_f327d7df59275c6a064ce3e35dbafe1765e460e7c02c9c2761cc5013a3542e2b->leave($__internal_f327d7df59275c6a064ce3e35dbafe1765e460e7c02c9c2761cc5013a3542e2b_prof);

        
        $__internal_9eeacd4ed0545c74c9177b8f7ee699dfc23ac7a63ec70f43b5b3e75be9b7fa14->leave($__internal_9eeacd4ed0545c74c9177b8f7ee699dfc23ac7a63ec70f43b5b3e75be9b7fa14_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  195 => 56,  186 => 55,  175 => 52,  168 => 50,  161 => 48,  155 => 46,  153 => 45,  150 => 44,  146 => 43,  143 => 42,  136 => 38,  132 => 36,  130 => 35,  127 => 34,  123 => 33,  120 => 32,  111 => 31,  98 => 27,  91 => 23,  87 => 21,  78 => 20,  61 => 17,  44 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\preview.html.twig");
    }
}
