<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_2b797aa4a33bf47107d934e6fa839317a6494177ef2c28ef2ac4035907069e28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd987e3262c5e4559fe3c1685e1185df18d34ea81e62fcee465e1476f2fcd3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd987e3262c5e4559fe3c1685e1185df18d34ea81e62fcee465e1476f2fcd3ce->enter($__internal_bd987e3262c5e4559fe3c1685e1185df18d34ea81e62fcee465e1476f2fcd3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $__internal_ec67ae8c914bb5fb9cc274eaefcf956847e7089d0455c9d3fc878ba9df5fa83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec67ae8c914bb5fb9cc274eaefcf956847e7089d0455c9d3fc878ba9df5fa83c->enter($__internal_ec67ae8c914bb5fb9cc274eaefcf956847e7089d0455c9d3fc878ba9df5fa83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd987e3262c5e4559fe3c1685e1185df18d34ea81e62fcee465e1476f2fcd3ce->leave($__internal_bd987e3262c5e4559fe3c1685e1185df18d34ea81e62fcee465e1476f2fcd3ce_prof);

        
        $__internal_ec67ae8c914bb5fb9cc274eaefcf956847e7089d0455c9d3fc878ba9df5fa83c->leave($__internal_ec67ae8c914bb5fb9cc274eaefcf956847e7089d0455c9d3fc878ba9df5fa83c_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f49d93b3123b16e16aa0e6d3420fddb6f7853bca75626eee566f174dc3138bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49d93b3123b16e16aa0e6d3420fddb6f7853bca75626eee566f174dc3138bfc->enter($__internal_f49d93b3123b16e16aa0e6d3420fddb6f7853bca75626eee566f174dc3138bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6001bb75493cda34fc0ab352be46db17ca6ee282735da9a4736d5d9e259bd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6001bb75493cda34fc0ab352be46db17ca6ee282735da9a4736d5d9e259bd9f->enter($__internal_f6001bb75493cda34fc0ab352be46db17ca6ee282735da9a4736d5d9e259bd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_f6001bb75493cda34fc0ab352be46db17ca6ee282735da9a4736d5d9e259bd9f->leave($__internal_f6001bb75493cda34fc0ab352be46db17ca6ee282735da9a4736d5d9e259bd9f_prof);

        
        $__internal_f49d93b3123b16e16aa0e6d3420fddb6f7853bca75626eee566f174dc3138bfc->leave($__internal_f49d93b3123b16e16aa0e6d3420fddb6f7853bca75626eee566f174dc3138bfc_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c3032090f8aa191b64dc1f02aec51ac0b227859bd509aacef08556c01280e5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3032090f8aa191b64dc1f02aec51ac0b227859bd509aacef08556c01280e5cb->enter($__internal_c3032090f8aa191b64dc1f02aec51ac0b227859bd509aacef08556c01280e5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_ade91ae606679ea404ebcc110e5a5e764e7910c387877b61514affc838e5b2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade91ae606679ea404ebcc110e5a5e764e7910c387877b61514affc838e5b2e9->enter($__internal_ade91ae606679ea404ebcc110e5a5e764e7910c387877b61514affc838e5b2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_ade91ae606679ea404ebcc110e5a5e764e7910c387877b61514affc838e5b2e9->leave($__internal_ade91ae606679ea404ebcc110e5a5e764e7910c387877b61514affc838e5b2e9_prof);

        
        $__internal_c3032090f8aa191b64dc1f02aec51ac0b227859bd509aacef08556c01280e5cb->leave($__internal_c3032090f8aa191b64dc1f02aec51ac0b227859bd509aacef08556c01280e5cb_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_97c28ba3fb4b36e3bc76657368e90bb1df96d7acc883cecfdc3cbdc8b8b51bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c28ba3fb4b36e3bc76657368e90bb1df96d7acc883cecfdc3cbdc8b8b51bc6->enter($__internal_97c28ba3fb4b36e3bc76657368e90bb1df96d7acc883cecfdc3cbdc8b8b51bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_af5e5e6f9dc4cc2353c7a914e53dfb6b49f03d5d1407156646aebef696c0fff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5e5e6f9dc4cc2353c7a914e53dfb6b49f03d5d1407156646aebef696c0fff2->enter($__internal_af5e5e6f9dc4cc2353c7a914e53dfb6b49f03d5d1407156646aebef696c0fff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 25
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 26
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "
            ";
                // line 28
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 29
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 30
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 31
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "create"), "method")) || ($this->getAttribute($context["admin"], "hasRoute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "list"), "method")))) {
                            // line 32
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 35
(isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 36
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => $this->getAttribute(                            // line 39
$context["group"], "icon", array()))));
                            // line 40
                            echo "
                    ";
                        }
                        // line 42
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
    ";
        }
        // line 47
        echo "
";
        
        $__internal_af5e5e6f9dc4cc2353c7a914e53dfb6b49f03d5d1407156646aebef696c0fff2->leave($__internal_af5e5e6f9dc4cc2353c7a914e53dfb6b49f03d5d1407156646aebef696c0fff2_prof);

        
        $__internal_97c28ba3fb4b36e3bc76657368e90bb1df96d7acc883cecfdc3cbdc8b8b51bc6->leave($__internal_97c28ba3fb4b36e3bc76657368e90bb1df96d7acc883cecfdc3cbdc8b8b51bc6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  163 => 45,  157 => 44,  154 => 43,  148 => 42,  144 => 40,  142 => 39,  141 => 36,  140 => 35,  138 => 32,  135 => 31,  132 => 30,  127 => 29,  125 => 28,  122 => 27,  115 => 26,  112 => 25,  106 => 24,  103 => 23,  99 => 22,  96 => 21,  93 => 20,  91 => 19,  85 => 17,  76 => 16,  59 => 15,  41 => 14,  20 => 12,);
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

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') or admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "SonataAdminBundle:Core:search.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\search.html.twig");
    }
}
