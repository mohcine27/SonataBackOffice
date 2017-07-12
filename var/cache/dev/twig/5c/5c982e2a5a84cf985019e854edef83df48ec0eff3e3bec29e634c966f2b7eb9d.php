<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_372bea3a8d4b0a9b7ea6d808180a5a78cdb7415e02ee3c15aefb0777ede02f1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f5d0606c56558dbc75262ca9d5a6ce99f7a26a55812c7b3384a887d716cb665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5d0606c56558dbc75262ca9d5a6ce99f7a26a55812c7b3384a887d716cb665->enter($__internal_6f5d0606c56558dbc75262ca9d5a6ce99f7a26a55812c7b3384a887d716cb665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $__internal_6afb61f87f3de9efa40b7dcf4999e82bcf3080abcf0bd4526736387f844a158c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afb61f87f3de9efa40b7dcf4999e82bcf3080abcf0bd4526736387f844a158c->enter($__internal_6afb61f87f3de9efa40b7dcf4999e82bcf3080abcf0bd4526736387f844a158c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5d0606c56558dbc75262ca9d5a6ce99f7a26a55812c7b3384a887d716cb665->leave($__internal_6f5d0606c56558dbc75262ca9d5a6ce99f7a26a55812c7b3384a887d716cb665_prof);

        
        $__internal_6afb61f87f3de9efa40b7dcf4999e82bcf3080abcf0bd4526736387f844a158c->leave($__internal_6afb61f87f3de9efa40b7dcf4999e82bcf3080abcf0bd4526736387f844a158c_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_338559ac28ff68cb59f47c68baeaf248e713df17d4bb9058a6b5982ccf6bd912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338559ac28ff68cb59f47c68baeaf248e713df17d4bb9058a6b5982ccf6bd912->enter($__internal_338559ac28ff68cb59f47c68baeaf248e713df17d4bb9058a6b5982ccf6bd912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_c231917613d3ac767b93d1ef0fc364ce45d140a4ef59bf735b3b1281fffd8b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c231917613d3ac767b93d1ef0fc364ce45d140a4ef59bf735b3b1281fffd8b6e->enter($__internal_c231917613d3ac767b93d1ef0fc364ce45d140a4ef59bf735b3b1281fffd8b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_c231917613d3ac767b93d1ef0fc364ce45d140a4ef59bf735b3b1281fffd8b6e->leave($__internal_c231917613d3ac767b93d1ef0fc364ce45d140a4ef59bf735b3b1281fffd8b6e_prof);

        
        $__internal_338559ac28ff68cb59f47c68baeaf248e713df17d4bb9058a6b5982ccf6bd912->leave($__internal_338559ac28ff68cb59f47c68baeaf248e713df17d4bb9058a6b5982ccf6bd912_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_54d831483123a119b121acda4ee92247f70b9a3b19f77a1cb34bb16422fb07f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d831483123a119b121acda4ee92247f70b9a3b19f77a1cb34bb16422fb07f7->enter($__internal_54d831483123a119b121acda4ee92247f70b9a3b19f77a1cb34bb16422fb07f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_99856f14a04f178e9dbff131469b6fbc253774069999c4b5c3f44ff2c3296ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99856f14a04f178e9dbff131469b6fbc253774069999c4b5c3f44ff2c3296ca4->enter($__internal_99856f14a04f178e9dbff131469b6fbc253774069999c4b5c3f44ff2c3296ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_99856f14a04f178e9dbff131469b6fbc253774069999c4b5c3f44ff2c3296ca4->leave($__internal_99856f14a04f178e9dbff131469b6fbc253774069999c4b5c3f44ff2c3296ca4_prof);

        
        $__internal_54d831483123a119b121acda4ee92247f70b9a3b19f77a1cb34bb16422fb07f7->leave($__internal_54d831483123a119b121acda4ee92247f70b9a3b19f77a1cb34bb16422fb07f7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 28,  90 => 26,  88 => 25,  82 => 23,  73 => 22,  62 => 19,  59 => 18,  53 => 16,  50 => 15,  41 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "SonataAdminBundle:Pager:simple_pager_results.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Pager\\simple_pager_results.html.twig");
    }
}
