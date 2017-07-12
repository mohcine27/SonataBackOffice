<?php

/* SonataAdminBundle:Block:block_rss_dashboard.html.twig */
class __TwigTemplate_1f29e95250b3b167ee812cad11857a3498220fdb1f66ee26ebe786dd94a0cb65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0033a2ac6b6dd9c8774650ae9b54600fd114f4d56743e9bc3ef6e67876d62999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0033a2ac6b6dd9c8774650ae9b54600fd114f4d56743e9bc3ef6e67876d62999->enter($__internal_0033a2ac6b6dd9c8774650ae9b54600fd114f4d56743e9bc3ef6e67876d62999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $__internal_164de9720b689bc5f9d31e584d1a91437cb7a23e325cec6091d5e1d7cba05088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164de9720b689bc5f9d31e584d1a91437cb7a23e325cec6091d5e1d7cba05088->enter($__internal_164de9720b689bc5f9d31e584d1a91437cb7a23e325cec6091d5e1d7cba05088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0033a2ac6b6dd9c8774650ae9b54600fd114f4d56743e9bc3ef6e67876d62999->leave($__internal_0033a2ac6b6dd9c8774650ae9b54600fd114f4d56743e9bc3ef6e67876d62999_prof);

        
        $__internal_164de9720b689bc5f9d31e584d1a91437cb7a23e325cec6091d5e1d7cba05088->leave($__internal_164de9720b689bc5f9d31e584d1a91437cb7a23e325cec6091d5e1d7cba05088_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5f8d690d48300d93289296e854fcb7c29db8ff41399ac5c55e58488e28373e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8d690d48300d93289296e854fcb7c29db8ff41399ac5c55e58488e28373e58->enter($__internal_5f8d690d48300d93289296e854fcb7c29db8ff41399ac5c55e58488e28373e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_77cd609222e9801a02a45eafde9ed74be49be78454c91a6e845cdfad8b4ce6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cd609222e9801a02a45eafde9ed74be49be78454c91a6e845cdfad8b4ce6a1->enter($__internal_77cd609222e9801a02a45eafde9ed74be49be78454c91a6e845cdfad8b4ce6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_77cd609222e9801a02a45eafde9ed74be49be78454c91a6e845cdfad8b4ce6a1->leave($__internal_77cd609222e9801a02a45eafde9ed74be49be78454c91a6e845cdfad8b4ce6a1_prof);

        
        $__internal_5f8d690d48300d93289296e854fcb7c29db8ff41399ac5c55e58488e28373e58->leave($__internal_5f8d690d48300d93289296e854fcb7c29db8ff41399ac5c55e58488e28373e58_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  84 => 27,  76 => 24,  72 => 23,  65 => 22,  60 => 21,  53 => 17,  49 => 15,  40 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends \"SonataBlockBundle:Block:block_core_rss.html.twig\" %}

{% block block %}
    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ settings.title }}</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            {% for feed in feeds %}
                <a class=\"list-group-item\" href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">
                    <strong>{{ feed.title }}</strong>
                    <div>{{ feed.description|raw }}</div>
                </a>
            {% else %}
                <div class=\"list-group-item\">No feeds available.</div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Block\\block_rss_dashboard.html.twig");
    }
}
