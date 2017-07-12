<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_88ab5ebfd04ee8f1d4ed12cec19f2ad41bbf30470236b1531f3799b7181c41b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a24f5f1da28ec592c9db83ecb6170044c86cce4cd2f902401fed2e0efcf9401c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24f5f1da28ec592c9db83ecb6170044c86cce4cd2f902401fed2e0efcf9401c->enter($__internal_a24f5f1da28ec592c9db83ecb6170044c86cce4cd2f902401fed2e0efcf9401c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_3af721a0ef1c76abed5a7489f66df28bbcd71171476a83682b1bc6ad057577e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af721a0ef1c76abed5a7489f66df28bbcd71171476a83682b1bc6ad057577e7->enter($__internal_3af721a0ef1c76abed5a7489f66df28bbcd71171476a83682b1bc6ad057577e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a24f5f1da28ec592c9db83ecb6170044c86cce4cd2f902401fed2e0efcf9401c->leave($__internal_a24f5f1da28ec592c9db83ecb6170044c86cce4cd2f902401fed2e0efcf9401c_prof);

        
        $__internal_3af721a0ef1c76abed5a7489f66df28bbcd71171476a83682b1bc6ad057577e7->leave($__internal_3af721a0ef1c76abed5a7489f66df28bbcd71171476a83682b1bc6ad057577e7_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_526f9b5be4a036e6f43b8bcb1dd86e2992a400f1f9a89e3d8061dea7420bf7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526f9b5be4a036e6f43b8bcb1dd86e2992a400f1f9a89e3d8061dea7420bf7a1->enter($__internal_526f9b5be4a036e6f43b8bcb1dd86e2992a400f1f9a89e3d8061dea7420bf7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3caa1394381e9b99934152b2f6396fbc0098ebc740598dd33fa5ba57bbcf5713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3caa1394381e9b99934152b2f6396fbc0098ebc740598dd33fa5ba57bbcf5713->enter($__internal_3caa1394381e9b99934152b2f6396fbc0098ebc740598dd33fa5ba57bbcf5713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_3caa1394381e9b99934152b2f6396fbc0098ebc740598dd33fa5ba57bbcf5713->leave($__internal_3caa1394381e9b99934152b2f6396fbc0098ebc740598dd33fa5ba57bbcf5713_prof);

        
        $__internal_526f9b5be4a036e6f43b8bcb1dd86e2992a400f1f9a89e3d8061dea7420bf7a1->leave($__internal_526f9b5be4a036e6f43b8bcb1dd86e2992a400f1f9a89e3d8061dea7420bf7a1_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_e67bf721025b190d550befb51e49a7bbf0293505630b1b34d157de79e3d34b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67bf721025b190d550befb51e49a7bbf0293505630b1b34d157de79e3d34b7f->enter($__internal_e67bf721025b190d550befb51e49a7bbf0293505630b1b34d157de79e3d34b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_3ca9b9d8ed80ef24bc50e4e70da58713e11ac7138b69e692360b0b68702d2123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca9b9d8ed80ef24bc50e4e70da58713e11ac7138b69e692360b0b68702d2123->enter($__internal_3ca9b9d8ed80ef24bc50e4e70da58713e11ac7138b69e692360b0b68702d2123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3ca9b9d8ed80ef24bc50e4e70da58713e11ac7138b69e692360b0b68702d2123->leave($__internal_3ca9b9d8ed80ef24bc50e4e70da58713e11ac7138b69e692360b0b68702d2123_prof);

        
        $__internal_e67bf721025b190d550befb51e49a7bbf0293505630b1b34d157de79e3d34b7f->leave($__internal_e67bf721025b190d550befb51e49a7bbf0293505630b1b34d157de79e3d34b7f_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d4c2a46438f05fb98b8e3c0a98948a56e8527449dfc4b0ec2da6cb223205c2ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c2a46438f05fb98b8e3c0a98948a56e8527449dfc4b0ec2da6cb223205c2ea->enter($__internal_d4c2a46438f05fb98b8e3c0a98948a56e8527449dfc4b0ec2da6cb223205c2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_dadde412086c3280afdf347e4c3ff3a9098df5755e8bf4e833b6432cdf102a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadde412086c3280afdf347e4c3ff3a9098df5755e8bf4e833b6432cdf102a93->enter($__internal_dadde412086c3280afdf347e4c3ff3a9098df5755e8bf4e833b6432cdf102a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_dadde412086c3280afdf347e4c3ff3a9098df5755e8bf4e833b6432cdf102a93->leave($__internal_dadde412086c3280afdf347e4c3ff3a9098df5755e8bf4e833b6432cdf102a93_prof);

        
        $__internal_d4c2a46438f05fb98b8e3c0a98948a56e8527449dfc4b0ec2da6cb223205c2ea->leave($__internal_d4c2a46438f05fb98b8e3c0a98948a56e8527449dfc4b0ec2da6cb223205c2ea_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_6fbcfe8ffe81622f681a01184d2b0ef7babcf5488c55a510d6b0322b2deedbaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbcfe8ffe81622f681a01184d2b0ef7babcf5488c55a510d6b0322b2deedbaf->enter($__internal_6fbcfe8ffe81622f681a01184d2b0ef7babcf5488c55a510d6b0322b2deedbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_c87cdf3ad3dc023b16cffa65ee76cbcf16a6bb3636f48ab8db0f3a6bf3576055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87cdf3ad3dc023b16cffa65ee76cbcf16a6bb3636f48ab8db0f3a6bf3576055->enter($__internal_c87cdf3ad3dc023b16cffa65ee76cbcf16a6bb3636f48ab8db0f3a6bf3576055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_c87cdf3ad3dc023b16cffa65ee76cbcf16a6bb3636f48ab8db0f3a6bf3576055->leave($__internal_c87cdf3ad3dc023b16cffa65ee76cbcf16a6bb3636f48ab8db0f3a6bf3576055_prof);

        
        $__internal_6fbcfe8ffe81622f681a01184d2b0ef7babcf5488c55a510d6b0322b2deedbaf->leave($__internal_6fbcfe8ffe81622f681a01184d2b0ef7babcf5488c55a510d6b0322b2deedbaf_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_3d06f0001506738625aa626bef96e924836c04b2ead957b2abd6f03ddf667b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d06f0001506738625aa626bef96e924836c04b2ead957b2abd6f03ddf667b8c->enter($__internal_3d06f0001506738625aa626bef96e924836c04b2ead957b2abd6f03ddf667b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_0cd9d0607e72c490c604a66f3ba039e58370023de05c338c224dc6dc0c536cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd9d0607e72c490c604a66f3ba039e58370023de05c338c224dc6dc0c536cd0->enter($__internal_0cd9d0607e72c490c604a66f3ba039e58370023de05c338c224dc6dc0c536cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_0cd9d0607e72c490c604a66f3ba039e58370023de05c338c224dc6dc0c536cd0->leave($__internal_0cd9d0607e72c490c604a66f3ba039e58370023de05c338c224dc6dc0c536cd0_prof);

        
        $__internal_3d06f0001506738625aa626bef96e924836c04b2ead957b2abd6f03ddf667b8c->leave($__internal_3d06f0001506738625aa626bef96e924836c04b2ead957b2abd6f03ddf667b8c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 35,  152 => 34,  134 => 30,  124 => 27,  115 => 26,  102 => 23,  93 => 22,  79 => 18,  73 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_edit.html.twig");
    }
}
