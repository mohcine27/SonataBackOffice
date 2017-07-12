<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_810757cf86b34db19d9df76a04e92c7f8225ebc895ee90f208c3534e3577b3e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ef26c6a7051905bda363f026b07b1fc3f265648ca5f0ded0ab9f4a72c122d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef26c6a7051905bda363f026b07b1fc3f265648ca5f0ded0ab9f4a72c122d5a->enter($__internal_4ef26c6a7051905bda363f026b07b1fc3f265648ca5f0ded0ab9f4a72c122d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_c904e1f2c6ef376cbb007eaef14e99bd107098e0fa91871a9f3f4f1c64c22e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c904e1f2c6ef376cbb007eaef14e99bd107098e0fa91871a9f3f4f1c64c22e45->enter($__internal_c904e1f2c6ef376cbb007eaef14e99bd107098e0fa91871a9f3f4f1c64c22e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ef26c6a7051905bda363f026b07b1fc3f265648ca5f0ded0ab9f4a72c122d5a->leave($__internal_4ef26c6a7051905bda363f026b07b1fc3f265648ca5f0ded0ab9f4a72c122d5a_prof);

        
        $__internal_c904e1f2c6ef376cbb007eaef14e99bd107098e0fa91871a9f3f4f1c64c22e45->leave($__internal_c904e1f2c6ef376cbb007eaef14e99bd107098e0fa91871a9f3f4f1c64c22e45_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_f59db472e8249fbc1621a620f400a62585f36628e5428dadb101ddf38b38022b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59db472e8249fbc1621a620f400a62585f36628e5428dadb101ddf38b38022b->enter($__internal_f59db472e8249fbc1621a620f400a62585f36628e5428dadb101ddf38b38022b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_3fa37be2f8674787f18d23a5c560b0f9cd85041c59620697e953bff9869613f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa37be2f8674787f18d23a5c560b0f9cd85041c59620697e953bff9869613f0->enter($__internal_3fa37be2f8674787f18d23a5c560b0f9cd85041c59620697e953bff9869613f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_3fa37be2f8674787f18d23a5c560b0f9cd85041c59620697e953bff9869613f0->leave($__internal_3fa37be2f8674787f18d23a5c560b0f9cd85041c59620697e953bff9869613f0_prof);

        
        $__internal_f59db472e8249fbc1621a620f400a62585f36628e5428dadb101ddf38b38022b->leave($__internal_f59db472e8249fbc1621a620f400a62585f36628e5428dadb101ddf38b38022b_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_action.html.twig");
    }
}
