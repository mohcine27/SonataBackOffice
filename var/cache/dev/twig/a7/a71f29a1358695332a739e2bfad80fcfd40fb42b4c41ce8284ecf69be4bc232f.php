<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_28b2a0abd45b9db6efc8e2bb70e3feb97f2a0350ecc78cedcf497b766ce7661b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30a7bd89ba9fa4193c5b75cd9f5a5bbd7ffe178ec9cc951fe50ae828c0f3a5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a7bd89ba9fa4193c5b75cd9f5a5bbd7ffe178ec9cc951fe50ae828c0f3a5fd->enter($__internal_30a7bd89ba9fa4193c5b75cd9f5a5bbd7ffe178ec9cc951fe50ae828c0f3a5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_c803611f2df40e7390c675363d9687725853cae4ef5f204f622e5eb43213d425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c803611f2df40e7390c675363d9687725853cae4ef5f204f622e5eb43213d425->enter($__internal_c803611f2df40e7390c675363d9687725853cae4ef5f204f622e5eb43213d425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a7bd89ba9fa4193c5b75cd9f5a5bbd7ffe178ec9cc951fe50ae828c0f3a5fd->leave($__internal_30a7bd89ba9fa4193c5b75cd9f5a5bbd7ffe178ec9cc951fe50ae828c0f3a5fd_prof);

        
        $__internal_c803611f2df40e7390c675363d9687725853cae4ef5f204f622e5eb43213d425->leave($__internal_c803611f2df40e7390c675363d9687725853cae4ef5f204f622e5eb43213d425_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_05ac55fd89c1ec54f62a04591a8754e97bc1bd399a5a5bd2ad38e1605aa5a137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ac55fd89c1ec54f62a04591a8754e97bc1bd399a5a5bd2ad38e1605aa5a137->enter($__internal_05ac55fd89c1ec54f62a04591a8754e97bc1bd399a5a5bd2ad38e1605aa5a137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b0eab08e0c81e68dbce0b82ead702285f93c1435b9bf09d2486120498eaa7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0eab08e0c81e68dbce0b82ead702285f93c1435b9bf09d2486120498eaa7b4->enter($__internal_7b0eab08e0c81e68dbce0b82ead702285f93c1435b9bf09d2486120498eaa7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Application";
        
        $__internal_7b0eab08e0c81e68dbce0b82ead702285f93c1435b9bf09d2486120498eaa7b4->leave($__internal_7b0eab08e0c81e68dbce0b82ead702285f93c1435b9bf09d2486120498eaa7b4_prof);

        
        $__internal_05ac55fd89c1ec54f62a04591a8754e97bc1bd399a5a5bd2ad38e1605aa5a137->leave($__internal_05ac55fd89c1ec54f62a04591a8754e97bc1bd399a5a5bd2ad38e1605aa5a137_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_8a76042de0ce2563b980226a37471559cfe280a9767867d412289d0b91f382b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a76042de0ce2563b980226a37471559cfe280a9767867d412289d0b91f382b1->enter($__internal_8a76042de0ce2563b980226a37471559cfe280a9767867d412289d0b91f382b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_62ea779dcc688004e0918511447953eb6330eb8a50bab45e1e40449c292980b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ea779dcc688004e0918511447953eb6330eb8a50bab45e1e40449c292980b0->enter($__internal_62ea779dcc688004e0918511447953eb6330eb8a50bab45e1e40449c292980b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_62ea779dcc688004e0918511447953eb6330eb8a50bab45e1e40449c292980b0->leave($__internal_62ea779dcc688004e0918511447953eb6330eb8a50bab45e1e40449c292980b0_prof);

        
        $__internal_8a76042de0ce2563b980226a37471559cfe280a9767867d412289d0b91f382b1->leave($__internal_8a76042de0ce2563b980226a37471559cfe280a9767867d412289d0b91f382b1_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d6a8eb48bbad6a70e573ed7df050b73fd0bda4c7f2899de0527d10a03cd756f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6a8eb48bbad6a70e573ed7df050b73fd0bda4c7f2899de0527d10a03cd756f->enter($__internal_1d6a8eb48bbad6a70e573ed7df050b73fd0bda4c7f2899de0527d10a03cd756f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fa16fb919e9817339026e1e66f7445c3fc1366c5ebdf6e5f6932f2130c9b5a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa16fb919e9817339026e1e66f7445c3fc1366c5ebdf6e5f6932f2130c9b5a56->enter($__internal_fa16fb919e9817339026e1e66f7445c3fc1366c5ebdf6e5f6932f2130c9b5a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_fa16fb919e9817339026e1e66f7445c3fc1366c5ebdf6e5f6932f2130c9b5a56->leave($__internal_fa16fb919e9817339026e1e66f7445c3fc1366c5ebdf6e5f6932f2130c9b5a56_prof);

        
        $__internal_1d6a8eb48bbad6a70e573ed7df050b73fd0bda4c7f2899de0527d10a03cd756f->leave($__internal_1d6a8eb48bbad6a70e573ed7df050b73fd0bda4c7f2899de0527d10a03cd756f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 5,  60 => 4,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Demo Application{% endblock %}

{% block content %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}", "FOSUserBundle::layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\layout.html.twig");
    }
}
