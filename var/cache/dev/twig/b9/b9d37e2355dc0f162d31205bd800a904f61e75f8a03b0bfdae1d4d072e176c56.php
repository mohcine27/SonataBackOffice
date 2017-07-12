<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_f1709ac1f33ad5e5193f18f38688c95af5c28b64b0251ce08adef9c0426f537e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_298fe20031d0586c33e07f533148dc48e7ee0512272ffbb5874898bf85dd907e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298fe20031d0586c33e07f533148dc48e7ee0512272ffbb5874898bf85dd907e->enter($__internal_298fe20031d0586c33e07f533148dc48e7ee0512272ffbb5874898bf85dd907e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_08f551a9292e64341334465796c01fa1604959f2ac0a7abcd26fed60bf735b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f551a9292e64341334465796c01fa1604959f2ac0a7abcd26fed60bf735b44->enter($__internal_08f551a9292e64341334465796c01fa1604959f2ac0a7abcd26fed60bf735b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_298fe20031d0586c33e07f533148dc48e7ee0512272ffbb5874898bf85dd907e->leave($__internal_298fe20031d0586c33e07f533148dc48e7ee0512272ffbb5874898bf85dd907e_prof);

        
        $__internal_08f551a9292e64341334465796c01fa1604959f2ac0a7abcd26fed60bf735b44->leave($__internal_08f551a9292e64341334465796c01fa1604959f2ac0a7abcd26fed60bf735b44_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_89e0a7dd187a074cfef0410d34ed8b865a61ccb03455aed14eda61291c19e69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e0a7dd187a074cfef0410d34ed8b865a61ccb03455aed14eda61291c19e69a->enter($__internal_89e0a7dd187a074cfef0410d34ed8b865a61ccb03455aed14eda61291c19e69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_a277170ababbb3524f21c59b12acf91289bb6ac2e950109b7b1cb8bf0a359900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a277170ababbb3524f21c59b12acf91289bb6ac2e950109b7b1cb8bf0a359900->enter($__internal_a277170ababbb3524f21c59b12acf91289bb6ac2e950109b7b1cb8bf0a359900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_a277170ababbb3524f21c59b12acf91289bb6ac2e950109b7b1cb8bf0a359900->leave($__internal_a277170ababbb3524f21c59b12acf91289bb6ac2e950109b7b1cb8bf0a359900_prof);

        
        $__internal_89e0a7dd187a074cfef0410d34ed8b865a61ccb03455aed14eda61291c19e69a->leave($__internal_89e0a7dd187a074cfef0410d34ed8b865a61ccb03455aed14eda61291c19e69a_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_c09e8f4acc5ca99e83605235f45028ad5364c9ccb3fb6a93885f5385de5db85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09e8f4acc5ca99e83605235f45028ad5364c9ccb3fb6a93885f5385de5db85e->enter($__internal_c09e8f4acc5ca99e83605235f45028ad5364c9ccb3fb6a93885f5385de5db85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_b47b9839e3a9b04f39906c45dddcab0a10ffa4e2bbb4f86e1a45dbb44f699500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47b9839e3a9b04f39906c45dddcab0a10ffa4e2bbb4f86e1a45dbb44f699500->enter($__internal_b47b9839e3a9b04f39906c45dddcab0a10ffa4e2bbb4f86e1a45dbb44f699500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_b47b9839e3a9b04f39906c45dddcab0a10ffa4e2bbb4f86e1a45dbb44f699500->leave($__internal_b47b9839e3a9b04f39906c45dddcab0a10ffa4e2bbb4f86e1a45dbb44f699500_prof);

        
        $__internal_c09e8f4acc5ca99e83605235f45028ad5364c9ccb3fb6a93885f5385de5db85e->leave($__internal_c09e8f4acc5ca99e83605235f45028ad5364c9ccb3fb6a93885f5385de5db85e_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_ce23ba5e626d2436b1950b40a2686bb9ced8173686c615aaa7420093c93db105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce23ba5e626d2436b1950b40a2686bb9ced8173686c615aaa7420093c93db105->enter($__internal_ce23ba5e626d2436b1950b40a2686bb9ced8173686c615aaa7420093c93db105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_3c8a2997893f8b528804f891acfed2a7245d97ae60f5325b0acf6da3f0e40c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8a2997893f8b528804f891acfed2a7245d97ae60f5325b0acf6da3f0e40c12->enter($__internal_3c8a2997893f8b528804f891acfed2a7245d97ae60f5325b0acf6da3f0e40c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3c8a2997893f8b528804f891acfed2a7245d97ae60f5325b0acf6da3f0e40c12->leave($__internal_3c8a2997893f8b528804f891acfed2a7245d97ae60f5325b0acf6da3f0e40c12_prof);

        
        $__internal_ce23ba5e626d2436b1950b40a2686bb9ced8173686c615aaa7420093c93db105->leave($__internal_ce23ba5e626d2436b1950b40a2686bb9ced8173686c615aaa7420093c93db105_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_51dc29cc4bc341fa8171e8fc4677d0098136c3c75d5aa42fc0ed2dc2073f4dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51dc29cc4bc341fa8171e8fc4677d0098136c3c75d5aa42fc0ed2dc2073f4dff->enter($__internal_51dc29cc4bc341fa8171e8fc4677d0098136c3c75d5aa42fc0ed2dc2073f4dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_2fda8c2964fa667ebe531d2cf9c0208d0fb726a952e5c51519313ea9af09f9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fda8c2964fa667ebe531d2cf9c0208d0fb726a952e5c51519313ea9af09f9ba->enter($__internal_2fda8c2964fa667ebe531d2cf9c0208d0fb726a952e5c51519313ea9af09f9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "keep_open"), "method", true, true) ||  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2fda8c2964fa667ebe531d2cf9c0208d0fb726a952e5c51519313ea9af09f9ba->leave($__internal_2fda8c2964fa667ebe531d2cf9c0208d0fb726a952e5c51519313ea9af09f9ba_prof);

        
        $__internal_51dc29cc4bc341fa8171e8fc4677d0098136c3c75d5aa42fc0ed2dc2073f4dff->leave($__internal_51dc29cc4bc341fa8171e8fc4677d0098136c3c75d5aa42fc0ed2dc2073f4dff_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_6e8613acec3530e1985c05d7a31959fcdd2634f98fdd89b6fcb92349f8f16c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8613acec3530e1985c05d7a31959fcdd2634f98fdd89b6fcb92349f8f16c48->enter($__internal_6e8613acec3530e1985c05d7a31959fcdd2634f98fdd89b6fcb92349f8f16c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_f1c6bcf687db892f770890d0f8ea3b1a1e8adf62bc8b22a1bbce59a035c659dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c6bcf687db892f770890d0f8ea3b1a1e8adf62bc8b22a1bbce59a035c659dc->enter($__internal_f1c6bcf687db892f770890d0f8ea3b1a1e8adf62bc8b22a1bbce59a035c659dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && (isset($context["is_link"]) ? $context["is_link"] : $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_f1c6bcf687db892f770890d0f8ea3b1a1e8adf62bc8b22a1bbce59a035c659dc->leave($__internal_f1c6bcf687db892f770890d0f8ea3b1a1e8adf62bc8b22a1bbce59a035c659dc_prof);

        
        $__internal_6e8613acec3530e1985c05d7a31959fcdd2634f98fdd89b6fcb92349f8f16c48->leave($__internal_6e8613acec3530e1985c05d7a31959fcdd2634f98fdd89b6fcb92349f8f16c48_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.extra('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Menu\\sonata_menu.html.twig");
    }
}
