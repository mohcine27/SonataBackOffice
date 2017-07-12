<?php

/* AppBundle:Security:login.html.twig */
class __TwigTemplate_203709e43c8541ba59e0f35185f3cfdcd903697f3f3ad539ad73a6c43b203b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Security:login.html.twig", 2);
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
        $__internal_3ada830c4135e6d9c48fca4b0cc8a837293b855c86c40d517a796d2dc1441527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ada830c4135e6d9c48fca4b0cc8a837293b855c86c40d517a796d2dc1441527->enter($__internal_3ada830c4135e6d9c48fca4b0cc8a837293b855c86c40d517a796d2dc1441527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $__internal_18805079aa285182c181690054bb91367ed43d50a6ead815df3c6adec4f658eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18805079aa285182c181690054bb91367ed43d50a6ead815df3c6adec4f658eb->enter($__internal_18805079aa285182c181690054bb91367ed43d50a6ead815df3c6adec4f658eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ada830c4135e6d9c48fca4b0cc8a837293b855c86c40d517a796d2dc1441527->leave($__internal_3ada830c4135e6d9c48fca4b0cc8a837293b855c86c40d517a796d2dc1441527_prof);

        
        $__internal_18805079aa285182c181690054bb91367ed43d50a6ead815df3c6adec4f658eb->leave($__internal_18805079aa285182c181690054bb91367ed43d50a6ead815df3c6adec4f658eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70e36a346c0deb017b30832657315245e6c941ead7f9f7b3caccb12573bfa024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e36a346c0deb017b30832657315245e6c941ead7f9f7b3caccb12573bfa024->enter($__internal_70e36a346c0deb017b30832657315245e6c941ead7f9f7b3caccb12573bfa024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af4d3799489538cec65688d4d6842f883113aa24628f4a475beb353c978958bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4d3799489538cec65688d4d6842f883113aa24628f4a475beb353c978958bf->enter($__internal_af4d3799489538cec65688d4d6842f883113aa24628f4a475beb353c978958bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h2>Se connecter</h2>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "             <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "        <div class=\"col s12 m8 offset-m2\">
            <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-horizontal\" >
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

";
        // line 18
        echo "                <div class=\"form-group\">
                        <label for=\"username\" class=\"col-sm-2 control-label\">Login/Email</label>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t\t\t</div>
                </div>
\t\t\t\t
                <div class=\"form-group\">
                        <label for=\"password\" class=\"col-sm-2 control-label\">Mot de passe</label>
\t\t\t\t\t<div class=\"col-sm-4\">
                        <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" />
                    </div>
                </div>
\t\t\t\t
                <div class=\"form-group\">
\t\t\t\t\t<label for=\"remember_me\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>\t\t\t\t\t                 
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t <div class=\"reset-wrap\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"\">Mot de passe oublié?</a></div>                                       
                </div>\t\t\t\t    
\t\t\t\t
                <div class=\"form-group\">
\t\t\t\t\t<button class=\"btn btn-primary\" id=\"_submit\" type=\"submit\" name=\"_submit\">
                      ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
                      ";
        // line 42
        echo "                    </button>   
\t\t\t\t
                  </div>
            </form>
        </div>
    </div>
";
        
        $__internal_af4d3799489538cec65688d4d6842f883113aa24628f4a475beb353c978958bf->leave($__internal_af4d3799489538cec65688d4d6842f883113aa24628f4a475beb353c978958bf_prof);

        
        $__internal_70e36a346c0deb017b30832657315245e6c941ead7f9f7b3caccb12573bfa024->leave($__internal_70e36a346c0deb017b30832657315245e6c941ead7f9f7b3caccb12573bfa024_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  110 => 40,  102 => 35,  97 => 33,  82 => 21,  77 => 18,  72 => 15,  68 => 14,  65 => 13,  59 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h2>Se connecter</h2>
        </div>
    </div>
    <div class=\"row\">
        {% if error %}
             <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
        {% endif %}
        <div class=\"col s12 m8 offset-m2\">
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"form-horizontal\" >
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

{# j'ai enleve ça {{ 'security.login.password'|trans }} #}
                <div class=\"form-group\">
                        <label for=\"username\" class=\"col-sm-2 control-label\">Login/Email</label>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
\t\t\t\t\t\t</div>
                </div>
\t\t\t\t
                <div class=\"form-group\">
                        <label for=\"password\" class=\"col-sm-2 control-label\">Mot de passe</label>
\t\t\t\t\t<div class=\"col-sm-4\">
                        <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" />
                    </div>
                </div>
\t\t\t\t
                <div class=\"form-group\">
\t\t\t\t\t<label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>\t\t\t\t\t                 
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t <div class=\"reset-wrap\"><a href=\"{{ path('fos_user_resetting_request') }}\" class=\"\">Mot de passe oublié?</a></div>                                       
                </div>\t\t\t\t    
\t\t\t\t
                <div class=\"form-group\">
\t\t\t\t\t<button class=\"btn btn-primary\" id=\"_submit\" type=\"submit\" name=\"_submit\">
                      {{ 'security.login.submit'|trans }}
                      {# <i class=\"material-icons\">send</i> #}
                    </button>   
\t\t\t\t
                  </div>
            </form>
        </div>
    </div>
{% endblock body %}", "AppBundle:Security:login.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
