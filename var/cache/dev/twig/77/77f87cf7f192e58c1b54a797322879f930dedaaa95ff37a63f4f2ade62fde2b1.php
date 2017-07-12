<?php

/* AppBundle:Registration:register.html.twig */
class __TwigTemplate_9a9b9646010ef421b1250a79e19ee713c6c5c7096f55a88e6ea4364ddb0eec5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07cbdfb0489161a78f5a7e1de756e6192c2c3a037a19dd949fdca08020581803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cbdfb0489161a78f5a7e1de756e6192c2c3a037a19dd949fdca08020581803->enter($__internal_07cbdfb0489161a78f5a7e1de756e6192c2c3a037a19dd949fdca08020581803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:register.html.twig"));

        $__internal_da40b2b58d7bae2a21e7dd31ca57a46df53df84d5a120c97f5b56104c10ed40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da40b2b58d7bae2a21e7dd31ca57a46df53df84d5a120c97f5b56104c10ed40a->enter($__internal_da40b2b58d7bae2a21e7dd31ca57a46df53df84d5a120c97f5b56104c10ed40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07cbdfb0489161a78f5a7e1de756e6192c2c3a037a19dd949fdca08020581803->leave($__internal_07cbdfb0489161a78f5a7e1de756e6192c2c3a037a19dd949fdca08020581803_prof);

        
        $__internal_da40b2b58d7bae2a21e7dd31ca57a46df53df84d5a120c97f5b56104c10ed40a->leave($__internal_da40b2b58d7bae2a21e7dd31ca57a46df53df84d5a120c97f5b56104c10ed40a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc0034fd3c53915c9adfc6f16b146c53a5ce7075a2315d07abcd00a92141c189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0034fd3c53915c9adfc6f16b146c53a5ce7075a2315d07abcd00a92141c189->enter($__internal_cc0034fd3c53915c9adfc6f16b146c53a5ce7075a2315d07abcd00a92141c189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_992728b8f81ea7911940df2dea0dd96c157b3c07a2c47e69de35338e1c55d560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992728b8f81ea7911940df2dea0dd96c157b3c07a2c47e69de35338e1c55d560->enter($__internal_992728b8f81ea7911940df2dea0dd96c157b3c07a2c47e69de35338e1c55d560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h4 class=\"card-panel teal lighten-2 white-head\">S'inscrire</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            ";
        // line 10
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "AppBundle:Registration:register.html.twig", 10)->display($context);
        // line 11
        echo "        </div>
    </div>
";
        
        $__internal_992728b8f81ea7911940df2dea0dd96c157b3c07a2c47e69de35338e1c55d560->leave($__internal_992728b8f81ea7911940df2dea0dd96c157b3c07a2c47e69de35338e1c55d560_prof);

        
        $__internal_cc0034fd3c53915c9adfc6f16b146c53a5ce7075a2315d07abcd00a92141c189->leave($__internal_cc0034fd3c53915c9adfc6f16b146c53a5ce7075a2315d07abcd00a92141c189_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h4 class=\"card-panel teal lighten-2 white-head\">S'inscrire</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
        </div>
    </div>
{% endblock body %}
", "AppBundle:Registration:register.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
