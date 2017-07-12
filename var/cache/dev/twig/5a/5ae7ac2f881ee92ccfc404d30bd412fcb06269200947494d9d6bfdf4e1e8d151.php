<?php

/* SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig */
class __TwigTemplate_c3d466a9254ca10306c451d105cd0f152e8514a94bae50c268df7f8d5836ed36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_mosaic_background' => array($this, 'block_sonata_mosaic_background'),
            'sonata_mosaic_default_view' => array($this, 'block_sonata_mosaic_default_view'),
            'sonata_mosaic_hover_view' => array($this, 'block_sonata_mosaic_hover_view'),
            'sonata_mosaic_description' => array($this, 'block_sonata_mosaic_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c7032b48adc0b1660d6d70a4fe2aa8656bf9e9fc91440ce084af291224d0692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7032b48adc0b1660d6d70a4fe2aa8656bf9e9fc91440ce084af291224d0692->enter($__internal_8c7032b48adc0b1660d6d70a4fe2aa8656bf9e9fc91440ce084af291224d0692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig"));

        $__internal_124f1c0a9f67f555feff20179508f384f877c538d2270567da5885a20787432a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124f1c0a9f67f555feff20179508f384f877c538d2270567da5885a20787432a->enter($__internal_124f1c0a9f67f555feff20179508f384f877c538d2270567da5885a20787432a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig"));

        // line 11
        echo "
<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"";
        // line 20
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 23
            echo "                ";
            $context["meta"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getObjectMetadata", array(0 => $context["object"]), "method");
            // line 24
            echo "
                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\" objectId=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => $context["object"]), "method"), "html", null, true);
            echo "\">

                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
            // line 32
            echo "
                            <div class=\"mosaic-inner-box-default\">
                                ";
            // line 34
            $this->displayBlock('sonata_mosaic_background', $context, $blocks);
            // line 37
            echo "                                ";
            $this->displayBlock('sonata_mosaic_default_view', $context, $blocks);
            // line 40
            echo "                            </div>

                            ";
            // line 46
            echo "                            <div class=\"mosaic-inner-box-hover\">
                                ";
            // line 47
            $this->displayBlock('sonata_mosaic_hover_view', $context, $blocks);
            // line 51
            echo "                            </div>
                        </div>

                        ";
            // line 55
            echo "                        ";
            $context["export_formats"] = ((array_key_exists("export_formats", $context)) ? (_twig_default_filter((isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array())));
            // line 56
            echo "
                        <div class=\"mosaic-inner-text\">
                            ";
            // line 58
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0)) || (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, (isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")))))) {
                // line 59
                echo "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => $context["object"]), "method"), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 61
                echo "                                &nbsp;
                            ";
            }
            // line 63
            echo "
                            ";
            // line 64
            $this->displayBlock('sonata_mosaic_description', $context, $blocks);
            // line 73
            echo "                        </div>
                    </div>
                </div>

                ";
            // line 77
            if ((($this->getAttribute($context["loop"], "index", array()) % 4) == 0)) {
                // line 78
                echo "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 80
            echo "                ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                // line 81
                echo "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 83
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </div>
    </td>
</tr>
";
        
        $__internal_8c7032b48adc0b1660d6d70a4fe2aa8656bf9e9fc91440ce084af291224d0692->leave($__internal_8c7032b48adc0b1660d6d70a4fe2aa8656bf9e9fc91440ce084af291224d0692_prof);

        
        $__internal_124f1c0a9f67f555feff20179508f384f877c538d2270567da5885a20787432a->leave($__internal_124f1c0a9f67f555feff20179508f384f877c538d2270567da5885a20787432a_prof);

    }

    // line 34
    public function block_sonata_mosaic_background($context, array $blocks = array())
    {
        $__internal_ec53df09072c6a5b3e6d297aee5f12114abea0e5820629fc5674343d575e46da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec53df09072c6a5b3e6d297aee5f12114abea0e5820629fc5674343d575e46da->enter($__internal_ec53df09072c6a5b3e6d297aee5f12114abea0e5820629fc5674343d575e46da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        $__internal_0e6c2236a5ebbeca148c237d91e0a70ae6407256cd757d579d1763ec8890f15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6c2236a5ebbeca148c237d91e0a70ae6407256cd757d579d1763ec8890f15d->enter($__internal_0e6c2236a5ebbeca148c237d91e0a70ae6407256cd757d579d1763ec8890f15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        // line 35
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "image", array()), "html", null, true);
        echo "\" alt=\"\" />
                                ";
        
        $__internal_0e6c2236a5ebbeca148c237d91e0a70ae6407256cd757d579d1763ec8890f15d->leave($__internal_0e6c2236a5ebbeca148c237d91e0a70ae6407256cd757d579d1763ec8890f15d_prof);

        
        $__internal_ec53df09072c6a5b3e6d297aee5f12114abea0e5820629fc5674343d575e46da->leave($__internal_ec53df09072c6a5b3e6d297aee5f12114abea0e5820629fc5674343d575e46da_prof);

    }

    // line 37
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        $__internal_208914412f4f906ba49e9d6b542f2b2f65930b76b42eaae8a4483350631f4407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_208914412f4f906ba49e9d6b542f2b2f65930b76b42eaae8a4483350631f4407->enter($__internal_208914412f4f906ba49e9d6b542f2b2f65930b76b42eaae8a4483350631f4407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        $__internal_52e721e5b3b2874f40c73fa6f04de03e442c75d0d5d330c1af0139e96f8f521f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e721e5b3b2874f40c73fa6f04de03e442c75d0d5d330c1af0139e96f8f521f->enter($__internal_52e721e5b3b2874f40c73fa6f04de03e442c75d0d5d330c1af0139e96f8f521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        // line 38
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "</span>
                                ";
        
        $__internal_52e721e5b3b2874f40c73fa6f04de03e442c75d0d5d330c1af0139e96f8f521f->leave($__internal_52e721e5b3b2874f40c73fa6f04de03e442c75d0d5d330c1af0139e96f8f521f_prof);

        
        $__internal_208914412f4f906ba49e9d6b542f2b2f65930b76b42eaae8a4483350631f4407->leave($__internal_208914412f4f906ba49e9d6b542f2b2f65930b76b42eaae8a4483350631f4407_prof);

    }

    // line 47
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        $__internal_04ececf92909d8a0027664c0426e085945a41233018b02c6cadc2fabfbb5a450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ececf92909d8a0027664c0426e085945a41233018b02c6cadc2fabfbb5a450->enter($__internal_04ececf92909d8a0027664c0426e085945a41233018b02c6cadc2fabfbb5a450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        $__internal_a706a851fce754322ab015abbb6a74c81ece87a1c5a7ba88154915227714361a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a706a851fce754322ab015abbb6a74c81ece87a1c5a7ba88154915227714361a->enter($__internal_a706a851fce754322ab015abbb6a74c81ece87a1c5a7ba88154915227714361a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        // line 48
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "</span>
                                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "description", array()), "html", null, true);
        echo "
                                ";
        
        $__internal_a706a851fce754322ab015abbb6a74c81ece87a1c5a7ba88154915227714361a->leave($__internal_a706a851fce754322ab015abbb6a74c81ece87a1c5a7ba88154915227714361a_prof);

        
        $__internal_04ececf92909d8a0027664c0426e085945a41233018b02c6cadc2fabfbb5a450->leave($__internal_04ececf92909d8a0027664c0426e085945a41233018b02c6cadc2fabfbb5a450_prof);

    }

    // line 64
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        $__internal_0860d2798953b2ddb3d61c95918509eae3b6afcf344551f88d22f4417c686e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0860d2798953b2ddb3d61c95918509eae3b6afcf344551f88d22f4417c686e0e->enter($__internal_0860d2798953b2ddb3d61c95918509eae3b6afcf344551f88d22f4417c686e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        $__internal_9b3fc94f548b5067d7fc1861fd1b1a34d979078709c16801647f982207bb8fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3fc94f548b5067d7fc1861fd1b1a34d979078709c16801647f982207bb8fc8->enter($__internal_9b3fc94f548b5067d7fc1861fd1b1a34d979078709c16801647f982207bb8fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        // line 65
        echo "                                ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 66
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } elseif (($this->getAttribute(        // line 67
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 68
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "show", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } else {
            // line 70
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "
                                ";
        }
        // line 72
        echo "                            ";
        
        $__internal_9b3fc94f548b5067d7fc1861fd1b1a34d979078709c16801647f982207bb8fc8->leave($__internal_9b3fc94f548b5067d7fc1861fd1b1a34d979078709c16801647f982207bb8fc8_prof);

        
        $__internal_0860d2798953b2ddb3d61c95918509eae3b6afcf344551f88d22f4417c686e0e->leave($__internal_0860d2798953b2ddb3d61c95918509eae3b6afcf344551f88d22f4417c686e0e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 72,  267 => 70,  259 => 68,  257 => 67,  250 => 66,  247 => 65,  238 => 64,  226 => 49,  221 => 48,  212 => 47,  199 => 38,  190 => 37,  177 => 35,  168 => 34,  155 => 84,  141 => 83,  137 => 81,  134 => 80,  130 => 78,  128 => 77,  122 => 73,  120 => 64,  117 => 63,  113 => 61,  107 => 59,  105 => 58,  101 => 56,  98 => 55,  93 => 51,  91 => 47,  88 => 46,  84 => 40,  81 => 37,  79 => 34,  75 => 32,  68 => 25,  65 => 24,  62 => 23,  45 => 22,  40 => 20,  29 => 11,);
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

<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"{{ admin.list.elements|length - (app.request.isXmlHttpRequest ? (admin.list.has('_action') + admin.list.has('batch')) : 0) }}\">
        <div class=\"row\">
            {% for object in admin.datagrid.results %}
                {% set meta = admin.getObjectMetadata(object) %}

                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\" objectId=\"{{ admin.id(object) }}\">

                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            {#
                                This box will be display when the mouse is not on the box
                            #}

                            <div class=\"mosaic-inner-box-default\">
                                {% block sonata_mosaic_background %}
                                    <img src=\"{{ meta.image }}\" alt=\"\" />
                                {% endblock %}
                                {% block sonata_mosaic_default_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                {% endblock %}
                            </div>

                            {#
                                This box will be display when the mouse is on the box
                                You can add more description
                            #}
                            <div class=\"mosaic-inner-box-hover\">
                                {% block sonata_mosaic_hover_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                    {{ meta.description }}
                                {% endblock %}
                            </div>
                        </div>

                        {# NEXT_MAJOR : remove this assignment #}
                        {% set export_formats = export_formats|default(admin.getExportFormats) %}

                        <div class=\"mosaic-inner-text\">
                            {% if (admin.hasRoute('batch') and batchactions|length > 0) or (admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length) %}
                                <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
                            {% else %}
                                &nbsp;
                            {% endif %}

                            {% block sonata_mosaic_description %}
                                {% if admin.hasAccess('edit', object) and admin.hasRoute('edit') %}
                                    <a class=\"mosaic-inner-link\" href=\"{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid(admin) }) }}\">{{ meta.title|truncate(40) }}</a>
                                {% elseif admin.hasAccess('show', object) and admin.hasRoute('show') %}
                                    <a class=\"mosaic-inner-link\" href=\"{{ admin.generateUrl('show', {'id' : object|sonata_urlsafeid(admin) }) }}\">{{ meta.title|truncate(40) }}</a>
                                {% else %}
                                    {{ meta.title|truncate(40) }}
                                {% endif %}
                            {% endblock %}
                        </div>
                    </div>
                </div>

                {% if loop.index % 4 == 0 %}
                    <div class=\"clearfix hidden-xs\"></div>
                {% endif %}
                {% if loop.index % 2 == 0 %}
                    <div class=\"clearfix visible-xs\"></div>
                {% endif %}
            {% endfor %}
        </div>
    </td>
</tr>
", "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_outer_rows_mosaic.html.twig");
    }
}
