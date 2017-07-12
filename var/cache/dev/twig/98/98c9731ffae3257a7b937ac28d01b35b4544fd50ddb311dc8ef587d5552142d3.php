<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_b560249ef401550eb8bcb3d304497700ad33e5c4d644f80a4a1926542a07f90a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df54e16fb16b2fc6b29926f5a7e0a7cbaa44e42c6dcbfdc91b7e29303672cac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df54e16fb16b2fc6b29926f5a7e0a7cbaa44e42c6dcbfdc91b7e29303672cac7->enter($__internal_df54e16fb16b2fc6b29926f5a7e0a7cbaa44e42c6dcbfdc91b7e29303672cac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $__internal_b092a4a429a04d00dc85016ec4a786a45eff407a7920be4679e907759a01a082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b092a4a429a04d00dc85016ec4a786a45eff407a7920be4679e907759a01a082->enter($__internal_b092a4a429a04d00dc85016ec4a786a45eff407a7920be4679e907759a01a082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df54e16fb16b2fc6b29926f5a7e0a7cbaa44e42c6dcbfdc91b7e29303672cac7->leave($__internal_df54e16fb16b2fc6b29926f5a7e0a7cbaa44e42c6dcbfdc91b7e29303672cac7_prof);

        
        $__internal_b092a4a429a04d00dc85016ec4a786a45eff407a7920be4679e907759a01a082->leave($__internal_b092a4a429a04d00dc85016ec4a786a45eff407a7920be4679e907759a01a082_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_97042e9db0ea7d43c9d8d4da0735f3376aff3184da7dbea109debeac256e504b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97042e9db0ea7d43c9d8d4da0735f3376aff3184da7dbea109debeac256e504b->enter($__internal_97042e9db0ea7d43c9d8d4da0735f3376aff3184da7dbea109debeac256e504b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_801e42bef035772492d1d95f029a2e5a78ae3b9f0cb412b80a480cd23a771651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801e42bef035772492d1d95f029a2e5a78ae3b9f0cb412b80a480cd23a771651->enter($__internal_801e42bef035772492d1d95f029a2e5a78ae3b9f0cb412b80a480cd23a771651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_801e42bef035772492d1d95f029a2e5a78ae3b9f0cb412b80a480cd23a771651->leave($__internal_801e42bef035772492d1d95f029a2e5a78ae3b9f0cb412b80a480cd23a771651_prof);

        
        $__internal_97042e9db0ea7d43c9d8d4da0735f3376aff3184da7dbea109debeac256e504b->leave($__internal_97042e9db0ea7d43c9d8d4da0735f3376aff3184da7dbea109debeac256e504b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_email.html.twig");
    }
}
