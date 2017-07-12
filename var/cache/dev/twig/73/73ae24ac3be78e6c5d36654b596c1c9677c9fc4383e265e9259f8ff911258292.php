<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c93a62d6eb9b9cd02c38b816ff99ddca21e2162fbc3b719a5786859fe711d080 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_190690a0e997b73eb8ffb02c32a83fa33b3bf0eb222db96c4ba73de63c0d0f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190690a0e997b73eb8ffb02c32a83fa33b3bf0eb222db96c4ba73de63c0d0f29->enter($__internal_190690a0e997b73eb8ffb02c32a83fa33b3bf0eb222db96c4ba73de63c0d0f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e8042a984a245a6076989bf43eadab4fa54fb718dde071de63f32cf3f1e48fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8042a984a245a6076989bf43eadab4fa54fb718dde071de63f32cf3f1e48fd2->enter($__internal_e8042a984a245a6076989bf43eadab4fa54fb718dde071de63f32cf3f1e48fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_190690a0e997b73eb8ffb02c32a83fa33b3bf0eb222db96c4ba73de63c0d0f29->leave($__internal_190690a0e997b73eb8ffb02c32a83fa33b3bf0eb222db96c4ba73de63c0d0f29_prof);

        
        $__internal_e8042a984a245a6076989bf43eadab4fa54fb718dde071de63f32cf3f1e48fd2->leave($__internal_e8042a984a245a6076989bf43eadab4fa54fb718dde071de63f32cf3f1e48fd2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_00f8b73636cc027788306e3fbe9a3920e8706c05e97320af13148834944d886b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f8b73636cc027788306e3fbe9a3920e8706c05e97320af13148834944d886b->enter($__internal_00f8b73636cc027788306e3fbe9a3920e8706c05e97320af13148834944d886b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_afde7b2ebab6ae34014ccc3bfa666805157dc4910ac96965fbffb0f4a0a0399e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afde7b2ebab6ae34014ccc3bfa666805157dc4910ac96965fbffb0f4a0a0399e->enter($__internal_afde7b2ebab6ae34014ccc3bfa666805157dc4910ac96965fbffb0f4a0a0399e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_afde7b2ebab6ae34014ccc3bfa666805157dc4910ac96965fbffb0f4a0a0399e->leave($__internal_afde7b2ebab6ae34014ccc3bfa666805157dc4910ac96965fbffb0f4a0a0399e_prof);

        
        $__internal_00f8b73636cc027788306e3fbe9a3920e8706c05e97320af13148834944d886b->leave($__internal_00f8b73636cc027788306e3fbe9a3920e8706c05e97320af13148834944d886b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_21031fe11b9978847aecc4b3d843027fab01f9887e0f167c9533dfa087a703f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21031fe11b9978847aecc4b3d843027fab01f9887e0f167c9533dfa087a703f6->enter($__internal_21031fe11b9978847aecc4b3d843027fab01f9887e0f167c9533dfa087a703f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce302f20402dc0c1f850176407d6ef0955adf550d9e91862cdcea3b389863f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce302f20402dc0c1f850176407d6ef0955adf550d9e91862cdcea3b389863f77->enter($__internal_ce302f20402dc0c1f850176407d6ef0955adf550d9e91862cdcea3b389863f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ce302f20402dc0c1f850176407d6ef0955adf550d9e91862cdcea3b389863f77->leave($__internal_ce302f20402dc0c1f850176407d6ef0955adf550d9e91862cdcea3b389863f77_prof);

        
        $__internal_21031fe11b9978847aecc4b3d843027fab01f9887e0f167c9533dfa087a703f6->leave($__internal_21031fe11b9978847aecc4b3d843027fab01f9887e0f167c9533dfa087a703f6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_083c31803eedd2bbcbf6f0d9e5b9839674c898253e7a08fd5d6a1e33d9d26906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083c31803eedd2bbcbf6f0d9e5b9839674c898253e7a08fd5d6a1e33d9d26906->enter($__internal_083c31803eedd2bbcbf6f0d9e5b9839674c898253e7a08fd5d6a1e33d9d26906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7baa126ca2f43f64b88ada56ce8f3073a3e628e90d3d8e2856f64f07eed9c4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7baa126ca2f43f64b88ada56ce8f3073a3e628e90d3d8e2856f64f07eed9c4c6->enter($__internal_7baa126ca2f43f64b88ada56ce8f3073a3e628e90d3d8e2856f64f07eed9c4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7baa126ca2f43f64b88ada56ce8f3073a3e628e90d3d8e2856f64f07eed9c4c6->leave($__internal_7baa126ca2f43f64b88ada56ce8f3073a3e628e90d3d8e2856f64f07eed9c4c6_prof);

        
        $__internal_083c31803eedd2bbcbf6f0d9e5b9839674c898253e7a08fd5d6a1e33d9d26906->leave($__internal_083c31803eedd2bbcbf6f0d9e5b9839674c898253e7a08fd5d6a1e33d9d26906_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
