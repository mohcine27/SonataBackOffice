<?php

/* AppBundle:Group:edit.html.twig */
class __TwigTemplate_93c695a41136cf27061767e21387914b33a8820121bf99daa47680d19fd4d82f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "AppBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6db5c764b8814f9bb1c5bdccc64cf625713a8abda97f943e629746385eb3829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6db5c764b8814f9bb1c5bdccc64cf625713a8abda97f943e629746385eb3829->enter($__internal_d6db5c764b8814f9bb1c5bdccc64cf625713a8abda97f943e629746385eb3829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:edit.html.twig"));

        $__internal_cd6cdad77a0b4a7e1932435ca6953ff5f895c316b6e233d66218e3934c3f7493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6cdad77a0b4a7e1932435ca6953ff5f895c316b6e233d66218e3934c3f7493->enter($__internal_cd6cdad77a0b4a7e1932435ca6953ff5f895c316b6e233d66218e3934c3f7493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6db5c764b8814f9bb1c5bdccc64cf625713a8abda97f943e629746385eb3829->leave($__internal_d6db5c764b8814f9bb1c5bdccc64cf625713a8abda97f943e629746385eb3829_prof);

        
        $__internal_cd6cdad77a0b4a7e1932435ca6953ff5f895c316b6e233d66218e3934c3f7493->leave($__internal_cd6cdad77a0b4a7e1932435ca6953ff5f895c316b6e233d66218e3934c3f7493_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d80afa818fbda9866176b60287f4838c7d489c1e4af60ea3d85a644872e08736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80afa818fbda9866176b60287f4838c7d489c1e4af60ea3d85a644872e08736->enter($__internal_d80afa818fbda9866176b60287f4838c7d489c1e4af60ea3d85a644872e08736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9046efca96edd1bf365a03c3780992424808923942dea6314e11fff15e613959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9046efca96edd1bf365a03c3780992424808923942dea6314e11fff15e613959->enter($__internal_9046efca96edd1bf365a03c3780992424808923942dea6314e11fff15e613959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "AppBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_9046efca96edd1bf365a03c3780992424808923942dea6314e11fff15e613959->leave($__internal_9046efca96edd1bf365a03c3780992424808923942dea6314e11fff15e613959_prof);

        
        $__internal_d80afa818fbda9866176b60287f4838c7d489c1e4af60ea3d85a644872e08736->leave($__internal_d80afa818fbda9866176b60287f4838c7d489c1e4af60ea3d85a644872e08736_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "AppBundle:Group:edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
