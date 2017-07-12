<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_9a53f6aa17acf4b3e6079e6b811beb3e338d2c0852a3bb16f43f18806c299664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4060d06716ac2c6ec2376661d78b4b18f71b45eec833985b13a3fdd191a0e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4060d06716ac2c6ec2376661d78b4b18f71b45eec833985b13a3fdd191a0e20->enter($__internal_d4060d06716ac2c6ec2376661d78b4b18f71b45eec833985b13a3fdd191a0e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_c0b64da75a5278e7b33fb14bdbc7ab843819d2ea486f50f82ad6a2eeb3b02255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b64da75a5278e7b33fb14bdbc7ab843819d2ea486f50f82ad6a2eeb3b02255->enter($__internal_c0b64da75a5278e7b33fb14bdbc7ab843819d2ea486f50f82ad6a2eeb3b02255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4060d06716ac2c6ec2376661d78b4b18f71b45eec833985b13a3fdd191a0e20->leave($__internal_d4060d06716ac2c6ec2376661d78b4b18f71b45eec833985b13a3fdd191a0e20_prof);

        
        $__internal_c0b64da75a5278e7b33fb14bdbc7ab843819d2ea486f50f82ad6a2eeb3b02255->leave($__internal_c0b64da75a5278e7b33fb14bdbc7ab843819d2ea486f50f82ad6a2eeb3b02255_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list.html.twig");
    }
}
