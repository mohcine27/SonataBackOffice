<?php

/* AppBundle:Group:list.html.twig */
class __TwigTemplate_befb3b0546ea05cc1b773aabdf81dc9d89286e0eaa15c2e3fccf88564780bcc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b8e626d59b25020316976242e4211d51e15b79f12615a1c2c1c553e62a7507e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8e626d59b25020316976242e4211d51e15b79f12615a1c2c1c553e62a7507e->enter($__internal_1b8e626d59b25020316976242e4211d51e15b79f12615a1c2c1c553e62a7507e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:list.html.twig"));

        $__internal_27a37b77d29d037ec7c559d2173ed9c30a964a221d2725c88461319af7bc0923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a37b77d29d037ec7c559d2173ed9c30a964a221d2725c88461319af7bc0923->enter($__internal_27a37b77d29d037ec7c559d2173ed9c30a964a221d2725c88461319af7bc0923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b8e626d59b25020316976242e4211d51e15b79f12615a1c2c1c553e62a7507e->leave($__internal_1b8e626d59b25020316976242e4211d51e15b79f12615a1c2c1c553e62a7507e_prof);

        
        $__internal_27a37b77d29d037ec7c559d2173ed9c30a964a221d2725c88461319af7bc0923->leave($__internal_27a37b77d29d037ec7c559d2173ed9c30a964a221d2725c88461319af7bc0923_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce07438a0aa2846befd4f68c9543daa90fdf296ffa68d76dbd25e83ca1d6618d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce07438a0aa2846befd4f68c9543daa90fdf296ffa68d76dbd25e83ca1d6618d->enter($__internal_ce07438a0aa2846befd4f68c9543daa90fdf296ffa68d76dbd25e83ca1d6618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b799f872eaf7ce3c5ec5ce044f61f31c827a6c7e3eab1f515e6884ee3c079bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b799f872eaf7ce3c5ec5ce044f61f31c827a6c7e3eab1f515e6884ee3c079bb->enter($__internal_1b799f872eaf7ce3c5ec5ce044f61f31c827a6c7e3eab1f515e6884ee3c079bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_1b799f872eaf7ce3c5ec5ce044f61f31c827a6c7e3eab1f515e6884ee3c079bb->leave($__internal_1b799f872eaf7ce3c5ec5ce044f61f31c827a6c7e3eab1f515e6884ee3c079bb_prof);

        
        $__internal_ce07438a0aa2846befd4f68c9543daa90fdf296ffa68d76dbd25e83ca1d6618d->leave($__internal_ce07438a0aa2846befd4f68c9543daa90fdf296ffa68d76dbd25e83ca1d6618d_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e1d7b583c17755435b88c870aa1fad1a44eab0aa364a397afe19a08d667f679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1d7b583c17755435b88c870aa1fad1a44eab0aa364a397afe19a08d667f679->enter($__internal_3e1d7b583c17755435b88c870aa1fad1a44eab0aa364a397afe19a08d667f679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_328c795d83b4f60d1526a350fa1b84a443a4327c8d80eef5c98d97d48a59f7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328c795d83b4f60d1526a350fa1b84a443a4327c8d80eef5c98d97d48a59f7d4->enter($__internal_328c795d83b4f60d1526a350fa1b84a443a4327c8d80eef5c98d97d48a59f7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "\t";
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "AppBundle:Group:list.html.twig", 5)->display($context);
        
        $__internal_328c795d83b4f60d1526a350fa1b84a443a4327c8d80eef5c98d97d48a59f7d4->leave($__internal_328c795d83b4f60d1526a350fa1b84a443a4327c8d80eef5c98d97d48a59f7d4_prof);

        
        $__internal_3e1d7b583c17755435b88c870aa1fad1a44eab0aa364a397afe19a08d667f679->leave($__internal_3e1d7b583c17755435b88c870aa1fad1a44eab0aa364a397afe19a08d667f679_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
{% block fos_user_content %}
\t{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
{% endblock body %}", "AppBundle:Group:list.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
