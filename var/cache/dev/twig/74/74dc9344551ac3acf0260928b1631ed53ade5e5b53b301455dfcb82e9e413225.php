<?php

/* base.html.twig */
class __TwigTemplate_04eeec15815d57bf176322c0884e82aa1cef41f719e58317120962199026e27f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2a96c16cb62236968aed835a79baa7d88834b8426543cbff644d1b09d09e8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a96c16cb62236968aed835a79baa7d88834b8426543cbff644d1b09d09e8b3->enter($__internal_b2a96c16cb62236968aed835a79baa7d88834b8426543cbff644d1b09d09e8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4f7bc67f22b72de797c84d0541f142d29300f1ccb36afbbb7fd3a10a559929d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7bc67f22b72de797c84d0541f142d29300f1ccb36afbbb7fd3a10a559929d1->enter($__internal_4f7bc67f22b72de797c84d0541f142d29300f1ccb36afbbb7fd3a10a559929d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b2a96c16cb62236968aed835a79baa7d88834b8426543cbff644d1b09d09e8b3->leave($__internal_b2a96c16cb62236968aed835a79baa7d88834b8426543cbff644d1b09d09e8b3_prof);

        
        $__internal_4f7bc67f22b72de797c84d0541f142d29300f1ccb36afbbb7fd3a10a559929d1->leave($__internal_4f7bc67f22b72de797c84d0541f142d29300f1ccb36afbbb7fd3a10a559929d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7c741a6b217744281d1959f26bad2c5f241d328c072e5d19c5de085e897d17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c741a6b217744281d1959f26bad2c5f241d328c072e5d19c5de085e897d17d->enter($__internal_b7c741a6b217744281d1959f26bad2c5f241d328c072e5d19c5de085e897d17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_709aee17a663dccc0858bfe1d26797739187ae264ebb8ccf9d3af3260f235dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709aee17a663dccc0858bfe1d26797739187ae264ebb8ccf9d3af3260f235dd2->enter($__internal_709aee17a663dccc0858bfe1d26797739187ae264ebb8ccf9d3af3260f235dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_709aee17a663dccc0858bfe1d26797739187ae264ebb8ccf9d3af3260f235dd2->leave($__internal_709aee17a663dccc0858bfe1d26797739187ae264ebb8ccf9d3af3260f235dd2_prof);

        
        $__internal_b7c741a6b217744281d1959f26bad2c5f241d328c072e5d19c5de085e897d17d->leave($__internal_b7c741a6b217744281d1959f26bad2c5f241d328c072e5d19c5de085e897d17d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d99ae917251d8fb29aeaebb2a3477bb6a5b3c6d6f367cb8feabe0888964a44b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99ae917251d8fb29aeaebb2a3477bb6a5b3c6d6f367cb8feabe0888964a44b9->enter($__internal_d99ae917251d8fb29aeaebb2a3477bb6a5b3c6d6f367cb8feabe0888964a44b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_df504ac1cab451c9e0e7fd129ad18ea447a3dffc0ea8776cd4ade098d299df4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df504ac1cab451c9e0e7fd129ad18ea447a3dffc0ea8776cd4ade098d299df4f->enter($__internal_df504ac1cab451c9e0e7fd129ad18ea447a3dffc0ea8776cd4ade098d299df4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_df504ac1cab451c9e0e7fd129ad18ea447a3dffc0ea8776cd4ade098d299df4f->leave($__internal_df504ac1cab451c9e0e7fd129ad18ea447a3dffc0ea8776cd4ade098d299df4f_prof);

        
        $__internal_d99ae917251d8fb29aeaebb2a3477bb6a5b3c6d6f367cb8feabe0888964a44b9->leave($__internal_d99ae917251d8fb29aeaebb2a3477bb6a5b3c6d6f367cb8feabe0888964a44b9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_02de02ae330f2159265f8f95c9bf09d5c159e20c635486fff61f27274620e123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02de02ae330f2159265f8f95c9bf09d5c159e20c635486fff61f27274620e123->enter($__internal_02de02ae330f2159265f8f95c9bf09d5c159e20c635486fff61f27274620e123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e394c5b8fd13b0ada93a13733df451df5cd74abf28aff63f44a381f89638accc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e394c5b8fd13b0ada93a13733df451df5cd74abf28aff63f44a381f89638accc->enter($__internal_e394c5b8fd13b0ada93a13733df451df5cd74abf28aff63f44a381f89638accc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e394c5b8fd13b0ada93a13733df451df5cd74abf28aff63f44a381f89638accc->leave($__internal_e394c5b8fd13b0ada93a13733df451df5cd74abf28aff63f44a381f89638accc_prof);

        
        $__internal_02de02ae330f2159265f8f95c9bf09d5c159e20c635486fff61f27274620e123->leave($__internal_02de02ae330f2159265f8f95c9bf09d5c159e20c635486fff61f27274620e123_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9e6506127668f999cd8f2dba9e62d22a2f1d75a4d801ea795b6caf7a0bf9ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e6506127668f999cd8f2dba9e62d22a2f1d75a4d801ea795b6caf7a0bf9ff6->enter($__internal_d9e6506127668f999cd8f2dba9e62d22a2f1d75a4d801ea795b6caf7a0bf9ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_72556fa3e08fa3f6c06d53e91596011a858627981688703c5f94f1b58bc9620a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72556fa3e08fa3f6c06d53e91596011a858627981688703c5f94f1b58bc9620a->enter($__internal_72556fa3e08fa3f6c06d53e91596011a858627981688703c5f94f1b58bc9620a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_72556fa3e08fa3f6c06d53e91596011a858627981688703c5f94f1b58bc9620a->leave($__internal_72556fa3e08fa3f6c06d53e91596011a858627981688703c5f94f1b58bc9620a_prof);

        
        $__internal_d9e6506127668f999cd8f2dba9e62d22a2f1d75a4d801ea795b6caf7a0bf9ff6->leave($__internal_d9e6506127668f999cd8f2dba9e62d22a2f1d75a4d801ea795b6caf7a0bf9ff6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\app\\Resources\\views\\base.html.twig");
    }
}
