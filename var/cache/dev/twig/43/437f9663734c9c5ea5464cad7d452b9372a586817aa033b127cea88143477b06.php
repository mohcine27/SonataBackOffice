<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_1f3a20dd188a10994c6dc7ef01d2da9cf5b00a4480f7fdd1f6d8d8fa9f2f06de extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2abd0927d230e966270bda882d0d3cbcf50c4550fa59b940c1771025519b5514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2abd0927d230e966270bda882d0d3cbcf50c4550fa59b940c1771025519b5514->enter($__internal_2abd0927d230e966270bda882d0d3cbcf50c4550fa59b940c1771025519b5514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $__internal_4b4d8daedcf2ec2dde162ad1368755cd4d96f1217366b7a35ed5be9b8809ff8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4d8daedcf2ec2dde162ad1368755cd4d96f1217366b7a35ed5be9b8809ff8b->enter($__internal_4b4d8daedcf2ec2dde162ad1368755cd4d96f1217366b7a35ed5be9b8809ff8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2abd0927d230e966270bda882d0d3cbcf50c4550fa59b940c1771025519b5514->leave($__internal_2abd0927d230e966270bda882d0d3cbcf50c4550fa59b940c1771025519b5514_prof);

        
        $__internal_4b4d8daedcf2ec2dde162ad1368755cd4d96f1217366b7a35ed5be9b8809ff8b->leave($__internal_4b4d8daedcf2ec2dde162ad1368755cd4d96f1217366b7a35ed5be9b8809ff8b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_9cc2f72a80b8426636024be8dfa0e77bf5cbb7814448a722e482cf2e0c922f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc2f72a80b8426636024be8dfa0e77bf5cbb7814448a722e482cf2e0c922f6a->enter($__internal_9cc2f72a80b8426636024be8dfa0e77bf5cbb7814448a722e482cf2e0c922f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_4e10588018440e3c1b024b54fcc4ade14dabe93f10bda1942badfb3ba2c0571a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e10588018440e3c1b024b54fcc4ade14dabe93f10bda1942badfb3ba2c0571a->enter($__internal_4e10588018440e3c1b024b54fcc4ade14dabe93f10bda1942badfb3ba2c0571a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 15)->display($context);
        
        $__internal_4e10588018440e3c1b024b54fcc4ade14dabe93f10bda1942badfb3ba2c0571a->leave($__internal_4e10588018440e3c1b024b54fcc4ade14dabe93f10bda1942badfb3ba2c0571a_prof);

        
        $__internal_9cc2f72a80b8426636024be8dfa0e77bf5cbb7814448a722e482cf2e0c922f6a->leave($__internal_9cc2f72a80b8426636024be8dfa0e77bf5cbb7814448a722e482cf2e0c922f6a_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_f2d7acee36920abd9c22da7dc65420d3e7161f9a1dda87c1e9ce4ed56683e5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d7acee36920abd9c22da7dc65420d3e7161f9a1dda87c1e9ce4ed56683e5bc->enter($__internal_f2d7acee36920abd9c22da7dc65420d3e7161f9a1dda87c1e9ce4ed56683e5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_734dae546c8558eac16caee9c846ff9d35277282bdb42f55f42b020cb484b8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734dae546c8558eac16caee9c846ff9d35277282bdb42f55f42b020cb484b8e8->enter($__internal_734dae546c8558eac16caee9c846ff9d35277282bdb42f55f42b020cb484b8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_734dae546c8558eac16caee9c846ff9d35277282bdb42f55f42b020cb484b8e8->leave($__internal_734dae546c8558eac16caee9c846ff9d35277282bdb42f55f42b020cb484b8e8_prof);

        
        $__internal_f2d7acee36920abd9c22da7dc65420d3e7161f9a1dda87c1e9ce4ed56683e5bc->leave($__internal_f2d7acee36920abd9c22da7dc65420d3e7161f9a1dda87c1e9ce4ed56683e5bc_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8783ebb6cf70fa6c072e844a0abb6b7c198fac504de6364491abf8c4d9e9cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8783ebb6cf70fa6c072e844a0abb6b7c198fac504de6364491abf8c4d9e9cdf->enter($__internal_c8783ebb6cf70fa6c072e844a0abb6b7c198fac504de6364491abf8c4d9e9cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e90f692982d1217105bd2a7ef28d6d010a05e13b212ddd977a8d0d62dbe534cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90f692982d1217105bd2a7ef28d6d010a05e13b212ddd977a8d0d62dbe534cd->enter($__internal_e90f692982d1217105bd2a7ef28d6d010a05e13b212ddd977a8d0d62dbe534cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                ";
        // line 24
        if ( !((isset($context["batch_translation_domain"]) ? $context["batch_translation_domain"] : $this->getContext($context, "batch_translation_domain")) === false)) {
            // line 25
            echo "                    ";
            $context["action_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["action_label"]) ? $context["action_label"] : $this->getContext($context, "action_label")), array(), (isset($context["batch_translation_domain"]) ? $context["batch_translation_domain"] : $this->getContext($context, "batch_translation_domain")));
            // line 26
            echo "                ";
        }
        // line 27
        echo "                <h4 class=\"box-title\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("title_batch_confirmation", array("%action%" => (isset($context["action_label"]) ? $context["action_label"] : $this->getContext($context, "action_label"))), "SonataAdminBundle");
        echo "</h4>
            </div>
            <div class=\"box-body\">
                ";
        // line 30
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "all_elements", array())) {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 33
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array())), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array()))), "SonataAdminBundle");
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <div style=\"display: none\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                    ";
        // line 48
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
            // line 49
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 55
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_e90f692982d1217105bd2a7ef28d6d010a05e13b212ddd977a8d0d62dbe534cd->leave($__internal_e90f692982d1217105bd2a7ef28d6d010a05e13b212ddd977a8d0d62dbe534cd_prof);

        
        $__internal_c8783ebb6cf70fa6c072e844a0abb6b7c198fac504de6364491abf8c4d9e9cdf->leave($__internal_c8783ebb6cf70fa6c072e844a0abb6b7c198fac504de6364491abf8c4d9e9cdf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 55,  163 => 52,  159 => 51,  153 => 49,  151 => 48,  146 => 46,  140 => 43,  134 => 40,  130 => 39,  125 => 37,  121 => 35,  118 => 34,  115 => 33,  109 => 31,  107 => 30,  100 => 27,  97 => 26,  94 => 25,  92 => 24,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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
                {% if batch_translation_domain is not same as(false) %}
                    {% set action_label = action_label|trans({}, batch_translation_domain) %}
                {% endif %}
                <h4 class=\"box-title\">{% trans with {'%action%': action_label} from 'SonataAdminBundle' %}title_batch_confirmation{% endtrans %}</h4>
            </div>
            <div class=\"box-body\">
                {% if data.all_elements %}
                    {{ 'message_batch_all_confirmation'|trans({}, 'SonataAdminBundle') }}
                {% else %}
                    {% transchoice data.idx|length with {'%count%': data.idx|length} from 'SonataAdminBundle' %}message_batch_confirmation{% endtranschoice %}
                {% endif %}
            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"{{ data|json_encode }}\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <div style=\"display: none\">
                        {{ form_rest(form) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">{{ 'btn_execute_batch_action'|trans({}, 'SonataAdminBundle') }}</button>

                    {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateUrl('list') }}\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}
                        </a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\batch_confirmation.html.twig");
    }
}
