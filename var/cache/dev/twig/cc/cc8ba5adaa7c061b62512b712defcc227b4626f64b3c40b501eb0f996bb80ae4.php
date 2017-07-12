<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_4369051d2847ba07c6926bec570d15ab725773aaf3543faf39d47c5f6d2e4e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1099a82642250c40cd6bad8fafafcb1b64ea7c094a73ce119e642da072f5e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1099a82642250c40cd6bad8fafafcb1b64ea7c094a73ce119e642da072f5e4e->enter($__internal_f1099a82642250c40cd6bad8fafafcb1b64ea7c094a73ce119e642da072f5e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_search_result.html.twig"));

        $__internal_724329d6bd4a8349cb75f402e761216cfbf09b242b27f6d7a9a387e4933a4058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724329d6bd4a8349cb75f402e761216cfbf09b242b27f6d7a9a387e4933a4058->enter($__internal_724329d6bd4a8349cb75f402e761216cfbf09b242b27f6d7a9a387e4933a4058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_search_result.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1099a82642250c40cd6bad8fafafcb1b64ea7c094a73ce119e642da072f5e4e->leave($__internal_f1099a82642250c40cd6bad8fafafcb1b64ea7c094a73ce119e642da072f5e4e_prof);

        
        $__internal_724329d6bd4a8349cb75f402e761216cfbf09b242b27f6d7a9a387e4933a4058->leave($__internal_724329d6bd4a8349cb75f402e761216cfbf09b242b27f6d7a9a387e4933a4058_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_24f06a8ec73db5cb42962699c455214cf6472154bf38cad561f9e0cbdf1cbc2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f06a8ec73db5cb42962699c455214cf6472154bf38cad561f9e0cbdf1cbc2a->enter($__internal_24f06a8ec73db5cb42962699c455214cf6472154bf38cad561f9e0cbdf1cbc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_0393904ac6f9b12c2da77475a99519761d546e067e824a68dbc9ee0a3fe95e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0393904ac6f9b12c2da77475a99519761d546e067e824a68dbc9ee0a3fe95e0c->enter($__internal_0393904ac6f9b12c2da77475a99519761d546e067e824a68dbc9ee0a3fe95e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        $context["show_empty_boxes"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "container", array()), "getParameter", array(0 => "sonata.admin.configuration.global_search.empty_boxes"), "method");
        // line 16
        echo "    ";
        $context["visibility_class"] = "";
        // line 17
        echo "    ";
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) &&  !twig_length_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method")))) {
            // line 18
            echo "        ";
            $context["visibility_class"] = ("sonata-search-result-" . (isset($context["show_empty_boxes"]) ? $context["show_empty_boxes"] : $this->getContext($context, "show_empty_boxes")));
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    <div class=\"col-lg-4 col-md-6 search-box-item ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["visibility_class"]) ? $context["visibility_class"] : $this->getContext($context, "visibility_class")), "html", null, true);
        echo "\">
        <div class=\"box box-solid box-primary";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["visibility_class"]) ? $context["visibility_class"] : $this->getContext($context, "visibility_class")), "html", null, true);
        echo "\">
            <div class=\"box-header with-border ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["visibility_class"]) ? $context["visibility_class"] : $this->getContext($context, "visibility_class")), "html", null, true);
        echo "\">
                ";
        // line 24
        $context["icon"] = (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icon", array()), "")) : (""));
        // line 25
        echo "                ";
        echo (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"));
        echo "
                <h3 class=\"box-title\">
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label", array()), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 31
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 32
            echo "                        <span class=\"badge bg-light-blue\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                    ";
        } elseif (($this->getAttribute(        // line 33
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "create"), "method"))) {
            // line 34
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 38
        echo "                    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
            // line 39
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 43
        echo "                </div>
            </div>
            ";
        // line 45
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && twig_length_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method")))) {
            // line 46
            echo "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 49
                echo "                            ";
                $context["link"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getSearchResultLink", array(0 => $context["result"]), "method");
                // line 50
                echo "                            ";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    // line 51
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 53
                    echo "                                <li><a>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 55
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 59
            echo "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
            echo "</em>
                    </p>
                </div>
            ";
        }
        // line 65
        echo "        </div>
    </div>
";
        
        $__internal_0393904ac6f9b12c2da77475a99519761d546e067e824a68dbc9ee0a3fe95e0c->leave($__internal_0393904ac6f9b12c2da77475a99519761d546e067e824a68dbc9ee0a3fe95e0c_prof);

        
        $__internal_24f06a8ec73db5cb42962699c455214cf6472154bf38cad561f9e0cbdf1cbc2a->leave($__internal_24f06a8ec73db5cb42962699c455214cf6472154bf38cad561f9e0cbdf1cbc2a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 65,  170 => 61,  166 => 59,  161 => 56,  155 => 55,  149 => 53,  141 => 51,  138 => 50,  135 => 49,  131 => 48,  127 => 46,  125 => 45,  121 => 43,  113 => 39,  110 => 38,  102 => 34,  100 => 33,  95 => 32,  93 => 31,  86 => 27,  80 => 25,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  63 => 20,  60 => 19,  57 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {% set show_empty_boxes = sonata_admin.adminPool.container.getParameter('sonata.admin.configuration.global_search.empty_boxes') %}
    {% set visibility_class = '' %}
    {% if pager and not pager.getResults()|length %}
        {% set visibility_class = 'sonata-search-result-' ~ show_empty_boxes %}
    {% endif %}

    <div class=\"col-lg-4 col-md-6 search-box-item {{ visibility_class }}\">
        <div class=\"box box-solid box-primary{{ visibility_class }}\">
            <div class=\"box-header with-border {{ visibility_class }}\">
                {% set icon = settings.icon|default('') %}
                {{ icon|raw }}
                <h3 class=\"box-title\">
                    {{ admin.label|trans({}, admin.translationdomain) }}
                </h3>

                <div class=\"box-tools pull-right\">
                    {% if pager and pager.getNbResults() > 0 %}
                        <span class=\"badge bg-light-blue\">{{ pager.getNbResults() }}</span>
                    {% elseif admin.hasRoute('create') and admin.hasAccess('create') %}
                        <a href=\"{{ admin.generateUrl('create') }}\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                    {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                        <a href=\"{{ admin.generateUrl('list') }}\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                </div>
            </div>
            {% if pager and pager.getResults()|length %}
                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        {% for result in pager.getResults() %}
                            {% set link = admin.getSearchResultLink(result) %}
                            {% if link %}
                                <li><a href=\"{{ link }}\">{{ admin.toString(result) }}</a></li>
                            {% else %}
                                <li><a>{{ admin.toString(result) }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            {% else %}
                <div class=\"box-body\">
                    <p>
                        <em>{{ 'no_results_found'|trans({}, 'SonataAdminBundle') }}</em>
                    </p>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_search_result.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Block\\block_search_result.html.twig");
    }
}
