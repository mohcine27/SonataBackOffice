<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_7c9e2dd822998b966c0a201aebaf913e0e2176a77e2b1c868d65424f0f4c96c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_ea69287024df979eaefb65a3df100f91f2306d5e125bccd2d15ab9411940acff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea69287024df979eaefb65a3df100f91f2306d5e125bccd2d15ab9411940acff->enter($__internal_ea69287024df979eaefb65a3df100f91f2306d5e125bccd2d15ab9411940acff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_f72a96e5d09327926e5a8623df673d585bfe94e239cdde6d055d35b362f4805b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72a96e5d09327926e5a8623df673d585bfe94e239cdde6d055d35b362f4805b->enter($__internal_f72a96e5d09327926e5a8623df673d585bfe94e239cdde6d055d35b362f4805b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea69287024df979eaefb65a3df100f91f2306d5e125bccd2d15ab9411940acff->leave($__internal_ea69287024df979eaefb65a3df100f91f2306d5e125bccd2d15ab9411940acff_prof);

        
        $__internal_f72a96e5d09327926e5a8623df673d585bfe94e239cdde6d055d35b362f4805b->leave($__internal_f72a96e5d09327926e5a8623df673d585bfe94e239cdde6d055d35b362f4805b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7f0f3bc2618710f2a2ca63f2b5cfb9c0b68467fa3bba00c09c8ceecbc9fd17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f0f3bc2618710f2a2ca63f2b5cfb9c0b68467fa3bba00c09c8ceecbc9fd17f->enter($__internal_d7f0f3bc2618710f2a2ca63f2b5cfb9c0b68467fa3bba00c09c8ceecbc9fd17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b37f40cb4179d7d20cc0480ff349d6704b1f6a18fe906dbb344da361efd63ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b37f40cb4179d7d20cc0480ff349d6704b1f6a18fe906dbb344da361efd63ca->enter($__internal_4b37f40cb4179d7d20cc0480ff349d6704b1f6a18fe906dbb344da361efd63ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4b37f40cb4179d7d20cc0480ff349d6704b1f6a18fe906dbb344da361efd63ca->leave($__internal_4b37f40cb4179d7d20cc0480ff349d6704b1f6a18fe906dbb344da361efd63ca_prof);

        
        $__internal_d7f0f3bc2618710f2a2ca63f2b5cfb9c0b68467fa3bba00c09c8ceecbc9fd17f->leave($__internal_d7f0f3bc2618710f2a2ca63f2b5cfb9c0b68467fa3bba00c09c8ceecbc9fd17f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
