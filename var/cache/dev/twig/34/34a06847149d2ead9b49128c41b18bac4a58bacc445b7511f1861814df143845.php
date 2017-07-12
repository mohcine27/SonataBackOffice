<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_65a3d12aead1297a90f2f91c3b8cd17e07c4e206b07e39566f1ac13fba49bee0 extends Twig_Template
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
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff3c05b7c90edd4600270721797594721677b83a76ace2a0f3fa236a2742ee0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3c05b7c90edd4600270721797594721677b83a76ace2a0f3fa236a2742ee0f->enter($__internal_ff3c05b7c90edd4600270721797594721677b83a76ace2a0f3fa236a2742ee0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_a6c546ca6c8b09ba90d29d8a1cb975753eb876aabf7d6aa8d60ef3979cb99c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c546ca6c8b09ba90d29d8a1cb975753eb876aabf7d6aa8d60ef3979cb99c28->enter($__internal_a6c546ca6c8b09ba90d29d8a1cb975753eb876aabf7d6aa8d60ef3979cb99c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff3c05b7c90edd4600270721797594721677b83a76ace2a0f3fa236a2742ee0f->leave($__internal_ff3c05b7c90edd4600270721797594721677b83a76ace2a0f3fa236a2742ee0f_prof);

        
        $__internal_a6c546ca6c8b09ba90d29d8a1cb975753eb876aabf7d6aa8d60ef3979cb99c28->leave($__internal_a6c546ca6c8b09ba90d29d8a1cb975753eb876aabf7d6aa8d60ef3979cb99c28_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_654ee79e14100d158dd1a50dc5e1d6a4dc776dc8b1af60527e32660bf83b4203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654ee79e14100d158dd1a50dc5e1d6a4dc776dc8b1af60527e32660bf83b4203->enter($__internal_654ee79e14100d158dd1a50dc5e1d6a4dc776dc8b1af60527e32660bf83b4203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_246e9789f301d8dd702f44f3f8d776a7f811e331ef007523b41c82e6259ce229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246e9789f301d8dd702f44f3f8d776a7f811e331ef007523b41c82e6259ce229->enter($__internal_246e9789f301d8dd702f44f3f8d776a7f811e331ef007523b41c82e6259ce229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_246e9789f301d8dd702f44f3f8d776a7f811e331ef007523b41c82e6259ce229->leave($__internal_246e9789f301d8dd702f44f3f8d776a7f811e331ef007523b41c82e6259ce229_prof);

        
        $__internal_654ee79e14100d158dd1a50dc5e1d6a4dc776dc8b1af60527e32660bf83b4203->leave($__internal_654ee79e14100d158dd1a50dc5e1d6a4dc776dc8b1af60527e32660bf83b4203_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__batch.html.twig");
    }
}
