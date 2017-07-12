<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ce69502900e3d2ce536a8aaff4b866e8463240e8b75b0fad1326d9f1eabe2b4f extends Twig_Template
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
        $__internal_147bb5383b0dafb081436e8a239b888ce6c5fe0e3f43a9f2fb86da03af255a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147bb5383b0dafb081436e8a239b888ce6c5fe0e3f43a9f2fb86da03af255a8a->enter($__internal_147bb5383b0dafb081436e8a239b888ce6c5fe0e3f43a9f2fb86da03af255a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_37a7e00ff286b1c93c56b7cdb6dbf9288e7dff88f82ff99dc4cd57436c9853cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a7e00ff286b1c93c56b7cdb6dbf9288e7dff88f82ff99dc4cd57436c9853cf->enter($__internal_37a7e00ff286b1c93c56b7cdb6dbf9288e7dff88f82ff99dc4cd57436c9853cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_147bb5383b0dafb081436e8a239b888ce6c5fe0e3f43a9f2fb86da03af255a8a->leave($__internal_147bb5383b0dafb081436e8a239b888ce6c5fe0e3f43a9f2fb86da03af255a8a_prof);

        
        $__internal_37a7e00ff286b1c93c56b7cdb6dbf9288e7dff88f82ff99dc4cd57436c9853cf->leave($__internal_37a7e00ff286b1c93c56b7cdb6dbf9288e7dff88f82ff99dc4cd57436c9853cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
