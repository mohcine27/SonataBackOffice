<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_088d756b94e52fc3c9bee8e8aad5375626c2facd1cc99b1d5f7a70f19fea4034 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f73106d4a8181ed9bd9e66e1ff943b6824eab5f2c78f24e8924b397cc61974d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73106d4a8181ed9bd9e66e1ff943b6824eab5f2c78f24e8924b397cc61974d9->enter($__internal_f73106d4a8181ed9bd9e66e1ff943b6824eab5f2c78f24e8924b397cc61974d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $__internal_770e30f467738eda972d35edf7b80a3b8446ca9ba668fb2bcc88224221a31aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770e30f467738eda972d35edf7b80a3b8446ca9ba668fb2bcc88224221a31aaa->enter($__internal_770e30f467738eda972d35edf7b80a3b8446ca9ba668fb2bcc88224221a31aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73106d4a8181ed9bd9e66e1ff943b6824eab5f2c78f24e8924b397cc61974d9->leave($__internal_f73106d4a8181ed9bd9e66e1ff943b6824eab5f2c78f24e8924b397cc61974d9_prof);

        
        $__internal_770e30f467738eda972d35edf7b80a3b8446ca9ba668fb2bcc88224221a31aaa->leave($__internal_770e30f467738eda972d35edf7b80a3b8446ca9ba668fb2bcc88224221a31aaa_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_cf300878e697cb786a94950cdbb5405d4f00863ac09b85d056ddde87663f8dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf300878e697cb786a94950cdbb5405d4f00863ac09b85d056ddde87663f8dcf->enter($__internal_cf300878e697cb786a94950cdbb5405d4f00863ac09b85d056ddde87663f8dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_5a970fdb115a64abb37e79a35c9591649997009e013eecbcdc570c6b20e05f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a970fdb115a64abb37e79a35c9591649997009e013eecbcdc570c6b20e05f71->enter($__internal_5a970fdb115a64abb37e79a35c9591649997009e013eecbcdc570c6b20e05f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_5a970fdb115a64abb37e79a35c9591649997009e013eecbcdc570c6b20e05f71->leave($__internal_5a970fdb115a64abb37e79a35c9591649997009e013eecbcdc570c6b20e05f71_prof);

        
        $__internal_cf300878e697cb786a94950cdbb5405d4f00863ac09b85d056ddde87663f8dcf->leave($__internal_cf300878e697cb786a94950cdbb5405d4f00863ac09b85d056ddde87663f8dcf_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_8ad461ebf52b368625cdac0191735f6513736c5859e15fbddf8b8f079e6155b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad461ebf52b368625cdac0191735f6513736c5859e15fbddf8b8f079e6155b4->enter($__internal_8ad461ebf52b368625cdac0191735f6513736c5859e15fbddf8b8f079e6155b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_3a5f717ee835d02ee7c1fa3a10f9af06d24a21efacd744610815c5e215c7e228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5f717ee835d02ee7c1fa3a10f9af06d24a21efacd744610815c5e215c7e228->enter($__internal_3a5f717ee835d02ee7c1fa3a10f9af06d24a21efacd744610815c5e215c7e228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_3a5f717ee835d02ee7c1fa3a10f9af06d24a21efacd744610815c5e215c7e228->leave($__internal_3a5f717ee835d02ee7c1fa3a10f9af06d24a21efacd744610815c5e215c7e228_prof);

        
        $__internal_8ad461ebf52b368625cdac0191735f6513736c5859e15fbddf8b8f079e6155b4->leave($__internal_8ad461ebf52b368625cdac0191735f6513736c5859e15fbddf8b8f079e6155b4_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_271b33a4ef543cbf1010a30adce7fce937170c7582a92d905ad99c9dc7985fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271b33a4ef543cbf1010a30adce7fce937170c7582a92d905ad99c9dc7985fd0->enter($__internal_271b33a4ef543cbf1010a30adce7fce937170c7582a92d905ad99c9dc7985fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9ac798a946740048c9ac70e47de6305eb9eb08fdb3dbef92b422afccfbbe927b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac798a946740048c9ac70e47de6305eb9eb08fdb3dbef92b422afccfbbe927b->enter($__internal_9ac798a946740048c9ac70e47de6305eb9eb08fdb3dbef92b422afccfbbe927b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_9ac798a946740048c9ac70e47de6305eb9eb08fdb3dbef92b422afccfbbe927b->leave($__internal_9ac798a946740048c9ac70e47de6305eb9eb08fdb3dbef92b422afccfbbe927b_prof);

        
        $__internal_271b33a4ef543cbf1010a30adce7fce937170c7582a92d905ad99c9dc7985fd0->leave($__internal_271b33a4ef543cbf1010a30adce7fce937170c7582a92d905ad99c9dc7985fd0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  86 => 24,  72 => 20,  69 => 19,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\action.html.twig");
    }
}
