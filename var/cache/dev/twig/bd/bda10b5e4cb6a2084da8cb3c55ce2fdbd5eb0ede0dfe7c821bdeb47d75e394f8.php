<?php

/* AppBundle:Registration:base1.html.twig */
class __TwigTemplate_30a3bfc60e6735e7b02405780efdeda786ca5ab5ae5e73cfbd224a5222507121 extends Twig_Template
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
        $__internal_bccd68e440b15c9c66014b9f8fe3faa7800c50172addd9b18bc9a00505911f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccd68e440b15c9c66014b9f8fe3faa7800c50172addd9b18bc9a00505911f44->enter($__internal_bccd68e440b15c9c66014b9f8fe3faa7800c50172addd9b18bc9a00505911f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:base1.html.twig"));

        $__internal_cff33748b495df140b5653a847fb7f8ffb3b0e87f37097529324fa25f7cb00fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff33748b495df140b5653a847fb7f8ffb3b0e87f37097529324fa25f7cb00fc->enter($__internal_cff33748b495df140b5653a847fb7f8ffb3b0e87f37097529324fa25f7cb00fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link href=\"/css/materialize.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  <link href=\"/css/styles.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
  <nav class=\"\" role=\"navigation\">
    <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"#\" class=\"brand-logo\">Logo</a>
      <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"/register\">Register</a></li>
      </ul>

      <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"/register\">Register</a></li>
      </ul>
      <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
    </div>
  </nav>
  <div class=\"container\">
  ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "  </div>
  <footer class=\"page-footer\">
    <div class=\"footer-copyright\">
      <div class=\"container\">
      Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
  <script src=\"/js/materialize.js\"></script>
  <script src=\"/js/script.js\"></script>
  ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "  </body>
</html>
";
        
        $__internal_bccd68e440b15c9c66014b9f8fe3faa7800c50172addd9b18bc9a00505911f44->leave($__internal_bccd68e440b15c9c66014b9f8fe3faa7800c50172addd9b18bc9a00505911f44_prof);

        
        $__internal_cff33748b495df140b5653a847fb7f8ffb3b0e87f37097529324fa25f7cb00fc->leave($__internal_cff33748b495df140b5653a847fb7f8ffb3b0e87f37097529324fa25f7cb00fc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_40c375901d4529a9b17dc4ee6ebcc1c827156a8ddb9c810b17a55d059b6efb1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c375901d4529a9b17dc4ee6ebcc1c827156a8ddb9c810b17a55d059b6efb1b->enter($__internal_40c375901d4529a9b17dc4ee6ebcc1c827156a8ddb9c810b17a55d059b6efb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_835b5434ede2976ee8dee8391976c37fc9c332717c8a04ff4bfb5c3a9645d06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835b5434ede2976ee8dee8391976c37fc9c332717c8a04ff4bfb5c3a9645d06c->enter($__internal_835b5434ede2976ee8dee8391976c37fc9c332717c8a04ff4bfb5c3a9645d06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_835b5434ede2976ee8dee8391976c37fc9c332717c8a04ff4bfb5c3a9645d06c->leave($__internal_835b5434ede2976ee8dee8391976c37fc9c332717c8a04ff4bfb5c3a9645d06c_prof);

        
        $__internal_40c375901d4529a9b17dc4ee6ebcc1c827156a8ddb9c810b17a55d059b6efb1b->leave($__internal_40c375901d4529a9b17dc4ee6ebcc1c827156a8ddb9c810b17a55d059b6efb1b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_042c4ebadea0ac248a5a9999f66ec6161decdbeb7022c10ad580c890043a24eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042c4ebadea0ac248a5a9999f66ec6161decdbeb7022c10ad580c890043a24eb->enter($__internal_042c4ebadea0ac248a5a9999f66ec6161decdbeb7022c10ad580c890043a24eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5af2a730e8adde34d5589af1ef72bc53ca5a73e5ba1aae0581797ca20c0785fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af2a730e8adde34d5589af1ef72bc53ca5a73e5ba1aae0581797ca20c0785fd->enter($__internal_5af2a730e8adde34d5589af1ef72bc53ca5a73e5ba1aae0581797ca20c0785fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5af2a730e8adde34d5589af1ef72bc53ca5a73e5ba1aae0581797ca20c0785fd->leave($__internal_5af2a730e8adde34d5589af1ef72bc53ca5a73e5ba1aae0581797ca20c0785fd_prof);

        
        $__internal_042c4ebadea0ac248a5a9999f66ec6161decdbeb7022c10ad580c890043a24eb->leave($__internal_042c4ebadea0ac248a5a9999f66ec6161decdbeb7022c10ad580c890043a24eb_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_39ff5d5f5ddbc139935f5da46eace4cc24c645640a384103ef21c685c4e7b5f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ff5d5f5ddbc139935f5da46eace4cc24c645640a384103ef21c685c4e7b5f6->enter($__internal_39ff5d5f5ddbc139935f5da46eace4cc24c645640a384103ef21c685c4e7b5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60dcff4293ebadc920c819d6dbfb1ae2a46d5e6690ce983d918e7957760eed93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dcff4293ebadc920c819d6dbfb1ae2a46d5e6690ce983d918e7957760eed93->enter($__internal_60dcff4293ebadc920c819d6dbfb1ae2a46d5e6690ce983d918e7957760eed93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60dcff4293ebadc920c819d6dbfb1ae2a46d5e6690ce983d918e7957760eed93->leave($__internal_60dcff4293ebadc920c819d6dbfb1ae2a46d5e6690ce983d918e7957760eed93_prof);

        
        $__internal_39ff5d5f5ddbc139935f5da46eace4cc24c645640a384103ef21c685c4e7b5f6->leave($__internal_39ff5d5f5ddbc139935f5da46eace4cc24c645640a384103ef21c685c4e7b5f6_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ee308492ca9f4ef532053a422c4eab604cbe4c98b2f0c0d80cdf882de90d173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee308492ca9f4ef532053a422c4eab604cbe4c98b2f0c0d80cdf882de90d173->enter($__internal_6ee308492ca9f4ef532053a422c4eab604cbe4c98b2f0c0d80cdf882de90d173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce812388954693a83a41105c8eb7d3c13c85c994f4261eb44615106281e012cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce812388954693a83a41105c8eb7d3c13c85c994f4261eb44615106281e012cd->enter($__internal_ce812388954693a83a41105c8eb7d3c13c85c994f4261eb44615106281e012cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ce812388954693a83a41105c8eb7d3c13c85c994f4261eb44615106281e012cd->leave($__internal_ce812388954693a83a41105c8eb7d3c13c85c994f4261eb44615106281e012cd_prof);

        
        $__internal_6ee308492ca9f4ef532053a422c4eab604cbe4c98b2f0c0d80cdf882de90d173->leave($__internal_6ee308492ca9f4ef532053a422c4eab604cbe4c98b2f0c0d80cdf882de90d173_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  133 => 29,  116 => 12,  98 => 6,  86 => 44,  84 => 43,  69 => 30,  67 => 29,  47 => 13,  45 => 12,  36 => 6,  29 => 1,);
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
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
  <title>{% block title %}Welcome!{% endblock %}</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link href=\"/css/materialize.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  <link href=\"/css/styles.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  {% block stylesheets %}{% endblock %}
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
  <nav class=\"\" role=\"navigation\">
    <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"#\" class=\"brand-logo\">Logo</a>
      <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"/register\">Register</a></li>
      </ul>

      <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"/register\">Register</a></li>
      </ul>
      <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
    </div>
  </nav>
  <div class=\"container\">
  {% block body %}{% endblock %}
  </div>
  <footer class=\"page-footer\">
    <div class=\"footer-copyright\">
      <div class=\"container\">
      Made by <a class=\"orange-text text-lighten-3\" href=\"http://materializecss.com\">Materialize</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
  <script src=\"/js/materialize.js\"></script>
  <script src=\"/js/script.js\"></script>
  {% block javascripts %}{% endblock %}
  </body>
</html>
", "AppBundle:Registration:base1.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Registration\\base1.html.twig");
    }
}
