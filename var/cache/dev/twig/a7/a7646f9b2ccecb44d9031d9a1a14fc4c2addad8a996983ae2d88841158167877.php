<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_39c96968b4d3890ca17f4ba9d5ea8ac7cc406774650c70399c74cc1671580a2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e404dd120b677168b6a9afc8abd30c4b660afed7dd0d7c70990ee808848f754a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e404dd120b677168b6a9afc8abd30c4b660afed7dd0d7c70990ee808848f754a->enter($__internal_e404dd120b677168b6a9afc8abd30c4b660afed7dd0d7c70990ee808848f754a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_fe38d2f7005efba235c5eb0331ac64ae02ede1804fc66ee2c571f10fe26c66a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe38d2f7005efba235c5eb0331ac64ae02ede1804fc66ee2c571f10fe26c66a2->enter($__internal_fe38d2f7005efba235c5eb0331ac64ae02ede1804fc66ee2c571f10fe26c66a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e404dd120b677168b6a9afc8abd30c4b660afed7dd0d7c70990ee808848f754a->leave($__internal_e404dd120b677168b6a9afc8abd30c4b660afed7dd0d7c70990ee808848f754a_prof);

        
        $__internal_fe38d2f7005efba235c5eb0331ac64ae02ede1804fc66ee2c571f10fe26c66a2->leave($__internal_fe38d2f7005efba235c5eb0331ac64ae02ede1804fc66ee2c571f10fe26c66a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d37d19e636be4cae7553229f31463dfad6f93bfe4040043c86c6110527817769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37d19e636be4cae7553229f31463dfad6f93bfe4040043c86c6110527817769->enter($__internal_d37d19e636be4cae7553229f31463dfad6f93bfe4040043c86c6110527817769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1cb448d4d2794b3cbbf66aefd2b15f4ee9d31f2a5242ca1efa43b2a71e13f175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb448d4d2794b3cbbf66aefd2b15f4ee9d31f2a5242ca1efa43b2a71e13f175->enter($__internal_1cb448d4d2794b3cbbf66aefd2b15f4ee9d31f2a5242ca1efa43b2a71e13f175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_1cb448d4d2794b3cbbf66aefd2b15f4ee9d31f2a5242ca1efa43b2a71e13f175->leave($__internal_1cb448d4d2794b3cbbf66aefd2b15f4ee9d31f2a5242ca1efa43b2a71e13f175_prof);

        
        $__internal_d37d19e636be4cae7553229f31463dfad6f93bfe4040043c86c6110527817769->leave($__internal_d37d19e636be4cae7553229f31463dfad6f93bfe4040043c86c6110527817769_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
