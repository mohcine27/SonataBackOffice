<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_9289c71574a2d0c234cf9c4fb48456ccd3d3aa8f018c63f5b400e1ef58cd4be1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_base.html.twig", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig", 11);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2dcec331ee58cff19d36d88cb54555477030f6cd1f492d2370bcc9c08bc77d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2dcec331ee58cff19d36d88cb54555477030f6cd1f492d2370bcc9c08bc77d1->enter($__internal_e2dcec331ee58cff19d36d88cb54555477030f6cd1f492d2370bcc9c08bc77d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig"));

        $__internal_01dd21367760d777514bf9455511afaa31cc288bf35c4a4e1ff3c57946e5bfc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dd21367760d777514bf9455511afaa31cc288bf35c4a4e1ff3c57946e5bfc6->enter($__internal_01dd21367760d777514bf9455511afaa31cc288bf35c4a4e1ff3c57946e5bfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2dcec331ee58cff19d36d88cb54555477030f6cd1f492d2370bcc9c08bc77d1->leave($__internal_e2dcec331ee58cff19d36d88cb54555477030f6cd1f492d2370bcc9c08bc77d1_prof);

        
        $__internal_01dd21367760d777514bf9455511afaa31cc288bf35c4a4e1ff3c57946e5bfc6->leave($__internal_01dd21367760d777514bf9455511afaa31cc288bf35c4a4e1ff3c57946e5bfc6_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_7cfdaa6f5afe249ea76d110a5e1499389823843a8916e4988beaa94556cc204c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cfdaa6f5afe249ea76d110a5e1499389823843a8916e4988beaa94556cc204c->enter($__internal_7cfdaa6f5afe249ea76d110a5e1499389823843a8916e4988beaa94556cc204c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_19c6c4a8e2b48c2206c5b49c4089f92cf993a6ce589469ef8aa1550d92b03858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c6c4a8e2b48c2206c5b49c4089f92cf993a6ce589469ef8aa1550d92b03858->enter($__internal_19c6c4a8e2b48c2206c5b49c4089f92cf993a6ce589469ef8aa1550d92b03858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">
                <i class=\"fa fa-history\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "
            </h3>
        </div>

        <div class=\"box-body\">
            <div class=\"panel-group\" id=\"accordion\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 24
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "rev", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "username", array()), "html", null, true);
            echo "
                                    - ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "timestamp", array())), "html", null, true);
            echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("in") : (""));
            echo "\">
                            <div class=\"panel-body\">
                                <ul>
                                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["revision"], "entities", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 37
                echo "                                        <li>
                                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "entity", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "revisionType", array()), "html", null, true);
                echo "
                                            / ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "className", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["changedEntity"], "id", array()), "id", array()), "html", null, true);
                echo "
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_19c6c4a8e2b48c2206c5b49c4089f92cf993a6ce589469ef8aa1550d92b03858->leave($__internal_19c6c4a8e2b48c2206c5b49c4089f92cf993a6ce589469ef8aa1550d92b03858_prof);

        
        $__internal_7cfdaa6f5afe249ea76d110a5e1499389823843a8916e4988beaa94556cc204c->leave($__internal_7cfdaa6f5afe249ea76d110a5e1499389823843a8916e4988beaa94556cc204c_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  134 => 42,  123 => 39,  117 => 38,  114 => 37,  110 => 36,  102 => 33,  95 => 29,  89 => 28,  85 => 27,  80 => 24,  63 => 23,  54 => 17,  49 => 14,  40 => 13,  11 => 11,);
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
{% extends 'SonataBlockBundle:Block:block_base.html.twig' %}

{% block block %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">
                <i class=\"fa fa-history\"></i> {{ 'title_audit_log'|trans({}, 'SonataAdminBundle') }}
            </h3>
        </div>

        <div class=\"box-body\">
            <div class=\"panel-group\" id=\"accordion\">
                {% for revision in revisions %}
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ loop.index }}\">
                                    {{ revision.revision.rev }} - {{ revision.revision.username }}
                                    - {{ revision.revision.timestamp | date }}
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse{{ loop.index }}\" class=\"panel-collapse collapse {{ loop.first ? \"in\" : \"\" }}\">
                            <div class=\"panel-body\">
                                <ul>
                                    {% for changedEntity in revision.entities %}
                                        <li>
                                            {{ changedEntity.entity }} / {{ changedEntity.revisionType }}
                                            / {{ changedEntity.className }} - {{ changedEntity.id.id }}
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

{% endblock %}
", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\Block\\block_audit.html.twig");
    }
}
