<?php

/* SonataAdminBundle:CRUD:select_subclass.html.twig */
class __TwigTemplate_a9afeda8d1c8aea5756295c8681e17f86b8aa3869736d9d71544fa54c380cb62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:select_subclass.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca03e12ac22d41ec9f90c7e5c4bea8bcb09dae108d0531ef8d93faecaa9b5855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca03e12ac22d41ec9f90c7e5c4bea8bcb09dae108d0531ef8d93faecaa9b5855->enter($__internal_ca03e12ac22d41ec9f90c7e5c4bea8bcb09dae108d0531ef8d93faecaa9b5855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $__internal_73e87be2f4b9d28c4b8b8f8cb64d534ede9d42f670f5e63dc372f126ef2b178b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e87be2f4b9d28c4b8b8f8cb64d534ede9d42f670f5e63dc372f126ef2b178b->enter($__internal_73e87be2f4b9d28c4b8b8f8cb64d534ede9d42f670f5e63dc372f126ef2b178b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca03e12ac22d41ec9f90c7e5c4bea8bcb09dae108d0531ef8d93faecaa9b5855->leave($__internal_ca03e12ac22d41ec9f90c7e5c4bea8bcb09dae108d0531ef8d93faecaa9b5855_prof);

        
        $__internal_73e87be2f4b9d28c4b8b8f8cb64d534ede9d42f670f5e63dc372f126ef2b178b->leave($__internal_73e87be2f4b9d28c4b8b8f8cb64d534ede9d42f670f5e63dc372f126ef2b178b_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_d13f22b2933e044c70eff2675e085a45bdcb6753cfa151be5dcbf789c816fa5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13f22b2933e044c70eff2675e085a45bdcb6753cfa151be5dcbf789c816fa5c->enter($__internal_d13f22b2933e044c70eff2675e085a45bdcb6753cfa151be5dcbf789c816fa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ff109961b93d8d8febdea439aa4518ff44fd5cde88e68e7388412727be5b96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff109961b93d8d8febdea439aa4518ff44fd5cde88e68e7388412727be5b96d->enter($__internal_9ff109961b93d8d8febdea439aa4518ff44fd5cde88e68e7388412727be5b96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_9ff109961b93d8d8febdea439aa4518ff44fd5cde88e68e7388412727be5b96d->leave($__internal_9ff109961b93d8d8febdea439aa4518ff44fd5cde88e68e7388412727be5b96d_prof);

        
        $__internal_d13f22b2933e044c70eff2675e085a45bdcb6753cfa151be5dcbf789c816fa5c->leave($__internal_d13f22b2933e044c70eff2675e085a45bdcb6753cfa151be5dcbf789c816fa5c_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_a940c7ba5a564747dc909392d25cee7940c0a1b32971ee95301e4849098e12d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a940c7ba5a564747dc909392d25cee7940c0a1b32971ee95301e4849098e12d4->enter($__internal_a940c7ba5a564747dc909392d25cee7940c0a1b32971ee95301e4849098e12d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_371ffbc876c4cfefbe5a7a693335e42fea3ede94d9512c69ba2a6c388878c32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371ffbc876c4cfefbe5a7a693335e42fea3ede94d9512c69ba2a6c388878c32d->enter($__internal_371ffbc876c4cfefbe5a7a693335e42fea3ede94d9512c69ba2a6c388878c32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 19
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
            // line 24
            echo "                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
            echo "\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_subclass_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_371ffbc876c4cfefbe5a7a693335e42fea3ede94d9512c69ba2a6c388878c32d->leave($__internal_371ffbc876c4cfefbe5a7a693335e42fea3ede94d9512c69ba2a6c388878c32d_prof);

        
        $__internal_a940c7ba5a564747dc909392d25cee7940c0a1b32971ee95301e4849098e12d4->leave($__internal_a940c7ba5a564747dc909392d25cee7940c0a1b32971ee95301e4849098e12d4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:select_subclass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  103 => 33,  94 => 29,  87 => 25,  84 => 24,  79 => 23,  72 => 19,  67 => 16,  58 => 15,  40 => 13,  19 => 11,);
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

{% block title %}{{ 'title_select_subclass'|trans({}, 'SonataAdminBundle') }}{% endblock %}

{% block content %}
    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                {{ block('title') }}
            </h3>
        </div>
        <div class=\"box-body\">
            {% for subclass in admin.subclasses|keys %}
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"{{ admin.generateUrl(action, {'subclass': subclass }) }}\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        {{ subclass|trans({}, admin.translationdomain|default('SonataAdminBundle')) }}
                    </a>
                </div>
            {% else %}
                <span class=\"alert alert-info\">{{ 'no_subclass_available'|trans({}, 'SonataAdminBundle') }}</span>
            {% endfor %}
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:select_subclass.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\select_subclass.html.twig");
    }
}
