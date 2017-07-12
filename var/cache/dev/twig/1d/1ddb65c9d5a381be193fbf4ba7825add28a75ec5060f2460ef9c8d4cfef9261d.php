<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_a4d0820c8c293c3f1a4318e3fae282328be77db21d4ab051612e1d2a5c5e643c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48e62a30b41735d8527b171ae2b382776d158c3c057846fa1824b4451e31299b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e62a30b41735d8527b171ae2b382776d158c3c057846fa1824b4451e31299b->enter($__internal_48e62a30b41735d8527b171ae2b382776d158c3c057846fa1824b4451e31299b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_8eace6be3b8ecdbd3100dec986c52819e3c54d3137f921c5440e826911a849eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eace6be3b8ecdbd3100dec986c52819e3c54d3137f921c5440e826911a849eb->enter($__internal_8eace6be3b8ecdbd3100dec986c52819e3c54d3137f921c5440e826911a849eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48e62a30b41735d8527b171ae2b382776d158c3c057846fa1824b4451e31299b->leave($__internal_48e62a30b41735d8527b171ae2b382776d158c3c057846fa1824b4451e31299b_prof);

        
        $__internal_8eace6be3b8ecdbd3100dec986c52819e3c54d3137f921c5440e826911a849eb->leave($__internal_8eace6be3b8ecdbd3100dec986c52819e3c54d3137f921c5440e826911a849eb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_67c10cc48f0178d05e0cebfbb19e016682498a2650509cfc74603313202f0f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c10cc48f0178d05e0cebfbb19e016682498a2650509cfc74603313202f0f98->enter($__internal_67c10cc48f0178d05e0cebfbb19e016682498a2650509cfc74603313202f0f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_8102de1d63180e4dbb2b5f636f3f22010dac8cdf70f18910ba2d6ddd25eba994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8102de1d63180e4dbb2b5f636f3f22010dac8cdf70f18910ba2d6ddd25eba994->enter($__internal_8102de1d63180e4dbb2b5f636f3f22010dac8cdf70f18910ba2d6ddd25eba994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_8102de1d63180e4dbb2b5f636f3f22010dac8cdf70f18910ba2d6ddd25eba994->leave($__internal_8102de1d63180e4dbb2b5f636f3f22010dac8cdf70f18910ba2d6ddd25eba994_prof);

        
        $__internal_67c10cc48f0178d05e0cebfbb19e016682498a2650509cfc74603313202f0f98->leave($__internal_67c10cc48f0178d05e0cebfbb19e016682498a2650509cfc74603313202f0f98_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_exception.html.twig");
    }
}
