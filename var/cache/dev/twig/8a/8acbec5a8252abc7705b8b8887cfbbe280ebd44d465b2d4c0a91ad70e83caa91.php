<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_3605be12d642ca90a28277e07fdb8fbdec8f9b2a1892b4321fd182e9a653b517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5e9a9ec443b8115afc2b292e45d79cabea86eed22b24ab47d34674d336e59b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e9a9ec443b8115afc2b292e45d79cabea86eed22b24ab47d34674d336e59b7->enter($__internal_a5e9a9ec443b8115afc2b292e45d79cabea86eed22b24ab47d34674d336e59b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        $__internal_22a812aed183135b0b2cef7babd2a7e5326184c8a9501f8c28fe3f06edcc50ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a812aed183135b0b2cef7babd2a7e5326184c8a9501f8c28fe3f06edcc50ff->enter($__internal_22a812aed183135b0b2cef7babd2a7e5326184c8a9501f8c28fe3f06edcc50ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_a5e9a9ec443b8115afc2b292e45d79cabea86eed22b24ab47d34674d336e59b7->leave($__internal_a5e9a9ec443b8115afc2b292e45d79cabea86eed22b24ab47d34674d336e59b7_prof);

        
        $__internal_22a812aed183135b0b2cef7babd2a7e5326184c8a9501f8c28fe3f06edcc50ff->leave($__internal_22a812aed183135b0b2cef7babd2a7e5326184c8a9501f8c28fe3f06edcc50ff_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_18cb74edd93e1e6b19fe9c27601b83038ede72599a6595e3a8d6868a9859f6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18cb74edd93e1e6b19fe9c27601b83038ede72599a6595e3a8d6868a9859f6d5->enter($__internal_18cb74edd93e1e6b19fe9c27601b83038ede72599a6595e3a8d6868a9859f6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7e86f69b5329803893210c95aac4b3ea381718d27e440bbea61b02d54f9654b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e86f69b5329803893210c95aac4b3ea381718d27e440bbea61b02d54f9654b7->enter($__internal_7e86f69b5329803893210c95aac4b3ea381718d27e440bbea61b02d54f9654b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 14
        echo "    ";
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 23
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 28
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 29
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 31
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                            </div>
                        ";
            }
            // line 35
            echo "
                        ";
            // line 36
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 37
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                        ";
            }
            // line 39
            echo "                    </div>
                </div>
            </div>
        </div>

        ";
            // line 44
            if (twig_trim_filter((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 45
                echo "            <div class=\"row\">
                ";
                // line 46
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
            </div>
        ";
            }
            // line 49
            echo "
        <div class=\"row\">
            ";
            // line 51
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
    ";
        }
        
        $__internal_7e86f69b5329803893210c95aac4b3ea381718d27e440bbea61b02d54f9654b7->leave($__internal_7e86f69b5329803893210c95aac4b3ea381718d27e440bbea61b02d54f9654b7_prof);

        
        $__internal_18cb74edd93e1e6b19fe9c27601b83038ede72599a6595e3a8d6868a9859f6d5->leave($__internal_18cb74edd93e1e6b19fe9c27601b83038ede72599a6595e3a8d6868a9859f6d5_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_5a8a0ba412e0e7015134afec90f5f3a0db9716dccf3d07c9e9e9fd3ab245a74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8a0ba412e0e7015134afec90f5f3a0db9716dccf3d07c9e9e9fd3ab245a74e->enter($__internal_5a8a0ba412e0e7015134afec90f5f3a0db9716dccf3d07c9e9e9fd3ab245a74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_e2d42c19de613d4dc7561eab747483cc3e0751e4c1448b1954506531fee2470f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d42c19de613d4dc7561eab747483cc3e0751e4c1448b1954506531fee2470f->enter($__internal_e2d42c19de613d4dc7561eab747483cc3e0751e4c1448b1954506531fee2470f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_e2d42c19de613d4dc7561eab747483cc3e0751e4c1448b1954506531fee2470f->leave($__internal_e2d42c19de613d4dc7561eab747483cc3e0751e4c1448b1954506531fee2470f_prof);

        
        $__internal_5a8a0ba412e0e7015134afec90f5f3a0db9716dccf3d07c9e9e9fd3ab245a74e->leave($__internal_5a8a0ba412e0e7015134afec90f5f3a0db9716dccf3d07c9e9e9fd3ab245a74e_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_157bade5ebe9cf8a70e48016522d81bf783e22ffea521c0506907b8675a672ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_157bade5ebe9cf8a70e48016522d81bf783e22ffea521c0506907b8675a672ab->enter($__internal_157bade5ebe9cf8a70e48016522d81bf783e22ffea521c0506907b8675a672ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_0ff960db4eb4baac7cddb266f1e5f85121c90e1be6fac7dd1c962c3213667eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff960db4eb4baac7cddb266f1e5f85121c90e1be6fac7dd1c962c3213667eaf->enter($__internal_0ff960db4eb4baac7cddb266f1e5f85121c90e1be6fac7dd1c962c3213667eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_0ff960db4eb4baac7cddb266f1e5f85121c90e1be6fac7dd1c962c3213667eaf->leave($__internal_0ff960db4eb4baac7cddb266f1e5f85121c90e1be6fac7dd1c962c3213667eaf_prof);

        
        $__internal_157bade5ebe9cf8a70e48016522d81bf783e22ffea521c0506907b8675a672ab->leave($__internal_157bade5ebe9cf8a70e48016522d81bf783e22ffea521c0506907b8675a672ab_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_9a7581497b454d33a054c0bcf5ad9c5a9ef35bcbe6dd7a850935ae08d85a0de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7581497b454d33a054c0bcf5ad9c5a9ef35bcbe6dd7a850935ae08d85a0de5->enter($__internal_9a7581497b454d33a054c0bcf5ad9c5a9ef35bcbe6dd7a850935ae08d85a0de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_8d16d1ec885aa4b0c18455cb7ec899b195905de9b3f604a6d60b949177ccf0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d16d1ec885aa4b0c18455cb7ec899b195905de9b3f604a6d60b949177ccf0dc->enter($__internal_8d16d1ec885aa4b0c18455cb7ec899b195905de9b3f604a6d60b949177ccf0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_8d16d1ec885aa4b0c18455cb7ec899b195905de9b3f604a6d60b949177ccf0dc->leave($__internal_8d16d1ec885aa4b0c18455cb7ec899b195905de9b3f604a6d60b949177ccf0dc_prof);

        
        $__internal_9a7581497b454d33a054c0bcf5ad9c5a9ef35bcbe6dd7a850935ae08d85a0de5->leave($__internal_9a7581497b454d33a054c0bcf5ad9c5a9ef35bcbe6dd7a850935ae08d85a0de5_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_9521030c5d235c3abdaf54ae51f7da4005faf6b454ef4f9ffb4bce98483bbdc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9521030c5d235c3abdaf54ae51f7da4005faf6b454ef4f9ffb4bce98483bbdc9->enter($__internal_9521030c5d235c3abdaf54ae51f7da4005faf6b454ef4f9ffb4bce98483bbdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_9ecdc3e967015f8c78c302e2ac6afb5d295e47c76d29881db2648599318fe904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecdc3e967015f8c78c302e2ac6afb5d295e47c76d29881db2648599318fe904->enter($__internal_9ecdc3e967015f8c78c302e2ac6afb5d295e47c76d29881db2648599318fe904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_9ecdc3e967015f8c78c302e2ac6afb5d295e47c76d29881db2648599318fe904->leave($__internal_9ecdc3e967015f8c78c302e2ac6afb5d295e47c76d29881db2648599318fe904_prof);

        
        $__internal_9521030c5d235c3abdaf54ae51f7da4005faf6b454ef4f9ffb4bce98483bbdc9->leave($__internal_9521030c5d235c3abdaf54ae51f7da4005faf6b454ef4f9ffb4bce98483bbdc9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 20,  196 => 19,  179 => 18,  162 => 17,  147 => 51,  143 => 49,  137 => 46,  134 => 45,  132 => 44,  125 => 39,  119 => 37,  117 => 36,  114 => 35,  110 => 33,  95 => 31,  91 => 30,  88 => 29,  86 => 28,  79 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  33 => 12,  30 => 11,);
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

{% block content %}
    {% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
    {% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
    {% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}

    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
            <div class=\"row\">
                {{ _list_filters|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle::ajax_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\ajax_layout.html.twig");
    }
}
