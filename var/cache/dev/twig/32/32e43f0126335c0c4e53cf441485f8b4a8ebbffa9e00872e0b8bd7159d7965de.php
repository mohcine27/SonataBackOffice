<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_f48e58e26972e06b3b14be35673ed0781eaf2e30730ad20f1119050e1752d85a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cd98559f937c789bbce9935ef12ca1855914cbf98e2b7d0dfb914225652d967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd98559f937c789bbce9935ef12ca1855914cbf98e2b7d0dfb914225652d967->enter($__internal_8cd98559f937c789bbce9935ef12ca1855914cbf98e2b7d0dfb914225652d967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_6de3be6ea81819fab268759bbdc87e7245fbb4059de5bd1798e26b39b4637df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de3be6ea81819fab268759bbdc87e7245fbb4059de5bd1798e26b39b4637df7->enter($__internal_6de3be6ea81819fab268759bbdc87e7245fbb4059de5bd1798e26b39b4637df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd98559f937c789bbce9935ef12ca1855914cbf98e2b7d0dfb914225652d967->leave($__internal_8cd98559f937c789bbce9935ef12ca1855914cbf98e2b7d0dfb914225652d967_prof);

        
        $__internal_6de3be6ea81819fab268759bbdc87e7245fbb4059de5bd1798e26b39b4637df7->leave($__internal_6de3be6ea81819fab268759bbdc87e7245fbb4059de5bd1798e26b39b4637df7_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_885ed41437ac9039ed616c790c3eb43f6ca712f53849391e51af594d252bc295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885ed41437ac9039ed616c790c3eb43f6ca712f53849391e51af594d252bc295->enter($__internal_885ed41437ac9039ed616c790c3eb43f6ca712f53849391e51af594d252bc295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_e07235bd70bfdc95f1b57dffdfe8b6b43ee66debcbc040b6cdda745b7eedb367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07235bd70bfdc95f1b57dffdfe8b6b43ee66debcbc040b6cdda745b7eedb367->enter($__internal_e07235bd70bfdc95f1b57dffdfe8b6b43ee66debcbc040b6cdda745b7eedb367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "SonataBlockBundle:Block:block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_e07235bd70bfdc95f1b57dffdfe8b6b43ee66debcbc040b6cdda745b7eedb367->leave($__internal_e07235bd70bfdc95f1b57dffdfe8b6b43ee66debcbc040b6cdda745b7eedb367_prof);

        
        $__internal_885ed41437ac9039ed616c790c3eb43f6ca712f53849391e51af594d252bc295->leave($__internal_885ed41437ac9039ed616c790c3eb43f6ca712f53849391e51af594d252bc295_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  69 => 22,  64 => 20,  59 => 19,  56 => 18,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include 'TwigBundle:Exception:exception.html.twig' %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception_debug.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_exception_debug.html.twig");
    }
}
