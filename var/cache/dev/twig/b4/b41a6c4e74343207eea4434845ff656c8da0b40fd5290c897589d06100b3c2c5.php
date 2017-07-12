<?php

/* AppBundle:Resetting:request_content.html.twig */
class __TwigTemplate_52e25e5731d749549e1a385d7bdcfe6a2f1a332934b23a96c39a7343fe18cf97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d8c0200e0a7134afe5f6e4b828ad24a3517276d8acdb8f1f8955c8e4ec84cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d8c0200e0a7134afe5f6e4b828ad24a3517276d8acdb8f1f8955c8e4ec84cd4->enter($__internal_6d8c0200e0a7134afe5f6e4b828ad24a3517276d8acdb8f1f8955c8e4ec84cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:request_content.html.twig"));

        $__internal_2ee2dd29b1fc6c8a49b2accf5dc4d5d86c1a5140c2c49215604ad302596b87fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee2dd29b1fc6c8a49b2accf5dc4d5d86c1a5140c2c49215604ad302596b87fe->enter($__internal_2ee2dd29b1fc6c8a49b2accf5dc4d5d86c1a5140c2c49215604ad302596b87fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>       
        <label for=\"username\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_6d8c0200e0a7134afe5f6e4b828ad24a3517276d8acdb8f1f8955c8e4ec84cd4->leave($__internal_6d8c0200e0a7134afe5f6e4b828ad24a3517276d8acdb8f1f8955c8e4ec84cd4_prof);

        
        $__internal_2ee2dd29b1fc6c8a49b2accf5dc4d5d86c1a5140c2c49215604ad302596b87fe->leave($__internal_2ee2dd29b1fc6c8a49b2accf5dc4d5d86c1a5140c2c49215604ad302596b87fe_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  31 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>       
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "AppBundle:Resetting:request_content.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
