<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_51ab45ba55676e8e90515ef48f5a250e8ab370787cfc794a7a9de351f6996c48 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b50b5212c2aeda3db5a841b953f89e641a2bca67cd7ad0e8100b8345981b9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b50b5212c2aeda3db5a841b953f89e641a2bca67cd7ad0e8100b8345981b9c9->enter($__internal_8b50b5212c2aeda3db5a841b953f89e641a2bca67cd7ad0e8100b8345981b9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_8234432b1c18cb2a8bced6db630774903d595c69e7a46f5753e9725c229c7418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8234432b1c18cb2a8bced6db630774903d595c69e7a46f5753e9725c229c7418->enter($__internal_8234432b1c18cb2a8bced6db630774903d595c69e7a46f5753e9725c229c7418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b50b5212c2aeda3db5a841b953f89e641a2bca67cd7ad0e8100b8345981b9c9->leave($__internal_8b50b5212c2aeda3db5a841b953f89e641a2bca67cd7ad0e8100b8345981b9c9_prof);

        
        $__internal_8234432b1c18cb2a8bced6db630774903d595c69e7a46f5753e9725c229c7418->leave($__internal_8234432b1c18cb2a8bced6db630774903d595c69e7a46f5753e9725c229c7418_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_0150ed87b2771a1ab2428745d529a383ce0739eaf9cdd988cdef8d45dd577276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0150ed87b2771a1ab2428745d529a383ce0739eaf9cdd988cdef8d45dd577276->enter($__internal_0150ed87b2771a1ab2428745d529a383ce0739eaf9cdd988cdef8d45dd577276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_cfc511f24db49499aed4e7546b3d81f4500c26a5c2668a729a955c87a3107be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc511f24db49499aed4e7546b3d81f4500c26a5c2668a729a955c87a3107be9->enter($__internal_cfc511f24db49499aed4e7546b3d81f4500c26a5c2668a729a955c87a3107be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_cfc511f24db49499aed4e7546b3d81f4500c26a5c2668a729a955c87a3107be9->leave($__internal_cfc511f24db49499aed4e7546b3d81f4500c26a5c2668a729a955c87a3107be9_prof);

        
        $__internal_0150ed87b2771a1ab2428745d529a383ce0739eaf9cdd988cdef8d45dd577276->leave($__internal_0150ed87b2771a1ab2428745d529a383ce0739eaf9cdd988cdef8d45dd577276_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_text.html.twig");
    }
}
