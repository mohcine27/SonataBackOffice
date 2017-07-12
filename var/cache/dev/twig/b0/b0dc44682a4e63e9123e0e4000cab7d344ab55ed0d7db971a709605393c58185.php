<?php

/* AppBundle:Profile:edit.html.twig */
class __TwigTemplate_e7ab67334a7e989796af2b18969c4a22f94b1debc5c25a70e2b3534ddc794c7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Profile:edit.html.twig", 1);
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
        $__internal_1c7f3cac171df7d79cb568852a933b850ce2f2402a8bc6f9adea45640687186f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7f3cac171df7d79cb568852a933b850ce2f2402a8bc6f9adea45640687186f->enter($__internal_1c7f3cac171df7d79cb568852a933b850ce2f2402a8bc6f9adea45640687186f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Profile:edit.html.twig"));

        $__internal_13140ccba7c0a3913f3027edd44e368eba72d32dfa93a459fe57deb5bb6aa21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13140ccba7c0a3913f3027edd44e368eba72d32dfa93a459fe57deb5bb6aa21d->enter($__internal_13140ccba7c0a3913f3027edd44e368eba72d32dfa93a459fe57deb5bb6aa21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c7f3cac171df7d79cb568852a933b850ce2f2402a8bc6f9adea45640687186f->leave($__internal_1c7f3cac171df7d79cb568852a933b850ce2f2402a8bc6f9adea45640687186f_prof);

        
        $__internal_13140ccba7c0a3913f3027edd44e368eba72d32dfa93a459fe57deb5bb6aa21d->leave($__internal_13140ccba7c0a3913f3027edd44e368eba72d32dfa93a459fe57deb5bb6aa21d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cb53d0445f80ad90ed6b3d4cb68abee11a7d39d20c74cfd3980c98010b8c4ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb53d0445f80ad90ed6b3d4cb68abee11a7d39d20c74cfd3980c98010b8c4ca->enter($__internal_5cb53d0445f80ad90ed6b3d4cb68abee11a7d39d20c74cfd3980c98010b8c4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0425975a71bdd7a51b1350a86f6f5171a8128cdc3e1ead5cd70f70eab716db56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0425975a71bdd7a51b1350a86f6f5171a8128cdc3e1ead5cd70f70eab716db56->enter($__internal_0425975a71bdd7a51b1350a86f6f5171a8128cdc3e1ead5cd70f70eab716db56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
            <h4 class=\"card-panel teal lighten-2 white-head\">Modifier votre profile</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
\t\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "AppBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
    </div>
";
        
        $__internal_0425975a71bdd7a51b1350a86f6f5171a8128cdc3e1ead5cd70f70eab716db56->leave($__internal_0425975a71bdd7a51b1350a86f6f5171a8128cdc3e1ead5cd70f70eab716db56_prof);

        
        $__internal_5cb53d0445f80ad90ed6b3d4cb68abee11a7d39d20c74cfd3980c98010b8c4ca->leave($__internal_5cb53d0445f80ad90ed6b3d4cb68abee11a7d39d20c74cfd3980c98010b8c4ca_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Profile:edit.html.twig";
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
            <h4 class=\"card-panel teal lighten-2 white-head\">Modifier votre profile</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col s12 m8 offset-m2\">
\t\t{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
\t\t</div>
    </div>
{% endblock body %}
", "AppBundle:Profile:edit.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
