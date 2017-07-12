<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3f0b14384b85a12443510de53740bd4999eef93df7d6d39703be168893d2cfd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e510a650b56f31658369b9dc3d11e3befa15ee625aafd44763dfd637b21f1be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e510a650b56f31658369b9dc3d11e3befa15ee625aafd44763dfd637b21f1be1->enter($__internal_e510a650b56f31658369b9dc3d11e3befa15ee625aafd44763dfd637b21f1be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9e17d21fef6446219238130ef72a158b40ae8c9d7e991092300f091fe8c6eff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e17d21fef6446219238130ef72a158b40ae8c9d7e991092300f091fe8c6eff0->enter($__internal_9e17d21fef6446219238130ef72a158b40ae8c9d7e991092300f091fe8c6eff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e510a650b56f31658369b9dc3d11e3befa15ee625aafd44763dfd637b21f1be1->leave($__internal_e510a650b56f31658369b9dc3d11e3befa15ee625aafd44763dfd637b21f1be1_prof);

        
        $__internal_9e17d21fef6446219238130ef72a158b40ae8c9d7e991092300f091fe8c6eff0->leave($__internal_9e17d21fef6446219238130ef72a158b40ae8c9d7e991092300f091fe8c6eff0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1473063e8f9709c76c17958af40c3aaa40881af612103ce6f7d856fa8ab6b967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1473063e8f9709c76c17958af40c3aaa40881af612103ce6f7d856fa8ab6b967->enter($__internal_1473063e8f9709c76c17958af40c3aaa40881af612103ce6f7d856fa8ab6b967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60622ff597719f2f507228d46286796e9e339693ebabfd783f52e1a0ffad0a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60622ff597719f2f507228d46286796e9e339693ebabfd783f52e1a0ffad0a37->enter($__internal_60622ff597719f2f507228d46286796e9e339693ebabfd783f52e1a0ffad0a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_60622ff597719f2f507228d46286796e9e339693ebabfd783f52e1a0ffad0a37->leave($__internal_60622ff597719f2f507228d46286796e9e339693ebabfd783f52e1a0ffad0a37_prof);

        
        $__internal_1473063e8f9709c76c17958af40c3aaa40881af612103ce6f7d856fa8ab6b967->leave($__internal_1473063e8f9709c76c17958af40c3aaa40881af612103ce6f7d856fa8ab6b967_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09a738df162459b42304b62dab08acfe21a61215db07fea9d372e88c356039cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a738df162459b42304b62dab08acfe21a61215db07fea9d372e88c356039cd->enter($__internal_09a738df162459b42304b62dab08acfe21a61215db07fea9d372e88c356039cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e54a9d6e2f458f983aa0472a9066fca7176e70559b1c7771c055b60e985bd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e54a9d6e2f458f983aa0472a9066fca7176e70559b1c7771c055b60e985bd4c->enter($__internal_4e54a9d6e2f458f983aa0472a9066fca7176e70559b1c7771c055b60e985bd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4e54a9d6e2f458f983aa0472a9066fca7176e70559b1c7771c055b60e985bd4c->leave($__internal_4e54a9d6e2f458f983aa0472a9066fca7176e70559b1c7771c055b60e985bd4c_prof);

        
        $__internal_09a738df162459b42304b62dab08acfe21a61215db07fea9d372e88c356039cd->leave($__internal_09a738df162459b42304b62dab08acfe21a61215db07fea9d372e88c356039cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
