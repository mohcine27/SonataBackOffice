<?php

/* AppBundle:Resetting:request.html.twig */
class __TwigTemplate_464c576b3ef2a348fe884853710460601fd5f5ebd2bf629925fabf1f1fab8fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_168ea64fba6ccc1d0b763fe77461665ca38f4ea4ad808570016c493edbac595b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168ea64fba6ccc1d0b763fe77461665ca38f4ea4ad808570016c493edbac595b->enter($__internal_168ea64fba6ccc1d0b763fe77461665ca38f4ea4ad808570016c493edbac595b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:request.html.twig"));

        $__internal_770eae583e5ca5fa8cf03f7536a64960796933958023b5b107c03c385ceda0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770eae583e5ca5fa8cf03f7536a64960796933958023b5b107c03c385ceda0dd->enter($__internal_770eae583e5ca5fa8cf03f7536a64960796933958023b5b107c03c385ceda0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_168ea64fba6ccc1d0b763fe77461665ca38f4ea4ad808570016c493edbac595b->leave($__internal_168ea64fba6ccc1d0b763fe77461665ca38f4ea4ad808570016c493edbac595b_prof);

        
        $__internal_770eae583e5ca5fa8cf03f7536a64960796933958023b5b107c03c385ceda0dd->leave($__internal_770eae583e5ca5fa8cf03f7536a64960796933958023b5b107c03c385ceda0dd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_406c1a12336f04c7487cc1daa852ec2e01a5049361323e0f2dd6d42a5255287b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_406c1a12336f04c7487cc1daa852ec2e01a5049361323e0f2dd6d42a5255287b->enter($__internal_406c1a12336f04c7487cc1daa852ec2e01a5049361323e0f2dd6d42a5255287b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f1e6eb883f552a298fa7a78133766864c963fa30f2875359addbc4554c8b0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1e6eb883f552a298fa7a78133766864c963fa30f2875359addbc4554c8b0a9->enter($__internal_4f1e6eb883f552a298fa7a78133766864c963fa30f2875359addbc4554c8b0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 m8 offset-m2\">
\t\t\t\t<h4 class=\"card-panel teal lighten-2 white-head\">Modifier mot de passe</h4>
\t\t\t</div>
\t\t</div>
\t";
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 13
        echo "
";
        
        $__internal_4f1e6eb883f552a298fa7a78133766864c963fa30f2875359addbc4554c8b0a9->leave($__internal_4f1e6eb883f552a298fa7a78133766864c963fa30f2875359addbc4554c8b0a9_prof);

        
        $__internal_406c1a12336f04c7487cc1daa852ec2e01a5049361323e0f2dd6d42a5255287b->leave($__internal_406c1a12336f04c7487cc1daa852ec2e01a5049361323e0f2dd6d42a5255287b_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_048f06e35f12fd8d8e8323497716c4e825e4c8dfd43cea53d32a4f64766e46bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048f06e35f12fd8d8e8323497716c4e825e4c8dfd43cea53d32a4f64766e46bd->enter($__internal_048f06e35f12fd8d8e8323497716c4e825e4c8dfd43cea53d32a4f64766e46bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_540a98a6cd6a00a263947ff5ccd479b42cf581a1e14aff8ad70724ca3902f48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540a98a6cd6a00a263947ff5ccd479b42cf581a1e14aff8ad70724ca3902f48f->enter($__internal_540a98a6cd6a00a263947ff5ccd479b42cf581a1e14aff8ad70724ca3902f48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "\t\t<div class=\"row\">
\t\t\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "AppBundle:Resetting:request.html.twig", 10)->display($context);
        // line 11
        echo "\t\t <div class=\"col s12 m8 offset-m2\">\t 
\t";
        
        $__internal_540a98a6cd6a00a263947ff5ccd479b42cf581a1e14aff8ad70724ca3902f48f->leave($__internal_540a98a6cd6a00a263947ff5ccd479b42cf581a1e14aff8ad70724ca3902f48f_prof);

        
        $__internal_048f06e35f12fd8d8e8323497716c4e825e4c8dfd43cea53d32a4f64766e46bd->leave($__internal_048f06e35f12fd8d8e8323497716c4e825e4c8dfd43cea53d32a4f64766e46bd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 11,  82 => 10,  79 => 9,  70 => 8,  59 => 13,  57 => 8,  50 => 3,  41 => 2,  11 => 1,);
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
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12 m8 offset-m2\">
\t\t\t\t<h4 class=\"card-panel teal lighten-2 white-head\">Modifier mot de passe</h4>
\t\t\t</div>
\t\t</div>
\t{% block fos_user_content %}
\t\t<div class=\"row\">
\t\t\t{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
\t\t <div class=\"col s12 m8 offset-m2\">\t 
\t{% endblock fos_user_content %}

{% endblock body %}", "AppBundle:Resetting:request.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\src\\AppBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
