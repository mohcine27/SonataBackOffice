<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_f4fb12ec2962a895addc7a566d1d15d058e3170dc9ad93610ba77eaee8d9a07b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91cc60157106d8959ef708b8f12d64c80d2cd9d6516c02b520a18653f2ce9d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91cc60157106d8959ef708b8f12d64c80d2cd9d6516c02b520a18653f2ce9d4e->enter($__internal_91cc60157106d8959ef708b8f12d64c80d2cd9d6516c02b520a18653f2ce9d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $__internal_d1873b784c040d14de5866f5da3ee49a84fb17c18de948157b72fc9026186d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1873b784c040d14de5866f5da3ee49a84fb17c18de948157b72fc9026186d55->enter($__internal_d1873b784c040d14de5866f5da3ee49a84fb17c18de948157b72fc9026186d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91cc60157106d8959ef708b8f12d64c80d2cd9d6516c02b520a18653f2ce9d4e->leave($__internal_91cc60157106d8959ef708b8f12d64c80d2cd9d6516c02b520a18653f2ce9d4e_prof);

        
        $__internal_d1873b784c040d14de5866f5da3ee49a84fb17c18de948157b72fc9026186d55->leave($__internal_d1873b784c040d14de5866f5da3ee49a84fb17c18de948157b72fc9026186d55_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_649150f627614b4995d31643982e131033614a642200d9cd257374924f1660ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649150f627614b4995d31643982e131033614a642200d9cd257374924f1660ea->enter($__internal_649150f627614b4995d31643982e131033614a642200d9cd257374924f1660ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_753d7b0de122a59bc2aa831445ea3ee0d0db68e5ab8919c3e2869f5af9c12daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753d7b0de122a59bc2aa831445ea3ee0d0db68e5ab8919c3e2869f5af9c12daa->enter($__internal_753d7b0de122a59bc2aa831445ea3ee0d0db68e5ab8919c3e2869f5af9c12daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
        
        $__internal_753d7b0de122a59bc2aa831445ea3ee0d0db68e5ab8919c3e2869f5af9c12daa->leave($__internal_753d7b0de122a59bc2aa831445ea3ee0d0db68e5ab8919c3e2869f5af9c12daa_prof);

        
        $__internal_649150f627614b4995d31643982e131033614a642200d9cd257374924f1660ea->leave($__internal_649150f627614b4995d31643982e131033614a642200d9cd257374924f1660ea_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_953651adfeca3ea6a9e811ab0a2726ae7c45e07a6895913eab66deb1468a3633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953651adfeca3ea6a9e811ab0a2726ae7c45e07a6895913eab66deb1468a3633->enter($__internal_953651adfeca3ea6a9e811ab0a2726ae7c45e07a6895913eab66deb1468a3633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_b3b6faa1df03322c9e117b522e82121dd35807d9081a1cc70f948409ada217f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b6faa1df03322c9e117b522e82121dd35807d9081a1cc70f948409ada217f9->enter($__internal_b3b6faa1df03322c9e117b522e82121dd35807d9081a1cc70f948409ada217f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_b3b6faa1df03322c9e117b522e82121dd35807d9081a1cc70f948409ada217f9->leave($__internal_b3b6faa1df03322c9e117b522e82121dd35807d9081a1cc70f948409ada217f9_prof);

        
        $__internal_953651adfeca3ea6a9e811ab0a2726ae7c45e07a6895913eab66deb1468a3633->leave($__internal_953651adfeca3ea6a9e811ab0a2726ae7c45e07a6895913eab66deb1468a3633_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_95ac69708d0178bf8a7d3d9e02a8aca2c51e84daedddd90f43dd65b95be706e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ac69708d0178bf8a7d3d9e02a8aca2c51e84daedddd90f43dd65b95be706e6->enter($__internal_95ac69708d0178bf8a7d3d9e02a8aca2c51e84daedddd90f43dd65b95be706e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f701a1e63e31d77e402e4719cc8b360d3349643c42ffc7d3f0e910bf0f5ad9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f701a1e63e31d77e402e4719cc8b360d3349643c42ffc7d3f0e910bf0f5ad9fa->enter($__internal_f701a1e63e31d77e402e4719cc8b360d3349643c42ffc7d3f0e910bf0f5ad9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_f701a1e63e31d77e402e4719cc8b360d3349643c42ffc7d3f0e910bf0f5ad9fa->leave($__internal_f701a1e63e31d77e402e4719cc8b360d3349643c42ffc7d3f0e910bf0f5ad9fa_prof);

        
        $__internal_95ac69708d0178bf8a7d3d9e02a8aca2c51e84daedddd90f43dd65b95be706e6->leave($__internal_95ac69708d0178bf8a7d3d9e02a8aca2c51e84daedddd90f43dd65b95be706e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 41,  127 => 39,  121 => 37,  119 => 36,  115 => 35,  110 => 33,  105 => 31,  99 => 28,  93 => 25,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>
            </div>
            <div class=\"box-body\">
                {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"{{ admin.generateObjectUrl('delete', object) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>
                    {% if admin.hasRoute('edit') and admin.hasAccess('edit', object) %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:delete.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\delete.html.twig");
    }
}
