<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_8490b4f2cde3ec66e1739abd55e47054885b7144ddb66b666889b3bba5f85c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f2b8b36c4fbf0c90d745a73669b55f00cf16395cd8757fc1fe899522d71c6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2b8b36c4fbf0c90d745a73669b55f00cf16395cd8757fc1fe899522d71c6aa->enter($__internal_4f2b8b36c4fbf0c90d745a73669b55f00cf16395cd8757fc1fe899522d71c6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $__internal_d6d07a5c5fa91475c38683853f17f0efbc73db6420739696ea3f425d89306b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d07a5c5fa91475c38683853f17f0efbc73db6420739696ea3f425d89306b84->enter($__internal_d6d07a5c5fa91475c38683853f17f0efbc73db6420739696ea3f425d89306b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f2b8b36c4fbf0c90d745a73669b55f00cf16395cd8757fc1fe899522d71c6aa->leave($__internal_4f2b8b36c4fbf0c90d745a73669b55f00cf16395cd8757fc1fe899522d71c6aa_prof);

        
        $__internal_d6d07a5c5fa91475c38683853f17f0efbc73db6420739696ea3f425d89306b84->leave($__internal_d6d07a5c5fa91475c38683853f17f0efbc73db6420739696ea3f425d89306b84_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_9956108b22e343c67fb1c3f5407ff0cd390c93cbdf811389126043932dcc4100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9956108b22e343c67fb1c3f5407ff0cd390c93cbdf811389126043932dcc4100->enter($__internal_9956108b22e343c67fb1c3f5407ff0cd390c93cbdf811389126043932dcc4100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_635ad08a760e48f0d48b2b837947bc77168117dbc5705173175bcbdfc20da204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635ad08a760e48f0d48b2b837947bc77168117dbc5705173175bcbdfc20da204->enter($__internal_635ad08a760e48f0d48b2b837947bc77168117dbc5705173175bcbdfc20da204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_635ad08a760e48f0d48b2b837947bc77168117dbc5705173175bcbdfc20da204->leave($__internal_635ad08a760e48f0d48b2b837947bc77168117dbc5705173175bcbdfc20da204_prof);

        
        $__internal_9956108b22e343c67fb1c3f5407ff0cd390c93cbdf811389126043932dcc4100->leave($__internal_9956108b22e343c67fb1c3f5407ff0cd390c93cbdf811389126043932dcc4100_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_388c34da50184cb1017f0c202ad7a4b4ff3c1b8c528a04c93bde59a6d6234af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388c34da50184cb1017f0c202ad7a4b4ff3c1b8c528a04c93bde59a6d6234af3->enter($__internal_388c34da50184cb1017f0c202ad7a4b4ff3c1b8c528a04c93bde59a6d6234af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_2cbfa1d033e3a7f168fca2400e21954e547946436dd1f09710db7917ac913e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbfa1d033e3a7f168fca2400e21954e547946436dd1f09710db7917ac913e3b->enter($__internal_2cbfa1d033e3a7f168fca2400e21954e547946436dd1f09710db7917ac913e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_2cbfa1d033e3a7f168fca2400e21954e547946436dd1f09710db7917ac913e3b->leave($__internal_2cbfa1d033e3a7f168fca2400e21954e547946436dd1f09710db7917ac913e3b_prof);

        
        $__internal_388c34da50184cb1017f0c202ad7a4b4ff3c1b8c528a04c93bde59a6d6234af3->leave($__internal_388c34da50184cb1017f0c202ad7a4b4ff3c1b8c528a04c93bde59a6d6234af3_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_f694f6f1d0f095469ed0deec3989fbf5d2e088ea86872007a962f64fc9b2ecad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f694f6f1d0f095469ed0deec3989fbf5d2e088ea86872007a962f64fc9b2ecad->enter($__internal_f694f6f1d0f095469ed0deec3989fbf5d2e088ea86872007a962f64fc9b2ecad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_79dfd237f151a00cce1f8a734c8a15d9b45c8b022e9f705f46015aace5bf49cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79dfd237f151a00cce1f8a734c8a15d9b45c8b022e9f705f46015aace5bf49cd->enter($__internal_79dfd237f151a00cce1f8a734c8a15d9b45c8b022e9f705f46015aace5bf49cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_79dfd237f151a00cce1f8a734c8a15d9b45c8b022e9f705f46015aace5bf49cd->leave($__internal_79dfd237f151a00cce1f8a734c8a15d9b45c8b022e9f705f46015aace5bf49cd_prof);

        
        $__internal_f694f6f1d0f095469ed0deec3989fbf5d2e088ea86872007a962f64fc9b2ecad->leave($__internal_f694f6f1d0f095469ed0deec3989fbf5d2e088ea86872007a962f64fc9b2ecad_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_0d7bd4e3acb7f2fa01f9f1e76ac7ddbf2dc22daf49cad7e14a7c09af2f274d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7bd4e3acb7f2fa01f9f1e76ac7ddbf2dc22daf49cad7e14a7c09af2f274d48->enter($__internal_0d7bd4e3acb7f2fa01f9f1e76ac7ddbf2dc22daf49cad7e14a7c09af2f274d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_39b9725ab4e3ba52422239b27744523fedc6cf70340fd0d5715206b9c1f63d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b9725ab4e3ba52422239b27744523fedc6cf70340fd0d5715206b9c1f63d32->enter($__internal_39b9725ab4e3ba52422239b27744523fedc6cf70340fd0d5715206b9c1f63d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_39b9725ab4e3ba52422239b27744523fedc6cf70340fd0d5715206b9c1f63d32->leave($__internal_39b9725ab4e3ba52422239b27744523fedc6cf70340fd0d5715206b9c1f63d32_prof);

        
        $__internal_0d7bd4e3acb7f2fa01f9f1e76ac7ddbf2dc22daf49cad7e14a7c09af2f274d48->leave($__internal_0d7bd4e3acb7f2fa01f9f1e76ac7ddbf2dc22daf49cad7e14a7c09af2f274d48_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fae9102f5453fdd56eac36398f8240a4d253509259378bf0cbeceef20fa9bf2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae9102f5453fdd56eac36398f8240a4d253509259378bf0cbeceef20fa9bf2e->enter($__internal_fae9102f5453fdd56eac36398f8240a4d253509259378bf0cbeceef20fa9bf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc6ef5a5dc292c760632592bd9c8a8ef2676a084912be009c3e4c81a7e0490e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6ef5a5dc292c760632592bd9c8a8ef2676a084912be009c3e4c81a7e0490e4->enter($__internal_fc6ef5a5dc292c760632592bd9c8a8ef2676a084912be009c3e4c81a7e0490e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_fc6ef5a5dc292c760632592bd9c8a8ef2676a084912be009c3e4c81a7e0490e4->leave($__internal_fc6ef5a5dc292c760632592bd9c8a8ef2676a084912be009c3e4c81a7e0490e4_prof);

        
        $__internal_fae9102f5453fdd56eac36398f8240a4d253509259378bf0cbeceef20fa9bf2e->leave($__internal_fae9102f5453fdd56eac36398f8240a4d253509259378bf0cbeceef20fa9bf2e_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_a993253996882d053a1e316fb3c89e170e038027e21827d5aef592bdcc1f0338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a993253996882d053a1e316fb3c89e170e038027e21827d5aef592bdcc1f0338->enter($__internal_a993253996882d053a1e316fb3c89e170e038027e21827d5aef592bdcc1f0338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_e8794d809530f6ef206d5d61354b5df1e272a7e8af08e77ca6c24d8592760c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8794d809530f6ef206d5d61354b5df1e272a7e8af08e77ca6c24d8592760c0d->enter($__internal_e8794d809530f6ef206d5d61354b5df1e272a7e8af08e77ca6c24d8592760c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_e8794d809530f6ef206d5d61354b5df1e272a7e8af08e77ca6c24d8592760c0d->leave($__internal_e8794d809530f6ef206d5d61354b5df1e272a7e8af08e77ca6c24d8592760c0d_prof);

        
        $__internal_a993253996882d053a1e316fb3c89e170e038027e21827d5aef592bdcc1f0338->leave($__internal_a993253996882d053a1e316fb3c89e170e038027e21827d5aef592bdcc1f0338_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_1982fc6eb1969c1854839c1a10df5e5ba4739d76ff6331ae7f932be74f8dc48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1982fc6eb1969c1854839c1a10df5e5ba4739d76ff6331ae7f932be74f8dc48d->enter($__internal_1982fc6eb1969c1854839c1a10df5e5ba4739d76ff6331ae7f932be74f8dc48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_deee621462a685c52b40bebf3e2e1247630c092146536babfdc27e9346c1f272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deee621462a685c52b40bebf3e2e1247630c092146536babfdc27e9346c1f272->enter($__internal_deee621462a685c52b40bebf3e2e1247630c092146536babfdc27e9346c1f272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_deee621462a685c52b40bebf3e2e1247630c092146536babfdc27e9346c1f272->leave($__internal_deee621462a685c52b40bebf3e2e1247630c092146536babfdc27e9346c1f272_prof);

        
        $__internal_1982fc6eb1969c1854839c1a10df5e5ba4739d76ff6331ae7f932be74f8dc48d->leave($__internal_1982fc6eb1969c1854839c1a10df5e5ba4739d76ff6331ae7f932be74f8dc48d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 32,  151 => 31,  142 => 30,  122 => 20,  113 => 19,  96 => 17,  79 => 16,  62 => 15,  45 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\empty_layout.html.twig");
    }
}
