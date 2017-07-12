<?php

/* EasyAdminBundle:default/includes:_select2_widget.html.twig */
class __TwigTemplate_d1b38544b2cb110a2bd11687f904fa01d8e151176a22ff612dc91f6bbaaac291 extends Twig_Template
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
        $__internal_253965319a88d159761b368aab8727e92001519bfd4ec52c7432279745c5274e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253965319a88d159761b368aab8727e92001519bfd4ec52c7432279745c5274e->enter($__internal_253965319a88d159761b368aab8727e92001519bfd4ec52c7432279745c5274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_select2_widget.html.twig"));

        $__internal_b705be2932d1e8929c7c67b6920354ce663e16c995f1b4f7a0bd6c8a4c8abd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b705be2932d1e8929c7c67b6920354ce663e16c995f1b4f7a0bd6c8a4c8abd33->enter($__internal_b705be2932d1e8929c7c67b6920354ce663e16c995f1b4f7a0bd6c8a4c8abd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default/includes:_select2_widget.html.twig"));

        // line 1
        $context["_select2_locales"] = array(0 => "ar", 1 => "az", 2 => "bg", 3 => "ca", 4 => "cs", 5 => "da", 6 => "de", 7 => "el", 8 => "en", 9 => "es", 10 => "et", 11 => "eu", 12 => "fa", 13 => "fi", 14 => "fr", 15 => "gl", 16 => "he", 17 => "hi", 18 => "hr", 19 => "hu", 20 => "id", 21 => "is", 22 => "it", 23 => "ja", 24 => "km", 25 => "ko", 26 => "lt", 27 => "lv", 28 => "mk", 29 => "ms", 30 => "nb", 31 => "nl", 32 => "pl", 33 => "pt-BR", 34 => "pt", 35 => "ro", 36 => "ru", 37 => "sk", 38 => "sr-Cyrl", 39 => "sr", 40 => "sv", 41 => "th", 42 => "tr", 43 => "uk", 44 => "vi", 45 => "zh-CN", 46 => "zh-TW");
        // line 2
        $context["_app_language"] = twig_first($this->env, twig_split_filter($this->env, twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "-")), "_"));
        // line 3
        $context["_select2_locale"] = ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), (isset($context["_select2_locales"]) ? $context["_select2_locales"] : $this->getContext($context, "_select2_locales")))) ? ($this->getAttribute($this->getAttribute(        // line 4
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())) : (((twig_in_filter(        // line 5
(isset($context["_app_language"]) ? $context["_app_language"] : $this->getContext($context, "_app_language")), (isset($context["_select2_locales"]) ? $context["_select2_locales"] : $this->getContext($context, "_select2_locales")))) ? ((isset($context["_app_language"]) ? $context["_app_language"] : $this->getContext($context, "_app_language"))) : ("en"))));
        // line 7
        echo "
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/easyadmin/javascript/select2/i18n/" . (isset($context["_select2_locale"]) ? $context["_select2_locale"] : $this->getContext($context, "_select2_locale"))) . ".js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$(function() {
    // Select2 widget is only enabled for the <select> elements which
    // explicitly ask for it
    \$('#main').find('form select[data-widget=\"select2\"]').select2({
        theme: 'bootstrap',
        language: '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["_select2_locale"]) ? $context["_select2_locale"] : $this->getContext($context, "_select2_locale")), "html", null, true);
        echo "'
    });
});
</script>
";
        
        $__internal_253965319a88d159761b368aab8727e92001519bfd4ec52c7432279745c5274e->leave($__internal_253965319a88d159761b368aab8727e92001519bfd4ec52c7432279745c5274e_prof);

        
        $__internal_b705be2932d1e8929c7c67b6920354ce663e16c995f1b4f7a0bd6c8a4c8abd33->leave($__internal_b705be2932d1e8929c7c67b6920354ce663e16c995f1b4f7a0bd6c8a4c8abd33_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_select2_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  36 => 8,  33 => 7,  31 => 5,  30 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _select2_locales = ['ar', 'az', 'bg', 'ca', 'cs', 'da', 'de', 'el', 'en', 'es', 'et', 'eu', 'fa', 'fi', 'fr', 'gl', 'he', 'hi', 'hr', 'hu', 'id', 'is', 'it', 'ja', 'km', 'ko', 'lt', 'lv', 'mk', 'ms', 'nb', 'nl', 'pl', 'pt-BR', 'pt', 'ro', 'ru', 'sk', 'sr-Cyrl', 'sr', 'sv', 'th', 'tr', 'uk', 'vi', 'zh-CN', 'zh-TW'] %}
{% set _app_language = app.request.locale|split('-')|first|split('_')|first %}
{% set _select2_locale = app.request.locale in _select2_locales
    ? app.request.locale
    : _app_language in _select2_locales ? _app_language : 'en'
%}

<script src=\"{{ asset('bundles/easyadmin/javascript/select2/i18n/' ~ _select2_locale ~ '.js') }}\"></script>
<script type=\"text/javascript\">
\$(function() {
    // Select2 widget is only enabled for the <select> elements which
    // explicitly ask for it
    \$('#main').find('form select[data-widget=\"select2\"]').select2({
        theme: 'bootstrap',
        language: '{{ _select2_locale }}'
    });
});
</script>
", "EasyAdminBundle:default/includes:_select2_widget.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\includes\\_select2_widget.html.twig");
    }
}
