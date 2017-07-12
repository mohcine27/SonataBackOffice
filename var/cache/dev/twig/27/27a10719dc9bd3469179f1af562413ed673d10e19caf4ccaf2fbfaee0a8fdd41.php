<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_01e9a40d16b4d85e3a7b2565a47737c7e3a5f2cfbdfd971e75d2d0dfaa6837ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7845d243b1a2906de0995bdf36c87baa40c266469b75279568156ac102e63dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7845d243b1a2906de0995bdf36c87baa40c266469b75279568156ac102e63dfd->enter($__internal_7845d243b1a2906de0995bdf36c87baa40c266469b75279568156ac102e63dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_0e022321a55904cf5dc18971ad871514c84e09aef29dc29a161eb68e30648b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e022321a55904cf5dc18971ad871514c84e09aef29dc29a161eb68e30648b9c->enter($__internal_0e022321a55904cf5dc18971ad871514c84e09aef29dc29a161eb68e30648b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_7845d243b1a2906de0995bdf36c87baa40c266469b75279568156ac102e63dfd->leave($__internal_7845d243b1a2906de0995bdf36c87baa40c266469b75279568156ac102e63dfd_prof);

        
        $__internal_0e022321a55904cf5dc18971ad871514c84e09aef29dc29a161eb68e30648b9c->leave($__internal_0e022321a55904cf5dc18971ad871514c84e09aef29dc29a161eb68e30648b9c_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_e36a4f3554acc01207a5d6305ce8dbc08126fa754334faad2653ffea6873782d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36a4f3554acc01207a5d6305ce8dbc08126fa754334faad2653ffea6873782d->enter($__internal_e36a4f3554acc01207a5d6305ce8dbc08126fa754334faad2653ffea6873782d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_4df7e1726080fded5ab2eb9791f01742fc12063c311611574bc20f598d7172dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df7e1726080fded5ab2eb9791f01742fc12063c311611574bc20f598d7172dc->enter($__internal_4df7e1726080fded5ab2eb9791f01742fc12063c311611574bc20f598d7172dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_4df7e1726080fded5ab2eb9791f01742fc12063c311611574bc20f598d7172dc->leave($__internal_4df7e1726080fded5ab2eb9791f01742fc12063c311611574bc20f598d7172dc_prof);

        
        $__internal_e36a4f3554acc01207a5d6305ce8dbc08126fa754334faad2653ffea6873782d->leave($__internal_e36a4f3554acc01207a5d6305ce8dbc08126fa754334faad2653ffea6873782d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
