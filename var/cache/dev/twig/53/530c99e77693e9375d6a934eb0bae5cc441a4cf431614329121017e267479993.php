<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_975b592b7ea5cf8845f2cf04acf38b8e8ef518bb99a9ad45c8271b019f56f15a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa206c4f85039c76a3e1b762cb7255d578dd2bf66e9b9a36088f2e7503bdc312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa206c4f85039c76a3e1b762cb7255d578dd2bf66e9b9a36088f2e7503bdc312->enter($__internal_fa206c4f85039c76a3e1b762cb7255d578dd2bf66e9b9a36088f2e7503bdc312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2a5470669adc1c75695b9172364c1cd85999cad6a8cafde62b7bdcd3d04e84a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5470669adc1c75695b9172364c1cd85999cad6a8cafde62b7bdcd3d04e84a8->enter($__internal_2a5470669adc1c75695b9172364c1cd85999cad6a8cafde62b7bdcd3d04e84a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fa206c4f85039c76a3e1b762cb7255d578dd2bf66e9b9a36088f2e7503bdc312->leave($__internal_fa206c4f85039c76a3e1b762cb7255d578dd2bf66e9b9a36088f2e7503bdc312_prof);

        
        $__internal_2a5470669adc1c75695b9172364c1cd85999cad6a8cafde62b7bdcd3d04e84a8->leave($__internal_2a5470669adc1c75695b9172364c1cd85999cad6a8cafde62b7bdcd3d04e84a8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c3f6d57288ec76c1ff94e8a94fde343d01ec1c09408d04c232735d31c6f02ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3f6d57288ec76c1ff94e8a94fde343d01ec1c09408d04c232735d31c6f02ae->enter($__internal_5c3f6d57288ec76c1ff94e8a94fde343d01ec1c09408d04c232735d31c6f02ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce30de816e1823965c9d118df54a91b57063f9beb23ad2a371a03a05d3e7c10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce30de816e1823965c9d118df54a91b57063f9beb23ad2a371a03a05d3e7c10d->enter($__internal_ce30de816e1823965c9d118df54a91b57063f9beb23ad2a371a03a05d3e7c10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ce30de816e1823965c9d118df54a91b57063f9beb23ad2a371a03a05d3e7c10d->leave($__internal_ce30de816e1823965c9d118df54a91b57063f9beb23ad2a371a03a05d3e7c10d_prof);

        
        $__internal_5c3f6d57288ec76c1ff94e8a94fde343d01ec1c09408d04c232735d31c6f02ae->leave($__internal_5c3f6d57288ec76c1ff94e8a94fde343d01ec1c09408d04c232735d31c6f02ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
