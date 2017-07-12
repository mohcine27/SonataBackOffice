<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_02fa2a4e8496216a04e51a391cc1eb65e318b001238673b40892fb096794e72f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_0e8803544307fda8b7ddd4a15e007befbd5df72af5d194fc15c28568c5c154c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8803544307fda8b7ddd4a15e007befbd5df72af5d194fc15c28568c5c154c1->enter($__internal_0e8803544307fda8b7ddd4a15e007befbd5df72af5d194fc15c28568c5c154c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_09b42575633f58cbe878ee19bd97baecfd2f3238f5c9e4b18c3d7db5766f5a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b42575633f58cbe878ee19bd97baecfd2f3238f5c9e4b18c3d7db5766f5a9a->enter($__internal_09b42575633f58cbe878ee19bd97baecfd2f3238f5c9e4b18c3d7db5766f5a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8803544307fda8b7ddd4a15e007befbd5df72af5d194fc15c28568c5c154c1->leave($__internal_0e8803544307fda8b7ddd4a15e007befbd5df72af5d194fc15c28568c5c154c1_prof);

        
        $__internal_09b42575633f58cbe878ee19bd97baecfd2f3238f5c9e4b18c3d7db5766f5a9a->leave($__internal_09b42575633f58cbe878ee19bd97baecfd2f3238f5c9e4b18c3d7db5766f5a9a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_693e7e6aafb1b8cfd2e46adbd5024005c27c6df06d4664a7d987cabdbde90351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693e7e6aafb1b8cfd2e46adbd5024005c27c6df06d4664a7d987cabdbde90351->enter($__internal_693e7e6aafb1b8cfd2e46adbd5024005c27c6df06d4664a7d987cabdbde90351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2f3a8e4162e05c3eadb8410c71a3542ba7504e551ee7dec7b49136ca9240f341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3a8e4162e05c3eadb8410c71a3542ba7504e551ee7dec7b49136ca9240f341->enter($__internal_2f3a8e4162e05c3eadb8410c71a3542ba7504e551ee7dec7b49136ca9240f341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2f3a8e4162e05c3eadb8410c71a3542ba7504e551ee7dec7b49136ca9240f341->leave($__internal_2f3a8e4162e05c3eadb8410c71a3542ba7504e551ee7dec7b49136ca9240f341_prof);

        
        $__internal_693e7e6aafb1b8cfd2e46adbd5024005c27c6df06d4664a7d987cabdbde90351->leave($__internal_693e7e6aafb1b8cfd2e46adbd5024005c27c6df06d4664a7d987cabdbde90351_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
