<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_d647728c6e443c2fea55fdb4a6c270c9db19dda024d37dc38ceb226e0a53a819 extends Twig_Template
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
        $__internal_6db533f7bb0e44486010f3bf4f649ebbea749f5c84706bff789c8fe035dc621e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db533f7bb0e44486010f3bf4f649ebbea749f5c84706bff789c8fe035dc621e->enter($__internal_6db533f7bb0e44486010f3bf4f649ebbea749f5c84706bff789c8fe035dc621e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_89610e546fd0d8add568b1a45033a71bb57ad36cc43583f15290167f7153cb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89610e546fd0d8add568b1a45033a71bb57ad36cc43583f15290167f7153cb36->enter($__internal_89610e546fd0d8add568b1a45033a71bb57ad36cc43583f15290167f7153cb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_6db533f7bb0e44486010f3bf4f649ebbea749f5c84706bff789c8fe035dc621e->leave($__internal_6db533f7bb0e44486010f3bf4f649ebbea749f5c84706bff789c8fe035dc621e_prof);

        
        $__internal_89610e546fd0d8add568b1a45033a71bb57ad36cc43583f15290167f7153cb36->leave($__internal_89610e546fd0d8add568b1a45033a71bb57ad36cc43583f15290167f7153cb36_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_time.html.twig", "D:\\wamp64\\www\\SiteSymfony\\SonataBackOffice\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_time.html.twig");
    }
}
