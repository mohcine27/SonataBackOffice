<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_d8afecf64051166ce242a406700f84a862dff1ccf382baffcd850e9ff03381c2 extends Twig_Template
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
        $__internal_18cdc26cd2201c4b5b22d7e22e4aa4bc1ff38a1cc19dfd6c00ee637185bb3188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18cdc26cd2201c4b5b22d7e22e4aa4bc1ff38a1cc19dfd6c00ee637185bb3188->enter($__internal_18cdc26cd2201c4b5b22d7e22e4aa4bc1ff38a1cc19dfd6c00ee637185bb3188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_9ddc1933910591993f7608b73cc479dc67db737d2392386d324eaf71c242a342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddc1933910591993f7608b73cc479dc67db737d2392386d324eaf71c242a342->enter($__internal_9ddc1933910591993f7608b73cc479dc67db737d2392386d324eaf71c242a342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_18cdc26cd2201c4b5b22d7e22e4aa4bc1ff38a1cc19dfd6c00ee637185bb3188->leave($__internal_18cdc26cd2201c4b5b22d7e22e4aa4bc1ff38a1cc19dfd6c00ee637185bb3188_prof);

        
        $__internal_9ddc1933910591993f7608b73cc479dc67db737d2392386d324eaf71c242a342->leave($__internal_9ddc1933910591993f7608b73cc479dc67db737d2392386d324eaf71c242a342_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
