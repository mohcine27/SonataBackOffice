<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_5a8e9ed4d55056c833591d719fe4ec80a595e7330012227430581d1d1dc8bb57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f6dc042dd3b2a75c0e6b629c53d038b698e1d6047d5f880bda9733828279b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6dc042dd3b2a75c0e6b629c53d038b698e1d6047d5f880bda9733828279b7d->enter($__internal_0f6dc042dd3b2a75c0e6b629c53d038b698e1d6047d5f880bda9733828279b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $__internal_c46929ece00876c09c5aa0c03d94294dd6c4f61e3ffa3c809777dc027eb37381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46929ece00876c09c5aa0c03d94294dd6c4f61e3ffa3c809777dc027eb37381->enter($__internal_c46929ece00876c09c5aa0c03d94294dd6c4f61e3ffa3c809777dc027eb37381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f6dc042dd3b2a75c0e6b629c53d038b698e1d6047d5f880bda9733828279b7d->leave($__internal_0f6dc042dd3b2a75c0e6b629c53d038b698e1d6047d5f880bda9733828279b7d_prof);

        
        $__internal_c46929ece00876c09c5aa0c03d94294dd6c4f61e3ffa3c809777dc027eb37381->leave($__internal_c46929ece00876c09c5aa0c03d94294dd6c4f61e3ffa3c809777dc027eb37381_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_189f55a29c0bcca856c11dbe1a0e101256b7959de4df2e5b5119fda70d7401c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189f55a29c0bcca856c11dbe1a0e101256b7959de4df2e5b5119fda70d7401c4->enter($__internal_189f55a29c0bcca856c11dbe1a0e101256b7959de4df2e5b5119fda70d7401c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7951a75dac4cfa79d09bb4c8ef2fb01d7f399bcf28e2fcdeaddc40327fcf9601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7951a75dac4cfa79d09bb4c8ef2fb01d7f399bcf28e2fcdeaddc40327fcf9601->enter($__internal_7951a75dac4cfa79d09bb4c8ef2fb01d7f399bcf28e2fcdeaddc40327fcf9601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
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
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
                // line 17
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo $context["val"];
                echo "]
        ";
            } else {
                // line 19
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "]
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 23
                echo "            ";
                if (( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || (false == $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "inline", array())))) {
                    echo "<br>";
                }
                // line 24
                echo "        ";
            }
            // line 25
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7951a75dac4cfa79d09bb4c8ef2fb01d7f399bcf28e2fcdeaddc40327fcf9601->leave($__internal_7951a75dac4cfa79d09bb4c8ef2fb01d7f399bcf28e2fcdeaddc40327fcf9601_prof);

        
        $__internal_189f55a29c0bcca856c11dbe1a0e101256b7959de4df2e5b5119fda70d7401c4->leave($__internal_189f55a29c0bcca856c11dbe1a0e101256b7959de4df2e5b5119fda70d7401c4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  96 => 24,  91 => 23,  89 => 22,  86 => 21,  78 => 19,  70 => 17,  67 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {% for key, val in value %}
        {% if field_description.options.safe %}
            [{{ key }} => {{ val|raw }}]
        {% else %}
            [{{ key }} => {{ val }}]
        {% endif %}

        {% if not loop.last %}
            {% if field_description.options.inline is not defined or false == field_description.options.inline %}<br>{% endif %}
        {% endif %}
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_array.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_array.html.twig");
    }
}
