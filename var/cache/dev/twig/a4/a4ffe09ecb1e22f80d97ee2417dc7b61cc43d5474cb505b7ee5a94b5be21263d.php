<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_tabs.html.twig */
class __TwigTemplate_2befa99139a11ea1b2c1ae51257990a650de6b58ec65fb115baeff60413b9372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7077ff18bfd2ff34b3f09c9cbe01f606a6011ac6824e8b7fa08cea88d0728781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7077ff18bfd2ff34b3f09c9cbe01f606a6011ac6824e8b7fa08cea88d0728781->enter($__internal_7077ff18bfd2ff34b3f09c9cbe01f606a6011ac6824e8b7fa08cea88d0728781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_tabs.html.twig"));

        $__internal_7cf3c5079533d31a0fdd0413a24e8e11127dd28baf01c6817c6e5294f5060c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf3c5079533d31a0fdd0413a24e8e11127dd28baf01c6817c6e5294f5060c09->enter($__internal_7cf3c5079533d31a0fdd0413a24e8e11127dd28baf01c6817c6e5294f5060c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_tabs.html.twig"));

        // line 11
        echo "<div class=\"sonata-ba-tabs\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["nested_group_field"]) {
            // line 13
            echo "        <div>
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : $this->getContext($context, "associationAdmin")), "formgroups", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 17
                echo "                        <li class=\"";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "active";
                }
                echo "\">
                            <a
                                href=\"#";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : $this->getContext($context, "associationAdmin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                                data-toggle=\"tab\"
                            >
                                <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : $this->getContext($context, "associationAdmin")), "trans", array(0 => $context["name"], 1 => array(), 2 => $this->getAttribute($context["form_group"], "translation_domain", array())), "method"), "html", null, true);
                echo "
                            </a>
                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : $this->getContext($context, "associationAdmin")), "formgroups", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 31
                echo "                        <div
                            class=\"tab-pane ";
                // line 32
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "active";
                }
                echo "\"
                            id=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : $this->getContext($context, "associationAdmin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <fieldset>
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["form_group"], "fields", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 38
                    echo "                                        ";
                    $context["nested_field"] = $this->getAttribute($this->getAttribute($context["nested_group_field"], "children", array()), $context["field_name"], array(), "array");
                    // line 39
                    echo "                                        <div class=\"sonata-ba-field-";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo "\">
                                            ";
                    // line 40
                    if ($this->getAttribute($this->getAttribute((isset($context["associationAdmin"]) ? $context["associationAdmin"] : null), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                        // line 41
                        echo "                                                ";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), 'row', array("inline" => "natural", "edit" => "inline"));
                        // line 44
                        echo "
                                                ";
                        // line 45
                        $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", array());
                        // line 46
                        echo "                                            ";
                    } else {
                        // line 47
                        echo "                                                ";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["nested_field"]) ? $context["nested_field"] : $this->getContext($context, "nested_field")), 'row');
                        echo "
                                            ";
                    }
                    // line 49
                    echo "                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                                </div>
                            </fieldset>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                </div>
            </div>

            ";
            // line 58
            if ($this->getAttribute($context["nested_group_field"], "_delete", array(), "array", true, true)) {
                // line 59
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["nested_group_field"], "_delete", array(), "array"), 'row', array("label" => "action_delete", "translation_domain" => "SonataAdminBundle"));
                echo "
            ";
            }
            // line 61
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nested_group_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "</div>
";
        
        $__internal_7077ff18bfd2ff34b3f09c9cbe01f606a6011ac6824e8b7fa08cea88d0728781->leave($__internal_7077ff18bfd2ff34b3f09c9cbe01f606a6011ac6824e8b7fa08cea88d0728781_prof);

        
        $__internal_7cf3c5079533d31a0fdd0413a24e8e11127dd28baf01c6817c6e5294f5060c09->leave($__internal_7cf3c5079533d31a0fdd0413a24e8e11127dd28baf01c6817c6e5294f5060c09_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 63,  216 => 61,  210 => 59,  208 => 58,  203 => 55,  186 => 51,  179 => 49,  173 => 47,  170 => 46,  168 => 45,  165 => 44,  162 => 41,  160 => 40,  153 => 39,  150 => 38,  146 => 37,  135 => 33,  129 => 32,  126 => 31,  109 => 30,  104 => 27,  86 => 23,  75 => 19,  67 => 17,  50 => 16,  45 => 13,  28 => 12,  25 => 11,);
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
<div class=\"sonata-ba-tabs\">
    {% for nested_group_field in form.children %}
        <div>
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                    {% for name, form_group in associationAdmin.formgroups %}
                        <li class=\"{% if loop.first %}active{% endif %}\">
                            <a
                                href=\"#{{ associationAdmin.uniqid }}_{{ loop.parent.loop.index }}_{{ loop.index }}\"
                                data-toggle=\"tab\"
                            >
                                <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                {{ associationAdmin.trans(name, {}, form_group.translation_domain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for name, form_group in associationAdmin.formgroups %}
                        <div
                            class=\"tab-pane {% if loop.first %}active{% endif %}\"
                            id=\"{{ associationAdmin.uniqid }}_{{ loop.parent.loop.index }}_{{ loop.index }}\"
                        >
                            <fieldset>
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% for field_name in form_group.fields %}
                                        {% set nested_field = nested_group_field.children[field_name] %}
                                        <div class=\"sonata-ba-field-{{ id }}-{{ field_name }}\">
                                            {% if associationAdmin.formfielddescriptions[field_name] is defined %}
                                                {{ form_row(nested_field, {
                                                    'inline': 'natural',
                                                    'edit'  : 'inline'
                                                }) }}
                                                {% set dummy = nested_group_field.setrendered %}
                                            {% else %}
                                                {{ form_row(nested_field) }}
                                            {% endif %}
                                        </div>
                                    {% endfor %}
                                </div>
                            </fieldset>
                        </div>
                    {% endfor %}
                </div>
            </div>

            {% if nested_group_field['_delete'] is defined %}
                {{ form_row(nested_group_field['_delete'], {'label': 'action_delete', 'translation_domain': 'SonataAdminBundle'}) }}
            {% endif %}
        </div>
    {% endfor %}
</div>
", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_inline_tabs.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\edit_orm_one_to_many_inline_tabs.html.twig");
    }
}
