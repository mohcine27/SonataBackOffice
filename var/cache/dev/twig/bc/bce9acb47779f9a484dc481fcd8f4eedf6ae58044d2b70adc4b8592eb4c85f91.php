<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_12920c5aa55fdb437ca678ecf5c9822fd81f008a29ec70314bdadf7bc0236004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 22);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caaff79898b965ea6110e0b14978d0a36dddb72fa967043e11a39f8a340792e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caaff79898b965ea6110e0b14978d0a36dddb72fa967043e11a39f8a340792e2->enter($__internal_caaff79898b965ea6110e0b14978d0a36dddb72fa967043e11a39f8a340792e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_5726e4a9a31983d5d6bfe5b784f5f56fe90c4ee6c0ee4ccf5a2622445d08d70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5726e4a9a31983d5d6bfe5b784f5f56fe90c4ee6c0ee4ccf5a2622445d08d70f->enter($__internal_5726e4a9a31983d5d6bfe5b784f5f56fe90c4ee6c0ee4ccf5a2622445d08d70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this;
        // line 22
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caaff79898b965ea6110e0b14978d0a36dddb72fa967043e11a39f8a340792e2->leave($__internal_caaff79898b965ea6110e0b14978d0a36dddb72fa967043e11a39f8a340792e2_prof);

        
        $__internal_5726e4a9a31983d5d6bfe5b784f5f56fe90c4ee6c0ee4ccf5a2622445d08d70f->leave($__internal_5726e4a9a31983d5d6bfe5b784f5f56fe90c4ee6c0ee4ccf5a2622445d08d70f_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_f10e292ae093a08b8bf8d0b34806e3568547e8fdc51c8b035939fdb46501b224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10e292ae093a08b8bf8d0b34806e3568547e8fdc51c8b035939fdb46501b224->enter($__internal_f10e292ae093a08b8bf8d0b34806e3568547e8fdc51c8b035939fdb46501b224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_2714d493438376bfdc29faf82648b7f22ce2f89db2355558b8cc64c6a5f19cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2714d493438376bfdc29faf82648b7f22ce2f89db2355558b8cc64c6a5f19cd5->enter($__internal_2714d493438376bfdc29faf82648b7f22ce2f89db2355558b8cc64c6a5f19cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "    ";
        echo $context["list"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        echo "
";
        
        $__internal_2714d493438376bfdc29faf82648b7f22ce2f89db2355558b8cc64c6a5f19cd5->leave($__internal_2714d493438376bfdc29faf82648b7f22ce2f89db2355558b8cc64c6a5f19cd5_prof);

        
        $__internal_f10e292ae093a08b8bf8d0b34806e3568547e8fdc51c8b035939fdb46501b224->leave($__internal_f10e292ae093a08b8bf8d0b34806e3568547e8fdc51c8b035939fdb46501b224_prof);

    }

    // line 12
    public function getrender_array($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c3466efb8580713cdcc3c11c44476424491d913f914d7459da465cccc1b5e254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c3466efb8580713cdcc3c11c44476424491d913f914d7459da465cccc1b5e254->enter($__internal_c3466efb8580713cdcc3c11c44476424491d913f914d7459da465cccc1b5e254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_eb6bb0d0b1f057969d68f8371281f0e01d98831803d996e6576e7a1ed16001a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_eb6bb0d0b1f057969d68f8371281f0e01d98831803d996e6576e7a1ed16001a0->enter($__internal_eb6bb0d0b1f057969d68f8371281f0e01d98831803d996e6576e7a1ed16001a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 14
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 15
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $context["list"]->getrender_array($context["val"]);
                    echo "}]
        ";
                } else {
                    // line 17
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 19
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_eb6bb0d0b1f057969d68f8371281f0e01d98831803d996e6576e7a1ed16001a0->leave($__internal_eb6bb0d0b1f057969d68f8371281f0e01d98831803d996e6576e7a1ed16001a0_prof);

            
            $__internal_c3466efb8580713cdcc3c11c44476424491d913f914d7459da465cccc1b5e254->leave($__internal_c3466efb8580713cdcc3c11c44476424491d913f914d7459da465cccc1b5e254_prof);

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
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  98 => 17,  90 => 15,  87 => 14,  82 => 13,  64 => 12,  51 => 25,  42 => 24,  32 => 22,  30 => 11,  18 => 22,);
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
{% import _self as list %}
{%  macro render_array(value) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ list.render_array(val) }}}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}
    {% endfor %}
{% endmacro %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_array.html.twig");
    }
}
