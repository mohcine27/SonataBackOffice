<?php

/* SonataAdminBundle:CRUD:base_show_macro.html.twig */
class __TwigTemplate_1b7e8be70f440b2e87e889ffb8d07920c01e04ee7c25bab9c7dcf0a25e8b5ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b65d24b9b2a0ca618bb06c1f83ff2b2c2d80edf0a1ece4fe9d6c780956f9254a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65d24b9b2a0ca618bb06c1f83ff2b2c2d80edf0a1ece4fe9d6c780956f9254a->enter($__internal_b65d24b9b2a0ca618bb06c1f83ff2b2c2d80edf0a1ece4fe9d6c780956f9254a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        $__internal_e08356bb60466c9d5d455706dc874faa909b084fb1c2e9e144460242caa0b71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08356bb60466c9d5d455706dc874faa909b084fb1c2e9e144460242caa0b71e->enter($__internal_e08356bb60466c9d5d455706dc874faa909b084fb1c2e9e144460242caa0b71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_b65d24b9b2a0ca618bb06c1f83ff2b2c2d80edf0a1ece4fe9d6c780956f9254a->leave($__internal_b65d24b9b2a0ca618bb06c1f83ff2b2c2d80edf0a1ece4fe9d6c780956f9254a_prof);

        
        $__internal_e08356bb60466c9d5d455706dc874faa909b084fb1c2e9e144460242caa0b71e->leave($__internal_e08356bb60466c9d5d455706dc874faa909b084fb1c2e9e144460242caa0b71e_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_50f7f95ffc2bc5bfa843d52b0fb6a749c44894e1c2a2f855b63c127a43ebae0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f7f95ffc2bc5bfa843d52b0fb6a749c44894e1c2a2f855b63c127a43ebae0c->enter($__internal_50f7f95ffc2bc5bfa843d52b0fb6a749c44894e1c2a2f855b63c127a43ebae0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_32147d364ddfc1e80a9fce6e94c0e85ddcddf8c7f173b4b8ee31c48cfee0b560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32147d364ddfc1e80a9fce6e94c0e85ddcddf8c7f173b4b8ee31c48cfee0b560->enter($__internal_32147d364ddfc1e80a9fce6e94c0e85ddcddf8c7f173b4b8ee31c48cfee0b560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 11
            echo "        ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding"))) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 17
            $this->displayBlock('show_title', $context, $blocks);
            // line 20
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 26
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 33
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_32147d364ddfc1e80a9fce6e94c0e85ddcddf8c7f173b4b8ee31c48cfee0b560->leave($__internal_32147d364ddfc1e80a9fce6e94c0e85ddcddf8c7f173b4b8ee31c48cfee0b560_prof);

        
        $__internal_50f7f95ffc2bc5bfa843d52b0fb6a749c44894e1c2a2f855b63c127a43ebae0c->leave($__internal_50f7f95ffc2bc5bfa843d52b0fb6a749c44894e1c2a2f855b63c127a43ebae0c_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_5301739e147714ea0a4c7fdc781fad4fb123e7fbd43d013c1ecf23cd3163ecc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5301739e147714ea0a4c7fdc781fad4fb123e7fbd43d013c1ecf23cd3163ecc9->enter($__internal_5301739e147714ea0a4c7fdc781fad4fb123e7fbd43d013c1ecf23cd3163ecc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_b6e4b1c39d9146e6013412c908d9a335eb1b699f8e9e52bd227267ea6f09a9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e4b1c39d9146e6013412c908d9a335eb1b699f8e9e52bd227267ea6f09a9da->enter($__internal_b6e4b1c39d9146e6013412c908d9a335eb1b699f8e9e52bd227267ea6f09a9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "label", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) ? ($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_b6e4b1c39d9146e6013412c908d9a335eb1b699f8e9e52bd227267ea6f09a9da->leave($__internal_b6e4b1c39d9146e6013412c908d9a335eb1b699f8e9e52bd227267ea6f09a9da_prof);

        
        $__internal_5301739e147714ea0a4c7fdc781fad4fb123e7fbd43d013c1ecf23cd3163ecc9->leave($__internal_5301739e147714ea0a4c7fdc781fad4fb123e7fbd43d013c1ecf23cd3163ecc9_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_5508d9837bae9af151209b30749161a36b67303e0f743800ba970a78a041c92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5508d9837bae9af151209b30749161a36b67303e0f743800ba970a78a041c92c->enter($__internal_5508d9837bae9af151209b30749161a36b67303e0f743800ba970a78a041c92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_ee2566c0b5d043e1aa3482416ef8a897c9d8a8d84e742e3f5563eb835780b693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2566c0b5d043e1aa3482416ef8a897c9d8a8d84e742e3f5563eb835780b693->enter($__internal_ee2566c0b5d043e1aa3482416ef8a897c9d8a8d84e742e3f5563eb835780b693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 27
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 28
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 29
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                    ";
        }
        // line 31
        echo "                                </tr>
                            ";
        
        $__internal_ee2566c0b5d043e1aa3482416ef8a897c9d8a8d84e742e3f5563eb835780b693->leave($__internal_ee2566c0b5d043e1aa3482416ef8a897c9d8a8d84e742e3f5563eb835780b693_prof);

        
        $__internal_5508d9837bae9af151209b30749161a36b67303e0f743800ba970a78a041c92c->leave($__internal_5508d9837bae9af151209b30749161a36b67303e0f743800ba970a78a041c92c_prof);

    }

    // line 3
    public function getrender_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f4bd13ac039115d49d146a7f2148cc8260491654afee7da9b7ef60f085fbadfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f4bd13ac039115d49d146a7f2148cc8260491654afee7da9b7ef60f085fbadfb->enter($__internal_f4bd13ac039115d49d146a7f2148cc8260491654afee7da9b7ef60f085fbadfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_173645d047cdade8bc1694aa9d785203bae358d80014674464dc27db120c3870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_173645d047cdade8bc1694aa9d785203bae358d80014674464dc27db120c3870->enter($__internal_173645d047cdade8bc1694aa9d785203bae358d80014674464dc27db120c3870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_173645d047cdade8bc1694aa9d785203bae358d80014674464dc27db120c3870->leave($__internal_173645d047cdade8bc1694aa9d785203bae358d80014674464dc27db120c3870_prof);

            
            $__internal_f4bd13ac039115d49d146a7f2148cc8260491654afee7da9b7ef60f085fbadfb->leave($__internal_f4bd13ac039115d49d146a7f2148cc8260491654afee7da9b7ef60f085fbadfb_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 5,  234 => 4,  211 => 3,  200 => 31,  194 => 29,  192 => 28,  189 => 27,  180 => 26,  167 => 18,  158 => 17,  131 => 34,  117 => 33,  114 => 26,  97 => 25,  90 => 20,  88 => 17,  82 => 14,  76 => 13,  73 => 12,  70 => 11,  52 => 10,  34 => 9,  31 => 8,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# NEXT_MAJOR: remove this template #}

{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.label|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_macro.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_show_macro.html.twig");
    }
}
